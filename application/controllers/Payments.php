<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
