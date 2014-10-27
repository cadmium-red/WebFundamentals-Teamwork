$(document).ready(function(){
  $('#div-2').hide();
  $('#div-3').hide();
  $('#div-4').hide();

    $('#link1').click(function(){ 
      $('div[id^="div-"]').hide();
      $('#div-1').show();
  });
  
  $('#link2').click(function(){ 
      $('div[id^="div-"]').hide();
      $('#div-2').show();
  });
  
    $('#link3').click(function(){ 
      $('div[id^="div-"]').hide();
      $('#div-3').show();
  });
  
    $('#link4').click(function(){ 
      $('div[id^="div-"]').hide();
      $('#div-4').show();
  });
  
});