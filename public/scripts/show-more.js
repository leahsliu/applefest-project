console.log("JavaScript loaded!")
//actions when clicking questions with +
$("#q1-button").click(function() {
  $("#q1-answer").removeClass("hidden");
  $("#q1-button-minus").removeClass("hidden");
  $("#q1-button").addClass("hidden");
});

$("#q2-button").click(function() {
  $("#q2-answer").removeClass("hidden");
  $("#q2-button-minus").removeClass("hidden");
  $("#q2-button").addClass("hidden");
});

$("#q3-button").click(function() {
  $("#q3-answer").removeClass("hidden");
  $("#q3-button-minus").removeClass("hidden");
  $("#q3-button").addClass("hidden");
});

$("#q4-button").click(function() {
  $("#q4-answer").removeClass("hidden");
  $("#q4-button-minus").removeClass("hidden");
  $("#q4-button").addClass("hidden");
});

$("#q5-button").click(function() {
  $("#q5-answer").removeClass("hidden");
  $("#q5-button-minus").removeClass("hidden");
  $("#q5-button").addClass("hidden");
});

$("#q6-button").click(function() {
  $("#q6-answer").removeClass("hidden");
  $("#q6-button-minus").removeClass("hidden");
  $("#q6-button").addClass("hidden");
});

$("#q7-button").click(function() {
  $("#q7-answer").removeClass("hidden");
  $("#q7-button-minus").removeClass("hidden");
  $("#q7-button").addClass("hidden");
});

//actions when clicking questions with -
$("#q1-button-minus").click(function() {
  $("#q1-answer").addClass("hidden");
  $("#q1-button-minus").addClass("hidden");
  $("#q1-button").removeClass("hidden");
});

$("#q2-button-minus").click(function() {
  $("#q2-answer").addClass("hidden");
  $("#q2-button-minus").addClass("hidden");
  $("#q2-button").removeClass("hidden");
});

$("#q3-button-minus").click(function() {
  $("#q3-answer").addClass("hidden");
  $("#q3-button-minus").addClass("hidden");
  $("#q3-button").removeClass("hidden");
});

$("#q4-button-minus").click(function() {
  $("#q4-answer").addClass("hidden");
  $("#q4-button-minus").addClass("hidden");
  $("#q4-button").removeClass("hidden");
});

$("#q5-button-minus").click(function() {
  $("#q5-answer").addClass("hidden");
  $("#q5-button-minus").addClass("hidden");
  $("#q5-button").removeClass("hidden");
});

$("#q6-button-minus").click(function() {
  $("#q6-answer").addClass("hidden");
  $("#q6-button-minus").addClass("hidden");
  $("#q6-button").removeClass("hidden");
});

$("#q7-button-minus").click(function() {
  $("#q7-answer").addClass("hidden");
  $("#q7-button-minus").addClass("hidden");
  $("#q7-button").removeClass("hidden");
});
