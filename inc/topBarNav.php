<nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top" id="topNavBar">
            <div class="container d-flex justify-content-between px-4 px-lg-5 ">
                <div> 
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="./">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                <?php echo $_settings->info('short_name') ?>
                </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ps-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="px-2 text-decoration-none text-white" aria-current="page" href="./">Home</a></li>
                        <li class="nav-item"><a class="px-2 text-decoration-none text-white" href="./?p=about">About Us</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })
</script>