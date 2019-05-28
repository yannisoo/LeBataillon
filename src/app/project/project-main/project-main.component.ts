import { Component, OnInit, Input } from '@angular/core';
import { ApibillService} from '../../api/api-bill.service';
import {Router} from '@angular/router';
import {ApiprojectService} from '../../api/api-project.service';


@Component({
  selector: 'app-project-main',
  templateUrl: './project-main.component.html',
  styleUrls: ['./project-main.component.sass']
})
export class ProjectMainComponent implements OnInit {
  @Input() Project: any;
  @Input() selected: any;
  @Input() Bill: any;

  constructor(
      public apiBill: ApibillService,
      public apiProject: ApiprojectService,
      public router: Router,
  ) {
  }

  ngOnInit() {

  }

  // delBill(id) {
  // return this.api.deleteBill(id).subscribe((data: {}) => {
  //
  // })
  // }

  updateRemaining(id) {
    console.log(this.Project.remaining);
    console.log(this.selected.price_total);
    console.log(this.selected);

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
