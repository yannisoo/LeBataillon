import { TestBed } from '@angular/core/testing';

import { ApiBillService } from './api-bill.service';

describe('ApiBillService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: ApiBillService = TestBed.get(ApiBillService);
    expect(service).toBeTruthy();
  });
});
