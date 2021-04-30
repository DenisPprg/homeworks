


<div class="profile"><img src="https://html5book.ru/wp-content/uploads/2016/10/profile-image.png">
    <h2>Анкета</h2>
</div>
<form action="form.php" method="POST" style="position: absolute; left: 830px; top: 190px ">
    <p>Введите имя:<br>
        <input type="text" name="firstname" required="required" placeholder="Укажите ваше имя" /></p>
    <p>Введите пол: <br>
        Мужской: <input type="radio" name="sex" value="Male" />
        <br />
        Женский: <input type="radio" required="required" name="sex" value="Female" />
    </p>
    <p>Введите возраст:<br>
        <input type="number" required="required" name="age" min="1" max="100"/></p>
    <p>Номер паспорта:<br>
        <input type="number" name="numbers" /></p>
    </p>
    <p>Серия паспорта:<br>
        <input type="number" name="serial" /></p>
    </p>
    <p>Дата выдачи:<br>
        <input type="date" name="date" /></p>
    </p>
    <input class="pressed-button" type="submit" value="Отправить" style="position: absolute; left: 23px; top: 200px"/>
</form>


<style>
    body{
        background: url("1233.gif");
        color: aliceblue;
    }
    h2{
        color: aqua;
        position: absolute; left: 15px;
    }
    p{
    color: aquamarine;
     }
::-webkit-input-placeholder{
    color: crimson;
}
div{
    position: absolute; left: 880px; top: 40px;
}
    .pressed-button {
        text-decoration: none;
        display: inline-block;
        padding: 5px 12px;
        margin: 177px 1px;
        border-radius: 30px;
        background-image: linear-gradient(45deg, #6ab1d7 0%, #33d9de 50%, #002878 100%);
        background-position: 100% 0;
        background-size: 200%;
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        font-weight: 300;
        color: white;
        box-shadow: 0 16px 32px 0 rgba(0, 40, 120, .35);
        transition: .5s;
    }
    .pressed-button:hover {
        box-shadow: 0 0 0 0 rgba(0, 40, 120, 0);
        background-position: 0 0;
    }

</style>



