#!/usr/bin/env php
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('6A32CFDA463D24E6AAQAAAAXAAAABHAAAACABAAAAAAAAAD/xzKpy6CO8iEdtnQBXdJAY0jMpUUAKJJ6bLtOXKZHafQKR2Q3pufUb9JxTpomQ4OXaJKKg7+IdCGBGFcLAzEoSwSu0xfHIXZBhyuv8jWqBTYRxqsAgbCytTHTjxpX/hwIFMeL7tx3MBEJ/xw0y9hIIjgAAAAQAwAALIiGa9///x5kNxO5rMrjdU8cjWNZlBXKFv/nIQ0seNC6VsTkow0WbKeqdEM1sZiTgYV32gwIMO7Foz/2suF+8pDkl5V2TDf7gEcvKFHpj102chRe/36ZeD7iz5oCzoeTdfIer1wv5hlPzlYTWCZZEH1GwTh4zORnGvhCwlkuEPNeqVrbEF0e53aRdw/T9QI56XqzO78GKBphTBvG/en2JIdcjb7cVFPk6zGGm6hVsbVYa101ll3BPLZRq5pQ2UF/DRbm2efVpRDhXS0glElEY4WgMcCA9GEKDPH46PxUqT0z9h57TK8P9Q5RCtsxO87KcKyFrmufLyRW03TLu93Jf9/b1x4Oz4YtjGZlB0uaMx4FQbDR8v1m04tkcS6iO/KEgJsO0eF8HBZ+WWuX4dhDpukJXWeN3qW1jn8E1YulfTNExzZXJmib0zOJr/wdETuFIir90PtTdFcEOo3c8n29xfKqGdpxs6sonBxz4p6E7Q1nFbtq1a70Z6M1PKEo0hmEeKchrNW+1lMX8uh8qOuX9evWGspk+xIc0kndy2CN8MtdnEdG4r33xBeNUrcNG3ifqIs6sbZLwO0xlINTx1IaHhJ1fi2H2xf/qEctAEye+/t+XhViB5MoNw6MeuL5rNkCz5tUjGX/dHKTJbv33fc3WaVJ1H35e6AoE1tmZ/ox38r30QjQmtqCNAPf9mr2abwzt2gTwZqn/HreqhwcfNSYWjM0N//Xy4l5Q5XWskmPYNM2/FPbGlHNDVpn8BusLNbp6Fq79Ku3E5r462fdPXrSkDZkVaCvBhXUgsN8WL2Cxcp+FSO+5ZFZdC28jIivBvW/Zd+iRKgAdToY96ui9zCZbMUdWiO9mRHqstms88iza7sO5tdoCWut7hod7gFNLca3Q8KiwbNRJ8kz7B38yNU0Nck5KxnZZzJ4WXRYnEU2eOWrerH9hq071Ts3yWtuf97tHf1A3DpMIERaSF/U0F1/vQuGysq+OdLe40Q3QTAwjkfhy045/2HrWK88WfvpRmp1oIWvp9OKggTqAHfgYLV7zwAAAAA=');
