import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PdfGenComponent } from './pdf-gen.component';

describe('PdfGenComponent', () => {
  let component: PdfGenComponent;
  let fixture: ComponentFixture<PdfGenComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PdfGenComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PdfGenComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
