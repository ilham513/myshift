<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ilham Setia Bhakti">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('css')?>/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form action="<?= site_url('login/aksi_login')?>" method="post" class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputEmail" name="username" class="sr-only">Username</label>
      <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </body>
</html>
