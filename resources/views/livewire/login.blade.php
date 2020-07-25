<div style="margin-top: 10%">
    <div id="login">
     
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" wire:submit.prevent="submit" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                
                                <input type="email" name="email" id="email" placeholder="Email"wire:model="form.email" class="form-control">
                            </div>
                            <div class="form-group">
                               
                                <input type="text" name="password" placeholder="Password" id="password" wire:model="form.password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="/register" class="text-info">Register here</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
