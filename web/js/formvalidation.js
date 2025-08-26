function signup(form){
    errmsg = validfname(form.fname.value);
    errmsg += validlname(form.lname.value);
    errmsg += validemail(form.email.value);
    errmsg += validphone(form.phone.value);
    errmsg += validuname(form.uname.value);
    errmsg += validpass1(form.pass1.value);
    errmsg += validpass2(form.pass1.value, form.pass2.value);

    if (errmsg == ""){
        alert("Processing Data");
        return true;
    }else{
        alert(errmsg);
        return false;
    }
}
function validfname(field){
    if(field==""){
        return "First name is blank.\n";
    } else{
        return"";
    }
}
function validlname(field){
    if(field==""){
        return "Last name is blank.\n";
    } else{
        return"";
    }
}
function validemail(field){
    if (field == ""){
        return "No email entered.\n"
    }
    else{
        if(!((field.indexOf("@">0)&& (field.indexOf(".")>0))|| /[^a-zA-Z0-9.@_-]/.test(field))){
            return "email address invalid\n"
        }else{
            return""
        }
    }
}
function validatephone(field){
    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    if (field ==""){
        return "phone number is blank \n"
    }else{
        if(re.test(field)){
            return"";
        }else{
            return "invalid number \n"
        }
    }
}
function validpass1(field){
    if (field == ""){
        return "no password entered\n"
    }else{
        if (field.length<8){
            return "password must be 8 characters\n"
         } else{
                if(!/[a-z]/.test(field) ||!/[A-Z]/.test(field) ||!/[0-9]/.test(field)){
                    return "Passwords must contain a-z A-Z 0-9 \n"

                }else{
                return ""
             }
        }
    }
}
function validuname(field){
    if(field==""){
        return "Username is blank.\n";
    } else{
        return"";
    }
}
function validpass2(pass1,pass2){
    if(pass2 == ""){
        return "username is blank\n"
    } else{
        if (!(pass1.localeCompare(pass2)==0)){
            return"Passwords do not match\n"
        }else{
            return""
        }
    }
}
function validpasslogin(pass1){
    if (pass1 ==""){
        return "Password not entered\n";
    }else{
        return ""
    }
}
function loginvalid(form){
    errmsg = validuname(form.uname.value);
    errmsg += validpasslogin(form.pass1.value);
    if (errmsg ==""){
        alert ("Processing Data");
        return true;
    }else{
        alert(errmsg);
        return false;
    }
}