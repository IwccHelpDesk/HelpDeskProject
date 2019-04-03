<?php include '../View/header.php'; ?>

<div style="text-align: center">
    <h2>Help Desk Time Tracker</h2>
    <br>
    <div style="display: inline">
        <div>
            <button type="button" class="btn btn-success">Login</button>
            <br>
            <span id="loginTime">Login Time: <?php echo '' ?> </span>
            <!-- if the user has not logged in then maybe we should say, "You have not logged in yet" -->

            <!-- Once the user comes back and they go to logout, the login button should be disabled -->
        </div>
        <br>
        <div>
            <button type="button" class="btn btn-danger">Logout</button>
            <br>
            <span id="logoutTime">Logout Time: <?php echo '' ?></span>
            <!-- Disable this button if the user has not logged on for the day -->

            <!-- Enable this button only when the user has a start time for the day so they would then be allowed to logout for the shift -->
        </div>
    </div>
    <br>
    <h4>Come back to logout after your shift is complete.</h4>
</div>

<?php include '../View/footer.php'; ?>