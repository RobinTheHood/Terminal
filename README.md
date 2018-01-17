# Terminal - Ouput Color with PHP


![alt text](https://raw.githubusercontent.com/RobinTheHood/Terminal/master/docs/Example-Image.png)


## About

With Terminal you can easily output colored text on the console with php. Terminal uses the 'terminal escape sequences' to display colored text. If you wish more features feel free to contribute.

## Installation


If Composer is installed globally, run

```bash
composer require robinthehood/terminal
```

## How to use

### Code
```php
require 'vendor/autoload.php'; // if you are using Composer

use RobinTheHood\Terminal\Terminal;

$terminal = new Terminal();
$terminal->setColor(Terminal::RED);
$terminal->out("Hello world in red!\n");
```

### Result on the console

Displays the string on the console in red:
```
Hello world in red!
```

## Colors

```php
$terminal->setColor(Terminal::GREEN); // use green color
```

Terminal::BLACK  
Terminal::RED  
Terminal::GREEN  
Terminal::YELLOW  
Terminal::BLUE  
Terminal::MAGENTA  
Terminal::CYAN   
Terminal::LIGHT_GRAY  
Terminal::DARK_GRAY  
Terminal::LIGHT_RED  
Terminal::LIGHT_GREEN  
Terminal::LIGHT_YELLOW  
Terminal::LIGHT_BLUE  
Terminal::LIGHT_MAGENTA  
Terminal::LIGHT_CYAN

## More examples

### Example 1

```php
require 'vendor/autoload.php'; // if you are using Composer

use RobinTheHood\Terminal\Terminal;

$terminal = new Terminal();
$terminal->setColor(Terminal::RED);
$terminal->out("Hello world in red!\n");

$terminal->setColor(Terminal::GREEN);
$terminal->out("Hello world in green!\n");

$terminal->setColor(Terminal::BLUE);
$terminal->out("Hello world in blue!\n");
```

```
Hello world in red!
Hello world in green!
Hello world in blue!
```

### Example 2
Terminal can also display line numbers:

```php
require 'vendor/autoload.php'; // if you are using Composer

use RobinTheHood\Terminal\Terminal;

$terminal = new Terminal();
$terminal->setColor(Terminal::RED);
$terminal->setLineNumbersEnabled(true);
$terminal->out("Hello world in red with line number!\nThis is the 2. line.\n");
```

```
1 Hello world in red with line number!
2 This is the 2. line.
```

# License
Copyright (c) 2017 Robin Wieschendorf

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
