<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');