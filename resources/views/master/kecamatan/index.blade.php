@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Kecamatan
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabel data kecamatan</h3>
            <a href="master/kecamatan/new" class="pull-right btn btn-success"><i class="fa fa-plus"></i> &nbsp;&nbsp;Tambah</a>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kabupaten</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Semen</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mojo</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kras</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ngadiluwih</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Kandat</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Wates</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ngancar</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Puncu</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Plosoklaten</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Gurah</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Pagu</td>
                        <td>Kediri</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/kecamatan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kabupaten</th>
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