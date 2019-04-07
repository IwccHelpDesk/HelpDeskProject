<?php include '../View/header.php'; ?>

<div style="text-align: center">
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
    <table class="table table-sm table-dark" id="UserTable" style="width: 55%; margin: 0 auto;">
        <h2>Current Users</h2>
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
                <td style="width: 15%">
                    <button type="submit" class="btn btn-success" value="Query User Data">Query User Data</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<hr>
<form>
    <div style="text-align: center;">
        <div class="form-group">
            <label for="firstName">FirstName</label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="firstName"
                placeholder="FirstName">
        </div>
        <div class="form-group">
            <label for="lastName">LastName</label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="lastName"
                placeholder="LastName">
        </div>
        <div class="form-group">
            <label for="userName">UserName</label>
            <input type="text" class="form-control" style="width: 10%;  display: inline" id="userName"
                placeholder="UserName">
        </div>
        <div class="form-group">
            <label for="roleSelect">UserRole</label>
            <select id="roleSelect" class="form-control" style="width: 10%;  display: inline">
                <option selected>Admin</option>
                <option>Student</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
    </div>
</form>
<?php include '../View/footer.php'; ?>