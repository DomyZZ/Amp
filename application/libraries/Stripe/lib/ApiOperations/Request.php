<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');