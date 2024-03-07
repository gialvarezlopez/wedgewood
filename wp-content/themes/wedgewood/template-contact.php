<?php
    /*
     * Template Name: Template Contact
     */
?>
<?php  get_header(); ?>

<div class="mainHolder page_contact">

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
                                    <?php if($data_top['email']) { ?>
                                        <h4 class="">Email: <a href="mailto:<?php echo $data_top['email']; ?>" class="underline"><?php echo $data_top['email']; ?></a></h4>
                                    <?php } ?>
                                    <?php if($data_top['phone_number']) { ?>
                                        <h4 class=""><a href="+1<?php echo preg_replace('/\D+/', '',  $data_top['phone_number']); ?>"><?php echo $data_top['phone_number']; ?></a></h4>
                                    <?php } ?>

                                    <?php if ($data_top['link']) { ?>
                                        <div class="holder_btn">
                                            <?php echo printBtn($data_top['link'], "btn btn-dark", ""); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <?php if($data_top['map']) { ?>
                        <img src="<?php echo  $data_top['map']['sizes']['block_2'];?>" class="img-fluid">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>





<div>

<?php get_footer(); ?>