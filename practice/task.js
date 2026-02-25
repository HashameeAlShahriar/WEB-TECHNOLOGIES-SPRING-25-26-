function collectData() {
  
  const name = document.getElementById("name").value;
  const password = document.getElementById("password").value;

 

  if (!name) {
    document.getElementById("nameErr").innerHTML = "Enter Full NAme";
  } else {
    document.getElementById("nameErr").innerHTML = "";
  }

  if (!password) {
    document.getElementById("passErr").innerHTML = "Password is required";
  } else {
    document.getElementById("passErr").innerHTML = "";
  }

  return false;
}