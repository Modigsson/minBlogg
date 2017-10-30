<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>





    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Movie Blog
            <small>by Modig</small>
          </h1>


          <?php include('data.php');
            foreach ($posts as $post):
           ?>


          <div class="card mb-4">
            <img class="card-img-top" src="<?= $post['image']?>">
            <div class="card-body">
              <h2 class="card-title"><?= $post['title']?> <small>by <?= $post['author']['name']?></small></h2>

              <p class="card-text"><?= $post['content']?></p>
            </div>

            <div class="card-footer text-muted">
              <p>Aired <?= $post['date']?></p>
            </div>
          </div>

          <?php endforeach; ?>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Modig</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  </body>

</html>
