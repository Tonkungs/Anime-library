<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	ob_start();
	session_start();
	require_once('config/config.php');
  	ini_set('display_errors', 1);
  	error_reporting(~0);
  	error_reporting( error_reporting() & ~E_NOTICE );

//// ล็อกอิน
	if(isset($_POST['Submit_login']))	{
		$inputid=$_POST['inputid'];
		$inputPassword=sha1(md5($salt.$_POST["inputPassword"]));//เเข้ารหัสด้วยต่อ slat ก่อนแล้วทำ md5 ตามด้วย sha1
		$sql = "SELECT idtb_member,tb_member_id,tb_member_pass,tb_member_type 
				FROM tb_member WHERE tb_member_id LIKE '%".$inputid."%' ";
		$query = mysqli_query($conn,$sql);
		$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
		if($result["tb_member_id"]==$inputid && $result["tb_member_pass"]==$inputPassword )
		{
			$_SESSION['id_member'] = $result['idtb_member'];
			$_SESSION['tb_member_id'] = $result['tb_member_id'];
			$_SESSION['type']=$result['tb_member_type'];
			$_SESSION['chk_login']="TRUE";
			echo $_SESSION['type'];
			echo "<script>alert(\"Webcome!\");</script>";
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
		} else {
			echo "<script>alert(\"ERROR!\");</script>";
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
		}
				
	}
////  
//// ล็อกออฟ
	if(isset($_POST['Submit_Signout']))	{
		session_destroy();
		header('Location: index.php');
	}
////
////// เพิ่มสมาชิก สำหรับ admin
  if (isset($_POST['Submit_member'])) { 
  	$inputid=$_POST['inputid'];
  	if ($inputid=="") {
  		echo "<script>alert(\"UserName is Empty\");</script>";
		header("location:javascript://history.go(-1)") ;
  	}
	$inputPassword=sha1(md5($salt.$_POST["inputPassword"]));//เเข้ารหัสด้วยต่อ slat ก่อนแล้วทำ md5 ตามด้วย sha1
	if ($inputPassword=="") {
  		echo "<script>alert(\"Password is Empty\");</script>";
		header("location:javascript://history.go(-1)");
  	}
  	$inputPasswordagain=sha1(md5($salt.$_POST["inputPasswordagain"]));
  	if ($inputPassword !=$inputPasswordagain) {
  		echo "<script>alert(\"Password are not the same\");</script>";
		header("location:javascript://history.go(-1)");
  	}
	$inputEmail=$_POST["inputEmail"];
	if ($inputEmail=="") {
  		echo "<script>alert(\"Email is Empty\");</script>";
		header("location:javascript://history.go(-1)");
  	}
	$usertype=$_POST["usertype"];
	$sql = "SELECT * FROM tb_member WHERE tb_member_id LIKE '%".$inputid."%' ";
	$query = mysqli_query($conn,$sql);
	$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
	if ($result["tb_member_id"]==""){
		$sql = "SELECT * FROM tb_member WHERE tb_member_email LIKE '%".$inputEmail."%' ";
		$query = mysqli_query($conn,$sql);
		$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
		if ($result["tb_member_email"]=="") {
			$sql = "INSERT INTO tb_member (tb_member_id, tb_member_pass, tb_member_email,tb_member_time,tb_member_type) 
				VALUES ('$inputid','$inputPassword','$inputEmail','$DateResultNow','$usertype')";

			$query = mysqli_query($conn,$sql);

			if($query) {
				//echo "Record add successfully";
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=member-list.php\">";
			} else {
				echo "Error";
			} 
			//header("location:javascript://history.go(-1)");
		} else {
			echo "<script>alert(\"Email is Already\");</script>";
			header("location:javascript://history.go(-1)");
		}//if ($result["tb_member_email"]=="")
	} else {
		echo "<script>alert(\"UserName is Already\");</script>";
		header("location:javascript://history.go(-1)");
	}//($result["tb_member_id"]=="")
	
}
//////
////// เพิ่มสมาชิก สำหรับ member
  if (isset($_POST['Submit_Register'])) { 
  	$inputid=$_POST['inputid'];
  	if ($inputid=="") {
  		echo "<script>alert(\"UserName is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$inputPassword=sha1(md5($salt.$_POST["inputPassword"]));//เเข้ารหัสด้วยต่อ slat ก่อนแล้วทำ md5 ตามด้วย sha1
	if ($inputPassword=="") {
  		echo "<script>alert(\"Password is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
  	$inputPasswordagain=sha1(md5($salt.$_POST["inputPasswordagain"]));
  	if ($inputPassword !=$inputPasswordagain) {
  		echo "<script>alert(\"Password are not the same\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$inputEmail=$_POST["inputEmail"];
	if ($inputEmail=="") {
  		echo "<script>alert(\"Email is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$sql = "SELECT * FROM tb_member WHERE tb_member_id LIKE '%".$inputid."%' ";
	$query = mysqli_query($conn,$sql);
	$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
	if ($result["tb_member_id"]==""){
		$sql = "SELECT * FROM tb_member WHERE tb_member_email LIKE '%".$inputEmail."%' ";
		$query = mysqli_query($conn,$sql);
		$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
		if ($result["tb_member_email"]=="") {
			$sql = "INSERT INTO tb_member (tb_member_id, tb_member_pass, tb_member_email,tb_member_time) 
				VALUES ('$inputid','$inputPassword','$inputEmail','$DateResultNow')";

			$query = mysqli_query($conn,$sql);

			if($query) {
				//echo "Record add successfully";
				echo "<script>alert(\"Register Complete!\");</script>";
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=member-list.php\">";
			} else {
				echo "Error";
			} 
			//header("location:javascript://history.go(-1)");
		} else {
			echo "<script>alert(\"Email is Already\");</script>";
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
		}//if ($result["tb_member_email"]=="")
	} else {
		echo "<script>alert(\"UserName is Already\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
	}//($result["tb_member_id"]=="")
	
}
//////
 /////// แก้ไขสมาชิก สำหรับ admin
   if (isset($_POST['Submit_memdit'])) { 
    
	$inputid=$_POST['inputid'];
  	if ($inputid=="") {
  		echo "<script>alert(\"UserName is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$inputPassword=sha1(md5($salt.$_POST["inputPassword"]));//เเข้ารหัสด้วยต่อ slat ก่อนแล้วทำ md5 ตามด้วย sha1
	if ($inputPassword=="") {
  		echo "<script>alert(\"Password is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
  	$inputPasswordagain=sha1(md5($salt.$_POST["inputPasswordagain"]));
  	if ($inputPassword !=$inputPasswordagain) {
  		echo "<script>alert(\"Password are not the same\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$inputEmail=$_POST["inputEmail"];
	if ($inputEmail=="") {
  		echo "<script>alert(\"Email is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$usertype=$_POST["usertype"];
	$idtb_member=$_POST["idtb_member"];
 	$sql = "UPDATE tb_member SET 
			tb_member_id = '$inputid' ,
			tb_member_pass = '$inputPassword' ,
			tb_member_email = '$inputEmail' ,
			tb_member_type = '$usertype' 
			WHERE idtb_member  = '$idtb_member' ";
	$query = mysqli_query($conn,$sql);
	if($query) {
	 echo "Record update successfully";
	 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=member-list.php\">";
	}else {
         echo "<script>alert(\"Error\");</script>";
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=admin-add-member.php?idtb_member=".$idtb_member."\">";
    }
 }  
 ////
 ////// แก้ไขสมาชิก สำหรับสมาชิก
 /////// แก้ไขสมาชิก
   if (isset($_POST['Submit_memdit_mem'])) { 
    
	$inputid=$_POST['inputid'];
  	if ($inputid=="") {
  		echo "<script>alert(\"UserName is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$inputPassword=sha1(md5($salt.$_POST["inputPassword"]));//เเข้ารหัสด้วยต่อ slat ก่อนแล้วทำ md5 ตามด้วย sha1
	if ($inputPassword=="") {
  		echo "<script>alert(\"Password is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
  	$inputPasswordagain=sha1(md5($salt.$_POST["inputPasswordagain"]));
  	if ($inputPassword !=$inputPasswordagain) {
  		echo "<script>alert(\"Password are not the same\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$inputEmail=$_POST["inputEmail"];
	if ($inputEmail=="") {
  		echo "<script>alert(\"Email is Empty\");</script>";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
  	}
	$usertype=$_POST["usertype"];
	$idtb_member=$_POST["idtb_member"];
 	$sql = "UPDATE tb_member SET 
			tb_member_id = '$inputid' ,
			tb_member_pass = '$inputPassword' ,
			tb_member_email = '$inputEmail' ,
			tb_member_type = '$usertype' 
			WHERE idtb_member  = '$idtb_member' ";
	$query = mysqli_query($conn,$sql);
	if($query) {
	 echo "Record update successfully";
	 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=edit-member.php?idtb_member=".$idtb_member."\">";
	}else {
         echo "<script>alert(\"Error\");</script>";
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=edit-member.php?idtb_member=".$idtb_member."\">";
    }
 }  

 //////
//// ลบสมาชิก
  if ($_GET["didtb_member"] !="") { 
    $didtb_member = $_GET["didtb_member"];
    echo $didtb_member;
    $sql = "DELETE FROM tb_member
			WHERE idtb_member = '$didtb_member' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
		 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=member-list.php\">";
	}else {
         echo "Error";
    }
   }
	
////// เพิ่มบทความ
	if (isset($_POST['Submit_Arcticle'])) { 
    $sql = "INSERT INTO tb_article (tb_article_name, tb_article,tb_member_idtb_member,tb_article_time) 
    		VALUES ('".addslashes($_POST["inputArcticleName"])."','".addslashes($_POST["inputArcticle"])."','".$_POST["inputName"]."','$DateResultNow')";

      $query = mysqli_query($conn,$sql);

        if($query) {
         echo "Record add successfully";
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=article-list.php\">";
          } else {
         echo "Error";
          }
 }  
 /////// แก้ไขบทความ
   if (isset($_POST['Submit_Arcticle_edit'])) { 
    
	$inputArcticleName=addslashes($_POST['inputArcticleName']);
	$inputArcticle=addslashes($_POST["inputArcticle"]);
	$inputName=$_POST["inputName"];
	$time=$_POST["time"];
	$inputidtb_article=$_POST["inputidtb_article"];
 	$sql = "UPDATE tb_article SET 
			tb_article_name = '$inputArcticleName' ,
			tb_article = '$inputArcticle' ,
			tb_member_idtb_member = '$inputName' 
			WHERE idtb_article  = '$inputidtb_article' ";
	$query = mysqli_query($conn,$sql);
	if($query) {
	 echo "Record update successfully";
	 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=article-list.php\">";
	}else {
         echo "Error";
    }
 }   
 ///////// ลบบทความ
   if ($_GET["didtb_article"] !="") { 
   	$didtb_article = $_GET["didtb_article"];
	$sql = "DELETE FROM tb_article
			WHERE idtb_article = '$didtb_article' ";
	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 //echo "Record delete successfully";
		 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=article-list.php\">";
	}else {
         echo "Error";
    }
   }
 	
  ///////// ลบบทความ
///////// เพิ่ anime	
 	if (isset($_POST['Submit_anime'])) { 
 		// รูปเล็ก
		if ((isset($_FILES["inputPicture"]["name"]))) { //ตรวจสอบว่ามีไฟล์ ชื่อไฟลเข้ามาไหม
		$name = $_FILES["inputPicture"]["name"];
	    $tmp_name = $_FILES['inputPicture']['tmp_name'];
	    $error = $_FILES['inputPicture']['error'];
		$location = 'img/pic/';
		    if (!empty($name)) {
		        if  (move_uploaded_file($tmp_name, $location.$name)){
		            echo 'Uploaded';
		            $imgdeteil = $location.$name;
		        }
			} 
		}
		// หัว
		if ((isset($_FILES["inputPictureHead"]["name"]))) { //ตรวจสอบว่ามีไฟล์ ชื่อไฟลเข้ามาไหม
		$name = $_FILES["inputPictureHead"]["name"];
	    $tmp_name = $_FILES['inputPictureHead']['tmp_name'];
	    $error = $_FILES['inputPictureHead']['error'];
		$location = 'img/picHead/';
		    if (!empty($name)) {
		        if  (move_uploaded_file($tmp_name, $location.$name)){
		            echo 'Uploaded';
		            $imgdeteil2 = $location.$name;
		        }
			} 
		}
 	
	 	$inputAnimeName=addslashes($_POST['inputAnimeName']);
		$inputPicture=$imgdeteil;
		$inputPictureHead=$imgdeteil2;
		$inputGenres=$_POST["inputGenres"];
		$inputStatus=$_POST["inputStatus"];
		$Synopsis=addslashes($_POST["Synopsis"]);
		$inputVdo=$_POST["inputVdo"];
		$inputName=$_POST["inputName"];
	    $sql = 	"INSERT INTO tb_anime SET tb_anime_name_hi      = '$inputAnimeName',
	    								  tb_anime_genres       = '$inputGenres',
	    								  tb_anime_Type       	= '$inputStatus',
	    								  tb_anime_Synopsis     = '$Synopsis',
	    								  tb_anime_Picture      = '$inputPicture',
	    								  tb_anime_Picture_Head = '$inputPictureHead',
	    								  tb_anime_time         = '$DateResultNow',
	    								  tb_anime_vdo          = '$inputVdo',
	    								  tb_member_idtb_member = '$inputName'";				
	      $query = mysqli_query($conn,$sql);
	      echo "<br /> sql = ".$sql;
	        if($query) {
	         echo "<br />Record add successfully";
	         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=anime-list.php\">";
	          } else {
	         echo "Error";
	          }
 	}  
/////// แก้ไขอนเมะ
   if (isset($_POST['Submit_anime_edit'])) { 
    
		if ((isset($_FILES["inputPicture"]["name"]))) { //ตรวจสอบว่ามีไฟล์ ชื่อไฟลเข้ามาไหม
		$name = $_FILES["inputPicture"]["name"];
	    $tmp_name = $_FILES['inputPicture']['tmp_name'];
	    $error = $_FILES['inputPicture']['error'];
		$location = 'img/pic/';
		    if (!empty($name)) {
		        if  (move_uploaded_file($tmp_name, $location.$name)){
		            echo 'Uploaded';
		            $imgdeteil = $location.$name;
		        }
			} 
		}
		// หัว
		if ((isset($_FILES["inputPictureHead"]["name"]))) { //ตรวจสอบว่ามีไฟล์ ชื่อไฟลเข้ามาไหม
		$name = $_FILES["inputPictureHead"]["name"];
	    $tmp_name = $_FILES['inputPictureHead']['tmp_name'];
	    $error = $_FILES['inputPictureHead']['error'];
		$location = 'img/picHead/';
		    if (!empty($name)) {
		        if  (move_uploaded_file($tmp_name, $location.$name)){
		            echo 'Uploaded';
		            $imgdeteil2 = $location.$name;
		        }
			} 
		}

   		$inputAnimeName=addslashes($_POST['inputAnimeName']);
		$inputPicture=$imgdeteil;
		if ($inputPicture=="") $inputPicture=$_POST["inputPictureforemty"];
		$inputPictureHead=$imgdeteil2;
		if ($inputPictureHead=="") $inputPictureHead=$_POST["inputPictureHeadforemty"];
		$inputGenres=$_POST["inputGenres"];
		$inputStatus=$_POST["inputStatus"];
		$Synopsis=addslashes($_POST["Synopsis"]);
		$inputVdo=$_POST["inputVdo"];
		$idtb_anime_id=$_POST["idtb_anime_id"];
 	$sql = "UPDATE tb_anime SET 	tb_anime_name_hi      = '$inputAnimeName',
	    						 	tb_anime_genres       = '$inputGenres',
	    							tb_anime_Type         = '$inputStatus',
	    							tb_anime_Synopsis     = '$Synopsis',
	    							tb_anime_Picture      = '$inputPicture',
	    							tb_anime_Picture_Head = '$inputPictureHead',
	    							tb_anime_time         = '$DateResultNow',
	    							tb_anime_vdo          = '$inputVdo' 
			WHERE 					idtb_anime_id  		  = '$idtb_anime_id' ";
		echo $sql;
	$query = mysqli_query($conn,$sql);
	if($query) {
	 echo "Record update successfully";
	 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=anime-list.php\">";
	}else {
         echo "Error";
    }
 } 
//////////////
 ///////// ลบอนิเมะ
   if ($_GET["didtb_anime_id"] !="") { 
   	$didtb_anime_id = $_GET["didtb_anime_id"];
	$sql = "DELETE FROM tb_anime
			WHERE idtb_anime_id = '$didtb_anime_id' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
		 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=anime-list.php\">";
	}else {
         echo "Error";
    }
   }
 	
  ///////// ลบบทความ

 /////// เพิ่มคอมเม็นบทความ
   	if (isset($_POST['submit_comment'])) { 
 		 	
	 	echo $inputcomment=$_POST['inputcomment'];
		echo $inputName=$_SESSION['id_member'];
		echo $inputidtb_article=$_POST['inputidtb_article'];
	    $sql = 	"INSERT INTO tb_comment_article SET tb_comment_com      = '$inputcomment',
	    								  tb_member_idtb_member       = '$inputName',
	    								  tb_article_idtb_article     = '$inputidtb_article',
	    								  tb_comment_time      = '$DateResultNow'";				
	      $query = mysqli_query($conn,$sql);
	      echo "<br /> sql = ".$sql;
	        if($query) {
	         echo "<br />Record add successfully";
		     echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=articles.php?idtb_article=".$inputidtb_article."\">";
	        } else {
	         echo "Error";
	        }
 	}  
 ///////
/////// เพิ่มคอมเม็นอนิเมะ
   	if (isset($_POST['submit_comment_anime'])) { 
 		 	
	 	echo $inputcomment=$_POST['inputcomment'];
		echo $inputName=$_SESSION['id_member'];
		echo $inputidtb_anime=$_POST['inputidtb_anime'];
	    $sql = 	"INSERT INTO tb_comment_anime SET tb_comment_com      = '$inputcomment',
	    								  tb_member_idtb_member       = '$inputName',
	    								  tb_anime_idtb_anime_id     = '$inputidtb_anime',
	    								  tb_comment_time      = '$DateResultNow'";				
	      $query = mysqli_query($conn,$sql);
	      echo "<br /> sql = ".$sql;
	        if($query) {
	         echo "<br />Record add successfully";
		     echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=animeinfo.php?idtb_anime_id=".$inputidtb_anime."\">";
	        } else {
	         echo "Error";
	        }
 	}  
 ///////
 mysqli_close($conn);
?>
