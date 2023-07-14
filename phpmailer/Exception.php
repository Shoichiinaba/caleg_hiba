<?php
/**
 * PHPMailer exception handler
 * @package PHPMailer
 */

namespace PHPMailer\PHPMailer;

/**
 * PHPMailer exception class
 * @package PHPMailer
 */
class PHPMailerException extends \Exception
{
    /**
     * Get a formatted error message
     * @return string Formatted error message
     */
    public function errorMessage()
    {
        return '<strong>PHPMailer Exception:</strong> ' . $this->getMessage() . ' in ' . $this->getFile() . ' on line ' . $this->getLine();
    }
}

// Additional classes and code...