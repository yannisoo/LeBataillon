import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {AuthGuard} from './auth/auth.guard';

import { LandingPageComponent } from './landing-page/landing-page.component'
import { FormComponent } from './create-project/form/form.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';
import { MainComponent } from './home/main/main.component';

import { RegisterComponent} from './register/register.component'
import { SuiviClientComponent } from './suivi-client/suivi-client.component';
import { LoginComponent } from './login/login.component';
import { ListeComponent } from './liste-devis/liste/liste.component';
import { CreateQuotationComponent } from './create-quotation/create-quotation.component';
import { NoprojectCreateQuotationComponent } from './create-quotation/noproject-create-quotation/noproject-create-quotation.component';
import {CreateBillComponent} from './create-bill/create-bill.component';
import {ModifyBillComponent} from './modify-bill/modify-bill.component';
import { ModifyQuotationComponent } from './modify-quotation/modify-quotation.component';
import {AgencyInfoComponent} from './agency-info/agency-info.component';


const routes: Routes = [

  { path: 'project/:id', component: ProjectSingleComponent},
  { path: 'create-project', component: FormComponent},
  { path: 'user', component: RegisterComponent},
  { path: 'login', component: LoginComponent},
  { path: 'projects', component: MainComponent },
  { path: '', component: LandingPageComponent },
  { path: 'devis', component: ListeComponent },
  { path: 'suivi-client', component: SuiviClientComponent},
  { path: 'modify-quotation/:id', component: ModifyQuotationComponent},
  { path: 'create-quotation/:id', component: CreateQuotationComponent},
  { path: 'modify-bill/:id', component: ModifyBillComponent},
  { path: 'create-bill/:id', component: CreateBillComponent},
  { path: 'create-quotation', component: NoprojectCreateQuotationComponent},
  { path: 'agency', component: AgencyInfoComponent}

];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
