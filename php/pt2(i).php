<!DOCTYPE html>  
<html lang="en">  
<head>  
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
<title>pt2(i)</title>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
<style>  
  body {  
    background-color: #f8d7da;  
  }  
  .container {  
    background-color: #343a40;  
    padding: 50px;  
    border-radius: 10px;  
    color: #fff;  
  }  
  .container h1 {  
    text-align: center;  
  }  
</style>  
</head>  
<body>  
<div class="container">
  <h1>Student Registration Form</h1>  
  <hr>  
  <form action="pt2(i)Display.php" method="POST" target="_blank"> 
    <div class="form-group">  
      <label for="firstname">Firstname:</label>   
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required>   
    </div>  
    <div class="form-group">  
      <label for="middlename">Middlename:</label>   
      <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middlename" required>   
    </div>  
    <div class="form-group">  
      <label for="lastname">Lastname:</label>    
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required>   
    </div>  
    <div class="form-group">  
      <label for="enum">Enrollment No:</label>    
      <input type="number" class="form-control" id="enum" name="enum" placeholder="Enrollment number" required>   
    </div>  
    <div class="form-group">  
      <label for="semester">Semester:</label>  
      <select class="form-control" id="semester" name="semester">  
        <option value="Sem">Semester</option> 
        <option value="Sem-1">Sem-1</option> 
        <option value="Sem-2">Sem-2</option> 
        <option value="Sem-3">Sem-3</option> 
        <option value="Sem-4">Sem-4</option> 
        <option value="Sem-5">Sem-5</option> 
        <option value="Sem-6">Sem-6</option>  
      </select>  
    </div>  
    <div class="form-group">  
      <label>Gender:</label><br>  
      <div class="form-check form-check-inline">  
        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>  
        <label class="form-check-label" for="male">Male</label>  
      </div>  
      <div class="form-check form-check-inline">  
        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">  
        <label class="form-check-label" for="female">Female</label>  
      </div>  
      <div class="form-check form-check-inline">  
        <input class="form-check-input" type="radio" name="gender" id="other" value="Other">  
        <label class="form-check-label" for="other">Other</label>  
      </div>  
    </div>  
    <div class="form-group">  
      <label for="phone">Phone:</label>     
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone no." required>   
    </div>  
    <div class="form-group">  
      <label for="address">Current Address:</label>  
      <textarea class="form-control" id="address" name="address" rows="5" placeholder="Current Address" required></textarea>  
    </div>  
    <div class="form-group">  
      <label for="email">Email:</label>  
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>  
    </div>  
    <div class="form-group">  
      <label for="password">Password:</label>  
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>  
    </div>  
    <div class="form-group">  
      <label for="confirm_password">Re-type Password:</label>  
      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Retype Password" required>  
    </div>  
    <button type="submit" class="btn btn-success" target="_blank">Register</button>   
    <button type="reset" class="btn btn-danger">Reset</button>   
  </form>  
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>
