let lastScrollTop = 0;
  const subHeader = document.querySelector('.sub-header');

  window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop) {
      // Scrolling down
      subHeader.classList.add('hide');
    } else {
      // Scrolling up
      subHeader.classList.remove('hide');
    }
    
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
  });






  //home carousal
  jQuery(document).ready(function($) {
    $('#owl_slidr').owlCarousel({
      loop: true,
      stagepadding: 250,
      nav: false,
      margin: 20,
      autoplay: true,
      navText: [
        "<i class='fas fa-chevron-left'></i>",
        "&nbsp | &nbsp<i class='fas fa-chevron-right'></i>"
      ],
      responsive: {
        0: { items: 1 },
        600: { items: 1 },
        1000: { items: 1 }
      }
    });
  });
  
  


    const cursor = document.getElementById("gradientCursor");
    let mouseX = 0;
    let mouseY = 0;
    let currentX = 0;
    let currentY = 0;

    // Track mouse position
    document.addEventListener("mousemove", (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
    });

    // Animate the trail
    function animate() {
      currentX += (mouseX - currentX) * 0.1;
      currentY += (mouseY - currentY) * 0.1;
      cursor.style.transform = `translate(${currentX}px, ${currentY}px)`;
      requestAnimationFrame(animate);
    }

    animate();




gsap.utils.toArray("section").forEach((section) => {
  const panel = section.querySelector(".panel");
  const content = section.querySelector(".content");

  // Set initial content state
  gsap.set(content, { opacity: 0, y: 30 });

  gsap.timeline({
    scrollTrigger: {
      trigger: section,
      start: "top 80%",
      end: "bottom top",
      toggleActions: "play reverse play reverse"
    }
  })
  .to(panel, {
    duration: 1,
    top: 0,
    ease: "power3.out"
  })
  .to(panel, {
    duration: 1,
    top: "-100%",
    ease: "power4.inOut"
  })
  .to(content, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power2.out"
  }, "-=0.5");
});




  






  window.scrollToSmooth = function (targetY, duration = 600) {
    const startY = window.scrollY;
    const changeY = targetY - startY;
    const startTime = performance.now();

    function animateScroll(currentTime) {
      const time = currentTime - startTime;
      const progress = Math.min(time / duration, 1);
      const ease = 0.5 * (1 - Math.cos(Math.PI * progress)); // easeInOut

      window.scrollTo(0, startY + changeY * ease);

      if (progress < 1) {
        requestAnimationFrame(animateScroll);
      }
    }

    requestAnimationFrame(animateScroll);
  };