<?php
$server = "localhost";
$database = "news_system";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password, $database);
if (!$con) {
    echo "db not connect";
}
$qry = "SELECT * from comments";
$result = $con->query($qry);
$con->close();
?>

<div style="margin-top: 30px;">
    <table id="example" class="display">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>email</th>
                <th>message</th>
                <th>created_at</th>
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
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['message'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td><?php echo $row['news_id'] ?></td>
                    <td>
                        <button class="border border-black px-3 py-2 rounded-md font-semibold">Edit</button>
                        <button class="border border-black px-3 py-2 rounded-md font-semibold">Delete</button>
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
        $("#example").DataTable();
    });
</script>