<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>

<body>
    <!-- sidebar section -->
    <aside class="w-[250px] bg-black text-white fixed top-0 left-0 h-screen">
        <h2 class="text-center font-bold mt-5 text-3xl">Admin panel</h2>
        <!-- menu section -->
        <div class="mt-5">
            <ul>
                <li class="px-5 py-2 text-xl hover:bg-red-500 cursor-pointer duration-300">
                    <i class="fa-solid fa-house"></i><span class="px-3"><a href="../dashboard">Dashboard</a></span>
                </li>
                <li class="px-5 py-2 text-xl hover:bg-red-500 cursor-pointer duration-300">
                    <i class="fa-solid fa-tag"></i><span class="px-3"><a href="../category">Category</a></span>
                </li>
                <li class="px-5 py-2 text-xl hover:bg-red-500 cursor-pointer duration-300">
                    <i class="fa-solid fa-newspaper"></i><span class="px-3"><a href="../news">News</a></span>
                </li>
                <li class="px-5 py-2 text-xl hover:bg-red-500 cursor-pointer duration-300">
                    <i class="fa-solid fa-comment"></i><span class="px-3"><a href="../comments">Comments</a></span>
                </li>
                <li class="px-5 py-2 text-xl hover:bg-red-500 cursor-pointer duration-300">
                    <i class="fa-solid fa-message"></i><span class="px-3"><a href="../messages">messages</a></span>
                </li>
            </ul>
        </div>
        <!-- end of menu section -->
    </aside>
    <!-- end of sidebar -->

    <div class="ml-[250px]">