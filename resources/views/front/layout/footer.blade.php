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
          <div class="col-lg-9 col-sm-9 mb-4">
            <div class="ftr-info-link">
              <h4>{{ __('messages.footer_heading_two') }}</h4>
              <ul class="list-menu-ftr">
                <li><a href="#"><span>></span> {{ __('messages.Menu1') }}</a></li>
                @foreach($pages as $page)
                <li><a href="@if($page->page_url == 'contact-us') https://wa.me/+355672002573 @else{{ url('page') }}/{{ $page->page_url }}@endif"><span>></span> @if($locale == 'it' and $page->page_title_it)
                    {{ $page->page_title_it }}
                    @else
                    {{ $page->page_title }}
                    @endif</a></li>
                
                @endforeach
              </ul>
            </div>
                    </div>

        </div>
      </div>
            <div class="container px-4 px-lg-5 ftr-btm"><div class="small text-center">{{ __('messages.copyright') }}</div></div>
        </footer>