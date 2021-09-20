<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('admin/includes/upLink'); ?>
    <title>Admin | Dashboard</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- wrapper start -->
    <div class="wrapper">
        <?php $this->load->view('admin/includes/nav'); ?>
    </div><div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
                    
                </div>

                <!--  ################# Content Place Area End ################# -->
            </div>
        </section>
    </div>
    <!-- Main content End -->
    <!-- wrapper end -->
    <?php $this->load->view('admin/includes/downLink'); ?>
</body>

</html>