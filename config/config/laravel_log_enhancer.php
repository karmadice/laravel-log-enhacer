<?php
/**
 * Config
 *
 * File contains few configuration options just like a regular Laravel config file
*/

return [
    'log_request_details' => true,

    'log_input_data' => true,

    'log_request_headers' => false,

    'log_session_data' => true,

    'log_memory_usage' => false,

    'log_git_data' => false,

    // You can specify the inputs from the user that should not be logged
    'ignore_input_fields' => ['password', 'confirm_password'],
];