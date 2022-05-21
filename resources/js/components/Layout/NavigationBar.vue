<template>
  <nav id="appNavbar" class="navbar navbar-expand sticky-top navbar-light bg-light bg-white justify-content-between border-bottom tw-shadow-sm px-sm-5">

    <!-- Left Side -->
    <div class="d-flex align-items-center">

      <!-- Logo -->
      <a class="navbar-brand" href="#`">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="" class="d-none d-inline-block tw-h-8">
      </a>

      <!-- Collapsible Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link disabled">Disabled</a>
        </div>
      </div>
    </div>

    <!-- Right Side -->
    <div class="d-flex">

      <a href="#">Logout</a>

    </div>

  </nav>
</template>

<script>
export default {
}
</script>

<style scoped>
</style>