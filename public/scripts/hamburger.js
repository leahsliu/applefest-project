$("#hamburger").click(function () {
  if ($("#navbar").hasClass("hidden")) {
    $("#navbar").removeClass("hidden");
  }
  else {
    $("#navbar").addClass("hidden");
  }
});
