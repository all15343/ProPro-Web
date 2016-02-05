<?php 
	include "../layout/header.php";
?> 
<h2>Produktanzige</h2>
<div id="productwrapper">
</div>
<?php 
	include "../layout/footer.php"	
?> 
<script>
	var pnr;
	var gets = window.location.search.split("&");
	gets[0] = gets[0].substring(1,gets[0].length);
	for (var i = 0; i < gets.length; i++) {
		if(gets[i].split("=")[0]=="p"){
			pnr = gets[i].split("=")[1];
		}
	};


    var data = {};
	var $pwrapper = $("#productwrapper");
	$.each(JSON.parse($.cookie("producttoshow")), function(k, v) {
		data[k] = decodeURIComponent(v);
	});
	if(data['pnr'] !== pnr)
		alert("Error");
	$.each(data, function(k, v) {
    	$pwrapper.append(k + " : " + decodeURIComponent(v) + "<br>");
	});
</script>