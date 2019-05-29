import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { User } from './class/user';
@Injectable({
  providedIn: 'root'
})
export class ApiuserService {
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
  // HttpClient API get() method => Fetch users list
  getUsers(): Observable<User> {
    return this.http.get<User>(this.apiURL + '/users', this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API get() method => Fetch user with id
  getUserById(id): Observable<User> {
    return this.http.get<User>(this.apiURL + '/users/' + id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API post() method => Create admin
  createUser(terms): Observable<User> {
    return this.http.post<User>(this.apiURL + '/user', JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API put() method => Update admin
  updateUser(id, terms): Observable<User> {
    return this.http.put<User>(this.apiURL + '/userUpdate/' + id, JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API delete() method => Delete admin
  deleteUser(id) {
    return this.http.delete<User>(this.apiURL + '/userDelete/' + id, this.httpOptions)
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
