<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/create'); ?>

    <label for="first_name">First Name</label>
    <input type="input" name="first_name" /><br />

    <label for="last_name">Last Name</label>
    <input type="input" name="last_name" /><br />

    <label for="email">Email</label>
    <input type="email" name="email" /><br />
    
    <input type="submit" name="submit" value="Create User" />

</form>

