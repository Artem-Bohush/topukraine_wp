AOS.init();

(function mobileMenuToggling() {
  console.info('[mobileMenuToggling] called');

  const menuBtn = document.querySelector('#menu-btn');
  const menuBtnClose = document.querySelector('#menu-btn-close');
  const menu = document.querySelector('#header__menu');

  [menuBtn, menuBtnClose].forEach(btn => btn.addEventListener('click', () => {
    menu.classList.toggle('header__menu--active');
  }));
})();

//

(function searchFormSubmit() {

  const from = document.getElementById('from');
  const to = document.getElementById('to');

  const group1 = [2, 34, 399, 112];
  const group2 = [236, 237, 2617, 2363, 2854, 2848, 242, 2843, 243, 244, 245, 1019, 979];

  if (!from || !to || !group1 || !group2) {
    return;
  }

  function disableOptions(select, group) {
    group.forEach(value => {
      select.querySelector(`option[value="${value}"]`).disabled = true;
    });
  }

  function enableOptions(select, group) {
    group.forEach(value => {
      select.querySelector(`option[value="${value}"]`).disabled = false;
    });
  }

  from.addEventListener('change', function() {
    if (group1.includes(parseInt(this.value))) {
      disableOptions(to, group1);
      enableOptions(to, group2);
    } else if (group2.includes(parseInt(this.value))) {
      disableOptions(to, group2);
      enableOptions(to, group1);
    } else if (this.value == 0) {
      enableOptions(to, group1.concat(group2));
    }
  });

  to.addEventListener('change', function() {
    if (group1.includes(parseInt(this.value))) {
      disableOptions(from, group1);
      enableOptions(from, group2);
    } else if (group2.includes(parseInt(this.value))) {
      disableOptions(from, group2);
      enableOptions(from, group1);
    } else if (this.value == 0) {
      enableOptions(from, group1.concat(group2));
    }
  });

  // Enable all options on page load
  enableOptions(from, group1.concat(group2));
  enableOptions(to, group1.concat(group2));

  // 

  const form = document.getElementById('searchForm');
  const when = document.getElementById('when');
  const passengers = document.getElementById('passengers');

  form.addEventListener('submit', function(event) {

    if (!form.checkValidity()) {
      return; // If the form is invalid, let the browser show the validation errors
    }

    event.preventDefault();

    if (from.value != 0 && to.value != 0) {
      const queryParams = `?from=${from.value}&to=${to.value}&when=${when.value}&adult=${passengers.value}&children=0&currency=UAH&change=0`;
      console.log(queryParams);

      let ticketsPagePath = '';

      if (window.location.pathname === '/') {
        ticketsPagePath = 'tickets-ua';
      } else if (window.location.pathname === '/ru/') {
        ticketsPagePath = 'ru/tickets-ru';
      }

      if (ticketsPagePath) {
        const ticketsPageFullPath = `${window.location.protocol}//${window.location.host}/${ticketsPagePath}${queryParams}`;
        window.location.href = ticketsPageFullPath;
      }
    }
  });

})();

// 


(function serviceCardHover() {
  console.info('[serviceCardHover] called');

  const cards = document.querySelectorAll('section.services__card');

  if (!cards) {
    return;
  }

  cards.forEach(card => {
    if (!card.dataset.cardPrimary) {
      card.addEventListener('mouseenter', (e) => {
        e.target.classList.add('services__card--hovered');
      });
  
      card.addEventListener('mouseleave', (e) => {
        e.target.classList.remove('services__card--hovered');
      });
    }
  });
  
})();

//

// function myCallback (el) {
//   el.classList.remove('anim-hide');
//   el.classList.add('animate__bounceInRight');
// }

// ScrollReveal().reveal('#animate-title', { afterReveal: myCallback });

(function expandingCards() {
  console.info('[expandingCards] called');

  // document.querySelectorAll('.expand__title').forEach((title) => {
  //   title.addEventListener('click', () => {
  //     title.classList.toggle('expand__title--open');
  //     title.classList.toggle('expand__title--close');
  //     const text = title.nextElementSibling;
  //     // const textMaxHeight = window.getComputedStyle(text).getPropertyValue('max-height');
  //     // if (textMaxHeight === 'fit-content') {
  //     //   const textHeight = window.getComputedStyle(text).getPropertyValue('height');
  //     //   text.style.maxHeight = textHeight;
  //     // }
  //     text.classList.toggle('expand__text--open');
  //     text.classList.toggle('expand__text--close');
  //   });
  // });

  const expandingCards = document.querySelectorAll('.expand__title');

  if (!expandingCards) {
    return;
  }

  expandingCards.forEach((title) => {
    title.addEventListener('click', () => {
      // Close all other cards
      document.querySelectorAll('.expand__title').forEach((otherTitle) => {
        if (otherTitle !== title) {
          otherTitle.classList.remove('expand__title--open');
          otherTitle.classList.add('expand__title--close');
          const otherText = otherTitle.nextElementSibling;
          otherText.classList.remove('expand__text--open');
          otherText.classList.add('expand__text--close');
        }
      });
  
      // Open or close the clicked card
      title.classList.toggle('expand__title--open');
      title.classList.toggle('expand__title--close');
      const text = title.nextElementSibling;
      text.classList.toggle('expand__text--open');
      text.classList.toggle('expand__text--close');
    });
  });
})();

(function reviewsSlider() {
  console.info('[reviewsSlider] called');

  if (!window.jQuery) {
    return;
  }

  jQuery(document).ready(function($) {
    $(document).ready(function(){
      $('.reviews__slider').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1023,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });  
  });
  
  
})();
