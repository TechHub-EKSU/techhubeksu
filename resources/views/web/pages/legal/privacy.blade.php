@extends('web.layout.techhub')

@section('pageTitle', __('Privacy Notice | ' . config('app.name')))
@section('pageDescription', __('Thank you for choosing to be part of our community at ' . config('app.name') . ' (“we”, “us”, or “our”). We are committed to protecting your personal information and your right to privacy.'))

@section('content')
@include('web.includes.banner', ['bannerTitle' => "privacy notice", 'bannerMaster' => "legal"])
<section class="writing-area pt-50 pb-120">
  <div class="container">
    <div class="row">
      <div class="col-12 writing-content">
        <div class="text-center ptb-20">
          <h3>Lastly Updated 9 Feburary 2021</h3>
        </div>

        <div id="intro">
          <p>Thank you for choosing to be part of our community at {{ config('app.name') }} (“we”, “us”, or “our”). We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this privacy notice, or our practices with regards to your personal information, please contact us at <a href="mailto:techhubeksu@gmail.com" target="_blank">techhubeksu@gmail.com</a>.</p>
          <p>When you visit our website <a href="{{ config('app.url') }}" target="blank">{{ config('app.url') }}</a> and (the "Website"), and more generally, use any of our services (the "Services", which include the Website), we appreciate that you are trusting us with your personal information. We take your privacy very seriously. In this privacy notice, we seek to explain to you in the clearest way possible what information we collect, how we use it and what rights you have in relation to it. We hope you take some time to read through it carefully, as it is important. If there are any terms in this privacy notice that you do not agree with, please discontinue use of our Services immediately.</p>
          <p>This privacy notice applies to all information collected through our Services (which, as described above, includes our Website), as well as any related services, sales, marketing or events.</p>
          <p>Please read this privacy notice carefully as it will help you understand what we do with the information that we collect.</p>
        </div>

        <div id="table-of-content">
          <h4>TABLE OF CONTENTS</h4>
          <ol>
            <li><a href="#info-we-collect">WHAT INFORMATION DO WE COLLECT?</a></li>
            <li><a href="#info-we-use">HOW DO WE USE YOUR INFORMATION?</a></li>
            <li><a href="#info-we-share">WILL YOUR INFORMATION BE SHARED WITH ANYONE?</a></li>
            <li><a href="#shared-info">WHO WILL YOUR INFORMATION BE SHARED WITH?</a></li>
            <li><a href="#cookies">DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</a></li>
            <li><a href="#social-logins">HOW DO WE HANDLE YOUR SOCIAL LOGINS?</a></li>
            <li><a href="#info-period">HOW LONG DO WE KEEP YOUR INFORMATION?</a></li>
            <li><a href="#info-we-keep">HOW DO WE KEEP YOUR INFORMATION SAFE?</a></li>
            <li><a href="#minors">DO WE COLLECT INFORMATION FROM MINORS?</a></li>
            <li><a href="#privacy-right">WHAT ARE YOUR PRIVACY RIGHTS?</a></li>
            <li><a href="#dnt">CONTROLS FOR DO-NOT-TRACK FEATURES</a></li>
            <li><a href="#policy-update">DO WE MAKE UPDATES TO THIS POLICY?</a></li>
            <li><a href="#policy-contact">HOW CAN YOU CONTACT US ABOUT THIS POLICY?</a></li>
          </ol>
        </div>

        <div id="info-we-collect">
          <h4>1. WHAT INFORMATION DO WE COLLECT?</h4>
          <h5>Personal information you disclose to us</h5>
          <p><em>In Short:  We collect personal information that you provide to us.</em></p>
          <p>We collect personal information that you voluntarily provide to us when you register on the Website, express an interest in obtaining information about us or our products and Services, when you participate in activities on the Website or otherwise when you contact us.</p>
          <p>The personal information that we collect depends on the context of your interactions with us and the Website, the choices you make and the products and features you use. The personal information we collect may include the following:</p>
          <p>
            <ul>
              <li>Personal Information Provided by You. We collect names; phone numbers; email addresses; passwords; and other similar information.</li>
              <li>Payment Data. We may collect data necessary to process your payment if you make purchases, such as your payment instrument number (such as a credit card number), and the security code associated with your payment instrument. All payment data is stored by Paystack and Flutterwave. You may find their privacy notice link(s) here: <a href="https://paystack.com/terms" target="_blank">https://paystack.com/terms</a> and <a href="https://flutterwave.com/ng/privacy-policy" target="_blank">https://flutterwave.com/ng/privacy-policy</a>.</li>
              <li>Social Media Login Data. We may provide you with the option to register with us using your existing social media account details on Facebook, and Google. If you choose to register in this way, we will collect the information described in the section called "<a href="#social-logins">HOW DO WE HANDLE YOUR SOCIAL LOGINS?</a>" below.</li>
            </ul>
          </p>
          <p>All personal information that you provide to us must be true, complete and accurate, and you must notify us of any changes to such personal information.</p>
          <h5>Information automatically collected</h5>
          <p><em>In Short:   Some information — such as your Internet Protocol (IP) address and/or browser and device characteristics — is collected automatically when you visit our Website.</em></p>
          <p>We automatically collect certain information when you visit, use or navigate the Website. This information does not reveal your specific identity (like your name or contact information) but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, referring URLs, device name, country, location, information about who and when you use our Website and other technical information. This information is primarily needed to maintain the security and operation of our Website, and for our internal analytics and reporting purposes.</p>
          <p>Like many businesses, we also collect information through cookies and similar technologies. You can find out more about this in our Cookie Notice: <a href="{{ config('app.url') }}/legal/cookie" target="_blank">{{ config('app.url') }}/legal/cookie</a>.</p>
          <h5>The information we collect includes:</h5>
          <p>Log and Usage Data. Log and usage data is service-related, diagnostic usage and performance information our servers automatically collect when you access or use our Website and which we record in log files. Depending on how you interact with us, this log data may include your IP address, device information, browser type and settings and information about your activity in the Website (such as the date/time stamps associated with your usage, pages and files viewed, searches and other actions you take such as which features you use), device event information (such as system activity, error reports (sometimes called 'crash dumps') and hardware settings).</p>
          <p>Device Data. We collect device data such as information about your computer, phone, tablet or other device you use to access the Website. Depending on the device used, this device data may include information such as your IP address (or proxy server), device application identification numbers, location, browser type, hardware model Internet service provider and/or mobile carrier, operating system configuration information.</p>
          <p>Location Data. We collect information data such as information about your device's location, which can be either precise or imprecise. How much information we collect depends on the type of settings of the device you use to access the Website. For example, we may use GPS and other technologies to collect geolocation data that tells us your current location (based on your IP address). You can opt out of allowing us to collect this information either by refusing access to the information or by disabling your Locations settings on your device. Note however, if you choose to opt out, you may not be able to use certain aspects of the Services.</p>
        </div>

        <div id="info-we-use">
          <h4>2. HOW DO WE USE YOUR INFORMATION?</h4>
          <p><em>In Short:  We process your information for purposes based on legitimate business interests, the fulfillment of our contract with you, compliance with our legal obligations, and/or your consent.</em></p>
          <p>We use personal information collected via our Website for a variety of business purposes described below. We process your personal information for these purposes in reliance on our legitimate business interests, in order to enter into or perform a contract with you, with your consent, and/or for compliance with our legal obligations. We indicate the specific processing grounds we rely on next to each purpose listed below.</p>
          <p>
            We use the information we collect or receive:
            <ul>
              <li>To facilitate account creation and logon process. If you choose to link your account with us to a third-party account (such as your Google or Facebook account), we use the information you allowed us to collect from those third parties to facilitate account creation and logon process for the performance of the contract. See the section below headed "<a href="#social-logins">HOW DO WE HANDLE YOUR SOCIAL LOGINS?</a>" for further information.</li>
              <li>To post testimonials. We post testimonials on our Website that may contain personal information. Prior to posting a testimonial, we will obtain your consent to use your name and the consent of the testimonial. If you wish to update, or delete your testimonial, please contact us at <a href="mailto:techhubeksu@gmail.com" target="_blank">techhubeksu@gmail.com</a> and be sure to include your name, testimonial location, and contact information.</li>
              <li>Request feedback. We may use your information to request feedback and to contact you about your use of our Website.</li>
              <li>To enable user-to-user communications. We may use your information in order to enable user-to-user communications with each user's consent.</li>
              <li>To manage user accounts. We may use your information for the purposes of managing our account and keeping it in working order.</li>
              <li>To send administrative information to you. We may use your personal information to send you service and new feature information and/or information about changes to our terms, conditions, and policies.</li>
              <li>To enforce our terms, conditions and policies for Company Purposes, Legal Reasons and Contractual.</li>
              <li>To respond to legal requests and prevent harm. If we receive a subpoena or other legal request, we may need to inspect the data we hold to determine how to respond.</li>
              <li>To manage user accounts. We may use your information for the purposes of managing our account and keeping it in working order.</li>
              <li>To send administrative information to you. We may use your personal information to send you product, service and new feature information and/or information about changes to our terms, conditions, and policies.</li>
              <li>To protect our Services. We may use your information as part of our efforts to keep our Website safe and secure (for example, for fraud monitoring and prevention).</li>
              <li>To enforce our terms, conditions and policies for business purposes, to comply with legal and regulatory requirements or in connection with our contract.</li>
              <li>To respond to legal requests and prevent harm. If we receive a subpoena or other legal request, we may need to inspect the data we hold to determine how to respond.</li>
              <li>Fulfill and manage your orders. We may use your information to fulfill and manage your orders, payments, returns, and exchanges made through the Website.</li>
              <li>Administer prize draws and competitions. We may use your information to administer prize draws and competitions when you elect to participate in our competitions.</li>
              <li>To deliver and facilitate delivery of services to the user. We may use your information to provide you with the requested service.</li>
              <li>To respond to user inquiries/offer support to users. We may use your information to respond to your inquiries and solve any potential issues you might have with the use of our Services.</li>
              <li>To send you marketing and promotional communications. We and/or our third-party marketing partners may use the personal information you send to us for our marketing purposes, if this is in accordance with your marketing preferences. For example, when expressing an interest in obtaining information about us or our Website, subscribing to marketing or otherwise contacting us, we will collect personal information from you. You can opt-out of our marketing emails at any time (see the "<a href="#privacy-right">WHAT ARE YOUR PRIVACY RIGHTS</a>" below).</li>
              <li>Deliver targeted advertising to you. We may use your information to develop and display personalized content and advertising (and work with third parties who do so) tailored to your interests and/or location and to measure its effectiveness. For more information, see our Cookie Notice: <a href="{{ config('app.url') }}/legal/cookie" target="_blank">{{ config('app.url') }}/legal/cookie</a>.</li>
              <li>For other business purposes. We may use your information for other business purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Website, products, marketing and your experience. We may use and store this information in aggregated and anonymized form so that it is not associated with individual end users and does not include personal information. We will not use identifiable personal information without your consent.</li>
            </ul>
          </p>
        </div>

        <div id="info-we-share">
          <h4>3. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</h4>
          <p><em>In Short:  We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.</em></p>
          <p>
            We may process or share your data that we hold based on the following legal basis:
            <ul>
              <li>Consent: We may process your data if you have given us specific consent to use your personal information in a specific purpose.</li>
              <li>Legitimate Interests: We may process your data when it is reasonably necessary to achieve our legitimate business interests.</li>
              <li>Performance of a Contract: Where we have entered into a contract with you, we may process your personal information to fulfill the terms of our contract.</li>
              <li>Legal Obligations: We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).</li>
              <li>Vital Interests: We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved.</li>
            </ul>
            More specifically, we may need to process your data or share your personal information in the following situations:
            <ul>
              <li>Business Transfers. We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</li>
              <li>Vendors, Consultants and Other Third-Party Service Providers. We may share your data with third-party vendors, service providers, contractors or agents who perform services for us or on our behalf and require access to such information to do that work. Examples include: payment processing, data analysis, email delivery, hosting services, customer service and marketing efforts. We may allow selected third parties to use tracking technology on the Website, which will enable them to collect data on our behalf about how you interact with our Website over time. This information may be used to, among other things, analyze and track data, determine the popularity of certain content, pages or features, and better understand online activity. Unless described in this notice, we do not share, sell, rent or trade any of your information with third parties for their promotional purposes.</li>
            </ul>
          </p>
        </div>

        <div id="shared-info">
          <h4>4. WHO WILL YOUR INFORMATION BE SHARED WITH?</h4>
          <p><em>In Short:  We only share information with the following third parties.</em></p>
          <p>We only share and disclose your information with the following third parties. We have categorized each party so that you may easily understand the purpose of our data collection and processing practices. If we have processed your data based on your consent and you wish to revoke your consent, please contact us using the contact details provided in the section below titled "<a href="#policy-contact">HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</a>".</p>
          <p>
            <ul>
              <li>Content Optimization</li>
              <li>Google Site Search</li>
              <li>Invoice and Billing(Paystack and Flutterwave)</li>
              <li>User Account Registration and Authentication(Facebook Login and Google OAuth 2.0)</li>
              <li>Web and Mobile Analytics(Google Analytics)</li>
            </ul>
          </p>
        </div>

        <div id="cookies">
          <h4>5. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</h4>
          <p><em>In Short:  We may use cookies and other tracking technologies to collect and store your information.</em></p>
          <p>We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Notice: <a href="{{ config('app.url') }}/legal/cookie" target="_blank">{{ config('app.url') }}/legal/cookie</a>.</p>
        </div>

        <div id="social-logins">
          <h4>6. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</h4>
          <p><em>In Short:  If you choose to register or log in to our services using a social media account, we may have access to certain information about you.</em></p>
          <p>Our Website offers you the ability to register and login using your third-party social media account details (like your Facebook or Google logins). Where you choose to do this, we will receive certain profile information about you from your social media provider. The profile Information we receive may vary depending on the social media provider concerned, but will often include your name, email address, profile picture as well as other information you choose to make public on such social media platform.</p>
          <p>We will use the information we receive only for the purposes that are described in this privacy notice or that are otherwise made clear to you on the relevant Website. Please note that we do not control, and are not responsible for, other uses of your personal information by your third-party social media provider. We recommend that you review their privacy notice to understand how they collect, use and share your personal information, and how you can set your privacy preferences on their sites and apps.</p>
        </div>

        <div id="info-period">
          <h4>7. HOW LONG DO WE KEEP YOUR INFORMATION?</h4>
          <p><em>In Short:  We keep your information for as long as necessary to fulfill the purposes outlined in this privacy notice unless otherwise required by law.</em></p>
          <p>We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements). No purpose in this notice will require us keeping your personal information for longer than the period of time in which users have an account with us.</p>
          <p>When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</p>
        </div>

        <div id="info-we-keep">
          <h4>8. HOW DO WE KEEP YOUR INFORMATION SAFE?</h4>
          <p><em>In Short:  We aim to protect your personal information through a system of organizational and technical security measures.</em></p>
          <p>We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security, and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our Website is at your own risk. You should only access the Website within a secure environment.</p>
        </div>

        <div id="minors">
          <h4>9. DO WE COLLECT INFORMATION FROM MINORS?</h4>
          <p><em>In Short:  We do not knowingly collect data from or market to children under 18 years of age.</em></p>
          <p>We do not knowingly solicit data from or market to children under 18 years of age. By using the Website, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the Website. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we may have collected from children under age 18, please contact us at <a href="mailto:techhubeksu@gmail.com" target="_blank">techhubeksu@gmail.com</a>.</p>
        </div>

        <div id="privacy-right">
          <h4>10. WHAT ARE YOUR PRIVACY RIGHTS?</h4>
          <p><em>In Short:  You may review, change, or terminate your account at any time.</em></p>
          <p>If you have questions or comments about your privacy rights, you may email us at <a href="mailto:techhubeksu@gmail.com" target="_blank">techhubeksu@gmail.com</a>.</p>
          <h5>Account Information</h5>
          <p>
            If you would at any time like to review or change the information in your account or terminate your account, you can:
            <ul>
              <li>Log in to your account settings and update your user account.</li>
              <li>Contact us using the contact information provided.</li>
            </ul>
          </p>
          <p>Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our Terms of Use and/or comply with applicable legal requirements.</p>
          <p>Cookies and similar technologies: Most Web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove cookies and to reject cookies. If you choose to remove cookies or reject cookies, this could affect certain features or services of our Website. To opt-out of interest-based advertising by advertisers on our Website visit <a href="http://www.aboutads.info/choices/" target="_blank">http://www.aboutads.info/choices/</a>. For further information, please see our Cookie Notice: <a href="{{ config('app.url') }}/legal/cookie" target="_blank">{{ config('app.url') }}/legal/cookie</a>.</p>
          <p>
            Opting out of email marketing: You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list – however, we may still communicate with you, for example to send you service-related emails that are necessary for the administration and use of your account, to respond to service requests, or for other non-marketing purposes. To otherwise opt-out, you may: Contact us using the contact information provided.
          </p>
        </div>

        <div id="dnt">
          <h4>11. CONTROLS FOR DO-NOT-TRACK FEATURES</h4>
          <p>Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track (“DNT”) feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage, no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy notice.</p>
        </div>

        <div id="policy-update">
          <h4>12. DO WE MAKE UPDATES TO THIS POLICY?</h4>
          <p><em>In Short:  Yes, we will update this notice as necessary to stay compliant with relevant laws.</em></p>
          <p>We may update this privacy notice from time to time. The updated version will be indicated by an updated “Revised” date and the updated version will be effective as soon as it is accessible. If we make material changes to this privacy notice, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy notice frequently to be informed of how we are protecting your information.</p>
        </div>

        <div id="policy-contact">
          <h4>13. HOW CAN YOU CONTACT US ABOUT THIS POLICY?</h4>
          <p>If you have questions or comments about this notice, you may email us at <a href="mailto:techhubeksu@gmail.com" target="_blank">techhubeksu@gmail.com</a> or by post to:</p>
          <p>{{ config('app.name') }},<br>beside Heritage Bank,<br>Ekiti State Univesity,<br> Ado-Ekiti, Ekiti State,<br>Nigeria.</p>
        </div>

        <div>
          <h4>HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</h4>
          <p>Based on the applicable laws of your country, you may have the right to request access to the personal information we collect from you, change that information, or delete it in some circumstances. To request to review, update, or delete your personal information, please visit: <a href="{{ config('app.url') }}" target="_blank">{{ config('app.url') }}</a>. We will respond to your request within 30 days.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection