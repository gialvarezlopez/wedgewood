<?php 
    $classes_btn = $args['my_data']['classes_btn'];
    $heading = $args['my_data']['heading'];
    $link = $args['my_data']['link'];
    $description = $args['my_data']['description'];
    $left_image = $args['my_data']['poster']['left_image'];
    $right_image = $args['my_data']['poster']['right_image'];
    $footer_left = $args['my_data']['poster']['label_left'];
    $footer_right = $args['my_data']['poster']['label_right'];

    $extra_top = @$args['my_data']['class_top'];
?>
<div class="wrapHolder">
    <div class="set-flex items-centerxxxx space-between gapDefault">
        <div>
            <?php if($left_image) { ?>
                <img src="<?php echo  $left_image['large']; ?>" class="img-fluid">
            <?php } ?>
            <div class="set-flex items-center space-between">
                <?php if($left_image['label_left']) { ?>
                    <h3 class="title-sm"><?php echo $left_image['label_left']; ?></h3>
                <?php } ?>
                <?php if($left_image['label_right']) { ?>
                    <h3 class="title-extra-sm"><?php echo $left_image['label_right']; ?></h3>
                <?php } ?>
            </div>
        </div>
        <div class="set-first-mobile">
            <div class="set_bar_small">
                <div class="view-feature_lg set-full-width-mobile">
                    <?php if($heading ) { ?>
                        <h2 class="heading set-full-width-mobile"><?php echo $heading ; ?></h2>
                    <?php } ?>
                    <div class="info">

                        <?php echo $description; ?>

                        <?php if ($link) { ?>
                            <div class="holder_btn">
                                <?php echo printBtn($link, $classes_btn, ""); ?>
                            </div>
                        <?php } ?>

                        <?php if($right_image) { ?>
                            <div class="holder_poster_small <?php echo $extra_top; ?>">
                                <picture>
                                    <source srcset="<?php echo $right_image['large']; ?>" media="(max-width: 768px)"/>
                                    <img src="<?php echo $right_image['small']; ?>" class="img-fluid">
                                </picture>
                                <?php if($right_image['label_left']) { ?>
                                    <h3 class="title-sm"><?php echo $right_image['label_left']; ?></h3>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>