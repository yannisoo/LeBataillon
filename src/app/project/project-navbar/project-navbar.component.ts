import { Component, OnInit, Input } from '@angular/core';
import {ActivatedRoute, Router} from "@angular/router";
import {ApibillService} from "../../api/api-bill.service";
import { ApiQuotationService } from 'src/app/api/api-quotation.service';

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

  Bill: any = [];
  selected: any = [];
  Quotation: any = [];

  constructor(
      private route: ActivatedRoute,
      public apiBill: ApibillService,
      public router: Router,
      public apiQuotation: ApiQuotationService,
  ) {
    this.route.params.subscribe( params =>  this.loadBill(params['id']));
      this.route.params.subscribe( params =>  this.loadQuotation(params['id']));
  }

  ngOnInit() {
  }

  loadBill(id){
    return this.apiBill.getBillsByProjectId(id).subscribe((data: {}) => {
      this.Bill = data;
      console.log(this.Bill);
    })
  }
  loadQuotation(id){
    return this.apiQuotation.getQuotationsByProjectId(id).subscribe((data: {}) => {
      this.Quotation = data;
      console.log(this.Bill);
    })
  }
  onSelect(id): void {
  this.selected = id;
}
}
