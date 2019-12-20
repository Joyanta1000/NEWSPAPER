@extends('reporter.default.default')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<title>The NewsPaper</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('admin/addnewspaper/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/vendor/noui/nouislider.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/addnewspaper/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
<div>
@if(Session::has('message'))
  <div>
    <p style="text-align: center; font-size: 20px; color: black; background-color: lavender; width: 100%; border-radius: 5px;">{{Session::get('message')}}</p>
  </div>
  @endif
</div>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="{{URL::to('/rstore')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<span class="contact100-form-title">
					Add News
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Title">
					<span class="label-input100">TITLE *</span>
					<input class="input100" type="text" name="title" placeholder="Enter Title">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Details">
					<span class="label-input100">DETAILS *</span>
					<input class="input100" type="text" name="details" placeholder="Enter Details ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Enter Date">
					<span class="label-input100">DATE</span>
					<input class="input100" type="date" name="date" placeholder="Enter Date" required>
				</div>

				<div class="wrap-input100 input100-select bg1" data-validate="Please Enter Types">
					<span class="label-input100">TYPES *</span>
					<div>
						<select class="js-select2" name="types" required>
							<option>Please chooses</option>
							<option value="Politics">Politics</option>
							<option value="Breaking News">Breaking News</option>
							<option value="Business">Business</option>
							<option value="Technology">Technology</option>
							<option value="Health">Health</option>
							<option value="Travel">Travel</option>
							<option value="Sports">Sports</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 input100-select bg1" data-validate="Please Enter Types">
					<span class="label-input100">SUBTYPES *</span>
					<div>
						<select class="js-select2" name="subtypes" required>
							<option>Please chooses</option>
							<option value="International">International</option>
							<option value="Breaking News">Breaking News</option>							
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Enter File or Image">
					<span class="label-input100">FILE or IMAGE</span>
					*Not Required
					<input class="input100" type="file" name="image">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Enter File or Image">
					<span class="label-input100">FILE or IMAGE</span>
					*Not Required
					<input class="input100" type="file" name="image1">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" >
					<span class="label-input100">Details According to the second image or file *</span>
					<input class="input100" type="text" name="details1" placeholder="Enter Details ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Enter Reporters Name">
					<span class="label-input100">REPORTER</span>
					<input class="input100" type="text" name="reporter" placeholder="Reporter" required>
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Enter Reporters Code">
					<span class="label-input100">REPORTERS CODE</span>
					<input class="input100" type="readonly" name="rcode" value="{{session()->get('code')}}">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate="Please Enter Reporters Email">
					<span class="label-input100">REPORTERS EMAIL</span>
					<input class="input100" type="readonly" name="repemail" value="{{session()->get('remail')}}">
				</div>

				<input type="hidden" name="status" value="New">

				

				

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{asset('admin/addnewspaper/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin/addnewspaper/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin/addnewspaper/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('admin/addnewspaper/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin/addnewspaper/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('admin/addnewspaper/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('admin/addnewspaper/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin/addnewspaper/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('admin/addnewspaper/vendor/noui/nouislider.min.js')}}"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="{{asset('admin/addnewspaper/js/main.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
@stop