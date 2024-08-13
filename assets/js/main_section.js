
// Timeline for navbar animations
let navbarTl = gsap.timeline({ defaults: { ease: "power4.inOut", duration: 1.3 } });

// Animation for navbar
navbarTl.from(".navbar-brand img", {
    opacity: 0,
    y: 100,
  })

  .from(".navbar-nav .nav-link", {
    opacity:0,
    y: 100,
    // duration: 1,
    stagger: 0.2,
  }, "-=1.2")

  .from(".btn-login", {
    opacity: 0,
    y: 100,
  })


  

let tl = gsap.timeline({ defaults: { ease: "power4.inOut", duration: 2 } });
let flagPoles = CSSRulePlugin.getRule(".card-animation::before");


tl.to(".h1-animation", {
  "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
  opacity: 1,
  y: 0,
  duration: 2.2,
})
  .to(
    ".col-animation",
    {
      "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
      opacity: 1,
      y: 0,
    },
    "-=1.2"
  )
  .from(".card-animation", { scaleY: 0, stagger: 0.4 }, "-=1.5")
  .from(
    flagPoles,
    { stagger: 1, opacity: 0, transform: "translateY(250px)" },
    "-=1.8"
  )
  .to(".title, .desc", { stagger: 0.1, duration: 1.2, opacity: 1, y: 0 }, "-=2")
  .to("footer", { opacity: 1 }, "-=2");

// Section 2 Animations

tl.from(".section_2 h1", {
  opacity: 0,
  y: 100,
  duration: 2.2,
})
  .from(
    ".section_2 h2",
    {
      opacity: 0,
      y: 100,
      duration: 2.2,
    },
    "-=1"
  )
  .from(
    ".section_2 p",
    {
      opacity: 0,
      y: 100,
      duration: 2.2,
    },
    "-=1"
  )

  .from(
    ".pricing-table",
    {
      opacity: 0,
      y: 100,
      duration: 1.5,
    },
    "-=1"
  )
  .from(
    ".pricing-card",
    {
      opacity: 0,
      y: 100,
      stagger: 0.3,
      duration: 1.5,
    },
    "-=1"
  );

// Section 3 Animations
tl.from(
  ".section_3 h2",
  {
    opacity: 0,
    y: 100,
    duration: 1.5,
  },
  "-=1"
)
  .from(
    ".section_3 p",
    {
      opacity: 0,
      y: 100,
      duration: 1.5,
    },
    "-=1"
  )

  .from(".contactTitle", {
    opacity: 0,
    y: 100,
    duration: 1.5,
  })
  .from(
    ".contactInfo .iconGroup",
    {
      opacity: 0,
      y: 100,
      stagger: 0.3,
      duration: 1.5,
    },
    "-=1"
  )

  .from(".socialMedia", {
    opacity: 0,
    y: 100,
    duration: 1.5,
  },
  "-=1"
)

  .from(
    ".contactForm",
    {
      opacity: 0,
      y: 100,
      duration: 1.5,
    },
    "-=1"
  )
  .from(
    ".messageForm",
    {
      opacity: 0,
      y: 100,
      duration: 1.5,
    },
    "-=1"
  )
  .from(
    ".socials ul li",
    {
      opacity: 0,
      y: 100,
      stagger: 0.2,
      duration: 1.5,
    },
    "-=1"
  );

// Footer Animations
// tl.from(".socials", {
//   opacity: 0,
//   y: 100,
//   duration: 1.5,
// }, "-=1")
// .from(".links", {
//   opacity: 0,
//   y: 100,
//   duration: 1.5,
// }, "-=1")
// .from(".footer_sectionh p", {
//   opacity: 0,
//   y: 100,
//   duration: 1.5,
// }, "-=1");

tl.to(
  "footer",
  {
    opacity: 1,
    duration: 1.5,
  },
  "-=1.5"
);
