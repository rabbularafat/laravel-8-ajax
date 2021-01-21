<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel </title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito';
            }
            .head-area{
                color: #fff;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="container">
            <nav class="navbar mb-2 mt-2 navbar-dark bg-dark">
              <marquee style="color: white;" behavior="scroll" direction="left" scrollamount="8">Welcome to my Ajax + Laravel Project, Thank you to visiting my website. Please pray for me for successfully continue my work. Your prayers will help me move my work forward.         
              </marquee>
              <h3 class="bg-dark head-area">Laravel 8 Ajax CRUD</h3>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <table class="table table-bordered table-dark">
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
                          <td>Otto</td>
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
                          <td>
                              <a href=" http://localhost/laravel-blog-project/edit/post/2 " class="btn-sm btn-info">Edit</a>
                              <a href=" http://localhost/laravel-blog-project/delete/post/2 " onclick="return confirm('Are sure to delete')" class="btn-sm btn-danger">Delete</a>
                              <a href=" http://localhost/laravel-blog-project/view/post/2 " class="btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>
                              <a href=" http://localhost/laravel-blog-project/edit/post/2 " class="btn-sm btn-info">Edit</a>
                              <a href=" http://localhost/laravel-blog-project/delete/post/2 " onclick="return confirm('Are sure to delete')" class="btn-sm btn-danger">Delete</a>
                              <a href=" http://localhost/laravel-blog-project/view/post/2 " class="btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>
                              <a href=" http://localhost/laravel-blog-project/edit/post/2 " class="btn-sm btn-info">Edit</a>
                              <a href=" http://localhost/laravel-blog-project/delete/post/2 " onclick="return confirm('Are sure to delete')" class="btn-sm btn-danger">Delete</a>
                              <a href=" http://localhost/laravel-blog-project/view/post/2 " class="btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>
                              <a href=" http://localhost/laravel-blog-project/edit/post/2 " class="btn-sm btn-info">Edit</a>
                              <a href=" http://localhost/laravel-blog-project/delete/post/2 " onclick="return confirm('Are sure to delete')" class="btn-sm btn-danger">Delete</a>
                              <a href=" http://localhost/laravel-blog-project/view/post/2 " class="btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>
                              <a href=" http://localhost/laravel-blog-project/edit/post/2 " class="btn-sm btn-info">Edit</a>
                              <a href=" http://localhost/laravel-blog-project/delete/post/2 " onclick="return confirm('Are sure to delete')" class="btn-sm btn-danger">Delete</a>
                              <a href=" http://localhost/laravel-blog-project/view/post/2 " class="btn-sm btn-info">View</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                <div class="p-5 btn btn-dark">
                    <h3 class="pt-1">CRUD Form Area</h3>
                    <form action="" method="post" novalidate="">
                      <?php echo csrf_field(); ?>     
                      <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>Category Title</label>
                          <input type="text" name="name" class="form-control" placeholder="Title">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Category Slug</label>
                          <input name="slug" class="form-control" placeholder="Slug">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <br>
                      <div id="success"></div>
                      <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer_area">
                <div class="container">
                    <div class="row mb-2 mt-2 pt-3 d-flex justify-content-center bg-dark">
                        <div class="">
                            <p class="head-area">Copyright From @ <a style="color: white" href="">Rabbul Arafat Pranto</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-8-ajax\resources\views/welcome.blade.php ENDPATH**/ ?>