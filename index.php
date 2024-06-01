<!DOCTYPE html>
<html>

  <head>
    <!-- Meta data section -->
    <meta charset="utf-8">
    <meta name="description" content="product of numbers, Using Javascript">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Niko Shivkumar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_index/favicon-16x16.png">
    <link rel="manifest" href="./favicon_index/site.webmanifest">
  
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Product of Numbers</title>
    <!-- references javascript file -->
    <script src="./js/script.js"></script>
  </head>

  <body>
    <h1>Product of Numbers</h1>
    <!-- form for user input for min and max -->
    <form action="results.php" method="post" target="results">
      <p>
        <label for="userNumberOne" >Enter a number</label>
        <input type="number" id="userNumberOne" name="userNumberOne" step="1" placeholder="Enter a Number"><br><br>
        <label for="userNumberTwo">Enter a number</label>
        <input type="number" id="userNumberTwo" name="userNumberTwo" step="1" placeholder="Enter a Number"><br><br>
        <input type="submit">
      </p>
    </form>
    <iframe id="results" name="results">
      
    </iframe>
  </body>

</html>
