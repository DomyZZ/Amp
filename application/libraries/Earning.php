<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
