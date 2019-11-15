
$(document).ready(function(){
$('#password,#pass').on('keyup', function () {
  if ($('#password').val() == $('#pass').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
});
