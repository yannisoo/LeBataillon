import { Component, OnInit } from '@angular/core';
import { ApiprojectService} from '../../api/api-project.service';
import {ActivatedRoute, Router} from '@angular/router';


@Component({
  selector: 'app-project-main',
  templateUrl: './project-main.component.html',
  styleUrls: ['./project-main.component.sass']
})
export class ProjectSingleComponent implements OnInit {

  Project: any = {};
  constructor(
      private route: ActivatedRoute,
      public api: ApiprojectService,
      public router: Router,
  ) {
    this.route.params.subscribe( params =>  this.loadProject(params['id']));
  }

  ngOnInit() {

  }
  loadProject(id){
    return this.api.getProjectById(id).subscribe((data: {}) => {
      this.Project = data;
    })
  }

}
