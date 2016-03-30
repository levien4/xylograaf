var output = document.querySelector('.output');

function handleOrientation(event) {
  var x = event.beta;

  output.innerHTML  = "beta : " + x + "\n";
}

window.addEventListener('deviceorientation', handleOrientation);
