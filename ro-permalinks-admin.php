<?php
if (!defined('WPINC')) die('Go hack your mama!'); //tx ByREV ;)

add_filter('name_save_pre', 'ro_permalinks', 0);

function ro_permalinks($slug) {
	$string = array('_','%','c899','c89b','e28093','e2809d','e2809e','e2809a','e28099','c2a4','c2ab','c2bb','c2a9','c2a7','e284a2','e284a0','c2ae','e2809c','e28094','e28091','e28892','e28095','e28092','c3b0','c3b8','e280a6','cf86','cf95','e28098','e28497','e28885','e28c80','d184','ceb8');
	$replace = array('-','','s','t','-','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

	$ropoptions = ro_permalinks_get_options(); //verificam setarile din optiunile pluginului
	if($ropoptions['replace_existing_slugs'] == 'n'){ //daca e NU atunci verificam existenta unui slug anterior
		if ($slug) return $slug; //daca exista un slug anterior nu il modificam
	}
	
	if(isset($_POST['post_title'])){
		$ro_permalink = sanitize_title($_POST['post_title']);
		$ro_permalink = str_replace($string, $replace, $ro_permalink);
		return $ro_permalink;
	}else{
		return $slug;
	}
}

add_action('admin_menu', 'ro_permalinks_admin_menu');

	function ro_permalinks_admin_menu(){
		add_options_page('RO Permalinks', 'RO Permalinks', 9, basename(__FILE__), 'ro_permalinks_options_page');
	}

	function ro_permalinks_get_options(){
		$defaults = array();
		$defaults['replace_existing_slugs'] = 'n';
					
		$options = get_option('ro_permalinks_settings');
		if (!is_array($options)){
			$options = $defaults;
			update_option('ro_permalinks_settings', $options);
		}
	    
		return $options;
	}


	function ro_permalinks_options_page(){
		if ($_POST['ro_permalinks']){
			update_option('ro_permalinks_settings', $_POST['ro_permalinks']);
			$message = '<div class="updated"><p><strong>Optiuni salvate</strong></p></div>';
		}

		$ropoptions = ro_permalinks_get_options();
		$resyes = ($ropoptions['replace_existing_slugs'] == 'y') ? ' checked="checked"' : '';
		$resno = ($ropoptions['replace_existing_slugs'] == 'y') ?  '' : ' checked="checked"';

		echo <<<EOT
		<div class="wrap">
			<h2>Optiuni RO Permalinks</h2>
<br><br>
			{$message}
<br>
			<form name="form1" method="post" action="options-general.php?page=ro-permalinks-admin.php">
			<fieldset>
				<p><strong>Doriti sa inlocuiti permalinkul atunci cand modificati un articol deja existent?</strong> <input type="radio" value="y" name="ro_permalinks[replace_existing_slugs]"{$resyes} /> da <input type="radio" value="n" name="ro_permalinks[replace_existing_slugs]"{$resno} /> nu</p>
<p>Daca setati optiunea de mai sus pe DA, de fiecare data cand faceti o modificare la un articol vechi, pluginul va verifica titlul articolului si dupa caz, va modifica slug-ul existent.</p>
<p>Wordpress incepand cu versiunea 3.0 inregistreaza istoricul permalinkurilor si rezolva automat redirectarile necesare</p>
<p>Cu toate acestea, daca folositi pluginuri sau coduri pentru butoane Social Media cu counter (gen Facebook Like sau Tweet Button) trebuie sa stiti ca prin modificarea permalinkurilor existente pierdeti statisticile anterioare (numar de like-uri, numar de twitturi etc) deoarece acestea sunt legate de fiecare articol in parte prin vechiul permalink.</p>
				</fieldset>
<input type="submit" name="Submit" value="Salveaza optiunile &raquo;" />
			</form>
		</div>
		<div>
<br><br><br>	
  <p>Mai multe detalii despre plugin gasiti aici:<br><a href="http://vlad.dulea.ro/2010/12/13/url-uri-curate-pentru-cei-care-scriu-cu-diacritice/" target="_blank">http://vlad.dulea.ro/2010/12/13/url-uri-curate-pentru-cei-care-scriu-cu-diacritice/</a></p>
	</div>
EOT;
	}

?>