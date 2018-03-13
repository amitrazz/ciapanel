
<div class="row">
    <div class="panel-body">
        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart('users/edit'); ?>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="first_name" value="<?php echo $user_info['first_name']; ?>" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="last_name" value="<?php echo $user_info['last_name']; ?>" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                </div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="username" value="<?php echo $user_info['username']; ?>" id="username" class="form-control input-lg" placeholder="User Name" tabindex="3" disabled>
            </div>
            <div class="form-group">
                <input type="email" name="email" value="<?php echo $user_info['email']; ?>" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" disabled>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                </div>
                </div>
            </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12"><input type="submit" value="update" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                
            </div>
        </form>
    </div>

</div>