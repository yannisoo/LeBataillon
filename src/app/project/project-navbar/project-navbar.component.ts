import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-project-navbar',
  templateUrl: './project-navbar.component.html',
  styleUrls: ['./project-navbar.component.sass']
})
export class ProjectNavbarComponent implements OnInit {
  @Input() Project = {
    id: '',
    userid: '',
    name: '',
    description: '',
    address: '',
    city: '',
    postcode: '',
    phone: '',
    email: '',
    status: '',
    contact: '',
  }
  constructor() { }

  ngOnInit() {
  }

}
