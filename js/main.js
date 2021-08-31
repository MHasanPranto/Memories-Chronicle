const hamburger_menu = document.querySelector('.hamburger-menu');
const container = document.querySelector('.container');

hamburger_menu.addEventListener('click', () => {
  container.classList.toggle('active');
});

const inner = document.querySelector('.overlay');
for (var i = 0; i <= 100; i++) {
  const num = Math.ceil(Math.random() * 15);
  const blocks = document.createElement('div');
  blocks.classList.add('block');

  inner.appendChild(blocks);
  console.log(num);
  blocks.style.background = 'url(./images/' + num + '.jpg)';
  blocks.style.backgroundSize = 'cover';
}

function animateBlocks() {
  anime({
    targets: '.block',
    translateX: function () {
      return anime.random(-700, 700);
    },
    translateY: function () {
      return anime.random(-500, 500);
    },
    scale: function () {
      return anime.random(1, 5);
    },

    easing: 'linear',
    duration: 3000,
    delay: anime.stagger(10),
    complete: animateBlocks,
  });
}

function fadeOut() {
  console.log('fade');
  TweenMax.to('.myBtn', 1, {
    y: -100,
    opacity: 0,
  });
  TweenMax.to('.intrologo', 2, {
    y: -200,
    opacity: 0,
    ease: Power2.easeInOut,
    delay: 1,
  });
  TweenMax.to('.ring', 2, {
    y: -300,
    opacity: 0,
    ease: Power2.easeInOut,
    delay: 1.5,
  });
  TweenMax.to('.screen', 2, {
    y: -400,
    opacity: 0,
    ease: Power2.easeInOut,
    delay: 2,
  });

  TweenMax.from('.overlay-1', 2, {
    ease: Power2.easeInOut,
  });
  TweenMax.to('.overlay-1', 2, {
    delay: 2.6,
    top: '-110%',
    ease: Expo.easeInOut,
  });
  TweenMax.to('.overlay-2', 2, {
    delay: 3,
    top: '-110%',
    ease: Expo.easeInOut,
  });

  TweenMax.to('.loading', 2, {
    delay: 3.1,
    zIndex: -1,
    ease: Expo.easeInOut,
  });

  TweenMax.from('.header', 2, {
    delay: 3.3,
    opacity: 0,
    top: '-110%',
    ease: Power2.easeInOut,
  });

  TweenMax.to('.header', 2, {
    opacity: 1,
    top: '0%',
    delay: 3.6,
    ease: Power2.easeInOut,
  });
  animateBlocks();
}

// function loading() {
//   console.log('load');
//   // TweenMax.to(".loading",4,{
//   //   delay:6.6,
//   //   top:"-110%",

//   //   ease:Expo.easeInOut
//   // });
//   var t1 = new TimelineMax();

//   t1.from('.ringOne', 4, {
//     delay: 0.4,
//     opacity: 0,
//     y: 80,
//     ease: Expo.easeInOut,
//   })
//     .from(
//       '.ringTwo',
//       4,
//       {
//         delay: 0.9,
//         opacity: 0,
//         y: 80,
//         ease: Expo.easeInOut,
//       },
//       '-=5'
//     )
//     .to('.intrologo', 1, {
//       delay: 1.6,
//       opacity: 1,
//       ease: Power2.easeInOut,
//     })
//     .fromTo(
//       '.intro',
//       4,
//       {
//         opacity: 0,
//         bottom: '-110%',
//       },
//       {
//         opacity: 1,
//         bottom: 0,
//         ease: Expo.easeInOut,
//       }
//     );

//   // TweenMax.from(".loading-screen",3,{
//   //   delay:8.4,
//   //   top:"-110%",
//   //   ease:Expo.easeInOut
//   // });
// }

// animateBlocks();
