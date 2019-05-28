import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProjectMainEmptyComponent } from './project-main-empty.component';

describe('ProjectMainEmptyComponent', () => {
  let component: ProjectMainEmptyComponent;
  let fixture: ComponentFixture<ProjectMainEmptyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProjectMainEmptyComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProjectMainEmptyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
