<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
