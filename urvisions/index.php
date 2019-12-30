<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MK Vision Center - What  is Your Vision ?  </title>
<style type="text/css">
<!--
body { background-image: url(images/patern4.jpg); margin: 0; }
.style11 {font-size: 14px}
.style19 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-size: 12px;
}
.style27 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 50px;}
.style28 {font-family: "Times New Roman", Times, serif; font-size: 70px;}
.style34 {
	color: #000000;
}
.style35 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 14px;
}
.style36 {font-size: 12px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style37 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; font-weight: bold; }
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style39 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style40 {color: #000000; font-size: 14px; }
.style41 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style42 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<script>
function enviar() {
		if (document.getElementById("nombre").value=="") {
			alert("Please enter your name.");
		}else if (document.getElementById("correo").value=="")  {
			alert("Please enter your email.");
		}else if (document.getElementById("comentario").value=="")  {
			alert("Please enter your comment.");
		}else {
			alert("Your message have been send.");
			document.form1.action="visions.php";
			document.form1.submit();
		}
	}

</script>
</head>

<body background="images/patern4.jpg">
<table width="793" border="0" align="center" cellpadding="0">
  <tr>
    <td width="789"><img src="images/banner.png" width="790" height="147" border="0" usemap="#Map2" /></td>
  </tr>
  <tr>
    <td><div align="center">
      <p class="style34"><span class="style27">What is your Vision?</span><span class="style28"><span class="style11"><br />
        <br />
          <span class="style39">What's  Your Vision is the charity project of MK Vision Center. At MK Vision Center, we  believe in the power of a<br /> 
          vision to inspire change. That is why MK Vision  Center wants you to post your vision 
          here so your vision can be<br />
          </span></span></span><span class="style28"><span class="style11"><span class="style39">an inspiration  to someone else. 
        Think of it as a mini TED talk; place where you can share your vision, your goals in life,or your goals for humanity. It can be as simple as &quot;peace on earth&quot; or something deeply philosophical. </span></span></span></p>
      </div></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="visions.php">
      <table width="736" border="0" align="center" cellpadding="0">
        <tr>
          <td width="94"><span class="style37">First Name</span></td>
          <td width="160"><label for="nombre"></label>
            <input type="text" name="nombre" id="nombre" /></td>
          <td width="87"><span class="style37">Last Initials</span></td>
          <td width="169"><label for="apellido"></label>
            <input type="text" name="apellido" id="apellido" /></td>
          <td width="54"><span class="style37">E-mail</span></td>
          <td width="144"><label for="correo"></label>
            <input type="text" name="correo" id="correo" /></td>
        </tr>
        <tr>
          <td colspan="6"><label for="comentario"></label>
            <div align="center">
              <p class="style19">
                <textarea name="comentario" cols="90" rows="10" id="comentario"></textarea>
                  <br />
              </p>
              <p class="style35">In exchange for your thoughts, come to MK Vision Center's  Grand opening in Mid-September <br />
                at Forest Hills and receive a free gift.<br />
</p>
              <span class="style35">Also, MK Vision Center believes that it should  be a place where people will gather and help<br />
              each other’s vision become clearer.  That is why&nbsp; we will donate a portion of profits to a charity so <br />
              that they  can be&nbsp; one step closer in realizing their vision.<br />
              <br />
Vote here for your the charity that you want MK Vision to donate a portion of  their profits to:              </span>
              <span class="style34"><br />
              <br />
              </span>
              <table width="194" border="0" cellpadding="0">
                <tr>
                  <td width="373" class="style36">
                    <input type="radio" name="vote" value="opc1" />
                    <a href="http://www.unicef.org/" target="_blank">                    UNICEF</a></td>
                </tr>
                <tr>
                  <td class="style36">
                    <input type="radio" name="vote" value="opc2" />
                    
                    <label for="acs"><a href="http://www.cancer.org/" target="_blank">American Cancer Society</a></label>
                    
                    <a href="http://www.cancer.org/">
                    <label for="acs"></label>
                    </a>
                    <label for="acs"></label>                  </td>
                </tr>
                <tr>
                  <td class="style36">
                    <input type="radio" name="vote" value="opc3" />
                    
                    <label for="mw"><a href="http://www.wish.org/" target="_blank">Make a Wish</a></label>
                    
                    <a href="http://www.wish.org/">
                    <label for="mw"></label>
                    </a>
                    <label for="mw"></label>                  </td>
                </tr>
                <tr>
                  <td class="style36">
                    <input type="radio" name="vote" value="opc4" />
                    
                    <label for="pb"><a href="http://www.preventblindness.org/" target="_blank">Prevent Blindness.</a></label>
                    
                    <a href="http://www.preventblindness.org/">
                    <label for="pb"></label>
                    </a>
                    <label for="pb"><br />
                    </label></td>
                </tr>
              </table>
              <br />
              <table width="139" border="0" align="center" cellpadding="0">
                <tr>
                  <td><img src="images/sharebtn.png" width="217" height="45" border="0" usemap="#Map" />
                    <map name="Map" id="Map">
                      <area shape="rect" coords="4,2,215,44" href="javascript:enviar();" />
                    </map>                    </td>
                </tr>
              </table>
              <span class="style40"><br />
              <span class="style41">Every  month will be a different charity with the most votes, so check back often.</span></span><span class="style11"><br />
              <br />
              <span class="style42">To read the visions posted and voting results without submit <strong><a href="visions.php">. : CLICK HERE : .</a></strong></span></span></div></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>

<map name="Map2" id="Map2">
  <area shape="rect" coords="358,72,449,120" href="http://www.mkvisioncenter.com/" target="_blank" />
<area shape="rect" coords="305,119,491,142" href="http://www.mkvisioncenter.com/" target="_blank" />
</map></body>
</html>
