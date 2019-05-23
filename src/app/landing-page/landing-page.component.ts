import { Component, OnInit } from '@angular/core';
import { ApiprojectService } from '../api/api-project.service'

@Component({
  selector: 'app-landing-page',
  templateUrl: './landing-page.component.html',
  styleUrls: ['./landing-page.component.sass']
})
export class LandingPageComponent implements OnInit {
Project: any =  [];
  constructor(private api : ApiprojectService ) { }

  ngOnInit() {
    this.loadProject()
  }
    loadProject(){
      return this.api.getProjects().subscribe((data: {})=>{
        this.Project = data;
    })
}
}
