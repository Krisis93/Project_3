$("#send").click(function check() {
		var errormsg = "";
        var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
		if(document.getElementById('email').value == ""){
			errormsg += "Ievadi e-pastu! \n";
			document.getElementById('email').style.borderColor = "red";
		}
         else if(reg.test(document.getElementById('email').value) == false){
            alert('Nepareizs e-pasts!');
            document.getElementById('email').style.borderColor = "red";
            document.getElementById('email').focus();
        }
          else{
            document.getElementById('email').style.borderColor = "green";
        }
		if(document.getElementById('username').value == ""){
			errormsg += "Ievadi username! \n";
			document.getElementById('username').style.borderColor = "red";
		}
         else{
            document.getElementById('username').style.borderColor = "green";
        }
		if(document.getElementById('password').value == ""){
			errormsg += "Paroli! \n";
			document.getElementById('password').style.borderColor = "red";
		}
         else{
            document.getElementById('password').style.borderColor = "green";
        }
		if(document.getElementById('password2').value == ""){
			errormsg += "Repeat password! \n";
			document.getElementById('password2').style.borderColor = "red";
		}
         else{
            document.getElementById('password2').style.borderColor = "green";
        }
        if(document.getElementById('password').value != document.getElementById('password2').value){
            errormsg += "Paroles nesakrīt! \n" ;
            document.getElementById('password').style.borderColor = "red";
            document.getElementById('password2').style.borderColor = "red";
        }
		if(errormsg != ""){
			alert(errormsg);
			return false;
		}
	});

$("#send2").click(function check(){
		var errormsg = "";
        var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
        if(document.getElementById('email2').value == ""){
			errormsg += "Ievadi e-pastu! \n";
			document.getElementById('email2').style.borderColor = "red";
		}
        else if(reg.test(document.getElementById('email2').value) == false){
            alert('Nepareizs e-pasts!');
            document.getElementById('email2').style.borderColor = "red";
            document.getElementById('email2').focus();
        }
        else{
            document.getElementById('email2').style.borderColor = "green";
        }
        if(errormsg != ""){
			alert(errormsg);
			return false;
		}
	});

$('#dismiss').click(function check(){
    var form = document.getElementById('form1');
    var put = document.getElementById('email');
    var put2 = document.getElementById('username');
    var put3 = document.getElementById('password');
    var put4 = document.getElementById('password2');
    
    form.reset();
    put.style.borderColor = "#ccc";
    put2.style.borderColor = "#ccc";
    put3.style.borderColor = "#ccc";
    put4.style.borderColor = "#ccc";
    
});
$('#dismiss2').click(function check(){
    var form = document.getElementById('form2');
    var put = document.getElementById('email2');
    form.reset();
    put.style.borderColor = "#ccc";
});

$("#send3").click(function check(){
		var errormsg = "";
    
        if(document.getElementById('subject').value == ""){
			errormsg += "Ievadi tēmu! \n";
			document.getElementById('subject').style.borderColor = "red";
		}
        else{
            document.getElementById('subject').style.borderColor = "green";
        }
        if(document.getElementById('message').value == ""){
			errormsg += "Ievadi ziņu! \n";
			document.getElementById('message').style.borderColor = "red";
		}
        else{
            document.getElementById('message').style.borderColor = "green";
        }
        if(errormsg != ""){
			alert(errormsg);
			return false;
		}
	});