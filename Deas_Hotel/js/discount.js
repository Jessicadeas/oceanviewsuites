function calDiscount(){

var disOne = "MB015";
var disTwo = "MB020";
var disThree = "MB025";
var zero = 0;
var roomPrice = 205;
var outPrice = ' ';
var dis;
var elMsg = document.getElementById('discount');


var regPrice,discountAmount, room;
	
	regPrice = document.getElementById('regPrice');
	discountAmount = document.getElementById('discountAmount');
room = document.getElementById('room');
	


if(this.value.toUpperCase() == disOne){
	(dis = ((-roomPrice * .15)+ 205));
	var finalPrice = (roomPrice- dis);
	
	regPrice.textContent = 'Room Price:$ ' + roomPrice + ' ';
	discountAmount.textContent = 'Discount Amount: $' + finalPrice;
room.textContent = 'Final price: $ ' + dis;
}
else if (this.value.toUpperCase() == disTwo) {
		(dis = ((-roomPrice * .20)+ 205));
	 finalPrice = (roomPrice- dis);
	
	regPrice.textContent = 'Room Price:$ ' + roomPrice + ' ';
	discountAmount.textContent = 'Discount Amount: $' + finalPrice;
room.textContent = 'Final price: $ ' + dis;
}
else if (this.value.toUpperCase() == disThree) {
		(dis = ((-roomPrice * .25)+ 205));
	 finalPrice = (roomPrice- dis);
	
	regPrice.textContent = 'Room Price:$ ' + roomPrice + ' ';
	discountAmount.textContent = 'Discount Amount: $' + finalPrice;
room.textContent = 'Final price: $ ' + dis;

}else {
	elMsg.textContent = 'Invalid coupon code. Please try again.';
dis = zero;



 
finalPrice = (roomPrice- dis);
	
	regPrice.textContent = 'Room Price:$ ' + roomPrice + ' ';
	discountAmount.textContent = 'Discount Amount: $' + dis;
room.textContent = 'Final price: $ ' + finalPrice;
}
}

var elCalculate= document.getElementById('code');
elCalculate.addEventListener('blur', calDiscount, false);
