<?php
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/18/17
 * Time: 3:03 PM
 */
$this->load->view("include/header") ?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Change Password:</h1>
    </div>

    <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <?= form_open('update_password/update') ?>
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


        <button type="submit" class="btn btn-default">Save changes</button>

        </form>
    </div>
    <div class="col-sm-4"></div>

</div>


</div>
<? $this->load->view("include/footer") ?>
