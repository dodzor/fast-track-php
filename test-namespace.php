<?php 

// Purpose: organize code and avoid naming collisions

// autoload using spl_autoload_register
// require_once 'index.php';

// uses composer autoloader
require_once 'vendor/autoload.php';

use App\Monolog\Logger as MonologLogger;
use App\Services\Logger\Logger as Logger;

/**🔹 Suppose you have two classes:
App\Logger\Logger
Monolog\Logger
You're using both in the same file. How would you instantiate them without conflict? */
/*$monologLogger = new MonologLogger();
$monologLogger->log('Hello');

$loggerService = new Logger();
$loggerService->log('Hello'); */


/*You're creating a package with this structure:
my-lib/
├── src/
│   └── Tools/
│       └── MathTool.php
├── composer.json
You want to autoload classes under the MyLib\Tools namespace using PSR-4.
What should your composer.json look like, and what should be the namespace in MathTool.php? */
use MyLib\Tools\MathTool;

$mathTool = new MathTool();
echo $mathTool->add(1, 2);
