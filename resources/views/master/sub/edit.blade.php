@extends('partials.master')

@section('styles')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit data sub
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div >
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Edit data sub </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="master/sub/new" method="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" class="form-control" placeholder="Kode" value="SUB_SMP01"/>
                    </div>
                    <div class="form-group">
                        <label>Koordinator Petani</label>
                    </div>
                    <div class="input-group">
                        <input name="petani" type="text" class="form-control" placeholder="Koordinator Petani" value="Toni"/>
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-flat" id="btn-show-modal-petani" type="button"><i class="fa fa-search" ></i></button>
                        </span>
                    </div><!-- /input-group -->
                    <div class="form-group">
                        <label>Area</label>
                        <input type="text" class="form-control" placeholder="Area" value="Semampir"/>
                    </div>
                    <div class="box-footer">
                        <a  class="btn btn-warning" href="master/sub" >Kembali</a>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        
         <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Data Petani Anggota SUB : SUB_SMP01, Semampir</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="master/lahan/new" method="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <!-- text input -->
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td >
                                    Input data petani anggota
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                    <input name="petani" type="text" class="form-control" placeholder="Petani">
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
                                <th>Petani</th>
                                <th>Alamat</th>
                                <th>Luas Lahan (ru)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">1</td>
                                <td>Rakhmat</td>
                                <td>RT 1, RW 1, No 15, Ngino, Pleman, Kediri</td>
                                <td class="text-right">75</td>
                                <td>
                                    <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">2</td>
                                <td>Budi</td>
                                <td>RT 4, RW 1, No 70, Ngino, Pleman, Kediri</td>
                                <td class="text-right">75</td>
                                <td>
                                    <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
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
    
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cari data petani</h4>
                </div>
                <div class="modal-body">
                    <table id="example1" class="table table-bordered table-striped table-hover datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th ></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Toni</td>
                                <td>RT 5 RW 2 Semampir, Semen, Kediri</td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-primary" data-dismiss="modal">Pilih</a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Saipul</td>
                                <td>RT 1 RW 1 Sidomulyo, Semen, Kediri</td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-primary" data-dismiss="modal">Pilih</a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tophah</td>
                                <td>RT 2 RW 1 Selopanggung, Semen, Kediri</td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-primary" data-dismiss="modal">Pilih</a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Gatot</td>
                                <td>RT 10 RW 2 Bobang, Semen, Kediri</td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-primary" data-dismiss="modal">Pilih</a>
                                    
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Pilih</button>-->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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

    $(document).ready(function () {

        /**
         * Show dialog modal data petani
         */
        $('input[name=petani]').focus(function () {
            showModalPetani();
        });
        $('#btn-show-modal-petani').click(function () {
            showModalPetani();
        });
        function showModalPetani() {
            $('.modal').modal();
        }
    });
</script>
@stop