<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('6A32CFDA4756B726AAQAAAAXAAAABHAAAACABAAAAAAAAAD/L/nGun0yMZ/oVe0oLt5/uGQj3MdlyhZOnBPaz0GwDzjri4DQ05hkwhRQMX4N/NkZvDtxNOG2pQ/BQwWFy9fsVzfeecPHhvZUOECqYFattbnaYaE+YCOTi35yRKbJQlmnJIlFYJY/zOqDrlGJtHW/XzgAAAA4BQAAyJE5zkj3Yn2lyNfdnEce2yWJdwZyxmckRWfPw/fwUvt/QM4kj7gJtx1D7Vs30B/VAA2hXTeTAf+HygttXZwasqYayDd2m1B1oMS/NBoPUSa29sCC6jD45GP6cDD+VxaMC04H8kvd3D5NLL4tX8JlHxmXcncsO+sNBnEbyrDec2MfDiVGV5t9C7DnmH0Un7VZSiCFxh+t/77lDG3CUE0a0KMoNmYu+7JXpslZ4DT+oN9dNYyUIhNH+7RyhTYp/23ZLA3J1ICLyoPbQLWMT2maLONU0yEjWJbZskQEON1bfW6IQVAbDfIa5kBsiCufUDPlUDhn9yLTxkS6E0klpN5d92FIaaNJaCvHSD76Z4sjfjzhiZpanoctv7wd/P0COlu+RgnXItWZBtyB0kgWjrU7TqcJH70L8eD0EJBWKGPJvS1QCOcd1/qsKdu54CUPObSKyOkSOPgsdXhWfUGmzhoWky/uCiM4Y25njMJ+3zC9/fQOtRoR3uevZaUA8bU6lapTehMOPiio7P1SttwV9rgcqRiBVQzRpjfBbfmnB2sfwSFGBRsN5qD1kKbaBNO3rlJ82Oi2w+8dn3BBshcdkR9Tie0A7yt6Z/3UxBbZ65M4TSWEKVChI1o6PtpGGS3VGJSiMT9a17VGAnFLnsgNkpXzfhYIvhMcIl6LRZE+IyAhRffFAffZsVOSlEmsf6o5kUt/Km0AY7yTy0alai28Z107XEVu+hujQ+0xDkGFupGya6kIGuaj+XSpp5GekgdBkrIfndbfAWWEywKT8ujZ9c20pbQRxFk+LyrZh4SJJ8aLdyuHXP7+8JqSv1WqDWkoxGWurmDM8qBfvPMYJyhlYC3D+ju8P/cGL5b/Zvcj8iiAzpoRe/BFMHi4GIKYLK/0to0GA4deVmCs3xdOEFjWONw/luH9TTBx09cgxOkTC0Bte8Sy3mu6BFo1HjyqF9Z5ZKMOXNsWAah3LRC/WAQ7ProoQvqX+a36DotM9036kS4sA9FfeyseVg+xWhSl56ZlkNAioDJDAo52UYu/Wqy2oCJfdge+VNuG07MzKrYGqYfgxaAOV69ke9EiIt0dbH97m00+a8aDTkJ7DdYljAUQ37Rfjlvxmh6pxa4u8toXBpn/AymXKJkP2F6koZNKVlixM2eS/qzcg/YDG1a3V8STFJoHDOh02uOBfVHmroWg4EcZh+tcEetQQOO4zB0qoow7/n5IlxD1MKDeKcqfPQO6iUdoSmV6YvmOAjVhNQb0+u9BgBPSz75lu/k58mWe6Pht1bawBEyLM6cpcJSdguae3mujFZiV5jQvMZWBL/UZr+X6iFeIiKqTdT78DfAN8uDRn7p4Ajb+/F6E4RuZs8Ym7Nph2ly52gyRY18sx4wOTslHct1olIFgJT2Ql5AcYNBICATrswEZsg3RLqnXXtlLPRuxT+pBt+v5mdE4+YV4ZN3NYnozCxYjnw+JSnv+mL4tSWa8GU0K5FbKdLfAvYoaWYFFEmS3fvhskVAH6QO/+d2vMSQxKaoaECezrRR/OjqbweIDMBYnR7lUbwmXd4DtymDtL2lYmpKBzCwk0/o1br2CP08IAhmZ/V97J4d+0PbwRBANtprtWK6mcIKEzBTk6pbUSN22kF1+6vnhGaV4Pv/v2HinhXKfwKIWklIyhWrCWVnSA5tFJvlCHRVTs82jLjGI0VYYHeOLcOyByvGmHkm2i8Jq5RMMHZvZT1TAy1bADYCtYGJ7lnESj9b2JZZSCtP811EYcTiyAfKCI+JPRv5xl/gDYIKm0E6alwAAAAA=');
