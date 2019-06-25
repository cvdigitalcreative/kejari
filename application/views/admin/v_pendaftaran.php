<div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Data Training</h4>              
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>Admin/Pemesanan" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Training</li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
            <!-- <div class="col-xl-12 mb-10">
              <a href="" data-toggle="modal" data-target="#kurir" class="btn btn-primary btn-block ripple m-t-20">
                  <i class="fa fa-plus pr-2"></i> Tambah Training
              </a>
            </div> -->
            <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered p-0">
              <thead>
                  <tr>
                      <th width="20">No</th>
                      <th>Nama</th>
                      <th>Nomor Telpon</th>
                      <th>Email</th>
                      <th>Perusahaan / Instansi</th>
                      <th>Training</th>
                      <th>Comment</th>
                      <th width="100"><center>Aksi</center></th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                $no =0;

                foreach($pendaftaran->result_array() as $i) {
                    $no++;
                    $id = $i['pendaftaran_id'];
                    $nama = $i['pendaftaran_nama'];
                    $telp = $i['pendaftaran_telpon'];
                    $email = $i['pendaftaran_email'];
                    $perusahaan = $i['pendaftaran_instansi'];
                    $training_nama = $i['training_nama'];
                    $pesan = $i['pendaftaran_comment'];
                  ?>
                  <tr>
                     <td><center><?php echo $no?></center></td>
                      <td><?php echo $nama?></td>
                      <td><?php echo $telp?></td>
                      <td><?php echo $email?></td>
                      <td><?php echo $perusahaan?></td>
                      <td><?php echo $training_nama?></td>
                      <td><?php echo $pesan?></td>
                      <td>
                          <a href="#" style="margin-right: 10px; margin-left: 10px;" data-toggle="modal" data-target="#editdata<?php echo $id?>"><span class="ti-pencil"></span></a>
                          <a href="#" style="margin-right: 10px" data-toggle="modal" data-target="#hapusdata<?php echo $id?>"><span class="ti-trash"></span></a>
                      </td>
                    </tr>
                  <?php }?>
              </tbody>
           </table>
          </div>
          </div>
        </div>   
      </div>

        </div> -->

       <?php foreach($pendaftaran->result_array() as $i) :
                    $no++;
                    $id = $i['pendaftaran_id'];
                    $nama = $i['pendaftaran_nama'];
                    $telp = $i['pendaftaran_telpon'];
                    $email = $i['pendaftaran_email'];
                    $perusahaan = $i['pendaftaran_instansi'];
                    $training_nama = $i['training_nama'];
                    $pesan = $i['pendaftaran_comment'];
                  ?>
        <!-- Modal edit Data -->
          <div class="modal" tabindex="-1" role="dialog" id="editdata<?php echo $id?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="<?php echo base_url()?>Pendaftaran/update" method="post" enctype="multipart/form-data">
                    <div class="modal-body p-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Nama Lengkap</label>
                                    <input type="hidden" name="id" value="<?php echo $id?>">
                                    <input class="form-control form-white" type="text" name="nama" value="<?php echo $nama?>" required/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Nomor Telpon</label>
                                    <input class="form-control form-white" type="text" name="telp" value="<?php echo $telp?>" required/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Email</label>
                                    <input class="form-control form-white" type="email" name="email" value="<?php echo $email?>" required/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Perusahaan  Instansi</label>
                                    <input class="form-control form-white" type="text" name="perusahaan" value="<?php echo $perusahaan?>" required/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Training</label>
                                    <select class="form-control " name="training">
                                      <?php foreach($training->result_array() as $i) :
                                                 $no++;
                                                 $training_id = $i['training_id'];
                                                 $training_nama = $i['training_nama'];
                                              ?>
                                        <option value="<?= $training_id?>"><?= $training_nama?></option>
                                      <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Pesan</label>
                                    <textarea maxlength="5000" placeholder="Message" rows="10" class="form-control" name="pesan" id="message" required><?= $pesan?></textarea>
                                </div>
                            </div>          
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category" id="simpan">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach;?>

        <?php foreach($pendaftaran->result_array() as $i) :
                    $no++;
                    $id = $i['pendaftaran_id'];
                    $nama = $i['pendaftaran_nama'];
                    $telp = $i['pendaftaran_telpon'];
                    $email = $i['pendaftaran_email'];
                    $perusahaan = $i['pendaftaran_instansi'];
                    $training_nama = $i['training_nama'];
                    $pesan = $i['pendaftaran_comment'];
                  ?>
        <div class="modal" tabindex="-1" role="dialog" id="hapusdata<?php echo $id?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url()?>Pendaftaran/Hapus" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="id" value="<?php echo $id?>"/> 
                                    <p>Apakah kamu yakin ingin menghapus data ini?</i></b></p>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-success ripple save-category">Ya</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach;?>
  </div>

    
<!--=================================
 footer -->
 
    <footer class="bg-white p-4">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center text-md-left">
              <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="#"> Webmin </a> All Rights Reserved. </p>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="text-center text-md-right">
            <li class="list-inline-item"><a href="#">Terms & Conditions </a> </li>
            <li class="list-inline-item"><a href="#">API Use Policy </a> </li>
            <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
          </ul>
        </div>
      </div>
    </footer>
    </div> 
  </div>
</div>
</div>

<!--=================================
 footer -->


 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="<?php echo base_url()?>assets/admin/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="<?php echo base_url()?>assets/admin/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '<?php echo base_url()?>assets/admin/js/';</script>

<!-- chart -->
<script src="<?php echo base_url()?>assets/admin/js/chart-init.js"></script>

<!-- calendar -->
<script src="<?php echo base_url()?>assets/admin/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="<?php echo base_url()?>assets/admin/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="<?php echo base_url()?>assets/admin/js/morris.init.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url()?>assets/admin/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="<?php echo base_url()?>assets/admin/js/sweetalert2.js"></script>

<!-- toastr -->
<script src="<?php echo base_url().'assets/admin/js/jquery.toast.min.js'?>"></script>

<!-- validation -->
<script src="<?php echo base_url()?>assets/admin/js/validation.js"></script>

<!-- lobilist -->
<script src="<?php echo base_url()?>assets/admin/js/lobilist.js"></script>
 
<!-- custom -->
<script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
  
<!-- mask -->
<script src="<?php echo base_url()?>assets/admin/js/jquery.mask.min.js"></script>
 
</body>
</html> 

<?php if($this->session->flashdata('msg')=='update'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Update',
                    text: "Data berhasil Diupdate.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: '#00C9E6'
                });
        </script>
<?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data berhasil disimpan",
                    showHideTransition: 'slide',
                    icon: 'info',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: '#7EC857'
                });
        </script>
<?php elseif($this->session->flashdata('msg')=='warning'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Warning',
                    text: "Data gagal dimasukkan kedalam database",
                    showHideTransition: 'slide',
                    icon: 'info',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: '#orange'
                });
        </script>
<?php elseif($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Data gagal dimasukkan kedalam database",
                    showHideTransition: 'slide',
                    icon: 'error',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: '#orange'
                });
        </script>
<?php elseif($this->session->flashdata('msg')=='success_non_reseller'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Berhasil tambah data barang reseller",
                    showHideTransition: 'slide',
                    icon: 'info',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: '#7EC857'
                });
        </script>
<?php elseif($this->session->flashdata('msg')=='delete'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Delete',
                    text: "Data berhasil didelete",
                    showHideTransition: 'slide',
                    icon: 'info',
                    loader: true,        // Change it to false to disable loader
                    loaderBg: '#ffffff',
                    position: 'top-right',
                    bgColor: 'red'
                });
        </script>
<?php else:?>
<?php endif;?>
