<html>
<head>
<title>�����</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="ooo">
<center><form action="#" method="post">
<h1>��������</h1>
<input type="text" name="mag1" size="60" value="����� ������...">
<input type="text" name="mag2" size="60" value="����� ������...">
<input type="text" name="mag3" size="60" value="����� ������...">
<input type="text" name="mag4" size="60" value="����� ���������...">
<input type="text" name="mag5" size="60" value="����� �����...">
<input type="text" name="mag6" size="60" value="����� ������...">
<br><br><input type="submit" value="����� �� �����"></br>
</form>

<a href="#">������, �������� ��� �������!</a></center>
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