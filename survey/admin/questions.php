<?php 

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}

require '../connect.php';

$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];

if ($q1!='') {
	mysql_query("update questions set question='$q1' where id='1'");
}
if ($q2!='') {
	mysql_query("update questions set question='$q2' where id='2'");
}
if ($q3!='') {
	mysql_query("update questions set question='$q3' where id='3'");
}
if ($q4!='') {
	mysql_query("update questions set question='$q4' where id='4'");
}
if ($q5!='') {
	mysql_query("update questions set question='$q5' where id='5'");
}
if ($q6!='') {
	mysql_query("update questions set question='$q6' where id='6'");
}

$query1 = mysql_query("select* from questions;");
$m=0;
while ($arra1 = mysql_fetch_array($query1)) {
		$qn[$m]=$arra1['question'];	
		$m++;
}

 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Poll</title>
<style type="text/css">
body {
	background-image: url(../bkground_ma3.jpg);
	background-repeat: repeat;
}
.radio1 {font-size: 12px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif;}
</style>
<script>
function send() {
			alert("Your questions have been saved.");
			document.form1.action="questions.php";
			document.form1.submit();
	}

</script>

</head>

<body>
<table width="1023" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1023" height="530" valign="top" style="background-image:url(../bg2.jpg); background-repeat:no-repeat">
    <form  name="form1" id="form1" method="post">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="219" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="156" colspan="2" valign="top"><table width="943" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="63" height="107">&nbsp;</td>
                  <td width="846"><img src="../header_buttons.jpg" alt="" width="836" height="84" border="0" usemap="#Map3" /></td>
                  <td width="26">&nbsp;</td>
                </tr>
                <tr>
                  <td height="36">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
                <map name="Map3" id="Map3">
                  <area shape="rect" coords="3,63,142,81" href="http://www.mottoptical.com/mott_optical_mkvision.html" target="_blank" />
                  <area shape="rect" coords="152,65,346,79" href="http://www.mottoptical.com/mott_optical_mottst.html" target="_blank" />
                  <area shape="rect" coords="361,65,531,78" href="http://www.mottoptical.com/mott_optical_flushing.html" target="_blank" />
                  <area shape="rect" coords="544,65,719,80" href="http://www.mottoptical.com/mott_optical_eastbdway.html" target="_blank" />
                  <area shape="rect" coords="735,65,826,79" href="http://mottoptical.com/mott_optical_mk2optical.html" target="_blank" />
                  <area shape="rect" coords="245,3,554,55" href="http://www.mottoptical.com/" target="_blank" />
                </map></td>
              </tr>
            <tr>
              <td width="6%" height="27">&nbsp;</td>
              <td width="94%"><table width="949" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="691"><font style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">CHANGE QUESTIONS</font></td>
                  <td width="170"><a href="admin.php" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Back to Control Panel</a></td>
                  <td width="88"><a href="<?php echo $logoutAction ?>" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Log Out</a>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="55" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 1:</td>
              <td valign="top"><?php echo $qn[0];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td width="6%" height="35" valign="top">&nbsp;</td>
              <td width="9%" valign="top">Change</td>
              <td width="71%" valign="top">
                <input name="q1" type="text" id="q1" size="100" /></td>
              <td width="14%" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 2:</td>
              <td valign="top"><?php echo $qn[1];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Change</td>
              <td valign="top"><input name="q2" type="text" id="q2" size="100" /></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 3:</td>
              <td valign="top"><?php echo $qn[2];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Change</td>
              <td valign="top"><input name="q3" type="text" id="q3" size="100" /></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 4:</td>
              <td valign="top"><?php echo $qn[3];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Change</td>
              <td valign="top"><input name="q4" type="text" id="q4" size="100" /></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 5:</td>
              <td valign="top"><?php echo $qn[4];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Change</td>
              <td valign="top"><input name="q5" type="text" id="q5" size="100" /></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Question 6:</td>
              <td valign="top"><?php echo $qn[5];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" valign="top">&nbsp;</td>
              <td valign="top">Change</td>
              <td valign="top"><input name="q6" type="text" id="q6" size="100" /></td>
              <td valign="top">&nbsp;</td>
            </tr>
            </table></td>
        </tr>
        <tr>
          <td height="56" valign="top"><br />
            <table width="105" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><a href="javascript:send();"><img src="../save.jpg" width="105" height="27" /></a></td>
            </tr>
          </table>            <br /></td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
  <tr>
    <td height="100" valign="top" bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</body>
</html>



