<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
