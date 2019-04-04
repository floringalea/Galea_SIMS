<?php include_once('../app/views/templates/header.php') ?>

    <div class="sidebar">
        <a href="https://www.galeadigital.com/dashboard/index"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="https://www.galeadigital.com/staff/"><i class="fa fa-fw fa-wrench"></i> Staff</a>
        <a href="https://www.galeadigital.com/students/index"><i class="fa fa-fw fa-wrench"></i> Students</a>
        <a href="#Admin"><i class="fa fa-fw fa-user"></i> Admin</a>
        <a href="#Timetables"><i class="fa fa-fw fa-envelope"></i> Timetables</a>
    </div>

    <div class="container">

    <div class="row">

    <div class="col-lg-12">
        <h1>Add Admin Staff</h1>
    </div>

    <!--============================== Form ==============================-->
    <!----------------------- Personal Details ----------------------->
    <div class="col-lg-4">
    <form class="form-inline" action="" method="post">
        <hr>
        <div class="form-group">
            <label for="">Forename</label>
            <input type="text" name="forename" class="form-control" id="" placeholder="Forename">
            <span class="error"><?php echo $data['error']['forename'] ?></span>
        </div>

        <div class="form-group">
            <label for="">First Middle Name</label>
            <input type="text" name="middleName1" class="form-control" id="" placeholder="First Middle Name">
            <!-- <p class="help-block">Help text here.</p> -->
        </div>

        <div class="form-group">
            <label for="">Second Middle Name</label>
            <input type="text" name="middleName2" class="form-control" id="" placeholder="Second Middle Name">
            <!-- <p class="help-block">Help text here.</p> -->
        </div>

        <div class="form-group">
            <label for="">Surname</label>
            <input type="text" name="lastName" class="form-control" id="" placeholder="Surname">
            <span class="error"><?php echo $data['error']['lastName'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Gender</label>
            <select class="form-control" name="gender">
                <option selected disabled hidden></option>
                <option>M</option>
                <option>F</option>
            </select>
            <span class="error"><?php echo $data['error']['gender'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Role</label>
            <select class="form-control" name="role">
                <option selected disabled hidden></option>
                <option>SA</option>
                <option>A</option>
            </select>
            <span class="error"><?php echo $data['error']['role'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="date" name="DOB" class="form-control" id="" placeholder="Date of Birth">
            <span class="error"><?php echo $data['error']['DOB'] ?></span>
        </div>
        
        <!----------------------- Employment Details ----------------------->
        <div class="form-group">
            <label for="">Position</label>
            <input type="text" name="subject" class="form-control" id="" placeholder="Position">
            <span class="error"><?php echo $data['error']['subject'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" name="startDate" class="form-control" id="" placeholder="Start Date">
            <span class="error"><?php echo $data['error']['startDate'] ?></span>
        </div>

        <!----------------------- Contact Details ----------------------->
        <div class="form-group">
            <label for="">House Name</label>
            <input type="text" name="houseName" class="form-control" id="" placeholder="House Name">
            <span class="error"><?php echo $data['error']['houseName'] ?></span>
        </div>

        <div class="form-group">
            <label for="">House Number</label>
            <input type="text" name="houseNo" class="form-control" id="" placeholder="House Number">
            <span class="error"><?php echo $data['error']['houseNo'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Flat</label>
            <input type="text" name="flatNo" class="form-control" id="" placeholder="Flat Number">
            <span class="error"><?php echo $data['error']['flatNo'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Street</label>
            <input type="text" name="streetName" class="form-control" id="" placeholder="Street Name">
            <span class="error"><?php echo $data['error']['streetName'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Post Code</label>
            <input type="text" name="postCode" class="form-control" id="" placeholder="Post Code">
            <span class="error"><?php echo $data['error']['postCode'] ?></span>
        </div>

        <div class="form-group">
            <label for="">County</label>
            <input type="text" name="countyName" class="form-control" id="" placeholder="County">
            <span class="error"><?php echo $data['error']['countyName'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Town</label>
            <input type="text" name="townName" class="form-control" id="" placeholder="Town">
            <span class="error"><?php echo $data['error']['townName'] ?></span>
        </div>

        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="cityName" class="form-control" id="" placeholder="City">
            <span class="error"><?php echo $data['error']['cityName'] ?></span>
        </div>

        <div class="form-group">
            <label for="">Country</label>
            <input type="text" name="countryName" class="form-control" id="" placeholder="Country">
            <span class="error"><?php echo $data['error']['countryName'] ?></span>
        </div>

        <!----------------------- Personal email ----------------------->
        <div class="form-group">
            <label for="">Staff Personal Email Address</label>
            <input type="email" name="staffEmail" class="form-control" id="" placeholder="Email">
            <span class="error"><?php echo $data['error']['staffEmail'] ?></span>
        </div>

        <!----------------------- Telephones ----------------------->
        <div class="form-group">
            <label for="">Home Telephone Number</label>
            <input type="tel" name="homeTelNo" class="form-control" id="" placeholder="Home Telephone">
            <span class="error"><?php echo $data['error']['homeTelNo'] ?></span>
        </div>
        
        <div class="form-group">
            <label for="">Mobile telephone number</label>
            <input type="tel" name="mobTelNo" class="form-control" id="" placeholder="Mobile Number">
            <span class="error"><?php echo $data['error']['mobTelNo'] ?></span>
        </div>


        <!----------------------- Button ----------------------->            
        <div class="form-group">
            <label for=""></label>
            <input type="submit" class="btn btn-primary form-control" name="addStaff" value="Add Staff" id="">
            <!-- <p class="help-block">Help text here.</p> -->
        </div>
        
    </form>
    <!--============================== End of Form ==============================-->

  <?php include_once('../app/views/templates/footer.php') ?>