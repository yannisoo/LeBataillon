import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ModifyQuotationComponent } from './modify-quotation.component';

describe('ModifyQuotationComponent', () => {
  let component: ModifyQuotationComponent;
  let fixture: ComponentFixture<ModifyQuotationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ModifyQuotationComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ModifyQuotationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
