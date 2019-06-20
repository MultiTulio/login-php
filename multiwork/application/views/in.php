<div class='container'>
    <div class='message'>
        Вы вошли как: <?= $_SESSION['name']?>
    </div>
    <a class="logout" href="?logout=1">Выйти</a>
</div>


<style type="text/css">
        .container{
            max-width: 1070px;
            margin: 100px auto;
        }
        .message{
            text-align: center;
        }
    .logout{
        position: absolute;
        right: 30px;
        top: 30px;
        border: 1px solid slategray;
        background-color: rosybrown;
        border-radius: 3px;
        padding: 5px 10px;
        text-decoration: none;
        color: #000000;
        transition: 0.2s;
    }
    .logout:hover{
        background-color: #daa6a6;
        box-shadow: 3px 3px 3px 0px rgba(0,0,0,0.5);
    }
   </style>
