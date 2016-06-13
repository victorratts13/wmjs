<?php
/**
Web miner Javascript V1.0<br />

developed by LuckHubbie .
June 2016 :
below you can configure the credentials sa mining pool.
Any pool can be used , but it is advised to use a p2pool to a remote or local mining.
**/
//manual method
   $url = "eu.p2pool.cloud";//the pool link you want to use . for example: eu.p2pool.cloud
   $port = "9332";//This is the port to use. see: https://pt.wikipedia.org/wiki/Proxy or :http://lkhubbie.tk/protocols/
   $username = "1AnwN7XynxuBB94C5Kovv7HzLT263ckAY9";//use your bitcoin address.
   $password = "xxx";//can be anything from this space is not empty.
/*
if you want to automatically mine for a pool that the system identifies as faster or viable mining. edit these parameters below

    $response = json_decode(file_get_contents("http://nodes.p2pool.co/pools.dat"),true);
    $url = $response[6]['name'];
    $port = $response[6]['port'];
    $username = "1AnwN7XynxuBB94C5Kovv7HzLT263ckAY9";
    $password = "xxx";
*/
?>
