function teste(id){
  jQuery.ajax({
    type: "POST",
    url: "load.php",
    data: $(id).serialize(),
    success: function( data )
    {
      $("#myModal").html(data);
    }
  });
  return false;
}
function teste2(id){
  jQuery.ajax({
    type: "POST",
    url: "load2.php",
    data: $(id).serialize(),
    success: function( data )
    {
      $("#myModal2").html(data);
    }
  });
  return false;
}
$(document).ready(function() {
  $("#todos").click(function() {
    $("#content").hide().fadeIn(1000).load("table.php");
  });

});
$(document).ready(function() {
  $("#abertos").click(function() {
    $("#content").hide().fadeIn(1000).load("open.php");
  });
});

$(document).ready(function() {
  $("#indeferido").click(function() {
    $("#content").hide().fadeIn(1000).load("refused.php");
  });

});

$(document).ready(function() {
  $("#deferido").click(function() {
    $("#content").hide().fadeIn(1000).load("granted.php");
  });

});
$(document).ready(function() {
  $("#suporte").click(function() {
    $("#content").hide().fadeIn(1000).load("suporte.php");
  });

});

