import { TestBed } from '@angular/core/testing';

import { AppelApiService } from './appel-api.service';

describe('AppelApiService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: AppelApiService = TestBed.get(AppelApiService);
    expect(service).toBeTruthy();
  });
});
