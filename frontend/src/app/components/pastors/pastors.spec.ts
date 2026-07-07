import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Pastors } from './pastors';

describe('Pastors', () => {
  let component: Pastors;
  let fixture: ComponentFixture<Pastors>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Pastors],
    }).compileComponents();

    fixture = TestBed.createComponent(Pastors);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
