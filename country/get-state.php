<?php 
require_once("config.php");

// print_r($_POST["cnt_id"]);

$countryId = $_GET['cnt_id'];
// $countryId = $_GET['cnt_id']?$_GET['cnt_id']:0;

$stateQuery = "SELECT * FROM `states` WHERE country_id=$countryId";
$stateData = $conn->query($stateQuery);

echo '<option value="">Select State</option>';
?>
<?php while($_state = mysqli_fetch_assoc($stateData)) { ?>
    <option value="<?= $_state["id"] ?>"><?= $_state["name"] ?></option>
<?php } ?>