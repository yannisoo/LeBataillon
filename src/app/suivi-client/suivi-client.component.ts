import { Component, OnInit } from '@angular/core';
import { ApibillService } from '../api/api-bill.service';
import {ApiprojectService} from "../api/api-project.service";


@Component({
  selector: 'app-suivi-client',
  templateUrl: './suivi-client.component.html',
  styleUrls: ['./suivi-client.component.sass']
})
export class SuiviClientComponent implements OnInit {
  Bill: any = [];
  Project: any = [];
    constructor(
      public api: ApibillService,
      public api2: ApiprojectService,
    ) { }

  ngOnInit() {
    this.loadBills();
    this.loadProjects();

  }

  loadBills() {
    return this.api.getBills().subscribe((data: {}) => {
      this.Bill = data;
    });
  }

  loadProjects() {
    return this.api2.getProjects().subscribe((data: {}) => {
      this.Project = data;
      this.fuck(this.Bill)
    });
  }

  fuck(Bill){
      console.log('test')

    for (Bill of Bill) {
        console.log(Bill)
      var tempProj = this.Project.find(item => item.id === Bill.project_id)
      console.log(tempProj)
      Bill.xpatate = tempProj.remaining
      console
    }

  }


}
