<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class BankAccountException extends RuntimeException
{
}

/**
 * A bank account.
 *
 * @since      Class available since Release 2.3.0
 */
class BankAccount
{
    /**
     * The bank account's balance.
     *
     * @var float
     */
    protected $balance = 0;

    /**
     * Returns the bank account's balance.
     *
     * @return float
     */
    public function getBalance()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the bank account's balance.
     *
     * @param float $balance
     *
     * @throws BankAccountException
     */
    protected function setBalance($balance)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Deposits an amount of money to the bank account.
     *
     * @param float $balance
     *
     * @throws BankAccountException
     */
    public function depositMoney($balance)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Withdraws an amount of money from the bank account.
     *
     * @param float $balance
     *
     * @throws BankAccountException
     */
    public function withdrawMoney($balance)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
