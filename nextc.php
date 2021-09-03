<?php
    
    session_start();
    if(!(isset($_SESSION["name"])&&isset($_SESSION["phone"])&&isset($_SESSION["semester"])&&isset($_SESSION["branch"])&&isset($_SESSION["lang"]))){
        header("Location: index.php");
    }
    else if(isset($_COOKIE["finishStatus"])){
        header("Location: finish.php");
    }
    else if($_SESSION["lang"]=="C++"){
        header("Location: nextcpp.php");
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
        html {
            scroll-behavior: smooth;
        }
        /* form{
            margin-top:70px;
        } */
        .navbar{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.08), 0 6px 20px 0 rgba(0, 0, 0, 0.06);
        }
        textarea{
            min-height:200px;
            white-space: nowrap;
        }
        h3{
            padding-top:70px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <a class="navbar-brand" href="#">Bugged! Code Debugging</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#prog1">Program 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prog2">Program 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prog3">Program 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prog4">Program 4</a>
                    </li>
                </ul>
            </div>
        </nav>
        <form action="submissionc.php" id="form" method="POST">
            <input type="hidden" name="name" value="<?php echo $_SESSION["name"];?>">
            <input type="hidden" name="phone" value="<?php echo $_SESSION["phone"];?>">
            <input type="hidden" name="semester" value="<?php echo $_SESSION["semester"];?>">
            <input type="hidden" name="branch" value="<?php echo $_SESSION["branch"];?>">
            <input type="hidden" name="lang" value="<?php echo $_SESSION["lang"];?>">
            <input type="hidden" name="contestantId" value="0" id="contestantId">
            <div class="form-group" id="prog1">
                <label for="program1"><h3>Program 1</h3><br>
                    <strong>Output</strong> <br>
                    Enter length <br>
                    5 (input)<br>
                    Enter elements <br>
                    6 1 2 4 3 (input)<br>
                    1       2       3       4       6 <br>
                </label>
                <textarea name="program1" id="program1" class="form-control" required>
#include<stdio.h>

void main(){
    int a[],i,j,n,flag,-temp,small;
    printf('Enter length\n');
    scanf('%d',&n);
    printf('Enter elements\n');
    for(i=0;i<n;i++){
        scanf('%d',&a[i]);
    }
    for(i=0;i<n-1;i+2){
        flag=0;
        small=a[i];
        for(j=i+1;j<n;j++){
            if(small>a[j]){
                flag=1;
                loc=j;
                small=a[j];
            }
        }
        if(flag==1){
            temp=a[i];
            a[i]=a[loc];
            a[loc]=temp;
        }
    }
    for(;i<n;i++){
        printf('%d\t',a[i]);
    }
    printf('\n');
}
                </textarea>
            </div>
            <div class="form-group" id="prog2">
                <label for="program2">
                <h3>Program 2</h3> <br>
                <strong>Output</strong><br>
                    enter: <br>
                    1 for enqueue <br>
                    2 for dequeue <br>
                    3 for displaying <br>
                    0 to exit <br>
                    enter your choice <br>
                    1 (input)<br>
                    enter item <br>
                    1 (input)<br>
                    enter your choice <br>
                    1 (input)<br>
                    enter item <br>
                    2 (input)<br>
                    enter your choice <br>
                    1 (input)<br>
                    queue is full <br>
                    enter your choice <br>
                    3 (input)<br>
                    displaying queue <br>
                    1       2 <br>
                    enter your choice <br>
                    2 (input)<br>
                    deleted item =1 <br>
                    enter your choice <br>
                    3 (input)<br>
                    displaying queue <br>
                    2 <br>
                    enter your choice <br>
                    0 (input)<br>
                    exiting <br></label>
                <textarea name="program2" id="program2" class="form-control" required>
#include<stdio.h>
#define -max 2

void main(){
    int choice,q[],f=0,r=0,f1;
    printf("enter: \n1 for enqueue \n2 for dequeue\n3 for displaying\n0 to exit\n");
    do{
    printf("enter your choice\n");
    scanf("%d",choice);
    switch(choice){
        case 0;
            printf("exiting\n");
        case 1;
            if(r==-max){ //max
                printf("queue is full\n");
            }
            else{
                if(f==0&&r==0){
                    f=1;
                }
                r++=1;
                printf("enter item\n");
                scanf("%d",&q[r]);
            }
        case 2;
            if(f==0){
            printf("queue is empty\n");
            }
            else{
            if(f=r){
                printf("deleted item =%c\n",q[f]);
                f=0;
                r=0;
            }
            else{
                printf("deleted item =%c\n",q[f]);
                f=f+1;
            }
            }
        case 3;
            if(f=0){
            printf("queue is empty\n");
            }
            else{
            f1=f;
            printf("displaying queue\n");
            while(f1<=r){
                printf("%d\t",q[f1]);
                f1++=1;
            }
            printf("\n");
            }
        default;
            printf("wrong choice\n");
    }
    }while(choice not=0);
}
                </textarea>
            </div>
            <div class="form-group" id="prog3">
                <label for="program3"><h3>Program 3</h3> <br>
                <strong>Output</strong> <br>
                Enter first string: <br>
                hello hai (input)<br>
                Enter second string: <br>
                hai (input)<br>
                Substring found at position 7 <br><br>
                <strong>Note:</strong><br>
                scanf("%[^\n]%*c", &string-variable); is use to read string with whitespaces. <br>
                </label>
                <textarea name="program3" id="program3" class="form-control" required>
#include <stdio.h>

void main(){
    Char word[], sub[];
    int length, i, j;
    printf('Enter first string:');
    scanf("%[^\n]%*c", &word);
    printf('Enter second string: ');
    scanf("%[^\n]%*c", &sub);
    length = strlen(sub);
    i = 0;
    j = 0;
    while (word[i] != '\0' && sub[j] != '\0'){
        if (word[i] == sub[j]){
            j+1;
        }
        else{
            j = 0;
        }
        i+1;
    }

    if (j = length){
        printf("Substring found at position %d", i - j + 1);
    }
    else{
        printf("Substring not found");
    }
    return 1;
}
                </textarea>
            </div>
            <div class="form-group" id="prog4">
                <label for="program4"><h3>Program 4</h3> <br>
                <strong>Output</strong> <br>
                123
                </label>
                <textarea name="program4" id="program4" class="form-control" required>
#include<stdio.h>
void main(){
    if(printf("123")){}
}
                </textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary btn-block">
            </div>
        </form>
    </div>
</body>

</html>

<script>

    <?php
        if($_SESSION["phone"]!="7025661320")
        {
    ?>

    var _0x121c=['3fFvckv','8aVWFJp','1001809ooZLCQ','1ElMCVa','onpaste','program1','program2','69129WZuvSw','221020LYvUvX','oncut','1038827ifbDDy','getElementById','oncopy','317920eJzaQw','program4','112199WkKQXF','program3','111937apBCjc'];var _0x33598d=_0x4809;function _0x4809(_0x1322e0,_0x2d058a){_0x1322e0=_0x1322e0-0x15b;var _0x121c86=_0x121c[_0x1322e0];return _0x121c86;}(function(_0x3ec725,_0xc895b5){var _0x28202a=_0x4809;while(!![]){try{var _0x592197=-parseInt(_0x28202a(0x165))+parseInt(_0x28202a(0x15b))*-parseInt(_0x28202a(0x16c))+parseInt(_0x28202a(0x162))+-parseInt(_0x28202a(0x160))+parseInt(_0x28202a(0x15f))+parseInt(_0x28202a(0x167))*parseInt(_0x28202a(0x16a))+parseInt(_0x28202a(0x169))*parseInt(_0x28202a(0x16b));if(_0x592197===_0xc895b5)break;else _0x3ec725['push'](_0x3ec725['shift']());}catch(_0x32d177){_0x3ec725['push'](_0x3ec725['shift']());}}}(_0x121c,0xc3244),document[_0x33598d(0x163)](_0x33598d(0x15d))[_0x33598d(0x164)]=function(){return![];},document[_0x33598d(0x163)](_0x33598d(0x15d))[_0x33598d(0x161)]=function(){return![];},document['getElementById'](_0x33598d(0x15d))['onpaste']=function(){return![];},document[_0x33598d(0x163)](_0x33598d(0x15e))['oncopy']=function(){return![];},document[_0x33598d(0x163)](_0x33598d(0x15e))[_0x33598d(0x161)]=function(){return![];},document[_0x33598d(0x163)](_0x33598d(0x15e))[_0x33598d(0x15c)]=function(){return![];},document['getElementById'](_0x33598d(0x168))['oncopy']=function(){return![];},document['getElementById'](_0x33598d(0x168))[_0x33598d(0x161)]=function(){return![];},document[_0x33598d(0x163)]('program3')['onpaste']=function(){return![];},document[_0x33598d(0x163)]('program4')['oncopy']=function(){return![];},document[_0x33598d(0x163)](_0x33598d(0x166))[_0x33598d(0x161)]=function(){return![];},document[_0x33598d(0x163)](_0x33598d(0x166))[_0x33598d(0x15c)]=function(){return![];});

    <?php
            }
        ?>

    window.onbeforeunload = function(){
        return 'Are you sure you want to leave? All your progress will be lost';
    };

    $("#form").submit(function(e) {

    e.preventDefault();

    var form = $(this);
    var url = form.attr('action');
    
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function (data) {
                console.log(data);
                if (data == "done") {
                    Swal.fire(
                        'Success!',
                        'Entry has been submitted successfully.',
                        'success'
                    ).then((result) => {
                        window.onbeforeunload = null;
                        window.location.replace("finish.php");
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
                console.log(data);
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
            }
    });
});


!function() {
    function detectDevTool(allow) {
        if(isNaN(+allow)) allow = 100;
        var start = +new Date();
        debugger;
        var end = +new Date();
        if(isNaN(start) || isNaN(end) || end - start > allow) {
            $("#contestantId").val(parseInt($("#contestantId").val())+1);
        }
    }
    if(window.attachEvent) {
        if (document.readyState === "complete" || document.readyState === "interactive") {
            detectDevTool();
        window.attachEvent('onresize', detectDevTool);
        window.attachEvent('onmousemove', detectDevTool);
        window.attachEvent('onfocus', detectDevTool);
        window.attachEvent('onblur', detectDevTool);
        } else {
            setTimeout(argument.callee, 0);
        }
    } else {
        window.addEventListener('load', detectDevTool);
        window.addEventListener('resize', detectDevTool);
        window.addEventListener('mousemove', detectDevTool);
        window.addEventListener('focus', detectDevTool);
        window.addEventListener('blur', detectDevTool);
    }
}();



</script>