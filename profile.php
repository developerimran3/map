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
                        <div class="row column1">

                            <!-- Form Start -->
                            <div class="col-md-6">
                                <div class="white_shd full pt-2 ">
                                    <div class="col-md-12">
                                        <div class=" full">
                                            <div class="w3-responsive">
                                                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class=" table map entryTable">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="4" id="entryTableHeader" align="left">Update User Profile</td>
                                                        </tr>
                                                        <form action="">
                                                            <tr>
                                                                <td align="right" class="label">Name</td>
                                                                <td colspan="2" class="content"><input class="form-control" name="name" type="text">
                                                                </td>
                                                                <td width="29%" rowspan="4" valign="top" align="center"
                                                                    class="content">
                                                                    <label class="uploaded">
                                                                        <input type="file" id="profile-photo" name="profile" class="form-control">
                                                                        <img id="profile-photo-icon" src="https://cnfemployeesunion.com/public/img/demo.png" width="120" height="130">
                                                                    </label>
                                                                    <div id="profile-photo-preview" class="preview-image">
                                                                        <img src="" alt="">
                                                                        <button type="button" id="profile-photo-close" class=" fa fa-times"></button>
                                                                        <label class="" for="">Image(150pxX150px)</label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="22%" align="right" class="label">Father's Name </td>
                                                                <td colspan="2" class="content"><input class="form-control" name="father_name" type="text"></td>
                                                            </tr>
                                                            <tr>

                                                                <td align="right" class="label">Mother's Name</td>
                                                                <td colspan="2" class="content"><input class="form-control" name="mother_name" type="text"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Dath Of Birth</td>
                                                                <td colspan="2" class="content"><input class="form-control" name="date_of_birth" type="date"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Gender</td>
                                                                <td colspan="4" class="content">
                                                                    <input type="radio" name="gender" id="">
                                                                    <label for="">Male</label>
                                                                    <input type="radio" name="gender" id="gender">
                                                                    <label for="">Female</label>
                                                                    <input type="radio" name="gender" id="gender">
                                                                    <label for="">Others</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Blood Group</td>
                                                                <td colspan="4" class="content">
                                                                    <select name="blood" class="form-control" id="">
                                                                        <option value="">--select--</option>
                                                                        <option value="a+">A+</option>
                                                                        <option value="a-">A-</option>
                                                                        <option value="b+">B+</option>
                                                                        <option value="b-">B-</option>
                                                                        <option value="o+">O+</option>
                                                                        <option value="o-">O-</option>
                                                                        <option value="ab+">AB+</option>
                                                                        <option value="ab-">AB-</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Mobile No</td>
                                                                <td colspan="4" class="content"><input class="form-control" name="phone" type="text">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Email</td>
                                                                <td colspan="4" class="content"><input class="form-control" name="email" type="email">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">National ID</td>
                                                                <td colspan="4" class="content"><input class="form-control" name="nid_no" type="text">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" align="center" class="label">Present Address</td>
                                                                <td colspan="2" align="center" class="label">Permanent Address</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Village</td>
                                                                <td width="27%" class="content"><input class="form-control" name="pr_vill" type="text"></td>
                                                                <td width="22%" align="right" class="label">Village</td>
                                                                <td class="content"><input class="form-control" name="per_vill" type="text"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Post/ Word No</td>
                                                                <td class="content"><input class="form-control" name="pr_post" type="text"></td>
                                                                <td class="label" align="right">Post/ Word No</td>
                                                                <td class="content"><input class="form-control" name="per_post" type="text"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Upazila</td>
                                                                <td class="content"><input class="form-control" name="pr_upazila" type="text"></td>
                                                                <td class="label" align="right">Upazila</td>
                                                                <td class="content"><input class="form-control" name="per_upazila" type="text"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" class="label">Distict</td>
                                                                <td class="content"><input class="form-control" name="pr_distict" type="text"></td>
                                                                <td class="label" align="right">Distict</td>
                                                                <td class="content"><input class="form-control" name="per_distict" type="text"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3" align="center" class="label">&nbsp;</td>
                                                                <td class="label"><button type="submit" class="main_bt">Update</button></td>
                                                            </tr>
                                                        </form>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form End -->


                            <!-- Table start -->
                            <div class="col-md-6">
                                <div class="white_shd full pt-2">
                                    <div class="col-md-12">
                                        <div class=" full">
                                            <div class="w3-responsive">
                                                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="table maps entryTable">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="4" id="entryTableHeader" align="left">User Profile</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">সদস্য নং</td>
                                                            <td colspan="2" class="content">1728</td>
                                                            <td width="29%" rowspan="4" valign="top" align="center" class="content">
                                                                <img src="https://cnfemployeesunion.com/public/img/demo.png" width="120" height="130">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="22%" align="right" class="label">Name </td>
                                                            <td colspan="2" class="content"> আবু হাসান</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Father's Name </td>
                                                            <td colspan="2" class="content">মৃত আঃ সালাম</td>

                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Mother's Name </td>
                                                            <td colspan="2" class="content">মোছাঃ মাজেদা বেগম</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Date of Birth</td>
                                                            <td colspan="4" class="content">1999-05-15&nbsp; বয়স : 25
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Gender </td>
                                                            <td colspan="4" class="content">Male</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Blood Group </td>
                                                            <td colspan="4" class="content">এ+</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Mobile No</td>
                                                            <td colspan="4" class="content">8801963490881</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Email</td>
                                                            <td colspan="4" class="content">abuhasan8976@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">National ID</td>
                                                            <td colspan="4" class="content">১৯৯৯৪১১৯০২৫০৩০৪৩১</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" align="center" class="label">Present Address</td>
                                                            <td colspan="2" align="center" class="label">Permanent Address</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Village</td>
                                                            <td width="27%" class="content">বড় আঁচড়া</td>
                                                            <td width="22%" align="right" class="label">Village</td>
                                                            <td class="content">বড় আঁচড়া</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Post/ word No</td>
                                                            <td class="content">বেনাপোল</td>
                                                            <td class="label" align="right">Post/ word No</td>
                                                            <td class="content">বেনাপোল</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Upazila</td>
                                                            <td class="content">বেনাপোল পোর্ট</td>
                                                            <td class="label" align="right">Upazila</td>
                                                            <td class="content">বেনাপোল পোর্ট</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" class="label">Distict</td>
                                                            <td class="content">যশোর</td>
                                                            <td class="label" align="right">Distict</td>
                                                            <td class="content">যশোর</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" align="center" class="label">&nbsp; </td>
                                                            <td class="label"><button type="submit" class="main_bt">Update</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- table end -->

                            <!-- Footer-->
                            <?php include_once __DIR__ . '/templates/footer.php'; ?>
                            <script>
                                const ProfilePhoto = document.getElementById('profile-photo');
                                const ProfilePhotoPreview = document.getElementById('profile-photo-preview');
                                const ProfilePhotoIcon = document.getElementById('profile-photo-icon');
                                const ProfilePhotoClose = document.getElementById('profile-photo-close');

                                ProfilePhoto.onchange = (event) => {
                                    const imageURL = URL.createObjectURL(event.target.files[0]);

                                    ProfilePhotoPreview.children[0].setAttribute('src', imageURL);
                                    ProfilePhotoIcon.style.display = 'none';
                                    ProfilePhotoClose.style.display = "block";

                                };
                                ProfilePhotoClose.onclick = (event) => {
                                    ProfilePhotoPreview.children[0].setAttribute('src', "");
                                    ProfilePhotoIcon.style.display = 'block';
                                    ProfilePhotoClose.style.display = "none";
                                };
                            </script>
                            <script>
                                $("#dataTable").DataTable();
                            </script>