<?php
    // Alkalmazás logika:
    include("./includes/galeria.inc.php");
    $uzenet = array();   

    // Űrlap ellenőrzés:
    if (isset($_POST['kuld'])) {
        //print_r($_FILES);
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Sikeres képfeltöltés: ' . $fajl['name'];
                }
            }
        }        
    }
    // Megjelenítés logika:
?>
<div id="upload">
<head>
    <meta charset="utf-8">
   
    <style type="text/css">
        label { display: block; }
    </style>
</head>

    <h2>Válassza ki a felölteni kívánt képet</h2>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="?oldal=upload" method="post"
                enctype="multipart/form-data">
        <label style="padding-bottom:30px;"> 
            <input type="file" name="elso" required>
        </label>        
        <input type="submit" name="kuld" value="Feltöltés">
      </form>    
</div>
