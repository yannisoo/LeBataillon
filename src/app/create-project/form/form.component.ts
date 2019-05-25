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
    this.api.createProject(this.Project).subscribe((data: {}) => {
    this.router.navigate(['/Project/{{this.Project.id}}'])
  })
}

}
