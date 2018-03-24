<template>
  <div class="content">
    <div class="title">
      <h2>How To Use</h2>
    </div>
    <div class="text-box" style="padding-top:20px;">
      <p>Upon visiting the site, the home page automatically loads todays retrograde data for each planet. In each planets info box you will find the following information:</p>
      <ul>
        <li>Which direction the planet appears to move in</li>
        <li>The astrological sign which the planet in in front of</li>
        <li>The degree of the Zodiac they currently occupy</li>
        <li>The planetary minutes based on the Chaldean Order</li>
      </ul>

      <h3>Date Navigation Controls</h3>
      <p>Below the planets info boxes, you will find the date navigation section that looks like the following:</p>
    </div><br>  
    <div class="note" style="text-align:center;">
      <p>NOTE: This is a non-functional date component.</p>
    </div>
    <div class="date-section">
      <button>Prev Day</button> January 1, 2018
      <button>Next Day</button><br>
      <button>Today</button>
      <hr>
      <p class="date-info">Select Any 2018 Date:</p>
      <select>
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
      <select>
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
        </select>
    </div><br>
    <div class="text-box">
      <p>In the first row, you will find two buttons. Clicking on <span class="date-section-example"><button>Prev Day</button></span> will display the retrograde data for the day before and <span class="date-section-example"><button>Next Day</button></span> will display the retrograde data for the next day. Clicking <span class="date-section-example"><button>Today</button></span> will display todays data again.</p><br>
      <p>Next you will find two dropdown boxes that allow you to enter any month and day of the 2018 year. It will automatically load the data for you each time you select a different option.</p><br>
      <p>Using a combination of the buttons and dropdown boxes, you are able to access any days retrograde data very quickly and effortlessly.</p>
    </div>
  </div>
</template>
