<script>
function showResult2(str) {
  if (str.length==0) {
    document.getElementById("live-search2").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("live-search2").innerHTML=this.responseText;
    }

  }
  xmlhttp.open("GET","includes/components/searchresults.php?searchQuery="+str, true);
  xmlhttp.send();
}


</script>


<div class="search-container">
    <form  class="form">
        <input type="text" class="form-control" placeholder="Search" size="30" onkeyup="showResult2(this.value)">
        <button type="submit" class="search-button">
        <img src="icons/search.png">
        </button>

        
    </form>
    <div id="live-search2"></div>

</div>