class App {

	constructor() {
		this.didScroll = false;
		this.header = document.getElementById('masthead');
		this.change_masthead();
		this.init();
	}

	init() {
		console.info( 'App Initialized' );
	}

	change_masthead() {

		window.onscroll = function becomeIntransparent() {

			if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ) {
				
				document.getElementById('masthead').classList.add('intransparent');
				document.getElementById('header-logo').classList.add('small-logo');

			} else {
				document.getElementById('masthead').classList.remove('intransparent');
				document.getElementById('header-logo').classList.remove('small-logo');
			}
		}
	}

}

export default App;
