<?php
$footer_style = "";
if (Helper::GeneralSiteSettings("style_footer_bg") != "") {
    $bg_file = URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_footer_bg"));
    $bg_color = Helper::GeneralSiteSettings("style_color1");
    $footer_style = "style='background: $bg_color url($bg_file) repeat-x center top'";
}
if (Helper::GeneralSiteSettings("style_footer") != 1) {
    $footer_style = "style=padding:0";
}
?>
<footer {!!  $footer_style !!}>
<div class="call_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="call_txt">
                        <h2>Call Us now for immediate support</h2>
                        <p>Uae Technician is not affiliated with any of the companies on this site. We do not have any 
                                official connections, relationships, or associations with the companies and brands listed on the site.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                <h1 class="callno">
                @if(Helper::GeneralSiteSettings("contact_t3") !="")
<p><i class="fa fa-phone"></i> &nbsp;<a href="call:{{ Helper::GeneralSiteSettings("contact_t3") }}"><span
dir="ltr">{{ Helper::GeneralSiteSettings("contact_t3") }}</span></a></p>
@endif
</h1>
</div>
</div>
</div>
</div>
@if(Helper::GeneralSiteSettings("style_footer")==1)
        <?php
        $bx1w = 3;
        $bx2w = 3;
        $bx3w = 3;
        $bx4w = 3;
        if (count($LatestNews) == 0 && Helper::GeneralSiteSettings("style_subscribe") == 0) {
            $bx1w = 6;
            $bx2w = 6;
            $bx3w = 6;
            $bx4w = 6;
        } elseif (count($LatestNews) == 0 || Helper::GeneralSiteSettings("style_subscribe") == 0) {
            $bx1w = 4;
            $bx2w = 4;
            $bx3w = 4;
            $bx4w = 4;
        }

        ?>
		<div class="footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-2">
                    <div class="widget footer_box">
                        <?php
                        $link_title_var = "title_" . trans('backLang.boxCode');
                        $main_title_var = "FooterMenuLinks_name_" . trans('backLang.boxCode');
                        $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
                        $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
                        ?>
                        <h4 class="widgetheading"><i class="fa fa-bookmark"></i>&nbsp; {{$$main_title_var}}</h4>
                        <ul class="link-list quicklink">
                            @foreach($FooterMenuLinks as $FooterMenuLink)
                                @if($FooterMenuLink->type==3 || $FooterMenuLink->type==2)
                                    {{-- Get Section Name as a link --}}
                                    <li>
                                        <?php
                                        if ($FooterMenuLink->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $mmnnuu_link = url(trans('backLang.code') . "/" . $FooterMenuLink->webmasterSection->$slug_var);
                                            } else {
                                                $mmnnuu_link = url($FooterMenuLink->webmasterSection->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $mmnnuu_link = url(trans('backLang.code') . "/" . $FooterMenuLink->webmasterSection->name);
                                            } else {
                                                $mmnnuu_link = url($FooterMenuLink->webmasterSection->name);
                                            }
                                        }
                                        ?>
                                        <a href="{{ $mmnnuu_link }}">{{ $FooterMenuLink->$link_title_var }}</a>
                                    </li>
                                @elseif($FooterMenuLink->type==1)
                                    {{-- Direct link --}}
                                    <?php
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $this_link_url = url(trans('backLang.code') . "/" . $FooterMenuLink->link);
                                    } else {
                                        $this_link_url = url($FooterMenuLink->link);
                                    }
                                    ?>
                                    <li>
                                        <a href="{{ $this_link_url }}">{{ $FooterMenuLink->$link_title_var }}</a>
                                    </li>
                                @else
                                    {{-- No link --}}
                                    <li><a>{{ $FooterMenuLink->$link_title_var }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                @if(count($LatestNews)>0)
                    <?php
                    $footer_title_var = "title_" . trans('backLang.boxCode');
                    $footer_title_var2 = "title_" . trans('backLang.boxCodeOther');
                    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
                    $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
                    ?>
                    <div class="col-lg-4">
                 
                        <div class="footer_box">
                        <h4>POPULAR TAGS</h4>
                           
                            <ul class="link-list quicklink">
                                @foreach($LatestNews as $LatestNew)
                                    <?php
                                    if ($LatestNew->$footer_title_var != "") {
                                        $LatestNew_title = $LatestNew->$footer_title_var;
                                    } else {
                                        $LatestNew_title = $LatestNew->$footer_title_var2;
                                    }
                                    if ($LatestNew->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                            $topic_link_url = url(trans('backLang.code') . "/" . $LatestNew->$slug_var);
                                        } else {
                                            $topic_link_url = url($LatestNew->$slug_var);
                                        }
                                    } else {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                            $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $LatestNew->webmasterSection->name, "id" => $LatestNew->id]);
                                        } else {
                                            $topic_link_url = route('FrontendTopic', ["section" => $LatestNew->webmasterSection->name, "id" => $LatestNew->id]);
                                        }
                                    }
                                    ?>
                                    <li>
                                        <a href="{{ $topic_link_url }}">{{ $LatestNew_title }}</a>
                                    </li>
                                @endforeach
                            </ul>

                <!--social media start-->
                <div class="social_media mt-3">
                            <h4>Connect With Us</h4>
             
                <ul class="social-network">
                        @if($WebsiteSettings->social_link1)
                            <li><a href="{{$WebsiteSettings->social_link1}}" data-placement="top" title="Facebook"
                                   target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                        @endif
                        @if($WebsiteSettings->social_link2)
                            <li><a href="{{$WebsiteSettings->social_link2}}" data-placement="top" title="Twitter"
                                   target="_blank"><i
                                            class="fa fa-twitter"></i></a></li>
                        @endif
                        @if($WebsiteSettings->social_link3)
                            <li><a href="{{$WebsiteSettings->social_link3}}" data-placement="top" title="Google+"
                                   target="_blank"><i
                                            class="fa fa-google-plus"></i></a></li>
                        @endif
                    
                       
                    </ul>

                    </div>
          
                <!--social media end-->

                        </div>
                    </div>
                @endif



                <div class="col-lg-3">
                    <div class="widget contacts">
                        <h4 class="widgetheading"><i
                                    class="fa fa-phone-square"></i>&nbsp; {{ trans('frontLang.contactDetails') }}</h4>
                        @if(Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode')) !="")
                            <address>
                                <strong>{{ trans('frontLang.address') }}:</strong><br>
                                <i class="fa fa-map-marker"></i>
                                &nbsp;{{ Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode')) }}
                            </address>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t3") !="")
                            <p>
                                <strong>{{ trans('frontLang.callUs') }}:</strong><br>
                                <i class="fa fa-phone"></i> &nbsp;<a
                                        href="call:{{ Helper::GeneralSiteSettings("contact_t3") }}"><span
                                            dir="ltr">{{ Helper::GeneralSiteSettings("contact_t3") }}</span></a></p>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t6") !="")
                            <p>
                                <strong>{{ trans('frontLang.email') }}:</strong><br>
                                <i class="fa fa-envelope"></i> &nbsp;<a
                                        href="mailto:{{ Helper::GeneralSiteSettings("contact_t6") }}">{{ Helper::GeneralSiteSettings("contact_t6") }}</a>
                            </p>
                        @endif
                    </div>
                </div>
                @include('frontEnd.includes.subscribe')

            </div>
        </div>
		</div>
    @endif
    <div class="container">
    <div class="popular_ser">
                <h5>POPULAR SERVICES</h5>
                <div class="row">
                    <div class="col-md-3">
                        <ul>
                            <li><a href="#">Data Recovery</a></li>
                            <li><a href="#">Desktop/PC Data Recovery</a></li>
                            <li><a href="#">Mac Data Recovery</a></li>
                            <li><a href="#">Laptop Data Recovery</a></li>
                            <li><a href="#">Hard Drive Data Recovery</a></li>
                            <li><a href="#">Flash / Memory Card Data Recovery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a href="#">SQL Data Recovery</a></li>
                            <li><a href="#">Server Data Recovery</a></li>
                            <li><a href="#">Smart Devices Data Recovery</a></li>
                            <li><a href="#">NAS / SAN Data Recovery</a></li>
                            <li><a href="#">Apple Data Recovery Service</a></li>
                            <li><a href="#">SSD Solid State Drives Data Recovery</a></li>
                            <li><a href="#">External Drive Data Recovery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a href="#">RAID Recovery</a></li>
                            <li><a href="#">Personal Data Recovery</a></li>
                            <li><a href="#">Ransomware Data Recovery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a href="#">Laptop Liquid Damage</a></li>
                            <li><a href="#">PC Clean-up & Tune-up</a></li>
                            <li><a href="#">OS Update Services</a></li>
                            <li><a href="#">MS Surface Support Services</a></li>
                            <li><a href="#">Alienware Support Service</a></li>
                        </ul>
                    </div>
                </div>
                
</div>

            </div>


    
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <?php
                        $site_title_var = "site_title_" . trans('backLang.boxCode');
                        ?>
                        &copy; <?php echo date("Y") ?> <a>{{$WebsiteSettings->$site_title_var}}</a>.  {{ trans('frontLang.AllRightsReserved') }}
                        . 
                    </div>
                </div>
                <div class="col-lg-6">
                  
                <div class="privecy">
                        <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                        <a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a>
                        <a href="{{ url('/refund-policy') }}">Refund Policy</a>
                        <a href="{{ url('/disclaimer') }}">Disclaimer</a>
                    
                    </div>    
                </div>


            </div>
        </div>
    </div>
</footer>