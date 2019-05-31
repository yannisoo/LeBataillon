import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CreateQuotationComponent } from './create-quotation.component';

describe('CreateQuotationComponent', () => {
  let component: CreateQuotationComponent;
  let fixture: ComponentFixture<CreateQuotationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CreateQuotationComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CreateQuotationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
