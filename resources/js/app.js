require('./bootstrap');

import { CartScreen } from './components/scripts/cart-screen';
import { NavMovile } from './components/scripts/nav-mobile';
import { SoundDesktop } from './components/scripts/sound-desktop';


NavMovile();
SoundDesktop();
CartScreen();

require ('./services/navigation');

setTimeout(()=>HideBanner(),3000);


