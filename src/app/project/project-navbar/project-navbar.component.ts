import { Component, OnInit, Input } from '@angular/core';
import {Bill} from "../../api/class/bill";
import {ActivatedRoute, Router} from "@angular/router";
import {ApibillService} from "../../api/api-bill.service";

@Component({
  selector: 'app-project-navbar',
  templateUrl: './project-navbar.component.html',
  styleUrls: ['./project-navbar.component.sass']
})
export class ProjectNavbarComponent implements OnInit {
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

  Bill: any = {};

  selectedBill: Bill;

  constructor(
      private route: ActivatedRoute,
      public api: ApibillService,
      public router: Router,
  ) {
    this.route.params.subscribe( params =>  this.loadBill(params['id']));
  }

  ngOnInit() {
  }

  loadBill(id){
    return this.api.getBillsByProjectId(id).subscribe((data: {}) => {
      this.Bill = data;
      console.log(this.Bill);
    })
  }

  onSelect(bill: Bill): void {
    this.selectedBill = bill;
    console.log(bill);
  }
}
