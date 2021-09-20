<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('admin/includes/upLink'); ?>
    <title>Admin | Career</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/admin/css/flaticon.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
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
                        <h1>Career Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Career</li>
                            <li class="breadcrumb-item active">Career Management </li>
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
                                <button type="button" class="btn btn-primary float-right" id="addButton" data-toggle="modal" data-target="#modelId">
                                    <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add career on website
                                </button>
                                <!-- Modal -->
                                <div class="modal fade " id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <form role="form" enctype="multipart/form-data" id="f1" name="f1" method="post" action="<?= base_url(); ?>admin/addCareer">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add / Edit career on website</h5>
                                                    <button type="reset" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <!-- general form elements -->
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title" id="card-title"></h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="txtCategory">Job Category</label>
                                                                        <input type="text" class="form-control" name="txtCategory" id="txtCategory" placeholder="Enter job category, e.g.:Assistant Manager-Sales" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="txtLocation">Location</label>
                                                                        <input type="text" class="form-control" name="txtLocation" id="txtLocation" placeholder="Enter location, e.g.:Surat,HO" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="txtExperience">Experience</label>
                                                                        <input type="text" class="form-control" name="txtExperience" id="txtExperience" placeholder="Enter experience, e.g.:Minimum 4 to 6 years in sales" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="txtQualification">Qualification</label>
                                                                        <input type="text" class="form-control" name="txtQualification" id="txtQualification" placeholder="Enter qualification, e.g.:B.E Electrical/Any Graduate" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="dropIcon">Select Icon</label>
                                                                        <select class="form-control" name="dropIcon" id="dropIcon">
                                                                            <option value="" disabled selected hidden>
                                                                                -------- SELECT ICON --------</option>
                                                                            <?php foreach ($icons as $icon) : ?>
                                                                                <option class="" data-id="<?= $icon->icon_name; ?>" value="<?= $icon->id; ?>">
                                                                                    <?= $icon->icon_name; ?>
                                                                                </option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label for="dropIcon">Icon</label>
                                                                        <div class="icon">
                                                                            <span style="width: 200px;font-size: 25px;" id="iconView" class="iconView"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="checkConfirmation" value="1" name="checkConfirmation" checked>
                                                                <label class="form-check-label" for="checkConfirmation">Yes, I want to opening this job at website </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                <h3 class="card-title">Opening of all jobs on website</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Icon</th>
                                            <th>Category</th>
                                            <th>Location</th>
                                            <th>Experience</th>
                                            <th>Qualification</th>
                                            <th>Current Status</th>
                                            <th style="min-width:100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($careers as $career) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><i class="icon flaticon-<?= $career->icon_name; ?>"></i></td>
                                                <td><?= $career->category; ?></td>
                                                <td><?= $career->location; ?></td>
                                                <td><?= $career->experience; ?></td>
                                                <td><?= $career->qualification; ?></td>
                                                <td><?php echo $career->status == '0' ? '<i class="fas fa-eye-slash" aria-hidden="true"></i>' : '<i class="fas fa-eye" aria-hidden="true"></i>'; ?></td>
                                                <td>
                                                    <a href="#" class="btnEdit btn btn-info" data-id="<?= $career->ID; ?>" data-category = "<?= $career->category; ?>" data-location="<?= $career->location; ?>" data-experience="<?= $career->experience; ?>" data-qualification="<?= $career->qualification; ?>">
                                                        <i class="fas fa-edit" aria-hidden="true"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a class="btn btn-danger" href="<?= base_url(); ?>admin/deleteCareer.html/<?= $career->ID; ?>">
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
                                            <th>Icon</th>
                                            <th>Category</th>
                                            <th>Location</th>
                                            <th>Experience</th>
                                            <th>Qualification</th>
                                            <th>Current Status</th>
                                            <th>Action</th>
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
</body>
<script>
    $(document).ready(function() {
        /** On select display icon */
        $('select').change(function() {
            var icon = $(this).children('option:selected').data('id');
            $('#iconView').addClass('flaticon-' + icon);
        });
        /** Add Model Jquery */
        $('#addButton').click(function() {
            $('#txtCategory').val('');
            $('#txtLocation').val('');
            $('#txtExperience').val('');
            $('#txtQualification').val('');
            $('#f1').attr('action', '<?= base_url(); ?>admin/addCareer');
            $('#card-title').html("Add Job Opening On Website");
        });
    });
</script>
<script>
    $(function() {
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