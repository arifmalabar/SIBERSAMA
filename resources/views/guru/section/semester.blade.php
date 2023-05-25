<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-calendar"></i>
                Data Semester
            </h3>
            <div class="card-tools">
                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-semester">
                    <i class="fa fa-plus"></i>Tambah Data Semester
                </button>
                @include('guru.modal.modal_tambah_semester')
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Semester</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1 @endphp
                @foreach($data_pangkat as $pk)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ "SEMESTER ".$pk->semester }}</td>
                    <td>
                        <center>
                            <a class="btn btn-sm btn-outline-danger btn_del" href="/hapussemester/{{ $pk->semester }}" ><i class="fa fa-trash"></i></a>&nbsp;
                            <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-semester-edit{{ $pk->semester }}"><i class="fa fa-edit"></i></button>
                        </center>
                    </td>
                    @include('guru.modal.modal_edit_semester')
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
