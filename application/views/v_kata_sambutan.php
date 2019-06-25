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
          <h2>Sekapur Sirih</h2>				
					<p style="text-align: justify;">Kejaksaan Negeri Jakarta Selatan adalah sebuah lembaga pemerintah yang melaksanakan kekuasaan negara di bidang penuntutan serta kewenangan lain berdasarkan undang-undang no. 16 tahun 2004 tentang Kejaksaan RI, yang memiliki wilayah hukum di wilayah Jakarta Selatan.</p>
          <p style="text-align: justify;">KeKejaksaan Negeri Jakarta Selatan (Kejari Jaksel) secara struktural terletak dibawah Kejaksaan Tinggi DKI Jakarta (Kejati DKI) dan Kejaksaan Agung RI yang berada di Ibu Kota Negara, dengan luas wilayah mencapai 145,73 kilometer persegi (Km²),  jumlah penduduk mencapai lebih dari 1.707.767 jiwa dengan tingkat kepadatan penduduk mencapai  11.719 per-km² dan kantor Kejari Jaksel terletak di Jalan Tanjung No.1, Jagakarsa, RT.1 RW.2, Tanjung Barat, Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12530.</p> 
          <p style="text-align: justify;">Wilayah hukum  Kejaksaan Negeri Jakarta Selatan menaungi Polres Metro Jakarta Selatan dan 12 Polsek-polsek yang terdapat di wilayah hukum  Jakarta Selatan dan tiap bulannya menerima 200 hingga 250 perkara untuk Tindak Pidana Umum dari penyidik Polri dan sekitar 25 untuk perkara tindak pidana khusus (korupsi) dari penyidik Jaksa Agung Muda Tindak Pidana Khusus dan Kejaksaan Tinggi DKI Jakarta.</p> 
          <p style="text-align: justify;">Merespon tuntutan masyarakat terhadap kinerja institusi Kejaksaan, Kejaksaan Republik Indonesia tengah berupaya melakukan Reformasi Birokrasi di institusinya yaitu dengan titik berat terhadap percepatan dan optimalisasi penanganan perkara, penerapan system teknologi Informasi dalam penanganan perkara, Penerapan system Teknologi Informasi terhadap Laporan Pengaduan dan redesign website Kejaksaan.</p> 
          <p style="text-align: justify;">Menyikapi tuntutan reformasi birokrasi dan Keterbukaan Informasi Publik, Kejaksaan Negeri Jakarta Selatan berupaya merespon tuntutan ini dengan melaunching website. Melalui web site ini Kejari Jaksel berusaha menyajikan informasi dan data yang mendukung pencapaian tujuan pembangunan hukum yang tengah diupayakan segenap jajaran Kejaksaan di seluruh Indonesia, sehingga masyarakat dapat mengakses data-data tentang dasar hukum dan undang-undang, kinerja Kejaksaan Negeri Jakarta Selatan, berita-berita  terbaru  tentang Kejaksaan serta info perkara, Website ini juga menyediakan ruang bagi siapa saja yang ingin berpartisipasi langsung dengan memberikan masukan, dan saran untuk perbaikan  Kejaksaan, khususnya Kejaksaan Negeri Jakarta Selatan termasuk pengaduan ataupun laporan tentang dugaan tindak pidana korupsi di wilayah Jakarta Selatan.</p>
          <p style="text-align: justify;">ANANG SUPRIATNA, SH., MH</p>
          <p style="text-align: justify;">Kepala Kejaksaan Negeri Jakarta Selatan</p>		
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
  
 
