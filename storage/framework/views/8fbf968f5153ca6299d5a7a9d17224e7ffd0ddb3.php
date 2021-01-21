<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> -->
        <title>Laravel </title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
		
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="<?php echo e(asset('public/bootstrap/jquery.js')); ?>"></script>
        <style>
            body {
                font-family: 'Nunito';
            }
            .head-area{
                color: #fff;
            }
            a:hover{
              color: #fff;
              text-decoration: none;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="container">
            <nav class="navbar mb-2 mt-2 navbar-dark bg-dark">
              <h3><a class="bg-dark head-area" href="">Laravel 8 Ajax CRUD</a></h3>
              <button class="head-area btn-xm btn-info" id="home">Back To Home</button>
              <marquee style="color: white;" behavior="scroll" direction="left" scrollamount="4">Welcome to my Ajax + Laravel Project, Thank you to visiting my website. Please pray for me for successfully continue my work. Your prayers will help me move my work forward.         
              </marquee>
              
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <table class="table text-center table-bordered table-dark">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Title</th>
                          <th scope="col">Institute</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
            
           <!--              <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>
                              <a href=" http://localhost/laravel-blog-project/edit/post/2 " class="btn-sm btn-info">Edit</a>
                              <a href=" http://localhost/laravel-blog-project/delete/post/2 " onclick="return confirm('Are sure to delete')" class="btn-sm btn-danger">Delete</a>
                              <a href=" http://localhost/laravel-blog-project/view/post/2 " class="btn-sm btn-info">View</a>
                            </td>
                        </tr>  -->

                      </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                <div class="p-5 btn btn-dark">
                    <h3 class="pt-1">CRUD Form Area</h3>
                      <button type="submit" class="btn-xm btn-info" id="add_t_btn">Add Teacher</button>
                      <button type="submit" class="btn-xm btn-primary" id="update_t_btn">Update Teacher</button>
                      <div class="success" id="allMsg"></div>
                    <!-- <form action="" method="POST" novalidate=""> -->
                      <!-- <?php echo csrf_field(); ?> -->
                      <div>
                      <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                          <label>Teacher Name</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                          <span id="nameError" class="btn-danger"></span>
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Teacher Title</label>
                          <input name="title" id="title" class="form-control" placeholder="Title">
                          <span id="titleError" class="btn-danger"></span>

                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                          <label>Teacher Institute</label>
                          <input name="institute" id="institute" class="form-control" placeholder="Institute">
                          <span id="instituteError" class="btn-danger"></span>

                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <br>
                      <div id="success"></div>
                      <input type="hidden" id="id">
                      <button type="submit" onclick="addData()" class="btn btn-info" id="add_btn">Add</button>
                      <button type="submit" onclick="updateData()" class="btn btn-primary" id="update_btn">Update</button>
                    <!-- </form> -->
                    </div>
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

        <script>

          if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
          }else{
            xmlhttp = new Activexobject("microsoft/XMLHTTP");
          }

          $('#button').click(function() {
            $.ajax({
              url: "<?php echo e(asset('resources/views/teacher/page.php')); ?>",
              success:function(data){
                $('#content').html(data);
              }
            })
          })

          $('#home').click(function() {
            $.ajax({
              url: "<?php echo e(asset('')); ?>",
              success:function(data){
              $("#add_t_btn").show();
              $('#update_t_btn').hide();

              $('#update_btn').hide();
              $('#add_btn').show();
              delData();
              }
            })
          })


        	$("#add_t_btn").show();
        	$('#update_t_btn').hide();

        	$('#update_btn').hide();
        	$('#add_btn').show();

        	// $.ajaxSetup({
        	// 	headers:{
        	// 		'X-CSRF-TOKEN': $('meta[name="csrf-taken"]').attr('content')
        	// 	}
        	// })

          // Get All Data
        	function allData(){
        		$.ajax({
        			type: "GET",
        			dataType: "json",
        			url: "<?php echo e(asset('/teacher/all')); ?>",
        			success:function(Sdata){
                var data = ""
                var sid = "1"
                $.each(Sdata, function(key, value) {
                  // console.log(value.name);
                  data = data + "<tr>"
                  data = data + "<td>"+ sid++ +"</td>"
                  data = data + "<td>"+value.name+"</td>"
                  data = data + "<td>"+value.title+"</td>"
                  data = data + "<td>"+value.institute+"</td>"
                  data = data + "<td>"
                  data = data + "<button class='btn-sm btn-info' onclick='editData("+value.id+")'>Edit</button>"
                  data = data + "<button class='ml-2 btn-sm btn-danger' onclick='deleteData("+value.id+")'>Delete</button>"
                  data = data + "</td>"
                  data = data + "</tr>"
                })
                $('tbody').html(data);
        			}
        		})
          }
          allData();

          // Clear Data
          function delData() {
            $('#name').val("");
            $('#title').val("");
            $('#institute').val("");

            $('#nameError').text('');
            $('#titleError').text('');
            $('#instituteError').text('');
          }

          // Add Data
          function addData() {
            var name = $('#name').val();
            var title = $('#title').val();
            var institute = $('#institute').val();
            // console.log(name);
            $.ajax({
              type: "get",
              dataType: "json",
              data: {name:name, title:title, institute:institute},
              url: "<?php echo e(asset('/teacher/store')); ?>",
              success: function (data) {
                allData();
                delData();
                $('#allMsg').html('Successfully Data Added');
              },
              error: function (error) {
                delData();
                $('#nameError').text(error.responseJSON.errors.name);
                $('#titleError').text(error.responseJSON.errors.title);
                $('#instituteError').text(error.responseJSON.errors.institute);
              }
            })
          }

          // Start Edit Data
          function editData(id) {
            $.ajax({
              type: "GET",
              dataType: "json",
              url: "<?php echo e(asset('/teacher/edit')); ?>"+'/'+id,
              // url: "/teacher/edit/"+id,

              success: function (data) {
                $("#add_t_btn").hide();
                $('#update_t_btn').show();

                $('#update_btn').show();
                $('#add_btn').hide();

                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#title').val(data.title);
                $('#institute').val(data.institute);
              }
            })
          }

          // Start Update Data
          function updateData() {
            var id = $('#id').val();
            var name = $('#name').val();
            var title = $('#title').val();
            var institute = $('#institute').val();
            // console.log(name);
            $.ajax({
              type: "get",
              dataType: "json",
              data: {name:name, title:title, institute:institute},
              url: "<?php echo e(asset('/teacher/update')); ?>"+'/'+id,
              success: function (data) {
                $("#add_t_btn").show();
                $('#update_t_btn').hide();

                $('#update_btn').hide();
                $('#add_btn').show();

                allData();
                delData();
                $('#allMsg').html('Successfully Data Update');
              },
              error: function (error) {
                delData();
                $('#nameError').text(error.responseJSON.errors.name);
                $('#titleError').text(error.responseJSON.errors.title);
                $('#instituteError').text(error.responseJSON.errors.institute);
              }
            })
          }

          // Start Delete Data
          function deleteData(id) {
            $.ajax({
              type: "GET",
              dataType: "json",
              url: "<?php echo e(asset('/teacher/delete')); ?>"+'/'+id,

              success: function (data) {
                allData();
                delData();
                console.log('Data Deleted');
              }
            })
          }


        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-8-ajax\resources\views/teacher/index.blade.php ENDPATH**/ ?>