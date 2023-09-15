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
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis expedita error, delectus minima possimus, harum est saepe eum porro officia impedit. Sapiente earum doloremque expedita neque esse unde, maiores incidunt quia error dolor velit quasi sit hic, ratione iusto odit ab eaque. Veniam hic nostrum unde, harum fugiat perferendis dolor.</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    
  </tbody>
</table>

</body>
</html>