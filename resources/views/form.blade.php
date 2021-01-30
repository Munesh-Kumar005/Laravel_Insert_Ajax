<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Insert data using ajax</title>
  </head>
  <body>
      <div class="container">

   
   <div class="row ">
       <div class=" col-md-8 ">
        <form id="frm">
            <div class="mb-3 ">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            @csrf
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
            
            <input type="submit" id="submit" name="submit" class="btn btn-primary">
          </form>
    
       </div>

   </div>
</div>
<div id="message"></div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function() { 
            $("#frm").submit(function (e) { 
                e.preventDefault();
                $("#submit").attr('disabled',true);
                $("#submit").attr('value',"Please wait");
              $.ajax({
                  type: "POST",
                  url: "{{url('form_submit')}}",
                  data: $("#frm").serialize(),
                  success: function(data) {
                      $("#message").html(data.msg);
                      $("#frm")[0].reset();
                      $("#submit").attr('disabled',false);
                      $("#submit").attr('value',"submit");

                  }
              });
                
            });
        });


        </script>
    

  </body>
</html>