<header>
    <div class="top_header">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="contact_top">
							@if(Helper::GeneralSiteSettings("contact_t3") !="")
                         <a class="call_no" href="tel:{{ Helper::GeneralSiteSettings("contact_t5") }}"> <i class="fas fa-phone-square"></i>{{ Helper::GeneralSiteSettings("contact_t5") }}</a>
                    @endif
                    @if(Helper::GeneralSiteSettings("contact_t6") !="")

                    <a href="mailto:{{ Helper::GeneralSiteSettings("contact_t6") }}"><i class="fas fa-envelope"></i> {{ Helper::GeneralSiteSettings("contact_t6") }}</a>
                    @endif
							
						</div>
					</div>
					<div class="col-xl-6">
						@if(Helper::GeneralSiteSettings("contact_t3") !="")
                         <a class="contact_no" href="tel:{{ Helper::GeneralSiteSettings("contact_t5") }}">{{ Helper::GeneralSiteSettings("contact_t5") }}<span>Call Us</span></a>
                    @endif
					</div>
				</div>
		
		
		
                <!-- <div class="pull-right">
                    <strong>
                        <a href="{{ route("adminHome") }}"><i class="fa fa-cog"></i> {{trans('frontLang.dashboard')}}
                        </a>
                    </strong>
                    @if($WebmasterSettings->languages_count ==2)
                        &nbsp; | &nbsp;
                        <strong>
                            @if(trans('backLang.code')=="ar")
                                <a href="{{ URL::to('lang/en') }}"><i
                                            class="fa fa-language "></i> {{ str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.englishBox')))) }}
                                </a>
                            @else
                                <a href="{{ URL::to('lang/ar') }}"><i
                                            class="fa fa-language "></i> {{ str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.arabicBox')))) }}
                                </a>
                            @endif

                        </strong>
                    @endif
                </div> -->
				
                
        </div>
    </div>
	
    <nav class="navbar navbar-expand-lg navbar-light custom_nav offcanvas-desktop">
        <div class="container">
                <a class="navbar-brand"  href="{{ route("Home") }}">
					@if(Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode')) !="")
                        <img alt=""
                             src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode'))) }}">
                    @else
                        <img alt="" src="{{ URL::to('uploads/settings/nologo.png') }}">
                    @endif
				</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
               
            @include('frontEnd.includes.menu')
        </div>
    </nav>
</header>