<div id="" class="block">
    <h2>Регистрация на проект</h2>
    <p>Анкета является первым шагом при участии в программе, по ее заполнению Вы получите ссылку на тестовое задание и инструкцию по его выполнению. Регистрируясь, Вы даете согласие на обработку и хранение ваших персональных данных</p>
    <div id="forma">
        <form action="data.php" method="post" class="form-horizontal">
            <div class="form-group">
                <input  required class="form-control" name="second_name" placeholder="Фамилия" type="text"/>
            </div>
            <div class="form-group">
                <input  required class="form-control" name="first_name" placeholder="Имя" type="text"/>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><h3>Дата рождения</h3></label>
                <select required class="form-control" name="day">
                    <option disabled selected>День</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>   
            </div>
            <div class="form-group">
                <select required class="form-control" name="month">
                    <option disabled selected class="form-control">Месяц</option>
                    <option value="01" >январь</option>
                    <option value="02" >февраль</option>
                    <option value="03">март</option>
                    <option value="04">апрель</option>
                    <option value="05">май</option>
                    <option value="06">июнь</option>
                    <option value="07">июль</option>
                    <option value="08">август</option>
                    <option value="09">сентябрь</option>
                    <option value="10">октябрь</option>
                    <option value="11">ноябрь</option>
                    <option value="12">декабрь</option>
                    </select>
            </div>
            <div class="form-group">
                <input  required class="form-control" name="year" placeholder="Год" type="text"/>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><h3>Персональные данные</h3></label>
                <select required class="form-control" name="eng">
                    <option disabled selected class="form-control">Уровень владения английским</option>
                    <option value="Не владею">Не владею</option>
                    <option value="Могу читать со словарем простые тексты">Могу читать со словарем простые тексты</option>
                    <option value="Могу читать технические тексты">Могу читать технические тексты</option>
                    <option value="Свободно читаю говорю">Свободно читаю говорю</option>
                </select>
            </div>
            <div class="form-group">
                <select required class="form-control" name="comp">
                    <option disabled selected>Уровень владения ПК</option>
                    <option value="Базовый">Базовый</option>
                    <option value="Уверенный пользователь">Уверенный пользователь</option>
                    <option value="Продвинутый пользователь">Продвинутый пользователь</option>
                </select>
            </div>
            <div class="form-group">
                <input required class="form-control" name="spec" placeholder="Полученная специальность" type="text"/>
            </div>
            <div class="form-group">
                <input required class="form-control" name="work" placeholder="Сфера, в которой работаете" type="text"/>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><h3>Контактные данные</h3></label>
                <input  required class="form-control" name="city" placeholder="Город проживания" type="text"/>
            </div>
            <div class="form-group">
                <input required class="form-control" name="mail" placeholder="Email" type="text"/>
            </div>
            <div class="form-group">
                <input required class="form-control" name="tel" placeholder="Телефон" type="text"/>
            </div>
            <div class="form-group">
                <select required class="form-control" name="stat">
                    <option disabled selected>Особенный статус</option>
                    <option value="Участник АТО">Участник АТО</option>
                    <option value="Переселенец">Переселенец</option>
                    <option value="Отсутсвует">Отсутсвует</option>
                </select>
            </div>
            
            <div class="form-group">
                <button class="btn btn-default" type="submit"><span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                    Подать заявку для участия
                </button>
            </div>
        </form>
    </div>
</div>