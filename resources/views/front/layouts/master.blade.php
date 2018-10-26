<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>



  <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1099.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="pingback" href="xmlrpc.html">

  <style id="kirki-css-vars">:root{}</style><title>Home - Tyche Demo</title>

<!-- This site is optimized with the Yoast SEO plugin v9.0.2 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="index.html" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Home - Tyche Demo" />
<meta property="og:url" content="https://colorlib.com/tyche/" />
<meta property="og:site_name" content="Tyche Demo" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Home - Tyche Demo" />
<meta name="twitter:creator" content="@ASilkalns" />
<script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/colorlib.com\/tyche\/","name":"Tyche Demo","potentialAction":{"@type":"SearchAction","target":"https:\/\/colorlib.com\/tyche\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Tyche Demo &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Tyche Demo &raquo; Comments Feed" href="comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Tyche Demo &raquo; Home Comments Feed" href="home/feed/index.html" />
<!-- This site uses the Google Analytics by MonsterInsights plugin v7.2.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
<script type="text/javascript" data-cfasync="false">
  var mi_version         = '7.2.0';
  var mi_track_user      = true;
  var mi_no_track_reason = '';
  
  var disableStr = 'ga-disable-UA-23581568-13';

  /* Function to detect opted out users */
  function __gaTrackerIsOptedOut() {
    return document.cookie.indexOf(disableStr + '=true') > -1;
  }

  /* Disable tracking if the opt-out cookie exists. */
  if ( __gaTrackerIsOptedOut() ) {
    window[disableStr] = true;
  }

  /* Opt-out function */
  function __gaTrackerOptout() {
    document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
    window[disableStr] = true;
  }
  
  if ( mi_track_user ) {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','__gaTracker');

window.ga = __gaTracker;    __gaTracker('create', 'UA-23581568-13', 'auto');
    __gaTracker('set', 'forceSSL', true);
    __gaTracker('set', 'anonymizeIp', true);
    __gaTracker('require', 'linkid', 'linkid.html');
    __gaTracker('set', 'displayFeaturesTask', null);
    __gaTracker('send','pageview');
  } else {
    console.log( "" );
    (function() {
      /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
      var noopfn = function() {
        return null;
      };
      var noopnullfn = function() {
        return null;
      };
      var Tracker = function() {
        return null;
      };
      var p = Tracker.prototype;
      p.get = noopfn;
      p.set = noopfn;
      p.send = noopfn;
      var __gaTracker = function() {
        var len = arguments.length;
        if ( len === 0 ) {
          return;
        }
        var f = arguments[len-1];
        if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
          console.log( 'Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + mi_no_track_reason );
          return;
        }
        try {
          f.hitCallback();
        } catch (ex) {

        }
      };
      __gaTracker.create = function() {
        return new Tracker();
      };
      __gaTracker.getByName = noopnullfn;
      __gaTracker.getAll = function() {
        return [];
      };
      __gaTracker.remove = noopfn;
      window['__gaTracker'] = __gaTracker;
      window.ga = __gaTracker;    })();
    }
</script>
<!-- / Google Analytics by MonsterInsights -->
    <script type="text/javascript">
      window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/colorlib.com\/tyche\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
      !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
img.wp-smiley,
img.emoji {
  display: inline !important;
  border: none !important;
  box-shadow: none !important;
  height: 1em !important;
  width: 1em !important;
  margin: 0 .07em !important;
  vertical-align: -0.1em !important;
  background: none !important;
  padding: 0 !important;
}
</style>

<link rel='stylesheet' id='contact-form-7-css'  href="{{asset('front/wp-content/plugins/contact-form-7/includes/css/styles5560.css?ver=5.0.4')}}" type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href="{{asset('front/wp-content/plugins/woocommerce/assets/css/woocommerce-layout3b71.css?ver=3.5.0')}}" type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href="{{asset('front/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen3b71.css?ver=3.5.0')}}" type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href="{{asset('front/wp-content/plugins/woocommerce/assets/css/woocommerce3b71.css?ver=3.5.0')}}" type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Karla%3A400%2C700&amp;ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href="{{asset('front/wp-content/themes/tyche/assets/vendors/fontawesome/font-awesome.min5010.css?ver=4.9.8')}}" type='text/css' media='all' />
<link rel='stylesheet' id='owlCarousel-css'  href="{{asset('front/wp-content/themes/tyche/assets/vendors/owl-carousel/owl.carousel.min5010.css?ver=4.9.8')}}" type='text/css' media='all' />
<link rel='stylesheet' id='owlCarousel-theme-css'  href="{{asset('front/wp-content/themes/tyche/assets/vendors/owl-carousel/owl.theme.default5010.css?ver=4.9.8')}}" type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href="{{asset('front/wp-includes/css/dashicons.min5010.css?ver=4.9.8')}}" type='text/css' media='all' />
<link rel='stylesheet' id='tyche-css'  href="{{asset('front/wp-content/themes/tyche/style5010.css?ver=4.9.8')}}" type='text/css' media='all' />
<link rel='stylesheet' id='tyche-style-css'  href="{{asset('front/wp-content/themes/tyche/assets/css/style5010.css?ver=4.9.8')}}" type='text/css' media='all' />
<script type='text/javascript' src="{{asset('front/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4')}}"></script>
<script type='text/javascript' src="{{asset('front/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/themes/tyche/assets/vendors/owl-carousel/owl.carousel.min3ba1.js?ver=1.3.3')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/themes/tyche/assets/vendors/jquery-zoom/jquery.zoom.min3ba1.js?ver=1.3.3')}}"></script>


<script type='text/javascript'>
/* <![CDATA[ */
var tycheHelper = {"initZoom":"1","ajaxURL":"https:\/\/colorlib.com\/tyche\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/tyche/assets/js/functions5010.js?ver=4.9.8'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.8" />
<meta name="generator" content="WooCommerce 3.5.0" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="{{asset('wp-json/oembed/1.0/embede748.json?url=https%3A%2F%2Fcolorlib.com%2Ftyche%2F')}}" />
<link rel="alternate" type="text/xml+oembed" href="{{asset('wp-json/oembed/1.0/embed2e9e?url=https%3A%2F%2Fcolorlib.com%2Ftyche%2F&amp;format=xml')}}" />
  <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
  
    <script
      type="text/javascript">var ajaxurl = 'wp-admin/admin-ajax.html';</script>

          <meta name="onesignal" content="wordpress-plugin"/>
          <link rel="manifest"
            href="wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/manifest.json73dd.json?gcm_sender_id="/>
          <script src="../../cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>    <script>

      window.OneSignal = window.OneSignal || [];

      OneSignal.push( function() {
        OneSignal.SERVICE_WORKER_UPDATER_PATH = "OneSignalSDKUpdaterWorker.js.html";
        OneSignal.SERVICE_WORKER_PATH = "OneSignalSDKWorker.js.html";
        OneSignal.SERVICE_WORKER_PARAM = { scope: '/' };

        OneSignal.setDefaultNotificationUrl("https://colorlib.com/tyche");
        var oneSignal_options = {};
        window._oneSignalInitOptions = oneSignal_options;

        oneSignal_options['wordpress'] = true;
oneSignal_options['appId'] = '';
oneSignal_options['autoRegister'] = false;
oneSignal_options['httpPermissionRequest'] = { };
oneSignal_options['httpPermissionRequest']['enable'] = true;
oneSignal_options['welcomeNotification'] = { };
oneSignal_options['welcomeNotification']['title'] = "";
oneSignal_options['welcomeNotification']['message'] = "";
oneSignal_options['path'] = "wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/index.html";
oneSignal_options['promptOptions'] = { };
oneSignal_options['notifyButton'] = { };
oneSignal_options['notifyButton']['enable'] = true;
oneSignal_options['notifyButton']['position'] = 'bottom-right';
oneSignal_options['notifyButton']['theme'] = 'default';
oneSignal_options['notifyButton']['size'] = 'medium';
oneSignal_options['notifyButton']['prenotify'] = true;
oneSignal_options['notifyButton']['showCredit'] = true;
oneSignal_options['notifyButton']['text'] = {};
              OneSignal.init(window._oneSignalInitOptions);
                    });

      function documentInitOneSignal() {
        var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");

        var oneSignalLinkClickHandler = function(event) { OneSignal.push(['registerForPushNotifications']); event.preventDefault(); };        for(var i = 0; i < oneSignal_elements.length; i++)
          oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
      }

      if (document.readyState === 'complete') {
           documentInitOneSignal();
      }
      else {
           window.addEventListener("load", function(event){
               documentInitOneSignal();
          });
      }
    </script>

</head>

<body class="home page-template-default page page-id-2 wp-custom-logo woocommerce-no-js">
<div id="page" class="site">
  
      @include('front.inc.header')

      @yield('content')

 
  </div><!-- #content -->

          </div>
                  <div class="col-md-3 col-sm-6">
            <div id="text-3" class="widget widget_text"><h5 class="widget-title"><span>About</span></h5>      <div class="textwidget"><p>Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam.</p>
<p>Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no.</p>
</div>
    </div>          </div>
                  <div class="col-md-3 col-sm-6">
            <div id="tag_cloud-3" class="widget widget_tag_cloud"><h5 class="widget-title"><span>Tags</span></h5><div class="tagcloud"><a href="tag/autumn/index.html" class="tag-cloud-link tag-link-52 tag-link-position-1" style="font-size: 8pt;" aria-label="Autumn (1 item)">Autumn</a>
<a href="tag/dress/index.html" class="tag-cloud-link tag-link-56 tag-link-position-2" style="font-size: 8pt;" aria-label="dress (1 item)">dress</a>
<a href="tag/fashion/index.html" class="tag-cloud-link tag-link-54 tag-link-position-3" style="font-size: 18.5pt;" aria-label="fashion (3 items)">fashion</a>
<a href="tag/jackets/index.html" class="tag-cloud-link tag-link-57 tag-link-position-4" style="font-size: 8pt;" aria-label="jackets (1 item)">jackets</a>
<a href="tag/stockings/index.html" class="tag-cloud-link tag-link-55 tag-link-position-5" style="font-size: 8pt;" aria-label="stockings (1 item)">stockings</a>
<a href="tag/trends/index.html" class="tag-cloud-link tag-link-53 tag-link-position-6" style="font-size: 22pt;" aria-label="trends (4 items)">trends</a></div>
</div>          </div>
              </div><!--.row-->
    </div>
  </div>
</footer><!-- / Footer -->

  <!-- Copyright -->
  <footer class="site-copyright">
    <div class="site-info ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="menu-social" class="menu pull-left"><ul id="menu-social-items" class="menu-items"><li id="menu-item-88" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88"><a href="https://facebook.com/"><span class="screen-reader-text">Facebook</span></a></li>
<li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-89"><a href="https://twitter.com/"><span class="screen-reader-text">Twitter</span></a></li>
<li id="menu-item-90" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-90"><a href="https://dribbble.com/"><span class="screen-reader-text">Dribbble</span></a></li>
<li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91"><a href="https://vimeo.com/"><span class="screen-reader-text">Vimeo</span></a></li>
<li id="menu-item-92" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-92"><a href="https://youtube.com/"><span class="screen-reader-text">YouTube</span></a></li>
</ul></div>
            <div class="copyright-text pull-right">
              Copyright &copy; 2018 <span class="sep">|</span> <a href="https://colorlib.com/tyche">Theme: Tyche</a> <span class="sep">|</span> Powered by WordPress.           </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- / Copyright -->
</div><!-- #page -->

  

<script type='text/javascript' src="{{asset('wp-content/plugins/contact-form-7/includes/js/scripts5560.js?ver=5.0.4')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/tyche\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tyche\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/colorlib.com\/tyche\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min3b71.js?ver=3.5.0')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/tyche\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tyche\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min3b71.js')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/tyche\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tyche\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_74a6f7ddfef7b49360fa5f7963552124","fragment_name":"wc_fragments_74a6f7ddfef7b49360fa5f7963552124"};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset('wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min3b71.js')}}">
</script>
<script type='text/javascript' src="{{asset('wp-content/themes/tyche/assets/js/skip-link-focus-fix5010.js')}}"></script>
<script type='text/javascript' src="{{asset('wp-content/themes/tyche/assets/vendors/menu/menu.min5010.js')}}"></script>
<script type='text/javascript' src="{{asset('wp-includes/js/wp-embed.min5010.js')}}"></script>

</body>
<!-- Mirrored from colorlib.com/tyche/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 14:16:58 GMT -->
</html>
