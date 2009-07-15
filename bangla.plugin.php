<?
/*
Plugin Name: BanglKB
Plugin URI: http://ekushey.org/?page/web_input_manager
Description: Allowes you to write Unijoy and Phonetic Bangla in New Post Section & also in comment section. This plugin is first developed by Hasin Hayder (http://hasinhayder.net). And later S. M. Ibrahim (lavlu) (http://www.lavluda.com) added support on comments. In the version 2.0 we added support of Probhat keyboard layout. BanglKB  is released from ekushey (http://ekushey.org)
Author: S. M. Ibrahim Lavlu
Version: 2.1.1
Author URI: http://www.lavluda.com
*/

add_action('admin_footer', 'wp_banglakb');
function wp_banglakb(){

		echo <<<EOT
		 		<script type="text/javascript" src="../wp-content/plugins/banglakb/unijoy.js"></script>
		 		<script type="text/javascript" src="../wp-content/plugins/banglakb/phoneticunicode.js"></script>
		 		<script type="text/javascript" src="../wp-content/plugins/banglakb/probhatunicode.js"></script>
				<script type="text/javascript">
					<!--
						if(swiToolbar = document.getElementById("ed_toolbar")){
							var swiLength, swiBut, swiStart, swiEnd;

							swiLength = edButtons.length;
							edButtons[swiLength] = new edButton('ed_swiUnijoy','Unijoy','', '','');
							var swiBut = swiToolbar.lastChild;
							while (swiBut.nodeType != 1){
								swiBut = swiBut.previousSibling;
							}
							swiBut = swiBut.cloneNode(true);
							swiToolbar.appendChild(swiBut);
							swiBut.value = 'UniJoy';
							swiBut.title = 'UniJoy';
							swiBut.onclick = enableUnijoy;
							swiBut.id = "ed_wpunijoy";
							
							swiLength = edButtons.length;
							edButtons[swiLength] = new edButton('ed_swiPhonetic','Phonetic','', '','');
							var swiBut = swiToolbar.lastChild;
							while (swiBut.nodeType != 1){
								swiBut = swiBut.previousSibling;
							}
							swiBut = swiBut.cloneNode(true);
							swiToolbar.appendChild(swiBut);
							swiBut.value = 'Phonetic';
							swiBut.title = 'Phonetic';
							swiBut.onclick = enablePhonetic;
							swiBut.id = "ed_wpphonetic";
							
							
							swiLength = edButtons.length;
							edButtons[swiLength] = new edButton('ed_swiProbhat','Probhat','', '','');
							var swiBut = swiToolbar.lastChild;
							while (swiBut.nodeType != 1){
								swiBut = swiBut.previousSibling;
							}
							swiBut = swiBut.cloneNode(true);
							swiToolbar.appendChild(swiBut);
							swiBut.value = 'Probhat';
							swiBut.title = 'Probhat';
							swiBut.onclick = enableProbhat;
							swiBut.id = "ed_wpprobhat";
							
							swiLength = edButtons.length;
							edButtons[swiLength] = new edButton('ed_swiEnglish','English','', '','');
							var swiBut = swiToolbar.lastChild;
							while (swiBut.nodeType != 1){
								swiBut = swiBut.previousSibling;
							}
							swiBut = swiBut.cloneNode(true);
							swiToolbar.appendChild(swiBut);
							swiBut.value = 'English';
							swiBut.title = 'English';
							swiBut.onclick = enableEnglish;
							swiBut.id = "ed_wpenglish";

						}

					//-->
	function enableUnijoy() {
	makeUnijoyEditor('content');
	makeUnijoyEditor('title');
	document.getElementById('ed_wpunijoy').style.color="#222EEE";
	document.getElementById('ed_wpprobhat').style.color="#000";
	document.getElementById('ed_wpenglish').style.color="#000";
	document.getElementById('ed_wpphonetic').style.color="#000";
}

	function enablePhonetic() {
	makeUniPhoneticEditor('content');
	makeUniPhoneticEditor('title');
	document.getElementById('ed_wpunijoy').style.color="#000";
	document.getElementById('ed_wpenglish').style.color="#000";
	document.getElementById('ed_wpprobhat').style.color="#000";
	document.getElementById('ed_wpphonetic').style.color="#222EEE";
}

	function enableProbhat() {
	makeProbhatEditor('content');
	makeProbhatEditor('title');
	document.getElementById('ed_wpprobhat').style.color="#222EEE";
	document.getElementById('ed_wpunijoy').style.color="#000";
	document.getElementById('ed_wpenglish').style.color="#000";
	document.getElementById('ed_wpphonetic').style.color="#000";
}

	function enableEnglish() {
	switched=!switched;
	if (switched)
	document.getElementById('ed_wpenglish').value="Bangla";
	else
	document.getElementById('ed_wpenglish').value="English";
	document.getElementById('ed_wpprobhat').style.color="#000";
	document.getElementById('ed_wpunijoy').style.color="#000";
	document.getElementById('ed_wpenglish').style.color="#222EEE";
	document.getElementById('ed_wpphonetic').style.color="#000";
}
				</script>
EOT;
}

add_action('bangla_kb', 'wp_banglakb_comments');

function wp_banglakb_comments(){

	?>
		 		<script type='text/javascript' src='<?php echo get_option('siteurl'); ?>/wp-content/plugins/banglakb/unijoy.js'></script>
		 		<script type='text/javascript' src='<?php echo get_option('siteurl'); ?>/wp-content/plugins/banglakb/phoneticunicode.js'></script>
		 		<script type='text/javascript' src='<?php echo get_option('siteurl'); ?>/wp-content/plugins/banglakb/probhatunicode.js'></script>
				<script type='text/javascript'>
								
				function enableUnijoy() {
				makeUnijoyEditor('comment');
				makeUnijoyEditor('author');
				document.getElementById('unijoy').style.color="#222EEE";
				document.getElementById('phonetic').style.color="#000";
				document.getElementById('english').style.color="#000";
				document.getElementById('probhat').style.color="#000";
			}
			
				function enablePhonetic() {
				makePhoneticEditor('comment');
				makePhoneticEditor('author');
				document.getElementById('unijoy').style.color="#000";
				document.getElementById('english').style.color="#000";
				document.getElementById('phonetic').style.color="#222EEE";
				document.getElementById('probhat').style.color="#000";
			}
				
				function enableProbhat() {
				makeProbhatEditor('comment');
				makeProbhatEditor('author');
				document.getElementById('unijoy').style.color="#000";
				document.getElementById('english').style.color="#000";
				document.getElementById('probhat').style.color="#222EEE";
				document.getElementById('phonetic').style.color="#000";
			}
			
				function enableEnglish() {
				switched=!switched;
				if (switched)
				document.getElementById('english').value="Bangla";
				else
				document.getElementById('english').value="English";
				document.getElementById('probhat').style.color="#000";
				document.getElementById('unijoy').style.color="#000";
				document.getElementById('english').style.color="#222EEE";
				document.getElementById('phonetic').style.color="#000";
			}
				
				</script>


<input type='button' value='unijoy' id='unijoy'onclick='enableUnijoy();'></input>
<input type='button' value='phonetic' id='phonetic' onclick='enablePhonetic();'></input>
<input type='button' value='probhat' id='probhat' onclick='enableProbhat();'></input>
<input type='button' value='english' id='english' onclick='enableEnglish();'></input>

<?php
				
}
?>