<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> History Ubah Jabatan</h3>
	</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Jabatan Lama</th>
						<th>Jabatan Baru</th>
						<th>Waktu</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from log_pegawai");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nip']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['jabatan_lama']; ?>
						</td>
                        <td>
							<?php echo $data['jabatan_baru']; ?>
						</td>
                        <td>
							<?php echo $data['waktu']; ?>
						</td>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->