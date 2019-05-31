import { Component, OnInit, Input } from '@angular/core';
import {ActivatedRoute, Router} from "@angular/router";
import {ApibillService} from "../../api/api-bill.service";
import { ApiQuotationService } from 'src/app/api/api-quotation.service';
import { DomSanitizer } from '@angular/platform-browser';

@Component({
  selector: 'app-project-navbar',
  templateUrl: './project-navbar.component.html',
  styleUrls: ['./project-navbar.component.sass']
})
export class ProjectNavbarComponent implements OnInit {
  @Input() Project = {}

  Bill: any = [];
  selected: any;
  Quotation: any = [];
  url:any;
  dangerousVideoUrl: any;

  constructor(
      private route: ActivatedRoute,
      public apiBill: ApibillService,
      public router: Router,
      public apiQuotation: ApiQuotationService,
      public sanitizer: DomSanitizer
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
  onSelect(object): void {
  this.selected = object;
  this.dangerousVideoUrl = "http://127.0.0.1:8001" + this.selected.pdf_path;
  this.url =
      this.sanitizer.bypassSecurityTrustResourceUrl(this.dangerousVideoUrl);
}
unselected(){
  this.selected = 0;
}
}
