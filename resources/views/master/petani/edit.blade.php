@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit data petani 
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div >
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Edit data petani  </h3>
                <a  class="btn btn-warning pull-right" href="master/petani" ><i class="fa fa-angle-double-left"></i> Kembali</a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="master/petani/new" method="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <!-- text input -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="col-sm-8">
                                    <div class="form-group">
                                        <label>Kode</label>
                                        <input readonly type="text" class="form-control" placeholder="Kode" value="PTN01"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" value="Toni"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat/Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control" placeholder="Tempat Lahir" value="Kediri">
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input value="22/02/1972" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask placeholder="hh/bb/tttt"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jkel" class="form-control">
                                            <option selected>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                </td>
                                <td >
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="input-foto" />
                                        <br>
                                        <img src="img/petani/dsc_7337.jpg" id="img-foto" style="max-height: 200px;" class="col-sm-12" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label>Alamat Kabupaten/Kecamatan/Desa/Dusun</label>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <select name="kabupaten" class="form-control">
                                                    <option>Kediri</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3">
                                                <select name="kecamatan" class="form-control">
                                                    <option>Semen</option>
                                                    <option>Mojo</option>
                                                    <option>Kras</option>
                                                    <option>Ngadiluwih</option>
                                                    <option>Kandat</option>
                                                    <option>Wates</option>
                                                    <option>Ngancar</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3">
                                                <select name="desa" class="form-control">
                                                    <option>Semampir</option>
                                                    <option>Sidomulyo</option>
                                                    <option>Puhrubuh</option>
                                                    <option>Selopanggung</option>
                                                    <option>Kanyoran</option>
                                                    <option>Puhsarang</option>
                                                    <option>Bobang</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3">
                                                <select name="dusun" class="form-control">
                                                    <option>Semampir</option>
                                                    <option>Sidomulyo</option>
                                                    <option>Puhrubuh</option>
                                                    <option>Selopanggung</option>
                                                    <option>Kanyoran</option>
                                                    <option>Puhsarang</option>
                                                    <option>Bobang</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->                                    
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label>RT/RW/Nomor</label>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <input value="5" type="text" class="form-control" placeholder="RT">
                                            </div>
                                            <div class="col-xs-4">
                                                <input value="2" type="text" class="form-control" placeholder="RW">
                                            </div>
                                            <div class="col-xs-4">
                                                <input value="32" type="text" class="form-control" placeholder="Nomor">
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->                                    
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label>KTP</label>
                                        <input value="0123362408060005" type="text" class="form-control" placeholder="KTP"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label>Telp</label>
                                        <input value="085363696568" type="text" class="form-control" placeholder="Telp"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="">
                                        <a  class="btn btn-warning" href="master/petani" ><i class="fa fa-angle-double-left"></i> Kembali</a>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                    </table>


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