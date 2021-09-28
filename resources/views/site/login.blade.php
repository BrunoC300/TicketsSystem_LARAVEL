<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>
            <form action={{ route('site.login') }} method="post">
                @csrf
                <input name="utilizador" value="{{ old('utilizador') }}" type="text" placeholder="Username"
                    class="fadeIn second">
                {{ $errors->has('utilizador') ? $errors->first('utilizador') : '' }}
                <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Password"
                    class="fadeIn third">
                {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
            {{ isset($erro) && $erro != '' ? $erro : '' }}
        </div>
    </div>
</body>

</html>

<div class="wrapper fadeInDown">
    <div id="formContent">

        <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>
