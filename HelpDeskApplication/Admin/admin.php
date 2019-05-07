<?php include '../View/header.php'; ?>

<div style="text-align: center">
<<<<<<< HEAD
    <table class="table table-sm table-dark" id="AdminTable" style="width: 55%; margin: 0 auto; text-align: center">
        <h2>Current Admin Users</h2>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td style="width: 15%">
                    <button type="submit" class="btn btn-danger" value="Delete User">Delete User</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<hr>
<div style="text-align: center">
=======
>>>>>>> master
    <table class="table table-sm table-dark" id="UserTable" style="width: 55%; margin: 0 auto;">
        <h2>Current Users</h2>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
<<<<<<< HEAD
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td style="width: 15%">
                    <button type="submit" class="btn btn-danger" value="Delete User">Delete User</button>
                </td>
                <td style="width: 15%">
                    <button type="submit" class="btn btn-success" value="Query User Data">Query User Data</button>
                </td>
            </tr>
=======
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
>>>>>>> master
        </tbody>
    </table>
</div>
<br>
<hr>
<<<<<<< HEAD
<form>
=======
<form action="." method="post">
    <input type="hidden" name="action" value="enter_user">
>>>>>>> master
    <div style="text-align: center;">
        <h2>Add Users</h2>
        <br>
        <div class="form-group">
            <label for="firstName">FirstName: </label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="firstName"
<<<<<<< HEAD
                placeholder="FirstName">
=======
                placeholder="FirstName" name="fname">
>>>>>>> master
        </div>
        <div class="form-group">
            <label for="lastName">LastName: </label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="lastName"
<<<<<<< HEAD
                placeholder="LastName">
=======
                placeholder="LastName" name="lname">
>>>>>>> master
        </div>
        <div class="form-group">
            <label for="userName">UserName: </label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="userName"
<<<<<<< HEAD
                placeholder="UserName">
        </div>
        <div class="form-group">
            <label for="roleSelect">UserRole: </label>
            <select id="roleSelect" class="form-control" style="width: 10%;  display: inline">
                <option selected>Admin</option>
                <option>Student</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
=======
                placeholder="UserName" name="uid">
        </div>
        <input type="submit" class="btn btn-primary" value="Add User">
>>>>>>> master
    </div>
</form>
<?php include '../View/footer.php'; ?>