<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');