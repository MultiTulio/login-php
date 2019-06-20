
<div class='error'><?= $error?></div>

<form action='/' method='post'>
<div class='login'>
  <div class='username'>
        <span>Ваш логин:</span>
        <input type = 'text' name='login' placeholder = 'Введите логин'/>
  </div>
  <div class='password'>
        <span>Ваш пароль:</span>
        <input type = 'password' name='pass' placeholder = 'Введите пароль'/>
  </div>
    <div class='input-wrap'>
        <input type='submit' name='submit' value='Войти'>
    </div>
  </div>
</form>

<style type="text/css">
        .error{
            color:red
        }
        .login{
            border-color:slategray;
            background-color:rosybrown;
            border-radius:5%;
            text-align:center;
            align-self: center;
            margin-left:40%;
            margin-right:40%;
            margin-bottom:40%;
            margin-top:20%;
        }
        .username{

        }
        .password{

        }
   </style>