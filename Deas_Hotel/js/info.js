var msg = '<p><b>page title: Information </b>' + document.title + '<br />';
// Find the URL of the document and add it to the msg variable
msg += '<b>page location: </b>' + document.URL + '<br />';
// Find the date the document was last modified and add it to the msg variable
msg += '<b>last date modified: </b>' + document.lastModified + '</p>';

// Create a variable called el to hold the element whose id attribute has a value of footer
var el = document.getElementById('footer');
// Write the message into that element
el.innerHTML = msg;