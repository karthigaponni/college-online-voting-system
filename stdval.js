function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "student" && password == "pass") {
      window.location.href="Voting page.html";
       
    } else {
        alert("Login failed");
    }
}