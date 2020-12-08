<div class="container mt-5 mb-5">
	<div class="card shadow">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4 <?= $warna['bg-warna'] ?>">
					<?php foreach ($profiles as $profile) : ?>
						<div class="container-fluid mt-5">
							<div class="text-center mx-auto">
								<img src="<?= base_url('assets/img/foto_profile/' .
												$profile['foto_profile']) ?>" width="230" class="img-fluid rounded-circle">
							</div>
						</div>

				</div>
				<div class="col-md-8  <?= $warna['bg-big-warna'] ?>">

					<div class="container-fluid mt-5 mb-5">

						<div class="col-sm-12 text-center <?= $warna['text-warna'] ?>">
							<h1 class="text-center mt-5 " id="nama"> <?= $profile['nama_lengkap'] ?></h1>
						</div>
					<?php endforeach ?>
					</div>

				</div>

			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4 <?= $warna['bg-warna'] ?>">

					<div class="container">
						<div class="container-fluid mt-5 mb-5">
							<div class="text-light">
								<h5 class="<?= $warna['side-warna'] ?>">CONTACT</h5>
							</div>
							<table class="table <?= $warna['side-warna'] ?> ">
								<thead></thead>
								<tbody>
									<?php foreach ($profiles as $profile) : ?>
										<tr>
											<td width="5%"><i class="fas fa-envelope"></i></td>
											<td><?= $profile['email'] ?></td>
										</tr>
										<tr>
											<td><i class="fas fa-mobile"></i></td>
											<td><?= $profile['telepon'] ?></td>
										</tr>
										<tr>
											<td><i class="fas fa-home"></i></td>
											<td><?= $profile['alamat'] ?></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>

						<div class="container-fluid mt-5 mb-5">
							<div class="">
								<h5 class="<?= $warna['side-warna'] ?>">ORGANIZATION</h5>
							</div>
							<table class="table <?= $warna['side-warna'] ?>">
								<thead></thead>
								<tbody>
									<?php foreach ($organisasi as $organ) : ?>
										<tr>
											<td width="5%"><i class="fas fa-users"></i></td>
											<td></i> <?= $organ['nama'] ?></td>
											<td><?= $organ['tahun'] ?></td>

											</ul>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>

						<div class="container-fluid mt-5 mb-5">
							<div class="">
								<h5 class="<?= $warna['side-warna'] ?>">LANGUAGE</h5>
							</div>
							<table class="table <?= $warna['side-warna'] ?>">
								<thead></thead>
								<tbody>
									<?php foreach ($bahasa as $bhs) : ?>
										<tr>
											<td width="5%"><i class="fas fa-flag"></i> </td>
											<td><?= $bhs['nama'] ?></td>
											<td><?= $bhs['status'] ?></td>

											</ul>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
						<div class="container-fluid mt-5 mb-5">
							<div class="<?= $warna['side-warna'] ?>">
								<h2>INTEREST</h2>
							</div>
							<table class="table <?= $warna['side-warna'] ?>">
								<thead></thead>
								<tbody>
									<?php foreach ($interest as $int) : ?>
										<tr>
											<td width="5%"><i class="fas fa-circle"></i> </td>
											<td><?= $int['nama'] ?></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-md-8 <?= $warna['bg-big-warna'] ?>">

					<div class="container-fluid mt-3 mb-3">
						<div class="<?= $warna['text-warna'] ?>">
							<h2>PROFILE</h2>
						</div>
						<table class="table <?= $warna['text-warna'] ?>">
							<thead></thead>
							<tbody>
								<?php foreach ($profiles as $profile) : ?>
									<tr>
										<td width="5%"><i class="fas fa-circle"></i></td>
										<td><?= $profile['nama_lengkap'] ?></td>
										<td><?= $profile['tempat_tgl_lahir'] ?></td>

									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<div class="<?= $warna['text-warna'] ?>">
							<h2>ABOUT ME</h2>
						</div>
						<?php foreach ($profiles as $profile) : ?>
							<p class="<?= $warna['text-warna'] ?>"><?= $profile['deskripsi'] ?></p>
						<?php endforeach ?>
					</div>
					<div class="container-fluid mt-3 mb-3">
						<div class="<?= $warna['text-warna'] ?>">
							<h2>EDUCATION</h2>
						</div>
						<table class="table <?= $warna['text-warna'] ?>">
							<thead></thead>
							<tbody>
								<?php foreach ($educations as $edu) : ?>
									<tr>
										<td width="5%"><i class="fa fa-graduation-cap"> </i></td>
										<td><?= $edu['sejak'] ?> - <?= $edu['sampai'] ?></td>
										<td><?= $edu['nama'] ?></td>
										<td><?= $edu['tingkat'] ?></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>

					<div class="container-fluid mt-3 mb-3">
						<div class="<?= $warna['text-warna'] ?>">
							<h2>SKILLS</h2>
						</div>
						<table class="table <?= $warna['text-warna'] ?>">
							<thead></thead>
							<tbody>
								<?php foreach ($skills as $skill) : ?>
									<tr>
										<td width="5%"><i class="fas fa-circle"></i></td>
										<td><?= $skill['nama'] ?></td>
										<td><?= $skill['scale'] ?>/100</td>
										<td width="15%"><?= $skill['pengalaman'] ?> TAHUN</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>

					<div class="container-fluid mt-3 mb-3">
						<div class="<?= $warna['text-warna'] ?>">
							<h2>EXPERIENCE</h2>
						</div>
						<table class="table <?= $warna['text-warna'] ?>">
							<thead></thead>
							<tbody>
								<?php foreach ($experiences as $exp) : ?>

									<tr>
										<td ><i class="fa fa-briefcase"></i></td>
										<td ><?= $exp['sejak'] ?> <br> <?= $exp['sampai'] ?></td>
										<td ><?= $exp['nama'] ?></td>
										<td ><?= $exp['jabatan'] ?></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>


					<div class="container-fluid mt-3 mb-5">
						<div class="<?= $warna['text-warna'] ?>">
							<h2>ACHIEVEMENT</h2>
						</div>
						<table class="table <?= $warna['text-warna'] ?>">
							<thead></thead>
							<tbody>
								<?php foreach ($achievements as $ach) : ?>

									<tr>
										<td width="5%"><i class="fa fa-medal "></i></td>
										<td><?= $ach['tahun'] ?></td>
										<td><?= $ach['nama'] ?></td>
										<td> <?= $ach['lembaga'] ?></td>

									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>