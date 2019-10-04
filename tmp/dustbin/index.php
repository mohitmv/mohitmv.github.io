<?php


function disp_tabs($isbig=true) {
	foreach(array(
			array("About", "about"), 
			array("Skills", "skills"),
			array("Portfolio", "portfo"), 
			array("Experience", "exp"), 
			array("Testimonials", "tnms"), 
			array("Contact", "contact")
		) as $i) {
	?>
	<li class='<?php echo ($isbig ? '': 'navbar_tab_small'); ?>' ><a class='<?php echo ($isbig ? "navbar_tab" : "navbar_tab_small"); ?>  scolltillname' data-mshref="<?php echo $i[1]; ?>" ><?php echo $i[0]; ?></a></li>
	<?php
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>StillHungry | Chewing each byte of code</title>

	<?php
		$tmp1 = array("keywords", "description");
		for($i=0; $i<2; $i++) {
	?>
	<meta name="<?php echo $tmp1[$i]; ?>" content="Freelance Web developer in Delhi, Android Developer in Delhi, Android Developer from IIT Delhi, Java Developer, Android Studio Coder in Delhi, Android Application Developer, Android App Developer from IIT Delhi, PHP developer From IIT Delhi, PHP coder, PHP developer, mysql coder, Javascript developer, good web developer in India, php, mysql, javascript, jquery, css, html, web application, game developer, game developer in delhi, game developer from IIT Delhi, Jquery developer, JavaScript developer, MySql Server, MySql query, Linux shell scripting, automated scripts, python scripts, web crawling, online web applications developer, linux command line scripting, python server and sockets, hacking jugads, proxy free download, scrapy"/>
	<?php
		}
	?>


	<!-- CSS  -->
<!-- 	<link href="assets/css/gfont.css" rel="stylesheet">
	<link href="assets/libs/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 -->


  <link href="assets/css/gfont.css" rel="stylesheet">
  <link href="css1/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css1/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


</head>
<body>

	<div id="preloader" style='display:none;' >
		<div class="loader">
			<svg class="circle-loader" height="50" width="50">
				<circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
			</svg>
		</div>
	</div><!--preloader end-->




	<div style='' >


		<div class='navbar-fixed'  >
			<nav class="white" role="navigation"  >
				<div class="nav-wrapper menucontainer"  >
					<a id="logo-container" data-mshref="home" href="" class="brand-logo scolltillname" style='cursor:pointer;' >
						<img src='photo/logo.png' style='vertical-align:middle;' class='responsive-img hide-on-small-only' >
						<img src='photo/logo5.png' style='vertical-align:middle;' class='responsive-img hide-on-med-and-up' >
					</a>
					<ul class="right hide-on-med-and-down">
						<?php
						disp_tabs(true);
						?>
					</ul>

					<ul id="nav-mobile" class="side-nav" style='width:240px;' >
						<li class="mobile-profile" style='background:url("photo/home-bg.jpg") no-repeat scroll center center / cover;' >
							<div class="profile-inner">
								<div class="pp-container">
									<img src="photo/mohit1.jpg" alt="">
								</div>
								<h3>Mohit Saini</h3>
								<h5>Web and Android Developer</h5>
							</div>
						</li>
						<?php
						disp_tabs(false);
						?>
					</ul>
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons"  style='color:rgb(114, 114, 114);'  >menu</i></a>
				</div>
			</nav>
		</div>

		<div id="index-banner" class="parallax-container" style='' name='home' >

			<div class="" style='height:85vh;display:table;margin:auto;' >
				<div class="container" style='display:table-cell;vertical-align:middle;' >
					<br><br>
					<h1 class="header center text-lighten-2 main-title ">
						<span style='color:white;' >HI! I'm</span>
						<span style='color:#00bcd4;' > Mohit Saini</span>
					</h1>
					<h5 class="header center home-subtitle">Web and Android Developer from IIT Delhi, India</h5>
					<div class="row center">

					</div>
					<div class="row center">
						<a href="#contact" data-mshref='contact' class="scolltillname hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text" style='color: white; background-color:#00bcd4; padding: 0 1.1rem; line-height:45px; height:45px;  ' >Hire Me<i class="material-icons left" style='margin-right:6px;font-size:18px;' >send</i>
											</a>
					</div>
					<br><br>

				</div>
			</div>
			<div class="parallax"><img src="photo/home-bg.jpg" alt="Unsplashed background img 1"></div>
		</div>



		<div style='background-color:#fafafa' name="about" >
			<div style='height:100px;' ></div>
			<div class="menucontainer">
				<div class="row" >
					<div class='col s12 m12 l4' >
						<div class='about-subtitle' >My Story</div>
						<div class='normaltext' >
		Hello, I'm a alumini of IIT Delhi, passed out in may 2016 after completing B.Tech in computer Science department. I was freelanceing since 3 years along with my study. I have developed many big projects for serval startups during my colleage life and the number of small projects, I have worked on are alooot.
		I have a team of designer and developers who work with me. 
						</div>
					</div>
					<div class='col s12 m6 l4' >	
						<div class='card' style='' >
							<img src="photo/mohit1.jpg" class='responsive-img' style='border-radius:5px;border:solid white 8px;border-bottom-width:2px;' >
						</div>
					</div>
					<div class='col s12 m6 l4'  >
						<div style='padding-left:10px;' >
							<div class='about-subtitle' >Personal Information</div>
							<div>
								<?php
								foreach(array(
									array("Name", "Mohit Saini"), 
									array("Age", number_format((time()-strtotime("11-9-1996"))/(365.243*24*3600), 2)." Years"), 
									array("Phone", "+91 7503-759-053"), 
									array("Email", "mohitsaini1196@gmail.com"), 
									
									) as $i) {
								?>
								<h5 class='normaltext' style='border-bottom: 1px solid #eeeeee;padding-bottom:10px;margin-bottom:10px;' >
									<span style='min-width:70px;display:inline-block;' ><?php echo $i[0]; ?> : </span>
									<?php echo $i[1]; ?>
								</h5>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style='height:100px;' ></div>
		</div>





		<div style='background-color: #00bcd4' name='skills' >
			<div style='height:100px;' ></div>
			<div class="menucontainer">


				<p class="title">Skills</p>
				<p class="normaltext" style='color:white;font-size:18px;font-weight:500;' >I am impartial when it comes to languages. I have worked on many languages. I also work on my own language named 'msl', which is part of my framework 'mslib'. 
					<br><br>
					<div style='height:10px;' ></div>
					<?php

					$skills = array(
						array("PHP, Javascript, JQuery, MySQL", "Very good and fluent in php, javascript, JQuery, MySQL. I make websites using php backend."), 
						array("CSS, HTML, XML", "I am a decent designer. I work on bootstrap and materializecss. Sometime I use a template and work on that."), 
						array("Python, C++, Java", "I am very adept at coding in Python, C++, Java. My favourite out of them is Python because of its sheer simplicity and ease. I work in Java for android development."), 
						array("Tech support", "I manage websites hosted on linux server and update them time to time. I prefer a Linux envionment for its usability and programmer-friendly interface."), 
						array("Wireframe Designing", "I love to design Wireframe and functional architecture of a idea. I love to spend time on a idea to decide a efficient structure for best user experience."), 
					);
					foreach ($skills as $key => $value) {
					?>
					<b style='font-size:22px;font-weight:900;color:white;' ><?php echo $value[0]; ?> </b><br>
					<b style='font-weight:500;color:white;' ><?php echo $value[1]; ?></b>
					<br>

					<div style='height:19px;' ></div>

					<?php
					}
					?>
				</p>



			</div>
			<div style='height:100px;' ></div>
		</div>


		<div style='background-color: #fafafa' name='portfo'  >
			<div style='height:100px;' ></div>
			<div class="menucontainer">


				<p class="title" style='color:#333' >Portfolio</p>
				<p class="normaltext" style='color:#727272;font-size:18px;font-weight:400;' >I have worked on many projects which includes Web, Android applications for Startups, Games etc. I make completly responsive designs which works perfectly on mobile, tablet, computer etc. I am very good in writing crawling-scripts to fetch data from internet. 
				</p>
				<div class='row' >
				<?php
				$projects = array(
					array("Web Portal & App", "photo/proj2.png", "MesSmart", "http://www.messmart.com", "www.messmart.com", "A portal where people can book their daily meal from local mess in their area. Mess can join and provide food for people. Currently working on Kota. It's android app developed with help of our internship team is also live on google play. backend made with help of Mslib"), 
					
					array("Web Portal", "photo/proj3.png", "Batch Yearbook", "yearbook.pdf", "yearbook.pdf", "A portal using which our batch was able to write testimonials for others. We used it to create yearbook of our computer science 2012 entry batch. There were many feature in portal. Portal was able to export the yearbook as pdf. Attached pdf is exported from portal except the starting, ending covers. Another purpose of it's development was to feed some code to Mslib." ), 

					array("Web Portal", "photo/proj1.png", "Classpundit", "http://www.classpundit.com", "www.classpundit.com", "A portal helps you find classes in your neighborhood. Like music classes, basketball classes etc. You can connect with class provider through portal. It was also made with help of Mslib."), 

					array("Profile Website", "photo/proj5.png", "Namami Yoga", "http://www.namamiyoga.com", "www.namamiyoga.com", "It's Profile Website for a Yoga Class named Namami Yoga. It's a responsive profile working in every sized device. It was also made with help of Mslib."), 
					
					array("Web Portal", "photo/proj7.png", "KurryBox", "", "", "A Portal for Food startup in Delhi. People can order food using it. But Startup is closed now due to market unavailability. So website doesn't exists anymore. It was also made with help of Mslib."), 


					array("Web Portal", "photo/proj4.png", "getIITians", "http://www.getiitians.com", "www.getiitians.com", "A portal for online teaching. You can search for a teacher of any subject, book an appointment for a particular time slot. Teacher can teach you online on scheduled time. I made it in summer 2015 leading a team of design interns. Portal is updated a lot after that."), 
					
					// array("My Library 'MsLib'", "photo/proj6.png", "MsLib", "", "", "Mslib is a framework, where i work most of the time. It has many sections. It helps me everywhere in development. It can understand a language, convert it to another desired language. It can understand very friendly syntex. It can optimize the code, It can seprate the part of code, which can be directly cached. With help of my framework many things can be done very fast. It can handle ajax actions very smartly and developer-friendly manner. In short, I love my mslib"), 
					);

					for($i=0; $i<count($projects); $i++) {
						$proj = $projects[$i];
					?>
						<div class="col s12 m6 l4 single-card-box wow fadeInUpSmall left" data-wow-duration=".7s">
							<div class="card" style='margin-top:50px;min-height:450px;' >
								<div class="card-image waves-effect waves-block waves-light">
									<p class="left-align card-title-top" style='color:#727272;font-weight:400;padding:0px 20px 10px ;line-height:1.7;border-bottom: 1px solid #eee;' ><?php echo $proj[0]; ?></p>
									<div class="activator card-img-wrap" onclick='/*m=$("#bigpic");m.find("img").attr("src", ""); m.find("img").attr("src", $(this).find("img")[0].src); m.openModal();*/' >
										<img class="" src="<?php echo $proj[1]; ?>"  >
									</div>
								</div>
								<div class="card-content">
									<span class="card-title activator brand-text"><?php echo $proj[2]; ?><i class="material-icons right">more_vert</i></span>
									<p><a <?php echo ($proj[3] != '' ? 'href="'.$proj[3].'"': ''); ?> target="_blank" ><?php echo $proj[4]; ?></a></p>
								</div>
								<!-- Reveal content-->
								<div class="card-reveal">
									<div class="rev-title-wrap">
										<span class="card-title activator brand-text"><?php echo $proj[2]; ?><i class="material-icons right">close</i></span>


											
										<p><a <?php echo ($proj[3] != '' ? 'href="'.$proj[3].'"': ''); ?> target="_blank" ><?php echo $proj[4]; ?></a></p>
									</div>
									<p class="rev-content">
										<?php echo $proj[5]; ?>
									</p>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>

				<p class="title" style='color:#333' >Personal Projects</p>
				<p class="normaltext" style='color:#727272;font-size:18px;font-weight:400;' >I keep on working on whatever stuff i get. I love to make new things using whatever ideas i get. So I have around 50-60 small-small personal projects. I have listed few of them. 
					<div style='height:26px;' ></div>
					<?php
					$skills = array(
						array("Grade Checker", "It is a service using which IITD students, who cannot access IIT's Internal Intranet from home can check their semester grades and can also check their course enrolled for upcoming semester. Our grades are uploaded on private network, which works within IIT-Delhi, So I made a system, which bypass the data through public server. 3557 Students (out of around 6k students in IITD) used my service.", ""), 
						array("Training & Placement portal", "Made complete end to end system for training and placement for a university.", ""), 
						array("Lift Simulator", "Made a funny lift Simulator. Which can used as backend code for lift.", "http://www.cse.iitd.ac.in/~cs1120233/lift"), 
						array("Simple Risc Assembler", "It is a graphical simulater for simple Risc assembly language. ", "http://www.cse.iitd.ac.in/~cs1120233/assembler/"), 
						array("Focus Game", "This is a simple and cool game. Play it and test your focus power.", "http://www.cse.iitd.ac.in/~cs1120233/focus"), 
						array("eduguidefoundation.com", "This is a profile website for a free school running in rural area.", "http://eduguidefoundation.com"), 
					);
					foreach ($skills as $key => $value) {
					?>
					<b style='font-size:22px;font-weight:600;color:#444' ><a <?php echo ($value[2]=='' ? '': 'href="'.$value[2].'"' ); ?> target="_blank" style='color:inherit' ><?php echo $value[0]; ?></a></b><br>
					<b style='font-weight:500;color:#444;font-size:16px;' ><?php echo $value[1]; ?></b>
					<br>
					<div style='height:19px;' ></div>
					<?php
					}
					?>
				</p>


				<p class="title" style='color:#333' >Achievements</p>
				<p class="normaltext" style='color:#727272;font-size:18px;font-weight:400;' >
					<div style='height:26px;' ></div>
					<?php
					$skills = array(
						array("Code.fun.do winner", "We were part of window-app compitition by mictrosoft at our collage IIT Delhi. Our team(4 member) was winning team of all. Our team got 32000 rupee as winning award.", ""), 
					);
					foreach ($skills as $key => $value) {
					?>
					<b style='font-size:22px;font-weight:600;color:#444' ><a <?php echo ($value[2]=='' ? '': 'href="'.$value[2].'"' ); ?> target="_blank" style='color:inherit' ><?php echo $value[0]; ?></a></b><br>
					<b style='font-weight:500;color:#444;font-size:16px;' ><?php echo $value[1]; ?></b>
					<br>
					<div style='height:19px;' ></div>
					<?php
					}
					?>
				</p>



			</div>
			<div style='height:100px;' ></div>
		</div>



		<div style='background-color: #00bcd4' name='exp' >
			<div style='height:100px;' ></div>
			<div class="menucontainer">


				<p class="title">Experience</p>
				<p class="normaltext" style='color:white;font-size:18px;font-weight:500;' >I am coding since 4 year, but freelancing since 3 years. In that time I have worked with many startups. Mainly I handle the technical part of a startup which includes design, user experience, efficient architecture designing, development, testing of portal.
					<br><br>




					<?php

					$skills = array(
						array("Internship at proptiger", "It was my first experice of internship. Proptiger is a real estate company, where I was memeber of crawling team. I wrote crawling scripts to fetch the data from other website and upload it on our website.."), 
						array("Institute Internship ", "In my institute internship during my 3rd year, I was leading a team of 5-6 member, consisting designers, developers for the startup getIITians.com . We developed a online teaching portal where students can book appointments for teacher and teacher can teach the student online."), 
						array("Web Development Internship", "I worked for a startup which provides IT solutions. I developed a portal for Training&Placement managment at a university."), 
					);
					foreach ($skills as $key => $value) {
					?>
					<b style='font-size:22px;font-weight:900;color:white;' ><?php echo $value[0]; ?> </b><br>
					<b style='font-weight:500;color:white;font-size: 17px;' ><?php echo $value[1]; ?></b>
					<br>

					<div style='height:19px;' ></div>

					<?php
					}
					?>
				</p>
			</div>
			<div style='height:100px;' ></div>
		</div>



		<div style='background-color: #fafafa;' >
			<div style='height:100px;' ></div>
			<div class="menucontainer">
				<p class="title" style='color:#333' >Personal Jugad</p>
				<p class="normaltext" style='color:#727272;font-size:18px;font-weight:400;' >In 4 years of IITD, I developed many jugads to do many cool stuff.. I just made these things for fun only.. Never used them with purpose of actually using them... Because making such things <i>thrills</i> our heart & soul completely but "using them" actually <i>kills</i> us. So there is no point in using them.
					<div style='height:26px;' ></div>
					<?php
					$skills = array(
						array("Submit Assignment After Deadline", "Using a trick, we can submit assignments after deadline. Actually my idea is dependent on a observation that during assignment demo TA run our code first, if it's running, he asks us questions about it. <br> So If I feel that I can't finish the assignment before deadline what I do is, I submit a special code instead of assignment code before deadline. Now Deadline is over. I work on assignment code after deadline, submit it on my personal portal. Now the day will come when we have to demonstrate our assignment. TA will run the code thinking it's assignment code. Special-Code, which I submitted as assignment code is executed. Special code is very special with some weired things written in code. What It does is: <br> 1. Download the assignment code from my personal portal. <br>2. Run the downloaded assignment code.<br> 3. Delete itself(special code)<br> Now TA can see the results of assignment, I submitted after deadline on my personal portal. Code is working, now he will check code, He will find correct code. <br> And that's All :D"), 
						array("Proxy Free Download", "We had a internet access limit of 2 GB per week. Whenever we download something, our proxy-quota decreases. I had a method to download anything without loosing my proxy. My target were only PHD people having no-proxy-limit. <br>I observed that all the PHD people coming to lab love a special computer in lab of all. They always use the same computer. What I did is, developed a python socket-server program. What I programmed in server part is: <br>1. Receive Any message, <br>2. execute it as linux command. <br> 3. Send back result of linux command. <br> Program was also able to check which proxy is currently login on computer. So using my client-program, I was able to send message to server program and run any command on the environment server program is running. I run the server on all the computers, where those PHD people love to sit. I screen-locked my account with server's script running on them. After a while when those people arrived at their favorite place, they logined their proxy on system. Since proxy is logined on a IP, my script was also able to use the proxy as It was running on same IP. Now I can sit on different computer and send command to server. I can send a command which means 'Download this and store at Desktop' and get downloaded whatever I want using the proxy of targeted person. <br> And that's All :D :D"), 
						array("Change Marks in Demo", "This is a method how we can change the given marks by TA in demo of our assignment. So for this, we need a socket-server pair. Along with assignment we can add extra part of code. What that does is: Run my server script in background process of linux. which can interact with client program. We can write such malicious code in c++ and compile it & delete the code. Add only complied file. when TA run the assignment code, our server script start running on his computer. Now we can run any linux command on his computer by messaging through our client script. We know that every linux computer has a special folder '.mozilla' in Home directry. It is profile of firefox. We can send a command to get his complete folder '.mozilla' . Now I got '.mozilla' folder of TA's computer. I can rename my .mozilla folder as '.mozilla1' for a while, and run his .mozilla folder in place of mine. I restart the firefox in my computer. Now I can see his firefox. Everything of his firefox. We know that almost everyone keep the gmail logined in his personal computer. So I can access his gmail account since It was logined in firefox. So I can see the shared google-sheets with him and can change the marks safely. Ofcourse I have access to his gmail account. but I won't harm him else he will doubt and can track everything.<br> And I got what I wanted. :D :D"), 
					);
					foreach ($skills as $key => $value) {
					?>
					<b style='font-size:22px;font-weight:600;color:#444' ><a <?php echo (''=='' ? '': 'href="'.$value[2].'"' ); ?> target="_blank" style='color:inherit' ><?php echo $value[0]; ?></a></b><br>
					<b style='font-weight:500;color:#444;font-size:16px;' ><?php echo $value[1]; ?></b>
					<br>
					<div style='height:19px;' ></div>
					<?php
					}
					?>
				</p>
			</div>
			<div style='height:100px;' ></div>
		</div>

		<div style='background-color: #fafafa' >
			<div style='height:100px;' ></div>
			<div class="menucontainer"  name='tnms' >
				<p class="title" style='color:#333' >Testimonials</p>
				<p class="normaltext" style='color:#727272;font-size:18px;font-weight:400;' >By Friends, Clients, Batch mates</p>
				<?php
					$tnms = array(
						array("Ambarish S kumar", "It is absolutely remarkable that Mohit, at the tender age of 19, has displayed such an astounding maturity in delivering the tasks which we had assigned him to do.<br>We contacted Mohit for developing an online exam, a very challenging one as it required integration of various question types. I had contacted many companies for taking up this job but none were willing as it required a lot of time. However, Mohit agreed to do the task in a shorter duration. <br>He not only completed the task within the stipulated time but also provided us exactly what we required. Through our experience with him, we can vouchsafe for his expertise in coding. He is brilliant in his work and his dedication is highly commendable. Also he is energetic, dynamic and always hungry to learn and deliver as his website rightly suggests \"stillhungry\" <br> We would definitely avail Mohit's service in all our future endeavors.  Thank you Mohit for all your help. We look forward to working with you again. All the best", "Client", "mailto:askambar@gmail.com"), 
						array("Aishwarya", "I have known Mohit for more than 4 years now, and havent yet come across a more hard working and capable programmer than him. He has a very sound and thorough knowledge of web development, web designing and backend development. He has worked with me on developing a 3D gaming project, and also in website development for a startup based in Kota. He facilitated the grade-viewing system in our college, which enabled us to view our scores/grades even outside of the campus. Most recently, he developed an online slam book application, in which classmates from our batch could write testimonials and post memorable photographs with each other. He also has entrepreneurship capabilities and has a lot of hands-on experience in industry level programming work.", "Batch Mate", "https://www.facebook.com/rai.aishwarya.900"), 


						array("Nitin Agarwal", "One of the best coders of our batch. writes high quality documented code at a fantastic speed.", "Batch Mate", "https://www.linkedin.com/in/nitin-agarwal-6587a3108"), 

						array("Shivank Goel", 'Mohit Saini is one of the best guys I have known in the development work. I know him since past two years. His systematic approach towards coding and life in general has no match. He thinks his code not mere a code but an art. He was always a "proper indentation", "no loopholes", "no risks" and "I want end to end perfection" kind of guy.  He is always ready to take up new challenges. Tech-geek , expert , brilliant mind , hard-work and passion are defining words for the person. He is also very experienced and has worked on many real development projects. He also made an automated grade checker from home for the whole institute and could achieve what even the brightest folks couldn\'t here at IIT Delhi. A very practical minded person and hence he hits the nail right on the head and likes to work on projects with real world needs and applications. In short he is a guy whom you can always trust on.', 'Friend', 'https://www.facebook.com/shivankgoelindia'), 

						array("Ira Trivedi", " Mohit is a diligent worker and a talented programmer. He gets the job done in a fast and efficient manner. I recommend him to everyone and anyone who wants a cost effective and well made website.", "Among Top 10 indian writer", "https://www.google.co.in/?client=ubuntu#channel=fs&q=ira+trivedi&gfe_rd=cr"), 

					);
					$tabdiv = array(array(0, 1), array(4, 3, 2));

					
				?>
				<div class='row'  >
					<?php
					foreach($tabdiv as $tnmindexes) {
					?>
					<div class='col l6 m6 s12' >
						<?php
							foreach($tnmindexes as $j) {
								$tnm = $tnms[$j];
						?>
						<div class='card-panel' >
							<p style='font-style:italic;color:#727272;font-size:15px;line-height:25px;' ><?php echo $tnm[1]; ?></p>
							<p align='right' > - <a target="_blank" href='<?php echo $tnm[3]; ?>' ><?php echo $tnm[0]; ?></a>
								<br><?php echo $tnm[2]; ?>
							</p>
						</div>
						<?php
							}
						?>
					</div>
					<?php
						}
					?>
				</div>
			</div>
			<div style='height:100px;' ></div>
		</div>



		<div style='background-color: #00bcd4' name='contact' >
			<div style='height:100px;' ></div>
			<div class="menucontainer">


				<p class="title">Contact</p>
				<p class="normaltext" style='color:white;font-size:18px;font-weight:500;' >

				<!-- 3rd Floor, Building G5, Gali G12, G-block, Jail Road, Hari Nagar, Delhi, India  -->
				GCL Lab, Bharti building, IIT Delhi, Delhi, India


					<br>
					<span style='font-weight:600;' >mohitsaini1196@gmail.com</span> | <span>+91 7503-759-053</span>
				</p>
			</div>
			<div style='height:100px;' ></div>
		</div>










		<footer style="margin-bottom:-20px;" >
			<div class="menucontainer" style='' >
				<div class="row">
					<div class="col s12">
						<ul class="left social-icons">
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.stillhungry.in%2F&amp;src=sdkpreparse" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook" target="_blank" ><img src="photo/fb.png" ></a>
							</li>
						</ul> <!-- ./social icons end -->
						<div class="right copyright">
							<p class='scolltillname' data-mshref='about' style='cursor:pointer;' >&copy; Mohit Saini</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>


	<!--  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/libs/materialize/js/materialize.min.js"></script>
	<script src="assets/js/init.js"></script>
-->

	<div class="modal modal1" id="bigpic" style='' >
		<img src="" />
	</div>


<script src="assets/js/jquery-2.1.1.min.js"></script>

  <script src="js1/materialize.js"></script>
  <script src="js1/init.js"></script>


<!-- Hotjar Tracking Code for http://stillhungry.in -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:279186,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>



	</body>
</html>
