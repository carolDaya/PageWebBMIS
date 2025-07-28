var swiper = new Swiper('.swiper', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 4,
          slideShadows: true
        },
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        keyboard: {
          enabled: true,
        },
        mousewheel: {
          thresholdDelta: 70,
        },
        breakpoints: {
          560: {
            slidesPerView: 2.5
          },
          768: {
            slidesPerView: 3
          },
          1024: {
            slidesPerView: 3
          }
        }
      });


// JavaScript for the hamburger menu functionality
document.addEventListener('DOMContentLoaded', function() {
        const hamburgerButton = document.getElementById('hamburger-button');
        const navigationMenu = document.getElementById('navigation-menu');

        hamburgerButton.addEventListener('click', function() {
            navigationMenu.classList.toggle('hidden');
            // navigationMenu.classList.toggle('absolute');
            navigationMenu.classList.toggle('bg-white');
            // navigationMenu.classList.toggle('w-full');
            // navigationMenu.classList.toggle('left-0');
            // navigationMenu.classList.toggle('top-full');
            // navigationMenu.classList.toggle('flex-col');
            navigationMenu.classList.toggle('items-center'); // To center items in vertical menu
            hamburgerButton.classList.toggle('hidden'); 
        });

        // Optional: Close menu when a link is clicked (useful for single-page applications)
        navigationMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (!navigationMenu.classList.contains('hidden') && window.innerWidth < 768) { // 768px is Tailwind's 'md' breakpoint
                    navigationMenu.classList.add('hidden');
                }
            });
        });
    });


