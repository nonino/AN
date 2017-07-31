<?php $this->load->view("include/header") ?>


<div class="container">

    <div class="jumbotron">
        <h1>Profile Edit:</h1>
    </div>


    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <?php echo form_open('Edit_profile/editCompany'); ?>

            <h2 class="text-primary">Company Information:</h2>

            <div class="form-group">
                <label for="companyname">Company name:</label>
                <?php echo form_error('companyname', '<p class="error">'); ?>
                <input type="text" name="companyname" value="<?= $user->provider_company_name ?>" class="form-control"
                       placeholder="Enter the company name"/>
            </div>


            <div class="form-group">
                <label for="firstname">Provider Frirst name:</label>
                <?php echo form_error('firstname', '<p class="error">'); ?>
                <input type="text" name="firstname" value="<?= $user->provider_first_name ?>" class="form-control"
                       placeholder="Enter First Name"/>
            </div>

            <div class="form-group">
                <label for="lastname">Provider Last name:</label>
                <?php echo form_error('lastname', '<p class="error">'); ?>
                <input type="text" name="lastname" value="<?= $user->provider_last_name ?>" class="form-control"
                       placeholder="Entre Last Name"/>
            </div>
            


            <div class="form-group">
                <label for="catagory">Company Catagory:</label>
                <?php echo form_error('catagory', '<p class="error">'); ?>
                <select class="form-control" name="catagory">
                    <option value=" ">Select catagory</option>
                    <?php foreach ($catagory as $row) { ?>
                        <option value="<?= $row->catagory_id ?> " <?php if ($row->catagory_id == $user->catagory_id) echo "selected"; ?> ><?= $row->catagory_name ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <?php echo form_error('mobile', '<p class="error">'); ?>
                <input type="text" name="mobile" value="<?= $user->provider_mobile ?>" class="form-control"
                       placeholder="Entre Mobile Number"/>
            </div>

            <div class="form-group">
                <label for="tele">Telephone:</label>
                <?php echo form_error('tele', '<p class="error">'); ?>
                <input type="text" name="tele" value="<?= $user->provider_tele ?>" class="form-control"
                       placeholder="Entre Telephone Number"/>
            </div>


            <h2 class="text-primary">Address Information:</h2>

            <div class="form-group">
                <label for="city">Select city:</label>
                <?php echo form_error('city', '<p class="error">'); ?>
                <select class="form-control" id="sel1" name="city">
                    <option value=" ">Select city</option>
                    <?php foreach ($city as $row) { ?>

                        <option value="<?= $row->city_id ?>" <?php if ($row->city_id == $address->city_id) echo "selected"; ?>><?= $row->city_name ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="area">Select area:</label>
                <?php echo form_error('area', '<p class="error">'); ?>
                <select class="form-control" id="sel2" name="area">
                    <option value=" ">Select area</option>
                    <?php foreach ($area as $row) { ?>
                        <option value="<?= $row->area_id ?> " <?php if ($row->area_id == $address->area_id) echo "selected"; ?>><?= $row->area_name ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="street">Street:</label>
                <?php echo form_error('street', '<p class="error">'); ?>
                <?php echo form_error('street'); ?>
                <input type="text" name="street" value="<?= $address->address_street ?>" class="form-control"
                       placeholder="Street Name"/>
            </div>

            <div class="form-group">
                <label for="bulding">Building:</label>
                <?php echo form_error('building', '<p class="error">'); ?>
                <?php echo form_error('building'); ?>
                <input type="text" name="building" value="<?= $address->address_building ?>" class="form-control"
                       placeholder="building Name"/>
            </div>

            <div class="form-group">
                <?php echo form_error('notes', '<p class="error">'); ?>
                <label for="notes">Address notes:</label>
                <textarea class="form-control" rows="5" id="comment"
                          name="notes"><?= $address->address_note ?></textarea>
                <br>
                <button type="submit" class="btn btn-default">Save changes</button>
                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>


    </div>
    <div>


        <?php $this->load->view("include/footer") ?>
