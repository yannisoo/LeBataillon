import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Project } from './class/project';
@Injectable({
  providedIn: 'root'
})
export class ApiprojectService {
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
  // HttpClient API get() method => Fetch projects list
  getProjects(): Observable<Project> {
    return this.http.get<Project>(this.apiURL + '/projects', this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API get() method => Fetch project with id
  getProjectById(id): Observable<Project> {
    return this.http.get<Project>(this.apiURL + '/projects/' + id, this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API get() method => Fetch project with userid
  getProjectByUserId(id): Observable<Project> {
    return this.http.get<Project>(this.apiURL + '/projectsUser/' + id, this.httpOptions)
      .pipe(
        retry(1),

        catchError(this.handleError)
      )
  }
  // HttpClient API post() method => Create admin
  createProject(terms): Observable<Project> {
    return this.http.post<Project>(this.apiURL + '/project', JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API put() method => Update admin
  updateProject(id, terms): Observable<Project> {
    return this.http.put<Project>(this.apiURL + '/projectUpdate/' + id, JSON.stringify(terms), this.httpOptions)
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
  }
  // HttpClient API delete() method => Delete admin
  deleteProject(id) {
    return this.http.delete<Project>(this.apiURL + '/projectDelete/' + id, this.httpOptions)
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
