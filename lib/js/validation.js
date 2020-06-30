/*
 >>>>> validation package <<<<<
 _function validationUsername
 _function validationPassword
 _function validationEmail
 _function validationPhone

*/

//>>>>>>>>>>>>>USERNAME<<<<<<<<<<<<<<<
// atleast 6 and no more than 32 characters
// a-z0-9 use (-)(_)(.)
// no space no other special characters and NO CAPITAL letters
function validationUsername(username){
    const usernameRegex = /^[a-z0-9\-_.]{6,32}$/;
    return usernameRegex.test(username);
}

//>>>>>>>>>>>>>PASSWORD<<<<<<<<<<<<<<<
function validationPassword(password){
    const passwordRegex = /^[a-zA-Z0-9\-_!@#$%^&*()]{6,32}$/;
    return passwordRegex.test(password);
}

//>>>>>>>>>>>>>EMAIL<<<<<<<<<<<<<<<
function validationEmail(email){
    const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return emailRegex.test(email);
}

//>>>>>>>>>>>>>PHONE<<<<<<<<<<<<<<<
function validationPhone(phone){
    const phoneRegex = /^\d{10}$/;
    return phoneRegex.test(phone);

}


/* ======= test here ======= */
// let username = 'l-e.m_inh';
// let kq= validationUsername(username);

// console.log(kq);
