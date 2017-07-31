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


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Sitting<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>index.php/Edit_profile">Edit Profile</a></li>
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
        <h1>Welcome  client <?= $firstname?></h1>

    </div>
</div>



<?php $this->load->view("include/footer") ?>

