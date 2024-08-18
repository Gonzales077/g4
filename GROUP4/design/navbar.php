<!-- Transparent Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark fixed-top transparent-navbar">
  <div class="container-fluid">
    <!-- Replace Logo text with an image -->
    <a class="navbar-brand" href="javascript:void(0)">
      <img src="design/logo1.png" alt="Logo" style="width: 0px; height: auto;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
      </form>
    </div>
  </div>
</nav>

<!-- CSS -->
<style>
  /* Transparent Navbar */
  .transparent-navbar {
    background-color: rgba(0, 0, 0,); /* Adjust the RGBA value for the transparency level */
    box-shadow: none; /* Removes any default box-shadow */
    z-index: 1030; /* Ensures the navbar stays on top of other content */
  }

  body {
    margin: 0; /* Remove default margin */
  }

  .container {
    padding-top: 56px; /* Adjust this value to match the height of your navbar */
  }

  .background-image {
    z-index: -1;
  }
</style>
