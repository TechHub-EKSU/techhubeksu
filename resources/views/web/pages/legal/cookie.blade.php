@extends('web.layout.techhub')

@section('pageTitle', __('Cookie Policy | ' . config('app.name')))
@section('pageDescription', __('This Cookie Policy explains how ' . config('app.name') .' ("Company", "we", "us", and "our") uses cookies and similar technologies to recognize you when you visit our website'))

@section('content')
@include('web.includes.banner', ['bannerTitle' => "cookie policy", 'bannerMaster' => "legal"])
<section class="writing-area pt-50 pb-120">
  <div class="container">
    <div class="row">
      <div class="col-12 writing-content">
        <div class="text-center ptb-20">
          <h3>Lastly Updated 9 Feburary 2021</h3>
        </div>
        <div>
          <p>This Cookie Policy explains how {{ config('app.name') }} ("Company", "we", "us", and "our") uses cookies and similar technologies to recognize you when you visit our websites at <a href="{{ config('app.url') }}" target="blank">{{ config('app.url') }}</a>, ("Websites"). It explains what these technologies are and why we use them, as well as your rights to control our use of them.</p>
          <p>In some cases we may use cookies to collect personal information, or that becomes personal information if we combine it with other information.</p>
        </div>
        <div>
          <h4>What are cookies?</h4>
          <p>Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners in order to make their websites work, or to work more efficiently, as well as to provide reporting information.</p>
          <p>Cookies set by the website owner (in this case, {{ config('app.name') }}) are called "first party cookies". Cookies set by parties other than the website owner are called "third party cookies". Third party cookies enable third party features or functionality to be provided on or through the website (e.g. like advertising, interactive content and analytics). The parties that set these third party cookies can recognize your computer both when it visits the website in question and also when it visits certain other websites.</p>
        </div>
        <div>
          <h4>Why do we use cookies?</h4>
          <p>We use first and third party cookies for several reasons. Some cookies are required for technical reasons in order for our Websites to operate, and we refer to these as "essential" or "strictly necessary" cookies. Other cookies also enable us to track and target the interests of our users to enhance the experience on our Online Properties. Third parties serve cookies through our Websites for advertising, analytics and other purposes. This is described in more detail below.</p>
          <p>The specific types of first and third party cookies served through our Websites and the purposes they perform are described below (please note that the specific cookies served may vary depending on the specific Online Properties you visit)</p>
        </div>
        <div>
          <h4>How can I control cookies?</h4>
          <p>Cookies are accepted by default. If you prefer, you can usually choose to set your browser to remove cookies and to reject cookies. The specific types of first and third party cookies served through our Websites and the purposes they perform are described below (please note that the specific cookies served may vary depending on the specific Online Properties you visit)</p>
        </div>
        <div>
          <h4>Essential website cookies</h4>
          <p>These cookies are strictly necessary to provide you with services available through our Websites and to use some of its features, such as access to secure areas.</p>
          <p>
            <ul>
              <li><b>Name</b>: XSRF-TOKEN</li>
              <li><b>Purpose</b>: Helps prevent Cross-site request forgery</li>
              <li><b>Provider</b>: techhubeksu.com</li>
              <li><b>Service</b>: {{ config('app.name') }} View Service Privacy Notice</li>
              <li><b>Country</b>: Nigeria</li>
              <li><b>Type</b>: http_cookie</li>
              <li><b>Expires in</b>: 2 hours</li>
            </ul>
          </p>
          <p>
            <ul>
              <li><b>Name</b>: techhub_eksu_session</li>
              <li><b>Purpose</b>: Identifies a session instance for the user</li>
              <li><b>Provider</b>: techhubeksu.com</li>
              <li><b>Service</b>: {{ config('app.name') }} View Service Privacy Notice</li>
              <li><b>Country</b>: Nigeria</li>
              <li><b>Type</b>: http_cookie</li>
              <li><b>Expires in</b>: 2 hours</li>
            </ul>
          </p>
        </div>
        <div>
          <h4>Analytics and customization cookies</h4>
          <p>These cookies collect information that is used either in aggregate form to help us understand how our Websites are being used or how effective our marketing campaigns are, or to help us customize our Websites for you.</p>
          <p>
            <ul>
              <li><b>Name</b>: _gid</li>
              <li><b>Purpose</b>: Keeps an entry of unique ID which is then used to come up with statistical data on website usage by visitors. It is a HTTP cookie type and expires after a browsing session.</li>
              <li><b>Provider</b>: .techhubeksu.com</li>
              <li><b>Service</b>: Google Analytics View Service Privacy Policy</li>
              <li><b>Country</b>: Nigeria</li>
              <li><b>Type</b>: http_cookie</li>
              <li><b>Expires in</b>: 1 day</li>
            </ul>
          </p>
          <p>
            <ul>
              <li><b>Name</b>: _gat#</li>
              <li><b>Purpose</b>: Enables Google Analytics regulate the rate of requesting. It is a HTTP cookie type that lasts for a session.</li>
              <li><b>Provider</b>: .techhubeksu.com</li>
              <li><b>Service</b>: Google Analytics View Service Privacy Policy</li>
              <li><b>Country</b>: Nigeria</li>
              <li><b>Type</b>: http_cookie</li>
              <li><b>Expires in</b>: 1 minute</li>
            </ul>
          </p>
          <p>
            <ul>
              <li><b>Name</b>: _ga</li>
              <li><b>Purpose</b>: It records a particular ID used to come up with data about website usage by the user. It is a HTTP cookie that expires after 2 years.</li>
              <li><b>Provider</b>: .techhubeksu.com</li>
              <li><b>Service</b>: Google Analytics View Service Privacy Policy</li>
              <li><b>Country</b>: Nigeria</li>
              <li><b>Type</b>: http_cookie</li>
              <li><b>Expires in</b>: 1 year 11 months 29 days</li>
            </ul>
          </p>
          <p>
            <ul>
              <li><b>Name</b>: #collect</li>
              <li><b>Purpose</b>: Sends data such as visitor’s behavior and device to Google Analytics. It is able to keep track of the visitor across marketing channels and devices. It is a pixel tracker type cookie whose activity lasts within the browsing session.</li>
              <li><b>Provider</b>: techhubeksu.com</li>
              <li><b>Service</b>: Google Analytics View Service Privacy Policy</li>
              <li><b>Country</b>: United States</li>
              <li><b>Type</b>: pixel_tracker</li>
              <li><b>Expires in</b>: session</li>
            </ul>
          </p>
        </div>
        <div>
          <h4>What about other tracking technologies, like web beacons?</h4>
          <p>Cookies are not the only way to recognize or track visitors to a website. We may use other, similar technologies from time to time, like web beacons (sometimes called "tracking pixels" or "clear gifs"). These are tiny graphics files that contain a unique identifier that enable us to recognize when someone has visited our Websites or opened an e-mail including them. This allows us, for example, to monitor the traffic patterns of users from one page within a website to another, to deliver or communicate with cookies, to understand whether you have come to the website from an online advertisement displayed on a third-party website, to improve site performance, and to measure the success of e-mail marketing campaigns. In many instances, these technologies are reliant on cookies to function properly, and so declining cookies will impair their functioning.</p>
        </div>
        <div>
          <h4>Do you use Flash cookies or Local Shared Objects?</h4>
          <p>Websites may also use so-called "Flash Cookies" (also known as Local Shared Objects or "LSOs") to, among other things, collect and store information about your use of our services, fraud prevention and for other site operations.</p>
          <p>If you do not want Flash Cookies stored on your computer, you can adjust the settings of your Flash player to block Flash Cookies storage using the tools contained in the Website Storage Settings Panel. You can also control Flash Cookies by going to the Global Storage Settings Panel and following the instructions (which may include instructions that explain, for example, how to delete existing Flash Cookies (referred to "information" on the Macromedia site), how to prevent Flash LSOs from being placed on your computer without your being asked, and (for Flash Player 8 and later) how to block Flash Cookies that are not being delivered by the operator of the page you are on at the time).</p>
          <p>Please note that setting the Flash Player to restrict or limit acceptance of Flash Cookies may reduce or impede the functionality of some Flash applications, including, potentially, Flash applications used in connection with our services or online content.</p>
        </div>
        <div>
          <h4>Do you serve targeted advertising?</h4>
          <p>Third parties may serve cookies on your computer or mobile device to serve advertising through our Websites. These companies may use information about your visits to this and other websites in order to provide relevant advertisements about goods and services that you may be interested in. They may also employ technology that is used to measure the effectiveness of advertisements. This can be accomplished by them using cookies or web beacons to collect information about your visits to this and other sites in order to provide relevant advertisements about goods and services of potential interest to you. The information collected through this process does not enable us or them to identify your name, contact details or other details that directly identify you unless you choose to provide these.</p>
        </div>
        <div>
          <h4>How often will you update this Cookie Policy?</h4>
          <p>We may update this Cookie Policy from time to time in order to reflect, for example, changes to the cookies we use or for other operational, legal or regulatory reasons. Please therefore re-visit this Cookie Policy regularly to stay informed about our use of cookies and related technologies.</p>
          <p>The date at the top of this Cookie Policy indicates when it was last updated.</p>
        </div>
        <div>
          <h4>Where can I get further information?</h4>
          <p>If you have any questions about our use of cookies or other technologies, please email us at <a href="mailto:techubeksu@gmail.com" target="_blank">techubeksu@gmail.com</a> or by post to:</p>
          <p>{{ config('app.name') }},<br>beside Heritage Bank,<br>Ekiti State Univesity,<br> Ado-Ekiti, Ekiti State,<br>Nigeria.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection