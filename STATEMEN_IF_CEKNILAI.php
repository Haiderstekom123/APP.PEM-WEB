<html><head><title>Statement IF</title></head>
<body>
<?php error_reporting(0);
echo"<form action=\"$php_self\"method=\"post\">";
$nilai=$_POST['nilai'];
echo"Berapakah nilai PHPmu? : 
<input name=\"nilai\" value=\"$nilai\" size=\"3\" type=\"text\"
value=\"$nilai\">
<input name=\"cek\" type=\"submit\" value=\"cek\"> </form>";
if($_POST['cek'])
{ echo"<br><h1>";
	if($nilai=="")
		{echo"Anda belum menentukan nilai...!"; }
	elseif (!is_numeric($nilai))
		{ echo"ini bukan nilai angka"; }
	else
	{
	if($nilai<=30)
		{echo"Anda mendapat nilai huruf <b> E </b>"; }
	elseif($nilai<=50)
		{echo"Anda mendapat nilai huruf <b> D </b>"; }
	elseif($nilai<=70)
		{echo"Anda mendapat nilai huruf <b> C </b>"; }
	elseif($nilai<=85)
		{echo"Anda mendapat nilai huruf <b> AB </b>"; }
	else
		{echo"Anda mendapat nilai huruf <b> A </b>"; }
	}
	echo"</h1>";
}
?>
</body>
</html>