	<input type="hidden" name="bulk_all" id="bulk_all" value="0" />
	<input type="hidden" name="bulk_action" id="bulk_action" value="" />
	<input type="hidden" name="cur_page" id="cur_page" value="<?php echo $cur_page;?>" />
	<input type="hidden" name="base_url" id="base_url" value="<?php echo $base_url;?>" />
	<input type="hidden" name="namespace" id="namespace" value="<?php echo $namespace;?>" />

<?php if($count):?>
	<div class="row-fluid">
	<div class="span12 top_pagination">
		<!-- <div class="pull-left col-md-6 show-records">
			<i class="grey"> Showing <?php echo ($cur_page+1);?> - <?php echo ($cur_page+$per_page)>$count?$count:($cur_page+$per_page);?>
				from <?php echo $count;?>
			</i>
		</div> -->
		<div class="pagination pull-right" id="pagination">
			<?php echo $pagination ?>
		</div>
	</div>
	</div>
<?php endif;
 $uri = $this->uri->segment(1);
	?>
			<table class="table table-hover table-fixed" id="data_table">
				<thead>
					<tr>
					<?php
						if($uri!= 'yorksite'){ ?>
						<th> 
							<input type="checkbox" name="check-all">
						</th>
						<?php }?>

						<?php  $cols = 0; 

						foreach ($fields as $field => $values):$cols++;?>
						<?php if($values['default_view'] == '0') continue;
						if($field=="email")
							$class = "col-xs-3";
						else
							$class = "col-xs-2"; ?>
						<th class="<?=$class;?>">
						<input type="hidden" value="<?php echo $base_url.$cur_page.'/'.$field.'/';?><?php echo Listing::reverse_direction($direction); ?>"> 
			
						<a href="<?php echo $base_url.$cur_page.'/'.$field.'/';?><?php echo Listing::reverse_direction($direction); ?>" data-original-title="Click to sort" data-toggle="tooltip" data-placement="top" title="Click to sort">
							<?php echo $values['name'];?> 
						</a>
						
						<?php if(strcmp($order,$field) === 0): $arrow_icon = (strcmp($direction, 'ASC') === 0)?'up_sort':'down_sort';?>
							
							 <div class="sort_group">

								<a style="display:<?php echo strcmp($arrow_icon, 'up_sort') === 0?'block':'none';?>" href="<?php echo $base_url.$cur_page.'/'.$field.'/';?><?php echo Listing::reverse_direction($direction); ?>">
									<i class="up_sort m_top_15"></i>
								</a>

								<a style="display:<?php echo strcmp($arrow_icon, 'down_sort') === 0?'block':'none';?>" href="<?php echo $base_url.$cur_page.'/'.$field.'/';?><?php echo Listing::reverse_direction($direction); ?>">
									<i class="down_sort m_top_15"></i>
								</a>
								
							</div>  
						<?php else:?>
							
						<?php endif;?>
						</th>

						<?php endforeach;?>

						<?php

						if($uri!= 'room'){ ?>

							<th width="10">Action</th>

						<?php } ?>
					</tr>
				</thead>
				<tbody>
			<?php if(count($list)):?>

			<?php foreach ($list as $item) : ?>
            
			<?php $val = $this->uri->segment(1);$val1 = $this->uri->segment(2);?>

			<?php $fridayrow=''; 
				?>
			<tr id="<?php echo (isset($item['id']))?$item['id']:""; ?>" class="<?php echo $fridayrow;?>">
            <?php

				if($uri!= 'yorksite'){ ?>
				<td>
                <?php if((isset($item['id']) && !empty($item['id']))) { ?>

                <?php echo '<label for="selectAll-'.$item['id'].'" class="custom-checkbox">&nbsp;</label>';?>
                <?php echo form_checkbox("op_select[]", $item['id'], '', "id='selectAll-{$item['id']}' class= 'checkbox'"); ?>
                <?php } ?>
                
				</td>
				<?php }?>
            
				<?php foreach ($fields as $field => $row):?>
				<?php if($row['default_view'] == '0') continue;
				if($field=="email")
					$class = "col-xs-3";
				else
					$class = "col-xs-2";
				 ?>
                                                 
				<td class="<?=$class;?>">
					<?php echo displayData($item[$field], $row['data_type'], $item);?>
				</td>
               
                
				<?php endforeach;?>

	          <?php if($uri=="yorksite"){ ?>
				<td>
					<?php if(strcmp($listing_action, '') === 0):?>
					<a href="" class="btn btn-default btn-xs">Details</a>
					<?php else:?>
						
						<?php 
							echo $this->parser->parse_string($listing_action, $item, TRUE);
						?>
					<?php endif;?>
				</td>
				<?php } ?>
			</tr>            
    			<?php endforeach; ?>
	        <?php else:?>
					<tr>
						<td colspan="<?php echo $cols+2;?>">
							<h2 class="text-center ">No records found.</h2>
						</td>
					</tr>
					<?php endif;?>
				</tbody>
			</table>
	



	<div class="pagination text-right pull-right" id="pagination">
			<?php echo $pagination ?>
	</div>