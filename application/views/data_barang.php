
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kelengkapan PDDIKTI
                            </h2>
                            <!-- <button type="button" class="btn btn-default waves-effect">DEFAULT</button> -->
                            <br>
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mymodal" data-id="">Tambah Data</button>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Action</a></li>
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
                                            <th>Profile</th>
                                            <th>Pendidikan Dosen TIdak Sesuai UU</th>
                                            <th>Jumlah Prodi Merah </th>
                                            <th>Rasio Dosen</th>
                                            <th>Akreditas</th>
                                            <th>Kesesuaian Alamat PTS dengan SK</th>
                                            <th>Pelaporan PDDIKTI (<20221) </th>
                                             <th>Aksi</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                     <?php 
                                         $i = 1;  
                                        foreach ($data_barang as $row) {
                                        $tanggal = $row->tanggal;
                                        $nama   = $row->nama;
                                        $ID     = $row->id;
                                        $jumlah = $row->jumlah;
                                        $harga_jual  = $row->harga_jual;
                                        $harga_beli  = $row->harga_beli;
                                       

                                     ?> 
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $tanggal; ?></td>
                                            <td><?php echo $nama ?></td>
                                            <td><?php echo $ID; ?></td>
                                            <td><?php echo $harga_jual; ?></td>
                                            <td><?php echo $harga_beli; ?></td>
                                            <td><?php echo $jumlah; ?></td>
                                     
                                             <td>
                                                <center>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                                        <a 
                                                            href="javascript:;"
                                                            data-id="<?php echo $ID; ?>"
                                                            data-tanggal="<?php echo $tanggal; ?>"
                                                            data-nama="<?php echo $nama; ?>"
                                                            data-hb="<?php echo $harga_beli ?>"
                                                            data-hj="<?php echo $harga_jual ?>"
                                                            data-jumlah="<?php echo $jumlah; ?>"  
                                                            data-toggle="modal" data-target="#modal2">
                                                            <button type="button" class="btn bg-blue waves-effect">Update</button>
                                                        </a>
                                                    </div>
                                                </center>
                                            </td>
                                            <td>       
                                            <center> 
                                                <a href="cdata_barang/hapus/<?php echo $ID; ?>" class="btn bg-pink waves-effect">Delete</a>
                                             </center> 
                                            </td>

                                        </tr>
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
                            <h4 class="modal-title" id="defaultModalLabel">Input Data Kelengkapan PDDIKTI</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/ckaryawan/input_karyawan">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Mahasiswa Tanpa Aktivitas</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">SKS > 24</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanpa IPK atau No.Seri Ijazah</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Domisili Mahasiswa Luar Alamat Kampus</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanpa isian Nama Ibu Kandung</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Mahasiswa Lulus kurang dari  1 Tahun</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Dugaan Insert Tanpa Ajuan Tipe 1</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                               
                            <!--     <div class="form-group form-float">
                                <h4 class="card-inside-title">Total Kredit</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kredit" id="kredit" required>
                                    </div>
                                   
                                </div> -->
                               
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
                            <h4 class="modal-title" id="defaultModalLabel">Update Data Kelengkapan PDDIKTI</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/ckaryawan/input_karyawan">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Mahasiswa Tanpa Aktivitas</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">SKS > 24</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanpa IPK atau No.Seri Ijazah</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Domisili Mahasiswa Luar Alamat Kampus</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanpa isian Nama Ibu Kandung</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Mahasiswa Lulus kurang dari  1 Tahun</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Dugaan Insert Tanpa Ajuan Tipe 1</h4>
                                    <div class="form-line">
                                        <input type="text-number" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                               
                            <!--     <div class="form-group form-float">
                                <h4 class="card-inside-title">Total Kredit</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kredit" id="kredit" required>
                                    </div>
                                   
                                </div> -->
                               
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
                modal.find('#id').attr("value",div.data('id'));
                modal.find('#tanggal').attr("value",div.data('tanggal'));
                modal.find('#nama').attr("value",div.data('nama'));
                modal.find('#hb').attr("value",div.data('hb'));
                modal.find('#hj').attr("value",div.data('hj'));
                modal.find('#jumlah').attr("value",div.data('jumlah'));
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
    <script src="<?php echo base_url() ?>adminBSB/js/pages/forms/basic-form-elements.js"></script>

    <script src="<?php echo base_url() ?>adminBSB/plugins/autosize/autosize.js"></script>ini

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