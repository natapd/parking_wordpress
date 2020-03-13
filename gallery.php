<?php /* Template Name: Фотогалерея */ ?>
 

<section id="photos" class="photos">
    <div class="photos__wrapper">
      <h2 class="photos_header section-title ">Фотографии</h2>
      
       <?php
$id = 84; // id страницы
$post = get_page($id);
$content = $post->post_content;
echo $post->post_content;
?>
</div>
</section>