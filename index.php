<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP GRAPH - LEVEL</title>

    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
      <div class="box">
        <p>{{ title }}</p>
        <p>{{ description }}</p>

      </div>
    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

  </head>

  <form id="add-form">
        <h3>Add new room</h3>
        <label for="title">Title:</label>
        <input type="text" name="title" value="New title"><br>
        <label for="description">Description:</label>
        <input type="text" name="description" value="New description"><br>
        <input type="submit" name="submit" value="New configuration">
    </form>
    <form id="mod-form">
        <h3>Change room</h3>
        <label for="title">Title:</label>
        <input type="text" name="title" value="New title"><br>
        <label for="description">Description:</label>
        <input type="text" name="description" value="New description"><br>
        <label for="id">id: </label>
            <input type="text" name="id">
            <input type="submit" name="submit" value="Change">
    </form>
    <form id="del-form">
        <h3>Delete room</h3>

        <label for="title">Room deleted: </label>
            <input type="text" name="title">
            <input type="submit" name="submit" value="Configuration delete">
    </form>

  <body>
    <div id="container" class="container">
    </div>
  </body>
</html>
