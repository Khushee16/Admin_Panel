<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
</head>
<body>


<form action="http://httpbin.org/post" method="post">
  <select data-placeholder="Begin typing a name to filter..." multiple class="chosen-select" name="test">
    <option value=""></option>
    <option>American Black Bear</option>
    <option>Asiatic Black Bear</option>
    <option>Brown Bear</option>
    <option>Giant Panda</option>
    <option>Sloth Bear</option>
    <option>Sun Bear</option>
    <option>Polar Bear</option>
    <option>Spectacled Bear</option>
  </select>
  <input type="submit">
  <script>
    $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
    })
  </script>
</form>
</body>
</html>