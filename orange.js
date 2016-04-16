$(document).ready(function(){
	$("#country").change(function(){
		var countryval = parseInt( $("#country").val() );
		selectRegion(countryval);
	});
});

function selectRegion(countryval){
	var region = $("#region");
	
	$("#divregion") .hide();
	clear(region);
	
	if(countryval > 0){
		$("#divregion").fadeIn("slow");
		region.attr("disabled", false);
		region.load(
		    "index.php",
			{countryval: countryval}
		);
	}
}

function clear(val){
	val.empty();
	val.attr("disabled", true);
}