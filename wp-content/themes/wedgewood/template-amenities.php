<?php
    /*
     * Template Name: Template Amenities
     */
?>

<?php  get_header(); ?>

<div class="mainHolder page_amenities">

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

    <?php $data_top = get_field("top"); ?>
    <section class="top">
        <div class="wrapHolder">

            <?php if($data_top['hero']) { ?>
                <div class="set-flex space-between ">
                    <div class="">
                        <div class=" ">
                            <div class=" set-full-width-mobile ">
                                <div class="set-holder-left view-feature_lg  set-full-width-mobile ">
                                    <?php if($data_top['hero']['heading']) { ?>
                                        <h2 class="heading set_bar_small "><?php echo $data_top['hero']['heading']; ?></h2>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <?php if($data_top['hero']['image']) { ?>
                            <img src="<?php echo  $data_top['hero']['image']['sizes']['block_2'];?>" class="img-fluid">
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

            <?php if($data_top['call_home']) { ?>
            <div class="set-flex space-between">
                <div class="">
                    <div class="">
                        <div class=" set-full-width-mobile ">
                            <div class="holder_content_feature set-full-width-mobile">
                                <?php if($data_top['call_home']['heading']) { ?>
                                <h2 class="sub_heading set-full-width-mobile">A PLACE TO CALL HOME</h2>
                                <?php } ?>
                                <div class="info">
                                        <?php if($data_top['call_home']['description']) { ?>
                                            <div class="description"><?php echo $data_top['call_home']['description']; ?></div>
                                        <?php } ?>

                                        <?php if($data_top['call_home']['indications']) { ?>
                                        <div class="features">
                                           <?php echo $data_top['call_home']['indications']; ?>
                                        </div>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <?php if($data_top['call_home']['image']) { ?>
                        <img src="<?php echo  $data_top['call_home']['image']['url'];?>" class="img-fluid">
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>


    <!-- Lobby -->
    <?php $data_lobby = get_field("lobby"); ?>
    <?php if($data_lobby) { ?>
        <section class="lobby set-bg-white block_img_content">
            <?php 
                $heading = $data_lobby['content']['heading'];
                $description = $data_lobby['content']['description'];
                $link = $data_lobby['content']['link'];
                $right_image_small = $data_lobby['content']['image']['sizes']['block_5'];
                $right_image_large = $data_lobby['content']['image']['sizes']['large'];
                $label_img_right = $data_lobby['content']['footer_image'];

                $poster = array(
                        "left_image"=> array(
                            "large"=>$data_lobby['poster']['image']['sizes']['block_2'], "label_left"=>  $data_lobby['poster']['left_footer_image'], "label_right"=> $data_lobby['poster']['right_footer_image']
                        ), 
                        "right_image"=>array(
                            "small"=>$right_image_small, "large"=>$right_image_large, "label_left"=>$label_img_right, "label_right"=> ""
                        ), 
                        'label_right'=> $data_lobby['poster']['right_footer_image']
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
    <?php } ?>

    <!-- Amenities -->
    <?php $data_amenities = get_field("amenities"); ?>
    <?php if($data_amenities) { ?>
        <section class="amenities">
            <div class="wrapHolder">
                <?php if($data_amenities['lifestyle']) { ?>
                    <div class="set-flex space-between">
                        <div class="">
                            <div class="">
                                <div class=" set-full-width-mobile ">
                                    <div class="holder_content_feature set-full-width-mobile">
                                        <?php if($data_amenities['lifestyle']['heading']) { ?>
                                            <h2 class="sub_heading set-full-width-mobile"><?php echo $data_amenities['lifestyle']['heading']; ?></h2>
                                        <?php } ?>
                                        <div class="info">
                                                
                                                 <?php if($data_amenities['lifestyle']['description']) { ?>
                                                    <div class="description"><?php echo $data_amenities['lifestyle']['description']; ?></div>
                                                <?php } ?>

                                                <?php if($data_amenities['lifestyle']['locations']) { ?>
                                                    <div class="features"> <?php echo $data_amenities['lifestyle']['locations']; ?></div>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <?php if($data_amenities['lifestyle']['image']) { ?>
                                <img src="<?php echo  $data_amenities['lifestyle']['image']['url'];?>" class="img-fluid">
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if($data_amenities['for_all']) { ?>
                    <div class="set-flex space-between">
                        <div class="">
                            <div class="">
                                <div class=" set-full-width-mobile ">
                                    <div class="holder_content_feature set-full-width-mobile">
                                        <?php if($data_amenities['for_all']['heading']) { ?>
                                            <h2 class="sub_heading set-full-width-mobile"><?php echo $data_amenities['for_all']['heading']; ?></h2>
                                        <?php } ?>

                                        <div class="info">
                                                <?php if($data_amenities['for_all']['description']) { ?>
                                                    <div class="description"><?php echo $data_amenities['for_all']['description']; ?></div>
                                                <?php } ?>

                                                <?php if($data_amenities['for_all']['locations']) { ?>
                                                    <div class="features">
                                                        <?php echo $data_amenities['for_all']['locations']; ?>
                                                    </div>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <?php if($data_amenities['for_all']['image']) { ?>
                                <img src="<?php echo  $data_amenities['for_all']['image']['url'];?>" class="img-fluid">
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    <?php } ?>

    <!-- Fitness -->
    <?php $data_fitness = get_field("fitness"); ?>
    <?php if($data_fitness) { ?>
        <section class="fitness set-bg-yellow block_img_content">
            <div class="wrapHolder">
                <div class="set-flex  space-between gapDefault">
                    <?php ?>
                    <div class="set-first-mobile">
                        <?php if($data_fitness['content']) { ?>
                            <div class="holder_poster_small no-padding">
                                <?php if($data_fitness['content']['image']) { ?>

                                    <picture>
                                        <source srcset="<?php echo $data_fitness['content']['image']['sizes']['large']; ?>" media="(max-width: 768px)"/>
                                        <img src="<?php echo $data_fitness['content']['image']['sizes']['block_5'];?>" class="img-fluid">
                                    </picture>
                                          
                                <?php } ?>
                            </div>
                            <div class="set_bar_small">
                                <div class="view-feature_lg set-full-width-mobile">
                                    <?php if($data_fitness['content']['heading']) { ?>
                                        <h2 class="heading set-full-width-mobile"><?php echo $data_fitness['content']['heading']; ?></h2>
                                    <?php } ?>
                                    <div class="info">
                                        <?php echo $data_fitness['content']['description']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div>
                        <?php if($data_fitness['poster'] && $data_fitness['poster']['image']) { ?>
                            <img src="<?php echo  $data_fitness['poster']['image']['sizes']['block_2'];?>" class="img-fluid">
                            
                            <div class="set-flex items-center space-between">
                                <?php if($data_fitness['poster']['left_footer_image']) { ?>
                                    <h3 class="title-sm"><?php echo $data_fitness['poster']['left_footer_image']; ?></h3>
                                <?php } ?>

                                <?php if($data_fitness['poster']['right_footer_image']) { ?>
                                    <h3 class="title-extra-sm"><?php echo $data_fitness['poster']['right_footer_image']; ?></h3>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>


    <!-- Co-working -->
    <?php $data_co_working = get_field("co-working"); ?>
    <?php if( $data_co_working ) { ?>
        <section class="co-working set-bg-white block_img_content">
            <div class="wrapHolder">
                <div class="set-flex   space-between gapDefault">
                    <div>
                        <?php if( $data_co_working['image'] ) { ?>
                            <img src="<?php echo  $data_co_working['image']['sizes']['block_2'];?>" class="img-fluid">
                        
                            <div class="set-flex items-center space-between">
                                <?php if($data_co_working['left_footer_image']) { ?>
                                    <h3 class="title-sm"><?php echo $data_co_working['left_footer_image']; ?></h3>
                                <?php } ?>

                                <?php if($data_co_working['right_footer_image']) { ?>
                                    <h3 class="title-extra-sm">Artist renderings, for illustration purposes only. E&OE.</h3>
                                <?php } ?>
                            </div>
                        <?php } ?>    
                    </div>
                    <div class="set-first-mobile top-spacing">
                        <div class="set_bar_small">
                            <div class="view-feature_lg set-full-width-mobile">
                                    
                                <?php if( $data_co_working['heading'] ) { ?>
                                    <h2 class="heading set-full-width-mobile"><?php echo  $data_co_working['heading']; ?></h2>
                                <?php } ?>
                                <div class="info">
                                    
                                    <?php echo $data_co_working['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>


    <!-- party room -->
    <?php $data_partyroom = get_field("partyroom"); ?>
    <?php if($data_partyroom) { ?>
        <section class="party_room set-bg-yellow">
            <div class="wrapHolder">
                <div class="set-flex space-between gapDefault">
                    <div class="col_left">
                        <?php if($data_partyroom['poster'] && $data_partyroom['poster']['image']) { ?>
                        <img src="<?php echo  $data_partyroom['poster']['image']['sizes']['block_4']; ?>" class="img-fluid">
                        <div class="set-flex items-center space-between">
                            <?php if($data_partyroom['poster']['left_footer_image']) { ?>
                                <h3 class="title-sm"><?php echo $data_partyroom['poster']['left_footer_image']; ?></h3>
                            <?php } ?>

                            <?php if($data_partyroom['poster']['right_footer_image']) { ?>
                                <h3 class="title-extra-sm"><?php echo $data_partyroom['poster']['right_footer_image']; ?></h3>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>

                    <?php if($data_partyroom['content']) { ?>
                        <div class="col_right set-first-mobile">
                            <div class="">
                                <div class=" set-full-width-mobile ">
                                    <div class="set-flex">
                                        <div>
                                            <?php if($data_partyroom['content']['image_one']) { ?>
                                                <picture>
                                                    <source srcset="<?php echo $data_fitness['content']['image_one']['sizes']['large']; ?>" media="(max-width: 768px)"/>
                                                    <img src="<?php echo  $data_partyroom['content']['image_one']['sizes']['block_6'];?>" class="img-fluid">
                                                </picture>
                                            <?php } ?>
                                        </div>
                                        <div class="set-first-mobile">
                                            <div class="set-flex column">
                                                <div>
                                                    <?php if($data_partyroom['content']['image_two']) { ?>
                                                        
                                                        <picture>
                                                            <source srcset="<?php echo $data_fitness['content']['image_two']['sizes']['large']; ?>" media="(max-width: 768px)"/>
                                                            <img src="<?php echo  $data_partyroom['content']['image_two']['sizes']['block_5'];?>" class="img-fluid">
                                                        </picture>

                                                        <?php if($data_partyroom['content']['footer_image_two']) { ?>
                                                            <h3 class="title-sm"><?php echo $data_partyroom['content']['footer_image_two']; ?></h3>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                                <div class="set-first-mobile">
                                                    <div class="set_bar_small">
                                                        <div class="view-feature_lg set-full-width-mobile">
                                                            
                                                            <?php if($data_partyroom['content']['heading']) { ?>
                                                                <h2 class="heading set-full-width-mobile"><?php echo $data_partyroom['content']['heading']; ?></h2>
                                                            <?php } ?>
                                                            <div class="info">
                                                                <?php echo $data_partyroom['content']['description']; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>


    <!-- Multimedia -->
    <?php $data_multimedia = get_field("multimedia"); ?>
    <?php if($data_multimedia) { ?>
        <section class="multimedia set-bg-white block_img_content">
            <div class="wrapHolder">
                <div class="set-flex   space-between gapDefault">
                    
                    <div class="set-first-mobile top-spacing">
                        <div class="set_bar_small">
                            <div class="view-feature_lg set-full-width-mobile">
                                <?php if($data_multimedia['heading']) { ?>
                                    <h2 class="heading set-full-width-mobile"><?php echo $data_multimedia['heading']; ?></h2>
                                <?php } ?>
                                <div class="info">
                                    <?php echo $data_multimedia['description'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php if($data_multimedia['image']) { ?>
                            <img src="<?php echo  $data_multimedia['image']['sizes']['block_2'];?>" class="img-fluid">
                        
                            <div class="set-flex items-center space-between">
                                <?php if($data_multimedia['left_footer_image']) { ?>
                                    <h3 class="title-sm"><?php echo $data_multimedia['left_footer_image']; ?></h3>
                                <?php } ?>

                                <?php if($data_multimedia['right_footer_image']) { ?>
                                    <h3 class="title-extra-sm"><?php echo $data_multimedia['right_footer_image']; ?></h3>
                                <?php } ?>
                            </div>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- Playroom  -->
    <?php $data_playroom = get_field("playroom"); ?>
    <?php if($data_playroom) { ?>
        <section class="playroom set-bg-yellow block_img_content">

            <?php 
                $heading = $data_playroom['content']['heading'];
                $description = $data_playroom['content']['description'];
                $link = $data_playroom['content']['link'];
                $right_image_small = $data_playroom['content']['image']['sizes']['block_5'];
                $right_image_large = $data_playroom['content']['image']['sizes']['large'];
                $label_img_right = $data_playroom['content']['footer_image'];

                $poster = array(
                        "left_image"=> array(
                            "large"=>$data_playroom['poster']['image']['sizes']['block_2'], "label_left"=>  $data_playroom['poster']['left_footer_image'], "label_right"=> $data_playroom['poster']['right_footer_image']
                        ), 
                        "right_image"=>array(
                            "small"=>$right_image_small, "large"=>$right_image_large, "label_left"=>$label_img_right, "label_right"=> ""
                        ), 
                        'label_right'=> $data_playroom['poster']['right_footer_image']
                );
                get_template_part('template-parts/block-v2',
                    $arg, 
                    array( 
                        'my_data' => array(
                            'classes_btn' => "btn btn-dark btn-open-register",
                            'heading' => $heading,
                            'link' => $link,
                            'description' => $description,
                            'poster' =>  $poster,
                            'class_top' => "hight-top",
                        )
                    ) 
                ); 
            ?>

        </section>
    <?php } ?>

    <!-- Amenities For designed -->
    <?php if($data_amenities && $data_amenities['entertaining']) { ?>
        <section class="amenities">
            <div class="wrapHolder">
                <div class="set-flex space-between">
                    <div class="">
                        <div class="">
                            <div class=" set-full-width-mobile ">
                                <div class="holder_content_feature set-full-width-mobile">
                                    <?php if($data_amenities['entertaining']['heading']) { ?>
                                        <h2 class="sub_heading set-full-width-mobile"><?php echo $data_amenities['entertaining']['heading']; ?></h2>
                                    <?php } ?>
                                    <div class="info">
                                            
                                        <?php if($data_amenities['entertaining']['description']) { ?>
                                            <div class="description"><?php echo $data_amenities['entertaining']['description']; ?></div>
                                        <?php } ?>

                                        <?php if($data_amenities['entertaining']['locations']) { ?>
                                            <div class="features">
                                                <?php echo $data_amenities['entertaining']['locations']; ?>
                                            </div>
                                        <?php } ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <?php if($data_amenities['entertaining']['image']) { ?>
                            <img src="<?php echo  $data_amenities['entertaining']['image']['url'];?>" class="img-fluid">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- Outdoor  -->
    <?php $data_outdoor= get_field("outdoor"); ?>
    <?php if($data_outdoor) { ?>
        <section class="outdoor set-bg-yellow block_img_content">

            <?php 
                    $heading = $data_outdoor['content']['heading'];
                    $description = $data_outdoor['content']['description'];
                    $link = $data_outdoor['content']['link'];
                    $right_image_small = $data_outdoor['content']['image']['sizes']['block_5'];
                    $right_image_large = $data_outdoor['content']['image']['sizes']['large'];
                    $label_img_right = $data_outdoor['content']['left_footer'];
                    

                    $poster = array(
                            "left_image"=> array(
                                "large"=>$data_outdoor['poster']['image']['sizes']['block_2'], "label_left"=>  $data_outdoor['poster']['left_footer_image'], "label_right"=> $data_outdoor['poster']['right_footer_image']
                            ), 
                            "right_image"=>array(
                                "small"=>$right_image_small, "large"=>$right_image_large, "label_left"=>$label_img_right, "label_right"=> ""
                            ), 
                            'label_right'=> $data_outdoor['poster']['right_footer_image']
                    );
                    get_template_part('template-parts/block-v2',
                        $arg, 
                        array( 
                            'my_data' => array(
                                'classes_btn' => "btn btn-dark btn-open-register",
                                'heading' => $heading,
                                'link' => $link,
                                'description' => $description,
                                'poster' =>  $poster,
                                'class_top' => "top-spacing",
                            )
                        ) 
                    ); 
                ?>                    
        </section>
    <?php } ?>

    <!-- Indoor -->
    <?php $data_indoor= get_field("indoor"); ?>
    <?php if($data_indoor) { ?>
        <section class="indoor set-bg-white block_img_content">
            <div class="wrapHolder">
                <div class="set-flex   space-between gapDefault">
                    
                    <div class="set-first-mobile top-spacing">
                        <div class="set_bar_small">
                            <div class="view-feature_lg set-full-width-mobile">
                                <?php if($data_indoor['content']['heading']) { ?>
                                    <h2 class="heading set-full-width-mobile"><?php echo $data_indoor['content']['heading']; ?></h2>
                                <?php } ?>
                                <div class="info">
                                    <?php echo $data_indoor['content']['description']; ?>
                                    <?php if ($data_indoor['content']['link']) { ?>
                                        <div class="holder_btn">
                                            <?php echo printBtn($data_indoor['content']['link'], "btn btn-dark", ""); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php if ($data_indoor['poster']['image']) { ?>
                            <img src="<?php echo  $data_indoor['poster']['image']['sizes']['block_2'];?>" class="img-fluid">
                        
                            <div class="set-flex items-center space-between">
                                <?php if($data_indoor['poster']['left_footer_image']) { ?>
                                    <h3 class="title-sm"><?php echo $data_indoor['poster']['left_footer_image']; ?></h3>
                                <?php } ?>

                                <?php if($data_indoor['poster']['right_footer_image']) { ?>
                                    <h3 class="title-extra-sm"><?php echo $data_indoor['poster']['right_footer_image']; ?></h3>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>





                               
<div>   
<?php get_footer(); ?>
