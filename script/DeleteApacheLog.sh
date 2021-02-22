#!/bin/bas
#
# SaveErrorLog.sh
# 寫入錯誤訊息至/var/tmp目錄的MAPs_Error.txt
#
#
# Created by Rex on 2015/10/27.
# 輸入參數有SOURCE_SCRIPT_NAME, ERROR_DESCRIPTION

use strict;
use warnings;
no warnings 'numeric';   # disable Argument "XXX" isn't numeric warning
 
my $dir           = "/var/log/apache2/";   # apache log 目錄
my $access_substr = "access-";   # access log 檔名開始字串
my $error_substr  = "error-";   # error log 檔名開始字串
my $expire_log    = "10w";   # 保留記錄檔時間, 預設以日為單位, 10w 代表 10 星期
 
 
### convert expire log weeks to days
$expire_log = lc($expire_log);   # support uppercase and lowercase characters
if (substr($expire_log, -1) eq "w") { #substr 取得部分字串
	$expire_log = int($expire_log) * 7;
} else {
	$expire_log = int($expire_log);
}
 
 
### open directory and delete old logs
opendir (my $fp, $dir) or die $!;
while (my $file = readdir($fp)) {
	if ((index($file, $access_substr) != -1 or index($file, $error_substr) != -1) && -M $dir.$file > $expire_log) {
		unlink $dir.$file;
	}
}
