<?php
  include 'header.php'?>
<form class="modal-content animate" action="create.php"  method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./assets/loginavatar.png" alt="Avatar" class="avatar">
    </div>
  <form action="create.php" >
    <div class="container">
      <label for="inputUsername"><b>Username</b></label>
      <input type="text" id="inputUsername" placeholder="Enter Username" name="username" required>

      <label for="inputPassword"><b>Password</b></label>
      <input type="password" id="inputPassword" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
     
      <p> don't have an account? <a href="signup.php" style="color:black;" >sign up here</a></p>
    </div>

    
    </div>
  </form>
  <?php include 'footer.php'?>
