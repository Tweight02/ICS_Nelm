import { Component, OnInit } from '@angular/core';
import { Navbar } from '../navbar/navbar';
import { Data } from '../../service/data';

@Component({
  selector: 'app-pastors',
  imports: [
    Navbar
  ],
  templateUrl: './pastors.html',
  styleUrl: './pastors.css',
})
export class Pastors implements OnInit{
  pastor:any;
  constructor(private dataService:Data){}
  ngOnInit(): void {
    this.getPastorData();
  }

  getPastorData(){
    console.log('Hello World');
    this.dataService.getData().subscribe(res=>{
      console.log(res);
      this.pastor = res;
    });
  }
}
