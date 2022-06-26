<?php $this->view('includes/header'); ?>

    <div class="container-fluid">
        
        <div class="p-5 mx-auto shadow rounded" style="margin-top: 10vh;width:100%; max-width: 350px;">
            <h2 class="text-center">Gretsa University</h2>
            <br>
            <img src="<?=ROOT?>/assets/imgs/logo.png" class="border border-primary d-block mx-auto rounded-circle" style="width:70px; height:60px;"/>
            <br>
            <h3>Signup</h3>
            <br>
            <input style="outline:none;" class="my-2 form-control" type="email" name="email" placeholder="Email">
            <br>
            
            <input style="outline:none;" class="my-2 form-control" type="password" name="password" placeholder="Password">
            <br>
            <input style="outline:none;" class="my-2 form-control" type="password" name="password2" placeholder="Repeat Password">
            <br>
            <button class="btn btn-primary">Login</button>
            <br>
            <br>
            <small>Already Have An Account?<a href="<?=ROOT?>/login">login</a></small>
        </div>
    </div>

<?php $this->view('includes/footer'); ?>
        