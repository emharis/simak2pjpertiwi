@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah data desa
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div >
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Input data baru desa </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="master/desa/new" method="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <select class="form-control" name="kabupaten">
                            <option>Kediri</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control" name="kecamatan">
                            <option>Semen</option>
                            <option>Mojo</option>
                            <option>Kras</option>
                            <option>Ngadiluwih</option>
                            <option>Kandat</option>
                            <option>Wates</option>
                            <option>Ngancar</option>
                            <option>Puncu</option>
                            <option>Plosoklaten</option>
                            <option>Gurah</option>
                            <option>Pagu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Desa</label>
                        <input type="text" class="form-control" placeholder="Nama" required/>
                    </div>
                    <div class="box-footer">
                        <a  class="btn btn-warning" href="master/desa" >Kembali</a>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>

</section><!-- /.content -->

@stop

@section('scripts')
<!-- DATA TABES SCRIPT -->
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>
@stop