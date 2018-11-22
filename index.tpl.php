<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/maltai.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body >
    
	<center>
	<header>
		<img src="./kepek/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
		<h1><?= $fejlec['cim'] ?></h1>
		<?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
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
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
						<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
                </ul>
            </nav>
        
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        
</body>
</html>
