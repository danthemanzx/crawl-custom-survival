<?php
    // Edit this ->
    define( 'MQ_SERVER_ADDR', 'play.crawl-survival.com' );
    define( 'MQ_SERVER_PORT', 25565 );
    define( 'MQ_TIMEOUT', 1 );
    // Edit this <-

    // Display everything in browser, because some people can't look in logs for errors
    Error_Reporting( E_ALL | E_STRICT );
    Ini_Set( 'display_errors', false );

    require __DIR__ . '/MinecraftQuery.class.php';

    $Timer = MicroTime( true );

    $ServerQuery = new MinecraftQuery( );

    try
    {
        $ServerQuery->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT );
    }
    catch( MinecraftQueryException $e )
    {
        $Exception = $e;
    }

    $Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );

    $serverInfo = $ServerQuery->GetInfo();
?>
Players Online: <?php echo $serverInfo['Players'] . "/" . $serverInfo['MaxPlayers']; ?>
<?php
    if ( ( $Players = $ServerQuery->GetPlayers( ) ) !== false ) {
        foreach($Players as $Player){
                echo "<img width='64' height='64' src='http://cravatar.eu/head/".$Player."/64.png' />";
            }
    }  else {
        echo "Nobodys online!";
        }
    ?>