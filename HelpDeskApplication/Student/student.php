<?php include '../View/header.php'; ?>

<div style="text-align: center">
    <h2>Help Desk Time Tracker</h2>
    <br>
    <form action="." method="post">
        <input type="hidden" name="action" value="punch_in">
        <div style="display: inline">
            <div>
                <input type="submit" class="btn btn-success" value='Clock in'>
                <br>
                <!-- <span id="clock-in-Time">Clock In Time: <?php echo '' ?> </span> -->
                <!-- if the user has not logged in then maybe we should say, "You have not logged in yet" -->

                <!-- Once the user comes back and they go to logout, the login button should be disabled -->
            </div>
        </form>
        <br>
        <form action="." method="post">
            <input type="hidden" name="action" value="punch_out">
            <div>
                <input type="submit" class="btn btn-danger" value='Clock out'>
                <br>
                <!--<span id="clock-out-Time">Clock Out Time: <?php echo '' ?></span> -->
                <!-- Disable this button if the user has not logged on for the day -->

                <!-- Enable this button only when the user has a start time for the day so they would then be allowed to logout for the shift -->
            </div>
        </div>
    </form>
    <br>
    <h4>Come back to logout after your shift is complete.</h4>
</div>

<?php include '../View/footer.php'; ?>