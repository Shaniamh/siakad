<div class="content-wrapper">
    <section class="content">
    <?php foreach ($jurusan as $jrs) { ?>
    <form method="post" action="<?php echo base_url().'jurusan/update' ?>" role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                    <input type="number" name="id" class="form-control" id="id" value="<?php echo $jrs->id ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Jurusan</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $jrs->nama ?>">
                  </div>
                  <div class="form-group">
                    <label for="akreditasi">Akreditasi</label>
                    <input type="text" name="akreditasi" class="form-control" id="akreditasi" value="<?php echo $jrs->akreditasi ?>">
                  </div>  

                   <div class="form-group">
                    <label for="kepala_jurusan">Nama kepala jurusan</label>
                    <input type="text" name="kepala_jurusan" class="form-control" id="kepala_jurusan" value="<?php echo $jrs->kepala_jurusan ?>">
                  </div> 

              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
    <?php } ?>
    </section>
</div>