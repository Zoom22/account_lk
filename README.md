Тестовое задание (август 2021 г.)
=================================

Общие требования:
-----------------


1. Сайт целиком должен быть основан на PHP (желательно, но не обязательно фреймворк Symfony (версия 3.4 или 4.4)). Версия PHP 7.2 или выше.

2. Если будет использоваться Symfony, то для рендеринга HTML должен быть применен шаблонизатор Twig.

3. Используемая база данных - MySQL (дамп, пригодный к вливанию и использованию, обязательно должен лежать в папке проекта).

4. Код должен быть в приватном git-репозитории.

5. В браузерной части можно использовать любые js/css фреймворки, если нужно. Можно не использовать совсем. 

6. Используемый веб-сервер - nginx. Конфиг nginx для запуска проекта обязательно должен лежать в папке проекта.


Требования к функционалу:
-------------------------

Предположим, что мы делаем личный кабинет пользователя услуг ЖКХ. Назовём это “Услуги ЖКХ по подписке”.
Услуги - это, например, вывоз мусора, электричество, лифт. Каждая услуга имеет цену за единицу (для лифта это, например, один этаж, для мусора - один проживающий в квартире, для электричества - киловатт).
Каждый месяц 1го числа происходят списания денег за услуги. Назовём это “расчетный день”.
У пользователя есть “баланс” - виртуальный кошелек, с которого оплачиваются услуги.
Мне как пользователю нужна возможность управлять оказываемыми мне услугами, а также управлять своим счетом (балансом).

Требуется сделать сайт с двумя веб-страницами.


**Первая страница**  
На ней необходимо:
- показывать мой текущий баланс
- список оказываемых мне услуг (название, количество, цену и общую цену за все)
- добавить возможность подписаться на услугу или отписаться от существующей (кнопка “Добавить” над списком и “Удалить” в каждой строчке списка).
При подписке показывать форму, где:
- выбирать услугу
- вводить количество
- с моего баланса нужно списать количество средств, пропорциональное времени, оставшееся до расчетного дня (например, услуга стоит 30р, а сегодня 25 число, значит списать нужно 5р)
При отписке:
- показывать запрос с подтверждением
- вернуть на баланс пропорциональную сумму (“неиспользованная” часть до расчетного дня).

**Вторая страница**  
На ней необходимо:
- показывать мой текущий баланс
- видеть список моих “транзакций”. То есть историю всех моих движений средств по балансу (с описанием, за какую услугу было списание, когда, какая сумма списана, какой стал результирующий баланс). 
- Сделать фильтр по датам (чтобы смотреть транзакции за период) и по конкретной услуге
добавить кнопку, которая имитирует наступление “расчётного дня”. 
- То есть позволит прямо сейчас списать деньги за все услуги
- добавить форму для добавления денег на баланс (имитация пополнения счета)


Управление услугами (создание и удаление) не требуется. Можно просто наполнить таблицу в базе десятком примеров.

Все действия пользователя должны проходить разумную валидацию. 
Например, нельзя подписаться на новые услуги, если не позволяет состояние баланса.

Авторизация не требуется (это излишне в данной задаче). Считаем, что тот, кто смотрит на страницу в данный момент - уже пользователь.

Дизайн (внешний вид) не имеет значения, интересует именно организация базы данных и бэкэнд-код.
