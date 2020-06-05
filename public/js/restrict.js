$(function() {
	$("#btn_add_event").click(function(){
		$("#modal_event").modal();
	});

	$("#btn_add_member").click(function(){
		$("#modal_member").modal();
	});

	$("#btn_add_user").click(function(){
		$("#modal_user").modal();		
	});

	$("#btn_upload_event_img").change(function(){
		uploadImg($(this), $("#event_img_path"), $("#event_img"));
	});

	$("#btn_upload_member_photo").change(function(){
		uploadImg($(this), $("#member_photo_path"), $("#member_photo"));
	});
});