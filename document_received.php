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
                                    <h2>Orginial Documents Received</h2>
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
                                                <label for="document_receiver">Document Receiver</label>
                                                <input type="date" name="document_receiver" class="form-control" placeholder="Document Receiver">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="invoice_value">Invoice Value</label>
                                                <input type="number" name="invoice_value" class="form-control" placeholder="Invoice Value">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="invoice_no">Invoice Number</label>
                                                <input type="text" name="invoice_no" class="form-control" placeholder="Invoice Number">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="invoice_date">Invoice Date</label>
                                                <input type="date" name="invoice_date" class="form-control" placeholder="Invoice Date">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="net_weight">Net Weight</label>
                                                <input type="number" name="net_weight" class="form-control" placeholder="Net Weight">
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
                                        <h2 class="">All Received Documents</h2>
                                    </div>
                                    <div class="row column1">
                                        <div class="col-md-12">
                                            <div class=" full">
                                                <div class="heading1 margin_0">
                                                    <table class="table table-bordered table-striped mb-none dataTable no-footer " id="dataTable">
                                                        <thead>
                                                            <tr class="document_received">
                                                                <th>#</th>
                                                                <th>Importer Name</th>
                                                                <th>Goods Name</th>
                                                                <th>Quantity</th>
                                                                <th>Value</th>
                                                                <th>Invoice No</th>
                                                                <th>IV. Date</th>
                                                                <th>Cont. No</th>
                                                                <th>G.W</th>
                                                                <th>N.W</th>
                                                                <th>Rec. Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="document_received">
                                                                <td>1</td>
                                                                <td>s ali weaving factory ltd</td>
                                                                <td class="font-weight-bold">ARTIFICIAL LEATHER</td>
                                                                <td>1209 Pkgs</td>
                                                                <td>$21272.00</td>
                                                                <td>vbncn562415</td>
                                                                <td>01/11/2024</td>
                                                                <td>msku5554267x40fcl</td>
                                                                <td>28500.00 kg</td>
                                                                <td>27800.00 kg</td>
                                                                <td>11/12/2024</td>
                                                                <td>
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