var StapNul;
function select(element) {
  return document.querySelectorAll(element);
}
let Huidig = 1;
let maxStap = 5;
var div = document.querySelector('#step');
(function() {
  ajax_get('Stap'+ Huidig +'.html', function(responseText) {
  select("#step").innerHTML = responseText;
});
  select("#previousStep").addEventListener('click', previousStep);
  select("#nextStep").addEventListener('click', nextStep);
})();

// Callbacks:

function ajaxLoad(event) {
    if (this.status === 200) {
        console.log(this.responseText);   // this === ZWZ
    } else {
        console.log("unsuccessful request");
    }
}

function ajaxError(event) {
    console.log('error');
}

function previousStep() {
  if (Huidig > 1) {
    Huidig--;
    ajax_get('Stap'+ Huidig +'.html', function(responseText) {
  select("#step").innerHTML = responseText;
});
    console.log("Back");
  }
}


function nextStep() {
  if (Huidig < maxSteps) {
    console.log("Next");
    Huidig++;
    ajax_get('Stap'+ Huidig +'.html', function(responseText) {
      select("#step").innerHTML = responseText;
    });
  }
}
function disableButtons() {
  select("#previousStep").removeAttribute("disabled");
  select("#nextStep").removeAttribute("disabled");
  if (currentStep == 1) {
    select("#previousStep").setAttribute("disabled", "disabled");
  }

  if (currentStep == maxSteps) {
    select("#nextStep").setAttribute("disabled", "disabled");
  }
}




function ajax_get(url, loadCallback, errorCallback) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", url, true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            loadCallback(ajax.responseText);
    }
    }

  ajax.addEventListener("error", errorCallback);

  ajax.send();
}

ajax_get('Stap1.html', function(responseText) {
  console.log(responseText);
},ajaxLoad);
