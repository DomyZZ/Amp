<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('6A32CFDA4756B726AAQAAAAXAAAABHAAAACABAAAAAAAAAD/xCm9++YflSeA1cALYSxcAoP2Rp+jvcOXTHhpj1xZi4nOB/jRWPQGoLTDNQEvNgdEEwb3Nctpm5GCEeigAT+8M4bJqJ+XVdvMOhynqAA5sTCIk71eWXvqIF709101iArL/XJecU5Vrxwll9UvozcrZjgAAABQBAAA2Ab0kz7mHOcdgKH9C0oxrsqbO44PBDfiT5ih+LSEzyujfxsqQdFNHyz4s82BBha+rdCSwmJxiPe+aBMfCoDSMHbvSehQIwzB6pnBF/88arwR+pt67xOtZQPkqW3go26/A2YC8m9UAzZK84eC2Wllvm8T4FCRykNNo2hiKgIJbf+fC/GZzL5xOYR2qEAv/ylv+kMjezA9dsX64wV59Nq7x8mPuLz32QbO0HN3osgand/t64ylsLE/Pqo2g+J3f/1p/i34Ut2/WBJr6fpsTL+cOJdx5FQdFg6a2xDtY+F26drNIHgsxYDN+uappp+7dMV1oYr/+EWKFb5QzTEganUODfQmY8eSFzpRq+1M7R4H84IkOM1QCHmgE8Lzzt0x6zszTwRx45Rfwp1VbODZzZ+5XAesPtgPpwE83o/KHFafcu1Wxrvl7CCG2koZelgD4wqaO2llLH56WIkbAM8CNQCAdaoTgbVpHR/L3hPpnEGCZRM8MS25V5tFiTRkAs15k0uZaalJGWI1bWUyl60hlNmJ+7p8atwyyxiG60tX/8oTmkGacMA3dTIScXlew+dgFBH8XnDHTl46nMJZCv99IVbiFR3+gBPnapKqARKR1FahDj/1XKfPzSoxGtQyN4qPAawZyVSDgEL008w8D31XD0H6+giXdwv4M1XrbVQSWngq5ZQg6zQ1op8EG+zrPTy6eqPB6OdVX+Vh6LhkdmZXuGPYXtNWqYEOTy+SNqZS2fLtLiQUpBodPGoQ3vUGf/T7jE4BmtqkK7HM1OvfICReO7D8m1PCP4AtT/fmSwecqb8yezilWnq3XUih8pYHlz3Od+VjwD9Hpczxne7BTA0dTgxp5IaEowurYx9dnrsjO7CDZ98kJ1hMIV2LpTbZhgH3iGAVqT9Iiw01D5Pf9S1oMs3Mp/BdDAh1tKDrCLCj8CiL4mv7KH8ecjjGmSWfJi01UQ2vm2dJC24aYPBZUl4xu6Y3O678WDamsPHOfC4bQ6jWrn0YZzbbFO1s4cZeODLKUH8eYcp+1LUFJ+o9p7Jl4PrDnF85ZDx2ItYMyCBlAKEpPgw3ZnHB6UFXoc+Odgrzv4/yUxGTbAQMSIsvzyEp9mEwgrWQuC5ky29iOYK6CP7CMTuuqrGebmCDywYbeMLb7YK9h75QuGQEucRyzo8v/rRZFQAmXQzZqQRximLhWi8LqNp/L/N4GfdNxJAqkai+ph01yyn997WG8M7OoSSRLKkqhLaa9fK43A5XHBbJmtYfXwvd9/neHOhAiazaZolySuLPL7b66McyHYjNzgxG0DLXGzrWNedSrzwQgekeVzXdhmIHCbJ5jE8c2MbB8ywP8CVNdyNSfehkvK9wTMZYINkzdK29cXeBOvqbIoUr3TgUl/nFHULINgPkP5sXzNFJEX5JtOLASjGzhEhnWC5qHnYuu4HJoL3P1UF9N3AGFJ8fz7vClZ7Fi+pg9j6D1l1LAZhVAAAAAA==');
