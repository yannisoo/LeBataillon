import { Component, OnInit, Input } from '@angular/core';
import { ApibillService} from '../../api/api-bill.service';
import {Router} from "@angular/router";
import {ApiprojectService} from "../../api/api-project.service";

@Component({
  selector: 'app-project-main-empty',
  templateUrl: './project-main-empty.component.html',
  styleUrls: ['./project-main-empty.component.sass']
})
export class ProjectMainEmptyComponent implements OnInit {
  @Input() Project: any;
  @Input() Bill: any;

  constructor(
    public apiBill: ApibillService,
    public apiProject: ApiprojectService,
    public router: Router,
  ) { }

  ngOnInit() {
  }

}
