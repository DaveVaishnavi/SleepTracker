function signUP_login(){
    const path = document.querySelector("#card2 h1") ; 
    path.innerHTML = "Login" ; 
    const element = document.getElementById('upperInput') ; 
    element.style.display = 'none' ; 
}
function login_signUp(){
    const path = document.querySelector("#card2 h1") ; 
    path.innerHTML = "Sign-UP" ; 
    const element = document.getElementById('upperInput') ; 
    element.style.display = 'block' ; 
}