<?php
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/8/17
 * Time: 1:25 PM
 */
$this->load->view("include/header") ?>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>Sign Up<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>index.php/member_register/client_register">Client register</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/member_register/company_register">Company register</a></li>
                    </ul>
                </li>





                <li><a href="<?php echo base_url(); ?>index.php/login_controller"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Login From</h1>
    </div>

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?= form_open('login_controller/user_login') ?>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <?php if(isset($email_msg)){  ?>
                    <span class="error"><?= $email_msg ?></span>
                <?php } ?>
                <?php echo form_error('email', '<p class="error">'); ?>
                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control"
                       placeholder="Entre Email Address"/>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <?php if(isset($pass_msg)){  ?>
                <span class="error"><?= $pass_msg ?></span>
                <?php } ?>
                <?php echo form_error('password', '<p class="error">'); ?>
                <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>"
                       placeholder="Enter your Password "/>
            </div>


            <button type="submit" class="btn btn-default">Login</button>

            </form>
        </div>
        <div class="col-sm-4"></div>

    </div>


</div>
<? $this->load->view("include/footer") ?>
