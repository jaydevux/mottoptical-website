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
	$contectno=$_POST['textfield32'];
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
	//if(isset($_POST['checkbox6']))
	//{
		//$productneeded =(($productneeded=='')?$_POST['checkbox6']:($productneeded.'<br>'.$_POST['checkbox6']));
	//}
	if(isset($_POST['checkbox7']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox7']:($productneeded.'<br>'.$_POST['checkbox7']));
		$productneeded .='(From '.$_POST['textfield4'].' To '.$_POST['textfield5'].')';
	}
	if(isset($_POST['checkbox8']))
	{
		$productneeded =(($productneeded=='')?$_POST['checkbox8']:($productneeded.'<br>'.$_POST['checkbox8']));
	}
	$ownerseler=$_POST['textfield6'];
	$selerdriverlicense=$_POST['textfield65'];
	$selersocialsequrity=$_POST['textfield652'];
	$buyer=$_POST['textfield62'];
	$buyerdriverlicense=$_POST['textfield653'];
	$byersocialsequrity=$_POST['textfield6522'];
	$loanamount=$_POST['textfield7'];
	//$buyer=$_POST['textfield62'].'&nbsp;&nbsp; <b>Amount: </b>$'.$_POST['textfield7'];
	$lender=$_POST['textfield622'];//.'&nbsp;&nbsp; <b>Amount: </b>$'.$_POST['textfield72'];
	//$legaldesc=$_POST['textfield63'];
	
	$perchaseprice=$_POST['textfield72'];
	$propertyaddress=$_POST['textfield63'];
	$municipality=$_POST['textfield64'];
	$country=$_POST['textfield642'];
	$taxlot=$_POST['textfield722'];
	$taxblock=$_POST['textfield723'];
	$existingmort='';
	if(isset($_POST['checkbox15']))
	{
		$existingmort =(($existingmort=='')?$_POST['checkbox15']:($existingmort.'<br>'.$_POST['checkbox15']));
	}
	if(isset($_POST['checkbox16']))
	{
		$existingmort =(($existingmort=='')?$_POST['checkbox16']:($existingmort.'<br>'.$_POST['checkbox16']));
	}
	/*$informationattached='';
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
	*/
	$selerattornyname=$_POST['textfield643'];
	$selerphone=$_POST['textfield6432'];
	$selerfirm=$_POST['textfield6433'];
	$selerfax=$_POST['textfield6434'];
	$seleraddress=$_POST['textfield6435'];
	$seleremail=$_POST['textfield6436'];
	
	$buyerattornyname=$_POST['textfield6437'];
	$buyerphone=$_POST['textfield64322'];
	$buyerfirm=$_POST['textfield64332'];
	$buyerfax=$_POST['textfield64342'];
	$buyeraddress=$_POST['textfield64352'];
	$buyeremail=$_POST['textfield64362'];
	
			$refinance=$_POST['r'];
			$floodcertification=$_POST['r1'];
			$surveyorder=$_POST['menu1'];
			$priortitlepolicy=$_POST['r2'];
			$filenoticeofsetelement=$_POST['r3'];
			$specialinstructionorrequest=$_POST['textfield8'];

	
	
	
	$msgbody='<html><body><table width="100%"><tr><td><img src="http://www.americantitleonline.com/images/atss_sub_01.jpg"></td></tr><tr><td><p class="BodyTextWhite"><br><span class="BodyTextBold">SEARCH ORDER FORM</span> <span class="BodyTextSmall"></span><br></p><p class="BodyTextSmall">American Title &amp; Settlement Services, LLC<br>43 Route 46, Suite 706, Pine Brook, NJ 07058<br>Phone: 973-244-1665 ext. 1424<br>Fax: 973-244-1449</p></td></tr><tr><td valign="top"><table width="100%" border="1" style="BORDER-COLLAPSE: collapse" borderColor="#111111"><tr><td colspan="3" bgcolor="#1F2A58" align="center"><font color="#FFFFFF"><strong><span class="BodyTextBold">SEARCH ORDER FORM</span></strong></font></td></tr><tr><td width="35%" valign="top">State:</td><td width="64%" valign="top"><font color="#3300CC">'.$state.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Date of Order:</span></td><td valign="top"><font color="#3300CC">'.$dateoforder.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Date Required:</span></td><td valign="top"><font color="#3300CC">'.$daterequired.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Order Placed By:</span></td><td valign="top"><font color="#3300CC">'.$orderplacedby.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Contect Phone:</span></td><td valign="top"><font color="#3300CC">'.$contectno.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Product Needed:</span></td><td valign="top"><font color="#3300CC">'.$productneeded.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Owner/Seller:</span></td><td valign="top"><font color="#3300CC">'.$ownerseler.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Driver License:</span></td><td valign="top"><font color="#3300CC">'.$selerdriverlicense.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Social Security:</span></td><td valign="top"><font color="#3300CC">'.$selersocialsequrity.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Buyer:</span></td><td valign="top"><font color="#3300CC">'.$buyer.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Driver License:</span></td><td valign="top"><font color="#3300CC">'.$buyerdriverlicense.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Social Security:</span></td><td valign="top"><font color="#3300CC">'.$byersocialsequrity.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Loan Amount:</span></td><td valign="top"><font color="#3300CC">$'.$loanamount.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Lender:</span></td><td valign="top"><font color="#3300CC">'.$lender.'</font></td></tr><tr><td valign="top"><span class="BodyTextBold">Purchase Price Amount:</span></td><td valign="top"><font color="#3300CC">$'.$perchaseprice.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Property Address:</span></td><td valign="top"><font color="#3300CC">'.$propertyaddress.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Municipality:</span></td><td valign="top"><font color="#3300CC">'.$municipality.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">County:</span></td><td valign="top"><font color="#3300CC">'.$country.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Tax Lot:</span></td><td valign="top"><font color="#3300CC">'.$taxlot.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Tax Block:</span></td><td valign="top"><font color="#3300CC">'.$taxblock.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Existing Mortgages to be:</span></td><td valign="top"><font color="#3300CC">'.$existingmort.'</font></td></tr><tr><td valign="top" colspan="2"><span class="BodyTextWhite">Seller/Owner&rsquo;s Attorny Info:</span></td><td valign="top"><font color="#3300CC"></font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Seller Attorny Name:</span></td><td valign="top"><font color="#3300CC">'.$selerattornyname.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Phone:</span></td><td valign="top"><font color="#3300CC">'.$selerphone.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Firm:</span></td><td valign="top"><font color="#3300CC">'.$selerfirm.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Fax:</span></td><td valign="top"><font color="#3300CC">'.$selerfax.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Address (Street, City, State & Zip):</span></td><td valign="top"><font color="#3300CC">'.$seleraddress.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Email:</span></td><td valign="top"><font color="#3300CC">'.$seleremail.'</font></td></tr><tr><td valign="top" colspan="2"><span class="BodyTextWhite">Buyer&rsquo;s Attorny Info:</span></td><td valign="top"><font color="#3300CC"></font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Buyer Attorny Name:</span></td><td valign="top"><font color="#3300CC">'.$buyerattornyname.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Phone:</span></td><td valign="top"><font color="#3300CC">'.$buyerphone.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Firm:</span></td><td valign="top"><font color="#3300CC">'.$buyerfirm.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Fax:</span></td><td valign="top"><font color="#3300CC">'.$buyerfax.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Address (Street, City, State & Zip):</span></td><td valign="top"><font color="#3300CC">'.$buyeraddress.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Email:</span></td><td valign="top"><font color="#3300CC">'.$buyeremail.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Refinance:</span></td><td valign="top"><font color="#3300CC">'.$refinance.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Order Flood Certification:</span></td><td valign="top"><font color="#3300CC">'.$floodcertification.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Survey Order:</span></td><td valign="top"><font color="#3300CC">'.$surveyorder.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Prior Title Policy:</span></td><td valign="top"><font color="#3300CC">'.$priortitlepolicy.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">File Notice of Settlement:</span></td><td valign="top"><font color="#3300CC">'.$filenoticeofsetelement.'</font></td></tr><tr><td valign="top"><span class="BodyTextWhite">Special Instructions or Requests:</span></td><td valign="top"><font color="#3300CC">'.$specialinstructionorrequest.'</font></td></tr></table></body></html>';
	
	
	$subject='New order form posted';
	$mimemessage = new email(array('X-Mailer: Americantitleonline.com'));		
	$mimemessage->add_html($msgbody);
	$mimemessage->build_message();
	$mimemessage->send('Americantitleonline', 'liwei@advertising-designs.com','Americantitleonlineadmin', 'test@test.com', $subject);
	//$mimemessage->send('Americantitleonline', 'programming@smartinfosys.net','Americantitleonlineadmin', 'test@test.com', $subject);
	//$mimemessage->send('Americantitleonline', 'test@smartinfosys.in','Americantitleonlineadmin', 'test@test.com', $subject);
	header('location:thanks.html');
?>
		