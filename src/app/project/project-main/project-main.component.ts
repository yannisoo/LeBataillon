import { Component, OnInit, Input } from '@angular/core';
import { ApibillService} from '../../api/api-bill.service';
import {Router} from "@angular/router";
import {ApiprojectService} from "../../api/api-project.service";


@Component({
  selector: 'app-project-main',
  templateUrl: './project-main.component.html',
  styleUrls: ['./project-main.component.sass']
})
export class ProjectMainComponent implements OnInit {
  @Input() Project: any;
  @Input() selected: any;
  @Input() Bill: any;

  constructor(
      public apiBill: ApibillService,
      public apiProject: ApiprojectService,
      public router: Router,
  ) {
  }

  ngOnInit() {

  }

  // delBill(id) {
  // return this.api.deleteBill(id).subscribe((data: {}) => {
  //
  // })
  // }

  updateRemaining(id){
    console.log(this.Project.remaining)
    console.log(this.selected.total_price)
    console.log(this.selected)

    this.Project.remaining = this.Project.remaining - this.selected.total_price
    console.log(this.Project.remaining)
    console.log(this.Project)
    this.selected.status = 1

   // this.selected.created_at = new Date(this.selected.created_at);

    console.log(this.selected.created_at)

    if(window.confirm('La facture a-t-elle bien été payé ?')) {
      this.apiProject.updateProject(this.Project.id, this.Project).subscribe((data: {}) => {
        this.Project = data;
        console.log(this.Project)
      })
      //this.apiBill.updateBill(this.selected.id, this.selected).subscribe((data: {}) => {
        //this.selected = data;
        //console.log(this.selected)
      //})
    }
  }
}
