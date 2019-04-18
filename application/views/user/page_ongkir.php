  <div class="container">
    <div class="box">
      <h2>Data Tarif Ongkir</h2>
      <p>Daftar Tarif Tel-U Logistics</p>            
      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH MAHASISWA</button> -->
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Kota</th>
            <th>Reguler</th>
            <th>Extra</th>
            <th>Kilat</th>
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
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  </body>
    <script type="text/javascript">
      $(document).ready( function () {
          $('#table').DataTable();
      } );
    </script>
  </html>