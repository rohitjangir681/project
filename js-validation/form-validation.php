<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <style>
        label.error {
            color: red;
            padding-left: 7px;
        }
    </style>
</head>

<body>

    <h2>Form Validation with validate jquery</h2>



    <form action="save.php" method="POST" id="form_validataion">
        <table>
            <tr>
                <td>
                    <label>Name</label><br>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                <label>Emali</label><br>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                <label>Phone</label><br>
                    <input type="tel" name="phone">
                </td>
            </tr>
            <tr>
                <td>
                <label>Number</label><br>
                    <input type="number" name="number">
                </td>
            </tr>
            <tr>
                <td>
                <label>URL</label><br>
                    <input type="text" name="url">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Max Min</label><br>
                    <input type="text" name="max_min">
                </td>
            </tr>
            <tr>
                <td>
                <label>Gender</label><br>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>



    <script>
        $(document).ready(function() {
            $("#form_validataion").validate({
                rules: {
                    'name': 'required',
                    'email': {
                        email: true,
                        required: true
                    },
                    'phone': {
                        required: true,
                        minlength: 10,
                        maxlength: 12
                    },
                    'number': {
                        required: true
                    },
                    'url': {
                        url: true,
                        required: true
                    },
                    'max_min': {
                        required: true                    }
                },
                messages: {
                    'name': 'Name is required field!',
                    'email': {
                        email: 'Enter valid a email!',
                        required: 'Email is required field!'
                    },
                    'phone': {
                        required: 'Phone is required field!',
                        minlength: 'Minum length 10',
                        maxlength: 'Maxmum length 12'
                    },
                    'number': 'Number is required field!',
                    'url': {
                        required: 'URL field is required!',
                        url: 'Enter a valid url!'
                    }

                }
            });
        });
    </script>



<!-- 

https://www.youtube.com/watch?v=le31cIjv_Sw

https://ckeditor.com/docs/ckeditor5/latest/features/file-management/ckfinder.html

https://www.youtube.com/results?search_query=ckeditor+image+upload

https://ckeditor.com/ckeditor-5/download/?null-addons=

https://ckeditor.com/docs/ckeditor4/latest/examples/fileupload.html

 -->

</body>

</html>