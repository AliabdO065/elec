<div class="site-branding-wrap">
    <div class="site-branding-left"></div> 
    <div class="site-branding-center" 
         style="position: relative; display:flex; align-items:center; justify-content:center; gap:15px;">
<a href="{{ route('fronted.index') }}" rel="home" 
   style="display:flex; align-items:center; text-decoration:none; color:inherit; gap:10px;">
    
    <!-- Circle background wrapper -->
    <div style="
        width:60px; 
        height:60px; 
         border-radius:50%; 
        display:flex; 
        align-items:center; 
        justify-content:center; 
        flex-shrink:0;
    ">
        <img src="{{ asset('images/logo.jpg') }}" 
             alt="Els Scuba Logo" 
     style="display:block; max-width:70px; height:auto; border-radius:50%; margin-left:30px; object-fit:cover;">
    </div>

    <!-- Text part -->
    <div>
        <h1 class="site-title" style="margin:0; font-size:28px; color:#3064af;">
            Elsscuba
        </h1>
        <p class="site-description" style="margin:0; font-size:14px; color:#666;">
        </p>
    </div>
</a>

    </div> 

    <div class="site-branding-right"></div>  
</div>

 
    <style>
         .site-title .site-title-text {
                line-height: 3 !important;
        }
    </style>
