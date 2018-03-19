<template>
  <div class="container">

    <div class="date-section" style="display: inline-block;">
      <button v-on:click="subtractDay">Previous Day</button>
      {{ todaysRetrogrades.month }} {{ todaysRetrogrades.day_of_month }}, 2018 -- {{ todaysRetrogrades.day_of_year }}
      <button v-on:click="addDay">Next Day</button>
      <!-- <hr> -->
      <select v-model="month" v-on:change="updateDate">
        <option disabled value="">Select Month</option>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
      </select>
      <select v-model="day_of_month" v-on:change="updateDate">
        <option disabled value="">Select Day</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
      <span>Selected: {{ month }} {{ day_of_month }}</span>
    </div>

    <div class="columns">
      <div class="column planet-box">
        <h2 class="planet-name">Mercury</h2>
        <img src="http://via.placeholder.com/100x100" alt="">
        <p class="info">Direction: <span class="direction"> {{ todaysRetrogrades.mercury_direction }}</span></p>
        <p class="info">Time of Event: <span class="time-true" v-if="todaysRetrogrades.mercury_time">{{ todaysRetrogrades.mercury_time }}</span><span class="time-false" v-else>No Event</span></p>
        <p class="info">Sign: <span class="sign-true" v-if="todaysRetrogrades.mercury_sign">{{ todaysRetrogrades.mercury_sign }}</span><span class="sign-false" v-else>No Event</span></p>
        <p class="info">Degrees: <span class="degrees-true" v-if="todaysRetrogrades.mercury_degrees">{{ todaysRetrogrades.mercury_degrees }}&deg; </span><span class="degrees-false" v-else>No Event</span></p>
        <p class="info">Minutes: <span class="minutes-true" v-if="todaysRetrogrades.mercury_minutes">{{ todaysRetrogrades.mercury_minutes }}'</span><span class="minutes-false" v-else>No Event</span></p>
      </div>

      <div class="column planet-box">
        <h2 class="planet-name">Venus</h2>
        <img src="http://via.placeholder.com/100x100" alt="">
        <p class="info">Direction: <span class="direction"> {{ todaysRetrogrades.venus_direction }}</span></p>
        <p class="info">Time of Event: <span class="time-true" v-if="todaysRetrogrades.venus_time">{{ todaysRetrogrades.venus_time }}</span><span class="time-false" v-else>No Event</span></p>
        <p class="info">Sign: <span class="sign-true" v-if="todaysRetrogrades.venus_sign">{{ todaysRetrogrades.venus_sign }}</span><span class="sign-false" v-else>No Event</span></p>
        <p class="info">Degrees: <span class="degrees-true" v-if="todaysRetrogrades.venus_degrees">{{ todaysRetrogrades.venus_degrees }}</span><span class="degrees-false" v-else>No Event</span></p>
        <p class="info">Minutes: <span class="minutes-true" v-if="todaysRetrogrades.venus_minutes">{{ todaysRetrogrades.venus_minutes }}</span><span class="minutes-false" v-else>No Event</span></p>
      </div>

      <div class="column planet-box">
        <h2 class="planet-name">Mars</h2>
        <img src="http://via.placeholder.com/100x100" alt="">
        <p class="info">Direction: <span class="direction"> {{ todaysRetrogrades.mars_direction }}</span></p>
        <p class="info">Time of Event: <span class="time-true" v-if="todaysRetrogrades.mars_time">{{ todaysRetrogrades.mars_time }}</span><span class="time-false" v-else>No Event</span></p>
        <p class="info">Sign: <span class="sign-true" v-if="todaysRetrogrades.mars_sign">{{ todaysRetrogrades.mars_sign }}</span><span class="sign-false" v-else>No Event</span></p>
        <p class="info">Degrees: <span class="degrees-true" v-if="todaysRetrogrades.mars_degrees">{{ todaysRetrogrades.mars_degrees }}</span><span class="degrees-false" v-else>No Event</span></p>
        <p class="info">Minutes: <span class="minutes-true" v-if="todaysRetrogrades.mars_minutes">{{ todaysRetrogrades.mars_minutes }}</span><span class="minutes-false" v-else>No Event</span></p>
      </div>

      <div class="column planet-box">
        <h2 class="planet-name">Jupiter</h2>
        <img src="http://via.placeholder.com/100x100" alt="">
        <p class="info">Direction: <span class="direction"> {{ todaysRetrogrades.jupiter_direction }}</span></p>
        <p class="info">Time of Event: <span class="time-true" v-if="todaysRetrogrades.jupiter_time">{{ todaysRetrogrades.jupiter_time }}</span><span class="time-false" v-else>No Event</span></p>
        <p class="info">Sign: <span class="sign-true" v-if="todaysRetrogrades.jupiter_sign">{{ todaysRetrogrades.jupiter_sign }}</span><span class="sign-false" v-else>No Event</span></p>
        <p class="info">Degrees: <span class="degrees-true" v-if="todaysRetrogrades.jupiter_degrees">{{ todaysRetrogrades.jupiter_degrees }}</span><span class="degrees-false" v-else>No Event</span></p>
        <p class="info">Minutes: <span class="minutes-true" v-if="todaysRetrogrades.jupiter_minutes">{{ todaysRetrogrades.jupiter_minutes }}</span><span class="minutes-false" v-else>No Event</span></p>
      </div>
    </div>
    <div class="columns">
      <div class="column planet-box">
        <h2 class="planet-name">Saturn</h2>
        <img src="http://via.placeholder.com/100x100" alt="">
        <p class="info">Direction: <span class="direction"> {{ todaysRetrogrades.saturn_direction }}</span></p>
        <p class="info">Time of Event: <span class="time-true" v-if="todaysRetrogrades.saturn_time">{{ todaysRetrogrades.saturn_time }}</span><span class="time-false" v-else>No Event</span></p>
        <p class="info">Sign: <span class="sign-true" v-if="todaysRetrogrades.saturn_sign">{{ todaysRetrogrades.saturn_sign }}</span><span class="sign-false" v-else>No Event</span></p>
        <p class="info">Degrees: <span class="degrees-true" v-if="todaysRetrogrades.saturn_degrees">{{ todaysRetrogrades.saturn_degrees }}</span><span class="degrees-false" v-else>No Event</span></p>
        <p class="info">Minutes: <span class="minutes-true" v-if="todaysRetrogrades.saturn_minutes">{{ todaysRetrogrades.saturn_minutes }}</span><span class="minutes-false" v-else>No Event</span></p>
      </div>

      <div class="column planet-box">
        <h2 class="planet-name">Uranus</h2>
        <img src="http://via.placeholder.com/100x100" alt="">
        <p class="info">Direction: <span class="direction"> {{ todaysRetrogrades.uranus_direction }}</span></p>
        <p class="info">Time of Event: <span class="time-true" v-if="todaysRetrogrades.uranus_time">{{ todaysRetrogrades.uranus_time }}</span><span class="time-false" v-else>No Event</span></p>
        <p class="info">Sign: <span class="sign-true" v-if="todaysRetrogrades.uranus_sign">{{ todaysRetrogrades.uranus_sign }}</span><span class="sign-false" v-else>No Event</span></p>
        <p class="info">Degrees: <span class="degrees-true" v-if="todaysRetrogrades.uranus_degrees">{{ todaysRetrogrades.uranus_degrees }}</span><span class="degrees-false" v-else>No Event</span></p>
        <p class="info">Minutes: <span class="minutes-true" v-if="todaysRetrogrades.uranus_minutes">{{ todaysRetrogrades.uranus_minutes }}</span><span class="minutes-false" v-else>No Event</span></p>
      </div>

      <div class="column planet-box">
        <h2 class="planet-name">Neptune</h2>
        <img src="http://via.placeholder.com/100x100" alt="">
        <p class="info">Direction: <span class="direction"> {{ todaysRetrogrades.neptune_direction }}</span></p>
        <p class="info">Time of Event: <span class="time-true" v-if="todaysRetrogrades.neptune_time">{{ todaysRetrogrades.neptune_time }}</span><span class="time-false" v-else>No Event</span></p>
        <p class="info">Sign: <span class="sign-true" v-if="todaysRetrogrades.neptune_sign">{{ todaysRetrogrades.neptune_sign }}</span><span class="sign-false" v-else>No Event</span></p>
        <p class="info">Degrees: <span class="degrees-true" v-if="todaysRetrogrades.neptune_degrees">{{ todaysRetrogrades.neptune_degrees }}</span><span class="degrees-false" v-else>No Event</span></p>
        <p class="info">Minutes: <span class="minutes-true" v-if="todaysRetrogrades.neptune_minutes">{{ todaysRetrogrades.neptune_minutes }}</span><span class="minutes-false" v-else>No Event</span></p>
      </div>

      <div class="column planet-box">
        <h2 class="planet-name">Pluto</h2>
        <img src="http://via.placeholder.com/100x100" alt="">
        <p class="info">Direction: <span class="direction"> {{ todaysRetrogrades.pluto_direction }}</span></p>
        <p class="info">Time of Event: <span class="time-true" v-if="todaysRetrogrades.pluto_time">{{ todaysRetrogrades.pluto_time }}</span><span class="time-false" v-else>No Event</span></p>
        <p class="info">Sign: <span class="sign-true" v-if="todaysRetrogrades.pluto_sign">{{ todaysRetrogrades.pluto_sign }}</span><span class="sign-false" v-else>No Event</span></p>
        <p class="info">Degrees: <span class="degrees-true" v-if="todaysRetrogrades.pluto_degrees">{{ todaysRetrogrades.pluto_degrees }}</span><span class="degrees-false" v-else>No Event</span></p>
        <p class="info">Minutes: <span class="minutes-true" v-if="todaysRetrogrades.pluto_minutes">{{ todaysRetrogrades.pluto_minutes }}</span><span class="minutes-false" v-else>No Event</span></p>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        allRetrogrades: [],
        todaysRetrogrades: [],
        fullDate: '',
        day_of_year: 0,
        month: 'January',
        day_of_month: '1',
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

      // Get retrograde data from API
      fetchPlanets(day_of_year) {
        fetch('api/planets')
          .then(res => res.json())
          .then(res => {
            this.allRetrogrades = res.data;
            this.todaysRetrogrades = this.allRetrogrades[day_of_year];
          })
          .catch(err => console.log(err));
      },

      subtractDay() {
        console.log('sub');
        this.day_of_year -= 1;
        this.todaysRetrogrades = this.allRetrogrades[this.day_of_year];
      },

      addDay() {
        console.log('add');
        this.day_of_year += 1;
        this.todaysRetrogrades = this.allRetrogrades[this.day_of_year];
      },

      updateDate() {

        console.log(this.month + " " + this.day_of_month);

        const updatedDayOfMonth = this.day_of_month - 1;

        // let filteredSelectedDay = this.allRetrogrades.filter(dailyRetrogrades => (dailyRetrogrades.month == this.month && dailyRetrogrades.day_of_month == this.day_of_month));

        const filteredSelectedMonth = this.allRetrogrades.filter(monthlyRetrogrades => (monthlyRetrogrades.month == this.month));

        const filteredSelectedDay = filteredSelectedMonth[updatedDayOfMonth];

        let selectedDayofYear = filteredSelectedDay.day_of_year;



        // let selectedDayNumber = filteredSelectedDay.day_of_month;

        console.log(selectedDayofYear);
        // console.log(filteredSelectedMonth);

        // if (this.month == this.allRetrogrades.month && this.day_of_month == this.allRetrogrades.day_of_month) {
        //   console.log("Test Passed");
        // }
      },

      testThingy() {
        console.log("Test Passed");
      }
    }
  }
</script>

