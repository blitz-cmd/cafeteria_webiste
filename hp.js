var bt1=document.querySelector('#m');
var bt2=document.querySelector('#n');
var bt3=document.querySelector("#b");
var bt4=document.querySelector("#mm");

var bt5=document.querySelector('#md');
var bt6=document.querySelector('#nd');
var bt7=document.querySelector("#bd");
var bt8=document.querySelector("#mmd");

var tx1=document.querySelector('#z');
var tx2=document.querySelector('#x');
var tx3=document.querySelector("#c");
var tx4=document.querySelector("#v");

var a1=document.querySelector('#g').innerText;
var a2=document.querySelector('#h').innerText;
var a3=document.querySelector("#gg").innerText;
var a4=document.querySelector("#hh").innerText;
var a5=document.querySelector('#a');
var a6=document.querySelector('#s');
var a7=document.querySelector("#d");
var a8=document.querySelector("#f");
var a9=document.querySelector("#qqq");

var i=0;
var j=0;
var k=0;
var l=0;
var m=0;



bt1.addEventListener("click",function(){
	console.log("aa");

i++;
tx1.textContent=i;
var b1=a1*i;
a5.textContent=b1;
m=m+b1;
a9.textContent=m;
})



bt2.addEventListener("click",function(){
j++;
tx2.textContent=j;
var b2=a2*j;
a6.textContent=b2;
m=m+b2;
a9.textContent=m;
})

bt3.addEventListener("click",function(){
k++;
tx3.textContent=k;
var b3=a3*k;
a7.textContent=b3;
m=m+b3;
a9.textContent=m;
})

bt4.addEventListener("click",function(){
l++;
tx4.textContent=l;
var b4=a4*l;
a8.textContent=b4;
m=m+b4;
a9.textContent=m;
})

