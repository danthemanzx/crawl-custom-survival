<?php

$json =  file_get_contents("./standalone/dynmap_world.json");
$overworld = json_decode($json);
$players = $overworld->players;
$jsonplayers = json_encode($players);
echo $jsonplayers;
