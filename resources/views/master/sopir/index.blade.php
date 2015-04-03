@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Sopir
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabel data sopir</h3>
            <a href="master/sopir/new" class="pull-right btn btn-success"><i class="fa fa-plus"></i> &nbsp;&nbsp;Tambah</a>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>SPR01</td>
                        <td>Toni</td>
                        <td>RT 5 RW 2 Semampir, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SPR02</td>
                        <td>Budi</td>
                        <td>RT 5 RW 2 Bobang, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>SPR03</td>
                        <td>Ridwan</td>
                        <td>RT 5 RW 2 Semampir, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>SPR04</td>
                        <td>Sutikno</td>
                        <td>RT 5 RW 2 Kanyoran, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>SPR05</td>
                        <td>Priyantomo</td>
                        <td>RT 5 RW 2 Bobang, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>SPR06</td>
                        <td>Marijan</td>
                        <td>RT 5 RW 2 Kanyoran, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>SPR07</td>
                        <td>Roni</td>
                        <td>RT 5 RW 2 Puhrubuh, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>SPR08</td>
                        <td>Rakhmad</td>
                        <td>RT 5 RW 2 Sidomulyo, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>SPR09</td>
                        <td>Rohman</td>
                        <td>RT 5 RW 2 Puhrubuh, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>SPR10</td>
                        <td>Amin</td>
                        <td>RT 5 RW 2 Sidomulyo, Semen, Kediri</td>
                        <td>085-332-336-669</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/sopir/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Tahun</th>
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