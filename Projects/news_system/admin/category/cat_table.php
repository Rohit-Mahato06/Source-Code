<?php
$server = "localhost";
$database = "news_system";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password, $database);
if (!$con) {
    echo "db not connect";
}
$qry = "SELECT * from category";
$result = $con->query($qry);
$con->close();
?>

<div style="margin-top: 30px;">
    <table id="element" class="display">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
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
                    <td class="flex gap-5">
                        <a href="edit.php?id=<?php echo $row['id']  ?>" class="border border-black px-3 py-2 rounded-md font-semibold">Edit</a>
                        <form action="cat_action.php" method="POST">
                            <input type="hidden" name="cat_id" value="<?php echo $row['id'] ?>">
                            <button type="submit" name="cat_delete" class="border border-black px-3 py-2 rounded-md font-semibold">Delete</button>
                        </form>
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
        $("#element").DataTable();
    });
</script>