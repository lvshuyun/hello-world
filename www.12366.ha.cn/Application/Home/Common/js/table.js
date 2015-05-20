
$("#bodytable td").dblclick(function(){
	addinput($(this));
});

function saveinput(obj){
	var string = obj.val();
	parentobj = obj.parent();
    //parentobj.removeClass('black-border');
	if(obj.parent().hasClass('tddata')){
		if($.trim(string) == '' || $.trim(string) == '--'){
			parentobj.html("<div class='divimage'></div><div class='divdata none-center'>--</div>");
		}else{
			parentobj.html("<div class='divimage'></div><div class='divdata'>"+string+"</div>");
		}	
	}else{
		parentobj.html(string);
	}
}

function addinput(obj){
	var textarealength = obj.children('textarea').length;
	var inputlength    = obj.children('input').length;
	if(textarealength > 0 || inputlength > 0){
		return false;
	}
	if(obj.hasClass('tddata')){
		var string = obj.children('.divdata').html();

	}else{
		var string = obj.html();
	}
	var color = obj.css('background-color');
	obj.html('<textarea style="resize:none; border:0px solid #666666;margin:0px;font-size:13px;font-family: 宋体;height:90%;background-color:'+color+';width:90%;" id="editinput" onblur="saveinput($(this))" >'+string+'</textarea>');
	$("#editinput").focus();
    //obj.addClass('black-border');
}