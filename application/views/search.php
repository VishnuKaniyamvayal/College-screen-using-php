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

<div id="container">

<input type="text" placeholder='Search' class='border rounded-md pl-2 m-5' id='search' value='<?php if ($this->session->get_userdata('search')['search'] != ''){ ?><?php echo $this->session->get_userdata('search')['search']?><?php } ?>'>
<button class='text-sm bg-sky-500 text-white  px-4 py-2 rounded-md' id='search_button'>SEARCH</button>
<div class="relative inline-flex">
  <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none " viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
  <select id='sort' class="border border-gray-300 rounded-md text-gray-600 px-2 py-1 w-[130px] bg-white hover:border-gray-400 focus:outline-none appearance-none text-sm ">
    <option value='college_name' <?php echo  $sort == "college_name" ? ( 'selected') : '' ?>>College name</option>
    <option value='approx_fees'<?php echo  $sort == "approx_fees" ? ( 'selected') : '' ?>>Approx fees</option>
    <option value='ratings'<?php echo  $sort == "ratings" ? ( 'selected') : '' ?>>Ratings</option>
    </select>
</div>
<div class="relative inline-flex">
  <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none " viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
  <select id='sort_type' class="border border-gray-300 rounded-md text-gray-600 px-2 py-1 w-[130px] bg-white hover:border-gray-400 focus:outline-none appearance-none text-sm ">
    <option value='ascending' <?php echo  $sort_type == "ascending" ? ( 'selected') : '' ?>>Ascending</option>
    <option value='descending'<?php echo  $sort_type == "descending" ? ( 'selected') : '' ?>>Descending</option>
    </select>
</div>
<?php if ($this->session->get_userdata('search')['search'] != ''){ ?>
<p class="text-gray-500 text-sm ml-5 pb-3"><?php echo "showing results for ' ".$this->session->get_userdata('search')['search']."'"; ?>  <span id='remove_search' class='cursor-pointer text-white bg-gray-400 px-[3px] py-[2px] rounded-md'>X</span></p>
<?php } ?>
<?php if ($this->session->get_userdata('search')['search'] != ''){ ?>
<p class="text-gray-500 text-sm ml-5 pb-3"><?php echo $count." results found"; ?> </p>
<?php } ?>




</div>

</body>

<script>

$(document).ready(function() {

	$('#search_button').click(function()
	{
		var value = $('#search').val();
        $.ajax({
			type: 'POST',
            url: '<?php echo base_url("index.php/StateManagement/search");?>',
            data: {search:value},
            success: function(response) {
				window.location.replace("<?php echo base_url('index.php/HomeController/'); ?>");
            }
		})
	});
	$('#remove_search').click(function()
	{
        $.ajax({
			type: 'POST',
            url: '<?php echo base_url("index.php/StateManagement/search_remove");?>',
            success: function(response) {
				window.location.replace("<?php echo base_url('index.php/HomeController/'); ?>");
            }
		})
	});
	$('#sort').change(function()
    {
		var value = $(this).val();
		$.ajax({
			type: 'POST',
            url: '<?php echo base_url("index.php/StateManagement/sort");?>',
			data: {sort:value},
            success: function(response) {
				window.location.replace("<?php echo base_url('index.php/HomeController/'); ?>");
            }
		})
	});
	$('#sort_type').change(function()
    {
		var sort_type = $('#sort_type').val();
		$.ajax({
			type: 'POST',
            url: '<?php echo base_url("index.php/StateManagement/sort_type");?>',
			data: {sort_type:sort_type},
            success: function(response) {
				window.location.replace("<?php echo base_url('index.php/HomeController/'); ?>");
            }
		})
	});




});

</script>
</html>