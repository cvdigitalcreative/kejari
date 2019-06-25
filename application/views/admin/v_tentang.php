 <div class="content-wrapper">
      <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">List tentang</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active"> List tentang</li>
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
                  <a href="" data-toggle="modal" data-target="#add-tentang" class="btn btn-primary btn-block ripple m-t-20">
                      <i class="fa fa-plus pr-2"></i> Create New tentang
                  </a>
                </div>
              <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered p-0">
                <thead>
                    <tr>
                      <th style="width: 90px;">Gambar</th>
                      <th style="width: 80px;">Nama</th>
                      <th>Jabatan</th>
                      <th style="width: 80px;">Option 1</th>
                      <th style="width: 80px;">Option 2</th>
                      <th>Kategori</th>
                      <th style="width: 80px;">Aksi</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $no=0;
                      foreach ($data->result_array() as $i) :
                           $no++;
                           $tentang_id=$i['tentang_id'];
                           $tentang_nama=$i['tentang_nama'];
                           $tentang_jabatan=$i['tentang_jabatan'];
                           $tentang_bijak=$i['tentang_bijak'];
                           $tentang_tanggal=$i['tanggal'];
                           $tentang_gambar=$i['tentang_gambar'];
                           $tentang_option1=$i['link_option_1'];
                           $tentang_option2=$i['link_option_2'];
                           $kategori_tentang_nama=$i['kategori_tentang_nama']; 

                      ?>
                      <tr>
                        <td><img src="<?php echo base_url().'assets/images/'.$tentang_gambar;?>" style="width:90px;"></td>
                        <td><?php echo $tentang_nama;?></td>
                        <td><?php echo $tentang_jabatan;?></td>
                        <td><?php echo $tentang_option1;?></td>
                        <td><?php echo $tentang_option2;?></td>
                        <td><?php echo $kategori_tentang_nama;?></td>                                                       
                        <td>
                          <a href="" style="margin-right: 20px" data-toggle="modal" data-target="#ModalEdit<?php echo $tentang_id;?>"><span class="ti-pencil"></span></a>
                          <a href="" data-toggle="modal" data-target="#ModalHapus<?php echo $tentang_id;?>"><span class="ti-trash"></span></a>
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
        <div class="modal" tabindex="-1" role="dialog" id="add-tentang">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add a tentang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="<?php echo base_url().'Admin/Tentang/simpan_tentang'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body p-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Nama</label>
                                    <input class="form-control form-white" placeholder="Enter nama" type="text" name="xnama" required/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Jabatan</label>
                                    <input class="form-control form-white" placeholder="Enter Jabatan" type="text" name="xjabatan" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Kata Bijak</label>
                                    <input class="form-control form-white" placeholder="Enter Kata Bijak" type="text" name="xbijak" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Option 1</label>
                                    <input class="form-control form-white" placeholder="Enter Option" type="text" name="xoption1" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Option 2</label>
                                    <input class="form-control form-white" placeholder="Enter Option" type="text" name="xoption2" />
                                </div>
                                 <div class="col-md-12 col mb-20">
                                  <label for="inlineFormCustomSelect">Kategori Tentang</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="xkategori_tentang" required>
                                        <option selected value="">Choose...</option>
                                         <?php
                                            $no=0;
                                            foreach ($ktg_tentang->result_array() as $i) :
                                              $no++;
                                                  $ktg_tentang_id=$i['kategori_tentang_id'];
                                                  $ktg_tentang_nama=$i['kategori_tentang_nama'];
                                                 
                                              ?>
                                            <option value="<?php echo $ktg_tentang_id;?>"><?php echo $ktg_tentang_nama;?></option>
                                          <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                  <label class="control-label">Photo</label>
                                  <input style="padding-left: 1px" class="form-control" type="file" name="filefoto" required/>
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
              $tentang_id=$i['tentang_id'];
              $tentang_nama=$i['tentang_nama'];
              $tentang_jabatan=$i['tentang_jabatan'];
              $tentang_bijak=$i['tentang_bijak'];
              $tentang_tanggal=$i['tanggal'];
              $tentang_gambar=$i['tentang_gambar'];
              $tentang_option1=$i['link_option_1'];
              $tentang_option2=$i['link_option_2']; 
              $kategori_tentang_id=$i['tentang_kategori_id'];  
              $kategori_tentang_nama=$i['kategori_tentang_nama'];   
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalEdit<?php echo $tentang_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit a tentang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Tentang/update_tentang'?>" method="post" enctype="multipart/form-data">
                             <div class="row"> 
                                <input type="hidden" name="kode" value="<?php echo $tentang_id;?>"/> 
                                <input type="hidden" value="<?php echo $tentang_gambar;?>" name="gambar">

                                <div class="col-md-12">
                                    <label class="control-label">Nama</label>
                                    <input class="form-control form-white" placeholder="Enter title" type="text" name="xnama" value="<?php echo $tentang_nama;?>" required/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Jabatan</label>
                                    <input class="form-control form-white" placeholder="Enter deskripsi" type="text" name="xjabatan" value="<?php echo $tentang_jabatan;?>" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Kata Bijak</label>
                                    <input class="form-control form-white" placeholder="Enter deskripsi" type="text" name="xbijak" value="<?php echo $tentang_bijak;?>" />
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Option 1</label>
                                    <input class="form-control form-white" placeholder="Enter deskripsi" type="text" name="xoption1" value="<?php echo $tentang_option1;?>"/>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label">Option 2</label>
                                    <input class="form-control form-white" placeholder="Enter deskripsi" type="text" name="xoption2" value="<?php echo $tentang_option2;?>"/>
                                </div>
                                <div class="col-md-12 col mb-20">
                                  <label for="inlineFormCustomSelect">Kategori Tentang</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="xkategori_tentang" required>
                                        <option selected value="">Choose...</option>
                                         <?php
    
                                            foreach ($ktg_tentang->result_array() as $i) :
                                    
                                                $ktg_tentang_id=$i['kategori_tentang_id'];
                                                $ktg_tentang_nama=$i['kategori_tentang_nama'];
                                                if($kategori_tentang_id==$ktg_tentang_id)
                                                  echo "<option value='$ktg_tentang_id' selected>$ktg_tentang_nama</option>";
                                                else
                                                  echo "<option value='$ktg_tentang_id'>$ktg_tentang_nama</option>";
                                                 
                                              ?>
                                          <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                  <label class="control-label">Photo</label>
                                  <input style="padding-left: 1px" class="form-control" type="file" name="filefoto" />
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
      </div>
        <?php endforeach;?> 

        <?php foreach ($data->result_array() as $i) :
              $tentang_id=$i['tentang_id'];
              $tentang_nama=$i['tentang_nama'];
              $tentang_jabatan=$i['tentang_jabatan'];
              $tentang_bijak=$i['tentang_bijak'];
              $tentang_tanggal=$i['tanggal'];
              $tentang_gambar=$i['tentang_gambar'];
              $tentang_option1=$i['link_option_1'];
              $tentang_option2=$i['link_option_2']; 
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="ModalHapus<?php echo $tentang_id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete a tentang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="<?php echo base_url().'Admin/Tentang/hapus_tentang'?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<?php echo $tentang_id;?>"/> 
                                    <input type="hidden" value="<?php echo $tentang_gambar;?>" name="gambar">
                                    <p>Apakah kamu yakin ingin menghapus <b><i><?php echo $tentang_nama;?></i></b></p>
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



