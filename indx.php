<?php
    if(isset($_COOKIE["finishStatus"])){
        header("Location: finish.php");
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
        .container {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 15%;
            background-color: white;
            border-radius: 10px;
            width: 250px;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .bugged{
            width:80px;
            height:80px;
            margin-bottom:8px;
        }

        .rog{
            width:80px;
        }

        .presented{
            text-align:center;
            font-size:10px;
            font-weight:bold;
        }

        body{
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position:center;
        }

        h3{
            text-align:center;
            background: url(bg.jpg) no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight:bold;
            background-position:center;
        }

        .btn,.btn:hover,.btn:focus{
            background: url(bg.jpg) no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color:white;
        }

        
    </style>
</head>

<body>
    <div class="container">
        <h3>BUGGED!</h3>
        <form action="submit.php" id="form" method="POST">
        <!-- <center><img src="icon.png" alt="Bugged!" class="img-fluid bugged"></center> -->
            <div class="form-group">
                <label for="name">Enter your name</label>
                <input type="text" name="name" id="name" class="form-control" required placeholder="Name">
            </div>
            <div class="form-group">
                <label for="phone">Enter your phone</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">+91</div>
                    </div>
                    <input type="tel" name="phone" id="phone" class="form-control" required placeholder="phone">
                </div>
            </div>
            <div class="form-group">
                <label for="mail">Enter your mail id</label>
                <input type="mail" name="mail" id="mail" class="form-control" required placeholder="Mail Id">
            </div>
            <div class="form-group">
                <label for="semester">Select your semester</label>
                <select name="semester" id="semester" class="form-control" required>
                    <option value="" selected disabled>Select an option</option>
                    <option value="S2">S2</option>
                    <option value="S4">S4</option>
                    <option value="S6">S6</option>
                    <option value="S8">S8</option>
                    <option value="Alumini">Alumini</option>
                </select>
            </div>
            <div class="form-group">
                <label for="branch">Select your branch</label>
                <select name="branch" id="branch" class="form-control" required>
                    <option value="" selected disabled>Select an option</option>
                    <option value="CE">CE</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lang">Preferred language</label>
                <select name="lang" id="lang" class="form-control" required>
                    <option value="" selected disabled>Select an option</option>
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-block">
            </div>
            <div class="presented">Presented By</div>
            <center><img src="rog.png" alt="ROG" class="img-fluid rog"></center>
        </form>
    </div>
</body>

</html>

<script>
    const d=new Date();
    $("#form").submit(function (e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        if(d.toDateString()!="Sun Jun 13 2021"){
            Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Event has not yet started!'
                    });
            return ;
        }

        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                console.log(data); // show response from the php script.
                if (data == "done") {
                    Swal.fire(
                        'Success!',
                        'Successfully registered.',
                        'success'
                    ).then((result) => {
                        if($("#lang").val()=="C")
                            window.location.replace("");
                        else if($("#lang").val()=="C++")
                            window.location.replace("");
                    });
                }
                else {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                }
            },
            error: function (data) {
                console.log(data); // show response
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
            }
        });
    });
</script>