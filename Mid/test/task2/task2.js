function collectData() {
  
  const name = document.getElementById("name").value;
  const password = document.getElementById("pass").value;


  if (!name) {
    document.getElementById("nameErr").innerHTML = "Enter email";
  }if (!name.includes('@')) {
    document.getElementsById("nameErr").innerHtml="must contain @";
    
  } else {
    document.getElementById("nameErr").innerHTML = "email error";
  }
  

  if (!password) {
    document.getElementById("passErr").innerHTML = "Password is required";
  } if (!password.length<6) {
    document.getElementById("passErr").innerHTML = "must be at least 6 char";

    
  } if(!password.include('#')){
    document.getElementById("passErr").innerHTML = "must be contain #";
  }
  else {
    document.getElementById("passErr").innerHTML = "password error";
  }

  return false;
}
function getEmail(){
  const email= document.getElementById("name").value;
}
function getPass(){
  const pass= document.getElementById("pass").value;
}