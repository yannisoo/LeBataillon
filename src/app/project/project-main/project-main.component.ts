import { Component, OnInit, Input } from '@angular/core';
import { ApibillService } from '../../api/api-bill.service';
import {Router} from '@angular/router';
import { ApiprojectService } from '../../api/api-project.service';
import { ApiQuotationService } from '../../api/api-quotation.service';
import {renderComponent} from "@angular/core/src/render3";


@Component({
  selector: 'app-project-main',
  templateUrl: './project-main.component.html',
  styleUrls: ['./project-main.component.sass']
})
export class ProjectMainComponent implements OnInit {
  @Input() Project: any;
  @Input() selected: any;
  @Input() Bill: any;
  @Input() Quotation: any;
  @Input() url:any;

  constructor(
      public apiBill: ApibillService,
      public apiQuotation: ApiQuotationService,
      public apiProject: ApiprojectService,
      public router: Router,
  ) {

  }

  ngOnInit() {

}
  sendBill(id) {
    if (window.confirm('Confirmez-vous l\'envoi de la facture ?')) {
      this.apiBill.sendBill(this.selected.id).subscribe((data: {}) => {
        console.log(this.Project);
      });
    }
  }

  sendQuotation(id) {
    if (window.confirm('Confirmez-vous l\'envoi du devis ?')) {
      this.apiQuotation.sendQuotation(this.selected.id).subscribe((data: {}) => {
        console.log(this.Project);
      });
    }
  }

  updateRemaining(id) {
    this.Project.remaining = this.Project.remaining - this.selected.price_total;
    console.log(this.Project.remaining);
    console.log(this.Project)
;
    if (window.confirm('La facture a-t-elle bien été payé ?')) {

      this.selected.status = 0;

      this.apiProject.updateProject(this.Project.id, this.Project).subscribe((data: {}) => {
        console.log(this.Project);
      });
      this.apiBill.updateBill(this.selected.id, this.selected).subscribe((data: {}) => {
        console.log(this.selected);
      });
    }
  }
}
