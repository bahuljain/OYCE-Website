<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style-accordion.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery-page-fade.js"></script>
		<script type="text/javascript">
				function emptyCheck(x, y){
					var errorName = "error" + x;
					var name = document.form.elements[y].value.trim();
					if(name==""){
						document.getElementById(errorName).innerHTML = "This field is required.";
					}
					else{
						document.getElementById(errorName).innerHTML = "";
					}
				}
				
				function characterCheck(x, y){
					var errorName = "error" + x;
					var name = document.form.elements[y].value.trim();
					var re=/^([a-zA-Z]+\s)*[a-zA-Z]+$/; 
					if(!re.test(name) && name!="") {
						document.getElementById(errorName).innerHTML = "Only a-z and A-Z characters allowed.";
					}
					else {
						document.getElementById(errorName).innerHTML = "";
					}
				}
				
				function emailValidation(x, y){
					var errorName = "error" + x;
					var name = document.form.elements[y].value.trim();
					var atpos=name.indexOf("@");
					var dotpos=name.lastIndexOf(".");
					
					if ((atpos<1 || dotpos<atpos+3 || dotpos+2>=x.length) && name!="") {
						document.getElementById(errorName).innerHTML = "Invalid Email.";
					}
					else {
						document.getElementById(errorName).innerHTML = "";
					}
				}
				
				function phoneNumberCheck(x, y){
					var errorName = "error" + x;
					var name = document.form.elements[y].value.trim();
					if((isNaN(name) || name.length<=6) && name!=""){
						document.getElementById(errorName).innerHTML = "Invalid Phone Number.";
					}
					else {
						document.getElementById(errorName).innerHTML = "";
					}
				}
				
				function test() {
					var flag=0;
					for(var i=1;i<=13;i++){
						var errorName = "error" + i;
						var temp = document.getElementById(errorName).innerHTML;
						if(temp!=""){
							flag=1;
							break;
						}
					}
					for(var i=0;i<8;i++){
						var temp = document.form.elements[i].value;
						if((temp=="" || temp==null) && i!=1 && i!=2){
							flag=1;
							break;
						}
					}
					var name = document.form.elements["upload"].value;
					var dotpos = name.lastIndexOf(".");
					var extension = name.substring(dotpos+1, name.length);
					if(extension=="pdf" || extension=="doc" || extension=="docx"){
						document.getElementById("error13").innerHTML = "";
						if(flag==0){
							return true;
						}
						else{
							alert("Please enter all the fields and fill all the fields correctly.");
							return false;
						}
					}
					else{
						document.getElementById("error13").innerHTML = "Invalid file uploaded.</br> Please upload either .pdf </br>or .doc or .docx files only.";
						return false;
					}
					
				}
		</script>
	</head>
	<body>
		
		<div class="backHome"><a class="home">back Home!</a></div>
		
		<div id="menu1">
			<table id="table">
				<tr>
					<td><a class="III">Insight into IIIChE</a></td>
				</tr>
			</table>
		</div>
		<div id="menu2">
			<table id="table">
				<tr>
					<td><a class="OYCE">What is OYCE?</a></td>
				</tr>
			</table>
		</div>
		<div id="menu3">
			<table id="table">
				<tr>
					<td><a class="SE">Screening & Evaluation</a></td>
				</tr>
			</table>
		</div>
		<div id="menu4">
			<table id="table">
				<tr>
					<td><a class="application">Application</a></td>
				</tr>
			</table>
		</div>
		<div id="menu5">
			<table id="table">
				<tr>
					<td><a class="timeline">Timeline</a></td>
				</tr>
			</table>
		</div>
		<div id="menu6">
			<table id="table">
				<tr>
					<td><a class="FAQ">FAQ</a></td>
				</tr>
			</table>
		</div>
		<div id="menu7">
			<table id="table">
				<tr>
					<td><a class="people">People who matter!</a></td>
				</tr>
			</table>
		</div>
		<div id="menu8">
			<table id="table">
				<tr>
					<td><a class="contactUs">Contact Us</a></td>
				</tr>
			</table>
		</div>
		
		<div id="mask">
		
		
		<div class="home_desc">
			<table align="center"><tr><td><img id="OyceLogo" src="OyceLogo3.png"/></td></tr></table>
			<h1 style="font-family: impact;"><b>BLAST CARBOBLOCKS / UHDE INDIA</b></br>Award 2014</h1>	
			<h2><b>National Technical Paper & Poster Presentation Competition</b></h2>
			<hr/>
			<h3><font style="font-size: 13px;">Hosted By : </font></br><i> Department Of Chemical Engineering,</br> Thadomal Shahani Engineering College, Mumbai</i></h3>	
			<hr/>
			<div id="logos"></br>
				<table align="center"><tr><td>
					<img src="tsec logo.png" height="70px" width="99px"/>
					<img style="margin:0 10px 0 10px" src="iichemrclogo.png" height="70px" width="90px" />
					<img src="uhde-india-logo.png" height="70px" width="184px" />
				</td></tr></table>
			</div>
			<h6 id="creator">&copy; Copyright <b>Kapil Nichani</b>. All rights reserved</br>Web design by [ <font id="BahulJain">Bahul Jain</font> ]</h6>
			<div id="tickerContainer">
				<hr id="line1"/>
				<marquee id="ticker" behavior="scroll" direction="left" ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();">
				Upload your abstracts now. <a class="application" style="color:red;">Click Here</a>
				</marquee>
				<div id="opa"></div>
				<div id="opa2"></div>
				<hr id="line2"/>
			</div>
			
		</div>
		
		<div class="III_desc">
			<h1>Insight into IIChE </h1>
			<p>The Indian Institute of Chemical Engineers (IIChE) is the apex professional body of Chemical Engineers in India. It was established in 1947 soon after independence. The Institute has emerged as a national platform overseeing the interests of the academia, research scholars and the industry in the multifarious fields of chemical engineering and allied sciences. IIChE activities are spread across the country through its HQ and 30 Regional Centers and 70 Student Chapters. </p>
			<p>The Mumbai Regional Centre of IIChe was established in the year 1957, is one of the biggest centers of IIChE in India with about 15% membership. The current executive committee of the MRC is a broad based and finely balanced mixture of Chemical Engineering professionals drawn from the three streams of Academia, Research and Industry. The center is actively involved in arranging different activities for students and professionals including the flagship events like 'ChEQ' and 'Symposium on Energy and Water'.</p>
			</br>
			</br>
			<h6 style="margin-left: 5%;">&copy; Copyright <b>Kapil Nichani</b>. All rights reserved</br>Web design by [ <b>Bahul Jain<b> ]</h6>
			</br>
		</div>
		
		<div class="OYCE_desc">
			<div id="scrollable">
			<h1>What is OYCE?</h1>
			<p>A stand-alone Technical Paper Presentation Competition, brainchild of the Mumbai Regional Centre of IIChE was started in the year 2005. The annual award for 'Outstanding Young Chemical Engineers (OYCE)' aims to boost the interest of the younger generation in the vast field of Chemical Engineering.</p>
			<p>In its 10th year since inception, OYCE has reached new heights each year. It initially began to cater to the students and professionals in and around the city of Mumbai, OYCE over the years has expanded its horizons. Attracting a mix of under-graduate and post-graduate students along with working professionals from all over India, it gives a platform for learning and networking to the people of academia and industry.</p>
			<p>OYCE 2014 is proudly hosted by Thadomal Shahani Engineering College, Bandra, Mumbai on 1st March, 2014. The theme for it is 'Emerging Technologies in Chemical Engineering'. </p>
			<p>The participating individuals / teams can present case studies in any of the following two streams: </p>
			<ul>
				<li>Technical (Manufacturing, Operations, Academics, Engineering services, Consultancy services, Research & </br>Development, process package unit manufacturing and others in the Chemical engineering and Technologies Context etc).</li>
				<li>Managerial (Project Management, Marketing, HR, Finance, IT in the Chemical Engineering Context etc)</li>
			</ul>
			<p>All technical sessions will try to cover host of topics including</p>
			<ul>
				<li>Energy resources & Alternate Energy</li>
				<li>Nanotechnology</li>
				<li>Advanced Separation Techniques</li>
				<li>Green Technology and Chemistry</li>
				<li>Environmental Engineering</li>
				<li>Optimization</li>
				<li>Biochemical Engineering</li>
				<li>Pharmaceutical Engineering</li>
				<li>Process Simulation and Control</li>
				<li>Fluid Mechanics & CF</li>
				<li>Food technology</li>
				<li>Water Treatment</li>
			</ul>
			<p>We invite students and working professionals across the nation to be a part of 10th version of OYCE. </p>
			</br>
			</br>
			<h6 style="margin-left: 5%;">&copy; Copyright <b>Kapil Nichani</b>. All rights reserved</br>Web design by [ <b>Bahul Jain<b> ]</h6>
			</br>
			</div>
		</div>
		
		<div class="SE_desc">
			<h1>Screening & Evaluation</h1>
			<p>An 'Extended Abstract' covering the important highlights of the work including the benefits/relevance for the society, industry, profession etc has to be initially submitted for screening. The extended abstract should not run into more than 2 pages.</p>
			<p>On selection the participating team / individual has to give an Oral Presentation. A Question-Answer session will be followed. The period of entire presentation including Q&A will be 20 to 25 minutes. All members of the team have to be present during the presentation. Evaluation by the esteemed judges will be based on the Coverage and depth of the presentation. Appropriate treatment of vital points would be considered. Effective handling of the questions put by the judges & audience to the team/individual will be assessed. Overall presentation skills of the participant will be judged.</p>
			</br>
			</br>
			<h6 style="margin-left: 5%;">&copy; Copyright <b>Kapil Nichani</b>. All rights reserved</br>Web design by [ <b>Bahul Jain<b> ]</h6>
			</br>

		</div>
		
		<div class="application_desc">
			<div id="scrollable">
			<h1>Application</h1>
			<p>OYCE-Blast Carboblocks / Uhde India Award 2014 is open for participants from ALL OVER INDIA. Chemical Engineering professionals under 35 years age group, and Under graduates, Post graduates & Research Students and Industry professionals can whole-heartedly participate in this competition, in a team of maximum THREE or as individuals.</p>
			
			<?php
				$mysql_host = "localhost";
				$mysql_user = "csitseco_kapil";
				$mysql_pass = "kapilnichani";
				$mysql_db = "csitseco_test";
				
				if(mysql_connect($mysql_host, $mysql_user, $mysql_pass)) {
					if(mysql_select_db($mysql_db)) {
					}
					else {
						echo mysql_error();
					}
				}
				else {
					echo mysql_error();
				}
				
				 if(isset ($_POST["send"]))
				 {
					$upload_name=$_FILES["upload"]["name"];
					$upload_type=$_FILES["upload"]["type"];
					$upload_size=$_FILES["upload"]["size"];
					$upload_temp=$_FILES["upload"]["tmp_name"];
					$tlname=$_POST["TeamLeaderName"];
					$app2=$_POST["Applicant2"];
					$app3=$_POST["Applicant3"];
					$institute=$_POST["Institute"];
					$email=$_POST["Email"];
					$phone=$_POST["Phone"];
					$address=$_POST["Address"];
					$title=$_POST["Title"];
					$message="TL Name : ".$tlname.", \nApplicant 2 : ".$app2.", \nApplicant 3 : ".$app3.", \nInstitute : ".$institute.", \nEmail : ".$email.", \nPhone : ".$phone.", \nAddress : ".$address.", \nTitle of Paper : ".$title;                           
					$subject ="OYCE Applicant - ".$_POST["TeamLeaderName"]." Attachment Mail.";
					$subject2 ="OYCE Applicant - ".$_POST["TeamLeaderName"]." Details Mail."; 		
					$to="kapilnichani@oyce2014.com";     
					$from=$email;
					
					$query = "INSERT INTO `cstseco_test`.`oycereg` (`SrNo`, `TLName`, `Applicant1`, `Applicant2`, `Institute`, `Email`, `Phone`, `Address`, `Title`) VALUES ('', '$tlname', '$app2', '$app3', '$institute', '$email', '$phone', '$address', '$title');";

					if($query_run = mysql_query($query)) {
					}
					else {
						echo mysql_error();
					}

					if($message==""||$subject==""||$to=="")
					{
						//echo '<font style="font-family:Verdana, Arial; font-size:11px; color:#F3363F; font-weight:bold">Please fill all fields</font>';
					}
					else
					{
						$fp = fopen($upload_temp, "rb");
					$file = fread($fp, $upload_size);

					$file = chunk_split(base64_encode($file));
					$num = md5(time());

						//Normal headers

					$headers  = "From: ".$tlname."<".$email.">\r\n";                     //"Info Mail<bahuljain@csitsec.org>\r\n";
					   $headers  .= "MIME-Version: 1.0\r\n";
					   $headers  .= "Content-Type: multipart/mixed; ";
					   $headers  .= "boundary=".$num."\r\n";
					   $headers  .= "--$num\r\n";

						// This two steps to help avoid spam

					$headers .= "Message-ID: <".gettimeofday()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
					$headers .= "X-Mailer: PHP v".phpversion()."\r\n";

						// With message

					$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
					   $headers .= "Content-Transfer-Encoding: 8bit\r\n";
					   $headers .= "".$message."\n";
					   $headers .= "--".$num."\n";

						// Attachment headers

					$headers  .= "Content-Type:".$upload_type." ";
					   $headers  .= "name=\"".$upload_name."\"r\n";
					   $headers  .= "Content-Transfer-Encoding: base64\r\n";
					   $headers  .= "Content-Disposition: attachment; ";
					   $headers  .= "filename=\"".$upload_name."\"\r\n\n";
					   $headers  .= "".$file."\r\n";
					   $headers  .= "--".$num."--";

					//  SEND MAIL CONTAINING DETAILS
						
						$headers2 = "From:" . $tlname;
						@mail($to, $subject2, $message, $header2);
					
					// SEND MAIL WITH ATTACHMENT

					   @mail($to, $subject, $message, $headers);
					   
					//FEEDBACK MAIL

						$to1 = $email;
						$subject1 = "OYCE Registration Confirmation";
						$message1 = "Hello ".$ltname." \nYou have registered successfully with us. Thank you for registering. \nYou will be informed of the selection of your abstract before 30th January, 2014.\n On selection you will have to pay the required application fees.\n
						For any details log on to www.oyce2014.com.";
						$from1 = "kapilnichani@oyce2014.com";
						$headers1 = "From:" . $from1;
						@mail($to1,$subject1,$message1,$headers1);	

					 fclose($fp);

					echo '<font style="font-family:Verdana, Arial; font-size:11px; color:#333333; margin-left:5%; font-weight:bold">Mail sent please check inbox and spam both <br /></font>';
				 }
				 }

			?>
			
			<form name="form" id="form" onsubmit="return test();" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
				<table cellpadding="0px" cellspacing="0px">
					<tr>
						<td><label id="labeltag">Name of Team Leader or Individual : </label></td>
						<td><input type="text" name="TeamLeaderName" onblur="emptyCheck(1,0); characterCheck(2,0);"/></td>
						<td ><label id="error1"></label></br>
							<label id="error2"></label>
						</td>
					</tr>
					<tr>
						<td><label id="labeltag">Applicant 2 : </label></td>
						<td><input type="text" name="Applicant2" onblur="characterCheck(3,1)"/></td>
						<td ><label id="error3"></label></td>
					</tr>
					<tr>
						<td><label id="labeltag">Applicant 3 : </label></td>
						<td><input type="text" name="Applicant3" onblur="characterCheck(4,2)"/></td>
						<td ><label id="error4"></label></td>
					</tr>
					<tr>
						<td><label id="labeltag">Institute : </label></td>
						<td><input type="text" name="Institute" onblur="emptyCheck(5,3); characterCheck(6,3);"/></td>
						<td ><label id="error5"></label></br>
							<label id="error6"></label>
						</td>
					</tr>
					<tr>
						<td><label id="labeltag">Email : </label></td>
						<td><input type="text" name="Email" onblur="emptyCheck(7,4); emailValidation(8,4);"/></td>
						<td ><label id="error7"></label></br>
							<label id="error8"></label>
						</td>
					</tr>
					<tr>
						<td><label id="labeltag">Phone : </label></td>
						<td><input type="text" name="Phone" onblur="emptyCheck(9,5); phoneNumberCheck(10,5)"/></td>
						<td ><label id="error9"></label></br>
							<label id="error10"></label>
						</td>
					</tr>
					<tr>
						<td><label id="labeltag">Address : </label></td>
						<td><input type="text" name="Address" onblur="emptyCheck(11,6)"/></td>
						<td ><label id="error11"></label></td>
					</tr>
					<tr>
						<td><label id="labeltag">Title of Paper : </label></td>
						<td><input type="text" name="Title" onblur="emptyCheck(12,7)"/></td>
						<td ><label id="error12"></label></td>
					</tr>
					<tr>
						<td><label id="labeltag">Document : </label></td>
						<td><input type="file" name="upload" id="upload"/></td>
						<td ><label id="error13"></label></td>
					</tr>
					<tr>
						<td><label></label></td>
						<td><input type="submit" value="Submit" id="send" name="send"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"/></td>
					</tr>
				</table>
			</form>
			<h6 style="margin-left: 5%;padding-bottom: 20px;">&copy; Copyright <b>Kapil Nichani</b>. All rights reserved</br>Web design by [ <b>Bahul Jain<b> ]</h6>
			</div>
		</div>
		
		<div class="timeline_desc">
			<h1>Timeline</h1>
			<p>Start of Acceptance of Extended Abstracts:</p>
			<p>Last Date for Acceptance of Extended Abstracts:</p>
			<p>Last Date for intimation of selected candidates:</p>
			<p>Last Date for payment of Fees by Selected Candidates:</p> 
			<p>Date of Presentation: </p>
			</br>
			</br>
			<h6 style="margin-left: 5%;padding-bottom: 20px;">&copy; Copyright <b>Kapil Nichani</b>. All rights reserved</br>Web design by [ <b>Bahul Jain<b> ]</h6>
			</br>
		</div>
		
		<div class="FAQ_desc">
			<div id="scrollable">
			<div class="container">
			<section>
                <div id="container_buttons">
					<h1 style="font-size: 48px; margin-left: 5%; padding-top:10px;">
						FAQs
					</h1>
					
					<div style="clear:both"></div>
					<ul>
						<li class="toggle">
							<a href="#One">A clock made in CSS3 | NO Javascript</a>
							<p id="One">
								Lets start learning CSS3 before its too late, I just saw a website which amazed me with its animation effects. First I thought that the site is using some JQuery libraries but when I actually went into the code, I found it is CSS3. So I started learning it, and today I made my first  <a href="http://webstutorial.com/css3-clock/css3">Read more...</a>
							</p>
						</li>
						<li class="toggle">
							<a href="#Two">Learn CakePHP From Novice to Professional : Part 2</a>
							<p id="Two">
								Model-View-Controller Cake enforces an MVC structure for your web applications. Basically, it effectively separates typical operations into specific areas: MODELS : for all your database interaction VIEWS : for all your output and displays CONTROLLERS : for all your commands/scripts for input and program flow The typical PHP application mixes each of these three functions  <a href="http://webstutorial.com/learn-cakephp-novice-professional-part-2/framework">Read more...</a>
							</p>
						</li>
						<li class="toggle">
							<a href="#Three">Learn CakePHP From Novice to Professional : Part 1</a>
							<p id="Three">
								This guide is for beginners to CakePHP. Whether or not you have much experience with the PHP scripting language, working in Cake will require some new methods you may or may not have tried before. If you don't know what a "has-and-belongs-to-many" relationship is, don't know how to build your own class object, or don't  <a href="http://webstutorial.com/learn-cakephp-novice-professional-part-1/framework">Read more...</a>
							</p>
						</li>
						
						<li class="toggle">
							<a href="#Four">Google Maps Server Side Geocoding Using PHP and Infobox Fully AJAX</a>
							<p id="Four">
								Recently I got a new project of real estate where I had to display about 1000 of projects on the google map. I was having the address of 1000 projects, so I started with my php and js code. When I coded and started testing, I found that on the map only 20-30 markers were  <a href="http://webstutorial.com/google-server-side-geocoding-php-infobox/website-tweaks/google">Read more...</a>
							</p>
						</li>
						
						<li class="toggle">
							<a href="#Five">Learn Codeigniter | Codeigniter Tutorial | Codeigniter Lessons | Part 1 | Webs Tutorial</a>
							<p id="Five">
								What is CodeIgniter? CodeIgniter is an open source PHP framework. This framework is used to build web applications and websites. CodeIgniter is best for developers who are into front-end development. It's easy to learn and it's fully flexibe. To learn CI (CodeIgniter), you should know PHP, MYSQL, OOPs and MVC. If you are new to  <a href="http://webstutorial.com/codeigniter-tutorials-codeigniter-lessons-part-1/programming/php">Read more...</a>
							</p>
						</li>
						<li class="toggle">
							<a href="#Six">Learn Codeigniter | Codeigniter Tutorial | Codeigniter Lessons | Part 1 | Webs Tutorial</a>
							<p id="Six">
								What is CodeIgniter? CodeIgniter is an open source PHP framework. This framework is used to build web applications and websites. CodeIgniter is best for developers who are into front-end development. It's easy to learn and it's fully flexibe. To learn CI (CodeIgniter), you should know PHP, MYSQL, OOPs and MVC. If you are new to  <a href="http://webstutorial.com/codeigniter-tutorials-codeigniter-lessons-part-1/programming/php">Read more...</a>
							</p>
						</li>
					</ul>
				</div>
			</section>
			</div>
			</br></br></br>
			</br>
			<h6 style="margin-left: 5%;padding-bottom: 20px;">&copy; Copyright <b>Kapil Nichani</b>. All rights reserved</br>Web design by [ <b>Bahul Jain<b> ]</h6>
			</br></br></br>
			</div>		
		</div>
			
		<div class="people_desc">
		</div>
		
		<div class="contactUs_desc">
			<h3>Contact Kapil Nichani : 7738788556</h3>
			<iframe id="maps" width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Thadomal+Shahani+Engineering+College,+37th+Road,+Khar+West,+Mumbai,+Maharashtra&amp;aq=0&amp;oq=Thadomal+Shahani+&amp;sll=19.069462,72.88836&amp;sspn=0.377048,0.676346&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=19.064227,72.836008&amp;spn=0.040562,0.051584&amp;z=14&amp;output=embed"></iframe><br /><small id="mapsLink"><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Thadomal+Shahani+Engineering+College,+37th+Road,+Khar+West,+Mumbai,+Maharashtra&amp;aq=0&amp;oq=Thadomal+Shahani+&amp;sll=19.069462,72.88836&amp;sspn=0.377048,0.676346&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=19.064227,72.836008&amp;spn=0.040562,0.051584&amp;z=14" style="color:white;text-align:left">View Larger Map</a></small>
			</br>
			</br>
			<h6 style="margin-left: 5%;padding-bottom: 20px;">&copy; Copyright <b>Kapil Nichani</b>. All rights reserved</br>Web design by [ <b>Bahul Jain<b> ]</h6>
			</br>
		</div>
		</div>
	</body>
</html>