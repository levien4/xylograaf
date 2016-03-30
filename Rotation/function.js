var output = document.querySelector('.output');

function handleOrientation(event) {
  var x = event.beta;
  console.log(x);
  output.innerHTML  = "beta : " + x + "\n";
}

window.addEventListener('deviceorientation', handleOrientation);
