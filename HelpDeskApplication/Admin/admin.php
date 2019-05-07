<?php include '../View/header.php'; ?>
<!--Hello world-->
<div style="text-align: center">
    <table class="table table-sm table-dark" id="UserTable" style="width: 55%; margin: 0 auto;">
        <h2>Current Users</h2>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <th scope="row"><?php echo $user['userIndexId']; ?></th>
                <td><?php echo $user['firstName']; ?></td>
                <td><?php echo $user['lastName']; ?></td>
                <td style="width: 15%">
                    <form action="." method="post">
                        <input type="hidden" name="action"
                            value="Delete">
                        <input type="hidden" name="user_id"
                            value="<?php echo $user['userIndexId']; ?>">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
                <td style="width: 15%">
                    <form action="." method="post">
                        <input type="hidden" name="action"
                            value="query">
                        <input type="hidden" name="user_id"
                            value="<?php echo $user['userIndexId']; ?>">
                        <input type="submit" value="Query User Data" class="btn btn-success">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br>
<hr>
<form action="." method="post">
    <input type="hidden" name="action" value="enter_user">
    <div style="text-align: center;">
        <h2>Add Users</h2>
        <br>
        <div class="form-group">
            <label for="firstName">FirstName: </label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="firstName"
                placeholder="FirstName" name="fname">
        </div>
        <div class="form-group">
            <label for="lastName">LastName: </label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="lastName"
                placeholder="LastName" name="lname">
        </div>
        <div class="form-group">
            <label for="userName">UserName: </label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="userName"
                placeholder="UserName" name="uid">
        </div>
        <input type="submit" class="btn btn-primary" value="Add User">
    </div>
</form>
<?php include '../View/footer.php'; ?>