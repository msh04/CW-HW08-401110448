<?php

$esm=null;
$email=null;
$message=null;

if(isset($_POST['esm']))
{
    $esm = $_POST['esm'];
}
if(isset($_POST['email']))
{
    $email = $_POST['email'];
}
if(isset($_POST['message']))
{
    $message = $_POST['message'];
}
?>

<html dir="rtl" lang="fa-IR">
    <head>
        <meta charset="utf-8">
    </head>
    <title style="direction: rtl;">
        صفحه شخصی محمد صدرا حسینی
    </title>
    <link rel="stylesheet" href="default.css"/>
    <body style="direction: rtl;">
        <nav>
            <ul class = "navigation_bar">
                <a href="./CW-HW7-401110448.html">
                <li>
                    معرفی
                </li>
                </a>
                <a href="./cw_prime.html">
                <li>
                    مهارت ها و توانایی ها
                </li>
                </a>
                <a href="./cw.html">
                <li>
                    افتخارات
                </li>
                </a>
                <a href="./cw_zegond.html">
                <li>
                    تماس با من
                </li>
                </a>
            </ul>
        </nav>
        <title>
            تماس با من
        </title>
        <br/><br/><br/><br/><br/><br/>
        <?php
            $filecount = count(glob('*.txt'));
            $newnum = ($filecount+1) . '.txt';
            $newfile = fopen($newnum, "w");
            fwrite($newfile,"$esm\n");
            fwrite($newfile,"$email\n");
            fwrite($newfile,"$message\n");
            fclose($newfile);
        ?>
        <form method="post">
            <p class = "txt">
            نام و نام خانوادگی :
            </p> 
            <input name="esm" class = "textinput" type = "text"/><br/>
            <p class = "txt">
            ایمیل:
            </p>
            <input name="email" class = "emailinput" type = "email"/><br/>
            <p class = "txt"> 
            پیام :
            </p>
            <textarea name="message" class = "textarea"></textarea><br/>
            <input type="submit" value="ارسال">
        </form>
        <script>
            document.getElementById("x").onclick=function(){
                var CW = prompt("آیا از صحت اطلاعات وارد شده اطمینان دارید؟")
            if(CW == "بله"){
                alert("با موفقیت ثبت شد.")
                } 
            }
        </script>
        <footer class = "footer_style">
            <a class = "footer_style_1">Email : hosseini.sadra14@gmail.com</a>
            <a class = "footer_style_2" style="text-decoration: none" href="https://github.com/msh04">Github account</a>
        </footer>
    </body>
</html>