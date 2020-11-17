<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>

        <h2>Sign Up Form</h2>
        <form action="/wellcome" method="POST">
        @csrf
            <label for="firstname">First Name :</label><br>
            <input type="text" name="firstname" id="firstname"><br><br>

            <label for="lastname">Last Name :</label><br>
            <input type="text" name="lastname" id="lastname"><br><br>

            <label>Gender :</label><br>
            <input type="radio" name="gender" value="male">Male <br>
            <input type="radio" name="gender" value="female">Female <br>
            <input type="radio" name="gender" value="other">Other <br><br>

            <label>Nationality :</label> <br>
            <select>
                <option name="nationality" value="Indonesian">Indonesian</option> <br>
                <option name="nationality" value="Singaporean">Singaporean</option> <br>
                <option name="nationality" value="Malaysian">Malaysian</option> <br>
                <option name="nationality" value="Other">Other</option> <br>
            </select> <br> <br>

            <label>Language Spoken :</label> <br>
            <input type="checkbox" name="language" value="indonesian">Bahasa Indonesian <br>
            <input type="checkbox" name="language" value="english"> English <br>
            <input type="checkbox" name="language" value="other"> Other <br><br>

            <label>Bio</label><br>
            <textarea cols="30" rows="10"></textarea> <br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>