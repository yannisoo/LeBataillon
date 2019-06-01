import { Component, OnInit } from '@angular/core';
import {ApiagencyService} from "../api/api-agency.service";
import {ActivatedRoute, Router} from "@angular/router";

@Component({
  selector: 'app-agency-info',
  templateUrl: './agency-info.component.html',
  styleUrls: ['./agency-info.component.sass']
})
export class AgencyInfoComponent implements OnInit {

  Agency: any = {};

  constructor(
      private route: ActivatedRoute,
      public apiAgency: ApiagencyService,
      public router: Router,
  ) {
  }

  ngOnInit() {
    this.route.params.subscribe(params => this.loadAgency());
  }

  loadAgency() {
    return this.apiAgency.getAgencys().subscribe((data: {}) => {
      this.Agency = data[0];
    });
  }

  updateAgency(){
    this.apiAgency.updateAgency(this.Agency.id, this.Agency).subscribe((data: {}) => {

    });
  }

}
