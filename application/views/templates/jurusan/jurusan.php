 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Jurusan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Jurusan</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
      <div class="container-fluid">
      <button class="btn btn-primary" style="margin-bottom:2%;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Jurusan</button>
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- <h3>heiooo</h3> -->
              
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table">
                  <thead>                  
                    <tr>
                      <th>ID</th>
                      <th>NAMA JURUSAN</th>
                      <th>AKREDITASI</th>
                      <th>KEPALA JURUSAN</th>
                      <th colspan="3">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($jurusan as $jrs) : ?>
                    <tr>
                      <td><?php echo $jrs->id ?></td>
                      <td><?php echo $jrs->nama ?></td>
                      <td><?php echo $jrs->akreditasi ?></td>
                      <td><?php echo $jrs->kepala_jurusan ?></td>
                      <td onclick="javascript: return confirm('Anda yakin hapus data?')"><?php echo anchor('jurusan/hapus_data/'.$jrs->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                      <td><?php echo anchor('jurusan/edit/'.$jrs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- heiyo -->
            </div>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form input data jurusan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url().'jurusan/tambah_data' ?>" role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                    <input type="number" name="id" class="form-control" id="id" placeholder="Masukkan ID">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Jurusan</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                  </div>
                  
                  <div class="form-group">
                    <label for="akreditasi">Akreditasi</label>
                    <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Masukkan Akreditasi">
                  </div>  

                   <div class="form-group">
                    <label for="kepala_jurusan">Kepala Jurusan</label>
                    <input type="text" name="kepala_jurusan" class="form-control" id="kepala_jurusan" placeholder="Masukkan nama kepala jurusan">
                  </div> 

              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
              </form>

      </div>
    </div>
  </div>
</div>

  </div>
  <!-- /.content-wrapper -->  