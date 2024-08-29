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
      // Scroll to the accordion title

      // Check if the parent is a ul with id 'mobile-menu-list'
      const parent = accordion.closest("ul");
      if (accordion.classList.contains("noscroll")) {
        // Do not execute scrollIntoView if parent is the mobile menu list
        return;
      }

      setTimeout(() => {
        btn.scrollIntoView({ behavior: "smooth", block: "start" });
      }, 500);
    });
  });

  //dropdown menus
  const openDropdownElements = (dropdownElementID, toggledClass = "block") => {
    const dropdownElement = document.getElementById(dropdownElementID);

    if (dropdownElement) {
      // Toggle visibility of the dropdown
      const isHidden = dropdownElement.classList.contains("hidden");
      dropdownElement.classList.toggle("hidden", !isHidden);
      dropdownElement.classList.toggle(toggledClass, isHidden);

      // If the dropdown is now visible, add a click listener to the document
      if (isHidden) {
        const handleClickOutside = (event) => {
          if (
            !dropdownElement.contains(event.target) &&
            !dropdownElement.classList.contains("hidden")
          ) {
            dropdownElement.classList.add("hidden");
            dropdownElement.classList.remove(toggledClass);
            document.removeEventListener("click", handleClickOutside); // Clean up the event listener
          }
        };

        document.addEventListener("click", handleClickOutside);
      }
    }
  };

  hamburgBtn.addEventListener("click", () => {
    const mobileMenu = document.getElementById("mobile-menu");
    const hide = document.querySelectorAll("#accordion-carret");
    hide.forEach((item) => item.classList.toggle("-z-10"));
    // openDropdownElements("mobile-menu", "flex");
    mobileMenu.classList.toggle("hidden");
    mobileMenu.classList.toggle("flex");
    hamburgBtn.classList.toggle("toggle-btn");
    if (window.innerWidth < 1020) {
      document.body.classList.toggle("overflow-hidden");
    }
  });
  servicesMenuBtn.addEventListener("click", (event) => {
    event.stopPropagation();
    openDropdownElements("services-submenu", "block");
  });
  // servicesMenuMobile.addEventListener("click", () =>
  //   openDropdownElements("services-submenu-mobile", "block")
  // );
  footerDropdown.addEventListener("click", (event) => {
    event.stopPropagation();
    openDropdownElements("footer-dropdown-options", "block");
  });

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
          centerPadding: "100px",
        },
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });

  //pagination styling
  $(".page-numbers.current").addClass("font-bold");
  $("a.page-numbers").addClass("hover:underline");
};

AOS.init();
document.addEventListener("DOMContentLoaded", initApp);
