<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
    <span class="navbar-brand">
      <a href="{{ route("user_home") }}" class="nav-link" role="button"
        ><img
          alt="Image"
          src="https://conectoenergia.com/logoConecto.636f4a8f.png"
          class="img-fluid d-inline"
      /></a>
    </span>
    <button
      aria-controls="responsive-navbar-nav"
      type="button"
      aria-label="Toggle navigation"
      class="navbar-toggler collapsed"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="responsive-navbar-nav">
      <div class="ml-auto navbar-nav">
        <a href="{{ route('user_home') }}" class="ml-auto nav-link" role="button">
          <svg
            class="MuiSvgIcon-root MuiSvgIcon-colorAction"
            focusable="false"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
          </svg>
        </a>
        
        <a href="#" class="ml-auto nav-link" role="button">
          <svg
            class="MuiSvgIcon-root MuiSvgIcon-colorAction"
            focusable="false"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"
            ></path>
          </svg>
          {{ auth()->user()->name }}
        </a>
      </div>
    </div>
  </nav>