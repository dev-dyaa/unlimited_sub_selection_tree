function getSub(object)
{
	var value = object.value;
    if (value != '0') {
	    $.ajax({url: base_url + '/public/category/getsub/' +value,
	    	dataType: 'json',
	        success: function(data) {
	        	deleteSub(object);
	            if(data.status == 200 && data.sub_categories.length > 0) {
	            	var select_tag = prepareSelect(data.sub_categories);
	                var div = $("<div />").addClass('form-group');
	                div.append(select_tag);
	                $('.container').append(div);
	            }
	        }
	    });
	} 
}
function prepareSelect(data) 
{
	var select = $("<select />").attr({onchange: 'getSub(this)', class: "form-control"});
	var option = $("<option />").attr({value: 0}).text('Please Select Category');
	select.append(option);
	$.each(data,function(i,obj) {
		var option = $("<option />").attr({value: obj.id}).text(obj.name);
		select.append(option);
	});
	return select;
}
function deleteSub(object)
{
	var index = $('select').index(object);
	var length = $('select').length;
	for (var i = length-1; i > index ; i--) {
		$('select').eq(i).remove();
	}
}