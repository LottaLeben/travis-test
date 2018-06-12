<?php

namespace LottaLeben\CI;

/**
 * Class Description!
 */
class HelloTravis
{
    /**
     * @var string
     */
    public $message;
    public $test;

    /**
     * YEAH THE CONSTRUCTOR
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
        $this->showMessage();
    }

    /**
     * Testdescription
     */
    private function showMessage()
    {
        echo $this->message;
    }
}
