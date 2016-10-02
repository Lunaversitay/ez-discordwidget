<?php
include('inc/discord.php');
/**
* ez-discordwidget (MIT)
* By Lunaversity
* https://github.com/Lunaversitay/ez-discordwidget/
*/

// here's some examples

# Echo the server name

echo $discord_name;

# Echo each channel

foreach( $discord_channels as $dis_channel => $dischans ){
  echo "Channel: ".$dischans['name']."<br>"; #Echos the channels
}

# Echo each member (seems to only echo online members)

foreach( $discord_users as $dis_users => $disuser ){
  echo "<h1> Username: ".$disuser['username']."</h1>"; #Discord username they signed up with
  echo "<h1> Nick: ".$disuser['nick']."</h1>"; #Their server nickname
  echo "<h2> Status: ".$disuser['status']."</h2>"; #Their status, idle, busy, online
  echo "<img src=" .$disuser['avatar_url']. "><br><hr>"; #Avatar
}

/*
There are others such as:
channel_id (userside)
suppress (userside)
mute (userside)
self_mute (userside)
self_deafen (userside)

you can find them all when you grab your widget ID.
*/
?>
