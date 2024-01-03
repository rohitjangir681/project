<?php 
require_once("config.php");

$coutQuery = "SELECT * FROM `countries`";
$cougetQuery = $conn->query($coutQuery);

$staQuery = "SELECT * FROM `states`";
$stagetQuery = $conn->query($staQuery);

// dd($cougetQuery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>City Add</title>
</head>
<body>
    
    <form action="city-save.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Country:</td>
                <td>
                    <select name="country_id" id="country_id">
                        <option value="">Select Country</option>
                        <?php while($_country = mysqli_fetch_assoc($cougetQuery)) {?>
                        <option value="<?= $_country["id"] ?>"><?= $_country["name"] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>State:</td>
                <td>
                    <select name="state_id" id="state_id">
                        <option value="">Select State</option>
                        <?php /*while($_state = mysqli_fetch_assoc($stagetQuery)) { ?>
                        <option value="<?= $_state["id"] ?>"><?= $_state["name"] ?></option>
                        <?php }*/ ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>City:</td>
                <td>
                    <input type="text" name="city" placeholder="City Name">
                </td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>
                    <select name="status">
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>

    <script>
        $(document).ready(function(){
            $("#country_id").change(function(){
                let countryId = $(this).val();
                $.ajax({
                    url: 'get-state.php',
                    method: 'GET',
                    data: {'cnt_id': countryId},
                    success: function(response) {
                        $('#state_id').html(response);
                    },
                    error: function(er) {
                        console.log(er);
                    }
                });
            });
        });
    </script>


</body>
</html>