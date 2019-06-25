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

		<h2 class="heading">Kata Sambutan</h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>

	<section class="page_content">
		<section class="span9 first">
			<article class="blog_detail_wrapper">
				
				<figure class="post_meta"> 
				
				<span> Posted by:  <a href="#"> Admin </a> </span> 

				</figure>
				<figure class="post_description">
         <h3><center>Selamat datang di Pelayanan Hukum Online<center></center></center></h3>
         <p align="Justify">Pos Pelayanan Hukum masih berlaku sesuai dengan syarat dan ketentuan yang berlaku, bagi yang ingin menggunakan Pos Pelayanan Hukum Online mohon perhatikan hal-hal dibawah ini:</p>
         <ul style="list-style-type:circle">
            <li>Pelayanan Hukum online ini diberikan untuk memenuhi permintaan masyarakat yang meliputi orang perorangan dan badan hukum, secara tertulis dalam bentuk konsultasi, pendapat dan informasi di bidang hukum Perdata atau Tata Usaha Negara.</li>
            <li>Pelayanan Hukum terbatas pada permasalahan Perdata dan Tata Usaha Negara</li>
            <li>Harap menggunakan Email yang Valid, karena Jawaban atas Pertanyaan anda akan dikirimkan melalui Email.</li>
            <li>Harap isi data anda dengan sebenar-benarnya</li>
            <li>Pelayanan setiap hari kerja Senin s/d Jum'at jam 08.00 wib s/d 15.30 wib.</li>
            <li>Hari Sabtu dan Minggu libur, berikut tanggal merah lainnya.</li>
            <li>Jika tidak memenuhi syarat, maka Form Pelayanan Hukum Online anda akan di tolak.</li>
          </ul>
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
  
 
