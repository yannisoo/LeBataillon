import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { MainComponent } from './home/main/main.component';
import { ListeComponent } from './liste-devis/liste/liste.component';
import { FormComponent } from './create-project/form/form.component';
import { ProjectNavbarComponent } from './project/project-navbar/project-navbar.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';


@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    MainComponent,
    ListeComponent,
    FormComponent,
    ProjectNavbarComponent,
    ProjectSingleComponent

  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})  
export class AppModule { }
