<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <title>Contact</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <nav>
        <a href="/">Home</a> |
        <a href="resume.html">Resume</a> |
        <a href="contact.php">Contact</a>
    </nav>

<h1 id="header" class="header">Contact</h1>

    <form method="post">

    <div>
        <label for="firstName">First Name</label><br>
        <input type="text" name="first_name" id="firstName">
      </div>

      <div>
        <label for="lastName" id="lastName">Last Name</label><br>
        <input type="text" name="last_name">
      </div>

      <div>
        <label for="email" id="email">Email</label><br>
        <input type="text" name="email">
      </div>

      <div>
        <label for="subject" id="subject">Subject</label><br>
        <input type="text" name="subject">
      </div>

      <div>
        <label for="message" id="message">Message</label><br>
        <textarea name="message"></textarea>
      </div>

      <input type="submit">

    </form>
      Contact
    </body>
    </html>
