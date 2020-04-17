
<h1> Control Book Menu </h1>

	<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">

			<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="Home/add_page"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Title</th>
										<th>Author</th>
										<th>Date published</th>
										<th>Number of Page</th>
										<th>Type of Book </th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									<?php foreach($book_db as $u){ ?>
			                        <tr>
			                          <td><?php echo $u->Title ?></td>
			                          <td><?php echo $u->Author ?></td>
			                          <td><?php echo $u->date_published ?></td>
			                          <td><?php echo $u->Number_Page ?></td>
			                          <td><?php echo $u->Type_book ?></td>
			                          <td class="text-right">
			                            <a href='Home/edit_page?id=<?php echo $u->No ?>' class='btn btn-primary'>Edit</a>
			                            <a href="Home/delete?id=<?php echo $u->No ?>" class="btn btn-danger"  onclick="return confirm('Are you sure ?')">Delete</a>
			                          </td>
			                        </tr>
			         				<?php } ?> 

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->


		</div>
		<!-- /.content-wrapper -->

	</div>


