<?php $page=1; include("mastodon.php"); ?>
		<header>
<?php $page=1; include("menu.php"); ?>
			<div class="hello">
				<div class="hellotext contain">Logan J Vickery is a <span class="bold">Web Developer </span> from <span class="bold">Portland, OR</span> who crafts <span class="bold">inspiring</span> and <span class="bold">easy-to-use</span> web experiences.
				</div>
			</div>
		</header>
		<section id="skills">
			<h2>Skills</h2>
			<icons class="contain">
				<icon>
					<img src="images/icon_code.png">
					<p>HTML & CSS</p>
					</icon>
				<icon>
					<img src="images/icon_js.png">
					<p>JavaScript</p>
				</icon>
				<icon>
					<img src="images/icon_adobe.png">
					<p>Adobe Illustrator & Photoshop</p>
				</icon>
				<icon>
					<img src="images/icon_wireframe.png">
					<p>Wireframing & Flow Charts</p>
				</icon>
				<icon>
					<img src="images/icon_sketch.png">
					<p>Sketching & Illustration</p>
				</icon>
			</icons>
		</section>
		<section id="about">
			<div class="contain">
				<h2>About Me</h2>
				<div class="about_text"><img src="images/profile.jpg" />
						<p>I've been developing and designing websites for over 15 years.  My journey started in 2003 when a boss at a part-time job told me to teach myself how to make websites on a slow day at work. Intrigued, I then continued to teach myself HTML, CSS, and JavaScript to make my own websites and apps. I started this website as a portfolio site for my design work while studying Industrial Design (BSID 2010) at the Georgia Institute of Technology. After college, I occasionally took on small freelance design and or development projects and attended hack-a-thons to keep my skills up.</p>
						<p>In 2016, I decided to turn my hobby into a career and after "refreshing" my skills using a free online resources, I accepted a job in Portland, OR as a full-time web specialist and front-end developer. Solving problems and creating apps and interfaces is my passion and what motivates me daily to further my web developement career. When I'm not coding, I enjoy cycling, disocvering new music and movies, and exploring new cities and ourdoors spaces.</p>
						<p>Awards:<br>1st: Startup Weekend Atlanta, Fall 2014<br>Best Use of Harman API: At&T Molbile App Hackathon, Feb 15th, 2016</p>
				</div>
			</div>
		</section>
		<section id="gallery">
			<div class="contain">
				<h2>Selected Works</h2>
				<tiles>
					<tile>
						<a class="htmlform" href="/htmlformat/html_formatter.html"></a>
						<p>Web Application</p>
					</tile>
					<tile>
						<a class="megamenu" href="megamenu.php"></a>
						<p>Web Development</p>
					</tile>
					<tile>
						<a class="jsgame" href="jsgame.php"></a>
						<p>JavaScript Game</p>
					</tile>
					<tile>
						<a class="doorpi" href="doorpi.php"></a>
						<p>Web Development</p>
					</tile>
					<tile>
						<a class="planets" href="planets.php"></a>
						<p>Web Application</p>
					</tile>
					<tile>
						<a class="biketrain" href="biketrain.php"></a>
						<p>Mobile UI Design</p>
					</tile>
					<tile>
						<a class="hop" href="hop.php"></a>
						<p>Logo Design</p>
					</tile>
					<tile>
						<a class="wfd" href="wfd.php"></a>
						<p>Mobile UI Design</p>
					</tile>
					<tile>
						<a class="dbv" href="dbv.php"></a>
						<p>Logo Design</p>
					</tile>
					<tile>
						<a class="nexttable" href="nexttable.php"></a>
						<p>Product Design</p>
					</tile>
					<tile>
						<a class="vicarian" href="vicarian.php"></a>
						<p>Product Design</p>
					</tile>
				</tiles>
			</div>
		</section>
		<section id="contact">
			<div class="contactmax">
				<!--<form class="center_form" method="post" name="contactForm" action="scripts/sendEmail.php" onsubmit="return validateForm()">-->
				<form class="center_form" method="post" name="contactForm" action="scripts/sendEmail.php">
				<h2>Contact Me<br></h2>
				<input class="input1" placeholder="Name*" name="name" type="text" required><br><br>
				<input class="input1" placeholder="Company" name="company" type="text"><br><br>
				<input class="input1" placeholder="Email* (e.g. name@company.com)" name="email" type="email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" required><br><br>
				<input class="input1" placeholder="Phone" name="phone" type="text"><br><br>
				<textarea class="input2" placeholder="Message*" name="msg" required></textarea><br><br>
				<p class="asterick">*This field is required</p>
				<input class="send orangeover" name="send" value="Send" type="submit"><br><br>
				</form>
			</div>
		</section>
<?php $page=1; include("foot.php"); ?>
