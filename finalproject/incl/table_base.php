<div class="table_box">
    <table class="table-bordered table-striped table table-my">
        <thead>
        <tr><td colspan="12"><h3>База зарегестрированных участников</h3></td></tr>
        <tr>
        <td>ID</td>
        <td>Имя, фамилия</td>
        <td>Дата рождения</td>
        <td>Город проживания</td>
        <td>Email</td>
        <td>Контактный телефон</td>
        <td>Дата регестрации</td>
        <td>Уроень владения ПК</td>
        <td>Уровень знания Английского</td>
        <td>Образование</td>
        <td>Профессия</td>
        <td>Особый статус</td>
        </tr>
        </thead>
        <?php
            while($row = mysql_fetch_array($result))
            {
                print("<tr>");
                print("<td>" . $row["id"] . "</td>");
                print("<td>" . $row["name"] ." ". $row["sname"] . "</td>");
                print("<td>" . $row["day"] ."-". $row["month"] ."-". $row["year"] . "</td>");
                print("<td>" . $row["city"] . "</td>");
                print("<td>" . $row["mail"] . "</td>");
                print("<td>" . $row["tel"] . "</td>");
                print("<td>" . $row["datereg"] . "</td>");
                print("<td>" . $row["levelpc"] . "</td>");
                print("<td>" . $row["leveleng"] . "</td>");
                print("<td>" . $row["spec"] . "</td>");
                print("<td>" . $row["work"] . "</td>");
                print("<td>" . $row["status"] . "</td>");
                print("</tr>");
            }
            print("<tr>");
        ?>
    </table>
   <div class="btn btn-default back"><a href="index.php">Вернуться обратно!</a></div>    
</div> 