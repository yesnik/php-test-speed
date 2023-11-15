# PHP Test speed

Проект на Docker для проверки скорости работы PHP-приложения.

## Стек

- Nginx - v.1.14.2
- PHP-FPM - v.7.1.26
- MariaDB - v.10.1.37

## Установка

1. Клонируем репозиторий:
    ```bash
    git clone https://github.com/yesnik/php-test-speed
    ```
2. Делаем сборку образов и запускаем проект:
    ```bash
    make build
    make up
    
    # Или если нет утилиты `make`:
    docker compose build --build-arg HOST_USER_ID="$(id -u)" --build-arg HOST_GROUP_ID="$(id -g)"
    docker compose up -d
    ```
3. Откройте в браузере http://127.0.0.1:8080/

## Проверка скорости работы приложения

- Откройте в браузере страницу: http://127.0.0.1:8080/test.php
- Откройте консоль разработчика (F12), перейдите на вкладку Network, активируйте чекбокс "Preserve log"
- Нажмите на иконку воронки, чтобы отобразился фильтр запросов. Укажите там значение "test.php", чтобы отображались только запросы к тестовому скрипту
- Нажимайте F5, чтобы страница загрузилась заново
- После 10-20 нажатий у вас появятся различные показатели скорости работы скрипта
- Выделите их при помощи курсора мыши и вставьте в Google Spreadsheets / Microsoft Excel
- В любой из этих программ при помощи функций `AVERAGE()` / `СРЗНАЧ()` вычислите среднюю скорость загрузки страницы
