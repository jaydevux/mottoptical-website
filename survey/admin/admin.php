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
.radio1 {font-size: 12px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif;}
</style>
<script>
function send() {
			alert("Your questions have been saved.");
			document.form1.action="index.php";
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
                  <td width="822"><font style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">WELCOME ADMINISTRATOR</font></td>
                  <td width="81"> <a href="<?php echo $logoutAction ?>" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Log Out</a></td>
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
                <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                  <td width="266"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><a href="questions.php"><img src="../icons/change_question.jpg" width="100" height="100" /></a></td>
                    </tr>
                  </table></td>
                  <td width="266"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><a href="results.php"><img src="../icons/iresults.jpg" alt="" width="100" height="100" /></a></td>
                    </tr>
                  </table></td>
                  <td width="266"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><a href="statistics.php"><img src="../icons/statistics.jpg" alt="" width="100" height="100" /></a></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td style="text-align:center"><p><a href="questions.php" style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">CHANGE QUESTIONS</a></p></td>
                  <td style="text-align:center"><p><a href="results.php" style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">SEE INDIVIDUAL RESULTS</a></p></td>
                  <td style="text-align:center"><a href="statistics.php" style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">SEE GENERAL STATISTICS</a></td>
                </tr>
          </table>
                <br />
                <br />
                <table width="185" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><a href="http://mottoptical.com/survey/index.php" target="_blank"><img src="../preview_survey.jpg" alt="" width="185" height="27" border="0" /></a></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="56" valign="top">&nbsp;</td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
  <tr>
    <td height="88" valign="top" bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</body>
</html>
