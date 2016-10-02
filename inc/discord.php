<?php
/**
* ez-discord api (MIT)
* By Lunaversity
* https://github.com/Lunaversitay/ez-discordwidget/
*/
#--> edit this
$serverid = "";
# edit this <--
  
  
$discord_url = "https://discordapp.com/api/servers/".$serverid."/widget.json";
$json = file_get_contents($discord_url);
$json_table = json_decode($json, true);
$channeltables = $json_table;

$discord_svname = $json_table['name'];
$discord_channels = $json_table['channels'];
$discord_users = $json_table['members'];

?>
