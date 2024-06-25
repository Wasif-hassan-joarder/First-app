
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration</h2>
    <table>
     <tr>
        <td>
              
    <form action="Submit.php" method="post">
        <fieldset>
            <legend>General Information</legend>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName"><br><br>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName"><br><br>

            <label for="Gender">Gender</label>
            <input type="radio" name="gender" value="male">Male
            </label> 
              <label>
            <input type="radio" name="gender" value="female">Female
              </label><br><br>


              <label for="Father's Name">Father's Name:</label>
            <input type="text" id="Father's Name" name="Father's Name">
            <input type="file" id="Choose file" name="Choose file"><br><br>

            <label for="Mother's Name">Mother's Name:</label>
            <input type="text" id="Mother's Name" name="Mother's Name"><br><br>
              

            <label for="bloodGroup">Blood group:</label>
                  <select id="bloodGroup" name="bloodGroup">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select><br><br>

                  <label for="Religion">Religion:</label>
                  <select id="Religion" name="Religion">
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christan">Christan</option>
                    <option value="Buddha">Buddha</option>
                  </select>



        
               
         </fieldset>
        </td>

    
            <td>
                <fieldset>
                    <legend>Contact Information</legend>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" ><br><br>

                    <label for="phone">Phone/Mobile</label>
                    <input type="tel" id="phone" name="phone" ><br><br>

                    <label for="Website">Website</label>
                    <input type="Website" id="Website" name="Website" ><br><br>

                    <label for="address">Address:</label><br>
                    <textarea id="address" name="address" rows="4" ></textarea><br><br>
        
                    
             
                </fieldset>
            </td>
       
      
                <td>
                    <fieldset>
                        <legend>Account Information</legend>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" ><br><br>
            
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" ><br><br>
            
                        <label for="confirmPassword">Confirm Password:</label>
                        <input type="password" id="confirmPassword" name="confirmPassword"><br><br>
                
                    </fieldset>
                </td>
            </tr>
            </table> <br>
                
                <input type="submit" value="Register">
    </form>
  </body>
</html>