import { Component, OnInit } from '@angular/core';
import { ApiprojectService } from '../../api/api-project.service';
import { Project } from 'src/app/api/class/project';


@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.sass']
})
export class MainComponent implements OnInit {
Project: any = [];
  constructor(
    public api: ApiprojectService
  ) { }



  ngOnInit() {

    this.loadProjects()

  }
  loadProjects(){
    return this.api.getProjectByUserId(localStorage.getItem('token')).subscribe((data: {})=>{
      //this.Project = data;
      console.log('ca marche')
    })
  }

}
