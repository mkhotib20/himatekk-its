
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
                    <input type="text" placeholder="Judul" name="judul" class="form-control" >
                  </div>
                  <div class="form-group">
                    <input id="imgInp" type="file" placeholder="Judul" class="form-control" name="gambar">
                  </div>
                  <center><img id="blah" alt="your cover image" style="width: 50%" src=""></center><br>
                  <div class="form-group">
                    <textarea name="konten" id="edit" style="margin-top: 30px;" placeholder="Type some text"><p>Cobaa</p></textarea>
                  </div>
                  <br>
                  <div class="form-group">
                    <input type="submit" value="Terbitkan" class="btn btn-success pull-right">
                  </div>
                </form>
              </div>
            </div>
          </div>
         
        </div>
        
<?php include 'footer.php'; ?>