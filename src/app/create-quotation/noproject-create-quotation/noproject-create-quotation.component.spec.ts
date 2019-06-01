import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NoprojectCreateQuotationComponent } from './noproject-create-quotation.component';

describe('NoprojectCreateQuotationComponent', () => {
  let component: NoprojectCreateQuotationComponent;
  let fixture: ComponentFixture<NoprojectCreateQuotationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NoprojectCreateQuotationComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NoprojectCreateQuotationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
