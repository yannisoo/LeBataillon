import { Component, OnInit, Input } from '@angular/core';
import { ApibillService} from '../../api/api-bill.service';
import {Router} from "@angular/router";


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
  }
  @Input() selected = {}

  constructor(
      public api: ApibillService,
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

}
