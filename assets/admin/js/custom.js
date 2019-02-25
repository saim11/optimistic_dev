jQuery( document ).ready(function( $ ) {
	
	$("#blog_category, #blog_tags").select2();
	//For hiding the alert div
	$(".alertrow").on('click',function(){
		$(this).fadeOut(500,function(){
			$(this).remove();	
		});
	});
	$('.aplha').keyup(function () { 
     this.value = this.value.replace(/[^a-zA-Z0-9\- ]/g,'');
	});
	$('.uname').keyup(function () { 
     this.value = this.value.replace(/[^a-z0-9\-\.\_]/g,'');
	});
	
	$('.dec').keyup(function () { 
     this.value = this.value.replace(/[^0-9\.]/g,'');
	});
	$('.numb').keyup(function () { 
     this.value = this.value.replace(/[^0-9]/g,'');
	});
	$('.aplhasmall').keyup(function () { 
     this.value = this.value.replace(/[^a-z0-9\-]/g,'');
	});
	
	$("#page_name").on('keyup',function(){
		var input = this.value;
		input = input.replace(/^\s\s*/, '') // Trim start
        .replace(/\s\s*$/, '') // Trim end
        .toLowerCase() // Camel case is bad
        .replace(/[^a-z0-9_\-~\+\s]+/g, '') // Exchange invalid chars
        .replace(/[\s]+/g, '-'); // Swap whitespace for single hyphen
		
		$("#page_uri").val(input);
	});
	$("#area_name").on('keyup',function(){
		var input = this.value;
		input = input.replace(/^\s\s*/, '') // Trim start
        .replace(/\s\s*$/, '') // Trim end
        .toLowerCase() // Camel case is bad
        .replace(/[^a-z0-9_\-~!\+\s]+/g, '') // Exchange invalid chars
        .replace(/[\s]+/g, '-'); // Swap whitespace for single hyphen
		
		$("#area_slug").val(input);
	});
	$("#hotel_name").on('keyup',function(){
		var input = this.value;
		input = input.replace(/^\s\s*/, '') // Trim start
        .replace(/\s\s*$/, '') // Trim end
        .toLowerCase() // Camel case is bad
        .replace(/[^a-z0-9_\-~!\+\s]+/g, '') // Exchange invalid chars
        .replace(/[\s]+/g, '-'); // Swap whitespace for single hyphen
		
		$("#hotel_slug").val(input);
	});
	
	
	$("#proj_name").on('keyup',function(){
		var input = this.value;
		input = input.replace(/^\s\s*/, '') // Trim start
        .replace(/\s\s*$/, '') // Trim end
        .toLowerCase() // Camel case is bad
        .replace(/[^a-z0-9_\-~!\+\s]+/g, '') // Exchange invalid chars
        .replace(/[\s]+/g, '-'); // Swap whitespace for single hyphen
		
		$("#proj_slug").val(input);
	});
	$("#prop_name").on('keyup',function(){
		var input = this.value;
		input = input.replace(/^\s\s*/, '') // Trim start
        .replace(/\s\s*$/, '') // Trim end
        .toLowerCase() // Camel case is bad
        .replace(/[^a-z0-9_\-~!\+\s]+/g, '') // Exchange invalid chars
        .replace(/[\s]+/g, '-'); // Swap whitespace for single hyphen
		
		$("#prop_slug").val(input);
	});	
	
	$(".slug").on('keyup',function(){
		var input = this.value;
		input = input.replace(/^\s\s*/, '') // Trim start
        .replace(/\s\s*$/, '') // Trim end
        .toLowerCase() // Camel case is bad
        .replace(/[^a-z0-9_\-~\+\s]+/g, '') // Exchange invalid chars
        .replace(/[\s]+/g, '-'); // Swap whitespace for single hyphen
		
		$(this).val(input);
	});
	
	
	$("#blog_name").on('keyup',function(){
		var input = this.value;
		input = input.replace(/^\s\s*/, '') // Trim start
        .replace(/\s\s*$/, '') // Trim end
        .toLowerCase() // Camel case is bad
        .replace(/[^a-z0-9_\-~!\+\s]+/g, '') // Exchange invalid chars
        .replace(/[\s]+/g, '-'); // Swap whitespace for single hyphen
		
		$("#blog_uri").val(input);
	});
	$("#cat_name").on('keyup',function(){
		var input = this.value;
		input = input.replace(/^\s\s*/, '') // Trim start
        .replace(/\s\s*$/, '') // Trim end
        .toLowerCase() // Camel case is bad
        .replace(/[^a-z0-9_\-~\+\s]+/g, '') // Exchange invalid chars
        .replace(/[\s]+/g, '-'); // Swap whitespace for single hyphen
		
		$("#cat_slug").val(input);
	});
	
	
	//For launching the delete confirmation modal
	$(".delitem").on('click',function(){
		var recordID = this.id;
		var controller = $(this).attr('data-controller');
		recordID = recordID.replace("recordID","");
		var delLink = admin_url+controller+'/delete/'+recordID;
		$("#deleteLink").attr("onclick","window.location='"+delLink+"'");
		$('#deleteModal').modal('show');
	});
	
	$(".changestatus").on('click',function(){
		var recordID = this.id;
		var controller = $(this).attr('data-controller');
		
		if(controller=="pages" || controller=="trainings" || controller=="activities"  || controller=="events")
		{
			var status = ($(this).html() == "Published") ? "Un-Published" : "Published";
		}
		else{
			var status = ($(this).html() == "Enable") ? "Disable" : "Enable";
		}
		$("#modStatus").html(status);
		recordID = recordID.replace("statusID","");
		var delLink = admin_url+controller+'/changestatus/'+recordID+'/'+status;
		$("#statusLink").attr("data-status-url",delLink);
		$('#statusModal').modal('show');
	});
	var statusReq = null;
	$("#statusLink").on('click',function(){
		$('#statusModal').modal('hide');
		var statusLink = $(this).attr('data-status-url');
		if(statusReq!=null)
		{
			statusReq.abort();
		}
		statusReq = $.getJSON(statusLink,function(d){
			if(d.status=="true")
			{
				$("#statusID"+d.id).html(d.currentStatus);	
			}
		});
		
	});
	//For launching the duplicate property modal
	$(".dupitem").on('click',function(){
		var recordID = this.id;
		var controller = $(this).data('controller');
		var recname = $(this).attr('data-rec-name');
		$("#recname").html(recname);
		recordID = recordID.replace("copyID","");
		var delLink = admin_url+controller+'/duplicate/'+recordID;
		$("#duplicateLink").attr("onclick","window.location='"+delLink+"'");
		$('#dupModal').modal('show');
	});
	
	//Admin Settings Javascript START
	$("#adm_setting").validate({
		rules:{
			admin_name:{
				required:true
			},
			admin_email:{
				required:true,
				email: true
			},
			
			
			admin_current_pwd:{
				required: function(){
                        return $("#admin_current_pwd").val() != "";
                  },
				minlength:6,
				maxlength:20
			},
			
			admin_new_pwd:{
					required: function(){
                        return $("#admin_current_pwd").val() != "";
                  },
				minlength:6,
				maxlength:20
			},
			admin_new_pwd2:{
				required: function(){
                        return $("#admin_current_pwd").val() != "";
                  },
				minlength:6,
				maxlength:20,
				equalTo:"#admin_new_pwd"
			}
			
		},
		messages: {
			admin_new_pwd2: {
			equalTo: "Password didn't matched with new password"
			},
			
		},
		errorClass: "validate-has-error",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).closest('.form-group').addClass('validate-has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).closest('.form-group').removeClass('validate-has-error');
		}
	});
	
	//For select all checkbox
	$("#all-checkbox").on('click',function(){
		var checkedStatus = this.checked;
		var checkbox = $("#multiDel").find('tr td:first-child input:checkbox');		
		checkbox.each(function() {
			this.checked = checkedStatus;
		});
		
	});
	
	$("#deleteAllRecords").on('click',function(){
		var r = 0;
		$(".cselect").each(function() {
			if(this.checked==true)
			{
			r = 1;
			}
		});
			if(r==1)
			{
			$('#delAllModal').modal();	
			}
			else{
				alert("Please select one or more records to delete");	
			}
	});
	
	$("#delAllSubmit").on('click',function(){
		$("#multiDel").submit();	
	});
	$("#per_page").on('change',function(){
		
		window.location = controller+'?per_page='+this.value;	
	
	});
	
	//Add User Validation
	$("#admin_form").validate({
		rules:{
			full_name:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			user_name:{
				required: true,
				minlength:3,
				maxlength:20
			},
			pwd:{
				required: true,
				minlength:6,
				
			},
			pwd2:{
				required: true,
				minlength:6,
				
				equalTo:"#pwd"
			}
			
		},
		messages: {
			admin_new_pwd2: {
			equalTo: "Password didn't matched with new password"
			},
			
		},
		
		errorClass: "validate-has-error",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).closest('.form-group').addClass('validate-has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).closest('.form-group').removeClass('validate-has-error');
		}
	});
	var req = null;
	//For opening the blog category modal START
	$("#addNewCat").on('click',function(){
		$("#addBlogCatModal").modal('show');
	});
	//For opening the blog category modal END
	
	//For saving the blog category by AJAX START
	$("#bCatSubmit").on('click',function(){
		$("#blog_cat_ajax").parent().removeClass('validate-has-error');
		$("#catErrorMsg").html('');
		
		if($("#blog_cat_ajax").val()=="")
		{
			$("#blog_cat_ajax").parent().addClass('validate-has-error');
			$("#catErrorMsg").html('This field is required');
		}
		var bcText = $("#blog_cat_ajax").val().toLowerCase();
		;
		$("#blog_category option").each(function(index, element) {
            var eText = element.text;
			eText = eText.toLowerCase();
			if(eText==bcText)
			{
				$(this).attr('selected','selected');
				$("#blog_category").select2("destroy").select2();	
				$("#addBlogCatModal").modal('hide');
				$("#blog_cat_ajax").parent().removeClass('validate-has-error');
				$("#blog_cat_ajax").val('');
				$("#catErrorMsg").html('');
				return false;
			}
        });
		
		$("#ajax_loader_cat").show();
		if (req != null) req.abort();
		req = $.ajax({
			url: admin_url+'blogcategories/addRecordAJAX',
			type: "POST",
			data:{"cat_name":$("#blog_cat_ajax").val()} ,
			dataType: "JSON",
			success: function(data){
				if(data.status=="true")
				{
					$("#blog_cat_ajax").parent().removeClass('validate-has-error');
					$("#blog_cat_ajax").val('');
					$("#catErrorMsg").html('');
					var type_cont = '<option value="'+data.cat_id+'" selected="selected">'+data.cat_name+'</option>';
					$("#blog_category").select2("destroy").append(type_cont).select2();
					$("#addBlogCatModal").modal('hide');
				}
				else{
					$("#catErrorMsg").html(data.message);
					
				}
				$("#ajax_loader_cat").hide();
			}
			});
	});
	//For saving the blog category by AJAX END
	
	//Enter event for AJAX Category Name START
	$( "#blog_cat_ajax" ).keypress(function( event ) {
	if ( event.which == 13 ) {
		$("#bCatSubmit").click();
	}
	
	});	
		
	$( "#blog_tag_ajax" ).keypress(function( event ) {
	if ( event.which == 13 ) {
		$("#bTagSubmit").click();
	}
	
	});	
	//Enter event for AJAX Category END	
	
	
	
	var req_tag = null;
	//For opening the blog category modal START
	$("#addNewTag").on('click',function(){
		$("#addBlogTagModal").modal('show');
	});
	//For opening the blog category modal END
	
	//For saving the blog category by AJAX START
	$("#bTagSubmit").on('click',function(){
		$("#blog_tag_ajax").parent().removeClass('validate-has-error');
		$("#tagErrorMsg").html('');
		
		if($("#blog_tag_ajax").val()=="")
		{
			$("#blog_tag_ajax").parent().addClass('validate-has-error');
			$("#tagErrorMsg").html('This field is required');
		}
		var bcText = $("#blog_tag_ajax").val().toLowerCase();
		;
		$("#blog_tags option").each(function(index, element) {
            var eText = element.text;
			eText = eText.toLowerCase();
			if(eText==bcText)
			{
				$(this).attr('selected','selected');
				$("#blog_tags").select2("destroy").select2();	
				$("#addBlogTagModal").modal('hide');
				$("#blog_tag_ajax").parent().removeClass('validate-has-error');
				$("#blog_tag_ajax").val('');
				$("#tagErrorMsg").html('');
				return false;
			}
        });
		
		$("#ajax_loader_tag").show();
		if (req_tag != null) req_tag.abort();
		req_tag = $.ajax({
			url: admin_url+'blogtags/addRecordAJAX',
			type: "POST",
			data:{"tag_name":$("#blog_tag_ajax").val()} ,
			dataType: "JSON",
			success: function(data){
				if(data.status=="true")
				{
					$("#blog_tag_ajax").parent().removeClass('validate-has-error');
					$("#blog_tag_ajax").val('');
					$("#tagErrorMsg").html('');
					var type_cont = '<option value="'+data.tag_id+'" selected="selected">'+data.tag_name+'</option>';
					$("#blog_tags").select2("destroy").append(type_cont).select2();
					$("#addBlogTagModal").modal('hide');
				}
				else{
					$("#tagErrorMsg").html(data.message);
					
				}
				$("#ajax_loader_tag").hide();
			}
			});
	});
	//For saving the blog category by AJAX END
	
	//Enter event for AJAX Category Name START
	$( "#blog_tag_ajax" ).keypress(function( event ) {
	if ( event.which == 13 ) {
		$("#bTagSubmit").click();
	}
	
	});	
	
	//Enter event for AJAX Category END	
	
	//For removing the section image
	$(".removeImage").on('click',function(){
		var recordID = this.id;
		var controller = $(this).attr('data-controller');
		recordID = recordID.replace("img","");
		var delLink = admin_url+controller+'/removeimage/'+recordID;
		$.getJSON(delLink);
		$("#image"+recordID).remove();
	});	
	
	//For removing the portfolio image
	$(".removePImage").bind('click',function(){
		alert("Test");
		var recordID = this.id;
		alert(recordID);
		recordID = recordID.replace("pimg","");
		$("#imgContainer"+recordID).remove();
	});	
	
	//For toggle the access roles
	$("#user_role").on('change',function(){
		if(this.value=="Admin")
		{
			$("#access_roles").show();	
		}
		else{
			$("#access_roles").hide(); 
		}
		
	});
	
	$('.fancybox').fancybox({
		openEffect : 'elastic',
		openSpeed  : 200,
		closeEffect : 'elastic',
		closeSpeed  : 200,	
		
	});
});//End of document ready

$.fn.hasExtension = function(exts) {
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test($(this).val());
}
function validateURL(value) {
    return /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
}

