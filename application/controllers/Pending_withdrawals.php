<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');