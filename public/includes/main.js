const menu = document.getElementById('mn');
const logo = document.getElementById('lg');
const main = document.getElementById('main');
const footer = document.getElementById('footer');
const menuhb = document.getElementById('hm-menu');
const adoption = document.getElementById('adoption');
const achat = document.getElementById('achat');

window.addEventListener('resize', reportWindowSize)

function reportWindowSize() {
    let width = (window.innerWidth - logo.getBoundingClientRect().width)/100*80;
    let mainheight = (window.innerHeight - footer.getBoundingClientRect().height);
    menu.style.width = `${width-50}px`;
    main.style.minHeight = `${mainheight}px`;
    
    if(window.innerWidth < 761){
        menu.style.display = "none";
        document.querySelector('.nav-toggle').style.display = "flex";
        document.querySelector('.text-animal-ct').style.width = "100%";
        let elements = document.getElementsByClassName("animal-ct");
        for (let i = 0; i < elements.length; i++){
            elements[i].style.display = "block";
        }
        let images = document.querySelector('img');
        if(images !== null){
            if (window.innerWidth < 551){
                images.style.width = `${(window.innerWidth - 50)}px`
            }
        }
    }else{
        let images = document.querySelector('img');
        if(images !== null){
            images.style.width = `500px`
        }
        menu.style.display = "flex";
        document.querySelector('.nav-toggle').style.display = "none";
        let elements = document.getElementsByClassName("animal-ct");
        for (let i = 0; i < elements.length; i++){
            elements[i].style.display = "flex";
        }
    }
}
reportWindowSize();

document.getElementById('lg').addEventListener('click', event => {
    window.location.replace('/public/index.php?page=setAdminMode');
})

if(adoption !== null) {
    adoption.addEventListener('click', event => {
        alert('vous venez d\'adopter cet animal ');
      });
}
if(achat !== null){
    achat.addEventListener('click', event => {
        alert("achat effectué !");
      });
}
/*BURGER*/
(function() {

        let hamburger = {
            nav: document.querySelector('#nav'),
            navToggle: document.querySelector('.nav-toggle'),

            initialize() {
                this.navToggle.addEventListener('click',
            () => { this.toggle(); });
            },

            toggle() {
                this.navToggle.classList.toggle('expanded');
                menuhb.classList.toggle('open');
            },
        };

        hamburger.initialize();

}());