<template>
  <div class="content">
    <div class="title">
      <h2>JSON API Documentation</h2>
    </div>
    <div class="text-box">
      <h3>Get All Retrograde Data</h3>
      <table>
        <tr>
          <td><strong>Description</strong></td>
          <td>Provides retrograde data for all days in the 2018 year.</td>
        </tr>
        <tr>
          <td><strong>Endpoint</strong></td>
          <td>/api/planets/</td>
        </tr>
        <tr>
          <td><strong>Method</strong></td>
          <td>GET</td>
        </tr>
        <tr>
          <td><strong>Example</strong></td>
          <td><a href="http://retrograde.zone/api/planets/">http://retrograde.zone/api/planets/</a></td>
        </tr>
      </table>
      <br>
      <p style="margin-bottom: 0px;"><strong>Sample Response</strong></p>
      <pre><code>
      {
        "data": [
          {
            "day_of_year":          1,
            "month":                "January",
            "day_of_month":         1,
            "mercury_direction":    "Direct - In Rx Zone",
            "mercury_sign":         null,
            "mercury_time":         null,
            "mercury_degrees":      null,
            "mercury_minutes":      null,
            "venus_direction":      "Direct",
            "venus_sign":           null,
            "venus_time":           null,
            "venus_degrees":        null,
            "venus_minutes":        null,
            "mars_direction":       "Direct",
            "mars_sign":            null,
            "mars_time":            null,
            "mars_degrees":         null,
            "mars_minutes":         null,
            "jupiter_direction":    "In Rx Zone",
            "jupiter_sign":         null,
            "jupiter_time":         null,
            "jupiter_degrees":      null,
            "jupiter_minutes":      null,
            "saturn_direction":     "Direct",
            "saturn_sign":          null,
            "saturn_time":          null,
            "saturn_degrees":       null,
            "saturn_minutes":       null,
            "uranus_direction":     "Direct",
            "uranus_sign":          null,
            "uranus_time":          null,
            "uranus_degrees":       null,
            "uranus_minutes":       null,
            "neptune_direction":    "Direct",
            "neptune_sign":         null,
            "neptune_time":         null,
            "neptune_degrees":      null,
            "neptune_minutes":      null,
            "pluto_direction":      "In Rx Zone",
            "pluto_sign":           null,
            "pluto_time":           null,
            "pluto_degrees":        null,
            "pluto_minutes":        null
          },
          {
            "day_of_year":          2,
            "month":                "January",
            "day_of_month":         2,
            "mercury_direction":    "Direct - In Rx Zone",
            "mercury_sign":         null,
            "mercury_time":         null,
            "mercury_degrees":      null,
            "mercury_minutes":      null,
            "venus_direction":      "Direct",
            "venus_sign":           null,
            "venus_time":           null,
            "venus_degrees":        null,
            "venus_minutes":        null,
            "mars_direction":       "Direct",
            "mars_sign":            null,
            "mars_time":            null,
            "mars_degrees":         null,
            "mars_minutes":         null,
            "jupiter_direction":    "In Rx Zone",
            "jupiter_sign":         null,
            "jupiter_time":         null,
            "jupiter_degrees":      null,
            "jupiter_minutes":      null,
            "saturn_direction":     "Direct",
            "saturn_sign":          null,
            "saturn_time":          null,
            "saturn_degrees":       null,
            "saturn_minutes":       null,
            "uranus_direction":     "Direct",
            "uranus_sign":          null,
            "uranus_time":          null,
            "uranus_degrees":       null,
            "uranus_minutes":       null,
            "neptune_direction":    "Direct",
            "neptune_sign":         null,
            "neptune_time":         null,
            "neptune_degrees":      null,
            "neptune_minutes":      null,
            "pluto_direction":      "In Rx Zone",
            "pluto_sign":           null,
            "pluto_time":           null,
            "pluto_degrees":        null,
            "pluto_minutes":        null
          }
        ]
      }
      </code></pre>

        <br>

        <h3>Get Daily Retrograde Data</h3>
        <table>
          <tr>
            <td><strong>Description</strong></td>
            <td>Provides retrograde data for one day in the 2018 year.</td>
          </tr>
          <tr>
            <td><strong>Endpoint</strong></td>
            <td>/api/daily-planets/{day_of_year}</td>
          </tr>
          <tr>
            <td><strong>Method</strong></td>
            <td>GET</td>
          </tr>
          <tr>
            <td><strong>Example</strong></td>
            <td><a href="http://retrograde.zone/api/daily-planets/1">http://retrograde.zone/api/planets/{day_of_year}</a></td>
          </tr>
          <tr>
            <td><strong>Notes</strong></td>
            <td>The <code>day_of_year</code> value ranges from 1-365. <a href="https://stackoverflow.com/a/26426761">This Stack Overflow answer</a>  provides JavaScript code than can be used to get the current day of year as an integer. That integer can then be passed into the API request which in turn provides the data for the desired day.</td>
          </tr>
        </table>
        <br>
        <p><strong>Sample Response</strong></p>
        <pre><code>
        {
          "data": [
            {
              "day_of_year":          1,
              "month":                "January",
              "day_of_month":         1,
              "mercury_direction":    "Direct - In Rx Zone",
              "mercury_sign":         null,
              "mercury_time":         null,
              "mercury_degrees":      null,
              "mercury_minutes":      null,
              "venus_direction":      "Direct",
              "venus_sign":           null,
              "venus_time":           null,
              "venus_degrees":        null,
              "venus_minutes":        null,
              "mars_direction":       "Direct",
              "mars_sign":            null,
              "mars_time":            null,
              "mars_degrees":         null,
              "mars_minutes":         null,
              "jupiter_direction":    "In Rx Zone",
              "jupiter_sign":         null,
              "jupiter_time":         null,
              "jupiter_degrees":      null,
              "jupiter_minutes":      null,
              "saturn_direction":     "Direct",
              "saturn_sign":          null,
              "saturn_time":          null,
              "saturn_degrees":       null,
              "saturn_minutes":       null,
              "uranus_direction":     "Direct",
              "uranus_sign":          null,
              "uranus_time":          null,
              "uranus_degrees":       null,
              "uranus_minutes":       null,
              "neptune_direction":    "Direct",
              "neptune_sign":         null,
              "neptune_time":         null,
              "neptune_degrees":      null,
              "neptune_minutes":      null,
              "pluto_direction":      "In Rx Zone",
              "pluto_sign":           null,
              "pluto_time":           null,
              "pluto_degrees":        null,
              "pluto_minutes":        null
            }
          ]
        }
        </code></pre>
    </div>
    <div class="note">
      <p>A note.</p>
    </div>
  </div>
</template>

