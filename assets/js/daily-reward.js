var $step = 0;
$(document).on("click", ".next_step", function ($e) {
  if ($step < 7) {
    $step++;
    var $rewardbox = ".rewarbox_" + $step;
    $($rewardbox).addClass("is-active");
  } else {
    $step = 0;
    $(".rewardbox.is-active").removeClass("is-active");
  }
  progressbarMove();
});
function progressbarMove() {
  console.log($step);
  var $totalsteps = $(".rewardbox").length;
  var $percent = Math.round((100 / $totalsteps) * $step);
  $(".progressbar > div").css("width", "calc(" + $percent + "% - 0%)");
  var $myxp = Math.round(200 * $step);
  var $numberfrom = Math.round($("#animate_number").html());
  $("#animate_number").countTo({ from: $numberfrom, to: $myxp });
}

var myDate = new Date();
myDate.setDate(myDate.getDate() + 2);
var $tomorrow =
  myDate.getFullYear() +
  "/" +
  ("0" + (myDate.getMonth() + 1)).slice(-2) +
  "/" +
  myDate.getDate();

$("#clock").countdown($tomorrow, function (event) {
  $(this).html(event.strftime("%Dd %Hh %Mm %S"));
});
