@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Lahan
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabel data lahan</h3>
            <!--<a href="master/lahan/new" class="pull-right btn btn-success"><i class="fa fa-plus"></i> &nbsp;&nbsp;Tambah</a>-->
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Petani</th>
                        <th>Petani</th>
                        <th>Luas Lahan (ru)</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PTN01</td>
                        <td>Toni</td>
                        <td>30</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PTN01</td>
                        <td>Budi</td>
                        <td>50</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PTN01</td>
                        <td>Ridwan</td>
                        <td>25</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>PTN01</td>
                        <td>Sutikno</td>
                        <td>15</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>PTN01</td>
                        <td>Priyantomo</td>
                        <td>60</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>PTN01</td>
                        <td>Marijan</td>
                        <td>21</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>PTN01</td>
                        <td>Roni</td>
                        <td>10</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>PTN01</td>
                        <td>Rakhmad</td>
                        <td>25</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>PTN01</td>
                        <td>Rohman</td>
                        <td>13</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>PTN01</td>
                        <td>Amin</td>
                        <td>10</td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary" href="master/lahan/edit/1"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode Petani</th>
                        <th>Petani</th>
                        <th>Luas Lahan (ru)</th>
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