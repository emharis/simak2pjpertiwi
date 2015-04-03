@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SUB
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabel data sub</h3>
            <a href="master/sub/new" class="pull-right btn btn-success"><i class="fa fa-plus"></i> &nbsp;&nbsp;Tambah</a>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Koordinator Petani</th>
                        <th>Area</th>
                        <th>Petani Anggota</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>SUB_SMP01</td>
                        <td>Toni</td>
                        <td>Semampir</td>
                        <td>
                            <a class="btn btn-primary btn-sm">6</a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sub/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SUB_LRB01</td>
                        <td>Saipul</td>
                        <td>Lirboyo</td>
                        <td>
                            <a class="btn btn-primary btn-sm">5</a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sub/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>SUB_SDM01</td>
                        <td>Tophah</td>
                        <td>Sidomulyo</td>
                        <td>
                            <a class="btn btn-success btn-sm">atur anggota petani</a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sub/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>SUB_GOR01</td>
                        <td>Gatot</td>
                        <td>GOR</td>
                        <td>
                            <a class="btn btn-success btn-sm">atur anggota petani</a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sub/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

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