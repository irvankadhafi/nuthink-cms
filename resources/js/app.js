require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Homepage from './components/Homepage'
import Create from './components/Create'
import Read from './components/Read'
import Update from './components/Update'
import CKEditor from '@ckeditor/ckeditor5-vue'

Vue.use(CKEditor);

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/board/admin/dashboard',
            name: 'read',
            component: Read,
            props: true
        },
        {
            path: '/board/admin/create',
            name: 'create',
            component: Create,
            props: true
        },
        {
            path: '/board/admin/update',
            name: 'update',
            component: Update,
            props: true
        },
    ],
});

const app = new Vue({
    el: '#app',
    router,
    components: { Homepage },
});
ClassicEditor
    .create( document.querySelector( '#edit-description' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', '|', 'bulletedList', 'numberedList', '|', 'undo', 'redo' ]
    } )
    .then( editor => {
        theEditEditor = editor; // Save for later use.
    } );
