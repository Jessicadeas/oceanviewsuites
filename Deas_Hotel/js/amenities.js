var amenitiesList = document.getElementsByTagName('ul')[1];
var myAmenities = ['WIFI', 'Complimentary Breakfast', 'Free Parking', 'Multiple Pools',
 'SPA', 'Fitness Center', 'Bar', 'Free Daily Newspaper', 'Recharge station',
 '24-Hour Business Center', 'Spacious Rooms', 'Room Service', 'Daily Housekeeping',
 'HD TVs with cable', 'Mini Fridge' ];
 var numlist = 0;

 var numItems = Math.floor((Math.random() * 9)+6);
 
 var count= document.querySelectorAll('li');
 
 var i;
 
  for (i = 0; i < numItems; i++) {
	if (numlist == 0) {
		var newItemLast = document.createElement('li');
		var newTextLast = document.createTextNode(myAmenities[i]);
		newItemLast.appendChild(newTextLast);
		amenitiesList.appendChild(newItemLast);
		numlist = 1;
	} else {
		var newItemFirst = document.createElement ('li');
		var newTextFirst = document.createTextNode(myAmenities[i]);
		newItemFirst.appendChild(newTextFirst);
		amenitiesList.insertBefore(newItemFirst, amenitiesList.firstChild);
		numlist = 0;
	} 
}


var heading = document.querySelector('h2');
var headingText = heading.firstChild.nodeValue;
var totalItems = numItems;
var newHeading = headingText + '<span>' + ' ' + '(' + totalItems + ')' + ' <span>';
heading.innerHTML = newHeading;
 
 
