@extends('partials.master')

@section('styles')
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit data pinjam tanam
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div >
        <form role="form" action="pjtanam/new" method="POST">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header">
                <!--<h3 class="box-title">Input data agenda tanam </h3>-->
                <a  class="btn btn-warning pull-right" href="pjtanam" ><i class="fa fa-angle-double-left"></i> Kembali</a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Periode Tanam</td>
                            <td>
                                <input readonly type="text" name="periode" value="Periode I Tahun 2015" class="col-md-4"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>
                                <input readonly type="text" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask class="col-md-4" placeholder="dd/mm/yyyy" value="{{date('d/m/Y')}}" />
                            </td>
                        </tr>
                        <tr>
                            <td>Petani</td>
                            <td>
                                <input readonly type="text" name="ptn" value="Toni" class="col-md-4"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah (Rp)</td>
                            <td>
                                <input type="text" name="jumlah" class="col-md-4 text-right" value="7.500.000"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>
                                <textarea name="ket" class="col-md-4"  ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a class="btn btn-primary">Simpan</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        
<!--        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Pinjaman Benih</h3>               
            </div> /.box-header 
            <div class="box-body">
                <div class="form-group has-success">
                        <div class="row">
                            <div class="col-xs-4"><label>BENIH BETINA</label></div>
                            <div class="col-xs-4"><label>Varietas</label></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                </div> /.input group                         
                            </div>
                            <div class="col-xs-4">
                                <select class="form-control" name="periode">
                                    <option>Varietas I</option>
                                    <option>Varietas II</option>
                                    <option>Varietas III</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label>Jumlah (kg)</label>
                        <div class="row"> 
                            <div class="col-xs-4">
                                <input type="text" name="jumlahbenih" class="form-control text-right" />
                            </div>
                            <div class="col-xs-4">
                                <input type="text" name="hargabenih" value="@Rp. 3.000" class="form-control text-right" />
                            </div>
                            <div class="col-xs-4">
                                <input type="text" name="total-harga" readonly class="form-control text-right" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <div class="row">
                            <div class="col-xs-4"><label>BENIH JANTAN</label></div>
                            <div class="col-xs-4"><label>Varietas</label></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                </div> /.input group                         
                            </div>
                            <div class="col-xs-4">
                                <select class="form-control" name="periode">
                                    <option>Varietas I</option>
                                    <option>Varietas II</option>
                                    <option>Varietas III</option>
                                </select>
                            </div>
                        </div>                   
                    </div>
                    <div class="form-group has-warning">
                        <label>Jumlah (kg)</label>
                        <div class="row"> 
                            <div class="col-xs-4">
                                <input type="text" name="jumlahbenih" class="form-control text-right" />
                            </div>
                            <div class="col-xs-4">
                                <input type="text" name="hargabenih" value="@Rp. 3.000" class="form-control text-right" />
                            </div>
                            <div class="col-xs-4">
                                <input type="text" name="total-harga" readonly class="form-control text-right" />
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </div>
        </div>-->
        
        </form>
    </div>

    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
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
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        $('input[name=petani]').focus(function () {
            showModalPetani();
        });
        $('#btn-cari-petani').click(function (e) {
            showModalPetani();
        });

        function showModalPetani() {
            $('.modal').modal();
        }
        ;

        $('input[name=jumlahbenih]').keyup(function (e) {
            calculateTotalHarga();
        });
        $('input[name=hargabenih]').keyup(function (e) {
            calculateTotalHarga();
        });

        function calculateTotalHarga() {
            var jumlah = $('input[name=jumlahbenih]').val();
            var hargasatuan = $('input[name=hargabenih]').val();
            hargasatuan = hargasatuan.replace(/[Rp]/g, "");
            hargasatuan = hargasatuan.replace(/[.]/g, "");
            hargasatuan = hargasatuan.replace(/[@]/g, "");
            hargasatuan = hargasatuan.replace(/\s\s+/g, "");
//            hargasatuan = hargasatuan.replace('','');
//            hargasatuan = hargasatuan.replace('.','');
//            hargasatuan = hargasatuan.replace('@','');
//            alert(hargasatuan);
            var totalharga = hargasatuan * jumlah;
            $('input[name=total-harga]').val(totalharga);
        }

    });
</script>
@stop