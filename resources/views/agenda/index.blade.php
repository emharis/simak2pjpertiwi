@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Agenda Tanam
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tabel data agenda tanam</h3>
            <a href="agenda/new" class="pull-right btn btn-success"><i class="fa fa-plus"></i> &nbsp;&nbsp;Tambah</a>
        </div><!-- /.box-header -->
        <div class="box-body">
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
                </tbody>
            </table>
            <br/>
            <table  class="table table-bordered table-striped table-responsive">
                <thead class="label-default">
                    <tr >
                        <th rowspan="2" class="text-center">No</th>
                        <th rowspan="2" class="text-center">Petani</th>
                        <th colspan="2" class="text-center">Pinjam Benih</th>
                        <th colspan="2" class="text-center">Tanam Benih</th>
                        <th colspan="4" class="text-center" >Estimasi Waktu</th>
                        <th rowspan="2" class="text-center">Status</th>
                        <th rowspan="2" class="text-center"></th>
                    </tr>
                    <tr>
                        <th class="text-center">Betina</th>
                        <th class="text-center">Jantan</th>
                        <th class="text-center">Betina</th>
                        <th class="text-center">Jantan</th>
                        <th class="text-center">Tanam</th>
                        <th class="text-center"> Cabut Bunga</th>
                        <th class="text-center">Babat Jantan</th>
                        <th class="text-center">Panen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="label-primary">
                        <td>1</td>
                        <td>Toni</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Masa Tanam</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="agenda/edit"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-primary">
                        <td>2</td>
                        <td>Budi</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Masa Tanam</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-primary">
                        <td>3</td>
                        <td>Rachmat</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Masa Tanam</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-success">
                        <td>4</td>
                        <td>Rijal</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Cabut Kembang</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-success">
                        <td>5</td>
                        <td>Rafid</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Cabut Kembang</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-waring">
                        <td>6</td>
                        <td>Supardi</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Babat Jantan</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-waring">
                        <td>7</td>
                        <td>Robi</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Babat Jantan</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-waring">
                        <td>8</td>
                        <td>Rojali</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Babat Jantan</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-danger">
                        <td>9</td>
                        <td>Adiono</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Masa Panen</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                    <tr class="label-danger">
                        <td>10</td>
                        <td>Lukito</td>
                        <td>01-01-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>05-01-2015</td>                        
                        <td>20-02-2015</td>
                        <td>20-03-2015</td>
                        <td>20-04-2015</td>
                        <td>20-05-2015</td>
                        <td>Masa Panen</td>
                        <td class="text-center"><a class="btn btn-xs btn-default" href="#"><i class="fa fa-folder-open" ></i></a></td>
                    </tr>
                </tbody>
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
        
    });
</script>
@stop