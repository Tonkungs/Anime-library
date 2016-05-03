//<--window.alert("Hello world");
//var inString = window.prompt("ต้องการสูตรครูแม่อะไรกรุณาใส่ลงไป","500");	
	

function validateFrom(){
	//-----------------------------------------------------	 ประกาศค่าตัวแปรไว้เรียกใช้
	var txtuser=document.forms["frm"]["inputid"].value;
	var textpass=document.forms["frm"]["inputPassword"].value;
	var checkpass=document.forms["frm"]["inputPasswordagain"].value;
	var inputEmail=document.forms["frm"]["inputEmail"].value;
	//-----------------------------------------------------	 
	if (txtuser==null || txtuser=="" ){
			//alert("กรุณาใส่ให้ครบทุกช่อง ด้วยครับ")
			document.frm.txtuser.focus()    //คือการสั่งให้ cursor  ไปอยู่ที่จุดนั้นๆ
			document.getElementById('userspan').innerHTML = "*กรุณาใส่ Username";
		return false
	} else {
		document.getElementById('userspan').innerHTML = "";
	};
	if (textpass==null || textpass=="" ){
			//alert("กรุณาใส่ให้ครบทุกช่อง ด้วยครับ")
			document.frm.textpass.focus()    //คือการสั่งให้ cursor  ไปอยู่ที่จุดนั้นๆ
			document.getElementById('passspan').innerHTML = "*กรุณาใส่ Password";
		return false
	}else {
		document.getElementById('passspan').innerHTML = "";
	};
	//-----------------------------------------------------	
	if (checkpass==null || checkpass=="" ){
			//alert("กรุณาใส่ให้ครบทุกช่อง ด้วยครับ")
			document.frm.checkpass.focus()    //คือการสั่งให้ cursor  ไปอยู่ที่จุดนั้นๆ
			document.getElementById('checkpassspan').innerHTML = "*กรุณาใส่ Password อีกครั้ง";
		return false
	}else {
		document.getElementById('checkpassspan').innerHTML = "";
	};
	//-----------------------------------------------------	
	if (textpass == checkpass ){
			document.getElementById('checkpassspan').innerHTML = "";
		} else{ 
			//alert("กรุณาใส่ Password ให้เหมือนกัน")
			document.frm.checkpass.focus()    //คือการสั่งให้ cursor  ไปอยู่ที่จุดนั้นๆ
			document.getElementById('checkpassspan').innerHTML = "*กรุณาใส่ Password ให้เหมือนกัน";
		return false
	};
	//-----------------------------------------------------	
	if (inputEmail==null || inputEmail=="" ){
			//alert("กรุณาใส่ให้ครบทุกช่อง ด้วยครับ")
			document.frm.txtfirsrname.focus()    //คือการสั่งให้ cursor  ไปอยู่ที่จุดนั้นๆ
			document.getElementById('txtfirsrnamespan').innerHTML = "*กรุณาใส่ชื่อด้วย";
		return false
	}else {
		document.getElementById('txtfirsrnamespan').innerHTML = "";
	};
	//-----------------------------------------------------	
	//เช็ก ค่าตรง checkbox
	var flag = 0;
		for (var i = 0; i< 1; i++) {
				if(document.frm["hobby[]"][i].checked){
				flag ++;
			}
		}
		if (flag == 0) {
			//alert ("You must check one and only one checkbox!");
			document.getElementById('checkboxspan').innerHTML = "กรุณาเลือกวิชาที่ชอบด้วยด้วย";	
			return false;
		}
		return true;
}
 


