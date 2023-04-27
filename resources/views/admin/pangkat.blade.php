@extends('template/main')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kepangkatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kelas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main content -->
        <section class="col-md-12 connectedSortable ui-sortable">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-info pull-left"><i class="fa fa-plus"></i> Pangkat</button>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    
                    <div class="modal fade" id="modal-default">
                      <form action="" method="post">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Tambah Data Pagkat</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label>Nama Kelas</label>
                                        <input type="text" onkeyup="gede()" id="nama" name="kelas" class="form-control" placeholder="Nama Jurusan">
                                      </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Mapel</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                      </form>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <table id="example2" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Kode Pangkat</th>
                          <th>Nama Pangkat</th>
                          <th>OPSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach($data_pangkat as $key)
                        <tr>
                            <td>{{ $no++; }}</td>
                            <td>{{ $key->kode_pangkat; }}</td>
                            <td>{{ $key->pangkat; }}</td>
                            <td><button type="button" data-toggle="modal" data-target="#modal-edit" class="btn btn-outline-warning btn-small"><i class="fa fa-edit"></i></button>&nbsp;<a type="button" href="" class="btn btn-outline-danger btn-small btn-hapus"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-edit">
                            <form action="" method="post">
                               <div class="modal-dialog">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h4 class="modal-title">Edit Data Jurusan</h4>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                     </button>
                                   </div>
                                   <div class="modal-body">
                                   <div class="row">
                                           <div class="col-sm-6">
                                             <!-- text input -->
                                             <div class="form-group">
                                               <label>Nama Kelas</label>
                                               <input type="text" value="" name="kelas" class="form-control" placeholder="Nama Jurusan">
                                             </div>
                                           </div>
                                           <div class="col-sm-6">
                                             <!-- text input -->
                                             <div class="form-group">
                                               <label>Jurusan</label>
                                               <select class="form-control" name="jurusan">
                                                 <option value="0">Pilih Jurusan</option>
                                                     <option value="" selected></option>
                                                   
                                               </select>
                                             </div>
                                           </div>
                                         </div>
                                   </div>
                                   <div class="modal-footer justify-content-between">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i> Mapel</button>
                                   </div>
                                 </div>
                                 <!-- /.modal-content -->
                               </div>
                           </form>
                         </div>
                        @endforeach
                        
                        
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
        </section>
        
        <!-- /.content -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection