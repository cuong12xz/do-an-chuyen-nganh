<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'layouts/headerpage.php' ?>
    </head>

    <body>
        <!-- Nav Bar Start -->
        <?php include 'layouts/menupage.php' ?>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Register Page</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Register Page</p>
                                <h2>Sign Up with  Dinners & Happy Hours</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <form action="UploadFileController.php" method="POST" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <div class="input-group">
                                            <input type="file" name="file_upload" class="form-control" placeholder="Name"  />
                                            <div class="input-group-append">

                                                <button class="btn custom-btn" type="submit">Upload</button>

                                            </div>
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <h2>Register Page</h2>
                            <form action="RegisterController.php" method="POST">
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" name="txt_name" class="form-control" placeholder="Name"  />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user" ></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" name="txt_email" class="form-control" placeholder="Email"  />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="password" name="txt_password" class="form-control" placeholder="Password" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="password" name="txt_repassword" class="form-control" placeholder="Re-password"  />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" name="txt_mobile" class="form-control" placeholder="Mobile" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>



                                <div class="control-group">
                                    <div class="input-group">
                                        <label for="html" style="color:white">Nam </label><br>
                                        <input class="lbsRadio" type="radio" name="rdg_gioitinh" id="rad_nam" checked value="male" >
                                        <label for="html" style="color:white">N??? </label><br>
                                        <input class="lbsRadio" type="radio" name="rdg_gioitinh"  value="female">

                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="input-group">

                                        <select class="form-control" name="sel_sothich" >

                                            <option value="0" disabled selected hidden>Ch???n s??? th??ch</option>
                                            <?php
                                            $arrSoThich = array("bd" => "B??ng ????", "cl" => "C???u l??ng", "br" => "B??ng r???", "bc" => "B??ng chuy???n");
                                            foreach ($arrSoThich as $key => $value) {
                                                if($key=="bd")
                                                echo'<option value="' . $key . '" selected >' . $value . '</option>';
                                                else
                                                echo'<option value="' . $key . '"  >' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">

                                        <input class="lbsCheck" value="1"   type="checkbox" name="chk_dieuKhoan" id="chk_dieuKhoan" >
                                        <label for="html" style="color:white">T??i ?????ng ?? v???i ??i???u kho???n </label>

                                    </div>
                                </div>
                                <div>
                                    <button class="btn custom-btn" name="bnt_XuLy" value="login" type="submit">Sign Up</button>
                                   
                                </div>
                                 <div style="margin-top: 10px">
                                    <button class="btn custom-btn" name="bnt_XuLy" value="register" type="submit">Register</button>
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->





        <!-- Footer Start -->
        <?php include 'layouts/footerpage.php' ?>
        <!-- Footer End -->


    </body>
</html>
