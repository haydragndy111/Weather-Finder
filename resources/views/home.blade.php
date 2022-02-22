<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Finder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{asset('css/style.css')}}"  rel="stylesheet" >
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        Weather
                    </div>
                    <div class="card-body">
                        <input type="text" name="city" id="city" >
                        <input type="submit" class="btn btn-primary" value="search" id="search">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        Weather
                    </div>
                <div class="parent card-body">
                    <div class="div1"><img src="" alt="" id="icon"></div>
                    <div class="div2"><h3 id="temp"></h3></div>
                    <div class="div3"><h3 id="weather"></h3></div>
                    <div class="div4"><h3 id="wind"></h3></div>
                </div> 
            </div>
        </div>
    </section>
</body>
    <script src={{asset('js/weather.js')}}></script>
</html>