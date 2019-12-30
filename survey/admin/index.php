<?php require_once('../Connections/dbo396663784.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_dbo396663784, $dbo396663784);
$query_Recordset1 = "SELECT `user`.username, `user`.password FROM `user`";
$Recordset1 = mysql_query($query_Recordset1, $dbo396663784) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "admin.php";
  $MM_redirectLoginFailed = "failure.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_dbo396663784, $dbo396663784);
  
  $LoginRS__query=sprintf("SELECT username, password FROM `user` WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $dbo396663784) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SURVEY - MottOptical.com - Mott Street Optical, Flushing Optical, Universal Optical, Newest Designer Eyewear &amp; Contact Lens</title>
<style type="text/css">
body {
	background-image: url(../bkground_ma3.jpg);
	background-repeat: repeat;
}

</style>

</head>

<body>
<table width="1023" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1023" height="530" valign="top" style="background-image:url(../bg2.jpg); background-repeat:no-repeat">
    
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="219" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="158" colspan="2" valign="top"><br />
                <table width="943" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="63">&nbsp;</td>
                  <td width="846"><img src="../header_buttons.jpg" alt="" width="836" height="84" border="0" usemap="#Map3" /></td>
                  <td width="26">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
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
              <td width="94%"><table width="903" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="739"><font style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">CONTROL PANEL</font></td>
                  <td width="164" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">Please Log In</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="55" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="260" valign="top"><br />
                <br />
                <br />
                <br />
                <table width="265" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="265" height="83"><form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
                      <table width="266" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="104" height="36"><font style=" size:18; color:#000; text-align:right; font-weight:bold; font-family: Arial, Helvetica, sans-serif">USERNAME:</font></td>
                          <td width="139"><label for="username"></label>
                            <input type="text" name="username" id="username" /></td>
                        </tr>
                        <tr>
                          <td height="40"><font style=" size:18; color:#000; text-align:right; font-weight:bold; font-family: Arial, Helvetica, sans-serif">PASSWORD:</font></td>
                          <td><label for="password"></label>
                            <input type="password" name="password" id="password" /></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><table width="153" height="20" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="102">&nbsp;</td>
                              <td width="51"><input type="submit" name="login" id="login" value="Log In" /></td>
                            </tr>
                          </table></td>
                        </tr>
                      </table>
                    </form></td>
                  </tr>
                </table>
                <br /></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="56" valign="top">&nbsp;</td>
        </tr>
      </table>
   
    </td>
  </tr>
  <tr>
    <td height="88" valign="top" bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
