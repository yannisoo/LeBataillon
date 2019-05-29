import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Agency } from './class/agency';
@Injectable({
  providedIn: 'root'
})
export class ApiagencyService {
  // Define API
  apiURL = 'http://127.0.0.1:8001/api';
  constructor(private http: HttpClient) { }
  /*========================================
  CRUD Methods for consuming RESTful API
  =========================================*/
  // Http Options
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json',
    })
  }
  // HttpClient API get() method => Fetch agencys list
  getAgencys(): Observable<Agency> {
    return this.http.get<Agency>(this.apiURL + '/agencys', this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API get() method => Fetch agency with id
  getAgencyById(id): Observable<Agency> {
    return this.http.get<Agency>(this.apiURL + '/agencys/' + id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API post() method => Create admin
  createAgency(terms): Observable<Agency> {
    return this.http.post<Agency>(this.apiURL + '/agency', JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API put() method => Update admin
  updateAgency(id, terms): Observable<Agency> {
    return this.http.put<Agency>(this.apiURL + '/agencyUpdate/' + id, JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API delete() method => Delete admin
  deleteAgency(id) {
    return this.http.delete<Agency>(this.apiURL + '/agencyDelete/' + id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // Error handling
  handleError(error) {
    let errorMessage = '';
    if (error.error instanceof ErrorEvent) {
      // Get client-side error
      errorMessage = error.error.message;
    } else {
      // Get server-side error
      errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
    }
    window.alert(errorMessage);
    return throwError(errorMessage);
  }
}
