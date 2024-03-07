<?php 
    $classes_btn = $args['my_data']['classes_btn'];
    $heading = $args['my_data']['heading'];
    $link = $args['my_data']['link'];
    $description = $args['my_data']['description'];
    $image = $args['my_data']['poster']['image'];
    $footer_left = $args['my_data']['poster']['label_left'];
    $footer_right = $args['my_data']['poster']['label_right'];
?>
<div class="wrapHolder">
    <div class="set-flex items-center space-between gapDefault">
        <div>
            <?php //echo $poster['image']['size']['block_2']; ?>
            <?php //var_dump($poster); ?>
            <?php if($image) { ?>
                <img src="<?php echo $image; ?>" class="img-fluid">
            <?php } ?>
            <div class="set-flex items-center space-between">
                <?php if($footer_left) { ?>
                    <h3 class="title-sm"><?php echo $footer_left; ?></h3>
                <?php } ?>

                <?php if( $footer_right) { ?>
                    <h3 class="title-extra-sm"><?php echo $footer_right; ?></h3>
                <?php } ?>
            </div>
        </div>
        <div class="set-first-mobile">
            <div class="set_bar_small">
                <div class="view-feature_lg set-full-width-mobile">
                    <?php if ($heading) { ?>
                        <h2 class="heading"><?php echo$heading; ?></h2>
                    <?php } ?>

                    <div class="info">
                        <?php if ($description) { ?>
                            <?php echo $description; ?>
                        <?php } ?>    
                        <?php if ($link) { ?>
                            <div class="holder_btn">
                                <?php echo printBtn($link, $classes_btn, ""); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>