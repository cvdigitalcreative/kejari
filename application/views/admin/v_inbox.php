 <div class="content-wrapper">
      <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Inbox</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>Admin/Dashboard" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Inbox</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- main body --> 
      <div class="row">   
        <div class="col-xl-12 mb-30">     
          <div class="card card-statistics h-100"> 
            <div class="card-body">
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered p-0">
                <thead>
                    <tr>
                        <th style="width:90px;">Tanggal</th>
                        <th style="width:85px;">Nama</th>
                        <th style="width:70px;">Email</th>
                        <th>Pesan</th>
                        <th style="width: 80px;">Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $no=0;
                      foreach ($data->result_array() as $i) :
                              $no++;
                              $inbox_id=$i['inbox_id'];
                              $inbox_nama=$i['inbox_nama'];
                              $inbox_email=$i['inbox_email'];
                              $inbox_msg=$i['inbox_pesan'];
                              $tanggal=$i['tanggal'];
                                   
                      ?>
                            <tr>
                              <td><?php echo $tanggal;?></td>
                              <td><?php echo $inbox_nama;?></td>
                              <td><?php echo $inbox_email;?></td>
                              <td><?php echo $inbox_msg;?></td>
                              <td style="text-align:left;">
                                    <a href="" data-toggle="modal" data-target="#ModalHapus<?php echo $inbox_id;?>"><span class="ti-trash"></span></a>
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

        <?php foreach ($data->result_array() as $i) :
          $inbox_id=$i['inbox_id'];
          $inbox_nama=$i['inbox_nama'];
          $inbox_email=$i['inbox_email'];
          $inbox_msg=$i['inbox_pesan'];
          $tanggal=$i['tanggal'];
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalHapus<?php echo $inbox_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete a category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Inbox/hapus_inbox'?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<?php echo $inbox_id;?>"/> 
                                    <p>Apakah kamu yakin ingin menghapus pesan <b><i><?php echo $inbox_nama;?></i></b></p>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category">Delete</button>
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

<script type="text/javascript" src="<?php echo base_url().'assets/toast/jquery.toast.min.js'?>"></script>
 
</body>
</html>

</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Tidak bisa dihapus",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Berhasil dihapus",
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
                    text: "Pesan Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>



