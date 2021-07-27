document.addEventListener('DOMContentLoaded', () =>{
    const navToggle = document.getElementById('navToggle')
    const mainMenu = document.getElementById('main-menu')
    const tablet = window.matchMedia('(min-width: 768px)')
    
    navToggle.addEventListener('click', ()=>{
        mainMenu.classList.toggle('active')
    })

    window.addEventListener('resize', () =>{
        if(tablet.matches){
            mainMenu.classList.remove('active')
        }
    })

    
})






