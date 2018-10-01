$(document).ready(function(){
    $("#nav").click(function(){
        $("#show-on-jobs-in-pakistan").toggle("slow");
    });
    $("#nav2").click(function(){
        $("#show-on-jobs-in-pakistan2").toggle("slow");
    });
});
$('#nav_buttonid').on('click', function () {
    $('#toggle_ul').toggle('slide');
    
});
function validate() {
    var f= document.search_form;
	if(f.type.value===""){
		alert("Please select Ad type");
		f.type.focus();
		return false;
	}else if(f.title.value===""){
		alert("Please enter search query.");
		f.title.focus();
		return false;
	}
	return true;
    
}
