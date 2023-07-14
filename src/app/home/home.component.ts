import {Component, OnInit} from '@angular/core';
declare var jQuery: any;
declare var WOW: any;
declare var $: any;
@Component({
    selector: 'app-home',
    templateUrl: './home.component.html',
    styleUrls: ['./home.component.css']
})

export class HomeComponent implements OnInit {

    constructor() {
    }

    ngOnInit() {
        //console.log("home component loaded");

        this.initWow()
        this.initMainSlideshow();
        this.initTestimonialSlideshow();
        // this.initParallax();
    }

    initMainSlideshow() {
        jQuery('.cycle-slideshow').cycle();
    }

    initTestimonialSlideshow() {
        jQuery('.testimonial-slideshow').cycle();
    }

    initWow() {
        let wow;
        wow = new WOW(
            {
                boxClass: 'wow',      // default
                animateClass: 'animated', // default
                offset: 0,          // default
                mobile: true,       // default
                live: true        // default
            }
        )
        wow.init();
    }

    initParallax() {
        $('body').localScroll();
    }
}