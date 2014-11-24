// Pause before fading badge in
$(document).ready(
  setTimeout(function() { 
    $(".jumbotron h1").addClass("load"); 
  }, 600)
);

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})