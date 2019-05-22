import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ProjectSingleComponent } from './project/project-single/project-single.component';


const routes: Routes = [
  { path: 'project-single', component: ProjectSingleComponent},
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
