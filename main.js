 function getXmlHttp() {
    var xmlhttp;
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
  }

function getInf(){
	var xmlhttp = getXmlHttp();
    xmlhttp.open('POST', 'test.php', true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlhttp.send("id=1");
    xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4){
			if(xmlhttp.status == 200){
				var str = xmlhttp.responseText;
				var hText = str.substr(0, (str.indexOf(".php")) + 4);
				var sText = str.replace(hText, "");
				document.getElementById("htext").innerHTML = hText;
				document.getElementById("content").innerHTML = sText;
			}
		}
    };
}
