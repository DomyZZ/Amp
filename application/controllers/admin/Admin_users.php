<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');