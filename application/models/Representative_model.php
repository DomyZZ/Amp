<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');