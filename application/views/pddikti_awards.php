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
                                Data PDDIKTI Awards
                            </h2>
                            <!-- <button type="button" class="btn btn-default waves-effect">DEFAULT</button> -->
                            <br>
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mymodal" data-id="">Tambah Data</button>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                     <tr>
                                        <th>Persentase Kelas Terisi</th>
                                        <th>Persentase Data Pokok Sesuai</th>
                                        <th>Persentase Pelaporan Sesuai</th>
                                        <th>Persentase Checkpoint</th>
                                        <th>Persentase Pelaporan</th>
                                        <th>Aksi</th> 
                                    </tr>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <?php 
                                         $i = 1;  
                                            foreach ($data_pddikti_awards as $row) {
                                                
                                            $persentase_kelas_terisi            = $row->persentase_kelas_terisi;
                                            $persentase_data_pokok_sesuai       = $row->persentase_data_pokok_sesuai;
                                            $persentase_pelaporan_sesuai        = $row->persentase_pelaporan_sesuai;
                                            $persentase_checkpoint              = $row->persentase_checkpoint;
                                            $persentase_pelaporan               = $row->persentase_pelaporan;
                                            ?> 
                                        <td><?php echo $persentase_kelas_terisi ?></td>
                                        <td><?php echo $persentase_data_pokok_sesuai ?></td>
                                        <td><?php echo $persentase_pelaporan_sesuai  ?></td>
                                        <td><?php echo $persentase_checkpoint ?></td>
                                        <td><?php echo $persentase_pelaporan ?></td>
                                      
                                        <td><center>
                                                <a 
                                                            href="javascript:;"
                                                            data-persentase_kelas_terisi="<?php echo $persentase_kelas_terisi; ?>"
                                                            data-persentase_data_pokok_sesuai="<?php echo $persentase_data_pokok_sesuai; ?>"
                                                            data-persentase_pelaporan_sesuai="<?php echo $persentase_pelaporan_sesuai; ?>"
                                                            data-persentase_checkpoint="<?php echo $persentase_checkpoint ?>"
                                                            data-persentase_pelaporan="<?php echo $persentase_pelaporan ?>"
                                                            data-toggle="modal" data-target="#update_modal">
                                                 <button type="button" class="btn bg-blue waves-effect" data-id="">Update</button>
                                                </a>
                                            </center>
                                        </td>
                                        <td><center>
                                           <a href="cpddikti_awards/hapus/<?php echo $persentase_kelas_terisi; ?>" class="btn bg-pink waves-effect">Delete</a>
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
            <!-- #END# Basic Examples -->
           
            <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data PDDIKTI Awards</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cpddikti_awards/input_pddikti_awards">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Kelas Terisi</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="persentase_kelas_terisi" id="persentase_kelas_terisi">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Data Pokok Sesuai</h4>
                                    <div class="form-line">
                                        <input type="text" name="persentase_data_pokok_sesuai" id="persentase_data_pokok_sesuai" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Pelaporan Sesuai</h4>
                                    <div class="form-line">
                                        <input type="text" name="persentase_pelaporan_sesuai" id="persentase_pelaporan_sesuai" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Checkpoint</h4>
                                    <div class="form-line">
                                        <input type="text" name="persentase_checkpoint" id="persentase_checkpoint" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Pelaporan</h4>
                                    <div class="form-line">
                                        <input type="text" name="persentase_pelaporan" id="persentase_pelaporan" class="form-control">
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

        <div class="modal fade" id="update_modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Update Data PDDIKTI Awards</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cpddikti_awards/update_pddikti_awards">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Kelas Terisi</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="persentase_kelas_terisi" id="persentase_kelas_terisi">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Data Pokok Sesuai</h4>
                                    <div class="form-line">
                                        <input type="text" name="persentase_data_pokok_sesuai" id="persentase_data_pokok_sesuai" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Pelaporan Sesuai</h4>
                                    <div class="form-line">
                                        <input type="text" name="persentase_pelaporan_sesuai" id="persentase_pelaporan_sesuai" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Checkpoint</h4>
                                    <div class="form-line">
                                        <input type="text" name="persentase_checkpoint" id="persentase_checkpoint" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Persentase Pelaporan</h4>
                                    <div class="form-line">
                                        <input type="text" name="persentase_pelaporan" id="persentase_pelaporan" class="form-control">
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
            $('#update_modal').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)

                // Isi nilai pada field
                modal.find('#persentase_kelas_terisi').attr("value",div.data('persentase_kelas_terisi'));
                modal.find('#persentase_data_pokok_sesuai').attr("value",div.data('persentase_data_pokok_sesuai'));
                modal.find('#persentase_pelaporan_sesuai').attr("value",div.data('persentase_pelaporan_sesuai'));
                modal.find('#persentase_checkpoint').attr("value",div.data('persentase_checkpoint'));
                modal.find('#persentase_pelaporan').attr("value",div.data('persentase_pelaporan'));

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

</body>

</html>