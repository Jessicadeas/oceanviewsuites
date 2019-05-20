function checkUserInput(){
	var i = 1;
	
	var output = '<table border>';
var elMsg = document.getElementById('stay');
if (this.value > 0 && this.value < 11){
	elMsg.textContent = ' Estimated Price: $ ' + (205 * this.value);
}else{
	elMsg.textContent = ' Must enter a value between 1-10.';
}


while (i <= this.value) {
output += '<tr><th>' + i + ' * ' + 205 + '</th><td>'
		    + parseFloat((i * 205)).toFixed(2) + '</td></tr>';
			i++;
			
}
output += '</table>'
el.innerHTML = output;

}
	
var elDaysStay = document.getElementById('input');
elDaysStay.addEventListener('blur', checkUserInput, false);

var el = document.getElementById('estimate');
