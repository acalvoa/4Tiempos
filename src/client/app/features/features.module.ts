import { NgModule, ModuleWithProviders } from '@angular/core';
import { HomeComponent } from './home/home.component';
import { MarcasComponent } from './marcas/marcas.component';
import { ProductosComponent } from './productos/productos.component';
import { NosotrosComponent } from './nosotros/nosotros.component';
/**
 * Do not specify providers for modules that might be imported by a lazy loaded module.
 */

@NgModule({
  imports: [],
  declarations: [HomeComponent,MarcasComponent,ProductosComponent,NosotrosComponent],
  exports: [HomeComponent,MarcasComponent,ProductosComponent,NosotrosComponent]
})
export class FeaturesModule {
}
