
<?PHP 
//echo "xxvcxvxcv";
//$ch = curl_init('http://basic-30:8888/web/sla/run');
//curl_exec($ch); // выполняем запрос curl - обращаемся к сервера php.su
//curl_close($ch);
$ch = curl_init('http://basic-30:8888/trunk/web/sla/startgenerateticket');
curl_exec($ch); // выполняем запрос curl - 
curl_close($ch);
?>