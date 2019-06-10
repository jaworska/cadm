<div class="container-fluid footer d-none d-md-block">
    <div class="row">
        <div class="col-2">
            <a href="{{ route("home") }}"><img src="/img/logo-cadm-white.png" srcset="/img/logo-cadm-white@2x.png 2x, /img/logo-cadm-white@3x.png 3x" class="logoCADM_white"></a>
        </div>
        <div class="col-2 nav-footer">
            <p><a href="{{ route("group") }}">@lang("pages.navigation.the-group")</a></p>
            <ul>
                <li class="position-relative"><a href="{{ route("group") }}/#about-us">@lang("pages.navigation.about")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#customers">@lang("pages.navigation.clients")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#our-values">@lang("pages.navigation.values")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#code-of-ethics">@lang("pages.navigation.ethics")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#eu-grants">@lang("pages.navigation.grants")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#we-love-to-help">@lang("pages.navigation.help")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#partners">@lang("pages.navigation.partners")</a></li>
            </ul>
        </div>
        <div class="col-2 nav-footer">
            <p><a href="{{ route("sectors") }}">@lang("pages.navigation.sectors")</a></p>
            <ul>
                <li><a href="{{ route("sectors") }}/#automotive">@lang("pages.navigation.automotive")</a></li>
                <li><a href="{{ route("sectors") }}/#rolling-stock">@lang("pages.navigation.rolling")</a></li>
                <li><a href="{{ route("sectors") }}/#maritime">@lang("pages.navigation.maritime")</a></li>
                <li><a href="{{ route("sectors") }}/#aerospace">@lang("pages.navigation.aerospace")</a></li>
                <li><a href="{{ route("sectors") }}/#others">@lang("pages.navigation.others")</a></li>
            </ul>
        </div>
        <div class="col-2 nav-footer">
            <p><a href="{{ route("career") }}">@lang("pages.navigation.careers")</a></p>
            <ul>
                <li class="position-relative"><a href="{{ route("team") }}">@lang("pages.navigation.meet")/a></li>
                <li class="position-relative"><a href="{{ route("career") }}/#friendly-company">@lang("pages.navigation.friendly")</a></li>
                <li class="position-relative"><a href="{{ route("application") }}">@lang("pages.navigation.application")</a></li>
                <li class="position-relative"><a href="{{ route("career") }}/#current-job-offers">@lang("pages.navigation.current-job")</a></li>
            </ul>
        </div>
        <div class="col-2 nav-footer">
            <p><a href="{{ route("contact") }}">@lang("pages.navigation.contact")</a></p>
            <ul>
                <li>info@cadm-a.com</li>
                <li>+48 12 397 21 82</li>
                <li>CADM Automotive Sp. z o.o.</li>
                <li>Lindego 1c 30-148 Kraków</li>
            </ul>
            <a href="{{ route("contact") }}" class="btn btn-see">@lang("pages.navigation.locations")</a>
        </div>
        <div class="col-2 nav-footer">
            <div class="socials d-flex">
                <a href="https://www.facebook.com/CADM.Automotive" target="_blank"><img src="/img/fb.png" class="fb"></a>
                <a href="https://www.linkedin.com/company/cadm-automotive" target="_blank"><img src="/img/in.png" class="in"></a>
                <a href="https://www.instagram.com/cadmautomotive/" target="_blank"><img src="/img/insta.png" class="insta"></a>
            </div>
        </div>
    </div>
    <div class="row range">
        <div class="col-10 offset-md-2">
            <p>@lang("pages.navigation.range")</p>
        </div>
    </div>
    <div class="row">
        <div class="col-2 nav-footer offset-md-2">
            <ul>
                <li class="bold"><a href="{{ route("services") }}" class="bold">@lang("pages.navigation.concept")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.benchmarking")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.product")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.sales")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.definition")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.capacity")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.costing")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.model")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.styling")</a></li>
            </ul>
        </div>
        <div class="col-2 nav-footer">
            <ul>
                <li class="bold"><a href="{{ route("services") }}" class="bold">@lang("pages.navigation.development")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.cas")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.cad")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.apqp")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.documentation")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.prototyping")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.test")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.electronic-hardware")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.electronic-software")</a></li>
            </ul>
        </div>
        <div class="col-2 nav-footer">
            <ul>
                <li class="bold"><a href="{{ route("services") }}" class="bold">@lang("pages.navigation.simulation")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.implict")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.explict")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.cfd")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.mbd")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.em")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.stackup")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.optical")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.gap")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.thickness")</a></li>
            </ul>
        </div>
        <div class="col-2 nav-footer">
            <ul>
                <li class="bold"><a href="{{ route("services") }}" class="bold">@lang("pages.navigation.production")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.mold")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.tooling")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.gauges")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.launch")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.trouble")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.transfer")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.improvements")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.optimization")</a></li>
            </ul>
        </div>
        <div class="col-2 nav-footer">
            <ul>
                <li class="bold"><a href="{{ route("services") }}" class="bold">@lang("pages.navigation.management")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.project-management")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.interim-management")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.supplier")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.quality")</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid copyright d-none d-md-block">
    <div class="row">
        <div class="col-12">
            <span class="text-center">Copyright &copy;2019 CADM Automotive | All rights reserved | Powered by <a href="https://invisio.digital" target="_blank" title="Invisio - Digital Solutions | Agencja Interaktywna w Krakowie | Strony WWW, sklepy internetowe, aplikacje dla firm">Invisio</a></span>
            <span class="text-right">
						<a href="#">@lang("pages.navigation.privacy")</a>
						<a href="#">@lang("pages.navigation.terms")</a>
					</span>
        </div>
    </div>
</div>


<div class="container-fluid footer d-md-none d-sm-block">
    <div class="row">
        <div class="col-6 nav-footer margin-nav">
            <a href="{{ route("home") }}"><img src="/img/logo-cadm-white.png" srcset="/img/logo-cadm-white@2x.png 2x, /img/logo-cadm-white@3x.png 3x" class="logoCADM_white"></a>
            <p>@lang("pages.navigation.contact")</p>
            <ul>
                <li>info@cadm-a.com</li>
                <li>+48 12 397 21 82</li>
                <li>CADM Automotive Sp. z o.o.</li>
                <li>Lindego 1c 30-148 Kraków</li>
            </ul>
            <button action="{{ route("contact") }}" type="button" class="btn btn-see">@lang("pages.navigation.locations")</button>
        </div>
        <div class="col-6 nav-footer">
            <div class="socials d-flex">
                <a href="https://www.facebook.com/CADM.Automotive" target="_blank"><img src="/img/fb.png" class="fb"></a>
                <a href="https://www.linkedin.com/company/cadm-automotive" target="_blank"><img src="/img/in.png" class="in"></a>
                <a href="https://www.instagram.com/cadmautomotive/" target="_blank"><img src="/img/insta.png" class="insta"></a>
            </div>
        </div>

        <div class="col-6 nav-footer margin-top-nav">
            <p><a href="{{ route("group") }}">@lang("pages.navigation.the-group")</a></p>
            <ul>
                <li class="position-relative"><a href="{{ route("group") }}/#about-us">@lang("pages.navigation.about")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#customers">@lang("pages.navigation.clients")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#our-values">@lang("pages.navigation.values")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#code-of-ethics">@lang("pages.navigation.ethics")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#eu-grants">@lang("pages.navigation.grants")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#we-love-to-help">@lang("pages.navigation.help")</a></li>
                <li class="position-relative"><a href="{{ route("group") }}/#partners">@lang("pages.navigation.partners")</a></li>
            </ul>
        </div>
        <div class="col-6 nav-footer margin-top-nav">
            <p><a href="{{ route("sectors") }}">@lang("pages.navigation.sectors")</a></p>
            <ul>
                <li><a href="{{ route("sectors") }}/#automotive">@lang("pages.navigation.automotive")</a></li>
                <li><a href="{{ route("sectors") }}/#rolling-stock">@lang("pages.navigation.rolling")</a></li>
                <li><a href="{{ route("sectors") }}/#maritime">@lang("pages.navigation.maritime")</a></li>
                <li><a href="{{ route("sectors") }}/#aerospace">@lang("pages.navigation.aerospace")</a></li>
                <li><a href="{{ route("sectors") }}/#others">@lang("pages.navigation.others")</a></li>
            </ul>
        </div>
        <div class="col-6 nav-footer margin-top-nav">
            <p><a href="{{ route("career") }}">@lang("pages.navigation.careers")</a></p>
            <ul>
                <li class="position-relative"><a href="{{ route("team") }}">@lang("pages.navigation.meet")/a></li>
                <li class="position-relative"><a href="{{ route("career") }}/#friendly-company">@lang("pages.navigation.friendly")</a></li>
                <li class="position-relative"><a href="{{ route("application") }}">@lang("pages.navigation.application")</a></li>
                <li class="position-relative"><a href="{{ route("career") }}/#current-job-offers">@lang("pages.navigation.current-job")</a></li>
            </ul>
        </div>
        <div class="col-6 nav-footer margin-top-nav">
            <p>@lang("pages.navigation.range")</p>
            <ul>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.concept")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.development")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.simulation")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.production")</a></li>
                <li><a href="{{ route("services") }}">@lang("pages.navigation.management")</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid copyright d-md-none d-sm-block">
    <div class="row">
        <div class="col-4">
            <span class="text-center">Copyright &copy;2019</span>
        </div>
        <div class="col-4">
            <a href="#">@lang("pages.navigation.terms")</a>
        </div>
        <div class="col-4">
            <a href="#">@lang("pages.navigation.privacy")</a>
        </div>
        <div class="col-12 d-inline">
            <span class="text-center">Powered by <a href="https://invisio.digital" target="_blank" title="Invisio - Digital Solutions | Agencja Interaktywna w Krakowie | Strony WWW, sklepy internetowe, aplikacje dla firm">Invisio</a></span>
        </div>
    </div>
</div>
