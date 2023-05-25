<div class="modal fade" id="modal-semester-edit{{ $pk->semester }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Update Semester</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="/editsemester/{{$pk->semester}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Semester</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    </div>
                                    <input type="number" value="{{ $pk->semester }}" placeholder="Masukan Semester" name="semester" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-update"></i> Update Semester</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
