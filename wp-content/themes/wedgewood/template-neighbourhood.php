<?php
    /*
     * Template Name: Template Neighbourhood
     */
?>

<?php  get_header(); ?>

<div class="mainHolder page_neighbourdhood">

    <!-- Menu -->
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
        <section>
            <div class="wrapHolder">
                <div class="set-flex space-betweenx">
                    <div class="col_fifti">
                        <div class=" ">
                            <div class=" set-full-width-mobile ">
                                <div class="set-holder-center view-feature_lg ">
                                    <?php if($data_top['heading']) { ?>
                                        <h2 class="heading set_bar_small "><?php echo $data_top['heading']; ?></h2>
                                    <?php } ?>
                                </div>
                                 
                                <?php if($data_top['left_image']) { ?>
                                    <div class="set-img-left">
                                        <picture>
                                            <source srcset="<?php echo $data_top['left_image']['sizes']['large']; ?>" media="(max-width: 768px)"/>
                                            <img 
                                                src="<?php echo $data_top['left_image']['sizes']['block_5'] ?>" 
                                                class="img-fluid"
                                            >
                                        </picture>
                                        <h3 class="title-sm white"><?php echo $data_top['left_footer_image']; ?></h3>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col_fifti">
                        <?php if($data_top['right_image']) { ?>
                            <picture>
                                <img src="<?php echo $data_top['right_image']['url']; ?>" class="img-fluid">
                            </picture>
                            <h3 class="title-sm white"><?php echo $data_top['right_footer_image']; ?></h3>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>


    <!-- all conections -->
    <?php $data_conn = get_field("connections");?>
    <?php if($data_conn) { ?>
        <section class="all_conections">
            <div class="wrapHolder">
                <div class="set-flex gapDefault">
                    <div class="col_left set-full-width-mobile">
                        <?php if($data_conn['heading']) { ?>
                            <h3 class="sub_heading_book"><?php echo $data_conn['heading']; ?></h3>
                        <?php } ?>


                        <?php   
                        if($data_conn['items'] && count($data_conn['items']) > 0 ) 
                        {
                                foreach($data_conn['items'] as $item)
                                {
                                    ?>
                                    <section class="item">
                                    <div class="wrapMoveType set-flex items-center">
                                        <div class="col_left">
                                            <?php if($item['icon']) { ?>
                                                <img src="<?php echo  $item['icon']['url'];?>">
                                            <?php } ?>
                                        </div>
                                        <div class="col_right"></div>
                                    </div>
                                    <div class="wrapTime">
                                        <?php if($item['item'] && count($item['item']) > 0 ) { 

                                            if(count($item['item']) > 1){
                                                foreach( $item['item'] as $value)
                                                {
                                                        ?>
                                                        <div>
                                                            <h3 class="title-normal"><?php echo $value['name']; ?></h3>
                                                            <h2 class="title-medium"><?php echo $value['value']; ?></h2>
                                                        </div>
                                                        <?php
                                                   
                                                }
                                            }else{
                                                    ?>
                                                    <h3 class="title-normal"><?php echo $item['item'][0]['name']; ?></h3>
                                                    <h2 class="title-medium"><?php echo $item['item'][0]['value']; ?></h2>
                                                    <?php
                                                }

                                        } ?>  
                                    </div>
                                </section>
                                    <?php
                                } 
                        }   
                        ?>
                    </div>
                    <div class="col_right">
                        <?php if($data_conn['image']) { ?>
                            <img src="<?php echo  $data_conn['image']['url'];?>" class="img-fluid">
                        <?php } ?>


                        <?php $data_amenities = get_field("amenities"); ?>

                        <?php if($data_amenities) { ?>
                            <section class="amenities_map">
                
                                <div>
                                    <?php if($data_amenities['heading']) { ?>
                                            <h2 class=""><?php echo $data_amenities['heading']; ?></h2>
                                        <?php } ?>

                                        <?php if($data_amenities['item'] && count($data_amenities['item']) > 0 ) { 
                                            foreach($data_amenities['item'] as $col)
                                            {
                                                //echo $col['order']."<br>";
                                                if($col['order'] == "col_1")
                                                {
                                                    ?>
                                                    <div class="location">
                                                    <h4 class="title-normal"><?php echo $col['title']; ?></h4>
                                                    <div class="description">
                                                        <?php echo $col['content']; ?>
                                                    </div>
                                                    </div>
                                                    <?php
                                                }
                                            }  
                                        }  
                                        ?>
                                </div>
                                <div>

                                    <?php if($data_amenities['item'] && count($data_amenities['item']) > 0 ) { 
                                            foreach($data_amenities['item'] as $col)
                                            {
                                                //echo $col['order']."<br>";
                                                if($col['order'] == "col_2")
                                                {
                                                    ?>
                                                    <div class="location">
                                                        <h4 class="title-normal"><?php echo $col['title']; ?></h4>
                                                        <div class="description">
                                                            <?php echo $col['content']; ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }  
                                        }  
                                    ?>
                                </div>
                                <div>
                                    <?php if($data_amenities['item'] && count($data_amenities['item']) > 0 ) { 
                                            foreach($data_amenities['item'] as $col)
                                            {
                                                //echo $col['order']."<br>";
                                                if($col['order'] == "col_3")
                                                {
                                                    ?>
                                                    <div class="location">
                                                        <h4 class="title-normal"><?php echo $col['title']; ?></h4>
                                                        <div class="description">
                                                            <?php echo $col['content']; ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }  
                                        }  
                                    ?>

                                    <div class="note">
                                        <?php if($data_amenities['first_note']) { ?>
                                            <?php echo $data_amenities['first_note']; ?>
                                        <?php }  ?>
                                         <br><br>
                                         <?php if($data_amenities['second_note']) { ?>
                                            <img src="<?php echo  get_stylesheet_directory_uri();?>/images/icons/subway_station.png">
                                            <p class="last-note"><?php echo $data_amenities['second_note']; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </section>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- culture meet -->
    <?php $data_culture = get_field("culture_meets");?>
    <section class="culture block_img_content">
        <?php 
            $heading = $data_culture['heading'];
            $description = $data_culture['description'];
            $link = $data_culture['link'];
            $left_image = $data_culture['left_image']['sizes']['block_2'];

            $right_image_small = $data_culture['right_image']['sizes']['block_5'];
            $right_image_large = $data_culture['right_image']['sizes']['large'];
            $poster = array(
                    "left_image"=> array("large"=>$left_image, "label_left"=> $data_culture['left_footer_image'], "label_right"=> ""), 
                    "right_image"=>array(
                        "small"=>$right_image_small, 
                        "large"=>$right_image_large, 
                        "label_left"=> $data_culture['right_footer_image'], 
                        "label_right"=> ""
                    ), 
                    'label_right'=> $data_culture['right_footer_image']
            );
            get_template_part('template-parts/block-v2',
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


    <!-- Gallery-->
    <?php $data_gallery = get_field("gallery"); ?>

    <?php if($data_gallery) { ?>
        <section class="gallery">
            <div class="wrapHolder parent_images">
                <div class="block gallery_v1">
                    <div class="grid-container holder_caroucel">

                        <?php
                            $num = 1; 
                            foreach($data_gallery as $image)
                            {
                                //var_dump($image);
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
            </div>
        </section>
    <?php } ?>



    <!-- delight -->
    <?php $data_delight = get_field("delights"); ?>
    <?php if($data_delight) { ?>
        <section class="delight">
            <div class="wrapHolder">
                <div class="set-flex space-between gapDefault">
                    <div class="col_left set-full-width-mobile">
                        <div class="content set-full-width-mobile">
                            <?php if($data_delight['heading']) { ?>
                                <h3 class="sub_heading_light set-full-width-mobile"><?php echo $data_delight['heading']; ?></h3>
                            <?php } ?>
                            <div class="info">
                                <?php if($data_delight['description']) { ?>
                                    <?php echo $data_delight['description']; ?>
                                <?php } ?>

                                <?php if ($data_delight['link']) { ?>
                                    <div class="holder_btn">
                                        <?php echo printBtn($data_delight['link'], "btn btn-dark", ""); ?>
                                    </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col_right set-full-width-mobile">
                        <?php if($data_delight['item'] && count($data_delight['item']) > 0 ) { ?>
                            <?php foreach($data_delight['item'] as $elem) { ?>
                                <div class="holder_items">
                                    <div class="set-flex space-between flex-end">
                                        <div class="col_image">
                                            <div class="gr">
                                                <img src="<?php echo $elem['image']['sizes']['block_6'];?>" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col_content">
                                            <div class="data">
                                                <h3 class="title-medium"><?php echo $elem['heading']; ?></h3>
                                                <?php echo $elem['description']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>    
                
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
                                        
<div>   
<?php get_footer(); ?>
