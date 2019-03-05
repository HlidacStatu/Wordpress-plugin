Plugin pro Wordpress, pro snadné a spolehlivé vkládání widgetů Hlídače státu do textu.

Plugin vytváří [shortcode](https://www.wplama.cz/shortcode-wordpress/) pro Wordpress `[hlidac-statu page="/osoba/andrej-babis"]`. Tento shortcode zajistí zobrazení obsahu Hlídače státu (widget = kus stránky v jiné stránce) v textu článku. Do parametru `page` vložte URL stránky, kterou chcete vložit do článku, bez adresy serveru (pouze cestu).

Pokud chcete jinou šířku widget, než standardní šírku 500 bodů, stačí přidat parametr `width`. Nedoporučujeme menší šířku než 400. Šířku je možné určit pouze v bodech (px).
`[hlidac-statu page="/osoba/andrej-babis" width="650"]`


Více info o widgetech Hlídače státu: https://www.michalblaha.cz/2019/01/obsah-hlidace-statu-prehledne-na-vlastni-strance-v-clanku-ci-blogu-kdekoliv/


## Instalace pluginu do Wordpress
Plugin zatím není dostupný v adresáři pluginů Wordpressu (brzy ho tam vložíme). Proto je zatím nutné plugin nainstalovat ručně.


0. Pokud už máte plugin instalovaný a chcete nahrát novou verzi, první původní plugin deaktivujte, poté odinstalujte.
1. V administraci WP jděte do sekce "Pluginy", poté "Instalace pluginů" (v anglické verzi "Add New").
2. Stáhněte si ZIP s pluginem ze stránky https://github.com/HlidacStatu/Wordpress-plugin/releases
3. Nahoře je tlačítko "Nahrát plugin" (v anglické  "Upload plugin"). Klikněte na něj.
4. Vyberte stažený soubor a potvrďte "Instalovat" (v anglické "Install now")).
5. Po nahrátí plugin aktivujte.

Hotovo, Shortcode `[hlidac-statu]` funguje.
