
<?php include 'header.php'; ?>
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tulis Berita</h6>
            </div>
            <div class="card-body">
              <div id="editor">
                <form action="test.php" method="post">
                  <div class="form-group">
                    <textarea name="konten" id="edit" style="margin-top: 30px;" placeholder="Alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <span class="label">Link 1</span>
                    <input type="text" class="form-control" placeholder="Tujuan" name=""><br>
                    <input type="text" class="form-control" placeholder="Url" name="">
                  </div>
                  <div class="form-group">
                    <span class="label">Link 2</span>
                    <input type="text" class="form-control" placeholder="Tujuan" name=""><br>
                    <input type="text" class="form-control" placeholder="Url" name="">
                  </div>
                  <div class="form-group">
                    <span class="label">Link 3</span>
                    <input type="text" class="form-control" placeholder="Tujuan" name=""><br>
                    <input type="text" class="form-control" placeholder="Url" name="">
                  </div>
                  <br>
                  <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-success pull-right">
                  </div>
                </form>
              </div>
            </div>
          </div>
         
        </div>
        
<?php include 'footer.php'; ?>