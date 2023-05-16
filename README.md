## Telegram-logger for Laravel

#### Installation
- composer require galka/laravel-telegram-logger


### Publish
- php artisan vendor:publish --provider='Galka\TelegramBotLogger\Providers\TelegramBotLoggerProvider'
- add channel to config/logging.php :

'telegram_log' => [
    'driver' => 'custom',
    'via' => TelegramLoggerFactory::class,
    'level' => env('LOG_LEVEL', 'debug'),
    'chat_id' => env('TELEGRAM_LOGGER_CHAT_ID'),
    'token' => env('TELEGRAM_LOGGER_TOKEN'),
]

- add token and chat_id to .env

### Usage

logger()->channel('telegram_log)->debug('test);
