<br><br><br><br><br><br>
<div class="container mt-10">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header">
                    <h2>Masukkan Data</h2>
                </div>
                <br>
                <div class="card-body">
                    <?php if(validation_errors() ) :?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors();?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="invoice">No. Invoice</label>
                            <input type="text" name="invoice" class="form-control" id="invoice" placeholder="No. Invoice">
                        </div>
                        <div class="form-group">
                            <label for="penerima">Penerima</label>
                            <input type="text" name="penerima" class="form-control" id="penerima" placeholder="Nama Penerima">
                        </div>
                        <div class="form-group">
                            <label for="pengirim">Pengirim</label>
                            <input type="text" name="pengirim" class="form-control" id="pengirim" placeholder="Nama Pengirim">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="textarea" name="alamat" class="form-control" id="alamat" placeholder="Alamat Penerima">
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" class="form-control" id="kota" placeholder="Kota Tujuan">
                        </div>
                        <div class="form-group">
                            <label for="kilat">Deskripsi</label>
                            <input type="textarea" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi Barang">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" id="status" placeholder="Status">
                        </div>
                        <button class="btn btn-primary float-right" type="submit" name="tambah">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>