 <?php 
	$works_element_project_image = get_post_thumbnail_id();

	$size = 'large'; // (thumbnail, medium, large, full or custom size)
	$project_permalink = get_permalink();
    $title = get_the_title();

    $project_year = get_field( 'project_year');
    if ($project_year){
    	 $project_year=  ", ".$project_year;
    }
    $project_location = get_field( 'project_location');
    if ($project_location){
    	 $project_location=  ", ".$project_location;
    }

    $category_detail=get_the_category(); // 

	?>

    <div  onclick="window.open('<?php echo $project_permalink;?>', '_self');" class="works_grid_item category-all <?php foreach($category_detail as $cd){ echo " category-".$cd->cat_name;}?> ">
    	<img src=" <?php echo wp_get_attachment_image_url( $works_element_project_image, $size ); ?>">
    	<h3> <?php echo $title.$project_location.$project_year;?> </h3>
    </div><?php		

?> 