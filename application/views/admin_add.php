<?php $this->load->view("include/header") ?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Souqe al Yasmen</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url(); ?>index.php/Site">Home</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catagories<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">electronics</a></li>
                        <li><a href="#">musical instruements</a></li>
                        <li><a href="#">fornuter</a></li>
                    </ul>
                </li>

                <li><a href="#">electronics</a></li>
                <li><a href="#">musical instruements</a></li>
                <li><a href="#">fornuter</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>admin_Controller">profile</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Sitting<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>/Edit_profile">Edit Profile</a></li>
                        <!-- if the admin has add privilges-->
                        <?php if($rule==1){
                            // echo $rule;
                            echo " <li><a href=" .base_url().'/'.">add admin</a></li>";
                        }?>
                        <li><a href="<?php echo base_url(); ?>index.php/update_password">Change Password</a></li>
                    </ul>
                </li>





                <li><a href="<?php echo base_url(); ?>index.php/login_controller/logOut"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>



<div class="container">

    <div class="jumbotron">
        <h1>Admin registeration form</h1>
    </div>



    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

            <?php echo form_open('member_register/admin_register'); ?>

            <h2 class="text-primary">Personal Information:</h2>

            <div class="form-group">
                <label for="firstname">Frirst name:</label>
                <?php echo form_error('firstname', '<p class="error">'); ?>
                <input type="text" name="firstname" value="<?php if($done!==1) set_value('firstname') ?>" class="form-control"
                       placeholder="Entre First Name"/>
            </div>

            <div class="form-group">
                <label for="lastname">Last name:</label>
                <?php echo form_error('lastname', '<p class="error">'); ?>
                <input type="text" name="lastname" value="<?php if($done!==1) set_value('lastname') ?>" class="form-control"
                       placeholder="Entre Last Name"/>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <?php  echo form_error('email', '<p class="error">'); ?>
                <input type="email" name="email" value="<?php if($done!==1) set_value('email') ?>" class="form-control"
                       placeholder="Entre Email Address"/>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <?php  echo form_error('password', '<p class="error">'); ?>
                <input type="password" name="password" class="form-control" value="<?php if($done!=1) set_value('password') ?>"
                       placeholder="Enter your Password "/>
            </div>

            <div class="form-group">
                <label for="passconf">Repeat password:</label>
                <?php  echo form_error('passconf', '<p class="error">'); ?>
                <input type="password" name="passconf" class="form-control" value="<?php if($done!=1) set_value('passconf') ?>"
                       placeholder="Repeat your Password "/>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>


</div>









<?php $this->load->view("include/header") ?>


