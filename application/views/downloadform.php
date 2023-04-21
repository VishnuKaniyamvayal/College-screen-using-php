<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Fill your details</title>
	<script src=<?php echo base_url("/assets/js/jquery.min.js") ?>>
    </script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Pop up form -->
	<div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden z-10"></div>
	<div id="popup" class="fixed inset-0 hidden flex items-center justify-center z-10">
		<div class="bg-[#F9F9F9] rounded-lg p-6 w-[50%] mx-auto">
		<button class='font-bold float-right' id='remove_popup'>X</button>
			<h2 class="text-lg font-bold mb-4">Fill the form inorder to download</h2>
		    <!-- form -->
			<form class=" text-[#100607] p-6 rounded" id='contact-form' method='post' action='<?php echo base_url("index.php/Brochure/upload") ?>'>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="name">
        Name
      </label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="name"
        type="text"
        name='name'
        placeholder="Hari"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="email">
        Email
      </label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="email"
        type="email"
        name='email'
        placeholder="example@example.com"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="mobile">
        Mobile
      </label>
      <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="mobile"
        name="mobile"
        placeholder="7965460998"
      ></input>
    </div>
    <div class="flex items-center justify-between">
      
   
      <input
        class="bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4  rounded shadow"
        type="submit"
        value='Download'
        >
      </input>
      <input name='pdf' id='pdf_hidden_input' value='' hidden>
      </input>
    </div>
  </form>
		</div>
		
	</div>

</body>
<script src=<?php echo base_url("/assets/js/validate.js") ?>></script>
<script>
$(document).ready(function() {
  $("#contact-form").validate({
    rules: {
      name: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      mobile: {
        required: true,
        maxlength: 10,
        minlength: 10,
        number:true
      }
    },
    messages: {
      name: {
        required: "Please enter your name."
      },
      email: {
        required: "Please enter your email address.",
        email: "Please enter a valid email address."
      },
      message: {
        required: "Please enter a message.",
        maxlength: "Please enter a maximum of 10 characters.",
        minlength: "Please enter a minimum of 10 characters."
      }
    },
})
   
});
</script>

</script>
</html>