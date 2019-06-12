<template >
<div  id="meals">
 <div class="row">
  <div class="col-md-3 col-sm-12"  v-for="meal in meals" v-bind:key="meal">
   <div class="card">
    <img class="card-img-top meal_img " v-bind:src="meal.field_meal_image[0].url" v-bind:alt="meal.field_meal_image[0].alt" style=";height: 200px;" >
    <div class="card-body">
     <h5 class="card-title album_title">  {{ meal.title[0].value }} </h5>
    </div>
   </div>
   <br>
  </div>
 </div>
</div>
</template>
<script>
export default {
  name: 'meals',
  data () {
    return {
      meals: this.getMeals()
    }
  },
  http: {
    headers: {
      'Accept': 'json',
      'Content-Type': 'application/hal+json'
    }
  },
  methods: {
    getMeals: function () {
      this.$http.get('http://drupalapp.local/cms/api/meals').then(response => {
        this.meals = response.body
      }, response => {
        console.log('Error fetching data from URL make sure your server up running')
      })
    }
  }
}
</script>
