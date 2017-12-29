
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Task1</title>
      <link rel="stylesheet" href="style.css">

  
</head>

<body>
  <div class="form">
      <div class="tab-content">
        <h1>Welcome</h1>
          
        <form action="int.php" method="post">
          
          

          <div class="field-wrap">
            </label>
            <input type="text"required name="name" placeholder="Name" required/>
          </div>
         <div class="dropdown">
          <select name="taskOpt">
            <option value="internship">Internship</option>
            <option value="job">Job</option>
          </select>
          </div>
          <label class="container">I agree to the terms and conditions
            <input type="checkbox" name="check" value="true">
              <span class="checkmark" ></span>
          </label>
          <button type="submit" class="button button-block"/>Submit</button>

           </form>   
         

       </div><!-- tab-content -->
     </div><!-- form -->
  
 </body>
</html>



