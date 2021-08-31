// const cursor = document.querySelector('#cursor');
// const cursor = document.getElementById('cursor');
const anchor = document.querySelectorAll('a');
let menu = document.querySelector('#h-menu');
let tail = document.querySelector('.tail');

// window.addEventListener('mousemove', (e) => {
//   let x = e.pageX,
//     y = e.pageY;

//   cursor.style.left = `${x}px`;
//   cursor.style.top = `${y}px`;
// });

let mousePosX = 0,
  mousePosY = 0,
  cursor = document.getElementById('cursor');

document.onmousemove = (e) => {
  mousePosX = e.pageX;
  mousePosY = e.pageY;
};

let delay = 6,
  revisedMousePosX = 0,
  revisedMousePosY = 0;

function delayMouseFollow() {
  requestAnimationFrame(delayMouseFollow);

  revisedMousePosX += (mousePosX - revisedMousePosX) / delay;
  revisedMousePosY += (mousePosY - revisedMousePosY) / delay;

  cursor.style.top = tail.style.top = revisedMousePosY + 'px';
  cursor.style.left = tail.style.left = revisedMousePosX + 'px';
}
delayMouseFollow();

anchor.forEach((anc) => {
  anc.addEventListener('mouseover', () => {
    cursor.style.transform = 'scale(6)';
    cursor.style.background = 'crimson';
    cursor.style.animationName = 'borderanim';
    tail.style.opacity = '0';
  });
  anc.addEventListener('mouseleave', () => {
    cursor.style.transform = '';
    cursor.style.animationName = '';
    cursor.style.background = '';
    tail.style.opacity = '';
  });
});

menu.addEventListener('mouseover', () => {
  cursor.style.transform = 'scale(6)';
  cursor.style.background = 'crimson';
  cursor.style.animationName = 'borderanim';
  tail.style.opacity = '0';
});
menu.addEventListener('mouseleave', () => {
  cursor.style.transform = '';
  cursor.style.animationName = '';
  cursor.style.background = '';
  tail.style.opacity = '';
});
