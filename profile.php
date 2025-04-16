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


                        <!-- table srart -->
                        <div class="row column1">
                            <div class="col-md-5">
                                <div class="white_shd full p-4">
                                    <div class="heading1  margin_0">
                                        <h2 class="">All New Documents</h2>
                                    </div>
                                    <div class="row column1">
                                        <div class="col-md-12">
                                            <div class=" full">
                                                <div class="heading1 margin_0">
                                                    <div class="card shadow-sm">
                                                        <div class="card-body">
                                                            <form id="new_enty_form" method="POST" enctype="multipart/form-data">

                                                                <div class="row">
                                                                    <div class="col-md-12">

                                                                        <div class="col-md-5">
                                                                            <label for="">Name</label>
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <input type="text">
                                                                        </div>


                                                                        <div class="col-md-6">
                                                                            <label for="">Email</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <input class="col-md-6" type="email">
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" class="main_bt">Create</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="white_shd full p-4">
                                    <div class="heading1  margin_0">
                                        <h2 class="">All New Documents</h2>
                                    </div>
                                    <div class="row column1">
                                        <div class="col-md-12">
                                            <div class=" full">
                                                <div class="heading1 margin_0">
                                                    <div class="card shadow-sm">
                                                        <div class="card-body">
                                                            <table class="table table-bordered table-striped">
                                                                <tr>
                                                                    <td class="title">Applicant ID</td>
                                                                    <td class="colon">:</td>
                                                                    <td>12</td>
                                                                    <td rowspan="8" class="image" id="view_data"><img width="300" src="https://images.unsplash.com/photo-1560674457-12073ed6fae6?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtfGVufDB8fDB8fHww" alt=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Name</td>
                                                                    <td class="colon">:</td>
                                                                    <td>Rakib ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Email</td>
                                                                    <td class="colon">:</td>
                                                                    <td id="email"> W@hml</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Phone</td>
                                                                    <td class="colon">:</td>
                                                                    <td>01756041512</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Skill</td>
                                                                    <td class="colon">:</td>
                                                                    <td>sss</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">location</td>
                                                                    <td class="colon">:</td>
                                                                    <td>swg dsgh</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Age</td>
                                                                    <td class="colon">:</td>
                                                                    <td>swg dsgh</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Gender</td>
                                                                    <td class="colon">:</td>
                                                                    <td>swg dsgh</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>

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