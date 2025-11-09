
// FOR SMOOTH SCROLLING.
function smoothScroll(){
    // Initialize Lenis
  const lenis = new Lenis({
    autoRaf: true,
  });

  // Listen for the scroll event and log the event data
  lenis.on('scroll', (e) => {
    console.log(e);
  });
}

smoothScroll();

// LANDING PAGE ANIMATION.
function landingPageAnimation(){

    // Prevent browser from auto-restoring scroll
      if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
      }

    //landing page animation start.  
    var tl = gsap.timeline();

    // Animate from ABOVE the navbar
    tl.from("nav .logo", {
      y: 20,
      opacity: 0,
      duration: 1,
      ease: "back.out(1.4)"
    })
    .from(".nav-item a", {
      y: 20,
      opacity: 0,
      duration: 1,
      stagger: 0.1,
      ease: "power2.out"
    }, "-=0.5");          // Overlap with logo animation

  
    const tl3 = gsap.timeline({ defaults: { ease: "power2.out" } });

    // Primary text animation
    tl3.from(".primary-content-container h1", {
      y: 30,
      opacity: 0,
      duration: 1.2
    })

    // 1. Card wrapper (container)
    .from(".card-container-wrapper", {
      y: 100,
      opacity: 0,
      duration: 1.2
    }, "-=0.6")

    // 2. After wrapper appears → spread the cards!
    .to(".card-container .card", {
      duration: 1.2,
      x: (i) => (i - 3) * 120,           // horizontal spread: -360, -240, -120, 0, 120, 240, 360
      rotation: (i) => (i - 3) * 8,      // fan rotation: -24°, -16°, -8°, 0°, 8°, 16°, 24°
      z: (i) => Math.abs(i - 3) * -20,   // depth: back cards go into Z
      scale: (i) => 1 - Math.abs(i - 3) * 0.05,  // center card largest
      opacity: 1,
      y: 0,
      stagger: {
        amount: 0.6,                     // total stagger time
        from: "center"                   // start from middle card
      },
      ease: "back.out(1.6)"
    }, "+=0.1")  // small delay after wrapper appears
    .from(".landing-action-btn a",{
      y: 10,
      opacity: 0,
      duration: 0.6,
      ease: "power2.out"
    });
}

landingPageAnimation();


//FOOTER COPYRIGHT AUTO-UPDATE YEAR.
function cpyRightYear(){
  // Automatically update the copyright year for footer section.
  document.getElementById('copyright-year').textContent = new Date().getFullYear();
}

cpyRightYear();