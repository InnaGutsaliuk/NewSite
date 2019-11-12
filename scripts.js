window.onload = function () {

	var el =  $('#slider img');

	var	indexImg = 1;
	var	indexMax = 3;
	$('#next').click(function () {
		if(indexImg === 3) {
			indexImg = 1;
		} else {
			indexImg += 1;
		}
		autoCange();
	});
	$('#prev').click(function () {
		if(indexImg === 3) {
			indexImg = 1;
		} else {
			indexImg += 1;
		}
		autoCange();
	});

	function autoCange () {
		indexImg++;
		if(indexImg > indexMax) {
			indexImg = 1;
		}
		if(indexImg == 1){
			el.filter(':nth-child(1)').css('display', 'block');
			el.filter(':nth-child(2)').css('display', 'none');
			el.filter(':nth-child(3)').css('display', 'none');
		}
		if(indexImg == 2){
			el.filter(':nth-child(1)').css('display', 'none');
			el.filter(':nth-child(2)').css('display', 'block');
			el.filter(':nth-child(3)').css('display', 'none');

		}
		if(indexImg == 3){
			el.filter(':nth-child(1)').css('display', 'none');
			el.filter(':nth-child(2)').css('display', 'none');
			el.filter(':nth-child(3)').css('display', 'block');
		}
	}
	setInterval(autoCange, 3000);
	$('#news').hover(function(){
			$('#child-news').css('display', 'block');
		}
	);
}