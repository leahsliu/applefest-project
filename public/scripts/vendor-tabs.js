console.log("JavaScript Loaded for vendor-tabs.js!")

$("#produce-tab").click(function() {
  $("#vendor-tab-2").addClass("hidden");
  $("#vendor-tab-3").addClass("hidden");
  $("#vendor-tab-4").addClass("hidden");
  $("#vendor-tab-1").removeClass("hidden");
});

$("#cider-tab").click(function() {
  $("#vendor-tab-1").addClass("hidden");
  $("#vendor-tab-3").addClass("hidden");
  $("#vendor-tab-4").addClass("hidden");
  $("#vendor-tab-2").removeClass("hidden");
});

$("#food-tab").click(function() {
  $("#vendor-tab-1").addClass("hidden");
  $("#vendor-tab-2").addClass("hidden");
  $("#vendor-tab-4").addClass("hidden");
  $("#vendor-tab-3").removeClass("hidden")
});

$("#craft-tab").click(function() {
  $("#vendor-tab-1").addClass("hidden");
  $("#vendor-tab-2").addClass("hidden");
  $("#vendor-tab-3").addClass("hidden");
  $("#vendor-tab-4").removeClass("hidden")
});
