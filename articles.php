<?php
  ob_start();
  session_start();
  require_once('config/config.php');
  ini_set('display_errors', 1);
  error_reporting(~0);
  error_reporting( error_reporting() & ~E_NOTICE );
  if ($_GET["idtb_article"]==""){ 
    header('Location: index.php');
   } else {
      $strarticleID = null;
      if(isset($_GET["idtb_article"])){
      $strarticleID = $_GET["idtb_article"];
      }
        $sql="SELECT tb_article.idtb_article,tb_article.tb_article_name,tb_article.tb_article,tb_article.tb_member_idtb_member, tb_member.idtb_member,tb_member.tb_member_id 
              FROM tb_article 
              LEFT JOIN tb_member 
              ON tb_article.tb_member_idtb_member=tb_member.idtb_member 
              where tb_article.idtb_article=$strarticleID";
              $query = mysqli_query($conn,$sql);
              $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="th">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles info</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
              <div class="form-group">
                <div class="member"><a class="btn btn-info" href="edit-member.php">Edit Profile<a/></div>
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
      <?php 
                      $sql = "SELECT * FROM tb_anime ORDER BY RAND() LIMIT 4";
                      $queryran = mysqli_query($conn,$sql);
                      $resultran=mysqli_fetch_array($queryran,MYSQLI_ASSOC)
              ?>
      <div class="jumbotron" style="background-image: url(<?php echo $resultran["tb_anime_Picture_Head"];?>);"> 
        <div class="container">
          <div class="row">
            <div class="col-md-5">
               <div class="col-md-12">
                <span class="titlelead"><?php echo $resultran["tb_anime_name_hi"];?></span>
              </div>
              <div class="col-md-12 col-sm-8 col-xs-7 ">
                <span class="leads"><?php echo substr_replace($resultran["tb_anime_Synopsis"],'...',280);?></span>
              </div>
              <div class="col-md-7 col-sm-7 col-xs-7 titlelead">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe id="animeSmallThumbnail7" class="animeSmallThumbnail" frameborder="0" allowfullscreen="1" title="YouTube video player" width="240" height="135" src="https://www.youtube.com/embed/<?php echo $resultran["tb_anime_vdo"];?>?autoplay=1&amp;autohide=1&amp;showinfo=0&amp;modestbranding=1&amp;cc_load_policy=1&amp;rel=0&amp;controls=1&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fwww.daisuki.net" __idm_id__="993284"></iframe>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-3 titlelead">
                <a href="animeinfo.php?idtb_anime_id=<?php echo $resultran["idtb_anime_id"];?>" type="button" class="btn btn-info viewtitle">View</a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-md-12">
          <div class="col-md-8">
            <li><a href="index.php">Animery.com</a></li>
            </div>
          <div class="col-md-4">
            <form class="form-inline" role="form" action="search.php" method="GET" >
              <div class="form-group">
                <div class="input-group">
                  <input type="Search" class="form-control" id="Search" placeholder="Search"name="submit_Search">
                </div>
              </div>
                <button type="submit" class="btn btn-default">Search</button>
             </form>
            <br />
          </div>
        </div>
      </div>
      <div id="maincontener" class="container">
<!--col-md-10 คือมีความกว้างเท่าไร  col-md-offset-1 ห่างจากด้านซ้ายเท่าไร-->        
        <div id="Articlesinfo" class="indx-bdr-b">
            <div class="row topic-item">
              <div class="row">
                <!--ด้านแท็กรูป-->
                <div class="col-md-10 col-md-offset-1">
                  <div class="row">
                    <div class="col-md-12">
                       <div class="articles-topic indx-bdr-b"> <?php echo $result["tb_article_name"];?></div>
                    </div>
                    <div class="col-md-12">
                     <div class="article-a col-md-12 "><?php echo $result["tb_article"];?></div>
                    </div>
                    <div class="col-md-12">
                      <div class="article-meta"><?php echo $result["tb_member_id"];?></div>
                    </div>
              <?php } ?>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <div id="comment" class="indx-bdr-b">
            <div class="row">
                <div class="col-md-12 ">
                  <div class="row ">
                    <div class="col-md-7 ">
                      <div class="col-md-12 ">
                        <span class="titlehead">Member Comments</span>
                      </div>
                      <div class="col-md-12 ">
                        <?php $ssql="SELECT tb_comment_article.tb_comment_com,tb_comment_article.tb_member_idtb_member,tb_comment_article.tb_comment_time,tb_comment_article.tb_article_idtb_article,tb_member.idtb_member,tb_member.tb_member_id
                                    FROM tb_comment_article
                                    LEFT JOIN tb_member
                                    ON tb_comment_article.tb_member_idtb_member=tb_member.idtb_member
                                    where tb_article_idtb_article=$strarticleID
                                    ORDER BY idtb_comment DESC";
                      $squery = mysqli_query($conn,$ssql);
                      while($sresult=mysqli_fetch_array($squery,MYSQLI_ASSOC)){
                      ?>
                        <div class="article-item">
                          <div class="comment-member">
                            <div class="comment-mem" name="block"><?php echo $sresult['tb_comment_com'];?></div>
                            <div class="comment-meta"><?php echo $sresult['tb_comment_time'];?> &nbsp;&nbsp;By&nbsp;&nbsp; <?php echo $sresult['tb_member_id'];?></div>
                          </div>
                        </div>
                        <?php } ?>

                      </div>
                    </div>
                    <?php if ($_SESSION['chk_login']=="TRUE") {
                        ?>
                    <div class="col-md-5 ">
                      <div class="col-md-12 ">
                        <span class="titlehead">Comment</span>
                      </div>
                      <div class="col-md-12">
                        <form class="form-horizontal" role="form" action="function.php" method="post">
                          <textarea class="form-control" rows="5" name="inputcomment"></textarea>
                          <input class="form-control" name="inputidtb_article" type="text" readonly="readonly" value="<?php echo $result['idtb_article'];?>">
                          <div class="col-md-1 col-md-offset-3">
                           <button class="btn btn-primary btnfont" type="submit" name="submit_comment">Send</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div><!-- end col-md-5 -->
                  <?php }?>
                  <br />
                  <br />
                </div>
            </div>
        </div>      
       </div>
      </div>
    <footer id="footerup" class="footer">
      <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-3 block">
          <span class="headingfoot"><p>&nbsp;Home&nbsp;&nbsp;&nbsp;About Us&nbsp;&nbsp;&nbsp;Terms of Use&nbsp;&nbsp;&nbsp;Privacy Policy&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;Help </p></span>
        </div>
      </div>
      </div>
    </footer> 
    <footer id="footerdown" class="footer">
          <p class="text-muted"> © 2014 Copyright Animery.com</p>
    </footer> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>