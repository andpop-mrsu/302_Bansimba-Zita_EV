##                             Лабораторная работа 6 (PHP). Реализация паттернов проектирования
### Лекции
* "Паттерны проектирования" https://youtu.be/f9P6X5KX6Wc
* "Тестирование PHP-кода с помощью PHPUnit" https://youtu.be/49LEerPmhrk?t=5308

- - -

## Задание 1. Паттерн "Adapter"
В интернет-магазине принимаются платежи через системы, API которых сильно различается.
В каталоге Task06/Task06_1/src определены классы и интерфесы:
```
CreditCard               // API для работы с кредитной картой
                         // Платеж считается проведенным, если метод transfer() 
                         // возвращает строку, содержащую "Authorization code:"
PayPal                   // API для работы с PayPal
                         // Платеж считается проведенным, если метод authorizeTransaction()
                         // возвращает строку "PayPal Success!"
PaymentAdapterInterface  // Интерфейс для проведения платежей в нашей системе
```
1. Нужно реализовать возможность приема платежей по системе PayPal и через обычную кредитную карту, применяя для этого паттерн "Adapter".
* Создать классы, реализующие интерфейс `PaymentAdapterInterfave`:
    * `CreditCardAdapter`. Адаптер для пластиковой карты.
    * `PayPalAdapter`. Адаптер для системы PayPal.
* Пример клиентского кода:
```
function collectMoney(PaymentAdapterInterface $paymentSystem, $amount)
{
    if ($paymentSystem->collectMoney($amount)) echo "Платеж {$amount} прошел\n";
}

$paypal = new PayPal('customer@aol.com', 'password');
$cc = new CreditCard(1234567890123456, "09/22");

collectMoney(new PayPalAdapter($paypal), 100);
collectMoney(new CreditCardAdapter($cc), 200);
```
2. Используя PHPUnit, написать модульные тесты для проверки корректности обоих адаптеров.

### Требования к оформлению и коду
* Проект для решения задания с тестами разместить в каталоге Task06/Task06_1.

- - -
### Задание 2. Паттерн "Decorator"
1. Используя паттерн "Decorator" создать иерархию классов для рачета стоимости бронирования номеров в гостинице. Имеются номера:
* "Эконом" - 1000 руб/ночь,
* "Стандарт" - 2000 руб/ночь,
* "Люкс" - 3000 руб/ночь.

В любой номер можно заказать дополнительные услуги:
* выделенный Интернет - 100 руб, 
* дополнительный диван - 500 руб, 
* доставка еды в номер - 300 руб, 
* завтрак "шведский стол" - 500 руб, 
* ужин - 800 руб.

В объекте, соответствующем забронированному номеру, должен быть метод, возвращающий строку с категорией этого номера и списком выбранных дополнительных услуг, и метод, возращающий общую цену данного номера.

2. Используя PHPUnit, написать модульные тесты для проверки корректности методов созданных классов.

3. Нарисовать (от руки на бумаге) UML-диаграмму классов, скан рисунка в файле uml.jpg сохранить в репозиторий.

### Требования к оформлению и коду
* Проект для решения задания с тестами разместить в каталоге Task06/Task06_2.

- - -

### Общие требования к оформлению и коду
* Работать нужно в ветке Task06 Git-репозитория.
* PHPUnit устанавливать локально для каждой задачит (`composer require phpunit/phpunit`). Прогон тестов из каталога tests: `./vendor/bin/phpunit --color tests`
* Требования к оформления PHP-кода приведены в файле [PHP_instruction.md](PHP_instruction.md)

- - -

### Отправка задания на проверку
Процедура отправки задания на проверку и манипуляции с репозиториями после проверки описаны в файле [Git_instruction.md](Git_instruction.md).