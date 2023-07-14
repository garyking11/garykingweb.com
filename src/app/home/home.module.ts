import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {RouterModule} from "@angular/router";
import {HomeComponent} from "./home.component";
import {ROUTES} from "./home.route";


@NgModule({
    imports: [
        CommonModule,
        RouterModule.forChild(ROUTES),
    ], 
    providers: [],
    declarations: [HomeComponent]
})

export class HomeModule {
}
