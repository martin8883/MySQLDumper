<?php
/**
 * This file is part of MySQLDumper released under the GNU/GPL 2 license
 * http://www.mysqldumper.net
 *
 * @package    MySQLDumper
 * @subpackage SQL-Browser
 * @version    SVN: $Rev: 1227 $
 * @author     $Author: DSB $
 */

/**
 * Interface definition for MySQL statement parsers.
 *
 * @package         MySQLDumper
 * @subpackage      SQL-Browser
 */
interface Msd_Sql_Parser_Interface
{
    /**
     * Parse the statement.
     *
     * @abstract
     *
     * @param string $statement MySQL INSERT statement.
     *
     * @return void
     */
    public function parse($statement);
}