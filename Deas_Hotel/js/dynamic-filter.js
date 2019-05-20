(function() {
	//STORE EACH feature AS AN OBJECT IN AN ARRAY
	var features = [
	{
		name: 'Booking',
		starLevel:3,
		cost: 150
	},
	{
		name: 'On-Site',
		starLevel:1,
		cost: 120
	},
	{
		name: 'Connect',
		starLevel:3,
		cost: 50
	},
	{
		name: 'Location',
		starLevel:3,
		cost: 300
	},
	{
		name: 'Guest Services',
		starLevel:2,
		cost: 220
	}
];
	
	var rows = [],
	$min = $('#minval'),
	$max = $('#maxval'),
	$table = $('#thefeatures');
	
	function makeRows() {
		features.forEach(function(feature) {
			var $row= $('<tr></tr>');
			$row.append($('<td></td>').text(feature.name) );
			$row.append($('<td></td>').text(feature.starLevel) );
			$row.append($('<td></td>').text(feature.cost) );
			rows.push({
				feature: feature,
				$element: $row
			});
		});
}
		
	function appendRows() {
		var $tbody = $('<tbody></tbody>');
		rows.forEach(function(row) {
			$tbody.append(row.$element);
		});
		$table.append($tbody);
	}
	
	function update(min, max) {
		rows.forEach(function(row) {
			if (row.feature.cost >= min && row.feature.cost<=max) {
				row.$element.show();
			} else {
				row.$element.hide();
			}
		});
	}
	
	function init() {
		$('#slider').noUiSlider({
			range: [50, 300], start: [100, 200], handles: 2, margin: 20, connect: true,
			serialization: {to: [$min, $max],resolution:1}
		}).change(function() { update($min.val(), $max.val()); });
		makeRows();
		appendRows();
		update($min.val(), $max.val());
	}
	
	$(init);
}());