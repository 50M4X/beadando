<?php
    // Alkalmazás logika:
    include("./includes/galeria.inc.php");
    
    // adatok összegyűjtése:    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
    
    // Megjelenítés logika:
?>
<head>
    <meta charset="utf-8">   
    <style type="text/css">
        div#primary {padding-right:70px;
		padding-left:100px;
		}		
        div.kep { display: inline-block; }
        div.kep img { width: 400px;
					  border-radius:15px;}	
    </style>
</head>

    <div id="primary">
    
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>            
            <p style="font-size:16px">Név:  <?php echo $fajl; ?></p>
            <p style="font-size:16px">Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
    </div>

<div id="secondary">
<aside id="search-2" class="widget clearfix widget_search"><form role="search" method="get" class="search-form form-inline" action="https://atlatszonet.hu/">
<div class="form-group">
	<label>
		<span ></span>
		<input type="search" class="searchfield" placeholder="Search …" value="" name="s">
	</label>
	<input type="submit" class="button" value="Search">
</div><!-- .form-group -->
</form>
</aside>
<div ><aside id="text-3" class="widget clearfix widget_text"><h2 class="widget-title">#Azenadombol</h2><div class="textwidget"><a href="http://atlatszo.hu/azenadombol/"><img src="./images/banner.gif"></a></div><a href="http://atlatszo.hu/azenadombol/"></div>
		<div >
		</a></aside><aside id="rss-2">	
<div id="rss">	<h2 class="widget-title2"><a class="rsswidget" href="http://atlatszo.hu/feed"><img style="border:0; padding-top:10px" width="14" height="14" src="./images/rss.png" alt="RSS"></a><a class="rsswidget"  href="https://atlatszo.hu/">atlatszo.hu</a></h2></div>		
		<ul class="jobboldal">
	
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/27/panoramas-vizparti-telkek-elovasarlasi-jogarol-mondott-le-az-onkormanyzat-balatonakarattyan/">Panorámás, vízparti telkek elővásárlási jogáról mondott le az önkormányzat Balatonakarattyán</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/26/400-helyett-4100-hordo-radioaktiv-hulladekot-utaztatnanak-at-az-orszagon-bataapatiba/">400 helyett 4100 hordó radioaktív hulladékot utaztatnának át az országon Bátaapátiba</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/22/letarolnak-tihanyban-a-balaton-partot-egy-medences-luxusszallo-miatt/">Letarolnák Tihanyban a Balaton-partot egy medencés luxusszálló miatt</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/20/meszaros-lorinc-kemenyitogyara-andrej-babis-etolajos-cege-es-a-whb-is-kapott-kedvezmenyes-covid-hitelt-az-eximbanktol/">Mészáros Lőrinc keményítőgyára, Andrej Babis étolajos cége és a WHB is kapott kedvezményes COVID-hitelt az Eximbanktól</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/19/ocsai-es-inarcsi-gazdak-lehetnek-a-vesztesei-magyarorszag-legnagyobb-napelemparkjanak/">Ócsai és inárcsi gazdák lehetnek a vesztesei Magyarország legnagyobb napelemparkjának</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/15/aki-elutasit-egy-vakcinat-elutasitja-az-eletet-orvosok-asszisztensek-az-oltasi-kampanyrol/">„Aki elutasít egy vakcinát, elutasítja az életet” – orvosok, asszisztensek az oltási kampányról</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/14/ez-a-kormany-is-nekifut-a-motogp-projektnek-de-mar-a-foldek-kisajatitasa-sem-megy-atlathatoan/">Ez a kormány is nekifut a MotoGP-projektnek, de már a földek kisajátítása sem megy átláthatóan</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/13/andrassy-emlekmuzeum-helyett-demeter-szilard-ugynoksege-koltozhet-a-bem-rakparti-palotaba/">Andrássy Emlékmúzeum helyett Demeter Szilárd ügynöksége költözhet a Bem rakparti palotába</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/12/birsag-tilalom-kover-laszlot-majmolja-a-kerepesi-polgarmester-onkenyesen-atirta-az-szmsz-t/">Bírság, tilalom: Kövér Lászlót majmolja a kerepesi polgármester, önkényesen átírta az SZMSZ-t</a></li>
		<li><a class="rsswidget" href="https://atlatszo.hu/2021/04/09/egy-uj-tanulmany-szerint-elmismasoltak-a-paksi-foldrengesbiztonsagrol-szolo-foldtani-kutatast/">Egy új tanulmány szerint elmismásolták a paksi földrengésbiztonságról szóló földtani kutatást</a></li></ul></aside>	</div><!-- #secondary -->
	</div>

