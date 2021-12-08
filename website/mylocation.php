<?php
include "db/db.php";
include "includes/header.php";

$userId = $_SESSION['userID'];
$primary = "select * from useraddress where userID = $userId and isPrimary = 1";
$primaryresults = $dbconn->query($primary);

$secondary = "select * from useraddress where userID = $userId and isPrimary = 0";
$secondaryresults = $dbconn->query($secondary);

$dbconn->close();
$p_result = '';
$s_result = '';
foreach($primaryresults as $res){
  $p_result = $res;
}

foreach($secondaryresults as $res){
  $s_result = $res;
}
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">My Location</h1>
  </div>
</div>

<main>
    <div class = "container">
      <div class = "row">
        <div class = "col-lg-6">
          <div class="card">
              <div class="card-body">
                <h3 class="card-title"> <i class="bi bi-search"></i> Search</h3>
                <div class="autocomplete-container" id="autocomplete-container"></div>
                <div id="map"></div>
              </div>
            </div>
        </div>

        <div class = "col-lg-6">
          <div class="card">
              <div class="card-body">
              <h3 class="card-title"><i class="bi bi-geo-alt-fill"></i> Saved</h3>
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="insertprimary.php">
                        <div class="form-group">
                          <h4 class="card-title"><i class="bi bi-house"></i> Primary</h4>
                          <label for="inputAddress">Street Address</label>
                          <input type="text" class="form-control" value="<?php if(isset($p_result['streetname'])){echo $p_result['streetname'];}?>" name="inputAddress" id="inputAddress" placeholder="1234 Main St" required>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress2">Address 2</label>
                          <input type="text" class="form-control" value="<?php if(isset($p_result['address2'])){echo $p_result['address2'];}?>" name="inputAddress2" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" value="<?php if(isset($p_result['city'])){echo $p_result['city'];}?>" name="inputCity" id="inputCity" placeholder="Halifax" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Province / State</label>
                            <select name="province" value="<?php if(isset($p_result['province'])){echo $p_result['province'];}?>" id="province" class="form-control">
                              <option value="AB" selected>Alberta</option>
                              <option value="BC">British Columbia</option>
                              <option value="MB">Manitoba</option>
                              <option value="NB">New Brunswick</option>
                              <option value="NL">Newfoundland and Labrador</option>
                              <option value="NS">Nova Scotia</option>
                              <option value="NT">Northwest Territories</option>
                              <option value="NU">Nunavut</option>
                              <option value="ON">Ontario</option>
                              <option value="PE">Prince Edward Island</option>
                              <option value="QC">Quebec</option>
                              <option value="SK">Saskatchewan</option>
                              <option value="YT">Yukon</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputZip">Postal Code</label>
                            <input type="text" class="form-control" value="<?php if(isset($p_result['postalCode'])){echo $p_result['postalCode'];}?>" name="inputZip" id="inputZip" placeholder="B3J2G9" required>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                      <br>
                      <form method="POST" action="deletepaddress.php">
                        <button type="submit" class="btn btn-danger">Discard</button>
                      </form>
                    </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="insertsecondary.php">
                        <div class="form-group">
                          <h4 class="card-title"><i class="bi bi-building"></i>  Secondary</h4>
                          <label for="inputAddress">Street Address</label>
                          <input type="text" class="form-control" value="<?php if(isset($s_result['streetname'])){echo $s_result['streetname'];}?>" id="inputAddress" name="inputAddress" placeholder="1234 Main St" required>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress2">Address 2</label>
                          <input type="text" class="form-control" value="<?php if(isset($s_result['address2'])){echo $s_result['address2'];}?>" id="inputAddress2" name="inputAddress2" placeholder="Apartment, studio, or floor" required>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" value="<?php if(isset($s_result['city'])){echo $s_result['city'];}?>" id="inputCity" name="inputCity" placeholder="Halifax" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Province / State</label>
                            <select name="province" value="<?php if(isset($s_result['province'])){echo $s_result['province'];}?>" id="province" class="form-control">
                              <option value="AB" selected>Alberta</option>
                              <option value="BC">British Columbia</option>
                              <option value="MB">Manitoba</option>
                              <option value="NB">New Brunswick</option>
                              <option value="NL">Newfoundland and Labrador</option>
                              <option value="NS">Nova Scotia</option>
                              <option value="NT">Northwest Territories</option>
                              <option value="NU">Nunavut</option>
                              <option value="ON">Ontario</option>
                              <option value="PE">Prince Edward Island</option>
                              <option value="QC">Quebec</option>
                              <option value="SK">Saskatchewan</option>
                              <option value="YT">Yukon</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputZip">Postal Code</label>
                            <input type="text" class="form-control" value="<?php if(isset($s_result['postalCode'])){echo $s_result['postalCode'];}?>" id="inputZip" name="inputZip" placeholder="B3J2G9" required>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                      <br>
                      <form id="form2" method="POST" action="deletesaddress.php">
                        <button type="submit" class="btn btn-danger">Discard</button>
                      </form>
                    </div>
                </div>
              </div>
          </div>
      </div>

      </div>
    </div>
</main>

<script>
var map = L.map('map').setView([44.6369077, -63.59041448], 18);
mapLink = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink + ' Contributors',
    maxZoom: 19,
    }).addTo(map);


function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Unable to determine position");
  }
}



function showPosition(position) {
  map.panTo(new L.LatLng(position.coords.latitude,  position.coords.longitude));
}

function panMapToSearch(lat, lng){
  map.panTo(new L.LatLng(lat,  lng));
}

    
$(document).ready(function() {
    getLocation();
});


// Code via https://apidocs.geoapify.com/samples/autocomplete/
/* 
	The addressAutocomplete takes as parameters:
  - a container element (div)
  - callback to notify about address selection
  - geocoder options:
  	 - placeholder - placeholder text for an input element
     - type - location type
*/
function addressAutocomplete(containerElement, callback, options) {
  // create input element
  var inputElement = document.createElement("input");
  inputElement.setAttribute("type", "text");
  inputElement.setAttribute("placeholder", options.placeholder);
  containerElement.appendChild(inputElement);

  // add input field clear button
  var clearButton = document.createElement("div");
  clearButton.classList.add("clear-button");
  addIcon(clearButton);
  clearButton.addEventListener("click", (e) => {
    e.stopPropagation();
    inputElement.value = '';
    callback(null);
    clearButton.classList.remove("visible");
    closeDropDownList();
  });
  containerElement.appendChild(clearButton);

  /* Current autocomplete items data (GeoJSON.Feature) */
  var currentItems;

  /* Active request promise reject function. To be able to cancel the promise when a new request comes */
  var currentPromiseReject;

  /* Focused item in the autocomplete list. This variable is used to navigate with buttons */
  var focusedItemIndex;

  /* Execute a function when someone writes in the text field: */
  inputElement.addEventListener("input", function(e) {
    var currentValue = this.value;

    /* Close any already open dropdown list */
    closeDropDownList();

    // Cancel previous request promise
    if (currentPromiseReject) {
      currentPromiseReject({
        canceled: true
      });
    }

    if (!currentValue) {
      clearButton.classList.remove("visible");
      return false;
    }

    // Show clearButton when there is a text
    clearButton.classList.add("visible");

    /* Create a new promise and send geocoding request */
    var promise = new Promise((resolve, reject) => {
      currentPromiseReject = reject;

      var apiKey = "db96d710b6044a44a2a18065aa9e9482";
      var url = `https://api.geoapify.com/v1/geocode/autocomplete?text=${encodeURIComponent(currentValue)}&limit=5&apiKey=${apiKey}`;
      
      if (options.type) {
      	url += `&type=${options.type}`;
      }

      fetch(url)
        .then(response => {
          // check if the call was successful
          if (response.ok) {
            response.json().then(data => resolve(data));
          } else {
            response.json().then(data => reject(data));
          }
        });
    });

    promise.then((data) => {
      currentItems = data.features;

      /*create a DIV element that will contain the items (values):*/
      var autocompleteItemsElement = document.createElement("div");
      autocompleteItemsElement.setAttribute("class", "autocomplete-items");
      containerElement.appendChild(autocompleteItemsElement);

      /* For each item in the results */
      data.features.forEach((feature, index) => {
        /* Create a DIV element for each element: */
        var itemElement = document.createElement("DIV");
        /* Set formatted address as item value */
        itemElement.innerHTML = feature.properties.formatted;

        /* Set the value for the autocomplete text field and notify: */
        itemElement.addEventListener("click", function(e) {
          inputElement.value = currentItems[index].properties.formatted;

          callback(currentItems[index]);

          /* Close the list of autocompleted values: */
          closeDropDownList();
        });

        autocompleteItemsElement.appendChild(itemElement);
      });
    }, (err) => {
      if (!err.canceled) {
        console.log(err);
      }
    });
  });

  /* Add support for keyboard navigation */
  inputElement.addEventListener("keydown", function(e) {
    var autocompleteItemsElement = containerElement.querySelector(".autocomplete-items");
    if (autocompleteItemsElement) {
      var itemElements = autocompleteItemsElement.getElementsByTagName("div");
      if (e.keyCode == 40) {
        e.preventDefault();
        /*If the arrow DOWN key is pressed, increase the focusedItemIndex variable:*/
        focusedItemIndex = focusedItemIndex !== itemElements.length - 1 ? focusedItemIndex + 1 : 0;
        /*and and make the current item more visible:*/
        setActive(itemElements, focusedItemIndex);
      } else if (e.keyCode == 38) {
        e.preventDefault();

        /*If the arrow UP key is pressed, decrease the focusedItemIndex variable:*/
        focusedItemIndex = focusedItemIndex !== 0 ? focusedItemIndex - 1 : focusedItemIndex = (itemElements.length - 1);
        /*and and make the current item more visible:*/
        setActive(itemElements, focusedItemIndex);
      } else if (e.keyCode == 13) {
        /* If the ENTER key is pressed and value as selected, close the list*/
        e.preventDefault();
        if (focusedItemIndex > -1) {
          closeDropDownList();
        }
      }
    } else {
      if (e.keyCode == 40) {
        /* Open dropdown list again */
        var event = document.createEvent('Event');
        event.initEvent('input', true, true);
        inputElement.dispatchEvent(event);
      }
    }
  });

  function setActive(items, index) {
    if (!items || !items.length) return false;

    for (var i = 0; i < items.length; i++) {
      items[i].classList.remove("autocomplete-active");
    }

    /* Add class "autocomplete-active" to the active element*/
    items[index].classList.add("autocomplete-active");

    // Change input value and notify
    inputElement.value = currentItems[index].properties.formatted;
    callback(currentItems[index]);
  }

  function closeDropDownList() {
    var autocompleteItemsElement = containerElement.querySelector(".autocomplete-items");
    if (autocompleteItemsElement) {
      containerElement.removeChild(autocompleteItemsElement);
    }

    focusedItemIndex = -1;
  }

  function addIcon(buttonElement) {
    var svgElement = document.createElementNS("http://www.w3.org/2000/svg", 'svg');
    svgElement.setAttribute('viewBox', "0 0 24 24");
    svgElement.setAttribute('height', "24");

    var iconElement = document.createElementNS("http://www.w3.org/2000/svg", 'path');
    iconElement.setAttribute("d", "M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z");
    iconElement.setAttribute('fill', 'currentColor');
    svgElement.appendChild(iconElement);
    buttonElement.appendChild(svgElement);
  }
  
    /* Close the autocomplete dropdown when the document is clicked. 
  	Skip, when a user clicks on the input field */
  document.addEventListener("click", function(e) {
    if (e.target !== inputElement) {
      closeDropDownList();
    } else if (!containerElement.querySelector(".autocomplete-items")) {
      // open dropdown list again
      var event = document.createEvent('Event');
      event.initEvent('input', true, true);
      inputElement.dispatchEvent(event);
    }
  });

}

addressAutocomplete(document.getElementById("autocomplete-container"), (data) => {
  console.log("Selected option: ");
  console.log(data);
  panMapToSearch(data.geometry.coordinates[1], data.geometry.coordinates[0])
}, {
	placeholder: "Enter an address here"
});




</script>

<?php include "includes/footer.php" ?>