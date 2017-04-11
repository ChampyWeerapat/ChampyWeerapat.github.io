<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form about Province</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=BenchNine|Fjalla+One|Pangolin" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>

		var allID = ["firstname", "lastname", "date", "province"];
		var state = 1;

		function calculateAge() {
	    	var Bdate = document.getElementById('date').value;
		    var Bday = +new Date(Bdate);
		    var age = (Date.now() - Bday) / (31557600000);
		    return age;
		}

		function allLetter(inputtxt) {
	   		var letters = /^[A-Za-z]+$/;
	   		if(inputtxt.value.match(letters)) {
	      		return true;
	     	} else {
	     		inputtxt.value = inputtxt.value.substring(0, inputtxt.value.length - 1);
	     		return false;
	     	}
	  	}

	  	function toSubmitInput() {
  			for (i = 0; i < allID.length; i++) {
  				if (document.getElementById(allID[i]).value == "") {
  					alert("Invalid input.");
  					state = 0;
  					return;
  				} else {
  					state = 1;
  				}
  			}
  		}

		$(document).ready(function(){
    		$(".btn-cancel").click(function() {
    			$(this).closest('form').find("input[type=text], textarea").val("");
			});
		});

	</script>

	<?php 

	if (isset($_POST["date"])) {
		$age = date_diff(date_create($_POST["date"]), date_create('today'))->y;
		if ($age <= 13) {
			echo "<style>
			body {
				margin: 0px 0px 10px 0px;
				background-color: #ffffff;
				background-image: url(img/duck.png);
			}

			header {	
				height: 200px;
				background-image: url(img/view.png);
				background-repeat: no-repeat;
				background-size: 100% 100%;
				margin: 0px 0px 10px 0px;
				border: 0;
				padding: 0;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}

			form {
				display: inline;
				float: left;
			}

			.headerBody {
				font-size: 48px;
				text-align: center;
				font-family: 'Open Sans', arial;
				color: #555;
			}

			.btn:hover {
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}

			.btn-cancel {
				color: #FFFFFF;
				font-size: 18px;
				background-color: #FF4343;
				border: none;
				vertical-align: center;
				padding: 6px 16px;
			}

			.btn-submit {
				color: #FFFFFF;
				font-size: 18px;
				background-color: #4CAF50;
				border: none;
				vertical-align: center;
				padding: 6px 16px;
			}

			.greeting {
				text-align: center;
			}

			.signImg {
				clear: both;
				float: left;
				margin: 0;
				display: inline;
			}
			.signImg img {
				float: left;
				margin-left: 200px;
				margin-top: 25px;
				width: 300px;
				height: 300px;
			}

			.motto {
				clear: both;
				float: left;
				margin: 0;
				display: inline;
			}
			.motto-result {
				float: left;
				margin-left: 20px;
				text-align: center;
				background-color: #eeeeee;
				padding: 5px;
			}

			.fieldset {
				width: 360px;
				clear: both;
				margin-top: 25px;
				margin-left: 250px;
				margin-bottom: 20px;
				font-size: 16px;
				background-color: #eeeeee;
				padding-top: 10px;
				padding-bottom: 10px;
				font-family: 'Pangolin', cursive;
			}
			</style>";
		}
		else if ($_POST["gender"] == "male") {
			echo "<style>
			body {
				margin: 0px 0px 10px 0px;
				background-color: #ffffff;
				background-image: url(img/greybg.png);
			}

			header {	
				height: 200px;
				background-image: url(img/view.png);
				background-repeat: no-repeat;
				background-size: 100% 100%;
				margin: 0px 0px 10px 0px;
				border: 0;
				padding: 0;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}

			form {
				display: inline;
				float: left;
			}

			.headerBody {
				font-size: 48px;
				text-align: center;
				font-family: 'Open Sans', arial;
				color: #555;
			}

			.btn:hover {
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}

			.btn-cancel {
				color: #FFFFFF;
				font-size: 18px;
				background-color: #FF4343;
				border: none;
				vertical-align: center;
				padding: 6px 16px;
			}

			.btn-submit {
				color: #FFFFFF;
				font-size: 18px;
				background-color: #4CAF50;
				border: none;
				vertical-align: center;
				padding: 6px 16px;
			}

			.greeting {
				text-align: center;
			}

			.signImg {
				clear: both;
				float: left;
				margin: 0;
				display: inline;
			}
			.signImg img {
				float: left;
				margin-left: 200px;
				margin-top: 25px;
				width: 300px;
				height: 300px;
			}

			.motto {
				clear: both;
				float: left;
				margin: 0;
				display: inline;
			}
			.motto-result {
				float: left;
				margin-left: 20px;
				text-align: center;
				background-color: #eeeeee;
				padding: 5px;
			}

			.fieldset {
				width: 360px;
				clear: both;
				margin-top: 25px;
				margin-left: 250px;
				margin-bottom: 20px;
				font-size: 16px;
				background-color: #eeeeee;
				padding-top: 10px;
				padding-bottom: 10px;
				font-family: 'Fjalla One', sans-serif;
			}
			</style>";
		}
		else {
			echo "<style>
			body {
				margin: 0px 0px 10px 0px;
				background-color: #ffffff;
				background-image: url(img/pinktable.png);
			}

			header {	
				height: 200px;
				background-image: url(img/view.png);
				background-repeat: no-repeat;
				background-size: 100% 100%;
				margin: 0px 0px 10px 0px;
				border: 0;
				padding: 0;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}

			form {
				display: inline;
				float: left;
			}

			.headerBody {
				font-size: 48px;
				text-align: center;
				font-family: 'Open Sans', arial;
				color: #555;
			}

			.btn:hover {
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}

			.btn-cancel {
				color: #FFFFFF;
				font-size: 18px;
				background-color: #FF4343;
				border: none;
				vertical-align: center;
				padding: 6px 16px;
			}

			.btn-submit {
				color: #FFFFFF;
				font-size: 18px;
				background-color: #4CAF50;
				border: none;
				vertical-align: center;
				padding: 6px 16px;
			}

			.greeting {
				text-align: center;
			}

			.signImg {
				clear: both;
				float: left;
				margin: 0;
				display: inline;
			}
			.signImg img {
				float: left;
				margin-left: 200px;
				margin-top: 25px;
				width: 300px;
				height: 300px;
			}

			.motto {
				clear: both;
				float: left;
				margin: 0;
				display: inline;
			}
			.motto-result {
				float: left;
				margin-left: 20px;
				text-align: center;
				background-color: #eeeeee;
				padding: 5px;
			}

			.fieldset {
				width: 360px;
				clear: both;
				margin-top: 25px;
				margin-left: 250px;
				margin-bottom: 20px;
				font-size: 16px;
				background-color: #eeeeee;
				padding-top: 10px;
				padding-bottom: 10px;
				font-family: 'BenchNine', sans-serif;
			}
			</style>";
		}
	}

	?>
</head>

<body>
	<section>
		<header role="banner">	
		</header>
	</section>

	<div class="result">
		<div>
			<p class="greeting" id="greeting">
			<?php 
				if (isset($_POST["firstname"]) && isset($_POST["lastname"])) { 
					$firstname = $_POST["firstname"]; 
					$lastname = $_POST["lastname"];
					$greeting = "สวัสดีคุณ " . $firstname . " " . $lastname; 
					echo $greeting;
				} 
			?>
			</p>
		</div>
		<div class="signImg">
		<?php  
			if (isset($_POST["province"])) {
				echo '<img class=signImg-result src=data/allSign/' . $_POST["province"] . '.png>';
			}
		?>
		</div>
	</div>
	

	<form action="#" method="post" name="formregister" id="form">
		<fieldset class="fieldset">
		<!-- <legend>Register</legend> -->
			Name:<br>
			<input type="text" name="firstname" id="firstname" placeholder="Firstname" oninput="allLetter(document.formregister.firstname)">
			<input type="text" name="lastname" id="lastname" placeholder="Lastname" oninput="allLetter(document.formregister.lastname)">
			<br><br>

			Birthday:<br>
			<input type="date" name="date" id="date">
			<br><br>

			Gender:<br>
			<input type="radio" name="gender" value="male" checked>Male
			<input type="radio" name="gender" value="female">Female
			<br><br>

			Province:<br>
			<select name="province" id="province">
		      <option value="" selected>--------- เลือกจังหวัด ---------</option>
		      <option value="1">กรุงเทพมหานคร</option>
		      <option value="2">กระบี่ </option>
		      <option value="3">กาญจนบุรี </option>
		      <option value="4">กาฬสินธุ์ </option>
		      <option value="5">กำแพงเพชร </option>
		      <option value="6">ขอนแก่น</option>
		      <option value="7">จันทบุรี</option>
		      <option value="8">ฉะเชิงเทรา </option>
		      <option value="9">ชัยนาท </option>
		      <option value="10">ชัยภูมิ </option>
		      <option value="11">ชุมพร </option>
		      <option value="12">ชลบุรี </option>
		      <option value="13">เชียงใหม่ </option>
		      <option value="14">เชียงราย </option>
		      <option value="15">ตรัง </option>
		      <option value="16">ตราด </option>
		      <option value="17">ตาก </option>
		      <option value="18">นครนายก </option>
		      <option value="19">นครปฐม </option>
		      <option value="20">นครพนม </option>
		      <option value="21">นครราชสีมา </option>
		      <option value="22">นครศรีธรรมราช </option>
		      <option value="23">นครสวรรค์ </option>
		      <option value="24">นราธิวาส </option>
		      <option value="25">น่าน </option>
		      <option value="26">นนทบุรี </option>
		      <option value="27">บึงกาฬ</option>
		      <option value="28">บุรีรัมย์</option>
		      <option value="29">ประจวบคีรีขันธ์ </option>
		      <option value="30">ปทุมธานี </option>
		      <option value="31">ปราจีนบุรี </option>
		      <option value="32">ปัตตานี </option>
		      <option value="33">พะเยา </option>
		      <option value="34">พระนครศรีอยุธยา </option>
		      <option value="35">พังงา </option>
		      <option value="36">พิจิตร </option>
		      <option value="37">พิษณุโลก </option>
		      <option value="38">เพชรบุรี </option>
		      <option value="39">เพชรบูรณ์ </option>
		      <option value="40">แพร่ </option>
		      <option value="41">พัทลุง </option>
		      <option value="42">ภูเก็ต </option>
		      <option value="43">มหาสารคาม </option>
		      <option value="44">มุกดาหาร </option>
		      <option value="45">แม่ฮ่องสอน </option>
		      <option value="46">ยโสธร </option>
		      <option value="47">ยะลา </option>
		      <option value="48">ร้อยเอ็ด </option>
		      <option value="49">ระนอง </option>
		      <option value="50">ระยอง </option>
		      <option value="51">ราชบุรี</option>
		      <option value="52">ลพบุรี </option>
		      <option value="53">ลำปาง </option>
		      <option value="54">ลำพูน </option>
		      <option value="55">เลย </option>
		      <option value="56">ศรีสะเกษ</option>
		      <option value="57">สกลนคร</option>
		      <option value="58">สงขลา </option>
		      <option value="59">สมุทรสาคร </option>
		      <option value="60">สมุทรปราการ </option>
		      <option value="61">สมุทรสงคราม </option>
		      <option value="62">สระแก้ว </option>
		      <option value="63">สระบุรี </option>
		      <option value="64">สิงห์บุรี </option>
		      <option value="65">สุโขทัย </option>
		      <option value="66">สุพรรณบุรี </option>
		      <option value="67">สุราษฎร์ธานี </option>
		      <option value="68">สุรินทร์ </option>
		      <option value="69">สตูล </option>
		      <option value="70">หนองคาย </option>
		      <option value="71">หนองบัวลำภู </option>
		      <option value="72">อำนาจเจริญ </option>
		      <option value="73">อุดรธานี </option>
		      <option value="74">อุตรดิตถ์ </option>
		      <option value="75">อุทัยธานี </option>
		      <option value="76">อุบลราชธานี</option>
		      <option value="77">อ่างทอง </option>
			</select>
			<br><br>

			<input type="button" name="cancel" value="Cancel" class="btn btn-cancel">
			<input type="submit" name="submit" value="Submit" class="btn btn-submit" onclick="return toSubmitInput()">

		</fieldset>
	</form>

	<div class="motto">
		<p class="motto-result">
		<?php  
			if (isset($_POST["province"])) {
				$filename = fopen('data/allMotto/' . $_POST["province"] . ".txt", "r") or die("Unable to open file!");
				echo fgets($filename, 4096);
			}
		?>
		</p>
	</div>
	
</body>
</html>