<?php
  ob_start();
  session_start();
  require_once('config/config.php');
  ini_set('display_errors', 1);
  error_reporting(~0);
  error_reporting( error_reporting() & ~E_NOTICE );
  if (($_SESSION['type'] =="user") || ($_SESSION['type'] =="")) {
    header('Location: index.php');
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="th">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css" /> 
    <script src="js/animery.js"></script> 
  </head>
  <body itemscope itemtype="http://schema.org/WebPage ">  <!--ตรง inverse กำหนดสี เป็นสีดำ -->
    
      <div class="header" >
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Animery</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form" action="function.php" method="post">
              <?php if ($_SESSION['chk_login'] !="TRUE") {
               ?>
              <div class="form-group">
                <input type="text" placeholder="UserName" class="form-control" name="inputid">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="inputPassword">
              </div>
              <button type="submit" class="btn btn-success" name="Submit_login">Login</button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalRegister">Register</button>
             <?php } else {?>
              <div class="form-group">
                <div class="member">Hello <?php echo $_SESSION['tb_member_id'];?></div>
              </div>
              <?php if ($_SESSION['type'] =="admin") {?>
              <div class="form-group">
                <div class="member"><a class="btn btn-success" href="admin-index.php">Admin Page<a/></div>
              </div>
              <?php }?>
              <div class="form-group">
                <button type="submit" class="btn btn-danger" name="Submit_Signout">Sign out</button> 
              </div>
              <?php }?>
            </form>
          </div><!--/.navbar-collapse -->
        </div>
        </nav>
      </div>
        <!-- Modal -->
        <div id="ModalRegister" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">          
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
                    <h3 id="myModalLabel">Register</h3>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" role="form" action="function.php" method="POST">
                      <div class="form-group">
                        <label for="inputid" class="col-sm-3 control-label">UserName</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputid" placeholder="UserName" name="inputid">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="inputPassword">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputPasswordagain" class="col-sm-3 control-label">Password Again</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" id="inputPasswordagain" placeholder="Password Again" name="inputPasswordagain">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Terms of Use" class="col-sm-3 control-label">Terms of Use</label>
                        <div class="col-sm-6">
                          <textarea class="form-control" readonly="readonly">ข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลงข้อตกลง</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Accept
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary" type="submit" name="Submit_Register" >Register</button>
                  </div>
                    </form>
                  </div>
                  
                </div>
            </div>
        </div>
        <!-- Modal -->
      
      <!---->
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <div class="menu-admin">Main Admin Manu</div>
          <ul class="nav nav-sidebar">
            <li><a href="admin-index.php">Overview </a></li>
            <li><a href="article-list.php">Article List <span class="sr-only">(current)</span></a></li>
            <li><a href="admin-add-article.php">Add/Edit Article</a></li>
          </ul>
          <div class="menu-admin">Admin Manu</div>
          <ul class="nav nav-sidebar">
            <li><a href="anime-list.php">Anime List</a></li>
            <li><a href="admin-add-anime.php">Add/Edit Anime</a></li>
          </ul>
          <div class="menu-admin">Member Manu</div>
          <ul class="nav nav-sidebar">
            <li><a href="member-list.php">Member List</a></li>
            <li class="active"><a href="admin-add-member.php">Add/Edit Member</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Member</h1>
            <div class="col-md-8 ">
              <div class="col-md-12">
                <form class="form-horizontal" role="form" action="function.php" method="post">
                  <?php 
                    if ($_GET["idtb_member"]!=""){ 
                        $stridtb_member = null;
                        if(isset($_GET["idtb_member"])){
                          $stridtb_member = $_GET["idtb_member"];
                        }
                        $sql = "SELECT * FROM tb_member WHERE idtb_member = '".$stridtb_member."' ";
                        $query = mysqli_query($conn,$sql);
                        $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
                      ?>
                        <div class="form-group">
                          <input type="hidden" readonly="readonly" name="idtb_member" value="<?php echo $result["idtb_member"];?>">
                          
                        <label for="inputid" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="inputid" placeholder="Username" value="<?php echo $result["tb_member_id"];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" name="inputPassword" placeholder="Password" value="<?php echo $result["tb_member_pass"];?>">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputPasswordagain" class="col-sm-3 control-label">Password Again</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" name="inputPasswordagain" placeholder="Password Again" value="<?php echo $result["tb_member_pass"];?>">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                          <input type="email" class="form-control" name="inputEmail" placeholder="Email" value="<?php echo $result["tb_member_email"];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Terms of Use" class="col-sm-3 control-label">User Type</label>
                        <div class="col-sm-6">
                          <select name="usertype" class="form-control">
                              <option value="admin">Admin</option>
                              <option value="user" selected>User</option>
                           </select>
                        </div>
                      </div>
                      
                      <div class="col-md-1 col-md-offset-3">
                         <button type="Submit" class="btn btn-success btnfont" name="Submit_memdit">Edit</button>
                        </div>
                        <?php } else {?>
                     <div class="form-group">
                        <label for="inputid" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="inputid" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputPasswordagain" class="col-sm-3 control-label">Password Again</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" name="inputPasswordagain" placeholder="Password Again">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                          <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Terms of Use" class="col-sm-3 control-label">User Type</label>
                        <div class="col-sm-6">
                          <select name="usertype" class="form-control">
                              <option value="admin">Admin</option>
                              <option value="user" selected>User</option>
                           </select>
                        </div>
                      </div>
                      
                      <div class="col-md-1 col-md-offset-3">
                         <button type="Submit" class="btn btn-success btnfont" name="Submit_member">Register</button>
                      </div>

                        <?php }?>
                    </form>
              </div>
          </div>
        </div>
      </div>
    </div>
      <!---->

     
    
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>

  </body>
</html>