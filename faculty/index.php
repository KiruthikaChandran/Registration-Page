<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
   </head>
   <style>
      body{
         
    display: flex;
    align-items: center;
    background-color: #f4f4f4;
    justify-content: center;
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    background: #f3f3f3;
    flex-direction: column;
    margin: 0;
     background-image: url('image.jpg');
      }
      form {
         background-color: #fff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         width: 300px;
      }
      </style>
   <body>
      <center>
         <h1>Login Page</h1>
         <form action="insert.php" method="post">
            
<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="firstName">
            </p>

            
<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="last_name" id="lastName">
            </p>

            
<p>
               <label for="Gender">Gender:</label>
               <input type="text" name="gender" id="Gender">
            </p>

            
<p>
               <label for="Address">Address:</label>
               <input type="text" name="address" id="Address">
            </p>

            
<p>
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="email" id="emailAddress">
            </p>

            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html>