
<?php
session_start();
// $_SESSION['userId'] = '1';
if(!isset($_SESSION['userId']))
{
  header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html>
<section id="styleback">
<head>
	<title>Online Resume Builder</title>
	<?php require "assets/autoloader.php" ?>
	<style type="text/css" id="#some2">
		
	<?php include 'css/myStyle.css'; ?>		
	
body{
	background:#E1ECF5;
	padding: 15px;
}
.cover{padding: 11px;}
.cvBody{border:1px solid black; width: 59%;min-height: 444px;}
.cv-head{background:#212121;width: 40%;padding: 4px}
.photo{background:#283136;height: 222px}
.cv-content{width: 60%;background:#FAF2EF;padding:11px 11px 11px 44px;}
.center{text-align: center;}
.flex{display: inline-flex;}
.about-tab{background:#3C474D;padding: 11px}
.about-head{ color: white ;font-size: 15pt;font-variant: small-caps;margin: 5px 2px;}
.about-details{color: white;padding:4px; font-family: calibri light;font-family: 'Itim', cursive;}
.about-details li{font-size: 13pt;margin: 5px}
/* .body-item{} */
.body-head{font-size: 17pt;font-family: algerian;font-family: 'Acme', sans-serif;}
.body-details{padding:0 0 0 44px; }
.detail-item,.info-item{margin-top: 11px}
.detail-item-head{font-size: 15pt;font-family: calibri light;font-weight: bold}
.info-item-head{width: 144px;font-size: 12pt;}
.info-item-body{width: 200px;font-size: 12pt;}
.detail-item-text{font-size: 12pt;}
#cvname{font-size: 14pt}
.circle{border-radius: 50%}
#dialogCover{position: absolute;width: 100%;height: 150%;background: black;top: 0;opacity: .8}
</style>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script>
$(document).ready(function (e) {
	
	

	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		e.preventDefault();
		
		$.ajax({
					url: "uploadImgg.php", // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
					
						$("#picSpan").html(data);
					}
				});
				$.ajax({
					url: "uploadImgg2.php", // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
					
						// $("#picSpan").html(data);
					}
				});
	}));

	// Function to preview image after validation
	$(function() 
	{
		$("#file").change(function() 
		{
			$("#uploadForm").submit();
		});
	});

	$("#width").change(function(){$('#image_preview').attr('width', ''+$(this).val()+'px');});
	$("#height").change(function(){$('#image_preview').attr('height', ''+$(this).val()+'px');});
	$("#radius").click(function()
	{
		$('#image_preview').addClass('circle');
		$(this).hide();
		$("#resetRadius").fadeIn();
	});
	$("#resetRadius").click(function()
		{
			$('#image_preview').removeClass('circle');
			$(this).hide();
			$("#radius").fadeIn();
		});

});
</script>
<script>
	$(document).ready(function()
	{
		//yaha cv header handle krne k waste
		$("#name").keyup(function(){$("#cvname").text($(this).val());});
		$("#aboutme").keyup(function(){$("#cvaboutme").text($(this).val());});
		$("#phone1").keyup(function(){$("#cvphone1").text($(this).val());});
		$("#phone2").keyup(function(){$("#cvphone2").fadeIn().text($(this).val());});
		$("#address").keyup(function(){$("#cvaddress").text($(this).val());});
		$("#skill1").keyup(function(){$("#cvskill1").text($(this).val());});
		$("#skill2").keyup(function(){$("#cvskill2").fadeIn().text($(this).val());});
		$("#skill3").keyup(function(){$("#cvskill3").fadeIn().text($(this).val());});
		$("#skill4").keyup(function(){$("#cvskill4").fadeIn().text($(this).val());});
		$("#skill5").keyup(function(){$("#cvskill5").fadeIn().text($(this).val());});

		//exp ko hide wala btn
		$("#hideExpBtn").click(function(){$("#expMenu").slideToggle()});
		$("#hidePersonalBtn").click(function(){$("#personalMenu").slideToggle()});
		$("#hideLangBtn").click(function(){$("#langMenu").slideToggle()});
		$("#hideCustomBtn").click(function(){$("#customMenu").slideToggle()});
		//cv content handelr
		//pehle just tab click show edu content
		$("#eduTab2").click(function(){$("#cvEdu2").fadeIn();});
		$("#eduTab3").click(function(){$("#cvEdu3").fadeIn();});
		$("#eduTab4").click(function(){$("#cvEdu4").fadeIn();});
		$("#eduTab5").click(function(){$("#cvEdu5").fadeIn();});
		$("#eduTab6").click(function(){$("#cvEdu6").fadeIn();});
		//ab just tab click for show expernc content
		$("#expTab2").click(function(){$("#cvExp2").fadeIn();});
		$("#expTab3").click(function(){$("#cvExp3").fadeIn();});
		$("#expTab4").click(function(){$("#cvExp4").fadeIn();});
		$("#expTab5").click(function(){$("#cvExp5").fadeIn();});
		$("#expTab6").click(function(){$("#cvExp6").fadeIn();});
		//ab agr woh edu tab hide ni krna chahta
		$("#eduBtn2").click(function(){$("#cvEdu2").slideToggle();});
		$("#eduBtn3").click(function(){$("#cvEdu3").slideToggle();});
		$("#eduBtn4").click(function(){$("#cvEdu4").slideToggle();});
		$("#eduBtn5").click(function(){$("#cvEdu5").slideToggle();});
		$("#eduBtn6").click(function(){$("#cvEdu6").slideToggle();});
		//yaha exp tab hide krne k lye
		$("#expBtn2").click(function(){$("#cvExp2").slideToggle();});
		$("#expBtn3").click(function(){$("#cvExp3").slideToggle();});
		$("#expBtn4").click(function(){$("#cvExp4").slideToggle();});
		$("#expBtn5").click(function(){$("#cvExp5").slideToggle();});
		$("#expBtn6").click(function(){$("#cvExp6").slideToggle();});

		//ab jb woh likhe ga tb cv me bhi auto likha jaye is ky lye hota hai keyup
		$("#edu1name").keyup(function(){$("#cvEdu1name").text($(this).val());});
		$("#edu2name").keyup(function(){$("#cvEdu2name").text($(this).val());});
		$("#edu3name").keyup(function(){$("#cvEdu3name").text($(this).val());});
		$("#edu4name").keyup(function(){$("#cvEdu4name").text($(this).val());});
		$("#edu5name").keyup(function(){$("#cvEdu5name").text($(this).val());});
		$("#edu6name").keyup(function(){$("#cvEdu6name").text($(this).val());});
		//this is for passing year education tab
		$("#edu1py").keyup(function(){$("#cvEdu1py").text($(this).val());});
		$("#edu2py").keyup(function(){$("#cvEdu2py").text($(this).val());});
		$("#edu3py").keyup(function(){$("#cvEdu3py").text($(this).val());});
		$("#edu4py").keyup(function(){$("#cvEdu4py").text($(this).val());});
		$("#edu5py").keyup(function(){$("#cvEdu5py").text($(this).val());});
		$("#edu6py").keyup(function(){$("#cvEdu6py").text($(this).val());});
		//this is for insititution 
		$("#edu1insiti").keyup(function(){$("#cvEdu1insiti").text($(this).val());});
		$("#edu2insiti").keyup(function(){$("#cvEdu2insiti").text($(this).val());});
		$("#edu3insiti").keyup(function(){$("#cvEdu3insiti").text($(this).val());});
		$("#edu4insiti").keyup(function(){$("#cvEdu4insiti").text($(this).val());});
		$("#edu5insiti").keyup(function(){$("#cvEdu5insiti").text($(this).val());});
		$("#edu6insiti").keyup(function(){$("#cvEdu6insiti").text($(this).val());});
		// ab yeh rha marks k lye
		$("#edu1marks").keyup(function(){$("#cvEdu1marks").text($(this).val());});
		$("#edu2marks").keyup(function(){$("#cvEdu2marks").text($(this).val());});
		$("#edu3marks").keyup(function(){$("#cvEdu3marks").text($(this).val());});
		$("#edu4marks").keyup(function(){$("#cvEdu4marks").text($(this).val());});
		$("#edu5marks").keyup(function(){$("#cvEdu5marks").text($(this).val());});
		$("#edu6marks").keyup(function(){$("#cvEdu6marks").text($(this).val());});

		//ab jb woh likhe ga tb cv me bhi auto likha jaye is ky lye hota hai keyup
		$("#exp1start").keyup(function(){$("#cvExp1start").text($(this).val());});
		$("#exp2start").keyup(function(){$("#cvExp2start").text($(this).val());});
		$("#exp3start").keyup(function(){$("#cvExp3start").text($(this).val());});
		$("#exp4start").keyup(function(){$("#cvExp4start").text($(this).val());});
		$("#exp5start").keyup(function(){$("#cvExp5start").text($(this).val());});
		$("#exp6start").keyup(function(){$("#cvExp6start").text($(this).val());});
		//this is for passing year education tab
		$("#exp1leave").keyup(function(){$("#cvExp1leave").text($(this).val());});
		$("#exp2leave").keyup(function(){$("#cvExp2leave").text($(this).val());});
		$("#exp3leave").keyup(function(){$("#cvExp3leave").text($(this).val());});
		$("#exp4leave").keyup(function(){$("#cvExp4leave").text($(this).val());});
		$("#exp5leave").keyup(function(){$("#cvExp5leave").text($(this).val());});
		$("#exp6leave").keyup(function(){$("#cvExp6leave").text($(this).val());});
		//this is for insititution 
		$("#exp1insiti").keyup(function(){$("#cvExp1insiti").text($(this).val());});
		$("#exp2insiti").keyup(function(){$("#cvExp2insiti").text($(this).val());});
		$("#exp3insiti").keyup(function(){$("#cvExp3insiti").text($(this).val());});
		$("#exp4insiti").keyup(function(){$("#cvExp4insiti").text($(this).val());});
		$("#exp5insiti").keyup(function(){$("#cvExp5insiti").text($(this).val());});
		$("#exp6insiti").keyup(function(){$("#cvExp6insiti").text($(this).val());});
		// ab yeh rha marks k lye
		$("#exp1name").keyup(function(){$("#cvExp1name").text($(this).val());});
		$("#exp2name").keyup(function(){$("#cvExp2name").text($(this).val());});
		$("#exp3name").keyup(function(){$("#cvExp3name").text($(this).val());});
		$("#exp4name").keyup(function(){$("#cvExp4name").text($(this).val());});
		$("#exp5name").keyup(function(){$("#cvExp5name").text($(this).val());});
		$("#exp6name").keyup(function(){$("#cvExp6name").text($(this).val());});

		//ab personal information k lye
		$("#key1").keyup(function(){$("#cvKey1").text($(this).val());});
		$("#key2").keyup(function(){$("#pInfo2").fadeIn();$("#cvKey2").text($(this).val());});
		$("#key3").keyup(function(){$("#pInfo3").fadeIn();$("#cvKey3").text($(this).val());});
		$("#key4").keyup(function(){$("#pInfo4").fadeIn();$("#cvKey4").text($(this).val());});
		$("#key5").keyup(function(){$("#pInfo5").fadeIn();$("#cvKey5").text($(this).val());});
		$("#key6").keyup(function(){$("#pInfo6").fadeIn();$("#cvKey6").text($(this).val());});
		$("#key7").keyup(function(){$("#pInfo7").fadeIn();$("#cvKey7").text($(this).val());});
		$("#key8").keyup(function(){$("#pInfo8").fadeIn();$("#cvKey8").text($(this).val());});
		$("#key9").keyup(function(){$("#pInfo9").fadeIn();$("#cvKey9").text($(this).val());});
		$("#key10").keyup(function(){$("#pInfo10").fadeIn();$("#cvKey10").text($(this).val());});

		$("#value1").keyup(function(){$("#cvValue1").text($(this).val());});
		$("#value2").keyup(function(){$("#pInfo2").fadeIn();$("#cvValue2").text($(this).val());});
		$("#value3").keyup(function(){$("#pInfo3").fadeIn();$("#cvValue3").text($(this).val());});
		$("#value4").keyup(function(){$("#pInfo4").fadeIn();$("#cvValue4").text($(this).val());});
		$("#value5").keyup(function(){$("#pInfo5").fadeIn();$("#cvValue5").text($(this).val());});
		$("#value6").keyup(function(){$("#pInfo6").fadeIn();$("#cvValue6").text($(this).val());});
		$("#value7").keyup(function(){$("#pInfo7").fadeIn();$("#cvValue7").text($(this).val());});
		$("#value8").keyup(function(){$("#pInfo8").fadeIn();$("#cvValue8").text($(this).val());});
		$("#value9").keyup(function(){$("#pInfo9").fadeIn();$("#cvValue9").text($(this).val());});
		$("#value10").keyup(function(){$("#pInfo10").fadeIn();$("#cvValue10").text($(this).val());});

		$("#pInfoBtn2").click(function(){$("#pInfo2").fadeToggle();});
		$("#pInfoBtn3").click(function(){$("#pInfo3").fadeToggle();});
		$("#pInfoBtn4").click(function(){$("#pInfo4").fadeToggle();});
		$("#pInfoBtn5").click(function(){$("#pInfo5").fadeToggle();});
		$("#pInfoBtn6").click(function(){$("#pInfo6").fadeToggle();});
		$("#pInfoBtn7").click(function(){$("#pInfo7").fadeToggle();});
		$("#pInfoBtn8").click(function(){$("#pInfo8").fadeToggle();});
		$("#pInfoBtn9").click(function(){$("#pInfo9").fadeToggle();});
		$("#pInfoBtn10").click(function(){$("#pInfo10").fadeToggle();});
		
		//languages ki bari
		$("#langText").keyup(function(){$("#cvLangText").text($(this).val());});
		//now for custom tab
		$("#customHead").keyup(function(){$("#cvCustomHead").text($(this).val());});
		$("#customText").keyup(function(){$("#cvCustomText").text($(this).val());});

		//ab designing ki bari
		$("#headerBg").change(function(){$(".cv-head").css('background',''+$(this).val()+'');});
		$("#photoBg").change(function(){$(".photo").css('background',''+$(this).val()+'');});
		$("#nameColor").change(function(){$("#cvname").css('color',''+$(this).val()+'');});
		$("#coverBg").change(function(){$(".about-tab").css('background',''+$(this).val()+'');});
		$("#detailCvr").change(function(){$(".about-details").css('color',''+$(this).val()+'');});
		$("#headCvr").change(function(){$(".about-head").css('color',''+$(this).val()+'');});
		$("#cvBodyBg").change(function(){$(".cv-content").css('background',''+$(this).val()+'');});
		$("#cvBodyColor").change(function(){$(".cv-content").css('color',''+$(this).val()+'');});

	});
</script>
</section>
<body>

<div class="cover " >
	<div class="" id="get">
		<div class="cvBody flex pull-left" >
			<div class="cv-head">
				<div class="photo center ">
					<span id="picSpan">
						<img id="image_preview" src="photo/user.png" width="133px" style="margin: auto;padding-top: 6px">
					</span><br><br>
					<span style="color: white;" id="cvname">Morten Zain</span>
				</div>
				
				<div class="about-tab fontTreb">
					<div class="about-head"><i class="fa fa-user-circle-o fa-fw"></i> About Me</div>
					<div class="about-details" id="cvaboutme">Write About yourself it may be objective or it may be about your future point of view.</div>
				</div>
				<div class="about-tab fontTreb">
					<div class="about-head"><i class="fa fa-address-book-o fa-fw"></i> Contact Me</div>
					<div class="about-details">
						<ul>
							<li id="cvphone1">9934008856</li>
							<li id="cvphone2" style="display: none">080-567898</li>
							<li id="cvaddress">Edward Street ,MG road #20 back yard stret Bangalore -560087</li>
						</ul>
					</div>
				</div>
				<div class="about-tab fontTreb">
					<div class="about-head"><i class="fa fa-tags fa-fw"></i> Skills</div>
					<div class="about-details" >
						<ul>
							<li id="cvskill1">Visual Communication</li>
							<li id="cvskill2" style="display: none;">PHP,HTML,CSS</li>
							<li id="cvskill3" style="display: none;">Communication Skill</li>
							<li id="cvskill4" style="display: none;">UX-Ui prototyping</li>
							<li id="cvskill5" style="display: none;">Software Development</li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="cv-content">
				<div class="body-item">
					<div class="body-head"><i class="fa fa-graduation-cap fa-fw"></i> EDUCATION</div>
					<div class="body-details fontTreb">
						
						<div class="detail-item" id="cvEdu1">
							<div class="detail-item-head">
								<span id="cvEdu1name">Master In Computer Science</span>,
								<span id="cvEdu1py">2017</span>
							</div>
							
							<div class="detail-item-body">Securing <span id="cvEdu1marks"> CGPA 3.77</span> <strong> From </strong> <span id="cvEdu1insiti">Insititution Name</span></div>
						</div>
						<div class="detail-item" id="cvEdu2" style="display: none;">
							<div class="detail-item-head">
								<span id="cvEdu2name">Degree Name</span>,
								<span id="cvEdu2py">2017</span>
							</div>
							
							<div class="detail-item-body">Securing <span id="cvEdu2marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu2insiti">Insititution Name</span></div>
						</div>

						<div class="detail-item" id="cvEdu3" style="display: none;">
							<div class="detail-item-head">
								<span id="cvEdu3name">Degree Name</span>,
								<span id="cvEdu3py">2017</span>
							</div>
							
							<div class="detail-item-body">Securing <span id="cvEdu3marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu3insiti">Insititution Name</span> </div>
						</div>

						<div class="detail-item" id="cvEdu4" style="display: none;">
							<div class="detail-item-head">
								<span id="cvEdu4name">Degree Name</span>,
								<span id="cvEdu4py">2017</span>
							</div>
							
							<div class="detail-item-body">Securing <span id="cvEdu4marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu4insiti">Insititution Name</span></div>
						</div>

						<div class="detail-item" id="cvEdu5" style="display: none;">
							<div class="detail-item-head">
								<span id="cvEdu5name">Degree Name</span>,
								<span id="cvEdu5py">2017</span>
							</div>
							
							<div class="detail-item-body">Securing <span id="cvEdu5marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu5insiti">Insititution Name</span></div>
						</div>

						<div class="detail-item" id="cvEdu6" style="display: none;">
							<div class="detail-item-head">
								<span id="cvEdu6name">Degree Name</span>,
								<span id="cvEdu6py">2017</span>
							</div>
							
							<div class="detail-item-body">Securing <span id="cvEdu6marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu6insiti">Insititution Name</span></div>
						</div>
					</div>
				</div>
				<br>
				<div class="body-item" id="expMenu">
					<div class="body-head"><i class="fa fa-edit fa-fw"></i> EXPERIENCE</div>
					<div class="body-details fontTreb" id="cvExp1">
						<div class="detail-item">
							<div class="detail-item-head" id="cvExp1">
								<span id="cvExp1name">Private Teacher Practice</span>, 
								<span id="cvExp1start">2016</span>-
								<span id="cvExp1leave">present</span>
							</div>
							<div class="detail-item-body" id="cvExp1insiti">Alreed Private University</div>
						</div>

						<div class="detail-item" style="display: none;" id="cvExp2">
							<div class="detail-item-head">
								<span id="cvExp2name">Private Teacher Practice</span>, 
								<span id="cvExp2start">2016</span>-
								<span id="cvExp2leave">present</span>
							</div>
							<div class="detail-item-body" id="cvExp2insiti">Alreed Private University</div>
						</div>

						<div class="detail-item" style="display: none;" id="cvExp3">
							<div class="detail-item-head">
								<span id="cvExp3name">Private Teacher Practice</span>, 
								<span id="cvExp3start">2016</span>-
								<span id="cvExp3leave">present</span>
							</div>
							<div class="detail-item-body" id="cvExp3insiti">Alreed Private University</div>
						</div>
						
						<div class="detail-item" style="display: none;" id="cvExp4">
							<div class="detail-item-head">
								<span id="cvExp4name">Private Teacher Practice</span>, 
								<span id="cvExp4start">2016</span>-
								<span id="cvExp4leave">present</span>
							</div>
							<div class="detail-item-body" id="cvExp4insiti">Alreed Private University</div>
						</div>

						<div class="detail-item" style="display: none;" id="cvExp5">
							<div class="detail-item-head">
								<span id="cvExp5name">Private Teacher Practice</span>, 
								<span id="cvExp5start">2016</span>-
								<span id="cvExp5leave">present</span>
							</div>
							<div class="detail-item-body" id="cvExp5insiti">Alreed Private University</div>
						</div>

						<div class="detail-item" style="display: none;" id="cvExp6">
							<div class="detail-item-head">
								<span id="cvExp6name">Private Teacher Practice</span>, 
								<span id="cvExp6start">2016</span>-
								<span id="cvExp6leave">present</span>
							</div>
							<div class="detail-item-body" id="cvExp6insiti">Alreed Private University</div>
						</div>
					</div>
				</div>
				<br>
				<div class="body-item" id="personalMenu">
					<div class="body-head"><i class="fa fa-info-circle fa-fw"></i>PERSONAL INFORMATION</div>
					<div class="body-details fontTreb">
						
						<div class="info-item"  id="pInfo1">
							<div class="info-item-head"><i class="fa fa-circle"></i> <span id="cvKey1"> Key</span></div>
							<div class="info-item-body"><span id="cvValue1">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo2">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey2"> Key</span></div>
							<div class="info-item-body"><span id="cvValue2">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo3">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey3"> Key</span></div>
							<div class="info-item-body"><span id="cvValue3">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo4">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey4"> Key</span></div>
							<div class="info-item-body"><span id="cvValue4">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo5">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey5"> Key</span></div>
							<div class="info-item-body"><span id="cvValue5">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo6">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey6"> Key</span></div>
							<div class="info-item-body"><span id="cvValue6">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo7">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey7"> Key</span></div>
							<div class="info-item-body"><span id="cvValue7">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo8">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey8"> Key</span></div>
							<div class="info-item-body"><span id="cvValue8">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo9">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey9"> Key</span></div>
							<div class="info-item-body"><span id="cvValue9">Value</span></div>
						</div>
						<div class="info-item" style="display: none;" id="pInfo10">
							<div class="info-item-head"><i class="fa fa-circle fa-fw"></i> <span id="cvKey10">Key</span></div>
							<div class="info-item-body"><span id="cvValue10">Value</span></div>
						</div>
						

					</div>
				</div>
				<br><div style="clear: both;"></div>
				<div class="body-item" id="langMenu">
					<div class="body-head"><i class="fa fa-flag fa-fw"></i> LANGUAGES</div>
					<div class="body-details fontTreb">
						<div class="detail-item">
							<div class="detail-item-text" id="cvLangText">English,Hindi,Kannada, Tamil, French</div>
						</div>
						
					</div>
				</div>
				<br>
				<div class="body-item" id="customMenu">
					<div class="body-head"><i class="fa fa-info fa-fw"></i> <span id="cvCustomHead"> CUSTOM HEADER</span></div>
					<div class="body-details fontTreb">
						<div class="detail-item">
							<div class="detail-item-text" id="cvCustomText">Custom Text</div>
						</div>
						
					</div>
				</div>
			</div>
	</div>	
	</div>
	<div class="well well-sm" style="width: 40%;margin-left: 8px;float: right;" >
		<ul class="nav nav-tabs">
		  <li ><a data-toggle="tab" href="#cvHeader">Cv Header</a></li>
		  <li class="active"><a data-toggle="tab" href="#menu-cvContent">Cv Content</a></li>
		  <li><a data-toggle="tab" href="#menu-pInfo">Personal Info</a></li>
		  <li><a data-toggle="tab" href="#menu-cvDesign">Cv Design</a></li>
		</ul>

		<div class="tab-content">
		  <div id="cvHeader" class="tab-pane fade  ">
		  	<div class="well well-sm">
		    <button class="pull-right btn btn-success" id="download">Save and Download CV</button>
		    <br><br>
		    <table class="table table-hover table-striped">
		    	<thread>
		    	<tr>
		    		<td colspan="4">
					  	<input type="text" id="name" name="name" class="input-sm form-control" placeholder="Type Your Name">
		    		</td>
		    	</tr>
		    	</thread>
		    	<thread>
		    	<tr>
		    	<form id="uploadForm" id="POST" method="POST" action="">
		    		<td>Upload Picture</td>
		    		<td colspan="3">
					  	<input type="file" name="file" id="file" class="input-sm form-control" required>
		    		</td>
		    	</form>
		    	</tr>
		    	</thread>
		    	<thread>
		    	<tr>
		    		<td>Picture Setting</td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="width" placeholder="Width"></td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="height" placeholder="height"></td>
		    		<td><button class="btn-primary btn btn-sm" id="radius">Cut Radius</button>
		    			<button class="btn-primary btn btn-sm" id="resetRadius" style="display: none;">Reset Radius</button></td>
		    	</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<th colspan="4" class="center">About Me</th>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4" class="center">
		    				<textarea id="aboutme" class="form-control" style="resize: none;" placeholder="Write About Yourself/Objective etc"></textarea>
		    			</td>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<th colspan="4" class="center">Contact Me</th>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input id="phone1" type="number" class="form-control input-sm" name="number1" placeholder="Phone no 1">
		    			</td>
		    			
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input id="phone2" type="number" class="form-control input-sm" name="number2" placeholder="Phone no 2">
		    			</td>
		    			
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<textarea id="address" class="form-control" style="resize: none;" placeholder="Write Your address"></textarea>
		    			</td>
		    			
		    		</tr>
		    	</thread>
		    	
		    	<thread>
		    		<tr>
		    			<th class="center" colspan="4">Skills</th>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill1" name="skill1" class="form-control input-sm" placeholder="Write Skill 1">
		    			</td>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill2" class="form-control input-sm" placeholder="Write Skill 2 optional">
		    			</td>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill3" class="form-control input-sm" placeholder="Write Skill 3 optional">
		    			</td>
		    		</tr>
		    	</thread>
		    	
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill4" class="form-control input-sm" placeholder="Write Skill 4 optional">
		    			</td>
		    		</tr>
		    	</thread>
		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<input type="text" id="skill5" class="form-control input-sm" placeholder="Write Skill 5 optional">
		    			</td>
		    		</tr>
		    	</thread>
		    	
		    </table>
		  	</div>
		  </div>
		  <div id="menu-cvContent" class="tab-pane fade in active">
		    <div class="Well well-sm">
		    	<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#edu1">Education 1</a></li>
				  <li><a data-toggle="tab" id="eduTab2" href="#edu2">Edu 2</a></li>
				  <li><a data-toggle="tab" id="eduTab3" href="#edu3">Edu 3</a></li>
				  <li><a data-toggle="tab" id="eduTab4" href="#edu4">Edu 4</a></li>
				  <li><a data-toggle="tab" id="eduTab5" href="#edu5">Edu 5</a></li>
				  <li><a data-toggle="tab" id="eduTab6" href="#edu6">Edu 6</a></li>
				</ul>

				<div class="tab-content">
				  <div id="edu1" class="tab-pane fade in active">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 1 </th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu1name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu1py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu1insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu1marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu2" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 2 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn2">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu2name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu2py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu2insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu2marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu3" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 3 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn3">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu3name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu3py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu3insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu3marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu4" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 4 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn4">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu4name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu4py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu4insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu4marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu5" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 5 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn5">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu5name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu5py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu5insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu5marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="edu6" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Education Entry 6 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn6">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Degree Name" id="edu6name"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu6py"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu6insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu6marks"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				</div>
				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#Exp1">Experience 1</a></li>
				  <li><a data-toggle="tab" href="#Exp2" id="expTab2">Exp 2</a></li>
				  <li><a data-toggle="tab" href="#Exp3" id="expTab3">Exp 3</a></li>
				  <li><a data-toggle="tab" href="#Exp4" id="expTab4">Exp 4</a></li>
				  <li><a data-toggle="tab" href="#Exp5" id="expTab5">Exp 5</a></li>
				  <li><a data-toggle="tab" href="#Exp6" id="expTab6">Exp 6</a></li>
				</ul>

				<div class="tab-content">
				  <div id="Exp1" class="tab-pane fade in active">

					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 1</th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp1name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp1start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp1insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp1leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
			    		<button class="btn btn-primary btn-sm btn-block" id="hideExpBtn">Hide/Show Experience in Cv</button>
				  </div>
				  <div id="Exp2" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 2 <button class="pull-right btn btn-sm btn-danger" id="expBtn2">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp2name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp2start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp2insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp2leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="Exp3" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 3 <button class="pull-right btn btn-sm btn-danger" id="expBtn3">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp3name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp3start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp3insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp3leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="Exp4" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 4 <button class="pull-right btn btn-sm btn-danger" id="expBtn4">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp4name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp4start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp4insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp4leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="Exp5" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 5 <button class="pull-right btn btn-sm btn-danger" id="expBtn5">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp5name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp5start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp5insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp5leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>
				  <div id="Exp6" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 6 <button class="pull-right btn btn-sm btn-danger" id="expBtn6">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp6name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp6start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp6insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp6leave"></td>
			    		</tr>
			    		</thread>
			    		</table>
				  </div>
			    </div>
			    <br>
			    
			    <table class="table table-striped table-hover">
			    	<thread>
			    		<tr>
			    			<th class="center">Languages <span class="pull-right btn btn-danger btn-sm" id="hideLangBtn">Hide/Show</span></th>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td>
			    				<textarea class="form-control" style="resize: none;" placeholder="Languages" id="langText"></textarea>
			    			</td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<th class="center">Add Custom Tab <span class="pull-right btn btn-danger btn-sm" id="hideCustomBtn">Hide/Show</span> </th>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td>
			    				<input type="text" name="" class="form-control" placeholder="Write Custom Heading" id="customHead">
			    			</td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td>
			    				<textarea class="form-control" style="resize: none;" placeholder="Write custom Detail" id="customText"></textarea>
			    			</td>
			    		</tr>
			    	</thread>
			    </table>
		  </div>
		</div>
		<div id="menu-pInfo" class="tab-pane fade">
			<div class="well well-sm">
				<table class="table table-striped table-hover">
			    	<thread>
			    		<tr>
			    			<th colspan="3" class="center">Personal Information</th>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key1"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value1"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn2">Hide/Show</button></td>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key2"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value2"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn2">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key3"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value3"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn3">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key4"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value4"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn4">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key5"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value5"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn5">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key6"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value6"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn6">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key7"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value7"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn7">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key8"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value8"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn8">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key9"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value9"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn9">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key10"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value10"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn10">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td colspan="2">
			    				<button class="btn btn-sm btn-primary btn-block" id="hidePersonalBtn">Hide/Show Personal Information Tab from CV</button>
			    			</td>
			    		</tr>
			    	</thread>
			    </table>
			</div>
		</div>
		  <div id="menu-cvDesign" class="tab-pane fade">
		    <div class="well well-sm">
		    	<table class="table table-striped table-hover">
		    		<thread>
		    			<tr>
		    				<th class="center" colspan="2">Color Control</th>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Header Background</td>
		    				<td><input type="color" name="" id="headerBg" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Photo Background Color</td>
		    				<td><input type="color" name="" id="photoBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Name Text Color</td>
		    				<td><input type="color" name="" id="nameColor" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Header Cover Background</td>
		    				<td><input type="color" name="" id="coverBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Cover Heading  Color</td>
		    				<td><input type="color" name="" id="headCvr" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Cover Details  Color</td>
		    				<td><input type="color" name="" id="detailCvr" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">CV Body Background</td>
		    				<td><input type="color" name="" id="cvBodyBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">CV Body Text Color</td>
		    				<td><input type="color" name="" id="cvBodyColor" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>


		    	</table>
		    </div>
		  </div>
		</div>
	</div>
</div>
<div id="dialog" style="z-index: 2;position: absolute;width: 100%;display: none;">
	<div class="" style="width: 366px;padding: 22px;margin: auto;margin-top: 155px">
		<div class="panel panel-primary" style="box-shadow: 11px 11px 22px black">
			<div class="panel-heading">
				What you want?
			</div>
			<div class="panel-body">
				<button class="btn btn-block btn-success " id="saveCv"><i class="pull-left fa fa-save fa-fw"></i >Save CV</button>
				<button class="btn btn-block btn-success " id="saved" disabled style="display: none;"><i class="pull-left fa fa-save fa-fw"></i >Saved</button>
						<p style="display:flex;justify-content:center;align-items:center;flex-direction:column;padding:10px;letter-spacing:1px;">
			     <span id="save-resume">Click Save to Download and Share resume </span>

				 <span id="share-link"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></span>
			</p>
					<button class="btn btn-block btn-primary " id="download-resume" style="display:none;"><i class="pull-left fa fa-edit fa-fw"></i >Download resume</button><br>
				<a href='index.php' style="text-decoration: none"><button class="btn btn-block btn-danger "><i class="pull-left fa fa-home fa-fw"></i >Goto HOME</button></a>

			</div>
			<div class="panel-footer">
				Goto Home without saving will discard your changes 
			</div>
		</div>
	</div>
</div>
<div id="cvUploadDialog" style="z-index: 1;position: absolute;width: 100%;display: none;">
	<div class="" style="width: 366px;padding: 22px;margin: auto;margin-top: 155px">
		<div class="panel panel-primary" style="box-shadow: 11px 11px 22px black;position:relative">
		<div class="close-upload-cv"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
			<div class="panel-heading">
				Type Cv Name
			</div>
			<div class="panel-body">
				<input type="text" required class="form-control" id="cvNameInput" placeholder="Type Cv Name" style="margin-bottom: 5px">
				<button class="btn btn-block btn-success bt-sm " id="uploadCv"><i class="pull-left fa fa-save fa-fw"></i >Upload CV</button>
				

			</div>
			<div class="panel-footer">
				Cv will be uploaded to database for later use. 
			</div>
		</div>
	</div>
</div>

</body>
</html>
<script>
	$(document).ready(function()
	{var cvName;
$("#download-resume").click(function(){
	$(".cvBody").css("width","100%");
			var some = $("#get").html();
			var some2 = $("#some2").html();
			var pdfname=$("#cvname").html();
			pdf(cvName,some);


})
//for downloding cv
		$("#download").click(function()
		{
			$("#dialog").fadeIn();
		
			// $.post({
				
				// 	url:'buildcv.php',
				// 	data:{data : some , data2 : some2}
				// }).done(function(result)
				// {
					openExitModel();
				
				// window.onload = function () {
    // document.getElementById("download")
        // .addEventListener("click", () => {
            // const invoice = this.document.getElementById("invoice");
            // console.log(invoice);
            // console.log(window);
			
        // })
// }
			// })
		});


		function pdf(pdfname,some){
			 var opt = {
                margin: 1,
                filename: `Online Resume-${pdfname}.pdf`,
                image: { type: 'jpeg', quality: 0.98 },
				pagebreak:{mode:['avoid-all','css','legacy']},
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
            };
            html2pdf().from(some).set(opt).save();
			$(".cvBody").css({"width":"55%"});
		}
//for saving cv
	//dialog pr save wale btn pr click k lye bad yeh chalna
	$("#saveCv").click(function()
	{		$("#dialog").hide();
			$("#cvUploadDialog").fadeIn();
		
	});
$(".close-upload-cv").click(function(){
	$("#dialog").fadeIn();
	$("#cvUploadDialog").hide();

})

	//ab cvNameDialog pr save Wale btn pr click 
	var file_pdf;
	$("#uploadCv").click(function()
	{
	 cvName = $("#cvNameInput").val();
	   if(cvName!=""){
		$(".cvBody").css("width","100%");
		var cvData = $("#get").html();
		var customestyle = $("#styleback").html();
		
		alert(customestyle);
		
			
			$.post({

				url:'saveCv1.php',
				data:{data : cvData , name : cvName,style:customestyle,theme:"theme1"}
			}).done(function(result)
			{
				
				$("#cvUploadDialog").hide();
				$("#dialog").fadeIn();
				$("#download-resume").show();
				$("#saveCv").hide();
				$(".cvBody").css({"width":"55%"});
				$("#saved").show();
				$("#share-link").html(`<i id='share' style='cursor:pointer;'class='fa fa-share-alt' aria-hidden='true'></i>`);
				$("#save-resume").html("click on icon to share Resume");
				$("#share-link").click(function(){


let desp="HEY, have a look ay my resume";
let title=" ONline REsume Created at online resume";
let url=`http://localhost/cv/allcv/${result}`;
// alert();
share(title,desp,url);




})

				// alert(result);
			})
			file_pdf="1645556014-16.html";
			var some = $("#get").html();
			$.ajax({
				type: "POST",
				url: "savepdf.php",
				data:{name:cvName,content:file_pdf} ,
				success: function (response) {
					alert(response);
				}
			});
		}
		else{
			alert("Please type cv name");
		}

	});

function share(titl,desp,url){

if(navigator.share){
	var url1=url;
	var data=titl;
	var description= desp;

	navigator.share({
		title:data,
		text:description,
		url:url1,
	})
}
else{
	alert("error");
}
}
	//closing dialg model
	$("#closeDialog").click(function(){$("#dialog").fadeOut();$("dialogCover").hide();});
	});
	function openExitModel()
	{
		$("#dialog").slideDown();
		$("#saveCv").show();
		$("#saved").hide();

	}
</script>