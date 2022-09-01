$(function() {
    countDown();
  });
  function countDown() {
  var startDateTime = new Date();
  var endDateTime = new Date("December 28,2018 20:00:00");
  var left = endDateTime - startDateTime;
  var a_day = 24 * 60 * 60 * 1000;
	  
  var d = Math.floor(left / a_day) 

  var h = Math.floor((left % a_day) / (60 * 60 * 1000)) 
  
  var m = Math.floor((left % a_day) / (60 * 1000)) % 60 

  var s = Math.floor((left % a_day) / 1000) % 60 % 60 

  $("#TimeLeft").text(h + '時間' + m + '分' + s + '秒');
    setTimeout('countDown()', 1000);
  }