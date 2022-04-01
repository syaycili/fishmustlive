<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Fish Must Live</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <style>
        body{
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background-color: #74EBD5;
        background-image: linear-gradient(45deg, #74EBD5 0%, #9FACE6 100%);

        }
        .footer-container{
            margin-top: auto;
        }
        ::-moz-selection { /* Code for Firefox */
            color: #000000;
            background: #9dd8cd;
        }

        ::selection {
            color: #000000;
            background: #9dd8cd;
        }
        </style>
</head>

