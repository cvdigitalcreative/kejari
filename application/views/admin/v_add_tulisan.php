<!--=================================
 Main content -->

 <!--=================================
wrapper -->

    <div class="content-wrapper">
      <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Form Tambah Tulisan</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Form Tambah Tulisan</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 mb-30">
            <div class="card card-statistics h-100"> 
                <div class="card-body">
                  <form  action="<?php echo base_url().'Admin/Tulisan/simpan_tulisan'?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="control-label" for="fname">Judul</label>
                          <div class="mb-4">
                            <input type="text" class="form-control" id="fname" name="xjudul" placeholder="Judul" required />
                          </div>
                          <label class="control-label" for="fname">News Content</label>
                            <textarea id="summernote" name="xisi" required><p>Hello Summernote</p></textarea>
                      </div>
                  </div>
              </div>  
          </div>
        <div class="col-xl-4 mb-30">
            <div class="card card-statistics h-51"> 
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Kategori</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="xkategori" required>
                        <option selected value="">Choose...</option>
                         <?php
                            $no=0;
                            foreach ($kat->result_array() as $i) :
                              $no++;
                                 $kategori_id=$i['kategori_id'];
                                 $kategori_nama=$i['kategori_nama'];
                                 
                              ?>
                            <option value="<?php echo $kategori_id;?>"><?php echo $kategori_nama;?></option>
                          <?php endforeach;?>
                    </select>
                  </div> -->
<!--                   <div class="form-group">
                      <label class="mr-sm-2" for="inlineFormCustomSelect">Kategori Album Galeri</label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="xalbum">
                          <option selected value="">Choose...</option>
                           <?php
                            $no=0;
                            foreach ($album->result_array() as $i) :
                               $no++;
                                         $album_id=$i['album_id'];
                                         $album_nama=$i['album_nama'];
                                         
                                      ?>
                                    <option value="<?php echo $album_id;?>"><?php echo $album_nama;?></option>
                            <?php endforeach;?>
                      </select>
                  </div> -->
                  <input type="hidden" name="xalbum" value="">
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Upload Image</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filefoto"  required>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save It</button>
                  </div>
                  </form>
                </div>
            </div>  
        </div>
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
<script src="<?php echo base_url()?>assets/admin/js/toastr.js"></script>

<!-- validation -->
<script src="<?php echo base_url()?>assets/admin/js/validation.js"></script>

<!-- lobilist -->
<script src="<?php echo base_url()?>assets/admin/js/lobilist.js"></script>
 
<!-- custom -->
<script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
<script src="<?php echo base_url().'assets/admin/js/jquery.toast.min.js'?>"></script>
 
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
                    text: "Berita Berhasil disimpan ke database.",
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
                    text: "Berita berhasil di update",
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
                    text: "Berita Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>