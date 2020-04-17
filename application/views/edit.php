	<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">

			<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						 Edit Book 

					</div>
					<div class="card-body">
						<form method="post" action="<?php echo base_url('Home/edit_submit'); ?>" class="form-horizontal">  
							<?php foreach($book_db as $u){ ?>

                        	<div class="form-group">
								<label> Title </label> 
								<input type="text" name="Title" value="<?php echo $u->Title;?>" class="form-control">
							</div>

	
                        	<div class="form-group">
								<label> Author </label>											
								<input type="text" name="Author" value="<?php echo $u->Author;?>" class="form-control">
							</div>


            	            <div class="form-group">
								<label> Date Publish </label>
								<input type="date" name="date_published" value="<?php echo $u->date_published;?>" class="form-control">
							</div>

    
                        	<div class="form-group">
								<label> Number of Pages </label>
								<input type="number" name="Number_Page" value="<?php echo $u->Number_Page;?>" class="form-control">
							</div>

                	        <div class="form-group">
								<label> Type of Book </label>
								<select name="Type_book" class="form-control">
									<option value="Novel"  			<?php if($u->Type_book=='Novel') echo 'selected';?> >Novel</option>
							 		<option value="Documentation" 	<?php if($u->Type_book=='Documentation') echo 'selected';?> >Documentation</option>
							 		<option value="Other"			<?php if($u->Type_book=='Other') echo 'selected';?> >Other</option>
								</select>
							</div>

	 					<input type="text" name="No" value="<?php echo $u->No;?>" hidden>

						<button type="submit" class="btn btn-success" >Submit</button>
						</form>
						<?php } ?> 
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->


		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->
