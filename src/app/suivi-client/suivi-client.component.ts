import { Component, OnInit } from '@angular/core';
import { ApiprojectService } from '../api/api-project.service';


@Component({
  selector: 'app-suivi-client',
  templateUrl: './suivi-client.component.html',
  styleUrls: ['./suivi-client.component.sass']
})
export class SuiviClientComponent implements OnInit {
  Project: any = [];
    constructor(
      public api: ApiprojectService
    ) { }
  
  
  ngOnInit() {
    this.loadProjects()

  }
  loadProjects(){
    return this.api.getProjects().subscribe((data: {})=>{
      this.Project = data;
    })
  }
  

}
