/*-------------------------------------------------
---------------------------------------------------
-----------------RESPONSIVE DESIGN-----------------
---------------------------------------------------
-------------------------------------------------*/


	/*------------------------------
	-------SET TIMER FONT SIZE------
	------------------------------*/

	function setTimerFontSize() {
		var timerWidth = parseInt($('#timer').css('width'));
		var timerHeight = parseInt($('#timer').css('height'));

		var timerSize = timerWidth * timerHeight;
		var fontSize = timerSize / 1000;

		(fontSize < 15) ? fontSize = 15 : null;
    (fontSize > 87) ? fontSize = 87 : null;

		$('#timer').css('font-size', fontSize);
	}

	/*--------------------------------------------
	-------UPDATE FONT SIZE ON WINDOW RESIZE------
	--------------------------------------------*/

	function updateTimerFontSizeOnWindowResize() {
		$(window).resize(function() {
			setTimerFontSize();
		})
	}


/*-----------------------------------------------------------
-------------------------------------------------------------
-----------------LOAD ADDITIONAL TIME COOKIE-----------------
-------------------------------------------------------------
-----------------------------------------------------------*/

function loadAdditionalTimeCookie() {
	// If there is no additionalTime cookie.
 if (typeof Cookies.get('additionalTime') == 'undefined') {
	 $('#additionalTime').text('0');
 }

 else { // If the cookie exists.
	 $('#additionalTime').text(Cookies.get('additionalTime'));

   /* We show the clear button only if the time retrieved from the cookie
      is greater than 0 millisecond */
   if (parseInt($('#additionalTime').text()) > 0) $('#clearButton').css('display', 'inline-block');
 }
}

/*--------------------------------------
----------------------------------------
-----------------THEMES-----------------
----------------------------------------
--------------------------------------*/


	/*---------------------------
	-------INITIALIZE THEME------
	---------------------------*/

 	// Check if the user has a theme cookie, and use the theme if it is the case.
	function initializeTheme() {
		if (typeof Cookies.get('theme') != 'undefined') { // If the theme cookie exists.
			var themeCookieValue = Cookies.get('theme');
			$('#styleSheet1').attr('href', themeCookieValue);
			 // Checks the right radio button.
			 themeCookieValue = themeCookieValue.split('/')[2]; // Getting the 'xxx.css' part.
			$("[value='"+themeCookieValue+"']").attr('checked', 'checked');
		}

		else { // If the theme cookie doesn't exist, we check the light theme by default.
			$("[value='light.css']").attr('checked', 'checked');
		}
	}

	/*------------------------------
	-------HANDLE THEME CHANGE------
	------------------------------*/

	// Allow the user to change the page's theme by checking a radio button.
	function handleThemeChange() {
		$("[name='theme']").click(function() {
			var themeName = $(this).attr('value');
			$('#styleSheet1').attr('href', 'stylesheets/' + themeName);
		});
	}

/*----------------------------------------
------------------------------------------
-----------------ADD ZEROS----------------
------------------------------------------
----------------------------------------*/

function addZeros(number, length) {
	var string = '' + number; // Int to string.
	while (string.length < length) { string = '0' + string; }
	return string;
}

/*----------------------------------
------------------------------------
-----------------NOW----------------
------------------------------------
----------------------------------*/

function now() {
	return (new Date().getTime());
}

/*----------------------------------------------------------------------------------
------------------------------------------------------------------------------------
-----------------TRANSFORM MILLISECONDS TO FORMATTED TIME AND PRINT-----------------
------------------------------------------------------------------------------------
----------------------------------------------------------------------------------*/

function transformMillisecondsToFormattedTimeAndPrint(time) { // Time in milliseconds.
	var hours = parseInt(time / 3600000);
	var minutes = parseInt(time / 60000) - (hours * 60);
	var seconds = parseInt(time / 1000) - (minutes * 60) - (hours * 3600);
	// var milliseconds = parseInt(time % 1000);
	$('#timer').text(addZeros(hours, 2) + ':' + addZeros(minutes, 2) + ':'
									 + addZeros(seconds, 2));
}

/*-------------------------------------------
---------------------------------------------
-----------------START TIMER-----------------
---------------------------------------------
-------------------------------------------*/

function startTimer() {
	var additionalTime = 0;
	var currentTime = 0;

	var startTime = now();

	var timer = setInterval(function() {
								var additionalTime = parseInt($('#additionalTime').text());
								currentTime = (now() - startTime) + additionalTime;
								transformMillisecondsToFormattedTimeAndPrint(currentTime);
							}, 55); // in millisecond.

	$('#pauseButton').click(function() {
    clearInterval(timer);

		Cookies.remove('additionalTime');

		$('#additionalTime').text(currentTime);

		$('#pauseButton').css('display', 'none');
		$('#startButton').css('display', 'inline-block');
		$('#clearButton').css('display', 'inline-block');
	});
}


/*-------------------------------------------------------
---------------------------------------------------------
-----------------BUTTONS AND KEYS EVENTS-----------------
---------------------------------------------------------
-------------------------------------------------------*/


	/*---------------------------------
	-------HANDLE SPACE KEY PRESS------
	---------------------------------*/

	function handleSpaceKeyPress() {
		$(document).keyup(function(keyPressed) {
	    if (keyPressed.keyCode == 32) { // If the space bar has been pressed.
	      if ($('#startButton').css('display') == 'inline-block') { // If the start button is visible.
	      	$('#startButton').click();
	      }

	      else {
	      	$('#pauseButton').click();
	      }
	    }
		})
	}

	/*-------------------------------
	-------START TIMER ON CLICK------
	-------------------------------*/

	function startTimerOnClick() {
		$('#startButton').click(function () {
			$(this).css('display', 'none'); // Hide the 'Start' button.
			$('#clearButton').css('display', 'none'); // Hide the 'Clear' button in the case it was shown.
			$('#pauseButton').css('display', 'inline-block'); // Show 'Pause' button.

			startTimer();
		});
	}

	/*-------------------------
	-------CLEAR ON CLICK------
	-------------------------*/

	function clearTimerOnClick() {
		$('#clearButton').click(function() {
			$('#clearButton').css('display', 'none');
			$('#additionalTime').text('0'); // Delete any additional time.
			$('#timer').text('00:00:00');
		});
	}


/*--------------------------------------------------------
----------------------------------------------------------
-----------------SAVE CHRONOMETER ON EXIT-----------------
----------------------------------------------------------
--------------------------------------------------------*/

// Puts the chronometer's actual time in milliseconds and the user's theme in a cookie.
function saveChronometerAndThemeOnExit() {
	window.onbeforeunload = function() {
		var additionalTime = $('#additionalTime').text();
		Cookies.set('additionalTime', additionalTime, 365);

		var actualTheme = $('#styleSheet1').attr('href');
		Cookies.set('theme', actualTheme, 365);
	}
}

/*------------------------------------
--------------------------------------
-----------------MAIN-----------------
--------------------------------------
------------------------------------*/

$(function() {
	setTimerFontSize();
	updateTimerFontSizeOnWindowResize();

	initializeTheme();

	loadAdditionalTimeCookie();
	var additionalTime = $('#additionalTime').text();
	transformMillisecondsToFormattedTimeAndPrint(additionalTime);

	handleSpaceKeyPress();

  startTimerOnClick();
	clearTimerOnClick();

	handleThemeChange();

	saveChronometerAndThemeOnExit();
});