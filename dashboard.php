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
                <?php include_once __DIR__ . '/templates/innerdashboard.php'; ?>
                <!-- dashboard inner -->

                <!-- new enty table srart -->
                <div class="row column1 pt-lg-4">
                    <div class="col-md-12">
                        <div class="white_shd full p-4">
                            <div class="heading1 m-0 p-0">
                                <h2 class="">All New Documents</h2>
                            </div>
                            <div class="row column1">
                                <div class="col-md-12">
                                    <div class=" full">
                                        <div class="heading1 margin_0">
                                            <table class="table table-bordered table-striped mb-none dataTable no-footer " id="dataTable">
                                                <thead>
                                                    <tr class="new_enty_tr">
                                                        <th>#</th>
                                                        <th>Importer Name</th>
                                                        <th>Goods Name</th>
                                                        <th>Quantity</th>
                                                        <th>Vassel</th>
                                                        <th>BL No</th>
                                                        <th>Cont. No</th>
                                                        <th>LC No</th>
                                                        <th>G.W</th>
                                                        <th>ETA. Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="new_enty_tr">
                                                        <td>1</td>
                                                        <td>s ali weaving factory ltd</td>
                                                        <td class="font-weight-bold">ARTIFICIAL LEATHER</td>
                                                        <td>1250 bales</td>
                                                        <td>maersk vladivostok</td>
                                                        <td>sitgzpbgx2536597</td>
                                                        <td>msku1598756x40fcl</td>
                                                        <td>127224010105</td>
                                                        <td>28500.00 kg</td>
                                                        <td>11/12/2024</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table end -->


                <!-- Received document table srart -->
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
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table end -->


                <!-- Registered Enty table srart -->
                <div class="row column1 pt-lg-4">
                    <div class="col-md-12">
                        <div class="white_shd full p-4">
                            <div class="heading1 m-0 p-0">
                                <h2 class="">All Registered Documents</h2>
                            </div>
                            <div class="row column1">
                                <div class="col-md-12">
                                    <div class=" full">
                                        <div class="heading1 margin_0">
                                            <table class="table table-bordered table-striped mb-none dataTable no-footer " id="dataTable">
                                                <thead>
                                                    <tr class="register_enty">
                                                        <th>#</th>
                                                        <th>Importer Name</th>
                                                        <th>Lc No</th>
                                                        <th>Goods Name</th>
                                                        <th>Quantity</th>
                                                        <th>B/E No</th>
                                                        <th>B/E Date</th>
                                                        <th>B/E Lane</th>
                                                        <th>BL No</th>
                                                        <th>Cont. No</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="register_enty">
                                                        <td>1</td>
                                                        <td>s ali weaving factory ltd</td>
                                                        <td>127224010198</td>
                                                        <td class="font-weight-bold">ARTIFICIAL LEATHER</td>
                                                        <td>1209 Pkgs</td>
                                                        <td>c- 1258695</td>
                                                        <td>01/11/2024</td>
                                                        <td>Yellow Lane</td>
                                                        <td>231154326121</td>
                                                        <td>msku5554267x40fcl</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assessment Enty table srart -->
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