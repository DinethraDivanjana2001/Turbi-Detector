function loadSolState(dev) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            document.getElementById("solenoiddata").innerHTML = text;
        }
    }

    r.open("GET", "solenoidState.php?did=" + dev, true);
    r.send();

}

function changestate(did, tochange, sol) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            loadSolState(did);
        }
    }
    r.open("GET", "changeSolnoidState.php?did=" + did + "&var=" + tochange + "&sol=" + sol, true);
    r.send();
}

function loadMessageAuto(did) {
    setInterval(errorLoad, 1000, did);
    setInterval(loadSolState, 1000, did);
}

function errorLoad(did) {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            document.getElementById("errorload").innerHTML = text;
        }
    }
    r.open("GET", "errorLoad.php?did=" + did, true);
    r.send();
}

function logout() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            window.location = "dashboard.php";
        }
    }
    r.open("GET", "logout.php", true);
    r.send();
}