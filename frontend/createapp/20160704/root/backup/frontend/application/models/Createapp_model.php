<?php
class Createapp_model extends CI_Model {

    public function __construct()
    {
        //$this->load->database();
    }
	
     public function checkprovision($appname,$pvserver)
    {
        $shellScriptCommand = "bash ".$this->config->item('script_path')."ProvisionBindingAppName.sh \"".$appname."\" \"" . $pvserver."\">&1 ";
        $output = exec($shellScriptCommand);
        return $output;
    }
	
	public function converttojpeg($picfolder,$picpath)
	{
		$str_exec = "java -jar \"".$_SERVER['DOCUMENT_ROOT'].$this->config->item('convertimage_path')."ConvertToJPEG.jar\" \"".$picfolder."\\".$picpath."\"";
        $output=exec($str_exec);
        return $output;
	}
	
	public function checkurl(array $data)
    {
       /*  $client = new SoapClient($data["serviceUrl"]);		
        $result = $client -> getAppIdByIndexUrl(array('indexUrl' => $data["indexUrl"]));
        $json = json_decode($result->return); 
        return $json; */
		
        $url = $data["serviceUrl"]; 
        $post_data = array('indexUrl' => $data["indexUrl"]);
		
        $outputs = $this->curl->simple_post($url, $post_data);
		
		
		$output =explode("</ns:return>",$outputs);
        $json = explode("<ns:return>",$output[0]); 
        return $json[1];	
    }

    public function appRegister(array $data)
    {
      $url = $data["serviceUrl"]. '?appId='.$data["provision_app_id"].'&appName='. rawurlencode($data["app_name"]).'&appOS='.$data["app_os"].'&syncUrl='.$data["sync_url"].'&appToken='.$data["appToken"].'&uuidType='. rawurlencode($data["uuid_type"]).'&url='.$data["url"];
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_POST, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$outputs = curl_exec($ch);
		  
		$output =explode("</ns:return>",$outputs);
        $json = explode("<ns:return>",$output[0]); 
        return $json[1];	
    }

    public function jobstartprovision($provision_app_id)
    {
        $shellScriptCommand = "bash ".$this->config->item('script_path')."JobStartPreparation.sh ".$provision_app_id." ";
        $output = exec( $shellScriptCommand);
        return $output;
    }

    public function buildapp(array $data)
    {
        $shellScriptCommand = "bash ".$this->config->item('script_path')."newRootScript.sh \"".$data["app_name"]. "\" \"" .$data["url"]. "\" \"" .$data["uuid_type"]. "\" \"" .$data["appToken"]. "\" \"" .$data["app_os"]. "\" \"" .$data["provision_app_id"]. "\" \"" .$data["custompushenable"]."\"";
        //$output = shell_exec ( $shellScriptCommand." 2>&1; echo $?" );
        //$output = exec ($shellScriptCommand." 2>&1; echo $?" );
		  //$output = exec ($shellScriptCommand);
		  $output = exec ( $shellScriptCommand." 2>&1; echo $?" );
        return $output;
    }
 
}