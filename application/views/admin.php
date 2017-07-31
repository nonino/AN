
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
                        <!-- if the admin has add privilges-->
                        <?php if($rule==1){
                           // echo $rule;
                      echo " <li><a href=" .base_url().'/member_register/admin_register'.">add admin</a></li>";
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
        <h1>Welcome  admin <?= $firstname?></h1>

    </div>

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>0</h3>

                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?=$client_count ?></h3>

                    <p>Client Registrations</p>
                </div>
                <div class="icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?=$provider_count ?></h3>

                    <p>Provider Registrations</p>
                </div>
                <div class="icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= $product_count?></h3>

                    <p>New Product</p>
                </div>
                <div class="icon">
                    <i class="glyphicon glyphicon-gift"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="glyphicon glyphicon-circle-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    </div>


</div>
<? $this->load->view("include/footer") ?>
