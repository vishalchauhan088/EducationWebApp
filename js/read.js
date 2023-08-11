
var x= document.getElementById("jee");
var y = document.getElementById("neet");
var z = document.getElementById("class-x");

// x.style.backgroundColor="red";
// y.style.backgroundColor="blue";
// z.style.background="green";

function jeemains(){
    
    
    x.style.display="block";
    y.style.display="none";
    z.style.display="none";
}

function neet(){
    
    x.style.display="none";
    y.style.display="block";
    z.style.display="none";
}

function classx(){
    
    x.style.display="none";
    y.style.display="none";
    z.style.display="block";
}

