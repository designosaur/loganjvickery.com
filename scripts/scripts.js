function validateForm() {
  console.log("validating...");
  var name = document.forms["contactForm"]["name"].value;
  var email = document.forms["contactForm"]["email"].value;
  var msg = document.forms["contactForm"]["msg"].value;
  if (name === null || name === "") {
    alert("Name must be filled out");
    return false;
  }
}

function footerDate() {
	let today = new Date();
	document.getElementById('thisYear').innerHTML = today.getFullYear();
}

document.addEventListener("DOMContentLoaded", function() {
	footerDate();
});

function showProject(showWhat) {
  if (!document.getElementById('gallery-box')) {
    var galleryBox = document.createElement('div');
    galleryBox.id = "gallery-box";
    document.getElementById('gallery').appendChild(galleryBox);
  }
  var short = document.getElementById('gallery-box');
  short.innerHTML = galleryContent.preText + galleryContent.closeGallery + galleryContent[showWhat] + galleryContent.postText;
  short.style.display = "block";
  document.getElementsByTagName('body')[0].classList.add('no-scroll')
  short.addEventListener('click', function() {
    var x = event.clientX;
    var y = event.clientY;
    elementMouseIsOver = document.elementFromPoint(x, y);
    console.log(elementMouseIsOver.id);
    if (elementMouseIsOver.id == "gallery-box") {
      closeProject();
    }
  })
}

function closeProject() {
  document.getElementById('gallery-box').style.display = "none";
  document.getElementsByTagName('body')[0].classList.remove('no-scroll')
}

var galleryContent = {
  preText: '<div class="inner contain">',
  postText: '</div>',
  closeGallery:'<span class="close-gallery" onclick="closeProject();">Close</span>',
  // project content
  formatter: '<h2>HTML Formatter</h2><p>This is a tool designed at work to increase efficiency and reduce the monotony of converting text from word document (or other source) to an HTML format. Text that is copied and pasted into the top text area is wrapped in paragraph tags. The tags can then be changed to any other desired type by selecting another type of tag and clicking on a block of text in the lower output area. Custom classes or other attributes can be added as well using the custom text box.<br><br><a href="/formatter/html_formatter.html">Click here to try it out</a></p><br><br><img class="gal_img" src="work/formatter.jpg">',
  megamenu: '<h2>Custom Mega Menu</h2><p>My client needed to update an outdated e-commerce site with a "mega menu". They needed something that would integrate with the BigCommerce content management system.  Unsataisified with other options I decided to build my own JavaScript based menu.  <a href="https://cuttingboards.net">Click here to see it.</a></p><br><br><img class="gal_img" src="work/megamenu.jpg"><br><br>',
  jsgame: '<h2>Starfighter Game</h2><p>This is a simple game I programmed using HTML Canvas and JavaScript. It is an example of object oriented programming and the JS file is a little over 200 lines of code.<br><br><a href="/game">Click here to try it out</a></p><br><br><img class="gal_img" src="work/jsgame.jpg"><br><br>',
  planets: '<h2>Where Are the Planets?</h2><p>"Where Are the Planets?" is a web app that allows you to see the position of the planets in the solar system on any date.  The app uses javascript and scientific data about our solar system to create a 2D representation of the planets at the date entered in the inputs.  <br><br><a href="http://loganjvickery.com/solarsystem/">See it in action here.</a></p><img class="gal_img" src="work/planets_web.jpg"><br><br><p></p>',
  biketrain: '<h2>Bike Train App</h2><p>A collaboration with the Atlanta Bike Coalition.  A \"bike train\" is group of cyclist riding together for enhanced safety and companionship.  The ABC wanted an app that would help cyclist find and join up with bike trains in real time.  This app makes it possible for anyone to create and lead a bike train as well as join one.</p><br/><img class="centered" src="work/biketrainflow.jpg"><img class="centered" src="work/biketrain1.jpg"><img class="centered" src="work/biketrain2.jpg">',
  hop: '<h2>House of Pizza - A Logo Design Case Study</h2><p>The owners of House of Pizza allowed me to work with them on developing a logo for their new restuarant concept.  Some research of the competition was a first step in starting the project.</p><br><img src="work/hop_research.jpg"><br><br><p>Initial concepts were presented after receiving a very brief overview of the restaurant over the phone.</p><br><img src="work/hop1.jpg"><br><br><p>Meeting with the clients in person to discuss the initial concepts allowed me to get a better understanding of the restaurant concept and a new direction was decided upon.  Some of the elements from the 1st round were incoporated into the 2nd round. A quick rendering helped the client visualize what the exterior sign might look like.</p><br><img src="work/hop2.jpg"><br><br><img src="work/hop_sign.jpg"><br><br><p>The final color scheme and some minor detail changes were made before the final logo was handed over to the client.</p><br><img src="work/hop3.jpg"><br><br>',
  dbv: '<h2>Destin Beach Vacations</h2><p>Logo concepts for a beach rental company.</p><br><img class="centered" src="work/dbv.jpg"><br><br>',
  nexttable: '<h2>Next Table POS System</h2><p>Next Table is a combo handheld and tabletop POS system.  The purpose of this design is to enhance the dining out experience by reducing errors, speeding up the order taking process, and delivering a more prompt service.<br><br><br>Brainstorming Sketches</p><br><img src="work/nexttablesketches.jpg"><br><br><p>Scale Models/Form and Ergonomic Studies</p><br><img src="work/nexttableproto.jpg"><br><br><p>Final Designs: Solidworks & Photoshop</p><br><img src="work/nexttableholding.jpg"><br><br><img src="work/nexttablerender.jpg"><br><br>',
  wfd: '<h2>What\'s For Dinner App</h2><p>The "What\'s For Dinner" was a design project to showcase app design skills.  The purpose of the app is to make deciding what to eat for dinner for the upcoming week, easy.  The user first enters in the names of all of their favorite recipes.  Then the user may generate a randomly generated list of 7 meals for the week.  <br><br>Initial wireframe sketches:</p><br><img class="centered" src="work/wfd_wireframes.jpg"><br><br><p>Flowchart using Microsoft Visio:</p><br><img class="centered" src="work/wfd_flowchart.png"><br><br><p>Animated GIF showing app features:</p><br><a class="wfd_gif" href="work/wfd_animate.gif"><img src="work/wfd_animate.gif"></a><br><br>'
}
