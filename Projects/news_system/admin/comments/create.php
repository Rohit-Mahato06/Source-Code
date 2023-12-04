<?php
if (isset($_POST['comments_name'], $_POST['mail_name'], $_POST['message'], $_POST['cd'], $_POST['foreign_key'])) {
    $name = $_POST['comments_name'];
    $mail = $_POST['mail_name'];
    $sms = $_POST['message'];
    $date = $_POST['cd'];
    $key = $_POST['foreign_key'];
    $server = "localhost";
    $database = "news_system";
    $username = "root";
    $password = "";
    $con = new mysqli($server, $username, $password, $database);
    if (!$con) {
        echo "db not connect";
    }
    $qry = "INSERT into comments VALUES('','" . $name . "', '" . $mail . "', '" . $sms . "', '" . $date . "','" . $key . "')";
    $con->query($qry);

    $con->close();
}
?>
<?php
include "../sidebar.php"
?>



<div class="sticky top-0 bg-white h-12">
    <span class="ml-5 text-3xl"><a href="#"><i class="fa-solid fa-bars"></i></a></span>
    <span class="float-right mr-5 text-3xl items-center"><a href="#"> <i class="fa-solid fa-arrow-right-from-bracket"></i> </a></span>
</div>
<hr />
<div class="mx-4">
    <h1 class="my-4 font-bold text-2xl">Add Comments</h1>
    <div class="bg-black h-1"></div>
    <div class="mt-5 w-1/2">
        <form method="POST">
            <label for="name" class="text-xl font-semibold">Name</label>
            <input type="text" id="name" name="comments_name" class="w-full border border-black outline-none p-2 rounded">
            <label for="mail" class="text-xl font-semibold">Email</label>
            <input type="email" name="mail_name" id="mail" class="w-full border border-black outline-none rounded p-2">
            <label for="sms" class="text-xl font-semibold">Comments</label>
            <textarea name="message" id="sms" cols="30" rows="10" class="w-full border border-black outline-none rounded p-2"></textarea>
            <label for="date" class="text-xl font-semibold">publish_date</label>
            <input type="date" name="cd" id="date" class="w-full border border-black outline-none p-2">
            <label for="foreign" class="text-xl font-semibold">Key Id</label>
            <input type="number" name="foreign_key" id="foreign" class="w-full border border-black outline-none rounded p-2">
            <button type="submit" class="px-2 py-1 my-2 bg-blue-500 rounded-md text-white">
                add
            </button>
        </form>
    </div>
</div>
<?php
include "../footer.php"
?>