<?php $this->view('includes/header'); ?>

    <div class="container-fluid">
        
        <div class="p-4 mx-auto shadow rounded" style="margin-top: 100vh;width:100%; max-width: 310px;">
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
        