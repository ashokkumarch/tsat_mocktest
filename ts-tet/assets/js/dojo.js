$(function(){
  $('.timer').startTimer({
    onComplete: function(element){
	  alert('Time Completed. Submitting your Exam');
	  $('#submit').click();
    }
  });
});
