function initFlot () {
	var data1 = [];
	var data2 = [];

	$.get("report.csv", function (data) {
		var lines = data.split('\n');

		for (var i = 0; i < lines.length; i += 1) {
			var line = lines[i].split(',');
			var date = line[0].split(' - ');
			var myDate = date[0];
			myDate=myDate.split("-");
			var newDate=myDate[0]+"/"+myDate[1]+"/"+myDate[2];

			data1.push([new Date(newDate).getTime(), parseInt(line[1])]);
			data2.push([new Date(newDate).getTime(), parseInt(line[2])]);
		}
		var data = [
		{label: "SOAP",  data: data1, color: '#FFAD40'},
		{label: "REST",  data: data2, color: '#37A'}];

		$.plot(("#flot"), data,  {
			xaxis: {
				mode: 'time' 
			}, 

			yaxis: {
				min: 0,
				max: 100,
				tickSize: 10
			},
			legend: {
				labelBoxBorderColor: "none",
				position: "right"
			},
			grid: {
				hoverable: true
			}
		});
		//maakt de tooltip
		function showTooltip(x, y, contents, color) {
			$('<div id="flot-tooltip">' + contents + '</div>').css({
				top: y - 75,
				left: x - 30,
				'border-color': color,
			}).appendTo("body").fadeIn(0);
		}
		//event als er over plot word gehovert
		$("#flot").bind("plothover", function (event, pos, item) {
			if (item) {				
				$("#flot-tooltip").remove();
					
				var date = new Date(item.datapoint[0]); // bij tijd zorgen dat dit datum word/ periode, of verwijderen
				date = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
				var value = item.datapoint[1];
				var color = item.series.color;

				showTooltip(item.pageX, item.pageY,	 date + "<br />" + "<b>" + item.series.label + "</b> = " + value + '%', color);
				
			} else {
				$("#flot-tooltip").remove();
				previousPoint = null;
			}	
		});
	});
}

$(function() {
	
	initFlot();
});