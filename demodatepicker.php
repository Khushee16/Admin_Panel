<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
   :root {
  --spacing-default: 16px;
  --spacing-top: var(--spacing-default);
  --spacing-top-offset: -0.7;
}
.form-group {
  position: relative;
}
input {
  background: black;
  border-radius:10px;
  padding-block: 16px;
  padding-inline: 16px;
  font: inherit;
}
label {
  position: absolute;
  top: 16px;
  left: 16px;
  color: white;
  font-size: 16px;
  pointer-events: none;
  transition: 0.4s ease;
}
input:focus ~ label,
input:valid ~ label {
  top: calc(var(--spacing-top) * var(--spacing-top-offset));
  left: calc(16 * 16);
  font-size: 15px;
  background-color: #000;
  color: var(--clr-primary);
  padding-inline: 4px;
}
  </style>
</head>
<body>
<form class="form" style="background:black; padding:20px;">
  <div class="form-group">
    <input type="email" id="email" required>
    <label for="email">Email address</label>
  </div>

</form>

</body>
</html>