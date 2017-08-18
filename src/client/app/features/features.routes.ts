import { Route } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { MarcasComponent } from './marcas/marcas.component';
import { NosotrosComponent } from './nosotros/nosotros.component';
import { ProductosComponent } from './productos/productos.component';

export const FeaturesRoutes: Route[] = [
  {
    path: '',
    component: HomeComponent
  },
  {
    path: 'marcas',
    component: MarcasComponent
  },
  {
    path: 'nosotros',
    component: NosotrosComponent
  },
  {
    path: 'productos',
    component: ProductosComponent
  }
];
