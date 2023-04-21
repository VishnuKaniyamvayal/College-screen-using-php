<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>College Screen</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

	<div class='grid grid-cols-3'>
		<!-- filters -->
		<div class='col-span-1 bg-[#F9F9F9]'>
			<h2 class='text-center text[20px] font-semibold text-sky-500 mt-2'>Filters</h2>
			<br>
			<br>

			<div class="w-[250px] bg-white flex shadow-md flex-wrap rounded-lg mx-auto space-x-2">
				<?php 

				foreach($filters as $filter) {
				
				?>
				<p class="text-[12px] bg-gray-400 text-white rounded-md px-3 my-2">
					<?php echo $filter ?> <span class='remove_filter cursor-pointer'
						value="<?php echo $filter ?>">X</span>
				<p>

					<?php }?>
			</div>
			<!-- cities -->
			<div class="w-[250px] bg-white flex shadow-md flex-col rounded-lg mx-auto mt-6">
				<h1 class="text-center text-lg font-bold ">City</h1>
				<fieldset>
					<?php 
					$count = 1;
					foreach($cities as $city) {

				?>
					<div class=' my-1 pl-6'>

						<label for='<?php echo ' city'.$count?>'>
							<?php echo $city ?>
						</label>
						<input type="checkbox" id="<?php echo 'city'.$count?>" name="<?php echo 'city'.$count?>"
							value="<?php echo $city ?>">

					</div>
					<?php 
				$count++; 
			}?>
				</fieldset>
			</div>
			<!-- type  -->
			<div class="w-[250px] bg-white flex shadow-md flex-col rounded-lg mx-auto mt-6">
				<h1 class="text-center text-lg font-bold ">Type</h1>
				<fieldset>
					<div class=' my-1 pl-6'>

						<label for="Co-ed">
							Co-ed
						</label>
						<input type="checkbox" id="Co-ed" name="Co-ed" value="Co-ed">
					</div>

					<div class=' my-1 pl-6'>
						<label for="Girls">
							Girls
						</label>
						<input type="checkbox" id="Girls" name="Girls" value="Girls">
					</div>
					<div class=' my-1 pl-6'>
						<label for="Boys">
							Boys
						</label>
						<input type="checkbox" id="Boys" name="Boys" value="Boys">
					</div>
				</fieldset>
			</div>
			<!-- Mode  -->
			<div class="w-[250px] bg-white flex shadow-md flex-col rounded-lg mx-auto mt-6">
				<h1 class="text-center text-lg font-bold ">Mode</h1>
				<fieldset>
					<div class=' my-1 pl-6'>
						<label for="Part-time">
							Part-time
						</label>
						<input type="checkbox" id="Part-time" name="Part-time" value="Part-time">
					</div>
					<div class=' my-1 pl-6'>
						<label for="Full-time">
							Full-time
						</label>
						<input type="checkbox" id="Full-time" name="Full-time" value="Full-time">
					</div>
				</fieldset>
			</div>
			<div>
				<button class='bg-sky-500 py-3 px-2 text-white rounded-lg mt-3 ml-[35%] font-bold '
					id='apply_filters'>Apply Filters</button>
			</div>
		</div>

		<!-- colleges cards -->
		<div class='col-span-2 bg-[#F9F9F9] pt-8 pl-7 border border-x-2'>
			<?php 
				if(empty($all))
				{
			?>
			<h2 class='text-center text-lg font-bold text-sky-500 mt-2'>Oops no data found </h2>

			<?php }?>

			<?php 

				foreach($all as $college) {

			?>
			<!-- component -->
			<div class=" flex flex-wrap gap-4 items-center w-max my-2">
				<a id='' class="w-[30rem]  rounded-xl hover:shadow-lg bg-white transition-[600ms]">
					<?php if($college['ratings'] == 5 ) 
					{
						?>
					<p class="bg-sky-500 w-fit px-4 py-1 text-sm font-bold text-white rounded-tl-lg rounded-br-xl">
						FEATURED </p>
					<?php }; 
					?>
					<div class="grid grid-cols-6 p-5 gap-y-2">
						<div>
							<img src="<?php echo base_url('assets/images/'.$college['logo']);?>"
								class="max-w-16 max-h-16 rounded-full" />
						</div>
						<div class="col-span-5 md:col-span-4 ml-4">
							<p class="text-sky-500 font-bold text-xs">
								<?php echo $college['college_code']?>
							</p>
							<p class="text-gray-600 font-bold">
								<?php echo $college['college_name'];?>
							</p>
							<p class="text-gray-400">
								<?php echo $college['location'];?>
							</p>
							<p class="text-gray-400">
								<?php echo $college['college_type'];?> .
								<?php echo $college['mode'];?>
							</p>
							<p class="text-gray-400">EXAMS REQUIRED: <span class='text-gray-700'>
									<?php echo $college['exams'];?>
								</span></p>
							<p class="text-gray-400">COURSES AVAILABLE: <span class='text-gray-700'>
									<?php echo $college['courses_offered'];?>
								</span></p>
							<p class="text-gray-400">Approx fees: <span class='text-gray-900 font-bold text-sky-500'>
									<?php echo "Rs.".$college['approx_fees'];?>
							</span></p>
						</div>

						<div class="flex col-start-2 ml-4 md:col-start-auto md:ml-0 md:justify-end">
							<p class="rounded-lg text-sky-500 font-bold bg-sky-100  py-1 px-3 text-sm w-fit h-fit"> ⭐
								<?php echo $college['ratings'] ?>
						</div>
						<!-- download button -->
					</div>
					<div class='mb-2 float-right'>
						<button name="brochure_button" value = '<?php echo $college['brochure']?>'
							class='text-sm clear bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md mx-4 brochure_download_button'>Download
							brochure</button>
					</div>



				</a>
			</div>
			<?php 
			}?>
		</div>



	</div>

	<!-- form -->

</body>

<!-- <script src=<?php echo base_url("/assets/js/jquery.min.js") ?>></script> -->
<script>
	$(document).ready(function ($) {
		//hidden by default
		$('#apply_filters').hide();

		$('input[type="checkbox"]').click(function () {
			console.log($('input[type="checkbox"]:checked').length);

			if ($('input[type="checkbox"]:checked').length > 0) {

				$('#apply_filters').show();
			} else {
				$('#apply_filters').hide();
			}
		});


		$('#apply_filters').click(function () {

			var city_filters = $('fieldset:eq(0) input[type="checkbox"]:checked').map(function () {
				return $(this).val();
			}).get();

			var type_filters = $('fieldset:eq(1) input[type="checkbox"]:checked').map(function () {
				return $(this).val();
			}).get();

			var mode_filters = $('fieldset:eq(2) input[type="checkbox"]:checked').map(function () {
				return $(this).val();
			}).get();

			//sending filters

			$.ajax({
				type: 'POST',
				url: '<?php echo base_url("index.php/StateManagement/filters"); ?>',
				data: { city_filters: city_filters, type_filters: type_filters, mode_filters: mode_filters },
				success: function (response) {
					window.location.replace("<?php echo base_url('index.php/HomeController/'); ?>");
				}
			});



		});

		$('.remove_filter').click(function () {

			var filter = $(this).attr('value')
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url("index.php/StateManagement/remove_filter");?>',
				data: { filter: filter },
				success: function (response) {
					window.location.replace("<?php echo base_url('index.php/HomeController/'); ?>");
				}
			})
		});

		$('button[name="brochure_button"]').click(function() {
			$('#overlay').fadeIn();
      		$('#popup').fadeIn();

   		});
		$('#remove_popup').click(function() {
      		$('#popup').hide();
			$('#overlay').hide();
			$('#popup').fadeOut();

   		});
		$('button[name="brochure_button"]').click(function() {
			$('#pdf_hidden_input').val(($(this).attr('value')));


   		});
		
		


	})
</script>

</html>