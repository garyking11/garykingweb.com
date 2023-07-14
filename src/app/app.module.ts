import {BrowserModule} from '@angular/platform-browser';
import {NgModule, CUSTOM_ELEMENTS_SCHEMA} from '@angular/core';
import {AppComponent} from './app.component';
import {RouterModule} from "@angular/router";
import {CommonModule} from "@angular/common";
import {ROUTES} from "./app.route";
import {FooterComponent} from './footer/footer.component';


@NgModule({
    declarations: [
        AppComponent,
        FooterComponent
    ],
    imports: [
        BrowserModule,
        CommonModule,
        RouterModule.forRoot(ROUTES, {useHash: true}),
    ],
    providers: [],
    bootstrap: [AppComponent, FooterComponent],
    schemas: [CUSTOM_ELEMENTS_SCHEMA]
})
export class AppModule {
}
