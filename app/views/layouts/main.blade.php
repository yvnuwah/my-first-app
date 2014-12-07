<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Authentication App With Laravel 4</title>
        <style>
            body {
                padding-top: 40px;
            }
             
            .form-signup, .form-signin {
                width: 400px;
                margin: 0 auto;
            }
        </style>
        {{ HTML::style('css/bootstrap.min.css') }}
    </head>

    <body>
        
        <!-- <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li>{{ HTML::link('users/register', 'Register') }}</li>
                        <li>{{ HTML::link('users/login', 'Login') }}</li>
                    </ul>
                </div>
            </div>
        </div> -->

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li>{{ HTML::link('users/register', 'Register') }}</li>
                    <li>{{ HTML::link('users/login', 'Login') }}</li>
                </ul>
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            @if(Session::has('message'))
                <p class="alert">{{ Session::get('message') }}</p>
            @endif

            {{ $content }}
        </div>

    </body>
    
</html>