import './bootstrap';

const bg = document.querySelector('.leftinfocolumn');
const windowWidth = window.innerWidth / 5;
const windowHeight = window.innerHeight / 5;

bg.addEventListener('mousemove', (e) => {
    const mouseX = e.clientX / windowWidth;
    const mouseY = e.clientY / windowHeight;

    bg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
});



let aboutBtn = document.querySelector('#aboutBtn')
let about = document.querySelector('#about');
aboutBtn.addEventListener('click', function () {
    about.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    })
})

let projectsBtn = document.querySelector('#projectsBtn')
let projects = document.querySelector('.projects');
projectsBtn.addEventListener('click', function () {
    projects.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    })
})

let skillsBtn = document.querySelector('#skillsBtn')
let skills = document.querySelector('.skills');
skillsBtn.addEventListener('click', function () {
    skills.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    })
})

let linksBtn = document.querySelector('#contactBtn')
let links = document.querySelector('.links');
linksBtn.addEventListener('click', function () {
    links.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    })
})