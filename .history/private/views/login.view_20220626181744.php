<?php $this->view('includes/header'); ?>

    <div class="container-fluid">
        
        <div class="p-5 mx-auto shadow rounded" style="margin-top: 20vh;width:100%; max-width: 310px;">
            <h2 class="text-center">Gretsa University</h2>
            <br>
            <img src="<?=ROOT?>/assets/imgs/logo.png" class="border border-primary d-block mx-auto rounded-circle" style="width:70px; height:60px;"/>
            <br>
            <h3>Login</h3>
            <br>
            <input style="outline:none;" autofocus class="form-control" type="email" name="email" placeholder="Email">
            <br>
            
            <input style="outline:none;" class="form-control" type="password" name="password" placeholder="Password">
            <br>
            <button class="btn btn-primary">Login</button>
        </div>
    </div>

<?php $this->view('includes/footer'); ?>
        