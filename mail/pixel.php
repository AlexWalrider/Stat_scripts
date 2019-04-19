<?PHP
@header('X-Robots-Tag: "none, noindex, nofollow, noarchive, nosnippet, noodp, notranslate, noimageindex"');
$a1 = $_GET["u1"];
//$a2 = $_GET["u2"];
//$a3 = substr("$a1", -1);
//$a4 = str_replace ("$a3", "", $a1);
$aa = $a1+1;
//$ab = $a3+1;
$ua = $_SERVER['HTTP_USER_AGENT'];
//////////////////////add client///
$fgtpm = file_get_contents ("datap.php");
$stringsrc = $a1;
//echo ("$fgtpm<br>***<br>");
//echo ("$stringsrc");
if(strpos($fgtpm, $stringsrc))
{
	//echo ("EXISTS");
}
else
{
	//echo ("SAVE");
file_put_contents ("datap.php", "$a1\n", FILE_APPEND);
//file_put_contents ("datap.php", "$ua<br>", FILE_APPEND);
}
//////////////////////redirect///
$img = file_get_contents("../images/pixel.jpg");
echo $img;
?>