<?php
    /*
     * Template Name: Template Team
     */
?>

<?php  get_header(); ?>

<div class="mainHolder page_team">

    

    <!-- Hero -->
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

    <?php if($data_top) { ?> 

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
                    <?php }else{ ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/videos/poster_team.jpg" class="img-fluid">
                    <?php } ?>
                </div>
            </section>
        
    <?php } ?>  

    <!-- Our Developers -->
    
    
        <section class="developers set-bg-yellow">
            <div class="wrapHolder">
                <?php $data_companies = get_field("companies"); ?>
                <?php if($data_companies) { ?>
                    <div class="set-flex space-between gapDefault info">
                        <div class="col_left set_bar_small set-full-width-mobile">
                            <?php if($data_companies['heading']) { ?>
                                <h3 class="sub_heading_book"><?php echo $data_companies['heading']; ?></h3>
                            <?php } ?>
                        </div>
                        <div class="col_right set-full-width-mobile">
                            <section class="companies">
                                <?php if($data_companies['items'] && count($data_companies['items']) > 0 ) { ?>
                                    <?php  foreach($data_companies['items'] as $value){ ?>

                                        <div>
                                            <div><img src="<?php echo  $value['logo']['url'];?>"></div>
                                            <div class="content">
                                                <?php echo  $value['description'];?>
                                            </div>
                                        </div>
                                        
                                    <?php } ?>
                                <?php } ?>

                            </section>
                        </div>
                    </div>
                <?php } ?>
            
                <?php $data_gallery = get_field("gallery"); ?>
                <?php if($data_gallery) { ?>
                    <div class="block gallery_v1 gallery_developers">
                        <div class="grid-container holder_caroucel">

                            <?php
                                $num = 1; 
                                foreach($data_gallery as $image)
                                {
                                    ?>
                                    <div class="item_<?php echo $num; ?>">
                                        <div class="gallery-full" data-thumbnail="<?php echo $num; ?>" data-title="<?php echo $image['title']; ?>" data-full="<?php echo esc_url($image['url']); ?>">
                                            <img src="<?php echo esc_url(($num == 3 || $num == 4)?$image['sizes']['block_g_3']:$image['sizes']['block_g_1']); ?>" class="img-fluidx">
                                        </div>
                                        <h2 class="title-sm"><?php echo $image['title']; ?></h2>
                                    </div>
                                    <?php
                                    $num++;
                                }
                            ?>
                        </div>
                    </div>    
                <?php } ?>                                      
            </div>
        </section>
    

    <!-- Meet creativity -->
    <?php $data_project = get_field("projects"); ?>
    <?php if($data_project) { ?>
        <section class="meet-creativity set-bg-white">
            <div class="wrapHolder">
                <div class="set-flex space-between gapDefault info">
                    <div class="col_left set_bar_small set-full-width-mobile">
                        <?php if($data_project['heading']) { ?>
                            <h3 class="sub_heading_book"><?php echo $data_project['heading']; ?></h3>
                        <?php } ?>

                        <?php if($data_project['sub_heading']) { ?>
                            <h4 class="sub_title"><?php echo $data_project['sub_heading']; ?></h4>
                        <?php } ?>
                    </div>
                    <div class="col_right set-full-width-mobile">
                        <?php if($data_project['project'] && count($data_project['project']) > 0 ) { ?>

                            <?php foreach($data_project['project'] as $elem) { ?>
                                <section class="companies">
                                
                                    <div>
                                        <div class="holder_logo"><img src="<?php echo  $elem['logo']['url'];?>"></div>
                                        <div class="content set-full-width-mobile">
                                            <?php echo  $elem['description'];?>
                                        </div>
                                    </div>
                                    <div>
                                        <?php if($elem['image']) { ?>
                                            <img src="<?php echo  $elem['image']['url'];?>" class="img-fluid">
                                        <?php } ?>
                                    </div>
                                </section>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                
            
            </div>
        </section>
    <?php } ?>




                                        
<div>   
<?php get_footer(); ?>
