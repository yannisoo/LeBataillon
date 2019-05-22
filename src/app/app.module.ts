import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';


import {AuthService} from './auth/auth.service';
import {AuthGuard} from './auth/auth.guard';
import {TokenInterceptorService} from './auth/token-interceptor.service';

import { LoginComponent} from './login/login.component';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { MainComponent } from './home/main/main.component';
import { FooterComponent } from './footer/footer.component';
import { ListeComponent } from './liste-devis/liste/liste.component';
import { FormComponent } from './create-project/form/form.component';
import { ProjectNavbarComponent } from './project/project-navbar/project-navbar.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';
import { EventService } from './auth/event.service'


@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    MainComponent,
    FooterComponent,
    ListeComponent,
    FormComponent,
    ProjectNavbarComponent,
    ProjectSingleComponent,
    LoginComponent

  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule,
  ],
  providers: [AuthService, AuthGuard, EventService,{
       provide: HTTP_INTERCEPTORS,
       useClass: TokenInterceptorService,
       multi: true
     }],
  bootstrap: [AppComponent]
})
export class AppModule { }
