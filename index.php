<?php
// User-Agent: Validator.nu/LV http://validator.w3.org/services

// Fetch the user agent.
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);

// Matching user agent phrases.
$w3c_agent_matches = [
  'validator.nu',
  'validator.nu/lv',
  'w3.org',
  'validator.w3.org/services',
];
?>

<?php foreach ($w3c_agent_matches as $am) : ?>
  <?php if (stripos($user_agent, $am) !== false) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
    </head>

    <body></body>

    </html>
    <?php exit; ?>
  <?php endif; ?>
<?php endforeach; ?>