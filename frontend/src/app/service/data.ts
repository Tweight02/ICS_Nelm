import { Injectable, Service } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root',
})

export class Data {
    constructor(private http:HttpClient){}
    url = 'http://localhost:8000/api/pastor';

    getData(){
        return this.http.get(this.url);
    }
}
