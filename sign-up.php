<html>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body >
         <div class="main">
              <form action="sign-up-handler.php." method="POST">
                  <h1>Sign up</h1>
                  <label for="first_name">First name:</label>
                  <input type="text" name="first_name" id="first_name" required><br><br>
                  
                  <label for="last_name">Last name:</label>
                  <input type="text" name="last_name" id="last_name"required><br><br>
                  
                  <label for="building_name">Building name:</label>
                  <input type="text" name="building_name" id="buliding_name"required><br><br>
                  
                  <label for="street_address">Street address:</label>
                  <input type="text" name="street_address" id="strett_address"required><br><br>
                  
                  <label for="pin_code">PIN Code:</label>
                  <input type="text" name="pin_code" id="pin_code"required><br><br>
                  
                  <label for="phone_number">Phone Number:</label>
                  <input type="tel" name="phone_number" id="phone_number"required><br><br>
                  
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email"required><br><br>
                  
                  <label>Gender:</label>
                  <label for="gender">Male</label>
                  <input type="radio" name="gender" id="gender_male"required>
                  <label for="gender">Female</label>
                  <input type="radio" name="gender" id="gender_female"required><br><br>
                  
                  <label for="qualification">Qualification</label>
                  <select name="qualification" id="qualification"required>
                    <option value="">Choose one</option>
                    <option value="10th">10th</option>
                    <option value="+2">+2</option>
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                    </select><br><br>
                    
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile" id="file"required><br><br>
                    
                    <label for="Hobby">Hobbies:</label>
                        Dancing<input type="checkbox" name="Hobby"value="dancing">
                        Singing<input type="checkbox" name="Hobby"value="singing">
                        Reading<input type="checkbox" name="Hobby"value="reading">
                        Other<input type="checkbox" name="Hobby"value="other"><br><br>

                    <label for="password">Create Password</label>
                  <input type="password" name="password" id="password"required><br><br>
                  <label for="confirm_password">Confirm Password</label>
                  <input type="password" name="confirm_password" id="confirm_password"required><br><br>
                  <input type="submit" value="Submit"><br><br>
                  <input type="reset" value="Reset"> <br><br>
                  Have an account?&nbsp;<a href="sign-in.php">Login Here</a>
              </form>
         </div>
    </body>
</html>