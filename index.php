<html>
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact pdf creator</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
<link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/MoneAdmin.css" />
    <link rel="stylesheet" href="plugins/Font-Awesome/css/font-awesome.css" />
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="row" style="padding-top: 60px">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center><legend>Fill to PDF.</legend> </center>
            </div>
            <div class="panel-body">
                <form class="contact-us form-horizontal" action="actionpdf.php" method="post">
        
         
        <div class="control-group">
            <label class="control-label"><span class="add-on"><i class="icon-user"></i></span>&nbsp&nbsp&nbspName</label>
            <div class="controls">
                <div class="input-prepend">
                
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
            </div>
        </div>
         <div class="control-group">
            <label class="control-label"><span class="add-on"><i class="icon-sort-by-order-alt"></i></span>&nbsp&nbsp&nbspNumber</label>
            <div class="controls">
                <div class="input-prepend">
                
                    <input type="text" class="form-control" name="number" placeholder="Name">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label"> <span class="add-on"><i class="icon-envelope"></i></span>&nbsp&nbsp&nbspEmail</label>
            <div class="controls">
                <div class="input-prepend">
               
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
            </div>    
        </div>
        <div class="control-group">
            <label class="control-label"><span class="add-on"><i class="icon-globe"></i></span>&nbsp&nbsp&nbspUrl</label>
            <div class="controls">
                <div class="input-prepend">
                
                    <input type="text" id="url" class="form-control" name="url" placeholder="http://www.example.com">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label"> <span class="add-on"><i class="icon-pencil"></i></span>&nbsp&nbsp&nbspComment</label>
            <div class="controls">
                <div class="input-prepend">
               
                    <textarea name="comment" class="form-control" " placeholder="Comment"></textarea><br>
                </div>
            </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="cancel" class="btn btn-primary">Cancel</button>
          </div>    
        </div>
      </form>
            </div>
            <div class="panel-footer">
              <center> <p>Try out!</p> </center>
            </div>
        </div>
    </div>
</div>



</body>
</html>