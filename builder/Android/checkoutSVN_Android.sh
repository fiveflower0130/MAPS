#!/bin/bas

. /home/foxconn/.maps.config

VERISON=$1
SVN_PROJECT=android-webview-gcm-app
PROJECT=NotifyTemplate

NOW="$(date +'%Y-%m-%d-%H-%M')"

PARAMETER_NUM=$#
if [ "${PARAMETER_NUM}" -lt 1 ]; then
echo "Parameter number error , number is ${PARAMETER_NUM}"
exit 10
fi

if [ $VERISON = "trunk" ]; then
URL=http://$SVN_SERVER_IP/svn/MAPs_Android/trunk/source/$SVN_PROJECT/
else
URL=http://$SVN_SERVER_IP/svn/MAPs_Android/tags/$VERISON/source/$SVN_PROJECT/
fi

#只保留一份
rm -rf $SVN_BACKUP_DIR/*
mkdir -p $SVN_BACKUP_DIR/$NOW


echo "### svn_checkout Android Source ###"
mv $MAPS_ANDROID_DIR/$PROJECT $SVN_BACKUP_DIR/$NOW
svn checkout $URL $MAPS_ANDROID_DIR/$PROJECT



echo "### Change Permission ###"

sudo chown -R foxconn:foxconn $MAPS_ANDROID_DIR/$PROJECT
sudo chmod 777 -R $MAPS_ANDROID_DIR/$PROJECT


