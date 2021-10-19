console.log('Hello World!');

var message="Welcome to Bangladesh BHC";
var neonbasecolor="green";
var neontextcolor="red";
var flashspeed=100;
var n=0;
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
//Coding by Md Golam Rasul
else
document.write(message)
function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}
function neon(){
if (n==0){
for (m=0;m<message.length;m++)
crossref(m).style.color=neonbasecolor
}
crossref(n).style.color=neontextcolor
if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}
function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()