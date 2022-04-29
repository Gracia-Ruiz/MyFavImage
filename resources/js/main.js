document.addEventListener('scroll', () =>{
    let nav = document.querySelector('#nav');
    if ( window.pageYOffset > 100 ) {
      nav.classList.add('bg-main');
      nav.classList.add('bd-scroll');
      nav.classList.remove('bg-nav');
      nav.style.transition = "0.4s";

    } else {
      nav.classList.remove('bg-main');
      nav.classList.remove('bd-scroll')
      nav.classList.add('bg-nav');
    }
  })

