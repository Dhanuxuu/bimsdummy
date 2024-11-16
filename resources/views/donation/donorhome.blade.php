@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding: 16px;margin-top: 17px;">
  <div class="row">
    <!-- Sidebar / Vertical Navbar -->
    <nav class="col-md-3 col-lg-2 d-md-block bg-white shadow-sm sidebar" style="margin-top:-2px">
      <div class="position-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-black" href="{{route('donation/adddonacamp')}}">{{ __('Create Blood Camp') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{route('donation/modifycamp')}}">{{ __('Modify Blood Camp') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{route('donation/approvedonors')}}">{{ __('Registered Donors Details') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{route('donation/donationcamp')}}">{{ __('Display Donors') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{url('/')}}">{{ __('Camp Analysis') }}</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content Area -->
    <!-- <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <h2>Page Content</h2>
      <p>This is the main content area. The vertical navbar is fixed on the left side.
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque 
      laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
      sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur 
      magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit 
      amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam 
      aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam
      , nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
      quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
      This is the main content area. The vertical navbar is fixed on the left side.
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque 
      laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
      sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur 
      magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit 
      amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam 
      aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam
      , nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
      quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
      This is the main content area. The vertical navbar is fixed on the left side.
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque 
      laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
      sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur 
      magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit 
      amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam 
      aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam
      , nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
      quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
      </p>
    </main> -->
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#c7c6c6;">
    @yield('subcontent')
    </main>
  </div>
</div>
@endsection

