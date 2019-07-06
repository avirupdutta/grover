$(document).ready(function () {
    let menuOpen = false;

    function toggleMenu() {
        
        if(menuOpen){
            $('#asideNavbarFixed').animate({left: '-80%'}, 100);
            menuOpen = false;
        }else{
            $('#asideNavbarFixed').animate({left: '0%'}, 100);
            menuOpen = true;
        }
    }

    $('#menuTogglerBtn').click(function () {  
        console.log('clicked!');
        toggleMenu();
    });
});

