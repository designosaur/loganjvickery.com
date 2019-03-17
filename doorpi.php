<?php $page=1; include("mastodon.php"); ?>
<?php $page=1; include("galformat.php"); ?>
				<h2>DoorPi Connected Doorbell &amp; Web App</h2>
					<p>DoorPi is a web app and internet connected doorbell concept that was made for the 2016 AT&amp;T Mobile App Hackathon.  I played the role of designer and developer for the web app portion of the the project.  JavaScript was used to generate the app history that was stored by the RaspberryPi to a .csv file.  The app was run from a RaspberryPi 3 computer and design and built in less than a day. My team won "1st Place - Best Use of Harman API".<br><br></p>
					<a href="work/doorpi_diagram.jpg" ><img class="gal_img" src="work/doorpi_diagram.jpg"></a><br><br>
					<p><br>					
					When a visitor presses the doorbell, DoorPi tells the security camera to take a photo of the visitor which is then sent to the user via SMS. This allows the user to see who is at the door from any location.  The photo is also recorded in the app's history.  Finally, the app connects to a bluetooth speaker which lights up and plays sound notifying users (including the hearing impaired).<br><br>The app was run on the RaspberryPi at the hacathon but <a href="http://loganjvickery.com/doorpi/">you can see a demo version here.</a></p>

<?php $page=1; include("back_bt.php"); ?>

			</div>
		</div>
			
<?php $page=1; include("foot.php"); ?>