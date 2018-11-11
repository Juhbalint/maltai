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
                    <li class="active"><a href="index.php">Főoldal</a></li>
					<li><a href="tortenet.php">Történetünk</a></li>
                    <li><a href="tamogatok.php">Támogatók</a></li>
                    <li><a href="elerhetoseg.php">Elérhetőségek</a></li>
                    <li><a href="kapcsolat.php">Kapcsolat</a></li>
                </ul>
            </nav>
	 <div id="content">
        <img id="maltai2"  src="maltai2.png" alt="maltai2">
            <h4>Üdv kedves érdeklődő!</h4>

			<p> Ez egy átvariált verziója az eredeti szervezet oldalának.</p>
			<p><a target="_blank"href="https://www.maltai.hu/">Ha az eredeti oldal érdekel kattints ide!</a></p>
            <div id="datum">
            <?php
                $maiDatum = date("Y-m-d");
                $hetNapja = 7;
                echo"Mai dátum: " . $maiDatum . ", amely a hét " . $hetNapja . ". napja!" . "<br><br>";
                $szerencseSzam = rand(1,99);
                echo"Legyen a mai szerencseszámod a: " . $szerencseSzam;
                echo"<br><br>";
            ?> 
             </div>
            <h2>Amit rólunk tudni kell!</h2>
			<p> Több mint kilencszáz éve ez minden Máltai szervezet jelmondata a világon. Világos cél, világos feladat. Az alapító atyák más korban biztosan mást értettek a hit védelmén, mint amit ma gondolunk küldetésünkrõl, és a szegények istápolása is bizonyosan más tartalommal bírt akkoriban.
			Ettõl azonban jelmondatunk nem vált idejét múlttá, hiszen napjainkban ugyanolyan fontos a hit védelme, amelyet ma példamutatásunkkal, a szegényekhez, bajbajutottakhoz való odafordulásunkkal, szeretetünkkel próbálunk szolgálni.</p>
            
            <p>A segítségünkre szorulók száma sajnos nem csökken és ez egyre több erõfeszítésre kényszerít bennünket. A mai kor elvárásai szerint végezzük munkánkat, amelynek legfõbb értékei a közösség ereje, a feladathoz való alázat, a magas szintű szakmai felkészültség, de talán legfontosabbként a rászoruló ember valódi szolgálata.</p>
            </div>
            <div id="kecskemet">
            <h2><strong>Magyar Máltai Szeretetszolgálat Kecskeméten!</strong></h2>
            <p>A kecskeméti csoport 1991 augusztusában alakult meg. Szolgálatára áll Kecskemét, valamint a környező települések, tanyák rászorultjainak. A máltaiak bíznak abban, hogy munkájukkal – ha megszűntetni nem is – enyhíteni tudják mások szenvedését. A szegények, betegek, magányosok és idősek életébe egy csöpp szeretetet kívánnak vinni, és őszintén remélik, hogy erre Isten alkalmassá teszi őket.</p>
            <p>A kecskeméti csoport jelenleg 70 fő alkalmazottal és mintegy 85 fő önkéntessel működteti hajléktalan emberek számára intézményeit.
                A Szeretetszolgálat sokágú tevékenységét legjobban az adomány kifejezés szimbolizálja, amely olyan ajándék, amit azért kapunk, hogy tovább adhassuk.
                Az adományok mögött ezer és ezer jószándékú ember szolgáló, szervező és gyűjtő munkája áll.</p>
            <p>Szolgálatunk az ifjúság bevonásával számos karitatív tevékenységet végez. Ilyen a „72 óra kompromisszumok nélkül” elnevezésű program, melyben fiatalok segítenek szolgálatukkal rászoruló embereket.</p>
           </div>
           
      
       <div id="videohatter">
        <center>
        <h3><strong>Így segítünk mi!</strong></h3>

            <iframe id="video" width="800" height="450" 
            src="https://www.youtube.com/embed/BvcnnnLydEA">
        </iframe>
        </center>
			</div>
	
<footer id="footer">
 <a target="_blank"href="https://www.spar.hu/hu_HU.html"</a><img src="maltai5.jpg" id="logok">
<a target="_blank"href="https://www.otpbank.hu/portal/hu/Maganszemelyek"</a> <img src="maltai6.jpg" id="logok">
<a target="_blank"href="http://www.gyermelyi.hu/"</a> <img src="gyermelyi.png" id="logok">
<a target="_blank"href="https://www.eon.hu/hu/lakossagi.html"</a> <img src="eon.png" id="eon">
<a target="_blank"href="https://www.elelmiszerbank.hu//"</a> <img src="elelmiszerbank.jpg" id="logok">
    <a target="_blank"href="http://www.solum.hu/"</a> <img src="solum.png" id="solum">
        <a target="_blank"href="https://www.szerencsejatek.hu/"</a> <img src="szerencsejatek.png" id="szerencse">
              <a target="_blank"href="http://karlbeer.com/"</a> <img src="karl.png" id="szerencse">
                 <a target="_blank"href="http://pro-form.hu/"</a> <img src="proform.png" id="logok">
                    <a target="_blank"href="https://nemzetikozmuvek.hu/"</a> <img src="demasz.jpg" id="logok">
                            <a target="_blank"href="http://kraftassociates-td.com/hu/cegunkrol-2/"</a> <img src="kraft.jpg" id="kraft">


</footer>
</body>

</html>
			