<script>
    const burgerNav = document.querySelector('.burger-nav')
    const burgerNavIcon = document.querySelector('.burger-nav i')
    const burgerMenu = document.querySelector('.burger-menu')

    burgerNav.onclick = function(){
        burgerMenu.classList.toggle('open')
        const isOpen = burgerMenu.classList.contains('open')
        burgerNavIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'
    }
</script>