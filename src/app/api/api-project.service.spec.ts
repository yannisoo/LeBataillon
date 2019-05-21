import { TestBed } from '@angular/core/testing';

import { ApiProjectService } from './api-project.service';

describe('ApiProjectService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: ApiProjectService = TestBed.get(ApiProjectService);
    expect(service).toBeTruthy();
  });
});
