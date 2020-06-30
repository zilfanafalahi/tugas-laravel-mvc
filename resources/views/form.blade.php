<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <h1>Buat Account Baru!</h1>
  <h3>Sign Up Form</h3>
  <form method="POST" action="/welcome">
    @csrf
    <!-- First Name -->
    <label for="firstname">First name:</label><br><br>
    <input type="text" name="firstname" id="firstname"><br><br>

    <!-- Last Name -->
    <label for="lastname">Last name:</label><br><br>
    <input type="text" name="lastname" id="lastname"><br><br>

    <!-- Gender -->
    <label>Gender:</label><br><br>
    <input type="radio" name="gender" value="0"> Male<br>
    <input type="radio" name="gender" value="1"> Female<br>
    <input type="radio" name="gender" value="2"> Other <br><br>

    <!-- Nationality -->
    <label>Nationality:</label><br><br>
    <select>
      <option value="indonesian">Indonesian</option>
      <option value="singaporean">Singaporean</option>
      <option value="malaysian">Malaysian</option>
      <option value="australian">Australian</option>
    </select><br><br>

    <!-- Language Spoken -->
    <label>Language Spoken:</label><br><br>
    <input type="checkbox" name="language" value="0"> Bahasa Indonesia<br>
    <input type="checkbox" name="language" value="1"> English<br>
    <input type="checkbox" name="language" value="2"> Other<br><br>

    <!-- Bio -->
    <label for="bio">Bio:</label><br><br>
    <textarea name="bio" id="bio" rows="10" cols="50"></textarea>

    <br>
    <br>

    <!-- Button Submit -->
    <input type="submit" value="Sign Up">
  </form>
</body>

</html>