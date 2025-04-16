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
                                    <h2>Bank Enty</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row column1">
                            <div class="col-md-12">
                                <div class="white_shd full p-4">
                                    <div class="heading1 margin_0">
                                        <h2>Sonali</h2>
                                        <hr class="m-0">
                                    </div>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-3 ">
                                                <label for="importer_name">Importer Name</label>
                                                <input type="text" name="importer_name" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="be_no">B/E Number</label>
                                                <input type="text" name="be_no" class="form-control" placeholder="B/E Number">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="be_date">B/E Date</label>
                                                <input type="date" name="be_date" class="form-control" placeholder="B/E Date">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sonali_debit">Debit</label>
                                                <input type="text" name="sonali_debit" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="sonali_credit">Credit</label>
                                                <input type="text" name="sonali_credit" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="goods_name">Goods Name</label>
                                                <input type="text" name="goods_name" class="form-control">
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
                                        <h2 class="">Bank Details</h2>
                                    </div>
                                    <div class="row column1">
                                        <div class="col-md-12">
                                            <div class=" full">
                                                <div class="heading1 margin_0">
                                                    <table class="table table-bordered table-striped mb-none dataTable no-footer " id="dataTable">
                                                        <thead>
                                                            <tr class="sonali_bank">
                                                                <th>#</th>
                                                                <th>Importer Name</th>
                                                                <th>B/E No</th>
                                                                <th>B/E Date</th>
                                                                <th>Debit</th>
                                                                <th>Credit</th>
                                                                <th>Balance</th>
                                                                <th>Goods Name</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="sonali_bank">
                                                                <td>1</td>
                                                                <td>s. ali weaving factory ltd</td>
                                                                <td>C-1010121</td>
                                                                <td>01/11/2024</td>
                                                                <td>1200.00</td>
                                                                <td>100.00</td>
                                                                <td class="font-weight-bold text-primary">120.00</td>
                                                                <td class="font-weight-bold">ARTIFICIAL LEATHER</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                                                                    <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
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