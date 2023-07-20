function addDevice(uid) {
    var did = document.getElementById("deviceid");
    var dname = document.getElementById("dname");

    var form = new FormData;

    form.append("uid", uid);
    form.append("did", did.value);
    form.append("dname", dname.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == 'Done') {
                did.value = "";
                dname.value = "";
                loadDevices();
                alert("Added Successfully");

            } else {
                alert(text);
            }

        }
    }

    r.open("POST", "addDeviceProcess.php", true);
    r.send(form);

}

function loadDevices() {
    var bo = document.getElementById("device");
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            bo.innerHTML = text;

        }
    }

    r.open("GET", "loadDevices.php", true);
    r.send();
}

function loadDevicepage(did) {
    window.location = "device.php?did=" + did;
}