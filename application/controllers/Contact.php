<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
