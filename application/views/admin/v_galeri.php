 <div class="content-wrapper">
      <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> List Galeri</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active"> List Galeri</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- main body --> 
      <div class="row">   
        <div class="col-xl-12 mb-30">     
          <div class="card card-statistics h-100"> 
            <div class="card-body">
                <div class="col-xl-12 mb-10">
                  <a href="" data-toggle="modal" data-target="#add-category-galeri" class="btn btn-primary btn-block ripple m-t-20">
                      <i class="fa fa-plus pr-2"></i> Create New Galeri
                  </a>
                </div>
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered p-0">
                <thead>
                    <tr>
                      <th style="width: 90px;">Gambar</th>
                      <th>Judul</th>
                      <!-- <th>Deskripsi</th> -->
                      <th style="width: 80px;">Tanggal</th>
                      <th style="width: 80px;">Album</th>
                      <th style="width: 80px;">Aksi</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $no=0;
                      foreach ($data->result_array() as $i) :
                           $no++;
                           $galeri_id=$i['galeri_id'];
                           $galeri_judul=$i['galeri_judul'];
                           $galeri_deskripsi=$i['galeri_deskripsi'];
                           $galeri_tanggal=$i['tanggal'];
                           $galeri_author=$i['galeri_author'];
                           $galeri_gambar=$i['galeri_gambar'];
                           $galeri_album_id=$i['galeri_album_id'];
                           $galeri_album_nama=$i['album_nama'];                                  
                      ?>
                      <tr>
                        <td><img src="<?php echo base_url().'assets/images/'.$galeri_gambar;?>" style="width:90px;"></td>
                        <td><?php echo $galeri_judul;?></td>
                        <!-- <td><?php echo $galeri_deskripsi;?></td> -->
                        <td><?php echo $galeri_tanggal;?></td>
                        <td><?php echo $galeri_album_nama;?></td>                                                  
                        <td>
                          <a href="" style="margin-right: 20px" data-toggle="modal" data-target="#ModalEdit<?php echo $galeri_id;?>"><span class="ti-pencil"></span></a>
                          <a href="" data-toggle="modal" data-target="#ModalHapus<?php echo $galeri_id;?>"><span class="ti-trash"></span></a>
                        </td>
                      </tr>
                        <?php endforeach;?>
                </tbody>                
            </table>
            </div>
            </div>
          </div>   
        </div>
        <!-- Modal Add Category -->
        <div class="modal" tabindex="-1" role="dialog" id="add-category-galeri">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add a photo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="<?php echo base_url().'Admin/Galeri/simpan_galeri'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body p-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Judul</label>
                                    <input class="form-control form-white" placeholder="Enter title" type="text" name="xjudul" required/>
                                </div>
                                <!-- <div class="col-md-12">
                                    <label class="control-label">Deskripsi</label>
                                    <input class="form-control form-white" placeholder="Enter deskripsi" type="text" name="xdeskripsi" />
                                </div> -->
                                <div class="col-md-12 col mb-20">
                                  <label for="inlineFormCustomSelect">Kategori</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="xalbum" required>
                                        <option selected value="">Choose...</option>
                                         <?php
                                            $no=0;
                                            foreach ($alb->result_array() as $i) :
                                              $no++;
                                                  $alb_id=$i['album_id'];
                                                  $alb_nama=$i['album_nama'];
                                                 
                                              ?>
                                            <option value="<?php echo $alb_id;?>"><?php echo $alb_nama;?></option>
                                          <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                  <label class="control-label">Photo</label>
                                  <input style="padding-left: 1px" class="form-control" type="file" name="filefotos[]" multiple required/>
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

        <?php foreach ($data->result_array() as $i) :
              $galeri_id=$i['galeri_id'];
              $galeri_judul=$i['galeri_judul'];
              $galeri_deskripsi=$i['galeri_deskripsi'];
              $galeri_tanggal=$i['tanggal'];
              $galeri_author=$i['galeri_author'];
              $galeri_gambar=$i['galeri_gambar'];
              $galeri_album_id=$i['galeri_album_id'];
              $galeri_album_nama=$i['album_nama']; 
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalEdit<?php echo $galeri_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit a photo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Galeri/update_galeri'?>" method="post" enctype="multipart/form-data">
                             <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<?php echo $galeri_id;?>"/> 
                                    <input type="hidden" value="<?php echo $galeri_gambar;?>" name="gambar">
                                    <label class="control-label">Judul</label>
                                    <input class="form-control form-white" placeholder="Enter title" type="text" name="xjudul" value="<?php echo $galeri_judul;?>" required/>
                                </div>
                                <!-- <div class="col-md-12">
                                    <label class="control-label">Deskripsi</label>
                                    <input class="form-control form-white" placeholder="Enter deskripsi" type="text" name="xdeskripsi" value="<?php echo $galeri_deskripsi;?>" />
                                </div> -->
                                <div class="col-md-12 col mb-20">
                                  <label for="inlineFormCustomSelect">Kategori</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="xalbum" required>
                                        <option selected value="">Choose...</option>
                                         <?php
    
                                            foreach ($alb->result_array() as $i) :
                                    
                                                $alb_id=$i['album_id'];
                                                $alb_nama=$i['album_nama'];
                                                if($galeri_album_id==$alb_id)
                                                  echo "<option value='$alb_id' selected>$alb_nama</option>";
                                                else
                                                  echo "<option value='$alb_id'>$alb_nama</option>";
                                                 
                                              ?>
                                          <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                  <label class="control-label">Photo</label>
                                  <input style="padding-left: 1px" class="form-control" type="file" name="filefoto"/>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach;?> 

        <?php foreach ($data->result_array() as $i) :
              $galeri_id=$i['galeri_id'];
              $galeri_judul=$i['galeri_judul'];
              $galeri_deskripsi=$i['galeri_deskripsi'];
              $galeri_tanggal=$i['tanggal'];
              $galeri_author=$i['galeri_author'];
              $galeri_gambar=$i['galeri_gambar'];
              $galeri_album_id=$i['galeri_album_id'];
              $galeri_album_nama=$i['album_nama'];
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalHapus<?php echo $galeri_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete a photo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Galeri/hapus_galeri'?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<?php echo $galeri_id;?>"/> 
                                    <input type="hidden" value="<?php echo $galeri_gambar;?>" name="gambar">
                                    <input type="hidden" value="<?php echo $galeri_album_id;?>" name="album">
                                    <p>Apakah kamu yakin ingin menghapus foto <b><i><?php echo $galeri_gambar;?></i></b></p>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach;?> 
    </div> 
<!--=================================
 wrapper -->
      
<!--=================================
 footer -->

    <footer class="bg-white p-4">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center text-md-left">
              <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="https://www.digitalcreative.web.id" target="blank"> Warung Kreatif </a> All Rights Reserved. </p>
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
    </div><!-- main content wrapper end-->
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
 
</body>
</html>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Galeri Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Galeri berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Galeri Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>


