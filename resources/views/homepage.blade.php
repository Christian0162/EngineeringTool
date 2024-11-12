<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bigshot+One&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    
    <style>
        .roboto-thin {
        font-family: "Roboto", sans-serif;
        font-weight: 100;
        font-style: normal;
        }

        .roboto-light {
        font-family: "Roboto", sans-serif;
        font-weight: 300;
        font-style: normal;
        }

        .roboto-regular {
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
        }

        .roboto-medium {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
        }

        .roboto-bold {
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        font-style: normal;
        }

        .roboto-black {
        font-family: "Roboto", sans-serif;
        font-weight: 900;
        font-style: normal;
        }

        .roboto-thin-italic {
        font-family: "Roboto", sans-serif;
        font-weight: 100;
        font-style: italic;
        }

        .roboto-light-italic {
        font-family: "Roboto", sans-serif;
        font-weight: 300;
        font-style: italic;
        }

        .roboto-regular-italic {
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: italic;
        }

        .roboto-medium-italic {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: italic;
        }

        .roboto-bold-italic {
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        font-style: italic;
        }

        .roboto-black-italic {
        font-family: "Roboto", sans-serif;
        font-weight: 900;
        font-style: italic;
        }
        body {
            background: #FFF7D1;
            background-repeat: no-repeat;
        }
        .right-container {

        }
    </style>

</head>
<body>
    <x-navbar/>

    <div class="container d-flex rounded gap-5 mt-3 p-3"> 
        <div class="left-container ms-3 p-2">
            <div class="mt-4">
                <p class="fs-1 roboto-black-italic">Innovative,</br> user-friendly, </br>and private, Inventory </br>engineering tools.</p>
                <small class="fs-5">Discover more how specific and </br>easy to use the inventory engineering tools</small>
             </div>
             <a href="{{route('register')}}" class="btn btn-dark mt-5">Register Now!</a>
        </div>
        <div class="right-container ms-auto p-2">
            <div class="mt-3">
                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script> 
                <dotlottie-player src="https://lottie.host/4640d81a-0948-4129-9063-4fe536758056/dzxzU3v56E.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></dotlottie-player>
            </div>
        </div>
    </div>

</body>
</html>