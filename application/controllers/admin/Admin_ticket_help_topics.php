<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
