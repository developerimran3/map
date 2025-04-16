<?php include_once __DIR__ . '/templates/header.php'; ?>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php include_once __DIR__ . '/templates/sidebar.php'; ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php include_once __DIR__ . '/templates/topbar.php'; ?>

                <!-- end topbar -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Assessment To Delivery</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row column1">
                            <div class="col-md-12">
                                <div class="white_shd full p-4">
                                    <div class="heading1 margin_0">
                                        <h2>Documents Details</h2>
                                        <hr class="m-0">
                                    </div>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="assessment_date">Assessment Date</label>
                                                <input type="date" name="assessment_date" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="r_no">R No</label>
                                                <input type="number" name="r_no" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="x_no">X No</label>
                                                <input type="number" name="x-no" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="scann_document">Scann Document</label>
                                                <input type="file" multiple name="scann_document" class="form-control">
                                            </div>
                                            <div class="col-md-6 my-3">
                                                <button type="submit" class="main_bt">Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- table srart -->
                        <div class="row column1 pt-lg-4">
                            <div class="col-md-12">
                                <div class="white_shd full p-4">
                                    <div class="heading1 m-0 p-0">
                                        <h2 class="">All Assessment Documents</h2>
                                    </div>
                                    <div class="row column1">
                                        <div class="col-md-12">
                                            <div class=" full">
                                                <div class="heading1 margin_0">
                                                    <table class="table table-bordered table-striped mb-none dataTable no-footer " id="dataTable">
                                                        <thead>
                                                            <tr class="assessment">
                                                                <th>#</th>
                                                                <th>Importer Name</th>
                                                                <th>Lc No</th>
                                                                <th>Goods Name</th>
                                                                <th>Quantity</th>
                                                                <th>B/E No</th>
                                                                <th>B/E Date</th>
                                                                <th>R No</th>
                                                                <th>G. W</th>
                                                                <th>Cont. No</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="assessment">
                                                                <td>1</td>
                                                                <td>s ali weaving factory ltd</td>
                                                                <td>127224010198</td>
                                                                <td class="font-weight-bold">ARTIFICIAL LEATHER</td>
                                                                <td>1209 Pkgs</td>
                                                                <td>c- 1258695</td>
                                                                <td>01/11/2024</td>
                                                                <td>R1256421</td>
                                                                <td>28500.00 kgs</td>
                                                                <td>msku5554267x40fcl</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info" href="#"><i class="fa fa-eye"></i></a>
                                                                    <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                                                                    <a class="btn btn-sm btn-success" href="#"><i class="fa fa-arrow-circle-right "></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- table end -->

                            <!-- Footer-->
                            <?php include_once __DIR__ . '/templates/footer.php'; ?>
                            <script>
                                $("#dataTable").DataTable();
                            </script>