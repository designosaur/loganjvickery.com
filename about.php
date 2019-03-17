<?php
$to = "loganjvickery@gmail.com";
$subject = "New msg from loganjvickery.com!";
$body = "\n";
$body .= $_POST['name'];
$body .= "\n\n";
$body .= $_POST['company'];
$body .= "\n\n";
$body .= $_POST['email'];
$body .= "\n\n";
$body .= $_POST['phone'];
$body .= "\n\n";
$body .= $_POST['msg'];
$body .= "\n\n";

if (isset($_POST['send'])) {
  if (mail($to, $subject, $body)) {
    header('location:http://www.loganjvickery.com/thanks.php ');
   } else {
    echo("<p>Message delivery failed...</p>");
   }
  }
?>


<?php $page=1; include("mastodon.php"); ?>
			<div class="about">
				<h2>About Me</h2>
<img class="biopic" src="images/biopic.jpg">I'm a full-time CAD furniture designer and a Graphic/UX designer on the side.<br><br>

I studied Industrial Design at Georgia Tech where I learned design, user research, prototyping, programming, an affinity for coffee, and hard work!  I have a 2+ years of experience as graphic designer and 3 years in CAD and furniture design ranging from hospitality to control rooms.<br><br>

Other hobbies include: photography, sustainability, front-end development, early-adopting, woodworking, NPR, blog reading, Pinterest, coffee, volleyball, running... <br><br>
			</div>
			<div class="line"> </div>
			<div class="social">
				<a target="_blank" class="social_links" href="http://www.flickr.com/photos/98632878@N06/"><img src="images/flickr.jpg"></a>
				<a target="_blank" class="social_links" href="http://www.linkedin.com/pub/logan-j-vickery/13/651/729"><img src="images/link.png"></a>
				<a target="_blank" class="social_links" href="http://pinterest.com/loganjvickery/"><img src="images/pin.jpg"></a>
				<a target="_blank" class="social_links" href="http://www.meetup.com/ixdaatlanta/members/52141852/"><img src="images/meetup.jpg"></a>
			</div>
			<div class="contact">
				<h2>Contact me<br></h2>
				<form class="center_form" method="post" action="http://loganjvickery.com/new/about.php">
				<span class="input0">Name:</span><input class="input1" name="name" maxlength="80" type="text"><br><br>
				<span class="input0">Company:</span><input class="input1" name="company" maxlength="80" type="text"><br><br>
				<span class="input0">Email:</span><input class="input1" name="email" maxlength="80" type="text"><br><br>
				<span class="input0">Phone:</span><input class="input1" name="phone" maxlength="10" type="text"><br><br>
				<span class="input0">Message:</span><textarea class="input2" name="msg" maxlength="3000"></textarea><br><br>
				<input class="send orangeover" name="send" value="Send" type="submit"><br><br>
				</form>
			</div>
			<div class="foot">
				All photos and work property of Logan J Vickery, 2013.
			</div>
		</div>
	</body>
</html>