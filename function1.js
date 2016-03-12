$(document).ready(function(){
  $('.bar').on('input', function(){
    var input = parseInt($("#contrast").val());
    var input1 = parseInt($("#brightness").val());
    var input2 = parseInt($("#gray").val());
    var input3 = parseInt($("#hue").val());
    var input4 = parseInt($("#sepia").val());
    var input5 = parseInt($("#saturate").val());
    var input6 = parseInt($("#invert").val());
    var input7 = parseInt($("#blur").val());
    console.log(input);
    $('img').css({
      '-webkit-filter': 'contrast('+ input/10 +') brightness(' + input1*2 + '%) grayscale(' + input2 +'%) hue-rotate('+ input3*1.8 +'deg) sepia('+ input4 +'%) saturate('+ input5*10 +'%) invert('+ input6 +'%) blur('+ input7/10 +'px)'
    });
  });
});
