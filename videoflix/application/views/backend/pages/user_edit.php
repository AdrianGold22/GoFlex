<div class="row-fluid">
	<div class="span12">
		<div class="grid simple ">
			<div class="grid-title no-border"></div>
			<div class="grid-body no-border">
				<?php 
					$user_detail = $this->db->get_where('user',array('user_id'=>$edit_user_id))->row();
					?>
				<form method="post" action="<?php echo base_url();?>index.php?admin/user_edit/<?php echo $edit_user_id;?>"
					enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-8">
							<div class="form-group">
								<label class="form-label">User Name</label>
								<span class="help"></span>
								<div class="controls">
									<input type="text" class="form-control" name="name" 
										value="<?php echo $user_detail->name;?>">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">User Email</label>
								<span class="help"></span>
								<div class="controls">
									<input type="email" class="form-control" name="email" 
										value="<?php echo $user_detail->email;?>">
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Update">
								<a href="<?php echo base_url();?>index.php?admin/user_list" 
									class="btn btn-default">Go back
								</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>