<?php
namespace Terminal;

class Terminal
{
    const ESC = 0x1b;
    const BLACK = 30;
    const RED = 31;
    const GREEN = 32;
    const YELLOW = 33;
    const BLUE = 34;
    const MAGENTA = 35;
    const CYAN = 36;
    const LIGHT_GRAY = 37;
    const DARK_GRAY = 90;
    const LIGHT_RED = 91;
    const LIGHT_GREEN = 92;
    const LIGHT_YELLOW = 93;
    const LIGHT_BLUE = 94;
    const LIGHT_MAGENTA = 95;
    const LIGHT_CYAN = 96;
    const WHITE = 97;

    private $color;
    private $lineNumbersEnabled = false;

    private $currentLineNumber = 0;
    private $nextLineNumber = 1;


    public function __call($functionName, $args)
    {
        if ($functionName === 'outln') {
            $this->outlnNonStatic($args[0], $args[1]);
        } else if ($functionName === 'out') {
            $this->outNonStatic($args[0], $args[1]);
        }
    }

    public static function __callStatic($functionName, $args)
    {
        if ($functionName === 'outln') {
            self::outlnStatic($args[0], $args[1]);
        } else if ($functionName === 'out') {
            self::outStatic($args[0], $args[1]);
        }
    }

    public function setColor($color)
    {
        $this->color = $color;
        echo chr(self::ESC) . '[' . $this->color . 'm';
    }

    public function setLineNumbersEnabled($value)
    {
        $this->lineNumbersEnabled = $value;
    }



    public static function outlnStatic($string, $color = Terminal::WHITE)
    {
        self::outStatic($string . "\n", $color);
    }

    public static function outStatic($string, $color = Terminal::WHITE)
    {
        $terminal = new Terminal();
        $terminal->setColor($color);
        $terminal->outNonStatic($string);
    }



    public function outlnNonStatic($string)
    {
        $this->out($string . "\n");
    }

    public function outNonStatic($string)
    {
        $length = strlen($string);

        for($i = 0; $i<$length; $i++) {
            if ($this->currentLineNumber != $this->nextLineNumber) {
                $this->printLineNumber();
            }

            $chr = substr($string, $i, 1);
            echo $chr;

            if ($chr == "\n") {
                $this->nextLineNumber++;
            }
        }
    }

    private function printLineNumber()
    {
        $this->currentLineNumber = $this->nextLineNumber;
        if ($this->lineNumbersEnabled) {
            echo chr(self::ESC) . '[' . self::BLACK . 'm' . $this->currentLineNumber . ' ';
            echo chr(self::ESC) . '[' . $this->color . 'm';
        }
    }
}
