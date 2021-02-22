#!/bin/sh

# CheckFreeDisk.sh
# 檢查硬碟空間是否足夠
#
# Created by rex on 2015/10/27.
# Copyright 2015 OCTO. All rights reserved.


PROJECT_PATH="$HOME/maps_nfs"
COMMON_SHELLSCRIPT_PATH="$PROJECT_PATH/job_manager/shell_script"
LOG_PATH="/var/tmp/"

DISK_SPACE_FLAG=0    #
DISK_MINIUM_FLAG=1   #硬碟空間臨界值參數, 單位為GB

#df -hl | awk '/^\/dev\/sda/ { sum+=$4 } END { print sum }'是用來取硬碟空間的值

if [ "$(uname)" = "Darwin" ]; then
    DISK_SPACE_FLAG=`df -hl | awk '/^\/dev\/disk/ { sum+=$4 } END { print sum }'`
    DISK_SPACE_FLAG=${DISK_SPACE_FLAG%.*}
elif [ "$(expr substr $(uname -s) 1 5)" = "Linux" ]; then
    DISK_SPACE_FLAG=`df -hl | awk '/^\/dev\/sda/ { sum+=$4 } END { print sum }'`
    DISK_SPACE_FLAG=${DISK_SPACE_FLAG%.*}
elif [ "$(expr substr $(uname -s) 1 10)" = "MINGW32_NT" ]; then
    sh ${COMMON_SHELLSCRIPT_PATH}/SaveErrorLog.sh CheckFreeDisk "No support Windows OS"
    exit 1
fi

# -lt是小於的意思
if [ $DISK_SPACE_FLAG -lt $DISK_MINIUM_FLAG ]; then
    find $LOG_PATH -mtime +15 -exec rm -rf {} \;
    sh ${COMMON_SHELLSCRIPT_PATH}/SaveErrorLog.sh CheckFreeDisk "No enough HardDish(lower than ${DISK_MINIUM_FLAG}GB)"
	echo "No enough HardDish"
	exit 1
else
#	echo "$DISKSPACE_FLAG"
	echo "enough"
	exit 0
fi




