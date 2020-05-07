
window.addEventListener('load', ()=>{
    const preload = document.querySelector('.pre-load-wrapper');
   

    window.setTimeout(()=>{
        preload.classList.add('pre-load-finish')
    }, 1000);
});