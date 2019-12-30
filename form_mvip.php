<?php
	include('mime.php');
	include('email.php');	
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];



	
	$msgbody='<html><body><table width="100%"><tr><td><img src="http://www.mottoptical/images/mott_optical_about_01.jpg"></td></tr><tr><td><p class="BodyTextWhite"><br>
<br>
</p>
<p class="BodyTextSmall">Mott Street Optical, Inc <br>
  52 Mott Street, New York, NY 10013 <br>
  Phone: 212-431-8188 <br>
  </p></td></tr><tr>
  <td valign="top"><table width="100%" border="1" style="BORDER-COLLAPSE: collapse" bordercolor="#111111">
    <tr>
      <td colspan="3" bgcolor="#1F2A58" align="center"><font color="#FFFFFF"><strong>M-VIP REQUEST FORM</strong></font></td>
    </tr>
    <tr>
      <td width="35%" valign="top">First Name :</td>
      <td width="64%" valign="top"><font color="#3300CC">'.$firstname.'</font></td>
    </tr>
     <tr>
      <td valign="top"><span class="BodyTextWhite">E-Mail :</span></td>
      <td valign="top"><font color="#3300CC">'.$email.'</font></td>
    </tr>
     <tr>
      <td colspan="2" valign="top"><font color="#3300CC"></font><font color="#3300CC"></font></td>
      </tr>
  </table>  
</body></html>';
	
	
	$subject='M-VIP Request';
	$mimemessage = new email(array('X-Mailer: Mottoptical.com'));		
	$mimemessage->add_html($msgbody);
	$mimemessage->build_message();
	$mimemessage->send('Mottoptical', 'mottstoptical@gmail.com', 'MottOptical.com', 'MVIP@MottOptical.com', $subject);
//$mimemessage->send('Mottoptical', 'mottstoptical@gmail.com', 'MottOptical.com', 'MVIP@MottOptical.com', $subject);

	header('location:thanks.html');
?>
		