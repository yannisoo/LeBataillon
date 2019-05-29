import { Component, OnInit } from '@angular/core';
import { ApiQuotationService } from '../../api/api-quotation.service';

@Component({
  selector: 'app-liste',
  templateUrl: './liste.component.html',
  styleUrls: ['./liste.component.sass']
})
export class ListeComponent implements OnInit {
Quotation: any = [];
  constructor(
    public api: ApiQuotationService
  ) { }

  ngOnInit() {
      this.loadQuotations()
  }
  loadQuotations(){
    return this.api.getQuotations().subscribe((data: {})=>{
      this.Quotation = data;
      console.log(this.Quotation)
    })
  }

}
