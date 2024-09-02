// (function searchFormSubmit() {

//   const from = document.getElementById('from');
//   let fromValue = null;
//   let toValue = null;
//   const to = document.getElementById('to');

//   from.addEventListener('change', e => {
//     console.log(e)
//   })
//   // [from, to].forEach(select => {
//   //   select.addEventListener('change', e => {
//   //     console.log(e)
//   //   })
//   // })

// })();

// (function searchFormSubmit() {
//   const from = document.getElementById('from');
//   const to = document.getElementById('to');

//   function filterOptions(select1, select2, range1, range2) {
//       const value = parseInt(select1.value, 10);
//       const options = Array.from(select2.options);

//       options.forEach(option => {
//           const optionValue = parseInt(option.value, 10);
//           if (value === 0 || optionValue === 0) {
//               option.hidden = false;
//           } else if (range1.includes(value)) {
//               option.hidden = range1.includes(optionValue);
//           } else if (range2.includes(value)) {
//               option.hidden = range2.includes(optionValue);
//           }
//       });
//   }

//   from.addEventListener('change', () => filterOptions(from, to, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]));
//   to.addEventListener('change', () => filterOptions(to, from, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]));
// })();

// (function searchFormSubmit() {
//   const from = document.getElementById('from');
//   const to = document.getElementById('to');

//   function filterOptions(select1, select2, range1, range2) {
//       const value = parseInt(select1.value, 10);
//       const options = Array.from(select2.options);

//       options.forEach(option => {
//           const optionValue = parseInt(option.value, 10);
//           if (optionValue === 0) {
//               option.hidden = true;
//           } else if (value === 0) {
//               option.hidden = false;
//           } else if (range1.includes(value)) {
//               option.hidden = range1.includes(optionValue);
//           } else if (range2.includes(value)) {
//               option.hidden = range2.includes(optionValue);
//           }
//       });
//   }

//   from.addEventListener('change', () => filterOptions(from, to, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]));
//   to.addEventListener('change', () => filterOptions(to, from, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]));
// })();

// (function searchFormSubmit() {
//   const from = document.getElementById('from');
//   const to = document.getElementById('to');

//   function filterOptions(select1, select2, range1, range2) {
//       const value = parseInt(select1.value, 10);
//       const options = Array.from(select2.options);

//       options.forEach(option => {
//           const optionValue = parseInt(option.value, 10);
//           if (option.hasAttribute('disabled')) {
//               option.hidden = true;
//           } else if (value === 0) {
//               option.hidden = false;
//           } else if (range1.includes(value)) {
//               option.hidden = range1.includes(optionValue);
//           } else if (range2.includes(value)) {
//               option.hidden = range2.includes(optionValue);
//           }
//       });
//   }

//   from.addEventListener('change', () => filterOptions(from, to, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]));
//   to.addEventListener('change', () => filterOptions(to, from, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]));
// })();

// (function searchFormSubmit() {
//   const from = document.getElementById('from');
//   const to = document.getElementById('to');

//   function filterOptions(select1, select2, range1, range2) {
//       const value = parseInt(select1.value, 10);
//       const options = Array.from(select2.options);

//       options.forEach(option => {
//           const optionValue = parseInt(option.value, 10);
//           if (option.hasAttribute('disabled')) {
//               option.disabled = true;
//           } else if (value === 0) {
//               option.disabled = false;
//           } else if (range1.includes(value)) {
//               option.disabled = range1.includes(optionValue);
//           } else if (range2.includes(value)) {
//               option.disabled = range2.includes(optionValue);
//           }
//       });
//   }

//   from.addEventListener('change', () => filterOptions(from, to, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]));
//   to.addEventListener('change', () => filterOptions(to, from, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]));
// })();

// (function searchFormSubmit() {
//   const from = document.getElementById('from');
//   const to = document.getElementById('to');

//   function filterOptions(select1, select2, range1, range2) {
//       const value = parseInt(select1.value, 10);
//       const options = Array.from(select2.options);

//       options.forEach(option => {
//           const optionValue = parseInt(option.value, 10);
//           if (option.hasAttribute('disabled')) {
//               option.disabled = true;
//           } else if (value === 0) {
//               option.disabled = false;
//           } else if (range1.includes(value)) {
//               option.disabled = range1.includes(optionValue);
//           } else if (range2.includes(value)) {
//               option.disabled = range2.includes(optionValue);
//           }
//       });
//   }

//   from.addEventListener('change', () => {
//       filterOptions(from, to, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]);
//       if (from.value === '0') {
//           Array.from(to.options).forEach(option => option.disabled = false);
//       }
//   });

//   to.addEventListener('change', () => {
//       filterOptions(to, from, [1, 2, 3, 4], [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]);
//       if (to.value === '0') {
//           Array.from(from.options).forEach(option => option.disabled = false);
//       }
//   });
// })();

// (function searchFormSubmit() {

//   const from = document.getElementById('from');
//   const to = document.getElementById('to');

//   function disableOptions(select, start, end) {
//     for (let i = start; i <= end; i++) {
//       select.querySelector(`option[value="${i}"]`).disabled = true;
//     }
//   }

//   function enableOptions(select, start, end) {
//     for (let i = start; i <= end; i++) {
//       select.querySelector(`option[value="${i}"]`).disabled = false;
//     }
//   }

//   from.addEventListener('change', function() {
//     if (this.value >= 1 && this.value <= 4) {
//       disableOptions(to, 1, 4);
//       enableOptions(to, 5, 17);
//     } else if (this.value >= 5 && this.value <= 17) {
//       disableOptions(to, 5, 17);
//       enableOptions(to, 1, 4);
//     } else if (this.value == 0) {
//       enableOptions(to, 1, 17);
//     }
//   });

//   to.addEventListener('change', function() {
//     if (this.value >= 1 && this.value <= 4) {
//       disableOptions(from, 1, 4);
//       enableOptions(from, 5, 17);
//     } else if (this.value >= 5 && this.value <= 17) {
//       disableOptions(from, 5, 17);
//       enableOptions(from, 1, 4);
//     } else if (this.value == 0) {
//       enableOptions(from, 1, 17);
//     }
//   });

//   // Enable all options on page load
//   enableOptions(from, 1, 17);
//   enableOptions(to, 1, 17);

// })();

(function searchFormSubmit() {

  const from = document.getElementById('from');
  const to = document.getElementById('to');

  const group1 = [2, 34, 399, 112];
  const group2 = [236, 237, 2617, 2363, 2854, 2848, 242, 2843, 243, 244, 245, 1019, 979];

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
        ticketsPagePath = 'tickets-book';
      } else if (window.location.pathname === '/ru/') {
        ticketsPagePath = 'ru/tickets-book-ru';
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

(function serviceCardHover() {

  
})();

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
