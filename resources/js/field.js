Nova.booting(Vue => {
    Vue.component('index-admin-tags', require('./components/Nova/IndexField'));
    Vue.component('detail-admin-tags', require('./components/Nova/DetailField'));
    Vue.component('form-admin-tags', require('./components/Nova/FormField'));
});
