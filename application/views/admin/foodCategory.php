<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view('admin/includes/upLink'); ?>
	<title>Admin | Food Category</title>
	<!-- DataTables -->
	<link rel="stylesheet"
		href="<?= base_url(); ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet"
		href="<?= base_url(); ?>assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<style>
		.thumbnails {
			width: 150px;
			height: 150px;
		}

		td {
			text-align: center;
			vertical-align: middle;
			line-height: normal;
		}

	</style>
</head>

<body ng-app="myApp" ng-controller="myCtrl" class="hold-transition sidebar-mini layout-fixed">
	<!-- wrapper start -->
	<div class="wrapper">
		<?php $this->load->view('admin/includes/nav'); ?>
	</div>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Food Category</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Home</a></li>
							<li class="breadcrumb-item">Canteen management</li>
							<li class="breadcrumb-item active">Food Category </li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>
		<!-- Main content -->
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<!--  ################# Content Place Area Start ################# -->
				<div class="row">
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="card">
							<div class="card-header">
								<!-- Button trigger modal -->
								<button ng-click="displayModal()" type="button" class="btn btn-primary float-right" id="addButton"
									data-toggle="modal" data-target="#modelId">
									<i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Food Category
								</button>
								<!-- Modal -->
								<div class="modal fade " id="modelId" tabindex="-1" role="dialog"
									aria-labelledby="modelTitleId" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<form role="form" enctype="multipart/form-data" id="f1" name="f1"
												method="post" action="<?= base_url(); ?>admin/addCareer">
												<div class="modal-header">
													<h5 class="modal-title">Add / Edit Food Category</h5>
													<button type="reset" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">

													<!-- general form elements -->
													<div class="card card-primary">
														<div class="card-header">
															<h3 ng-bind-html="card_title(addText)" class="card-title" id="card-title"></h3>
														</div>
														<!-- /.card-header -->
														<!-- form start -->
														<div class="card-body">
															<div class="row">
																<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
																	<div class="form-group">
																		<label for="txtCategory">Food Category</label>
																		<input type="text" ng-model="txtCat" class="form-control"
																			name="txtCategory" id="txtCategory"
																			placeholder="Enter Food Category, e.g.:Desserts"
																			required value="">
																	</div>
																</div>
																<div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
																	<div class="form-group">
																		<label for="txtPhoto">Food Category</label>
																		<input type="file" class="form-control"
																			name="txtPhoto" id="txtPhoto" required>
																		<input type="hidden" name="txtHidden"
																			id="txtHidden" value="">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /.card -->
												</div>
												<div class="modal-footer">
													<button type="reset" class="btn btn-danger"
														data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Food Categories list</h3>
							</div>
							<div class="card-body">
								<table id="example1" class="table table-bordered table-hover text-center">
									<thead>
										<tr>
											<th>#</th>
											<th>Category</th>
											<th>Photo</th>
											<th>Current Status</th>
											<th style="min-width:100px">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1;
                                        foreach ($foods as $food) : ?>
										<tr>
											<td><?= $i; ?></td>
											<td><?= $food->category; ?></td>
											<td><img src="<?= base_url(); ?>assets/uploads/food category/<?= $food->photo; ?>"
													class="thumbnails" /></td>
											<td><?php echo $food->status == '0' ? '<i class="fas fa-eye-slash" aria-hidden="true"></i>' : '<i class="fas fa-eye" aria-hidden="true"></i>'; ?>
											</td>
											<td>
												<a href="#" class="btnEdit btn btn-info" data-id="<?= $food->id; ?>"
													data-category="<?= $food->category; ?>"
													data-status="<?= $food->status; ?>">
													<i class="fas fa-edit" aria-hidden="true"></i>
												</a>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<a class="btn btn-danger"
													href="<?= base_url(); ?>admin/deleteCareer.html/<?= $food->id; ?>">
													<i class="fas fa-trash"></i>
												</a>
											</td>
										</tr>
										<?php $i++;
                                        endforeach; ?>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>Category</th>
											<th>Photo</th>
											<th>Current Status</th>
											<th style="min-width:100px">Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
					</div>
				</div>
				<!--  ################# Content Place Area End ################# -->
			</div>
		</section>
	</div>
	<!-- Main content End -->
	<!-- wrapper end -->
	<?php $this->load->view('admin/includes/downLink'); ?>

	<!-- DataTables -->
	<script src="<?= base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url(); ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?= base_url(); ?>assets/customJs/foodCategory.js"></script>
</body>
<script>
	$(document).ready(function () {
		/** On select display icon */
		$('select').change(function () {
			var icon = $(this).children('option:selected').data('id');
			$('#iconView').addClass('flaticon-' + icon);
		});
		/** Add Model Jquery */
		$('#addButton').click(function () {
			$('#txtCategory').val('');
			$('#txtLocation').val('');
			$('#txtExperience').val('');
			$('#txtQualification').val('');
			$('#f1').attr('action', '<?= base_url(); ?>admin/addCareer');
			//$('#card-title').html("Add Job Opening On Website");
		});
	});

</script>
<script>
	$(function () {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});

</script>

</html>
