function logvalidate()
{ 
    var username = document.login.Username.value; 
    var password = document.login.passwd.value;
    if (username==null || username=="")
    { 
    swal("Username can't be blank","","warning"); 
    return false; 
    }
    else if(password.length<8)
    { 
    swal("Password must be at least 8 characters long.","","warning"); 
    return false; 
    } 
} 
function regvalidate()
{ 
    var username = document.register.Username.value;
    var fname = document.register.fname.value;
    var email = document.register.email.value;
    var password = document.register.passwd.value;
    var cpassword= document.register.cpasswd.value;
    if (username==null || username=="")
    { 
    swal("Username can't be blank","","warning"); 
    return false; 
    }
    else if (fname==null || fname=="")
    { 
    swal("Fullname can't be blank","","warning"); 
    return false; 
    }
    else if (email==null || email=="")
    { 
    swal("Email can't be blank","","warning"); 
    return false; 
    }
    else if(password.length<8)
    { 
    swal("Password must be at least 8 characters long.","","warning"); 
    return false; 
    } 
    else if (password!=cpassword)
    { 
    swal("Confirm Password should match with the Password","","warning"); 
    return false; 
    } 
} 