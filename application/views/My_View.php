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
    <br><br>
    <div class="row">

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?=base_url()."Images/". $product->image_name?>" alt="">
                <div class="caption">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><a href="#">First Product</a></h4>
                    <p>See more snippets like this online store item at <a target="_blank"
                                                                           href="http://www.bootsnipp.com">Bootsnipp -
                            http://bootsnipp.com</a>.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">15 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="http://placehold.it/350x222" alt="">
                <div class="caption">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><a href="#">First Product</a></h4>
                    <p>See more snippets like this online store item at <a target="_blank"
                                                                           href="http://www.bootsnipp.com">Bootsnipp -
                            http://bootsnipp.com</a>.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">15 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="http://placehold.it/350x222" alt="">
                <div class="caption">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><a href="#">First Product</a></h4>
                    <p>See more snippets like this online store item at <a target="_blank"
                                                                           href="http://www.bootsnipp.com">Bootsnipp -
                            http://bootsnipp.com</a>.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">15 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>



    </div>




    <div id="demo">
        <h2 id="test">The XMLHttpRequest Object</h2>
        <button type="button" onclick="say()">Change Content</button>
    </div>




</div>

<?php $this->load->view("include/footer") ?>

