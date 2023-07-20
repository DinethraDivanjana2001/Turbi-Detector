<?php

require "../../connection.php";

session_start();

$did = $_GET["did"];

$error = Database::s("SELECT * FROM `error_records` INNER JOIN `error_type` ON `error_records`.`error_type_et_id` = `error_type`.`et_id` WHERE `device_id` = '" . $did . "' ORDER BY `etime` DESC, `edat` DESC;");
if ($error->num_rows >= 1) {
    for ($x = 0; $x < $error->num_rows; $x++) {
        $errorData = $error->fetch_assoc();
        if ($errorData["error_type_et_id"] == 1) {
?>
            <div class="mb-3 col-12 mb-0">
                <div class="alert alert-success">
                    <h4 class="alert-heading mb-1">Alert!</h4>
                    <h6 class="alert-heading fw-bold mb-1">Contaminated water deteced</h6>
                    <p class="mb-0">Contaminated water deteced and it was blocked.</p>
                    <p class="mb-0 text-light">Date : <?php echo $errorData["edat"] ?></p>
                    <p class="mb-0 text-light">Time : <?php echo $errorData["etime"] ?></p>
                </div>
            </div>
        <?php
        } else if ($errorData["error_type_et_id"] == 2) {
        ?>
            <div class="mb-3 col-12 mb-0">
                <div class="alert alert-warning">
                    <h4 class="alert-heading mb-1">Warning!</h4>
                    <h6 class="alert-heading fw-bold mb-1">Occasional Cintaminated water detected</h6>
                    <p class="mb-0">Blocked the water supply. cleared the contaminated water.</p>
                    <p class="mb-0 text-light">Date : <?php echo $errorData["edat"] ?></p>
                    <p class="mb-0 text-light">Time : <?php echo $errorData["etime"] ?></p>
                </div>
            </div>
        <?php
        } else if ($errorData["error_type_et_id"] == 3) {
        ?>
            <div class="mb-3 col-12 mb-0">
                <div class="alert alert-danger">
                    <h4 class="alert-heading mb-1">Danger!</h4>
                    <h6 class="alert-heading fw-bold mb-1">Critcal Water contamination</h6>
                    <p class="mb-0">Water supply terminated.</p>
                    <p class="mb-0 text-light">Date : <?php echo $errorData["edat"] ?></p>
                    <p class="mb-0 text-light">Time : <?php echo $errorData["etime"] ?></p>
                </div>
            </div>
    <?php
        }
    }
} else {
    ?>
    <div class="mb-3 col-12 mb-0">
        <div class="alert alert-light">
            <h6 class="alert-heading fw-bold mb-1 text-center">NO ERRORS</h6>
        </div>
    </div>
<?php
}

?>