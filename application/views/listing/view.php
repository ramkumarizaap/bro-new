<?php /*if ($message = $this->service_message->render()) :?>
<?php echo $message;?>
<?php endif; */?>

<!-- button tool bar section start here -->


<?php
	$uri = $this->uri->segment(1);
	$uri1 = $this->uri->segment(2);?>


        <form name="<?php echo $this->namespace;?>" id="<?php echo $this->namespace;?>" action="<?php echo site_url($this->uri->segment(1, 'admin').'/'.$this->uri->segment(2, 'index').'/bulk_actions');?>" method="post">
			<?php echo $listing;?>
				
		</form>
		<br><br>
	
	


	