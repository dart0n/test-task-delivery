### Задание

Есть интернет магазин, нужно реализовать логику отправки данных о посылке на курьерскую службу (условную Новую почту).

Нужно создать пустой laravel проект, создать контроллер DeliveryController внутри должен быть метод, который на вход принимает данные о посылке и получателе.

Данные о посылке включают в себя ширину, высоту, длину и вес.

Данные о получателе ФИО, номер телефона, почту и адрес.

Предположим, что Новая почта работает по следующему контракту:
```
URL POST novaposhta.test/api/delivery
BODY {
customer_name: “FIO here”,
phone_number: “+380950000000”,
email: “some@email.com”,
sender_address: “data from application config”,
delivery_address: “delivery address here, apt. 17”
}
```
Необходимо реализовать логику отправки данных о посылке с учётом возможных будущих запросов клиента. (*можно в коде прописать какие могут быть дополнительные запросы в
будущем).
1. Реализовать задачу с учётом возможных доработок в будущем (предусмотреть что клиент может захотеть в будущем) и предусмотрев архитектуру на будущий рост
2. Можно изменить код или дописать комментарий над методом/классами как они будут видоизменяться если владелец интернет-магазина захочет добавить отправку через Укрпочту, Джастин и другие курьерки
3. Как изменится код, если курьерок будет 15?
4. Если у клиента есть проблема с доставкой заказов. Клиент отправляет данные, но поддержка курьерской службы говорит, что не получает данные от текущего сервиса.