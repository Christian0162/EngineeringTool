<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .bg-custom {
            background: url('{{asset('images/bg-eng.avif')}}') no-repeat;
            background-size: cover;
            background-position: center;
        }
        .icon {
            height: 35px;
            width: 70px;
            border-radius: 10px
        }
        .hover-white:hover { 
            color: white !important; 
        }
        body {
            background: linear-gradient(to right, #FFF7D1 0%,#8B5DFF 30%, #6A42C2 60%, #563A9C 100%);
        }
    </style>
    
</head>
<body class="bg-dark">
    <x-navbar/>
    <div class="container-sm d-flex justify-content-center mt-3">
        <div class="card bg-custom p-5" style="width: 30rem"> 
            <h2 style="text-align:center; color:white" class="mt-3">Sign in</h2>
            <form action="{{route('login')}}" class="p-3" method="post">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="" class="form-label" style="color:white">Email Address</label>
                    <input type="text" class="form-control" name="email">
                    <small class="form-text text-muted"></small>
                </div>
                <div class="mb-4">
                    <label for="" class="form-label" style="color:white">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <input type="checkbox" class="form-check-input">
                    <label for="" class="form-check-label" style="color:white">Remember me</label>
                </div>
                <div class="d-flex justify-content-center">
                 <button class="btn btn-light my-3">Login</button>
                </div>
            </form>
            <div class="d-flex justify-content-center gap-2 mb-4">
                <a href="#">
                    <div class="icon bg-primary d-flex justify-content-center">
                        <svg role="img" viewBox="-2 -8 30 40" xmlns="http://www.w3.org/2000/svg" aria-label="facebook">
                            <title>facebook</title>
                            <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4687H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9705 4.6875 17.3438 4.92187 17.3438 4.92187V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.74906V12H17.2031L16.6711 15.4687H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="white"/>
                        </svg>                        
                    </div>
                </a>   
                <a href="#">
                    <div class="icon bg-white d-flex justify-content-center">
                        <svg role="img" viewBox="9 3 30 40" xmlns="http://www.w3.org/2000/svg" aria-label="facebook">
                            <title>gmail</title>
                            <path d="M35.9999 24.2741C35.9999 23.4584 35.9324 22.6384 35.7884 21.8359H24.2417V26.4565H30.854C30.5796 27.9467 29.6979 29.2649 28.407 30.1026V33.1007H32.3519C34.6684 31.0108 35.9999 27.9246 35.9999 24.2741Z" fill="#4285F4"/>
                            <path d="M24.2417 35.9984C27.5434 35.9984 30.3277 34.9359 32.3564 33.1018L28.4115 30.1037C27.314 30.8356 25.8971 31.25 24.2462 31.25C21.0526 31.25 18.3447 29.1382 17.3731 26.2988H13.3022V29.3895C15.3804 33.4412 19.6131 35.9984 24.2417 35.9984Z" fill="#34A853"/>
                            <path d="M17.3685 26.298C16.8557 24.8078 16.8557 23.1941 17.3685 21.7039V18.6133H13.3022C11.5659 22.0037 11.5659 25.9982 13.3022 29.3886L17.3685 26.298Z" fill="#FBBC04"/>
                            <path d="M24.2417 16.7492C25.987 16.7227 27.6738 17.3664 28.9378 18.548L32.4329 15.1223C30.2198 13.0854 27.2825 11.9655 24.2417 12.0008C19.6131 12.0008 15.3804 14.558 13.3022 18.6142L17.3686 21.7048C18.3357 18.8611 21.0481 16.7492 24.2417 16.7492Z" fill="#EA4335"/>
                        </svg>                        
                    </div>
                </a>                
            </div>          
            <div class="d-flex justify-content-center mt-1 gap-2">  
            <medium class="text-decoration-none text-dark" style="text-align: center">Can't sign in?</medium>   
            <a class="text-dark hover-white" style="text-align: center" href="{{route('register')}}">Create Account</a> 
            </div>      
        </div>     
    </div>
</body>
</html>