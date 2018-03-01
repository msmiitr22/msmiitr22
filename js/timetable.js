let a=document.getElementById("s3");
let b=document.getElementById("s4")
let c=document.getElementById("s3-tday")
let d=document.getElementById("s4-tday")
a.onclick=s3f;
b.onclick=s4f;
function s3f(){
	c.style.display="block";
	d.style.display="none";
	a.style.backgroundColor="rgba(66,244,78,0.5)";
	b.style.backgroundColor="#416f85";
}

function s4f(){
	d.style.display="block";
	c.style.display="none";
	b.style.backgroundColor="rgba(66,244,78,0.5)";
	a.style.backgroundColor="#416f85";
}