<?php $this->load->view("header", "", $result); ?>



<script type="text/javascript">







function catalogPayment(id){



	var paymentStatus = '<?php echo $userInfo[0]["afrooPaymentStatus"];?>';



	if(paymentStatus == '1'){



		$.fancybox.open('You have allready bought the Afrowebb Catalogue.So please continue.');



	}else{

		window.location.href='<?php echo base_url();?>gbe_payment/catalog/'+id;	



		return true;



	}



}



</script>

<script type="text/javascript" src="<?php echo base_url();?>js/jquery.zclip.js"></script>

<script type='text/javascript' src='<?php echo base_url(); ?>js/custom_common.js'></script>





<style type="text/css">

table td{width:auto !important; max-width:none !important;}

table td{width:auto !important; max-width:none !important;}



.tabdaysworked, .tabreferrals, .tabreferralsdetails   {

    width: 292px !important;

}

.tabentrancelvl {

    width: 327px !important;

}



.start-newcycle {

    background: #258f0d;

    color: #fff;

    display: block;

    float: left;

    font-size: 21px;

    height: 45px;

    line-height: 21px;

    margin-top: 20px;

    padding: 16px;

    text-align: center;

    width: 180px;

}



.start-newcycleexit {

    background: #9c0b0d;

    color: #fff;

    display: block;

    float: left;

    font-size: 21px;

    height: 45px;

    line-height: 21px;

    margin-left: 40px;

    margin-top: 20px;

    padding: 16px;

    text-align: center;

    width: 180px;

	position:inherit;

}

.clear{clear:both; line-height:0; font-size:0;}

.newcycle-popup {

     background: #fff none repeat scroll 0 0;

    border: 2px solid #939393;

    border-radius: 5px;

    color: #414141;

    display: none;

    font: 17px/22px Arial,Helvetica,sans-serif;

    left: 20%;

    padding: 40px 20px;

    position: absolute;

    text-align: center;

    top: 40%;

    width: 780px;

    z-index: 999;

}

span.closee{/* background: #fff none repeat scroll 0 0;

    border: 1px solid #5c5c5c;*/

    border-radius: 30px;

    color: #cf1111;

    height: 11px;

    margin-top: -40px;

    padding: 5px;

    position: absolute;

    right: 4px;

    width: 12px;

	cursor:pointer;

}

.newpopupbitcoin{font-family:Arial, Helvetica, sans-serif; font-weight:normal;}

.newpopupbitcoin h4{   color: #652a8a !important;

    font-family: arial !important;

    font-size: 25px !important;

    font-weight: bold !important;}

.newpopupbitcoin h3{   color: #000 !important;

    font-family: arial !important;

    font-size: 22px !important;

    font-weight: bold !important;}

	.newpopupbitcoin h1{  color: #652a8a !important;

    font-family: arial !important;

    font-size: 40px !important;

    font-weight: normal !important; margin: 20px 0 !important;}

.newpopupbitcoin .bluepan{    background: #e2b9ff none repeat scroll 0 0;

    clear: both;

    color: #652a8a;

    padding: 20px 0 !important;}

.bittcoin-button{ background: #6f3194 none repeat scroll 0 0;

    color: #fff !important;

    display: block !important;

    font-family: arial !important;

    font-size: 34px !important;

    font-weight: bold !important;

    margin: 0 auto !important;

    padding: 25px !important;

    text-align: center !important;

    width: 370px !important;

}

.newpopupbitcoin p.red{   color: #fe1a24 !important;

    font-family: arial !important;

    font-size: 25px !important;

    font-weight: normal !important; padding:20px 0 10px 0 !important;}

.newpopupbitcoin h2{  color: #000560 !important;

    font-family: arial !important;

    font-size: 40px !important;

    font-weight: normal !important; margin: 20px 0;}

.learnaboutct-button{ background: #0016ff none repeat scroll 0 0;

    color: #fff !important;

    display: block;

    font-family: arial !important;

    font-size: 34px !important;

    font-weight: bold !important;

    margin: 0 auto !important;

    padding: 22px 30px 10px !important;

    position: inherit !important;

    text-align: center !important;

    width: 280px !important;

}
.newdemotext h3 {
    color: #fff;
font-size: 20px;
line-height: 22px;
}
.newdemotext h2 a{color: #fff;
font-size: 20px;
margin: 5px 0 15px 0;
display: inline-block;}
</style>

 <script type="text/javascript">



//var userLevel  = <?php if($userInfo[0]['userLevel']>0) {echo $userInfo[0]['userLevel'].";";} else { echo "".";"; } ?>

var formSubmitMsg = "<?php echo $msg;?>";

var formSubmitType = "<?php echo $type;?>";



jQuery(document).ready(function($){	

 $('.close_btn_level').click(function(){

	 	$('.ppup_level').remove();

		

	 }); 

	  $('.close_btn_levelq1').click(function(){

	 	

		$('.ppup_levelq1').remove();

	 }); 

	 $('.close_btn_levelq2').click(function(){

	 	

		$('.ppup_levelq2').remove();

	 }); 

	 

	  $('.close_btn_levelq3').click(function(){

	 	

		$('.ppup_levelq3').remove();

	 }); 

	  $('.close_btn_levelq4').click(function(){

	 	

		$('.ppup_levelq4').remove();

	 }); 

	 // move up process

	  $("#moveUp").click(function(){

		//alert('click'); 

		$.ajax({

		 type: "POST",

		 url:  "<?php echo base_url();?>dashboard/moveUpTonextLevel", 

		 data: "payment=1&group=0",

		 cache:false,

		 dataType: "json",

		  beforeSend: function() {

				$('#loading').show();  // show loading indicator

			  },

		 success: 

			  function(data){

			   //alert(data);  //as a debugging message		

				$('#loading').hide();  // hide loading indicator

				if(data.success == "yes")

				{	

					

					$('.ppup_level').remove();

					alert(data.message);

					//$.fancybox.open(data.message);					

				}

				else{

					//$.fancybox.open(data.message);

					alert(data.message);

				} 

			  }

		  });

	 });

	 

	 // move up process

	  $("#moveUp2").click(function(){

		//alert('click'); 

		$.ajax({

		 type: "POST",

		 url:  "<?php echo base_url();?>dashboard/moveUpTonextLevel3", 

		 data: "payment=1&group=0",

		 cache:false,

		 dataType: "json",

		 beforeSend: function() {

				$('#loading').show();  // show loading indicator

			  },

		 success: 

			  function(data){

			   //alert(data);  //as a debugging message	

				$('#loading').hide();  // hide loading indicator			   

				if(data.success == "yes")

				{	

					$('.ppup_level').remove();

					alert(data.message);

					//$.fancybox.open(data.message);					

				}

				else{

					//$.fancybox.open(data.message);

					alert(data.message);

				} 

			  }

		  });

	 });

	 

	 // move up process

	  $("#moveUp3").click(function(){

		//alert('click'); 

		$.ajax({

		 type: "POST",

		 url:  "<?php echo base_url();?>dashboard/moveUpTonextLevel4", 

		 data: "payment=1&group=0",

		 cache:false,

		 dataType: "json",

		 beforeSend: function() {

				$('#loading').show();  // show loading indicator

			  },

		 success: 

			  function(data){

			   //alert(data);  //as a debugging message	

				$('#loading').hide();  // hide loading indicator			   

				if(data.success == "yes")

				{	

					$('.ppup_level').remove();

					alert(data.message);

					//$.fancybox.open(data.message);					

				}

				else{

					//$.fancybox.open(data.message);

					alert(data.message);

				} 

			  }

		  });

	 });

	 

	 // move up process

	  $("#moveUp4").click(function(){

		//alert('click'); 

		$.ajax({

		 type: "POST",

		 url:  "<?php echo base_url();?>dashboard/moveUpTonextLevel5", 

		 data: "payment=1&group=0",

		 cache:false,

		 dataType: "json",

		 beforeSend: function() {

				$('#loading').show();  // show loading indicator

			  },

		 success: 

			  function(data){

			   //alert(data);  //as a debugging message	

				$('#loading').hide();  // hide loading indicator

				if(data.success == "yes")

				{	

					$('.ppup_level').remove();

					alert(data.message);

					//$.fancybox.open(data.message);					

				}

				else{

					//$.fancybox.open(data.message);

					alert(data.message);

				} 

			  }

		  });

	 });

	 

	 

	/*  $("#nxtCycleMsg").click(function(){

		

		alert('test message');

		

	 }); */

	 

});

</script>

<?php 

$myCurrPosition = $rs[$current_user_cycle]['myCurrPosition'];

$userLevel = $rs[$current_user_cycle]['userLevel'];

  if($myCurrPosition > 64 && $myCurrPosition < 320){ 

	//if($myCurrPosition > 64 && $userInfo[0]["userLevel"]==2){ ?>

<div class="ppup_levelq1" style="padding-top:10px;">

<div class="ppup_inr">

<div id="levelup_alert" class="switch mov_up"><a href="javascript:;" class="close_btn_levelq1" title="Close"></a>

<img style="border: 2px solid #c5bda1; border-radius: 5px;" width="" height="" alt="" src="<?php echo base_url();?>images/completed-q0img.png"> 

</div><br class="clear" />

</div>



</div>

	<?php //}

	}  else if($myCurrPosition > 320 && $myCurrPosition < 577){ 

	//if($myCurrPosition > 320 && $userInfo[0]["userLevel"]==3){ ?>

<div class="ppup_levelq2" style="padding-top:10px;">

<div class="ppup_inr">

<div id="levelup_alert" class="switch mov_up"><a href="javascript:;" class="close_btn_levelq2" title="Close"></a>

<img style="border: 2px solid #c5bda1; border-radius: 5px;" width="" height="" alt="" src="<?php echo base_url();?>images/completed-q1img.png"> 

</div><br class="clear" />

</div>



</div>

<?php //}

} 

 else if($myCurrPosition > 576 && $myCurrPosition < 834){

	// if($myCurrPosition > 576 & $userInfo[0]["userLevel"]==3){ ?>

<div class="ppup_levelq3" style="padding-top:10px;">

<div class="ppup_inr">

<div id="levelup_alert" class="switch mov_up"><a href="javascript:;" class="close_btn_levelq3" title="Close"></a>

<img style="border: 2px solid #c5bda1; border-radius: 5px;" width="" height="" alt="" src="<?php echo base_url();?>images/completed-q3img.png"> 

</div><br class="clear" />

</div>



</div>

<?php //}

}

  else if($myCurrPosition > 833 && $myCurrPosition < 1089){

	//if($myCurrPosition > 833 & $userInfo[0]["userLevel"]==4){ ?>

<div class="ppup_levelq4" style="padding-top:10px;">

<div class="ppup_inr">

<div id="levelup_alert" class="switch mov_up"><a href="javascript:;" class="close_btn_levelq4" title="Close"></a>

<img style="border: 2px solid #c5bda1; border-radius: 5px;" width="" height="" alt="" src="<?php echo base_url();?>images/completed-q4img.png"> 

</div><br class="clear" />

</div>



</div>

<?php //} 

}



if($myCurrPosition > 1088){

	if($myCurrPosition > 1088 && $userLevel==5){ ?>

<div class="ppup_level" style="padding-top:10px;">

<div class="ppup_inr">

<div id="levelup_alert" class="switch mov_up"><a href="javascript:;" class="close_btn_level" title="Close"></a>

<img style="border: 2px solid #c5bda1; border-radius: 5px;" width="" height="" alt="" src="<?php echo base_url();?>images/completed-q5img.png">

 <!-- <a href="#" class="start-newcycle">Start A New <br />

Life Cycle</a>

  <a href="#" class="start-newcycleexit">Exit The <br />

Queue</a>-->

  <div class="switch_extrapara" style="width:470px; margin:0 auto;">

    <p class="swt_img" style="margin:0;"><a id="nxtCycleMsg" href="javascript:;" class="start-newcycle">Start A New <br />

Life Cycle</a>



<a href="javascript:;" class="start-newcycleexit close_btn_level">Exit The <br />

Queue</a></p>

  </div>

</div><br class="clear" />

</div>



</div>

<?php } 

}else {?>

<!--<div class="ppup_level" style="padding-top:5px;">

<div class="ppup_inr">

<div id="levelup_alert" class="switch mov_up walletpopup"><a href="javascript:;" class="close_btn_level" title="Close"></a>

  <h2>ATTENTION</h2>

  <p class="ctsimulation">CT is still in Simulation Mode</p>

  <h3>You Don't Need To View Adverts Yet</h3>

  <p class="queue">Your Position In The Queue is Secured</p>

  <br />

  <h4>WATCH ALL THREE VIDEOS ON THIS PAGE</h4>

  <p class="simplebuild">Then Simply Build Your Network By<br />

Introduce People Into Your Team<br />

And Prepare For The Launch..<br />

Thats It.

  </p>

  <br />

  <p class="simplebuildgry">Due To A Large Number of People Joining CT.<br />

We Are lengthening the Queues.<br />

Your Position may move down and your

simulated income will change.</p>

<p class="simplebuildgry">This is for the sustainability of

Community Treasures.<br />

<br />

Thank You</p>

<br />

<a href="javascript:;" class="enter-buttonn close_btn_level">Enter Your Page</a>

</div>

</div>

</div>-->
<?php 
if(empty($userPaymentStatus)){
 ?>
<div class="ppup_level" style="padding-top:5px;">

<div class="ppup_inr">

<div id="levelup_alert" class="switch mov_up walletpopup"><a href="javascript:;" class="close_btn_level" title="Close"></a>

<div class="newpopupbitcoin">

<div class="bluepan">

<h4>Launch Members</h4>

<h1>Get Your Live Position Now<br />

To Start Earning</h1>

<a target="_blank" href="https://communitytreasures.co/signup/commonSignUpForFounder/<?php echo $idlink; ?>" class="bittcoin-button">Bitcoin Enter Here</a>

</div>

<br class="clear" />

<p class="red">First Time To This Site?</p>

<h2>Welcome To<br />

Community Treasures</h2>

<h3>WATCH ALL THREE VIDEOS ON THIS PAGE</h3>

<a href="#" class="learnaboutct-button close_btn_level">Learn About CT</a>

</div>

 

<!--<a class="enter-buttonn close_btn_level" target="_blank" href="https://communitytreasures.co/signup/commonSignUpForFounder/<?php //echo $idlink; ?>"> Click to Pay</a>-->

  

  <!--<div class="switch_extrapara">

    <p class="swt_img"><a href="javascript:;"><img width="424" height="81" style="cursor:pointer" alt="" src=""></a></p>

  </div>-->

</div>

</div>

</div>



<?php 
}//end lightbox conditional loop
} ?>



<?php $this->load->view("nav_header", "", $result); ?>











<!--ADDING COMMON FORM-->







<?php $this->load->view("commonform", "", $result); ?>







<!--END OF ADDING COMMON FORM--> 







<!-- header end --> 







<!-- main container start -->







<div class="main_container_new ddsh raveshare"> 



  



  <!-- lefts side start -->



  



  <div class="lefts_side" style="background:#fa9191;"> 



    



    <!--tab start-->



    



    <div class="tabsectionstep">  



	 <div id="contentId">



     



		<!--<h3>My CT Wallet</h3>-->



	

				<?php 

/*echo "<pre>";

print_r($rs);

echo "</pre>";*/

				if($this->session->userdata('userType')=="ADMIN"){ ?>

		<div class="totalcurrentsystem">Members In The Queue - CT LAUNCH : <strong><?php echo number_format($raveActiveUser+12000); ?></strong></div>
<div class="newdemotext">
<h3>THIS DEMO AREA: Shows What You Can Earn Every Time <br />
New Members Join & You Move Up The Queue.</h3>
<h2><a href="#"><strong>'GO LIVE' To Start Earning in Bitcoin Right Now</strong></a></h2>
</div>
				<?php } ?>



					<?php foreach($rs as $key=>$val){ 

					extract($val);

					?>

					<p class="myspendabletab">My Income on life Cycle <?php echo $key; ?><span><?php echo $currSymbol; ?><?php echo number_format($totalAmt,2);//$spendableAmt; ?></p>

					<?php } ?>





					<?php foreach($rs as $key=>$val){ 

					extract($val);

					?>

					<?php if($raveType=="founder" || $raveType=="Founder"){ 		



					?>



					<p class="myspendabletab blue">Founders Bonus LC<?php echo $key; ?> (<?php echo $currSymbol; ?><?php echo $founderBonus; ?>)<span><?php echo $currSymbol; ?><?php echo number_format($founderTotal,2); ?></p>



					<?php } ?>

					<?php } ?>



	



		<div>



			<div >

				<?php 



foreach($rs as $key=>$val){ 

					       extract($val);

				if($userLevel==2 || $userLevel==3 || $userLevel==4){ ?>

				<div>



				 <table width="98%" cellspacing="0" cellpadding="0" border="0">



					<tbody>



					  <tr>					



						<th>Amount of Days I Worked(<?php echo digitToNumberConvert($key); ?> life Cycle) </th>					



					

						<th>Count-down to Enter Q<?php echo $userLevel+1; ?></th>

						



					  </tr>



					  <tr>



						  <td class="tabdaysworked"><?php echo $counter." ".$day; ?></td>



						  <td><?php if($nextLevelEntry>0){ ?><?php //echo $currSymbol; ?><?php echo number_format($entLNextBalance-$nextLevelEntry,2); ?><?php } ?></td>



					  </tr>



					 </tbody>



			    </table>



				</div>

				<?php } 

}



				?>



				



<br/>

<?php 



foreach($rs as $key=>$val){ 

					       extract($val);

					       ?>

				<div style="margin-top:15px;">



				<table width="98%" cellspacing="0" cellpadding="0" border="0">



					<tbody>



					  <tr>					



						<th style="max-width:153px;">People That I have Introduced (Referrals)</th>					



						<th>My Referral Commissions(<?php echo digitToNumberConvert($key); ?> life Cycle) </th>



					  </tr>



					  <tr>



						  <td class="tabreferrals"><?php 

                        



						 echo $MyReferrals." ".$member; ?></td>



						  <td><?php echo $currSymbol; ?><?php echo ($myReferalTotal?number_format($myReferalTotal,2):'0.00');  ?></td>



					  </tr>



					 </tbody>



			    </table>



				</div>

<?php } ?>

				<!--<div>



			  <table id="commTbl" width="98%" cellspacing="0" cellpadding="0" border="0">



				<tbody>



				  <tr>							



					<th>My Work Days </th>



					<th>My Commission (<?php echo $currSymbol; ?>)</th>



					<th>Referral Commissions (<?php echo $currSymbol; ?>)</th>



				  </tr>



				  



					<?php if($counter!=0) { 



											



							$CycleCommDetail = ($perCommAmt+$founderCom)*$counter;	



						



										



					



					?><tr>



					 <td style="text-align:center;"><?php echo $counter; ?></td>



                    <td style="text-align:center;"><?php echo $currSymbol; ?><?php echo number_format($CycleCommDetail,2); ?></td>



					<td style="text-align:center;"><?php echo $currSymbol; ?><?php echo ($myReferalTotal?number_format($myReferalTotal,2):'0.00'); ?></td>



					 </tr>	



					<?php } else{ ?>



					<tr><td colspan="3">No record available</td> </tr>	



					<?php } ?>



				 			  



				 </tbody>



			  </table>



            </div>-->



				<?php //if($userInfo[0]['userLevel']==2 || $userInfo[0]['userLevel']==3 || $userInfo[0]['userLevel']==4){ ?>



				 <p>&nbsp;</p>



				 <!--<h3>My Bonuses</h3>



				 <table width="98%" cellspacing="0" cellpadding="0" border="0">



					<tbody>



					  <tr>					



						<th>Opportunity Balance </th>					



						<th><?php echo $middleBonusName; ?> Balance </th>



						<th>Karma Balance </th>



					  </tr>



					  <tr>



						  <td class="mybonustab"><?php echo $currSymbol; ?><?php echo number_format($opportunityBalance,2); ?></td>



						  <?php if($userInfo[0]['userLevel']==4){  ?>



						  <td><?php echo $currSymbol; ?><?php echo number_format($seedBalance,2); ?></td>



						  <?php } else { ?>



						  <td><?php echo $currSymbol; ?><?php echo number_format($seedBalance,2); ?></td>



						  <?php }?>



						  <td><?php echo $currSymbol; ?><?php echo number_format($karmaBalance,2); ?></td>



					  </tr>



					 </tbody>



			    </table> -->



				<?php //}



				//if($userInfo[0]['userLevel']==2 || $userInfo[0]['userLevel']==3 || $userInfo[0]['userLevel']==4){ ?>



				<p>&nbsp;</p>



				 <!--<h3> Entrance Level <?php //echo $userInfo[0]['userLevel']+1; ?></h3>-->

				 <h3>Active Commission</h3>

<?php 

/*echo "<pre>";

	print_r($rs);

	echo "</pre>";*/

foreach($rs as $key=>$val){ 

	

					       extract($val);

					       ?>

				 <table width="98%" cellspacing="0" cellpadding="0" border="0"  style="margin-top:15px;">



					<tbody>



					  <tr>					



						<!--<th> Entrance Level <?php // echo $userInfo[0]['userLevel']+1; ?></th>	-->				

						<th>Active Commission</th>

						<!--<th class="tabentrancelvl">Days Worked </th>-->



					  </tr>



					  <tr>



						  <td><?php echo $currSymbol; ?><?php echo number_format($activeTotal,2); ?>(<?php echo digitToNumberConvert($key); ?> life Cycle)</td>



						 <!-- <td><?php echo $counter; ?></td>-->



					  </tr>



					 </tbody>



			    </table>



				<?php } ?>



			 </div>			 



			



			 <div class="refClass">



			  <h3>Referral Details</h3>



			  <div>

<?php 

/*echo "<pre>";



//print_r($MyOldUserIdLists);

print_r($allAccountDetail);

//print_r($myReferalCommDetail);

echo "</pre>";*/





 ?>

              

 <div id="accordion">

  <?php if(count($myReferalCommDetail)>0){



						 foreach($myReferalCommDetail as $key=>$myReferalCommDetails){

 



						 ?>



  <h3>View Your referred Members who are in their <?php echo digitToNumberConvert($key); ?> life Cycle</h3>

  <div class="ref-scroll">

   <table id="refCommTbl" width="100%" cellspacing="0" cellpadding="0" border="0">



					<tbody>



					  <tr>	



						<th>User Name </th>	

						<th>Level & Life Cycle</th>						



						<th>Days Worked </th>



						<th>Referral Commission </th>



					  </tr>					 



					 <?php 

                    if(count($myReferalCommDetails)>0){

							 foreach($myReferalCommDetails as $myReferalCommDetails){



/*echo "<pre>";

print_r($myReferalCommDetails);

echo "</pre>";	*/

  /*  [invtAmt] => 315.200000762939

    [refCommCount] => 72

    [userId] => 1232

    [emailID] => SonjaTaggiasco@hotmail.com

    [userLevel] => 5*/

						 ?>



					  <tr>



					     <td style="text-align:center;" class="tabreferralsdetails"><?php echo $myReferalCommDetails['emailID']; ?></td>

						 <td style="text-align:center;" ><?php echo $myReferalCommDetails['userLevel']; ?> (LC<?php echo $myReferalCommDetails['userPositionDetails'][0]['userCycle']; ?>)</td>



						  <td style="text-align:center;"><?php 

						  //echo $myReferalCommDetails['referralAmountArray']['refCommCount']; 

						  echo $myReferalCommDetails['refCommCount']; ?></td>



						  <td style="text-align:center;"><?php echo $currSymbol; ?><?php 

						  //echo number_format($myReferalCommDetails['referralAmountArray']['refTotal'],2);

						  echo number_format($myReferalCommDetails['invtAmt'],2); ?></td>



					  </tr>



						 <?php 



							

                               }

						 



						} else{ ?>



					<tr><td colspan="4">No record available</td></tr>



					<?php } ?>



					 </tbody>



			    </table>

  </div>

  <?php 

}



  }

  ?>

  

</div>

                </div>



			 </div>			 



			



					  



					  



	   </div>



	 </div>



    </div>



	</div>



    <!-- left side tab end--> 



     <!-- right side tab start--> 



<?php $this->load->view("right_panel", "", $result); ?>



  



  <!-- rights side end -->



  <div class="clear"></div>



</div>

<div class="newcycle-popup">

<span class="closee">X</span>

<strong style=" font-size: 25px; line-height: 36px;">Thank you for your participation.</strong> <br />

Our team is working hard to give you the best! <br />

We will be enabling "Multiple Cycle" functionality soon. When this functionality is launched, you will be notified via email and you will be able to participate in our next stage of Multiple stage simulation process. <br /><br />



Thank you again for your kind co-operation and understating. <br />

We appreciate your patience and support to make this programme successful. 

<div id="levelup_alert" class="switch mov_up"><a href="javascript:;" class="close_btn_levell" title="Close"></a>

</div>

<script>

$(document).ready(function(){

    $(".closee").click(function(){

        $(".newcycle-popup").hide();

    });

    $(".start-newcycle").click(function(){

        $(".newcycle-popup").show();

    });

});

</script>



<!-- main container end -->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



 

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script type="text/javascript">

	  $( function() {

  //  $( "#accordion" ).accordion();

    $('#accordion').accordion({

    active: false,

    collapsible: true            

});

  } );

</script>

<?php



function digitToNumberConvert($num){

$list=array('Zero' => 0,

'First' => 1,

'Second' => 2,

'Third' => 3,

'Fourth' => 4,

'Fifth' => 5,

'Sixth' => 6,

'Seventh' => 7,

'Eighth' => 8,

'Ningth' => 9);

 

 $temp='';

 $arr_num=str_split ($num);

foreach($arr_num as $data)

{

$temp.=array_search($data,$list);

}

$num=$temp;

return $num; // here we get BCDE

}

?>