$(document).ready(function() {

	$('#btn-shop').click(function(){

		$('#shop').css('display','block');
		$('#profil').css('display','none');
	});

	$('#btn-profil').click(function(){

		$('#profil').css('display','block');
		$('#shop').css('display','none');
	});

});