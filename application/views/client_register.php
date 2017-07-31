<?php $this->load->view("include/header") ?>


<div class="container">

    <div class="jumbotron">
        <h1>client registeration form</h1>
    </div>




    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <?php echo form_open('member_register/client_register'); ?>

            <h2 class="text-primary">Personal Information:</h2>

            <div class="form-group">
                <label for="firstname">Frirst name:</label>
                <?php echo form_error('firstname', '<p class="error">'); ?>
                <input type="text" name="firstname" value="<?= set_value('firstname') ?>" class="form-control"
                       placeholder="Entre First Name"/>
            </div>

            <div class="form-group">
                <label for="lastname">Last name:</label>
                <?php echo form_error('lastname', '<p class="error">'); ?>
                <input type="text" name="lastname" value="<?= set_value('lastname') ?>" class="form-control"
                       placeholder="Entre Last Name"/>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <?php echo form_error('email', '<p class="error">'); ?>
                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control"
                       placeholder="Entre Email Address"/>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <?php echo form_error('password', '<p class="error">'); ?>
                <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>"
                       placeholder="Enter your Password "/>
            </div>

            <div class="form-group">
                <label for="passconf">Repeat password:</label>
                <?php echo form_error('passconf', '<p class="error">'); ?>
                <input type="password" name="passconf" class="form-control" value="<?= set_value('passconf') ?>"
                       placeholder="Repeat your Password "/>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <?php echo form_error('mobile', '<p class="error">'); ?>
                <input type="text" name="mobile" value="<?= set_value('mobile') ?>" class="form-control"
                       placeholder="Entre Mobile Number"/>
            </div>

            <div class="form-group">
                <label for="tele">Telephone:</label>
                <?php echo form_error('tele', '<p class="error">'); ?>
                <input type="text" name="tele" value="<?= set_value('tele') ?>" class="form-control"
                       placeholder="Entre Telephone Number"/>
            </div>

            <h2 class="text-primary">Address Information:</h2>

            <div class="form-group">
                <label for="city">Select city:</label>
                <?php echo form_error('city', '<p class="error">'); ?>
                <select class="form-control" id="sel1" name="city">
                    <option value=" ">Select city</option>
                    <?php foreach ($city as $row) { ?>
                        <option value="<?= $row->city_id ?>"><?= $row->city_name ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="area">Select area:</label>
                <?php echo form_error('area', '<p class="error">'); ?>
                <select class="form-control" id="sel2" name="area">
                    <option value=" ">Select area</option>
                    <?php foreach ($area as $row) { ?>
                        <option value="<?= $row->area_id ?> "><?= $row->area_name ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="street">Street:</label>
                <?php echo form_error('street', '<p class="error">'); ?>
                <?php echo form_error('street'); ?>
                <input type="text" name="street" value="<?= set_value('street') ?>" class="form-control"
                       placeholder="Street Name"/>
            </div>

            <div class="form-group">
                <label for="bulding">Building:</label>
                <?php echo form_error('building', '<p class="error">'); ?>
                <?php echo form_error('building'); ?>
                <input type="text" name="building" value="<?= set_value('building') ?>" class="form-control"
                       placeholder="building Name"/>
            </div>

            <div class="form-group">
                <?php echo form_error('notes', '<p class="error">'); ?>
                <label for="notes">Address notes:</label>
                <textarea class="form-control" rows="5" id="comment" name="notes"></textarea>

                <button type="submit" class="btn btn-default">Submit</button>

                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>


    </div>


    <?php $this->load->view("include/footer") ?>
