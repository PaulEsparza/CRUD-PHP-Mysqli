<?php
include('database/conection.php');
include('layout/header.php');
?>

<div class="container mt-3">
    <div class="container mt-2">
        <a href="#" class="btn btn-success">New Task</a>
    </div>
    <table class="table table-bordered mt-4">
        <tr>
            <td>ID</td>
            <td>Responsable</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
        <?php
            $query = "SELECT * FROM tasks;";
            $res = mysqli_query($conection, $query);
            while ($row = mysqli_fetch_array($res)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['responsable']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>

        <?php } ?>
    </table>

</div>

<?php
include('layout/footer.php');
?>