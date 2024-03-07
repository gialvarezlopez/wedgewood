<?php
    /*
     * Template Name: Template Home
     */
?>

<?php  get_header(); ?>

<div class="mainHolder page_home">

    

    <!-- Menu  -->
    <?php 
        get_template_part('template-parts/block-hero',
            $arg, 
            array( 
                'my_data' => array(
                    'classes_btn' => "btn btn-white over-dark",
                )
            ) 
        ); 
    ?>

    <?php $data_top = get_field("top");?>

    <?php if($data_top['heading']) { ?>
    <section>
        <div class="wrapHolder">
            <div class="holder_main_title full">
                <h1 class="super_heading text-center"><?php echo $data_top['heading']; ?></h1>
            </div>
        </div>
    </section>
    <?php } ?>

    <!-- Video -->
    
    <section class="holder_video">
        <div class="wrapHolder">
            <?php if($data_top['video']) { ?>
            
                <video playsinline autoplay muted loop poster="" id="video_desktop">
                    <source src="<?php echo  $data_top['video']['url'];?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php }else{
                ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/videos/poster_home.jpg" class="img-fluid">
                <?php
            } ?>
        </div>
    </section>
    


    <!-- Urban -->
    <?php $data_urban = get_field("urban_and_oasis");?>
    <section class="h_urban">
        <div class="wrapHolder">
            <div class="set-flex items-center space-between gapDefault">
                <div class="holder_left set-full-width-mobile">
                    <div class="set_bar_small">
                        <div class="view-feature_lg set-full-width-mobile">
                            <?php if($data_urban['heading']) { ?>
                                <h2 class="heading"><?php echo $data_urban['heading']; ?></h2>
                            <?php } ?>

                            <?php if($data_urban['description']) { ?>
                                <div class="info">
                                    <?php echo $data_urban['description']; ?>
                                </div>
                            <?php } ?>
                            
                        </div>
                        <?php if( $data_urban['left_image_group']) { ?>
                            <img src="<?php echo $data_urban['left_image_group']['image']['sizes']['block_3'];?>" class="img-fluid set-full-width-mobile">
                        <?php } ?>

                        <?php if( $data_urban['left_image_group']['footer']) { ?>
                        <h3 class="title-sm"><?php echo $data_urban['left_image_group']['footer']; ?></h3>
                        <?php } ?>
                    </div>
                </div>
                <div>
                    <?php if( $data_urban['right_image_group']) { ?>
                        <img src="<?php echo $data_urban['right_image_group']['image']['sizes']['block_4'];?>" class="img-fluid set-full-width-mobile">
                    <?php } ?>
                    <?php if( $data_urban['right_image_group']['footer']) { ?>
                        <h3 class="title-sm"><?php echo $data_urban['right_image_group']['footer']; ?></h3>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>


    <!-- lifestyle Block 1-->
    <?php $data_lifestyle = get_field("lifestyle");?>
    <section class="h_lifestyle block_img_content">

        <?php 
            $heading = $data_lifestyle['heading'];
            $description = $data_lifestyle['description'];
            $link = $data_lifestyle['link'];
            $image = $data_lifestyle['poster']['image']['sizes']['block_2'];
            $poster = array("image"=> $image, 'label_left'=> $data_lifestyle['poster']['left_footer'], 'label_right'=> $data_lifestyle['poster']['right_footer']);
            get_template_part('template-parts/block-v1',
                $arg, 
                array( 
                    'my_data' => array(
                        'classes_btn' => "btn btn-dark btn-open-register",
                        'heading' => $heading,
                        'link' => $link,
                        'description' => $description,
                        'poster' =>  $poster
                    )
                ) 
            ); 
        ?>
    </section>
                                        
<div>   
<?php get_footer(); ?>
