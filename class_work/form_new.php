<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form New</title>
</head>
<body>
    
<form action="form_new_save.php" enctype="multipart/form-data" method="post">
    <table>
    <tr>
        <td>First Name: </td>
        <td><input type="text" name="first_name"></td>
    </tr>
    <tr>
        <td>Last Name:</td> 
        <td><input type="text" name="second_name"></td>
    </tr>
    <tr>
        <td>Email address:</td>
        <td><input type="email" name="email"></td>
    </tr>

    <tr>
        <td>State:</td> 
        <td><input type="text" name="state"></td>
    </tr>
    <tr>
        <td>Zip code:</td>
        <td><input type="text" name="zip_code"></td>
    </tr>

    <tr>
        <td>CheckBox:</td>
        <td></td>
    </tr>
    <tr>
        <td>Web Search:</td>
        <td><input type="checkbox" name="find[]" value="Web Search"></td>
    </tr>
    <tr>
        <td>Facebook:</td> 
        <td><input type="checkbox" name="find[]" value="Facebook"></td>
    </tr>
    
    <tr>
        <td>Twitter:</td> 
        <td><input type="checkbox" name="find[]" value="Twitter"></td>
    </tr>
    
    <tr>
        <td>Email message:</td> 
        <td><input type="checkbox" name="find[]" value="Email message"></td>    
    </tr>

    <tr>
        <td></td>
        <td>
            <input type="submit" value="Submit">
            <button type="reset">Reset</button>
        </td>
    </tr>
    </table>
</form>

</body>
</html>