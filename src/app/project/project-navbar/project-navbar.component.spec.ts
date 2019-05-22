import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProjectNavbarComponent } from './project-navbar.component';

describe('ProjectNavbarComponent', () => {
  let component: ProjectNavbarComponent;
  let fixture: ComponentFixture<ProjectNavbarComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProjectNavbarComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProjectNavbarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
