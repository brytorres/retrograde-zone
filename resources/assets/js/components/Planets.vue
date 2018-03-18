<template>
  <div>
    <h2>Retrograde Zone</h2>

    <!-- <ol>
      <div v-for="dailyRetrogrades in allRetrogrades" v-bind:key="allRetrogrades.id">
        <li> {{ dailyRetrogrades.mercury_direction }} </li>
      </div>
    </ol> -->

    <h2>{{ todaysRetrogrades }}</h2>

  </div>
</template>

<script>
  export default {
    data() {
      return {
        allRetrogrades: [],
        todaysRetrogrades: [],
        // day_of_year: 0,
        retrograde: {
          day_of_year: '',
          planet_name: '',
          planet_direction: '',
          planet_sign: '',
          planet_time: '',
          planet_degrees: '',
          planet_minutes: '',
        }
      }
    },

    created() {
      let day_of_year = this.getDOY();
      
      this.fetchPlanets(day_of_year);
    },

    methods: {

      // Check for leap year
      isLeapYear() {
        var d = new Date();
        var year = d.getFullYear();
        if((year & 3) != 0) return false;
        return ((year % 100) != 0 || (year % 400) == 0);
      },

      // Get Day of Year
      getDOY() {
        var d = new Date();
        var dayCount = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
        var mn = d.getMonth();
        var dn = d.getDate();
        var dayOfYear = dayCount[mn] + dn;
        if(mn > 1 && this.isLeapYear()) dayOfYear++;
        this.day_of_year = dayOfYear;
        return dayOfYear - 1;
      },

      fetchPlanets(day_of_year) {
        fetch('api/planets')
          .then(res => res.json())
          .then(res => {
            this.allRetrogrades = res.data;
            this.todaysRetrogrades = this.allRetrogrades[day_of_year];
          })
          .catch(err => console.log(err));
      }
    }
  }
</script>

