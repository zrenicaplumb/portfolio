<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

	
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link href="css/main.css" rel="stylesheet">
	<script src="js/main.js"></script>

	<title>Portfolio</title>
</head>

<body>
	<?php 
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'zrenicaplumb@gmail.com';
	$subject = 'Someone viewed your portfolio site.';
	mail($to, $subject, $message, 'FROM: ' . $email);
}
	
?>
	<div class="wrap">
		<header>
			<a href="index.html"><img src="myLogo.png" alt="logo" id="logo"></a>
			<nav>
				<ul>
					<li><a id="work-link" href="#">Work</a></li>
					<li><a id="about-link" href="#">About</a></li>

					<li><a id="contact-link" href="#">Contact</a></li>
				</ul>
			</nav>
		</header>
		<div class="content">	
			<div class="greeting-text">
				<p>Hello, my name is Will and i'm a<br>
					<span>Web Developer</span><br>
					</p>
				</div>
			</div>

			<div class="work-div" name="work">
				<a name="work"><h2>School &amp; Extracurricular Work</h2></a>
				<div class="row">

					<a href="/WEB/arsc-site/"><img src="img/arsc.png" alt="site-thumbnail"></a>
					<h3>Senior Project</h3>
					<a href="/WEB/04cNews/"><img src="img/thumb7.png" alt="site-thumbnail"></a>
					<a href="/WEB/dgm2780/project1/"><img src="img/thumb1.png" alt="site-thumbnail"></a>
					<a href="/WEB/dgm2780/project2/"><img src="img/thumb8.png" alt="site-thumbnail"></a>
					<a href="/WEB/08social/"><img src="img/thumb2.png" alt="site-thumbnail"></a>
					<a href="docs/dgm270r-final-project.pdf"><img src="/portfolio2/img/dgm-270r.JPG" alt="site-thumbnail"></a>
					<a href="docs/plumbswap.pdf"><img src="/portfolio2/img/plumbswap-pic.JPG" alt="site-thumbnail"></a>
					<a href="/WEB/copy_site_2/"><img src="img/thumb5.png" alt="site-thumbnail"></a>
					<a href="http://financialripple.com/"><img src="img/thumb6.png" alt="site-thumbnail"></a>
					<a href="docs/validation-and-design-guide.pdf"><img src="/portfolio2/img/validation-guide-pic.JPG" alt="site-thumbnail"></a>

					<h2>Sites/Pages Built for UVU</h2>
					<h4>{Uvu has since replaced the majority of their pages with pre-made templates.}</h4>
					<div class="UVU">
						
						<a href="http://www.uvu.edu/lang/index.html">UVU Languages Site</a>
						<a href="http://www.uvu.edu/is/">Integrated Studies </a>
					
						
						<a href="http://www.uvu.edu/idst/contours/">Interdisciplinary Studies</a>
						
					</div>
					
				</div>
			</div>

			<div class="about-div">
				<a name="about"><h2>About</h2></a>
				<p>I am an aspiring Web Designer and Developer, graduating in May with a bachelor's in Web Design &amp; Development at UVU with an emphasis in Application Development. I thoroughly enjoy coding and learning about all things web-related. I enjoy human languages and speak English and Polish fluently and have studied Russian, Spanish, Japanese, and am currently creating my own language. I like to think this skill of mine crosses over into the realm of coding languages also. </p>
				<p>I'm on the lookout for my first career Web Developer position and am excited to get into this field and have some real web-dev work to do. I want to increase my skills as a developer and am currently studying online web development courses in my spare time. I worked for Utah Valley University for over a year as an Area Support Web Developer before leaving to Europe for several months. At UVU I helped maintain, redesign, and rebuild web pages for the College of Humanities and Social Sciences (CHSS) and affiliated sites. Web developing is a career I can fully get behind and dive into, and all the new changes and technologies are fascinating.</p>
				<p>When i'm not working on web stuff, I compose on the piano, read, hike, play Starcraft 1, and watch documentaries.</p>
				<!-- <p><a href="docs/web_developer_resume.pdf" target="_blank" style="color:#fff;">My Resume</a> </p> -->
				<!-- <p><a href="transcript.pdf" target="_blank" style="color:#fff;">My UVU Transcript</a> </p> -->
			</div>


			<div class="bottom-div">
				<a name="contact"><h2>Contact me</h2></a>
				<div class="contact-boxes">
					<form action="index.php" method="POST" enctype="multipart/form-data">
						<input type="text" name="name" placeholder="Full name">
						<input type="email" name="email" placeholder="Email">
						<textarea type="text" name="message" placeholder="Message me"></textarea>
						<button name="submit" type="submit" value="submit" class="button" href="#">Send</button>
					</form>
				</div>

			</div>
			<footer>
				<div class="social-links">
					<ul>
						<li><a id="twitter" href="https://twitter.com/"><img src="img/twitter.png"></a></li>
						<li><a id="facebook" href="https://www.facebook.com/"><img src="img/facebook.png"></a></li>
						<li><a id="instagram" href="https://www.instagram.com/"><img src="img/instagram.png"></a></li>
						<li><a id="googleplus" href="https://plus.google.com/"><img src="img/googleplus.png"></a></li>
					</ul>
				</div>
			</footer>
		</div>


	</body>
</html>