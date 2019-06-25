
  <?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

?>
	</section>

	
  <section class="content-holder b-none inner_content" style="margin-top: 50px;padding-bottom: 0">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

		<h2 class="heading">Pidana Umum</h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>

	<section class="page_content">
		<section class="span9 first">

			<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSjVhdTVaCBdFwnC1pdk49hXu5_TQ4q2l9PEQoNAbjyRyUmscxZoDapL8NlwLx1ySPFUuHbLUv9cBt4/pubhtml?widget=true&amp;headers=false" width="100%" height="500" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	
	
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
                    <h4> <?= $post_judul?> </h4> 
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
  