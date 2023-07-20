<?php
require "../../connection.php";
session_start();

$devices = Database::s("SELECT * FROM `device` INNER JOIN `user_has_device` ON device.id = user_has_device.device_id INNER JOIN `device_status` ON device_status.s_id = device.device_status_s_id WHERE user_has_device.`user_id` = '" . $_SESSION["u"]["id"] . "';");
for ($x = 0; $x < $devices->num_rows; $x++) {
    $deviceD = $devices->fetch_assoc();
?>
    <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card" onclick="loadDevicepage(<?php echo $deviceD['id'] ?>);">
            <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <span class="fw-bold fs-3 d-block mb-1 card-title"><?php echo $deviceD["dname"] ?></span>
                </div>
                <p class="d-inline-block">Status : </p><span class="fw-bold"> <?php echo $deviceD["s_name"] ?></span>
            </div>
        </div>
    </div>

<?php
}
?>