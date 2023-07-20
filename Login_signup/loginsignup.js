function signup() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var pw = document.getElementById("password").value;
    var repw = document.getElementById("repassword").value;

    var form = new FormData;

    form.append("fname", fname);
    form.append("lname", lname);
    form.append("em", email);
    form.append("pw", pw);
    form.append("repw", repw);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "Done") {
                alert("Registered Successfully");
                window.location = "login.php";
            } else {
                alert(text);
            }
        }
    }

    r.open("POST", "signup_process.php", true);
    r.send(form);


}

function login() {

    var em = document.getElementById("em").value;
    var pw = document.getElementById("pw").value;

    var form = new FormData;

    form.append("em", em);
    form.append("pw", pw);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "Success") {
                alert("Login success");
                window.location = "../dashboard/html/dashboard.php";
            } else {
                alert(text);
            }

        }
    }

    r.open("POST", "login_process.php", true);
    r.send(form);


}