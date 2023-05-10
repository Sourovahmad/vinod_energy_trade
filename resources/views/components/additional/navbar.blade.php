<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
    <span class="navbar-brand">
      <a href="{{ route("user_home") }}" class="nav-link" role="button"
        ><img
          alt="Image"
          src="{{ asset('logo/logo.jpeg') }}"
          class="img-fluid d-inline"
          style="height:100px; border-radius:25px"
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
        
        <a  class="ml-auto nav-link" role="button" onclick="logoutFormSubmit()" title="logout">
          <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="none"
          stroke="#000000"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="MuiSvgIcon-root MuiSvgIcon-colorAction"
          focusable="false"
        >
          <path d="M15 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"></path>
          <polyline points="10 17 15 12 10 7"></polyline>
        </svg>
        
        
          {{ auth()->user()->name }}
        </a>


        
      </div>
    </div>
  </nav>


  <form action="{{ route('logout') }}" method="POST" id="logout_form_id" hidden>
    @csrf
    <button type="submit" style="color: black"> Logout</button>
  </form>


  <script>
    
    function logoutFormSubmit(){

     if (confirm("Are You Sure Want to logout ?")) {
       document.getElementById("logout_form_id").submit();
     }else{
      return false
     }
    }

  </script>
  