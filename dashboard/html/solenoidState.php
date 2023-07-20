<?php
session_start();
require "../../connection.php";
$did = $_GET["did"];

$dData = Database::s("SELECT * FROM `device` WHERE id = '" . $did . "';");
$solData = $dData->fetch_assoc();

if ($solData["sol_1"] == 1) {
?>
    <div class="col-12 col-md-6 col-lg-3 offset-lg-2">
        <div class="card alert-success hov" onclick="changestate(<?php echo $did ?>,0,1)">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="row">
                        <h4>Good water </h4>
                    </div>

                </div>
                <span class="fw-semibold d-block mb-1 text-success">Status</span>
                <h3 class="card-title mb-2">ON</h3>

            </div>
        </div>
    </div>

<?php
} else {
?>
    <div class="col-12 col-md-6 col-lg-3 offset-lg-2">
        <div class="card alert-danger hov" onclick="changestate(<?php echo $did ?>,1,1)">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="row">
                        <h4>Good water </h4>
                    </div>

                </div>
                <span class="fw-semibold d-block mb-1 text-danger">Status</span>
                <h3 class="card-title mb-2">OFF</h3>

            </div>
        </div>
    </div>
<?php
}

if ($solData["sol_2"] == 1) {
?>
    <div class="col-12 col-md-6 col-lg-3 offset-lg-2">
        <div class="card alert-success hov" onclick="changestate(<?php echo $did ?>,0,2)">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="row">
                        <h4>Contaminated water</h4>
                    </div>

                </div>
                <span class="fw-semibold d-block mb-1 text-success">Status</span>
                <h3 class="card-title mb-2">ON</h3>

            </div>
        </div>
    </div>
<?php

} else {

?>
    <div class="col-12 col-md-6 col-lg-3 offset-lg-2">
        <div class="card alert-danger hov" onclick="changestate(<?php echo $did ?>,1,2)">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="row">
                        <h4>Contaminated water</h4>
                    </div>

                </div>
                <span class="fw-semibold d-block mb-1 text-danger">Status</span>
                <h3 class="card-title mb-2">OFF</h3>

            </div>
        </div>
    </div>
<?php
}
?>