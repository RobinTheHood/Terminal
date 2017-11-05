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
    private $line = 0;
    private $lineNumbersEnabled = false;

    public function setColor($color)
    {
        $this->color = $color;
        echo chr(self::ESC) . '[' . $this->color . 'm';
    }

    public function setLineNumbersEnabled($value)
    {
        $this->lineNumbersEnabled = $value;
    }

    public function out($string)
    {
        $length = strlen($string);

        if ($this->line == 0) {
            $this->line++;
            $this->printLineNumber();
        }

        for($i = 0; $i<$length; $i++) {
            $chr = substr($string, $i, 1);
            echo $chr;

            if ($chr == "\n" && $i < $length-1) {
                $this->line++;
                $this->printLineNumber();
            }
        }
    }

    public function printLineNumber()
    {
        if ($this->lineNumbersEnabled) {
            echo chr(self::ESC) . '[' . self::BLACK . 'm' . $this->line . ' ';
            echo chr(self::ESC) . '[' . $this->color . 'm';
        }
    }
}
