<?php
    /*
     * Template Name: Template Interiros
     */
?>

<?php  get_header(); ?>

<div class="mainHolder page_interios">

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
    <?php if($data_top) { ?>
        <section class="top">
            <div class="wrapHolder">
                <div class="set-flex space-between ">
                    <div class="">
                        <div class=" ">
                            <div class=" set-full-width-mobile ">
                                <div class="set-holder-left view-feature_lg  set-full-width-mobile ">
                                    <?php if($data_top['heading']) { ?>
                                        <h2 class="heading set_bar_small "><?php echo $data_top['heading']; ?></h2>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <?php if($data_top['image']) { ?>
                        <img src="<?php echo  $data_top['image']['sizes']['block_2'];?>" class="img-fluid">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>



    <!-- everydays -->

    <?php 
    $data_desing = get_field("design_team");

    $num = 0;
    if($data_desing && count($data_desing['block']) > 0 ) { 
        foreach($data_desing['block'] as $element)
        {
            if ( $num%2==0 )
            { //echo "El $numero es par";
                ?>
                    <section class="everydays set-bg-yellow block_img_content">
                        <div class="wrapHolder"> 
                            <div class="set-flex  space-between gapDefault">
                                <div>
                                    <?php if($element['poster']['image']) { ?>
                                    <img src="<?php echo $element['poster']['image']['sizes']['block_2'];?>" class="img-fluid">
                                        <div class="set-flex items-center space-between">
                                            <?php if($element['poster']['left_footer']) { ?>
                                                <h3 class="title-sm"><?php echo $element['poster']['left_footer']; ?></h3>
                                            <?php } ?>
                                            <?php if($element['poster']['right_footer']) { ?>
                                                <h3 class="title-extra-sm"><?php echo $element['poster']['right_footer']; ?></h3>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>    
                                </div>
                                <div class="set-first-mobile <?php echo ($element['content']['apply_padding_top_in_title'])?"top-spacing":""; ?>">
                                    <div class="set_bar_small">
                                        <div class="view-feature_lg set-full-width-mobile">
                                            <?php if($element['content']['heading']) { ?>
                                                <h2 class="heading set-full-width-mobile"><?php echo $element['content']['heading']; ?></h2>
                                            <?php } ?>
                                            <div class="info">
                                                <?php echo $element['content']['description']; ?>

                                                <?php if ($element['content']['link']) { ?>
                                                    <div class="holder_btn">
                                                        <?php echo printBtn($element['content']['link'], "btn btn-dark", ""); ?>
                                                    </div>
                                                <?php } ?>
                                                
                                                <?php if($element['content']['image']) { ?>
                                                    <div class="holder_poster_small top-spacing">
                                                        <picture>
                                                            <source srcset="<?php echo $element['content']['image']['sizes']['large']; ?>" media="(max-width: 768px)"/>
                                                            <img src="<?php echo  $element['content']['image']['sizes']['block_5'];?>" class="img-fluid">
                                                        </picture>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php
            }else{
                //echo "El $numero es impar";
                ?>
               
               <section class="meetflavour set-bg-white block_img_content">
                    <div class="wrapHolder">

                        <div class="set-flex  space-between gapDefault">

                            
                            <div class="set-first-mobile">
                                
                                <div class="set_bar_small">
                                    <div class="view-feature_lg set-full-width-mobile">

                                        <?php if($element['content']['heading']) { ?>   
                                            <h2 class="heading set-full-width-mobile"><?php echo $element['content']['heading']; ?></h2>
                                        <?php } ?>

                                        <div class="info">
                                            <?php echo $element['content']['description']; ?>

                                            <?php if ($element['content']['link']) { ?>
                                                <div class="holder_btn">
                                                    <?php echo printBtn($element['content']['link'], "btn btn-dark", ""); ?>
                                                </div>
                                            <?php } ?>

                                            
                                        </div>
                                    </div>
                                </div>
                                <?php if($element['content']['image']) { ?>
                                    <div class="holder_poster_small no-padding top-spacing-v2">
                                        <picture>
                                            <source srcset="<?php echo $element['content']['image']['sizes']['large']; ?>" media="(max-width: 768px)"/>
                                            <img src="<?php echo  $element['content']['image']['sizes']['block_5'];?>" class="img-fluid">
                                        </picture>
                                    </div>
                                <?php } ?>
                            </div>
                            <div>
                                <?php if($element['poster']['image']) { ?>
                                    <img src="<?php echo $element['poster']['image']['sizes']['block_2'];?>" class="img-fluid">
                                
                                    <div class="set-flex items-center space-between">
                                        <?php if($element['poster']['left_footer']) { ?>
                                                <h3 class="title-sm"><?php echo $element['poster']['left_footer']; ?></h3>
                                        <?php } ?>
                                        <?php if($element['poster']['right_footer']) { ?>
                                                <h3 class="title-extra-sm"><?php echo $element['poster']['right_footer']; ?></h3>
                                        <?php } ?>
                                    </div>
                                    
                                <?php } ?>  
    
                            
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            }

            $num++;
        }
    } 
    ?>   

    


    <?php /* ?>
    <!-- Meet flavour-->
    <section class="meetflavour set-bg-white block_img_content">
        <div class="wrapHolder">

            <div class="set-flex  space-between gapDefault">

                
                <div class="set-first-mobile">
                    
                    <div class="set_bar_small">
                        <div class="view-feature_lg set-full-width-mobile">
                        
                            <h2 class="heading set-full-width-mobile">WHERE FUN MEETS FLAVOUR</h2>
                            <div class="info">
                                
                                <p>
                                    A contemporary kitchen with integrated appliances along with an intuitive layout, inspires conversations and eases entertaining.
                                </p>
                                <div class="holder_btn"><a href="#" class="btn btn-dark">Register Now</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="holder_poster_small no-padding top-spacing-v2">
                        <img src="<?php echo  get_stylesheet_directory_uri();?>/images/from_xd/interiors/tina-fleer-L_Zaxx0nKns-unsplash_web.jpg" class="img-fluid">      
                    </div>
                </div>
                <div>
                    <img src="<?php echo  get_stylesheet_directory_uri();?>/images/from_xd/interiors/ADHOC-59YONGE-C13-SuiteKitchenDining-221130-FINAL01-D_web.jpg" class="img-fluid">
                    
                        <div class="set-flex items-center space-between">
                            <h3 class="title-sm">Suite Dining & Kitchen Area</h3>
                            <h3 class="title-extra-sm">Artist renderings, for illustration purposes only. E&OE.</h3>
                        </div>
                        
                    
                </div>
            </div>
        </div>
    </section>


    <!-- Meet Functions -->
    <section class="meet-functions set-bg-yellow block_img_content">
        <div class="wrapHolder">
            <div class="set-flex   space-between gapDefault">
                <div>
                    <img src="<?php echo  get_stylesheet_directory_uri();?>/images/from_xd/interiors/Untitled-1-4.28.50-PM_web.jpg" class="img-fluid">
                    
                        <div class="set-flex items-center space-between">
                            <h3 class="title-sm">For visual representation only.</h3>
                            
                        </div>
                </div>
                <div class="set-first-mobile top-spacing">
                    <div class="set_bar_small">
                        <div class="view-feature_lg set-full-width-mobile">
                        
                            <h2 class="heading set-full-width-mobile">WHERE FUN MEETS FUNCTION</h2>
                            <div class="info">
                                
                                <p>
                                    More than 50 unique floorplans have been thoughtfully designed for the everyday comforts and conveniences with something for everyone no matter what stage of life you are in.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php */ ?>
    <!-- Features-->

    <?php $data_feature = get_field("features"); ?>
    <?php if($data_feature) { ?>
        <section class="features set-bg-white block_img_content">
            <div class="wrapHolder">

                <div class="set-flex  space-between gapDefault">

                    
                    <div class="set-first-mobile">
                        <?php if($data_feature['content']) { ?>
                            <div class="set_bar_small">
                                <div class="view-feature_lg set-full-width-mobile">

                                    <?php if($data_feature['content']['heading']) { ?>
                                        <h2 class="heading set-full-width-mobile"><?php echo $data_feature['content']['heading']; ?></h2>
                                    <?php } ?>
                                    <div class="info">
                                        
                                        <?php echo $data_feature['content']['description']; ?>

                                        <?php if ($data_feature['content']['link']) { ?>
                                            <div class="holder_btn">
                                                <?php echo printBtn($data_feature['content']['link'], "btn btn-dark", ""); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col_right set-full-width-mobile">
                            <div class="holderSlideFeature set-full-width-mobile">                
                                <?php if($data_feature['categories'] && isset($data_feature['categories']['items']) && count($data_feature['categories']['items']) > 0) { 
                                    $num = 1;
                                    foreach($data_feature['categories']['items'] as $item) { ?>
                                        <div  data-feature="<?php echo $num; ?>" class="item-features <?php echo ($num==1)?"active":""; ?>">
                                            <h1><?php echo $item['heading']; ?></h1>
                                            <div class="holder_buildersxxxxxxxx set-full-width-mobile">
                                                <?php echo $item['content']; ?>    
                                            </div>
                                        </div>
                                    <?php
                                        $num++; 
                                    } 
                                    ?>
                                    <div class="pagination_features">
                                        <a href="#" data-direction="-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/Icon_Previous.svg"></a>
                                        <span><span class="current">1</span> / 7</span>
                                        <a href="#" data-direction='1'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/Icon_Next.svg"></a>
                                    </div>    
                                <?php } ?>
                            </div>    

                        <div class="holder_builders set-full-width-mobile">
                            <?php echo $data_feature['categories']['note']; ?>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>








                               
<div>   
<?php get_footer(); ?>
