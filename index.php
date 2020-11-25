<?php
include "controller/koneksi.php";
$query = "SELECT * from tb_user";
$ambil_data = mysqli_query($koneksi, $query);
?>
<!DOCTYPE HTML>

<html>

<head>
	<?php
	include 'view/master.php';
	?>
	<script type="text/javascript">
		$(document).ready(function() {
			function loadData_layanan() {
				$.ajax({ //create an ajax request to display.php
					method: "post",
					url: "http://localhost/shipment/model/pg_pelayanan.php",
					success: function(data) {
						$("#content").html(data);
					}
				});
			};
		})
	</script>
</head>

<body>
	<?php
	if (isset($hal)) {
		//jika $hal ada isinya
		include $hal . ".php";
	} else {
		include "depan.php";
	}
	?>
</body>

<!-- Footer -->
<footer id="about">

</footer>


<script src="assets/js/jquery.min.js"></script>

</html>