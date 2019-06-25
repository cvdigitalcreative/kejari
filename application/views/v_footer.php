  <!-- footer -->
  <section class="footer-top">
  	<section class="container container-fluid">
    	<figure class="span6 first">
        	<h2 style="font-size: 22px">Kejaksaan Negeri Sumatera Selatan</h2>
           <div class="col-md-12">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127506.0142013123!2d104.79639618871784!3d-2.9411059661300105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9ded62ee6083%3A0x809479da71ff1949!2sKejaksaan+Negeri+Kota+Palembang!5e0!3m2!1sid!2sid!4v1561487282338!5m2!1sid!2sid" width="100%" height="10%" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
           <p>Kantor Kejaksaan Negeri Palembang</p>
           <p>Jl. Gub. H. A. Bastari No. 165 Rt.26 Rw.06 Kel. Silaberanti, Kec. Seberang Ulu I, Palembang</p>
        </figure>
        <figure class="span6">
        	<h2>Tautan</h2>
          <div class="col-lg-12" style="display: flex">
            <div class="col-md-12">
            <ul class="a-list">
                <li><a href="http://www.kejaksaan.go.id/" title="Tags"> Kejaksaan Agung </a></li>
                <li><a href="http://www.mahkamahagung.go.id/" title="Tags"> Mahkamah Agung </a></li>
                <li><a href="http://www.kpk.go.id/" title="Tags"> KPK </a></li>
                <li><a href="http://www.kejati-dki.go.id/" title="Tags"> Kejaksaan Tinggi DKI Jakarta </a></li>
                <li><a href="http://www.pt-jakarta.go.id/" title="Tags"> Pengadilan Tinggi DKI Jakarta </a></li>
                <li><a href="http://selatan.jakarta.go.id/" title="Tags"> Walikota Jakarta Selatan </a></li>

            </ul>
          </div>
          <div class="col-md-12" style="padding-left: 20px">
            <ul class="a-list">

                <li><a href="http://www.pn-jakartaselatan.go.id/" title="Tags"> Pengadilan Negeri Jakarta Selatan </a></li>
                <li><a href="http://restrojaksel.info" title="Tags"> Polres Metro Jakarta Selatan </a></li>
                <li><a href="http://www.kejari-jakpus.go.id/" title="Tags"> Kejaksaan Negeri Jakarta Pusat </a></li>
                <li><a href="http://www.kejari-jakbar.go.id/" title="Tags"> Kejaksaan Negeri Jakarta Barat </a></li>
                <li><a href="http://www.kejari-jakut.go.id/" title="Tags"> Kejaksaan Negeri Jakarta Utara </a></li>
                <li><a href="http://www.kejari-jaktim.go.id/" title="Tags"> Kejaksaan Negeri Jakarta Timur </a></li>
            </ul>
          </div>
          </div>
          
            
        </figure>

    </section>
  </section>
  <footer id="footer">
    <p>Copyright © 2013 Designed by: <a href="#">CrunchPress</a></p>
  </footer>

  
  </div>

<!-- Social Icons No Script -->
<script src="<?php echo base_url()?>assets/js/jquery-1.9.1.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/modernizr.custom.17475.js"></script>
 <script src="<?php echo base_url()?>assets/js/jsDatePick.min.1.3.js"></script>
 <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/focus.js"></script><!-- clear input -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script><!-- bootstrap -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/lightbox.js"></script><!-- bootstrap -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.elastislide.js"></script><!-- Cerousel -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/slider.js"></script><!-- FlexiSlider -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/social.js"></script><!-- Social -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/custom.js"></script><!-- Custom -->
 <script type="text/javascript">
  /* <![CDATA[ */
    if ( jQuery('#calander_div').length > 0 ) {
  window.onload = function(){
    g_globalObject = new JsDatePick({
      useMode:1,
      isStripped:true,
      target:"calander_div",
      cellColorScheme:"purple"
    });   
    };
    }    

  /*# Carousel Function #*/
    jQuery( '#carousel' ).elastislide();
    jQuery(document).ready(function($) {
  // Social Icons Function **/
    $('.switch_toggle').click(function(){
      $(this).next('.filter').slideToggle();
      $(this).toggleClass("minus_icon"); 
    });
    $('.social_active').hoverdir( {} );
  })

    /* ]]> */
  </script>
  <script>
  jQuery(document).ready(function($){
      $('#myTable').DataTable();
  } );

  </script>
<script src="<?php echo base_url()?>assets/js/cockies.js"></script> <!-- jQuery cookie --> 

</body>
</html>