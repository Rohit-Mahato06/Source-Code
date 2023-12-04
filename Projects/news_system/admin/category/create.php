<?php
include "../sidebar.php"
?>



<div class="sticky top-0 bg-white h-12">
    <span class="ml-5 text-3xl"><a href="#"><i class="fa-solid fa-bars"></i></a></span>
    <span class="float-right mr-5 text-3xl items-center"><a href="#"> <i class="fa-solid fa-arrow-right-from-bracket"></i> </a></span>
</div>
<hr />
<div class="mx-4">
    <h1 class="my-4 font-bold text-2xl">Add Category</h1>
    <div class="bg-black h-1"></div>
    <div class="mt-5 w-1/2">
        <form method="POST" action="cat_action.php">
            <label for="name" class="text-xl font-semibold">Name</label>
            <input type="text" id="name" name="cat_name" class="border w-full border-black p-2 outline-none rounded">
            <button name="cat_add" type="submit" class="px-2 py-1 my-2 bg-blue-500 rounded-md text-white">
                add
            </button>
        </form>
    </div>
</div>
<?php
include "../footer.php"
?>