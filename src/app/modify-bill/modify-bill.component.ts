import {Component, Input, OnInit} from '@angular/core';
import {ActivatedRoute, Router} from '@angular/router';
import {ApiprojectService} from '../api/api-project.service';
import {ApiagencyService} from '../api/api-agency.service';
import {formatDate} from '@angular/common';
import {ApibillService} from '../api/api-bill.service';

@Component({
  selector: 'app-modify-bill',
  templateUrl: './modify-bill.component.html',
  styleUrls: ['./modify-bill.component.sass']
})
export class ModifyBillComponent implements OnInit {
  Project: any = {};
  Agency: any = {};
  @Input('ngModel') Bill: any = {};
  myDate = new Date();
  uniqueNumber = Math.floor(Math.random() * 9999);




  constructor(
      private route: ActivatedRoute,
      public apiProject: ApiprojectService,
      public apiAgency: ApiagencyService,
      public apiBill: ApibillService,
      public router: Router,
  ) {

  }

  ngOnInit() {
    this.loadAgency();

    this.route.params.subscribe(params => this.loadBill(params.id));
    console.log(this.Bill.bill_number);
  }
  loadBill(id) {
    return this.apiBill.getBillById(id).subscribe((data: {}) => {
      this.Bill = data;
      this.loadProject(this.Bill.project_id);
      console.log(this.Bill);
    });
  }
  loadProject(id) {
    return this.apiProject.getProjectById(id).subscribe((data: {}) => {
      this.Project = data;

      console.log(this.Project);
    });
  }
  loadAgency() {
    return this.apiAgency.getAgencys().subscribe((data: {}) => {
      this.Agency = data[0];
    });
  }
  totalprice() {
    let totale1 = +this.Bill.unit_price1;
    let totale2 = +this.Bill.unit_price2;
    let totale3 = +this.Bill.unit_price3;
    let totale4 = +this.Bill.unit_price4;
    let totale5 = +this.Bill.unit_price5;
    let totale6 = +this.Bill.unit_price6;
    let totale7 = +this.Bill.unit_price7;
    let totale8 = +this.Bill.unit_price8;
    let totale9 = +this.Bill.unit_price9;
    let totale10 = +this.Bill.unit_price10;
    let totale11 = +this.Bill.unit_price11;
    let totale12 = +this.Bill.unit_price12;
    let totale13 = +this.Bill.unit_price13;
    let totale14 = +this.Bill.unit_price14;
    let totale15 = +this.Bill.unit_price15;

    if (isNaN(totale3)) {
      totale3 = 0;
    }

    if (isNaN(totale4)) {
      totale4 = 0;
    }

    if (isNaN(totale5)) {
      totale5 = 0;
    }

    if (isNaN(totale6)) {
      totale6 = 0;
    }

    if (isNaN(totale7)) {
      totale7 = 0;
    }

    if (isNaN(totale8)) {
      totale8 = 0;
    }

    if (isNaN(totale9)) {
      totale9 = 0;
    }

    if (isNaN(totale10)) {
      totale10 = 0;
    }

    if (isNaN(totale11)) {
      totale11 = 0;
    }

    if (isNaN(totale12)) {
      totale12 = 0;
    }

    if (isNaN(totale13)) {
      totale13 = 0;
    }

    if (isNaN(totale14)) {
      totale14 = 0;
    }

    if (isNaN(totale15)) {
      totale15 = 0;
    }
    this.Bill.price_total = +totale1 + totale2 + totale3 + totale4 + totale5 + totale6 + totale7 + totale8 + totale9 + totale10 + totale11 + totale12 + totale13 + totale14 + totale15;
    if (isNaN(this.Bill.price_total)) {
      this.Bill.price_total = totale1;
    }
    console.log(this.Bill.price_total);
  }
  sendBill() {
    console.log(this.Bill.price_total);
    this.Bill.bill_number = formatDate(this.myDate, 'ddMMyy', 'en') + '_' + this.Project.name + '_' + this.uniqueNumber;
    this.Bill.pdf_path = '/' + this.Project.name + '/Bill/Facture_' + this.Bill.bill_number + '.pdf';
    this.Bill.status = 1;
    this.Bill.created_at = this.myDate;
    this.apiBill.updateBill(this.Bill.id ,this.Bill).subscribe((data: {}) => {
      this.router.navigate(['/project/', this.Project.id]);
    }); }

}
