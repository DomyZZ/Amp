<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');