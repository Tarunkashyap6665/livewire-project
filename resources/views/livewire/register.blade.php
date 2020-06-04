<div  style="margin-top: 10%">
    <div id="register">
        
        <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" wire:submit.prevent="submit" class="form" action="" method="post">
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <input type="text" name="username" id="name" wire:model="form.name" placeholder="Username" class="form-control">
                                @error('form.name')
                            <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <input type="email" name="email" id="email" placeholder="Email" wire:model="form.email" class="form-control">
                                @error('form.email')
                            <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
        
                                <input type="text" name="password" id="password" placeholder="Password" wire:model="form.password" class="form-control">
                                @error('form.password')
                                <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input type="text"  wire:model="form.password_confirmation" id="password" placeholder="Confirm Password" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                            </div>
                            <div id="login-link" class="text-right">
                                <a href="/login" wire:model="form.ggkkdk('hello')" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
