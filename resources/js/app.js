import { createApp, h } from 'vue'
import { createInertiaApp, Head } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import {fas} from "@fortawesome/free-solid-svg-icons";

import Layout from './Shared/Layout';
library.add(fas);
createInertiaApp({
  resolve: async name => {
    let page = (await import(`./Pages/${name}`)).default;

    page.layout ??= Layout;

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Head", Head)
      .component('font-awesome-icon', FontAwesomeIcon)
      .mount(el)
  },
  title: title => `YoDa | ${title}`
})
InertiaProgress.init({
    color: 'red',
    showSpinner: true
})
