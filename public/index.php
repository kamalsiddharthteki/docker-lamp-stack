<?php
declare(strict_types = 1);
require_once 'MySQLDatabase.php';
require_once 'Customer.php';
require_once 'Employee.php';
require_once 'Office.php';
require_once 'OrderDetail.php';
require_once 'Order.php';
require_once 'Payment.php';
require_once 'ProductLine.php';
require_once 'Product.php';
require_once 'Response.php';
/**
 * TOPICS that are covered
 *
 * PHP built in Web server
 * defining variables
 * SUPER GLOBAL Variables
 * data types in PHP
 * PDO Object
 * PDO Options
 * Error Handling
 * Debugging and Printing in PHP
 * loops in PHP
 * Namespaces
 * Request and Response Headers
 * HTTP Methods
 * HTTP Status Codes
 */
$database = new MySQLDatabase();
$customer = new Customer($database);
$output = $customer->findAll();
$response = new Response();
$response->toJson($output);
