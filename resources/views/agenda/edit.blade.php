@extends('partials.master')

@section('styles')
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Agenda Tanam
    </h1>
    <div class="breadcrumb" ><h3 style="margin: 0;padding: 0;" id="clock"></h3></div>
</section>

<!-- Main content -->
<section class="content">

    <div >
        <form role="form" action="agenda/new" method="POST">
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Edit data agenda tanam </h3>
                    <a  class="btn btn-warning pull-right" href="agenda" ><i class="fa fa-angle-double-left"></i> Kembali</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Periode Tanam</label>
                        <select class="form-control" name="periode">
                            <option>Periode I tahun 2015</option>
                            <option>Periode II tahun 2015</option>
                            <option>Periode III tahun 2015</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Petani</label>
                        <div class="input-group">
                            <input type="text" name="petani" class="form-control" />
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-flat" type="button" id="btn-cari-petani"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Lahan</label>
                        <select class="form-control" name="periode">
                            <option>Lahan 1 - 50ru</option>
                            <option>Lahan 2 - 60ru</option>
                            <option>Lahan 3 - 70ru</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Luas lahan yang digunakan (ru)</label>
                        <div class="row"> 
                            <div class="col-xs-4">
                                <input type="text" name="luaslahan" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Pinjaman Benih</h3>               
                        </div><!-- /.box-header -->
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
                                        </div><!-- /.input group -->                        
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
                                        </div><!-- /.input group -->                        
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
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Tanggal Tanam Benih</h3>               
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-xs-6"><label>Benih Betina</label></div>
                                    <div class="col-xs-6"><label>Benih Jantan</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->                        
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->                        
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Status Masa Tanam</h3>               
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-info text-center">
                                <h3>Masa Tanam Pengairan & Pemupukan</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Estimasi Waktu Agenda Tanam</h3>               
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-striped table-responsive">
                                <thead class="label-default">
                                    <tr>
                                        <th class="text-center">Cabut Bunga</th>
                                        <th class="text-center">Babat Jantan</th>
                                        <th class="text-center">Panen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td>01-01-2015</td>
                                        <td>05-01-2015</td>
                                        <td>01-01-2015</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Realisasi Waktu Agenda Tanam</h3>               
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-striped table-responsive">
                                <thead class="label-default">
                                    <tr>
                                        <th class="text-center">Cabut Bunga</th>
                                        <th class="text-center">Babat Jantan</th>
                                        <th class="text-center">Panen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td>
                                            <div class="input-group col-md-12">
                                                <input type="text" name="petani" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary btn-flat" type="button" ><i class="fa fa-save"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group col-md-12">
                                                <input type="text" name="petani" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary btn-flat" type="button" ><i class="fa fa-save"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group col-md-12">
                                                <input type="text" name="petani" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary btn-flat" type="button" ><i class="fa fa-save"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

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