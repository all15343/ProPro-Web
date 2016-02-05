function showfileupload(){
	$('#fileuploaddialog')[0].open()
}

function addproduct(){
	var sendjsondata = {
		data: JSON.stringify({
			product: JSON.stringify({
				name: encodeURIComponent ($('#productnameinput')[0].value),
				artnr: encodeURIComponent ($('#productartnrinput')[0].value),
				price: encodeURIComponent ($('#productpriceinput')[0].value),
				description: encodeURIComponent ($('#productdescrinput')[0].value),
				picture: encodeURIComponent ('http://propro.gq/images/default.png')
			}),
			user: JSON.stringify({
				type: "p",
				nr: 1,
				token: encodeURIComponent("j4h3uer8h43uf8fwriwh8r93hrf9092h2")
			})
		})	
	};
	$.ajax({
		type: 'POST',
		url: '/api/rest/createproduct',
        dataType: 'json',
		success: function(results){
			var $maintoast = $("#maintoast");
			if(results["error"] == "true") {
				$maintoast[0].setAttribute("text",decodeURIComponent(results["errmsg"]))
				$maintoast.animate({'right': 0}, 300);
					setTimeout(function(){
					$maintoast.animate({'right': -400}, 300);       
				}, 5000);
			}
			else {
				$maintoast[0].setAttribute("text",decodeURIComponent(results["res"]))
				$maintoast.animate({'right': 0}, 300);
					setTimeout(function(){
					$maintoast.animate({'right': -400}, 300);       
				}, 5000);
			}
		},
		data: sendjsondata,
	});
}