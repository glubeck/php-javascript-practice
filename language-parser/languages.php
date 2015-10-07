<!DOCTYPE html>
<html>
<body>

<div id="id01"></div>
<script>
//-----I used this for testing purposes-----
// var languageObject = {
//   "ar": {
//     "language": "Arabic",
//     "code": "ar",
//     "top": "82.36",
//     "aq": "36.363",
//     "egdp": "912.81",
//     "wow": "0.02046"
//   },
//   "ca": {
//     "language": "Catalan",
//     "code": "ca",
//     "top": "3.07",
//     "aq": "1.353",
//     "egdp": "100.83",
//     "wow": "0.00226"
//   },
//   "cs": {
//     "language": "Czech",
//     "code": "cs",
//     "top": "7.22",
//     "aq": "3.188",
//     "egdp": "156.19",
//     "wow": "0.0035"
//   }
// };
//----------------------------------------
var xmlhttp = new XMLHttpRequest();
var url = "http://gmc.lingotek.com/language";

//gets JSON Object from server, and passes it to function
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    var languageObject = JSON.parse(xmlhttp.responseText);
    parseJson(languageObject);
    }
}

xmlhttp.open("GET", url, true);
xmlhttp.send();

//iterates through JSON and outputs the languages into the div in HTML
function parseJson(obj) {
    var out = "";
  
    for(var x in obj) {
    	if(obj.hasOwnProperty(x))
    		out += '<a>' + obj[x].language + '</a><br>';
    }
    
    document.getElementById("id01").innerHTML = out;
}
</script>

</body>
</html>
