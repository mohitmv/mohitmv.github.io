<?php


function disp_tabs($isbig=true) {
	foreach(array(
			array("About", "about"), 
			array("Skills", "skills"),
			array("Portfolio", "portfo"), 
			array("Experience", "exp"), 
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
	<title>Parallax Template - Materialize</title>

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
					<a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text" style='color: white; background-color:#00bcd4; padding: 0 1.1rem; line-height:45px; height:45px;  ' >Hire Me<i class="material-icons left" style='margin-right:6px;font-size:18px;' >send</i>
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
	Hello, I'm a alumini of IIT Delhi, passed out in may 2016 after completing B.Tech in computer Science department. I was freelancer since 3 years along with my study. Now I am full time freelancer living in hari nagar in delhi. I have developed around 8-9 big projects for serval startups during my colleage life and the number of small projects, I have worked on are just uncountable.
	After passing out, I created a team of designer, developers who work with me. 
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
								array("Address", "Hari Nagar, Delhi, India"), 
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
					array("Wireframe Designing", "I love to design Wireframe and functional architecture for a  idea. I love to spend time on a idea to decide a efficient structure for best user experience."), 
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
			<p class="normaltext" style='color:#727272;font-size:18px;font-weight:400;' >I have worked on many projects which includes Web, Android applications for Startups, Games for myself. I make completly responsive designs which works perfectly on mobile, tablet, computer etc. I am very good in writing crawling-scripts to fetch data from internet. 
			</p>
			<div class='row' >
			<?php
			$projects = array(
				array("Web Portal & App", "photo/proj2.png", "MesSmart", "http://www.messmart.com", "www.messmart.com", "A portal where people can book their daily meal from local mess in their area. Mess can join and provide food for people. Currently working on Kota. It's android app developed with help of our internship team is also live on google play"), 
				
				array("Web Portal", "photo/proj3.png", "Batch Yearbook", "yearbook.pdf", "yearbook.pdf", "A portal using which our batch was able to write testimonials for others. We used it to create yearbook of our computer science 2012 entry batch. There were many feature in portal. Portal was able to export the yearbook as pdf. Attached pdf is exported from portal except the starting, ending covers." ), 

				array("Web Portal", "photo/proj1.png", "Classpundit", "http://www.classpundit.com", "www.classpundit.com", "A portal helps you find classes in your neighborhood. Like music classes, basketball classes etc. You can connect with class provider through portal. "), 

				array("Profile Website", "photo/proj5.png", "Namami Yoga", "http://www.namamiyoga.com", "www.namamiyoga.com", "It's Profile Website for a Yoga Class named Namami Yoga. It's a responsive profile working in every sized device."), 
				
				array("Web Portal", "photo/proj7.png", "KurryBox", "", "Startup Failed", "A Portal for Food startup in Delhi. People can order food using it. But Startup is closed now due to market unavailability. So website doesn't exists."), 


				array("Web Portal", "photo/proj4.png", "getIITians", "http://www.getiitians.com", "www.getiitians.com", "A portal for online teaching. You can search for a teacher of anysubject, book an appointment for a perticular time slot. Teacher can teach you online on booked time. I made it in summer 2015 leading a team of design interns. Portal is updated a lot after that."), 
				
				array("My Library 'MsLib'", "photo/proj6.png", "MsLib", "", "", "Mslib is a framework, where i work most of the time. It has many sections. It helps me everywhere in development. It can understand a language, convert it to another desired language. It can understand very friendly syntex. It can optimize the code, It can seprate the part of code, which can be directly cached. With help of my framework many things can be done very fast. It can handle ajax actions very smartly and developer-friendly manner. In short, I love my mslib"), 
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
					array("Training & Placement portal", "Made complete end to end system for training and placement in a university.", ""), 
					array("Lift Simulator", "Made a funny lift Simulator. Which can used as backend code for lift.", "http://www.cse.iitd.ac.in/~cs1120233/lift"), 
					array("Simple Risc Assembler", "It is a graphical simulater for simple Risc assembly language. ", "http://www.cse.iitd.ac.in/~cs1120233/assembler/"), 
					array("Focus Game", "This is a simple and cool game. Play it and test your focus power.", "http://www.cse.iitd.ac.in/~cs1120233/focus"), 
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
					array("Code.fun.do winner", "We took part in window-app compitition by mictrosoft at our collage IIT Delhi. Our team(4 member) was winning team of all. Our team got 32000 rupee as winning award."), 
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



	<div style='background-color: #fafafa' >
		<div style='height:100px;' ></div>
		<div class="menucontainer">
			<p class="title" style='color:#333' >Personal Jugad</p>
			<p class="normaltext" style='color:#727272;font-size:18px;font-weight:400;' >In 4 years of IITD, I developed many jugads to do many cool stuff. Since I'm passed out now, So It make sense to leak the Idea behind them.
				<div style='height:26px;' ></div>
				<?php
				$skills = array(
					array("Submit Assignment After Deadline", "Using a trick, we can submit assignments after deadline. Actually my idea is dependent on a observation that during assignment demo TA run our code first, if it's running, he asks us questions about it. <br> So If I feel that I can't finish the assignment before deadline what I do is, I submit a special code instead of assignment code before deadline. Now Deadline is over. I work on assignment code after deadline, submit it on my personal portal. Now the day will come when we have to demonstrate our assignment. TA will run the code thinking it's assignment code. Special-Code, which I submitted as assignment code is executed. Special code is very special with some weired things written in code. What It does is: <br> 1. Download the assignment code from my personal portal. <br>2. Run the downloaded assignment code.<br> 3. Delete itself(special code)<br> Now TA can see the results of assignment, I submitted after deadline on my personal portal. Code is working, now he will check code, He will find correct code. <br> And that's All :D"), 
					array("Proxy Free Download", "We had a internet access limit of 2 GB per week. Whenever we download something, our proxy-quota decreases. I had a method to download anything without loosing my proxy. My target were only PHD people having no-proxy-limit. <br>I observed that all the PHD people coming to lab love a special computer. They always use the same computer. What I did is, developed a python socket-server program. What I programmed in server part is: <br>1. Receive Any message, <br>2. execute it as linux command. <br> 3. Send back result of linux command. <br> Program was also able to check which proxy is currently login on computer. So using my client-program, I was able to send message to server program and run any command on the environment server program is running. I run the server on all the computers, where those PHD people love to sit. I screen-locked my account with server's script running on them. After a while when those people arrived at their favorite place, they logined their proxy on system. Since proxy is logined on a IP, My script was also able to use the proxy as It was running on same IP. Now I can sit on different computer and send command to server. I can send a command which means 'Download rab_ne_bna_di_jodi fullmovie and store at Desktop' and get Downloaded whatever I want using the proxy of targeted person. <br> And that's All :D :D"), 
					array("Change Marks in Demo", "This is a method how we can change the given marks by TA in demo of our assignment. So for this, we need a socket-server pair. Along with assignment we can add extra part of code. What that does is: Run my server script in background process of linux. which can interact with client program. We can write such malicious code in c++ and compile it & delete the code. Add only complied file. when TA run the assignment code, our server script start running on his computer. We can run any linux command on his computer by messaging through our client script. We know that every linux computer has a special folder '.mozilla' in Home directry. It is profile of firefox. We can send a command to get his complete folder '.mozilla' . Now I got '.mozilla' folder of TA. I can rename my .mozilla folder as '.mozilla1' for a while, and run his .mozilla folder in place of me. I restart the firefox in my computer. Now I can see his firefox. Everything of his firefox. We know that almost everyone keep the gmail logined in our personal computer. So I can access his gmail account since It was logined in firefox. So I can see the shared google-sheets with him and can change the marks safely. Ofcourse I have access to his gmail account. but I won't harm him else he will doubt and can track everything."), 
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


	<div style='background-color: #00bcd4' name='contact' >
		<div style='height:100px;' ></div>
		<div class="menucontainer">


			<p class="title">Contact</p>
			<p class="normaltext" style='color:white;font-size:18px;font-weight:500;' >3rd Floor, Building G5, Gali G12, G-block, Jail Road, Hari Nagar, Delhi, India 
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
						<p>&copy; Mohit Saini</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


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



	</body>
</html>
