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
                            <li><a href="<?php echo base_url(); ?>/Edit_profile">Edit Profile</a></li>
                            <li><a href="<?php echo base_url(); ?>/update_password">Change Password</a></li>
                        </ul>
                    </li>





                    <li><a href="<?php echo base_url(); ?>index.php/login_controller/logOut"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="jumbotron">
            <h1>Welcome <?= $firstname?></h1>
            <p><?php if($type==1){
                echo "client";
                } else{
                echo "a company";
                } ?></p>
        </div>





    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            أضافة منتج
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">upload image</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
                        <form enctype="multipart/form-data" action="<?php echo base_url('index.php/Upload/upload1')?>" method="post">
                            <div class="form-group col-md-6 col-lg-offset-3" style="direction: rtl">
                                <label> اسم المنتج</label>
                                <input type="text" class="form-control" name="product_name" /><br>
                                <?php echo form_error('product_name', '<span style="color: red" >', '</span>'); ?>
                            </div> <div class="form-group col-md-6 col-lg-offset-3" style="direction: rtl">
                                <label> كمية المنتج</label>
                                <input type="number" class="form-control" name="product_quantity" /><br>
                                <?php echo form_error('product_quantity', '<span style="color: red" >', '</span>'); ?>
                            </div> <div class="form-group col-md-6 col-lg-offset-3" style="direction: rtl">
                                <label> سعر المنتج</label>
                                <input type="number" class="form-control" name="product_price" /><br>
                                <?php echo form_error('product_price', '<span style="color: red" >', '</span>'); ?>
                            </div> <div class="form-group col-md-6 col-lg-offset-3" style="direction: rtl">
                                <label> المنشأ المنتج</label>
                                <select class="form-control" name="conutry_id">
                                   <?php
                                   foreach ($country as $a){

                                       echo  '<option value="'.$a->id.'">'.$a->countryName.'</option>';

                                   }
                                   ?>
                                </select>
                                <?php echo form_error('conutry_id', '<span style="color: red" >', '</span>'); ?>
                            </div> <div class="form-group col-md-6 col-lg-offset-3" style="direction: rtl">
                                <label> فئة المنتج</label>
                                <select class="form-control" name="catagory_id">
                                    <?php
                                    foreach ($catagory as $C){

                                        echo  '<option value="'.$C->catagory_id.'">'.$C->catagory_name.'</option>';

                                    }
                                    ?>
                                </select>
                                <?php echo form_error('catagory_id', '<span style="color: red" >', '</span>'); ?>
                            </div> <div class="form-group col-md-6 col-lg-offset-3" style="direction: rtl">


                                <label class="checkbox-inline"><input type="checkbox" value="1" name="product_offer">   هل يوجد نسبة عروض للمنتج ؟         </label>
                            </div>
                            <div class="form-group col-md-6 col-lg-offset-3">

                                <label>Choose Files</label>
                                <input type="file" class="form-control" name="file[]" multiple/>
                            </div>


                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">أغلاق</button>
                    <button type="submit" class="btn btn-primary">حفظ المنتج</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    </div>



<?php $this->load->view("include/footer") ?>