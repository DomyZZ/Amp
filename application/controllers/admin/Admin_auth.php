<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');