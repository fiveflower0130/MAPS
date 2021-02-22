<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createapp extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        //http://example.com/[controller-class]/[controller-method]/[arguments]
        parent::__construct();
        $this->load->model('createapp_model');
        //$this->load->helper('url_helper');
    }

    public function index()
    {
        //$this->load->view('welcome_message');
        $this->load->view('index');
    }

	public function convertImage($imagefolder,$imagename)
	{
		$imagepath=$_SERVER['DOCUMENT_ROOT'].$this->config->item('icon_path').$imagefolder;

		$output=$this->createapp_model->converttojpeg($imagepath,$imagename);

		echo $output;
	}

    public function checkindexurl()
    {
		try
		{
			$bdata = array(
				  "serviceUrl" =>$this->config->item('MAPsService')."getAppIdByIndexUrl",
				  "indexUrl" => $_POST["index_url"]
				  );

			$callservicecheckurlResult=$this->createapp_model->checkurl($bdata);
			$json = json_decode($callservicecheckurlResult);

			$data =  $json->{"data"};
			$msgcode =  $json->{"msgCode"};
			$appId=$json->{"appId"};
			if($msgcode!=0)
			{
			   echo $msgcode;
			   return;
			};

			echo $appId;
		}
		catch(Exception $e)
		{
			echo 'Caught exception',  $e->getMessage(), "\n";
		}
    }

    public function create()
    {
        //===========================================================================================
        //1.
        //===========================================================================================
            $customPushEnable = isset($_POST['customPush']);
          //$customPushEnable = $this->input->post('customPush');
          $uuid_type = $this->input->post('Uuid_Type');

        if ($customPushEnable != '1') {
            $customPushEnable = 'NO';
            $uuid_type='NONE';
            //$_POST["Uuid_Type"] = "NONE";
        }
        else
        {
	        $customPushEnable = 'YES';

            if($uuid_type=="")
            {
                $uuid_type='NONE';
            }

			//if($_POST["Uuid_Type"]=="")
			//{
			//	$_POST["Uuid_Type"] = "NONE";
			//}
		}
         
	
		//if($_POST["Uuid_Type"] == "NONE")
        if($uuid_type== "NONE")
		{
			if($_FILES["voiceUpload"]["tmp_name"]=="")
			{
				$customPushEnable = 'NO';
			}
		}
		
		$appToken=md5(uniqid(rand(), true));
		//echo $apptoken2;
		//return;
		
		
        //$appToken = bin2hex(mcrypt_create_iv(16, MCRYPT_DEV_RANDOM));

        $provision_app_id="";
        //$app_name =  $_POST['App_Name'];
        $app_name = $this->input->post('App_Name');
	    $app_os = "Both";
        //$sync_url = $_POST['App_SyncURL'];
        $sync_url = $this->input->post('App_SyncURL');
        //$uuid_type= $_POST['Uuid_Type'];

        //$url=  $_POST['index_URL'];
        $url = $this->input->post('index_URL');

        //$provision_app_id="com_gds_rd_GDSRemote_v99";
		


        if($app_name =="")
        {
            $this->redirectErrorPage('999');
            return;
        }
        //===========================================================================================
        //2.
        //===========================================================================================
		$checkprovisionResult=$this->createapp_model->checkprovision($app_name,gethostbyname("maps_database"));
        //$checkprovisionResult=$this->createapp_model->checkprovision($app_name,$this->config->item('pvserver'));
		//echo '111'.$checkprovisionResult;
        if($checkprovisionResult==193)//provision full
        {
            $this->redirectErrorPage($checkprovisionResult);
            //echo $this->config->item('errorpath').$checkprovisionResult;
            //echo "call errorPage(provision)";
            return;
        };

        if($checkprovisionResult=='full')//provision full
        {
            $checkprovisionResult='193';
            $this->redirectErrorPage($checkprovisionResult);
            //echo $this->config->item('errorpath').$checkprovisionResult;
            //echo "call errorPage(provision)";
            return;
        };

        $provision_app_id=$checkprovisionResult; //get provision id
        //$provision_app_id="com_gds_rd_GDSRemote_v99";

        //===========================================================================================
        //5.call Script jobstartprovision
        //===========================================================================================
        $jobstartprovisionResult=$this->createapp_model->jobstartprovision($provision_app_id);
        //if($jobstartprovisionResult!=0)
        //{
        //    $this->redirectErrorPage($jobstartprovisionResult);
        //echo $this->config->item('errorpath').$jobstartprovisionResult;
        //    //echo "call errorPage(jobstartprovision error)";
        //    return;
        //};

        //===========================================================================================
        //6.check image dir exist
        //===========================================================================================
        if (file_exists($this->config->item('upload_path').$provision_app_id))
        {
            $this->redirectErrorPage('801');
            //echo $this->config->item('errorpath').'801';
            //echo "call errorPage(Image dir exists)";
            return;
        }

        //===========================================================================================
        //7.Image mkdir
        //===========================================================================================
        if(mkdir($this->config->item('upload_path').$provision_app_id,0777)==false)
        {
            $this->redirectErrorPage('803');
            //echo $this->config->item('errorpath').'803';
            //echo "call errorPage(Image mkdir)";
            return;
        }

        //===========================================================================================
        //8.Image upload
        //===========================================================================================
        $config['upload_path'] = $this->config->item('upload_path').$provision_app_id;
        $config['allowed_types'] = $this->config->item('allowed_types');
        $config['file_name']  = $provision_app_id;

		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload("iconUpload"))
		{
            $this->redirectErrorPage('805');
            //echo $this->config->item('errorpath').'805';
            //$error = array('error' => $this->upload->display_errors());
            //echo "call errorPage(Image upload) , ".$this->upload->display_errors();
            return;
		}

        $imgOriginalData = array('upload_data' => $this->upload->data());
		$filename=$imgOriginalData[ 'upload_data' ][ 'full_path' ];
		$filenewname=$imgOriginalData[ 'upload_data' ][ 'file_path' ].$imgOriginalData[ 'upload_data' ][ 'raw_name' ].'.jpg';
        rename($filename,$filenewname);
		
		//===========================================================================================
        //8.1 Conver Image
        //===========================================================================================

        if($customPushEnable=='YES')
        {
			if($_FILES["voiceUpload"]["tmp_name"]!="")
			{
				//===========================================================================================
				//9.check voice dir exist
				//===========================================================================================
				if (file_exists($this->config->item('voice_upload_path').$provision_app_id))
				{
					$this->redirectErrorPage('807');
					//echo $this->config->item('errorpath').'807';
					//echo "call errorPage(voice dir exists)";
					return;
				}

				//===========================================================================================
				//10.voice mkdir
				//===========================================================================================
				if(mkdir($this->config->item('voice_upload_path').$provision_app_id, 0777)==false)
				{
					$this->redirectErrorPage('809');
					//echo $this->config->item('errorpath').'809';
					//echo "call errorPage(voice mkdir)";
					return;
				}

				//===========================================================================================
				//11.voice upload
				//===========================================================================================
				$config['upload_path'] = $this->config->item('voice_upload_path').$provision_app_id;
				$config['allowed_types'] = $this->config->item('voice_allowed_types');
				$config['file_name']  = $provision_app_id;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if ( ! $this->upload->do_upload("voiceUpload"))
				{
					$this->redirectErrorPage('811');
					//echo $this->config->item('errorpath').'811';
					//$error = array('error' => $this->upload->display_errors());
					//echo "call errorPage(voice upload) , ".$this->upload->display_errors();
					return;
				}
			}
        }
        //$voiceOriginalData = array('upload_data' => $this->upload->data());

        //===========================================================================================
        //12.call Script newRootScript
        //===========================================================================================
        $builddata = array(
              "app_name" => $app_name, //$1 NEW_APPLICATION_NAME
              "url" => $url,           //$2 APP_HOME_PAGE
              "uuid_type" =>$uuid_type,//$3 UUID_TYPE
              "appToken" => $appToken, //$4 APP_TOKEN
              "app_os" => $app_os,     //$5 APP_OS
              "provision_app_id" =>$provision_app_id, //$6 PROVISION_APP_ID
              "custompushenable"=>$customPushEnable   //$7 CUSTOM_PUSH_ENABLE
              );

        $builddataResult=$this->createapp_model->buildapp($builddata);

		$datetime = date ("Y- m - d / H : i : s");
		log_message('error',"=======");
		log_message('error',$datetime);
		log_message('error',"=======");
		log_message('error',"profision:".$provision_app_id.";result:".$builddataResult);
		log_message('error',"=======");

        if($builddataResult!=0)
        {
            $this->redirectErrorPage($builddataResult);
            //echo $this->config->item('errorpath').$builddataResult;
            //echo "call errorPage(builddata)";
            return;
        };

		//===========================================================================================
        //3.call webservice Portal 2015/11/20 remove
        //===========================================================================================
     /*    $webserviceportal= $this->config->item('WebservicePortal');
        $callserviceportalResult=$this->createapp_model->getrealservice($webserviceportal);
        $serviceUrl =$callserviceportalResult->{"serviceUrl"};
        $getMapsManager = $callserviceportalResult->{"msgCode"};
        if($getMapsManager!=0)
        {
            $this->redirectErrorPage($getMapsManager);
            //echo $this->config->item('errorpath').$getMapsManager;
            //echo "call errorPage(webservice Portal)";
            return;
        }; */

        //===========================================================================================
        //4.call webservice Register
        //===========================================================================================
        $arraydata = array(
                      "serviceUrl" => $this->config->item('MAPsService')."appRegister",
                      "provision_app_id" =>$provision_app_id,
                      "app_name" => $app_name,
                      "app_os" => $app_os,
                      "sync_url" => $sync_url,
                      "appToken" => $appToken,
                      "uuid_type" =>$uuid_type,
                      "url" => $url
                      );
        $callserviceappregisterResult=$this->createapp_model->appRegister($arraydata);
		$json = json_decode($callserviceappregisterResult);
        //$data =  $json->{"Data"};
        $msgcode = $json->{"msgCode"};
        if($msgcode!=0)
        {
            $this->redirectErrorPage($msgcode);
            //echo $this->config->item('errorpath').$msgcode;
            //echo "call errorPage(webservice Register)".$msgcode;
            return;
        };

        //===========================================================================================
        //13.confirm result page
        //===========================================================================================
	    if (file_exists($this->config->item('result_page').$provision_app_id.'.php')==false)
        {
            $this->redirectErrorPage('813');
			//echo $this->config->item('result_page_path').$provision_app_id.'php';
            //echo "call errorPage(result page not exists)";
           return;
        }

        //===========================================================================================
        //14.Redirect result page
        //===========================================================================================
		$encodedata=base64_encode(base64_encode("id=".$provision_app_id."&os=".$app_os).substr(md5(rand()),0,8));
		header("Location: ".$this->config->item('result_page_path').$provision_app_id.".php?data=".$encodedata);
        //header("Location: ".$this->config->item('result_page_path').$provision_app_id.".php?id=".$provision_app_id."&os=".$app_os);
        //echo $this->config->item('result_page_path').$provision_app_id.".php?id=".$provision_app_id."&os=".$app_os;

        //echo 'Build Success....';
    }

    public function redirectErrorPage($errorcode)
    {
        $errorResult=$this->config->item($errorcode);
        if($errorResult==false)
        {
            $errorResult=$this->config->item('999');
        }
        $dstr = iconv( "big5","UTF-8", $errorResult);
        $json = json_decode($dstr);
        $page = $json->{"page"};
        $data['data'] = $json->{"data"};
        $this->load->view($page,$data);
    }

    public function test()
    {
		echo "12345";

		//echo dataEncode("12345");

		/* $provision_app_id="com_gds_rd_Augmented_Reality";

        if (file_exists($this->config->item('result_page').$provision_app_id.'.php')==false)
        {
           //$this->redirectErrorPage('813');
			echo $this->config->item('result_page').$provision_app_id.'.php';
        }
		else
		{
			echo "123";
		} */
    }
}
