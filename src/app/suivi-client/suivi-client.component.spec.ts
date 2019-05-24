import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SuiviClientComponent } from './suivi-client.component';

describe('SuiviClientComponent', () => {
  let component: SuiviClientComponent;
  let fixture: ComponentFixture<SuiviClientComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SuiviClientComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SuiviClientComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
