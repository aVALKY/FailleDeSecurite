function login() {
    var pseudo = document.forms["login"]["pseudo"].value;
    var password = document.forms["login"]["password"].value;
    if (pseudo == "admin1@root.com" && password == "passadmin") {
        window.location.href = "PageSecret3.html";
    } else {
        alert("Mauvais nom d'utilisateur ou mot de passe");
    }
}