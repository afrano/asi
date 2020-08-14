<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Halaman Login Dashboard </title>
        <link rel="stylesheet" href="{{asset('login-style/loginStyle.css')}}">
        <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
    </head>  
        <script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <body>
        <div id="formWrapper">
            <form action="/postlogin" method="post">
                {{ csrf_field() }}
                <div id="form">
                    <div class="logo">
<!--                        <img src="{{asset('img/logo.png')}}">-->
                    </div>
                    <div class="form-item">
                        <p class="formLabel">Email</p>
                        <input onfocus="this.value = '';"  type="email" name="email" id="email" class="form-style" autocomplete="off"/>
                    </div>
                    <div class="form-item">
                        <p class="formLabel">Password</p>
                        <input onfocus="this.value = '';"  type="password" name="password" id="password" class="form-style" />
                        <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
                        <p><a href="#" ><small>Forgot Password ?</small></a></p>	
                    </div>
                    <div class="form-item">
                        <p class="pull-left"><a href="#"><small>Register</small></a></p>
                        <input type="submit" class="login pull-right" value="Log In">
                        <div class="clear-fix"></div>
                    </div>
                </div>
            </form>

        </div>
 
<!-- partial -->
<script  src="{{asset('login-style/script.js')}}"></script>

</body>
</html>
