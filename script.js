

//Menu Tabs
const aibTabs = document.querySelector(".aib-tabs");
aibTabs.addEventListener("click", function(e){
	if (e.target.classList.contains("aib-tab-item") && !e.target.classList.contains("active")){
		const target = e.target.getAttribute("data-target");
		aibTabs.querySelector(".active").classList.remove("active");
		e.target.classList.add("active");
		const aibSection = document.querySelector(".aib-section");
		aibSection.querySelector(".aib-tab-content.active").classList.remove("active");
		aibSection.querySelector(target).classList.add("active");
		//console.log(target);
	}
});

var lowAudio = document.getElementsByClassName("volume");
console.log(lowAudio);
lowAudio["audio text-center"].volume = 0.06;


//cara supaya ngescrollnya pas
var navopts = document.getElementsByClassName('page-scroll');
for(var i=0 ;i<navopts.length;i++){
	navopts[i].addEventListener("click",function(event){
		//ambil isi href
		var href = this.getAttribute("href");
		//ini section yg dituju
    	var sectionToGo = document.querySelector(href);
		//utk ngescroll ke:
		document.documentElement.scrollTop = sectionToGo.offsetTop-200;
		event.preventDefault();
	})
}

AOS.init();