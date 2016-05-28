# A high performance framework for PHP.

## Why I make it?

I am a PHP programmer, and I don't know much about C programming, though I tried to learn more.  
Nowadays people say that the bottleneck of a system is not on the framework, because hardware's performance is much better than those days and I thought it was true.  
When I benchmarked Yaf and Yii myself, I know the above theory is a lie.  
Nearly all of the modern PHP framework are performance killer, and as a progmatic one, I tend to solve this problem by myself.  
However, C is too hard and inefficient(in develop speed aspect) for me. When I find Zephir, I know it is the way out.  

Today I wrote a pretty simple logger for PHP users, it wrapps PHP internal function `error_log`, and give it a better interface to use, it implements PSR-3 additionally.

## How do I use it?

As I mentioned above, this logger implements PSR-3 interface, and I added some useful method as well.

```php
$logger = new Hyph\Log('path/to/store/logfiles');
$logger->log('WARNING', 'I am a PHP logger writen with Zephir by {author}, whose email is {email}.', [
  'author' => 'frostwong',
  'email' => 'frostwong@gmail.com',
]);
$logger->debug('this is sort of {event}', [
  'event' => 'wiered',
]);
```

If you want to change the directory the logger writes to, you can do this.

```php
$logger->setPath('another path to file');
// print the current path
echo $logger->getPath();
```

Maybe you're concerned if your directory does not exist, don't worry, the logger will create it silently.

## What to do next?

I target this project as a powerful competitor of modern PHP frameworks, so I will create more components later, like router, dependency injection container, configuration container and more. You can choose to contribute code to the project or be a tester of it, or raise more functionality issues to help me make it better.

