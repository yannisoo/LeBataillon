import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { PdfViewerModule } from 'ng2-pdf-viewer';
import { ReactiveFormsModule } from '@angular/forms';
// import { MatButtonModule } from '@angular/material';

import { EventService } from './auth/event.service';
import {AuthService} from './auth/auth.service';
import {AuthGuard} from './auth/auth.guard';
import {TokenInterceptorService} from './auth/token-interceptor.service';

import { LoginComponent} from './login/login.component';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { MainComponent } from './home/main/main.component';
import { ListeComponent } from './liste-devis/liste/liste.component';
import { FormComponent } from './create-project/form/form.component';
import { ProjectNavbarComponent } from './project/project-navbar/project-navbar.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';
import { ProjectMainComponent } from './project/project-main/project-main.component'
import { LandingPageComponent } from './landing-page/landing-page.component';
import { RegisterComponent } from './register/register.component'
import { SuiviClientComponent } from './suivi-client/suivi-client.component';
import { PdfGenComponent } from './create-bill/pdf-gen/pdf-gen.component';
import { ProjectMainEmptyComponent } from './project/project-main-empty/project-main-empty.component';
import { CreateQuotationComponent } from './create-quotation/create-quotation.component'


import { FileSelectDirective } from 'ng2-file-upload';


import { FilterPipe } from './pipe/search/filter.pipe';
import { NoprojectCreateQuotationComponent } from './create-quotation/noproject-create-quotation/noproject-create-quotation.component'



@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    MainComponent,
    ListeComponent,
    FormComponent,
    ProjectNavbarComponent,
    ProjectSingleComponent,
    LoginComponent,
    ProjectMainComponent,
    LandingPageComponent,
    RegisterComponent,
    SuiviClientComponent,
    PdfGenComponent,
    FileSelectDirective,
    FilterPipe,
    ProjectMainEmptyComponent,
    CreateQuotationComponent,
    NoprojectCreateQuotationComponent



  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    PdfViewerModule,
    HttpClientModule,
    ReactiveFormsModule,
    // MatButtonModule
  ],
  providers: [AuthService, AuthGuard, EventService,{
       provide: HTTP_INTERCEPTORS,
       useClass: TokenInterceptorService,
       multi: true
     }],
  bootstrap: [AppComponent]
})
export class AppModule { }
