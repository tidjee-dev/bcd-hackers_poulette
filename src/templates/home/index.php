<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
</head>

<body>
  <form>
    <label for="name">
      Name:
      <input type="text" name="name" id="name">
    </label>
    <label for="firstName">
      First Name:
      <input type="text" name="firstName" id="firstName">
    </label>
    <label for="email">
      Email:
      <input type="email" name="email" id="email">
    </label>
    <label for="file">
      File:
      <input type="file" name="file" id="file">
    </label>
    <label for="message">
      Message:
      <textarea name="message" id="message"></textarea>
    </label>
    <button type="submit">
      Submit
    </button>
  </form>

</body>

</html>