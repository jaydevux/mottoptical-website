<?php
	include('mime.php');
	include('email.php');	
	$state='';
	if(isset($_POST['checkbox22']))
	{
		$state =(($state=='')?$_POST['checkbox22']:($state.'<br>'.$_POST['checkbox22']));
	}
	if(isset($_POST['checkbox17']))
	{
		$state =(($state=='')?$_POST['checkbox17']:($state.'<br>'.$_POST['checkbox17']));
	}
	if(isset($_POST['checkbox172']))
	{
		$state =(($state=='')?$_POST['checkbox172']:($state.'<br>'.$_POST['checkbox172']));
	}
	$dateoforder=$_POST['textfield'];
	$daterequired=$_POST['textfield2'];
	$orderplacedby=$_POST['textfield3'];
	$productneeded='';
	if(isset($_POST['checkbox2']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox2']:($productneeded.'<br>'.$_POST['checkbox2']));
	}
	if(isset($_POST['checkbox']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox']:($productneeded.'<br>'.$_POST['checkbox']));
	}
	if(isset($_POST['checkbox3']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox3']:($productneeded.'<br>'.$_POST['checkbox3']));
	}
	if(isset($_POST['checkbox4']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox4']:($productneeded.'<br>'.$_POST['checkbox4']));
	}
	if(isset($_POST['checkbox5']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox5']:($productneeded.'<br>'.$_POST['checkbox5']));
	}
	if(isset($_POST['checkbox6']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox6']:($productneeded.'<br>'.$_POST['checkbox6']));
	}
	if(isset($_POST['checkbox7']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox7']:($productneeded.'<br>'.$_POST['checkbox7']));
		$productneeded .='(From '.$_POST['textfield4'].' To '.$_POST['textfield5'].')';
	}
	if(isset($_POST['checkbox8']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox8']:($productneeded.'<br>'.$_POST['checkbox8']));
	}
	$owner=$_POST['textfield6'];
	$buyer=$_POST['textfield62'].'&nbsp;&nbsp; <b>Amount: </b>$'.$_POST['textfield7'];
	$lender=$_POST['textfield622'].'&nbsp;&nbsp; <b>Amount: </b>$'.$_POST['textfield72'];
	$legaldesc=$_POST['textfield63'];
	$country=$_POST['textfield64'];
	$existingmort='';
	if(isset($_POST['checkbox15']))
	{
		$existingmort =(($existingmort=='')?$_POST['checkbox15']:($existingmort.'<br>'.$_POST['checkbox15']));
	}
	if(isset($_POST['checkbox16']))
	{
		$existingmort =(($existingmort=='')?$_POST['checkbox16']:($existingmort.'<br>'.$_POST['checkbox16']));
	}
	$informationattached='';
	if(isset($_POST['checkbox9']))
	{
		$informationattached =(($informationattached=='')?$_POST['checkbox9']:($informationattached.'<br>'.$_POST['checkbox9']));
	}
	if(isset($_POST['checkbox92']))
	{
		$informationattached =(($informationattached=='')?$_POST['checkbox92']:($informationattached.'<br>'.$_POST['checkbox92']));
	}
	if(isset($_POST['checkbox93']))
	{
		$informationattached =(($informationattached=='')?$_POST['checkbox93']:($informationattached.'<br>'.$_POST['checkbox93']));
	}
	if(isset($_POST['checkbox94']))
	{
		$informationattached =(($informationattached=='')?$_POST['checkbox94']:($informationattached.'<br>'.$_POST['checkbox94']));
	}
	$hardcopy='';
	if(isset($_POST['checkbox10']))
	{
		$hardcopy =(($hardcopy=='')?$_POST['checkbox10']:($hardcopy.'<br>'.$_POST['checkbox10']));
	}
	if(isset($_POST['checkbox11']))
	{
		$hardcopy =(($hardcopy=='')?$_POST['checkbox11']:($hardcopy.'<br>'.$_POST['checkbox11']));
	}
	if(isset($_POST['checkbox12']))
	{
		$hardcopy =(($hardcopy=='')?$_POST['checkbox12']:($hardcopy.'<br>'.$_POST['checkbox12']));
	}
	$please='';
	if(isset($_POST['checkbox13']))
	{
		$please =(($please=='')?$_POST['checkbox13']:($please.'<br>'.$_POST['checkbox13']));
	}
	if(isset($_POST['checkbox14']))
	{
		$please =(($please=='')?$_POST['checkbox14']:($please.'<br>'.$_POST['checkbox14']));
	}
	$specialinst=$_POST['textfield8'];
	
	
	$msgbody='<html><body><table width="100%"><tr><td><img src="http://www.americantitleonline.com/images/atss_sub_01.jpg"></td></tr><tr><td><p class="BodyTextWhite"><br><span class="BodyTextBold">SEARCH ORDER FORM</span> <span class="BodyTextSmall">(Click here to download)</span><br>Agent #: 10-9530</p><p class="BodyTextSmall">American Title &amp; Settlement Services, LLC<br>43 Route 46, Suite 706, Pine Brook, NJ 07058<br>Phone: 973-244-1665 ext. 1424<br>Fax: 973-244-1449</p></td></tr><tr><td valign="top"><table width="100%" border="1" style="BORDER-COLLAPSE: collapse" borderColor="#111111"><tr><td colspan="3" bgcolor="#1F2A58" align="center"><font color="#FFFFFF"><strong><span class="BodyTextBold">SEARCH ORDER FORM</span></strong></font></td></tr><tr><td width="35%" valign="top">State:</td><td width="64%" valign="top"><font color="#3300CC">'.$state.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Date of Order:</span></td><td valign="top"><font color="#3300CC">'.$dateoforder.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Date Required:</span></td><td valign="top"><font color="#3300CC">'.$daterequired.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Order Placed By:</span></td><td valign="top"><font color="#3300CC">'.$orderplacedby.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Product Needed:</span></td><td valign="top"><font color="#3300CC">'.$productneeded.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Owner:</span></td><td valign="top"><font color="#3300CC">'.$owner.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Buyer:</span></td><td valign="top"><font color="#3300CC">'.$buyer.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Lender:</span></td><td valign="top"><font color="#3300CC">'.$lender.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Legal Description (property address):</span></td><td valign="top"><font color="#3300CC">'.$legaldesc.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Country:</span></td><td valign="top"><font color="#3300CC">'.$country.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Existing Mortgages to be:</span></td><td valign="top"><font color="#3300CC">'.$existingmort.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Information Attached:</span></td><td valign="top"><font color="#3300CC">'.$informationattached.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">In addition to a hard copy please:</span></td><td valign="top"><font color="#3300CC">'.$hardcopy.'</font></td></tr><tr><td valign="top"><span class="BodyTextBold">Please:</span></td><td valign="top"><font color="#3300CC">'.$please.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Special Instructions:</span></td><td valign="top"><font color="#3300CC">'.$specialinst.'</font></td></tr></table></body></html>';
	
	
	$subject='New order form posted';
	$mimemessage = new email(array('X-Mailer: Americantitleonline.com'));		
	$mimemessage->add_html($msgbody);
	$mimemessage->build_message();
	$mimemessage->send('Americantitleonline', 'amtefax@americantitleonline.com','Americantitleonlineadmin', 'test@test.com', $subject);
	//$mimemessage->send('Americantitleonline', 'liwei@advertising-designs.com','Americantitleonlineadmin', 'test@test.com', $subject);
	//$mimemessage->send('Americantitleonline', 'test@smartinfosys.in','Americantitleonlineadmin', 'test@test.com', $subject);
	header('location:thanks.html');
?>
		