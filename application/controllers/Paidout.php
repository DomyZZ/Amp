<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
