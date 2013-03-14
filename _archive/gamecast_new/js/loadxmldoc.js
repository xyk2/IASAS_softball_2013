function loadXMLDoc(dname)
{  
  xhttp=new XMLHttpRequest();
xhttp.open("GET",dname,false);
xhttp.send();
return xhttp.responseXML;
}
