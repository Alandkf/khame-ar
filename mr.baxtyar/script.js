let a =document.getElementById("toggleBtn");
let b =document.getElementById("toggleBtn1");
let c =document.getElementById("toggleBtn2");

a.addEventListener("click",function(){
   document.body.classList.toggle("dark");
   document.querySelector("#logo").classList.toggle("dark")
   document.querySelector("#toggleBtn").classList.toggle("dark")
   document.querySelector(".moon").classList.toggle("dark")
   document.querySelector(".sun").classList.toggle("dark")
})

b.addEventListener("click",function(){
   document.body.classList.toggle("dark");
   document.querySelector("#logo").classList.toggle("dark")
   document.querySelector("#toggleBtn").classList.toggle("dark")
   document.querySelector(".moon").classList.toggle("dark")
   document.querySelector(".sun").classList.toggle("dark")
})

c.addEventListener("click",function(){
   document.body.classList.toggle("dark");
   document.querySelector("#logo").classList.toggle("dark")
   document.querySelector("#toggleBtn").classList.toggle("dark")
   document.querySelector(".moon").classList.toggle("dark")
   document.querySelector(".sun").classList.toggle("dark")
})