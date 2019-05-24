import { Component, OnInit } from '@angular/core';
import { ApiprojectService } from '../../api/api-project.service';


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
    return this.api.getProjects().subscribe((data: {})=>{
      this.Project = data;
    })
  }

}
