function text(){
    const input =document.getElementById("userinput").value;
    const totalC=input.length;

    const clean=input.trim();
    var totalW=0;
    if(clean !==""){
        totalW=clean.split("").length;
    }
    const reversed =input.split("").reverse().join("");

    document.getElementById("charC").innerHTML=totalC;
    document.getElementById("wordC").innerHTML=totalW;
    document.getElementById("reverse").innerHTML=reversed;
}