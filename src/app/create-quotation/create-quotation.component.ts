import { Component, OnInit, Input } from '@angular/core';
import { ApiprojectService } from '../api/api-project.service';
import { ActivatedRoute, Router } from '@angular/router';
import { ApiagencyService } from '../api/api-agency.service';
import { ApiQuotationService } from '../api/api-quotation.service';
import { formatDate } from '@angular/common';
@Component({
  selector: 'app-create-quotation',
  templateUrl: './create-quotation.component.html',
  styleUrls: ['./create-quotation.component.sass']
})
export class CreateQuotationComponent implements OnInit {
  Project: any = {};
  Agency: any = {};
  @Input('ngModel') Quotation: any = {};
  myDate = new Date();
  uniqueNumber = Math.floor(Math.random() * 99999);




  constructor(
    private route: ActivatedRoute,
    public apiProject: ApiprojectService,
    public apiAgency: ApiagencyService,
    public apiQuotation: ApiQuotationService,
    public router: Router,
  ) {

  }

  ngOnInit() {
    this.loadAgency();

    this.route.params.subscribe(params => this.loadProject(params.id));
    this.route.params.subscribe(params => this.projectId(params.id));
    console.log(this.Quotation.quotation_number);
  }
  loadProject(id) {
    return this.apiProject.getProjectById(id).subscribe((data: {}) => {
      this.Project = data;
      console.log(this.Project);
    });
  }
  projectId(id) {
    this.Quotation.project_id = id;
  }
  loadAgency() {
    return this.apiAgency.getAgencys().subscribe((data: {}) => {
      this.Agency = data[0];
    });
  }
  totalprice() {
    let total1 = this.Quotation.unit_price1 * this.Quotation.quantity1;
    let total2 = this.Quotation.unit_price2 * this.Quotation.quantity2;
    let total3 = this.Quotation.unit_price3 * this.Quotation.quantity3;
    let total4 = this.Quotation.unit_price4 * this.Quotation.quantity4;
    let total5 = this.Quotation.unit_price5 * this.Quotation.quantity5;
    let total6 = this.Quotation.unit_price6 * this.Quotation.quantity6;
    let total7 = this.Quotation.unit_price7 * this.Quotation.quantity7;
    let total8 = this.Quotation.unit_price8 * this.Quotation.quantity8;
    let total9 = this.Quotation.unit_price9 * this.Quotation.quantity9;
    let total10 = this.Quotation.unit_price10 * this.Quotation.quantity10;
    let total11 = this.Quotation.unit_price11 * this.Quotation.quantity11;
    let total12 = this.Quotation.unit_price12 * this.Quotation.quantity12;
    let total13 = this.Quotation.unit_price13 * this.Quotation.quantity13;
    let total14 = this.Quotation.unit_price14 * this.Quotation.quantity14;
    let total15 = this.Quotation.unit_price15 * this.Quotation.quantity15;

    if (isNaN(total3)) {
      total3 = 0;
    }

    if (isNaN(total4)) {
      total4 = 0;
    }

    if (isNaN(total5)) {
      total5 = 0;
    }

    if (isNaN(total6)) {
      total6 = 0;
    }

    if (isNaN(total7)) {
      total7 = 0;
    }

    if (isNaN(total8)) {
      total8 = 0;
    }

    if (isNaN(total9)) {
      total9 = 0;
    }

    if (isNaN(total10)) {
      total10 = 0;
    }

    if (isNaN(total11)) {
      total11 = 0;
    }

    if (isNaN(total12)) {
      total12 = 0;
    }

    if (isNaN(total13)) {
      total13 = 0;
    }

    if (isNaN(total14)) {
      total14 = 0;
    }

    if (isNaN(total15)) {
      total15 = 0;
    }
    this.Quotation.price_total = total1 + total2 + total3 + total4 + total5 + total6 + total7 + total8 + total9 + total10 + total11 + total12 + total13 + total14 + total15;
    if (isNaN(this.Quotation.price_total)) {
      this.Quotation.price_total = total1;
    }
    console.log(this.Quotation.price_total);
  }
  sendQuotation() {
    this.Quotation.quotation_number = formatDate(this.myDate, 'ddMMyy', 'en') + '_' + this.Project.name + '_' + this.uniqueNumber;
    this.Quotation.pdf_path = '/' + this.Project.name + '/quotation/Devis_' + this.Quotation.quotation_number + '.pdf';
    this.Quotation.status = 1;
    this.Quotation.statusSend = 0;
    this.Quotation.created_at = this.myDate;
    this.Project.total_price = 0;
    this.Project.remaining = 0;
    this.Project.total_price += this.Quotation.price_total;
    this.Project.remaining += this.Quotation.price_total;
    console.log(this.Quotation);
    console.log(this.Project)
    this.apiQuotation.createQuotation(this.Quotation).subscribe((data: {}) => {


      this.apiProject.updateProject(this.Project.id, this.Project).subscribe((data: {}) => {
        this.router.navigate(['/project/', this.Project.id]);
      });
    });
  }

}
