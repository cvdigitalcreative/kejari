<div class="content-wrapper">
      <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Kategori Album </h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Kategori Album </li>
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
                  <a href="" data-toggle="modal" data-target="#add-category-album" class="btn btn-primary btn-block ripple m-t-20">
                      <i class="fa fa-plus pr-2"></i> Create New
                  </a>
                </div>
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered p-0">
                <thead>
                    <tr>
                        <th>Nama kategori album </th>
                        <th>Tanggal</th>
                        <th>Author</th>
                        <th>Jumlah</th>
                        <th style="width: 80px;">Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $no=0;
                      foreach ($data->result_array() as $i) :
                        $no++;
                        $album_id=$i['album_id'];
                        $album_nama=$i['album_nama'];
                        $album_tanggal=$i['tanggal'];
                        $album_author=$i['album_author'];
                        $album_jumlah=$i['album_count'];                                   
                    ?>
                            <tr>
                              <td><?php echo $album_nama;?></td>
                              <td><?php echo $album_tanggal;?></td>
                              <td><?php echo $album_author;?></td>
                              <td><?php echo $album_jumlah;?></td> 
                              <td style="text-align:left;">
                                    <a href="" style="margin-right: 20px" data-toggle="modal" data-target="#ModalEdit<?php echo $album_id;?>"><span class="ti-pencil"></span></a>
                                    <a href="" data-toggle="modal" data-target="#ModalHapus<?php echo $album_id;?>"><span class="ti-trash"></span></a>
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
        <div class="modal" tabindex="-1" role="dialog" id="add-category-album">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add a category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="<?php echo base_url().'Admin/Album/simpan_album'?>" method="post">
                    <div class="modal-body p-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Category Album Name</label>
                                    <input class="form-control form-white" placeholder="Enter Category" type="text" name="xnama_album" required/>
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
            $album_id=$i['album_id'];
            $album_nama=$i['album_nama'];
            $album_tanggal=$i['tanggal'];
            $album_author=$i['album_author'];
            $album_jumlah=$i['album_count'];
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalEdit<?php echo $album_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit a category album</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Album/update_album'?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<?php echo $album_id;?>"/> 
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter Kategori Tulisan" type="text" name="xnama_album" value="<?php echo $album_nama;?>" required/>
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
            $album_id=$i['album_id'];
            $album_nama=$i['album_nama'];
            $album_tanggal=$i['tanggal'];
            $album_author=$i['album_author'];
            $album_jumlah=$i['album_count'];
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalHapus<?php echo $album_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete a category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Album/hapus_album'?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<?php echo $album_id;?>"/> 
                                    <p>Apakah kamu yakin ingin menghapus kategori <b><i><?php echo $album_nama;?></i></b></p>
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
<!-- <script src="<?php echo base_url()?>assets/admin/js/toastr.js"></script> -->

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
                    text: "Album Berhasil disimpan ke database.",
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
                    text: "Album berhasil di update",
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
                    text: "Album Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>