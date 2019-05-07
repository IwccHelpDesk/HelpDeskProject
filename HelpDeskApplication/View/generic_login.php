<?php /*require '..Model/database.php'; ?>
<?php require '..Model/generic_db.php';*/ ?>
<?php include 'header.php'; ?>
     <!-- user login -->
     <form action="index.php" method="post" id="login">
          <input type="hidden" name="action" value="login_test">
          <div style="text-align: center; margin-top: 16%">
               <h2>Help Desk Login</h2>
               <div class="form-group">
                    <br>
                    <input type="username" class="form-control" style="width: 20%;  display: inline" id="UserName" name="userName" placeholder="Enter your school username">
               </div>
               <input type="submit" class="btn btn-primary" value="Login">
          </div>
     </form>
<?php include 'footer.php'; ?>