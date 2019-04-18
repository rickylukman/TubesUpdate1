<div class="container">
  <div class="box">
    <h2>Data Ongkir</h2>
    <hr> 
    <div class="row">
      <div class="col-md-6">
        <a href="<?= base_url(); ?>Admin/tambahkota" class="btn btn-primary">TAMBAH DAFTAR KOTA</a>
      </div>
    </div>
    <br><br>
    <table class="table table-bordered" id="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Kota</th>
          <th>Reguler</th>
          <th>Extra</th>
          <th>Kilat</th>
          <th>Edit</th>
          <th>Hapus</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($data as $d ) {?>
        <tr>
          <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
          <form action="">
            <td><?php echo $no++ ?></td>
            <td><?php echo $d->kota ?></td>
            <td>Rp <?php echo $d->reguler ?>/kg</td>
            <td>Rp <?php echo $d->extra ?>/kg</td>
            <td>Rp <?php echo $d->kilat ?>/kg</td>
            <!-- BUTTON EDIT MAHASISWA -->
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->kota ?>"><i class="fas fa-user-edit"></i></button></td>
            <!-- BUTTON HAPUS - ISI LENGKAPI BUTTON INI -->
            <td><a href="<?php echo site_url("Admin/hapuskota/" . $d->kota);?>" class="btn btn-danger" onclick="return confirm('Delete content?');">Delete</a></td>
          </form>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Edit Resi -->

<?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->kota ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA ONGKIR</h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
          <form method="post" action="<?php echo site_url("Admin/editongkir");?>">
            <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="invoice" name="kota" value="<?php echo $d->kota ?>"  required>
            <div class="form-group">
              <label for="formGroupExampleInput">Reguler</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Reguler" name="reguler"  value="<?php echo $d->reguler?>" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Extra</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Extra" name="extra"  value="<?php echo $d->extra?>" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">kilat</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kilat" name="kilat"  value="<?php echo $d->kilat?>" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan" onclick="return confirm('Ubah Data?');">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>

</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
</html>
