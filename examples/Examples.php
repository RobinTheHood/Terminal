<?php
/*
Run this file on the console with:
> php Examples.php
*/

require_once '../Terminal.php';

use RobinTheHood\Terminal\Terminal;

/* Example 1 */
$terminal = new Terminal();
$terminal->setColor(Terminal::RED);
$terminal->out("Hello world in red!\n");

$terminal->setColor(Terminal::GREEN);
$terminal->out("Hello world in green!\n");

$terminal->setColor(Terminal::BLUE);
$terminal->out("Hello world in blue!\n");

/* Example 2 */
$terminal = new Terminal();
$terminal->setColor(Terminal::RED);
$terminal->setLineNumbersEnabled(true);
$terminal->out("Hello world in red with line number!\nThis is the 2. line.\n");
