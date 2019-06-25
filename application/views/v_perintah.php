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

		<h2 class="heading">Perintah Harian Jaksa Agung RI</h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>

    	<section class="page_content">
		<section class="span9 first">
			<article class="blog_detail_wrapper">
      <p style="text-align: center;"><strong>&nbsp; <img style="float: center; border: 3px solid black; border-width: 4px; margin: 5px;width:41%;" src="<?= base_url()?>assets/images/HM_Prasetyo.jpg" alt=""><br></strong></p>
      <h3 align="center"><strong>JAKSA AGUNG </strong></h3>
      <h3 align="center"><strong>REPUBLIK INDONESIA </strong></h3>
      <h3 align="center"><strong>Perintah Harian</strong><strong>&nbsp;</strong></h3>
      <h3 align="center"><strong>Jaksa Agung Republik Indonesia</strong><strong>&nbsp;</strong></h3>
      <h3 align="center"><strong>Pada Tanggal 22 Juli 2018</strong></h3>
      <p align="center">&nbsp;</p>
      <ol>
		<li style="text-align: justify;">TINGKATKAN SENSITIFITAS DAN INTENSITAS KEPEKAAN DALAM MELAKSANAKAN TUGAS DAN TANGGUNGJAWAB PENEGAKKAN HUKUM DENGAN CERDAS, LUGAS DAN BERINTEGRITAS;</li>
		<li style="text-align: justify;">POSISIKAN DIRI SECARA PERSONAL, FUNGSIONAL DAN INSTANSIONAL YANG KUKUH MENGGENGGAM SERTA MENJUJUNG TINGGI HARKAT DAN KEHORMATAN PROFESI SELAKU INSAN ADHYAKSA, AGAR PANTAS DIPUJI DAN DIHARGAI;</li>
		<li style="text-align: justify;">MENYADARI DAN MENJAGA DIRI SEBAGAI PENDAMPING, AKSELERATOR, PENGAWAL DAN PENGAMAN JALAN NYA PEMERINTAHAN DAN PEMBANGUNAN YANG DAPAT DIPERCAYA DAN DIANDALKAN;</li>
		<li style="text-align: justify;">BEKERJA DAN BERKARYA TANPA PAMRIH DENGAN BAIK SEPENUH HATI, MENIADAKAN PERBEDAAN PERLAKUAN DAN PELAYANAN AGAR MEMBERI MANFAAT, MEMENUHI HARAPAN KUAT DARI MASYARAKAT;</li>
		<li style="text-align: justify;">PUPUK DAN TUMBUH KEMBANGKAN SEMANGAT BEKERJA BERSAMA SEMUA PIHAK, DALAM BINGKAI HUBUNGAN YANG SOLID DAN SINERGIS, DEMI UPAYA MERAWAT KEBERAGAMAN DAN KEBHINEKAAN, BAGI KEBESARAN BANGSA DAN KEUTUHAN NEGARA KESATUAN REPUBLIK INDONESIA YANG HARMONIS.</li>
	   </ol>
	   <p>&nbsp;</p>
	   <p style="text-align: center;">JAKARTA, 22 JULI 2018</p>
	   <p style="text-align: center;">JAKSA AGUNG REPUBLIK INDONESIA</p>
	   <p style="text-align: center;">&nbsp;</p>
	   <h2 style="text-align: center;">&nbsp;&nbsp;<strong>H.M. PRASETYO</strong></h2>

    </article>
</section>
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
  