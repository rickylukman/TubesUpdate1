<div class="container">
    <div class="box">
        <h2>BAPAK LO</h2>
        <hr>         
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>Admin/tambahresi" class="btn btn-primary">TAMBAH RESI PENGIRIMAN</a>
            </div>
        </div>
        <br><br>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Invoice</th>
                    <th>Penerima</th>
                    <th>Pengirim</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
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
                        <td><?php echo $d->invoice ?></td>
                        <td><?php echo $d->penerima ?></td>
                        <td><?php echo $d->pengirim ?></td>
                        <td><?php echo $d->alamat ?></td>
                        <td><?php echo $d->kota ?></td>
                        <td><?php echo $d->deskripsi ?></td>
                        <td><?php echo $d->status ?></td>
                        <!-- BUTTON EDIT MAHASISWA -->
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->invoice ?>"><i class="fas fa-user-edit"></i></button></td>
                        <!-- BUTTON HAPUS - ISI LENGKAPI BUTTON INI -->
                        <td><a href="<?php echo site_url("Admin/hapusresi/" . $d->invoice);?>" class="btn btn-danger" onclick="return confirm('Delete content?');">Delete</a></td>
                    </form>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
  </div>

  <!-- Modal Edit Resi -->

<?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->invoice ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT DATA RESI</h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="<?php echo site_url("Admin/editresi");?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="invoice" name="invoice" value="<?php echo $d->invoice ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Status</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Status" name="status"  value="<?php echo $d->status?>" required>
          </div><!-- 
          <div class="form-group">
            <label for="formGroupExampleInput2">Kelas</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kelas" name="kelas" value="<?php echo $d->kelas ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Jurusan</label>
            <select class="form-control" id="formGroupExampleInput2" name="jurusan" required>
            <option value="<?php echo '1'; ?>" selected><?php echo $d->nama_jurusan.' - '.$d->fakultas;  ?></option>
            <?php foreach ($dataJ as $c ) {?>
                <option value="<?php echo '1'; ?>"><?php echo $c->nama_jurusan.' - '.$c->fakultas;  ?></option>
            <?php } ?>
            </select>            
          </div> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan" onclick="return confirm('Ubah Status?');">
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