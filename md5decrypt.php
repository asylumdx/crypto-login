
<form action="#" method="post">
    <label for="hash"><p style="color:white;">Input The MD5 Hash To Decrypt:</p></label>
    <input name="hash" id="hash" type="text" />
    <input type="submit" value="Decrypt MD5 Hash" />
</form>
<?php

$request = new HttpRequest();
$request->setUrl('https://md5-reverse-search.p.rapidapi.com/API/md5.php');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'hash' => 'f5d1278e8109edd94e1e4197e04873b9'
]);

$request->setHeaders([
	'x-rapidapi-key' => '89ed592f88msh2df05bd3c73abb0p11895djsn00146df1fd68',
	'x-rapidapi-host' => 'md5-reverse-search.p.rapidapi.com'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}