import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {AuthGuard} from './auth/auth.guard';

import { LandingPageComponent } from './landing-page/landing-page.component'
import { FormComponent } from './create-project/form/form.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';
import { MainComponent } from './home/main/main.component';
import { LoginComponent } from './login/login.component'
import { SuiviClientComponent } from './suivi-client/suivi-client.component';
import { PdfGenComponent } from './create-bill/pdf-gen/pdf-gen.component';

const routes: Routes = [

  { path: 'project/:id', component: ProjectSingleComponent, canActivate:[AuthGuard]},
  { path: 'create-project', component: FormComponent, canActivate:[AuthGuard] },
  { path: 'projects', component: MainComponent, canActivate:[AuthGuard] },
  { path: '', component: LandingPageComponent, canActivate:[AuthGuard] },
  { path: 'login', component: LoginComponent},
  { path: 'suivi-client', component: SuiviClientComponent,canActivate:[AuthGuard]},
  { path: 'create-bill', component: PdfGenComponent, canActivate:[AuthGuard]}
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
