@extends('partials.master')

@section('styles')

@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Lahan Garapan Petani
    </h1>
    <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Master Data</li>
        <li class="active"><a href="master/lahan">Lahan</a></li>
        <li class="active">Data Lahan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div >
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Data Petani</h3>
                <a  class="btn btn-warning pull-right" href="master/lahan" ><i class="fa fa-angle-double-left"></i> Kembali</a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="master/lahan/new" method="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <!-- text input -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="col-sm-3">
                                    <div class="form-group">
                                        <label>Kode Petani</label>
                                        <input readonly type="text" class="form-control" placeholder="Kode" value="PTN01"/>
                                    </div>                                    
                                </td>
                                <td class="col-sm-5">
                                    <div class="form-group">
                                        <label>Nama Petani</label>
                                        <input type="text" class="form-control" placeholder="Nama" value="Toni"/>
                                    </div>
                                </td>
                                <td rowspan="3">
                                    <div class="form-group">
                                        <img src="img/petani/dsc_7337.jpg" id="img-foto" style="max-height: 200px;" class="col-sm-12" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input value="RT 5 RW 2 Semampir, Semen, Kediri" type="text" class="form-control" >
                                    </div><!-- /.box-body -->
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label>Total Luas Lahan Garapan (ru)</label>                                        
                                        
                                        <div class="form-control">
                                            <b>35 RU</b>
                                        </div>
                                    </div><!-- /.box-body -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td></td>
                                <td class="text-right">
                                    <a id="btn-show-biodata" class="btn btn-primary"><i class="fa fa-eye"></i> Biodata Petani Lengkap</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Data Lahan Garapan</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="master/lahan/new" method="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <!-- text input -->
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td colspan="7">
                                    Input data lahan garapan
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                    <select name="kabupaten" class="form-control">
                                                    <option>Kediri</option>
                                                </select>
                                </td>
                                <td>
                                    <select name="kecamatan" class="form-control">
                                                    <option>Semen</option>
                                                    <option>Mojo</option>
                                                    <option>Kras</option>
                                                    <option>Ngadiluwih</option>
                                                    <option>Kandat</option>
                                                    <option>Wates</option>
                                                    <option>Ngancar</option>
                                                </select>
                                </td>
                                <td>
                                    <select name="desa" class="form-control">
                                                    <option>Bulu</option>
                                                    <option>Sidomulyo</option>
                                                    <option>Puhrubuh</option>
                                                    <option>Selopanggung</option>
                                                    <option>Kanyoran</option>
                                                    <option>Puhsarang</option>
                                                    <option>Bobang</option>
                                                </select>
                                </td>
                                <td>
                                    <select name="dusun" class="form-control">
                                                    <option>Bulu</option>
                                                    <option>Sidomulyo</option>
                                                    <option>Puhrubuh</option>
                                                    <option>Selopanggung</option>
                                                    <option>Kanyoran</option>
                                                    <option>Puhsarang</option>
                                                    <option>Bobang</option>
                                                </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control text-right" placeholder="Luas (ru)" />
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Keterangan" />
                                </td>
                                <td>
                                    <a class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Alamat</th>
                                <th>Luas (ru)</th>
                                <th>Ketarangan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">1</td>
                                <td>Ngino, Pleman, Kediri</td>
                                <td class="text-right">5</td>
                                <td>Sewan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right">2</td>
                                <td>Puhsarang, Semen, Kediri</td>
                                <td class="text-right">15</td>
                                <td>Sewan</td>
                                <td></td>
                            </tr>
                            <tr style="background-color: whitesmoke;border-top: 2px solid darkgrey;">
                                <td colspan="2" class="text-right" ><b>TOTAL LUAS LAHAN</b></td>
                                <td class="text-right"><b>20</b></td>
                                <td></td>
                                <td></td>
                            </tr>

<!--                            <tr>
                                <td colspan="2">
                                    <div class="">
                                        <a  class="btn btn-warning" href="master/lahan" ><i class="fa fa-angle-double-left"></i> Kembali</a>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </td>
                            </tr>-->
                        </tbody>
                    </table>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>

</section><!-- /.content -->

<div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Biodata Petani</h4>
                </div>
                <div class="modal-body">
                    <table id="example1" class="table table-bordered ">                        
                        <tbody>
                            <tr>
                                <td class="text-bold">Kode</td>
                                <td>PTN01</td>
                                <td rowspan="3">
                                    <img src="img/petani/dsc_7337.jpg" id="img-foto" width="100%" class="col-sm-12" >
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold">Nama</td>
                                <td>Toni</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Tempat/Tanggal Lahir</td>
                                <td>Kediri, 22/02/1972</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Jenis Kelamin</td>
                                <td colspan="2">Laki-laki</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Alamat</td>
                                <td colspan="2">RT 5, RW 2, No 32, Semampir/Semampir, Semen, Kediri</td>
                            </tr>
                            <tr>
                                <td class="text-bold">KTP</td>
                                <td colspan="2">0123362408060005</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Telp</td>
                                <td colspan="2">085363696568</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                    <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Pilih</button>-->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@stop

@section('scripts')
<!-- DATA TABES SCRIPT -->
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        $('#btn-show-biodata').click(function(){
           $('.modal').modal();
        });
    });
</script>
@stop