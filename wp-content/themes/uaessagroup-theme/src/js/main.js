const initApp = () => {
    const hamburgBtn = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const servicesMenuBtn = document.getElementById('services-menu');
    const servicesMenuMobile = document.getElementById('services-menu-mobile');
    const footerDropdown = document.getElementById('footer-dropdown');

    // const toggleMenu = () => {
    //     mobileMenu.classList.toggle('hidden');
    //     mobileMenu.classList.toggle('flex');
    //     hamburgBtn.classList.toggle('toggle-btn');
    //     document.body.classList.toggle('overflow-hidden');
    // }

    // hamburgBtn.addEventListener('click', toggleMenu);

    const openDropdownElements = (dropdownElementID, toggledClass = 'block') => {
        const dropdownelement = document.getElementById(dropdownElementID)
        dropdownelement.classList.toggle('hidden');
        dropdownelement.classList.toggle(toggledClass);
        console.log('hello')
    }

    hamburgBtn.addEventListener('click', () => {
        openDropdownElements('mobile-menu', 'flex');
        hamburgBtn.classList.toggle('toggle-btn');
        if(window.innerWidth < 1020){
            document.body.classList.toggle('overflow-hidden');
        }
    });
    servicesMenuBtn.addEventListener('click' , () => openDropdownElements('services-submenu', 'block'));  
    servicesMenuMobile.addEventListener('click', () => openDropdownElements('services-submenu-mobile', 'block'));
    footerDropdown.addEventListener('click', () => openDropdownElements('footer-dropdown-options','block'));

    //hero testimonial slider - "from-our-partners"
    $('.testimonials').slick({
        fade : true,
        infinite : true,
        prevArrow : '.prev-button',
        nextArrow : '.next-button'
    });   
    
    $('.article-slider').slick({
        lazyLoad : 'ondemand',
        slidesToShow : 3,
        prevArrow : '.article-prev-button',
        nextArrow : '.article-next-button',
        responsive: [
            {
                breakpoint : 1020,
                settings: {
                    slidesToShow:1,
                    centerMode:true
                }
            },
            {
                breakpoint : 370,
                settings: {
                    slidesToShow:1,
                    centerMode:false
                }
            }
        ]
    });
}   

document.addEventListener('DOMContentLoaded', initApp)