import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Bill } from './class/bill';
@Injectable({
  providedIn: 'root'
})
export class ApibillService {
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
  // HttpClient API get() method => Fetch bills list
  getBills(): Observable<Bill> {
    return this.http.get<Bill>(this.apiURL + '/bills', this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API get() method => Fetch bill with id
  getBillById(id): Observable<Bill> {
    return this.http.get<Bill>(this.apiURL + '/bills/' + id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API get() method => Fetch bill with id
  getBillsByProjectId(project_id): Observable<Bill> {
    return this.http.get<Bill>(this.apiURL + '/billsProject/' + project_id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API post() method => Create admin
  createBill(terms): Observable<Bill> {
    return this.http.post<Bill>(this.apiURL + '/bill', JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API put() method => Update admin
  updateBill(id, terms): Observable<Bill> {
    return this.http.put<Bill>(this.apiURL + '/billUpdate/' + id, JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API delete() method => Delete admin
  deleteBill(id) {
    return this.http.delete<Bill>(this.apiURL + '/billDelete/' + id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }

  // HttpClient API post() method => Send Bill
  sendBill(id): Observable<Bill> {
    return this.http.post<Bill>(this.apiURL + '/billSend/' + id, this.httpOptions)
        .pipe(
            retry(1),
            catchError(this.handleError)
        )
  }
  postPdf(data){
    return this.http.post(this.apiURL + '/pdf', JSON.stringify(data), this.httpOptions)
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
