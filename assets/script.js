// var en functie voor next person
var title=document.querySelector(".title");
var naam=document.querySelector(".name");
var age=document.querySelector(".age");
var gender=document.querySelector(".gender");
var counter=0;
function output(array){
    title.innerHTML=array[counter];
    naam.innerHTML=(array[counter]+" "+array[counter+1]);
    gender.innerHTML=array[counter+2];
    age.innerHTML=(array[counter+3]+" years old");
}

// var en functie voor percentages
var gryffondor=document.querySelector("#gryffondor");
var hufflepuff=document.querySelector("#hufflepuff");
var slytherin=document.querySelector("#slytherin");
var ravenclaw=document.querySelector("#ravenclaw");

function next(array){
    counter+=8;
    
    gryffondor.innerHTML="gryffondor";
    hufflepuff.innerHTML="hufflepuff";
    slytherin.innerHTML="slytherin";
    ravenclaw.innerHTML="ravenclaw";
    output(array);
}
function clickgryffondor(array){
    var sum=0;
    for (var i = counter+4; i < counter+8; i++) {
        sum += +array[i];
    }
    sum++;
    gryffondor.innerHTML=Math.round((Number(array[counter+4])+1)/sum*100) +"% gryffondor";
    hufflepuff.innerHTML=Math.round(array[counter+5]/sum*100)+"% hufflepuff";
    slytherin.innerHTML=Math.round(array[counter+6]/sum*100)+"% slytherin";
    ravenclaw.innerHTML=Math.round(array[counter+7]/sum*100)+"% ravenclaw";
}
function clickhufflepuff(array){
    var sum=0;
    for (var i = counter+4; i < counter+8; i++) {
        sum += +array[i];
    }
    sum++;
    gryffondor.innerHTML=Math.round(array[counter+4]/sum*100) +"% gryffondor";
    hufflepuff.innerHTML=Math.round((Number(array[counter+5])+1)/sum*100)+"% hufflepuff";
    slytherin.innerHTML=Math.round(array[counter+6]/sum*100)+"% slytherin";
    ravenclaw.innerHTML=Math.round(array[counter+7]/sum*100)+"% ravenclaw";
}
function clickslytherin(array){
    var sum=0;
    for (var i = counter+4; i < counter+8; i++) {
        sum += +array[i];
    }
    sum++;
    gryffondor.innerHTML=Math.round(array[counter+4]/sum*100) +"% gryffondor";
    hufflepuff.innerHTML=Math.round(array[counter+5]/sum*100)+"% hufflepuff";
    slytherin.innerHTML=Math.round((Number(array[counter+6])+1)/sum*100)+"% slytherin";
    ravenclaw.innerHTML=Math.round(array[counter+7]/sum*100)+"% ravenclaw";
}
function clickravenclaw(array){
    var sum=0;
    for (var i = counter+4; i < counter+8; i++) {
        sum += +array[i];
    }
    sum++;
    gryffondor.innerHTML=Math.round(array[counter+4]/sum*100) +"% gryffondor";
    hufflepuff.innerHTML=Math.round(array[counter+5]/sum*100)+"% hufflepuff";
    slytherin.innerHTML=Math.round(array[counter+6]/sum*100)+"% slytherin";
    ravenclaw.innerHTML=Math.round((Number(array[counter+7])+1)/sum*100)+"% ravenclaw";
}