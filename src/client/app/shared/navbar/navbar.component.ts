import { Component } from '@angular/core';
import { Config } from '../config/env.config';

/**
 * This class represents the main application component.
 */
@Component({
  moduleId: module.id,
  selector: 'sd-navbar',
  templateUrl: 'navbar.component.html',
  styleUrls: ['navbar.component.css'],
})
export class NavbarComponent {
	private menumobile:boolean = false;
	constructor() {
	    
	}
	private togleMenuMobile(){
		this.menumobile = !this.menumobile;
	}
	private login(){
		this.menumobile = !this.menumobile;
	}
}
