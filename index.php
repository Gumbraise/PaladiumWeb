<!DOCTYPE html>
<html id="html" style="background: url(img/background.jpg) no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
<head>
    <?php 
        $playeronline = file_get_contents('http://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=funcraft.net&port=25565'); 
        $maxplayer = (file_get_contents('http://api.serveurs-minecraft.com/api.php?Joueurs_Maximum_Ping&ip=funcraft.net&port=25565') + 1000); 
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paladium - <?php echo $_SERVER['REMOTE_ADDR']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="icon" type="image/png" href="http://api.serveurs-minecraft.com/api.php?Favicon_Ping&ip=funcraft.net&port=25565">
</head>
<body>
    <div id="inv">
        <div class="players">
            <?php if($playeronline >= 2000) { ?>
                <p class="players" href="#">Players online : <font class="full"><?php echo $playeronline ."/". $maxplayer; ?></font></p>
            <?php } else if (empty($playeronline)) { ?>
                <p class="players" href="#">Players online : <font class="full">Maintenance..</font></p>
            <?php } else { ?>
                <p class="players" href="#">Players online : <font class="notfull"><?php echo $playeronline ."/". $maxplayer; ?></font></p>
            <?php } ?>
        </div>
        <div class="menu">
            <div class="image">
                <img src="img/logo.png">
                <div class="PaladiumV">
                    <p class="PaladiumV">Paladium V6</p>
                </div>
            </div>
            <div class="selection">
                <ul class="nav-menu">
                    <li>
                        <a href="https://news.paladium.com/">News</a>
                    </li>
                    <li>
                        <a class="attendre"></a>
                    </li>
                    <li>
                        <a href="https://store.paladium.com/">Store</a>
                    </li>
                    <li>
                        <a class="attendre"></a>
                    </li>
                    <li>
                        <a href="#">Options</a>
                    </li>
                    <li>
                        <a class="attendre"></a>
                    </li>
                    <li>
                        <a href="#" onclick="login()">Login</a>
                    </li>
                </ul>
            </div>
            <div class="buttons">
                <ul class="nav-menu">
                    <li class="buttons">
                        <img id="discord" onmouseover="discord()" onmouseout="discordq()" src="img/button_discord.png">
                    </li>
                    <li class="buttons">
                        <a class="attendre"></a>
                    </li>
                    <li class="buttons">
                        <img id="youtube" onmouseover="youtube()" onmouseout="youtubeq()" src="img/button_youtube.png">
                    </li>
                    <li class="buttons">
                        <a class="attendre"></a>
                    </li>
                    <li class="buttons">
                        <img id="twitter" onmouseover="twitter()" onmouseout="twitterq()" src="img/button_twitter.png">
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer">
                <p class="footer">Paladium 2019 - Tous droits réservés</p>
        </div>
    </div>
    <div style="visibility: hidden;" id="notinv">
        <p class="notinv">Le serveur est en maintenance, veuillez réessayer plus tard...</p>
    </div>
</body>
<footer>
    <script type="text/javascript" src="main.js"></script>
</footer>
</html>