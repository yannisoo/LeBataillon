import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Quotation } from './class/quotation';
@Injectable({
  providedIn: 'root'
})
export class ApiQuotationService {
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
  // HttpClient API get() method => Fetch quotations list
  getQuotations(): Observable<Quotation> {
    return this.http.get<Quotation>(this.apiURL + '/quotations', this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API get() method => Fetch quotation with id
  getQuotationById(id): Observable<Quotation> {
    return this.http.get<Quotation>(this.apiURL + '/quotations/' + id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API get() method => Fetch quotation with id
  getQuotationsByProjectId(project_id): Observable<Quotation> {
    return this.http.get<Quotation>(this.apiURL + '/quotationsProject/' + project_id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API post() method => Create admin
  createQuotation(terms): Observable<Quotation> {
    return this.http.post<Quotation>(this.apiURL + '/quotation', JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API put() method => Update admin
  updateQuotation(id, terms): Observable<Quotation> {
    return this.http.put<Quotation>(this.apiURL + '/quotationUpdate/' + id, JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API delete() method => Delete admin
  deleteQuotation(id) {
    return this.http.delete<Quotation>(this.apiURL + '/quotationDelete/' + id, this.httpOptions)
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
