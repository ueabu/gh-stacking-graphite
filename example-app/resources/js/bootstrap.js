import axios from 'axios';
window.axios = axios;
Testing

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
