<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('6A32CFDA4756B726AAQAAAAXAAAABHAAAACABAAAAAAAAAD/1pbPBc7+oG8gRfN7a3AUn/9tNjmtgp842c8/2tXCjwBjPjkmeiCLA872BpgxY1q9NszH+yPc2zbZav2LnoOMWrbzCGpmQ6YqWmrO5c3q3BcqziAtXpjySKxs0NK9tO61sPxDHKGpXNn5klQQbpXNqTgAAADoAwAAMRJYGoPismEDXFUclnWdeQiyAweD9viVjmgUK/IIT2NverfEYO70oRuZVzxwbCfumDjMjgAHjJPThT6Sf6UlGHIbRcTBGHfTFr74PregTP7dHwmKquqHo8xG1mLKZd4h17gcFy4Avd0fp22fWhvsPMjSlWhrvqlCYajRNrvh+ivhxoyCbJjgrCvqoAipXKlm7/er+diW32KPvsUqlJw5t1H18BB9ta+kEhb/UG7DoUpuc8si8V+XeBxC4PmwWkZl0M1KX2hcCqbUuuCS7Pzzg2JNRLiuIFmcMYAejKtLsiC80aeBJjRHRc7V6Ks7k1MNvoOl8Vz31DLWgZzuV1rK86W+A8WPTK6T4zCvE4hLN1+TdpgIPPSH+VEG8owMa447XmQvIQIodrg0VbkkQBz3ltuFZYnE42u5/VQNn0NsvgCUH+R2I7Z/V4/GZEm7eQDwt83idehF0rEmXT5OVWD6BuSZWspI2hkcy1ZHTinHbt3aqf5lrvW4sVIysjhwgFBaIjJwoFRDT8ALJlGBMvonc+g89vwLMasYya4+DHYKA+Px5+5AgbmrFYAopjpxbYjZHVtXi7J5ZbG+Lar2FP5FwpIfTUaYD+vKwVETeuT66CPbnpkMEhELDg9o9wIGq5Gdps0WOhwOF8OaIuWBN9al2RmCNprZJE3BmtCkJ3loKpP9O98KR5jef30Rf5RpvqlcZ0xXN8no3gJv3hYox9ZEyAxrErD0pIUilBGs9YvHZtFAE107w6Vh4fP1yQXFjPUJpidVoKXtVWVs9kqyHNedBx+50IHRi2n7PHfVwbwkZIw+qf6u4X7u4j/vsC6lfk+mtX0ooYLbEDYRBoAkh9yR/vxv40bqqIK9ObMpwmyyPQ0RmDEJhnBOA2VtOY7ubJ/3PIwDQRLDEIJItMZFWYgn234kjdcuMU73inp6h16/wmgP5Wh13a8P44xaBQYf1qVUcrc1ZeRmVGM0VEAnIaN8Mf3Po+6/+MA5LtLcKxs++Nu+1GRxAAW2Lqo6qvesixDpZ9jku3Hi/XWDYwHdisCVwiY4+2NKaynUTJBthUCsb8Rnwn8S2JTb3E7WSEf62pxfAnEm/aPnc0hdXu9oaAh1RiNoJM6XLuEQ0fGZ8rI+7c9qwi9WnSparsokI1pt+sZuy+04K4iOVEHA9lWsHlzV+VgKbX8sP/SFoeZqnBwMtiW10z6SJEW0ZWsMUMdDM9QWPDOmdyoOJFguV1JAi2JxKwuWMBYglWzwdvHQqSpVbgypXP5H+IJW7z9H+s00YP58D/Pt3/udYfl9tlX4r9o/1cecjjBqpCqa3y6tHWAk5mk2JtMIYuO64wAAAAA=');