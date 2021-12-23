//Scripts Relating to the PHP navigation:
$(document).ready(function(){
    $("#page-content").ready(function(){
        $.ajax({url: "pages/landingpage.php", success: function(result){
            $("#page-content").html(result);
        }});
    });

    $("#landing-page").click(function(){
        $.ajax({url: "pages/landingpage.php", success: function(result){
            $("#page-content").html(result);
        }});
    });

    $("#cart").click(function(){
        $.ajax({url: "pages/cart.php", success: function(result){
            $("#page-content").html(result);
        }});
    });
});

function hello(){
    $.ajax({url: "pages/cart.php", success: function(result){
        $("#page-content").html(result);
    }});
}

function viewRestaurant(id){
    var restaurantURL = "pages/restaurant.php?r_id=" + id;

    $.ajax({url: restaurantURL, success: function(result){
        $("#page-content").html(result);
    }});
}

function showResult(str) {
    if (str.length==0) {
      document.getElementById("live-search").innerHTML="";
      return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("live-search").innerHTML=this.responseText;
      }
  
    }
    xmlhttp.open("GET","inc/components/searchresults.php?search-query="+str, true);
    xmlhttp.send();
  }
  