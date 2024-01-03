<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>

    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <table>
            <tr>

                <td> 
                    <label>First Name:</label>
                </td>
                <td>
                    <input type="text" name="first_name">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Last Name:</label>
                </td>
                <td>
                    <input type="text" name="last_name">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Date of Birth:</label>
                </td>
                <td>
                    <input type="date" name="dob">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email Id:</label>
                </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mobile Number:</label>
                </td>
                <td>
                    <input type="tel" name="mobile_number">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Gender:</label>
                </td>
                <td>
                    Male <input type="radio" name="gender" value="m">
                    FeMale<input type="radio" name="gender" value="f">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Address:</label>
                </td>
                <td>
                    <textarea name="address" cols="30" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label>City:</label>
                </td>
                <td>
                    <input type="text" name="city">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Pin Code:</label>
                </td>
                <td>
                    <input type="number" name="pin_code">
                </td>
            </tr>
            <tr>
                <td>
                    <label>State:</label>
                </td>
                <td>
                    <input type="text" name="state">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Country:</label>
                </td>
                <td>
                    <input type="text" name="country">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Hobbies:</label>
                </td>
                <td>
                Drawing<input type="checkbox" name="hobbies[]" value="Drawing"> 
                Singing<input type="checkbox" name="hobbies[]" value="Singing"> 
                Dancing<input type="checkbox" name="hobbies[]" value="Dancing"> 
                Sketching<input type="checkbox" name="hobbies[]" value="Sketching"><br>
                {{-- <br>
                Others <input type="checkbox" name="others" value="Others">
                <input type="text" name="others"> --}}

                </td>
            </tr>
            {{-- <tr>
                <td>
                    <label>Qualifications:</label>
                </td>
                <td>
                    <label><b>Class X:</b></label>
                    Board
                    <input type="text" name="board">
                    Percentage
                    <input type="text" name="percentage">
                    Year of Passing
                    <input type="text" name="year_of_passing">
                    <br><br> 
                    <label><b>Class XII:</b></label>
                    Board
                    <input type="text" name="board">
                    Percentage
                    <input type="text" name="percentage">
                    Year of Passing
                    <input type="text" name="year_of_passing">
                    <br><br> 
                    <label><b>Graduation:</b></label>
                    Board
                    <input type="text" name="board">
                    Percentage
                    <input type="text" name="percentage">
                    Year of Passing
                    <input type="text" name="year_of_passing">
                    <br><br> 
                    <label><b>Masters:</b></label>
                    Board
                    <input type="text" name="board">
                    Percentage
                    <input type="text" name="percentage">
                    Year of Passing
                    <input type="text" name="year_of_passing">
                </td>
            </tr> --}}

            

            <tr>
                <td>
                    <label>Courses Applied For:</label>
                </td>
                <td>
                    BCA <input type="radio" name="courses" value="bca">
                    B.Com <input type="radio" name="courses" value="b_com">
                    B.Sc <input type="radio" name="courses" value="b_sc">
                    B.A. <input type="radio" name="courses" value="ba">
                </td>
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