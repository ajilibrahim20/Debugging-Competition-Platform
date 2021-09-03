<?php
    if(!isset($_COOKIE["finishStatus"])){
        header("Location: index.php");
    }
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
            integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
            crossorigin="anonymous"></script>
        <script src="<<your font awesome kit link>>" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
        <title>Bugged! Code Debugging</title>
        <link rel="icon" href="icon.png" type="image/x-icon">
        <style>
            .container{
                top:50%;
                left:50%;
                position:absolute;
                transform:translate(-50%,-50%);
                text-align:center;
                color:rgba(0,0,0,0.7);
            }
            img{
                height:50px;
                width:50px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="tick.png" alt="green tick">
            <h2>Thanks for Participating!!!</h2>
        </div>
    </body>
</html>