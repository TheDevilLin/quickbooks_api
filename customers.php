<?php

include('include/database.php');

/*
 * Make this part like a controller
 */

// Call the function from the Quickbooks Class
$customers = '';

include('templates/header.html');
include('templates/customers.html');
include('templates/footer.html');