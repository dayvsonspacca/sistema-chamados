import axios from 'axios';
import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'
import Quill from 'quill';

window.quill = Quill;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Alpine.plugin(persist)
window.Alpine = Alpine
Alpine.start()