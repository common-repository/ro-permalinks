=== RO Permalinks ===
Contributors: vlad.dulea
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Y987FBB926L84
Tags: ro, permalinks, clean, slugs, romanian, romana
Requires at least: 3.0
Tested up to: 3.0.3
Stable tag: 1.3

Fixing the Romanian letters with comma accents and some special characters in the permalinks

== Description ==

This plugin will change the Romanian letters with comma accents and cedillas to simple letters in the permalink, so the permalinks will be clean adresses and just good to be indexed by search engine robots. The plugin cleans also other symbols written with Romanian keyboards that Wordpress won't change by default.

Mai multe detalii despre acest plugin puteti citi aici: http://vlad.dulea.ro/2010/12/13/url-uri-curate-pentru-cei-care-scriu-cu-diacritice/

== Installation ==

1. Upload `ro-permalinks` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You are done!

== Frequently Asked Questions ==

= Do I really need this plugin? =

Basically the default WordPress software will clean the Romanian letters with cedillas in the permalinks, but a standard Romanian keyboard will correctly generate letters with comma accents which Wordpress won't clean. The plugin also cleans some symbols that wordpress does not. So, even if you don't run a Romanian blog, you may need this small plugin, just in case.

== Screenshots ==

1. Anumite simboluri (exemplu: ghilimelele din Word) precum si diacriticele din tastatura Romanian Standard nu sunt convertite corect in momentul in care WordPress genereaza slug-ul pentru permalinkuri. 
2. Acest plugin rezolva aceasta problema astfel incat URL-urile sa fie curate si mai corect indexate de motoarele de cautare
3. Puteti decide din pagina de optiuni daca doriti sa actualizati si slugurile deja existente in baza de date.

== Changelog ==

= 1.3 =
* Functia este apelata doar cand esti pe administrare. Avantaj la viteza de executie a unei sesiuni plus siguranta impotriva unei eventuale brese de securitate (din nou multumesc ByREV)

= 1.2.1 =
* Am scos apelarea bazei de date. Ramasese din scriptul initial si nu era folosita niciunde. (multumesc George Jipa)

= 1.2 =
* Principala modificare este aparitia paginii de optiuni
* Acum se poate seta din optiuni daca se inlocuiesc sau nu vechile permalinkuri la actualizarea unui articol existent
* Am rezolvat problema actualizarii din alte scripturi sau pluginuri. Pluginul foloseste strict variabila $_POST['post_title'] pentru actualizarea permalinkului pentru ca aceasta sa se intample chiar si la Auto-Save

= 1.1 =
* Pluginul foloseste acum functia sanitize_title (multumesc byrev)
* Au fost adaugate simboluri noi in lista de caractere curatate de plugin (inclusiv cele din pluginul lui zoso. mersi zoso)

= 1.0 =
* First release.

== Upgrade Notice ==

= 1.3 =
Imbunatatirea vitezei de executie a unei sesiuni plus setari de securitate.

= 1.2.1 =
Mic update: Apelarea bazei de date in functie nu era necesara si a fost inlaturata.

= 1.2 =
Puteti decide din setari daca modificati si slugurile deja existente. S-a rezolvat si o problema la actualizarea articolelor din alte pluginuri sau scripturi.

= 1.1 =
Pluginul foloseste acum functia sanitize_title si a fost completata lista de simboluri curatate de plugin


