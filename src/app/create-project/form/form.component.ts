import { Component, OnInit, Input } from '@angular/core';
import { ApiprojectService } from 'src/app/api/api-project.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.sass']
})
export class FormComponent implements OnInit {
  @Input('ngModel') Project: any = {};

  constructor(
    public api: ApiprojectService,
    public router: Router
  ) { }

  ngOnInit() {
  }
  add() {
    this.Project.status = 1
    this.api.createProject(this.Project).subscribe((data: {}) => {
      this.Project = data
      this.router.navigate(['/project/', this.Project.id])
    })
  }

}
