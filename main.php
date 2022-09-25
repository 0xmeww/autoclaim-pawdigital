<?php
echo "[!] Auto claim airdrop steam reward from PAW DIGITAL.\n\n";
echo "[!] Pastikan kalian sudah save wallet paw pada steam akun!\n";


function main(){

echo "[*] Example : http://steamcommunity.com/profiles/76561198215168281 \n";
echo "[?] Masukan link steam tanpa custom url :\n";
$steamLink = trim(fgets(STDIN));
$body = "steam_url=".$steamLink."";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://paw.digital/steam/send');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

$headers = array();
$headers[] = 'Host: paw.digital';
$headers[] = 'Connection: close';
$headers[] = 'Content-Length: 62';
$headers[] = 'Sec-Ch-Ua: \"Chromium\";v=\"104\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"104\"';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; G012B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36';
$headers[] = 'Sec-Ch-Ua-Platform: \"Android\"';
$headers[] = 'Origin: https://paw.digital';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://paw.digital/?ref=5312';
//$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Cookie: PHPSESSID=c6q62pgipmhvumvi3fk0pel987';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

echo "Tunggu sebentar .. \n";
$result = curl_exec($ch);
print_r("$result");

curl_close($ch);
}
$jumlah = 9999;
for($a=0;$a<$jumlah;$a++){
    $liat = main($a);
    echo "".$liat."\n\n\n";
    print "waiting to next claim available.. 8 hours delay\n";
    sleep(28800); // 8 jam 
}


?>
