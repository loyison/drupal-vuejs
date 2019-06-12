import Meal from './components/Meal'
import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
Vue.use(VueRouter)
Vue.use(VueResource)

Vue.config.productionTip = false

const routes = [

  {
    path: '/',
    component: Meal

  }
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

new Vue({
  el: '#app',
  template: '<App/>',
  components: { App },
  router

}).$mount('#app')
