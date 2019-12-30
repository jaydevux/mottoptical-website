<?php 
require 'connect.php';
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SURVEY - MottOptical.com - Mott Street Optical, Flushing Optical, Universal Optical, Newest Designer Eyewear &amp; Contact Lens</title>

<style type="text/css">
body {
	background-image: url(bkground_ma3.jpg);
	background-repeat: repeat;
}
.radio1 {font-size: 12px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif;}

	textarea {
				font-family: Verdana, sans-serif;
				

			}			
			textarea.blur {
				color: #999;
			}
</style>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.hint.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(function(){ 
			    // find all the input elements with title attributes
				$('textarea[title!=""]').hint();
			});
		</script>
<script>
function valButton(btn) {
    var cnt = -1;
    for (var i=btn.length-1; i > -1; i--) {
        if (btn[i].checked) {cnt = i; i = -1;}
    }
    if (cnt > -1) return btn[cnt].value;
    else return null;
}

function send() {
		//alert("ingreso.");
		if (document.getElementById("name").value=="") 
			alert("Please enter your name.");
		else if (document.getElementById("email").value=="")  
			alert("Please enter your email.");
			
else if ( ( document.form1.q1[0].checked == false )
    && ( document.form1.q1[1].checked == false ) 
	&& ( document.form1.q1[2].checked == false )
	&& ( document.form1.q1[3].checked == false )
	&& ( document.form1.q1[4].checked == false )
	)
        alert ( "Please answer the question number 1" );
 	
else if ( ( document.form1.q2[0].checked == false )
    && ( document.form1.q2[1].checked == false ) 
	&& ( document.form1.q2[2].checked == false )
	&& ( document.form1.q2[3].checked == false )
	&& ( document.form1.q2[4].checked == false )
	)
        alert ( "Please answer the question number 2." );
		
else if ( ( document.form1.q3[0].checked == false )
    && ( document.form1.q3[1].checked == false ) 
	&& ( document.form1.q3[2].checked == false )
	&& ( document.form1.q3[3].checked == false )
	&& ( document.form1.q3[4].checked == false )
	)
        alert ( "Please answer the question number 3." );
		
else if ( ( document.form1.q4[0].checked == false )
    && ( document.form1.q4[1].checked == false ) 
	)
        alert ( "Please answer the question number 4." );
	
else if ( ( document.form1.q6[0].checked == false )
    && ( document.form1.q6[1].checked == false ) 
	)
        alert ( "Please answer the question number 6." );
		
		else {
			alert("Thank you for submit your feedback!... you will now be redirected to our home page www.mottoptical.com");
			document.form1.action="../index.php";
			document.form1.submit();
		}
	}

</script>

</head>

<body>
<table width="882" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="header.jpg" width="1020" height="203" border="0" usemap="#Map2" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="983" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="983" height="761" valign="top"><form action="send.php" name="form1" id="form1" method="post" target="_top">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="5" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="18"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24%" height="27">&nbsp;</td>
                  <td width="65%" valign="top"><table width="665" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="59" align="left">Nombre:</td>
                      <td width="256" align="center"><input name="name" type="text" id="name" size="35" /></td>
                      <td width="110" align="center"><label for="name">Your E-mail:</label></td>
                      <td width="240" align="center"><input name="email" type="text" id="email" size="35" /></td>
                    </tr>
                  </table></td>
                  <td width="11%">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="46"><hr /></td>
            </tr>
            <tr>
              <td height="132" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24%" height="48">&nbsp;</td>
                  <td width="65%" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="53%" height="25">1. <?php echo $qn[0];  ?></td>
                      
                            <td width="5%">Poor</td>
                      
                      
                      
                      
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q1"  value="1" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q1"  value="2" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q1"   value="3" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q1"  value="4" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q1"  value="5" />
                      </span></td>
                      <td width="12%">Excellent</td>
                    </tr>
                    <tr>
                      <td height="18">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="center">1</td>
                      <td align="center">2</td>
                      <td align="center">3</td>
                      <td align="center">4</td>
                      <td align="center">5</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
                  <td width="11%">&nbsp;</td>
                </tr>
                <tr>
                  <td height="84">&nbsp;</td>
                  <td valign="top"><p>
                    <label for="c1"></label>
                    <textarea name="c1" cols="85" rows="4" id="c1" title="comments here..."></textarea>
                    <br />
                  </p></td>
                  <td>&nbsp;</td>
                </tr>
              </table>
                <br />
               </td>
            </tr>
            <tr>
              <td height="128" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24%" height="27">&nbsp;</td>
                  <td width="65%" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="53%" height="25">2. <?php echo $qn[1];  ?></td>
                      <td width="5%">Poor</td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q2"  value="1" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q2"  value="2" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q2"   value="3" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q2"  value="4" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q2"  value="5" />
                      </span></td>
                      <td width="12%">Excellent</td>
                    </tr>
                    <tr>
                      <td height="18">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="center">1</td>
                      <td align="center">2</td>
                      <td align="center">3</td>
                      <td align="center">4</td>
                      <td align="center">5</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
                  <td width="11%">&nbsp;</td>
                </tr>
                <tr>
                  <td height="84">&nbsp;</td>
                  <td valign="top"><p>
                    <label for="c3"></label>
                    <textarea name="c2" id="c2" cols="85" rows="4" title="comments here..."></textarea>
                    <br />
                  </p></td>
                  <td>&nbsp;</td>
                </tr>
              </table>
                <br />
              </td>
            </tr>
            <tr>
              <td height="128" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24%" height="27">&nbsp;</td>
                  <td width="65%" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="53%" height="25">3. <?php echo $qn[2];  ?></td>
                      <td width="5%">Poor</td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q3"  value="1" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q3"  value="2" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q3"   value="3" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q3"  value="4" />
                      </span></td>
                      <td width="5%" align="center"><span class="radio1">
                        <input type="radio" name="q3"  value="5" />
                      </span></td>
                      <td width="12%">Excellent</td>
                    </tr>
                    <tr>
                      <td height="18">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="center">1</td>
                      <td align="center">2</td>
                      <td align="center">3</td>
                      <td align="center">4</td>
                      <td align="center">5</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
                  <td width="11%">&nbsp;</td>
                </tr>
                <tr>
                  <td height="84">&nbsp;</td>
                  <td valign="top"><p>
                    <label for="textarea4"></label>
                    <textarea name="c3" id="c3" cols="85" rows="4" title="comments here..."></textarea>
                    <br />
                  </p></td>
                  <td>&nbsp;</td>
                </tr>
              </table>
                <br />
                </td>
            </tr>
            <tr>
              <td height="27" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24%" height="27">&nbsp;</td>
                  <td width="65%" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="30%" height="25">4. <?php echo $qn[3];  ?></td>
                      <td width="2%" align="center">Yes</td>
                      <td width="2%" align="center"><span class="radio1">
                        <input type="radio" name="q4" value="yes" />
                        </span></td>
                      <td width="2%" align="center">No</td>
                      <td width="2%" align="center"><span class="radio1">
                        <input type="radio" name="q4" value="no" />
                        </span></td>
                        <td width="27%" align="center"></td>
                      
                      </tr>
                    </table></td>
                  <td width="11%">&nbsp;</td>
                </tr>
                </table>
                <br />
                <br /></td>
            </tr>
            <tr>
              <td height="27" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24%" height="27">&nbsp;</td>
                  <td width="65%" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="40%" height="25">5. <?php echo $qn[4];  ?></td>
                      <td width="20%" align="center"><select name="q5" id="q5">
                        <option value="search">search engines</option>
                        <option value="magazines">magazines</option>
                        <option value="family">family or friends</option>
                        <option value="facebook">facebook</option>
                        <option value="twitter">twitter</option>
                      </select></td>
                      <td width="14%" align="center">Other</td>
                      <td width="26%" align="left"><input name="c5" type="text" id="c5" size="25" /></td>
                      </tr>
                  </table></td>
                  <td width="11%">&nbsp;</td>
                </tr>
              </table>
                <br />
<br /></td>
            </tr>
            <tr>
              <td height="19" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24%" height="27">&nbsp;</td>
                  <td width="65%" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="40%" height="25">6. <?php echo $qn[5];  ?></td>
                      <td width="2%" align="center">Yes</td>
                      <td width="2%" align="center"><span class="radio1">
                        <input type="radio" name="q6" value="yes" />
                      </span></td>
                      <td width="2%" align="center">No</td>
                      <td width="2%" align="center"><span class="radio1">
                        <input type="radio" name="q6" value="no" />
                      </span></td>
                      <td width="17%" align="center"></td>
                    </tr>
                  </table></td>
                  <td width="11%">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="19" valign="top"><br />
                <br />
                <br /></td>
            </tr>
            <tr>
              <td height="53" valign="top"><table width="211" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="56%" height="30"><img src="button.jpg" alt="" width="211" height="30" border="0" usemap="#MapMap" />
                    <map name="MapMap" id="MapMap">
                      <area shape="rect" coords="8,5,204,24" href="javascript:send();" />
                    </map></td>
                  </tr>
              </table></td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="footer.jpg" width="1020" height="122" /></td>
  </tr>
</table>
<map name="Map" id="Map">
  <area shape="rect" coords="8,5,204,24" href="javascript:send();" />
</map>
<map name="Map3" id="Map3">
  <area shape="rect" coords="3,63,142,81" href="http://www.mottoptical.com/mott_optical_mkvision.html" target="_blank" />
  <area shape="rect" coords="152,65,346,79" href="http://www.mottoptical.com/mott_optical_mottst.html" target="_blank" />
  <area shape="rect" coords="361,65,531,78" href="http://www.mottoptical.com/mott_optical_flushing.html" target="_blank" />
  <area shape="rect" coords="544,65,719,80" href="http://www.mottoptical.com/mott_optical_eastbdway.html" target="_blank" />
  <area shape="rect" coords="735,65,826,79" href="http://mottoptical.com/mott_optical_mk2optical.html" target="_blank" />
  <area shape="rect" coords="245,3,554,55" href="http://www.mottoptical.com/" target="_blank" />
</map>



<map name="Map2" id="Map2">
  <area shape="rect" coords="354,18,662,67" href="http://www.mottoptical.com/" target="_blank" />
  <area shape="rect" coords="112,79,249,94" href="http://www.mottoptical.com/mott_optical_mkvision.html" target="_blank" />
  <area shape="rect" coords="260,80,458,94" href="http://www.mottoptical.com/mott_optical_mottst.html" target="_blank" />
  <area shape="rect" coords="471,78,641,95" href="http://www.mottoptical.com/mott_optical_flushing.html" target="_blank" />
  <area shape="rect" coords="652,79,832,94" href="http://www.mottoptical.com/mott_optical_eastbdway.html" target="_blank" />
  <area shape="rect" coords="843,79,936,94" href="http://mottoptical.com/mott_optical_mk2optical.html" target="_blank" />
  <area shape="rect" coords="887,152,911,173" href="http://www.facebook.com/pages/Mott-Street-Optical/71063023354" target="_blank" />
  <area shape="rect" coords="920,150,942,173" href="http://twitter.com/msogroup" target="_blank" />
  <area shape="rect" coords="950,151,994,172" href="http://www.yelp.com/biz/mott-street-optical-new-york-2" target="_blank" />
</map>
</body>
</html>
