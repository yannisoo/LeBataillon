import { TestBed } from '@angular/core/testing';

import { ApiQuotationService } from './api-quotation.service';

describe('ApiQuotationService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: ApiQuotationService = TestBed.get(ApiQuotationService);
    expect(service).toBeTruthy();
  });
});
