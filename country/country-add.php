<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Country Add</title>
</head>
<body>

    
<form action="country-save.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Country: </td>
            <td><input type="text" name="country" placeholder="Country Name"><td> <br>
        </tr>
        <tr>
            <td> Status: </td>
            <td>
                <select name="country_status">
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                </select>
            </td>
        </tr>



        <tr>
            <td>States:</td>
            <td> 
                <table id="table_id">
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <td>
                        <button type="button" class="add_more">+</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="state_name[]">
                    </td>
                    <td>
                        <select name="state_status[]">
                            <option value="1">Enable</option>
                            <option value="2">Disable</option>
                        </select>
                    </td>
                    <td></td>
                </tr>

                </table>
            </td>
        </tr>




        <tr>
            <td></td>
            <td>
                <input type="submit" value="Save" name="save">
                <input type="submit" value="Save & New" name="new_save">
            </td>
        </tr>
    </table>
</form>

<script>
    $(document).ready(function(){
        $(".add_more").click(function(){
            var tableRow = '<tr>\
                    <td><input type="text" name="state_name[]"></td>\
                    <td><select name="state_status[]">\
                    <option value="1">Enable</option>\
                    <option value="2">Disable</option>\
                    </select>\
                    </td>\
                    <td><button type="button" class="remove">X</button></td>\
                </tr>';

                $("#table_id").append(tableRow);

               
        });
        $("#table_id").delegate(".remove", "click", function(){
                $(this).closest("tr").remove();
        });
       
    });
</script>








</body>
</html>