const initApp = () => {
  const hamburgBtn = document.getElementById("hamburger-btn");
  const servicesMenuBtn = document.getElementById("services-menu");
  const servicesMenuMobile = document.getElementById("services-menu-mobile");
  const footerDropdown = document.getElementById("footer-dropdown");
  const accordions = document.querySelectorAll("#accordion");

  // accordions
  accordions.forEach((accordion) => {
    const btn = accordion.querySelector("#accordion-title");
    btn.addEventListener("click", () => {
      const content = accordion.querySelector("#accordion-content");
      const carret = accordion.querySelector("#accordion-carret");
      accordions.forEach((item) => {
        if (item !== accordion) {
          const content = item.querySelector("#accordion-content");
          const carret = item.querySelector("#accordion-carret");
          content.classList.remove("max-h-screen");
          carret.classList.remove("rotate-180");
        }
      });
      content.classList.toggle("max-h-screen");
      carret.classList.toggle("rotate-180");
    });
  });

  //dropdown menus
  const openDropdownElements = (dropdownElementID, toggledClass = "block") => {
    const dropdownelement = document.getElementById(dropdownElementID);
    dropdownelement.classList.toggle("hidden");
    dropdownelement.classList.toggle(toggledClass);
  };

  hamburgBtn.addEventListener("click", () => {
    const hide = document.querySelectorAll("#accordion-carret");
    hide.forEach((item) => item.classList.toggle("-z-10"));
    openDropdownElements("mobile-menu", "flex");
    hamburgBtn.classList.toggle("toggle-btn");
    if (window.innerWidth < 1020) {
      document.body.classList.toggle("overflow-hidden");
    }
  });
  servicesMenuBtn.addEventListener("click", () =>
    openDropdownElements("services-submenu", "block")
  );
  // servicesMenuMobile.addEventListener("click", () =>
  //   openDropdownElements("services-submenu-mobile", "block")
  // );
  footerDropdown.addEventListener("click", () =>
    openDropdownElements("footer-dropdown-options", "block")
  );

  //hero testimonial slider - "from-our-partners"
  $(".testimonials").slick({
    fade: true,
    infinite: true,
    prevArrow: ".prev-button",
    nextArrow: ".next-button",
  });

  //article slider
  $(".article-slider").slick({
    lazyLoad: "ondemand",
    slidesToShow: 3,
    prevArrow: ".article-prev-button",
    nextArrow: ".article-next-button",
    responsive: [
      {
        breakpoint: 1020,
        settings: {
          slidesToShow: 1,
          centerMode: true,
        },
      },
      {
        breakpoint: 370,
        settings: {
          slidesToShow: 1,
          centerMode: false,
        },
      },
    ],
  });

  //pagination styling
  $(".page-numbers.current").addClass("font-bold");
  $("a.page-numbers").addClass("hover:underline");
};

document.addEventListener("DOMContentLoaded", initApp);
