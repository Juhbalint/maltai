<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Magyar Máltai szeretett</title>
    <link rel="stylesheet" type="text/css" href="maltai.css">
</head>
<body> 
    <center>
    <header>
        <img src="maltai.png" alt="maltai">
        <h1>Minden amit a Máltai Szeretetszolgálatról tudni akartál!</h1>    
            <!--Google kereso indul-->
            <form action="http://www.google.co.hu/search" method="get">
            <table width="400">
            <tbody>
            <tr>
            <td align="center" width="400">
            <input type="text" maxlength="100" name="q" size="40" value="" />
            <input type="submit" name="btnG" value="Google keresés" />
            <input type="hidden" name="domains" value="www.maltai.nhely.hu" />
            <!--<input type="radio" name="sitesearch" value="" /> www -->  
            <input type="radio" checked="checked" name="sitesearch" hidden=true 
            value="http://maltai.nhely.hu"/><!--www.maltai.nhely.hu-->  
            </td></tr>
            </tbody>
            </table>
            </form><!--Google kereso vege-->           
    </header>
</center>
            <nav>
                <ul id="menu1">
                    <li><a href="index.php">Főoldal</a></li>
					<li><a href="tortenet.php">Történetünk</a></li>
                    <li><a href="tamogatok.php">Támogatók</a></li>
                    <li class="active"><a href="elerhetoseg.php">Elérhetőségek</a></li>
                    <li><a href="kapcsolat.php">Kapcsolat</a></li>
                </ul>
            </nav>
	 <center>
        <h2>Elérhetőségeink</h2>
        <h3>Magyar Máltai Szeretetszolgálat, Kecskemét</3>
        <p><strong> Cím </strong> Kecskemét, Hoffmann János utca 11, 6000 </p>  
        <p><strong> Telefon </strong> (76) 506 124 </p>
        <div id="terkep">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.7762585738665!2d19.68452391560632!3d46.90711847914442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da118c08ffb7%3A0x62e3e1cc44b078ae!2sMagyar+M%C3%A1ltai+Szeretetszolg%C3%A1lat!5e0!3m2!1shu!2shu!4v1540215483168" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        </div>
        <div id="tablazat">
        <table >
            <tr>
        <th>Cím</th>
        <th>Telefon</th>
        
    </tr>
            <h3>Elérhetőségek</h3>
            <?php
        $cim = array("Budapest, Bem rkp. 28, 1011","Budapest, Szarvas Gábor út 58, 1125","Budapest, Csap u. 2, 1016","Kecskemét, Hoffmann János utca 11, 6000","Pécs, Janus Pannonius u. 6, 7621","Miskolc, Köln u. 2, 3535","Miskolc, Árpád út 126., 3535","Esztergom, Kossuth Lajos u. 42, 2500","Cegléd, Bajcsy-Zsilinszky út 26, 2700","Debrecen, Erzsébet utca 24/a, 4025","Vác, Március 15. tér 7-9, 2600","Dunaújváros, Október 23. tér, 2400","Budapest, Szatmár u. 26, 1142","Budapest, Marosvásárhely u. 27, 1182","7100 Szekszárd, Hunyadi utca 4, 7132","Budapest, Miklós u. 32, 1033","Budapest, Fő u. 41, 1011","Páty, Csilla Von Boeselager u. 3, 2071","Budapest, Rimaszombati út 15/a, 1118","Budapest, Széll Kálmán tér 17, 1024","Siófok, Béke tér 2, 8600","Kaposvár, Sávház utca 1, 7400","Pécs, Apafi utca 99-100., 7629","Salgótarján, Alagút u. 3, 3100"," Győr, Amadé László u. 1, 9021","Budapest, Szarvas Gábor út 58, 1125"," Mezőkövesd, Mátyás király utca 121, 3400"," Szombathely, Margaréta u. 1, 9700"," Göd, Munkácsy Mihály u. 2, 2131","Tiszaörs, Bacsó Béla utca 51, 5362");
        $telefon = array("(1) 201 8517","(1) 391 4730","(1) 355 0337","(76) 506 124","(72) 310 048","(46) 401 170","(46) 401 370","(33) 412 614","(53) 314 490","(52) 311 749","(27) 319 450","(30) 985 6665","(1) 252 3135","(1) 292 2670","(1) 292 2670","(74) 319 884","(1) 368 9484","(1) 225 8280","(23) 344 050","(1) 206 7246","(1) 201 8655","(84) 322 622","(82) 415 688","(72) 241 810","(32) 316 533","(96) 336 129","(1) 391 4700","(49) 411 706","(94) 505 968","(27) 532 275","(59) 354 122");

        for ($i=0; $i <29 ; $i++) { 
            echo"<tr>
                    <td>" . $cim[$i] ."</td>
                    <td>" . $telefon[$i] ."</td>
    
                </tr>";
        }      
    ?>    
</table>
</center>
</body>