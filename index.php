<html>
<head>
<title>Поиск</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="ooo">
<center><form action="#" method="post">
<h1>Название</h1>
<input type="text" name="mag1" size="60" value="Поиск первый...">
<input type="text" name="mag2" size="60" value="Поиск второй...">
<input type="text" name="mag3" size="60" value="Поиск третий...">
<input type="text" name="mag4" size="60" value="Поиск четвертый...">
<input type="text" name="mag5" size="60" value="Поиск пятый...">
<input type="text" name="mag6" size="60" value="Поиск шестой...">
<br><br><input type="submit" value="Поиск по полям"></br>
</form>

<a href="#">Ссылка, поставил для прикола!</a></center>
<br>
<center><?php
$Name=5;
$Fam=3;
$Vivod=$Name+$Fam;
echo $Vivod;
?>
<br>
<br>
<?php
$abs=$_SERVER['REMOTE_ADDR'];
echo $abs;
?>
<br>
<br>
<?php
$col=$_SERVER['HTTP_USER_AGENT'];
echo $col;
?>
<br>
<br>
<?php
$alc=$_REQUEST['user'];
echo $alc;
?>
</center>
</div>
</body>
</html>