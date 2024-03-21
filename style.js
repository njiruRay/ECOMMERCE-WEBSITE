let searchForm = document.querySelector('.searchform');
let loginForm = document.querySelector('.loginform');
let navbar = document.querySelector('.navbar');


document.querySelector('#searchbtn').onclick = () =>{
    searchForm.classList.toggle('active');
    loginForm.classList.remove('active'); 
    navbar.classList.remove('active');
}

document.querySelector('#loginbtn').onclick = () =>{
    loginForm.classList.toggle('active'); 
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}

document.querySelector('#menubtn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');    
}



