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
                                    <h2>User Profile</h2>
                                </div>
                            </div>
                        </div>

                        <!-- table srart -->
                        <div class="row column1">
                            <div class="col-md-7">
                                <div class="white_shd full p-4">
                                    <div class="heading1  margin_0">
                                        <h2 class="">Update Profile</h2>
                                    </div>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label required-field" for="">Name</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " name="name" placeholder="Type Your Name" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label required-field" for="f_name">Father's Name</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " name="f_name" placeholder="Type Your Father's Name" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label required-field" for="m_name">Mother's Name</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " name="m_name" placeholder="Type Your Mother's Name" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label required-field" for="dob">Date of Birth</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " name="dob" type="date" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label required-field" for="address">Address</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " name="address" placeholder="Type Your Address" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label required-field" for="phone">Mobile No</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " name="phone" placeholder="Type Your Mobile No" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label required-field" for="gender">Gender</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " name="gender" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label required-field" for="email">Email</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control " name="email" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" my-3">
                                            <button type="submit" class="main_bt">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="white_shd full p-4">
                                    <div class="heading1  margin_0">
                                        <h2 class="">All New Documents</h2>
                                    </div>
                                    <div class="row column1">
                                        <div class="col-md-12">
                                            <div class=" full">
                                                <div class="heading1 margin_0">
                                                    <div class="shadow-sm">
                                                        <div class="card-body">
                                                            <table class=" table border table-striped">
                                                                <td class="rounded" id="view_data"><img width="75" height="75" src="https://images.unsplash.com/photo-1560674457-12073ed6fae6?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtfGVufDB8fDB8fHww" alt=""></td>

                                                                <tr>
                                                                    <td class="title">Name</td>
                                                                    <td class="colon">:</td>
                                                                    <td>Rakib Hossain</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Email</td>
                                                                    <td class="colon">:</td>
                                                                    <td id="email"> developerimran.in@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Mobile No</td>
                                                                    <td class="colon">:</td>
                                                                    <td>01756041512</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="title">Address</td>
                                                                    <td class="colon">:</td>
                                                                    <td>Chittagong</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Date of Birth</td>
                                                                    <td class="colon">:</td>
                                                                    <td>26</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Gender</td>
                                                                    <td class="colon">:</td>
                                                                    <td>Male</td>
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