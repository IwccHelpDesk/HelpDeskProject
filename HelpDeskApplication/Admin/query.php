<?php include '../View/header.php'; ?>

<div style="text-align: center">
    <table class="table table-sm table-dark" id="UserTable" style="width: 55%; margin: 0 auto;">
        <h2><?php echo $username[0]['userName']; ?></h2>
        <thead>
            <tr>
                <th scope="col">Start</th>
                <th scope="col">End</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($user_info as $data) : ?>
            <tr>
                <th scope="row"><?php echo $data['startTime']; ?></th>
                <td><?php echo $user['endTime']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br>
<hr>
<form action="." method="post">
    <input type="hidden" name="action" value="home">
    <div style="text-align: center;">
    <input type="submit" class="btn btn-primary" value="Back">
    </div>
</form>
<?php include '../View/footer.php'; ?>