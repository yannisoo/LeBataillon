import { TestBed } from '@angular/core/testing';

import { ApiAgencyService } from './api-agency.service';

describe('ApiAgencyService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: ApiAgencyService = TestBed.get(ApiAgencyService);
    expect(service).toBeTruthy();
  });
});
