<template>
  <div class="content">
    <div class="title">
      <h2>About Retrograde Zone</h2>
      <div class="border"></div>
    </div>
    <div class="text-box">
      <h3>What's Retrograde?</h3>
      <p>What does is mean when a planet goes retrograde? Retrograde motion is the apparent reversal of a planets path in the sky. The key is understanding that it does not mean the planet <em>actually</em> moves backwards in its orbit.</p><br><p>It just appears to do so because of the relative positions of the planet being observed, Earth and how they move around the Sun. <a href="https://starchild.gsfc.nasa.gov/docs/StarChild/questions/question46.html" target="_blank"><strong>CLICK HERE</strong></a> to find out more about how this occurs.</p><br>
      <p>There is also an astrological connection to the planets direction. Astrologers of all kinds may find this site useful as well.</p>

      <h3>What's This Website For?</h3>
      <p>This project began from the amazement of seeing a planet in the sky seem to move in reverse from it's original path. As an avid skywatcher, observing this phenomenon always made me wonder why it occurs and how I can find out what other planets were in retrograde.</p><br><p>That lead to the creation of this website which aims to provide a simple and effective way of seeing what planets are currently in retrograde. The first attempt at making this site resulted in a stiff UI and a lack of user interactivity. The sites new updates now allow us to see the data for previous and next days, as well as search for any day of the 2018 year. A public <router-link :to="{ name: 'API' }">API</router-link> is now available as well for anyone interested in using the data for their own creation.</p>
    </div>
    <br>
    <div class="note">
      <p>GitHub repo can be found here: <a href="https://www.github.com/brytorres/retrograde-zone">https://www.github.com/brytorres/retrograde-zone</a></p><br>
      <p>Having an issue, found a bug, typo or errata? Report it <a href="https://github.com/brytorres/retrograde-zone/issues">here.</a></p><br>
      <p>Any help in expanding our database would be highly welcomed and greatly appreciated! If you're interested, you can <a href="mailto:info@retrograde.zone.">send us an email</a>.</p>
    </div>
  </div>
</template>
