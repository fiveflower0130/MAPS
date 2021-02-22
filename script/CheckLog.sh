#!/bin/bas
#
# SaveErrorLog.sh
# 寫入錯誤訊息至/var/tmp目錄的MAPs_Error.txt
#
#
# Created by Rex on 2015/10/27.
# 輸入參數有SOURCE_SCRIPT_NAME, ERROR_DESCRIPTION

#number=4.57
#echo "${number%.*}"
DISK_SPACE_FLAG=0
DISK_MEDIUM_FLAG=921600
DISK_MINIUM_FLAG=1048576
LOG_PATH="/var/tmp/"
#DATE=`date +%y-%m-%d`

if [ "$(uname)" = "Darwin" ]; then
    #DISK_SPACE_FLAG=`df -hl | awk '/^\/dev\/disk/ { sum+=$4 } END { print sum }'`
    DISK_SPACE_FLAG=`du -s $LOG_PATH | awk '{print $1}'`
    #DISK_SPACE_FLAG=${DISK_SPACE_FLAG%.*}
elif [ "$(expr substr $(uname -s) 1 5)" = "Linux" ]; then
    #DISK_SPACE_FLAG=`df -hl | awk '/^\/dev\/sda/ { sum+=$4 } END { print sum }'`
    DISK_SPACE_FLAG=`du -s $LOG_PATH | awk '{print $1}'`
    #DISK_SPACE_FLAG=${DISK_SPACE_FLAG%.*}
fi

#進行比對
#如果超過1G會砍掉45天前的LOG
if [ $DISK_SPACE_FLAG -gt $DISK_MINIUM_FLAG ]; then
   #find $LOG_PATH -type f -name "*.log" -print
   find $LOG_PATH*.log -mtime +45 -exec rm -rf {} \; 
   #echo $DISK_SPACE_FLAG
   #echo $DATE
   echo "clear log"
   exit 1
#如果超過0.9G會砍60天前的log
elif [ $DISK_SPACE_FLAG -gt $DISK_MEDIUM_FLAG ]; then
   #find $LOG_PATH -type f -name "*.log" -print
   find $LOG_PATH*.log -mtime +60 -exec rm -rf {} \; 
   #echo $DISK_SPACE_FLAG
   #echo $DATE
   echo "wraning"
   exit 1
else
   echo $DISK_SPACE_FLAG
   #echo $DATE
   echo "enough"
   exit 0
fi
