import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { FormComponent } from './create-project/form/form.component';
import { ProjectSingleComponent } from './project/project-single/project-single.component';
import { MainComponent } from './home/main/main.component';


const routes: Routes = [
  { path: 'project-single', component: ProjectSingleComponent},
  { path: 'create-project', component: FormComponent},
  { path: '', component: MainComponent}
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
