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

function popitup(url) {
	newwindow=window.open(url,'Comment','height=200,width=150');
	if (window.focus) {newwindow.focus()}
	return false;
}
</script>

</head>

<body>
<table width="1023" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1023" height="354" valign="top" style="background-image:url(../bg2.jpg); background-repeat:no-repeat; padding:0 30px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
              <td height="94" colspan="2"><table width="943" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="63" height="107">&nbsp;</td>
                  <td width="846"><img src="../header_buttons.jpg" alt="" width="836" height="84" border="0" usemap="#Map3" /></td>
                  <td width="26">&nbsp;</td>
                </tr>
                <tr>
                  <td height="42">&nbsp;</td>
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
                  <td width="691"><font style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">INDIVIDUAL RESULTS</font></td>
                  <td width="170"><a href="admin.php" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Back to Control Panel</a></td>
                  <td width="88"><a href="<?php echo $logoutAction ?>" style="color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Log Out</a>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
        </table>
<br />
            <br />
            <table width="900" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="58">&nbsp;</td>
                <td width="842"><font style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Note:</font><font style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:14px; ">&nbsp; To read <em>comments</em> press the number answered for each question.</font></td>
              </tr>
            </table><form  name="form2" id="form2" method="post">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="0">&nbsp;</td>
        </tr>
        <tr>
          <td height="55" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="19" valign="top">&nbsp;</td>
              <td width="8%" valign="top">Question 1:</td>
              <td width="79%" valign="top"><?php echo $qn[0];  ?></td>
              <td width="7%" valign="top">&nbsp;</td>
            </tr>
            <tr>
            </tr>
            <tr>
              <td height="19" valign="top">&nbsp;</td>
              <td valign="top">Question 2:</td>
              <td valign="top"><?php echo $qn[1];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
            </tr>
            <tr>
              <td height="19" valign="top">&nbsp;</td>
              <td valign="top">Question 3:</td>
              <td valign="top"><?php echo $qn[2];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr></tr>
            <tr>
              <td height="19" valign="top">&nbsp;</td>
              <td valign="top">Question 4:</td>
              <td valign="top"><?php echo $qn[3];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
            </tr>
            <tr>
              <td height="19" valign="top">&nbsp;</td>
              <td valign="top">Question 5:</td>
              <td valign="top"><?php echo $qn[4];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
            </tr>
            <tr>
              <td height="19" valign="top">&nbsp;</td>
              <td valign="top">Question 6:</td>
              <td valign="top"><?php echo $qn[5];  ?></td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
            </tr>
            </table></td>
        </tr>
      </table>
    </form><br />

<form  name="form1" id="form1" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="-0" valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="58">&nbsp;</td>
              <td width="842"><font style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">User Supplied Data </font></td>
            </tr>
          </table> </td>
        </tr>
        <tr>
          <td height="55" valign="top"><p>
            <?php   
			require '../connect.php';


$d=$_GET['delete'];
if ($d==1) {
	$query1 = mysql_query("delete from results;");
}
$query1 = mysql_query("select* from results;");
if (!mysql_fetch_array($query1)) echo 'No results'; 
else {
$query1 = mysql_query("select* from results;");

$m=1;
echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">
        
        <tr>
          <td height="55" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="22" valign="top"><strong>#</strong></td>
              <td valign="top"><strong>Name</strong></td>
              <td valign="top"><strong>Email</strong></td>
              <td valign="top"><strong>Q 1</strong></td>
              <td valign="top"><strong>Q 2</strong></td>
              <td valign="top"><strong>Q 3</strong></td>
              <td valign="top"><strong>Q 4</strong></td>
              <td valign="top"><strong>Q 5</strong></td>
              <td valign="top"><strong>Q 6</strong></td>
            </tr>
			<tr>
              <td height="4" colspan="9"  bgcolor="#CCCCCC"></td>
            </tr>';
while ($a = mysql_fetch_array($query1)) {
			echo'<tr>';
			echo '<td width="20px">'.$m.'</td>';
			echo '<td width="150px">'.$a['name'].'</td>';
			echo '<td width="360px"><a href="mailto:'. $a['email'].'">'.$a['email'].'</a></td>';
			if ($a['c1']!='') { $v1='<a target="_new" href="comment.php?comment='.$a['c1'].'">' ; $v2='</a>';   }
			echo '<td width="50px">'.$v1.$a['q1'].$v2.'</td>';
			$v1='';$v2='';
			if ($a['c2']!='') { $v1='<a target="_new" href="comment.php?comment='.$a['c2'].'">' ; $v2='</a>';   }
			echo '<td width="50px">'.$v1.$a['q2'].$v2.'</td>';
			$v1='';$v2='';
			if ($a['c3']!='') { $v1='<a target="_new" href="comment.php?comment='.$a['c3'].'">' ; $v2='</a>';   }
			echo '<td width="50px">'.$v1.$a['q3'].$v2.'</td>';
			$v1='';$v2='';
			if ($a['c4']!='') { $v1='<a target="_new" href="comment.php?comment='.$a['c4'].'">' ; $v2='</a>';   }
			echo '<td width="50px">'.$v1.$a['q4'].$v2.'</td>';
			$v1='';$v2='';
			if ($a['c5']!='') { $v1='<a target="_new" href="comment.php?comment='.$a['c5'].'">' ; $v2='</a>';   }
			echo '<td width="50px">'.$v1.$a['q5'].$v2.'</td>';
			$v1='';$v2='';
			if ($a['c6']!='') { $v1='<a target="_new" href="comment.php?comment='.$a['c6'].'">' ; $v2='</a>';   }
			echo '<td width="50px">'.$v1.$a['q6'].$v2.'</td>';
			echo'</tr>';	
			echo'<tr>
              <td height="3" colspan="9"  bgcolor="#CCCCCC"></td>
            </tr>';
			$m++;	
}
echo "</table>";
	
}
?>
          </p></td>
        </tr>
        <tr>
          <td height="56" valign="top"><br />
            <table width="948" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="6%" height="30">&nbsp;</td>
                <td width="20%"><a href="javascript:print();"><img src="../print.jpg" alt="" width="185" height="27" border="0" usemap="#MapMap" /></a></td>
                <td width="56%">&nbsp;</td>
                <td width="18%"><a href="results.php?delete=1"><img src="../delete.jpg" width="185" height="27" border="0" /></a></td>
              </tr>
          </table>
            <br />
            <br />
            <table width="900" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="83">&nbsp;</td>
                <td width="817"><font style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold"> WARNING:</font><font style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:14px; ">&nbsp; If you press the <em>&quot;Delete Results&quot;</em> button, you will lose all user supplied data and the statistcs results will be reset.</font></td>
              </tr>
            </table>
            <br /></td>
        </tr>
      </table>
</form>
    </td>
  </tr>
</table>
<br />
</body>
</html>
