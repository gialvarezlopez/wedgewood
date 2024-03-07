		<?php //include("inc/tmp_book_appointment.php"); ?>

		<?php //include("inc/footer.php"); ?>

		<?php 
			get_template_part('template-parts/footer',
				$arg, 
				array( 
					'my_data' => array(
						'sections' => $data_lobby['sections'],
						'startFrom' => $startFrom, 
						'leftContentPosition'=>'align-end'  
					)
				) 
			); 
		?>

		<?php  include ("inc/modal-gallery.php"); ?>	
		<?php  include ("inc/modal.php"); ?>
		
		
		<?php wp_footer(); ?>
	
</body>
</html>