<?php
include_once 'includes/header.inc.php';

// from data nilai
include_once 'includes/nilai.inc.php';
$pro3 = new Nilai($db);
$stmt3 = $pro3->readAll();

// from data alternatif
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
// $stmt4 = $pro1->readByFilter();

// from data kriteria
include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();

// from analisa kriteria
// include_once 'includes/bobot.inc.php';
// $pro5 = new Bobot($db);
// $stmt5 = $pro5->readAll();
?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div style="text-align: center;">
			<h2>SPK Metode Analytical Hierarchy Process (AHP)</h2>
			Pemilihan Desa Untuk Pemerataan Pendidikan Tingkat Sekolah Dasar Pada Kabupaten Sumedang
			<!-- <img width="900px" height="auto" src="assets/images/pegawai.jpg"> -->
			</div>
			<br>
			<!-- <div id="container2" style="min-width: 100%; height: 400px; margin: 0 auto"></div> -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Nilai Preferensi</h3>
						</div>
						<div class="panel-body">
							<ol>
								<!-- mengambil data kolom 'jum_nilai' dari tabel nilai -->
								<?php while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><?php echo $row3['ket_nilai'] ?> (<?php echo $row3['jum_nilai'] ?>)</li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Kriteria & Bobot</h3>
						</div>
						<div class="panel-body">
							<ol>
							<!-- mengambil data kolom 'nama_kriteria' dari data kriteria -->
							<?php while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) : ?>
								<li><?php echo $row2['nama_kriteria'] ?></li>
							<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Data Alternatif</h3>
						</div>
						<div class="panel-body">
							<ol>
							<!-- mengambil data dari kolom nama di tabel 'data_alternatif' -->
							<?php while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) :?>
								<li><?php echo $row1['nama'] ?></li>
							<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <footer class="text-center">&copy; 2020 My Coding</footer>	<hr> -->

	</div>

	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/highcharts.js"></script>
	<script src="assets/js/exporting.js"></script>
	<script>
				// <?php while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) : ?>
					//data yang diambil dari database dimasukan ke variable nama dan data
					// {
					// 	name: '<?php echo $row4['nama'] ?>',
					// 	data: [<?php echo $row4['hasil_akhir'] ?>]
					// },
				// <?php endwhile; ?>
		// 	]
		// 	});
		// });
	</script>
</body>
</html>
