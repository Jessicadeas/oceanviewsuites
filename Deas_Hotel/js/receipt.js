var costs = {
		name:'Ocean View Suites',
		randomRate:Math.floor((Math.random() * 100) + 	200),
		discount: 10,
		finalPrice: function() {
			var nightRate = this.randomRate *
			((100- this.discount)/100);
			return nightRate;
			
		}

	};
	var hName, nightRate, dis, discountRate;
	
	hName = document.getElementById('hName');
	nightRate = document.getElementById('nightRate');
dis = document.getElementById('dis');
	discountRate = document.getElementById('discountRate');
	
	hName.textContent = 'Hotel Name: ' + costs.name + ' ';
	nightRate.textContent = 'Nightly rate: $' + costs.randomRate;
dis.textContent = 'Discount: 10%';
	discountRate.textContent = 'Rate after discount: $' + costs.finalPrice().toFixed(2);

