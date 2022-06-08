const navbarToggler = document.querySelector('.navbar-toggler');
const nav = document.querySelector('.navbar-wrapper .navbar .navbar-items ul');

console.log(nav);

navbarToggler.addEventListener('click', function () { 
   
    if (nav.classList.contains('slide')) {
        navbarToggler.innerHTML = '<i class="fa-solid fa-bars fa-lg"></i>';
    } else { 
        navbarToggler.innerHTML = '<i class="fa-solid fa-xmark fa-lg"></i>';

    }
    nav.classList.toggle('slide');
})