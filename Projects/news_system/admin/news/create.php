<?php
if (isset($_POST['title_name'], $_POST['images'], $_POST['texts'], $_POST['publish_date'])) {
    $title = $_POST['title_name'];
    $img = $_POST['images'];
    $text  = $_POST['texts'];
    $date = $_POST['publish_date'];
    $server = "localhost";
    $database = "news_system";
    $username = "root";
    $password = "";
    $con = new mysqli($server, $username, $password, $database);
    if (!$con) {
        echo "db not connect";
    }
    $qry = "INSERT into news VALUES('','" . $title . "','" . $img > "','" . $text . "', '" . $date . "')";
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
    <h1 class="my-4 font-bold text-2xl">Add News</h1>
    <div class="bg-black h-1"></div>
    <div class="mt-5 w-1/2">
        <form method="POST">
            <label for="title" class="text-xl font-semibold">Title</label>
            <input type="text" id="title" name="title_name" class="border w-full border-black outline-none p-2 mb-4">
            <label for="file" class="h-[200px] w-[200px] rounded-md border-[#999] outline-dashed text-xl font-semibold p-2 hover:text-[#de0611] hover:outline-dashed hover:border-[#de0611] duration-300 cursor-pointer">Upload File</label>
            <input type="file" name="images" id="file" class="hidden">
            <br><br>
            <label for="longtext" class="text-xl font-semibold">Description</label>
            <textarea name="texts" id="longtext" cols="30" rows="10" class="w-full border border-black p-2 outline-none"></textarea>
            <label for="date" class="text-xl font-semibold">publish_date</label>
            <input type="date" name="publish_date" id="date" class="w-ful border border-black outline-none p-2">
            <button type="submit" name="add_news" class="px-2 py-1 my-2 bg-blue-500 rounded-md text-white">
                Save
            </button>
        </form>
    </div>
</div>
<?php
include "../footer.php"
?>