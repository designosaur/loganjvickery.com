function validateForm() {
  console.log("function validateForm called");
  return false;
  var name = document.forms["contactForm"]["name"].value;
  var email = document.forms["contactForm"]["email"].value;
  var msg = document.forms["contactForm"]["msg"].value;
  if (name == null || name == "") {
    alert("Name must be filled out");
    return false;
  }
}
