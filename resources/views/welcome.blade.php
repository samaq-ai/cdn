@extends('layouts.sama')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sama</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

<div class="container">
    <div class="row justify-content-center">
    @if (Route::has('login'))
            @auth
        <div class="col-md-12">
            <div class="card">
                <div class="top-right links">
                <i style="color:green" class="fas fa-check"></i> <span>You are signed in as: {{ Auth::user()->name }} </span><br />
                <i style="color:green" class="fas fa-lock"></i> <span>Access level: Administrator </span>
                </div>
            </div>
        </div>
            @else
            <!-- If user loggedOut show below content until endShow part -->          
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                    col-md-8
                    </div>
                </div>
            </div>  
        </div>
    </div> 
@endauth
@endif
@endsection