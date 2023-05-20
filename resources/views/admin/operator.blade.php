@extends('admin.template.main')
@section('content')
    @include('admin.content_dashboard.header')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Operator</h3>
                            <div class="card-tools">
                                <button class="btn btn-sm btn-success" data-target="#modal-operator-tambah" data-toggle="modal">
                                    <i class="fa fa-user-plus"></i> Tambah Operator
                                </button>
                                @include("admin.modal.modal_operator_tambah")
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama Operator</th>
                                    <th>Username</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach($data_operator as $operator)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $operator->NIP }}</td>
                                        <td>{{ $operator->nama }}</td>
                                        <td>{{ $operator->username }}</td>
                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-outline-danger btn_del" href="/hapusoperator/{{ $operator->NIP }}" ><i class="fa fa-trash"></i></a>&nbsp;
                                                <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-operator-edit{{ $operator->NIP }}"><i class="fa fa-edit"></i></button>
                                            </center>
                                        </td>
                                    </tr>
                                    @include('admin.modal.modal_operator_edit')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
