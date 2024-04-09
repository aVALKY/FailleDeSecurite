function login() {
  console.log("Click");
  var pseudoValue = document.getElementById("pseudo_input").value;
  var passwordValue = document.getElementById("password_input").value;
  if (pseudoValue == "admin1@root.com" && passwordValue == "passadmin") {
    window.location.href = "PageSecret3.html";
  } else {
    alert("Mauvais nom d'utilisateur ou mot de passe");
  }
}
