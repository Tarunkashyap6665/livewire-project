<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyWorld</title>
    <!--Bootstrap CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS Files -->
    <style>
        #pagination{
            width: 95%;
            margin: 0px auto;
            margin-top: 10px;
        }
        .pagination{
            justify-content: space-between;
            
        }
        .page-no{
            display: flex;
            width: 100%;
            justify-content: center;
        }
        .page-no .page-item{
            margin-left: 5px;
            margin-right: 5px;
            
        }

#register .container #register-row #register-column #register-box {
  padding: 10px;
  max-width: 600px;
  
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}

#login .container #login-row #login-column #login-box{
  max-width: 600px;
  padding: 10px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-foregister .container #register-row #register-column #register-box #register-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link ,#register .container #register-row #register-column #register-box #register-form #login-link {
  margin-top: -45px;
}
       
    </style>
    <!-- End All Required CSS Files -->
    @livewireStyles
    @livewireScripts
</head>

<body style="background-color: rgba(245, 223, 223, 0.39)">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand">MyWorld</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav flex-grow-1 justify-content-between mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <div class="guest d-flex">
                    @guest
                    <li class="nav-item ml-2">
                        <a class=" btn btn-primary" href="/login" >Login</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class=" btn btn-primary" href="/register" >Register</a>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item ml-2">
                        <livewire:logout/>
                    </li>    
                    @endauth
                    
                    </div>
                    
                </ul>
            </div>
        </nav>
    </header>
    <section style="margin-top: 45px;">
        @yield('content')

    </section>

    <!-- Custom JavaScript Files -->
<script src="{{asset('js/app.js')}}"></script>
    <!-- Bootstrap JavaScript Files -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>