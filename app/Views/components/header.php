<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $title; ?></title>

  <script src="https://kit.fontawesome.com/d802616488.js" crossorigin="anonymous"></script>

  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {

        }
      }
    }
  </script>

  <style type="text/tailwindcss">
    @layer utilities {
      .container {
        margin:auto;
        max-width: 1440px;
      }
    }
  </style>
</head>

<body></body>

</html>