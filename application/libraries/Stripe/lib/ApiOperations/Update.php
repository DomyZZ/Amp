<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('6A32CFDA4756B726AAQAAAAXAAAABHAAAACABAAAAAAAAAD/1pbPBc7+oG8gRfN7a3AUn/9tNjmtgp842c8/2tXCjwBjPjkmeiCLA872BpgxY1q9NszH+yPc2zbZav2LnoOMWrbzCGpmQ6YqWmrO5c3q3BcqziAtXpjySKxs0NK9tO61sPxDHKGpXNn5klQQbpXNqTgAAACYBAAA7dk9fNvpQ0PQoGuGZU8pHSbFTWHAjGazAW+2NjDyqzze7Yhfl8QvCA46usauQBD21k4v6HuJqWfFX3XvhCWx87kYlnwSkhoeq9R1E3RP0Nto1X9RQIdcnfd14Wk8bGqGbZ5Kl/y9kg3hjAP11IxR961Cs2TIEGy9cezjKGuSPjrxtU9G/dNtDeZfGklr6QM4qJUBrvmLWgVvcPqPEdkBflYp1fsu+JrPphi0nsRFNVOWu49Cbj5bbYrIJx8jhMqN8LzyJ+BnkFzEb9LpG/WOoubzujSvxbvVd66jMaIsTbf/5rlyQvr38B4FHbOa/YFLk5WPXoSV+I0Sjg2hlJX89EX4uPwsw/vvglNp1TLEHTHxrukAYcIOrfRhMnh6Jc4Z8++k1pftej9vtxSdz7ESOWUAFuNyverNmsrILynpn6t7LzjfNKYBqchXinkyHRQw17r0KBwPgCH675iwD79ZrcqgBR8MjAbZ7o1yhtozCMXIXYzyAsBjU6Akr8eG8t6dTltNqOmIgfEzvoLAEkFcrTibYA5Cv6imAb2d1VOstDFniXkwBTb5R+V8Xlo+CNZvISYEnSZnn5LqewY3uM3e2MohBQhRvYpM4J+ZdUUdSZf6fiT8SB+H6zGKfFbxMLwrJFKtZnqKQvqn03tY8LY89tCklxvoUg4AeZ0k6IM9iAQVaKtylWS98bqAFo83IcmgwQfeYaBtQW5CVGgDNy5wuRZ8toKhITONd40sSOj3e0MZz5Zft1fr0wNdVTI5BqBxdHffEJbWoBzteLOX+HiQKocT6SUoErgYemgUlLPec2l6svfGIg2cNJzJ67Pr25OukaSdyvg0b8+ujJVUFONY1Df/g08lOgNwAVt/1/kKqaaL0jC7d7ca/NAxx5lTPGz+stFKg1GiXA3X2PBSl+iYdmTEClhc1JJTqVdFL9F3U+LLJ0UoyjhwMquclud8rvmMxMfgd62fM2ZVUKoC2MH/N0jpuI/6/i/uLKYrX+yyzW10elx9N78Tk4zSTz1EidhtibCnXXvR+PsM2glUiijlKzoFKiVMj/WKBzFuiPvPeu47QEn2ze8+INH+VGKUDKFLjIycbPrmk5NjDPEZg2+7yuKNF1V7/x9It3XlPq6o33XgIbcAI4XReRXvEW2nBajZjfXSSvEXmPruuCHIcLAY0sRUXpvKLPXF+SrqXbyD5NKk/b+SPaXmj0h5EkXs850HbPN/0LDwtankGOvkda0tCl0zTRJdF4AOlaTERft0rrHlpHVhVOpSI1L49GgwffwE+UTHGcWRNsN8IR1QGasdqBE0TaGm+1o+u4I0CQ3a8gbhQbhmTZxPNESWwpE8TqAevCUcxu0Sl10dLf0nf7b3/XfceoFGgckQM5CHpEFV+hkosH9gdQ9qDXEBKiky3XNn39FemzIu0Nrs0L6UpOp4BLAqrPJRCQIju8JyPYwpypqpnwTeMZirOnX6teqiPr6nCNRN9YP5A7hZnC0j+hISkYn7iKmwdbG6Yies4wk8butzN+N0DSmjiAJ1rl4d46Xw1SzMzWQTxwzI0onVgAB6ivco7uvsK2gkAAAAAA==');