import { Component, OnInit } from '@angular/core';
import { ApiprojectService} from '../../api/api-project.service';
import {ActivatedRoute, Router} from '@angular/router';


@Component({
  selector: 'app-project-single',
  templateUrl: './project-single.component.html',
  styleUrls: ['./project-single.component.sass']
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
      console.log(this.Project);
    })
  }

}
