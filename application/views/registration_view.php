<!doctype html>
<html lang="RU-ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<div class="row">

<div class="col-md-12">
  <div class="well" style="margin-top: 0%; background-color:lightgrey">
        <h4 style="text-align: center;">Добавление в справочник</h4>
        <form role="form" id="contactForm"  class="shake" action="sendregistration/send_reg" method="POST" enctype="multipart/form-data">

            <!-- Имя -->
            <div class="row">
                <div class="form-group col-sm-12">
                    <label for="name" class="h4">Имя</label>
                    <input name="user_name" type="text" class="form-control" id="name" placeholder="Введите свое имя"  data-error="Забыли как вас зовут?" required pattern="^[А-Яа-яЁё\s]+$">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <!--Возраст-->
            <div class="row">
                <div class="form-group col-sm-12">
                    <label for="age" class="h4">Возраст</label>
                    <input name="user_age" type="text" class="form-control" id="age" placeholder="Введите ваш возраст" data-error="Забыли сколько вам лет?" required pattern="^[ 0-9]+$" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>


            <div class="g-recaptcha" data-sitekey="6Lef8ggUAAAAAF-2WAiWi1c1FuRIzQv27peyc6Cj"></div>
            <br>
            <!--Кнопка-->
            <div class="row">
                <div class="form-group col-sm-12 col-sm-offset-0">
                    <input type="submit" id="button_send" class="col-xs-12 btn btn-md btn-success" value="Зарегистрироваться" name="">
                </div>
            </div>