function responsiveWebFunction() {
  var x = document.getElementById("navbar");
  if (x.className === "responsiveNavBar") {
    x.className += " responsive";
  } else {
    x.className = "responsiveNavBar";
  }
}