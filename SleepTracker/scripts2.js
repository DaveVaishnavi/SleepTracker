let date = new Date() ; 
let days = ["Sunday","Monday","Teusday","Wednesday","Thursday","Friday","Saturday"] ; 
document.getElementById("showDate").innerHTML = date.getDate()+"/"+(date.getMonth()+1)+"/"+date.getFullYear()+","+days[date.getDay()]  ; 

const hamburger = document.querySelector(".hamburger") ; 
const sidebar = document.querySelector(".sidebar") ; 

hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active"); 
    sidebar.classList.toggle("active") ; 
})