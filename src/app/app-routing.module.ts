import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { FormComponent } from './create-project/form/form.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';
import { MainComponent } from './home/main/main.component';
import { LoginComponent } from './login/login.component'
import {AuthGuard} from './auth/auth.guard';

const routes: Routes = [
  { path: 'project-single', component: ProjectSingleComponent, canActivate: [AuthGuard]},
  { path: 'create-project', component: FormComponent, canActivate: [AuthGuard]},
  { path: '', component: MainComponent, canActivate: [AuthGuard]},
  { path: 'login', component: LoginComponent}
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
