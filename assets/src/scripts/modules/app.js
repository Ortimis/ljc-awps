class App {

	constructor() {
		this.didScroll = false;
		this.header = document.getElementById('masthead');
		this.init();
		this.toggleMenu();
	}

	init() {
		console.info( 'App Initialized' );
	}

	toggleMenu() {
		var toggle = document.getElementById('menu-toggle');
		var menu = document.getElementById('site-navigation');
		var masthead = document.getElementById('masthead');

		toggle.addEventListener('click', () => {
			toggle.classList.toggle('toggled');
			masthead.classList.toggle('open');
		})
	}

}

export default App;
