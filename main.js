//Interval on tecnlogies icons transitio
const first = document.getElementById('first');
const second = document.getElementById('second');
const images = document.querySelectorAll('[data-img]');
const imgs = Array.from(images);
console.log(imgs);
setInterval(() => {
  first.classList.toggle('hidden');
  second.classList.toggle('hidden');
  imgs.forEach((pic) => pic.classList.toggle('hidden'));
}, 5000);
//AutoType Presentation
const TypingText = document.querySelector('.typed-text');
const AutoTyping = document.querySelector('.TypeCursor');
const textArray = [
  'JavaScript Developer.',
  'Wordpress Developer.',
  'React Developer.',
  'HTML Developer.',
  'CSS Developer.',
  'PHP Developer.',
];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000;
let textArrayIndex = 0;
let charIndex = 0;
function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if (!AutoTyping.classList.contains('typing'))
      AutoTyping.classList.add('typing');
    TypingText.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } else {
    AutoTyping.classList.remove('typing');
    setTimeout(erase, newTextDelay);
  }
}
function erase() {
  if (charIndex > 0) {
    if (!AutoTyping.classList.contains('typing'))
      AutoTyping.classList.add('typing');
    TypingText.textContent = textArray[textArrayIndex].substring(
      0,
      charIndex - 1
    );
    charIndex--;
    setTimeout(erase, erasingDelay);
  } else {
    AutoTyping.classList.remove('typing');
    textArrayIndex++;
    if (textArrayIndex >= textArray.length) textArrayIndex = 0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener('DOMContentLoaded', function () {
  if (textArray.length) setTimeout(type, newTextDelay + 250);
});
//Add Gallery
const myWork = document.querySelector('.grid');
console.log(myWork);
for (let i = 1; i <= 15; i++) {
  const item = document.createElement('DIV');
  item.classList.add('item');
  item.dataset.category = `${i}`;
  const gallery = document.createElement('DIV');
  gallery.classList.add('item-content');
  gallery.classList.add(`item${i}`);
  const a = document.createElement('A');
  a.classList.add(`link${i}`);
  const img = document.createElement('IMG');
  img.src = `img/${i}.png`;
  if (
    item.dataset.category === '1' ||
    item.dataset.category === '3' ||
    item.dataset.category === '5' ||
    item.dataset.category === '6' ||
    item.dataset.category === '8'
  ) {
    item.dataset.category = 'Websites';
  } else if (
    item.dataset.category === '2' ||
    item.dataset.category === '7' ||
    item.dataset.category === '9' ||
    item.dataset.category === '10' ||
    item.dataset.category === '11' ||
    item.dataset.category === '12' ||
    item.dataset.category === '13' ||
    item.dataset.category === '14' ||
    item.dataset.category === '15'
  ) {
    item.dataset.category = 'Apps';
  } else {
    item.dataset.category = 'Games';
  }
  img.alt = `${i}`;
  img.classList.add(`image${i}`);
  img.style.width = '100%';
  img.style.height = '100vh';
  img.style.maxWidth = '40rem';
  img.style.maxHeight = '40rem';
  img.addEventListener('mouseover', () => {
    img.style.transform = 'scale(1.02)';
    img.style.opacity = '0.8';
  });
  img.addEventListener('mouseout', () => {
    img.style.transform = 'scale(1)';
    img.style.opacity = '1';
  });
  img.style.transition = 'all ease-in-out 0.4s';
  a.append(img);
  gallery.append(a);
  item.append(gallery);
  myWork.append(item);
}
//Using Muuri
const grid = new Muuri('.grid', {
  layout: {
    rounding: true,
  },
});
//Transitions Muuri
//Add Listeners for filter categories
window.addEventListener('load', () => {
  grid.refreshItems().layout();
  const id = document.getElementById('grid');
  id.classList.add('loaded-images');
  const links = document.querySelectorAll('#categories a');
  const myButtons = Array.from(links);
  links.forEach((element) => {
    console.log(element);
    element.addEventListener('click', (e) => {
      e.preventDefault();
      const target = e.target;
      console.log(target);
      links.forEach((link) => link.classList.remove('active'));
      target.classList.add('active');
      const category = target.innerHTML;
      console.log(category);
      grid.filter(`[data-category = "${category}"]`);
      if (category === 'All') {
        grid.filter('[data-category]');
      }
    });
  });
  //Filter with Search Bar
  const searching = document.getElementById('bar');
  searching.addEventListener('change', (e) => {
    myButtons.forEach((element) => {
      const option = e.target.value;
      const text = element.textContent;
      const select = element;
      if (option === text) {
        console.log('Aloja');
        select.click();
      }
    });
  });
  const form = document.getElementById('search');
  form.addEventListener('submit', (e) => e.preventDefault());
});

//Autocomplete Search Bar
const links = document.querySelectorAll('#categories a');
const maps = [...links];
const list = maps.map((e) => e.textContent);
console.log(list);
$(function () {
  list;
  $('#bar').autocomplete({
    source: list,
  });
});
//href to my work
const link1 = document.querySelector('.link1');
link1.target = '_blank';
link1.href =
  'https://estadosycapitalesdevenezuelamanuelmoralesangstromico.netlify.app';
const link2 = document.querySelector('.link2');
link2.target = '_blank';
link2.href = 'https://cambiafondos.netlify.app';
const link3 = document.querySelector('.link3');
link3.target = '_blank';
link3.href = 'https://xenodochial-agnesi-7dc5d6.netlify.app/';
const link4 = document.querySelector('.link4');
link4.target = '_blank';
link4.href = 'https://rompebloques-manuel.netlify.app';
const link5 = document.querySelector('.link5');
link5.target = '_blank';
link5.href = 'https://blogelectronica.netlify.app/';
const link6 = document.querySelector('.link6');
link6.target = '_blank';
link6.href = 'https://firstprojectmanuelfreelance.netlify.app';
const link7 = document.querySelector('.link7');
link7.target = '_blank';
link7.href = 'https://github.com/Angstromico/sportcollegewordpresstheme';
const link8 = document.querySelector('.link8');
link8.target = '_blank';
link8.href = 'https://shopping-cartmanuelmorales.netlify.app/';
const link9 = document.querySelector('.link9');
link9.target = '_blank';
link9.href = 'https://react-projects-1-birthday-reminder.netlify.app/';
const link10 = document.querySelector('.link10');
link10.target = '_blank';
link10.href = 'https://reactapp-turismo-sudamerica.netlify.app/';
const link11 = document.querySelector('.link11');
link11.target = '_blank';
link11.href = 'https://simulador-manda-correos-memz.netlify.app/';
const link12 = document.querySelector('.link12');
link12.target = '_blank';
link12.href = 'https://appreact-manuelmorales-my-teachers.netlify.app/';
const link13 = document.querySelector('.link13');
link13.target = '_blank';
link13.href = 'https://manuelmoralesfoodreactapp.netlify.app/';
const link14 = document.querySelector('.link14');
link14.target = '_blank';
link14.href = 'https://buscador-automoviles-manuel-morales.netlify.app/';
const link15 = document.querySelector('.link15');
link15.target = '_blank';
link15.href = 'https://app-salon-beauty.000webhostapp.com/';
//Submit Form Message
const sendindContainer = document.getElementById('sendingID');
const succesSend = document.getElementById('sending-good');
const form = document.getElementById('form');
form.addEventListener('submit', (e) => {
  e.preventDefault();
  if (succesSend) {
    const gif = document.createElement('IMG');
    gif.src = 'img/gif.gif';
    gif.alt = 'gif';
    gif.classList.add('gif');
    sendindContainer.append(gif);
    setTimeout(() => {
      gif.remove();
      succesSend.classList.remove('hide-success');
      setTimeout(() => {
        succesSend.classList.add('hide-success');
      }, 5000);
    }, 5000);
  }
});
//Put Current Year on Copyright
const year = document.getElementById('year');
let date = new Date().getFullYear();
year.innerHTML = `${date}`;
