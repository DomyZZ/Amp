<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('6A32CFDA4756B726AAQAAAAXAAAABHAAAACABAAAAAAAAAD/tNMRIl7ocXATqKEj5UTtXfaudGoKJcotrrGdtOwWXUFp+SarPlRtpddRZepv3WX7fWaX1U5Qr8ksrxUiGl+cNxstYU1SiCXlrHnMrD+V/Aexjok66Q/R45W6QCYWRoExx2fRisoa/Ie5ESmLVlRGUDgAAABQBAAA2qDSCTdDeZ7ajkuB/ZrCxYyBtHX9sXsN87+NsUObcUbElvmANTFZbulgBHPRs0u5xcEb5C6yHuO1lQO7j+kV2A0PFImz9u7IaYF9eKI+ivsjc8NKY4WivRY4EB2ArwrV1gORaasQBvTwF/C2GNC5o/+xrCbxyIqmZB/cM3j4s1s+YIMIXXLiki/7to9Mgu9gpjlmAqurBQ7ZP/pTLgFWdlYGSlsg+jZRMbnsYSqyZ85rlT+1RSyT/xpI+oNrkSfK1OCInbpe8yVSXaoA3vV8qvGXdyQcPLe1SUAUG2VVzTIZYZi/aymjfXjQwfPjGr+aidpyKcknLHoJXk0OshY9b5RHt5fYpTlBbAdoYV02cWL9bTInWymolbq0IlQh3rXX3uEXlmE0FjS3j33S+MLR8yHZxWdNXG46E4AUYMZ3t/JhzUKYCqgJDQcsRNEvwlUICBXuFeI3rHKKCC0itgXTnAEpMLAaiMxtAy5oA4npCPLv6yD/mEdtzH3AysbcaaFOH8euOcUA4EbHTJm5dgJiksOzPoZ7+fkO/tqkj5XSO4oPAw72zt5AQ1vzI7LTqBrhVg5bKIv/8m+Ccc478BmF0NtNf8mZdIMeahIL1OWKYlLmqmz3UfjTJmFCjHLwkVOeXn6kqi481yGysDP+n0Vey/r2XgH6f3gLNVUn659ZjvJB+d5Wz0IawCIs88DKlSnx157/MRldin3vcdk04UIPbuTjtuXdQY0lhE5hqHfU/KQW+Wc03yy5/hfYmyi6sSory4h2X1v/QnjKn+jIA8ztosCTiM2bBc5kg5Pkbo7xpfrqTD9F9JtE03Dx2+8kuU3nKe3keCZCJdmEdAIev+uYFQQTzsAGwO/G3yaiQCP2mfCZ/q/WIrX6+2N4J37egXI1ZGiH5byplrpNlJZhlMCHorhnttGhzgWDxftNhvEcZzTLB8fGuTfTXj0KpWufdtQaSLGZlllbr9iCQMik7uq99Q+rLQvFmZf308SRFo7LsBmoBdrmRp7dMb0Jvfpc/aWoNBfreJGuxBlyDQWjwUsp4CyzNEYJ44ESKAQn8WIk5jpXIR+cZaWgzLaJg6v/QcARhP7JuOPC6gGtUNQaNAuWvktaCvkrJbxt//M+5x5Nw8OWB1ZSCriJJt/Hq10o0do1tBgOL2PTc43rXtchCjXoP66FVUSJC+DFpvCsKtEg8zWh6uDNJVuBdk4e6WchWlK5BljgI4n3Izkx+QV7js5N9sJPUYDQFS00aE+AD4Lp3PEgNZUTWPuOb8U6tdJDsV6xORVTSG7n3Q5m41DKpJryIbtyVrkIiAI9o0H0N7Ll0Z37/HRMO4gqCR0HGHbhOn9HNWAGKgMSEUWVl25b/Ne1PkQmuNdjtMFIOcC19QVGdDtvu8vVbHeyagSCX3mX1WZikGs7SBGIXwwQKRrkkhH1DlO74aJE+QHEoSAjaoxBDGRpw2QHgDR9zaqesDaKMLF2AAAAAA==');
