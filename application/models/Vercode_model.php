<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');