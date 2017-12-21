<?php
require '../core/processContactForm.php';

//Build the page metadata
$meta = [];
$meta['title']='tell the world';
$meta['description'] = "The best thing about hello world is the greeting";
$meta['keywords'] = "hello world, hello, world";

$content = <<<EOT

<h1 id="header" class="header">Contact Kent</h1>
{$message}
    <form method="post">

    <div>
        <label for="firstName">First Name</label><br>
        <input type="text" name="first_name" id="firstName">
        <div style="color: #ff0000;">{$valid->error('first_name')}</div>
         </div>

      <div>
        <label for="lastName" id="lastName">Last Name</label><br>
        <input type="text" name="last_name">
        <div style="color: #ff0000;">{$valid->error('last_name')}</div>
      </div>

      <div>
        <label for="email" id="email">Email</label><br>
        <input type="text" name="email">
        <div style="color: #ff0000;">{$valid->error('email')}</div>
      </div>

      <div>
        <label for="subject" id="subject">Subject</label><br>
        <input type="text" name="subject">
        <div style="color: #ff0000;">{$valid->error('subject')}</div>
      </div>

      <div>
        <label for="message" id="message">Message</label><br>
        <textarea name="message"></textarea>
        <div style="color: #ff0000;">{$valid->error('message')}</div>
      </div>

      <input type="submit">

    </form>

EOT;

require '../core/layout.php';
