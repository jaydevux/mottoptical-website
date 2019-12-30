<?php 
require 'survey/connect.php';
$query1 = mysql_query("select* from questions;");
$m=0;
while ($arra1 = mysql_fetch_array($query1)) {
		$qn[$m]=$arra1['question'];	
		$m++;
}

$name=$_POST['name'];
$email=$_POST['email'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];

if ($name!='') {
		$dia=date('d');
		$mes=date('m');
		$ano=date('Y');
		$hora=date('h:i:s');
		$ampm=date('A');

mysql_query("insert into results (name, email, q1, q2, q3, q4, q5, q6, c1, c2, c3, c5) values ('$name','$email','$q1','$q2','$q3','$q4','$q5','$q6','$c1','$c2','$c3','$c5')");
		

	$empresa="MK Vision Center";
	$correoEmpresa="contact@mottoptical.com";
	
	$mime_boundary = "----erttrtrt----".md5(time());
	
	$message .= "--$mime_boundary\r\n";
	$message .= "Content-Type: text/html; charset=UTF-8\r\n";
	$message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
	
	$headers = "From: $empresa <$correoEmpresa>\r\n"; //headers
	$headers .= "Reply-To: $empresa <$correoEmpresa>\r\n"; //headers
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\r\n";
	
	$asunto = "Some one answer the poll  $"; //asunto
	$mensajeCliente = "<html><body>Hi $nombre, <br>Thank you for make your post. Te estaremos respondiendo lo más pronto posible. <br>Comercial Department<br>MK Vision<br><br>This message has been automatically generated from mottoptical.com</body></html>"; //mensaje cliente
	
	//mensaje a Cliente para decirle que fue recibido el mensaje
	//mail($correo,$asunto,$message.$mensajeCliente,$headers);
	
	$mensajeNotificacion="<html><body>
							A visitor just post in $empresa
							<br> 
							<br> Data:
							<br> Name: $nombre 
							<br> E-mail: $correo 
							<br> Comment: $comentario
							<br> This message has been automatically generated from mottoptical.com			
						</body></html>";
	
	//mensaje a empresa notificandoles que una persona nueva se contacto con ellos
	 
	//mail("info@iodec.net","Contact MK Vision ",$message.$mensajeNotificacion,$headers);
	//mail("jair3d@hotmail.com","Contact MK Vision",$message.$mensajeNotificacion,$headers);

}

?>

<html>
<head>
<TITLE>HOME - MottOptical.com - Mott Street Optical, Flushing Optical, Universal Optical, Newest Designer Eyewear &amp; Contact Lens </TITLE>
    <link rel="stylesheet" type="text/css" href="preview.css"/>
	<link rel="stylesheet" type="text/css" href="wt-rotator.css"/>
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>

    <script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>    
	<script type="text/javascript" src="js/preview.js"></script>
    
        <!--Mobile redirect script -->
<script type="text/javascript">
if (screen.width<800)
(

window.location="/mobile/index.html"

)
</script>
    
    
<meta name="Keywords" http-equiv="Keywords" content="MottOptical.com - Mott Street Optical: 52 Mott Street, New York, NY 10013 Tel: 212 431 8188 - Flushing Optical, 37-29 Main Street, Flushing, NY 11354 Tel: 718 461 4700 - Universal Optical, 38 East Broadway, New York, NY 10002 Tel: 212 966-8288 - Glasses, contact lens, lenses, Optical, Optician, Optometrist, frames, eyewear, fashion eyewear, fashion, eye care, eye exam, designer brand, sunglasses, mott street optical, flushing optical, universal optical, best optical, glasses store, vision problems, near-sightedness, myopia, Far-sightedness, hyperopia, Astigmatism, Presbyopia, eyewear consultants, Transitions, hi-index, varilux, essilor, hoya, bifocal, no-line bifocal, progressive, zeiss, zeiss coating, anti-glare, anti-reflective, anti-fog, lens crafter, pearl vision, cohen, color contact lens, Chinatown, contact lens, photo-chromatic, polarized, crizal, Adidas, Anne Klein, Arnette, Burberry, Bvlgari, Calvin Klein, CK, Chanel, Coach, Dior, D&amp;G, Dolce &amp; Gabbana, DKNY, Donna Karan, Emporio Armani, Fendi, Ferragamo, Gianfranco Ferre, Giorgio Armani, Gucci, Juicy Couture, Kio Yamato, Missoni, Miu Miu, Nike, Oakley, Paul Smith, Police, Prada, Ralph Lauren, Rayban, Revo, Silhouette, Tag Heuer, Valentino, Vera Wang, Versace, Alain Mikli, Bevel, Cartier, Cazal, Daniel Swarovski, Dunhill, Fred, Gold and Wood, Ic Berlin, Judith Leiber, Lindberg, Mont Blanc, Oliver Peoples, Orgreen, Stark, Toki, suki, Oakley, acuvue, fresh look.">

<meta name="Description" http-equiv="Description" content="MottOptical.com - Mott Street Optical: 52 Mott Street, New York, NY 10013 Tel: 212 431 8188 - Flushing Optical, 37-29 Main Street, Flushing, NY 11354 Tel: 718 461 4700 - Universal Optical, 38 East Broadway, New York, NY 10002 Tel: 212 966-8288 - Glasses, contact lens, lenses, Optical, Optician, Optometrist, frames, eyewear, fashion eyewear, fashion, eye care, eye exam, designer brand, sunglasses, mott street optical, flushing optical, universal optical, best optical, glasses store, vision problems, near-sightedness, myopia, Far-sightedness, hyperopia, Astigmatism, Presbyopia, eyewear consultants, Transitions, hi-index, varilux, essilor, hoya, bifocal, no-line bifocal, progressive, zeiss, zeiss coating, anti-glare, anti-reflective, anti-fog, lens crafter, pearl vision, cohen, color contact lens, Chinatown, contact lens, photo-chromatic, polarized, crizal, Adidas, Anne Klein, Arnette, Burberry, Bvlgari, Calvin Klein, CK, Chanel, Coach, Dior, D&amp;G, Dolce &amp; Gabbana, DKNY, Donna Karan, Emporio Armani, Fendi, Ferragamo, Gianfranco Ferre, Giorgio Armani, Gucci, Juicy Couture, Kio Yamato, Missoni, Miu Miu, Nike, Oakley, Paul Smith, Police, Prada, Ralph Lauren, Rayban, Revo, Silhouette, Tag Heuer, Valentino, Vera Wang, Versace, Alain Mikli, Bevel, Cartier, Cazal, Daniel Swarovski, Dunhill, Fred, Gold and Wood, Ic Berlin, Judith Leiber, Lindberg, Mont Blanc, Oliver Peoples, Orgreen, Stark, Toki, suki, Oakley, acuvue, fresh look.">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-top: 0px;
}
-->
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<body bgcolor="#999999" background="bkground_ma3.jpg">
<!-- ImageReady Slices (01-A.jpg) -->
<table width="800" height="600" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
<tr>
		<td width="800">
			<img src="images/mott_street_optical_01.jpg" alt="" name="MottOptical" width="800" height="128" border="0" usemap="#Map" id="MottOptical">
<map name="Map"><area shape="rect" coords="694,92,785,109" href="http://mottoptical.com/mott_optical_mk2optical.html"><area shape="rect" coords="13,93,137,107" href="mott_optical_mkvision.html">
<area shape="rect" coords="97,35,426,83" href="index.html"><area shape="rect" coords="149,92,326,110" href="mott_optical_mottst.html">
		  <area shape="rect" coords="340,93,499,110" href="mott_optical_flushing.html">
	  <area shape="rect" coords="513,92,677,109" href="mott_optical_eastbdway.html">
    </map></td>
  </tr>
	<tr>
		<td height="270" valign="top" bgcolor="#333333"> 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">

                <noscript><img src="images_rotator/1.jpg" width="800" height="270"/>
                </noscript>
            </div>
      <div class="c-panel">
                <div class="buttons">
                    <div class="prev-btn"></div>
                    <div class="play-btn"></div>    
                    <div class="next-btn"></div>               
                </div>
                <div class="thumbnails">

                    <ul>
                        <li>
                            <a href="images_rotator/1.jpg" title="3D abstract art"><img src="images_rotator/thumbs/1.jpg"/></a>                        </li>
                        <li>

                            <a href="images_rotator/2.jpg" title="san francisco"><img src="images_rotator/thumbs/2.jpg"/></a>                        </li>
                        <li>
                            <a href="images_rotator/3.jpg" title="3D abstract art"><img src="images_rotator/thumbs/3.jpg"/></a>                        </li>
                        <li>
                            <a href="images_rotator/4.jpg" title="rainbow bridge"><img src="images_rotator/thumbs/4.jpg"/></a>                        </li>
                        <li>
                            <a href="images_rotator/5.jpg" title="lion"><img src="images_rotator/thumbs/5.jpg"/></a>                        </li>     
                        <li>

                            <a href="images_rotator/6.jpg" title="highway"><img src="images_rotator/thumbs/6.jpg"/></a>                        </li>
                        <li>
                            <a href="images_rotator/7.jpg" title="hong kong"><img src="images_rotator/thumbs/7.jpg"/></a>                        </li>
                             <li>
                            <a href="images_rotator/8.jpg" title="hong kong"><img src="images_rotator/thumbs/8.jpg"/></a>                        </li>
                    </ul>
                </div>     
      </div>
       </td>
  </tr>
	<tr>
		<td valign="top"><img src="images/mott_street_optical_05.jpg" width="800" height="167" border="0" usemap="#Map2"></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
<!-- Start of Google Analytics Code -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> <!-- End of Google Analytics Code -->

<map name="Map2"><area shape="rect" coords="504,70,660,149" href="mott_optical_eastbdway.html">
  <area shape="rect" coords="677,70,784,151" href="mott_optical_mk2optical.html">
  <area shape="rect" coords="335,63,489,150" href="mott_optical_flushing.html"><area shape="rect" coords="8,61,135,155" href="mott_optical_mkvision.html"><area shape="rect" coords="150,64,316,153" href="mott_optical_mottst.html">
  <area shape="rect" coords="357,24,426,48" href="mott_optical_about.html">
</map>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-26525888-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
</body>
</html>