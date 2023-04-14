

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    
                </h2>
            </div>
            <?php 

            $alert = $this->session->flashdata('message');
            if (isset($alert)) {
             ?>
            <div class="alert alert-danger">
                <strong><?php echo $this->session->flashdata('message'); ?></strong>
            </div>
            <?php } ?>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Anomali
                            </h2>
                            <!-- <button type="button" class="btn btn-default waves-effect">DEFAULT</button> -->
                            <br>
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mymodal" data-id="">Tambah Data </button>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Mahasiswa Tanpa Aktivitas</th>
                                            <th>SKS > 24</th>
                                            <th>Tanpa IPK atau No.Seri Ijazah</th>
                                            <th>Domisili Mahasiswa Luar Alamat Kampus</th>
                                            <th>Tanpa isian Nama Ibu Kandung</th>
                                            <th>Mahasiswa Lulus kurang dari  1 Tahun </th>
                                            <th>Dugaan Insert Tanpa Ajuan Tipe 1</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                  <?php  
                                         foreach ($data_anomali as $row) {
 
                                         $mahasiswa_tanpaaktivitas           = $row->mahasiswa_tanpaaktivitas;
                                         $sks_lebih                          = $row->sks_lebih;
                                         $tanpa_ipk_noijazah                 = $row->tanpa_ipk_noijazah;
                                         $domisili_mahasiswa                 = $row->domisili_mahasiswa;
                                         $tanpa_namaibu                      = $row->tanpa_namaibu;
                                         $mahasiswa_lulus                    = $row->mahasiswa_lulus;
                                         $dugaan_insert                      = $row->dugaan_insert;

                                     ?>
                                        <tr>
                                            <td><?php echo $mahasiswa_tanpaaktivitas; ?></td>
                                            <td><?php echo $sks_lebih; ?></td>
                                            <td><?php echo $tanpa_ipk_noijazah; ?></td>
                                            <td><?php echo $domisili_mahasiswa; ?></td>
                                            <td><?php echo $tanpa_namaibu; ?></td>
                                            <td><?php echo $mahasiswa_lulus; ?></td>
                                            <td><?php echo $dugaan_insert; ?></td>
                                            <td>
                                                <center>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                                        <a 
                                                            href="javascript:;"
                                                            data-mahasiswa_tanpaaktivitas="<?php echo $mahasiswa_tanpaaktivitas ?>"
                                                            data-sks_lebih="<?php echo $sks_lebih ?>"
                                                            data-tanpa_ipk_noijazah="<?php echo $tanpa_ipk_noijazah; ?>"
                                                            data-domisili_mahasiswa="<?php echo $domisili_mahasiswa; ?>"
                                                            data-tanpa_namaibu="<?php echo $tanpa_namaibu ?>"
                                                            data-mahasiswa_lulus="<?php echo $mahasiswa_lulus ?>"
                                                            data-dugaan_insert="<?php echo $dugaan_insert ?>"
                                                            data-toggle="modal" data-target="#modal2">
                                                            <button type="button" data-toggle="modal" data-target="#modal3" class="btn bg-blue waves-effect">Update</button>
                                                        </a>
                                                       
                                                    </div>
                                                </center>
                                            </td>
                                            <td><center>
                                                 <a href="cdata_anomali/hapus/<?php echo $mahasiswa_tanpaaktivitas; ?>" class="btn bg-pink waves-effect">Delete</a>
                                                </center>
                                            </td>
                                  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input Data Anomali</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cinput_anomali/input_anomali">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Mahasiswa Tanpa Aktivitas</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mahasiswa_tanpaaktivitas" id="mahasiswa_tanpaaktivitas">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">SKS > 24</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="sks_lebih" id="sks_lebih" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanpa IPK atau No.Seri Ijazah</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="tanpa_ipk_noijazah" id="tanpa_ipk_noijazah" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Domisili Mahasiswa Luar Alamat Kampus</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="domisili_mahasiswa" id="domisili_mahasiswa" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanpa isian Nama Ibu Kandung</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="tanpa_namaibu" id="tanpa_namaibu" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Mahasiswa Lulus kurang dari  1 Tahun</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="mahasiswa_lulus" id="mahasiswa_lulus" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Dugaan Insert Tanpa Ajuan Tipe 1</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="dugaan_insert" id="dugaan_insert" class="form-control">
                                    </div>
                                </div>
                               
                               
                             <div class="modal-footer">

                            <button type="submit" class="btn btn-link waves-effect">Simpan</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
                        </div>
                        </form>

                        </div>
                       
                    </div>
                </div>
        </div>

            <div class="modal fade" id="modal2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Update Data Anomali</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cinput_anomali/update_anomali">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Mahasiswa Tanpa Aktivitas</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mahasiswa_tanpaaktivitas" id="mahasiswa_tanpaaktivitas">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">SKS > 24</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="sks_lebih" id="sks_lebih" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanpa IPK atau No.Seri Ijazah</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="tanpa_ipk_noijazah" id="tanpa_ipk_noijazah" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Domisili Mahasiswa Luar Alamat Kampus</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="domisili_mahasiswa" id="domisili_mahasiswa" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanpa isian Nama Ibu Kandung</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="tanpa_namaibu" id="tanpa_namaibu" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Mahasiswa Lulus kurang dari  1 Tahun</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="mahasiswa_lulus" id="mahasiswa_lulus" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Dugaan Insert Tanpa Ajuan Tipe 1</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="dugaan_insert" id="dugaan_insert" class="form-control">
                                    </div>
                                </div>
                               
                               
                             <div class="modal-footer">

                            <button type="submit" class="btn btn-link waves-effect">Simpan</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
                        </div>
                        </form>

                        </div>
                       
                    </div>
                </div>
        </div>


    </section>


    <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#modal2').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)

                // Isi nilai pada field
                modal.find('#mahasiswa_tanpaaktivitas').attr("value",div.data('mahasiswa_tanpaaktivitas'));
                modal.find('#sks_lebih').attr("value",div.data('sks_lebih'));
                modal.find('#tanpa_ipk_noijazah').attr("value",div.data('tanpa_ipk_noijazah'));
                modal.find('#domisili_mahasiswa').attr("value",div.data('domisili_mahasiswa'));
                modal.find('#tanpa_namaibu').attr("value",div.data('tanpa_namaibu'));
                modal.find('#mahasiswa_lulus').attr("value",div.data('mahasiswa_lulus'));
                modal.find('#dugaan_insert').attr("value",div.data('dugaan_insert'));
            });
        });
    </script>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>adminBSB/js/admin.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>adminBSB/js/demo.js"></script>

     <!-- Bootstrap Colorpicker Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/nouislider/nouislider.js"></script>

    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

     <!-- Moment Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#date').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });
            $('#tanggal').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });

            $('#time').bootstrapMaterialDatePicker
            ({
                date: false,
                shortTime: false,
                format: 'HH:mm'
            });

            $('#date-format').bootstrapMaterialDatePicker
            ({
                format: 'dddd DD MMMM YYYY - HH:mm'
            });
            $('#date-fr').bootstrapMaterialDatePicker
            ({
                format: 'DD/MM/YYYY HH:mm',
                lang: 'fr',
                weekStart: 1, 
                cancelText : 'ANNULER',
                nowButton : true,
                switchOnClick : true
            });

            $('#date-end').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm'
            });
            $('#date-start').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
            }).on('change', function(e, date)
            {
                $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
            });

            $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

            $.material.init()
        });
        </script>
</body>

</html>