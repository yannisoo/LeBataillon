import { Component, OnInit, Input } from '@angular/core';
import { ApiprojectService } from '../../api/api-project.service';
import {  Router } from '@angular/router';
import { ApiagencyService } from '../../api/api-agency.service';
import { ApiQuotationService } from '../../api/api-quotation.service';
import { formatDate } from '@angular/common';
@Component({
  selector: 'app-noproject-create-quotation',
  templateUrl: './noproject-create-quotation.component.html',
  styleUrls: ['./noproject-create-quotation.component.sass']
})
export class NoprojectCreateQuotationComponent implements OnInit {
  Project: any = {};
  Agency: any = {};
  @Input('ngModel') Quotation: any = {};
  myDate = new Date();
  uniqueNumber = Math.floor(Math.random() * 9999)

  constructor(
    public apiProject: ApiprojectService,
    public apiAgency: ApiagencyService,
    public apiQuotation: ApiQuotationService,
    public router: Router,
  ) {

  }


    ngOnInit() {
      this.loadAgency();
      console.log(this.Quotation.quotation_number);
    }
    loadProject(id) {
      return this.apiProject.getProjectById(id).subscribe((data: {}) => {
        this.Project = data;
        console.log(this.Project);
      })
    }
    projectId(id){
      this.Quotation.project_id = id
    }
    loadAgency() {
      return this.apiAgency.getAgencys().subscribe((data: {}) => {
        this.Agency = data[0];
      })
    }
    totalprice(){
      this.Quotation.pricetotal = (this.Quotation.unit_price1  * this.Quotation.quantity1) + (this.Quotation.unit_price2 * this.Quotation.quantity2) + (this.Quotation.unit_price3 * this.Quotation.quantity3) +(this.Quotation.unit_price4 * this.Quotation.quantity4) + (this.Quotation.unit_price5 * this.Quotation.quantity5) + (this.Quotation.unit_price6 * this.Quotation.quantity6) + (this.Quotation.unit_price7 * this.Quotation.quantity7) + (this.Quotation.unit_price8 * this.Quotation.quantity8) + (this.Quotation.unit_price9 * this.Quotation.quantity9) + (this.Quotation.unit_price10 * this.Quotation.quantity10) + (this.Quotation.unit_price11 * this.Quotation.quantity11) + (this.Quotation.unit_price12 * this.Quotation.quantity12) + (this.Quotation.unit_price13 * this.Quotation.quantity13) + (this.Quotation.unit_price14 * this.Quotation.quantity14) + (this.Quotation.unit_price15 * this.Quotation.quantity15);
      console.log(this.Quotation.pricetotal);
    }
    sendQuotation(){
      this.Quotation.quotation_number = "Devis_" + formatDate(this.myDate, 'ddMMyy', 'en') + "_" + this.Project.name + "_" + this.uniqueNumber;
      this.Quotation.pdf_path = '/' + this.Project.name + '/quotation/' + this.Quotation.quotation_number + ".pdf";
      this.apiQuotation.createQuotationNan(this.Quotation).subscribe((data: {}) => {
      this.router.navigate(['/projects'])
    })}

}
