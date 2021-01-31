$(function() {

	$('#register-form').validate({
		// debug: true,
		submitHandler: function(form){   //表单提交句柄
	        alert("信息提交成功，请等待相关人员联系您。");
	        form.submit();
	    },
		rules: {
			'Student[student_name]': {
				required: true
			},
			'Student[gender_id]': {
				required: true
			},
			'Student[phone_number]': {
				required: true,
				cellphone: true,
			},
			'Student[qq]': {
				required: true,
				qq: true
			},
			'Student[email]': {
				required: true,
				email: true,
			},
			'Student[education_id]': {
				required: true,
				min: 1,
			},
			'Student[status_id]': {
				required: true,
				min: 1,
			},
			'Student[course_id]': {
				required: true,
				min: 1,
			},
		},
		messages: {
			'Student[student_name]': {
				required: '用户名不能为空',
			},
			'Student[gender_id]': {
				required: '选择性别',
			},
			'Student[phone_number]': {
				required: '请留下电话号码',
				cellphone: '你的电话格式错误',
			},
			'Student[qq]': {
				required: '请留下QQ我们@你',
				qq: '你的QQ拼错了吧',
			},
			'Student[email]': {
				required: '请填写邮箱地址',
				email: '您的邮箱地址拼写错误',
			},
			'Student[education_id]': {
				required: '',
				min: '请选择一项',
			},
			'Student[status_id]': {
				required: '',
				min: '请选择一项',
			},
			'Student[course_id]': {
				required: '',
				min: '请选择一项',
			},
		},
		errorElement: 'span',
	});
});
