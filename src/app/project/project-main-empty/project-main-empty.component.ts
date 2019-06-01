import { Component, OnInit, Input } from '@angular/core';
import { ApibillService} from '../../api/api-bill.service';
import { ApiQuotationService} from '../../api/api-quotation.service';
import {Router} from '@angular/router';
import {ApiprojectService} from '../../api/api-project.service';

@Component({
  selector: 'app-project-main-empty',
  templateUrl: './project-main-empty.component.html',
  styleUrls: ['./project-main-empty.component.sass']
})
export class ProjectMainEmptyComponent implements OnInit {
  @Input() Project: any;
  @Input() Bill: any;
  @Input() Quotation: any;

  constructor(
    public apiBill: ApibillService,
    public apiQuotation: ApiQuotationService,
    public apiProject: ApiprojectService,
    public router: Router,
  ) { }

  ngOnInit() {

  }

  SendProblem(){
      return this.apiQuotation.sendProblem(this.Project.id).subscribe((data: {}) => {
      this.Quotation = data;
      console.log(this.Bill);
  })}

}
