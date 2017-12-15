<?php

# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
require '../core/About/src/Validation/Validate.php';
require '../../keys.php';

use About\Validation;
use Mailgun\Mailgun;


$valid = new About\Validation\Validate();

$input = filter_input_array(INPUT_POST);

$message = null;

if(!empty($input)){
    $valid->validation = [
        'first_name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your first name'
    ]],
    'last_name'=>[[
        'rule'=>'notEmpty',
        'message'=>'Please enter your last name'
        ]],
        'email'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your email'
            ]],
            'subject'=>[[
                'rule'=>'notEmpty',
                'message'=>'Please enter your subject'
                ]],
                'message'=>[[
                    'rule'=>'notEmpty',
                    'message'=>'Please enter your messasge'
                    ]],
                ];


        $valid->check($input);


if(empty($valid->errors) && !empty($input)){
    $message = "<div style=\"color: #00ff00;\">Your form has been submitted!</div>";

// valid data was submitted, proceed

# Instantiate the client.
$mgClient = new Mailgun($mailgunKey);
$domain = "sandbox572c462c5d164bbabcd3c78ac7e1087c.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
          array('from'    => "{$input['first_name']} {$input['last_name']} <{$input['email']}>",
                'to'      => 'Kent Clapp <kent.clapp@gmail.com>',
                'subject' => $input['subject'],
                'text'    => $input['message']
            ));

var_dump($result);

}else{
    $message = "<div style=\"color: #ff0000;\">Please correct the errors below!!</div>";

}

}
