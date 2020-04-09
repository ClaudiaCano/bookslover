$(function() {
	  $(".my-rating").starRating({
		starSize: 20,
		initialRating: 4,
		readOnly: true,
		starShape: 'straight',
		//starShape: 'rounded',
		emptyColor: 'rgba(255, 255, 255, 0.3)',
		activeColor: 'white',
		useGradient: false,
		strokeWidth: 0,
	  });
	});