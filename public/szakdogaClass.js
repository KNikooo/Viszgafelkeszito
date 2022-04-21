class Szakdoga {
	constructor(elem, adat) {
		this.elem = elem;
		this.adat = adat;

		this.gombModosit = elem.children('.modosit');
		this.gombTorol = elem.children('.torol');

		this.szakdogaNev = elem.children('.szakdogaNev');
		this.tagok = elem.children('.tagok');
		this.githubLink = elem.children('.githubLink');
		this.oldalLink = elem.children('.oldalLink');

		this.setAdatok(this.adat);

		this.gombModosit.on('click', () => {
			console.log('modosit');
			this.kattintasTrigger('modosit');
		});

		this.gombTorol.on('click', () => {
			this.kattintasTrigger('torol');
		});
	}

	setAdatok(ertekek) {
		this.szakdogaNev.html(ertekek.szakdoga_nev);
		this.tagok.html(ertekek.tagokneve);
		this.githubLink.html(ertekek.githublink);
		this.oldalLink.html(ertekek.oldallink);
	}

	kattintasTrigger(esemenyneve) {
		let esemeny = new CustomEvent(esemenyneve, {detail: this.adat });
		window.dispatchEvent(esemeny);
	} 
}