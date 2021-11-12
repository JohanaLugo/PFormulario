<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header-b {
            background-color: #dcc8db
        }
        .nav-b {
            position: relative;
            height: 100px;
            right: 0px;
            left: 50px;
            width: 800px;
            background-color: #b5a79e
        }
        .contenido-b {
            position: relative;
            height: 270px;
            right: 0px;
            left: 50px;
            width: 800px;
            background-color: #aacccb
        }
        .barra-b {
            position: absolute;
            height: 400px;
            right: 0px;
            left: 900px;
            width: 400px;
            background-color: #d9a978
        }
        .footer-b {
            position: relative;
            height: 30px;
            right: 0px;
            left: 50px;
            width: 800px;
            background-color: #dd7171
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="header-b">
    <div> 
    @section('header')
        Plantilla 
    @show
    </div>