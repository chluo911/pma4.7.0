<?php

    namespace Prophecy\Exception\Doubler;

    class MethodNotExtendableException extends DoubleException
    {
        private $methodName;

        private $className;

        /**
         * @param string $message
         * @param string $className
         * @param string $methodName
         */
        public function __construct($message, $className, $methodName)
        {
            parent::__construct($message);

            $this->methodName = $methodName;
            $this->className = $className;
        }


        /**
         * @return string
         */
        public function getMethodName()
        {
            return $this->methodName;
        }

        /**
         * @return string
         */
        public function getClassName()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }
    }
