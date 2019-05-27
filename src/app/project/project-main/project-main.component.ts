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
  @Input() Project = {
    id: '',
    userid: '',
    name: '',
    description: '',
    address: '',
    city: '',
    postcode: '',
    phone: '',
    email: '',
    status: '',
    contact: '',
    remaining: '' ,
  }
  @Input() selected = {
    total_price: '',
    project_id: '',
  }

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

    //console.log(this.Project)
    //let projectRemaining: any = this.Project.remaining
    //console.log(projectRemaining)
    //let billTotalPrice: any = this.selected.total_price
    //console.log(billTotalPrice)

    console.log(this.Project.remaining)
    console.log(this.selected.total_price)

    this.Project.remaining = this.Project.remaining - this.selected.total_price
    console.log(this.Project.remaining)
    console.log(this.Project)


    this.apiProject.updateProject(this.Project.id, this.Project).subscribe((data: {}) => {
      this.Project = data;
      console.log(this.Project)
    })

  }
}
