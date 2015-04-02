@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pinjaman Tanam
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabel data pinjaman tanam petani</h3>
            <a href="pjtanam/new" class="pull-right btn btn-success"><i class="fa fa-plus"></i> &nbsp;&nbsp;Tambah</a>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-6">
                <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Periode Tanam</td>
                        <td>
                            <select name="periode" class="form-control">
                                <option>Periode I tahun 2015</option>
                                <option>Periode II tahun 2015</option>
                                <option>Periode IIII tahun 2015</option>
                            </select>
                        </td>
                        <td>
                            <a class="btn btn-primary">Tampilkan</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
<!--                    <tr>
                        <td>
                            Filter:
                        </td>
                        <td>
                            <select class="form-control">
                                <option>Terhutang</option>
                                <option>Lunas</option>
                            </select>
                        </td>
                        <td>
                            <a class="btn btn-primary">Filter</a>
                        </td>
                    </tr>-->
                </tbody>
            </table>
            </div>
            
            <div class="col-md-6">
                <table class="table  label-waring">
                    <tr>
                        <td>TERHUTANG :</td>
                        <td class="text-right">Rp. 35.500.000</td>
                    </tr>
                    <tr>
                        <td>LUNAS :</td>
                        <td class="text-right">Rp. 12.500.000</td>
                    </tr>
                    <tr class="label-info">
                        <td><label>SISA TERHUTANG:</label></td>
                        <td class="text-right"><label>Rp. 23.000.000</label></td>
                    </tr>
                </table>
            </div>
            
            <div class="col-md-12">
                <table  class="table table-bordered table-striped table-responsive datatable">
                <thead class="label-default">
                    <tr>
                        <td>No</td>
                        <td>Petani</td>
                        <td>Tanggal</td>
                        <td>Jumlah</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td>1</td>
                        <td>Toni</td>
                        <td>01-25-2015</td>
                        <td>4.500.000</td>
                        <td>Terhutang</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="pjtanam/edit"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-success" >
                        <td>2</td>
                        <td>Rockamat</td>
                        <td>01-25-2015</td>
                        <td>3.500.000</td>
                        <td>Lunas</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="pjtanam/edit"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr >
                        <td>3</td>
                        <td>Amin</td>
                        <td>01-25-2015</td>
                        <td>1.500.000</td>
                        <td>Terhutang</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="pjtanam/edit"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr >
                        <td>4</td>
                        <td>Suparmi</td>
                        <td>01-25-2015</td>
                        <td>2.000.000</td>
                        <td>Terhutang</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="pjtanam/edit"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr >
                        <td>5</td>
                        <td>Aliman</td>
                        <td>01-25-2015</td>
                        <td>1.00.000</td>
                        <td>Terhutang</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="pjtanam/edit"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                </tbody>
            </table>
            </div>
            
            <div class="clearfix"></div>
            
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
        $(".datatable").dataTable();
    });
</script>
@stop