$(document).ready(function() {
	//E-mail Ajax Send
	$(".needMailForm").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "GET",
			url: "/site/mail", //Change
			data: th.serialize()+"&pageLink="+window.location,
		}).done(function() {
			$("#myModal").attr("data-needSuccess",true).modal("hide");
			$('#successModal').modal('show');
			setTimeout(function(){
				$('#successModal').modal('hide');
			}, 3000);
		});
		return false;
	});

	$(".mobileneedMailForm").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "GET",
			url: "/site/mail", //Change
			data: th.serialize()+"&pageLink="+window.location,
		}).done(function() {
			alert("Спасибо");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});
});