import { Routes } from '@angular/router';
import { Pastors } from './components/pastors/pastors';
import { Navbar } from './components/navbar/navbar';


export const routes: Routes = [
    {
        path: '',
        component: Pastors
    }
];
