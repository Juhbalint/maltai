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
            <center>
                <h1>Kapcsolat</h1>
    <form name="kapcsolat" action="php/kapcsolat.php" onsubmit="return ellenoriz();" method="post">
        <div>
            <label>Név (minimum 5 karakter):<input type="text" id="nev" name="nev" size="20" maxlength="40"> </label>
            <br/>
            <label>E-mail (kötelező):<input type="text" id="email" name="email" size="30" maxlength="40"></label>
            <br/>
            <label>Üzenet (kötelező):  <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> </label>
            <br/>
            <input id="kuld" type="submit" value="Küld">
            <button onclick="ellenoriz();" type="button">Ellenőriz</button>
        </div>
    </form>

</body>
</html>

<?php
	//szerver oldali ellenőrzés példa

	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		exit("Hibás név: ".$_POST['nev']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	}

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		exit("Hibás szöveg: ".$_POST['szoveg']);
	}

	echo "Kapott értékek: ";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
?>
</center>
	</body>
</html>
