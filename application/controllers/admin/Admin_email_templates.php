<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
