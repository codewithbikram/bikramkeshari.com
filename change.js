function check(){
	var n=document.getElementById("npass").value;
	var c=document.getElementById("cpass").value;
	    if(n!==c){
		window.alert("password mismatc");
	    return false;
		}
}