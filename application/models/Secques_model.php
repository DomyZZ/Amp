<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('6A32CFDA4756B726AAQAAAAXAAAABHAAAACABAAAAAAAAAD/L/nGun0yMZ/oVe0oLt5/uGQj3MdlyhZOnBPaz0GwDzjri4DQ05hkwhRQMX4N/NkZvDtxNOG2pQ/BQwWFy9fsVzfeecPHhvZUOECqYFattbnaYaE+YCOTi35yRKbJQlmnJIlFYJY/zOqDrlGJtHW/XzgAAACYAgAAPCd5p9yF8PY/pQ3ZqJ3vU/pcbOrUGu7KUG6Q23HDF9gKZTGTknxDrE7456MP55GUAWPmtfCsUaBhubxctfTyH1fqkNulrmsO7Ea9+YtGG/FZBFtMYaJyy/54mhK1+lwLslXrZnFzl0mV4ZbYWWWEBeqf78JjmpS8xrdlOULEWpoS4AKyWaFDxjn/mbXAN4GVSxa9e29rrER7WKdpPpU6kfleMIuakEU02x8mPD4GQdkZ4Sbv5iFuTi7sT89TD42/wyBoQSG0dDVqqCpfkPBrtGpc63sVw79eQcI5weVhAD/JAXJY9Qxc8h73PmLZPEqAdA41u3BiU7+ROcT9htZWQXOCrxkVq3tGfK2aFgimJGu4TuY9Nx7EdoS2BQDp4nRBlNLJLo7d8SQSFZ8GD76W6mlMy7TC0s5nPIfbkvqbV4a4jtKFxlbXGDLFaQoqNQx6vA5JnASw82CQXySprj4bPELPSelIJNnudHHO+SObjE+9JAn2IWvV5uoz6m2ZYdz98iQvMxaaEYqukQ5Rg+7pdnz/+ukQFZN+zY+N5hDUSdXL7g0Y8I7SkdCTLnx/WuTMUMRgjCWzkbP/C8AAtns6DW6dboXT/dYvvDp5jieW4BzYyBHJQCXVxMn5Xh2GxXUbPDo6c+1zGBYyHt1FC95qEG8+U/LklH92CvtdnqOxr4/6uvzmAvOeEoqNwx7YK1nXzFqKYGhdDtIh7qrX0GFj6jm52EnBtcB4JbkPfCeHkewcK8ly9lepq+Cu7vLWaKxr8jqAFC+7Azi3TozAHqgQvRQ0gFXBpIazer2Dn2kKAbvaispAeLT9mikGIoO21Ik2uYXRULOw0FQSNMX+u+e6Q2j5RCBrIlxeXhswLDXNOmDdPqDxZ4hhkwAAAAA=');