<?php
/**
JOVIAL PORTFOLIO Theme
**/
 $portImage =  get_stylesheet_directory_uri(). '/assets/jovial.jpg';
?>

<div class="container">
	<div class= "row"> 
		<div class="image container"> 
			<img class='rounded-circle mt-3 img-fluid mx-auto d-block' width='250px' height='200px' src=<?php  echo  $portImage  ?>  >
		</div>

		<?php if (have_posts()) : 
			while (have_posts()) : the_post();
			
endwhile;

endif;
			?>

	</div>
</div>