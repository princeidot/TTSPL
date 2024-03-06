<div class="header-wrapper">
    <div class="pre-header">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="pbmit-pre-header-left" style="font-size:15px;">
                    <i class="pbmit-base-icon-clock"></i>Welcome To Trisnota Technical Services Pvt. Ltd.
                    <!--<a>Need Any Help ?</a>-->
                </div>
                <div class="pbmit-pre-header-right">
                    <ul class="pbmit-top-links">
                        <li><a>Careers</a> <span>|</span></li>
                        <li><a>News &amp; Media</a> <span>|</span></li>
                        <li><a>Faq</a></li>
                        <li>
                            <ul class="pbmit-social-links">
                                <li class="pbmit-social-li pbmit-social-facebook ">
                                    <a href="https://www.linkedin.com/company/ttspl/" target="_blank"><span>
                                            <i class="pbmit-base-icon-linkedin-squared"></i></span>
                                    </a>
                                </li>
                                
                                <li class="pbmit-social-li pbmit-social-youtube ">
                                    <a href="https://youtu.be/mfsvBf9wqHY" target="_blank"><span>
                                            <i class="pbmit-base-icon-youtube-play"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
           <a href="{{ url('') }}">
           <div class="site-branding">
                
                    <img class="logo-img" src="{{ url('asset/newimg/logo/ttspl-logo-r.webp') }}" alt="TTSPL">
               
            </div>
             </a>
            <div class="pbmit-header-info d-flex align-items-center">
                <div class="pbmit-header-info-inner">
                    
                    <div class="pbmit-header-box pbmit-header-box-1">
                        <a href="{{route('contact')}}">
                            <span class="pbmit-header-box-icon">
                                <i class="pbmit-colza-icon pbmit-colza-icon-location" style="top: 0px;"></i>
                            </span>
                            <span class="pbmit-header-box-title">Navi Mumbai</span>
                            <!--<span class="pbmit-header-box-content"> Plot no. 37, Sector - 11</span>-->
                        </a>
                    </div>
                    <div class="pbmit-header-box pbmit-header-box-1">
                        <a href="{{route('contact')}}">
                            <span class="pbmit-header-box-icon">
                                <i class="pbmit-colza-icon pbmit-colza-icon-location" style="top: 0px;"></i>
                            </span>
                            <span class="pbmit-header-box-title">Kolkata</span>
                            <!--<span class="pbmit-header-box-content"> G1, Plot No. 2964,</span>-->
                        </a>
                    </div>
                    <div class="pbmit-header-box pbmit-header-box-2">
                        <a href="mailto:sales@ttspl.co.in">
                            <span class="pbmit-header-box-icon">
                                <i class="pbmit-colza-icon pbmit-colza-icon-email" style="top: 0px;"></i>
                            </span>
                            <span class="pbmit-header-box-title" style="margin-top:-3px">sales@ttspl.co.in</span>
                            <!--<span class="pbmit-header-box-content">.</span>-->
                        </a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="pbmit-btn pbmit-btn-outline">
                    <span>Inquiry</span>
                </a>
            </div>
        </div>
    </div>
    <div class="site-header-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                       <a href="{{ url('') }}">
                        <div class="site-branding">
                           
                                <img class="logo-img" src="{{ url('asset/newimg/logo/ttspl-logo-r.webp') }}"
                                    alt="">
                            
                        </div>
                        </a>
                        <div class="navigation-top-wrapper">
                            <div class="site-navigation">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                    <div class="pbmit-mobile-menu-bg"></div>
                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                        <div class="pbmit-menu-wrap">
                                            <span class="closepanel">
                                                <i class="pbmit-base-icon-cancel"></i>
                                            </span>
                                            <ul class="navigation clearfix">
                                                <li class="{{ Request::is('') ? 'active' : '' }}"><a
                                                        href="{{ url('') }}">Home</a></li>
                                                <li class="{{ Request::is('abouts-us') ? 'active' : '' }}"><a
                                                        href="{{ route('about') }}">About us</a></li>
                                                <li class="dropdown {{ Request::is('our-products') ? 'active' : '' }}">
                                                    <a>Products</a>
                                                    <ul>
                                                        <li class="dropdown"><a>Fiber Optic</a>
                                                            <ul>
                                                                
                                                                <li class="dropdown"><a
                                                                        href="{{ route('fibre') }}">Fibre Optic Sensing
                                                                        System</a>
                                                                    <ul>
                                                                        <li><a
                                                                                href="{{ route('conveyor') }}">Conveyor</a>
                                                                        </li>
                                                                        <li><a href="{{route('perimeter')}}">Perimeter</a></li>
                                                                        <li><a href="{{route('pipeline')}}">Pipeline</a></li>
                                                                        <li><a href="{{route('slope')}}">Slope</a></li>
                                                                        <li><a href="{{route('padc')}}">Power & Data
                                                                                Cable</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="{{route('tatus')}}">Temperature Monitoring System</a></li>
                                                                 <li class="dropdown"><a>Application</a>
                                                                        <ul style="columns:2;width:500px">
                                                                        <li><a class="" href="{{url('STEEL PLANT.pdf')}}" target="_blank">Steel Plant</a></li>
                                                                        <li><a href="{{url('REACTOR SKIN TEMPERATURE MONITORING.pdf')}}" target="_blank">Reactor Skin Temperature Monitoring</a></li>
                                                                        <li><a href="{{url('TEMPERATURE MONITORING OF INDUCTION FURNACES.pdf')}}" target="_blank">Temperature Monitoring Of Induction Furnaces</a></li>
                                                                        <li><a href="{{url('SUBSTATION.pdf')}}" target="_blank">Substation</a></li>
                                                                        <li><a href="{{url('THERMAL POWER PLANT.pdf')}}" target="_blank">Thermal Power Plant</a></li>
                                                                        <li><a href="{{url('PANELS IN CONTROL ROOMGAIL.pdf')}}" target="_blank">Panels In Control Room</a></li>
                                                                        <li><a href="{{url('GAIL.pdf')}}" target="_blank">Gail</a></li>
                                                                        <li><a href="{{url('NUCLEAR POWER PLANT.pdf')}}" target="_blank">Nuclear Power Plant</a></li>
                                                                        <li><a href="{{url('RAILWAY SWITCH ROOM.pdf')}}" target="_blank">Railway Switch Room</a></li>
                                                                        <li><a href="{{url('DTS RAILWAYS.pdf')}}" target="_blank">Dts Railways</a></li>
                                                                        <li><a href="{{url('FIRE DETECTION IN TUNNELS AND METROS.pdf')}}" target="_blank">Fire Detection In Tunnels And Metros</a></li>
                                                                        <li><a href="{{url('CABLE TRAY.pdf')}}" target="_blank">Cable Tray</a></li>
                                                                        
                                                                            </ul>
                                                                        </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href={{route('bdp')}}>Biodegradable Plastic</a> </li>
                                                        <li class="dropdown"><a>Level Instruments</a>
                                                            <ul>
                                                                <li class="dropdown"><a
                                                                        href="{{ route('leverl.sensors') }}">Level
                                                                        Transmitters
                                                                        / Sensors</a>
                                                                    <ul>
                                                                        <li><a href="{{route('awt')}}">Acoustic Wave
                                                                                Transmitter</a></li>
                                                                        <li><a href="{{route('lasert')}}">Laser
                                                                                Transmitter</a></li>
                                                                        <li><a href="{{route('gwrlt')}}">Guided Wave Radar
                                                                                Level
                                                                                Transmitter</a></li>
                                                                        <li><a href="{{route('fsrlt')}}">Free Space Radar
                                                                                Level
                                                                                Transmitter</a></li>
                                                                        <li><a href="{{route('mult')}}">Ultrasonic Level
                                                                                Transmitter</a></li>
                                                                        <li><a href="{{route('sli')}}">Sonar Level
                                                                                Interface /
                                                                                Sludge Level / Bed Level /solid
                                                                                level</a></li>

                                                                    </ul>
                                                                </li>
                                                                <li><a href="{{route('mlg')}}">Magnetic Level Gauge</a></li>
                                                                <li class="dropdown"><a href="{{route('ls')}}">Level Switches</a>
                                                                    <ul>
                                                                        <li><a href="{{route('asfb')}}">Acoustic Switch for blockages</a></li>
                                                                        <li><a href="{{route('lhts')}}">High temperature Switch for Fly Ash</a></li>
                                                                        <li><a href="{{route('vibrating')}}">Vibrating Level Switch</a></li>
                                                                        <li><a href="{{route('dms')}}">Doppler Microwave Switches</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown"><a href="{{route('flow.meter')}}">Flow Meters</a>
                                                        <ul>
                                                            <li><a href="{{route('cmfm')}}">Coriolis Mass Flow Meter</a></li>
                                                            <li><a href="{{route('megaflow')}}">Magflow</a></li>
                                                            <li><a href="{{route('varea')}}">Variable area</a></li>
                                                            <li><a href="{{route('uco')}}">Ultrasonic Clamp on</a></li>
                                                            
                                                        </ul>
                                                       </li>
                                                       <li class="dropdown"><a href="{{route('pressure')}}">Pressure Transmitters</a>
                                                        <ul>
                                                            <li><a href="{{route('differential')}}">Differential Pressure</a></li>
                                                            <li><a href="{{route('absolute')}}">Absolute Pressure</a></li>
                                                            <li><a href="{{route('multivariable')}}">Multivariable</a></li>                                                            
                                                        </ul>
                                                       </li>

                                                    </ul>
                                                </li>
                                              
                                                {{-- <li>
                                                    <a href="services.html">Industries</a>

                                                </li> --}}
                                                <li class="dropdown">
                                                    <a href="{{route('kbusiness')}}">Key Business Partners</a>
                                                    <ul>
                                                        <li><a href="{{route('hawk')}}">Hawk</a></li>
                                                        <li><a href="{{route('sm')}}">Smart Measurements</a></li>
                                                        <li><a href="{{route('ft')}}">Fine Tek</a></li>
                                                        <li><a href="{{route('jcbachmann')}}">J&C Bachmann</a></li>

                                                    </ul>
                                                </li>
                                                <li class="{{ Request::is('certifications') ? 'active' : '' }}"><a
                                                        href="{{ route('certification') }}">Certifications</a></li>
                                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a
                                                        href="{{ route('contact') }}">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <div class="pbmit-header-search-btn">
                                    <a><i class="pbmit-base-icon-search"></i></a>
                                </div>
                            </div>
                            <div class="pbmit-right-box ms-auto">
                                <div class="pbmit-header-button">
                                    <a>
                                        <img src="{{ url('asset/newimg/logo/iso-logo-black-and-white.png') }}" class="colorchange" style="height:100%;margin-left:-15px">
                                      <span class="pbmit-header-button-text-1">ISO 9001: 2015</span><br> 
                                        <span class="pbmit-header-button-text-1">ISO 14001: 2015</span>
                                        
                                        <br><span class="pbmit-header-button-text-1">ISO 45001: 2018</span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
