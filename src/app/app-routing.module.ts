import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AuthGuard } from './auth/auth.guard';

import { LandingPageComponent } from './landing-page/landing-page.component'
import { FormComponent } from './create-project/form/form.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';
import { MainComponent } from './home/main/main.component';

import { RegisterComponent } from './register/register.component'
import { SuiviClientComponent } from './suivi-client/suivi-client.component';
import { LoginComponent } from './login/login.component';
import { ListeComponent } from './liste-devis/liste/liste.component';
import { CreateQuotationComponent } from './create-quotation/create-quotation.component';
import { NoprojectCreateQuotationComponent } from './create-quotation/noproject-create-quotation/noproject-create-quotation.component';
import { CreateBillComponent } from './create-bill/create-bill.component';
import { ModifyBillComponent } from './modify-bill/modify-bill.component';
import { ModifyQuotationComponent } from './modify-quotation/modify-quotation.component';
import { AgencyInfoComponent } from './agency-info/agency-info.component';


const routes: Routes = [

  { path: 'register', component: RegisterComponent },
  { path: 'project/:id', component: ProjectSingleComponent, canActivate: [AuthGuard] },
  { path: 'create-project', component: FormComponent, canActivate: [AuthGuard] },
  { path: 'user', component: RegisterComponent, canActivate: [AuthGuard] },
  { path: 'login', component: LoginComponent },
  { path: 'projects', component: MainComponent, canActivate: [AuthGuard] },
  { path: '', component: LandingPageComponent, canActivate: [AuthGuard] },
  { path: 'devis', component: ListeComponent, canActivate: [AuthGuard] },
  { path: 'suivi-client', component: SuiviClientComponent, canActivate: [AuthGuard] },
  { path: 'modify-quotation/:id', component: ModifyQuotationComponent, canActivate: [AuthGuard] },
  { path: 'create-quotation/:id', component: CreateQuotationComponent, canActivate: [AuthGuard] },
  { path: 'modify-bill/:id', component: ModifyBillComponent, canActivate: [AuthGuard] },
  { path: 'create-bill/:id', component: CreateBillComponent, canActivate: [AuthGuard] },
  { path: 'create-quotation', component: NoprojectCreateQuotationComponent, canActivate: [AuthGuard] },
  { path: 'agency', component: AgencyInfoComponent, canActivate: [AuthGuard] }

];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
