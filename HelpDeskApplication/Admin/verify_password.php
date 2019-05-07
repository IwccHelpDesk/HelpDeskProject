<?php include '../View/header.php'; ?>

<form action="." method="post">
    <input type="hidden" name="action" value="login_test">
    <div style="text-align: center; margin-top: 16%">
        <h2>Administrator Verification</h2>
        <div class="form-group">
            <br>
            <input type="password" class="form-control" style="width: 20%;  display: inline" id="AdminPassword"
                placeholder="Enter Admin Password" name="pwd">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit Admin Password">
    </div>
</form>

<?php include '../View/footer.php'; ?>