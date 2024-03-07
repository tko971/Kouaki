const storyh2 = document. querySelector('.story h2')
const studioh2 = document. querySelector('.studio h2')

window.addEventListener('scroll',() =>{

	const {scrollTop, clientHeight} = document.documentElement;

	console.log(scrollTop,clientHeight);

	const hautfenetreelement =storyh2.getBoundingClientRect().top;

	if(scrollTop> (scrollTop + hautfenetreelement).toFixed()){
		storyh2.classList.add('active')
	}
})