<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>

<body>

{{-- {{dd($student)}} --}}

<h1>Edit Student</h1>
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>

                <td> 
                    <label>First Name:</label>
                </td>
                <td>
                    <input type="text" name="first_name" value="{{ $student->first_name }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Last Name:</label>
                </td>
                <td>
                    <input type="text" name="last_name" value="{{ $student->last_name }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Date of Birth:</label>
                </td>
                <td>
                    <input type="date" name="dob" value="{{ $student->dob }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email Id:</label>
                </td>
                <td>
                    <input type="email" name="email" value="{{ $student->email }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mobile Number:</label>
                </td>
                <td>
                    <input type="tel" name="mobile_number" value="{{ $student->mobile_number }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Gender:</label>
                </td>
                <td>
                    Male <input type="radio" name="gender" value="m" {{ ($student->gender=="m")?"checked":"" }}>
                    FeMale<input type="radio" name="gender" value="f" {{ ($student->gender=="f")?"checked":"" }}>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Address:</label>
                </td>
                <td>
                    <textarea name="address" cols="30" rows="3">{{ $student->address }}</textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label>City:</label>
                </td>
                <td>
                    <input type="text" name="city" value="{{ $student->city }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Pin Code:</label>
                </td>
                <td>
                    <input type="number" name="pin_code" value="{{ $student->pin_code }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>State:</label>
                </td>
                <td>
                    <input type="text" name="state" value="{{ $student->state }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Country:</label>
                </td>
                <td>
                    <input type="text" name="country" value="{{ $student->country }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Hobbies:</label>
                </td>
                <td>
                    @php
                        $_explodeHobb = explode(',', $student->hobbies);
                    @endphp
                Drawing<input type="checkbox" name="hobbies[]" value="Drawing" {{ in_array("Drawing", $_explodeHobb) ? "checked":"" }}> 
                Singing<input type="checkbox" name="hobbies[]" value="Singing" {{ in_array("Singing", $_explodeHobb) ? "checked":"" }}> 
                Dancing<input type="checkbox" name="hobbies[]" value="Dancing" {{ in_array("Dancing", $_explodeHobb) ? "checked":"" }}> 
                Sketching<input type="checkbox" name="hobbies[]" value="Sketching" {{ in_array("Sketching", $_explodeHobb) ? "checked":"" }}><br>
                {{-- <br>
                Others <input type="checkbox" name="others" value="Others">
                <input type="text" name="others"> --}}

                </td>
            </tr>
            <!-- <tr>
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
            </tr> -->
            <tr>
                <td>
                    <label>Courses Applied For:</label>
                </td>
                <td>
                    BCA <input type="radio" name="courses" value="bca" {{ ($student->courses=="bca") ? "checked":"" }}>
                    B.Com <input type="radio" name="courses" value="b_com" {{ ($student->courses=="b_com") ? "checked":"" }}>
                    B.Sc <input type="radio" name="courses" value="b_sc" {{ ($student->courses=="b_sc") ? "checked":"" }}>
                    B.A. <input type="radio" name="courses" value="ba" {{ ($student->courses=="ba") ? "checked":"" }}>
                </td>
            </tr>
            <tr>
            <td></td>
            <td>
                <input type="submit" value="Update">
                <button type="reset">Reset</button>
            </td> 
            </tr>
        </table>
    </form>

</body>

</html>