var str="HELLO I'M BIKRAM.";
var i=0;
function intro(){
	  if(str.length>i){
                if(i==0)
                document.getElementById("div10").innerHTML = str.charAt(i);
                else
		document.getElementById("div10").innerHTML += str.charAt(i);
		i++;
		setTimeout(intro,100);
	}
}
function scroll(){
	if(document.body.scrollTop<screen.height && document.documentElement.scrollTop<screen.height){
		document.getElementById("top").style.display="none";
	}else{
		document.getElementById("top").style.display="block";
	}
}
function up(){
	document.body.scrollTop=0;
	document.documentElement.scrollTop=0;
}
function show(a){
	document.getElementById(a).style.display="block";
}
function panel(b){	
		var panel=b.nextElementSibling;
		if(panel.style.display==="block"){
			panel.style.display="none";
		}
		else{
			panel.style.display="block";
		}
}
function show(a){
	document.getElementById(a).style.display="block";
}
function menu(a){
	var b=document.getElementById(a);
	if(b.style.display==="block"){
			b.style.display="none";
		}
		else{
			b.style.display="block";
		}
}