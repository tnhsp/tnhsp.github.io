$(function() {
	$('select[id^="progress-"]').change(function(e) {
		$.ajax({
			type: 'get',
			url: $(this).attr('data-url'),
			data: {
				student_id: $(this).attr('data-id'),
				progress_id: $(this).val()
			},
			success: function(response) {
				console.log('success');
			}
		});
	});


	var options = {
		title: '进度历史',
		placement: 'left',
		trigger: 'hover',
		html: true,
		content: function () {
			var history = "";
			$.ajax({
				type: 'get',
				async: false,
				url: $(this).attr('data-url-history'),
				data: {
					student_id: $(this).attr('data-id'),
				},
				success: function(response) {
					history = response;
				}
			});
			return history;
		}
	};
	$('select[id^="progress-"]').popover(options);
});