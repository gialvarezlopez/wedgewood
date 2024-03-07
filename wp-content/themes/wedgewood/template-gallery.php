<?php
    /*
     * Template Name: Template Gallery
     */
?>

<?php  get_header(); ?>

<div class="mainHolder page_gallery">

    

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

    <?php $data_top = get_field('top'); ?>
    <?php if($data_top) { ?>
    <section>
        <div class="wrapHolder">
            <div class="holder_main_title full">
                <?php if($data_top['heading']) { ?>
                    <h1 class="super_heading text-center"><?php echo $data_top['heading']; ?></h1>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } ?>

    <!-- Gallery-->
    <?php $data_gallery = get_field("gallery"); ?>

    <?php if( $data_gallery &&  isset($data_gallery['section']) && count($data_gallery['section']) > 0) { ?>
        <?php foreach($data_gallery['section'] as $section) { ?>
            <section class="gallery parent_images">
                <div class="wrapHolder">
                    <?php if($section['title']) { ?>
                        <h3 class="sub_heading_book text-center"><?php echo $section['title']; ?></h3>
                    <?php } ?>

                    <?php $block = $section['block']; ?>
                    <?php if($block && count($block) > 0 ) { ?>

                        <?php $blockNum =  1; ?>

                        <?php $numThubnail = 1; ?>
                        <?php 
                            foreach($block as $item)
                            { 
                                $gallery_type = ($item['grid_type'] == "first_big" )?"gallery_v1":"gallery_v2";

                                if(count($block) > 1 && $blockNum == 1){
                                    $gallery_type = "gallery_v3";
                                }
                            ?>
                            <div class="block <?php echo $gallery_type; ?>">
                                <div class="grid-container holder_caroucel">
                                    <?php 
                                        if($item['gallery'] && count($item['gallery']) > 0 ) { 
                                            $numImage = 1;
                                            foreach($item['gallery'] as $image)
                                            {
                                                ?>
                                                    <div class="item_<?php echo $numImage; ?>">
                                                        <div class="gallery-full" data-thumbnail="<?php echo $numThubnail; ?>" data-title="<?php echo $image['title']; ?>" data-full="<?php echo esc_url($image['url']); ?>">
                                                            <?php 
                                                                if($item['grid_type'] == "first_big" ){
                                                                    $urlNormal = esc_url(($numImage == 3 || $numImage == 4)?$image['sizes']['block_g_3']:$image['sizes']['block_g_1']);
                                                                }else{
                                                                    $urlNormal = esc_url(($numImage == 4 || $numImage == 4)?$image['sizes']['block_g_3']:$image['sizes']['block_g_1']);
                                                                }
                                                            ?>

                                                            <img src="<?php echo $urlNormal; ?>" class="img-fluidx">
                                                        </div>
                                                        <h2 class="title-sm"><?php echo $image['title']; ?></h2>
                                                    </div>
                                                <?php
                                                $numImage++;

                                                $numThubnail++;
                                            }
                                        }   
                                    ?>
                                </div>
                            </div>
                        <?php 
                            $blockNum++; 
                        } 
                        ?>
                        


                        <?php
                            
                    } 
                    ?>
                </div>
            </section>

        <?php } ?>
    <?php } ?>
    
    


<div>   

<?php get_footer(); ?>
