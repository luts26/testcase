На экране находится тестовая кнопка.
При клике на кнопку открывается всплывающее окно c шириной 700px и высотой 100%, которое содержит:
- кнопку "закрыть" в виде крестика в правом верхнем углу (кнопка не скролится вместе с контентом)
- контейнер для заголовка (контейнер не скролится вместе с контентом)
- Контейнер для контента (в контейнере для контента реализован стилизированный скролл на чистом JS)
Так-же при открытии окна, все, что находится за ним затеняется. При клике на затененную область окно закрывается (т.е. выполняются те-же действия, что и при клике на кнопку 'close')
После полного появления окна в него загружается содержимое php-файла посредством AJAX-запроса.

Особенности:
- открытие окна должено осуществляться вызовом одной функции
- абсолютно все должно быть реализовано на чистом JavaScript без использования каких-либо фреймворков или библиотек (включая скролл)
- предусмотреть возможность загрузки содержимого из любого файла в окно
- будет плюсом грамотное использование Flex при верстке
