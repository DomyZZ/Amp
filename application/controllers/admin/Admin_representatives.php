<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');