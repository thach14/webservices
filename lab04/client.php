<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập vào website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="container">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="login-form">
                <form action="" method="GET">
                    <h1>Đăng nhập vào website</h1>
                    <div class="input-box">
                        <i></i>
                        <input type="text" name="gmail" placeholder="Nhập gmail" id="gmail">
                    </div>
                    <div class="input-box">
                        <i></i>
                        <input type="password" name="password" placeholder="Nhập mật khẩu" id="password">
                    </div>
                    <div class="btn-box">
                        <button type="button">
                            Đăng nhập
                        </button>
                   
                    <script>
                        var gmail = document.getElementById("gmail").values;
                        var pass = document.getElementById("password").values;
                       $("button").click(callAjax);
                        function callAjax() {
                            $.ajax({
                                
        url:"server.php?gmail=".gmail+"&password=".pass,
        type: "POST", //request type
        success:function(result){
         alert(result);
       }
     });
                            /*var gmail = document.getElementById("gmail").values;
                        var pass = document.getElementById("password").values;
                            var ajax = new XMLHttpRequest();
                            
                            ajax.open("GET", "server.php?gmail="+gmail+"&password="+pass);
                            ajax.send();
                            ajax.onload = function() {
                                document.getElementById("kq").innerHTML = this.responseText;
                            }
                        }*/
                    </script>
                     </div id="kq">
                    <div>

                    </div>
                </form>
                <?php

                ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
        </div>
    </footer>


</body>

</html>