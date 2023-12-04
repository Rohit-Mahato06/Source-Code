<?php
$server = "localhost";
$database = "news_system";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password, $database);
if (!$con) {
    echo "db not connect";
}
$qry = "SELECT * from news";
$result = $con->query($qry);
$con->close();
?>

<div style="margin-top: 30px;">
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Image</th>
                <th>description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sn = 1;
            while ($row = $result->fetch_assoc()) {

            ?>
                <tr>
                    <td><?php echo $sn ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['image'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
            <?php
                $sn++;
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $("#myTable").DataTable();
    });
</script>