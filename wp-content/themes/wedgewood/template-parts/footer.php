<!-- Footer -->

<?php $footer = get_field("footer","option"); ?>
<?php if($footer) { ?>
    <footer>
        <div class="wrapHolder">
            <div class="set-flex main_holder">
                <div class="col_left">
                        <?php if($footer['main_logo']) { ?>
                            <div class="col_one"><img src="<?php echo $footer['main_logo']['url']; ?>"></div>
                        <?php } ?>
                        <div class="col_two">
                            <?php echo $footer['rights_reserved']; ?>
                        </div>
                </div>
                <div class="col_right">
                    <?php if($footer['heading']) { ?>
                        <h1><?php echo $footer['heading']; ?></h1>
                    <?php } ?>

                    <?php if($footer['sub_heading']) { ?>
                        <p><?php echo $footer['sub_heading']; ?></p>
                     <?php } ?>  

                    <?php if($footer['social_network'] && count($footer['social_network']['item']) > 0) { ?>
                        <ul class="">
                            <?php foreach($footer['social_network']['item'] as $n ) { ?>
                                <li>
                                    <a href="<?php echo $n['url']; ?>"><img src="<?php echo $n['icon']['url']; ?>"></a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>

                    <div class="holder_companies set-flex items-center">

                        <?php if($footer['companies'] && count( $footer['companies']['item']) > 0) { ?>
                            <?php foreach($footer['companies']['item'] as $n ) { ?>
                                <div>
                                    <a href="<?php echo $n['url']; ?>"><img src="<?php echo $n['logo']['url']; ?>"></a>
                                </div>
                                <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php } ?>
