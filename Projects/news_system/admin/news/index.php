<?php
include "../sidebar.php"
?>
<div class="sticky top-0 bg-white h-12">
    <span class="ml-5 text-3xl"><a href="#"><i class="fa-solid fa-bars"></i></a></span>
    <span class="float-right mr-5 text-3xl items-center"><a href="../dashboard/index.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i> </a></span>
</div>
<hr />
<div class="mx-4">
    <h1 class="my-4 font-bold text-2xl">News</h1>
    <div class="bg-black h-1"></div>
    <!-- add category button -->
    <div class="mt-5 flex">
        <a href="create.php" class="px-2 ml-auto py-1 bg-blue-500 rounded-md text-white">add News</a>
    </div>
    <!--end of add category button -->
    <!-- table  -->
    <?php
    include 'news_table.php'
    ?>
    <!-- end of table -->
</div>
<?php
include "../footer.php"
?>