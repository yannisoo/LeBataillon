import { Injectable } from '@angular/core';
import { Component, OnInit, Input } from '@angular/core';
import { CanActivate, Router } from '@angular/router';
import {AuthService} from './auth.service';

@Injectable()
export class AuthGuard implements CanActivate {
  @Input('ngModel') RolesUserData: any = {};

  constructor(private _auth: AuthService,
              private _router: Router) { }

              canActivate():boolean{

                  if (this._auth.loggedIn()){
                    return true
                  }else{

                    this._router.navigate(['/login'])
                    return false
                  }

              }

}
