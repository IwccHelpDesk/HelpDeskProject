<?php /*require '..Model/database.php'; ?>
<?php require '..Model/generic_db.php';*/ ?>
<?php include 'header.php'; ?>
     <!-- user login -->
     <form action="." method="post" id="login">
          <div style="text-align: center; margin-top: 16%">
               <h2>Help Desk Login</h2>
               <div class="form-group">
                    <br>
                    <input type="username" class="form-control" style="width: 20%;  display: inline" id="UserName" placeholder="Enter your school username">
               </div>
               <button type="submit" class="btn btn-primary" value="login">Login</button>
          </div>
     </form>
<?php include 'footer.php'; ?>