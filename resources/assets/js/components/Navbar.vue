<template>
  <div class="nav">
    <div class="nav-title">
      <h1><router-link :to="{ name: 'planets' }">Retrograde Zone</router-link></h1>
      <p class="nav-subtitle">What's In Retrograde?</p>
    </div>
    <div class="nav-menu">
      <router-link :to="{ name: 'planets' }">Home</router-link>&nbsp;<span class="seperator">|</span>
      <router-link :to="{ name: 'About' }">About</router-link>&nbsp;<span class="seperator">|</span>
      <router-link :to="{ name: 'HowToUse' }">How To Use</router-link>&nbsp;<span class="seperator">|</span>
      <router-link :to="{ name: 'API' }">API</router-link>
    </div>
    <br>
  </div>
</template>
