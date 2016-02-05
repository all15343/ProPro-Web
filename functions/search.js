$(function(){
	var searchtext;
	var gets = window.location.search.split("&");
	gets[0] = gets[0].substring(1,gets[0].length);
	for (var i = 0; i < gets.length; i++) {
		if(gets[i].split("=")[0]=="search"){
			searchtext = decodeURIComponent(gets[i].split("=")[1]);
			document.getElementById("searchtext").innerText+=(" "+searchtext);
		}
	};

	var sendjsondata = {
		data: JSON.stringify({
			searchtext: encodeURIComponent(searchtext),
			rescount: 10,
			site: 1,
			user: JSON.stringify({
				type: "p",
				nr: 1,
				token: encodeURIComponent("j4h3uer8h43uf8fwriwh8r93hrf9092h2")
			})
		})	
	};

	$.ajax({
		type: 'POST',
		url: '/api/rest/search',
        dataType: "json",
		success: function(results){
			console.log(results);
			if(results["error"] == "false") {
				var data = results["res"];
				var $cont = $("#results");
				$.each(data,function(idx,res){
					$cont.append("<search-res-row data="+JSON.stringify(res)+"></search-res-row><hr>");
				});
			}
			else
				alert(results[errmsg]);
		},
		data: sendjsondata,
	});
});