<!-- Footer-->
        <footer class="py-5 footer-main">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 ftr-upr">
          <div class="col-lg-3 col-sm-3 mb-4">
            <div class="ftr-info">
              <h4>{{ __('messages.footer_heading_one') }}</h4>
              <p>{{ __('messages.footer_content') }}</p>
            </div>
            <div class="social-info">
              <a href="#"><i class="bi bi-instagram"></i></a> <a href="https://wa.me/+355672002573"><i class="bi bi-whatsapp"></i></a>
			  
            </div>
                    </div>
          <div class="col-lg-3 col-sm-3 mb-4">
            <div class="ftr-info">
              <h4>{{ __('messages.footer_heading_two') }}</h4>
              <ul class="list-menu-ftr">
                <li><a href="#"><span>></span> {{ __('messages.Home') }}</a></li>
                @foreach($pages as $page)
                <li><a href="{{ url('page') }}/{{ $page->page_url }}"><span>></span> {{ $page->page_title }}</a></li>
                
                @endforeach
              </ul>
            </div>
                    </div>
          <div class="col-lg-3 col-sm-3 mb-4">
            <div class="ftr-info">
              <h4>{{ __('messages.footer_heading_three') }}</h4>
              <ul class="list-menu-ftr">
                <li><a href="#"><span>></span> {{ __('messages.location_one') }}</a></li>
                <li><a href="#"><span>></span> {{ __('messages.location_two') }}</a></li>
                <li><a href="#"><span>></span> {{ __('messages.location_three') }}</a></li>
                <li><a href="#"><span>></span> {{ __('messages.location_four') }}</a></li>
              </ul>
            </div>
                    </div>
          <div class="col-lg-3 col-sm-3 mb-4">
            <div class="ftr-info">
              <h4>{{ __('messages.footer_heading_four') }}</h4>
              <ul class="list-menu-ftr">
                <li><a href="#"><span>></span> {{ __('messages.cat_one') }}</a></li>
                <li><a href="#"><span>></span> {{ __('messages.cat_two') }}</a></li>
                <li><a href="#"><span>></span> {{ __('messages.cat_three') }}</a></li>
                <li><a href="#"><span>></span> {{ __('messages.cat_four') }}</a></li>
              </ul>
            </div>
                    </div>
        </div>
      </div>
            <div class="container px-4 px-lg-5 ftr-btm"><div class="small text-center">{{ __('messages.copyright') }}</div></div>
        </footer>