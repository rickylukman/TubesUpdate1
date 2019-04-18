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
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" class="form-control" id="kota" placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <label for="reguler">Reguler</label>
                            <input type="number" name="reg" class="form-control" id="reg" placeholder="Reguler">
                        </div>
                        <div class="form-group">
                            <label for="extra">Extra</label>
                            <input type="number" name="x" class="form-control" id="x" placeholder="Extra">
                        </div>
                        <div class="form-group">
                            <label for="kilat">Kilat</label>
                            <input type="number" name="kilat" class="form-control" id="kilat" placeholder="Kilat">
                        </div>
                        <button class="btn btn-primary float-right" type="submit" name="tambah">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>