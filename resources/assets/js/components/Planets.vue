<template>
  <div class="retrograde-section">
    <div class="planets">
        <div class="mercury">
          <h2 class="planet-name">Mercury</h2>
          <img :src="'img/Mercury.png'" alt="Mercury">
          <p class="info" style="text-align:center;padding-bottom:10px;">
            <span class="direction-title">Direction: </span>
            <br>
            <span class="direction"> {{ todaysRetrogrades.mercury_direction }}</span>
          </p>
          <div class="info-section">
            <div class="info-section--left">
              Time of Event:<br>
              Sign:<br>
              Degrees:<br>
              Minutes:<br>
            </div>
            <div class="info-section--right">
              <span class="info-true" v-if="todaysRetrogrades.mercury_time">{{ todaysRetrogrades.mercury_time }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.mercury_sign">{{ todaysRetrogrades.mercury_sign }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.mercury_degrees">{{ todaysRetrogrades.mercury_degrees }}&deg; </span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.mercury_minutes">{{ todaysRetrogrades.mercury_minutes }}'</span>
              <span class="info-false" v-else>No Event</span><br>
            </div>
          </div>
        </div>
    
        <div class="venus">
          <h2 class="planet-name">Venus</h2>
          <img :src="'img/Venus.png'" alt="Venus">
          <p class="info" style="text-align:center;padding-bottom:10px;"> 
            <span class="direction-title">Direction: </span>
            <br>
            <span class="direction"> {{ todaysRetrogrades.venus_direction }}</span>
          </p>
          <div class="info-section">
            <div class="info-section--left">
              Time of Event:<br>
              Sign:<br>
              Degrees:<br>
              Minutes:<br>
            </div>
            <div class="info-section--right">
              <span class="info-true" v-if="todaysRetrogrades.venus_time">{{ todaysRetrogrades.venus_time }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.venus_sign">{{ todaysRetrogrades.venus_sign }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.venus_degrees">{{ todaysRetrogrades.venus_degrees }}&deg; </span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.venus_minutes">{{ todaysRetrogrades.venus_minutes }}'</span>
              <span class="info-false" v-else>No Event</span><br>
            </div>
          </div>
        </div>
    
        <div class="mars">
          <h2 class="planet-name">Mars</h2>
          <img :src="'img/Mars.png'" alt="Mars">
          <p class="info" style="text-align:center;padding-bottom:10px;"> 
            <span class="direction-title">Direction: </span>
            <br>
            <span class="direction"> {{ todaysRetrogrades.mars_direction }}</span>
          </p>
          <div class="info-section">
            <div class="info-section--left">
              Time of Event:<br>
              Sign:<br>
              Degrees:<br>
              Minutes:<br>
            </div>
            <div class="info-section--right">
              <span class="info-true" v-if="todaysRetrogrades.mars_time">{{ todaysRetrogrades.mars_time }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.mars_sign">{{ todaysRetrogrades.mars_sign }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.mars_degrees">{{ todaysRetrogrades.mars_degrees }}&deg; </span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.mars_minutes">{{ todaysRetrogrades.mars_minutes }}'</span>
              <span class="info-false" v-else>No Event</span><br>
            </div>
          </div>
        </div>
    
        <div class="jupiter">
          <h2 class="planet-name">Jupiter</h2>
          <img :src="'img/Jupiter.png'" alt="Jupiter">
          <p class="info" style="text-align:center;padding-bottom:10px;"> 
            <span class="direction-title">Direction: </span>
            <br>
            <span class="direction"> {{ todaysRetrogrades.jupiter_direction }}</span>
          </p>
          <div class="info-section">
            <div class="info-section--left">
              Time of Event:<br>
              Sign:<br>
              Degrees:<br>
              Minutes:<br>
            </div>
            <div class="info-section--right">
              <span class="info-true" v-if="todaysRetrogrades.jupiter_time">{{ todaysRetrogrades.jupiter_time }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.jupiter_sign">{{ todaysRetrogrades.jupiter_sign }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.jupiter_degrees">{{ todaysRetrogrades.jupiter_degrees }}&deg; </span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.jupiter_minutes">{{ todaysRetrogrades.jupiter_minutes }}'</span>
              <span class="info-false" v-else>No Event</span><br>
            </div>
          </div>
        </div>

        <div class="saturn">
          <h2 class="planet-name">Saturn</h2>
          <img :src="'img/Saturn.png'" alt="Saturn">
          <p class="info" style="text-align:center;padding-bottom:10px;"> 
            <span class="direction-title">Direction: </span>
            <br>
            <span class="direction"> {{ todaysRetrogrades.saturn_direction }}</span>
          </p>
          <div class="info-section">
            <div class="info-section--left">
              Time of Event:<br>
              Sign:<br>
              Degrees:<br>
              Minutes:<br>
            </div>
            <div class="info-section--right">
              <span class="info-true" v-if="todaysRetrogrades.saturn_time">{{ todaysRetrogrades.saturn_time }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.saturn_sign">{{ todaysRetrogrades.saturn_sign }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.saturn_degrees">{{ todaysRetrogrades.saturn_degrees }}&deg; </span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.saturn_minutes">{{ todaysRetrogrades.saturn_minutes }}'</span>
              <span class="info-false" v-else>No Event</span><br>
            </div>
          </div>
        </div>
    
        <div class="uranus">
          <h2 class="planet-name">Uranus</h2>
          <img :src="'img/Uranus.png'" alt="Uranus">
          <p class="info" style="text-align:center;padding-bottom:10px;"> 
            <span class="direction-title">Direction: </span>
            <br>
            <span class="direction"> {{ todaysRetrogrades.uranus_direction }}</span>
          </p>
          <div class="info-section">
            <div class="info-section--left">
              Time of Event:<br>
              Sign:<br>
              Degrees:<br>
              Minutes:<br>
            </div>
            <div class="info-section--right">
              <span class="info-true" v-if="todaysRetrogrades.uranus_time">{{ todaysRetrogrades.uranus_time }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.uranus_sign">{{ todaysRetrogrades.uranus_sign }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.uranus_degrees">{{ todaysRetrogrades.uranus_degrees }}&deg; </span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.uranus_minutes">{{ todaysRetrogrades.uranus_minutes }}'</span>
              <span class="info-false" v-else>No Event</span><br>
            </div>
          </div>
        </div>
    
        <div class="neptune">
          <h2 class="planet-name">Neptune</h2>
          <img :src="'img/Neptune.png'" alt="Neptune">
          <p class="info" style="text-align:center;padding-bottom:10px;"> 
            <span class="direction-title">Direction: </span>
            <br>
            <span class="direction"> {{ todaysRetrogrades.neptune_direction }}</span>
          </p>
          <div class="info-section">
            <div class="info-section--left">
              Time of Event:<br>
              Sign:<br>
              Degrees:<br>
              Minutes:<br>
            </div>
            <div class="info-section--right">
              <span class="info-true" v-if="todaysRetrogrades.neptune_time">{{ todaysRetrogrades.neptune_time }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.neptune_sign">{{ todaysRetrogrades.neptune_sign }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.neptune_degrees">{{ todaysRetrogrades.neptune_degrees }}&deg; </span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.neptune_minutes">{{ todaysRetrogrades.neptune_minutes }}'</span>
              <span class="info-false" v-else>No Event</span><br>
            </div>
          </div>
        </div>
    
        <div class="pluto">
          <h2 class="planet-name">Pluto</h2>
          <img :src="'img/Pluto.png'" alt="Pluto">
          <p class="info" style="text-align:center;padding-bottom:10px;"> 
            <span class="direction-title">Direction: </span>
            <br>
            <span class="direction"> {{ todaysRetrogrades.pluto_direction }}</span>
          </p>
          <div class="info-section">
            <div class="info-section--left">
              Time of Event:<br>
              Sign:<br>
              Degrees:<br>
              Minutes:<br>
            </div>
            <div class="info-section--right">
              <span class="info-true" v-if="todaysRetrogrades.pluto_time">{{ todaysRetrogrades.pluto_time }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.pluto_sign">{{ todaysRetrogrades.pluto_sign }}</span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.pluto_degrees">{{ todaysRetrogrades.pluto_degrees }}&deg; </span>
              <span class="info-false" v-else>No Event</span><br>
              <span class="info-true" v-if="todaysRetrogrades.pluto_minutes">{{ todaysRetrogrades.pluto_minutes }}'</span>
              <span class="info-false" v-else>No Event</span><br>
            </div>
          </div>
        </div>
    </div>
  
    <div class="date-section">
      <button v-on:click="subtractDay">Prev Day</button> {{ todaysRetrogrades.month }} {{ todaysRetrogrades.day_of_month }}, 2018
      <button v-on:click="addDay">Next Day</button><br>
      <button v-on:click="getToday">Today</button>
      <hr>
      <p class="date-info">Select Any 2018 Date:</p>
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
          <option v-if="this.month !== 'February'">29</option>
          <option v-if="this.month !== 'February'">30</option>
          <option v-if="!short_months.includes(this.month)">31</option>
        </select>
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
        month: '',
        day_of_month: '',
        short_months: ['February', 'April', 'June', 'September', 'November'],
        prev_selected_months: [],
        prevIsDisabled: false,
        nextIsDisabled: false,
        subCounter: 0,
        addCounter: 0
      }
    },
  
    created() {
      // Get todays day of year number
      let day_of_year = this.getDOY();
  
      // Fetch todays retrograde data
      this.fetchPlanets(day_of_year);
    },
  
    methods: {
  
      // Check for leap year
      isLeapYear() {
        var d = new Date();
        var year = d.getFullYear();
        if ((year & 3) != 0) return false;
        return ((year % 100) != 0 || (year % 400) == 0);
      },
  
      // Get Day of Year
      getDOY() {
        var d = new Date();
        var dayCount = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
        var mn = d.getMonth();
        var dn = d.getDate();
        var dayOfYear = dayCount[mn] + dn;
        if (mn > 1 && this.isLeapYear()) dayOfYear++;
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
            this.prev_selected_months.push(this.todaysRetrogrades.month);
          })
          .catch(err => console.log(err));
      },
  
      // Get previous day data and update on button click
      subtractDay() {

        // Checks if day of year is 0 and warns user that no data exists beyond 2018
        if (this.day_of_year == 0) {
          this.prevIsDisabled = true;
          alert('Our records only contain 2018 data. We are working on expanding our retrograde database to contain more years.');
        } else {
          this.prevIsDisabled = false;
          this.nextIsDisabled = false;
        }

        // Only change date if Prev Button is returns true
        if (!this.prevIsDisabled) {
          if (this.subCounter == 0 && this.addCounter == 0) {
            this.day_of_year -= 2;
            this.todaysRetrogrades = this.allRetrogrades[this.day_of_year];
            this.subCounter += 1;
          } else {
            this.day_of_year -= 1; 
            this.todaysRetrogrades = this.allRetrogrades[this.day_of_year];
            this.subCounter += 1;
          }
        }
      },
  
      // Get next day data and update on button click
      addDay() {

        // Checks if day of year is 0 and warns user that no data exists beyond 2018
        if (this.day_of_year == 364) {
          this.nextIsDisabled = true;
          alert('Our records only contain 2018 data. We are working on expanding our retrograde database to contain more years.');
        } else {
          this.prevIsDisabled = false;
          this.nextIsDisabled = false;
        }

        // Only change date if Next Button is returns true
        if (!this.nextIsDisabled) {
          if (this.addCounter == 0 && this.subCounter == 0) {
            this.todaysRetrogrades = this.allRetrogrades[this.day_of_year];
            this.addCounter += 1;
          } else {
            this.day_of_year += 1; 
            this.todaysRetrogrades = this.allRetrogrades[this.day_of_year];
            this.addCounter += 1;
          }
        }
      },
        
      // Get day data from dropdown input on change
      updateDate() {
        try {
          const updatedDayOfMonth = this.day_of_month - 1;
          const filteredSelectedMonth = this.allRetrogrades.filter(monthlyRetrogrades => (monthlyRetrogrades.month == this.month));
          const filteredSelectedDay = filteredSelectedMonth[updatedDayOfMonth];
          let selectedDayofYear = filteredSelectedDay.day_of_year;
  
          // Update data object with filtered input data
          this.day_of_year = selectedDayofYear - 1;
          this.todaysRetrogrades = this.allRetrogrades[this.day_of_year];   
        } catch (e) {
          
          // Catch Error created by selecting month and day in the dropdown with less days than previosly selected month and day
          // e.g., Selecting the November after having selected December 31st. November only has 30 days. 
          if (e.name == 'TypeError') {
            if (this.month !== 'February') {
              this.day_of_month = 30;
            } else {
              this.day_of_month = 28
            }
          }
        }
      },

      // Get todays data
      getToday() {
        // Get todays day of year number
        let day_of_year = this.getDOY();
  
        // Fetch todays retrograde data
        this.fetchPlanets(day_of_year);

        // Reset Prev/Next Button Counters
        this.subCounter = 0;
        this.addCounter = 0;
      },
  
      testThingy() {
        console.log("Test Passed");
      }
    }
  }
</script>

