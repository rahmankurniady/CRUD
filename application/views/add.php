

	<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">

			<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						 Add New Book
					</div>
					<div class="card-body">
						<form method="post" action="<?php echo base_url('Home/add_submit'); ?>" class="form-horizontal">  

                        <div class="form-group">
               				<label> Title </label> 
							<input type="text" name="Title" class="form-control" required>
                        </div>
  

			

                        <div class="form-group">
							<label> Author </label>											
							<input type="text" name="Author"  class="form-control" required>
                        </div>



                        <div class="form-group">
							<label> Date Publish </label>
							<input type="date" name="date_published"  class="form-control" required>
						</div>
     

                        <div class="form-group">
							<label> Number of Pages </label>
							<input type="number" name="Number_Page"  class="form-control" required>
						</div>
    


                        <div class="form-group">
							<label> Type of Book </label>
							<select name="Type_book" class="form-control">
								<option value="Novel">Novel</option>
							 	<option value="Documentation">Documentation</option>
							 	<option value="Other">Other</option>
							</select>
						</div>
      

						<button type="submit" class="btn btn-success">Submit</button> 
						</form>

		
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->


		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->
