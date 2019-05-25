import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {AuthGuard} from './auth/auth.guard';

import { LandingPageComponent } from './landing-page/landing-page.component'
import { FormComponent } from './create-project/form/form.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';
import { MainComponent } from './home/main/main.component';
import { SuiviClientComponent } from './suivi-client/suivi-client.component';
import { PdfGenComponent } from './create-bill/pdf-gen/pdf-gen.component';
import { LoginComponent } from './login/login.component';
import { ListeComponent } from './liste-devis/liste/liste.component';

const routes: Routes = [

  { path: 'project/:id', component: ProjectSingleComponent},
  { path: 'create-project', component: FormComponent},
  { path: 'projects', component: MainComponent },
  { path: '', component: LandingPageComponent },
  { path: 'devis', component: ListeComponent },
  { path: 'login', component: LoginComponent},
  { path: 'suivi-client', component: SuiviClientComponent},
  { path: 'create-bill', component: PdfGenComponent}
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
