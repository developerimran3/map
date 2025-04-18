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

                <!-- end topbar -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>New Enty By Copy BL</h2>
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
                                    <form id="new_enty_form" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-3 ">
                                                <label for="importer_name">Importer Name</label>
                                                <input type="text" name="importer_name" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="goods_name">Goods Name</label>
                                                <input type="text" name="goods_name" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="quantity">Quantity</label>
                                                <input type="text" name="quantity" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="pkgs_code">Pkgs Code</label>
                                                <select name="pkgs_code" id="" class="form-control">
                                                    <option hidden></option>
                                                    <option value="ROLLS">ROLLS</option>
                                                    <option value="PKGS">PKGS</option>
                                                    <option value="BALES">BALES</option>
                                                    <option value="CTNS">CTNS</option>
                                                    <option value="BAGS">BAGS</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="vessel">Vessel</label>
                                                <input type="text" name="vessel" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="bl_no">BL No</label>
                                                <input type="text" name="bl_no" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="containerNo">Container No</label>
                                                <input type="text" name="containerNo" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="containerSize">Container Size</label>
                                                <select name="containerSize" id="" class="form-control">
                                                    <option hidden></option>
                                                    <option value="20' FCL">20' FCL</option>
                                                    <option value="40' FCL">40' FCL</option>
                                                    <option value="20' LCL">20' LCL</option>
                                                    <option value="40' LCL">40' LCL</option>
                                                    <option value="BULK">BULK</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="containerLocation">Container Location</label>
                                                <input type="text" name="containerLocation" value="Y-" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for=" lc_no">Lc Number</label>
                                                <input type="text" name="lc_no" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="lc_date">LC Date</label>
                                                <input type="date" name="lc_date" class="form-control" p>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="grossWeight">Gross Weight</label>
                                                <input type="number" name="grossWeight" class="form-control">
                                            </div>

                                            <div class="col-md-3 ">
                                                <label for="arivel_date">Arivel Date</label>
                                                <input type="date" name="arivel_date" class="form-control">
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
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <?php
                                                        $data = all('enty');
                                                        $i = 1;
                                                        foreach ($data as $item):
                                                        ?>

                                                            <tbody>
                                                                <tr class="new_enty_tr">
                                                                    <td><?php echo $i;
                                                                        $i++; ?> </td>
                                                                    <td><?php echo $item->importer_name; ?></td>
                                                                    <td class="font-weight-bold"><?php echo $item->goods_name; ?></td>
                                                                    <td><?php echo $item->quantity; ?> <?php echo $item->pkgs_code; ?></td>
                                                                    <td><?php echo $item->vessel; ?></td>
                                                                    <td><?php echo $item->bl_no; ?></td>
                                                                    <td><?php echo $item->containerNo; ?> x <?php echo $item->containerSize; ?></td>
                                                                    <td><?php echo $item->lc_no; ?></td>
                                                                    <td><?php echo $item->grossWeight; ?>.00 KGS</td>
                                                                    <td><?php echo $item->arivel_date; ?></td>
                                                                    <td>
                                                                        <a class="btn btn-sm btn-warning data-edit" href="#"><i class="fa fa-edit"></i></a>
                                                                        <a class="btn btn-sm btn-success" href="#"><i class="fa fa-arrow-circle-right "></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        <?php endforeach; ?>
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