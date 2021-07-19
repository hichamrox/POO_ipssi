const menu = document.getElementById('mn');
const logo = document.getElementById('lg');
const main = document.getElementById('main');
const footer = document.getElementById('footer');
const menuhb = document.getElementById('hm-menu');
const adoption = document.getElementById('adoption');

window.addEventListener('resize', reportWindowSize)

function reportWindowSize() {
    let width = (window.innerWidth - logo.getBoundingClientRect().width)/100*80;
    let mainheight = (window.innerHeight - footer.getBoundingClientRect().height);
    menu.style.width = `${width}px`;
    main.style.minHeight = `${mainheight}px`;
    
    if(window.innerWidth < 761){
        menu.style.display = "none";
        document.querySelector('.nav-toggle').style.display = "flex";
        document.querySelector('.text-animal-ct').style.width = "100%";
        let elements = document.getElementsByClassName("animal-ct");
        for (let i = 0; i < elements.length; i++){
            elements[i].style.display = "block";
            document.getElementsByClassName('text-animal-ct')[i].style.width = "100%";
            document.getElementsByClassName('image-animal-ct')[i].style.width = "100%";
        }
    }else{
        menu.style.display = "flex";
        document.querySelector('.nav-toggle').style.display = "none";
        let elements = document.getElementsByClassName("animal-ct");
        for (let i = 0; i < elements.length; i++){
            elements[i].style.display = "flex";
            document.getElementsByClassName('text-animal-ct')[i].style.width = "70%";
            document.getElementsByClassName('image-animal-ct')[i].style.width = "30%";
        }
    }
}
reportWindowSize();

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

adoption.addEventListener('click', event => {
    alert('vous venez d\'adopter cet animal ');
  });