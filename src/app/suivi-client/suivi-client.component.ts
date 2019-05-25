import { Component, OnInit } from '@angular/core';
import { ApibillService } from '../api/api-bill.service';


@Component({
  selector: 'app-suivi-client',
  templateUrl: './suivi-client.component.html',
  styleUrls: ['./suivi-client.component.sass']
})
export class SuiviClientComponent implements OnInit {
  Bill: any = [];
    constructor(
      public api: ApibillService
    ) { }


  ngOnInit() {
    this.loadProjects()

  }
  loadProjects(){
    return this.api.getBills().subscribe((data: {})=>{
      this.Bill = data;
    })
  }


}
