<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');