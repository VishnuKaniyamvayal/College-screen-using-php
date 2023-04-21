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
<?php if ($this->session->get_userdata('search')['search'] != ''){ ?>
<p class="text-gray-500 text-sm ml-5 pb-3"><?php echo "showing results for ' ".$this->session->get_userdata('search')['search']."'"; ?>  <span id='remove_search' class='cursor-pointer text-white bg-gray-400 px-[3px] py-[2px] rounded-md'>X</span></p>
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


});

</script>
</html>