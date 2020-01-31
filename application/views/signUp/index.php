<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo TEMPLATE_PATH; ?>default/images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center ">

                <div class="col-md-5 mt-5 pt-5">
                    <span class="text-cursive h5 text-red">Register</span>
                    <h1 class="mb-3 font-weight-bold text-teal">Register User</h1>
                    <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Register</strong></p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div style="padding: 15px;box-shadow:  0 3px 1px -2px rgba(0,0,0,0.2),0 2px 2px 0 rgba(0,0,0,0.14),0 1px 0.3125rem 0 rgba(0,0,0,0.12)" class="card">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <h2>Register User</h2>
                </div>
            </div>
            <div style="margin: auto;width: 50%" class="row">
                <div  class="col-lg-12 text-center mb-5 logn-frm" >
                    <form id="registrationForm" method="post">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input  type="text" id="UserName" name="UserName" class="form-control" placeholder="Enter UserName" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input  type="text" id="mobileNumber" name="mobileNumber" class="form-control" placeholder="Enter Mobile Number" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input  type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input  type="password" id="password1" name="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input  type="password" id="password2" class="form-control" placeholder="Enter Confirm Password" required>
                            </div>
                        </div>
                        <div  class="form-group row">
                            <div class="col-md-6 mx-auto">
                                <input  type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Submit">
                            </div>
                        </div>

                    </form>
                    <div  class="form-group row">
                        <span>Already Register?</span> <a href="<?php echo base_url(); ?>logIn" class="rgstration-form"> Log In</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


