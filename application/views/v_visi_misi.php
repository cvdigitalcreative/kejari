<?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

?>
	</section>

	
  <section class="content-holder b-none inner_content" style="margin-top: 50px;padding-bottom: 0">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

		<h2 class="heading">Visi & Misi Kejaksaan Negeri Sumatera Selatan</h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>

	<section class="page_content">
		<section class="span9 first">
			<article class="blog_detail_wrapper">
				
				<figure class="post_meta"> 
				
				<span> Posted by:  <a href="#"> Admin </a> </span> 

				</figure>
				<figure class="post_description">
          <div>
            <p style="text-align: justify;"><strong>VISI DAN MISI</strong></p>
            <p style="text-align: justify;">Kejaksaan Negeri Sumatera Selatan dengan mengacu pada visi dan Misi Kejaksaan Tinggi DKI Jakarta serta diselaraskan dengan visi dan misi Kejaksaan Agung Republik Indonesia telah menetapkan visi dan misi sebagai berikut :</p>
            <p style="text-align: justify;"><strong>&nbsp;</strong></p>
            <p style="text-align: justify;"><strong>VISI</strong></p>
            <p style="text-align: justify;"><strong>&nbsp;</strong>Terwujudnya aparatur yang profesional memiliki integritas moral dalam penegakan dan pelayanan hukum</p>
            <p style="text-align: justify;"><strong>&nbsp;</strong></p>
            <p style="text-align: justify;"><strong>MISI</strong></p>
            <ol style="text-align: justify;">
            <li>Peningkatan Profesionalisme dan moral Aparatur melalui perubahan pola pikir, budaya kerja dan perilaku;</li>
            <li>Peningkatan sarana dan prasarana;</li>
            <li>Tepat dan cepatnya penyelesaian penanganan Perkara;</li>
            <li>Terselesaikannya tunggakan penanganan perkara;</li>
            <li>Meningkatkan kegiatan operasi intelijen yustisial;</li>
            <li>Meningkatkan penyuluhan dan penerangan hukum;</li>
            <li>Terselesaikannya bantuan hukum.</li>
            </ol>
            <p style="text-align: justify;">&nbsp;</p>
            <p style="text-align: justify;"><strong>MOTTO :</strong></p>
            <p style="text-align: justify;"><strong>” PRIMA DAN TERPERCAYA DALAM PENEGAKAN DAN PELAYANAN HUKUM ”</strong></p>
          </div>
				</figure>
			</article>
		</section>
	       <section class="span3 sidebar">
            
              <article class="widget">              
                <h2> Latest Post </h2> <!-- 20px -->              
                <ul class="latest_post">
                  <?php foreach ($data->result_array() as $j):
                    $post_id=$j['tulisan_id'];
                    $post_judul=$j['tulisan_judul'];
                    $post_isi=$j['tulisan_isi'];
                    $post_author=$j['tulisan_author'];
                    $post_image=$j['tulisan_gambar'];
                    $post_tglpost=$j['tanggal'];
                    $post_slug=$j['tulisan_slug'];
                  ?>
                  <li>
                    <img src="<?= base_url()?>assets/images/<?= $post_image?>" alt="" /> 
                    <span class="text_wrapper">
                    <h3> <?= $post_judul?> </h3> 
                    <p> <?php echo limit_words($post_isi,3).'...';?> </p> 
                    <a href="<?php echo base_url().'Artikel/'.$post_slug;?>"> Keep Reading →</a>
                    </span>
                  </li>
                  <?php endforeach;?>  
                </ul>
              </article>
              
              <article class="widget">
                <h2> Tautan </h2> 
                <div class="tag_widget">
                  <a href="http://www.kejaksaan.go.id/" title="Tags"> Kejaksaan Agung </a> 
                  <a href="http://www.mahkamahagung.go.id/" title="Tags"> Mahkamah Agung </a>
                  <a href="http://www.kpk.go.id/" title="Tags"> KPK </a>
                  <a href="http://www.kejati-dki.go.id/" title="Tags"> Kejaksaan Tinggi DKI Jakarta </a>
                  <a href="http://www.pt-jakarta.go.id/" title="Tags"> Pengadilan Tinggi DKI Jakarta </a>
                  <a href="http://selatan.jakarta.go.id/" title="Tags"> Walikota Jakarta Selatan </a>
                  <a href="http://www.pn-jakartaselatan.go.id/" title="Tags"> Pengadilan Negeri Jakarta Selatan </a>
                  <a href="http://restrojaksel.info" title="Tags"> Polres Metro Jakarta Selatan </a>
                  <a href="http://www.kejari-jakpus.go.id/" title="Tags"> Kejaksaan Negeri Jakarta Pusat </a>
                  <a href="http://www.kejari-jakbar.go.id/" title="Tags"> Kejaksaan Negeri Jakarta Barat </a>
                  <a href="http://www.kejari-jakut.go.id/" title="Tags"> Kejaksaan Negeri Jakarta Utara </a>
                  <a href="http://www.kejari-jaktim.go.id/" title="Tags"> Kejaksaan Negeri Jakarta Timur </a>
                </div>
              </article>      
          </section>  
	</section>
   
	</section>
 
  </section>
  
 
