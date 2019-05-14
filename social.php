
<?php include 'header.php'; ?>
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Social</h6>
            </div>
            <div class="card-body">
              <div id="editor">
                <form action="test.php" method="post">
                  <div class="form-group">
                    <span class="label">Link Line</span>
                    <input type="text" class="form-control" placeholder="Tujuan" name=""><br>
                  </div>
                  <div class="form-group">
                    <span class="label">Link Instagram</span>
                    <input type="text" class="form-control" placeholder="Tujuan" name=""><br>
                  </div>
                  <div class="form-group">
                    <span class="label">Link Facebook</span>
                    <input type="text" class="form-control" placeholder="Tujuan" name=""><br>
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