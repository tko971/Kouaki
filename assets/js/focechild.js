//TITRES
const titres = document.querySelectorAll('h2 span');

const observerOptions ={ //options d'intersection
	root:null,
	threshold:0.5,
	rootMargin:"0px"

}

const observerTitre = new IntersectionObserver(
	entries => {
		entries.forEach(entry => {
			console.log(entry);
			if (entry.isIntersecting){
				entry.target.classList.add('animation-titre');
				//observerTitre.unobserve(entry.target);
			}
		});
	},observerOptions
);

titres.forEach(titre =>{
	observerTitre.observe(titre);
});

//NAVIGATION

const boutonburger = document.querySelector(".menu-toggle")
const nav = document.querySelector(".navhover")
const liens = document.querySelectorAll(".liensmenu a")

boutonburger.addEventListener("click", toggleNav)
liens.forEach(lien=>{
	lien.addEventListener("click",toggleNav)
	//fermeture du over au clic sur un lien
})

function toggleNav(){
	boutonburger.classList.toggle("active") //animation croix
	nav.classList.toggle("active") // ouverture et fermeture menu
}

//ROTATION FLEURS

const root = document.querySelector(":root");
document.addEventListener("scroll",()=>{
	root.style.setProperty("--speed","2s"); 
})

document.addEventListener("scrollend",()=>{
	root.style.setProperty("--speed","10s"); 
})

function initializeSkrollrOnDesktop() {
    const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    // if (screenWidth > 1191) {
        var s = skrollr.init({
            forceHeight: false
        });
    // }
}
  
window.addEventListener('load', initializeSkrollrOnDesktop); 
