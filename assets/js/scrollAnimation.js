gsap.registerPlugin(ScrollTrigger);

// Slide Down on load
const slideDowns = document.querySelectorAll('.slide-down')

if (slideDowns) {
  slideDowns.forEach((slideDown, i) => {

    const tl = gsap.timeline();

    tl
      .from(slideDown, { yPercent: -50, opacity: 0, duration: .75 })
      .to(slideDown, { ease: Power4.easeout, yPercent: 0, opacity: 1 })

    tl.play()
  })
}

// Slide Right on load
const slideRights = document.querySelectorAll('.slide-right')

if (slideRights) {
  slideRights.forEach((slideRight, i) => {

    const tl = gsap.timeline();

    tl
      .from(slideRight, { xPercent: -50, opacity: 0, duration: .75 })
      .to(slideRight, { ease: Power4.easeOut, xPercent: 0, opacity: 1 })

    tl.play()
  })
}

// Slide right on scroll
const scrollSlideRights = document.querySelectorAll('.scroll-slide-right')

if (scrollSlideRights) {
  scrollSlideRights.forEach((scrollSlideRight, i) => {

    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: scrollSlideRight,
        start: "top center",
        end: "bottom center",
        scrub: true,
        // markers: true,
        toggleActions: "play reverse play reverse",
        ease: Power4.easeInOut
      }
    });

    tl
      .from(scrollSlideRight, { xPercent: -25, opacity: 0 })
      .to(scrollSlideRight, { xPercent: 0, opacity: 1 })
      ;
  })
}

// About us slide down on scroll
const scrollSlideDowns = document.querySelectorAll('.scroll-slide-down')

if (scrollSlideDowns) {
  scrollSlideDowns.forEach((scrollSlideDown, i) => {

    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: scrollSlideDown,
        start: "top-=50 center",
        end: "bottom center",
        scrub: true,
        // markers: true,
        toggleActions: "play reverse play reverse",
        ease: Power4.easeInOut
      }
    });

    tl
      .from(scrollSlideDown, { yPercent: -25, opacity: 0 })
      .to(scrollSlideDown, { yPercent: 0, opacity: 1 })
      ;
  })
}



// Fade in on scroll
const scrollFades = document.querySelectorAll('.scroll-fade')

if (scrollFades) {
  scrollFades.forEach((scrollFade, i) => {

    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: scrollFade,
        start: "top-=150 center",
        end: "bottom center",
        scrub: true,
        // markers: true,
        toggleActions: "play reverse play reverse",
        ease: Power4.easeInOut
      }
    });

    tl
      .from(scrollFade, { opacity: 0 })
      .to(scrollFade, { opacity: 1 })
      .to(scrollFade, { opacity: 0 })
      ;
  })
}

// Slide right on scroll
const galleries = document.querySelectorAll('.gallery')

if (galleries) {
  galleries.forEach((gallery, i) => {

    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: gallery,
        start: "top-=150 center",
        end: "bottom center",
        scrub: true,
        // markers: true,
        toggleActions: "play reverse play reverse",
        ease: Power4.easeInOut
      }
    });

    tl
      .from(gallery, { xPercent: -25, opacity: 0 })
      .to(gallery, { xPercent: 0, opacity: 1 })
      ;
  })
}

// CTA Buttons slide up on scroll
const scrollSlideUps = document.querySelectorAll('.scroll-slide-up')

if (scrollSlideUps) {
  scrollSlideUps.forEach((scrollSlideUp, i) => {

    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: scrollSlideUp,
        start: "top center",
        end: "bottom+=150 center",
        scrub: true,
        // markers: true,
        toggleActions: "play reverse play reverse",
        ease: Power4.easeInOut
      }
    });

    tl
      .from(scrollSlideUp, { yPercent: 0, opacity: 1 })
      .to(scrollSlideUp, { yPercent: -25, opacity: 0 })
      ;
  })
}