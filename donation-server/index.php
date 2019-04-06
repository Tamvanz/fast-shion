<!DOCTYPE html>
<html lang="en">

<head>
	<title>Donasi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="post">
				<span class="contact100-form-title">
					Donasikan Fast-Shion Kamu
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Tolong Ketik Nama Kamu">
					<span class="label-input100">NAMA LENGKAP *</span>
					<input class="input100" type="text" name="name" placeholder="Masukkan Nama Lengkap Kamu">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Masukkan Email Kamu (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Masukkan Email">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Nomor HP</span>
					<input class="input100" type="text" name="phone" placeholder="Masukkan Nomor Handphone">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Tolong Ketik Alamat Lengkap Kamu">
					<span class="label-input100">Alamat Lengkap *</span>
					<input class="input100" type="text" name="address" placeholder="Masukkan Alamat Lengkap Kamu">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Jenis Barang *</span>
					<div>
						<select class="js-select2" name="service[]" multiple>
							<option>Silahkan Pilih</option>
							<option>Baju atau Sejenisnya</option>
							<option>Celana</option>
							<option>Sepatu/Sandal</option>
							<option>Tas</option>
							<option>Lain-lain (sertakan di pesan)</option>
							<!-- TODO: buat isi sendiri radio dan select -->
							<!-- <option>Lebih dari satu (sertakan di pesan)</option> -->
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">Apa nama merk barang yang ingin di donasikan?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="checkbox" name="type-product[]" value="H&M" checked="checked">
							<label class="label-radio100" for="radio1">
								H&M
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="checkbox" name="type-product[]" value="Pull&Bear">
							<label class="label-radio100" for="radio2">
								Pull&Bear
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="checkbox" name="type-product[]" value="Zara">
							<label class="label-radio100" for="radio3">
								Zara
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio4" type="checkbox" name="type-product[]" value="Uniqlo">
							<label class="label-radio100" for="radio4">
								Uniqlo
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio5" type="checkbox" name="type-product[]" value="Lain-lain">
							<label class="label-radio100" for="radio5">
								Lain-lain (sertakan di pesan)
							</label>
						</div>
					</div>

					<div class="wrap-input100 bg1">
						<span class="label-input100">Ambil foto barang</span>
						<!-- <input class="input100" type="file" name="photo" placeholder="Upload your fast-shion photo"> -->
						<input class="input100" type="file" name="" accept="image/*" id="file-input" multiple>
					</div>

					<!-- <div class="wrap-contact100-form-range">
						<span class="label-input100">Budget *</span>

						<div class="contact100-form-range-value">
							$<span id="value-lower">610</span> - $<span id="value-upper">980</span>
							<input type="text" name="from-value">
							<input type="text" name="to-value">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
					</div> -->
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Tolong Ketik Pesan kamu">
					<span class="label-input100">Pesan</span>
					<textarea class="input100" name="message" placeholder="Tuliskan pesanmu di sini..."></textarea>
				</div>

				<span class="contact100-form-text">
					<i>*jika ada permintaan akses lokasi GPS mohon untuk diterima</i>
				</span>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="submit" value="Submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<!-- <div>
						<button href="javascript:history.back()">
							<span>
								<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
								&nbsp; &nbsp; Take me back!
							</span>
						</button>
				</div> -->
			</form>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function() {
				$(this).on('select2:close', function(e) {
					if ($(this).val() == "Silahkan Pilih") {
						$('.js-show-service').slideUp();
					} else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		});

		const fileInput = document.getElementById('file-input');

		fileInput.addEventListener('change', (e) => doSomethingWithFiles(e.target.files));
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<!-- <script>
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
	</script> -->
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>


</body>

</html>

<?php
if (isset($_POST['submit'])) {
	$to = "rahmat.rama98@gmail.com";
	$from = $_POST['email'];
	$name = $_POST['name'];

	$noHp = $_POST['phone'];
	$alamat = $_POST['address'];
	$jenis = implode($_POST['service']);
	$merk = implode($_POST['type-product']);

	$subject = "Donasi Taki Jelek";
	$subject2 = "Informasi Donasi";



	$message = "Nama : " . $name . "\n".
	"Nomor Handphone : " . $noHp . "\n".
	"Email : " . $from . "\n" .
	"Alamat : " . $alamat . "\n" .
	"Pesan : " . $_POST['message'].  "\n".
	"Jenis : " . $jenis .  "\n".
	"Merek : " . $merk 
	;

	// echo $message;
	// $message = $name . " wrote the following:" . "\n" . $_POST['message'];
	$message2 = "Terima Kasih, Informasi Mengenai Donasi Anda Sudah Kami Terima";

	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to, $subject, $message, $headers);
	mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
	echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
	// You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>