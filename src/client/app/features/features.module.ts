import { NgModule, ModuleWithProviders } from '@angular/core';
import { HomeComponent } from './home/home.component';
/**
 * Do not specify providers for modules that might be imported by a lazy loaded module.
 */

@NgModule({
  imports: [],
  declarations: [HomeComponent],
  exports: [HomeComponent]
})
export class FeaturesModule {
}
