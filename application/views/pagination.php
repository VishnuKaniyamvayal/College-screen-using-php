<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>College Screen</title>
	<script src=<?php echo base_url("/assets/js/jquery.min.js") ?>>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div id="container" class='flex items-center justify-center'>
	<!-- component -->
<ul class="flex my-[40px] " >
        <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-500 rounded-lg">
            <a class="flex items-center font-bold" href="<?php echo base_url('index.php/HomeController/index/').( ($present_page > 1) ? $present_page - 1 : 1 ) ;?>">
                <span class="mx-1" >previous</span>
            </a>
        </li>
        <?php for($i=1;$i<=$pages;$i++)
        { ?>
        <li class="mx-1 px-3 py-2  <?php echo $present_page == $i ? 'bg-gray-700 text-gray-200': 'bg-gray-200 text-gray-700'?>  hover:bg-gray-700 hover:text-gray-200 rounded-lg">
            <a class="font-bold" href="<?php echo base_url('index.php/HomeController/index/').$i ;?>"><?php echo $i?></a>
        </li>
        <?php 
        } ?>
        <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
            <a class="flex items-center font-bold" href="<?php echo base_url('index.php/HomeController/index/').( ($present_page != $pages) ? $present_page + 1 : $pages ) ;?>">
                <span class="mx-1">Next</span>
            </a>
        </li>
</ul>
</div>

</body>
</html>