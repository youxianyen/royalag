<!DOCTYPE HTML>
<!doctype html>

<html lang="zh-CN" prefix="og: https://ogp.me/ns#" class="js translated-ltr yes-js js_active" style="--flatsome--header--sticky-height: 70px;">
  
  <head>
    <meta http-equiv="origin-trial" content="A/kargTFyk8MR5ueravczef/wIlTkbVk1qXQesp39nV+xNECPdLBVeYffxrM8TmZT6RArWGQVCJ0LRivD7glcAUAAACQeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZzIiLCJleHBpcnkiOjE3NDIzNDIzOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta charset="UTF-8">
    
    
    <script type="text/javascript">if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
        var href = document.location.href;
        if (!href.match(/[?&]nowprocket/)) {
          if (href.indexOf("?") == -1) {
            if (href.indexOf("#") == -1) {
              document.location.href = href + "?nowprocket=1"
            } else {
              document.location.href = href.replace("#", "?nowprocket=1#")
            }
          } else {
            if (href.indexOf("#") == -1) {
              document.location.href = href + "&nowprocket=1"
            } else {
              document.location.href = href.replace("#", "&nowprocket=1#")
            }
          }
        }
      }</script>
    <script type="text/javascript">(() = >{
        class RocketLazyLoadScripts {
          constructor() {
            this.v = "1.2.6",
            this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"],
            this.userEventHandler = this.t.bind(this),
            this.touchStartHandler = this.i.bind(this),
            this.touchMoveHandler = this.o.bind(this),
            this.touchEndHandler = this.h.bind(this),
            this.clickHandler = this.u.bind(this),
            this.interceptedClicks = [],
            this.interceptedClickListeners = [],
            this.l(this),
            window.addEventListener("pageshow", (t = >{
              this.persisted = t.persisted,
              this.everythingLoaded && this.m()
            })),
            this.CSPIssue = sessionStorage.getItem("rocketCSPIssue"),
            document.addEventListener("securitypolicyviolation", (t = >{
              this.CSPIssue || "script-src-elem" !== t.violatedDirective || "data" !== t.blockedURI || (this.CSPIssue = !0, sessionStorage.setItem("rocketCSPIssue", !0))
            })),
            document.addEventListener("DOMContentLoaded", (() = >{
              this.k()
            })),
            this.delayedScripts = {
              normal: [],
              async: [],
              defer: []
            },
            this.trash = [],
            this.allJQueries = []
          }
          p(t) {
            document.hidden ? t.t() : (this.triggerEvents.forEach((e = >window.addEventListener(e, t.userEventHandler, {
              passive: !0
            }))), window.addEventListener("touchstart", t.touchStartHandler, {
              passive: !0
            }), window.addEventListener("mousedown", t.touchStartHandler), document.addEventListener("visibilitychange", t.userEventHandler))
          }
          _() {
            this.triggerEvents.forEach((t = >window.removeEventListener(t, this.userEventHandler, {
              passive: !0
            }))),
            document.removeEventListener("visibilitychange", this.userEventHandler)
          }
          i(t) {
            "HTML" !== t.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this.touchMoveHandler, {
              passive: !0
            }), window.addEventListener("mousemove", this.touchMoveHandler), t.target.addEventListener("click", this.clickHandler), this.L(t.target, !0), this.S(t.target, "onclick", "rocket-onclick"), this.C())
          }
          o(t) {
            window.removeEventListener("touchend", this.touchEndHandler),
            window.removeEventListener("mouseup", this.touchEndHandler),
            window.removeEventListener("touchmove", this.touchMoveHandler, {
              passive: !0
            }),
            window.removeEventListener("mousemove", this.touchMoveHandler),
            t.target.removeEventListener("click", this.clickHandler),
            this.L(t.target, !1),
            this.S(t.target, "rocket-onclick", "onclick"),
            this.M()
          }
          h() {
            window.removeEventListener("touchend", this.touchEndHandler),
            window.removeEventListener("mouseup", this.touchEndHandler),
            window.removeEventListener("touchmove", this.touchMoveHandler, {
              passive: !0
            }),
            window.removeEventListener("mousemove", this.touchMoveHandler)
          }
          u(t) {
            t.target.removeEventListener("click", this.clickHandler),
            this.L(t.target, !1),
            this.S(t.target, "rocket-onclick", "onclick"),
            this.interceptedClicks.push(t),
            t.preventDefault(),
            t.stopPropagation(),
            t.stopImmediatePropagation(),
            this.M()
          }
          O() {
            window.removeEventListener("touchstart", this.touchStartHandler, {
              passive: !0
            }),
            window.removeEventListener("mousedown", this.touchStartHandler),
            this.interceptedClicks.forEach((t = >{
              t.target.dispatchEvent(new MouseEvent("click", {
                view: t.view,
                bubbles: !0,
                cancelable: !0
              }))
            }))
          }
          l(t) {
            EventTarget.prototype.addEventListenerWPRocketBase = EventTarget.prototype.addEventListener,
            EventTarget.prototype.addEventListener = function(e, i, o) {
              "click" !== e || t.windowLoaded || i === t.clickHandler || t.interceptedClickListeners.push({
                target: this,
                func: i,
                options: o
              }),
              (this || window).addEventListenerWPRocketBase(e, i, o)
            }
          }
          L(t, e) {
            this.interceptedClickListeners.forEach((i = >{
              i.target === t && (e ? t.removeEventListener("click", i.func, i.options) : t.addEventListener("click", i.func, i.options))
            })),
            t.parentNode !== document.documentElement && this.L(t.parentNode, e)
          }
          D() {
            return new Promise((t = >{
              this.P ? this.M = t: t()
            }))
          }
          C() {
            this.P = !0
          }
          M() {
            this.P = !1
          }
          S(t, e, i) {
            t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(i, event.target.getAttribute(e)), event.target.removeAttribute(e))
          }
          t() {
            this._(this),
            "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this.R.bind(this)) : this.R()
          }
          k() {
            let t = [];
            document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((e = >{
              let i = e.getAttribute("data-rocket-src");
              if (i && !i.startsWith("data:")) {
                0 === i.indexOf("//") && (i = location.protocol + i);
                try {
                  const o = new URL(i).origin;
                  o !== location.origin && t.push({
                    src: o,
                    crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type")
                  })
                } catch(t) {}
              }
            })),
            t = [...new Map(t.map((t = >[JSON.stringify(t), t]))).values()],
            this.T(t, "preconnect")
          }
          async R() {
            this.lastBreath = Date.now(),
            this.j(this),
            this.F(this),
            this.I(),
            this.W(),
            this.q(),
            await this.A(this.delayedScripts.normal),
            await this.A(this.delayedScripts.defer),
            await this.A(this.delayedScripts.async);
            try {
              await this.U(),
              await this.H(this),
              await this.J()
            } catch(t) {
              console.error(t)
            }
            window.dispatchEvent(new Event("rocket-allScriptsLoaded")),
            this.everythingLoaded = !0,
            this.D().then((() = >{
              this.O()
            })),
            this.N()
          }
          W() {
            document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t = >{
              t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t)
            }))
          }
          async B(t) {
            if (await this.G(), !0 !== t.noModule || !("noModule" in HTMLScriptElement.prototype)) return new Promise((e = >{
              let i;
              function o() { (i || t).setAttribute("data-rocket-status", "executed"),
                e()
              }
              try {
                if (navigator.userAgent.indexOf("Firefox/") > 0 || "" === navigator.vendor || this.CSPIssue) i = document.createElement("script"),
                [...t.attributes].forEach((t = >{
                  let e = t.nodeName;
                  "type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), i.setAttribute(e, t.nodeValue))
                })),
                t.text && (i.text = t.text),
                i.hasAttribute("src") ? (i.addEventListener("load", o), i.addEventListener("error", (function() {
                  i.setAttribute("data-rocket-status", "failed-network"),
                  e()
                })), setTimeout((() = >{
                  i.isConnected || e()
                }), 1)) : (i.text = t.text, o()),
                t.parentNode.replaceChild(i, t);
                else {
                  const i = t.getAttribute("data-rocket-type"),
                  s = t.getAttribute("data-rocket-src");
                  i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"),
                  t.addEventListener("load", o),
                  t.addEventListener("error", (i = >{
                    this.CSPIssue && i.target.src.startsWith("data:") ? (console.log("WPRocket: data-uri blocked by CSP -> fallback"), t.removeAttribute("src"), this.B(t).then(e)) : (t.setAttribute("data-rocket-status", "failed-network"), e())
                  })),
                  s ? (t.removeAttribute("data-rocket-src"), t.src = s) : t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text)))
                }
              } catch(i) {
                t.setAttribute("data-rocket-status", "failed-transform"),
                e()
              }
            }));
            t.setAttribute("data-rocket-status", "skipped")
          }
          async A(t) {
            const e = t.shift();
            return e && e.isConnected ? (await this.B(e), this.A(t)) : Promise.resolve()
          }
          q() {
            this.T([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload")
          }
          T(t, e) {
            var i = document.createDocumentFragment();
            t.forEach((t = >{
              const o = t.getAttribute && t.getAttribute("data-rocket-src") || t.src;
              if (o && !o.startsWith("data:")) {
                const s = document.createElement("link");
                s.href = o,
                s.rel = e,
                "preconnect" !== e && (s.as = "script"),
                t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (s.crossOrigin = !0),
                t.crossOrigin && (s.crossOrigin = t.crossOrigin),
                t.integrity && (s.integrity = t.integrity),
                i.appendChild(s),
                this.trash.push(s)
              }
            })),
            document.head.appendChild(i)
          }
          j(t) {
            let e = {};
            function i(i, o) {
              return e[o].eventsToRewrite.indexOf(i) >= 0 && !t.everythingLoaded ? "rocket-" + i: i
            }
            function o(t, o) { !
              function(t) {
                e[t] || (e[t] = {
                  originalFunctions: {
                    add: t.addEventListener,
                    remove: t.removeEventListener
                  },
                  eventsToRewrite: []
                },
                t.addEventListener = function() {
                  arguments[0] = i(arguments[0], t),
                  e[t].originalFunctions.add.apply(t, arguments)
                },
                t.removeEventListener = function() {
                  arguments[0] = i(arguments[0], t),
                  e[t].originalFunctions.remove.apply(t, arguments)
                })
              } (t),
              e[t].eventsToRewrite.push(o)
            }
            function s(e, i) {
              let o = e[i];
              e[i] = null,
              Object.defineProperty(e, i, {
                get: () = >o ||
                function() {},
                set(s) {
                  t.everythingLoaded ? o = s: e["rocket" + i] = o = s
                }
              })
            }
            o(document, "DOMContentLoaded"),
            o(window, "DOMContentLoaded"),
            o(window, "load"),
            o(window, "pageshow"),
            o(document, "readystatechange"),
            s(document, "onreadystatechange"),
            s(window, "onload"),
            s(window, "onpageshow");
            try {
              Object.defineProperty(document, "readyState", {
                get: () = >t.rocketReadyState,
                set(e) {
                  t.rocketReadyState = e
                },
                configurable: !0
              }),
              document.readyState = "loading"
            } catch(t) {
              console.log("WPRocket DJE readyState conflict, bypassing")
            }
          }
          F(t) {
            let e;
            function i(e) {
              return t.everythingLoaded ? e: e.split(" ").map((t = >"load" === t || 0 === t.indexOf("load.") ? "rocket-jquery-load": t)).join(" ")
            }
            function o(o) {
              function s(t) {
                const e = o.fn[t];
                o.fn[t] = o.fn.init.prototype[t] = function() {
                  return this[0] === window && ("string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = i(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach((t = >{
                    const e = arguments[0][t];
                    delete arguments[0][t],
                    arguments[0][i(t)] = e
                  }))),
                  e.apply(this, arguments),
                  this
                }
              }
              o && o.fn && !t.allJQueries.includes(o) && (o.fn.ready = o.fn.init.prototype.ready = function(e) {
                return t.domReadyFired ? e.bind(document)(o) : document.addEventListener("rocket-DOMContentLoaded", (() = >e.bind(document)(o))),
                o([])
              },
              s("on"), s("one"), t.allJQueries.push(o)),
              e = o
            }
            o(window.jQuery),
            Object.defineProperty(window, "jQuery", {
              get: () = >e,
              set(t) {
                o(t)
              }
            })
          }
          async H(t) {
            const e = document.querySelector("script[data-webpack]");
            e && (await async
            function() {
              return new Promise((t = >{
                e.addEventListener("load", t),
                e.addEventListener("error", t)
              }))
            } (), await t.K(), await t.H(t))
          }
          async U() {
            this.domReadyFired = !0;
            try {
              document.readyState = "interactive"
            } catch(t) {}
            await this.G(),
            document.dispatchEvent(new Event("rocket-readystatechange")),
            await this.G(),
            document.rocketonreadystatechange && document.rocketonreadystatechange(),
            await this.G(),
            document.dispatchEvent(new Event("rocket-DOMContentLoaded")),
            await this.G(),
            window.dispatchEvent(new Event("rocket-DOMContentLoaded"))
          }
          async J() {
            try {
              document.readyState = "complete"
            } catch(t) {}
            await this.G(),
            document.dispatchEvent(new Event("rocket-readystatechange")),
            await this.G(),
            document.rocketonreadystatechange && document.rocketonreadystatechange(),
            await this.G(),
            window.dispatchEvent(new Event("rocket-load")),
            await this.G(),
            window.rocketonload && window.rocketonload(),
            await this.G(),
            this.allJQueries.forEach((t = >t(window).trigger("rocket-jquery-load"))),
            await this.G();
            const t = new Event("rocket-pageshow");
            t.persisted = this.persisted,
            window.dispatchEvent(t),
            await this.G(),
            window.rocketonpageshow && window.rocketonpageshow({
              persisted: this.persisted
            }),
            this.windowLoaded = !0
          }
          m() {
            document.onreadystatechange && document.onreadystatechange(),
            window.onload && window.onload(),
            window.onpageshow && window.onpageshow({
              persisted: this.persisted
            })
          }
          I() {
            const t = new Map;
            document.write = document.writeln = function(e) {
              const i = document.currentScript;
              i || console.error("WPRocket unable to document.write this: " + e);
              const o = document.createRange(),
              s = i.parentElement;
              let n = t.get(i);
              void 0 === n && (n = i.nextSibling, t.set(i, n));
              const c = document.createDocumentFragment();
              o.setStart(c, 0),
              c.appendChild(o.createContextualFragment(e)),
              s.insertBefore(c, n)
            }
          }
          async G() {
            Date.now() - this.lastBreath > 45 && (await this.K(), this.lastBreath = Date.now())
          }
          async K() {
            return document.hidden ? new Promise((t = >setTimeout(t))) : new Promise((t = >requestAnimationFrame(t)))
          }
          N() {
            this.trash.forEach((t = >t.remove()))
          }
          static run() {
            const t = new RocketLazyLoadScripts;
            t.p(t)
          }
        }
        RocketLazyLoadScripts.run()
      })();</script>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="">
    <script src="data:text/javascript;base64,ZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LmNsYXNzTmFtZSA9IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5jbGFzc05hbWUgKyAnIHllcy1qcyBqc19hY3RpdmUganMn" data-rocket-status="executed">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <script src="data:text/javascript;base64,KGZ1bmN0aW9uKGh0bWwpe2h0bWwuY2xhc3NOYW1lID0gaHRtbC5jbGFzc05hbWUucmVwbGFjZSgvXGJuby1qc1xiLywnanMnKX0pKGRvY3VtZW50LmRvY3VtZW50RWxlbWVudCk7" data-rocket-status="executed">(function(html) {
        html.className = html.className.replace(/\bno-js\b/, 'js')
      })(document.documentElement);</script>
    <!-- Google Tag Manager for WordPress by gtm4wp.com -->
    <script data-cfasync="false" data-pagespeed-no-defer="">var gtm4wp_datalayer_name = "dataLayer";
      var dataLayer = dataLayer || [];
      const gtm4wp_use_sku_instead = false;
      const gtm4wp_currency = 'VND';
      const gtm4wp_product_per_impression = 10;
      const gtm4wp_clear_ecommerce = false;</script>
    <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Search Engine Optimization by Rank Math PRO - https://rankmath.com/ -->
    <title>108 单珠沉香手链 - Tram Toc 越南</title>
    <link rel="preload" data-rocket-preload="" as="style" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&amp;display=swap" media="all" onload="this.media='all'">
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&#038;display=swap" /></noscript>
    <link rel="preload" data-rocket-preload="" as="image" href="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg" imagesrcset="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg 2000w" imagesizes="(max-width: 510px) 100vw, 510px" fetchpriority="high">
    <meta name="description" content="Vòng Trầm Hương 108 Hạt giúp đoạn trừ 108 muộn phiền. Mang lại cho người sử dụng cảm giác yên bình, tài lộc và được độ trì từ ân trên.">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="canonical" href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="product">
    <meta property="og:title" content="Vòng tay Trầm Hương 108 Hạt Lào Xám">
    <meta property="og:description" content="Vòng tay Trầm Hương 108 Hạt không chỉ mang lại vận khí may mắn, tài lộc bình an mà còn toát lên vẻ đẹp tuyệt mĩ, sự tự tin và thu hút.">
    <meta property="og:url" content="https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat">
    <meta property="og:site_name" content="Thiên Mộc Hương">
    <meta property="og:updated_time" content="2025-01-28T05:36:37+07:00">
    <meta property="og:image" content="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg">
    <meta property="og:image:secure_url" content="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg">
    <meta property="og:image:width" content="2000">
    <meta property="og:image:height" content="2000">
    <meta property="og:image:alt" content="Vòng tay Trầm Hương 108 hạt trơn - Trầm Tốc Việt Nam">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="product:brand" content="Thiên Mộc Hương">
    <meta property="product:availability" content="instock">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Vòng tay Trầm Hương 108 Hạt Lào Xám">
    <meta name="twitter:description" content="Vòng tay Trầm Hương 108 Hạt không chỉ mang lại vận khí may mắn, tài lộc bình an mà còn toát lên vẻ đẹp tuyệt mĩ, sự tự tin và thu hút.">
    <meta name="twitter:creator" content="@danghoangtmh">
    <meta name="twitter:image" content="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg">
    <meta name="twitter:label1" content="Price">
    <meta name="twitter:data1" content="2.490.000&nbsp;₫">
    <meta name="twitter:label2" content="Availability">
    <meta name="twitter:data2" content="In stock">
    <!-- /Rank Math WordPress SEO plugin -->
    <link rel="dns-prefetch" href="//stats.wp.com">
    <link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">
    <link rel="prefetch" href="https://thienmochuong.com/wp-content/themes/flatsome/assets/js/flatsome.js?ver=a0a7aee297766598a20e">
    <link rel="prefetch" href="https://thienmochuong.com/wp-content/themes/flatsome/assets/js/chunk.slider.js?ver=3.18.5">
    <link rel="prefetch" href="https://thienmochuong.com/wp-content/themes/flatsome/assets/js/chunk.popups.js?ver=3.18.5">
    <link rel="prefetch" href="https://thienmochuong.com/wp-content/themes/flatsome/assets/js/chunk.tooltips.js?ver=3.18.5">
    <link rel="prefetch" href="https://thienmochuong.com/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=49415fe6a9266f32f1f2">
    <link rel="alternate" type="application/rss+xml" title="Thien Moc Huong 信息流 »" href="https://thienmochuong.com/feed">
    <link rel="alternate" type="application/rss+xml" title="Thien Moc Huong » 评论" href="https://thienmochuong.com/comments/feed">
    <link rel="alternate" type="application/rss+xml" title="Thien Moc Huong » 108 单珠沉香手链 – Tram Toc Vietnam 评论" href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat/feed">
    <style id="wp-emoji-styles-inline-css" type="text/css">img.wp-smiley, img.emoji { display: inline !important; border: none !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0 0.07em !important; vertical-align: -0.1em !important; background: none !important; padding: 0 !important; }</style>
    <style id="wp-block-library-inline-css" type="text/css">:root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,161;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px;--wp-block-synced-color:#7a00df;--wp-block-synced-color--rgb:122,0,223;--wp-bound-block-color:#9747ff}@media (min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.screen-reader-text:focus{background-color:#ddd;clip:auto!important;-webkit-clip-path:none;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}</style>
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/magnific-popup/magnific-popup.css?ver=1.5.1" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/css/devvn-woocommerce-reviews.css?ver=1.5.1&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/owl/assets/owl.carousel.min.css?ver=1.5.1&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/css/devvn-shortcode-reviews.css?ver=1.5.1&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/isures-combo-offers/public/css/owl.carousel.min.css?ver=2.2.0&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/isures-combo-offers/public/css/isures-combo-offers-public.css?ver=2.2.0&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.min.css?ver=5.4.7&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/plugins/official-mailerlite-sign-up-forms/assets/css/mailerlite_forms.css?ver=1.7.10" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css?ver=8.9.1&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css?ver=8.9.1&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">.woocommerce form .form-row .required { visibility: visible; }</style>
    <link rel="stylesheet" href="https://thienmochuong.com/wp-includes/css/dashicons.min.css?ver=93f6f3aee2856cf389b1ea46be37ba48" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <style id="dashicons-inline-css" type="text/css">[data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}</style>
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/css/wt-smart-coupon-public.css?ver=1.7.1" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/plugins/woo-mailerlite/includes/../public/css/style.css?ver=93f6f3aee2856cf389b1ea46be37ba48" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.css?ver=3.10.2" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/themes/flatsome/assets/css/extensions/flatsome-swatches-frontend.css?ver=3.18.5" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="//thienmochuong.com/wp-content/uploads/pum/pum-site-styles.css?generated=1716901030&amp;ver=1.19.0" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.18.5&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <style id="flatsome-main-inline-css" type="text/css">@font-face { font-family: "fl-icons"; font-display: block; src: url(https://thienmochuong.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot?v=3.18.5); src: url(https://thienmochuong.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.18.5) format("embedded-opentype"), url(https://thienmochuong.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.woff2?v=3.18.5) format("woff2"), url(https://thienmochuong.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.ttf?v=3.18.5) format("truetype"), url(https://thienmochuong.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.woff?v=3.18.5) format("woff"), url(https://thienmochuong.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.svg?v=3.18.5#fl-icons) format("svg"); }</style>
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=3.18.5" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/themes/devvn-child/style.css?ver=1.0.3&amp;wpr_t=1740233783" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
    <script type="text/javascript" src="https://stats.wp.com/w.js?ver=202508" id="woo-tracks-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js" defer=""></script>
    <script type="text/javascript" id="wp-util-js-extra">/* <![CDATA[ */
      var _wpUtilSettings = {
        "ajax": {
          "url": "\/wp-admin\/admin-ajax.php"
        }
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/wp-util.min.js?ver=93f6f3aee2856cf389b1ea46be37ba48" id="wp-util-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.9.1" id="jquery-blockui-js" data-wp-strategy="defer" defer=""></script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">/* <![CDATA[ */
      var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.",
        "i18n_make_a_selection_text": "Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.",
        "i18n_unavailable_text": "R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=8.9.1" id="wc-add-to-cart-variation-js" data-wp-strategy="defer" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/isures-combo-offers/public/js/owl.carousel.min.js?ver=2.2.0" id="isures-combo-offers-slider-js" defer=""></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">/* <![CDATA[ */
      var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
        "cart_url": "https:\/\/thienmochuong.com\/cart",
        "is_cart": "",
        "cart_redirect_after_add": "yes"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.9.1" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1-wc.8.9.1" id="photoswipe-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1-wc.8.9.1" id="photoswipe-ui-default-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-single-product-js-extra">/* <![CDATA[ */
      var wc_single_product_params = {
        "i18n_required_rating_text": "Vui l\u00f2ng ch\u1ecdn m\u1ed9t m\u1ee9c \u0111\u00e1nh gi\u00e1",
        "review_rating_required": "yes",
        "flexslider": {
          "rtl": false,
          "animation": "slide",
          "smoothHeight": true,
          "directionNav": false,
          "controlNav": "thumbnails",
          "slideshow": false,
          "animationSpeed": 500,
          "animationLoop": false,
          "allowOneSlide": false
        },
        "zoom_enabled": "",
        "zoom_options": [],
        "photoswipe_enabled": "1",
        "photoswipe_options": {
          "shareEl": false,
          "closeOnScroll": false,
          "history": false,
          "hideAnimationDuration": 0,
          "showAnimationDuration": 0
        },
        "flexslider_enabled": ""
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=8.9.1" id="wc-single-product-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.9.1" id="js-cookie-js" data-wp-strategy="defer" defer=""></script>
    <script type="text/javascript" id="wt-smart-coupon-for-woo-js-extra">/* <![CDATA[ */
      var WTSmartCouponOBJ = {
        "ajaxurl": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "https:\/\/thienmochuong.com\/?wc-ajax=",
        "nonces": {
          "public": "a90116203c",
          "apply_coupon": "e48c1c8a61"
        },
        "labels": {
          "please_wait": "Please wait...",
          "choose_variation": "Please choose a variation",
          "error": "Error !!!"
        },
        "shipping_method": [],
        "payment_method": "",
        "is_cart": ""
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/js/wt-smart-coupon-public.js?ver=1.7.1" id="wt-smart-coupon-for-woo-js" defer=""></script>
    <script type="text/javascript" id="woo-ml-public-script-js-extra">/* <![CDATA[ */
      var woo_ml_public_post = {
        "ajax_url": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "language": "vi",
        "checkbox_settings": {
          "label": "\u0110\u0103ng k\u00fd nh\u1eadn tin Khuy\u1ebfn m\u00e3i t\u1eeb Thi\u00ean M\u1ed9c H\u01b0\u01a1ng",
          "preselect": "no",
          "hidden": "yes"
        }
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woo-mailerlite/public/js/public.js?ver=2.1.12" id="woo-ml-public-script-js" defer=""></script>
    <link rel="https://api.w.org/" href="https://thienmochuong.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://thienmochuong.com/wp-json/wp/v2/product/13832">
    <link rel="EditURI" type="application/rsd+xml" title="相对标准偏差" href="https://thienmochuong.com/xmlrpc.php?rsd">
    <link rel="shortlink" href="https://thienmochuong.com/?p=13832">
    <link rel="alternate" type="application/json+oembed" href="https://thienmochuong.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthienmochuong.com%2Fsan-pham%2Fvong-tay-tram-huong-108-hat">
    <link rel="alternate" type="text/xml+oembed" href="https://thienmochuong.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthienmochuong.com%2Fsan-pham%2Fvong-tay-tram-huong-108-hat&amp;format=xml">
    <script type="application/ld+json">{
        "@context": "https://schema.org/",
        "@type": "CreativeWorkSeries",
        "name": "Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam",
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "5",
          "bestRating": "5",
          "ratingCount": "2"
        }
      }</script>
    <!-- MailerLite Universal -->
    <script src="data:text/javascript;base64,CiAgICAgICAgICAgIChmdW5jdGlvbih3LGQsZSx1LGYsbCxuKXt3W2ZdPXdbZl18fGZ1bmN0aW9uKCl7KHdbZl0ucT13W2ZdLnF8fFtdKQogICAgICAgICAgICAgICAgLnB1c2goYXJndW1lbnRzKTt9LGw9ZC5jcmVhdGVFbGVtZW50KGUpLGwuYXN5bmM9MSxsLnNyYz11LAogICAgICAgICAgICAgICAgbj1kLmdldEVsZW1lbnRzQnlUYWdOYW1lKGUpWzBdLG4ucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUobCxuKTt9KQogICAgICAgICAgICAod2luZG93LGRvY3VtZW50LCdzY3JpcHQnLCdodHRwczovL2Fzc2V0cy5tYWlsZXJsaXRlLmNvbS9qcy91bml2ZXJzYWwuanMnLCdtbCcpOwogICAgICAgICAgICBtbCgnYWNjb3VudCcsICc0NTQzNTcnKTsKICAgICAgICAgICAgbWwoJ2VuYWJsZVBvcHVwcycsIHRydWUpOwogICAgICAgIA==" data-rocket-status="executed">(function(w, d, e, u, f, l, n) {
        w[f] = w[f] ||
        function() { (w[f].q = w[f].q || []).push(arguments);
        },
        l = d.createElement(e),
        l.async = 1,
        l.src = u,
        n = d.getElementsByTagName(e)[0],
        n.parentNode.insertBefore(l, n);
      })(window, document, 'script', 'https://assets.mailerlite.com/js/universal.js', 'ml');
      ml('account', '454357');
      ml('enablePopups', true);</script>
    <!-- End MailerLite Universal -->
    <!-- This website runs the Product Feed PRO for WooCommerce by AdTribes.io plugin - version 13.3.2 -->
    <!-- Schema optimized by Schema Pro -->
    <script type="application/ld+json">{
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Thiên Mộc Hương - Thương hiệu Trầm Hương Quốc Tế",
        "image": "https://thienmochuong.com/wp-content/uploads/2022/06/Logo-Thien-Moc-Huong.png",
        "@id": "https://thienmochuong.com/wp-content/uploads/2022/06/Logo-Thien-Moc-Huong.png",
        "url": "https://thienmochuong.com/",
        "telephone": "+84 933 348 368",
        "priceRange": "65000-300000000",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "71 Nguyễn Khắc Nhu, Phường Cô Giang, Quận 1",
          "addressLocality": "Thành phố Hồ Chí Minh",
          "postalCode": "71013",
          "addressCountry": "VN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 10.7636733,
          "longitude": 106.6928712
        },
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "08:00",
          "closes": "22:00"
        },
        "sameAs": ["https://www.facebook.com/thienmochuongvn", "https://www.instagram.com/thienmochuongvn/", "https://www.youtube.com/@VongtayTramHuongThienMocHuong", "https://www.linkedin.com/company/tram-huong-thien-moc-huong/", "https://www.pinterest.com/tramhuongthienmochuong/"],
        "department": {
          "@type": "JewelryStore",
          "name": "Thiên Mộc Hương chi nhánh Hà Nội - Trang sức trầm hương cao cấp",
          "image": "https://thienmochuong.com/wp-content/uploads/2021/06/cua-hang-thien-moc-huong-ha-noi.jpg",
          "telephone": "0818 348 368",
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Saturday", "Friday", "Sunday"],
            "opens": "08:00",
            "closes": "22:00"
          }
        }
      }</script>
    <!-- / Schema optimized by Schema Pro -->
    <!-- Schema optimized by Schema Pro -->
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "@id": "https://thienmochuong.com/#organization",
        "url": "https://thienmochuong.com/",
        "mainEntityOfPage": "https://thienmochuong.com/",
        "sameAs": ["https://www.facebook.com/thienmochuongvn", "https://www.instagram.com/thienmochuongvn/", "https://www.youtube.com/@VongtayTramHuongThienMocHuong", "https://www.linkedin.com/company/tram-huong-thien-moc-huong/"],
        "name": "Thiên Mộc Hương - Thương hiệu Trầm Hương Quốc Tế",
        "description": "Thiên Mộc Hương là thương hiệu Trầm Hương Quốc Tế với các sản phẩm gồm Vòng tay Trầm Hương, Nhang Trầm Hương, Đốt Trầm Hương...",
        "logo": {
          "@type": "ImageObject",
          "@id": "https://thienmochuong.com/#logo",
          "inLanguage": "vi-VN",
          "url": "https://thienmochuong.com/wp-content/uploads/2022/06/Logo-Thien-Moc-Huong.png",
          "width": "300",
          "height": "188",
          "caption": "Logo Thienmochuong.com",
          "image": "https://thienmochuong.com/wp-content/uploads/2022/06/Logo-Thien-Moc-Huong.png"
        },
        "address": [{
          "@type": "PostalAddress",
          "@id": "https://thienmochuong.com/#addressHOCHIMINH",
          "addressLocality": "Quận 1",
          "addressCountry": "VIỆT NAM",
          "addressRegion": "Hồ Chí Minh",
          "postalCode": "71013",
          "streetAddress": "71 Nguyễn Khắc Nhu, Phường Cô Giang"
        },
        {
          "@type": "PostalAddress",
          "@id": "https://thienmochuong.com/#addressHANOI",
          "addressLocality": "Quận Hoàn Kiếm",
          "addressCountry": "VIỆT NAM",
          "addressRegion": "Hà Nội",
          "postalCode": "11018",
          "streetAddress": "120 Hai Bà Trưng, Cửa Nam"
        }],

        "contactPoint": {
          "@type": "ContactPoint",
          "@id": "https://thienmochuong.com/#contactPoint",
          "telephone": "+84 933 348 368",
          "email": "thienmochuong@gmail.com"
        },
        "legalName": "Công ty cổ phần Thiên Mộc Hương",
        "foundingDate": "2016"
      }</script>
    <!-- / Schema optimized by Schema Pro -->
    <!-- site-navigation-element Schema optimized by Schema Pro -->
    <script type="application/ld+json">{
        "@context": "https:\/\/schema.org",
        "@graph": [{
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Gi\u1edbi Thi\u1ec7u",
          "url": "https:\/\/thienmochuong.com\/gioi-thieu-trang-suc-tram-huong-thien-moc-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u1ec1 Thi\u00ean M\u1ed9c H\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/gioi-thieu-trang-suc-tram-huong-thien-moc-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Gi\u1ea3i th\u01b0\u1edfng UNESCO",
          "url": "https:\/\/thienmochuong.com\/unesco"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "The Master Box",
          "url": "https:\/\/thienmochuong.com\/thien-moc-huong-the-master-box"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng tay tr\u1ea7m h\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Danh M\u1ee5c v\u00f2ng tay",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng N\u1eef",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong-nu"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng Nam",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong-nam"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng Tay Tr\u1ea7m H\u01b0\u01a1ng C\u1eb7p \u0110\u00f4i",
          "url": "https:\/\/thienmochuong.com\/tram-huong-cap-doi"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng cho B\u00e9",
          "url": "https:\/\/thienmochuong.com\/vong-tram-huong-cho-be"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng B\u00e1n Ch\u1ea1y\u2728",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong-best-seller"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "BST V\u00d2NG TAY",
          "url": "#"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng 108 h\u1ea1t",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong-108"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng b\u1ecdc V\u00e0ng",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong-boc-vang"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng Tr\u1ea7m Mix Charm V\u00e0ng",
          "url": "https:\/\/thienmochuong.com\/vong-tram-mix-charm-vang"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng Charm B\u1ea1c",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong-mix-charm-bac"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng T\u1ef3 H\u01b0u",
          "url": "https:\/\/thienmochuong.com\/vong-tay-tram-huong-ty-huu"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "VIP Collection \ud83d\udd38 The Master Box",
          "url": "https:\/\/thienmochuong.com\/bst-vong-tram-huong-vip"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Nhang Tr\u1ea7m H\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/nhang-tram-huong-sach"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Nhang V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/nhang-vong-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Nhang Tr\u1ea7m C\u00f3 T\u0103m",
          "url": "https:\/\/thienmochuong.com\/nhang-tram-co-tam"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Nhang Tr\u1ea7m Kh\u00f4ng T\u0103m",
          "url": "https:\/\/thienmochuong.com\/nhang-tram-khong-tam"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "N\u1ee5 Tr\u1ea7m H\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/nu-tram-huong-cao-cap"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "M\u1ef9 ngh\u1ec7 tr\u1ea7m h\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/my-nghe-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "N\u01b0\u1edbc hoa tr\u1ea7m h\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/nuoc-hoa-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Tr\u1ea7m H\u01b0\u01a1ng C\u1ea3nh",
          "url": "https:\/\/thienmochuong.com\/tram-huong-canh"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "T\u01b0\u1ee3ng Ph\u1eadt Tr\u1ea7m H\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/tuong-phat-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "M\u1eb7t D\u00e2y Chuy\u1ec1n G\u1ed7 Tr\u1ea7m H\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/mat-day-chuyen-go-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "D\u00e2y Treo Xe \u00d4 T\u00f4 Tr\u1ea7m H\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/day-treo-xe-o-to-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "S\u1ea3n ph\u1ea9m m\u1ef9 ngh\u1ec7 tr\u1ea7m kh\u00e1c",
          "url": "https:\/\/thienmochuong.com\/san-pham-khac"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Tr\u1ea7m H\u01b0\u01a1ng \u0110\u1ed1t",
          "url": "https:\/\/thienmochuong.com\/tram-huong-dot-1"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Qu\u00e0 t\u1eb7ng",
          "url": "https:\/\/thienmochuong.com\/qua-tang-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Blog",
          "url": "https:\/\/thienmochuong.com\/blog"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Ki\u1ebfn th\u1ee9c tr\u1ea7m h\u01b0\u01a1ng",
          "url": "https:\/\/thienmochuong.com\/chuyen-muc\/kien-thuc-tram-huong"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Phong Th\u1ee7y",
          "url": "https:\/\/thienmochuong.com\/chuyen-muc\/phong-thuy"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Xem cung m\u1ec7nh",
          "url": "https:\/\/thienmochuong.com\/cung-menh-la-gi-cach-xem-menh-ngu-hanh-cach-tinh-menh-theo-ngu-hanh"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Tra c\u1ee9u m\u00e0u h\u1ee3p tu\u1ed5i",
          "url": "https:\/\/thienmochuong.com\/xem-mau-hop-tuoi"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "\u0110\u00e1 qu\u00fd",
          "url": "https:\/\/thienmochuong.com\/chuyen-muc\/da-quy"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Gi\u1ea3i m\u00e3 gi\u1ea5c m\u01a1",
          "url": "https:\/\/thienmochuong.com\/chuyen-muc\/giai-ma-giac-mo"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Qu\u00e0 t\u1eb7ng &amp; Ng\u00e0y l\u1ec5",
          "url": "https:\/\/thienmochuong.com\/chuyen-muc\/qua-tang"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Th\u00f4ng tin khuy\u1ebfn m\u00e3i",
          "url": "https:\/\/thienmochuong.com\/chuyen-muc\/khuyen-mai"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Tin t\u1ee9c chung",
          "url": "https:\/\/thienmochuong.com\/chuyen-muc\/tin-tuc-chung"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Tuy\u1ec3n d\u1ee5ng",
          "url": "https:\/\/thienmochuong.com\/chuyen-muc\/tuyen-dung-nhan-su"
        },
        {
          "@context": "https:\/\/schema.org",
          "@type": "SiteNavigationElement",
          "id": "site-navigation",
          "name": "Li\u00ean h\u1ec7",
          "url": "https:\/\/thienmochuong.com\/lien-he"
        }]
      }</script>
    <!-- / site-navigation-element Schema optimized by Schema Pro -->
    <!-- sitelink-search-box Schema optimized by Schema Pro -->
    <script type="application/ld+json">{
        "@context": "https:\/\/schema.org",
        "@type": "WebSite",
        "name": "Thi\u00ean M\u1ed9c H\u01b0\u01a1ng",
        "url": "https:\/\/thienmochuong.com",
        "potentialAction": [{
          "@type": "SearchAction",
          "target": "https:\/\/thienmochuong.com\/?s={search_term_string}",
          "query-input": "required name=search_term_string"
        }]
      }</script>
    <!-- / sitelink-search-box Schema optimized by Schema Pro -->
    <!-- Google Tag Manager for WordPress by gtm4wp.com -->
    <!-- GTM Container placement set to automatic -->
    <script data-cfasync="false" data-pagespeed-no-defer="" type="text/javascript">var dataLayer_content = {
        "pagePostType": "product",
        "pagePostType2": "single-product",
        "pagePostAuthor": "Ông Hoàng Phong Thuỷ",
        "productRatingCounts": {
          "4": 1,
          "5": 28
        },
        "productAverageRating": 4.97,
        "productReviewCount": 29,
        "productType": "variable",
        "productIsVariable": 1
      };
      dataLayer.push(dataLayer_content);</script>
    <script data-cfasync="false">(function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l: '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-MCVWPNH');</script>
    <!-- End Google Tag Manager for WordPress by gtm4wp.com -->
    <style>:root { --isures-primary-cb_color:#fab55a;--isures-secondary-cb_color:#dd3333;--isures-linear--cb_top:#fab55a;--isures-linear--cb_bottom:#1c2233; }</style>
    <!-- MailerLite Universal -->
    <script src="data:text/javascript;base64,CiAgICAgICAgICAgIChmdW5jdGlvbiAodywgZCwgZSwgdSwgZiwgbCwgbikgewogICAgICAgICAgICAgICAgd1tmXSA9IHdbZl0gfHwgZnVuY3Rpb24gKCkgewogICAgICAgICAgICAgICAgICAgICh3W2ZdLnEgPSB3W2ZdLnEgfHwgW10pCiAgICAgICAgICAgICAgICAgICAgICAgIC5wdXNoKGFyZ3VtZW50cyk7CiAgICAgICAgICAgICAgICB9LCBsID0gZC5jcmVhdGVFbGVtZW50KGUpLCBsLmFzeW5jID0gMSwgbC5zcmMgPSB1LAogICAgICAgICAgICAgICAgICAgIG4gPSBkLmdldEVsZW1lbnRzQnlUYWdOYW1lKGUpWzBdLCBuLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGwsIG4pOwogICAgICAgICAgICB9KQogICAgICAgICAgICAod2luZG93LCBkb2N1bWVudCwgJ3NjcmlwdCcsICdodHRwczovL2Fzc2V0cy5tYWlsZXJsaXRlLmNvbS9qcy91bml2ZXJzYWwuanMnLCAnbWwnKTsKICAgICAgICAgICAgbWwoJ2FjY291bnQnLCAnNDU0MzU3Jyk7CiAgICAgICAgICAgIG1sKCdlbmFibGVQb3B1cHMnLCB0cnVlKTsKICAgICAgICA=" data-rocket-status="executed">(function(w, d, e, u, f, l, n) {
        w[f] = w[f] ||
        function() { (w[f].q = w[f].q || []).push(arguments);
        },
        l = d.createElement(e),
        l.async = 1,
        l.src = u,
        n = d.getElementsByTagName(e)[0],
        n.parentNode.insertBefore(l, n);
      })(window, document, 'script', 'https://assets.mailerlite.com/js/universal.js', 'ml');
      ml('account', '454357');
      ml('enablePopups', true);</script>
    <!-- End MailerLite Universal -->
    <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <meta name="google-site-verification" content="8XcWJOcs0FkTvFaLJWWdJGRX8XZ0JEvGo1yJ7ZJW08I">
    <noscript>
      <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style type="text/css">.wdp_bulk_table_content .wdp_pricing_table_caption { font-weight: bold ! important} .wdp_bulk_table_content .wdp_pricing_table_caption { color: #fab55a ! important} .wdp_bulk_table_content table thead td { color: #000000 ! important} .wdp_bulk_table_content table thead td { background-color: #efefef ! important} .wdp_bulk_table_content table tbody td { color: #6d6d6d ! important} .wdp_bulk_table_content table tbody td { background-color: #ffffff ! important} .wdp_bulk_table_content .wdp_pricing_table_footer { color: #6d6d6d ! important}</style>
    <style id="wpsp-style-frontend"></style>
    <link rel="icon" href="https://thienmochuong.com/wp-content/uploads/2019/06/cropped-Favicon-Tram-huong-Thien-Moc-Huong-32x32.png" sizes="32x32">
    <link rel="icon" href="https://thienmochuong.com/wp-content/uploads/2019/06/cropped-Favicon-Tram-huong-Thien-Moc-Huong-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://thienmochuong.com/wp-content/uploads/2019/06/cropped-Favicon-Tram-huong-Thien-Moc-Huong-180x180.png">
    <meta name="msapplication-TileImage" content="https://thienmochuong.com/wp-content/uploads/2019/06/cropped-Favicon-Tram-huong-Thien-Moc-Huong-270x270.png">
    <style id="custom-css" type="text/css">:root {--primary-color: #fab55a;--fs-color-primary: #fab55a;--fs-color-secondary: #e0430a;--fs-color-success: #60bb05;--fs-color-alert: #f10303;--fs-experimental-link-color: #fab55a;--fs-experimental-link-color-hover: #111111;}.tooltipster-base {--tooltip-color: #fff;--tooltip-bg-color: #000;}.off-canvas-right .mfp-content, .off-canvas-left .mfp-content {--drawer-width: 300px;}.off-canvas .mfp-content.off-canvas-cart {--drawer-width: 360px;}.container-width, .full-width .ubermenu-nav, .container, .row{max-width: 1100px}.row.row-collapse{max-width: 1070px}.row.row-small{max-width: 1092.5px}.row.row-large{max-width: 1130px}.header-main{height: 38px}#logo img{max-height: 38px}#logo{width:112px;}.header-bottom{min-height: 55px}.header-top{min-height: 75px}.transparent .header-main{height: 50px}.transparent #logo img{max-height: 50px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 80px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.header-bg-color {background-color: #101628}.header-bottom {background-color: #101628}.top-bar-nav > li > a{line-height: 16px }.stuck .header-main .nav > li > a{line-height: 50px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}.main-menu-overlay{background-color: #192139}.nav-dropdown{border-radius:10px}.nav-dropdown{font-size:100%}.nav-dropdown-has-arrow li.has-dropdown:after{border-bottom-color: #192139;}.nav .nav-dropdown{background-color: #192139}.header-top{background-color:rgba(16,22,40,0)!important;}body{color: #000000}h1,h2,h3,h4,h5,h6,.heading-font{color: #000000;}@media screen and (max-width: 549px){body{font-size: 100%;}}body{font-family: Roboto, sans-serif;}body {font-weight: 400;font-style: normal;}.nav > li > a {font-family: Roboto, sans-serif;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family: Roboto, sans-serif;}.nav > li > a,.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;font-style: normal;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: Roboto, sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2 {font-weight: 700;font-style: normal;}.alt-font{font-family: Roboto, sans-serif;}.alt-font {font-weight: 400!important;font-style: normal!important;}.header:not(.transparent) .header-nav-main.nav > li > a {color: #ffffff;}.header:not(.transparent) .header-nav-main.nav > li > a:hover,.header:not(.transparent) .header-nav-main.nav > li.active > a,.header:not(.transparent) .header-nav-main.nav > li.current > a,.header:not(.transparent) .header-nav-main.nav > li > a.active,.header:not(.transparent) .header-nav-main.nav > li > a.current{color: #fab55a;}.header-nav-main.nav-line-bottom > li > a:before,.header-nav-main.nav-line-grow > li > a:before,.header-nav-main.nav-line > li > a:before,.header-nav-main.nav-box > li > a:hover,.header-nav-main.nav-box > li.active > a,.header-nav-main.nav-pills > li > a:hover,.header-nav-main.nav-pills > li.active > a{color:#FFF!important;background-color: #fab55a;}.widget:where(:not(.widget_shopping_cart)) a{color: #fab55a;}.widget:where(:not(.widget_shopping_cart)) a:hover{color: #111111;}.widget .tagcloud a:hover{border-color: #111111; background-color: #111111;}.has-equal-box-heights .box-image {padding-top: 100%;}.badge-inner.on-sale{background-color: rgba(250,181,90,0.2)}.star-rating span:before,.star-rating:before, .woocommerce-page .star-rating:before, .stars a:hover:after, .stars a.active:after{color: #fab55a}.price del, .product_list_widget del, del .woocommerce-Price-amount { color: #000000; }ins .woocommerce-Price-amount { color: #000000; }.shop-page-title.featured-title .title-bg{ background-image: var(--wpr-bg-3a01936b-e604-4d2c-a66a-54aad445a6b4)!important;}@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 400px!important;width: 400px!important;}}.footer-2{background-image: url('https://thienmochuong.com/wp-content/uploads/2022/05/bg_footer.png');}.footer-2{background-color: #0e1523}.absolute-footer, html{background-color: #0e1523}.page-title-small + main .product-container > .row{padding-top:0;}.nav-vertical-fly-out > li + li {border-top-width: 1px; border-top-style: solid;}/* Custom CSS */.message-box {border-radius: 5px !important;-moz-border-radius: 5px !important;-webkit-border-radius: 5px !important;overflow: hidden;}div#comments div#reviews textarea#comment {border-bottom-right-radius: 0;border-bottom-left-radius: 0;}.Wrapper {position: relative;padding-bottom: 56.25%;height: 0;}.Wrapper iframe,.Wrapper object,.Wrapper embed{ position: absolute !important; top: 0 !important; left: 0 !important; width: 100% !important; height: 100% !important; max-width: unset !important;}.term-description .devvn_box_desc_inner a {color: #0000ff !important;}.term-description .devvn_box_desc_inner a:hover {text-decoration: underline;}.iframeWrapper {width: 100%;max-width: 600px;margin: 0 auto 15px;}.grecaptcha-badge {opacity: 0 !important;}.devvn_content_info_user ul, .devvn_content_info_user ol {margin-left: 45px;}.woocommerce-billing-fields {padding-top: 0;border-top: 0;}/*.devvn_box_intros h1 span,*/.devvn_box_intros h1{font-size: 25px !important;line-height: 36px;color: #282828 !important;}.devvn_box_intros .text-inner.text-center p {font-size: 14px;}#mlb2-8837902.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent h4, #mlb2-8837902.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent h4 {font-size: 19px !important;}#mlb2-8837902.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p, #mlb2-8837902.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p {font-size: 14px !important;}/* Custom CSS Mobile */@media (max-width: 549px){.mfp-container.mfp-s-ready.mfp-iframe-holder {padding: 10px;}div#cprygyorvnjyvrikgpbdg .widget-layout.widget-layout--right {display: none !important;}}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
    <style type="text/css" id="wp-custom-css">@media only screen and (min-width: 850px) { div#masthead ul.header-nav.header-nav-main > li.header-search-form.search-form.html.relative.has-icon { width: 47%; } div#top-bar .flex-col.hide-for-medium.flex-center { max-width: calc(100% - 540px); flex-basis: calc(100% - 540px); } div#top-bar ul.nav.nav-left .devvn_header_logo { position: absolute; z-index: 1; max-width: 136px; height: 100%; top: -34px; opacity: 0; width: 100%; } div#top-bar ul.nav.nav-left li.html.custom.html_topbar_left { position: unset; } div#top-bar .flex-col.hide-for-medium.flex-center ul.nav.nav-center > li.header-search-form { width: 95%; } } @media only screen and (max-width: 849px){ div#masthead ul.mobile-nav.nav>li.account-item.has-icon a i { color: #fab55a; font-size: 22px; } div#masthead ul.mobile-nav.nav.nav-right > li { margin-left: 10px; margin-right: 10px; } } .page-checkout .devvn_coupons { margin-bottom: 30px; } .page-checkout .devvn_coupons .devvn_item_coupon .devvn-inner { border-color: #fab55a; padding: 15px; } .page-checkout .devvn_item_coupon .desc { margin-bottom: 10px; font-size: 15px; } .page-checkout .devvn_item_coupon .title { margin-bottom: 5px; } .page-checkout .devvn_item_coupon .date { font-size: 13px; margin-bottom: 5px; } .page-checkout .devvn_item_coupon .desc { margin-bottom: 5px; } .page-checkout .devvn_item_coupon .actions .code, .page-checkout .devvn_item_coupon .actions .devvn_coupon_apply.devvn_coupon_btn { margin-top: 5px; min-height: 35px; } .page-checkout .devvn_item_coupon .actions .code { margin-right: 10px; line-height: 35px; font-size: 14px; } .page-checkout .devvn_item_coupon .actions .devvn_coupon_apply.devvn_coupon_btn { font-size: 14px; } ul.nav.top-bar-nav > li.header-wishlist-icon { margin-right: 8px; } ul.nav.top-bar-nav > li.header-wishlist-icon a> i { font-size: 18px; } ul.nav.top-bar-nav > li.cart-item.has-icon { margin-left: unset; margin-right: 8px; } ul.nav.top-bar-nav > li.cart-item.has-icon span.image-icon.header-cart-icon>img { height: 22px; width: auto; } ul.nav.top-bar-nav > li.cart-item.has-icon>a.header-cart-link.is-small { padding: unset; } ul.nav.top-bar-nav > li.cart-item.has-icon span.image-icon.header-cart-icon { width: auto; height: auto; } ul.nav.top-bar-nav > li.account-item { margin-left: unset; } ul.nav.top-bar-nav > li.account-item >a>i { color: #fab55a; font-size: 22px; position: relative; top: 2px; } div#top-bar { z-index: 12; }</style>
    <style id="ivp-variation-prices-css" type="text/css">.isures-combo--label_wrap { position: absolute; width: calc(100% - 16px); top: 8px; left: 8px; z-index: 9; display: inline-block; background-color: rgb(247 210 155 / 86%); padding: 5px; border-radius: 5px; font-size: 12px; font-weight: bold; color: #333; } .isures-combo--label_wrap .amount { color: #000; font-size: 14px } .isures-combo--label_wrap .label { display: inline-block; background-color: #ff9e00; padding: 2px 8px; border-radius: 5px; margin-right: 10px; color: #333; font-size: 12px; text-transform: capitalize; } .isures-combo--label_wrap .description { display: inline-block; font-size: 12px; color: #333; }</style>
    <style id="flatsome-swatches-css" type="text/css"></style>
    <style id="kirki-inline-styles">/* cyrillic-ext */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3GUBGEe.woff2) format('woff2'); unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F; } /* cyrillic */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3iUBGEe.woff2) format('woff2'); unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116; } /* greek-ext */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3CUBGEe.woff2) format('woff2'); unicode-range: U+1F00-1FFF; } /* greek */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3-UBGEe.woff2) format('woff2'); unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF; } /* math */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMawCUBGEe.woff2) format('woff2'); unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF; } /* symbols */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMaxKUBGEe.woff2) format('woff2'); unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF; } /* vietnamese */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3OUBGEe.woff2) format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB; } /* latin-ext */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3KUBGEe.woff2) format('woff2'); unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF; } /* latin */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3yUBA.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; } /* cyrillic-ext */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3GUBGEe.woff2) format('woff2'); unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F; } /* cyrillic */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3iUBGEe.woff2) format('woff2'); unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116; } /* greek-ext */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3CUBGEe.woff2) format('woff2'); unicode-range: U+1F00-1FFF; } /* greek */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3-UBGEe.woff2) format('woff2'); unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF; } /* math */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMawCUBGEe.woff2)
      format('woff2'); unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF; } /* symbols */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMaxKUBGEe.woff2) format('woff2'); unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF; } /* vietnamese */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3OUBGEe.woff2) format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB; } /* latin-ext */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3KUBGEe.woff2) format('woff2'); unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF; } /* latin */ @font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700; font-stretch: 100%; font-display: swap; src: url(https://thienmochuong.com/wp-content/fonts/roboto/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3yUBA.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }</style>
    <noscript>
      <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>
    <script src="data:text/javascript;base64,Ci8qISBsb2FkQ1NTIHJlbD1wcmVsb2FkIHBvbHlmaWxsLiBbY10yMDE3IEZpbGFtZW50IEdyb3VwLCBJbmMuIE1JVCBMaWNlbnNlICovCihmdW5jdGlvbih3KXsidXNlIHN0cmljdCI7aWYoIXcubG9hZENTUyl7dy5sb2FkQ1NTPWZ1bmN0aW9uKCl7fX0KdmFyIHJwPWxvYWRDU1MucmVscHJlbG9hZD17fTtycC5zdXBwb3J0PShmdW5jdGlvbigpe3ZhciByZXQ7dHJ5e3JldD13LmRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoImxpbmsiKS5yZWxMaXN0LnN1cHBvcnRzKCJwcmVsb2FkIil9Y2F0Y2goZSl7cmV0PSExfQpyZXR1cm4gZnVuY3Rpb24oKXtyZXR1cm4gcmV0fX0pKCk7cnAuYmluZE1lZGlhVG9nZ2xlPWZ1bmN0aW9uKGxpbmspe3ZhciBmaW5hbE1lZGlhPWxpbmsubWVkaWF8fCJhbGwiO2Z1bmN0aW9uIGVuYWJsZVN0eWxlc2hlZXQoKXtsaW5rLm1lZGlhPWZpbmFsTWVkaWF9CmlmKGxpbmsuYWRkRXZlbnRMaXN0ZW5lcil7bGluay5hZGRFdmVudExpc3RlbmVyKCJsb2FkIixlbmFibGVTdHlsZXNoZWV0KX1lbHNlIGlmKGxpbmsuYXR0YWNoRXZlbnQpe2xpbmsuYXR0YWNoRXZlbnQoIm9ubG9hZCIsZW5hYmxlU3R5bGVzaGVldCl9CnNldFRpbWVvdXQoZnVuY3Rpb24oKXtsaW5rLnJlbD0ic3R5bGVzaGVldCI7bGluay5tZWRpYT0ib25seSB4In0pO3NldFRpbWVvdXQoZW5hYmxlU3R5bGVzaGVldCwzMDAwKX07cnAucG9seT1mdW5jdGlvbigpe2lmKHJwLnN1cHBvcnQoKSl7cmV0dXJufQp2YXIgbGlua3M9dy5kb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgibGluayIpO2Zvcih2YXIgaT0wO2k8bGlua3MubGVuZ3RoO2krKyl7dmFyIGxpbms9bGlua3NbaV07aWYobGluay5yZWw9PT0icHJlbG9hZCImJmxpbmsuZ2V0QXR0cmlidXRlKCJhcyIpPT09InN0eWxlIiYmIWxpbmsuZ2V0QXR0cmlidXRlKCJkYXRhLWxvYWRjc3MiKSl7bGluay5zZXRBdHRyaWJ1dGUoImRhdGEtbG9hZGNzcyIsITApO3JwLmJpbmRNZWRpYVRvZ2dsZShsaW5rKX19fTtpZighcnAuc3VwcG9ydCgpKXtycC5wb2x5KCk7dmFyIHJ1bj13LnNldEludGVydmFsKHJwLnBvbHksNTAwKTtpZih3LmFkZEV2ZW50TGlzdGVuZXIpe3cuYWRkRXZlbnRMaXN0ZW5lcigibG9hZCIsZnVuY3Rpb24oKXtycC5wb2x5KCk7dy5jbGVhckludGVydmFsKHJ1bil9KX1lbHNlIGlmKHcuYXR0YWNoRXZlbnQpe3cuYXR0YWNoRXZlbnQoIm9ubG9hZCIsZnVuY3Rpb24oKXtycC5wb2x5KCk7dy5jbGVhckludGVydmFsKHJ1bil9KX19CmlmKHR5cGVvZiBleHBvcnRzIT09InVuZGVmaW5lZCIpe2V4cG9ydHMubG9hZENTUz1sb2FkQ1NTfQplbHNle3cubG9hZENTUz1sb2FkQ1NTfX0odHlwZW9mIGdsb2JhbCE9PSJ1bmRlZmluZWQiP2dsb2JhbDp0aGlzKSkK" data-rocket-status="executed">/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
      (function(w) {
        "use strict";
        if (!w.loadCSS) {
          w.loadCSS = function() {}
        }
        var rp = loadCSS.relpreload = {};
        rp.support = (function() {
          var ret;
          try {
            ret = w.document.createElement("link").relList.supports("preload")
          } catch(e) {
            ret = !1
          }
          return function() {
            return ret
          }
        })();
        rp.bindMediaToggle = function(link) {
          var finalMedia = link.media || "all";
          function enableStylesheet() {
            link.media = finalMedia
          }
          if (link.addEventListener) {
            link.addEventListener("load", enableStylesheet)
          } else if (link.attachEvent) {
            link.attachEvent("onload", enableStylesheet)
          }
          setTimeout(function() {
            link.rel = "stylesheet";
            link.media = "only x"
          });
          setTimeout(enableStylesheet, 3000)
        };
        rp.poly = function() {
          if (rp.support()) {
            return
          }
          var links = w.document.getElementsByTagName("link");
          for (var i = 0; i < links.length; i++) {
            var link = links[i];
            if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
              link.setAttribute("data-loadcss", !0);
              rp.bindMediaToggle(link)
            }
          }
        };
        if (!rp.support()) {
          rp.poly();
          var run = w.setInterval(rp.poly, 500);
          if (w.addEventListener) {
            w.addEventListener("load",
            function() {
              rp.poly();
              w.clearInterval(run)
            })
          } else if (w.attachEvent) {
            w.attachEvent("onload",
            function() {
              rp.poly();
              w.clearInterval(run)
            })
          }
        }
        if (typeof exports !== "undefined") {
          exports.loadCSS = loadCSS
        } else {
          w.loadCSS = loadCSS
        }
      } (typeof global !== "undefined" ? global: this))</script>
    <style id="wpr-lazyload-bg-container"></style>
    <style>em.woocommerce-review__verified{--wpr-bg-d4d83e8d-7aa7-403f-9421-384389763280: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/images/icon-confirm.png');}</style>
    <style>.form-flat form.searchform button.ux-search-submit.submit-button.secondary.button.icon.mb-0 i.icon-search{--wpr-bg-21fb3f50-094b-49a8-8692-bae6712b7e1b: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/search.svg');}</style>
    <style>.form-flat form.searchform button.ux-search-submit.submit-button.secondary.button.icon.mb-0 i.icon-search{--wpr-bg-2d5bc407-ccf1-4274-a53b-4614ffa6dcb0: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/search.svg');}</style>
    <style>.devvn_label_product span.sale{--wpr-bg-adcf62c5-fe94-4ec4-9b01-12df7476a9dd: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/sale.svg');}</style>
    <style id="wpr-lazyload-bg-exclusion"></style>
    <noscript>
      <style id="wpr-lazyload-bg-nostyle">em.woocommerce-review__verified{--wpr-bg-d4d83e8d-7aa7-403f-9421-384389763280: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/images/icon-confirm.png');}span.btn-attach{--wpr-bg-8eac23ec-4a19-4e30-98b0-db77e8401983: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/images/icon-image.png');}.devvn_cmt_search_box button{--wpr-bg-d9e697e2-4702-4ecb-8d74-ed63c4b3e745: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/images/icon-search.png');}a.cmtlike{--wpr-bg-86249da1-6d80-4d0c-91c5-837afc8c926a: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/images/cmt-like-icon.png');}.owl-carousel .owl-video-play-icon{--wpr-bg-728ca246-9f04-4eca-94f1-5dcad5e6ab73: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/owl/assets/owl.video.play.png');}.devvn_review_item_infor strong.woocommerce-review__author{--wpr-bg-8aea2888-e717-4fbc-8cc8-d7b3a7c104f1: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/images/speech-bubbles-comment-option.png');}.devvn_review_item_infor em.woocommerce-review__verified{--wpr-bg-8c383ce0-9704-45e2-9f25-667628c7ef83: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/images/icon-confirm.png');}.owl-carousel .owl-video-play-icon{--wpr-bg-d77e2687-74a5-4839-9b91-ee9b60d65204: url('https://thienmochuong.com/wp-content/plugins/isures-combo-offers/public/css/owl.video.play.png');}#isures-combo--wrap input.isures-checkbox:after{--wpr-bg-63c7d258-12dc-4d6f-baab-5c9470d74459: url('https://thienmochuong.com/wp-content/plugins/isures-combo-offers/public/images/tick.png');}.isures-title--fl:before{--wpr-bg-105f8ca5-bc9f-484f-a91b-9c2c46e1be83: url('https://thienmochuong.com/wp-content/plugins/isures-combo-offers/public/images/flash.gif');}.kk-star-ratings .kksr-stars .kksr-star .kksr-icon, .kk-star-ratings:not(.kksr-disabled) .kksr-stars .kksr-star:hover ~ .kksr-star .kksr-icon{--wpr-bg-731d217f-7a3a-4293-a98e-26bc021c9fc8: url('https://thienmochuong.com/wp-content/plugins/kk-star-ratings/src/core/public/svg/inactive.svg');}.kk-star-ratings .kksr-stars .kksr-stars-active .kksr-star .kksr-icon{--wpr-bg-50bda401-957c-4c08-ba0a-f83f1927e23c: url('https://thienmochuong.com/wp-content/plugins/kk-star-ratings/src/core/public/svg/active.svg');}.kk-star-ratings.kksr-disabled .kksr-stars .kksr-stars-active .kksr-star .kksr-icon, .kk-star-ratings:not(.kksr-disabled) .kksr-stars:hover .kksr-star .kksr-icon{--wpr-bg-2a0bec0f-19fd-4a3d-89b0-98acf7793ff3: url('https://thienmochuong.com/wp-content/plugins/kk-star-ratings/src/core/public/svg/selected.svg');}button.pswp__button{--wpr-bg-bcf4edd1-1022-4040-a3a6-d6e105635686: url('https://thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.png');}.pswp__button,.pswp__button--arrow--left:before,.pswp__button--arrow--right:before{--wpr-bg-4ce0db5f-1a4a-4716-bdd0-ab1fbb1e36d9: url('https://thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.png');}.pswp__preloader--active .pswp__preloader__icn{--wpr-bg-5e781907-c054-4f68-a87d-78111eb3f559: url('https://thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/preloader.gif');}.pswp--svg .pswp__button,.pswp--svg .pswp__button--arrow--left:before,.pswp--svg .pswp__button--arrow--right:before{--wpr-bg-93fc91f3-88ca-42e2-bdc8-f372ce1bd472: url('https://thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.svg');}.fancy-underline:after{--wpr-bg-931e8a7f-760d-4050-8f5b-0a4a2ec68e49: url('https://thienmochuong.com/wp-content/themes/flatsome/assets/img/underline.png');}.slider-style-shadow .flickity-slider>:before{--wpr-bg-5c7b3ede-04b5-41be-9231-53a0258f2af9: url('https://thienmochuong.com/wp-content/themes/flatsome/assets/img/shadow@2x.png');}.devvn_icon_location::before{--wpr-bg-3937e2cb-4941-48fd-ad0e-7fa4ec4c43c3: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/location.svg');}.devvn_icon_call::before{--wpr-bg-be64f931-6818-4f2a-b60c-74ee663a8eec: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/call.svg');}.devvn_icon_email::before{--wpr-bg-0150be77-3dc8-4e2c-a3eb-d4be7274c135: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/email.svg');}.devvn_icon_gp::before{--wpr-bg-2292f0a9-71fb-4f72-a39f-f0d6b3447ea1: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/gp.svg');}.devvn_icon_clock::before{--wpr-bg-12e72b1a-b2ee-4b8f-8075-65664fa7796a: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/clock.svg');}.social-icons.follow-icons a.icon.plain.youtube{--wpr-bg-af7cb39b-1180-4b21-ab34-b83760a66180: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/youtube.svg');}.social-icons.follow-icons a.icon.plain.instagram{--wpr-bg-4f53431d-a308-475f-9088-711390a19e53: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/instagram.svg');}.social-icons.follow-icons a.icon.plain.facebook{--wpr-bg-2bb438cc-491b-41b1-a26b-4d632f92e352: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/facebook.svg');}.social-icons.follow-icons a.icon.plain.lazada{--wpr-bg-73edb095-2ff3-4fc9-ba67-73de3ed4fb42: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/lazada.svg');}.devvn_label_product span.sale{--wpr-bg-adcf62c5-fe94-4ec4-9b01-12df7476a9dd: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/sale.svg');}.devvn_label_product span.new{--wpr-bg-5fd78a19-88dd-4725-bb6b-a4f5a5700071: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/new.svg');}footer#footer .footer-widgets.footer.footer-2:after{--wpr-bg-37e17439-efb2-491f-b1c7-e13d8a5d8b9e: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/bg_footer.png');}div#shop-sidebar span.widget-title.shop-sidebar:after{--wpr-bg-08823933-9e8d-49b0-82da-dcbedd6fe810: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/down.svg');}.devvn_product_cat_filtering .widget_layered_nav_filters ul li.chosen a:before{--wpr-bg-c49b7a89-0144-4c80-bf1c-d45574b9a10b: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/delete.svg');}.devvn_product_cat_filtering_result .widget_layered_nav_filters ul li a:hover:before{--wpr-bg-5e5b9eae-1a8d-427f-b593-98f31ace631e: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/delete_v.svg');}.devvn_box_customer_reviews .box .box-text{--wpr-bg-acc9a4a4-6f27-4d49-85f0-b5354d3b3d7e: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/bok.svg');}body.archive.tax-product_cat main#main{--wpr-bg-71a34df7-d3f7-4e87-aa61-381276af904e: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/bg_main.png');}.devvn_page_light footer#footer .footer-widgets.footer.footer-2:after{--wpr-bg-5f6d602d-34f0-4a03-8c52-c38b8d0c652c: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/bg_footer_light.png');}.devvn_page_dark
        .devvn_box_customer_reviews .box .box-text{--wpr-bg-1f625373-7a7a-435b-8b24-db92fbb6b00c: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/bok-light.svg');}.devvn_page_dark main#main{--wpr-bg-0bd6fe46-0cb2-482e-bdb1-5fbdfa75fe48: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/bg_main_light.png');}.devvn_flash_sale_product:after{--wpr-bg-d8b52c7b-0cd7-4dfa-912c-26ce371cdfbe: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/bg_flash_sale.png');}header.entry-header .badge.absolute .badge-inner, .col.post-item .badge.absolute .badge-inner{--wpr-bg-2ce30a18-a3fa-45c2-afe4-fc6737177361: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/bg_sale.svg');}.devvn-post-sidebar .widget:nth-child(1) span.widget-title:before, div#secondary .widget:nth-child(1) span.widget-title:before{--wpr-bg-d63058ac-efa1-4826-ab82-24f6fe9da67f: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/menu.svg');}.entry-author.author-box .devvn_image_author{--wpr-bg-3f577eb2-531c-4648-a172-7bd334baf25e: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/circle.svg');}.entry-author.author-box .devvn_image_author .blog-author-image{--wpr-bg-8e5da4f6-2c40-4c15-a7d9-9a0b87b2d517: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/not-image.png');}.entry-author.author-box p.author-desc.small:after{--wpr-bg-8172be6e-60a1-4cfa-920f-e0fcf50c97cf: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/right_kep.svg');}.entry-author.author-box p.author-desc.small:before{--wpr-bg-f202d706-99e1-493c-b197-62f649d36bff: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/kep_left.svg');}div#masthead ul.mobile-nav.nav.nav-right > li.header-search > a.is-small > .icon-search{--wpr-bg-d8b46512-deb3-43ba-9333-b00becb3ce02: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/search.svg');}div#masthead ul.mobile-nav.nav.nav-left li.nav-icon.has-icon a.is-small i.icon-menu{--wpr-bg-2dd4e56e-ae12-4ed9-8bbc-1a9afdd3f403: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/menu_moblie.svg');}.form-flat form.searchform button.ux-search-submit.submit-button.secondary.button.icon.mb-0 i.icon-search{--wpr-bg-2d5bc407-ccf1-4274-a53b-4614ffa6dcb0: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/search.svg');}span.btn-attach{--wpr-bg-b0e37fe8-3f51-419d-b656-3a75b677e156: url('https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/images/icon-image.png');}.pswp__button,.pswp__button--arrow--left:before,.pswp__button--arrow--right:before{--wpr-bg-6cdbe286-0cce-424c-a817-4c45c18d038f: url('https://thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.png');}button.pswp__button{--wpr-bg-52104739-88b4-41bb-a8cc-d1252fa48024: url('https://thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.png');}div#masthead ul.mobile-nav.nav.nav-left li.nav-icon.has-icon a.is-small i.icon-menu{--wpr-bg-8da816db-6b9f-4943-985f-c71693f7e108: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/menu_moblie.svg');}.form-flat form.searchform button.ux-search-submit.submit-button.secondary.button.icon.mb-0 i.icon-search{--wpr-bg-21fb3f50-094b-49a8-8692-bae6712b7e1b: url('https://thienmochuong.com/wp-content/themes/devvn-child/images/search.svg');}.shop-page-title.featured-title .title-bg{--wpr-bg-3a01936b-e604-4d2c-a66a-54aad445a6b4: url('https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg');}.footer-2{--wpr-bg-f6b9f55d-5a3f-45f7-9e38-d551decfe8a7: url('https://thienmochuong.com/wp-content/uploads/2022/05/bg_footer.png');}</style>
    </noscript>
    <script type="application/javascript">const rocket_pairs = [{
        "selector": "em.woocommerce-review__verified",
        "style": "em.woocommerce-review__verified{--wpr-bg-d4d83e8d-7aa7-403f-9421-384389763280: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-confirm.png');}",
        "hash": "d4d83e8d-7aa7-403f-9421-384389763280",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-confirm.png"
      },
      {
        "selector": "span.btn-attach",
        "style": "span.btn-attach{--wpr-bg-8eac23ec-4a19-4e30-98b0-db77e8401983: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-image.png');}",
        "hash": "8eac23ec-4a19-4e30-98b0-db77e8401983",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-image.png"
      },
      {
        "selector": ".devvn_cmt_search_box button",
        "style": ".devvn_cmt_search_box button{--wpr-bg-d9e697e2-4702-4ecb-8d74-ed63c4b3e745: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-search.png');}",
        "hash": "d9e697e2-4702-4ecb-8d74-ed63c4b3e745",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-search.png"
      },
      {
        "selector": "a.cmtlike",
        "style": "a.cmtlike{--wpr-bg-86249da1-6d80-4d0c-91c5-837afc8c926a: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/cmt-like-icon.png');}",
        "hash": "86249da1-6d80-4d0c-91c5-837afc8c926a",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/cmt-like-icon.png"
      },
      {
        "selector": ".owl-carousel .owl-video-play-icon",
        "style": ".owl-carousel .owl-video-play-icon{--wpr-bg-728ca246-9f04-4eca-94f1-5dcad5e6ab73: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/library\/owl\/assets\/owl.video.play.png');}",
        "hash": "728ca246-9f04-4eca-94f1-5dcad5e6ab73",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/library\/owl\/assets\/owl.video.play.png"
      },
      {
        "selector": ".devvn_review_item_infor strong.woocommerce-review__author",
        "style": ".devvn_review_item_infor strong.woocommerce-review__author{--wpr-bg-8aea2888-e717-4fbc-8cc8-d7b3a7c104f1: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/speech-bubbles-comment-option.png');}",
        "hash": "8aea2888-e717-4fbc-8cc8-d7b3a7c104f1",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/speech-bubbles-comment-option.png"
      },
      {
        "selector": ".devvn_review_item_infor em.woocommerce-review__verified",
        "style": ".devvn_review_item_infor em.woocommerce-review__verified{--wpr-bg-8c383ce0-9704-45e2-9f25-667628c7ef83: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-confirm.png');}",
        "hash": "8c383ce0-9704-45e2-9f25-667628c7ef83",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-confirm.png"
      },
      {
        "selector": ".owl-carousel .owl-video-play-icon",
        "style": ".owl-carousel .owl-video-play-icon{--wpr-bg-d77e2687-74a5-4839-9b91-ee9b60d65204: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/isures-combo-offers\/public\/css\/owl.video.play.png');}",
        "hash": "d77e2687-74a5-4839-9b91-ee9b60d65204",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/isures-combo-offers\/public\/css\/owl.video.play.png"
      },
      {
        "selector": "#isures-combo--wrap input.isures-checkbox",
        "style": "#isures-combo--wrap input.isures-checkbox:after{--wpr-bg-63c7d258-12dc-4d6f-baab-5c9470d74459: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/isures-combo-offers\/public\/images\/tick.png');}",
        "hash": "63c7d258-12dc-4d6f-baab-5c9470d74459",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/isures-combo-offers\/public\/images\/tick.png"
      },
      {
        "selector": ".isures-title--fl",
        "style": ".isures-title--fl:before{--wpr-bg-105f8ca5-bc9f-484f-a91b-9c2c46e1be83: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/isures-combo-offers\/public\/images\/flash.gif');}",
        "hash": "105f8ca5-bc9f-484f-a91b-9c2c46e1be83",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/isures-combo-offers\/public\/images\/flash.gif"
      },
      {
        "selector": ".kk-star-ratings .kksr-stars .kksr-star .kksr-icon, .kk-star-ratings:not(.kksr-disabled) .kksr-stars .kksr-star ~ .kksr-star .kksr-icon",
        "style": ".kk-star-ratings .kksr-stars .kksr-star .kksr-icon, .kk-star-ratings:not(.kksr-disabled) .kksr-stars .kksr-star:hover ~ .kksr-star .kksr-icon{--wpr-bg-731d217f-7a3a-4293-a98e-26bc021c9fc8: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/kk-star-ratings\/src\/core\/public\/svg\/inactive.svg');}",
        "hash": "731d217f-7a3a-4293-a98e-26bc021c9fc8",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/kk-star-ratings\/src\/core\/public\/svg\/inactive.svg"
      },
      {
        "selector": ".kk-star-ratings .kksr-stars .kksr-stars-active .kksr-star .kksr-icon",
        "style": ".kk-star-ratings .kksr-stars .kksr-stars-active .kksr-star .kksr-icon{--wpr-bg-50bda401-957c-4c08-ba0a-f83f1927e23c: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/kk-star-ratings\/src\/core\/public\/svg\/active.svg');}",
        "hash": "50bda401-957c-4c08-ba0a-f83f1927e23c",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/kk-star-ratings\/src\/core\/public\/svg\/active.svg"
      },
      {
        "selector": ".kk-star-ratings.kksr-disabled .kksr-stars .kksr-stars-active .kksr-star .kksr-icon, .kk-star-ratings:not(.kksr-disabled) .kksr-stars .kksr-star .kksr-icon",
        "style": ".kk-star-ratings.kksr-disabled .kksr-stars .kksr-stars-active .kksr-star .kksr-icon, .kk-star-ratings:not(.kksr-disabled) .kksr-stars:hover .kksr-star .kksr-icon{--wpr-bg-2a0bec0f-19fd-4a3d-89b0-98acf7793ff3: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/kk-star-ratings\/src\/core\/public\/svg\/selected.svg');}",
        "hash": "2a0bec0f-19fd-4a3d-89b0-98acf7793ff3",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/kk-star-ratings\/src\/core\/public\/svg\/selected.svg"
      },
      {
        "selector": "button.pswp__button",
        "style": "button.pswp__button{--wpr-bg-bcf4edd1-1022-4040-a3a6-d6e105635686: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.png');}",
        "hash": "bcf4edd1-1022-4040-a3a6-d6e105635686",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.png"
      },
      {
        "selector": ".pswp__button,.pswp__button--arrow--left,.pswp__button--arrow--right",
        "style": ".pswp__button,.pswp__button--arrow--left:before,.pswp__button--arrow--right:before{--wpr-bg-4ce0db5f-1a4a-4716-bdd0-ab1fbb1e36d9: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.png');}",
        "hash": "4ce0db5f-1a4a-4716-bdd0-ab1fbb1e36d9",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.png"
      },
      {
        "selector": ".pswp__preloader--active .pswp__preloader__icn",
        "style": ".pswp__preloader--active .pswp__preloader__icn{--wpr-bg-5e781907-c054-4f68-a87d-78111eb3f559: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/preloader.gif');}",
        "hash": "5e781907-c054-4f68-a87d-78111eb3f559",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/preloader.gif"
      },
      {
        "selector": ".pswp--svg .pswp__button,.pswp--svg .pswp__button--arrow--left,.pswp--svg .pswp__button--arrow--right",
        "style": ".pswp--svg .pswp__button,.pswp--svg .pswp__button--arrow--left:before,.pswp--svg .pswp__button--arrow--right:before{--wpr-bg-93fc91f3-88ca-42e2-bdc8-f372ce1bd472: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.svg');}",
        "hash": "93fc91f3-88ca-42e2-bdc8-f372ce1bd472",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.svg"
      },
      {
        "selector": ".fancy-underline",
        "style": ".fancy-underline:after{--wpr-bg-931e8a7f-760d-4050-8f5b-0a4a2ec68e49: url('https:\/\/thienmochuong.com\/wp-content\/themes\/flatsome\/assets\/img\/underline.png');}",
        "hash": "931e8a7f-760d-4050-8f5b-0a4a2ec68e49",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/flatsome\/assets\/img\/underline.png"
      },
      {
        "selector": ".slider-style-shadow .flickity-slider>*",
        "style": ".slider-style-shadow .flickity-slider>:before{--wpr-bg-5c7b3ede-04b5-41be-9231-53a0258f2af9: url('https:\/\/thienmochuong.com\/wp-content\/themes\/flatsome\/assets\/img\/shadow@2x.png');}",
        "hash": "5c7b3ede-04b5-41be-9231-53a0258f2af9",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/flatsome\/assets\/img\/shadow@2x.png"
      },
      {
        "selector": ".devvn_icon_location",
        "style": ".devvn_icon_location::before{--wpr-bg-3937e2cb-4941-48fd-ad0e-7fa4ec4c43c3: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/location.svg');}",
        "hash": "3937e2cb-4941-48fd-ad0e-7fa4ec4c43c3",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/location.svg"
      },
      {
        "selector": ".devvn_icon_call",
        "style": ".devvn_icon_call::before{--wpr-bg-be64f931-6818-4f2a-b60c-74ee663a8eec: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/call.svg');}",
        "hash": "be64f931-6818-4f2a-b60c-74ee663a8eec",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/call.svg"
      },
      {
        "selector": ".devvn_icon_email",
        "style": ".devvn_icon_email::before{--wpr-bg-0150be77-3dc8-4e2c-a3eb-d4be7274c135: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/email.svg');}",
        "hash": "0150be77-3dc8-4e2c-a3eb-d4be7274c135",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/email.svg"
      },
      {
        "selector": ".devvn_icon_gp",
        "style": ".devvn_icon_gp::before{--wpr-bg-2292f0a9-71fb-4f72-a39f-f0d6b3447ea1: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/gp.svg');}",
        "hash": "2292f0a9-71fb-4f72-a39f-f0d6b3447ea1",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/gp.svg"
      },
      {
        "selector": ".devvn_icon_clock",
        "style": ".devvn_icon_clock::before{--wpr-bg-12e72b1a-b2ee-4b8f-8075-65664fa7796a: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/clock.svg');}",
        "hash": "12e72b1a-b2ee-4b8f-8075-65664fa7796a",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/clock.svg"
      },
      {
        "selector": ".social-icons.follow-icons a.icon.plain.youtube",
        "style": ".social-icons.follow-icons a.icon.plain.youtube{--wpr-bg-af7cb39b-1180-4b21-ab34-b83760a66180: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/youtube.svg');}",
        "hash": "af7cb39b-1180-4b21-ab34-b83760a66180",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/youtube.svg"
      },
      {
        "selector": ".social-icons.follow-icons a.icon.plain.instagram",
        "style": ".social-icons.follow-icons a.icon.plain.instagram{--wpr-bg-4f53431d-a308-475f-9088-711390a19e53: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/instagram.svg');}",
        "hash": "4f53431d-a308-475f-9088-711390a19e53",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/instagram.svg"
      },
      {
        "selector": ".social-icons.follow-icons a.icon.plain.facebook",
        "style": ".social-icons.follow-icons a.icon.plain.facebook{--wpr-bg-2bb438cc-491b-41b1-a26b-4d632f92e352: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/facebook.svg');}",
        "hash": "2bb438cc-491b-41b1-a26b-4d632f92e352",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/facebook.svg"
      },
      {
        "selector": ".social-icons.follow-icons a.icon.plain.lazada",
        "style": ".social-icons.follow-icons a.icon.plain.lazada{--wpr-bg-73edb095-2ff3-4fc9-ba67-73de3ed4fb42: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/lazada.svg');}",
        "hash": "73edb095-2ff3-4fc9-ba67-73de3ed4fb42",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/lazada.svg"
      },
      {
        "selector": ".devvn_label_product span.sale",
        "style": ".devvn_label_product span.sale{--wpr-bg-adcf62c5-fe94-4ec4-9b01-12df7476a9dd: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/sale.svg');}",
        "hash": "adcf62c5-fe94-4ec4-9b01-12df7476a9dd",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/sale.svg"
      },
      {
        "selector": ".devvn_label_product span.new",
        "style": ".devvn_label_product span.new{--wpr-bg-5fd78a19-88dd-4725-bb6b-a4f5a5700071: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/new.svg');}",
        "hash": "5fd78a19-88dd-4725-bb6b-a4f5a5700071",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/new.svg"
      },
      {
        "selector": "footer#footer .footer-widgets.footer.footer-2",
        "style": "footer#footer .footer-widgets.footer.footer-2:after{--wpr-bg-37e17439-efb2-491f-b1c7-e13d8a5d8b9e: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_footer.png');}",
        "hash": "37e17439-efb2-491f-b1c7-e13d8a5d8b9e",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_footer.png"
      },
      {
        "selector": "div#shop-sidebar span.widget-title.shop-sidebar",
        "style": "div#shop-sidebar span.widget-title.shop-sidebar:after{--wpr-bg-08823933-9e8d-49b0-82da-dcbedd6fe810: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/down.svg');}",
        "hash": "08823933-9e8d-49b0-82da-dcbedd6fe810",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/down.svg"
      },
      {
        "selector": ".devvn_product_cat_filtering .widget_layered_nav_filters ul li.chosen a",
        "style": ".devvn_product_cat_filtering .widget_layered_nav_filters ul li.chosen a:before{--wpr-bg-c49b7a89-0144-4c80-bf1c-d45574b9a10b: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/delete.svg');}",
        "hash": "c49b7a89-0144-4c80-bf1c-d45574b9a10b",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/delete.svg"
      },
      {
        "selector": ".devvn_product_cat_filtering_result .widget_layered_nav_filters ul li a",
        "style": ".devvn_product_cat_filtering_result .widget_layered_nav_filters ul li a:hover:before{--wpr-bg-5e5b9eae-1a8d-427f-b593-98f31ace631e: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/delete_v.svg');}",
        "hash": "5e5b9eae-1a8d-427f-b593-98f31ace631e",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/delete_v.svg"
      },
      {
        "selector": ".devvn_box_customer_reviews .box .box-text",
        "style": ".devvn_box_customer_reviews .box .box-text{--wpr-bg-acc9a4a4-6f27-4d49-85f0-b5354d3b3d7e: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bok.svg');}",
        "hash": "acc9a4a4-6f27-4d49-85f0-b5354d3b3d7e",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bok.svg"
      },
      {
        "selector": "body.archive.tax-product_cat main#main",
        "style": "body.archive.tax-product_cat main#main{--wpr-bg-71a34df7-d3f7-4e87-aa61-381276af904e: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_main.png');}",
        "hash": "71a34df7-d3f7-4e87-aa61-381276af904e",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_main.png"
      },
      {
        "selector": ".devvn_page_light footer#footer .footer-widgets.footer.footer-2",
        "style": ".devvn_page_light footer#footer .footer-widgets.footer.footer-2:after{--wpr-bg-5f6d602d-34f0-4a03-8c52-c38b8d0c652c: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_footer_light.png');}",
        "hash": "5f6d602d-34f0-4a03-8c52-c38b8d0c652c",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_footer_light.png"
      },
      {
        "selector": ".devvn_page_dark .devvn_box_customer_reviews .box .box-text",
        "style": ".devvn_page_dark .devvn_box_customer_reviews .box .box-text{--wpr-bg-1f625373-7a7a-435b-8b24-db92fbb6b00c: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bok-light.svg');}",
        "hash": "1f625373-7a7a-435b-8b24-db92fbb6b00c",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bok-light.svg"
      },
      {
        "selector": ".devvn_page_dark main#main",
        "style": ".devvn_page_dark main#main{--wpr-bg-0bd6fe46-0cb2-482e-bdb1-5fbdfa75fe48: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_main_light.png');}",
        "hash": "0bd6fe46-0cb2-482e-bdb1-5fbdfa75fe48",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_main_light.png"
      },
      {
        "selector": ".devvn_flash_sale_product",
        "style": ".devvn_flash_sale_product:after{--wpr-bg-d8b52c7b-0cd7-4dfa-912c-26ce371cdfbe: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_flash_sale.png');}",
        "hash": "d8b52c7b-0cd7-4dfa-912c-26ce371cdfbe",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_flash_sale.png"
      },
      {
        "selector": "header.entry-header .badge.absolute .badge-inner,\n.col.post-item .badge.absolute .badge-inner",
        "style": "header.entry-header .badge.absolute .badge-inner,\n.col.post-item .badge.absolute .badge-inner{--wpr-bg-2ce30a18-a3fa-45c2-afe4-fc6737177361: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_sale.svg');}",
        "hash": "2ce30a18-a3fa-45c2-afe4-fc6737177361",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/bg_sale.svg"
      },
      {
        "selector": ".devvn-post-sidebar .widget:nth-child(1) span.widget-title,\ndiv#secondary .widget:nth-child(1) span.widget-title",
        "style": ".devvn-post-sidebar .widget:nth-child(1) span.widget-title:before,\ndiv#secondary .widget:nth-child(1) span.widget-title:before{--wpr-bg-d63058ac-efa1-4826-ab82-24f6fe9da67f: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/menu.svg');}",
        "hash": "d63058ac-efa1-4826-ab82-24f6fe9da67f",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/menu.svg"
      },
      {
        "selector": ".entry-author.author-box .devvn_image_author",
        "style": ".entry-author.author-box .devvn_image_author{--wpr-bg-3f577eb2-531c-4648-a172-7bd334baf25e: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/circle.svg');}",
        "hash": "3f577eb2-531c-4648-a172-7bd334baf25e",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/circle.svg"
      },
      {
        "selector": ".entry-author.author-box .devvn_image_author .blog-author-image",
        "style": ".entry-author.author-box .devvn_image_author .blog-author-image{--wpr-bg-8e5da4f6-2c40-4c15-a7d9-9a0b87b2d517: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/not-image.png');}",
        "hash": "8e5da4f6-2c40-4c15-a7d9-9a0b87b2d517",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/not-image.png"
      },
      {
        "selector": ".entry-author.author-box p.author-desc.small",
        "style": ".entry-author.author-box p.author-desc.small:after{--wpr-bg-8172be6e-60a1-4cfa-920f-e0fcf50c97cf: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/right_kep.svg');}",
        "hash": "8172be6e-60a1-4cfa-920f-e0fcf50c97cf",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/right_kep.svg"
      },
      {
        "selector": ".entry-author.author-box p.author-desc.small",
        "style": ".entry-author.author-box p.author-desc.small:before{--wpr-bg-f202d706-99e1-493c-b197-62f649d36bff: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/kep_left.svg');}",
        "hash": "f202d706-99e1-493c-b197-62f649d36bff",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/kep_left.svg"
      },
      {
        "selector": "div#masthead ul.mobile-nav.nav.nav-right > li.header-search > a.is-small > .icon-search",
        "style": "div#masthead ul.mobile-nav.nav.nav-right > li.header-search > a.is-small > .icon-search{--wpr-bg-d8b46512-deb3-43ba-9333-b00becb3ce02: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/search.svg');}",
        "hash": "d8b46512-deb3-43ba-9333-b00becb3ce02",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/search.svg"
      },
      {
        "selector": "div#masthead ul.mobile-nav.nav.nav-left li.nav-icon.has-icon a.is-small i.icon-menu",
        "style": "div#masthead ul.mobile-nav.nav.nav-left li.nav-icon.has-icon a.is-small i.icon-menu{--wpr-bg-2dd4e56e-ae12-4ed9-8bbc-1a9afdd3f403: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/menu_moblie.svg');}",
        "hash": "2dd4e56e-ae12-4ed9-8bbc-1a9afdd3f403",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/menu_moblie.svg"
      },
      {
        "selector": ".form-flat form.searchform button.ux-search-submit.submit-button.secondary.button.icon.mb-0 i.icon-search",
        "style": ".form-flat form.searchform button.ux-search-submit.submit-button.secondary.button.icon.mb-0 i.icon-search{--wpr-bg-2d5bc407-ccf1-4274-a53b-4614ffa6dcb0: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/search.svg');}",
        "hash": "2d5bc407-ccf1-4274-a53b-4614ffa6dcb0",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/search.svg"
      },
      {
        "selector": "span.btn-attach",
        "style": "span.btn-attach{--wpr-bg-b0e37fe8-3f51-419d-b656-3a75b677e156: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-image.png');}",
        "hash": "b0e37fe8-3f51-419d-b656-3a75b677e156",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/devvn-woocommerce-reviews\/images\/icon-image.png"
      },
      {
        "selector": ".pswp__button,.pswp__button--arrow--left,.pswp__button--arrow--right",
        "style": ".pswp__button,.pswp__button--arrow--left:before,.pswp__button--arrow--right:before{--wpr-bg-6cdbe286-0cce-424c-a817-4c45c18d038f: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.png');}",
        "hash": "6cdbe286-0cce-424c-a817-4c45c18d038f",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.png"
      },
      {
        "selector": "button.pswp__button",
        "style": "button.pswp__button{--wpr-bg-52104739-88b4-41bb-a8cc-d1252fa48024: url('https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.png');}",
        "hash": "52104739-88b4-41bb-a8cc-d1252fa48024",
        "url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/woocommerce\/assets\/css\/photoswipe\/default-skin\/default-skin.png"
      },
      {
        "selector": "div#masthead ul.mobile-nav.nav.nav-left li.nav-icon.has-icon a.is-small i.icon-menu",
        "style": "div#masthead ul.mobile-nav.nav.nav-left li.nav-icon.has-icon a.is-small i.icon-menu{--wpr-bg-8da816db-6b9f-4943-985f-c71693f7e108: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/menu_moblie.svg');}",
        "hash": "8da816db-6b9f-4943-985f-c71693f7e108",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/menu_moblie.svg"
      },
      {
        "selector": ".form-flat form.searchform button.ux-search-submit.submit-button.secondary.button.icon.mb-0 i.icon-search",
        "style": ".form-flat form.searchform button.ux-search-submit.submit-button.secondary.button.icon.mb-0 i.icon-search{--wpr-bg-21fb3f50-094b-49a8-8692-bae6712b7e1b: url('https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/search.svg');}",
        "hash": "21fb3f50-094b-49a8-8692-bae6712b7e1b",
        "url": "https:\/\/thienmochuong.com\/wp-content\/themes\/devvn-child\/images\/search.svg"
      },
      {
        "selector": ".shop-page-title.featured-title .title-bg",
        "style": ".shop-page-title.featured-title .title-bg{--wpr-bg-3a01936b-e604-4d2c-a66a-54aad445a6b4: url('https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg');}",
        "hash": "3a01936b-e604-4d2c-a66a-54aad445a6b4",
        "url": "https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg"
      },
      {
        "selector": ".footer-2",
        "style": ".footer-2{--wpr-bg-f6b9f55d-5a3f-45f7-9e38-d551decfe8a7: url('https:\/\/thienmochuong.com\/wp-content\/uploads\/2022\/05\/bg_footer.png');}",
        "hash": "f6b9f55d-5a3f-45f7-9e38-d551decfe8a7",
        "url": "https:\/\/thienmochuong.com\/wp-content\/uploads\/2022\/05\/bg_footer.png"
      }];
      const rocket_excluded_pairs = [];</script>
    <script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/954839937/?random=1740214417371&amp;cv=11&amp;fst=1740214417371&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be52k0v896838633z878283937za201zb885410610&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101732279~101732281~102067808~102482433~102539968~102558064~102587591~102605417~102640600~102658453&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fthienmochuong.com%2Fsan-pham%2Fvong-tay-tram-huong-108-hat&amp;ref=https%3A%2F%2Fthienmochuong.com%2Fvong-tay-tram-huong-nu&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=V%C3%B2ng%20Tr%E1%BA%A7m%20H%C6%B0%C6%A1ng%20108%20H%E1%BA%A1t%20%C4%90%C6%A1n%20-%20Tr%E1%BA%A7m%20T%E1%BB%91c%20Vi%E1%BB%87t%20Nam&amp;npa=0&amp;pscdl=noapi&amp;auid=778061298.1739528114&amp;uaa=x86&amp;uab=64&amp;uafvl=Not(A%253ABrand%3B99.0.0.0%7CGoogle%2520Chrome%3B133.0.6943.127%7CChromium%3B133.0.6943.127&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;rfmt=3&amp;fmt=4"></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=gAE/d=0/rs=AN8SPfoGXBOIjDP5u9X-Fj08BKzEvbDeLg/m=el_main_css">
    <link rel="stylesheet" type="text/css" media="all" href="https://assets.mailerlite.com/css/universal.css">
    <script src="https://assets.mailerlite.com/jsonp/454357/forms/ly1MVu?callback=ml.fn.renderEmbeddedForm" async="true"></script>
    <script src="https://assets.mailerlite.com/jsonp/454357/forms?callback=ml.fn.renderPopupsAndPromotions" async="true"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;display=swap" rel="stylesheet">
    <script>function ml_webform_success_9138854() {
        var $ = ml_jQuery || jQuery;
        $('.ml-subscribe-form-9138854 .row-success').show();
        $('.ml-subscribe-form-9138854 .row-form').hide();
      }</script>
    <script src="https://groot.mailerlite.com/js/w/webforms.min.js?v1f25ee4b05f240a833e02c19975434a4" type="text/javascript"></script>
    <script src="https://assets.mailerlite.com/jsonp/454357/forms/104148549317428577/takel?cache=1740214424270923047582055079" async="true"></script>
    <script type="text/javascript" src="https://assets.mlcdn.com/gr/js/w/ml_jQuery.inputmask.bundle.min.js?v3.3.1"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;display=swap" rel="stylesheet">
    <style type="text/css" id="subiz-style-for-cprygyorvnjyvrikgpbdg">#cprygyorvnjyvrikgpbdg * { all: unset !important; } .sbz_no_scroll { overflow: hidden !important; overflow-x: hidden !important; overflow-y: hidden !important; } #cprygyorvnjyvrikgpbdg { /* Handle on hover */ /* [data-tooltip]::after { text-align: center; min-width: 60px; max-width: 350px; transform: translate3d(0, 0, 0); -webkit-backface-visibility: hidden; backface-visibility: hidden; will-change: transform; opacity: 0; pointer-events: none; transition: opacity @tooltip-transition-duration @tooltip-transition-easing @tooltip-transition-delay; position: absolute; box-sizing: border-box; z-index: @z-index + 2000; transform-origin: top; white-space: pre-wrap; width: 100%; background: @black; border-radius: 5px; .color(@white); content: attr(data-tooltip); font-size: @tooltip-font-size; font-weight: @tooltip-font-weight; text-transform: @tooltip-text-transform; padding: 0.5em; box-sizing: content-box; } [data-tooltip]:hover::after, [data-tooltip]:focus::after { opacity: 1; pointer-events: auto; } // ------------------------------------------------ // [2] Position Modifiers // ------------------------------------------------ [data-tooltip][data-tooltip-position|='top']::after { margin-bottom: @tooltip-margin; transform: translate3d(-50%, -5px, 0); bottom: 100%; left: 50%; } // ------------------------------------------------ // [2.1] Top Left // ------------------------------------------------ [data-tooltip][data-tooltip-position='top-left']::after { transform: translate3d(~'calc(-100% + 16px)', -5px, 0); bottom: 100%; } // ------------------------------------------------ // [2.2] Top Right // ------------------------------------------------ [data-tooltip][data-tooltip-position='top-right']::after { transform: translate3d(~'calc(0% + -16px)', -5px, 0); bottom: 100%; } // ------------------------------------------------ // [2.3] Bottom // ------------------------------------------------ [data-tooltip][data-tooltip-position|='bottom']::after, [data-tooltip]:not([data-tooltip-position])::after { transform: translate3d(-50%, 0, 0); margin-top: @tooltip-margin; left: 50%; top: 100%; } // ------------------------------------------------ // [2.4] Bottom Left // ------------------------------------------------ [data-tooltip][data-tooltip-position='bottom-left']::after { transform: translate3d(~'calc(-100% + 16px)', 0, 0); } // ------------------------------------------------ // [2.5] Bottom Right // ------------------------------------------------ [data-tooltip][data-tooltip-position='bottom-right']::after { transform: translate3d(~'calc(0% + -16px)', 0, 0); } // ------------------------------------------------ // [2.6] Left // ------------------------------------------------ [data-tooltip][data-tooltip-position='left']::after { bottom: auto; left: auto; right: 100%; top: 50%; transform: translate3d(0, -50%, 0); margin-right: @tooltip-margin; } // ------------------------------------------------ // [2.7] Right // ------------------------------------------------ [data-tooltip][data-tooltip-position='right']::after { bottom: auto; left: 100%; top: 50%; transform: translate3d(0, -50%, 0); margin-left: @tooltip-margin; } */ } #cprygyorvnjyvrikgpbdg *, #cprygyorvnjyvrikgpbdg *::before, #cprygyorvnjyvrikgpbdg *::after { box-sizing: border-box !important; } #cprygyorvnjyvrikgpbdg [tabindex='-1']:focus:not(:focus-visible) { outline: 0 !important; } #cprygyorvnjyvrikgpbdg b, #cprygyorvnjyvrikgpbdg strong { font-weight: 500 !important; } #cprygyorvnjyvrikgpbdg a { color: #020202 !important; text-decoration: none !important; background-color: transparent !important; } #cprygyorvnjyvrikgpbdg a:hover { cursor: pointer !important; color: #000000 !important; text-decoration: underline !important; } #cprygyorvnjyvrikgpbdg a:not([href]) { color: inherit !important; text-decoration: none !important; } #cprygyorvnjyvrikgpbdg a:not([href]):hover { color: inherit !important; text-decoration: none !important; } #cprygyorvnjyvrikgpbdg img { vertical-align: middle !important; border-style: none !important; } #cprygyorvnjyvrikgpbdg svg { overflow: hidden !important; vertical-align: middle !important; } #cprygyorvnjyvrikgpbdg label { display: inline-block !important; } #cprygyorvnjyvrikgpbdg button { border-radius: 0 !important; } #cprygyorvnjyvrikgpbdg button:focus { outline: 1px dotted !important; outline: 5px auto -webkit-focus-ring-color !important; } #cprygyorvnjyvrikgpbdg input, #cprygyorvnjyvrikgpbdg button, #cprygyorvnjyvrikgpbdg select, #cprygyorvnjyvrikgpbdg optgroup, #cprygyorvnjyvrikgpbdg textarea { margin: 0 !important; } #cprygyorvnjyvrikgpbdg button, #cprygyorvnjyvrikgpbdg input { overflow: visible !important; } #cprygyorvnjyvrikgpbdg button, #cprygyorvnjyvrikgpbdg select { text-transform: none !important; } #cprygyorvnjyvrikgpbdg select { word-wrap: normal !important; } #cprygyorvnjyvrikgpbdg button, #cprygyorvnjyvrikgpbdg [type="button"], #cprygyorvnjyvrikgpbdg [type="reset"], #cprygyorvnjyvrikgpbdg [type="submit"] { -webkit-appearance: button !important; } #cprygyorvnjyvrikgpbdg button:not(:disabled), #cprygyorvnjyvrikgpbdg [type='button']:not(:disabled), #cprygyorvnjyvrikgpbdg [type='reset']:not(:disabled), #cprygyorvnjyvrikgpbdg [type='submit']:not(:disabled) { cursor: pointer !important; } #cprygyorvnjyvrikgpbdg button::-moz-focus-inner, #cprygyorvnjyvrikgpbdg [type='button']::-moz-focus-inner, #cprygyorvnjyvrikgpbdg [type='reset']::-moz-focus-inner, #cprygyorvnjyvrikgpbdg [type='submit']::-moz-focus-inner { padding: 0 !important; border-style: none !important; } #cprygyorvnjyvrikgpbdg input[type='radio'], #cprygyorvnjyvrikgpbdg input[type='checkbox'] { box-sizing: border-box !important; padding: 0 !important; } #cprygyorvnjyvrikgpbdg input[type='date'], #cprygyorvnjyvrikgpbdg input[type='time'], #cprygyorvnjyvrikgpbdg input[type='datetime-local'], #cprygyorvnjyvrikgpbdg input[type='month'] { -webkit-appearance: listbox !important; } #cprygyorvnjyvrikgpbdg textarea { overflow: auto !important; resize: vertical !important; } #cprygyorvnjyvrikgpbdg [type='number']::-webkit-inner-spin-button, #cprygyorvnjyvrikgpbdg [type='number']::-webkit-outer-spin-button { height: auto !important; } #cprygyorvnjyvrikgpbdg [hidden] { display: none !important; } #cprygyorvnjyvrikgpbdg ::-webkit-input-placeholder { /* Edge */ color: #777 !important; } #cprygyorvnjyvrikgpbdg :-ms-input-placeholder { /* Internet Explorer 10-11 */ color: #777 !important; } #cprygyorvnjyvrikgpbdg ::placeholder { color: #777 !important; } #cprygyorvnjyvrikgpbdg div { display: block !important; text-rendering: geometricPrecision !important; -webkit-font-smoothing: antialiased !important; -moz-osx-font-smoothing: grayscale !important; } #cprygyorvnjyvrikgpbdg ::-webkit-scrollbar { width: 7px !important; height: 7px !important; } #cprygyorvnjyvrikgpbdg ::-webkit-scrollbar-track { border-radius: 10px !important; } #cprygyorvnjyvrikgpbdg ::-webkit-scrollbar-thumb { border-radius: 10px !important; background: #d6d6d6 !important; }
      #cprygyorvnjyvrikgpbdg ::-webkit-scrollbar-thumb:hover { background: #aaa !important; } #cprygyorvnjyvrikgpbdg * { -webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important; -webkit-tap-highlight-color: transparent !important; font-family: Inter, -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji' !important; font-size: 15px !important; -webkit-box-sizing: border-box !important; -moz-box-sizing: border-box !important; box-sizing: border-box !important; margin: 0 !important; padding: 0 !important; border: 0 !important; vertical-align: baseline !important; } #cprygyorvnjyvrikgpbdg button:focus { outline: none !important; } #cprygyorvnjyvrikgpbdg img { overflow: hidden !important; flex-shrink: 0 !important; background-repeat: no-repeat !important; background-position: center !important; background-size: 100% 100% !important; -webkit-user-select: none !important; -khtml-user-select: none !important; -moz-user-select: none !important; -o-user-select: none !important; user-select: none !important; -webkit-user-drag: none !important; } #cprygyorvnjyvrikgpbdg .pos-relative { position: relative !important; } #cprygyorvnjyvrikgpbdg .flex-row { flex-direction: row !important; } #cprygyorvnjyvrikgpbdg .flex-column { flex-direction: column !important; } #cprygyorvnjyvrikgpbdg .flex-grow-1 { flex-grow: 1 !important; } #cprygyorvnjyvrikgpbdg .align-self-end { align-self: flex-end !important; } #cprygyorvnjyvrikgpbdg .align-items-end { align-items: flex-end !important; } #cprygyorvnjyvrikgpbdg .text-muted { color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; } #cprygyorvnjyvrikgpbdg .d-none { display: none !important; } #cprygyorvnjyvrikgpbdg .d-flex { display: flex !important; } #cprygyorvnjyvrikgpbdg .d-inline-block { display: inline-block !important; } #cprygyorvnjyvrikgpbdg .ml-1 { margin-left: 3.75px !important; } #cprygyorvnjyvrikgpbdg .pl-2 { padding-left: 7.5px !important; } #cprygyorvnjyvrikgpbdg .pr-2 { padding-right: 7.5px !important; } #cprygyorvnjyvrikgpbdg .pb-2 { padding-bottom: 7.5px !important; } #cprygyorvnjyvrikgpbdg .mt-1 { margin-top: 3.75px !important; } #cprygyorvnjyvrikgpbdg .mt-2 { margin-top: 7.5px !important; } #cprygyorvnjyvrikgpbdg .ml-2 { margin-left: 7.5px !important; } #cprygyorvnjyvrikgpbdg .mr-2 { margin-right: 7.5px !important; } #cprygyorvnjyvrikgpbdg .pt-3 { padding-top: 15px !important; } #cprygyorvnjyvrikgpbdg .pl-3 { padding-left: 15px !important; } #cprygyorvnjyvrikgpbdg .pr-3 { padding-right: 15px !important; } #cprygyorvnjyvrikgpbdg .pb-3 { padding-bottom: 15px !important; } #cprygyorvnjyvrikgpbdg .mt-3 { margin-top: 15px !important; } #cprygyorvnjyvrikgpbdg .ml-3 { margin-left: 15px !important; } #cprygyorvnjyvrikgpbdg .mr-3 { margin-right: 15px !important; } #cprygyorvnjyvrikgpbdg .mb-3 { margin-bottom: 15px !important; } #cprygyorvnjyvrikgpbdg .mb-2 { margin-bottom: 7.5px !important; } #cprygyorvnjyvrikgpbdg .muted { color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; } #cprygyorvnjyvrikgpbdg .i { font-style: italic !important; } #cprygyorvnjyvrikgpbdg .align-items-center { align-items: center !important; } #cprygyorvnjyvrikgpbdg .text-truncate { text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; } #cprygyorvnjyvrikgpbdg .flex_1 { flex: 1 !important; flex-shrink: 0 !important; } #cprygyorvnjyvrikgpbdg .justify-content-between { justify-content: space-between !important; } #cprygyorvnjyvrikgpbdg .no-shrink { flex-shrink: 0 !important; } #cprygyorvnjyvrikgpbdg .loading { flex: 1 !important; align-items: center !important; justify-content: center !important; display: flex !important; flex-direction: column !important; background: white !important; } #cprygyorvnjyvrikgpbdg .avatar-container { text-align: center !important; } #cprygyorvnjyvrikgpbdg .avatar { position: relative !important; object-fit: cover !important; display: inline-block !important; } #cprygyorvnjyvrikgpbdg .group-avatar--primary .avatar { width: 40px !important; height: 40px !important; border-radius: 35px !important; } #cprygyorvnjyvrikgpbdg .group-avatar--secondary .avatar { position: relative !important; width: 35px !important; height: 35px !important; border-radius: 35px !important; } #cprygyorvnjyvrikgpbdg .group-avatar--member { align-self: center !important; width: 65px !important; } #cprygyorvnjyvrikgpbdg .group-avatar--member .avatar { position: relative !important; width: 35px !important; height: 35px !important; border-radius: 35px !important; } #cprygyorvnjyvrikgpbdg .group-avatar--primary .group-avatar--agent-middle { width: 50px !important; height: 50px !important; margin-left: -10px !important; z-index: 3 !important; position: relative !important; } #cprygyorvnjyvrikgpbdg .group-avatar--primary .group-avatar--agent-left { z-index: 2 !important; } #cprygyorvnjyvrikgpbdg .group-avatar--primary .group-avatar--agent-right { z-index: 2 !important; margin-left: -10px !important; } #cprygyorvnjyvrikgpbdg .group-avatar--secondary .group-avatar--agent-left { z-index: 3 !important; } #cprygyorvnjyvrikgpbdg .group-avatar--secondary .group-avatar--agent-middle { z-index: 2 !important; margin-left: -15px !important; } #cprygyorvnjyvrikgpbdg .group-avatar--secondary .group-avatar--agent-right { z-index: 1 !important; margin-left: -15px !important; } #cprygyorvnjyvrikgpbdg .group-avatar--member .group-avatar--agent-left { border: 2px solid #fff !important; z-index: 3 !important; } #cprygyorvnjyvrikgpbdg .group-avatar--member .group-avatar--agent-middle { border: 2px solid #fff !important; z-index: 2 !important; margin-left: -20px !important; } #cprygyorvnjyvrikgpbdg .group-avatar--member .group-avatar--agent-right { border: 2px solid #fff !important; z-index: 1 !important; margin-left: -20px !important; } #cprygyorvnjyvrikgpbdg .widget-header { z-index: -1 !important; position: relative !important; border-radius: 15px 15px 0px 0px !important; background: rgb(245, 171, 61) !important; color: white !important; -webkit-text-fill-color: white !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .widget-header .widget-header--total-unread-convo { display: none !important; margin: 0 10px 10px 0 !important; background: #ef000d !important; font-weight: 400 !important; display: flex !important; border-radius: 5px !important; justify-content: center !important; width: 20px !important; height: 20px !important; cursor: pointer !important; position: relative !important; top: 5px !important; } #cprygyorvnjyvrikgpbdg .widget-header--collapsed { height: auto !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--collapsed { height: auto !important; padding: 15px !important; position: relative !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--collapsed .widget-header--title { white-space: nowrap !important; overflow: hidden !important; font-weight:
      500 !important; text-overflow: ellipsis !important; font-size: 16px !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--collapsed .widget-header--description { font-size: 15px !important; white-space: pre-wrap !important; opacity: 0.8 !important; flex: 1 !important; color: white !important; -webkit-text-fill-color: white !important; margin-top: 2.5px !important; position: relative !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-header { border-radius: 0px !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--expanded { height: 224px !important; padding: 15px !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--expanded .widget-header--top-wrapper { display: flex !important; flex-direction: row !important; align-items: center !important; margin-bottom: 10px !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--expanded .widget-header--avatar-wrapper { display: flex !important; flex-direction: column !important; align-items: center !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--expanded .widget-header--title { white-space: nowrap !important; overflow: hidden !important; font-weight: 500 !important; text-overflow: ellipsis !important; flex: 1 !important; font-size: 16px !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--expanded .widget-header--description { color: red !important; position: relative !important; text-align: center !important; margin-top: 15px !important; white-space: pre-wrap !important; display: -webkit-box !important; -webkit-box-orient: vertical !important; -webkit-line-clamp: 2 !important; overflow: hidden !important; } #cprygyorvnjyvrikgpbdg .widget-header--convo-expanded { height: 224px !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner { position: absolute !important; top: 0 !important; left: 0 !important; width: 100% !important; opacity: 1 !important; display: flex !important; } #cprygyorvnjyvrikgpbdg .widget-header--inner.widget-header--inner--hidden { opacity: 0 !important; transform: scale(0) !important; animation-duration: 0.05s !important; animation-name: hide !important; } #cprygyorvnjyvrikgpbdg .widget-header--title-container { min-width: 0 !important; flex: 1 !important; display: flex !important; flex-direction: column !important; margin-left: 10px !important; z-index: 1 !important; } #cprygyorvnjyvrikgpbdg .widget-header--button { padding: 3px !important; border-radius: 5px !important; position: relative !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .widget-header--button-close { display: flex !important; justify-self: flex-end !important; align-items: center !important; align-self: flex-start !important; } #cprygyorvnjyvrikgpbdg .widget-header--button-close-icon { background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgY2xhc3M9ImZlYXRoZXIgZmVhdGhlci14Ij48bGluZSB4MT0iMTgiIHkxPSI2IiB4Mj0iNiIgeTI9IjE4Ij48L2xpbmU+PGxpbmUgeDE9IjYiIHkxPSI2IiB4Mj0iMTgiIHkyPSIxOCI+PC9saW5lPjwvc3ZnPgo=') !important; background-size: contain !important; background-repeat: no-repeat !important; background-position: center !important; width: 24px !important; height: 24px !important; display: block !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .widget-header--button-back { background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgY2xhc3M9ImZlYXRoZXIgZmVhdGhlci1jaGV2cm9uLWxlZnQiPjxwb2x5bGluZSBwb2ludHM9IjE1IDE4IDkgMTIgMTUgNiI+PC9wb2x5bGluZT48L3N2Zz4K') !important; background-size: contain !important; background-repeat: no-repeat !important; background-position: center !important; background-size: 24px 24px !important; width: 40px !important; height: 30px !important; display: block !important; position: relative !important; margin-left: -9px !important; cursor: pointer !important; top: 2px !important; } #cprygyorvnjyvrikgpbdg .widget-header--has-convo-unred .widget-header--button-back { width: 20px !important; } #cprygyorvnjyvrikgpbdg .widget-header--wrap-button-back { display: flex !important; } #cprygyorvnjyvrikgpbdg .fade-enter-active, #cprygyorvnjyvrikgpbdg .fade-leave-active { transition: opacity 0.5s ease-out 0.2s !important; } #cprygyorvnjyvrikgpbdg .fade-enter, #cprygyorvnjyvrikgpbdg .fade-leave-to { opacity: 0 !important; } #cprygyorvnjyvrikgpbdg .slide-fade-enter-active { transition: all 0.3s ease !important; } #cprygyorvnjyvrikgpbdg .slide-fade-leave-active { transition: all 0.2s cubic-bezier(1, 0.5, 0.8, 1) !important; } #cprygyorvnjyvrikgpbdg .slide-fade-enter, #cprygyorvnjyvrikgpbdg .slide-fade-leave-to { transform: translateX(10px) !important; opacity: 0 !important; } #cprygyorvnjyvrikgpbdg .widget_header__body { padding-bottom: 70px !important; } #cprygyorvnjyvrikgpbdg .widget_header__body.widget_header__body__social { display: flex !important; } #cprygyorvnjyvrikgpbdg .social__account_logo { height: 90px !important; width: 90px !important; margin-right: 15px !important; border-radius: 15px !important; object-fit: cover !important; } #cprygyorvnjyvrikgpbdg .social__introduction { color: white !important; -webkit-text-fill-color: white !important; max-height: 72px !important; overflow: hidden !important; display: -webkit-box !important; -webkit-box-orient: vertical !important; -webkit-line-clamp: 3 !important; } #cprygyorvnjyvrikgpbdg .social__links { display: flex !important; flex-direction: row !important; } #cprygyorvnjyvrikgpbdg .social__links-logo { height: 30px !important; width: 30px !important; border-radius: 50% !important; margin-right: 10px !important; margin-top: 5px !important; background-size: contain !important; background-repeat: no-repeat !important; background-position: center !important; display: block !important; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2) !important; } #cprygyorvnjyvrikgpbdg .social__links-logo--facebook { background-image: url('data:image/svg+xml,%3C?xml%20version%3D%221.0%22%20?%3E%3Csvg%20width%3D%2230%22%20height%3D%2230%22%20viewBox%3D%220%200%2030%2030%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Ccircle%20cx%3D%2215%22%20cy%3D%2215%22%20r%3D%2215%22%20fill%3D%22%230264FF%22/%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M17.2944%2029.8252C16.5464%2029.9404%2015.7803%2030%2015%2030C14.0962%2030%2013.2109%2029.9199%2012.3511%2029.7666V18.4775H10V14.4287H12.3511V11.8086C12.3511%209.93457%2013.2744%207%2017.3384%207L21%207.01465V10.9453H18.3433C17.9075%2010.9453%2017.2947%2011.1553%2017.2947%2012.0488V14.4326H20.989L20.5571%2018.4775H17.2944V29.8252Z%22%20fill%3D%22white%22/%3E%3C/svg%3E')
      !important; } #cprygyorvnjyvrikgpbdg .social__links-logo--messenger { background-image: url('data:image/svg+xml,%3C?xml%20version%3D%221.0%22%20?%3E%3Csvg%20width%3D%2230%22%20height%3D%2230%22%20viewBox%3D%220%200%2030%2030%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Crect%20width%3D%2230%22%20height%3D%2230%22%20rx%3D%2215%22%20fill%3D%22%23007FFF%22/%3E%3Crect%20x%3D%224.28564%22%20y%3D%226%22%20width%3D%2221.4286%22%20height%3D%2218.8571%22%20fill%3D%22white%22/%3E%3Cpath%20d%3D%22M14.9478%2014.5713C14.8228%2014.5917%2014.6974%2014.6104%2014.5715%2014.6276C14.6974%2014.6104%2014.8228%2014.5917%2014.9478%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.7507%2014.5713C14.691%2014.5823%2014.6313%2014.5923%2014.5715%2014.6026C14.6313%2014.5923%2014.691%2014.5823%2014.7507%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M15.0126%2014.5713C14.8663%2014.5878%2014.7192%2014.6024%2014.5715%2014.6148C14.7192%2014.6024%2014.8663%2014.5878%2015.0126%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.783%2014.5713C14.7128%2014.5807%2014.642%2014.5894%2014.5715%2014.5976C14.642%2014.5894%2014.7128%2014.5807%2014.783%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.7299%2014.5713C14.6773%2014.5825%2014.6244%2014.5937%2014.5715%2014.6045C14.6244%2014.5937%2014.6773%2014.5825%2014.7299%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.6992%2014.5713C14.6567%2014.5834%2014.6141%2014.5949%2014.5715%2014.6068C14.6141%2014.5949%2014.6567%2014.5834%2014.6992%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.7107%2014.5713C14.6645%2014.5834%2014.618%2014.5958%2014.5715%2014.6075C14.618%2014.5958%2014.6645%2014.5836%2014.7107%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.7194%2014.5713C14.6704%2014.5827%2014.621%2014.5935%2014.5715%2014.6045C14.621%2014.5935%2014.6704%2014.5827%2014.7194%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.8087%2014.5713C14.7297%2014.5779%2014.6507%2014.5839%2014.5715%2014.5891C14.6507%2014.5839%2014.7297%2014.5779%2014.8087%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M15.0417%2014.5713C14.8856%2014.5814%2014.7288%2014.5894%2014.5715%2014.5946C14.7288%2014.5894%2014.8856%2014.5814%2015.0417%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.8206%2014.5713C14.7377%2014.574%2014.6546%2014.5761%2014.5715%2014.5775C14.6546%2014.5761%2014.7377%2014.574%2014.8206%2014.5713Z%22%20fill%3D%22black%22/%3E%3Cpath%20d%3D%22M14.1547%2012.3174L9.29419%2017.4636L13.7176%2015.0365L16.0288%2017.4636L20.8621%2012.3174L16.4877%2014.7019L14.1547%2012.3174Z%22%20fill%3D%22%23448AFF%22/%3E%3Cpath%20d%3D%22M15%200C6.717%200%200%206.717%200%2015C0%2023.283%206.717%2030%2015%2030C23.283%2030%2030%2023.283%2030%2015C30%206.717%2023.283%200%2015%200ZM15.1172%2023.0294C14.1886%2023.0294%2013.2923%2022.8983%2012.4491%2022.6554L9.42421%2024.375V21.14C7.39815%2019.5982%206.10428%2017.2501%206.10428%2014.6203C6.10428%209.97581%2010.1395%206.21094%2015.1172%206.21094C20.0951%206.21094%2024.1301%209.97581%2024.1301%2014.6203C24.1301%2019.2643%2020.0951%2023.0294%2015.1172%2023.0294V23.0294Z%22%20fill%3D%22%23007FFF%22/%3E%3C/svg%3E') !important; } #cprygyorvnjyvrikgpbdg .social__links-logo--email { background-image: url('data:image/svg+xml,%3C?xml%20version%3D%221.0%22%20?%3E%3Csvg%20width%3D%2230%22%20height%3D%2230%22%20viewBox%3D%220%200%2030%2030%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M22.6875%2012.9688C21.9375%2013.5625%2020.3125%2014.75%2017.875%2016.5L17.5625%2016.75C17.0625%2017.125%2016.6875%2017.4062%2016.375%2017.5625C15.875%2017.875%2015.4062%2018%2015%2018C14.5625%2018%2014.125%2017.875%2013.625%2017.5938C13.3125%2017.4375%2012.9375%2017.1562%2012.4375%2016.7812L12.125%2016.5C9.59375%2014.6875%208%2013.5%207.3125%2012.9688C7.25%2012.9375%207.15625%2012.9375%207.09375%2012.9688C7.03125%2013%207%2013.0625%207%2013.125V19.5C7%2019.9375%207.125%2020.2812%207.4375%2020.5625C7.71875%2020.875%208.0625%2021%208.5%2021H21.5C21.9062%2021%2022.25%2020.875%2022.5625%2020.5625C22.8438%2020.2812%2023%2019.9375%2023%2019.5V13.125C23%2013.0625%2022.9375%2013%2022.875%2012.9375C22.8125%2012.9062%2022.75%2012.9062%2022.6875%2012.9688ZM15%2017C14.7188%2017%2014.375%2016.875%2014%2016.625C13.75%2016.5%2013.4375%2016.2812%2013.0312%2015.9375L12.7188%2015.7188C10.1562%2013.8438%208.40625%2012.5625%207.5%2011.8438L7.28125%2011.6875C7.09375%2011.5625%207%2011.3438%207%2011.0938V10.5C7%2010.0938%207.125%209.75%207.4375%209.4375C7.71875%209.15625%208.0625%209%208.5%209H21.5C21.9062%209%2022.25%209.15625%2022.5625%209.4375C22.8438%209.75%2023%2010.0938%2023%2010.5V11.0938C23%2011.3438%2022.9062%2011.5625%2022.7188%2011.6875L22.5625%2011.8125C21.6562%2012.5312%2019.9062%2013.8438%2017.2812%2015.7188L16.9688%2015.9375C16.5312%2016.2812%2016.2188%2016.5%2016%2016.625C15.5938%2016.875%2015.25%2017%2015%2017Z%22%20fill%3D%22white%22/%3E%3C/svg%3E') !important; } #cprygyorvnjyvrikgpbdg .social__links-logo--zalo { background-image: url('data:image/svg+xml,%3C?xml%20version%3D%221.0%22%20?%3E%3Csvg%20width%3D%2230%22%20height%3D%2230%22%20viewBox%3D%220%200%2030%2030%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M29.9999%2014.9385C29.9669%206.68262%2023.2639%200%2015%200C6.7157%200%200%206.71582%200%2015C0%2023.2842%206.7157%2030%2015%2030C23.2639%2030%2029.9669%2023.3174%2029.9999%2015.0615C29.9999%2015.041%2030%2015.0205%2030%2015C30%2014.9795%2029.9999%2014.959%2029.9999%2014.9385Z%22%20fill%3D%22white%22/%3E%3Cpath%20d%3D%22M24.5612%2017.4695C22.9394%2017.4726%2021.6242%2016.1862%2021.6279%2014.6005C21.6316%2013.0345%2022.9474%2011.7445%2024.5473%2011.7383C26.1556%2011.732%2027.4826%2013.0349%2027.4786%2014.6162C27.4746%2016.1926%2026.1719%2017.4665%2024.5612%2017.4695ZM22.8416%2014.6183C22.8459%2015.5573%2023.6166%2016.3004%2024.5777%2016.2923C25.5165%2016.2845%2026.2699%2015.5301%2026.2673%2014.6005C26.2646%2013.6712%2025.51%2012.9317%2024.56%2012.9277C23.6012%2012.9237%2022.8373%2013.6751%2022.8416%2014.6183Z%22%20fill%3D%22%230068FE%22/%3E%3Cpath%20d%3D%22M19.5054%2010.0762H20.795V17.4217H19.9447C19.7021%2017.4217%2019.5054%2017.225%2019.5054%2016.9823V10.0762Z%22%20fill%3D%22%230068FE%22/%3E%3Cpath%20d%3D%22M18.5227%2011.8907H17.2881V12.2935C16.5767%2011.8601%2015.8509%2011.6775%2015.06%2011.831C14.2526%2011.9876%2013.6164%2012.4043%2013.167%2013.0917C12.4538%2014.1826%2012.5894%2015.5904%2013.4938%2016.5431C14.3504%2017.4454%2015.8628%2017.8178%2017.2815%2016.9247C17.2835%2016.934%2017.286%2016.9422%2017.2881%2016.9511V16.9826C17.2881%2017.2252%2017.4849%2017.422%2017.7275%2017.422H18.5227V11.8907V11.8907ZM15.5853%2016.2787C14.6636%2016.268%2013.8924%2015.5006%2013.8986%2014.6004C13.9048%2013.692%2014.6716%2012.9481%2015.602%2012.9479C16.5427%2012.9477%2017.2871%2013.6781%2017.2882%2014.6026C17.2893%2015.5333%2016.521%2016.2896%2015.5853%2016.2787Z%22%20fill%3D%22%230068FE%22/%3E%3Cpath%20d%3D%22M8.0481%2016.2438C9.39854%2014.5856%2010.6939%2012.9885%2011.9984%2011.3989C12.2464%2011.0968%2012.3662%2010.7671%2012.3731%2010.3807C12.3761%2010.2135%2012.3261%2010.1646%2012.1596%2010.165C11.6056%2010.1666%206.41195%2010.165%206.41195%2010.165V11.4709H10.4978C10.4424%2011.543%207.83556%2014.7218%206.57932%2016.2403C6.37112%2016.4919%206.26503%2016.7645%206.25401%2017.0936C6.24628%2017.3242%206.28864%2017.4139%206.52267%2017.4211V17.4217H11.9356C12.1782%2017.4217%2012.3749%2017.225%2012.3749%2016.9823V16.2487V16.2438H8.0481V16.2438Z%22%20fill%3D%22%230068FE%22/%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M4.948%2026.1338C6.03613%2027.1172%207.26917%2027.9424%208.61108%2028.5752V26.1338H4.948ZM0.00268555%2014.7119C0.0775146%2010.7393%201.69666%207.14453%204.28479%204.50293C4.0459%204.98242%203.83435%205.47949%203.64661%205.99121C2.58862%208.87598%202.31299%2011.8506%202.69116%2014.8916C2.95862%2017.042%203.55518%2019.0869%204.63391%2020.9775C4.8269%2021.3154%205.02271%2021.6582%205.26489%2021.9609C5.76672%2022.5879%205.80981%2023.2725%205.59888%2024.0049C5.4873%2024.3926%205.32227%2024.75%205.11304%2025.082C4.95691%2025.3291%204.77612%2025.5635%204.57434%2025.7842C1.81921%2023.1201%200.0819092%2019.4102%200.00280762%2015.2939C0.000976562%2015.1963%200%2015.0986%200%2015C0%2014.9033%200.000854492%2014.8076%200.00268555%2014.7119Z%22%20fill%3D%22%230068FE%22/%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M24.8226%2026.3367C22.191%2028.6189%2018.7568%2029.9998%2015%2029.9998C11.1449%2029.9998%207.62952%2028.5457%204.97241%2026.156C6.32458%2026.1921%207.61877%2025.9031%208.86353%2025.3464C8.97681%2025.2957%209.06262%2025.3113%209.16443%2025.364C12.2258%2026.9646%2015.5131%2027.5125%2018.926%2027.3962C20.9574%2027.3269%2022.9333%2027.0046%2024.8226%2026.3367Z%22%20fill%3D%22%23015BDF%22/%3E%3C/svg%3E')
      !important; } @keyframes hide { 100% { opacity: 0; transform: scale(0); } } #cprygyorvnjyvrikgpbdg .widget-header-expand-container { width: 100% !important; } #cprygyorvnjyvrikgpbdg .message-input { width: 100% !important; border-top: 1px solid #e3e3e3 !important; display: flex !important; flex-direction: row !important; padding: 15px !important; } #cprygyorvnjyvrikgpbdg .message-input--disabled { background: #F0F0F0 !important; } #cprygyorvnjyvrikgpbdg textarea[disabled=disabled]::-webkit-input-placeholder { color: #a4a4a4 !important; -webkit-text-fill-color: #a4a4a4 !important; } #cprygyorvnjyvrikgpbdg textarea[disabled=disabled]:-ms-input-placeholder { color: #a4a4a4 !important; -webkit-text-fill-color: #a4a4a4 !important; } #cprygyorvnjyvrikgpbdg textarea[disabled=disabled]::placeholder { color: #a4a4a4 !important; -webkit-text-fill-color: #a4a4a4 !important; } #cprygyorvnjyvrikgpbdg .message-input--input { word-wrap: break-word !important; resize: none !important; flex: 1 !important; align-self: center !important; margin-right: 7.5px !important; color: #000 !important; -webkit-text-fill-color: #000 !important; } #cprygyorvnjyvrikgpbdg .message-input--emoji-button { background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImdyYXkiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0iZmVhdGhlciBmZWF0aGVyLXNtaWxlIj48Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSIxMCI+PC9jaXJjbGU+PHBhdGggZD0iTTggMTRzMS41IDIgNCAyIDQtMiA0LTIiPjwvcGF0aD48bGluZSB4MT0iOSIgeTE9IjkiIHgyPSI5LjAxIiB5Mj0iOSI+PC9saW5lPjxsaW5lIHgxPSIxNSIgeTE9IjkiIHgyPSIxNS4wMSIgeTI9IjkiPjwvbGluZT48L3N2Zz4K") !important; } #cprygyorvnjyvrikgpbdg .message-input--button { background-size: 70% !important; background-repeat: no-repeat !important; background-position: center !important; width: 32px !important; height: 32px !important; display: block !important; cursor: pointer !important; position: relative !important; border-radius: 20px !important; transition: background-color 0.2s !important; } #cprygyorvnjyvrikgpbdg .message-input--button:hover { background-color: #eeeeee !important; } #cprygyorvnjyvrikgpbdg .message-input--disabled .message-input--button { cursor: default !important; } #cprygyorvnjyvrikgpbdg .message-input--disabled .message-input--button { cursor: default !important; } #cprygyorvnjyvrikgpbdg .message-input--attachment-button { background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImdyYXkiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0iZmVhdGhlciBmZWF0aGVyLXBhcGVyY2xpcCI+PHBhdGggZD0iTTIxLjQ0IDExLjA1bC05LjE5IDkuMTlhNiA2IDAgMCAxLTguNDktOC40OWw5LjE5LTkuMTlhNCA0IDAgMCAxIDUuNjYgNS42NmwtOS4yIDkuMTlhMiAyIDAgMCAxLTIuODMtMi44M2w4LjQ5LTguNDgiPjwvcGF0aD48L3N2Zz4K") !important; } #cprygyorvnjyvrikgpbdg .message-input--send-button { background-image: url('data:image/svg+xml,%3C?xml%20version%3D%221.0%22%20?%3E%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%2225%22%20height%3D%2225%22%20viewBox%3D%220%200%2024%2024%22%20stroke-width%3D%221.5%22%20stroke%3D%22rgb(245%2C%20171%2C%2061)%22%20fill%3D%22none%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20stroke%3D%22none%22%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3Cpath%20d%3D%22M4.698%204.034l16.302%207.966l-16.302%207.966a.503%20.503%200%200%201%20-.546%20-.124a.555%20.555%200%200%201%20-.12%20-.568l2.468%20-7.274l-2.468%20-7.274a.555%20.555%200%200%201%20.12%20-.568a.503%20.503%200%200%201%20.546%20-.124z%22%20fill%3D%22rgb(245%2C%20171%2C%2061)%22/%3E%3Cpath%20d%3D%22M6.5%2012h14.5%22%20/%3E%3C/svg%3E') !important; background-size: 82% !important; } #cprygyorvnjyvrikgpbdg .message-input--preform { justify-content: center !important; padding-top: 10px !important; padding-bottom: 10px !important; } #cprygyorvnjyvrikgpbdg .btn--preform { border-radius: 7px !important; padding-left: 32px !important; padding-right: 32px !important; height: 40px !important; color: #fff !important; -webkit-text-fill-color: #fff !important; font-size: 14px !important; line-height: 20px !important; text-align: center !important; background: rgb(245, 171, 61) !important; width: 60% !important; } #cprygyorvnjyvrikgpbdg .form-label { margin-top: 15px !important; } #cprygyorvnjyvrikgpbdg .form { border: 1px solid #eeeeee !important; box-sizing: border-box !important; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15) !important; border-radius: 7px !important; } #cprygyorvnjyvrikgpbdg textarea.form-control { resize: none !important; word-wrap: break-word !important; } #cprygyorvnjyvrikgpbdg .form-control--container { position: relative !important; } #cprygyorvnjyvrikgpbdg input.form-control[disabled] { background: #f9f9f9 !important; } #cprygyorvnjyvrikgpbdg .form-control--container .form-control--check { position: absolute !important; right: 10px !important; top: 10px !important; background-size: 100% 100% !important; background-repeat: no-repeat !important; background-position: center !important; width: 20px !important; height: 20px !important; background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM1QkFBMUQiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0iZmVhdGhlciBmZWF0aGVyLWNoZWNrIj48cG9seWxpbmUgcG9pbnRzPSIyMCA2IDkgMTcgNCAxMiI+PC9wb2x5bGluZT48L3N2Zz4K') !important; } #cprygyorvnjyvrikgpbdg .form-control--valid-input--error { color: #dc3545 !important; -webkit-text-fill-color: #dc3545 !important; } #cprygyorvnjyvrikgpbdg input[type='text'].form-control.input--error, #cprygyorvnjyvrikgpbdg input[type='number'].form-control.input--error, #cprygyorvnjyvrikgpbdg input[type='date'].form-control.input--error, #cprygyorvnjyvrikgpbdg textarea.form-control.input--error, #cprygyorvnjyvrikgpbdg select.form-control.input--error { border: 1px solid red !important; } #cprygyorvnjyvrikgpbdg input[type='text'].form-control, #cprygyorvnjyvrikgpbdg input[type='number'].form-control, #cprygyorvnjyvrikgpbdg input[type='date'].form-control, #cprygyorvnjyvrikgpbdg textarea.form-control, #cprygyorvnjyvrikgpbdg select.form-control { width: 100% !important; border: 1px solid #d8d8d8 !important; border-radius: 5px !important; padding: 8px !important; } #cprygyorvnjyvrikgpbdg input[type='text'].form-control:hover, #cprygyorvnjyvrikgpbdg input[type='number'].form-control:hover, #cprygyorvnjyvrikgpbdg input[type='date'].form-control:hover, #cprygyorvnjyvrikgpbdg textarea.form-control:hover, #cprygyorvnjyvrikgpbdg select.form-control:hover { border: 1px solid #888 !important; } #cprygyorvnjyvrikgpbdg select.form-control { padding: 1px 8px !important; } #cprygyorvnjyvrikgpbdg
      input[type='text'].form-control:focus, #cprygyorvnjyvrikgpbdg input[type='number'].form-control:focus, #cprygyorvnjyvrikgpbdg input[type='date'].form-control:focus, #cprygyorvnjyvrikgpbdg textarea.form-control:focus, #cprygyorvnjyvrikgpbdg select.form-control:focus { border: 1px solid rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .label { display: block !important; margin-bottom: 3px !important; margin-top: 10px !important; opacity: 0.7 !important; } #cprygyorvnjyvrikgpbdg .form--btn-submit { border-radius: 7px !important; padding-left: 32px !important; padding-right: 32px !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .form .radio { display: block !important; position: relative !important; width: 100% !important; height: 25px !important; } #cprygyorvnjyvrikgpbdg .form input[type='radio'] { position: absolute !important; visibility: hidden !important; } #cprygyorvnjyvrikgpbdg .form .radio--label { padding-left: 22px !important; display: block !important; position: relative !important; z-index: 9 !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .form .radio--check { display: block !important; position: absolute !important; border: 1px solid #aaa !important; border-radius: 100% !important; height: 16px !important; width: 16px !important; top: 0px !important; left: 0px !important; z-index: 5 !important; transition: border 0.15s linear !important; -webkit-transition: border 0.15s linear !important; } #cprygyorvnjyvrikgpbdg .form .radio--check:hover { border: 1px solid #888 !important; } #cprygyorvnjyvrikgpbdg .form .radio--check::before { display: block !important; position: absolute !important; content: '' !important; border-radius: 100% !important; height: 10px !important; width: 10px !important; top: 2px !important; left: 2px !important; margin: auto !important; transition: background 0.15s linear !important; -webkit-transition: background 0.15s linear !important; } #cprygyorvnjyvrikgpbdg .form input[type='radio']:checked ~ .radio--check { border: 1px solid rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .form input[type='radio']:checked ~ .radio--check::before { background: rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .form .checkbox { display: block !important; position: relative !important; width: 100% !important; height: 25px !important; } #cprygyorvnjyvrikgpbdg .form input[type='checkbox'] { position: absolute !important; visibility: hidden !important; } #cprygyorvnjyvrikgpbdg .form .checkbox--label { padding-left: 22px !important; display: block !important; position: relative !important; z-index: 9 !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .form .checkbox--check { display: block !important; position: absolute !important; border: 1px solid #aaa !important; border-radius: 4 px !important; height: 16px !important; width: 16px !important; top: 0px !important; left: 0px !important; z-index: 5 !important; transition: border 0.15s linear !important; -webkit-transition: border 0.15s linear !important; } #cprygyorvnjyvrikgpbdg .form .checkbox--check:hover { border: 1px solid #888 !important; } #cprygyorvnjyvrikgpbdg .form .checkbox--check::before { display: block !important; position: absolute !important; content: '' !important; height: 100% !important; width: 100% !important; margin: auto !important; transition: background 0.15s linear !important; -webkit-transition: background 0.15s linear !important; } #cprygyorvnjyvrikgpbdg .form input[type='checkbox']:checked ~ .checkbox--check { border: 1px solid rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .form input[type='checkbox']:checked ~ .checkbox--check::before { background: rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .form .select .form-control { padding-right: 20px !important; } #cprygyorvnjyvrikgpbdg .form select { /*background: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik00LjQxMDU4IDYuOTExMDdDNC43MzYwMiA2LjU4NTYzIDUuMjYzNjYgNi41ODU2MyA1LjU4OTA5IDYuOTExMDdMOS45OTk4NCAxMS4zMjE4TDE0LjQxMDYgNi45MTEwN0MxNC43MzYgNi41ODU2MyAxNS4yNjM3IDYuNTg1NjMgMTUuNTg5MSA2LjkxMTA3QzE1LjkxNDUgNy4yMzY1MSAxNS45MTQ1IDcuNzY0MTQgMTUuNTg5MSA4LjA4OTU4TDEwLjU4OTEgMTMuMDg5NkMxMC4yNjM3IDEzLjQxNSA5LjczNjAyIDEzLjQxNSA5LjQxMDU4IDEzLjA4OTZMNC40MTA1OCA4LjA4OTU4QzQuMDg1MTQgNy43NjQxNCA0LjA4NTE0IDcuMjM2NTEgNC40MTA1OCA2LjkxMTA3WiIgZmlsbD0iYmxhY2siLz4KPC9zdmc+") no-repeat right;*/ } #cprygyorvnjyvrikgpbdg .form-require-info--list { background: #fff !important; overflow-y: auto !important; overflow-x: hidden !important; } #cprygyorvnjyvrikgpbdg .form-require-info--title { font-size: 18px !important; line-height: 20px !important; color: #000 !important; -webkit-text-fill-color: #000 !important; background: #fff !important; border-bottom: 1px solid #f0f0f0 !important; } #cprygyorvnjyvrikgpbdg .form-require-info--item { border-bottom: 1px solid #f0f0f0 !important; } #cprygyorvnjyvrikgpbdg .form-require-info--item:hover { cursor: pointer !important; background: #e0e0e0 !important; } #cprygyorvnjyvrikgpbdg input[type='checkbox'] { background-color: initial !important; cursor: default !important; -webkit-appearance: checkbox !important; box-sizing: border-box !important; margin: 3px 3px 3px 4px !important; padding: initial !important; border: initial !important; } #cprygyorvnjyvrikgpbdg input[type='radio'] { background-color: initial !important; cursor: default !important; -webkit-appearance: radio !important; box-sizing: border-box !important; margin: 3px 3px 0px 5px !important; padding: initial !important; border: initial !important; } #cprygyorvnjyvrikgpbdg option { font-weight: normal !important; display: block !important; white-space: pre !important; min-height: 1.2em !important; padding: 0px 2px 1px !important; } #cprygyorvnjyvrikgpbdg select { -webkit-writing-mode: horizontal-tb !important; text-rendering: auto !important; color: -internal-light-dark-color(black, white) !important; letter-spacing: normal !important; word-spacing: normal !important; text-transform: none !important; text-indent: 0px !important; text-shadow: none !important; display: inline-block !important; text-align: start !important; -webkit-appearance: menulist !important; box-sizing: border-box !important; align-items: center !important; white-space: pre !important; -webkit-rtl-ordering: logical !important; background-color: -internal-light-dark-color(white, black) !important; cursor: default !important; margin: 0em !important; font: 400 13.3333px Arial !important; border-radius: 0px !important; border-width: 1px !important; border-style: solid !important; border-color: #a9a9a9 !important; border-image: initial !important; } #cprygyorvnjyvrikgpbdg select { position: relative !important; display: inline-block !important; border: 2px #cccc solid !important; border-radius: 5px !important; height: 36px !important; line-height:
      34px !important; padding: 0 12px !important; font-size: 14px !important; color: #000 !important; -webkit-text-fill-color: #000 !important; } #cprygyorvnjyvrikgpbdg .custom-select--wrap-selected { display: flex !important; position: relative !important; justify-content: space-between !important; cursor: pointer !important; border: 1px solid #d8d8d8 !important; border-radius: 5px !important; padding: 5px !important; } #cprygyorvnjyvrikgpbdg .custom-select--selected-items { display: flex !important; align-items: center !important; flex-wrap: wrap !important; } #cprygyorvnjyvrikgpbdg .custom-select--selected-item { display: flex !important; align-items: center !important; margin: 3px 3px !important; padding: 1px 6px !important; border-radius: 5px !important; border: 1px solid #d8d8d8 !important; font-size: 14px !important; color: #000 !important; -webkit-text-fill-color: #000 !important; vertical-align: top !important; } #cprygyorvnjyvrikgpbdg .icn-delete:before { display: flex !important; justify-items: center !important; font-size: 12px !important; margin-left: 5px !important; opacity: 0.5 !important; content: '\2715' !important; } #cprygyorvnjyvrikgpbdg .custom-select--wrap-options { display: flex !important; flex-direction: column !important; position: absolute !important; left: 0 !important; top: 100% !important; border: 1px solid #dadce0 !important; -webkit-box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1) !important; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1) !important; border-radius: 5px !important; width: 100% !important; background: #fff !important; z-index: 11 !important; max-height: 200px !important; overflow-y: auto !important; } #cprygyorvnjyvrikgpbdg .custom-select--input-search { font-size: 15px !important; padding: 8px !important; border-bottom: 1px solid #d8d8d8 !important; } #cprygyorvnjyvrikgpbdg .custom-select--items-options { margin: 0 !important; display: flex !important; flex-direction: column !important; } #cprygyorvnjyvrikgpbdg .custom-select--item-options { padding: 10px !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .custom-select--item-options:hover { background-color: rgb(245, 171, 61) !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .custom-select--icon-dropdown { margin-left: auto !important; float: right !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .custom-select--icon-dropdown path { d: path('M 7 9.5 L 12 14.5 L 17 9.5 H 7 Z') !important; fill: black !important; } #cprygyorvnjyvrikgpbdg .widget-body--events-container { overflow-x: hidden !important; overflow-y: auto !important; display: flex !important; flex-direction: column !important; flex: 1 !important; padding-left: 15px !important; padding-right: 15px !important; } #cprygyorvnjyvrikgpbdg .widget-body--events { flex: 1 !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-body--events { display: flex !important; flex-direction: column !important; justify-content: flex-end !important; padding-bottom: 15px !important; } #cprygyorvnjyvrikgpbdg .widget-body--events-container.widget-body--events-container__error { align-items: center !important; justify-content: center !important; } #cprygyorvnjyvrikgpbdg .convo-event-time { text-align: center !important; margin-top: 15px !important; } #cprygyorvnjyvrikgpbdg .convo-event-time span { color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; } #cprygyorvnjyvrikgpbdg .file-attachment { padding: 10px !important; border-radius: 10px !important; cursor: pointer !important; margin: 5px 0 0 0 !important; } #cprygyorvnjyvrikgpbdg .file-attachment--agent { background-color: rgb(245, 171, 61) !important; width: fit-content !important; } #cprygyorvnjyvrikgpbdg .file-attachment--user { background-color: #eeeeee !important; align-self: flex-end !important; } #cprygyorvnjyvrikgpbdg .file-attachment--link { display: flex !important; flex-direction: row !important; align-items: center !important; width: fit-content !important; } #cprygyorvnjyvrikgpbdg .file-attachment--agent .file-attachment--filename { color: white !important; -webkit-text-fill-color: white !important; text-decoration: underline !important; text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; max-width: 200px !important; } #cprygyorvnjyvrikgpbdg .file-attachment--user .file-attachment--filename { color: #000 !important; -webkit-text-fill-color: #000 !important; text-decoration: underline !important; text-overflow: ellipsis !important; overflow: hidden !important; white-space: nowrap !important; max-width: 200px !important; } #cprygyorvnjyvrikgpbdg .file-attachment--download { width: 24px !important; height: 24px !important; border-radius: 30px !important; display: inline-block !important; } #cprygyorvnjyvrikgpbdg .file-attachment--agent .file-attachment--download { background: white !important; background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiMwMjY1RkYiIHN0cm9rZS13aWR0aD0iMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0iZmVhdGhlciBmZWF0aGVyLWFycm93LWRvd24iPjxsaW5lIHgxPSIxMiIgeTE9IjUiIHgyPSIxMiIgeTI9IjE5Ij48L2xpbmU+PHBvbHlsaW5lIHBvaW50cz0iMTkgMTIgMTIgMTkgNSAxMiI+PC9wb2x5bGluZT48L3N2Zz4K') !important; background-size: 15px 15px !important; background-repeat: no-repeat !important; background-position: center !important; } #cprygyorvnjyvrikgpbdg .file-attachment--user .file-attachment--download { background: #c4c4c4 !important; background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjMiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgY2xhc3M9ImZlYXRoZXIgZmVhdGhlci1hcnJvdy1kb3duIj48bGluZSB4MT0iMTIiIHkxPSI1IiB4Mj0iMTIiIHkyPSIxOSI+PC9saW5lPjxwb2x5bGluZSBwb2ludHM9IjE5IDEyIDEyIDE5IDUgMTIiPjwvcG9seWxpbmU+PC9zdmc+Cg==') !important; background-size: 15px 15px !important; background-repeat: no-repeat !important; background-position: center !important; } #cprygyorvnjyvrikgpbdg .message-text--user { margin: 5px 0 0 !important; display: inline-block !important; background-color: #eeeeee !important; color: #000 !important; -webkit-text-fill-color: #000 !important; padding: 10px 14px 10px 14px !important; } #cprygyorvnjyvrikgpbdg .message-text--agent { white-space: pre-wrap !important; margin: 5px 0 0 !important; display: inline-block !important; background-color: rgb(245, 171, 61) !important; color: white !important; -webkit-text-fill-color: white !important; padding: 10px 14px 10px 14px !important; } #cprygyorvnjyvrikgpbdg .message-user__container { display: flex !important; flex-direction: row !important; align-items: flex-end !important; justify-content: flex-end !important; } #cprygyorvnjyvrikgpbdg .sending_dot.sending_dot__hide
      { opacity: 0 !important; background-color: #000 !important; } #cprygyorvnjyvrikgpbdg .sending_dot { width: 15px !important; height: 15px !important; margin-right: 5px !important; border-radius: 50% !important; background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM3NzciIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0iZmVhdGhlciBmZWF0aGVyLWNsb2NrIj48Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSIxMCI+PC9jaXJjbGU+PHBvbHlsaW5lIHBvaW50cz0iMTIgNiAxMiAxMiAxNiAxNCI+PC9wb2x5bGluZT48L3N2Zz4K') !important; background-size: contain !important; background-repeat: no-repeat !important; } #cprygyorvnjyvrikgpbdg .message-user { border-radius: 7px !important; max-width: 85% !important; align-self: flex-end !important; word-break: break-word !important; position: relative !important; white-space: pre-wrap !important; } #cprygyorvnjyvrikgpbdg .message-user.message-user-images-container { width: 85% !important; display: flex !important; justify-content: flex-end !important; } #cprygyorvnjyvrikgpbdg .message-user.message-user-audio { flex: 1 !important; } #cprygyorvnjyvrikgpbdg .message-agent { border-radius: 7px !important; max-width: 85% !important; word-break: break-word !important; position: relative !important; } #cprygyorvnjyvrikgpbdg a.message_error { color: #dc3545 !important; -webkit-text-fill-color: #dc3545 !important; display: block !important; text-align: end !important; font-size: 13px !important; margin-bottom: 10px !important; } #cprygyorvnjyvrikgpbdg a.message_error:hover { color: #dc3545 !important; -webkit-text-fill-color: #dc3545 !important; } #cprygyorvnjyvrikgpbdg .message_error__text { display: inline-block !important; vertical-align: text-top !important; } #cprygyorvnjyvrikgpbdg .message_error__icon { display: inline-block !important; vertical-align: bottom !important; background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSIjZGMzNTQ1IiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0iZmVhdGhlciBmZWF0aGVyLWFsZXJ0LWNpcmNsZSI+PGNpcmNsZSBjeD0iMTIiIGN5PSIxMiIgcj0iMTAiPjwvY2lyY2xlPjxsaW5lIHgxPSIxMiIgeTE9IjgiIHgyPSIxMiIgeTI9IjEyIj48L2xpbmU+PGxpbmUgeDE9IjEyIiB5MT0iMTYiIHgyPSIxMi4wMSIgeTI9IjE2Ij48L2xpbmU+PC9zdmc+Cgo=') !important; background-size: contain !important; background-repeat: no-repeat !important; background-position: center !important; width: 20px !important; height: 20px !important; } #cprygyorvnjyvrikgpbdg .image-attachment__img { width: 100% !important; margin: 5px 0 0 0 !important; border-radius: 7px !important; border: 1px solid #eeeeee !important; } #cprygyorvnjyvrikgpbdg .audio-attachment { width: 100% !important; margin: 5px 0 0 0 !important; height: 45px !important; display: inline !important; } #cprygyorvnjyvrikgpbdg .audio-attachment__audio { all: inherit !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .video-attachment { border-radius: 7px !important; width: 100% !important; margin: 5px 0 0 0 !important; } #cprygyorvnjyvrikgpbdg .video-attachment__video { all: inherit !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .info-message { text-align: center !important; color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; margin: 10px !important; } #cprygyorvnjyvrikgpbdg .message-sender { margin-top: 10px !important; } #cprygyorvnjyvrikgpbdg .message-sender-avatar { border-radius: 50% !important; width: 25px !important; height: 25px !important; margin-right: 10px !important; border: 1px solid #dee2e6 !important; } #cprygyorvnjyvrikgpbdg .message-sender-name { color: #495057 !important; -webkit-text-fill-color: #495057 !important; vertical-align: middle !important; } #cprygyorvnjyvrikgpbdg .message-system { text-align: center !important; margin: 10px !important; color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; } #cprygyorvnjyvrikgpbdg .form-attachment { display: flex !important; flex-direction: column !important; padding: 10px !important; -webkit-box-shadow: 0 0 10px #dee2e6 !important; box-shadow: 0 0 10px #dee2e6 !important; border-radius: 7px !important; margin-top: 10px !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field { display: flex !important; flex-direction: column !important; margin-bottom: 0px !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field__title { color: #4c4c4c !important; -webkit-text-fill-color: #4c4c4c !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field__text { width: 100% !important; border: 1px solid #dbdbdb !important; padding: 10px !important; margin: 3px 0px 0px 0px !important; border-radius: 7px !important; } #cprygyorvnjyvrikgpbdg .input--error { border: 1px solid red !important; } #cprygyorvnjyvrikgpbdg .input--success { background-color: #f9f9f9 !important; pointer-events: none !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field__error { color: brown !important; -webkit-text-fill-color: brown !important; float: right !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field__checkbox { width: 100% !important; all: inherit !important; -webkit-appearance: textfield !important; margin-right: 8px !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field__checkbox:hover { cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field__list-item { display: flex !important; align-items: center !important; margin: 4px !important; margin-left: 0px !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field__radio { width: 100% !important; all: inherit !important; -webkit-appearance: textfield !important; margin-right: 8px !important; } #cprygyorvnjyvrikgpbdg .form-attachment-field__datetime { width: 100% !important; border: 1px solid #dbdbdb !important; padding: 10px !important; margin: 3px 0px 0px 0px !important; border-radius: 7px !important; } #cprygyorvnjyvrikgpbdg .form-attachment--submit-btn { background-color: rgb(245, 171, 61) !important; color: white !important; -webkit-text-fill-color: white !important; width: 100% !important; margin-top: 10px !important; border-radius: 7px !important; padding: 10px !important; text-align: center !important; font-size: 15px !important; } #cprygyorvnjyvrikgpbdg .form-attachment--submit-btn:hover { color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .red { color: #dc3545 !important; -webkit-text-fill-color: #dc3545 !important; } #cprygyorvnjyvrikgpbdg .typing { background-color: #f4f5f7 !important; color: #7a7a7b !important; -webkit-text-fill-color: #7a7a7b !important; padding: 10px !important; opacity: 1 !important; transition: all 0.2s !important; position: absolute !important; bottom: 0px !important; left: 0px !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .typing--hidden { opacity: 0 !important;
      display: none !important; } #cprygyorvnjyvrikgpbdg .markdown-message img { max-width: 100% !important; margin-top: 10px !important; } #cprygyorvnjyvrikgpbdg .button-attachments { display: block !important; margin-top: 5px !important; } #cprygyorvnjyvrikgpbdg .url-button-attachment:first-child { border-top-left-radius: 7px !important; border-top-right-radius: 7px !important; } #cprygyorvnjyvrikgpbdg .url-button-attachment:last-child { border-bottom-left-radius: 7px !important; border-bottom-right-radius: 7px !important; border-bottom: 1px solid rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .agent-message .url-button-attachment { text-decoration: none !important; padding: 10px !important; display: block !important; text-align: center !important; color: rgb(245, 171, 61) !important; -webkit-text-fill-color: rgb(245, 171, 61) !important; background: #fff !important; border-top: 1px solid rgb(245, 171, 61) !important; border-left: 1px solid rgb(245, 171, 61) !important; border-right: 1px solid rgb(245, 171, 61) !important; font-weight: 400 !important; font-size: 16px !important; width: 85% !important; } #cprygyorvnjyvrikgpbdg .agent-message .url-button-attachment:hover { text-decoration: underline !important; } #cprygyorvnjyvrikgpbdg .message_quick_replies { display: flex !important; flex-wrap: wrap !important; } #cprygyorvnjyvrikgpbdg .message_quick_reply { cursor: pointer !important; position: relative !important; padding: 10px 15px !important; border: 1px solid rgb(245, 171, 61) !important; margin-right: 10px !important; margin-top: 10px !important; color: rgb(245, 171, 61) !important; -webkit-text-fill-color: rgb(245, 171, 61) !important; border-radius: 5px !important; user-select: none !important; overflow: hidden !important; white-space: nowrap !important; text-overflow: ellipsis !important; } #cprygyorvnjyvrikgpbdg .message_quick_reply:hover { background: rgb(245, 171, 61) !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .generic-attachment-container { position: relative !important; margin-top: 10px !important; } #cprygyorvnjyvrikgpbdg .generic-attachments { display: block !important; } #cprygyorvnjyvrikgpbdg .generic-attachment { display: flex !important; width: 100% !important; white-space: nowrap !important; overflow: hidden !important; user-select: none !important; cursor: grab !important; } #cprygyorvnjyvrikgpbdg .generic-attachment--element-content { flex: 1 !important; } #cprygyorvnjyvrikgpbdg .generic-attachment--element { border: 1px solid #d8d8d8 !important; background: white !important; border-radius: 7px !important; overflow: hidden !important; width: 220px !important; margin-right: 10px !important; vertical-align: top !important; display: flex !important; flex-direction: column !important; flex-shrink: 0 !important; } #cprygyorvnjyvrikgpbdg .generic-attachment--element:last-child { margin-right: 0 !important; } #cprygyorvnjyvrikgpbdg .generic-attachment--element .generic-attachment--element-img { width: 100% !important; height: 150px !important; object-fit: cover !important; } #cprygyorvnjyvrikgpbdg .generic-attachment--element .url-button-attachment:first-child { border-radius: 0 !important; } #cprygyorvnjyvrikgpbdg .generic-attachment--element .url-button-attachment { font-weight: 500 !important; padding: 10px !important; display: block !important; padding-top: 9px !important; padding-button: 9px !important; text-align: center !important; border: none !important; border-top: 1px solid #d8d8d8 !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .generic-attachment--element .generic-attachment--element-title { padding: 0px 13px !important; margin-top: 13px !important; color: #000 !important; -webkit-text-fill-color: #000 !important; font-weight: 500 !important; font-size: 16px !important; line-height: 20px !important; white-space: normal !important; } #cprygyorvnjyvrikgpbdg .generic-attachment--element .generic-attachment--element-subtitle { padding: 0px 13px !important; color: gray !important; -webkit-text-fill-color: gray !important; margin-top: 5px !important; } #cprygyorvnjyvrikgpbdg .widget_body__events__error_msg { margin-top: 50px !important; color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; text-align: center !important; } #cprygyorvnjyvrikgpbdg .widget_body__events__error_retry { margin-top: 10px !important; } #cprygyorvnjyvrikgpbdg .generic-attachment-navigator { position: absolute !important; top: 50% !important; transform: translateY(-50%) !important; cursor: pointer !important; width: 20px !important; font-size: 80px !important; display: flex !important; align-items: center !important; justify-content: center !important; color: rgba(255, 255, 255, 0.85) !important; -webkit-text-fill-color: rgba(255, 255, 255, 0.85) !important; text-shadow: 0 10px 25px rgba(0, 0, 0, 0.75) !important; z-index: 999 !important; user-select: none !important; } #cprygyorvnjyvrikgpbdg .generic-attachment-navigator:hover { text-shadow: 0 10px 20px rgba(0, 0, 0, 0.75) !important; color: #ffffff !important; -webkit-text-fill-color: #ffffff !important; } #cprygyorvnjyvrikgpbdg .generic-attachment-navigator.generic-attachment-navigator--disabled { display: none !important; } #cprygyorvnjyvrikgpbdg .generic-attachment-navigator.generic-attachment-navigator--left { left: 2px !important; } #cprygyorvnjyvrikgpbdg .generic-attachment-navigator.generic-attachment-navigator--right { right: 2px !important; } #cprygyorvnjyvrikgpbdg .generic-attachment-navigator-icon { font-size: 80px !important; } #cprygyorvnjyvrikgpbdg .order_attachment__product_img { width: 40px !important; height: 40px !important; margin-right: 10px !important; border-radius: 5px !important; flex-shrink: 0 !important; display: block !important; object-fit: contain !important; background: whitesmoke !important; } #cprygyorvnjyvrikgpbdg .order_attachment__product_name { text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; color: black !important; -webkit-text-fill-color: black !important; } #cprygyorvnjyvrikgpbdg .order_attachment__header { padding-bottom: 5px !important; border-bottom: 1px solid #ccc !important; margin-bottom: 5px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; } #cprygyorvnjyvrikgpbdg .order_attachment__product_desc { text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; color: #999 !important; -webkit-text-fill-color: #999 !important; font-size: 13px !important; } #cprygyorvnjyvrikgpbdg .order_attachment__product { display: flex !important; align-items: center !important; margin-top: 5px !important; margin-bottom: 5 !important; } #cprygyorvnjyvrikgpbdg .order_attachment__text_sm { font-size: 13px !important; } #cprygyorvnjyvrikgpbdg .order_attachment__text_muted { color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; } #cprygyorvnjyvrikgpbdg
      .order_attachment__text_truncate { text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; } #cprygyorvnjyvrikgpbdg .order_attachment { margin-top: 10px !important; color: black !important; -webkit-text-fill-color: black !important; border: 1px solid #aaa !important; background: white !important; border-radius: 8px !important; width: 220px !important; overflow-y: auto !important; overflow-x: hidden !important; padding: 10px !important; } #cprygyorvnjyvrikgpbdg .order_attachment__footer { margin-top: 10px !important; padding-top: 10px !important; border-top: 1px solid #ccc !important; } #cprygyorvnjyvrikgpbdg .order_attachment__total { font-size: 16px !important; } #cprygyorvnjyvrikgpbdg .order_attachment__label { font-size: 13px !important; color: #777 !important; -webkit-text-fill-color: #777 !important; margin-top: 10px !important; } #cprygyorvnjyvrikgpbdg .order_attachment__label.no_margin { margin-top: 0 !important; } #cprygyorvnjyvrikgpbdg .order_attachment.order_attachment__user { margin-right: 50px !important; align-self: flex-end !important; margin-right: 0 !important; margin-left: 50px !important; align-self: flex-start !important; } #cprygyorvnjyvrikgpbdg .product_attachment { margin-top: 10px !important; border: 1px solid #d8d8d8 !important; background: white !important; border-radius: 7px !important; overflow: hidden !important; width: 200px !important; display: inline-block !important; vertical-align: top !important; transition: all 0.1s !important; } #cprygyorvnjyvrikgpbdg .product_attachment.product_attachment__user { margin-right: 50px !important; align-self: flex-end !important; margin-right: 0 !important; margin-left: 50px !important; align-self: flex-start !important; } #cprygyorvnjyvrikgpbdg .product_attachment__img { width: 200px !important; height: 200px !important; border-bottom: 1px solid #d8d8d8 !important; object-fit: cover !important; display: block !important; } #cprygyorvnjyvrikgpbdg .product_attachment__price { padding-left: 10px !important; } #cprygyorvnjyvrikgpbdg .product_attachment__btns { margin-top: 5px !important; } #cprygyorvnjyvrikgpbdg .product_attachment__btn { border-top: 1px solid #d8d8d8 !important; display: flex !important; padding: 8px 10px !important; align-items: center !important; color: #000 !important; -webkit-text-fill-color: #000 !important; justify-content: center !important; cursor: pointer !important; text-transform: capitalize !important; } #cprygyorvnjyvrikgpbdg .product_attachment__btn:last-child { margin-right: 0 !important; } #cprygyorvnjyvrikgpbdg .product_attachment__btn:hover { color: rgb(245, 171, 61) !important; -webkit-text-fill-color: rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg a.product_attachment__title { display: block !important; padding: 8px 10px 0 10px !important; font-weight: 500 !important; color: #000 !important; -webkit-text-fill-color: #000 !important; word-break: break-word !important; margin-bottom: 5px !important; } #cprygyorvnjyvrikgpbdg .product_attachment__subtitle { white-space: pre-wrap !important; display: -webkit-box !important; -webkit-line-clamp: 3 !important; -webkit-box-orient: vertical !important; overflow: hidden !important; padding: 5px 10px !important; color: #aaa !important; -webkit-text-fill-color: #aaa !important; padding-top: 0 !important; padding-bottom: 0 !important; margin-bottom: 5px !important; } #cprygyorvnjyvrikgpbdg .product_attachment__btn_external_link { width: 16px !important; height: 16px !important; margin-left: 5px !important; margin-top: -2px !important; } #cprygyorvnjyvrikgpbdg .emoji { position: relative !important; width: 20px !important; height: 20px !important; background-size: 100% !important; background-repeat: no-repeat !important; border: none !important; display: inline-block !important; vertical-align: text-bottom !important; } #cprygyorvnjyvrikgpbdg .emoji--angry { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_60.784_7.843.98f2a99.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--confused { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_58.824_88.235.def4e71.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--crying, #cprygyorvnjyvrikgpbdg .emoji--cry { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_60.784_11.765.49c03d0.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--grinning { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_58.824_47.059.0f4d6e2.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--heart_eyes, #cprygyorvnjyvrikgpbdg .emoji--heart-eyes { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_58.824_72.549.edca5cf.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--neutral_face, #cprygyorvnjyvrikgpbdg .emoji--neutral { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_58.824_78.431.f910f2a.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--disappointed, #cprygyorvnjyvrikgpbdg .emoji--sad { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_60.784_3.922.bb191b0.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--sleepy { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_60.784_27.451.46b54e5.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--smile, #cprygyorvnjyvrikgpbdg .emoji--smiling { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_58.824_54.902.65724c1.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--open_mouth, #cprygyorvnjyvrikgpbdg .emoji--surprised { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_60.784_35.294.af7b927.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--tired_face, #cprygyorvnjyvrikgpbdg .emoji--tired { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_60.784_29.412.e36d284.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--stuck_out_tongue, #cprygyorvnjyvrikgpbdg .emoji--tongue-out { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_58.824_100.000.6df72bc.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--wink { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_58.824_64.706.9da3cba.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--moyai { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_58.824_45.098.3d7a7ad.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--dislike, #cprygyorvnjyvrikgpbdg .emoji--unlike, #cprygyorvnjyvrikgpbdg .emoji--thumbsdown { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_29.412_5.882.61f3359.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--like,
      #cprygyorvnjyvrikgpbdg .emoji--thumbsup { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_27.451_96.078.ddbb008.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--ok_hand { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_27.451_84.314.231e2b7.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--octopus { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_25.490_5.882.4b49e94.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--pig2 { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_25.490_0.000.1e6b2c0.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--wave { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_27.451_72.549.7114f58.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--mouse { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_25.490_45.098.3dfbc08.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--mouse2 { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_23.529_60.784.1420241.png) !important; } #cprygyorvnjyvrikgpbdg .emoji--rat { background-image: url(https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/emoji/messenger/sub_23.529_58.824.d5faf14.png) !important; } #cprygyorvnjyvrikgpbdg .emoji-picker { display: flex !important; flex-direction: row !important; z-index: 20 !important; position: absolute !important; max-width: 240px !important; background: #fff !important; color: #000 !important; -webkit-text-fill-color: #000 !important; border-radius: 10px !important; box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.15) !important; right: 15px !important; bottom: 55px !important; flex-wrap: wrap !important; padding: 10px !important; justify-content: space-between !important; align-items: center !important; } #cprygyorvnjyvrikgpbdg .emoji-picker--item { background-size: 100% !important; width: 30px !important; height: 30px !important; position: relative !important; background-repeat: no-repeat !important; display: inline-block !important; vertical-align: text-bottom !important; margin: 5px !important; cursor: pointer !important; transition: background-color 0.2s !important; } #cprygyorvnjyvrikgpbdg .emoji-picker-background-item { background-size: 50% !important; width: 40px !important; height: 40px !important; border-radius: 100% !important; } #cprygyorvnjyvrikgpbdg .emoji-picker-background-item:hover { background-color: #dee2e6 !important; } #cprygyorvnjyvrikgpbdg .convo-list { display: flex !important; flex-direction: column !important; flex: 1 !important; width: 100% !important; justify-content: space-between !important; overflow: auto !important; margin-top: -60px !important; padding-left: 15px !important; padding-right: 15px !important; } #cprygyorvnjyvrikgpbdg .convo-list--list { background: #fff !important; overflow-y: auto !important; overflow-x: hidden !important; } #cprygyorvnjyvrikgpbdg .convo-list--title { font-size: 18px !important; line-height: 20px !important; color: #000 !important; -webkit-text-fill-color: #000 !important; background: #fff !important; border-bottom: 1px solid #f0f0f0 !important; padding: 15px !important; } #cprygyorvnjyvrikgpbdg .convo-list--container { border-radius: 10px !important; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1) !important; overflow: auto !important; display: flex !important; flex-direction: column !important; user-select: none !important; } #cprygyorvnjyvrikgpbdg .convo-list--footer { display: flex !important; flex-direction: column !important; align-items: center !important; margin-top: 15px !important; } #cprygyorvnjyvrikgpbdg .convo-list--convo-last-info { font-size: 15px !important; line-height: 20px !important; overflow: hidden !important; white-space: nowrap !important; justify-content: center !important; display: flex !important; flex-direction: column !important; flex: 1 !important; margin-left: 7.5px !important; } #cprygyorvnjyvrikgpbdg .convo-list--convo-last-message { font-weight: normal !important; flex: 1 !important; cursor: pointer !important; display: flex !important; width: 100% !important; overflow: hidden !important; align-items: center !important; } #cprygyorvnjyvrikgpbdg .convo-list--convo-last-mes { text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; font-weight: normal !important; } #cprygyorvnjyvrikgpbdg .convo-list--convo-title { text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; font-weight: 500 !important; } #cprygyorvnjyvrikgpbdg .convo-list--convo-completed { width: 14px !important; } #cprygyorvnjyvrikgpbdg .convo-list--convo-name { text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; font-weight: 500 !important; flex: 1 !important; margin-right: 20px !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .convo-list--item { cursor: pointer !important; border-bottom: 1px solid #f0f0f0 !important; padding-left: 10px !important; padding-right: 10px !important; padding-bottom: 15px !important; padding-top: 15px !important; display: flex !important; flex-direction: row !important; } #cprygyorvnjyvrikgpbdg .convo-list--item:hover { background: #f8f9fa !important; } #cprygyorvnjyvrikgpbdg .convo-list--convo-time span { font-size: 13px !important; line-height: 20px !important; color: #000 !important; -webkit-text-fill-color: #000 !important; opacity: 0.7 !important; min-width: 70px !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .convo-list--item-unread { width: 8px !important; height: 8px !important; background: #dc3545 !important; border-radius: 50% !important; margin-left: 7.5px !important; align-self: center !important; } #cprygyorvnjyvrikgpbdg .convo-list--item-avatar { width: 32px !important; height: 32px !important; } #cprygyorvnjyvrikgpbdg .widget-body--empty { display: flex !important; flex: 1 !important; justify-content: center !important; align-items: center !important; flex-direction: column !important; } #cprygyorvnjyvrikgpbdg .widget-body--empty-text { color: #343a40 !important; -webkit-text-fill-color: #343a40 !important; margin-top: 20px !important; } #cprygyorvnjyvrikgpbdg .widget-body--empty-icon { width: 128px !important; height: 128px !important; -webkit-mask-image: url('data:image/svg+xml,%3C?xml%20version%3D%221.0%22%20?%3E%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cg%20data-name%3D%22Layer%202%22%3E%3Cpath%20d%3D%22M130.9%20366.9a9.9%209.9%200%200%200-2.9%207.1%2010.33%2010.33%200%200%200%202.9%207.1%209.73%209.73%200%200%200%207.1%202.9%2010.33%2010.33%200%200%200%207.1-2.9%209.73%209.73%200%200%200%202.9-7.1%2010.52%2010.52%200%200%200-2.9-7.1%209.9%209.9%200%200%200-7.1-2.9%2010.33%2010.33%200%200%200-7.1%202.9zM483.7%20282a183.07%20183.07%200%200%200%2028.3-98C512%2082.5%20429.5%200%20328%200a183.16%20183.16%200%200%200-96%2027%2010%2010%200%200%200%2010.5%2017.1A162.67%20162.67%200%200%201%20328%2020c90.4%200%20164%2073.6%20164%20164a162.73%20162.73%200%200%201-27.9%2091.5%2010.07%2010.07%200%200%200%20.3%2011.6l11%2040.9-44-11.8a10%2010%200%200%200-8.4%201.5%20164.32%20164.32%200%200%201-151.8%2020.2%20138.68%20138.68%200%200%200-97.1-97.1%20164.31%20164.31%200%200%201%2014.5-143.2%2010%2010%200%200%200-17-10.6%20184%20184%200%200%200-19.9%20149.6c-4.5-.4-9.1-.7-13.7-.7C61.9%20236%200%20297.9%200%20374a136.88%20136.88%200%200%200%2022.9%2076.1L12.2%20490a10%2010%200%200%200%2012.3%2012.3l40.9-11a137.71%20137.71%200%200%200%20146.5-.8%2010%2010%200%200%200-10.7-16.9%20118.09%20118.09%200%200%201-128.6-1.5%209.73%209.73%200%200%200-8.1-1.3L36%20478.5l7.4-27.7a10%2010%200%200%200-1.5-8.4%20117.95%20117.95%200%201%201%20207-28%2010%2010%200%200%200%2018.8%206.8%20137.72%20137.72%200%200%200%208.3-47.3%20124.44%20124.44%200%200%200-.7-13.7%20183.93%20183.93%200%200%200%20155.3-23.6l56.2%2015.1a10%2010%200%200%200%2012.3-12.3zm-246%20162.2a10.52%2010.52%200%200%200-7.1%202.9%209.73%209.73%200%200%200-2.9%207.1%2010.33%2010.33%200%200%200%202.9%207.1%209.73%209.73%200%200%200%207.1%202.9%2010.52%2010.52%200%200%200%207.1-2.9%209.73%209.73%200%200%200%202.9-7.1%209.9%209.9%200%200%200-10-10zM205.3%2070.7a10.52%2010.52%200%200%200%207.1-2.9%209.73%209.73%200%200%200%202.9-7.1%2010.14%2010.14%200%200%200-2.9-7.1%209.9%209.9%200%200%200-7.1-2.9%2010.52%2010.52%200%200%200-7.1%202.9%209.9%209.9%200%200%200-2.9%207.1%2010.52%2010.52%200%200%200%202.9%207.1%209.9%209.9%200%200%200%207.1%202.9zm-19.4%20296.2a9.9%209.9%200%200%200-2.9%207.1%2010.33%2010.33%200%200%200%202.9%207.1%209.73%209.73%200%200%200%207.1%202.9%2010.33%2010.33%200%200%200%207.1-2.9%209.73%209.73%200%200%200%202.9-7.1%2010.33%2010.33%200%200%200-2.9-7.1%209.9%209.9%200%200%200-7.1-2.9%2010.33%2010.33%200%200%200-7.1%202.9zm210.8-201.1a9.8%209.8%200%200%200%205.2-1.5l1.3-.8a9.92%209.92%200%200%200%203.3-13.7%2010.06%2010.06%200%200%200-13.8-3.3l-1.3.8a10%2010%200%200%200%205.3%2018.5zm-68.1%20107.4a58%2058%200%200%200%2057.9-57.9%207%207%200%200%200-7-7H277.7a7%207%200%200%200-7%207%2058%2058%200%200%200%2057.9%2057.9zm-43.5-50.9h87.1l-1%203.7a43.93%2043.93%200%200%201-85.2%200zm-25.8-56.5a9.8%209.8%200%200%200%205.2-1.5l1.3-.8a9.92%209.92%200%200%200%203.3-13.7%2010.06%2010.06%200%200%200-13.8-3.3l-1.3.8a10%2010%200%200%200%205.3%2018.5zM75.9%20366.9A9.9%209.9%200%200%200%2073%20374a10.33%2010.33%200%200%200%202.9%207.1A9.73%209.73%200%200%200%2083%20384a10.33%2010.33%200%200%200%207.1-2.9A9.73%209.73%200%200%200%2093%20374a10.33%2010.33%200%200%200-2.9-7.1A9.9%209.9%200%200%200%2083%20364a10.33%2010.33%200%200%200-7.1%202.9z%22%20fill%3D%22%234285f4%22%20data-name%3D%22Capa%201%22/%3E%3C/g%3E%3C/svg%3E')
      !important; border-radius: 0 !important; background-color: rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-container { border-radius: 0px !important; max-height: 100% !important; margin-bottom: 0 !important; top: 0 !important; left: 0 !important; right: 0 !important; width: 100% !important; height: 100% !important; opacity: 1 !important; transition: opacity 0.15s cubic-bezier(1, 0.5, 0.8, 1) !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-container.widget-container--left { left: 0 !important; right: 0 !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-container.widget-container--right { right: 0 !important; left: 0 !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-container.widget-container--hide { top: -100vh !important; opacity: 0 !important; transition: opacity 0.15s cubic-bezier(1, 0.5, 0.8, 1), bottom 0.15s cubic-bezier(1, 0.5, 0.8, 1) !important; } #cprygyorvnjyvrikgpbdg .widget-container.widget-container--left { left: 50px !important; right: unset !important; } #cprygyorvnjyvrikgpbdg .widget-container.widget-container--right { right: 50px !important; left: unset !important; } #cprygyorvnjyvrikgpbdg .widget-container { max-height: 100% !important; max-height: calc(100% - 40px) !important; max-width: 100% !important; background: #fff !important; z-index: 2000000003 !important; border-radius: 15px !important; box-shadow: 0 5px 25px 0 rgba(0, 0, 0, 0.13) !important; display: flex !important; flex-direction: column !important; align-items: center !important; position: fixed !important; margin-bottom: 50px !important; transition: opacity 0.15s cubic-bezier(1, 0.5, 0.8, 1) !important; width: 324px !important; height: 560px !important; bottom: 0 !important; opacity: 1 !important; transition: opacity 0.1s cubic-bezier(1, 0.5, 0.8, 1) !important; visibility: visible !important; } #cprygyorvnjyvrikgpbdg .widget-container.widget-container--full { max-height: 100% !important; height: 100% !important; margin-bottom: 0 !important; } #cprygyorvnjyvrikgpbdg .widget-container.widget-container--hide { opacity: 0 !important; visibility: hidden !important; transition: opacity 0.1s cubic-bezier(1, 0.5, 0.8, 1), visibility 0.1s cubic-bezier(1, 0.5, 0.8, 1) !important; } #cprygyorvnjyvrikgpbdg .btn--start-convo { border-radius: 7px !important; display: block !important; padding-left: 32px !important; padding-right: 32px !important; height: 40px !important; color: white !important; -webkit-text-fill-color: white !important; font-size: 16px !important; line-height: 20px !important; text-align: center !important; background: rgb(245, 171, 61) !important; max-width: 250px !important; width: 70% !important; text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important; } #cprygyorvnjyvrikgpbdg .btn--start-convo::after { display: none !important; } #cprygyorvnjyvrikgpbdg .btn--start-convo:disabled { opacity: 0.5 !important; cursor: default !important; pointer-events: none !important; } #cprygyorvnjyvrikgpbdg .widget-body.widget-body--none { display: none !important; } #cprygyorvnjyvrikgpbdg .widget-body { flex: 1 !important; flex-grow: 1 !important; z-index: -1 !important; width: 100% !important; overflow-y: auto !important; flex-direction: column !important; display: flex !important; position: relative !important; } #cprygyorvnjyvrikgpbdg .widget-body--content { overflow-y: auto !important; overflow-x: hidden !important; flex: 1 !important; display: flex !important; flex-direction: column !important; position: relative !important; min-height: 0 !important; } #cprygyorvnjyvrikgpbdg .poweredby { margin-top: 15px !important; margin-bottom: 7.5px !important; text-align: center !important; } #cprygyorvnjyvrikgpbdg .poweredby .poweredby--text { text-decoration: none !important; font-size: 13px !important; color: #7c7c7c !important; -webkit-text-fill-color: #7c7c7c !important; vertical-align: baseline !important; } #cprygyorvnjyvrikgpbdg .poweredby .poweredby--text .poweredby--subiz-logo { opacity: 0.7 !important; margin-top: -1px !important; height: 12px !important; } #cprygyorvnjyvrikgpbdg .poweredby .poweredby--text:hover { color: #333 !important; -webkit-text-fill-color: #333 !important; } #cprygyorvnjyvrikgpbdg .poweredby .poweredby--text:hover .poweredby--subiz-logo { opacity: 1 !important; } #cprygyorvnjyvrikgpbdg .empty-container { display: flex !important; justify-content: center !important; flex-direction: column !important; margin-top: 22.5px !important; margin-bottom: 22.5px !important; } #cprygyorvnjyvrikgpbdg .empty-desc { text-align: center !important; margin: 22.5px !important; color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; } #cprygyorvnjyvrikgpbdg .chat-button--white-bg { display: none !important; z-index: -1 !important; } #cprygyorvnjyvrikgpbdg .chat-button--white-bg--mask-only { background: white !important; width: 66px !important; height: 66px !important; top: 2px !important; left: 2px !important; position: absolute !important; border-radius: 50% !important; display: block !important; } #cprygyorvnjyvrikgpbdg .mobile .chat-button--default { width: 0.3px !important; height: 0.3px !important; background: rgb(245, 171, 61) !important; border-radius: 100% !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-layout { bottom: 20px !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-layout.widget-layout--left { left: 20px !important; right: unset !important; } #cprygyorvnjyvrikgpbdg .mobile .widget-layout.widget-layout--right { right: 20px !important; left: unset !important; } #cprygyorvnjyvrikgpbdg .mobile .chat-button--img { min-width: 0.3px !important; } #cprygyorvnjyvrikgpbdg .chat-button { cursor: pointer !important; position: relative !important; } #cprygyorvnjyvrikgpbdg .chat-button--img { opacity: 0 !important; min-width: 0.3px !important; display: block !important; } #cprygyorvnjyvrikgpbdg .chat-button.chat-button--left { float: left !important; } #cprygyorvnjyvrikgpbdg .chat-button.chat-button--right { float: right !important; } #cprygyorvnjyvrikgpbdg .widget-layout { z-index: 2000000002 !important; position: fixed !important; bottom: 50px !important; transition: opacity 150ms !important; opacity: 1 !important; } #cprygyorvnjyvrikgpbdg .widget-layout.widget-layout--hidden { opacity: 0 !important; pointer-events: none !important; } #cprygyorvnjyvrikgpbdg .widget-layout.widget-layout--left { left: 50px !important; right: unset !important; } #cprygyorvnjyvrikgpbdg .widget-layout.widget-layout--right { right: 50px !important; left: unset !important; } #cprygyorvnjyvrikgpbdg .chat-button--unread { position: absolute !important; right: 0px !important; top: -5px !important; background: #dc3545 !important; padding-left: 5px !important; padding-right: 5px !important; padding-top: 2px !important; padding-bottom: 2px !important; border-radius: 5px !important; color: #fff !important; -webkit-text-fill-color: #fff !important; box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.15) !important; } #cprygyorvnjyvrikgpbdg
      .widget-preview { z-index: 2000000003 !important; background: #fff !important; box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.15) !important; border-radius: 15px !important; max-width: 100% !important; width: 340px !important; margin-bottom: 20px !important; } #cprygyorvnjyvrikgpbdg .widget-preview.widget-preview--hidden { display: none !important; } #cprygyorvnjyvrikgpbdg .widget-preview--btn-close { cursor: pointer !important; opacity: 0.5 !important; align-self: flex-start !important; background-color: #e5e5e5 !important; background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiMzMzMiIHN0cm9rZS13aWR0aD0iMi4yIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXIteCI+PGxpbmUgeDE9IjE4IiB5MT0iNiIgeDI9IjYiIHkyPSIxOCI+PC9saW5lPjxsaW5lIHgxPSI2IiB5MT0iNiIgeDI9IjE4IiB5Mj0iMTgiPjwvbGluZT48L3N2Zz4K') !important; background-size: 16px 16px !important; background-repeat: no-repeat !important; background-position: center !important; width: 24px !important; height: 24px !important; display: block !important; border-radius: 100% !important; transition: background-color 0.2s !important; } #cprygyorvnjyvrikgpbdg .widget-preview--btn-close:hover { opacity: 1 !important; } #cprygyorvnjyvrikgpbdg .widget-preview--avatar { width: 45px !important; height: 45px !important; border: 1px solid rgba(31, 54, 90, 0.1) !important; border-radius: 100% !important; margin-right: 15px !important; } #cprygyorvnjyvrikgpbdg .widget-preview--body { display: flex !important; padding: 15px !important; } #cprygyorvnjyvrikgpbdg .widget-preview--title { display: block !important; font-size: 15px !important; color: black !important; -webkit-text-fill-color: black !important; margin-bottom: 5px !important; opacity: 0.7 !important; } #cprygyorvnjyvrikgpbdg .widget-preview--content { cursor: pointer !important; flex: 1 !important; overflow: hidden !important; } #cprygyorvnjyvrikgpbdg .widget-preview--message { white-space: pre-wrap !important; word-wrap: break-word !important; font-weight: 500 !important; font-size: 16px !important; display: block !important; margin: 0 !important; margin-bottom: 0px !important; max-height: 78px !important; overflow: hidden !important; } #cprygyorvnjyvrikgpbdg .widget-preview--action { border-top: 1px solid #f0f0f0 !important; cursor: pointer !important; padding: 13px !important; } #cprygyorvnjyvrikgpbdg .widget-preview--action-text { display: block !important; text-align: center !important; font-weight: 500 !important; font-size: 16px !important; color: rgb(245, 171, 61) !important; -webkit-text-fill-color: rgb(245, 171, 61) !important; margin: 0 !important; } #cprygyorvnjyvrikgpbdg .rating--overlay { position: absolute !important; height: 100% !important; width: 100% !important; background: black !important; opacity: 0.3 !important; top: 0 !important; left: 0 !important; border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px !important; z-index: 9 !important; } #cprygyorvnjyvrikgpbdg .rating { border-top-left-radius: 10px !important; border-top-right-radius: 10px !important; overflow: hidden !important; position: absolute !important; height: 400px !important; max-height: 80% !important; width: 100% !important; bottom: 0 !important; /* centering */ left: 0 !important; background: white !important; border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px !important; z-index: 10 !important; } #cprygyorvnjyvrikgpbdg .rating .rating--comment { color: #000 !important; -webkit-text-fill-color: #000 !important; resize: none !important; margin-left: 20px !important; margin-right: 20px !important; border: 2px solid lightgray !important; border-radius: 5px !important; padding: 10px !important; height: 60px !important; min-height: 60px !important; } #cprygyorvnjyvrikgpbdg .rating .rating--close-btn { right: 20px !important; top: -2px !important; width: 22px !important; height: 22px !important; position: absolute !important; background-image: url('data:image/svg+xml,%3C?xml%20version%3D%221.0%22%20?%3E%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%23acacac%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20class%3D%22feather%20feather-x%22%3E%3Cline%20x1%3D%2218%22%20y1%3D%226%22%20x2%3D%226%22%20y2%3D%2218%22%3E%3C/line%3E%3Cline%20x1%3D%226%22%20y1%3D%226%22%20x2%3D%2218%22%20y2%3D%2218%22%3E%3C/line%3E%3C/svg%3E') !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .rating .rating--close-btn:hover { background-image: url('data:image/svg+xml,%3C?xml%20version%3D%221.0%22%20?%3E%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%23a0a0a0%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20class%3D%22feather%20feather-x%22%3E%3Cline%20x1%3D%2218%22%20y1%3D%226%22%20x2%3D%226%22%20y2%3D%2218%22%3E%3C/line%3E%3Cline%20x1%3D%226%22%20y1%3D%226%22%20x2%3D%2218%22%20y2%3D%2218%22%3E%3C/line%3E%3C/svg%3E') !important; } #cprygyorvnjyvrikgpbdg .rating .rating--handle:hover .rating--thumb { background: #e0e0e0 !important; } #cprygyorvnjyvrikgpbdg .rating .rating--thumb { width: 70px !important; height: 6px !important; background: #eaeaea !important; border-radius: 5px !important; margin: 0 auto !important; cursor: grabbing !important; margin-top: 8px !important; margin-bottom: 20px !important; } #cprygyorvnjyvrikgpbdg .rating .rating--content { display: flex !important; flex: 1 !important; flex-grow: 1 !important; height: calc(100% - 40px) !important; flex-direction: column !important; justify-content: space-between !important; } #cprygyorvnjyvrikgpbdg .rating .rating--heading { margin: 0 !important; font-weight: 500 !important; font-size: 20px !important; line-height: 20px !important; text-align: center !important; flex-grow: 1 !important; position: relative !important; } #cprygyorvnjyvrikgpbdg .rating .rating--description { text-align: center !important; flex-grow: 1 !important; font-size: 15px !important; padding-left: 20px !important; padding-right: 20px !important; display: flex !important; align-items: center !important; margin-top: 10px !important; margin-bottom: 15px !important; } #cprygyorvnjyvrikgpbdg .rating .rating-faces-container { flex: 5 !important; display: flex !important; justify-content: space-around !important; align-items: center !important; margin: 10px 10px !important; } #cprygyorvnjyvrikgpbdg .rating .rating-face-container { padding: 15px !important; display: flex !important; flex-direction: column !important; align-items: center !important; cursor: pointer !important; border-radius: 10px !important; user-select: none !important; -webkit-transition: all 0.1s !important;
      transition: all 0.1s !important; } #cprygyorvnjyvrikgpbdg .rating .rating-face-container:hover { box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1) !important; } #cprygyorvnjyvrikgpbdg .rating .rating-face--text { margin-top: 10px !important; margin-bottom: 0px !important; font-size: 13px !important; color: #4d4d4d !important; -webkit-text-fill-color: #4d4d4d !important; } #cprygyorvnjyvrikgpbdg .rating .rating-no-thanks { flex: 10 !important; text-align: center !important; cursor: pointer !important; display: flex !important; justify-content: center !important; align-items: flex-end !important; color: #acacac !important; -webkit-text-fill-color: #acacac !important; } #cprygyorvnjyvrikgpbdg .rating .rating-no-thanks:hover { color: black !important; -webkit-text-fill-color: black !important; } #cprygyorvnjyvrikgpbdg .text__danger { color: #dc3545 !important; } #cprygyorvnjyvrikgpbdg .extension--close-btn { background: #00000088 !important; border-radius: 8px !important; color: #ffffffaa !important; -webkit-text-fill-color: #ffffffaa !important; right: 10px !important; top: -35px !important; font-size: 14px !important; position: absolute !important; padding: 5px 15px !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .extension--close-btn:hover { background: #000000 !important; color: #ffffff !important; -webkit-text-fill-color: #ffffff !important; } #cprygyorvnjyvrikgpbdg .extension--handle { margin-bottom: 10px !important; } #cprygyorvnjyvrikgpbdg .extension--handle:hover .extension--thumb { background: #e0e0e0 !important; } #cprygyorvnjyvrikgpbdg .extension--thumb { width: 70px !important; cursor: grabbing !important; margin: 0 auto !important; height: 6px !important; background: #eaeaea !important; border-radius: 5px !important; flex: 1 !important; margin-top: 5px !important; } #cprygyorvnjyvrikgpbdg .extension { border-top-left-radius: 10px !important; position: absolute !important; border-top-right-radius: 10px !important; width: 100% !important; bottom: 0 !important; /* centering */ left: 0 !important; border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px !important; display: flex !important; flex-direction: column !important; background: white !important; z-index: 10 !important; } #cprygyorvnjyvrikgpbdg .extension--overlay { position: absolute !important; height: 100% !important; width: 100% !important; background: black !important; opacity: 0.3 !important; top: 0 !important; left: 0 !important; border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px !important; z-index: 9 !important; } #cprygyorvnjyvrikgpbdg .order__footer { margin-top: 40px !important; color: #888 !important; -webkit-text-fill-color: #888 !important; display: flex !important; align-items: center !important; justify-content: center !important; margin-bottom: 20px !important; } #cprygyorvnjyvrikgpbdg .order__footer_delimiter { width: 1px !important; height: 15px !important; border-right: 1px solid #bbb !important; } #cprygyorvnjyvrikgpbdg .order__footer_link { padding: 0 10px !important; font-size: 14px !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .order__footer_link:hover { text-decoration: none !important; color: #555 !important; -webkit-text-fill-color: #555 !important; } #cprygyorvnjyvrikgpbdg .desktop.order { border-radius: 0 !important; width: 780px !important; margin: 0 auto !important; height: 100% !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_section__line { display: none !important; } #cprygyorvnjyvrikgpbdg .desktop.order .desktop_order__heading { line-height: 20px !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_attachment__product_img { width: 50px !important; height: 50px !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_label { font-weight: 500 !important; margin-top: 30px !important; margin-bottom: 10px !important; font-size: 16px !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_label:first-child { margin-top: 0 !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_recap { margin-top: 0px !important; background: #f4f4f4 !important; margin-top: 20px !important; width: 250px !important; box-shadow: 0 0 0 1px hsla(0, 0%, 69%, 0.2), 0 15px 35px 0 rgba(49, 49, 93, 0.08), 0 5px 15px 0 rgba(0, 0, 0, 0.06) !important; border-radius: 6px !important; background-color: #fff !important; padding: 32px 32px 20px !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_acc_header { display: flex !important; align-items: center !important; margin-top: 20px !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_acc_logo { height: 50px !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_acc_name { font-size: 16px !important; margin-left: 10px !important; border-left: 1px solid #aaa !important; padding-left: 10px !important; } #cprygyorvnjyvrikgpbdg .desktop.order .order_summary_line { align-items: center !important; overflow: hidden !important; padding: 5px 0 !important; display: flex !important; justify-content: space-between !important; } #cprygyorvnjyvrikgpbdg .desktop_order__content { display: flex !important; } #cprygyorvnjyvrikgpbdg .order { width: 100% !important; display: flex !important; flex-direction: column !important; background: white !important; z-index: 10 !important; } #cprygyorvnjyvrikgpbdg .order .ship_card { display: flex !important; align-items: center !important; overflow: hidden !important; width: 190px !important; cursor: pointer !important; padding: 10px 15px !important; box-shadow: none !important; border: 2px solid #eee !important; color: #777 !important; -webkit-text-fill-color: #777 !important; margin-top: 5px !important; border-radius: 8px !important; background: white !important; transition: all 150ms ease-out !important; } #cprygyorvnjyvrikgpbdg .order .ship_card:hover { color: #555 !important; -webkit-text-fill-color: #555 !important; border: 2px solid #aaa !important; } #cprygyorvnjyvrikgpbdg .order .ship_card.ship_card__active { color: #333 !important; -webkit-text-fill-color: #333 !important; border: 2px solid #777 !important; background: #fafafa !important; } #cprygyorvnjyvrikgpbdg .order .order_ship_icon { margin-top: -3px !important; width: 15px !important; height: 15px !important; opacity: 0.6 !important; } #cprygyorvnjyvrikgpbdg .order .card_section { margin-top: 20px !important; max-width: 500px !important; box-shadow: 0 0 0 1px hsla(0, 0%, 69%, 0.2), 0 15px 35px 0 rgba(49, 49, 93, 0.08), 0 5px 15px 0 rgba(0, 0, 0, 0.06) !important; border-radius: 6px !important; background-color: #fff !important; padding: 32px !important; } #cprygyorvnjyvrikgpbdg .order input[type='text'].form-control, #cprygyorvnjyvrikgpbdg .order input[type='number'].form-control, #cprygyorvnjyvrikgpbdg .order input[type='date'].form-control, #cprygyorvnjyvrikgpbdg .order textarea.form-control, #cprygyorvnjyvrikgpbdg .order select.form-control { background: #f4f4f4 !important; border: 1px solid transparent !important; padding: 7px 10px !important; } #cprygyorvnjyvrikgpbdg
      .order input[type='text'].form-control:hover, #cprygyorvnjyvrikgpbdg .order input[type='number'].form-control:hover, #cprygyorvnjyvrikgpbdg .order input[type='date'].form-control:hover, #cprygyorvnjyvrikgpbdg .order textarea.form-control:hover, #cprygyorvnjyvrikgpbdg .order select.form-control:hover { background: #f0f0f0 !important; } #cprygyorvnjyvrikgpbdg .order input[type='text'].form-control:focus, #cprygyorvnjyvrikgpbdg .order input[type='number'].form-control:focus, #cprygyorvnjyvrikgpbdg .order input[type='date'].form-control:focus, #cprygyorvnjyvrikgpbdg .order textarea.form-control:focus, #cprygyorvnjyvrikgpbdg .order select.form-control:focus, #cprygyorvnjyvrikgpbdg .order input[type='text'].form-control:active, #cprygyorvnjyvrikgpbdg .order input[type='number'].form-control:active, #cprygyorvnjyvrikgpbdg .order input[type='date'].form-control:active, #cprygyorvnjyvrikgpbdg .order textarea.form-control:active, #cprygyorvnjyvrikgpbdg .order select.form-control:active { background: #eee !important; } #cprygyorvnjyvrikgpbdg .order input[type='text'].form-control.err, #cprygyorvnjyvrikgpbdg .order input[type='number'].form-control.err, #cprygyorvnjyvrikgpbdg .order input[type='date'].form-control.err, #cprygyorvnjyvrikgpbdg .order textarea.form-control.err, #cprygyorvnjyvrikgpbdg .order select.form-control.err { background: #ffe6e6 !important; border: 1px solid #ff8a8a !important; } #cprygyorvnjyvrikgpbdg .order .form { box-shadow: none !important; border: none !important; padding: 0 !important; } #cprygyorvnjyvrikgpbdg .order .form .radio { height: unset !important; } #cprygyorvnjyvrikgpbdg .order .order--content { display: flex !important; flex: 1 !important; flex-direction: column !important; } #cprygyorvnjyvrikgpbdg .order .order--content-content { flex: 1 !important; overflow: auto !important; } #cprygyorvnjyvrikgpbdg .order .order--heading { margin: 0 !important; margin-top: 20px !important; padding-left: 20px !important; padding-right: 20px !important; padding-bottom: 8px !important; line-height: 20px !important; position: relative !important; } #cprygyorvnjyvrikgpbdg .order .order--header-desc { color: #6c757d !important; -webkit-text-fill-color: #6c757d !important; font-size: 13px !important; } #cprygyorvnjyvrikgpbdg .order .order__product_line { display: flex !important; overflow: hidden !important; } #cprygyorvnjyvrikgpbdg .order .order--footer { text-align: k center !important; cursor: pointer !important; display: flex !important; justify-content: center !important; align-items: flex-end !important; color: #acacac !important; -webkit-text-fill-color: #acacac !important; } #cprygyorvnjyvrikgpbdg .order .order--footer:hover { color: black !important; -webkit-text-fill-color: black !important; } #cprygyorvnjyvrikgpbdg .order .order_section_label { color: #444 !important; -webkit-text-fill-color: #444 !important; margin-bottom: 5px !important; text-transform: uppercase !important; font-size: 13px !important; font-weight: 500 !important; } #cprygyorvnjyvrikgpbdg .order .order_label { color: #444 !important; -webkit-text-fill-color: #444 !important; margin-bottom: 5px !important; text-transform: uppercase !important; font-size: 13px !important; font-weight: 500 !important; } #cprygyorvnjyvrikgpbdg .order .order_section { padding-left: 20px !important; padding-right: 20px !important; padding-bottom: 15px !important; padding-top: 15px !important; } #cprygyorvnjyvrikgpbdg .order .order_section__line { border-top: 4px solid #eee !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .order .order_summary_line { overflow: hidden !important; padding: 3px 0 !important; display: flex !important; justify-content: space-between !important; } #cprygyorvnjyvrikgpbdg .order .order_btn { width: 100% !important; } #cprygyorvnjyvrikgpbdg .order .order_tracking_link { text-decoration: underline !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .order .order_tracking_link:hover { color: rgb(245, 171, 61) !important; -webkit-text-fill-color: rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .order .order_tracking_link_icon { margin-top: -3px !important; width: 15px !important; height: 15px !important; } #cprygyorvnjyvrikgpbdg .order .order_shipping_provider_logo { width: 32px !important; height: 32px !important; margin-right: 10px !important; } #cprygyorvnjyvrikgpbdg .order .order_btn.order__btn__light { background: #f0f0f0 !important; color: black !important; -webkit-text-fill-color: black !important; border-radius: 6px !important; text-align: center !important; padding: 8px !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .order .order_btn.order__btn__light:hover { color: black !important; -webkit-text-fill-color: black !important; background: #ddd !important; } #cprygyorvnjyvrikgpbdg div.order__card { display: flex !important; padding: 15px !important; box-shadow: none !important; border: 2px solid #eee !important; margin-top: 10px !important; border-radius: 8px !important; background: #fafafa !important; } #cprygyorvnjyvrikgpbdg div.order__card.order__card__active { border: 2px solid #777 !important; background: white !important; } #cprygyorvnjyvrikgpbdg .order_form_label { margin-top: 10px !important; margin-bottom: 4px !important; } #cprygyorvnjyvrikgpbdg .btn-confirm-order { width: 100% !important; background: rgb(245, 171, 61) !important; display: flex !important; align-items: center !important; border-radius: 5px !important; color: #fff !important; -webkit-text-fill-color: #fff !important; padding: 15px 10px !important; cursor: pointer !important; justify-content: center !important; font-weight: 500 !important; margin-top: 10px !important; } #cprygyorvnjyvrikgpbdg .btn-confirm-order:hover { background: #0053d4 !important; } #cprygyorvnjyvrikgpbdg .order__total { font-weight: 500 !important; font-size: 20px !important; color: rgb(245, 171, 61) !important; -webkit-text-fill-color: rgb(245, 171, 61) !important; } #cprygyorvnjyvrikgpbdg .btn-cancel-order { color: #666 !important; -webkit-text-fill-color: #666 !important; text-decoration: underline !important; display: inline-block !important; margin-top: 10px !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .btn-cancel-order:hover { color: #333 !important; -webkit-text-fill-color: #333 !important; } #cprygyorvnjyvrikgpbdg .order_status { text-transform: uppercase !important; background: black !important; color: white !important; -webkit-text-fill-color: white !important; display: inline-block !important; border-radius: 4px !important; padding: 6px 6px 4px 6px !important; line-height: 1 !important; font-weight: 500 !important; font-size: 12px !important; } #cprygyorvnjyvrikgpbdg .order_status.order_status__canceled { background: whitesmoke !important; color: #000 !important; -webkit-text-fill-color: #000 !important; } #cprygyorvnjyvrikgpbdg .order_status.order_status__cancel { background: whitesmoke !important; color: #000 !important; -webkit-text-fill-color: #000
      !important; } #cprygyorvnjyvrikgpbdg .order_status.order_status__confirmed { background: rgb(245, 171, 61) !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .order_status.order_status__shipping { background: #000 !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .order_status.order_status__fullfilled { background: #28a745 !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .order_status.order_status__hold { background: #dc3545 !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .order_status.order_status__draft { background: #ffc107 !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .order_status.order_status__open { background: #ffc107 !important; color: white !important; -webkit-text-fill-color: white !important; } #cprygyorvnjyvrikgpbdg .order_error { display: flex !important; flex-direction: column !important; align-items: center !important; justify-content: center !important; height: 100% !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .order_attachment__note { font-size: 14px !important; white-space: pre-wrap !important; overflow: hidden !important; text-overflow: ellipsis !important; display: -webkit-box !important; -webkit-line-clamp: 3 !important; -webkit-box-orient: vertical !important; } #cprygyorvnjyvrikgpbdg .dropdown_select { position: absolute !important; background: white !important; -webkit-box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1) !important; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1) !important; border-radius: 5px !important; width: 150px !important; z-index: 20 !important; overflow: hidden !important; } #cprygyorvnjyvrikgpbdg .dropdown_select__overlay { top: 0 !important; overflow: hidden !important; position: absolute !important; background: #000000aa !important; z-index: 19 !important; left: 0 !important; right: 0 !important; bottom: 0 !important; } #cprygyorvnjyvrikgpbdg .dropdown_select__item { padding: 7px 10px !important; cursor: pointer !important; } #cprygyorvnjyvrikgpbdg .dropdown_select__item:hover { background: rgb(245, 171, 61) !important; color: #fff !important; -webkit-text-fill-color: #fff !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_filter { padding: 8px 10px !important; border-bottom: 1px solid #eee !important; position: relative !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_filter:hover .dropdown_select_filter__icon { opacity: 1 !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_filter_input { border-radius: 5px !important; width: 100% !important; display: block !important; background: #f4f4f4 !important; border: none !important; padding: 7px 10px !important; padding-left: 35px !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_filter_input:hover { background: #f0f0f0 !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_filter_input:focus, #cprygyorvnjyvrikgpbdg .dropdown_select_filter_input:active { background: #eee !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_input { border-radius: 5px !important; overflow: hidden !important; cursor: pointer !important; flex-wrap: nowrap !important; display: flex !important; background: #f4f4f4 !important; border: 1px solid trasparent !important; padding: 7px 10px !important; height: 32px !important; min-width: 120px !important; width: 100% !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_input:hover { background: #f0f0f0 !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_input:focus, #cprygyorvnjyvrikgpbdg .dropdown_select_input:active { background: #eee !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_input.err { background: #ffe6e6 !important; border: 1px solid #ff8a8a !important; } #cprygyorvnjyvrikgpbdg .dropdown_select__items { max-height: 300px !important; min-height: 100px !important; overflow-x: hidden !important; overflow-y: auto !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_filter__icon { width: 22px !important; height: 15px !important; position: absolute !important; z-index: 2 !important; top: 15px !important; left: 18px !important; border-right: 1px solid #aaa !important; padding-right: 7px !important; opacity: 0.5 !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_filter__empty { display: flex !important; align-items: center !important; justify-content: center !important; flex-direction: column !important; } #cprygyorvnjyvrikgpbdg .dropdown_select_filter__empty_img { height: 50px !important; margin-top: 10px !important; margin-bottom: 10px !important; } #cprygyorvnjyvrikgpbdg .dropdown_select__caret { width: 14px !important; margin-top: 3px !important; opacity: 0.6 !important; height: 15px !important; } div#cprygyorvnjyvrikgpbdg { all: initial; } body div#cprygyorvnjyvrikgpbdg { all: initial !important; }</style>
  </head>
  
  <body class="product-template-default single single-product postid-13832 theme-flatsome has_devvn_toolbar woocommerce woocommerce-page woocommerce-js wp-schema-pro-2.7.17 devvn_page_light lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow" style="">
    <div id="yith-wcwl-popup-message" style="display: none;">
      <div id="yith-wcwl-message"></div>
    </div>
    <!-- GTM Container placement set to automatic -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCVWPNH" height="0" width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <a class="skip-link screen-reader-text" href="#main">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">跳至内容</font></font>
    </a>
    <div id="wrapper">
      <header id="header" class="header has-sticky sticky-jump" style="">
        <div class="header-wrapper">
          <div id="top-bar" class="header-top hide-for-sticky nav-dark flex-has-center hide-for-medium">
            <div class="flex-row container">
              <div class="flex-col hide-for-medium flex-left">
                <ul class="nav nav-left medium-nav-center nav-small  nav-">
                  <li class="html custom html_topbar_left">
                    <a class="devvn_header_logo" href="https://thienmochuong.com/" title="Thien Moc Huong - 献给国际元首的越南沉香品牌" rel="home">
                      <img width="300" height="188" src="https://thienmochuong.com/wp-content/uploads/2022/06/Logo-Thien-Moc-Huong.png" class="header_logo header-logo" alt="天木香">
                      <img width="300" height="188" src="https://thienmochuong.com/wp-content/uploads/2022/06/Logo-Thien-Moc-Huong.png" class="header-logo-dark" alt="天木香"></a>
                  </li>
                </ul>
              </div>
              <div class="flex-col hide-for-medium flex-center">
                <ul class="nav nav-center nav-small  nav-">
                  <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                      <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                        <form role="search" method="get" class="searchform" action="https://thienmochuong.com/">
                          <div class="flex-row relative">
                            <div class="flex-col flex-grow">
                              <label class="screen-reader-text" for="woocommerce-product-search-field-0">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">搜索：</font></font>
                              </label>
                              <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="快速搜索...." value="" name="s" autocomplete="off">
                              <input type="hidden" name="post_type" value="product"></div>
                            <div class="flex-col">
                              <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button  icon mb-0" aria-label="提交">
                                <i class="icon-search" data-rocket-lazy-bg-2d5bc407-ccf1-4274-a53b-4614ffa6dcb0="loaded" data-rocket-lazy-bg-21fb3f50-094b-49a8-8692-bae6712b7e1b="loaded"></i>
                              </button>
                            </div>
                          </div>
                          <div class="live-search-results text-left z-top">
                            <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="flex-col hide-for-medium flex-right">
                <ul class="nav top-bar-nav nav-right nav-small  nav-">
                  <li id="menu-item-33504" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33504 menu-item-design-default has-icon-left">
                    <a href="tel:0933348368" class="nav-top-link">
                      <img class="ux-menu-icon" width="14" height="14" src="https://thienmochuong.com/wp-content/uploads/2022/05/call.svg" alt="">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0933348368</font></font>
                    </a>
                  </li>
                  <li id="menu-item-33511" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33511 menu-item-design-default has-icon-left">
                    <a href="https://thienmochuong.com/my-account/orders" class="nav-top-link">
                      <img class="ux-menu-icon" width="14" height="14" src="https://thienmochuong.com/wp-content/uploads/2022/05/clock.svg" alt="">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">订单历史记录</font></font>
                    </a>
                  </li>
                  <li class="header-wishlist-icon">
                    <a href="https://thienmochuong.com/wishlist" class="wishlist-link is-small">
                      <i class="wishlist-icon icon-heart-o"></i>
                    </a>
                  </li>
                  <li class="cart-item has-icon">
                    <a href="https://thienmochuong.com/cart" class="header-cart-link is-small" title="购物车">
                      <span class="image-icon header-cart-icon" data-icon-label="0">
                        <img class="cart-img-icon" alt="Giỏ hàng" src="https://thienmochuong.com/wp-content/uploads/2023/05/gio-hang.png"></span>
                    </a>
                  </li>
                  <li class="account-item has-icon
                  ">
                    <a href="https://thienmochuong.com/my-account" class="nav-top-link nav-top-not-logged-in is-small" data-open="#login-form-popup">
                      <i class="icon-user"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="masthead" class="header-main nav-dark">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
              <!-- Logo -->
              <div id="logo" class="flex-col logo">
                <!-- Header logo -->
                <a href="https://thienmochuong.com/" title="Thien Moc Huong - 献给国际元首的越南沉香品牌" rel="home">
                  <img width="200" height="135" src="https://thienmochuong.com/wp-content/uploads/2021/09/logo-thienmochuong-e1630594123893.png" class="header_logo header-logo" alt="天木香">
                  <img width="200" height="135" src="https://thienmochuong.com/wp-content/uploads/2021/09/logo-thienmochuong-e1630594123893.png" class="header-logo-dark" alt="天木香"></a>
              </div>
              <!-- Mobile Left Elements -->
              <div class="flex-col show-for-medium flex-left">
                <ul class="mobile-nav nav nav-left ">
                  <li class="nav-icon has-icon">
                    <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="dark" class="is-small" aria-label="菜单" aria-controls="main-menu" aria-expanded="false">
                      <i class="icon-menu"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Left Elements -->
              <div class="flex-col hide-for-medium flex-left
              flex-grow">
                <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                  <li id="menu-item-19451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19451 menu-item-design-default has-dropdown">
                    <a href="https://thienmochuong.com/gioi-thieu-trang-suc-tram-huong-thien-moc-huong" class="nav-top-link" aria-expanded="false" aria-haspopup="menu">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">介绍</font></font>
                      <i class="icon-angle-down"></i>
                    </a>
                    <ul class="sub-menu nav-dropdown nav-dropdown-bold dark">
                      <li id="menu-item-19452" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19452">
                        <a href="https://thienmochuong.com/gioi-thieu-trang-suc-tram-huong-thien-moc-huong">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">关于 Thien Moc Huong</font></font>
                        </a>
                      </li>
                      <li id="menu-item-55433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55433">
                        <a href="https://thienmochuong.com/unesco">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">联合国教科文组织奖</font></font>
                        </a>
                      </li>
                      <li id="menu-item-44706" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44706">
                        <a href="https://thienmochuong.com/thien-moc-huong-the-master-box">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">主盒</font></font>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li id="menu-item-23839" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor current-menu-parent current-product-parent menu-item-has-children menu-item-23839 active menu-item-design-container-width menu-item-has-block has-dropdown">
                    <a href="https://thienmochuong.com/vong-tay-tram-huong" class="nav-top-link" aria-expanded="false" aria-haspopup="menu">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">沉香手链</font></font>
                      <i class="icon-angle-down"></i>
                    </a>
                    <div class="sub-menu nav-dropdown" style="">
                      <div class="row row-solid" id="row-42050473">
                        <div id="col-1059610966" class="col medium-9 small-12 large-9">
                          <div class="col-inner">
                            <div class="row align-equal row-solid" id="row-2040342221">
                              <div id="col-1150732778" class="col medium-4 small-12 large-4">
                                <div class="col-inner">
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-title flex">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">产品目录</font></font>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-nu">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">女士沉香手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-nam">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">男士沉香手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/tram-huong-cap-doi">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">情侣沉香手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tram-huong-cho-be">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">儿童沉香手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-best-seller">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">最畅销的沉香手链✨</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/qua-tang-tram-huong-tmh">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香礼品</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item show-for-small">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/qua-tang-tram-huong-tmh">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香礼品</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="col-1862650443" class="col medium-4 small-12 large-4">
                                <div class="col-inner">
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-title flex">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">手链系列</font></font>
                                    </div>
                                    <div class="ux-menu-link flex menu-item label-sale">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-108">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">108 颗沉香珠手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-ty-huu">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香貔貅手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-mix-charm-bac">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">银饰沉香手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item label-hot">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tram-mix-charm-vang">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香木手链混合黄金饰品</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-boc-vang">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">镀金沉香手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/bst-masterpiece">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">巨匠杰作 - 沉香系列</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="col-667677039" class="col medium-4 small-12 large-4">
                                <div class="col-inner">
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-phong-thuy">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">风水手链</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-phong-thuy-menh-moc">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">木元素</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-phong-thuy-menh-thuy">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">水元素</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-phong-thuy-menh-hoa">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">火元素</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-phong-thuy-menh-tho">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">土元素</font></font>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-phong-thuy-menh-kim">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">金属元素</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <style>#row-2040342221 > .col > .col-inner { padding: 0px 20px 0px 20px; }</style></div>
                          </div>
                        </div>
                        <div id="col-1584182015" class="col medium-3 small-12 large-3">
                          <div class="col-inner">
                            <div class="ux-menu stack stack-col justify-start ux-menu--divider-solid">
                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://thienmochuong.com/bst-vong-tram-huong-vip">
                                  <i class="ux-menu-link__icon text-center icon-angle-right"></i>
                                  <span class="ux-menu-link__text">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">VIP 系列 x 大师盒</font></font>
                                  </span>
                                </a>
                              </div>
                            </div>
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_456888920">
                              <div class="img-inner dark">
                                <img width="800" height="800" src="https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip.jpg" class="attachment-large size-large entered lazyloaded" alt="VIP沉香手链系列" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip.jpg 900w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-60x60.jpg 60w" data-lazy-sizes="(max-width: 800px) 100vw, 800px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip.jpg" data-ll-status="loaded" sizes="(max-width: 800px) 100vw, 800px" srcset="https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip.jpg 900w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-60x60.jpg 60w">
                                <noscript>
                                  <img width="800" height="800" src="https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip.jpg" class="attachment-large size-large" alt="BST vòng trầm hương VIP" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip.jpg 900w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2023/03/bst-vong-tram-huong-vip-60x60.jpg 60w" sizes="(max-width: 800px) 100vw, 800px" /></noscript>
                              </div>
                              <style>#image_456888920 { width: 100%; }</style></div>
                          </div>
                        </div>
                        <style>#row-42050473 > .col > .col-inner { padding: 0px 20px 0px 20px; }</style></div>
                    </div>
                  </li>
                  <li id="menu-item-47145" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-47145 menu-item-design-default has-dropdown">
                    <a href="https://thienmochuong.com/nhang-tram-huong-sach" class="nav-top-link" aria-expanded="false" aria-haspopup="menu">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">沉香</font></font>
                      <i class="icon-angle-down"></i>
                    </a>
                    <ul class="sub-menu nav-dropdown nav-dropdown-bold dark">
                      <li id="menu-item-47146" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47146">
                        <a href="https://thienmochuong.com/nhang-vong-tram-huong">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">沉香</font></font>
                        </a>
                      </li>
                      <li id="menu-item-47147" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47147">
                        <a href="https://thienmochuong.com/nhang-tram-co-tam">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">香棒 带香棒</font></font>
                        </a>
                      </li>
                      <li id="menu-item-47148" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47148">
                        <a href="https://thienmochuong.com/nhang-tram-khong-tam">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">无香</font></font>
                        </a>
                      </li>
                      <li id="menu-item-59796" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-59796">
                        <a href="https://thienmochuong.com/nu-tram-huong-cao-cap">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">沉香芽</font></font>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li id="menu-item-30017" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-30017 menu-item-design-container-width menu-item-has-block has-dropdown">
                    <a href="https://thienmochuong.com/my-nghe-tram-huong" class="nav-top-link" aria-expanded="false" aria-haspopup="menu">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">沉香工艺品</font></font>
                      <i class="icon-angle-down"></i>
                    </a>
                    <div class="sub-menu nav-dropdown" style="">
                      <div class="row row-solid" id="row-1023731492">
                        <div id="col-1234449029" class="col medium-9 small-12 large-9">
                          <div class="col-inner">
                            <div class="row align-equal row-solid" id="row-1544986445">
                              <div id="col-72351197" class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/nuoc-hoa-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香香水</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/tram-huong-canh">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香山水</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/tuong-phat-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香佛像</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start"></div>
                                </div>
                              </div>
                              <div id="col-791418701" class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/mat-day-chuyen-go-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香吊坠</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/day-treo-xe-o-to-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香汽车挂绳</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/san-pham-khac">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">其他沉香艺术产品</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start"></div>
                                </div>
                              </div>
                              <style>#row-1544986445 > .col > .col-inner { padding: 0px 20px 0px 20px; }</style></div>
                          </div>
                        </div>
                        <div id="col-88206738" class="col medium-3 small-12 large-3">
                          <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1623495425">
                              <div class="img-inner dark">
                                <img width="740" height="414" src="https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile.jpg" class="attachment-original size-original entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile.jpg 740w, https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile-510x285.jpg 510w" data-lazy-sizes="(max-width: 740px) 100vw, 740px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile.jpg" data-ll-status="loaded" sizes="(max-width: 740px) 100vw, 740px" srcset="https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile.jpg 740w, https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile-510x285.jpg 510w">
                                <noscript>
                                  <img width="740" height="414" src="https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile.jpg" class="attachment-original size-original" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile.jpg 740w, https://thienmochuong.com/wp-content/uploads/2022/06/banner-my-nghe-tram-huong-mobile-510x285.jpg 510w" sizes="(max-width: 740px) 100vw, 740px" /></noscript>
                              </div>
                              <style>#image_1623495425 { width: 100%; }</style></div>
                          </div>
                        </div>
                        <style>#row-1023731492 > .col > .col-inner { padding: 0px 20px 0px 20px; }</style></div>
                    </div>
                  </li>
                  <li id="menu-item-30019" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30019 menu-item-design-container-width menu-item-has-block has-dropdown">
                    <a href="https://thienmochuong.com/tram-huong-dot-1" class="nav-top-link" aria-expanded="false" aria-haspopup="menu">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">烧沉香</font></font>
                      <i class="icon-angle-down"></i>
                    </a>
                    <div class="sub-menu nav-dropdown" style="">
                      <div class="row row-solid" id="row-1271542263">
                        <div id="col-625328289" class="col medium-9 small-12 large-9">
                          <div class="col-inner">
                            <div class="row align-equal row-solid" id="row-789280949">
                              <div id="col-768962882" class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/dung-cu-dot-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">香炉</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/thac-khoi-tram-huong-cao-cap">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">高品质沉香烟瀑</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/lu-dot-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">香炉</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="col-1454097417" class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/bot-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香粉</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/tinh-dau-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香精油</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/tram-huong-mieng">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香木片</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ux-menu stack stack-col justify-start">
                                    <div class="ux-menu-link flex menu-item">
                                      <a class="ux-menu-link__link flex" href="https://thienmochuong.com/tam-tram-huong">
                                        <span class="ux-menu-link__text">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">沉香牙签</font></font>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <style>#row-789280949 > .col > .col-inner { padding: 0px 20px 0px 20px; }</style></div>
                          </div>
                        </div>
                        <div id="col-52337553" class="col medium-3 small-12 large-3">
                          <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1006510575">
                              <div class="img-inner dark">
                                <img width="304" height="304" src="https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957.jpg" class="attachment-large size-large entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957.jpg 304w, https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957-247x247.jpg 247w" data-lazy-sizes="(max-width: 304px) 100vw, 304px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957.jpg" data-ll-status="loaded" sizes="(max-width: 304px) 100vw, 304px" srcset="https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957.jpg 304w, https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957-247x247.jpg 247w">
                                <noscript>
                                  <img width="304" height="304" src="https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957.jpg" class="attachment-large size-large" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957.jpg 304w, https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/05/Rectangle-957-247x247.jpg 247w" sizes="(max-width: 304px) 100vw, 304px" /></noscript>
                              </div>
                              <style>#image_1006510575 { width: 100%; }</style></div>
                          </div>
                        </div>
                        <style>#row-1271542263 > .col > .col-inner { padding: 0px 20px 0px 20px; }</style></div>
                    </div>
                  </li>
                  <li id="menu-item-67078" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67078 menu-item-design-default">
                    <a href="https://thienmochuong.com/qua-tang-tram-huong" class="nav-top-link">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">展示</font></font>
                    </a>
                  </li>
                  <li id="menu-item-2385" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2385 menu-item-design-default has-dropdown">
                    <a href="https://thienmochuong.com/blog" class="nav-top-link" aria-expanded="false" aria-haspopup="menu">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">博客</font></font>
                      <i class="icon-angle-down"></i>
                    </a>
                    <ul class="sub-menu nav-dropdown nav-dropdown-bold dark">
                      <li id="menu-item-23662" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23662">
                        <a href="https://thienmochuong.com/chuyen-muc/kien-thuc-tram-huong">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">沉香知识</font></font>
                        </a>
                      </li>
                      <li id="menu-item-23663" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23663">
                        <a href="https://thienmochuong.com/chuyen-muc/phong-thuy">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">风水</font></font>
                        </a>
                      </li>
                      <li id="menu-item-25443" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25443">
                        <a href="https://thienmochuong.com/cung-menh-la-gi-cach-xem-menh-ngu-hanh-cach-tinh-menh-theo-ngu-hanh">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">见命运</font></font>
                        </a>
                      </li>
                      <li id="menu-item-55786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55786">
                        <a href="https://thienmochuong.com/xem-mau-hop-tuoi">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">查找适合年龄的颜色</font></font>
                        </a>
                      </li>
                      <li id="menu-item-23668" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23668">
                        <a href="https://thienmochuong.com/chuyen-muc/da-quy">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">宝石</font></font>
                        </a>
                      </li>
                      <li id="menu-item-31900" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31900">
                        <a href="https://thienmochuong.com/chuyen-muc/giai-ma-giac-mo">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">梦的解析</font></font>
                        </a>
                      </li>
                      <li id="menu-item-31901" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31901">
                        <a href="https://thienmochuong.com/chuyen-muc/qua-tang">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">礼品与节日</font></font>
                        </a>
                      </li>
                      <li id="menu-item-47041" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-47041">
                        <a href="https://thienmochuong.com/chuyen-muc/khuyen-mai">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">促销信息</font></font>
                        </a>
                      </li>
                      <li id="menu-item-31902" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31902">
                        <a href="https://thienmochuong.com/chuyen-muc/tin-tuc-chung">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">综合新闻</font></font>
                        </a>
                      </li>
                      <li id="menu-item-34493" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-34493">
                        <a href="https://thienmochuong.com/chuyen-muc/tuyen-dung-nhan-su">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">招聘</font></font>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li id="menu-item-29875" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29875 menu-item-design-default">
                    <a href="https://thienmochuong.com/lien-he" class="nav-top-link">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">接触</font></font>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Right Elements -->
              <div class="flex-col hide-for-medium flex-right">
                <ul class="header-nav header-nav-main nav nav-right  nav-uppercase"></ul>
              </div>
              <!-- Mobile Right Elements -->
              <div class="flex-col show-for-medium flex-right">
                <ul class="mobile-nav nav nav-right ">
                  <li class="header-wishlist-icon has-icon">
                    <a href="https://thienmochuong.com/wishlist" class="wishlist-link ">
                      <i class="wishlist-icon icon-heart-o"></i>
                    </a>
                  </li>
                  <li class="cart-item has-icon">
                    <a href="https://thienmochuong.com/cart" class="header-cart-link is-small" title="购物车">
                      <span class="image-icon header-cart-icon" data-icon-label="0">
                        <img class="cart-img-icon" alt="Giỏ hàng" src="https://thienmochuong.com/wp-content/uploads/2023/05/gio-hang.png"></span>
                    </a>
                  </li>
                  <li class="account-item has-icon">
                    <a href="https://thienmochuong.com/my-account" class="account-link-mobile is-small" title="帐户">
                      <i class="icon-user"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
          </div>
        </div>
      </header>
      <div class="page-title shop-page-title product-page-title">
        <div class="page-title-inner flex-row medium-flex-wrap container">
          <div class="flex-col flex-grow medium-text-center">
            <div class="is-xsmall">
              <nav class="woocommerce-breadcrumb breadcrumbs ">
                <a href="https://thienmochuong.com">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">首页</font></font>
                </a>
                <span class="divider">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">/</font></font>
                </span>
                <a href="https://thienmochuong.com/vong-tay-tram-huong">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">沉香手链</font></font>
                </a>
                <span class="divider">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">/</font></font>
                </span>
                <a href="https://thienmochuong.com/vong-tay-tram-huong-nam">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">男士沉香手链</font></font>
                </a>
              </nav>
            </div>
          </div>
          <div class="flex-col medium-text-center"></div>
        </div>
      </div>
      <main id="main" class="">
        <div class="shop-container">
          <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
          </div>
          <div id="product-13832" class="product type-product post-13832 status-publish first instock product_cat-vong-tay-tram-huong product_cat-vong-tay-tram-huong-nam product_cat-vong-tay-tram-huong-nu product_cat-vong-tay-tram-huong-108 product_cat-vong-tay-tram-huong-best-seller has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
            <div class="product-container">
              <div class="product-main">
                <div class="row content-row mb-0">
                  <div class="product-gallery large-6 col">
                    <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1;">
                      <div class="devvn_label_product">
                        <span class="sale" data-rocket-lazy-bg-adcf62c5-fe94-4ec4-9b01-12df7476a9dd="loaded">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">畅销书</font></font>
                        </span>
                      </div>
                      <div class="image-tools absolute top show-on-hover right z-3">
                        <div class="wishlist-icon">
                          <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                            <i class="icon-heart-o"></i>
                          </button>
                          <div class="wishlist-popup dark">
                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-13833  no-icon wishlist-fragment on-first-load" data-fragment-ref="13833" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;13833&quot;,&quot;parent_product_id&quot;:&quot;13832&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                              <!-- ADD TO WISHLIST -->
                              <div class="yith-wcwl-add-button">
                                <a href="?add_to_wishlist=13833&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="13833" data-product-type="variable" data-original-product-id="13832" data-title="Thêm vào yêu thích" rel="nofollow">
                                  <span>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                  </span>
                                </a>
                              </div>
                              <!-- COUNT TEXT --></div>
                          </div>
                        </div>
                      </div>
                      <div class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half is-draggable flickity-enabled" data-flickity-options="{
                      &quot;cellAlign&quot;: &quot;center&quot;,
                      &quot;wrapAround&quot;: true,
                      &quot;autoPlay&quot;: false,
                      &quot;prevNextButtons&quot;:true,
                      &quot;adaptiveHeight&quot;: true,
                      &quot;imagesLoaded&quot;: true,
                      &quot;lazyLoad&quot;: 1,
                      &quot;dragThreshold&quot; : 15,
                      &quot;pageDots&quot;: false,
                      &quot;rightToLeft&quot;: false       }" tabindex="0">
                        <div class="flickity-viewport" style="height: 520px; touch-action: pan-y;">
                          <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                            <div data-thumb="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg" data-thumb-alt="Vòng tay Trầm Hương 108 hạt trơn - Trầm Tốc Việt Nam" class="woocommerce-product-gallery__image slide first is-selected" data-o_data-thumb="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-280x280.jpg" style="position: absolute; left: 0%;">
                              <a href="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg" data-o_href="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg">
                                <img fetchpriority="high" width="510" height="510" src="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg" class="wp-post-image skip-lazy" alt="Vòng tay Trầm Hương 108 hạt trơn - Trầm Tốc Việt Nam" data-caption="Vòng tay Trầm Hương 108 hạt trơn Thiên Mộc Hương" data-src="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg" data-large_image="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg" data-large_image_width="2000" data-large_image_height="2000" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg 2000w" sizes="(max-width: 510px) 100vw, 510px" title="108-hat-tron-tram-toc-vn" data-o_src="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg" data-o_height="510" data-o_width="510" data-o_srcset="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg 2000w" data-o_sizes="(max-width: 510px) 100vw, 510px" data-o_title="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam 1" data-o_data-caption="Vòng tay Trầm Hương 108 hạt trơn Thiên Mộc Hương" data-o_alt="Vòng tay Trầm Hương 108 hạt trơn - Trầm Tốc Việt Nam" data-o_data-src="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg" data-o_data-large_image="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg" data-o_data-large_image_width="2000" data-o_data-large_image_height="2000"></a>
                            </div>
                            <div data-thumb="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32-280x280.jpg" data-thumb-alt="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam" class="woocommerce-product-gallery__image slide" aria-hidden="true" style="position: absolute; left: 100%;">
                              <a href="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32.jpg">
                                <img width="510" height="510" src="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32-510x510.jpg" class="skip-lazy" alt="108 单珠沉香手链 - Tram Toc 越南" data-caption="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam" data-src="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32.jpg" data-large_image="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32.jpg" data-large_image_width="2000" data-large_image_height="2000" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32.jpg 2000w" sizes="(max-width: 510px) 100vw, 510px" title="108 单珠沉香手链 - Tram Toc Viet Nam 2"></a>
                            </div>
                            <div data-thumb="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-280x280.jpg" data-thumb-alt="Vòng Trầm Hương 108 Hạt Đơn – Trầm Tốc Việt Nam" class="woocommerce-product-gallery__image slide" aria-hidden="true" style="position: absolute; left: 200%;">
                              <a href="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg">
                                <img width="510" height="510" src="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-510x510.jpg" class="skip-lazy" alt="108 单珠沉香手链 – Tram Toc 越南" data-caption="Vòng Trầm Hương 108 Hạt Đơn Thiên Mộc Hương" data-src="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg" data-large_image="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg" data-large_image_width="1794" data-large_image_height="1794" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg 1794w" sizes="(max-width: 510px) 100vw, 510px" title="108 单珠沉香手链 - Tram Toc 越南 3"></a>
                            </div>
                            <div data-thumb="https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn-280x280.jpg" data-thumb-alt="Đặc điểm vòng trầm tốc Việt Nam" class="woocommerce-product-gallery__image slide" aria-hidden="true" style="position: absolute; left: 300%;">
                              <a href="https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn.jpg">
                                <img width="510" height="510" src="https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn-510x510.jpg" class="skip-lazy" alt="越南沉香手链的特点" data-caption="Đặc điểm vòng trầm tốc Việt Nam" data-src="https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn.jpg" data-large_image="https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn.jpg" data-large_image_width="2000" data-large_image_height="2000" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn.jpg 2000w" sizes="(max-width: 510px) 100vw, 510px" title="108 单珠沉香手链 - Tram Toc 越南 4"></a>
                            </div>
                            <div data-thumb="https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat-280x280.jpg" data-thumb-alt="Kích thước vòng 108 hạt" class="woocommerce-product-gallery__image slide" aria-hidden="true" style="position: absolute; left: 400%;">
                              <a href="https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat.jpg">
                                <img width="510" height="510" src="https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat-510x510.jpg" class="skip-lazy" alt="108颗珠子手链尺寸" data-caption="Kích thước vòng 108 hạt" data-src="https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat.jpg" data-large_image="https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat.jpg" data-large_image_width="2000" data-large_image_height="2000" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat.jpg 2000w" sizes="(max-width: 510px) 100vw, 510px" title="108 单珠沉香手链 - Tram Toc 越南 5"></a>
                            </div>
                          </div>
                        </div>
                        <button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="以前的">
                          <svg class="flickity-button-icon" viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                          </svg>
                        </button>
                        <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="下一个">
                          <svg class="flickity-button-icon" viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                          </svg>
                        </button>
                      </div>
                      <div class="image-tools absolute bottom left z-3">
                        <a class="button is-outline circle icon button product-video-popup tip-top" href="https://www.youtube.com/watch?v=QWx-tBBe20I" title="视频">
                          <i class="icon-play"></i>
                        </a>
                        <style>.has-product-video .mfp-iframe-holder .mfp-content{max-width: 900px;}.has-product-video .mfp-iframe-scaler{padding-top: 100%}</style>
                        <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="飞涨">
                          <i class="icon-expand"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-thumbnails thumbnails slider row row-small row-slider slider-nav-small small-columns-4 is-draggable flickity-enabled" data-flickity-options="{
                    &quot;cellAlign&quot;: &quot;left&quot;,
                    &quot;wrapAround&quot;: false,
                    &quot;autoPlay&quot;: false,
                    &quot;prevNextButtons&quot;: true,
                    &quot;asNavFor&quot;: &quot;.product-gallery-slider&quot;,
                    &quot;percentPosition&quot;: true,
                    &quot;imagesLoaded&quot;: true,
                    &quot;pageDots&quot;: false,
                    &quot;rightToLeft&quot;: false,
                    &quot;contain&quot;: true
                    }" tabindex="0">
                      <div class="flickity-viewport" style="height: 110.406px; touch-action: pan-y;">
                        <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                          <div class="col first is-selected is-nav-selected" style="position: absolute; left: 0%;">
                            <a>
                              <img src="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-280x280.jpg" alt="108 颗光滑珠子沉香手链 - Tram Toc 越南" width="280" height="280" class="attachment-woocommerce_thumbnail"></a>
                          </div>
                          <div class="col" aria-hidden="true" style="position: absolute; left: 25%;">
                            <a>
                              <img src="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-32-280x280.jpg" alt="108 单珠沉香手链 - Tram Toc 越南" width="280" height="280" class="attachment-woocommerce_thumbnail" title="108 单珠沉香手链 - Tram Toc 越南 6"></a>
                          </div>
                          <div class="col" aria-hidden="true" style="position: absolute; left: 50%;">
                            <a>
                              <img src="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-280x280.jpg" alt="108 单珠沉香手链 – Tram Toc 越南" width="280" height="280" class="attachment-woocommerce_thumbnail" title="108 单珠沉香手链 - Tram Toc 越南 7"></a>
                          </div>
                          <div class="col" aria-hidden="true" style="position: absolute; left: 75%;">
                            <a>
                              <img src="https://thienmochuong.com/wp-content/uploads/2022/07/diem-khac-biet-cua-tram-toc-vn-280x280.jpg" alt="越南沉香手链的特点" width="280" height="280" class="attachment-woocommerce_thumbnail" title="108单珠沉香手链 - 越南沉香 8"></a>
                          </div>
                          <div class="col" aria-hidden="true" style="position: absolute; left: 100%;">
                            <a>
                              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20280%20280'%3E%3C/svg%3E" alt="108颗珠子手链尺寸" width="280" height="280" class="attachment-woocommerce_thumbnail" title="108 单珠沉香手链 - Tram Toc 越南 9" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat-280x280.jpg">
                              <noscript>
                                <img src="https://thienmochuong.com/wp-content/uploads/2022/07/kich-thuoc-vong-108-hat-280x280.jpg" alt="Kích thước vòng 108 hạt" width="280" height="280" class="attachment-woocommerce_thumbnail" title="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam 9"></noscript>
                            </a>
                          </div>
                        </div>
                      </div>
                      <button class="flickity-button flickity-prev-next-button previous" type="button" disabled="" aria-label="以前的">
                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                        </svg>
                      </button>
                      <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="下一个">
                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                        </svg>
                      </button>
                    </div>
                    <div class="devvn_after_product_thumbnail_image">
                      <div class="devvn_share">
                        <span>
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">分享</font></font>
                        </span>
                        <div class="social-icons share-icons share-row relative icon-style-fill">
                          <a href="https://www.facebook.com/sharer.php?u=https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat" data-label="Facebook" onclick="if (!window.__cfRLUnblockHandlers) return false; window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px'); return false;" target="_blank" class="icon primary button circle tooltip facebook" title="在 Facebook 上分享" aria-label="在 Facebook 上分享" rel="noopener nofollow">
                            <i class="icon-facebook"></i>
                          </a>
                          <a href="https://twitter.com/share?url=https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat" onclick="if (!window.__cfRLUnblockHandlers) return false; window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px'); return false;" target="_blank" class="icon primary button circle tooltip twitter" title="在 Twitter 上分享" aria-label="在 Twitter 上分享" rel="noopener nofollow">
                            <i class="icon-twitter"></i>
                          </a>
                        </div>
                      </div>
                      <div class="devvn_like_wishlist">
                        <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.7734 0.5625C16.7847 0.56365 15.8067 0.767353 14.8997 1.16105C13.9927 1.55474 13.1761 2.13007 12.5 2.85156C11.5093 1.79418 10.2235 1.05905 8.80974 0.74161C7.39594 0.424166 5.91936 0.539068 4.57168 1.0714C3.224 1.60373 2.06748 2.52891 1.25224 3.72682C0.437007 4.92474 0.000713398 6.34006 0 7.78906C0 14.9844 11.6055 22.0469 12.1094 22.3242C12.2309 22.3972 12.37 22.4358 12.5117 22.4358C12.6535 22.4358 12.7926 22.3972 12.9141 22.3242C13.3945 22.0469 25 14.9844 25 7.78906C24.9979 5.87309 24.2359 4.03619 22.8811 2.6814C21.5263 1.3266 19.6894 0.564568 17.7734 0.5625V0.5625ZM12.5 20.7344C10.4805 19.4453 1.5625 13.4219 1.5625 7.78906C1.5635 6.58592 1.9476 5.41434 2.65912 4.44414C3.37064 3.47393 4.37263 2.7555 5.51986 2.39297C6.66708 2.03044 7.89995 2.04263 9.03978 2.42779C10.1796 2.81295 11.1672 3.55106 11.8594 4.53516C11.9315 4.63752 12.0272 4.72105 12.1383 4.77871C12.2495 4.83637 12.3728 4.86646 12.498 4.86646C12.6233 4.86646 12.7466 4.83637 12.8578 4.77871C12.9689 4.72105 13.0646 4.63752 13.1367 4.53516C13.8283 3.54937 14.8161 2.80967 15.9567 2.42342C17.0973 2.03718 18.3313 2.0245 19.4796 2.38723C20.6278 2.74995 21.6306 3.46921 22.3423 4.44057C23.0541 5.41194 23.4377 6.58486 23.4375 7.78906C23.4375 13.418 14.5195 19.4414 12.5 20.7344Z" fill="#FAB55A"></path>
                        </svg>
                        <span>
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">已赞(3)</font></font>
                        </span>
                      </div>
                    </div>
                    <div class="devvn_after_product_thumbnail_image_1">
                      <ul>
                        <li>
                          <a href="#" class="devvn_btn_show_image">
                            <span class="icon">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.9228 9.44484C23.9228 9.44484 21.6748 6.44181 21.6735 6.4401C21.6729 6.4393 21.6239 6.35226 21.4729 6.30421L12.1052 3.65909C12.0363 3.63968 11.9636 3.63968 11.8947 3.65909L2.52709 6.30421C2.52709 6.30421 2.3992 6.34111 2.32234 6.44485C2.29157 6.48639 0.0771769 9.44484 0.0771769 9.44484C0.00293708 9.54415 -0.0193562 9.673 0.017337 9.79146C0.0540836 9.90991 0.145337 10.0036 0.262723 10.0435L2.24517 10.7163V16.0962C2.24517 16.2529 2.33962 16.3941 2.48448 16.4539L11.8522 20.3249C11.88 20.3364 11.9153 20.3543 12 20.3543C12.0846 20.3543 12.1478 20.3249 12.1478 20.3249L21.5155 16.4539C21.6604 16.3941 21.7548 16.2528 21.7548 16.0962V10.7161L23.7372 10.0434C23.8546 10.0035 23.9459 9.90975 23.9826 9.79135C24.0193 9.673 23.997 9.54415 23.9228 9.44484ZM1.01664 9.4817L2.784 7.1201L3.49882 7.31701L7.5218 8.42517L11.3263 9.47327L9.09502 12.2234L1.01664 9.4817ZM11.6129 19.3882L3.01936 15.8373V10.9789L9.10147 13.0433C9.14222 13.0573 9.18419 13.0638 9.22585 13.0638C9.34025 13.0638 9.4515 13.013 9.52638 12.9206L11.613 10.3489L11.6129 19.3882ZM12 8.85599L4.07306 6.67221L12 4.43381L19.9269 6.67221L12 8.85599ZM20.9806 15.8373L12.387 19.3882V10.349L14.4736 12.9207C14.5485 13.013 14.6598 13.0639 14.7742 13.0639C14.8158 13.0639 14.8578 13.0574 14.8986 13.0435L20.9806 10.979V15.8373ZM14.905 12.2235L12.6737 9.47338L21.216 7.1201L22.9834 9.4817L14.905 12.2235Z" fill="black"></path>
                              </svg>
                            </span>
                            <span>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">拆箱</font></font>
                            </span>
                          </a>
                          <div class="devvn_gallery_image_box" style="display: none">
                            <a href="https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong.jpg" title="沉香手链盒开箱图">
                              <img width="900" height="900" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20900%20900'%3E%3C/svg%3E" class="attachment-full size-full" alt="沉香手链盒开箱图" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong.jpg 900w, https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong-510x510.jpg 510w" data-lazy-sizes="(max-width: 900px) 100vw, 900px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong.jpg">
                              <noscript>
                                <img width="900" height="900" src="https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong.jpg" class="attachment-full size-full" alt="hình mở hộp vòng tay trầm hương" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong.jpg 900w, https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/hinh-mo-hop-vong-tay-tram-huong-thien-moc-huong-510x510.jpg 510w" sizes="(max-width: 900px) 100vw, 900px" /></noscript>
                            </a>
                          </div>
                        </li>
                        <li>
                          <a href="#" class="devvn_show_video">
                            <span class="icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2805 0H3.71953C1.66629 0.00238281 0.00238281 1.66629 0 3.71953V16.2805C0.00238281 18.3337 1.66629 19.9976 3.71953 20H16.2805C18.3337 19.9976 19.9976 18.3337 20 16.2805V3.71953C19.9976 1.66629 18.3337 0.00238281 16.2805 0ZM18.6193 3.71953V4.92543H15.1217L12.5059 1.38066H16.2805C17.5716 1.38211 18.6179 2.4284 18.6193 3.71953ZM10.7899 1.38066L13.4058 4.92543H9.21008L6.59422 1.38066H10.7899ZM1.38066 3.71953C1.38211 2.42844 2.4284 1.38215 3.71953 1.38066H4.87832L7.49418 4.92543H1.38066V3.71953ZM16.2805 18.6193H3.71953C2.42844 18.6179 1.38215 17.5716 1.38066 16.2805V6.30613H18.6193V16.2805C18.6179 17.5716 17.5716 18.6179 16.2805 18.6193Z" fill="black"></path>
                                <path d="M13.6831 11.863L8.22154 8.70979C7.89135 8.51916 7.46916 8.63229 7.27854 8.96248C7.21795 9.06744 7.18604 9.18647 7.18604 9.30768V15.6141C7.18604 15.9954 7.4951 16.3045 7.87635 16.3045C7.99752 16.3045 8.11658 16.2726 8.22154 16.212L13.6831 13.0587C14.0133 12.8681 14.1264 12.4459 13.9358 12.1157C13.8751 12.0107 13.788 11.9236 13.6831 11.863ZM8.5667 14.4184V10.5033L11.9572 12.4608L8.5667 14.4184Z" fill="black"></path>
                              </svg>
                            </span>
                            <span>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">视频介绍</font></font>
                            </span>
                          </a>
                        </li>
                        <div id="devvn_content_gcn" class="lightbox-by-id lightbox-content mfp-hide lightbox-white " style="max-width:800px ;padding:20px">
                          <figure id="attachment_34058" aria-describedby="caption-attachment-34058" style="width: 1536px" class="wp-caption aligncenter">
                            <img decoding="async" class="size-full wp-image-34058" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201536%201028'%3E%3C/svg%3E" alt="Thien Moc Huong 产品被选为东南亚 - 日本青少年船舶计划中送给日本皇室的礼物。" width="1536" height="1028" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2019/07/chung-nhan-tang-nguyen-thu-quoc-te.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2019/07/chung-nhan-tang-nguyen-thu-quoc-te-510x341.jpg 510w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/07/chung-nhan-tang-nguyen-thu-quoc-te.jpg">
                            <noscript>
                              <img decoding="async" class="size-full wp-image-34058" src="https://thienmochuong.com/wp-content/uploads/2019/07/chung-nhan-tang-nguyen-thu-quoc-te.jpg" alt="Sản phẩm của Thiên Mộc Hương được chọn làm quà cho Hoàng Gia Nhật trong chương trình Chương trình Tàu Thanh niên Đông Nam Á - Nhật Bản." width="1536" height="1028" srcset="https://thienmochuong.com/wp-content/uploads/2019/07/chung-nhan-tang-nguyen-thu-quoc-te.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2019/07/chung-nhan-tang-nguyen-thu-quoc-te-510x341.jpg 510w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                            <figcaption id="caption-attachment-34058" class="wp-caption-text">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Thien Moc Huong 产品被选为东南亚 - 日本青少年船舶计划中送给日本皇室的礼物。</font></font>
                            </figcaption>
                          </figure>
                        </div>
                        <li>
                          <a href="#devvn_content_gcn">
                            <span class="icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5281_14433)">
                                  <path d="M18.6146 1.35156H1.38535C0.621509 1.35156 0 1.97307 0 2.73692V14.426C0 15.1898 0.621509 15.8113 1.38535 15.8113H11.432L11.1287 17.6614C11.0716 18.0096 11.1868 18.3251 11.4368 18.5051C11.6868 18.6851 12.0223 18.6948 12.3346 18.5302L14.5022 17.3893C14.5627 17.3583 14.7293 17.3583 14.7898 17.3893L16.9574 18.5302C17.1056 18.6082 17.2592 18.6471 17.4064 18.6471C17.5691 18.6471 17.724 18.5995 17.8552 18.505C18.1052 18.325 18.2204 18.0095 18.1634 17.6612L17.8601 15.8113H18.6147C19.3786 15.8113 20.0001 15.1898 20.0001 14.4259V2.73692C20 1.97299 19.3785 1.35156 18.6146 1.35156ZM14.646 13.4368C13.3148 13.4368 12.2316 12.3536 12.2316 11.0223C12.2316 9.691 13.3148 8.60781 14.646 8.60781C15.9773 8.60781 17.0605 9.691 17.0605 11.0223C17.0605 12.3536 15.9773 13.4368 14.646 13.4368ZM15.3429 16.3386C14.9391 16.1259 14.3529 16.1259 13.9492 16.3386L12.4167 17.1452L12.9039 14.1735C13.4206 14.4603 14.0145 14.6241 14.6461 14.6241C15.2778 14.6241 15.8716 14.4602 16.3883 14.1735L16.5782 15.332C16.5786 15.3339 16.5788 15.336 16.5792 15.3379L16.8755 17.1452L15.3429 16.3386ZM18.8126 14.426C18.8126 14.5332 18.7219 14.6239 18.6146 14.6239H17.6654L17.4486 13.3012C17.4477 13.2959 17.4463 13.2909 17.4452 13.2857C17.9467 12.6668 18.248 11.8791 18.248 11.0223C18.248 9.03616 16.6322 7.42036 14.6461 7.42036C12.66 7.42036 11.0442 9.03616 11.0442 11.0223C11.0442 11.8791 11.3455 12.6667 11.847 13.2857C11.846 13.2909 11.8445 13.2959 11.8437 13.3011L11.6267 14.6249C11.62 14.6247 11.6136 14.6239 11.607 14.6239H1.38535C1.27809 14.6239 1.18745 14.5332 1.18745 14.426V2.73692C1.18745 2.62965 1.27809 2.53901 1.38535 2.53901H18.6146C18.7219 2.53901 18.8126 2.62965 18.8126 2.73692V14.426Z" fill="black"></path>
                                  <path d="M16.5148 4.76953H3.0571C2.72913 4.76953 2.46338 5.03528 2.46338 5.36325C2.46338 5.69123 2.72913 5.95698 3.0571 5.95698H16.5148C16.8428 5.95698 17.1086 5.69123 17.1086 5.36325C17.1086 5.03528 16.8428 4.76953 16.5148 4.76953Z" fill="black"></path>
                                  <path d="M8.75684 7.98828H3.0571C2.72913 7.98828 2.46338 8.25403 2.46338 8.582C2.46338 8.90997 2.72913 9.17572 3.0571 9.17572H8.75684C9.08481 9.17572 9.35056 8.90997 9.35056 8.582C9.35056 8.25403 9.08481 7.98828 8.75684 7.98828Z" fill="black"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_5281_14433">
                                    <rect width="20" height="20" fill="white"></rect>
                                  </clipPath>
                                </defs>
                              </svg>
                            </span>
                            <span>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">认证</font></font>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="https://thienmochuong.com/doi-tra-va-bao-hanh">
                            <span class="icon">
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 0.65625L1.90967 2.54625V11.1989C1.90967 13.6763 3.32389 16.0289 5.69623 17.4923L10.5 20.4455L15.3037 17.4923C17.6761 16.0289 19.0903 13.6763 19.0903 11.1989V2.54625L10.5 0.65625ZM17.7778 11.1989C17.7778 13.2169 16.5965 15.1364 14.6114 16.3767L10.5 18.9164L6.38857 16.3767C4.41982 15.1528 3.22217 13.2169 3.22217 11.1989V3.60938L10.5 1.98516L17.7778 3.60938V11.1989Z" fill="black"></path>
                                <path d="M6.63465 9.33L5.70605 10.2586L8.94465 13.4972L15.2939 7.15125L14.3653 6.22266L8.94465 11.6433L6.63465 9.33Z" fill="black"></path>
                              </svg>
                            </span>
                            <span>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">保修政策</font></font>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="devvn_after_product_thumbnail_image_1">
                      <p>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">支持卡支付</font></font>
                        <img decoding="async" class="alignnone size-full wp-image-33765 entered lazyloaded" src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-2962.png" alt="" width="187" height="35" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-2962.png" data-ll-status="loaded">
                        <noscript>
                          <img decoding="async" class="alignnone size-full wp-image-33765" src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-2962.png" alt="" width="187" height="35" /></noscript>
                      </p>
                    </div>
                  </div>
                  <div class="product-info summary col-fit col entry-summary product-summary">
                    <h1 class="product-title product_title entry-title">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">108 单珠沉香手链 – Tram Toc 越南</font></font>
                    </h1>
                    <div class="devvn_after_title_product">
                      <div class="devvn_single_rating">
                        <div class="woocommerce-product-rating devvn_single_rating">
                          <span class="devvn_average_rate">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">5.0</font></font>
                          </span>
                          <div class="star-rating" role="img" aria-label="评分 5.0（满分 5 星）">
                            <span style="width:100%">
                              <strong class="rating">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">5.0</font></font>
                              </strong>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">分（满分 5 分）</font></font>
                              <span class="rating">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">二十九</font></font>
                              </span>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">评价</font></font>
                            </span>
                          </div>
                          <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">(</font></font>
                            <span class="count">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">29 条</font></font>
                            </span>
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">评论)</font></font>
                          </a>
                          <span class="devvn_sold">
                            <span class="count">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1977年</font></font>
                            </span>
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">售出</font></font>
                          </span>
                        </div>
                      </div>
                      <div class="devvn_stock">
                        <span>
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">状态：</font></font>
                        </span>
                        <strong>
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">有存货</font></font>
                        </strong>
                      </div>
                    </div>
                    <div class="price-wrapper">
                      <p class="price product-page-price ">
                        <ins class="highlight">
                          <span class="woocommerce-Price-amount amount">
                            <bdi>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">2,490,000&nbsp;</font></font>
                              <span class="woocommerce-Price-currencySymbol">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">₫</font></font>
                              </span>
                            </bdi>
                          </span>
                        </ins>
                      </p>
                    </div>
                    <div class="product-short-description">
                      <p>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">108颗越南沉香珠手链适合男士和女士，可帮助消除108种烦恼。手链带来好运和财富，同时散发出令人惊叹的美丽和自信。</font></font>
                      </p>
                    </div>
                    <form class="variations_form cart ux-swatches-js-attached" action="https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat" method="post" enctype="multipart/form-data" data-product_id="13832" data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_kich-thuoc&quot;:&quot;7mm&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:2490000,&quot;display_regular_price&quot;:2490000,&quot;image&quot;:{&quot;title&quot;:&quot;108-hat-tron-tram-toc-vn&quot;,&quot;caption&quot;:&quot;V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng 108 h\u1ea1t tr\u01a1n Thi\u00ean M\u1ed9c H\u01b0\u01a1ng&quot;,&quot;url&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg&quot;,&quot;alt&quot;:&quot;V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng 108 h\u1ea1t tr\u01a1n - Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam&quot;,&quot;src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-510x510.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg 2000w&quot;,&quot;sizes&quot;:&quot;(max-width: 510px) 100vw, 510px&quot;,&quot;full_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg&quot;,&quot;full_src_w&quot;:2000,&quot;full_src_h&quot;:2000,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-280x280.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:280,&quot;gallery_thumbnail_src_h&quot;:280,&quot;thumb_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-400x400.jpg&quot;,&quot;thumb_src_w&quot;:400,&quot;thumb_src_h&quot;:400,&quot;src_w&quot;:510,&quot;src_h&quot;:510},&quot;image_id&quot;:44548,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:52877,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;rank_math_gtin&quot;:&quot;GTIN: &quot;},{&quot;attributes&quot;:{&quot;attribute_pa_kich-thuoc&quot;:&quot;6mm&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:2490000,&quot;display_regular_price&quot;:2490000,&quot;image&quot;:{&quot;title&quot;:&quot;108-hat-tron-tram-toc-vn&quot;,&quot;caption&quot;:&quot;V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng 108 h\u1ea1t tr\u01a1n Thi\u00ean M\u1ed9c H\u01b0\u01a1ng&quot;,&quot;url&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg&quot;,&quot;alt&quot;:&quot;V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng 108 h\u1ea1t tr\u01a1n - Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam&quot;,&quot;src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-510x510.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg 2000w&quot;,&quot;sizes&quot;:&quot;(max-width: 510px) 100vw, 510px&quot;,&quot;full_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg&quot;,&quot;full_src_w&quot;:2000,&quot;full_src_h&quot;:2000,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-280x280.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:280,&quot;gallery_thumbnail_src_h&quot;:280,&quot;thumb_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-400x400.jpg&quot;,&quot;thumb_src_w&quot;:400,&quot;thumb_src_h&quot;:400,&quot;src_w&quot;:510,&quot;src_h&quot;:510},&quot;image_id&quot;:44548,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;V108000035-2&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:13833,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;rank_math_gtin&quot;:&quot;GTIN: &quot;},{&quot;attributes&quot;:{&quot;attribute_pa_kich-thuoc&quot;:&quot;8mm&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:2490000,&quot;display_regular_price&quot;:2490000,&quot;image&quot;:{&quot;title&quot;:&quot;108-hat-tron-tram-toc-vn&quot;,&quot;caption&quot;:&quot;V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng 108 h\u1ea1t tr\u01a1n Thi\u00ean M\u1ed9c H\u01b0\u01a1ng&quot;,&quot;url&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg&quot;,&quot;alt&quot;:&quot;V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng 108 h\u1ea1t tr\u01a1n - Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam&quot;,&quot;src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-510x510.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg 2000w&quot;,&quot;sizes&quot;:&quot;(max-width: 510px) 100vw, 510px&quot;,&quot;full_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg&quot;,&quot;full_src_w&quot;:2000,&quot;full_src_h&quot;:2000,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-280x280.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:280,&quot;gallery_thumbnail_src_h&quot;:280,&quot;thumb_src&quot;:&quot;https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n-400x400.jpg&quot;,&quot;thumb_src_w&quot;:400,&quot;thumb_src_h&quot;:400,&quot;src_w&quot;:510,&quot;src_h&quot;:510},&quot;image_id&quot;:44548,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;V108000036-2&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:13835,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;,&quot;rank_math_gtin&quot;:&quot;GTIN: &quot;}]"
                    current-image="44548">
                      <table class="variations" cellspacing="0">
                        <tbody>
                          <tr>
                            <th class="label">
                              <label for="pa_kich-thuoc">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">粒度</font></font>
                              </label>
                            </th>
                            <td class="value">
                              <div class="devvn_inner_value">
                                <div class="variation-selector variation-select-ux_label hidden">
                                  <select id="pa_kich-thuoc" class="" name="attribute_pa_kich-thuoc" data-attribute_name="attribute_pa_kich-thuoc" data-show_option_none="yes">
                                    <option value="">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">选择一个选项</font></font>
                                    </option>
                                    <option value="6mm" selected="selected" class="attached enabled">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">6 毫米</font></font>
                                    </option>
                                    <option value="7mm" class="attached enabled">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">7 毫米</font></font>
                                    </option>
                                    <option value="8mm" class="attached enabled">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">8 毫米</font></font>
                                    </option>
                                  </select>
                                </div>
                                <div class="ux-swatches ux-swatches-attribute-ux_label" data-attribute_name="attribute_pa_kich-thuoc">
                                  <div class="ux-swatch tooltip ux-swatch--label selected" data-value="6mm" data-name="6mm" title="6 毫米">
                                    <span class="ux-swatch__text">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">6 毫米</font></font>
                                    </span>
                                  </div>
                                  <div class="ux-swatch tooltip ux-swatch--label tooltipstered" data-value="7mm" data-name="7mm">
                                    <span class="ux-swatch__text">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">7 毫米</font></font>
                                    </span>
                                  </div>
                                  <div class="ux-swatch tooltip ux-swatch--label tooltipstered" data-value="8mm" data-name="8mm">
                                    <span class="ux-swatch__text">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">8 毫米</font></font>
                                    </span>
                                  </div>
                                </div>
                                <a href="#devvn_popup_do_size" class="devvn_button_do_size hide-for-medium">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">测量手的大小</font></font>
                                </a>
                                <a class="reset_variations" href="#">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">擦除</font></font>
                                </a>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="single_variation_wrap">
                        <div class="woocommerce-variation single_variation">
                          <div class="woocommerce-variation-description"></div>
                          <div class="woocommerce-variation-price"></div>
                          <div class="woocommerce-variation-availability"></div>
                        </div>
                        <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-enabled">
                          <div class="devvn_box_quantity">
                            <div class="ux-quantity quantity buttons_added">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                  <input type="button" value="-" class="ux-quantity__button ux-quantity__button--minus button minus is-form"></font>
                              </font>
                              <label class="screen-reader-text" for="quantity_67b979c6498d8">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">数量</font></font>
                              </label>
                              <input type="number" id="quantity_67b979c6498d8" class="input-text qty text" name="quantity" value="1" aria-label="产品数量" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                  <input type="button" value="+" class="ux-quantity__button ux-quantity__button--plus button plus is-form"></font>
                              </font>
                            </div>
                            <div id="devvn_popup_do_size" class="lightbox-by-id lightbox-content mfp-hide lightbox-white " style="max-width:800px ;padding:10px">
                              <p>
                                <img decoding="async" class="alignnone size-full wp-image-33921" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E" alt="" width="600" height="600" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983.jpg 600w, https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983-510x510.jpg 510w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983.jpg">
                                <noscript>
                                  <img decoding="async" class="alignnone size-full wp-image-33921" src="https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983.jpg" alt="" width="600" height="600" srcset="https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983.jpg 600w, https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/06/z3479442566091_6df7f85d02a1d5bdd61ccf84e588a983-510x510.jpg 510w" sizes="(max-width: 600px) 100vw, 600px" /></noscript>
                              </p>
                            </div>
                            <a href="#devvn_popup_do_size" class="devvn_button_do_size hide-for-large">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">测量手的大小</font></font>
                            </a>
                            <div class="devvn_product_gift">
                              <input type="checkbox" name="product_gift" value="1" id="product_gift">
                              <label for="product_gift">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">作为礼物</font></font>
                              </label>
                            </div>
                            <div class="devvn_field_not_gift" style="display: none">
                              <textarea name="product_gift_content" id="product_gift_content" cols="30" rows="10" placeholder="为您的礼物添加备注（可选） - 最多 250 个字符" maxlength="250"></textarea>
                            </div>
                          </div>
                          <div class="devvn_box_form_cart_actions">
                            <button type="button" class="button buy_now_button">
                              <strong>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">立即购买</font></font>
                              </strong>
                              <!-- <small></small> --></button>
                            <input type="hidden" name="is_buy_now" class="is_buy_now" value="0" autocomplete="off">
                            <button type="submit" class="single_add_to_cart_button button alt">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">添加到购物车</font></font>
                            </button>
                            <input type="hidden" name="gtm4wp_product_data" value="{&quot;internal_id&quot;:13832,&quot;item_id&quot;:13832,&quot;item_name&quot;:&quot;V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng 108 H\u1ea1t \u0110\u01a1n - Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam&quot;,&quot;sku&quot;:13832,&quot;price&quot;:2490000,&quot;stocklevel&quot;:null,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;&quot;,&quot;id&quot;:13832}">
                            <input type="hidden" name="add-to-cart" value="13832">
                            <input type="hidden" name="product_id" value="13832">
                            <input type="hidden" name="variation_id" class="variation_id" value="13833"></div>
                        </div>
                        <div id="form_call_phone_to_me">
                          <div class="wpcf7 js" id="wpcf7-f33944-p13832-o1" lang="vi" dir="ltr">
                            <div class="screen-reader-response">
                              <p role="status" aria-live="polite" aria-atomic="true"></p>
                              <ul></ul>
                            </div>
                            <form action="/san-pham/vong-tay-tram-huong-108-hat#wpcf7-f33944-p13832-o1" method="post" class="wpcf7-form init" aria-label="联系表格" novalidate="novalidate" data-status="init">
                              <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="33944">
                                <input type="hidden" name="_wpcf7_version" value="5.9.5">
                                <input type="hidden" name="_wpcf7_locale" value="vi">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f33944-p13832-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="13832">
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                <input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA4D51BsdnJhGZOMqK4L_re2HzClUYJh0QEkjS1DId5OwJjdUozlpNB1wh1lIhjMbaYyh6xqtRbmFdNLpluUQzYYfVUGShqWMFswbi-dXNK5lQRp3BNkCsVIhS0dskObWhlpiuacNXX-CHiQ87Xh26a9HU3__vg2BEOr6qEo_gj4QN3Wem7Whm0scdiTUbvrtcnanNr_Zfn58vYVr5_zYKoAfPD3WtsiW5Rn1-hPIr_ndoPGcaAHmVMaBBoJwuQKjlBVgO3w8L0MRLDjU-rzA7bF6cMKYIgxVCgpR84bPxY9nP5wRlCH2brVIDr7x27ACKNzA0cwZBq-Y5BPFuUqh7PcNWohoZHm3cRULolYi_B6Z6op-78yrcGBWI6oRLPWbWD4_lweGrWgZwj_xTHeJ94j6MFjYRG_jXRE3OU_yILx_-PIlv6lFNdJbIU_SdUMvsv_7DOM_pUaN8ynpMV6Viinn836VWPC3du9s6l-R1WddyBylrqFgUbTJyDTEJBL_wIefNWdTVrH8YXTDXsEtB8vHewsJkM7P0tI5Knv8DAyRWIAoHxKC3OnfZ_nChHV7mq1mEM5PYBzOKNt20balYZQk6i2cbhtBTuN8bq-_KR8qiDlfBisqXIFF_9kxAjIb_S0YM2PJE17cj4UcUANRDhPV3FiHW1oGNZdNGEE4KYZOhe3D3Xl8GLBjk2RBUuxIxrd-llQ1HAFTv-ZtXTB3frGEVR70aq0odhnv79oZovRCUvfoCM5IYj_NjPogp0foSXO08ao1h1UU2YUaEY6DN97NHkq11haF9sfG60VkOY5-zYXGHNf3oAJPke3fLKTpEzyj5Edhikym9M_ZA6RHuKlZuCkpSs7Ismh_wPKTSfUECPfGpeiy6gvAvnuHoPH8yy2cg9gWFWXd9kNoFMDaAew9SfDug"></div>
                              <div class="devvn_input_groups">
                                <span class="wpcf7-form-control-wrap" data-name="dev_phone">
                                  <input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel dev_phone" aria-required="true" aria-invalid="false" placeholder="输入电话号码以请求回电" value="" type="tel" name="dev_phone"></span>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">
                                    <input class="wpcf7-form-control wpcf7-submit has-spinner dev_submit" type="submit" value="发送">
                                    <span class="wpcf7-spinner"></span>
                                  </font>
                                </font>
                              </div>
                              <input type="hidden" class="wpcf7-pum" value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}">
                              <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="devvn_sau_nut_mua_hang">
                      <p>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">订购请拨打</font></font>
                        <a href="tel:0933348368">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">0933.348.368</font></font>
                        </a>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">（上午 8 点至晚上 10 点）</font></font>
                      </p>
                    </div>
                  </div>
                  <div id="product-sidebar" class="mfp-hide">
                    <div class="sidebar-inner">
                      <aside class="widget widget-upsell">
                        <h3 class="widget-title shop-sidebar">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">你可能还喜欢…</font></font>
                          <div class="is-divider small"></div>
                        </h3>
                        <!-- Upsell List style -->
                        <ul class="product_list_widget">
                          <li>
                            <a href="https://thienmochuong.com/san-pham/charm-bac-925-charm-phuc-gia-an-2" title="925 银饰品 - Phuc gia an charm">
                              <img width="280" height="280" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20280%20280'%3E%3C/svg%3E" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="s925 银饰品" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/02/Vòng-tay-trầm-hương-Thiên-Mộc-Hương-143-800x800-1.jpg">
                              <noscript>
                                <img width="280" height="280" src="https://thienmochuong.com/wp-content/uploads/2021/02/Vòng-tay-trầm-hương-Thiên-Mộc-Hương-143-800x800-1.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="charm bạc s925" decoding="async" /></noscript>
                              <span class="product-title">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">925 银饰品 - Phuc gia an charm</font></font>
                              </span>
                            </a>
                            <span class="woocommerce-Price-amount amount">
                              <bdi>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">300,000&nbsp;</font></font>
                                <span class="woocommerce-Price-currencySymbol">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">越南盾</font></font>
                                </span>
                              </bdi>
                            </span>
                          </li>
                          <li>
                            <a href="https://thienmochuong.com/san-pham/charm-bac-925-charm-ty-huu" title="925 银饰品 - 貔貅饰品">
                              <img width="280" height="280" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20280%20280'%3E%3C/svg%3E" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="s925 银饰品" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/02/Vòng-tay-trầm-hương-Thiên-Mộc-Hương-123-800x800-1.jpg">
                              <noscript>
                                <img width="280" height="280" src="https://thienmochuong.com/wp-content/uploads/2021/02/Vòng-tay-trầm-hương-Thiên-Mộc-Hương-123-800x800-1.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="charm bạc s925" decoding="async" /></noscript>
                              <span class="product-title">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">925 银饰品 - 貔貅饰品</font></font>
                              </span>
                            </a>
                            <span class="woocommerce-Price-amount amount">
                              <bdi>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">500,000&nbsp;</font></font>
                                <span class="woocommerce-Price-currencySymbol">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">越南盾</font></font>
                                </span>
                              </bdi>
                            </span>
                          </li>
                          <li>
                            <a href="https://thienmochuong.com/san-pham/charm-bac-925-charm-banh-xe-phap-luan" title="925 银饰品 - 法轮饰品">
                              <img width="280" height="280" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20280%20280'%3E%3C/svg%3E" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="s925 银饰品" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/02/Vòng-tay-trầm-hương-Thiên-Mộc-Hương-124-800x800-1.jpg">
                              <noscript>
                                <img width="280" height="280" src="https://thienmochuong.com/wp-content/uploads/2021/02/Vòng-tay-trầm-hương-Thiên-Mộc-Hương-124-800x800-1.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="charm bạc s925" decoding="async" /></noscript>
                              <span class="product-title">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">925 银饰品 - 法轮饰品</font></font>
                              </span>
                            </a>
                            <span class="woocommerce-Price-amount amount">
                              <bdi>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">300,000&nbsp;</font></font>
                                <span class="woocommerce-Price-currencySymbol">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">越南盾</font></font>
                                </span>
                              </bdi>
                            </span>
                          </li>
                        </ul>
                      </aside>
                      <aside id="block_widget-6" class="widget block_widget">
                        <div class="row row-box-shadow-1 row-box-shadow-2-hover" id="row-1802432606">
                          <div id="col-157473964" class="col small-12 large-12 col-hover-focus">
                            <div class="col-inner">
                              <div class="icon-box featured-box icon-box-left text-left is-small">
                                <div class="icon-box-img" style="width: 20px">
                                  <div class="icon">
                                    <div class="icon-inner"></div>
                                  </div>
                                </div>
                                <div class="icon-box-text last-reset">
                                  <h5>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">免费货到付款</font></font>
                                  </h5>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">货到付款</font></font>
                                  <div class="is-divider divider clearfix" style="margin-top:10px;margin-bottom:10px;max-width:180px;height:1px;"></div>
                                </div>
                              </div>
                              <div class="icon-box featured-box icon-box-left text-left is-small">
                                <div class="icon-box-img" style="width: 20px">
                                  <div class="icon">
                                    <div class="icon-inner"></div>
                                  </div>
                                </div>
                                <div class="icon-box-text last-reset">
                                  <h5>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">一流的保修和售后</font></font>
                                  </h5>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">30 天内可享受一对一换货。终身表带更换和抛光。</font></font>
                                  <div class="is-divider divider clearfix" style="margin-top:10px;margin-bottom:10px;max-width:180px;height:1px;"></div>
                                </div>
                              </div>
                              <div class="icon-box featured-box icon-box-left text-left is-small">
                                <div class="icon-box-img" style="width: 20px">
                                  <div class="icon">
                                    <div class="icon-inner"></div>
                                  </div>
                                </div>
                                <div class="icon-box-text last-reset">
                                  <h5>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">值得信赖的品牌</font></font>
                                  </h5>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">35 年制造经验 如发现假货可退款</font></font>
                                  <div class="is-divider divider clearfix" style="margin-top:10px;margin-bottom:10px;max-width:180px;height:1px;"></div>
                                </div>
                              </div>
                              <div class="icon-box featured-box icon-box-left text-left is-small">
                                <div class="icon-box-img" style="width: 20px">
                                  <div class="icon">
                                    <div class="icon-inner"></div>
                                  </div>
                                </div>
                                <div class="icon-box-text last-reset">
                                  <h5>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">在线订购</font></font>
                                  </h5>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">立即致电</font></font>
                                  <strong>
                                    <span style="font-size: 130%; color: #f8b461;">
                                      <a style="color: #f8b461;" href="tel:0933348368">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">0933.348.368</font></font>
                                      </a>
                                    </span>
                                  </strong>
                                </div>
                              </div>
                            </div>
                            <style>#col-157473964 > .col-inner { margin: 20px 0px 0px 0px; }</style></div>
                          <style>#row-1802432606 > .col > .col-inner { padding: 20px 10px 20px 15px; background-color: rgb(233, 233, 233); }</style></div>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
              <section class="section devvn_box_product_services" id="section_317019291">
                <div class="bg section-bg fill bg-fill bg-loaded"></div>
                <div class="section-content relative">
                  <div class="row row-collapse row-solid" id="row-2009249716">
                    <div id="col-157307645" class="col medium-6 small-6 large-3">
                      <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                          <div class="icon-box-img" style="width: 33px">
                            <div class="icon">
                              <div class="icon-inner">
                                <img width="33" height="33" src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-1428.png" class="attachment-medium size-medium entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-1428.png" data-ll-status="loaded">
                                <noscript>
                                  <img width="33" height="33" src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-1428.png" class="attachment-medium size-medium" alt="" decoding="async" /></noscript>
                              </div>
                            </div>
                          </div>
                          <div class="icon-box-text last-reset">
                            <p>
                              <strong>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">1 对 1 交换</font></font>
                              </strong>
                            </p>
                            <p>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">30天后</font></font>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="col-215875273" class="col medium-6 small-6 large-3">
                      <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                          <div class="icon-box-img" style="width: 33px">
                            <div class="icon">
                              <div class="icon-inner">
                                <img width="33" height="34" src="https://thienmochuong.com/wp-content/uploads/2022/06/Group.png" class="attachment-medium size-medium entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/Group.png" data-ll-status="loaded">
                                <noscript>
                                  <img width="33" height="34" src="https://thienmochuong.com/wp-content/uploads/2022/06/Group.png" class="attachment-medium size-medium" alt="" decoding="async" /></noscript>
                              </div>
                            </div>
                          </div>
                          <div class="icon-box-text last-reset">
                            <p>
                              <strong>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">100％值得信赖</font></font>
                              </strong>
                            </p>
                            <p>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">天然沉香</font></font>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="col-1860141490" class="col medium-6 small-6 large-3">
                      <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                          <div class="icon-box-img" style="width: 33px">
                            <div class="icon">
                              <div class="icon-inner">
                                <img width="33" height="31" src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-1430.png" class="attachment-medium size-medium entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-1430.png" data-ll-status="loaded">
                                <noscript>
                                  <img width="33" height="31" src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-1430.png" class="attachment-medium size-medium" alt="" decoding="async" /></noscript>
                              </div>
                            </div>
                          </div>
                          <div class="icon-box-text last-reset">
                            <p>
                              <strong>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">快递</font></font>
                              </strong>
                            </p>
                            <p>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">胡志明市 – HN 2 小时内</font></font>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="col-1536603845" class="col medium-6 small-6 large-3">
                      <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                          <div class="icon-box-img" style="width: 33px">
                            <div class="icon">
                              <div class="icon-inner">
                                <img width="33" height="32" src="https://thienmochuong.com/wp-content/uploads/2022/06/security-on-2.png" class="attachment-medium size-medium entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/security-on-2.png" data-ll-status="loaded">
                                <noscript>
                                  <img width="33" height="32" src="https://thienmochuong.com/wp-content/uploads/2022/06/security-on-2.png" class="attachment-medium size-medium" alt="" decoding="async" /></noscript>
                              </div>
                            </div>
                          </div>
                          <div class="icon-box-text last-reset">
                            <p>
                              <strong>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">终身保修</font></font>
                              </strong>
                            </p>
                            <p>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">更换抛光丝</font></font>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style>#section_317019291 { padding-top: 30px; padding-bottom: 30px; }</style></section>
              <div class="product-footer">
                <div class="container">
                  <div class="row" id="row-855038171">
                    <div id="col-2130526039" class="col small-12 large-12">
                      <div class="col-inner">
                        <div class="ml-embedded" data-form="ly1MVu">
                          <style type="text/css">@import url("https://assets.mlcdn.com/fonts.css?version=1699449");</style>
                          <style type="text/css">/* LOADER */ .ml-form-embedSubmitLoad { display: inline-block; width: 20px; height: 20px; } .g-recaptcha { transform: scale(1); -webkit-transform: scale(1); transform-origin: 0 0; -webkit-transform-origin: 0 0; height: ; } .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0; } .ml-form-embedSubmitLoad:after { content: " "; display: block; width: 11px; height: 11px; margin: 1px; border-radius: 50%; border: 4px solid #fff; border-color: #ffffff #ffffff #ffffff transparent; animation: ml-form-embedSubmitLoad 1.2s linear infinite; } @keyframes ml-form-embedSubmitLoad { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } } #mlb2-9138854.ml-form-embedContainer { box-sizing: border-box; display: table; margin: 0 auto; position: static; width: 100% !important; } #mlb2-9138854.ml-form-embedContainer h4, #mlb2-9138854.ml-form-embedContainer p, #mlb2-9138854.ml-form-embedContainer span, #mlb2-9138854.ml-form-embedContainer button { text-transform: none !important; letter-spacing: normal !important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper { background-color: #f6f6f6; border-width: 3px; border-color: #FAB55A; border-radius: 4px; border-style: solid; box-sizing: border-box; display: inline-block !important; margin: 0; padding: 0; position: relative; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper.embedPopup, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper.embedDefault { width: 550px; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper.embedForm { max-width: 550px; width: 100%; } #mlb2-9138854.ml-form-embedContainer .ml-form-align-left { text-align: left; } #mlb2-9138854.ml-form-embedContainer .ml-form-align-center { text-align: center; } #mlb2-9138854.ml-form-embedContainer .ml-form-align-default { display: table-cell !important; vertical-align: middle !important; text-align: center !important; } #mlb2-9138854.ml-form-embedContainer .ml-form-align-right { text-align: right; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedHeader img { border-top-left-radius: 4px; border-top-right-radius: 4px; height: auto; margin: 0 auto !important; max-width: 100%; width: undefinedpx; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody { padding: 20px 20px 0 20px; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody.ml-form-embedBodyHorizontal { padding-bottom: 0; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent { text-align: left; margin: 0 0 20px 0; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent h4, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent h4 { color: #fab55a; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 22px; font-weight: 700; margin: 0 0 10px 0; text-align: center; word-break: break-word; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p { color: #000000; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 16px; font-weight: 400; line-height: 22px; margin: 0 0 10px 0; text-align: left; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ul, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ul, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol { color: #000000; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 16px; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol { list-style-type: lower-alpha; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol ol, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol ol { list-style-type: lower-roman; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p a, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p a { color: #000000; text-decoration: underline; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group { text-align: left!important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group label { margin-bottom: 5px; color: #333333; font-size: 14px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: bold; font-style: normal; text-decoration: none;; display: inline-block; line-height: 20px; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p:last-child, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p:last-child { margin: 0; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody form { margin: 0; width: 100%; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow { margin: 0 0 20px 0; width: 100%; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow { float: left; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent.horozintalForm { margin: 0; padding: 0 0 20px 0; width: 100%; height: auto; float: left; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow { margin: 0 0 10px 0; width: 100%; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-last-item { margin: 0; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-formfieldHorizintal { margin: 0; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input { background-color: #ffffff !important; color: #333333 !important; border-color: #cccccc; border-radius: 4px !important; border-style: solid !important; border-width: 1px !important; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 14px !important; height: auto; line-height:
                            21px !important; margin-bottom: 0; margin-top: 0; margin-left: 0; margin-right: 0; padding: 10px 10px !important; width: 100% !important; box-sizing: border-box !important; max-width: 100% !important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-webkit-input-placeholder, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-webkit-input-placeholder { color: #333333; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-moz-placeholder, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-moz-placeholder { color: #333333; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-ms-input-placeholder, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-ms-input-placeholder { color: #333333; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-moz-placeholder, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-moz-placeholder { color: #333333; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow textarea, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow textarea { background-color: #ffffff !important; color: #333333 !important; border-color: #cccccc; border-radius: 4px !important; border-style: solid !important; border-width: 1px !important; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 14px !important; height: auto; line-height: 21px !important; margin-bottom: 0; margin-top: 0; padding: 10px 10px !important; width: 100% !important; box-sizing: border-box !important; max-width: 100% !important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before { border-color: #cccccc!important; background-color: #ffffff!important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input.custom-control-input[type="checkbox"]{ box-sizing: border-box; padding: 0; position: absolute; z-index: -1; opacity: 0; margin-top: 5px; margin-left: -1.5rem; overflow: visible; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before { border-radius: 4px!important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::after { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e"); } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input:checked~.custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::before
                            { border-color: #000000!important; background-color: #000000!important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::after { top: 2px; box-sizing: border-box; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after { top: 0px!important; box-sizing: border-box!important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after { top: 0px!important; box-sizing: border-box!important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after { top: 0px!important; box-sizing: border-box!important; position: absolute; left: -1.5rem; display: block; width: 1rem; height: 1rem; content: ""; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before { top: 0px!important; box-sizing: border-box!important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::before { position: absolute; top: 4px; left: -1.5rem; display: block; width: 16px; height: 16px; pointer-events: none; content: ""; background-color: #ffffff; border: #adb5bd solid 1px; border-radius: 50%; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::after { position: absolute; top: 2px!important; left: -1.5rem; display: block; width: 1rem; height: 1rem; content: ""; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before { position: absolute; top: 4px; left: -1.5rem; display: block; width: 16px; height: 16px; pointer-events: none; content: ""; background-color: #ffffff; border: #adb5bd solid 1px; border-radius: 50%; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after { position: absolute; top: 0px!important; left: -1.5rem; display: block; width: 1rem; height: 1rem; content: ""; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after { position: absolute; top: 0px!important; left: -1.5rem; display: block; width: 1rem; height: 1rem; content: ""; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-radio .custom-control-label::after { background: no-repeat 50%/50% 50%; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-checkbox .custom-control-label::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after { background: no-repeat 50%/50% 50%; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-control, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-control { position: relative; display: block; min-height: 1.5rem; padding-left: 1.5rem; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input { position: absolute; z-index: -1; opacity: 0; box-sizing: border-box; padding: 0; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label { color: #000000; font-size: 12px!important; font-family: 'Open Sans', Arial, Helvetica, sans-serif; line-height: 22px; margin-bottom: 0; position: relative; vertical-align: top; font-style: normal; font-weight: 700; } #mlb2-9138854.ml-form-embedContainer
                            .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-select, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-select { background-color: #ffffff !important; color: #333333 !important; border-color: #cccccc; border-radius: 4px !important; border-style: solid !important; border-width: 1px !important; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 14px !important; line-height: 20px !important; margin-bottom: 0; margin-top: 0; padding: 10px 28px 10px 12px !important; width: 100% !important; box-sizing: border-box !important; max-width: 100% !important; height: auto; display: inline-block; vertical-align: middle; background: url('https://assets.mlcdn.com/ml/images/default/dropdown.svg') no-repeat right .75rem center/8px 10px; -webkit-appearance: none; -moz-appearance: none; appearance: none; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow { height: auto; width: 100%; float: left; } .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal { width: 70%; float: left; } .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal { width: 30%; float: left; } .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal.labelsOn { padding-top: 25px; } .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields { box-sizing: border-box; float: left; padding-right: 10px; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input { background-color: #ffffff; color: #333333; border-color: #cccccc; border-radius: 4px; border-style: solid; border-width: 1px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; margin-bottom: 0; margin-top: 0; padding: 10px 10px; width: 100%; box-sizing: border-box; overflow-y: initial; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button { background-color: #fab55a !important; border-color: #fab55a; border-style: solid; border-width: 1px; border-radius: 4px; box-shadow: none; color: #ffffff !important; cursor: pointer; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 18px !important; font-weight: 700; line-height: 20px; margin: 0 !important; padding: 10px !important; width: 100%; height: auto; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button:hover { background-color: #333333 !important; border-color: #333333 !important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type="checkbox"] { box-sizing: border-box; padding: 0; position: absolute; z-index: -1; opacity: 0; margin-top: 5px; margin-left: -1.5rem; overflow: visible; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description { color: #000000; display: block; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 12px; text-align: left; margin-bottom: 0; position: relative; vertical-align: top; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label { font-weight: normal; margin: 0; padding: 0; position: relative; display: block; min-height: 24px; padding-left: 24px; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label a { color: #000000; text-decoration: underline; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p { color: #000000 !important; font-family: 'Open Sans', Arial, Helvetica, sans-serif !important; font-size: 12px !important; font-weight: normal !important; line-height: 18px !important; padding: 0 !important; margin: 0 5px 0 0 !important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p:last-child { margin: 0; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit { margin: 0 0 20px 0; float: left; width: 100%; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button { background-color: #fab55a !important; border: none !important; border-radius: 4px !important; box-shadow: none !important; color: #ffffff !important; cursor: pointer; font-family: 'Open Sans', Arial, Helvetica, sans-serif !important; font-size: 18px !important; font-weight: 700 !important; line-height: 21px !important; height: auto; padding: 10px !important; width: 100% !important; box-sizing: border-box !important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button.loading { display: none; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button:hover { background-color: #333333 !important; } .ml-subscribe-close { width: 30px; height: 30px; background: url('https://assets.mlcdn.com/ml/images/default/modal_close.png') no-repeat; background-size: 30px; cursor: pointer; margin-top: -10px; margin-right: -10px; position: absolute; top: 0; right: 0; } .ml-error input, .ml-error textarea, .ml-error select { border-color: red!important; } .ml-error .custom-checkbox-radio-list { border: 1px solid red !important; border-radius: 4px; padding: 10px; } .ml-error .label-description, .ml-error .label-description p, .ml-error .label-description p a, .ml-error label:first-child { color: #ff0000 !important; } #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p, #mlb2-9138854.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p:first-letter { color: #ff0000 !important; } @media only screen and (max-width: 550px){ .ml-form-embedWrapper.embedDefault, .ml-form-embedWrapper.embedPopup { width: 100%!important; } .ml-form-formContent.horozintalForm { float: left!important; } .ml-form-formContent.horozintalForm .ml-form-horizontalRow { height: auto!important; width: 100%!important; float: left!important; } .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal { width: 100%!important; } .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal > div { padding-right: 0px!important; padding-bottom: 10px; } .ml-form-formContent.horozintalForm .ml-button-horizontal { width: 100%!important; } .ml-form-formContent.horozintalForm .ml-button-horizontal.labelsOn { padding-top: 0px!important; } }</style>
                          <div id="mlb2-9138854" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-9138854">
                            <div class="ml-form-align-center ">
                              <div class="ml-form-embedWrapper embedForm">
                                <div class="ml-form-embedBody ml-form-embedBodyDefault row-form">
                                  <div class="ml-form-embedContent" style=" ">
                                    <h4>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">为新朋友提供高达 150K 的折扣券</font></font>
                                    </h4>
                                    <p style="text-align: center;">
                                      <font style="vertical-align: inherit;">
                                        <strong>
                                          <font style="vertical-align: inherit;">立即获取优惠券在网站</font></strong>
                                        <font style="vertical-align: inherit;">上购买</font></font>
                                      <strong>
                                        <font style="vertical-align: inherit;"></font>
                                      </strong>
                                    </p>
                                    <p style="text-align: center;">
                                      <span style="color: rgb(220, 53, 69);">
                                        <strong>
                                          <font style="vertical-align: inherit;"></font>
                                        </strong>
                                      </span>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">您的订单可享受</font>
                                        <span style="color: rgb(220, 53, 69);">
                                          <strong>
                                            <font style="vertical-align: inherit;">高达 150,000 越南盾的折扣</font></strong>
                                        </span>
                                      </font>
                                    </p>
                                  </div>
                                  <form class="ml-block-form" action="https://assets.mailerlite.com/jsonp/454357/forms/104148549317428577/subscribe" data-code="" method="post" target="_blank">
                                    <div class="ml-form-formContent">
                                      <div class="ml-form-fieldRow ">
                                        <div class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                          <!-- input -->
                                          <input aria-label="电子邮件" aria-required="true" type="email" class="form-control" data-inputmask="" name="fields[email]" placeholder="电子邮件" autocomplete="email" aria-invalid="false">
                                          <!-- /input -->
                                          <!-- textarea -->
                                          <!-- /textarea -->
                                          <!-- select -->
                                          <!-- /select -->
                                          <!-- checkboxes -->
                                          <!-- /checkboxes -->
                                          <!-- radio -->
                                          <!-- /radio -->
                                          <!-- countries -->
                                          <!-- /countries --></div>
                                      </div>
                                      <div class="ml-form-fieldRow ml-last-item">
                                        <div class="ml-field-group ml-field-name ml-validate-required">
                                          <!-- input -->
                                          <input aria-label="姓名" aria-required="true" type="text" class="form-control" data-inputmask="" name="fields[name]" placeholder="姓名" autocomplete="given-name" aria-invalid="false">
                                          <!-- /input -->
                                          <!-- textarea -->
                                          <!-- /textarea -->
                                          <!-- select -->
                                          <!-- /select -->
                                          <!-- checkboxes -->
                                          <!-- /checkboxes -->
                                          <!-- radio -->
                                          <!-- /radio -->
                                          <!-- countries -->
                                          <!-- /countries --></div>
                                      </div>
                                    </div>
                                    <!-- Privacy policy -->
                                    <!-- /Privacy policy -->
                                    <input type="hidden" name="ml-submit" value="1" aria-invalid="false">
                                    <div class="ml-form-embedSubmit">
                                      <button type="submit" class="primary">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">立即注册</font></font>
                                      </button>
                                      <button disabled="disabled" style="display: none;" type="button" class="loading">
                                        <div class="ml-form-embedSubmitLoad"></div>
                                        <span class="sr-only">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">加载中...</font></font>
                                        </span>
                                      </button>
                                    </div>
                                    <input type="hidden" name="anticsrf" value="true" aria-invalid="false"></form>
                                </div>
                                <div class="ml-form-successBody row-success" style="display: none">
                                  <div class="ml-form-successContent">
                                    <h4>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">感谢您订阅</font></font>
                                    </h4>
                                    <p style="text-align: center;">
                                      <span style="color: rgb(220, 53, 69);">
                                        <strong>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">优惠券</font></font>
                                        </strong>
                                      </span>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">将尽快发送至您的电子邮箱。</font></font>
                                    </p>
                                    <p style="text-align: center;">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">（检查</font></font>
                                      <span style="color: rgb(220, 53, 69);">
                                        <strong>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">垃圾邮件和垃圾文件夹</font></font>
                                        </strong>
                                      </span>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">）</font></font>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-page-sections">
                    <div class="product-section devvn_tab_info_products">
                      <div class="row">
                        <div class="large-12 col pb-0 mb-0">
                          <div class="devvn_section_title test">
                            <h2 class="uppercase">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">产品信息</font></font>
                            </h2>
                          </div>
                        </div>
                        <div class="large-12 col pb-0 mb-0">
                          <div class="panel entry-content devvn_section_content">
                            <table>
                              <tbody>
                                <tr>
                                  <td class="label">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">材料</font></font>
                                  </td>
                                  <td class="value">
                                    <span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Trầm Tốc&quot;}" data-sheets-userformat="{&quot;2&quot;:1049149,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0,&quot;23&quot;:1}" data-sheets-hyperlink="https://thienmochuong.com/tram-toc-la-gi-nhung-dieu-can-biet-ve-tram-toc">
                                      <a class="in-cell-link" href="https://thienmochuong.com/tram-toc-la-gi-nhung-dieu-can-biet-ve-tram-toc" target="_blank" rel="noopener">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">速度</font></font>
                                      </a>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="label">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">来源</font></font>
                                  </td>
                                  <td class="value">
                                    <span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Việt Nam&quot;}" data-sheets-userformat="{&quot;2&quot;:1325693,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;9&quot;:0,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:431075},&quot;15&quot;:&quot;Roboto, sans-serif&quot;,&quot;16&quot;:11,&quot;21&quot;:1,&quot;23&quot;:1}" data-sheets-hyperlink="https://thienmochuong.com/tram-huong-viet-nam">
                                      <a class="in-cell-link" href="https://thienmochuong.com/tram-huong-viet-nam" target="_blank" rel="noopener">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">越南</font></font>
                                      </a>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="label">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">种子数量</font></font>
                                  </td>
                                  <td class="value">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">108 颗珠子：6 毫米、7 毫米、8 毫米</font></font>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="label">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">沮丧</font></font>
                                  </td>
                                  <td class="value">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">12 – 14 年</font></font>
                                    <a href="https://thienmochuong.com/y-nghia-so-nam-tich-tram-huong">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">的沉香</font></font>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="label">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">使用</font></font>
                                  </td>
                                  <td class="value">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">男士/女士，送给亲戚、朋友、同事的礼物。寓意好运、祝福</font></font>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-section devvn_description">
                      <div class="row">
                        <div class="large-12 col pb-0 mb-0">
                          <div class="devvn_section_title test">
                            <h2 class="uppercase">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">产品描述</font></font>
                            </h2>
                          </div>
                        </div>
                        <div class="large-12 col pb-0 mb-0">
                          <div class="panel entry-content devvn_section_content relative">
                            <div class="devvn_box_desc_inner" style="overflow: unset; height: auto;">
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">该产品采用取自自然环境的越南沉香木精制而成，未经人工触碰。特别是沉香的产地是河静森林，自然生长，因此手链的品质比市场上其他类型的手链好得多。该产品具有独特的深棕色和深而尖锐的漩涡纹路，有望为佩戴者带来极致的美感和多种用途。</font></font>
                              </p>
                              <figure id="attachment_65808" aria-describedby="caption-attachment-65808" style="width: 900px" class="wp-caption aligncenter">
                                <img decoding="async" class="wp-image-65808 size-full entered lazyloaded" src="https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1.jpg" alt="108颗沉香珠手链" width="900" height="600" title="108 单珠沉香手链 - Tram Toc 越南 15" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1.jpg 900w, https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1-510x340.jpg 510w" data-lazy-sizes="(max-width: 900px) 100vw, 900px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1.jpg" data-ll-status="loaded" sizes="(max-width: 900px) 100vw, 900px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1.jpg 900w, https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1-510x340.jpg 510w">
                                <noscript>
                                  <img decoding="async" class="wp-image-65808 size-full" src="https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1.jpg" alt="Vòng tay trầm hương 108 hạt" width="900" height="600" title="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam 15" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1.jpg 900w, https://thienmochuong.com/wp-content/uploads/2021/01/108_In-1-510x340.jpg 510w" sizes="(max-width: 900px) 100vw, 900px" /></noscript>
                                <figcaption id="caption-attachment-65808" class="wp-caption-text">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">108颗沉香珠手链</font></font>
                                </figcaption>
                              </figure>
                              <h3>
                                <strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">产品描述详情</font></font>
                                </strong>
                              </h3>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">数千年来，人们一直相信沉香珠是能带来繁荣并驱除黑暗邪灵的灵物。因此，有机会拥有108珠沉香手链的人，将会招来财富、好运，事业也会顺利、辉煌。这就是为什么商人、生意人或贸易商都会随身携带一串108颗沉香珠的原因。</font></font>
                              </p>
                              <figure id="attachment_44548" aria-describedby="caption-attachment-44548" style="width: 700px" class="wp-caption aligncenter">
                                <img decoding="async" class="wp-image-44548 entered lazyloaded" src="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg" alt="108 颗光滑珠子沉香手链 - Tram Toc 越南" width="700" height="700" title="108 单珠沉香手链 - Tram Toc 越南 16" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg 2000w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w" data-lazy-sizes="(max-width: 700px) 100vw, 700px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg" data-ll-status="loaded" sizes="(max-width: 700px) 100vw, 700px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg 2000w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w">
                                <noscript>
                                  <img decoding="async" class="wp-image-44548" src="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg" alt="Vòng tay Trầm Hương 108 hạt trơn - Trầm Tốc Việt Nam" width="700" height="700" title="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam 16" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n.jpg 2000w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/338676342_746285647124651_4314393253462378365_n-510x510.jpg 510w" sizes="(max-width: 700px) 100vw, 700px" /></noscript>
                                <figcaption id="caption-attachment-44548" class="wp-caption-text">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Thien Moc Huong 108 颗光滑珠沉香木手链</font></font>
                                </figcaption>
                              </figure>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">108珠手链是沉香木制成的风水珠宝产品。手链由108颗珠子组成，具有极其深奥和有意义的佛教精神含义。 108珠沉香手链（108珠串）是念珠的组合；带来和平与时尚的珠宝。</font></font>
                              </p>
                              <h3>
                                <strong>
                                  <span style="color: #333333;">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">108颗沉香佛珠手链有何意义？</font></font>
                                  </span>
                                </strong>
                              </h3>
                              <h4>
                                <strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">消除烦恼</font></font>
                                </strong>
                              </h4>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">108这个数字，代表了人们一生中的所有悲伤。</font></font>
                                <a href="https://thienmochuong.com/vong-tay-tram-huong-108" target="_blank" rel="noopener">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">108颗珠子6毫米沉香手链</font></font>
                                </a>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">可以帮助佩戴者消除日常烦恼。给生活带来和平与安宁，保护主人免受流言蜚语和不可预测的灾难的侵扰。</font></font>
                              </p>
                              <h4>
                                <strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">吸引好运和财富</font></font>
                                </strong>
                              </h4>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">沉香木因其能给使用者带来好运和财富而闻名。因此，佩戴108珠沉香项链可以帮助佩戴者在工作和生意上获得许多好处和良好的结果。这就是为什么沉香一直受到许多人的重视。</font></font>
                              </p>
                              <h4>
                                <strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">奢华高端珠宝</font></font>
                                </strong>
                              </h4>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">“富人玩黄金，贵族玩沉香”，古人习惯将沉香放在昂贵、高档的物品上。沉香首饰还能帮助佩戴者展现自己的品位。</font></font>
                              </p>
                              <h3>
                                <strong>
                                  <span style="color: #333333;">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">108珠沉香手链的正确佩戴方法</font></font>
                                  </span>
                                </strong>
                              </h3>
                              <h4>
                                <strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">108珠沉香手链应该戴在哪只手呢？</font></font>
                                </strong>
                              </h4>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">108珠6毫米沉香手链应该戴在哪只手上？根据用户的目的，可以将手链佩戴在任一侧。在左手或右手戴手链有一定的好处：</font></font>
                              </p>
                              <ul>
                                <li style="font-weight: 400;">
                                  <strong>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">左手</font></font>
                                  </strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">：给工作带来好运和财富。适合在与金融相关的会议、大型活动中佩戴。</font></font>
                                </li>
                                <li style="font-weight: 400;">
                                  <strong>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">右手</font></font>
                                  </strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">：保护佩戴者免受厄运和邪灵的侵扰，带来平和的感觉。或适合旅行或搬到新地方时。</font></font>
                                  <figure id="attachment_49454" aria-describedby="caption-attachment-49454" style="width: 600px" class="wp-caption aligncenter">
                                    <img decoding="async" class="wp-image-49454 entered lazyloaded" src="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg" alt="108 单珠沉香手链 – Tram Toc 越南" width="600" height="600" title="108 单珠沉香手链 - Tram Toc 越南 17" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg 1794w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-510x510.jpg 510w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg" data-ll-status="loaded" sizes="(max-width: 600px) 100vw, 600px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg 1794w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-510x510.jpg 510w">
                                    <noscript>
                                      <img decoding="async" class="wp-image-49454" src="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg" alt="Vòng Trầm Hương 108 Hạt Đơn – Trầm Tốc Việt Nam" width="600" height="600" title="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam 17" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam.jpg 1794w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/01/vong-tay-108-hat-don-tram-toc-viet-nam-510x510.jpg 510w" sizes="(max-width: 600px) 100vw, 600px" /></noscript>
                                    <figcaption id="caption-attachment-49454" class="wp-caption-text">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">108 颗单珠沉香手链 Thien Moc Huong</font></font>
                                    </figcaption>
                                  </figure>
                                </li>
                              </ul>
                              <h4>
                                <strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">什么缘分适合戴108颗沉香佛珠手链？</font></font>
                                </strong>
                              </h4>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">原生态沉香手链适合所有缘分。与宝石饰物搭配时，佩戴者应遵循颜色搭配的规则。</font></font>
                              </p>
                              <h4>
                                <strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">我应该同时佩戴多个手链吗？</font></font>
                                </strong>
                              </h4>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">我应该同时佩戴多个手链吗？如果你双手都戴它，答案是否定的。在风水学中，双手佩戴有“手铐”的形象，象征着监禁。所以，在这种情况下应该考虑这一点。</font></font>
                              </p>
                              <p>
                                <span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Vòng tay Trầm Hương 108 Hạt là sự kết hợp giữa Tràng hạt mang lại bình an và chiếc vòng trang sức thời thượng. Người sở hữu chuỗi hạt trầm hương sẽ giữ tâm mình an tịnh, xa lánh thị phi, thường trụ trong chánh niệm đồng thời cũng toát lên phong cách thời trang nhẹ nhàng, tinh tế nhưng không kém phần sang trọng, quý phái. Vòng tay còn có thể kết hợp với các charm khác, tùy theo sở thích người đeo. &quot;}" data-sheets-userformat="{&quot;2&quot;:957,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0}">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">沉香珠的拥有者会保持心态平和，远离八卦，时刻保持正念，同时散发出温柔、细腻却不失奢华高贵的时尚风格。</font></font>
                                </span>
                              </p>
                              <p>
                                <span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Vòng tay Trầm Hương 108 Hạt là sự kết hợp giữa Tràng hạt mang lại bình an và chiếc vòng trang sức thời thượng. Người sở hữu chuỗi hạt trầm hương sẽ giữ tâm mình an tịnh, xa lánh thị phi, thường trụ trong chánh niệm đồng thời cũng toát lên phong cách thời trang nhẹ nhàng, tinh tế nhưng không kém phần sang trọng, quý phái. Vòng tay còn có thể kết hợp với các charm khác, tùy theo sở thích người đeo. &quot;}" data-sheets-userformat="{&quot;2&quot;:957,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:[null,2,0]},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0}">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">根据佩戴者的喜好，这款手链还可以与其他饰物搭配。佩戴沉香手链时，与皮肤或物体摩擦会发出沉香气味，有助于精神更加清新清晰，对抗工作和生活中的压力。</font></font>
                                </span>
                              </p>
                              <h3>
                                <strong>
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">越南沉香木的一些特征</font></font>
                                </strong>
                              </h3>
                              <figure id="attachment_47481" aria-describedby="caption-attachment-47481" style="width: 600px" class="wp-caption aligncenter">
                                <img decoding="async" class="size-full wp-image-47481 entered lazyloaded" src="https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn.jpg" alt="越南的一些特点" width="600" height="600" title="108单珠沉香手链 - 越南沉香 18" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn.jpg 600w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-510x510.jpg 510w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn.jpg" data-ll-status="loaded" sizes="(max-width: 600px) 100vw, 600px" srcset="https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn.jpg 600w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-510x510.jpg 510w">
                                <noscript>
                                  <img decoding="async" class="size-full wp-image-47481" src="https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn.jpg" alt="Vài nét trầm tốc Việt Nam" width="600" height="600" title="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam 18" srcset="https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn.jpg 600w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/03/vai-net-tram-toc-vn-510x510.jpg 510w" sizes="(max-width: 600px) 100vw, 600px" /></noscript>
                                <figcaption id="caption-attachment-47481" class="wp-caption-text">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Thien Moocjj Huong 的一些越南节奏</font></font>
                                </figcaption>
                              </figure>
                              <h3>
                                <span style="font-size: 100%; color: #282828;">
                                  <strong>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">108珠沉香手链的制作过程&nbsp;</font></font>
                                  </strong>
                                </span>
                              </h3>
                              <figure id="attachment_27108" aria-describedby="caption-attachment-27108" style="width: 599px" class="wp-caption aligncenter">
                                <img decoding="async" class="wp-image-27108 entered lazyloaded" src="https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-386x400.jpg" alt="108 颗 6 毫米沉香手链的制作过程" width="599" height="621" title="108单珠沉香手链 - 越南沉香 19" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-386x400.jpg 386w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-772x800.jpg 772w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-768x796.jpg 768w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-510x529.jpg 510w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong.jpg 790w" data-lazy-sizes="(max-width: 599px) 100vw, 599px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-386x400.jpg" data-ll-status="loaded" sizes="(max-width: 599px) 100vw, 599px" srcset="https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-386x400.jpg 386w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-772x800.jpg 772w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-768x796.jpg 768w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-510x529.jpg 510w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong.jpg 790w">
                                <noscript>
                                  <img decoding="async" class="wp-image-27108" src="https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-386x400.jpg" alt="Quy trình chế tác vòng tay trầm hương 108 hạt 6 ly" width="599" height="621" title="Vòng Trầm Hương 108 Hạt Đơn - Trầm Tốc Việt Nam 19" srcset="https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-386x400.jpg 386w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-772x800.jpg 772w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-768x796.jpg 768w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong-510x529.jpg 510w, https://thienmochuong.com/wp-content/uploads/2019/07/Quy-trinh-che-tac-vong-tay-Tram-Huong-Thien-Moc-Huong.jpg 790w" sizes="(max-width: 599px) 100vw, 599px" /></noscript>
                                <figcaption id="caption-attachment-27108" class="wp-caption-text">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">108珠沉香手链的制作过程</font></font>
                                </figcaption>
                              </figure>
                              <p>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">108珠沉香手链的制作工序分为6个阶段。首先，生产者必须非常谨慎、细致地选择原材料。然后工匠将珠子磨圆并抛光。接下来，在穿线之前需要再次检查珠子。最后将手链串成最终的成品。</font></font>
                              </p>
                              <p>&nbsp;</p>
                            </div>
                            <div class="devvn_button_btn_view_more z-1">
                              <a href="javascript:void(0)" title="查看更多">
                                <span></span>Thu gọn</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-section devvn_reviews">
                      <div class="row">
                        <div class="large-12 col pb-0 mb-0">
                          <div class="devvn_section_title test">
                            <h2 class="uppercase">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">产品评论</font></font>
                            </h2>
                          </div>
                        </div>
                        <div class="large-12 col pb-0 mb-0">
                          <div class="panel entry-content devvn_section_content">
                            <div id="reviews" class="style-v2 woocommerce-Reviews no_avatar devvn-style2">
                              <div id="comments">
                                <div class="woocommerce-Reviews-title">
                                  <font style="vertical-align: inherit;">
                                    <span>
                                      <font style="vertical-align: inherit;">108 单珠沉香手链 – Tram Toc 越南</font></span>
                                    <font style="vertical-align: inherit;">有 29 个评价</font></font>
                                  <span>
                                    <font style="vertical-align: inherit;"></font>
                                  </span>
                                </div>
                                <div class="star_box">
                                  <div class="star-average">
                                    <div class="woocommerce-product-rating">
                                      <span class="star_average">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">5.0</font></font>
                                        <i class="devvn-star"></i>
                                      </span>
                                      <strong>
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">平均评分</font></font>
                                      </strong>
                                    </div>
                                  </div>
                                  <div class="star_box_left">
                                    <div class="reviews_bar">
                                      <div class="devvn_review_row">
                                        <span class="devvn_stars_value">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">5</font></font>
                                          <i class="devvn-star"></i>
                                        </span>
                                        <span class="devvn_rating_bar">
                                          <span style="background-color: #eee" class="devvn_scala_rating">
                                            <span class="devvn_perc_rating" style="width: 96%; background-color: #f5a623"></span>
                                          </span>
                                        </span>
                                        <span class="devvn_num_reviews">
                                          <b>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">96%</font></font>
                                          </b>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">| 28 条评价</font></font>
                                        </span>
                                      </div>
                                      <div class="devvn_review_row">
                                        <span class="devvn_stars_value">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">4</font></font>
                                          <i class="devvn-star"></i>
                                        </span>
                                        <span class="devvn_rating_bar">
                                          <span style="background-color: #eee" class="devvn_scala_rating">
                                            <span class="devvn_perc_rating" style="width: 3%; background-color: #f5a623"></span>
                                          </span>
                                        </span>
                                        <span class="devvn_num_reviews">
                                          <b>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">3%</font></font>
                                          </b>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">| 1 条评论</font></font>
                                        </span>
                                      </div>
                                      <div class="devvn_review_row">
                                        <span class="devvn_stars_value">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">3</font></font>
                                          <i class="devvn-star"></i>
                                        </span>
                                        <span class="devvn_rating_bar">
                                          <span style="background-color: #eee" class="devvn_scala_rating">
                                            <span class="devvn_perc_rating" style="width: 0%; background-color: #f5a623"></span>
                                          </span>
                                        </span>
                                        <span class="devvn_num_reviews">
                                          <b>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">0%</font></font>
                                          </b>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">| 0 条评论</font></font>
                                        </span>
                                      </div>
                                      <div class="devvn_review_row">
                                        <span class="devvn_stars_value">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">2</font></font>
                                          <i class="devvn-star"></i>
                                        </span>
                                        <span class="devvn_rating_bar">
                                          <span style="background-color: #eee" class="devvn_scala_rating">
                                            <span class="devvn_perc_rating" style="width: 0%; background-color: #f5a623"></span>
                                          </span>
                                        </span>
                                        <span class="devvn_num_reviews">
                                          <b>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">0%</font></font>
                                          </b>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">| 0 条评论</font></font>
                                        </span>
                                      </div>
                                      <div class="devvn_review_row">
                                        <span class="devvn_stars_value">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">1</font></font>
                                          <i class="devvn-star"></i>
                                        </span>
                                        <span class="devvn_rating_bar">
                                          <span style="background-color: #eee" class="devvn_scala_rating">
                                            <span class="devvn_perc_rating" style="width: 0%; background-color: #f5a623"></span>
                                          </span>
                                        </span>
                                        <span class="devvn_num_reviews">
                                          <b>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">0%</font></font>
                                          </b>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">| 0 条评论</font></font>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="star_box_right">
                                    <a href="javascript:void(0)" title="立即评分" class="btn-reviews-now">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">立即评分</font></font>
                                    </a>
                                  </div>
                                </div>
                                <div id="review_form_wrapper" class="mfp-hide">
                                  <div id="review_form">
                                    <div id="respond" class="comment-respond">
                                      <span id="reply-title" class="comment-reply-title">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">108 颗单珠沉香手链评论 – Tram Toc Viet Nam</font></font>
                                        <small>
                                          <a rel="nofollow" id="cancel-comment-reply-link" href="/san-pham/vong-tay-tram-huong-108-hat#respond" style="display:none;">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">取消</font></font>
                                          </a>
                                        </small>
                                      </span>
                                      <form action="https://thienmochuong.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="novalidate">
                                        <div class="comment-form-comment">
                                          <textarea id="comment" name="comment" cols="45" rows="8" minlength="10" required="" placeholder="请分享更多感受..." aria-required="true"></textarea>
                                        </div>
                                        <div class="wrap-attaddsend">
                                          <div class="review-attach">
                                            <span class="btn-attach devvn_insert_attach">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">发真实照片</font></font>
                                            </span>
                                          </div>
                                          <span id="countContent">0 ký tự (Tối thiểu 10)</span></div>
                                        <div class="list_attach">
                                          <ul class="devvn_attach_view"></ul>
                                          <span class="devvn_insert_attach">
                                            <i class="devvn-plus">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">+</font></font>
                                            </i>
                                          </span>
                                        </div>
                                        <div class="comment-form-rating">
                                          <label for="rating">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">您对这个产品感觉怎么样？ (选择星号)</font></font>
                                          </label>
                                          <p class="stars selected">
                                            <span>
                                              <a class="star-1" href="#">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">非常糟糕</font></font>
                                              </a>
                                              <a class="star-2" href="#">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">不错</font></font>
                                              </a>
                                              <a class="star-3" href="#">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">中等的</font></font>
                                              </a>
                                              <a class="star-4" href="#">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">好的</font></font>
                                              </a>
                                              <a class="star-5 active" href="#">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">伟大的</font></font>
                                              </a>
                                            </span>
                                          </p>
                                          <select name="rating" id="rating" required="" aria-required="true" style="display: none;">
                                            <option value="">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">等级…</font></font>
                                            </option>
                                            <option value="5">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">非常好</font></font>
                                            </option>
                                            <option value="4">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">好的</font></font>
                                            </option>
                                            <option value="3">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">中等的</font></font>
                                            </option>
                                            <option value="2">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">不错</font></font>
                                            </option>
                                            <option value="1">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">非常糟糕</font></font>
                                            </option>
                                          </select>
                                        </div>
                                        <div class="form_row_reviews">
                                          <p class="comment-form-author">
                                            <input id="author" name="author" type="text" value="" size="30" required="" placeholder="全名（必填）" aria-required="true"></p>
                                          <p class="comment-form-email">
                                            <input id="email" name="email" type="email" value="" size="30" placeholder="电子邮件（必填）" required="" aria-required="true"></p>
                                        </div>
                                        <p class="comment-form-cookies-consent">
                                          <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                          <label for="wp-comment-cookies-consent">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">在此浏览器中保存我的名字、电邮和网站，以便下次评论时使用。</font></font>
                                          </label>
                                        </p>
                                        <p class="form-submit">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                              <input name="submit" type="submit" id="submit" class="submit" value="提交评论"></font>
                                          </font>
                                          <input type="hidden" name="comment_post_ID" value="13832" id="comment_post_ID">
                                          <input type="hidden" name="comment_parent" id="comment_parent" value="0"></p>
                                      </form>
                                    </div>
                                    <!-- #respond --></div>
                                  <button type="button" data-fancybox-close="" class="fancybox-button fancybox-close-small" title="关闭">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
                                    </svg>
                                  </button>
                                </div>
                                <div class="devvn_shortcode_list_reviews img_reviews_wrap">
                                  <strong>
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">来自客户的图片</font></font>
                                  </strong>
                                  <div class="img_reviews_box pc_column_10 tablet_column_5 mobile_column_5">
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f.jpg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f.jpg" data-ll-status="loaded">
                                                <noscript>
                                                  <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_18872" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_18872" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f.jpg">
                                                  <img width="1536" height="2048" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201536%202048'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f.jpg">
                                                  <noscript>
                                                    <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">陈明俊</font></font>
                                              </strong>
                                            </p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="评分 5 星（满分 5 星）">
                                                <span style="width:100%">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">评分</font></font>
                                                  <strong class="rating">
                                                    <font style="vertical-align: inherit;">
                                                      <font style="vertical-align: inherit;">5</font></font>
                                                  </strong>
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                                </span>
                                              </div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">去过，买过产品，前台人员很热情，手环香味非常好闻，会继续支持。</font></font>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="939" height="1920" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a.jpg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a.jpg" data-ll-status="loaded">
                                                <noscript>
                                                  <img width="939" height="1920" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_17969" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_17969" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a.jpg">
                                                  <img width="939" height="1920" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20939%201920'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a.jpg">
                                                  <noscript>
                                                    <img width="939" height="1920" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">良哈</font></font>
                                              </strong>
                                            </p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="评分 5 星（满分 5 星）">
                                                <span style="width:100%">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">评分</font></font>
                                                  <strong class="rating">
                                                    <font style="vertical-align: inherit;">
                                                      <font style="vertical-align: inherit;">5</font></font>
                                                  </strong>
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                                </span>
                                              </div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">芬芳、美丽</font></font>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1.jpg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1.jpg" data-ll-status="loaded">
                                                <noscript>
                                                  <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_11693" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_11693" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1.jpg">
                                                  <img width="1536" height="2048" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201536%202048'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1.jpg">
                                                  <noscript>
                                                    <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">山姆</font></font>
                                              </strong>
                                            </p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="评分 5 星（满分 5 星）">
                                                <span style="width:100%">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">评分</font></font>
                                                  <strong class="rating">
                                                    <font style="vertical-align: inherit;">
                                                      <font style="vertical-align: inherit;">5</font></font>
                                                  </strong>
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                                </span>
                                              </div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">非常漂亮，工作人员根据我的风格提供支持和建议，很满意</font></font>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--375x500.jpeg 375w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg" data-ll-status="loaded" sizes="(max-width: 1536px) 100vw, 1536px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--375x500.jpeg 375w">
                                                <noscript>
                                                  <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--375x500.jpeg 375w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_10442" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_10442" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg">
                                                  <img width="1536" height="2048" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201536%202048'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--375x500.jpeg 375w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg">
                                                  <noscript>
                                                    <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt-.jpeg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/feedback-108-hạt--375x500.jpeg 375w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">阮美</font></font>
                                              </strong>
                                            </p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="Được xếp hạng 5 5 sao">
                                                <span style="width:100%">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">评分</font></font>
                                                  <strong class="rating">
                                                    <font style="vertical-align: inherit;">
                                                      <font style="vertical-align: inherit;">5</font></font>
                                                  </strong>
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                                </span>
                                              </div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>Rất xinh, đi đâu ai cũng khen là đẹp, hàng chất lượng tốt.</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="1920" height="2560" src="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg 1920w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-375x500.jpeg 375w" data-lazy-sizes="(max-width: 1920px) 100vw, 1920px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg" data-ll-status="loaded" sizes="(max-width: 1920px) 100vw, 1920px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg 1920w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-375x500.jpeg 375w">
                                                <noscript>
                                                  <img width="1920" height="2560" src="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg 1920w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-375x500.jpeg 375w" sizes="(max-width: 1920px) 100vw, 1920px" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_9398" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_9398" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg">
                                                  <img width="1920" height="2560" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201920%202560'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg 1920w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-375x500.jpeg 375w" data-lazy-sizes="(max-width: 1920px) 100vw, 1920px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg">
                                                  <noscript>
                                                    <img width="1920" height="2560" src="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-scaled.jpeg 1920w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-300x400.jpeg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/74D3F157-50ED-454B-AE48-022EB4C84CFC-375x500.jpeg 375w" sizes="(max-width: 1920px) 100vw, 1920px" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">Nguyễn Thị Thu Thuỷ</strong></p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="Được xếp hạng 5 5 sao">
                                                <span style="width:100%">Được xếp hạng
                                                  <strong class="rating">5</strong>5 sao</span></div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">Đã mua tại thienmochuong.com</em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>Mình rất ưng vòng tay 108 hạt đơn Lào mà mình vừa nhận. Vòng có mùi thơm nhẹ, dể chịu. Một tuần sau khi đeo thì vòng sậm màu hơn lúc mới mua, bóng đẹp.</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-1152x1536.jpg 1152w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-510x680.jpg 510w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg" data-ll-status="loaded" sizes="(max-width: 1536px) 100vw, 1536px" srcset="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-1152x1536.jpg 1152w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-510x680.jpg 510w">
                                                <noscript>
                                                  <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-1152x1536.jpg 1152w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-510x680.jpg 510w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_8383" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_8383" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg">
                                                  <img width="1536" height="2048" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201536%202048'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-1152x1536.jpg 1152w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-510x680.jpg 510w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg">
                                                  <noscript>
                                                    <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-1152x1536.jpg 1152w, https://thienmochuong.com/wp-content/uploads/2020/07/Tmh-4-510x680.jpg 510w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">Như</strong></p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="Được xếp hạng 5 5 sao">
                                                <span style="width:100%">Được xếp hạng
                                                  <strong class="rating">5</strong>5 sao</span></div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">Đã mua tại thienmochuong.com</em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>minh mua 2 mẹ con cùng đeo rất thích</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-375x500.jpg 375w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg" data-ll-status="loaded" sizes="(max-width: 1536px) 100vw, 1536px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-375x500.jpg 375w">
                                                <noscript>
                                                  <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-375x500.jpg 375w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_8371" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_8371" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg">
                                                  <img width="1536" height="2048" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201536%202048'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-375x500.jpg 375w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg">
                                                  <noscript>
                                                    <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/206009688_518753179554256_2084131655860823295_n-375x500.jpg 375w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">Thuy</strong></p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="Được xếp hạng 5 5 sao">
                                                <span style="width:100%">Được xếp hạng
                                                  <strong class="rating">5</strong>5 sao</span></div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">Đã mua tại thienmochuong.com</em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>nhân viên tư vấn nhiệt tình nên vòng đeo vừa tay lắm ạ. cho 10 điểm nha</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-375x500.jpg 375w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg" data-ll-status="loaded" sizes="(max-width: 1536px) 100vw, 1536px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-375x500.jpg 375w">
                                                <noscript>
                                                  <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-375x500.jpg 375w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_8307" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_8307" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg">
                                                  <img width="1536" height="2048" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201536%202048'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-375x500.jpg 375w" data-lazy-sizes="(max-width: 1536px) 100vw, 1536px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg">
                                                  <noscript>
                                                    <img width="1536" height="2048" src="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-510x680.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/8227f5684784fc57b13c5094a5761ad4b0500550-375x500.jpg 375w" sizes="(max-width: 1536px) 100vw, 1536px" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">linda</strong></p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="Được xếp hạng 5 5 sao">
                                                <span style="width:100%">Được xếp hạng
                                                  <strong class="rating">5</strong>5 sao</span></div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">Đã mua tại thienmochuong.com</em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>đeo lên thực sự rất ưng ý cảm ơn shop nhiều</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="480" height="640" src="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-375x500.jpg 375w" data-lazy-sizes="(max-width: 480px) 100vw, 480px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg" data-ll-status="loaded" sizes="(max-width: 480px) 100vw, 480px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-375x500.jpg 375w">
                                                <noscript>
                                                  <img width="480" height="640" src="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-375x500.jpg 375w" sizes="(max-width: 480px) 100vw, 480px" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_8269" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div id="devvn_reviews_popup_8269" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg">
                                                  <img width="480" height="640" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20480%20640'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-375x500.jpg 375w" data-lazy-sizes="(max-width: 480px) 100vw, 480px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg">
                                                  <noscript>
                                                    <img width="480" height="640" src="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-6li.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-6li-375x500.jpg 375w" sizes="(max-width: 480px) 100vw, 480px" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">An</strong></p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="Được xếp hạng 5 5 sao">
                                                <span style="width:100%">Được xếp hạng
                                                  <strong class="rating">5</strong>5 sao</span></div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">Đã mua tại thienmochuong.com</em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>Vòng rất vừa vặn và thơm rất dễ chịu, từ lúc thỉnh vòng về cảm giác lúc nào cũng nhẹ nhàng và thư thái, cảm ơn shop nhiều</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="devvn_list_item">
                                      <div class="devvn_list_item_box">
                                        <div class="devvn_list_item_box_content">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_noslider">
                                              <div class="img_item">
                                                <img width="480" height="640" src="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg" class="attachment-shop_single size-shop_single entered lazyloaded" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-375x500.jpg 375w" data-lazy-sizes="(max-width: 480px) 100vw, 480px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg" data-ll-status="loaded" sizes="(max-width: 480px) 100vw, 480px" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-375x500.jpg 375w">
                                                <noscript>
                                                  <img width="480" height="640" src="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-375x500.jpg 375w" sizes="(max-width: 480px) 100vw, 480px" /></noscript>
                                              </div>
                                            </div>
                                          </div>
                                          <a href="#devvn_reviews_popup_8245" class="devvn-reviews-img-popup"></a>
                                        </div>
                                      </div>
                                      <div class="view_more_img" data-prod_id="13832">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">查看 19 张来自客户的照片</font></font>
                                      </div>
                                      <div id="devvn_reviews_popup_8245" class="devvn_list_item_popup view_style_2 mfp-hide ">
                                        <div class="devvn_list_item_popup_left">
                                          <div class="devvn_review_item_image">
                                            <div class="devvn_review_image_slider">
                                              <div class="img_item">
                                                <a href="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg">
                                                  <img width="480" height="640" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20480%20640'%3E%3C/svg%3E" class="attachment-shop_single size-shop_single" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-375x500.jpg 375w" data-lazy-sizes="(max-width: 480px) 100vw, 480px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg">
                                                  <noscript>
                                                    <img width="480" height="640" src="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg" class="attachment-shop_single size-shop_single" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc.jpg 480w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-300x400.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/01/108-khoen-bạc-375x500.jpg 375w" sizes="(max-width: 480px) 100vw, 480px" /></noscript>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="devvn_list_item_popup_right">
                                          <div class="devvn_review_item_infor">
                                            <p class="meta">
                                              <strong class="woocommerce-review__author">Thy</strong></p>
                                            <div class="devvn_shortcode_review_rating">
                                              <div class="star-rating" role="img" aria-label="Được xếp hạng 5 5 sao">
                                                <span style="width:100%">Được xếp hạng
                                                  <strong class="rating">5</strong>5 sao</span></div>
                                            </div>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">Đã mua tại thienmochuong.com</em>
                                            <p>
                                            </p>
                                            <div class="devvn_review_item_fullcontent">
                                              <p>Vòng đeo mùi hương dịu nhẹ, rất dễ chịu</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="img_reviews_box_full">
                                    <div class="devvn_list_popup_content">
                                      <div class="devvn_list_popup_title"></div>
                                      <button class="devvn_list_popup_close">
                                        <svg class="icon-close icon" viewBox="0 0 32 32">
                                          <g id="icon-close">
                                            <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
                                          </g>
                                        </svg>
                                      </button>
                                      <div class="devvn_list_popup_box">
                                        <div class="devvn_list_box" style="position: relative; height: 0px;"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <ol class="commentlist">
                                  <li class="review even thread-even depth-1" id="li-comment-11693">
                                    <div id="comment-11693" class="comment_container devvn_review_box">
                                      <div class="comment-text">
                                        <div class="devvn_review_top">
                                          <p class="meta">
                                            <strong class="woocommerce-review__author">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">山姆</font></font>
                                            </strong>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                          </p>
                                        </div>
                                        <div class="devvn_review_mid">
                                          <div class="star-rating" role="img" aria-label="评分 5 星（满分 5 星）">
                                            <span style="width:100%">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">评分</font></font>
                                              <strong class="rating">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">5</font></font>
                                              </strong>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                            </span>
                                          </div>
                                          <div class="description">
                                            <p>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">非常漂亮，工作人员根据我的风格提供支持和建议，很满意</font></font>
                                            </p>
                                          </div>
                                          <ul class="cmt_attachment_img">
                                            <li>
                                              <a href="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1.jpg">
                                                <img width="280" height="280" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1-280x280.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1-280x280.jpg" data-ll-status="loaded">
                                                <noscript>
                                                  <img width="280" height="280" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/155783100_3710220039032146_6830287882358463725_n-1-280x280.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" decoding="async" /></noscript>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="devvn_review_bottom">
                                          <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#comment-11693" data-commentid="11693" data-postid="13832" data-belowelement="comment-11693" data-respondelement="respond" data-replyto="Phản hồi đến sam" aria-label="回复 sam">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">回复</font></font>
                                            </a>
                                          </div>
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">•</font></font>
                                          </span>
                                          <time class="woocommerce-review__published-date" datetime="2022-10-17T17:16:00+07:00">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">2022 年 10 月 17 日</font></font>
                                          </time>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- #comment-## -->
                                  <li class="review odd alt thread-odd thread-alt depth-1" id="li-comment-17800">
                                    <div id="comment-17800" class="comment_container devvn_review_box">
                                      <div class="comment-text">
                                        <div class="devvn_review_top">
                                          <p class="meta">
                                            <strong class="woocommerce-review__author">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">碧芳</font></font>
                                            </strong>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                          </p>
                                        </div>
                                        <div class="devvn_review_mid">
                                          <div class="star-rating" role="img" aria-label="评分 5 星（满分 5 星）">
                                            <span style="width:100%">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">评分</font></font>
                                              <strong class="rating">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">5</font></font>
                                              </strong>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                            </span>
                                          </div>
                                          <div class="description">
                                            <p>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">我已经戴了 2 个月了，珠子仍然保留着香味和光泽😁😁</font></font>
                                            </p>
                                          </div>
                                        </div>
                                        <div class="devvn_review_bottom">
                                          <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#comment-17800" data-commentid="17800" data-postid="13832" data-belowelement="comment-17800" data-respondelement="respond" data-replyto="Phản hồi đến Bích Phương" aria-label="回复 Bich Phuong">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">回复</font></font>
                                            </a>
                                          </div>
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">•</font></font>
                                          </span>
                                          <time class="woocommerce-review__published-date" datetime="2024-02-25T08:16:32+07:00">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">2024 年 2 月 25 日</font></font>
                                          </time>
                                        </div>
                                      </div>
                                    </div>
                                    <ul class="children">
                                      <li class="review byuser comment-author-admin-tmh even depth-2" id="li-comment-18078">
                                        <div id="comment-18078" class="comment_container devvn_review_box">
                                          <div class="comment-text">
                                            <div class="devvn_review_top">
                                              <p class="meta">
                                                <strong class="woocommerce-review__author">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">管理员 TMH</font></font>
                                                </strong>
                                                <span class="review_qtv">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">行政人员</font></font>
                                                </span>
                                              </p>
                                            </div>
                                            <div class="devvn_review_mid">
                                              <div class="description">
                                                <p>
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Thien Moc Huong 感谢您的支持。使用过程中，如果遇到任何问题，您可以直接通过 Facebook、网站或拨打热线 0933 348 368 联系 Thien Moc Huong 寻求建议和支持。</font></font>
                                                </p>
                                              </div>
                                            </div>
                                            <div class="devvn_review_bottom">
                                              <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#comment-18078" data-commentid="18078" data-postid="13832" data-belowelement="comment-18078" data-respondelement="respond" data-replyto="Phản hồi đến Admin TMH" aria-label="反馈给管理员 TMH">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">回复</font></font>
                                                </a>
                                              </div>
                                              <span>
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">•</font></font>
                                              </span>
                                              <time class="woocommerce-review__published-date" datetime="2024-03-04T11:03:49+07:00">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">2024 年 3 月 4 日</font></font>
                                              </time>
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                      <!-- #comment-## --></ul>
                                    <!-- .children --></li>
                                  <!-- #comment-## -->
                                  <li class="review odd alt thread-even depth-1" id="li-comment-17969">
                                    <div id="comment-17969" class="comment_container devvn_review_box">
                                      <div class="comment-text">
                                        <div class="devvn_review_top">
                                          <p class="meta">
                                            <strong class="woocommerce-review__author">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">良哈</font></font>
                                            </strong>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                          </p>
                                        </div>
                                        <div class="devvn_review_mid">
                                          <div class="star-rating" role="img" aria-label="评分 5 星（满分 5 星）">
                                            <span style="width:100%">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">评分</font></font>
                                              <strong class="rating">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">5</font></font>
                                              </strong>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                            </span>
                                          </div>
                                          <div class="description">
                                            <p>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">芬芳、美丽</font></font>
                                            </p>
                                          </div>
                                          <ul class="cmt_attachment_img">
                                            <li>
                                              <a href="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a.jpg">
                                                <img width="280" height="280" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a-280x280.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail entered lazyloaded" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a-280x280.jpg" data-ll-status="loaded">
                                                <noscript>
                                                  <img width="280" height="280" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/Messenger_creation_304ccf25-f177-4d57-9a6c-b3c3650e597a-280x280.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" decoding="async" /></noscript>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="devvn_review_bottom">
                                          <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#comment-17969" data-commentid="17969" data-postid="13832" data-belowelement="comment-17969" data-respondelement="respond" data-replyto="Phản hồi đến Lương Hà" aria-label="回复 Luong Ha">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">回复</font></font>
                                            </a>
                                          </div>
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">•</font></font>
                                          </span>
                                          <time class="woocommerce-review__published-date" datetime="2024-02-28T07:12:14+07:00">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">2024 年 2 月 28 日</font></font>
                                          </time>
                                        </div>
                                      </div>
                                    </div>
                                    <ul class="children">
                                      <li class="review byuser comment-author-admin-tmh even depth-2" id="li-comment-18076">
                                        <div id="comment-18076" class="comment_container devvn_review_box">
                                          <div class="comment-text">
                                            <div class="devvn_review_top">
                                              <p class="meta">
                                                <strong class="woocommerce-review__author">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">管理员 TMH</font></font>
                                                </strong>
                                                <span class="review_qtv">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">行政人员</font></font>
                                                </span>
                                              </p>
                                            </div>
                                            <div class="devvn_review_mid">
                                              <div class="description">
                                                <p>
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Thien Moc Huong 感谢您的支持。使用过程中，如果遇到任何问题，您可以直接通过 Facebook、网站或拨打热线 0933 348 368 联系 Thien Moc Huong 寻求建议和支持。</font></font>
                                                </p>
                                              </div>
                                            </div>
                                            <div class="devvn_review_bottom">
                                              <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#comment-18076" data-commentid="18076" data-postid="13832" data-belowelement="comment-18076" data-respondelement="respond" data-replyto="Phản hồi đến Admin TMH" aria-label="反馈给管理员 TMH">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">回复</font></font>
                                                </a>
                                              </div>
                                              <span>
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">•</font></font>
                                              </span>
                                              <time class="woocommerce-review__published-date" datetime="2024-03-04T11:02:38+07:00">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">2024 年 3 月 4 日</font></font>
                                              </time>
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                      <!-- #comment-## --></ul>
                                    <!-- .children --></li>
                                  <!-- #comment-## -->
                                  <li class="review odd alt thread-odd thread-alt depth-1" id="li-comment-18399">
                                    <div id="comment-18399" class="comment_container devvn_review_box">
                                      <div class="comment-text">
                                        <div class="devvn_review_top">
                                          <p class="meta">
                                            <strong class="woocommerce-review__author">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">邵族</font></font>
                                            </strong>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                          </p>
                                        </div>
                                        <div class="devvn_review_mid">
                                          <div class="star-rating" role="img" aria-label="评分 5 星（满分 5 星）">
                                            <span style="width:100%">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">评分</font></font>
                                              <strong class="rating">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">5</font></font>
                                              </strong>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                            </span>
                                          </div>
                                          <div class="description">
                                            <p>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">订购的商品正确，咨询周到</font></font>
                                            </p>
                                          </div>
                                        </div>
                                        <div class="devvn_review_bottom">
                                          <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#comment-18399" data-commentid="18399" data-postid="13832" data-belowelement="comment-18399" data-respondelement="respond" data-replyto="Phản hồi đến Thảo" aria-label="回复 Thao">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">回复</font></font>
                                            </a>
                                          </div>
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">•</font></font>
                                          </span>
                                          <time class="woocommerce-review__published-date" datetime="2024-03-19T14:18:20+07:00">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">2024 年 3 月 19 日</font></font>
                                          </time>
                                        </div>
                                      </div>
                                    </div>
                                    <ul class="children">
                                      <li class="review byuser comment-author-admin-tmh even depth-2" id="li-comment-18516">
                                        <div id="comment-18516" class="comment_container devvn_review_box">
                                          <div class="comment-text">
                                            <div class="devvn_review_top">
                                              <p class="meta">
                                                <strong class="woocommerce-review__author">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">管理员 TMH</font></font>
                                                </strong>
                                                <span class="review_qtv">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">行政人员</font></font>
                                                </span>
                                              </p>
                                            </div>
                                            <div class="devvn_review_mid">
                                              <div class="description">
                                                <p>
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Thien Moc Huong 感谢您的支持。使用过程中，如果遇到任何问题，您可以直接通过 Facebook、网站或拨打热线 0933 348 368 联系 Thien Moc Huong 寻求建议和支持。</font></font>
                                                </p>
                                              </div>
                                            </div>
                                            <div class="devvn_review_bottom">
                                              <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#comment-18516" data-commentid="18516" data-postid="13832" data-belowelement="comment-18516" data-respondelement="respond" data-replyto="Phản hồi đến Admin TMH" aria-label="反馈给管理员 TMH">
                                                  <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">回复</font></font>
                                                </a>
                                              </div>
                                              <span>
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">•</font></font>
                                              </span>
                                              <time class="woocommerce-review__published-date" datetime="2024-03-23T14:56:14+07:00">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">2024 年 3 月 23 日</font></font>
                                              </time>
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                      <!-- #comment-## --></ul>
                                    <!-- .children --></li>
                                  <!-- #comment-## -->
                                  <li class="review odd alt thread-even depth-1" id="li-comment-18872">
                                    <div id="comment-18872" class="comment_container devvn_review_box">
                                      <div class="comment-text">
                                        <div class="devvn_review_top">
                                          <p class="meta">
                                            <strong class="woocommerce-review__author">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">陈明俊</font></font>
                                            </strong>
                                            <em class="woocommerce-review__verified verified" data-rocket-lazy-bg-d4d83e8d-7aa7-403f-9421-384389763280="loaded">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">在thienmochuong.com购买</font></font>
                                            </em>
                                          </p>
                                        </div>
                                        <div class="devvn_review_mid">
                                          <div class="star-rating" role="img" aria-label="评分 5 星（满分 5 星）">
                                            <span style="width:100%">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">评分</font></font>
                                              <strong class="rating">
                                                <font style="vertical-align: inherit;">
                                                  <font style="vertical-align: inherit;">5</font></font>
                                              </strong>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">星（满分 5 星）</font></font>
                                            </span>
                                          </div>
                                          <div class="description">
                                            <p>
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">去过，买过产品，前台人员很热情，手环香味非常好闻，会继续支持。</font></font>
                                            </p>
                                          </div>
                                          <ul class="cmt_attachment_img">
                                            <li>
                                              <a href="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f.jpg">
                                                <img width="280" height="280" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20280%20280'%3E%3C/svg%3E" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f-280x280.jpg">
                                                <noscript>
                                                  <img width="280" height="280" src="https://thienmochuong.com/wp-content/uploads/woocommerce-reviews/cbe5e6aea8ed93fd99db177ef3f223648749623f-280x280.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" decoding="async" /></noscript>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="devvn_review_bottom">
                                          <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#comment-18872" data-commentid="18872" data-postid="13832" data-belowelement="comment-18872" data-respondelement="respond" data-replyto="Phản hồi đến trần minh tuấn" aria-label="回复 Tran Minh Tuan">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">回复</font></font>
                                            </a>
                                          </div>
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">•</font></font>
                                          </span>
                                          <time class="woocommerce-review__published-date" datetime="2024-04-17T14:42:55+07:00">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">2024 年 4 月 17 日</font></font>
                                          </time>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- #comment-## --></ol>
                                <nav class="woocommerce-pagination">
                                  <ul class="page-numbers">
                                    <li>
                                      <span aria-current="page" class="page-numbers current">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">1</font></font>
                                      </span>
                                    </li>
                                    <li>
                                      <a class="page-numbers" href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat/comment-page-2#reviews" rel="nofollow">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">2</font></font>
                                      </a>
                                    </li>
                                    <li>
                                      <a class="page-numbers" href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat/comment-page-3#reviews" rel="nofollow">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">3</font></font>
                                      </a>
                                    </li>
                                    <li>
                                      <span class="page-numbers dots">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">…</font></font>
                                      </span>
                                    </li>
                                    <li>
                                      <a class="page-numbers" href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat/comment-page-6#reviews" rel="nofollow">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">6</font></font>
                                      </a>
                                    </li>
                                    <li>
                                      <a class="next page-numbers" href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-108-hat/comment-page-2#reviews" rel="nofollow">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">→</font></font>
                                      </a>
                                    </li>
                                  </ul>
                                </nav>
                              </div>
                              <div class="clear"></div>
                            </div>
                            <div class="devvn_prod_cmt " id="hoi-dap">
                              <strong>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">问答</font></font>
                              </strong>
                              <div class="devvn_cmt_form">
                                <form action="" method="post" id="devvn_cmt">
                                  <div class="devvn_cmt_input">
                                    <textarea placeholder="请加入讨论，请输入带重音的越南语。" name="devvn_cmt_content" id="devvn_cmt_content" minlength="20"></textarea>
                                  </div>
                                  <div class="devvn_cmt_form_bottom ">
                                    <div class="devvn_cmt_radio">
                                      <label>
                                        <input name="devvn_cmt_gender" type="radio" value="male" checked="">
                                        <span>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">哥哥</font></font>
                                        </span>
                                      </label>
                                      <label>
                                        <input name="devvn_cmt_gender" type="radio" value="female">
                                        <span>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">姐姐</font></font>
                                        </span>
                                      </label>
                                    </div>
                                    <div class="devvn_cmt_input">
                                      <input name="devvn_cmt_name" type="text" id="devvn_cmt_name" placeholder="全名（必填）"></div>
                                    <div class="devvn_cmt_input">
                                      <input name="devvn_cmt_email" type="text" id="devvn_cmt_email" required="" placeholder="电子邮件（必填）"></div>
                                    <div class="devvn_cmt_submit">
                                      <button type="submit" id="devvn_cmt_submit">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">发送</font></font>
                                      </button>
                                      <input type="hidden" value="13832" name="post_id">
                                      <input type="hidden" value="" name="cmt_parent_id"></div>
                                  </div>
                                </form>
                              </div>
                              <div class="devvn_cmt_list">
                                <div class="devvn_cmt_list_header">
                                  <div class="devvn_cmt_lheader_left">
                                    <span class="devvn_cmt_count">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">1 条评论</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_cmt_lheader_right">
                                    <div class="devvn_cmt_search_box">
                                      <form action="" method="post" id="devvn_cmt_search_form">
                                        <input type="text" name="devvn_cmt_search" id="devvn_cmt_search" placeholder="按内容搜索">
                                        <input type="hidden" value="13832" name="post_id">
                                        <button type="submit devvn-icon-search">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">搜索</font></font>
                                        </button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="devvn_cmt_list_box">
                                  <ul>
                                    <li>
                                      <div class="devvn_cmt_box">
                                        <span>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">米</font></font>
                                        </span>
                                        <strong>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">明亮的</font></font>
                                        </strong>
                                        <div class="devvn_cmt_box_content">
                                          <p>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">我穿 6mm 的但是很紧，穿 7mm 的但是很松，我为我的手臂感到难过🥲</font></font>
                                          </p>
                                        </div>
                                        <div class="devvn_cmt_tool">
                                          <span>
                                            <a href="javascript:void(0)" class="devvn_cmt_reply" data-cmtid="19638" data-authorname="Minh">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">回复</font></font>
                                            </a>
                                          </span>
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">•</font></font>
                                          </span>
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">9 个月前</font></font>
                                          </span>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <nav class="devvn_cmt_paged woocommerce-pagination"></nav>
                                <script type="text/template" id="tmpl-reply-devvn-cmt">< form action = ""method = "post"id = "devvn_cmt_reply" > <div class = "devvn_cmt_input" > <textarea placeholder = ""name = "devvn_cmt_replycontent"id = "devvn_cmt_replycontent"minlength = "20" > {
                                    {
                                      {
                                        data.authorname
                                      }
                                    }
                                  } < /textarea>
                        </div > <div class = "devvn_cmt_form_bottom" > <div class = "devvn_cmt_radio" > <label > <input name = "devvn_cmt_replygender"type = "radio"value = "male"checked / ><span > Anh < /span></label > <label > <input name = "devvn_cmt_replygender"type = "radio"value = "female" / ><span > Chị < /span></label > </div>
                                <div class="devvn_cmt_input">
                                    <input name="devvn_cmt_replyname" type="text" id="devvn_cmt_replyname" placeholder="Họ tên (bắt buộc)"/ ></div>
                                                                                                    <div class="devvn_cmt_input">
                                        <input name="devvn_cmt_replyemail" type="text" id="devvn_cmt_replyemail" placeholder="Email"/ ></div>
                                                                                        <div class="devvn_cmt_submit">
                                <button type="submit" id="devvn_cmt_replysubmit">Gửi</button > <input type = "hidden"value = "13832"name = "post_id" > <input type = "hidden"value = "{{{ data.parent_id }}}"name = "cmt_parent_id" > </div></div > <a href = "javascript:void(0)"class = "devvn_cancel_cmt" > × < /a></form > </script>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="related related-products-wrapper product-section">
                    <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">类似产品</font></font>
                    </h3>
                    <div class="row slider-nav-outside slider-nav-light has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-circle slider-nav-push" data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}">
                      <div class="product-small col has-hover product type-product post-1196 status-publish instock product_cat-vong-tay-tram-huong-108 product_cat-vong-tay-tram-huong product_cat-vong-tay-tram-huong-nam product_cat-vong-tay-tram-huong-nu has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="col-inner">
                          <div class="product-small box ">
                            <div class="box-image">
                              <div class="image-fade_in_back">
                                <a href="https://thienmochuong.com/san-pham/vong-tram-huong-108-hat-viet-nam-xam-6" aria-label="108 颗沉香珠手链 - 越南沉香 Khanh Hoa VIP">
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="越南沉香35年" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2019/07/tram-huong-viet-nam-1.jpg 600w, https://thienmochuong.com/wp-content/uploads/2019/07/tram-huong-viet-nam-1-247x247.jpg 247w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/07/tram-huong-viet-nam-1.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2019/07/tram-huong-viet-nam-1.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Trầm hương việt nam 35 năm" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2019/07/tram-huong-viet-nam-1.jpg 600w, https://thienmochuong.com/wp-content/uploads/2019/07/tram-huong-viet-nam-1-247x247.jpg 247w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                  <div class="devvn_image_border_product">
                                    <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-400x400.png 400w, https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-280x280.png 280w, https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-1536x1536.png 1536w, https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-2048x2048.png 2048w, https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-510x510.png 510w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-400x400.png">
                                    <noscript>
                                      <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-400x400.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-400x400.png 400w, https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-280x280.png 280w, https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-1536x1536.png 1536w, https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-2048x2048.png 2048w, https://thienmochuong.com/wp-content/uploads/2019/07/Frames-900X900-TMH-510x510.png 510w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                  </div>
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="show-on-hover absolute fill hide-for-small back-image" alt="108粒越南灰沉香木珠手链" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2019/07/Vòng-tay-Trầm-Hương-108-Hạt-Việt-Nam-Xám-4-e1580841883722.jpg 600w, https://thienmochuong.com/wp-content/uploads/2019/07/Vòng-tay-Trầm-Hương-108-Hạt-Việt-Nam-Xám-4-e1580841883722-247x247.jpg 247w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/07/Vòng-tay-Trầm-Hương-108-Hạt-Việt-Nam-Xám-4-e1580841883722.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2019/07/Vòng-tay-Trầm-Hương-108-Hạt-Việt-Nam-Xám-4-e1580841883722.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="Vòng tay Trầm Hương 108 Hạt Việt Nam Xám" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2019/07/Vòng-tay-Trầm-Hương-108-Hạt-Việt-Nam-Xám-4-e1580841883722.jpg 600w, https://thienmochuong.com/wp-content/uploads/2019/07/Vòng-tay-Trầm-Hương-108-Hạt-Việt-Nam-Xám-4-e1580841883722-247x247.jpg 247w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                <div class="wishlist-icon">
                                  <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                                    <i class="icon-heart-o"></i>
                                  </button>
                                  <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1196  wishlist-fragment on-first-load" data-fragment-ref="1196" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;1196&quot;,&quot;parent_product_id&quot;:&quot;1196&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                      <!-- ADD TO WISHLIST -->
                                      <div class="yith-wcwl-add-button">
                                        <a href="?add_to_wishlist=1196&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="1196" data-product-type="variable" data-original-product-id="1196" data-title="Thêm vào yêu thích" rel="nofollow">
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                          </span>
                                        </a>
                                      </div>
                                      <!-- COUNT TEXT --></div>
                                  </div>
                                </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                              <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title">
                                  <a href="https://thienmochuong.com/san-pham/vong-tram-huong-108-hat-viet-nam-xam-6" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">108 颗沉香珠手链 – 越南沉香 Khanh Hoa VIP</font></font>
                                  </a>
                                </p>
                              </div>
                              <div class="price-wrapper">
                                <div class="devvn_product_price">
                                  <span class="price">
                                    <ins class="highlight">
                                      <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">50,000,000&nbsp;</font></font>
                                          <span class="woocommerce-Price-currencySymbol">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">越南盾</font></font>
                                          </span>
                                        </bdi>
                                      </span>
                                    </ins>
                                  </span>
                                </div>
                                <div class="devvn_product_rating">
                                  <div class="star-rating star-rating--inline" role="img" aria-label="评分 5.00（满分 5 星）">
                                    <span style="width:100%">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">评分 5.00（满分</font></font>
                                      <strong class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">5</font></font>
                                      </strong>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">星）</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_review_count">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">7 条评论</font></font>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <span class="gtm4wp_productdata" style="display:none; visibility:hidden;" data-gtm4wp_product_data="{&quot;internal_id&quot;:1196,&quot;item_id&quot;:1196,&quot;item_name&quot;:&quot;V\u00f2ng Tay Tr\u1ea7m H\u01b0\u01a1ng 108 H\u1ea1t - Tr\u1ea7m H\u01b0\u01a1ng Vi\u1ec7t Nam Kh\u00e1nh H\u00f2a VIP&quot;,&quot;sku&quot;:1196,&quot;price&quot;:50000000,&quot;stocklevel&quot;:null,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng 108 H\u1ea1t&quot;,&quot;id&quot;:1196,&quot;productlink&quot;:&quot;https:\/\/thienmochuong.com\/san-pham\/vong-tram-huong-108-hat-viet-nam-xam-6&quot;,&quot;item_list_name&quot;:&quot;Related Products&quot;,&quot;index&quot;:2,&quot;product_type&quot;:&quot;variable&quot;,&quot;item_brand&quot;:&quot;&quot;}"></span>
                        </div>
                      </div>
                      <div class="product-small col has-hover product type-product post-53795 status-publish instock product_cat-hang-moi-ve product_cat-san-pham-moi product_cat-vong-tay-tram-huong product_cat-vong-tay-tram-huong-nam product_cat-vong-tay-tram-huong-nu has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="col-inner">
                          <div class="product-small box ">
                            <div class="box-image">
                              <div class="image-fade_in_back">
                                <a href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-ty-huu-tram" aria-label="沉香貔貅手链 – Tram Toc 越南">
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="沉香貔貅手链 – Tram Toc 越南" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1.jpg 900w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1-400x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Vòng tay Trầm Hương Tỳ Hưu Trầm – Trầm Tốc Việt Nam" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2023/09/vong-go-tram-huong-3-scaled-1.jpg 900w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="show-on-hover absolute fill hide-for-small back-image" alt="越南沉香种子的特写" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1.jpg 1100w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1-400x400.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="Cận cảnh hạt trầm hương tốc VN" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-hat-toc-vn1.jpg 1100w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                <div class="wishlist-icon">
                                  <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                                    <i class="icon-heart-o"></i>
                                  </button>
                                  <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-53795  wishlist-fragment on-first-load" data-fragment-ref="53795" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;53795&quot;,&quot;parent_product_id&quot;:&quot;53795&quot;,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                      <!-- ADD TO WISHLIST -->
                                      <div class="yith-wcwl-add-button">
                                        <a href="?add_to_wishlist=53795&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="53795" data-product-type="simple" data-original-product-id="53795" data-title="Thêm vào yêu thích" rel="nofollow">
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                          </span>
                                        </a>
                                      </div>
                                      <!-- COUNT TEXT --></div>
                                  </div>
                                </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                              <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title">
                                  <a href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-ty-huu-tram" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">沉香貔貅手链 – Tram Toc 越南</font></font>
                                  </a>
                                </p>
                              </div>
                              <div class="price-wrapper">
                                <div class="devvn_product_price">
                                  <span class="price">
                                    <span class="woocommerce-Price-amount amount">
                                      <bdi>
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">1,590,000&nbsp;</font></font>
                                        <span class="woocommerce-Price-currencySymbol">
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">越南盾</font></font>
                                        </span>
                                      </bdi>
                                    </span>
                                  </span>
                                </div>
                                <div class="devvn_product_rating">
                                  <div class="star-rating" role="img" aria-label="评分 0（满分 5 星）">
                                    <span style="width:0%">
                                      <strong class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">0</font></font>
                                      </strong>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">分（满分 5 分）</font></font>
                                      <span class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">0</font></font>
                                      </span>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">评价</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_review_count">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">0 条评论</font></font>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <span class="gtm4wp_productdata" style="display:none; visibility:hidden;" data-gtm4wp_product_data="{&quot;internal_id&quot;:53795,&quot;item_id&quot;:53795,&quot;item_name&quot;:&quot;Vo\u0300ng tay Tr\u00e2\u0300m H\u01b0\u01a1ng T\u1ef3 H\u01b0u Tr\u1ea7m \u2013 Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam&quot;,&quot;sku&quot;:53795,&quot;price&quot;:1590000,&quot;stocklevel&quot;:null,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;H\u00e0ng m\u1edbi v\u1ec1&quot;,&quot;id&quot;:53795,&quot;productlink&quot;:&quot;https:\/\/thienmochuong.com\/san-pham\/vong-tay-tram-huong-ty-huu-tram&quot;,&quot;item_list_name&quot;:&quot;Related Products&quot;,&quot;index&quot;:3,&quot;product_type&quot;:&quot;simple&quot;,&quot;item_brand&quot;:&quot;&quot;}"></span>
                        </div>
                      </div>
                      <div class="product-small col has-hover product type-product post-3705 status-publish last instock product_cat-vong-tay-tram-huong product_cat-bst-ban-sac-tram-huong product_cat-bst-binh-an product_cat-hang-moi-ve product_cat-vong-tay-tram-huong-nam product_cat-vong-tay-tram-huong-nu product_cat-vong-tay-tram-huong-best-seller has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="col-inner">
                          <div class="product-small box ">
                            <div class="box-image">
                              <div class="image-fade_in_back">
                                <a href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-phat-ban-menh-17" aria-label="佛缘沉香手链 - Tram Toc Vietnam">
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="佛缘沉香手链 - Tram Toc Vietnam" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong.jpg 1745w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-400x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Vòng tay gỗ Trầm Hương Phật Bản Mệnh - Trầm Tốc Việt Nam" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2019/08/phat-ban-menh-don-thien-moc-huong.jpg 1745w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2019/08/p-1.jpg 600w, https://thienmochuong.com/wp-content/uploads/2019/08/p-1-247x247.jpg 247w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/08/p-1.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2019/08/p-1.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2019/08/p-1.jpg 600w, https://thienmochuong.com/wp-content/uploads/2019/08/p-1-247x247.jpg 247w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                <div class="wishlist-icon">
                                  <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                                    <i class="icon-heart-o"></i>
                                  </button>
                                  <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-3705  wishlist-fragment on-first-load" data-fragment-ref="3705" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;3705&quot;,&quot;parent_product_id&quot;:&quot;3705&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                      <!-- ADD TO WISHLIST -->
                                      <div class="yith-wcwl-add-button">
                                        <a href="?add_to_wishlist=3705&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="3705" data-product-type="variable" data-original-product-id="3705" data-title="Thêm vào yêu thích" rel="nofollow">
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                          </span>
                                        </a>
                                      </div>
                                      <!-- COUNT TEXT --></div>
                                  </div>
                                </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                              <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title">
                                  <a href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-phat-ban-menh-17" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">佛缘沉香手链 - Tram Toc Vietnam</font></font>
                                  </a>
                                </p>
                              </div>
                              <div class="price-wrapper">
                                <div class="devvn_product_price">
                                  <span class="price">
                                    <ins class="highlight">
                                      <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">1,990,000&nbsp;</font></font>
                                          <span class="woocommerce-Price-currencySymbol">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">越南盾</font></font>
                                          </span>
                                        </bdi>
                                      </span>
                                    </ins>
                                  </span>
                                </div>
                                <div class="devvn_product_rating">
                                  <div class="star-rating star-rating--inline" role="img" aria-label="评分 5.00（满分 5 星）">
                                    <span style="width:100%">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">评分 5.00（满分</font></font>
                                      <strong class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">5</font></font>
                                      </strong>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">星）</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_review_count">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">6 条评论</font></font>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <span class="gtm4wp_productdata" style="display:none; visibility:hidden;" data-gtm4wp_product_data="{&quot;internal_id&quot;:3705,&quot;item_id&quot;:3705,&quot;item_name&quot;:&quot;V\u00f2ng tay g\u1ed7 Tr\u1ea7m H\u01b0\u01a1ng Ph\u1eadt B\u1ea3n M\u1ec7nh - Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam&quot;,&quot;sku&quot;:3705,&quot;price&quot;:1990000,&quot;stocklevel&quot;:null,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;V\u00f2ng Tay Tr\u1ea7m H\u01b0\u01a1ng&quot;,&quot;id&quot;:3705,&quot;productlink&quot;:&quot;https:\/\/thienmochuong.com\/san-pham\/vong-tay-tram-huong-phat-ban-menh-17&quot;,&quot;item_list_name&quot;:&quot;Related Products&quot;,&quot;index&quot;:4,&quot;product_type&quot;:&quot;variable&quot;,&quot;item_brand&quot;:&quot;&quot;}"></span>
                        </div>
                      </div>
                      <div class="product-small col has-hover product type-product post-43488 status-publish first instock product_cat-hang-moi-ve product_cat-vong-tay-tram-huong product_cat-vong-tay-tram-huong-nam product_cat-vong-tay-tram-huong-best-seller has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="col-inner">
                          <div class="product-small box ">
                            <div class="box-image">
                              <div class="image-fade_in_back">
                                <a href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-tron-don-toc-xi-viet-nam" aria-label="单颗圆形沉香手链 - Tram Toc Vietnam">
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="单颗圆形沉香手链 - Tram Toc Vietnam" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong.jpg 2000w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-400x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Vòng Tay Trầm Hương Tròn Đơn - Trầm Tốc Việt Nam" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2023/03/vong-tram-tron-don-thien-moc-huong.jpg 2000w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="show-on-hover absolute fill hide-for-small back-image" alt="单颗圆形沉香手链 - Tram Toc Vietnam" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12.jpg 2000w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-400x400.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="Vòng Tay Trầm Hương Tròn Đơn - Trầm Tốc Việt Nam" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tay-tram-huong-thien-moc-huong-12.jpg 2000w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                <div class="wishlist-icon">
                                  <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                                    <i class="icon-heart-o"></i>
                                  </button>
                                  <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-43488  wishlist-fragment on-first-load" data-fragment-ref="43488" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;43488&quot;,&quot;parent_product_id&quot;:&quot;43488&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                      <!-- ADD TO WISHLIST -->
                                      <div class="yith-wcwl-add-button">
                                        <a href="?add_to_wishlist=43488&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="43488" data-product-type="variable" data-original-product-id="43488" data-title="Thêm vào yêu thích" rel="nofollow">
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                          </span>
                                        </a>
                                      </div>
                                      <!-- COUNT TEXT --></div>
                                  </div>
                                </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                              <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title">
                                  <a href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-tron-don-toc-xi-viet-nam" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">单圆沉香手链 – Tram Toc 越南</font></font>
                                  </a>
                                </p>
                              </div>
                              <div class="price-wrapper">
                                <div class="devvn_product_price">
                                  <span class="price">
                                    <ins class="highlight">
                                      <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">990,000&nbsp;</font></font>
                                          <span class="woocommerce-Price-currencySymbol">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">越南盾</font></font>
                                          </span>
                                        </bdi>
                                      </span>
                                    </ins>
                                  </span>
                                </div>
                                <div class="devvn_product_rating">
                                  <div class="star-rating star-rating--inline" role="img" aria-label="评分 5.00（满分 5 星）">
                                    <span style="width:100%">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">评分 5.00（满分</font></font>
                                      <strong class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">5</font></font>
                                      </strong>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">星）</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_review_count">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">6 条评论</font></font>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <span class="gtm4wp_productdata" style="display:none; visibility:hidden;" data-gtm4wp_product_data="{&quot;internal_id&quot;:43488,&quot;item_id&quot;:43488,&quot;item_name&quot;:&quot;V\u00f2ng Tay Tr\u1ea7m H\u01b0\u01a1ng Tr\u00f2n \u0110\u01a1n - Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam&quot;,&quot;sku&quot;:43488,&quot;price&quot;:990000,&quot;stocklevel&quot;:null,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;&quot;,&quot;id&quot;:43488,&quot;productlink&quot;:&quot;https:\/\/thienmochuong.com\/san-pham\/vong-tay-tram-huong-tron-don-toc-xi-viet-nam&quot;,&quot;item_list_name&quot;:&quot;Related Products&quot;,&quot;index&quot;:5,&quot;product_type&quot;:&quot;variable&quot;,&quot;item_brand&quot;:&quot;&quot;}"></span>
                        </div>
                      </div>
                      <div class="product-small col has-hover product type-product post-40971 status-publish instock product_cat-hang-moi-ve product_cat-vong-tay-tram-huong product_cat-vong-tay-tram-huong-nam has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="col-inner">
                          <div class="devvn_label_product">
                            <span class="new">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">新产品</font></font>
                            </span>
                          </div>
                          <div class="product-small box ">
                            <div class="box-image">
                              <div class="image-fade_in_back">
                                <a href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-la-bua-tay-tang-vn-van-doc" aria-label="西藏沉香手链 - 垂直纹理越南沉香">
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="西藏沉香手链 VN 12-14 年" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn.jpg 600w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn-400x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Vòng tay Trầm Hương Lá Bùa Tây Tạng VN 12-14 NĂM" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-la-bua-tay-tang-vn.jpg 600w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="show-on-hover absolute fill hide-for-small back-image" alt="西藏沉香手链 VN 12-14 年" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-60x60.jpg 60w, https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1.jpg 600w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-400x400.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="Vòng tay Trầm Hương Lá Bùa Tây Tạng VN 12-14 NĂM" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1-60x60.jpg 60w, https://thienmochuong.com/wp-content/uploads/2022/12/IMG_8028-2-1.jpg 600w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                <div class="wishlist-icon">
                                  <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                                    <i class="icon-heart-o"></i>
                                  </button>
                                  <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-40971  wishlist-fragment on-first-load" data-fragment-ref="40971" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;40971&quot;,&quot;parent_product_id&quot;:&quot;40971&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                      <!-- ADD TO WISHLIST -->
                                      <div class="yith-wcwl-add-button">
                                        <a href="?add_to_wishlist=40971&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="40971" data-product-type="variable" data-original-product-id="40971" data-title="Thêm vào yêu thích" rel="nofollow">
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                          </span>
                                        </a>
                                      </div>
                                      <!-- COUNT TEXT --></div>
                                  </div>
                                </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                              <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title">
                                  <a href="https://thienmochuong.com/san-pham/vong-tay-tram-huong-la-bua-tay-tang-vn-van-doc" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">西藏沉香手链 – 垂直纹理越南沉香</font></font>
                                  </a>
                                </p>
                              </div>
                              <div class="price-wrapper">
                                <div class="devvn_product_price">
                                  <span class="price">
                                    <ins class="highlight">
                                      <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">3,490,000&nbsp;</font></font>
                                          <span class="woocommerce-Price-currencySymbol">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">越南盾</font></font>
                                          </span>
                                        </bdi>
                                      </span>
                                    </ins>
                                  </span>
                                </div>
                                <div class="devvn_product_rating">
                                  <div class="star-rating star-rating--inline" role="img" aria-label="评分 4.00（满分 5 星）">
                                    <span style="width:80%">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">评分 4.00（满分</font></font>
                                      <strong class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">5</font></font>
                                      </strong>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">星）</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_review_count">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">1 条评论</font></font>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <span class="gtm4wp_productdata" style="display:none; visibility:hidden;" data-gtm4wp_product_data="{&quot;internal_id&quot;:40971,&quot;item_id&quot;:40971,&quot;item_name&quot;:&quot;V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng L\u00e1 B\u00f9a T\u00e2y T\u1ea1ng - Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam V\u00e2n D\u1ecdc&quot;,&quot;sku&quot;:40971,&quot;price&quot;:3490000,&quot;stocklevel&quot;:null,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;H\u00e0ng m\u1edbi v\u1ec1&quot;,&quot;id&quot;:40971,&quot;productlink&quot;:&quot;https:\/\/thienmochuong.com\/san-pham\/vong-tay-tram-huong-la-bua-tay-tang-vn-van-doc&quot;,&quot;item_list_name&quot;:&quot;Related Products&quot;,&quot;index&quot;:6,&quot;product_type&quot;:&quot;variable&quot;,&quot;item_brand&quot;:&quot;&quot;}"></span>
                        </div>
                      </div>
                      <div class="product-small col has-hover product type-product post-35553 status-publish instock product_cat-vong-tay-tram-huong product_cat-hang-moi-ve product_cat-vong-tay-tram-huong-nam has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="col-inner">
                          <div class="product-small box ">
                            <div class="box-image">
                              <div class="image-fade_in_back">
                                <a href="https://thienmochuong.com/san-pham/vong-tram-huong-truc-indo-vip" aria-label="单根竹柱沉香手链 - 印度沉香花朵图案">
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="印度 Van Hoa 竹沉香手链" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm.jpg 1805w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-400x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Vòng trầm hương trúc Indo Vân Hoa" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-1536x1536.jpg 1536w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/vong-tram-huong-truc-indo-vip-10mm.jpg 1805w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="show-on-hover absolute fill hide-for-small back-image" alt="印度万和竹柱沉香手链" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-60x60.jpg 60w, https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1.jpg 600w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-400x400.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="Vòng trầm hương trụ trúc Indo Vân Hoa" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1-60x60.jpg 60w, https://thienmochuong.com/wp-content/uploads/2022/07/IMG_1586-1-1.jpg 600w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                <div class="wishlist-icon">
                                  <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                                    <i class="icon-heart-o"></i>
                                  </button>
                                  <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-35553  wishlist-fragment on-first-load" data-fragment-ref="35553" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;35553&quot;,&quot;parent_product_id&quot;:&quot;35553&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                      <!-- ADD TO WISHLIST -->
                                      <div class="yith-wcwl-add-button">
                                        <a href="?add_to_wishlist=35553&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="35553" data-product-type="variable" data-original-product-id="35553" data-title="Thêm vào yêu thích" rel="nofollow">
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                          </span>
                                        </a>
                                      </div>
                                      <!-- COUNT TEXT --></div>
                                  </div>
                                </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                              <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title">
                                  <a href="https://thienmochuong.com/san-pham/vong-tram-huong-truc-indo-vip" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">单根竹柱沉香手链 – 印度沉香花朵图案</font></font>
                                  </a>
                                </p>
                              </div>
                              <div class="price-wrapper">
                                <div class="devvn_product_price">
                                  <span class="price">
                                    <ins class="highlight">
                                      <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">4,790,000&nbsp;</font></font>
                                          <span class="woocommerce-Price-currencySymbol">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">越南盾</font></font>
                                          </span>
                                        </bdi>
                                      </span>
                                    </ins>
                                  </span>
                                </div>
                                <div class="devvn_product_rating">
                                  <div class="star-rating star-rating--inline" role="img" aria-label="评分 5.00（满分 5 星）">
                                    <span style="width:100%">
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">评分 5.00（满分</font></font>
                                      <strong class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">5</font></font>
                                      </strong>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">星）</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_review_count">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">1 条评论</font></font>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <span class="gtm4wp_productdata" style="display:none; visibility:hidden;" data-gtm4wp_product_data="{&quot;internal_id&quot;:35553,&quot;item_id&quot;:35553,&quot;item_name&quot;:&quot;V\u00f2ng Tay G\u1ed7 Tr\u1ea7m Tr\u1ee5 Tr\u00fac \u0110\u01a1n - Tr\u1ea7m H\u01b0\u01a1ng Indo V\u00e2n Hoa&quot;,&quot;sku&quot;:35553,&quot;price&quot;:4790000,&quot;stocklevel&quot;:67,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;V\u00f2ng Tay Tr\u1ea7m H\u01b0\u01a1ng&quot;,&quot;id&quot;:35553,&quot;productlink&quot;:&quot;https:\/\/thienmochuong.com\/san-pham\/vong-tram-huong-truc-indo-vip&quot;,&quot;item_list_name&quot;:&quot;Related Products&quot;,&quot;index&quot;:7,&quot;product_type&quot;:&quot;variable&quot;,&quot;item_brand&quot;:&quot;&quot;}"></span>
                        </div>
                      </div>
                      <div class="product-small col has-hover product type-product post-40960 status-publish last instock product_cat-vong-tay-tram-huong-ty-huu product_cat-hang-moi-ve product_cat-vong-tay-tram-huong product_cat-vong-tay-tram-huong-nam product_cat-vong-tay-tram-huong-mix-charm-bac has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="col-inner">
                          <div class="devvn_label_product">
                            <span class="new">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">新产品</font></font>
                            </span>
                          </div>
                          <div class="product-small box ">
                            <div class="box-image">
                              <div class="image-fade_in_back">
                                <a href="https://thienmochuong.com/san-pham/vong-tram-huong-tron-don-ty-huu-bac-thai-indo-van-hoa" aria-label="圆形沉香手链单只泰银貔貅 - 印度沉香 Van Hoa">
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="圆形沉香手链单只貔貅泰银印度花卉图案" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo.jpg 600w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo-400x400.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Vòng Trầm Hương Tròn Đơn Tỳ Hưu Bạc Thái Indo Vân Hoa" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/12/vong-tram-huong-ty-huu-bac-thai-indo.jpg 600w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="show-on-hover absolute fill hide-for-small back-image" alt="带有花卉图案的印度沉香木粒的特写" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa.jpg 1100w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa-400x400.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa-400x400.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="Cận cảnh hạt trầm hương indo vân hoa" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2022/09/can-canh-van-hoa.jpg 1100w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                <div class="wishlist-icon">
                                  <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                                    <i class="icon-heart-o"></i>
                                  </button>
                                  <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-40960  wishlist-fragment on-first-load" data-fragment-ref="40960" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;40960&quot;,&quot;parent_product_id&quot;:&quot;40960&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                      <!-- ADD TO WISHLIST -->
                                      <div class="yith-wcwl-add-button">
                                        <a href="?add_to_wishlist=40960&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="40960" data-product-type="variable" data-original-product-id="40960" data-title="Thêm vào yêu thích" rel="nofollow">
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                          </span>
                                        </a>
                                      </div>
                                      <!-- COUNT TEXT --></div>
                                  </div>
                                </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                              <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title">
                                  <a href="https://thienmochuong.com/san-pham/vong-tram-huong-tron-don-ty-huu-bac-thai-indo-van-hoa" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">圆形沉香手链单只泰银貔貅 – 印度沉香 Van Hoa</font></font>
                                  </a>
                                </p>
                              </div>
                              <div class="price-wrapper">
                                <div class="devvn_product_price">
                                  <span class="price">
                                    <ins class="highlight">
                                      <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">5,090,000&nbsp;</font></font>
                                          <span class="woocommerce-Price-currencySymbol">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">越南盾</font></font>
                                          </span>
                                        </bdi>
                                      </span>
                                    </ins>
                                  </span>
                                </div>
                                <div class="devvn_product_rating">
                                  <div class="star-rating" role="img" aria-label="评分 0（满分 5 星）">
                                    <span style="width:0%">
                                      <strong class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">0</font></font>
                                      </strong>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">分（满分 5 分）</font></font>
                                      <span class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">0</font></font>
                                      </span>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">评价</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_review_count">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">0 条评论</font></font>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <span class="gtm4wp_productdata" style="display:none; visibility:hidden;" data-gtm4wp_product_data="{&quot;internal_id&quot;:40960,&quot;item_id&quot;:40960,&quot;item_name&quot;:&quot;V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng Tr\u00f2n \u0110\u01a1n T\u1ef3 H\u01b0u B\u1ea1c Th\u00e1i - Tr\u1ea7m H\u01b0\u01a1ng Indo V\u00e2n Hoa&quot;,&quot;sku&quot;:40960,&quot;price&quot;:5090000,&quot;stocklevel&quot;:null,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;V\u00f2ng Tay Tr\u1ea7m H\u01b0\u01a1ng T\u1ef3 H\u01b0u&quot;,&quot;id&quot;:40960,&quot;productlink&quot;:&quot;https:\/\/thienmochuong.com\/san-pham\/vong-tram-huong-tron-don-ty-huu-bac-thai-indo-van-hoa&quot;,&quot;item_list_name&quot;:&quot;Related Products&quot;,&quot;index&quot;:8,&quot;product_type&quot;:&quot;variable&quot;,&quot;item_brand&quot;:&quot;&quot;}"></span>
                        </div>
                      </div>
                      <div class="product-small col has-hover product type-product post-13190 status-publish first instock product_cat-vong-tay-tram-huong-boc-vang product_cat-vong-tay-tram-huong product_cat-vong-tay-tram-huong-nam product_cat-vong-tram-huong-philippines has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="col-inner">
                          <div class="product-small box ">
                            <div class="box-image">
                              <div class="image-fade_in_back">
                                <a href="https://thienmochuong.com/san-pham/vong-tay-go-tram-huong-tru-truc-don-boc-vang-philippines" aria-label="沉香木手链单根竹柱镀金 - Philip Agarwood 30 年">
                                  <img width="400" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20400'%3E%3C/svg%3E" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="沉香木手链单根竹柱 菲律宾镀金" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/01/Vòng-tay-trầm-hương-thiên-mộc-hương-2.jpg 600w, https://thienmochuong.com/wp-content/uploads/2021/01/Vòng-tay-trầm-hương-thiên-mộc-hương-2-247x247.jpg 247w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/01/Vòng-tay-trầm-hương-thiên-mộc-hương-2.jpg">
                                  <noscript>
                                    <img width="400" height="400" src="https://thienmochuong.com/wp-content/uploads/2021/01/Vòng-tay-trầm-hương-thiên-mộc-hương-2.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Vòng Tay gỗ Trầm Hương Trụ trúc đơn bọc vàng Philippines" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2021/01/Vòng-tay-trầm-hương-thiên-mộc-hương-2.jpg 600w, https://thienmochuong.com/wp-content/uploads/2021/01/Vòng-tay-trầm-hương-thiên-mộc-hương-2-247x247.jpg 247w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>
                                </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                <div class="wishlist-icon">
                                  <button class="wishlist-button button is-outline circle icon" aria-label="愿望清单">
                                    <i class="icon-heart-o"></i>
                                  </button>
                                  <div class="wishlist-popup dark">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-13190  wishlist-fragment on-first-load" data-fragment-ref="13190" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;13190&quot;,&quot;parent_product_id&quot;:&quot;13190&quot;,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Xem danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;S\u1ea3n ph\u1ea9m \u0111\u00e3 c\u00f3 trong danh s\u00e1ch y\u00eau th\u00edch!&quot;,&quot;product_added_text&quot;:&quot;\u0110\u00e3 th\u00eam v\u00e0o danh s\u00e1ch y\u00eau th\u00edch&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                      <!-- ADD TO WISHLIST -->
                                      <div class="yith-wcwl-add-button">
                                        <a href="?add_to_wishlist=13190&amp;_wpnonce=2a19cac7eb" class="add_to_wishlist single_add_to_wishlist" data-product-id="13190" data-product-type="variable" data-original-product-id="13190" data-title="Thêm vào yêu thích" rel="nofollow">
                                          <span>
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">添加到收藏夹</font></font>
                                          </span>
                                        </a>
                                      </div>
                                      <!-- COUNT TEXT --></div>
                                  </div>
                                </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                              <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title">
                                  <a href="https://thienmochuong.com/san-pham/vong-tay-go-tram-huong-tru-truc-don-boc-vang-philippines" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">沉香木手链单根竹柱镀金 – Philip Agarwood 30 年</font></font>
                                  </a>
                                </p>
                              </div>
                              <div class="price-wrapper">
                                <div class="devvn_product_price">
                                  <span class="price">
                                    <ins class="highlight">
                                      <span class="woocommerce-Price-amount amount">
                                        <bdi>
                                          <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">32,790,000&nbsp;</font></font>
                                          <span class="woocommerce-Price-currencySymbol">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">越南盾</font></font>
                                          </span>
                                        </bdi>
                                      </span>
                                    </ins>
                                  </span>
                                </div>
                                <div class="devvn_product_rating">
                                  <div class="star-rating" role="img" aria-label="评分 0（满分 5 星）">
                                    <span style="width:0%">
                                      <strong class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">0</font></font>
                                      </strong>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">分（满分 5 分）</font></font>
                                      <span class="rating">
                                        <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">0</font></font>
                                      </span>
                                      <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">评价</font></font>
                                    </span>
                                  </div>
                                  <div class="devvn_review_count">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">0 条评论</font></font>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <span class="gtm4wp_productdata" style="display:none; visibility:hidden;" data-gtm4wp_product_data="{&quot;internal_id&quot;:13190,&quot;item_id&quot;:13190,&quot;item_name&quot;:&quot;V\u00f2ng Tay g\u1ed7 Tr\u1ea7m H\u01b0\u01a1ng Tr\u1ee5 tr\u00fac \u0111\u01a1n b\u1ecdc v\u00e0ng - Tr\u1ea7m Philip 30 n\u0103m&quot;,&quot;sku&quot;:13190,&quot;price&quot;:32790000,&quot;stocklevel&quot;:null,&quot;stockstatus&quot;:&quot;instock&quot;,&quot;google_business_vertical&quot;:&quot;retail&quot;,&quot;item_category&quot;:&quot;V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng B\u1ecdc V\u00e0ng&quot;,&quot;id&quot;:13190,&quot;productlink&quot;:&quot;https:\/\/thienmochuong.com\/san-pham\/vong-tay-go-tram-huong-tru-truc-don-boc-vang-philippines&quot;,&quot;item_list_name&quot;:&quot;Related Products&quot;,&quot;index&quot;:9,&quot;product_type&quot;:&quot;variable&quot;,&quot;item_brand&quot;:&quot;&quot;}"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="text-2881464581" class="text">
                    <style>#text-2881464581 { text-align: center; }</style></div>
                </div>
              </div>
            </div>
            <div class="devvn_product_list_viewed"></div>
          </div>
        </div>
        <!-- shop container --></main>
      <footer id="footer" class="footer-wrapper">
        <!-- FOOTER 1 -->
        <!-- FOOTER 2 -->
        <div class="footer-widgets footer footer-2 dark">
          <div class="row dark large-columns-1 mb-0">
            <div id="custom_html-2" class="widget_text col pb-0 widget widget_custom_html">
              <div class="textwidget custom-html-widget">
                <a href="https://thienmochuong.com/" class="devvn_footer_logo">
                  <img class="alignnone size-full wp-image-33498" src="https://thienmochuong.com/wp-content/uploads/2022/06/Logo-Thien-Moc-Huong.png" alt=""></a>
              </div>
            </div>
            <div id="custom_html-3" class="widget_text col pb-0 widget widget_custom_html">
              <div class="textwidget custom-html-widget">
                <div class="wpcf7 js" id="wpcf7-f33529-o2" lang="vi" dir="ltr">
                  <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                  </div>
                  <form action="/san-pham/vong-tay-tram-huong-108-hat#wpcf7-f33529-o2" method="post" class="wpcf7-form init" aria-label="联系表格" novalidate="novalidate" data-status="init">
                    <div style="display: none;">
                      <input type="hidden" name="_wpcf7" value="33529">
                      <input type="hidden" name="_wpcf7_version" value="5.9.5">
                      <input type="hidden" name="_wpcf7_locale" value="vi">
                      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f33529-o2">
                      <input type="hidden" name="_wpcf7_container_post" value="0">
                      <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                      <input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA4D51BsdnJhGZOMqK4L_re2HzClUYJh0QEkjS1DId5OwJjdUozlpNB1wh1lIhjMbaYyh6xqtRbmFdNLpluUQzYYfVUGShqWMFswbi-dXNK5lQRp3BNkCsVIhS0dskObWhlpiuacNXX-CHiQ87Xh26a9HU3__vg2BEOr6qEo_gj4QN3Wem7Whm0scdiTUbvrtcnanNr_Zfn58vYVr5_zYKoAfPD3WtsiW5Rn1-hPIr_ndoPGcaAHmVMaBBoJwuQKjlBVgO3w8L0MRLDjU-rzA7bF6cMKYIgxVCgpR84bPxY9nP5wRlCH2brVIDr7x27ACKNzA0cwZBq-Y5BPFuUqh7PcNWohoZHm3cRULolYi_B6Z6op-78yrcGBWI6oRLPWbWD4_lweGrWgZwj_xTHeJ94j6MFjYRG_jXRE3OU_yILx_-PIlv6lFNdJbIU_SdUMvsv_7DOM_pUaN8ynpMV6Viinn836VWPC3du9s6l-R1WddyBylrqFgUbTJyDTEJBL_wIefNWdTVrH8YXTDXsEtB8vHewsJkM7P0tI5Knv8DAyRWIAoHxKC3OnfZ_nChHV7mq1mEM5PYBzOKNt20balYZQk6i2cbhtBTuN8bq-_KR8qiDlfBisqXIFF_9kxAjIb_S0YM2PJE17cj4UcUANRDhPV3FiHW1oGNZdNGEE4KYZOhe3D3Xl8GLBjk2RBUuxIxrd-llQ1HAFTv-ZtXTB3frGEVR70aq0odhnv79oZovRCUvfoCM5IYj_NjPogp0foSXO08ao1h1UU2YUaEY6DN97NHkq11haF9sfG60VkOY5-zYXGHNf3oAJPke3fLKTpEzyj5Edhikym9M_ZA6RHuKlZuCkpSs7Ismh_wPKTSfUECPfGpeiy6gvAvnuHoPH8yy2cg9gWFWXd9kNoFMDaAew9SfDug"></div>
                    <div class="devvn_input_groups">
                      <span class="wpcf7-form-control-wrap" data-name="dev_email">
                        <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email dev_email" aria-required="true" aria-invalid="false" placeholder="输入您的电子邮件" value="" type="email" name="dev_email"></span>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                          <input class="wpcf7-form-control wpcf7-submit has-spinner devvn_submit" type="submit" value="登记">
                          <span class="wpcf7-spinner"></span>
                        </font>
                      </font>
                    </div>
                    <input type="hidden" class="wpcf7-pum" value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}">
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                  </form>
                </div>
              </div>
            </div>
            <div id="custom_html-4" class="widget_text col pb-0 widget widget_custom_html">
              <span class="widget-title">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">天木香股份公司</font></font>
              </span>
              <div class="is-divider small"></div>
              <div class="textwidget custom-html-widget">
                <ul class="devvn_list_contacts">
                  <li>
                    <a href="https://www.google.com/maps?cid=8030042156612643378" class="devvn_icon_location" rel="nofollow">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">旗舰店：河内市巴亭街 11 Kim Ma</font></font>
                    </a>
                  </li>
                  <li>
                    <a href="tel:0818348368" class="devvn_icon_call" rel="nofollow">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0818348368</font></font>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.google.com/maps?cid=501913319793993529" class="devvn_icon_location" rel="nofollow">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">胡志明市第一郡，古江坊，阮克如街 71 号</font></font>
                    </a>
                  </li>
                  <li>
                    <a href="tel:0933348368" class="devvn_icon_call" rel="nofollow">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0933348368</font></font>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:thienmochuong@gmail.com" class="devvn_icon_email" rel="nofollow">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">thienmochuong@gmail.com</font></font>
                    </a>
                  </li>
                  <li class="devvn_icon_gp">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">商业登记证：0314078409 - 2016年10月24日</font></font>
                  </li>
                  <li class="devvn_icon_clock">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">上午 8:00 — 晚上 10:00</font></font>
                  </li>
                </ul>
                <div class="social-icons follow-icons">
                  <a href="https://www.facebook.com/thienmochuongvn" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="在 Facebook 上关注" aria-label="在 Facebook 上关注">
                    <i class="icon-facebook"></i>
                  </a>
                  <a href="https://www.instagram.com/thienmochuongvn/" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon plain  instagram tooltip" title="在 Instagram 上关注" aria-label="在 Instagram 上关注">
                    <i class="icon-instagram"></i>
                  </a>
                  <a href="https://www.youtube.com/c/@VongtayTramHuongThienMocHuong?sub_confirmation=1" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon plain  youtube tooltip" title="在 YouTube 上关注" aria-label="在 YouTube 上关注">
                    <i class="icon-youtube"></i>
                  </a>
                </div>
              </div>
            </div>
            <div id="nav_menu-3" class="col pb-0 widget widget_nav_menu">
              <span class="widget-title">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">政策</font></font>
              </span>
              <div class="is-divider small"></div>
              <div class="menu-chinh-sach-container">
                <ul id="menu-chinh-sach" class="menu">
                  <li id="menu-item-33540" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-33540">
                    <a rel="privacy-policy" href="https://thienmochuong.com/chinh-sach-bao-ve-thong-tin-ca-nhan-cua-nguoi-tieu-dung">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">保护策略</font></font>
                    </a>
                  </li>
                  <li id="menu-item-33541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33541">
                    <a href="https://thienmochuong.com/thanhvien">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">会员政策</font></font>
                    </a>
                  </li>
                  <li id="menu-item-33542" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33542">
                    <a href="https://thienmochuong.com/chinh-sach-van-chuyen">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">运输政策</font></font>
                    </a>
                  </li>
                  <li id="menu-item-33543" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33543">
                    <a href="https://thienmochuong.com/dang-ky-dai-ly-phan-phoi-tram-huong">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">注册代理</font></font>
                    </a>
                  </li>
                  <li id="menu-item-56117" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-56117">
                    <a href="https://thienmochuong.com/faqs">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">FAQ – 常见问题</font></font>
                    </a>
                  </li>
                  <li id="menu-item-33544" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33544">
                    <a href="https://thienmochuong.com/doi-tra-va-bao-hanh">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">退货和保修</font></font>
                    </a>
                  </li>
                  <li id="menu-item-33546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33546">
                    <a href="https://thienmochuong.com/huong-dan-thanh-toan">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">付款说明</font></font>
                    </a>
                  </li>
                  <li id="menu-item-41950" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41950">
                    <a href="https://thienmochuong.com/thiet-ke-va-dich-vu-khach-hang">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">设计与服务</font></font>
                    </a>
                  </li>
                  <li id="menu-item-43150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43150">
                    <a href="https://thienmochuong.com/chinh-sach-thu-doi-charm-vang">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">周四 – 兑换金饰品</font></font>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div id="block_widget-16" class="col pb-0 widget block_widget">
              <span class="widget-title">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">关于我们</font></font>
              </span>
              <div class="is-divider small"></div>
              <div class="ux-menu stack stack-col justify-start">
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/gioi-thieu-trang-suc-tram-huong-thien-moc-huong">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">介绍</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/so-do-trang-web">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">网站地图</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/chuyen-muc/tin-tuc-chung">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">消息</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/lien-he">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">接触</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/chuyen-muc/tuyen-dung-nhan-su">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">招聘</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/dieu-khoan">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">服务条款</font></font>
                    </span>
                  </a>
                </div>
              </div>
              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1439844513">
                <a class="" href="http://online.gov.vn/Home/WebDetails/49243" target="_blank" rel="nofollow noopener">
                  <div class="img-inner dark">
                    <img width="1020" height="387" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201020%20387'%3E%3C/svg%3E" class="attachment-large size-large" alt="工业和贸易部 Tram Huong 的标志" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-1400x531.png 1400w, https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-800x303.png 800w, https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-768x291.png 768w, https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-600x228.png 600w, https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-e1584591820746.png 200w" data-lazy-sizes="(max-width: 1020px) 100vw, 1020px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-1400x531.png">
                    <noscript>
                      <img width="1020" height="387" src="https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-1400x531.png" class="attachment-large size-large" alt="icon bộ công thương tram huong" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-1400x531.png 1400w, https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-800x303.png 800w, https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-768x291.png 768w, https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-600x228.png 600w, https://thienmochuong.com/wp-content/uploads/2019/06/bct-note-e1584591820746.png 200w" sizes="(max-width: 1020px) 100vw, 1020px" /></noscript>
                  </div>
                </a>
                <style>#image_1439844513 { width: 100%; }</style></div>
              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1389625084">
                <a class="" href="https://www.dmca.com/Protection/Status.aspx?ID=3c511bb1-771d-4e3a-8c95-b4f2ab73ec52&amp;refurl=https://thienmochuong.com/" target="_blank" rel="nofollow noopener">
                  <div class="img-inner dark">
                    <img width="901" height="284" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20901%20284'%3E%3C/svg%3E" class="attachment-large size-large" alt="" decoding="async" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2022/06/dcma-logo.png 901w, https://thienmochuong.com/wp-content/uploads/2022/06/dcma-logo-510x161.png 510w" data-lazy-sizes="(max-width: 901px) 100vw, 901px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/dcma-logo.png">
                    <noscript>
                      <img width="901" height="284" src="https://thienmochuong.com/wp-content/uploads/2022/06/dcma-logo.png" class="attachment-large size-large" alt="" decoding="async" srcset="https://thienmochuong.com/wp-content/uploads/2022/06/dcma-logo.png 901w, https://thienmochuong.com/wp-content/uploads/2022/06/dcma-logo-510x161.png 510w" sizes="(max-width: 901px) 100vw, 901px" /></noscript>
                  </div>
                </a>
                <style>#image_1389625084 { width: 100%; }</style></div>
            </div>
            <div id="block_widget-17" class="col pb-0 widget block_widget">
              <span class="widget-title">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">收藏</font></font>
              </span>
              <div class="is-divider small"></div>
              <div class="ux-menu stack stack-col justify-start">
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong" target="_blank" rel="noopener">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">沉香手链</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/qua-tang-tram-huong-tmh" target="_blank" rel="noopener">
                    <i class="ux-menu-link__icon text-center icon-gift"></i>
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">沉香礼品</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-108" target="_blank" rel="noopener">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">108珠沉香项链</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-phong-thuy" target="_blank" rel="noopener">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">风水手链</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/" target="_blank" rel="noopener">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">沉香木</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/nhang-tram-huong-sach" target="_blank" rel="noopener">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">沉香</font></font>
                    </span>
                  </a>
                </div>
                <div class="ux-menu-link flex menu-item">
                  <a class="ux-menu-link__link flex" href="https://thienmochuong.com/vong-tay-tram-huong-boc-vang" target="_blank" rel="noopener">
                    <span class="ux-menu-link__text">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">镀金沉香手链</font></font>
                    </span>
                  </a>
                </div>
              </div>
              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_239785890">
                <a class="" href="https://www.tripadvisor.com.vn/Attraction_Review-g293925-d13335965-Reviews-Thien_Moc_Huong_Agarwood_Jewelry-Ho_Chi_Minh_City.html" target="_blank" rel="nofollow noopener">
                  <div class="img-inner dark">
                    <img width="148" height="87" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20148%2087'%3E%3C/svg%3E" class="attachment-thumbnail size-thumbnail" alt="icon tripadvisor 臺南香" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2019/06/asc_fix.png">
                    <noscript>
                      <img width="148" height="87" src="https://thienmochuong.com/wp-content/uploads/2019/06/asc_fix.png" class="attachment-thumbnail size-thumbnail" alt="icon tripadvisor tram huong" decoding="async" /></noscript>
                  </div>
                </a>
                <style>#image_239785890 { width: 100%; }</style></div>
            </div>
          </div>
        </div>
        <div class="absolute-footer dark medium-text-center small-text-center">
          <div class="container clearfix">
            <div class="footer-secondary pull-right">
              <div class="footer-text inline-block small-block">
                <img class="alignnone size-full wp-image-33526" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20162%2025'%3E%3C/svg%3E" alt="" width="162" height="25" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/05/payment.png">
                <noscript>
                  <img class="alignnone size-full wp-image-33526" src="https://thienmochuong.com/wp-content/uploads/2022/05/payment.png" alt="" width="162" height="25" /></noscript>
              </div>
            </div>
            <div class="footer-primary pull-left">
              <div class="copyright-footer">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">© 版权归 Thien Moc Huong 所有</font></font>
              </div>
            </div>
          </div>
        </div>
        <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link" aria-label="转至顶部">
          <i class="icon-angle-up"></i>
        </a>
      </footer>
    </div>
    <script type="text/javascript" id="" charset="">!
      function(b, e, f, g, a, c, d) {
        b.fbq || (a = b.fbq = function() {
          a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
        },
        b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
      } (window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
      fbq("init", "532486920556714");
      fbq("track", "PageView");</script>
    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=532486920556714&amp;ev=PageView&amp;noscript=1"></noscript>
    <iframe height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    <div class="devvn_toolbar devvn_toolbar_right devvn_mobile_footer">
      <ul>
        <li>
          <a href="tel:" onclick="if (!window.__cfRLUnblockHandlers) return false; subiz('expandWidget')" class="devvn_tu_van">
            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_5281_1829)">
                <path d="M6.59363 5.41895C2.9751 5.41895 3.29092e-05 7.90729 3.29092e-05 10.966C3.29092e-05 12.1887 0.474283 13.4313 1.344 14.3944L0.115845 15.7978C-0.00499834 15.9361 -0.0343108 16.1324 0.0421579 16.3C0.118158 16.4675 0.284783 16.5751 0.468783 16.5751H7.06238C9.7341 16.5751 13.1872 14.2745 13.1872 10.966C13.1872 7.90729 10.2122 5.41895 6.59363 5.41895ZM3.74994 11.8252C3.23313 11.8252 2.81247 11.4045 2.81247 10.8877C2.81247 10.3709 3.23316 9.95026 3.74994 9.95026C4.26672 9.95026 4.68741 10.3709 4.68741 10.8877C4.68744 11.4045 4.26675 11.8252 3.74994 11.8252ZM6.59363 11.8252C6.07681 11.8252 5.65616 11.4045 5.65616 10.8877C5.65616 10.3709 6.07685 9.95026 6.59363 9.95026C7.11041 9.95026 7.5311 10.3709 7.5311 10.8877C7.5311 11.4045 7.11044 11.8252 6.59363 11.8252ZM9.43731 11.8252C8.9205 11.8252 8.49985 11.4045 8.49985 10.8877C8.49985 10.3709 8.92053 9.95026 9.43731 9.95026C9.95409 9.95026 10.3748 10.3709 10.3748 10.8877C10.3748 11.4045 9.95413 11.8252 9.43731 11.8252Z" fill="#F4A43A"></path>
                <path d="M15.8866 10.1136L14.7829 8.82597C15.5707 7.93703 15.9997 6.85303 15.9997 5.73156C15.9996 2.88847 13.2659 0.575439 9.90603 0.575439C6.86775 0.575439 4.28647 2.46885 3.83069 4.93325C4.67844 4.64519 5.62916 4.48144 6.59363 4.48144C10.6984 4.48144 14.0708 7.34847 14.1201 10.8877H15.5309C15.9313 10.8877 16.1463 10.4162 15.8866 10.1136Z" fill="#F4A43A"></path>
              </g>
              <defs>
                <clipPath id="clip0_5281_1829">
                  <rect width="16" height="16" fill="#F4A43A" transform="translate(0 0.575195)"></rect>
                </clipPath>
              </defs>
            </svg>Tư vấn</a>
        </li>
        <li>
          <a href="#" class="devvn_add_to_cart_moible">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M61.58 12.88C61.3937 12.638 61.1544 12.4419 60.8805 12.3067C60.6066 12.1715 60.3054 12.1008 60 12.1H14.26L11.89 5.15004C11.7564 4.75442 11.5023 4.41054 11.1633 4.16664C10.8244 3.92274 10.4176 3.79105 10 3.79004H4C3.46957 3.79004 2.96086 4.00075 2.58579 4.37583C2.21071 4.7509 2 5.25961 2 5.79004C2 6.32047 2.21071 6.82918 2.58579 7.20425C2.96086 7.57933 3.46957 7.79004 4 7.79004H8.57L21.72 46.44C21.8553 46.8338 22.1101 47.1755 22.449 47.4175C22.7878 47.6595 23.1936 47.7897 23.61 47.79H52C52.5304 47.79 53.0391 47.5793 53.4142 47.2043C53.7893 46.8292 54 46.3205 54 45.79C54 45.2596 53.7893 44.7509 53.4142 44.3758C53.0391 44.0008 52.5304 43.79 52 43.79H25L23.54 39.48H54C54.4414 39.482 54.8709 39.3379 55.2219 39.0702C55.5728 38.8025 55.8253 38.4262 55.94 38L61.94 14.62C62.0181 14.3219 62.0263 14.0097 61.9638 13.7079C61.9014 13.406 61.77 13.1227 61.58 12.88V12.88Z" fill="#F4A43A"></path>
              <path d="M29.9999 49.4902C22.9199 49.7102 22.9199 59.9802 29.9999 60.2102C37.0799 60.0002 37.0799 49.7102 29.9999 49.4902Z" fill="#F4A43A"></path>
              <path d="M47.4101 49.4902C40.3301 49.7102 40.3301 59.9802 47.4101 60.2102C54.4901 60.0002 54.4901 49.7102 47.4101 49.4902Z" fill="#F4A43A"></path>
            </svg>Thêm vào giỏ</a>
        </li>
        <li>
          <a href="#" class="devvn_buy_now_moible">Mua ngay</a></li>
      </ul>
    </div>
    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
      <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
          <li class="header-search-form search-form html relative has-icon">
            <div class="header-search-form-wrapper">
              <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                <form role="search" method="get" class="searchform" action="https://thienmochuong.com/">
                  <div class="flex-row relative">
                    <div class="flex-col flex-grow">
                      <label class="screen-reader-text" for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                      <input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="Tìm kiếm nhanh...." value="" name="s" autocomplete="off">
                      <input type="hidden" name="post_type" value="product"></div>
                    <div class="flex-col">
                      <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button  icon mb-0" aria-label="Submit">
                        <i class="icon-search" data-rocket-lazy-bg-2d5bc407-ccf1-4274-a53b-4614ffa6dcb0="loaded" data-rocket-lazy-bg-21fb3f50-094b-49a8-8692-bae6712b7e1b="loaded"></i>
                      </button>
                    </div>
                  </div>
                  <div class="live-search-results text-left z-top">
                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                  </div>
                </form>
              </div>
            </div>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19451 has-child" aria-expanded="false">
            <a href="https://thienmochuong.com/gioi-thieu-trang-suc-tram-huong-thien-moc-huong">Giới Thiệu</a>
            <button class="toggle" aria-label="切换">
              <i class="icon-angle-down"></i>
            </button>
            <ul class="sub-menu nav-sidebar-ul children">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19452">
                <a href="https://thienmochuong.com/gioi-thieu-trang-suc-tram-huong-thien-moc-huong">Về Thiên Mộc Hương</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55433">
                <a href="https://thienmochuong.com/unesco">Giải thưởng UNESCO</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44706">
                <a href="https://thienmochuong.com/thien-moc-huong-the-master-box">The Master Box</a></li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor current-menu-parent current-product-parent menu-item-has-children menu-item-23839 has-child" aria-expanded="false">
            <a href="https://thienmochuong.com/vong-tay-tram-huong">Vòng tay trầm hương</a>
            <button class="toggle" aria-label="切换">
              <i class="icon-angle-down"></i>
            </button>
            <ul class="sub-menu nav-sidebar-ul children">
              <li id="menu-item-10473" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10473">
                <a href="https://thienmochuong.com/vong-tay-tram-huong">Danh Mục vòng tay</a>
                <ul class="sub-menu nav-sidebar-ul">
                  <li id="menu-item-6722" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor current-menu-parent current-product-parent menu-item-6722">
                    <a href="https://thienmochuong.com/vong-tay-tram-huong-nu">Vòng Trầm Hương Nữ</a></li>
                  <li id="menu-item-6723" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor current-menu-parent current-product-parent menu-item-6723">
                    <a href="https://thienmochuong.com/vong-tay-tram-huong-nam">Vòng Trầm Hương Nam</a></li>
                  <li id="menu-item-30030" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30030">
                    <a href="https://thienmochuong.com/tram-huong-cap-doi">Vòng Tay Trầm Hương Cặp Đôi</a></li>
                  <li id="menu-item-23948" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23948">
                    <a href="https://thienmochuong.com/vong-tram-huong-cho-be">Vòng Trầm Hương cho Bé</a></li>
                  <li id="menu-item-39973" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor current-menu-parent current-product-parent menu-item-39973">
                    <a href="https://thienmochuong.com/vong-tay-tram-huong-best-seller">Vòng Trầm Hương Bán Chạy✨</a></li>
                </ul>
              </li>
              <li id="menu-item-10472" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10472">
                <a href="#">BST VÒNG TAY</a>
                <ul class="sub-menu nav-sidebar-ul">
                  <li id="menu-item-6724" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor current-menu-parent current-product-parent menu-item-6724">
                    <a href="https://thienmochuong.com/vong-tay-tram-huong-108">Vòng tay Trầm Hương 108 hạt</a></li>
                  <li id="menu-item-20406" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-20406">
                    <a href="https://thienmochuong.com/vong-tay-tram-huong-boc-vang">Vòng tay Trầm Hương bọc Vàng</a></li>
                  <li id="menu-item-30033" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30033">
                    <a href="https://thienmochuong.com/vong-tram-mix-charm-vang">Vòng Trầm Mix Charm Vàng</a></li>
                  <li id="menu-item-20408" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-20408">
                    <a href="https://thienmochuong.com/vong-tay-tram-huong-mix-charm-bac">Vòng Trầm Hương Charm Bạc</a></li>
                  <li id="menu-item-6725" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-6725">
                    <a href="https://thienmochuong.com/vong-tay-tram-huong-ty-huu">Vòng tay Trầm Hương Tỳ Hưu</a></li>
                  <li id="menu-item-44784" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44784">
                    <a href="https://thienmochuong.com/bst-vong-tram-huong-vip">VIP Collection 🔸 The Master Box</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-47145 has-child" aria-expanded="false">
            <a href="https://thienmochuong.com/nhang-tram-huong-sach">Nhang Trầm Hương</a>
            <button class="toggle" aria-label="切换">
              <i class="icon-angle-down"></i>
            </button>
            <ul class="sub-menu nav-sidebar-ul children">
              <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47146">
                <a href="https://thienmochuong.com/nhang-vong-tram-huong">Nhang Vòng Trầm Hương</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47147">
                <a href="https://thienmochuong.com/nhang-tram-co-tam">Nhang Trầm Có Tăm</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47148">
                <a href="https://thienmochuong.com/nhang-tram-khong-tam">Nhang Trầm Không Tăm</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-59796">
                <a href="https://thienmochuong.com/nu-tram-huong-cao-cap">Nụ Trầm Hương</a></li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-30017 has-child" aria-expanded="false">
            <a href="https://thienmochuong.com/my-nghe-tram-huong">Mỹ nghệ trầm hương</a>
            <button class="toggle" aria-label="切换">
              <i class="icon-angle-down"></i>
            </button>
            <ul class="sub-menu nav-sidebar-ul children">
              <li id="menu-item-36233" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-36233">
                <a href="https://thienmochuong.com/nuoc-hoa-tram-huong">Nước hoa trầm hương</a></li>
              <li id="menu-item-30018" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30018">
                <a href="https://thienmochuong.com/tram-huong-canh">Trầm Hương Cảnh</a></li>
              <li id="menu-item-30032" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30032">
                <a href="https://thienmochuong.com/tuong-phat-tram-huong">Tượng Phật Trầm Hương</a></li>
              <li id="menu-item-30026" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30026">
                <a href="https://thienmochuong.com/mat-day-chuyen-go-tram-huong">Mặt Dây Chuyền Gỗ Trầm Hương</a></li>
              <li id="menu-item-30027" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30027">
                <a href="https://thienmochuong.com/day-treo-xe-o-to-tram-huong">Dây Treo Xe Ô Tô Trầm Hương</a></li>
              <li id="menu-item-30039" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30039">
                <a href="https://thienmochuong.com/san-pham-khac">Sản phẩm mỹ nghệ trầm khác</a></li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-30019">
            <a href="https://thienmochuong.com/tram-huong-dot-1">Trầm Hương Đốt</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67078">
            <a href="https://thienmochuong.com/qua-tang-tram-huong">Quà tặng</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2385 has-child" aria-expanded="false">
            <a href="https://thienmochuong.com/blog">Blog</a>
            <button class="toggle" aria-label="切换">
              <i class="icon-angle-down"></i>
            </button>
            <ul class="sub-menu nav-sidebar-ul children">
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23662">
                <a href="https://thienmochuong.com/chuyen-muc/kien-thuc-tram-huong">Kiến thức trầm hương</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23663">
                <a href="https://thienmochuong.com/chuyen-muc/phong-thuy">Phong Thủy</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25443">
                <a href="https://thienmochuong.com/cung-menh-la-gi-cach-xem-menh-ngu-hanh-cach-tinh-menh-theo-ngu-hanh">Xem cung mệnh</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55786">
                <a href="https://thienmochuong.com/xem-mau-hop-tuoi">Tra cứu màu hợp tuổi</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23668">
                <a href="https://thienmochuong.com/chuyen-muc/da-quy">Đá quý</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31900">
                <a href="https://thienmochuong.com/chuyen-muc/giai-ma-giac-mo">Giải mã giấc mơ</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31901">
                <a href="https://thienmochuong.com/chuyen-muc/qua-tang">Quà tặng &amp; Ngày lễ</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-47041">
                <a href="https://thienmochuong.com/chuyen-muc/khuyen-mai">Thông tin khuyến mãi</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31902">
                <a href="https://thienmochuong.com/chuyen-muc/tin-tuc-chung">Tin tức chung</a></li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-34493">
                <a href="https://thienmochuong.com/chuyen-muc/tuyen-dung-nhan-su">Tuyển dụng</a></li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29875">
            <a href="https://thienmochuong.com/lien-he">Liên hệ</a></li>
        </ul>
      </div>
    </div>
    <div id="pum-15906" class="pum pum-overlay pum-theme-9644 pum-theme-lightbox popmake-overlay pum-overlay-disabled pum-click-to-close click_open" data-popmake="{&quot;id&quot;:15906,&quot;slug&quot;:&quot;cach-do-size&quot;,&quot;theme_id&quot;:9644,&quot;cookies&quot;:[],&quot;triggers&quot;:[{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;cookie_name&quot;:[&quot;pum-15906&quot;],&quot;extra_selectors&quot;:&quot;&quot;}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:&quot;1&quot;,&quot;overlay_disabled&quot;:&quot;1&quot;,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;tiny&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;100%&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;300px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:&quot;1&quot;,&quot;location&quot;:&quot;left bottom&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;100&quot;,&quot;position_left&quot;:&quot;10&quot;,&quot;position_bottom&quot;:&quot;10&quot;,&quot;position_right&quot;:&quot;10&quot;,&quot;position_fixed&quot;:&quot;1&quot;,&quot;animation_type&quot;:&quot;fade&quot;,&quot;animation_speed&quot;:&quot;350&quot;,&quot;animation_origin&quot;:&quot;left bottom&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;x&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:&quot;1&quot;,&quot;esc_press&quot;:&quot;1&quot;,&quot;f4_press&quot;:false},&quot;click_open&quot;:[]}}" role="dialog" aria-modal="false" aria-labelledby="pum_popup_title_15906">
      <div id="popmake-15906" class="pum-container popmake theme-9644 pum-responsive pum-responsive-tiny responsive size-tiny pum-position-fixed">
        <div id="pum_popup_title_15906" class="pum-title popmake-title">CÁCH ĐO SIZE</div>
        <div class="pum-content popmake-content" tabindex="0">
          <figure id="attachment_15907" aria-describedby="caption-attachment-15907" style="width: 947px" class="wp-caption aligncenter">
            <img fetchpriority="high" decoding="async" class="wp-image-15907" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20947%20947'%3E%3C/svg%3E" alt="hướng dẫn đo size tay trầm hương" width="947" height="947" data-lazy-srcset="https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-100x100.jpg 100w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-300x300.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE.jpg 600w" data-lazy-sizes="(max-width: 947px) 100vw, 947px" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-400x400.jpg">
            <noscript>
              <img fetchpriority="high" decoding="async" class="wp-image-15907" src="https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-400x400.jpg" alt="hướng dẫn đo size tay trầm hương" width="947" height="947" srcset="https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-400x400.jpg 400w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-100x100.jpg 100w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-510x510.jpg 510w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-280x280.jpg 280w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE-300x300.jpg 300w, https://thienmochuong.com/wp-content/uploads/2021/05/SIZE.jpg 600w" sizes="(max-width: 947px) 100vw, 947px" /></noscript>
            <figcaption id="caption-attachment-15907" class="wp-caption-text">hướng dẫn đo size tay trầm hương</figcaption></figure>
        </div>
        <button type="button" class="pum-close popmake-close" aria-label="Close">x</button></div>
    </div>
    <iframe allow="join-ad-interest-group" data-tagging-id="AW-954839937" data-load-time="1740214417378" height="0" width="0" src="https://td.doubleclick.net/td/rul/954839937?random=1740214417371&amp;cv=11&amp;fst=1740214417371&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be52k0v896838633z878283937za201zb885410610&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101732279~101732281~102067808~102482433~102539968~102558064~102587591~102605417~102640600~102658453&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fthienmochuong.com%2Fsan-pham%2Fvong-tay-tram-huong-108-hat&amp;ref=https%3A%2F%2Fthienmochuong.com%2Fvong-tay-tram-huong-nu&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=V%C3%B2ng%20Tr%E1%BA%A7m%20H%C6%B0%C6%A1ng%20108%20H%E1%BA%A1t%20%C4%90%C6%A1n%20-%20Tr%E1%BA%A7m%20T%E1%BB%91c%20Vi%E1%BB%87t%20Nam&amp;npa=0&amp;pscdl=noapi&amp;auid=778061298.1739528114&amp;uaa=x86&amp;uab=64&amp;uafvl=Not(A%253ABrand%3B99.0.0.0%7CGoogle%2520Chrome%3B133.0.6943.127%7CChromium%3B133.0.6943.127&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1" style="display: none; visibility: hidden;"></iframe>
    <script defer="" src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js" data-rocket-status="executed"></script>
    <div id="login-form-popup" class="lightbox-content mfp-hide">
      <div class="woocommerce">
        <div class="woocommerce-notices-wrapper"></div>
        <div class="account-container lightbox-inner">
          <div class="col2-set row row-divided row-large" id="customer_login">
            <div class="col-1 large-6 col pb-0">
              <div class="account-login-inner">
                <h3 class="uppercase">Đăng nhập</h3>
                <form class="woocommerce-form woocommerce-form-login login" method="post">
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;
                      <span class="required">*</span></label>
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value=""></p>
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="password">Mật khẩu&nbsp;
                      <span class="required">*</span></label>
                    <span class="password-input">
                      <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password">
                      <span class="show-password-input"></span>
                    </span>
                  </p>
                  <p class="form-row">
                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                      <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                      <span>Ghi nhớ mật khẩu</span></label>
                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="31109f8e44">
                    <input type="hidden" name="_wp_http_referer" value="/san-pham/vong-tay-tram-huong-108-hat">
                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button></p>
                  <p class="woocommerce-LostPassword lost_password">
                    <a href="https://thienmochuong.com/my-account/lost-password">Quên mật khẩu?</a></p>
                </form>
              </div>
            </div>
            <div class="col-2 large-6 col pb-0">
              <div class="account-register-inner">
                <h3 class="uppercase">Đăng ký</h3>
                <form method="post" class="woocommerce-form woocommerce-form-register register">
                  <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="reg_email">Địa chỉ email&nbsp;
                      <span class="required">*</span></label>
                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value=""></p>
                  <p>A link to set a new password will be sent to your email address.</p>
                  <wc-order-attribution-inputs>
                    <input type="hidden" name="wc_order_attribution_source_type" value="referral">
                    <input type="hidden" name="wc_order_attribution_referrer" value="https://www.royalagar.com/">
                    <input type="hidden" name="wc_order_attribution_utm_campaign" value="(none)">
                    <input type="hidden" name="wc_order_attribution_utm_source" value="royalagar.com">
                    <input type="hidden" name="wc_order_attribution_utm_medium" value="referral">
                    <input type="hidden" name="wc_order_attribution_utm_content" value="/">
                    <input type="hidden" name="wc_order_attribution_utm_id" value="(none)">
                    <input type="hidden" name="wc_order_attribution_utm_term" value="(none)">
                    <input type="hidden" name="wc_order_attribution_session_entry" value="https://thienmochuong.com/vong-tay-tram-huong-mix-charm-bac">
                    <input type="hidden" name="wc_order_attribution_session_start_time" value="2025-02-22 05:56:09">
                    <input type="hidden" name="wc_order_attribution_session_pages" value="15">
                    <input type="hidden" name="wc_order_attribution_session_count" value="7">
                    <input type="hidden" name="wc_order_attribution_user_agent" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36"></wc-order-attribution-inputs>
                  <div class="woocommerce-privacy-policy-text">
                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our
                      <a href="https://thienmochuong.com/chinh-sach-bao-ve-thong-tin-ca-nhan-cua-nguoi-tieu-dung" class="woocommerce-privacy-policy-link" target="_blank">chính sách riêng tư</a>.</p></div>
                  <p class="woocommerce-form-row form-row">
                    <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="e13841c4d0">
                    <input type="hidden" name="_wp_http_referer" value="/san-pham/vong-tay-tram-huong-108-hat">
                    <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Đăng ký">Đăng ký</button></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="application/ld+json">{
        "@context": "https:\/\/schema.org\/",
        "@graph": [{
          "@context": "https:\/\/schema.org\/",
          "@type": "BreadcrumbList",
          "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "item": {
              "name": "Trang ch\u1ee7",
              "@id": "https:\/\/thienmochuong.com"
            }
          },
          {
            "@type": "ListItem",
            "position": 2,
            "item": {
              "name": "V\u00f2ng Tay Tr\u1ea7m H\u01b0\u01a1ng",
              "@id": "https:\/\/thienmochuong.com\/vong-tay-tram-huong"
            }
          },
          {
            "@type": "ListItem",
            "position": 3,
            "item": {
              "name": "V\u00f2ng Tay Tr\u1ea7m H\u01b0\u01a1ng Nam",
              "@id": "https:\/\/thienmochuong.com\/vong-tay-tram-huong-nam"
            }
          },
          {
            "@type": "ListItem",
            "position": 4,
            "item": {
              "name": "V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng 108 H\u1ea1t \u0110\u01a1n &amp;#8211; Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam",
              "@id": "https:\/\/thienmochuong.com\/san-pham\/vong-tay-tram-huong-108-hat"
            }
          }]
        },
        {
          "@context": "https:\/\/schema.org\/",
          "@type": "Product",
          "@id": "https:\/\/thienmochuong.com\/san-pham\/vong-tay-tram-huong-108-hat#product",
          "name": "V\u00f2ng Tr\u1ea7m H\u01b0\u01a1ng 108 H\u1ea1t \u0110\u01a1n - Tr\u1ea7m T\u1ed1c Vi\u1ec7t Nam",
          "url": "https:\/\/thienmochuong.com\/san-pham\/vong-tay-tram-huong-108-hat",
          "description": "V\u00f2ng tay Tr\u1ea7m H\u01b0\u01a1ng 108 H\u1ea1t Vi\u1ec7t Nam ph\u00f9 h\u1ee3p cho c\u1ea3 Nam v\u00e0 N\u1eef gi\u00fap \u0111o\u1ea1n tr\u1eeb 108 mu\u1ed9n phi\u1ec1n. V\u00f2ng tay mang l\u1ea1i v\u1eadn kh\u00ed may m\u1eafn, t\u00e0i l\u1ed9c \u0111\u1ed3ng th\u1eddi to\u00e1t l\u00ean v\u1ebb \u0111\u1eb9p tuy\u1ec7t m\u1ef9, t\u1ef1 tin.",
          "image": "https:\/\/thienmochuong.com\/wp-content\/uploads\/2021\/01\/338676342_746285647124651_4314393253462378365_n.jpg",
          "sku": 13832,
          "offers": [{
            "@type": "Offer",
            "price": "2490000.00",
            "priceValidUntil": "2026-12-31",
            "priceSpecification": {
              "price": "2490000.00",
              "priceCurrency": "VND",
              "valueAddedTaxIncluded": "false"
            },
            "priceCurrency": "VND",
            "availability": "http:\/\/schema.org\/InStock",
            "url": "https:\/\/thienmochuong.com\/san-pham\/vong-tay-tram-huong-108-hat",
            "seller": {
              "@type": "Organization",
              "name": "Thi\u00ean M\u1ed9c H\u01b0\u01a1ng",
              "url": "https:\/\/thienmochuong.com"
            },
            "hasMerchantReturnPolicy": {
              "@type": "MerchantReturnPolicy",
              "applicableCountry": "vi",
              "returnPolicyCategory": "https:\/\/schema.org\/MerchantReturnFiniteReturnWindow",
              "merchantReturnDays": "7",
              "returnMethod": "https:\/\/schema.org\/ReturnByMail",
              "returnFees": "https:\/\/schema.org\/FreeReturn"
            },
            "shippingDetails": {
              "@type": "OfferShippingDetails",
              "shippingRate": {
                "@type": "MonetaryAmount",
                "value": "0",
                "currency": "VND"
              },
              "deliveryTime": {
                "@type": "ShippingDeliveryTime",
                "businessDays": {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": ["https:\/\/schema.org\/Monday", "https:\/\/schema.org\/Tuesday", "https:\/\/schema.org\/Wednesday", "https:\/\/schema.org\/Thursday", "https:\/\/schema.org\/Friday"]
                },
                "handlingTime": {
                  "@type": "QuantitativeValue",
                  "minValue": "0",
                  "maxValue": "3",
                  "samedaydelivery": "Yes",
                  "unitCode": "DAY"
                },
                "transitTime": {
                  "@type": "QuantitativeValue",
                  "minValue": "0",
                  "maxValue": "3",
                  "samedaydelivery": "Yes",
                  "unitCode": "DAY"
                }
              },
              "shippingDestination": [{
                "@type": "DefinedRegion",
                "addressCountry": "VN",
                "addressRegion": ["VN"]
              }]
            }
          }],
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.97",
            "reviewCount": 29
          },
          "review": [{
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "bestRating": "5",
              "ratingValue": "5",
              "worstRating": "1"
            },
            "author": {
              "@type": "Person",
              "name": "tr\u1ea7n minh tu\u1ea5n"
            },
            "reviewBody": "\u0111\u00e3 qua v\u00e0 mua h\u00e0ng nh\u00e2n vi\u00ean ti\u1ebfp \u0111\u00f3n nhi\u1ec7t t\u00ecnh v\u00e0 v\u00f2ng c\u00f3 m\u00f9i h\u01b0\u01a1ng c\u1ef1c k\u00ec d\u1ec5 ch\u1ecbu s\u1ebd c\u00f2n \u1ee7ng h\u1ed9 nhi\u1ec1u",
            "datePublished": "2024-04-17T14:42:55+07:00"
          },
          {
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "bestRating": "5",
              "ratingValue": "5",
              "worstRating": "1"
            },
            "author": {
              "@type": "Person",
              "name": "Th\u1ea3o"
            },
            "reviewBody": "\u0110\u00fang h\u00e0ng \u0111\u00e3 \u0111\u1eb7t, t\u01b0 v\u1ea5n chu \u0111\u00e1o",
            "datePublished": "2024-03-19T14:18:20+07:00"
          },
          {
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "bestRating": "5",
              "ratingValue": "5",
              "worstRating": "1"
            },
            "author": {
              "@type": "Person",
              "name": "L\u01b0\u01a1ng H\u00e0"
            },
            "reviewBody": "Th\u01a1m, \u0111\u1eb9p",
            "datePublished": "2024-02-28T07:12:14+07:00"
          },
          {
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "bestRating": "5",
              "ratingValue": "5",
              "worstRating": "1"
            },
            "author": {
              "@type": "Person",
              "name": "B\u00edch Ph\u01b0\u01a1ng"
            },
            "reviewBody": "M\u00ecnh \u0111eo \u0111\u01b0\u1ee3c 2 th\u00e1ng r\u00f2i h\u1ea1t v\u1eabn gi\u1eef \u0111\u01b0\u1ee3c m\u00f9i th\u01a1m v\u00e0 b\u00f3ng h\u01a1n \ud83d\ude01\ud83d\ude01",
            "datePublished": "2024-02-25T08:16:32+07:00"
          },
          {
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "bestRating": "5",
              "ratingValue": "5",
              "worstRating": "1"
            },
            "author": {
              "@type": "Person",
              "name": "sam"
            },
            "reviewBody": "r\u1ea5t \u0111\u1eb9p, \u0111\u01b0\u1ee3c nh\u00e2n vi\u00ean h\u1ed7 tr\u1ee3 t\u01b0 v\u1ea5n theo ki\u1ec3u m\u00ecnh th\u00edch, h\u00e0i l\u00f2ng",
            "datePublished": "2022-10-17T17:16:00+07:00"
          }],
          "brand": {
            "@type": "Brand",
            "name": "Thi\u00ean M\u1ed9c H\u01b0\u01a1ng"
          },
          "mpn": null,
          "id": 13832
        }]
      }</script>
    <script src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKCQkJY29uc3QgJGZvcm0gPSBqUXVlcnkoICcudmFyaWF0aW9uc19mb3JtJyApOwoJCQljb25zdCB3cmFwcGVyID0galF1ZXJ5KCAnLnJhbmstbWF0aC1ndGluLXdyYXBwZXInICk7CgkJCWNvbnN0IGd0aW5fY29kZSA9IHdyYXBwZXIudGV4dCgpOwoJCQlpZiAoICRmb3JtLmxlbmd0aCApIHsKCQkJCSRmb3JtLm9uKCAnZm91bmRfdmFyaWF0aW9uJywgZnVuY3Rpb24oIGV2ZW50LCB2YXJpYXRpb24gKSB7CgkJCQkJaWYgKCB2YXJpYXRpb24ucmFua19tYXRoX2d0aW4gKSB7CgkJCQkJCXdyYXBwZXIudGV4dCggdmFyaWF0aW9uLnJhbmtfbWF0aF9ndGluICk7CgkJCQkJfQoJCQkJfSApOwoKCQkJCSRmb3JtLm9uKCAncmVzZXRfZGF0YScsIGZ1bmN0aW9uKCkgewoJCQkJCXdyYXBwZXIudGV4dCggZ3Rpbl9jb2RlICk7CgkJCQl9ICk7CgkJCX0KCQl9KTs=" data-rocket-status="executed">window.addEventListener('DOMContentLoaded',
      function() {
        const $form = jQuery('.variations_form');
        const wrapper = jQuery('.rank-math-gtin-wrapper');
        const gtin_code = wrapper.text();
        if ($form.length) {
          $form.on('found_variation',
          function(event, variation) {
            if (variation.rank_math_gtin) {
              wrapper.text(variation.rank_math_gtin);
            }
          });

          $form.on('reset_data',
          function() {
            wrapper.text(gtin_code);
          });
        }
      });</script>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
      <div class="pswp__bg"></div>
      <!-- Slides wrapper with overflow:hidden. -->
      <div class="pswp__scroll-wrap">
        <!-- Container that holds slides. PhotoSwipe keeps only 3 of them in the DOM to save memory. Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <!-- Controls are self-explanatory. Order can be changed. -->
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" aria-label="Đóng (Esc)"></button>
            <button class="pswp__button pswp__button--zoom" aria-label="Phóng to/ thu nhỏ"></button>
            <div class="pswp__preloader">
              <div class="loading-spin"></div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button--arrow--left" aria-label="Ảnh trước (mũi tên trái)"></button>
          <button class="pswp__button--arrow--right" aria-label="Ảnh tiếp (mũi tên phải)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="data:text/javascript;base64,CgkJKGZ1bmN0aW9uICgpIHsKCQkJdmFyIGMgPSBkb2N1bWVudC5ib2R5LmNsYXNzTmFtZTsKCQkJYyA9IGMucmVwbGFjZSgvd29vY29tbWVyY2Utbm8tanMvLCAnd29vY29tbWVyY2UtanMnKTsKCQkJZG9jdW1lbnQuYm9keS5jbGFzc05hbWUgPSBjOwoJCX0pKCk7Cgk=" data-rocket-status="executed">(function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
      })();</script>
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-8.9.1" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <link rel="stylesheet" href="https://thienmochuong.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.5" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" type="text/css" media="all">
    <style id="global-styles-inline-css" type="text/css">body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--primary: #fab55a;--wp--preset--color--secondary: #e0430a;--wp--preset--color--success: #60bb05;--wp--preset--color--alert: #f10303;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}body { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}a:where(:not(.wp-element-button)){text-decoration: none;}.wp-element-button, .wp-block-button__link{background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;line-height: inherit;padding: calc(0.667em + 2px) calc(1.333em + 2px);text-decoration: none;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-color{color: var(--wp--preset--color--primary) !important;}.has-secondary-color{color: var(--wp--preset--color--secondary) !important;}.has-success-color{color: var(--wp--preset--color--success) !important;}.has-alert-color{color: var(--wp--preset--color--alert) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue)
      !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-background-color{background-color: var(--wp--preset--color--primary) !important;}.has-secondary-background-color{background-color: var(--wp--preset--color--secondary) !important;}.has-success-background-color{background-color: var(--wp--preset--color--success) !important;}.has-alert-background-color{background-color: var(--wp--preset--color--alert) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-primary-border-color{border-color: var(--wp--preset--color--primary) !important;}.has-secondary-border-color{border-color: var(--wp--preset--color--secondary) !important;}.has-success-border-color{border-color: var(--wp--preset--color--success) !important;}.has-alert-border-color{border-color: var(--wp--preset--color--alert) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}</style>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/themes/devvn-child/js/amlich-hnd.js?ver=1.0" id="amlich-hnd-js" defer=""></script>
    <script type="text/javascript" id="devvn-js-js-extra">/* <![CDATA[ */
      var devvn_theme_array = {
        "ajaxurl": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "home_url": "https:\/\/thienmochuong.com\/",
        "is_single": "1",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "postid": "13832"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/themes/devvn-child/js/devvn-main.js?ver=1.5" id="devvn-js-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/magnific-popup/magnific-popup.js?ver=1.5.1" id="magnific-popup-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/jquery.validate.min.js?ver=1.5.1" id="jquery.validate-js" defer=""></script>
    <script type="text/javascript" id="devvn-reviews-script-js-extra">/* <![CDATA[ */
      var devvn_reviews = {
        "ajax_url": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "img_size": "512000",
        "img_size_text": "500 KB",
        "cmt_length": "10",
        "number_img_upload": "3",
        "star_1": "R\u1ea5t t\u1ec7",
        "star_2": "Kh\u00f4ng t\u1ec7",
        "star_3": "Trung b\u00ecnh",
        "star_4": "T\u1ed1t",
        "star_5": "Tuy\u1ec7t v\u1eddi",
        "name_required_text": "T\u00ean l\u00e0 b\u1eaft bu\u1ed9c!",
        "email_required_text": "Email l\u00e0 b\u1eaft bu\u1ed9c!",
        "phone_required_text": "S\u1ed1 \u0111i\u1ec7n tho\u1ea1i l\u00e0 b\u1eaft bu\u1ed9c!",
        "cmt_required_text": "N\u1ed9i dung b\u00ecnh lu\u1eadn l\u00e0 b\u1eaft bu\u1ed9c!",
        "minlength_text": "T\u1ed1i thi\u1ec3u 10 k\u00fd t\u1ef1",
        "minlength_text2": "k\u00fd t\u1ef1 (T\u1ed1i thi\u1ec3u 10)",
        "file_format_text": "H\u00ecnh \u1ea3nh kh\u00f4ng \u0111\u00fang \u0111\u1ecbnh d\u1ea1ng. Ch\u1ec9 ch\u1ea5p nh\u1eadn jpg\/png\/gif",
        "file_size_text": "H\u00ecnh \u1ea3nh qu\u00e1 l\u1edbn. Ch\u1ec9 nh\u1eefng \u1ea3nh <= 500 KB \u0111\u01b0\u1ee3c ph\u00e9p t\u1ea3i l\u00ean",
        "file_length_text": "Ch\u1ec9 cho ph\u00e9p t\u1ea3i l\u00ean 3 \u1ea3nh",
        "review_success": "\u0110\u00e1nh gi\u00e1 th\u00e0nh c\u00f4ng!",
        "vietnamphone": "1",
        "disable_owl_slider": "0",
        "enable_img_popup": "0",
        "code": "WxyJ0aaGllbm1vY2h1b25nLmNvbSIsInRoaWVubW9jaHVvbmcud2VibWF1NjguY29tIiwiYmV0YS50bWhhZ2Fyd29vZC5jb20iLCJ0bWhhZ2Fyd29vZC5jb20iLCJuaGFuZ3RyYW1odW9uZ3NhY2gud2VibWF1NjguY29tIiwibmhhbmd0cmFtaHVvbmdzYWNoLnZuIiwid3d3LnRoaWVubW9jaHVvbmcuY29tIiwid3d3LnRoaWVubW9jaHVvbmcud2VibWF1NjguY29tIiwid3d3LmJldGEudG1oYWdhcndvb2QuY29tIiwid3d3LnRtaGFnYXJ3b29kLmNvbSIsInd3dy5uaGFuZ3RyYW1odW9uZ3NhY2gud2VibWF1NjguY29tIiwid3d3Lm5oYW5ndHJhbWh1b25nc2FjaC52biJd"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/js/devvn-woocommerce-reviews.js?ver=1.5.1" id="devvn-reviews-script-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/owl/owl.carousel.min.js?ver=1.5.1" id="owl.carousel-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/masonry/masonry.pkgd.min.js?ver=1.5.1" id="masonry.pkgd-js" defer=""></script>
    <script type="text/javascript" id="devvn-shortcode-reviews-js-extra">/* <![CDATA[ */
      var devvn_shortcode_reviews = {
        "ajax_url": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "img_size": "512000",
        "img_size_text": "500 KB",
        "cmt_length": "10",
        "number_img_upload": "3",
        "star_1": "R\u1ea5t t\u1ec7",
        "star_2": "Kh\u00f4ng t\u1ec7",
        "star_3": "Trung b\u00ecnh",
        "star_4": "T\u1ed1t",
        "star_5": "Tuy\u1ec7t v\u1eddi",
        "name_required_text": "T\u00ean l\u00e0 b\u1eaft bu\u1ed9c!",
        "email_required_text": "Email l\u00e0 b\u1eaft bu\u1ed9c!",
        "phone_required_text": "S\u1ed1 \u0111i\u1ec7n tho\u1ea1i l\u00e0 b\u1eaft bu\u1ed9c!",
        "cmt_required_text": "N\u1ed9i dung b\u00ecnh lu\u1eadn l\u00e0 b\u1eaft bu\u1ed9c!",
        "minlength_text": "T\u1ed1i thi\u1ec3u 10 k\u00fd t\u1ef1",
        "minlength_text2": "k\u00fd t\u1ef1 (T\u1ed1i thi\u1ec3u 10)",
        "file_format_text": "H\u00ecnh \u1ea3nh kh\u00f4ng \u0111\u00fang \u0111\u1ecbnh d\u1ea1ng. Ch\u1ec9 ch\u1ea5p nh\u1eadn jpg\/png\/gif",
        "file_size_text": "H\u00ecnh \u1ea3nh qu\u00e1 l\u1edbn. Ch\u1ec9 nh\u1eefng \u1ea3nh <= 500 KB \u0111\u01b0\u1ee3c ph\u00e9p t\u1ea3i l\u00ean",
        "file_length_text": "Ch\u1ec9 cho ph\u00e9p t\u1ea3i l\u00ean 3 \u1ea3nh",
        "review_success": "\u0110\u00e1nh gi\u00e1 th\u00e0nh c\u00f4ng!",
        "vietnamphone": "1",
        "disable_owl_slider": "0",
        "enable_img_popup": "0",
        "code": "WxyJ0aaGllbm1vY2h1b25nLmNvbSIsInRoaWVubW9jaHVvbmcud2VibWF1NjguY29tIiwiYmV0YS50bWhhZ2Fyd29vZC5jb20iLCJ0bWhhZ2Fyd29vZC5jb20iLCJuaGFuZ3RyYW1odW9uZ3NhY2gud2VibWF1NjguY29tIiwibmhhbmd0cmFtaHVvbmdzYWNoLnZuIiwid3d3LnRoaWVubW9jaHVvbmcuY29tIiwid3d3LnRoaWVubW9jaHVvbmcud2VibWF1NjguY29tIiwid3d3LmJldGEudG1oYWdhcndvb2QuY29tIiwid3d3LnRtaGFnYXJ3b29kLmNvbSIsInd3dy5uaGFuZ3RyYW1odW9uZ3NhY2gud2VibWF1NjguY29tIiwid3d3Lm5oYW5ndHJhbWh1b25nc2FjaC52biJd"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/js/devvn-shortcode-reviews.js?ver=1.5.1" id="devvn-shortcode-reviews-js" defer=""></script>
    <script type="text/javascript" id="kk-star-ratings-js-extra">/* <![CDATA[ */
      var kk_star_ratings = {
        "action": "kk-star-ratings",
        "endpoint": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "nonce": "9be3f9135e"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/kk-star-ratings/src/core/public/js/kk-star-ratings.min.js?ver=5.4.7" id="kk-star-ratings-js" defer=""></script>
    <script type="text/javascript" id="woocommerce-js-extra">/* <![CDATA[ */
      var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.9.1" id="woocommerce-js" data-wp-strategy="defer" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=8.9.1" id="sourcebuster-js-js" defer=""></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">/* <![CDATA[ */
      var wc_order_attribution = {
        "params": {
          "lifetime": 1.0e-5,
          "session": 30,
          "ajaxurl": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
          "prefix": "wc_order_attribution_",
          "allowTracking": true
        },
        "fields": {
          "source_type": "current.typ",
          "referrer": "current_add.rf",
          "utm_campaign": "current.cmp",
          "utm_source": "current.src",
          "utm_medium": "current.mdm",
          "utm_content": "current.cnt",
          "utm_id": "current.id",
          "utm_term": "current.trm",
          "session_entry": "current_add.ep",
          "session_start_time": "current_add.fd",
          "session_pages": "session.pgs",
          "session_count": "udata.vst",
          "user_agent": "udata.uag"
        }
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=8.9.1" id="wc-order-attribution-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/duracelltomi-google-tag-manager/dist/js/gtm4wp-contact-form-7-tracker.js?ver=1.20.2" id="gtm4wp-contact-form-7-tracker-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/duracelltomi-google-tag-manager/dist/js/gtm4wp-ecommerce-generic.js?ver=1.20.2" id="gtm4wp-ecommerce-generic-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/duracelltomi-google-tag-manager/dist/js/gtm4wp-woocommerce.js?ver=1.20.2" id="gtm4wp-woocommerce-js" defer=""></script>
    <script type="text/javascript" id="rocket_lazyload_css-js-extra">/* <![CDATA[ */
      var rocket_lazyload_css_data = {
        "threshold": "300"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" id="rocket_lazyload_css-js-after">/* <![CDATA[ */
      !
      function o(n, c, a) {
        function u(t, e) {
          if (!c[t]) {
            if (!n[t]) {
              var r = "function" == typeof require && require;
              if (!e && r) return r(t, !0);
              if (s) return s(t, !0);
              throw (e = new Error("Cannot find module '" + t + "'")).code = "MODULE_NOT_FOUND",
              e
            }
            r = c[t] = {
              exports: {}
            },
            n[t][0].call(r.exports,
            function(e) {
              return u(n[t][1][e] || e)
            },
            r, r.exports, o, n, c, a)
          }
          return c[t].exports
        }
        for (var s = "function" == typeof require && require,
        e = 0; e < a.length; e++) u(a[e]);
        return u
      } ({
        1 : [function(e, t, r) {
          "use strict"; {
            const c = "undefined" == typeof rocket_pairs ? [] : rocket_pairs,
            a = (("undefined" == typeof rocket_excluded_pairs ? [] : rocket_excluded_pairs).map(t = >{
              var e = t.selector;
              document.querySelectorAll(e).forEach(e = >{
                e.setAttribute("data-rocket-lazy-bg-" + t.hash, "excluded")
              })
            }), document.querySelector("#wpr-lazyload-bg-container"));
            var o = rocket_lazyload_css_data.threshold || 300;
            const u = new IntersectionObserver(e = >{
              e.forEach(t = >{
                t.isIntersecting && c.filter(e = >t.target.matches(e.selector)).map(t = >{
                  var e;
                  t && ((e = document.createElement("style")).textContent = t.style, a.insertAdjacentElement("afterend", e), t.elements.forEach(e = >{
                    u.unobserve(e),
                    e.setAttribute("data-rocket-lazy-bg-" + t.hash, "loaded")
                  }))
                })
              })
            },
            {
              rootMargin: o + "px"
            });
            function n() {
              0 < (0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : []).length && c.forEach(t = >{
                try {
                  document.querySelectorAll(t.selector).forEach(e = >{
                    "loaded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && "excluded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && (u.observe(e), (t.elements || =[]).push(e))
                  })
                } catch(e) {
                  console.error(e)
                }
              })
            }
            n(),
            function() {
              const r = window.MutationObserver;
              return function(e, t) {
                if (e && 1 === e.nodeType) return (t = new r(t)).observe(e, {
                  attributes: !0,
                  childList: !0,
                  subtree: !0
                }),
                t
              }
            } ()(document.querySelector("body"), n)
          }
        },
        {}]
      },
      {},
      [1]);
      //# sourceMappingURL=lazyload-css.min.js.map
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/hoverIntent.min.js?ver=1.10.2" id="hoverIntent-js" defer=""></script>
    <script type="text/javascript" id="flatsome-js-js-extra">/* <![CDATA[ */
      var flatsomeVars = {
        "theme": {
          "version": "3.18.5"
        },
        "ajaxurl": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "rtl": "",
        "sticky_height": "70",
        "stickyHeaderHeight": "0",
        "scrollPaddingTop": "0",
        "assets_url": "https:\/\/thienmochuong.com\/wp-content\/themes\/flatsome\/assets\/",
        "lightbox": {
          "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
          "close_btn_inside": false
        },
        "user": {
          "can_edit_pages": false
        },
        "i18n": {
          "mainMenu": "Main Menu",
          "toggleButton": "Toggle"
        },
        "options": {
          "cookie_notice_version": "1",
          "swatches_layout": false,
          "swatches_disable_deselect": false,
          "swatches_box_select_event": false,
          "swatches_box_behavior_selected": false,
          "swatches_box_update_urls": "1",
          "swatches_box_reset": false,
          "swatches_box_reset_limited": false,
          "swatches_box_reset_extent": false,
          "swatches_box_reset_time": 300,
          "search_result_latency": "0"
        },
        "is_mini_cart_reveal": ""
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/themes/flatsome/assets/js/flatsome.js?ver=a0a7aee297766598a20e" id="flatsome-js-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/themes/flatsome/inc/integrations/wp-rocket/flatsome-wp-rocket.js?ver=3.18.5" id="flatsome-wp-rocket-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.js?ver=3.10.2" id="flatsome-woocommerce-wishlist-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.18.5" id="flatsome-live-search-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/themes/flatsome/assets/js/extensions/flatsome-swatches-frontend.js?ver=3.18.5" id="flatsome-swatches-frontend-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js" defer=""></script>
    <script type="text/javascript" id="popup-maker-site-js-extra">/* <![CDATA[ */
      var pum_vars = {
        "version": "1.19.0",
        "pm_dir_url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/popup-maker\/",
        "ajaxurl": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "restapi": "https:\/\/thienmochuong.com\/wp-json\/pum\/v1",
        "rest_nonce": null,
        "default_theme": "9643",
        "debug_mode": "",
        "disable_tracking": "",
        "home_url": "\/",
        "message_position": "top",
        "core_sub_forms_enabled": "1",
        "popups": [],
        "cookie_domain": "",
        "analytics_route": "analytics",
        "analytics_api": "https:\/\/thienmochuong.com\/wp-json\/pum\/v1"
      };
      var pum_sub_vars = {
        "ajaxurl": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "message_position": "top"
      };
      var pum_popups = {
        "pum-15906": {
          "triggers": [{
            "type": "click_open",
            "settings": {
              "cookie_name": ["pum-15906"],
              "extra_selectors": ""
            }
          }],
          "cookies": [],
          "disable_on_mobile": false,
          "disable_on_tablet": false,
          "atc_promotion": null,
          "explain": null,
          "type_section": null,
          "theme_id": "9644",
          "size": "tiny",
          "responsive_min_width": "0%",
          "responsive_max_width": "100%",
          "custom_width": "300px",
          "custom_height_auto": true,
          "custom_height": "380px",
          "scrollable_content": false,
          "animation_type": "fade",
          "animation_speed": "350",
          "animation_origin": "left bottom",
          "open_sound": "none",
          "custom_sound": "",
          "location": "left bottom",
          "position_top": "100",
          "position_bottom": "10",
          "position_left": "10",
          "position_right": "10",
          "position_from_trigger": false,
          "position_fixed": true,
          "overlay_disabled": true,
          "stackable": true,
          "disable_reposition": false,
          "zindex": "1999999999",
          "close_button_delay": "0",
          "fi_promotion": null,
          "close_on_form_submission": false,
          "close_on_form_submission_delay": "0",
          "close_on_overlay_click": true,
          "close_on_esc_press": true,
          "close_on_f4_press": false,
          "disable_form_reopen": false,
          "disable_accessibility": false,
          "theme_slug": "lightbox",
          "id": 15906,
          "slug": "cach-do-size"
        }
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="//thienmochuong.com/wp-content/uploads/pum/pum-site-scripts.js?defer&amp;generated=1716901030&amp;ver=1.19.0" id="popup-maker-site-js" defer=""></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6LfCm_AgAAAAAEq3YU3n3BZUF1RvspLfuZJ07FY-&amp;ver=3.0" id="google-recaptcha-js"></script>
    <script type="text/javascript" id="wpcf7-recaptcha-js-extra">/* <![CDATA[ */
      var wpcf7_recaptcha = {
        "sitekey": "6LfCm_AgAAAAAEq3YU3n3BZUF1RvspLfuZJ07FY-",
        "actions": {
          "homepage": "homepage",
          "contactform": "contactform"
        }
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=5.9.5" id="wpcf7-recaptcha-js" defer=""></script>
    <script async="async" type="text/javascript" src="https://thienmochuong.com/wp-includes/js/comment-reply.min.js?ver=93f6f3aee2856cf389b1ea46be37ba48" id="comment-reply-js" data-wp-strategy="async"></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=49415fe6a9266f32f1f2" id="flatsome-theme-woocommerce-js-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/wp-rocket/assets/js/heartbeat.js?ver=3.16.3" id="heartbeat-js" defer=""></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">/* <![CDATA[ */
      var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_dca0cbf268847ddfbd19d4f0187a0fb7",
        "fragment_name": "wc_fragments_dca0cbf268847ddfbd19d4f0187a0fb7",
        "request_timeout": "5000"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=8.9.1" id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0" id="jquery-selectBox-js" defer=""></script>
    <script type="text/javascript" src="//thienmochuong.com/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6" id="prettyPhoto-js" data-wp-strategy="defer" defer=""></script>
    <script type="text/javascript" id="jquery-yith-wcwl-js-extra">/* <![CDATA[ */
      var yith_wcwl_l10n = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "yith_wcwl_button_position": "shortcode",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "enable_ajax_loading": "1",
        "ajax_loader_url": "https:\/\/thienmochuong.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
        "remove_from_wishlist_after_add_to_cart": "1",
        "is_wishlist_responsive": "1",
        "time_to_close_prettyphoto": "3000",
        "fragments_index_glue": ".",
        "reload_on_found_variation": "1",
        "mobile_media_query": "768",
        "labels": {
          "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
          "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">S\u1ea3n ph\u1ea9m \u0111\u01b0\u1ee3c th\u00eam v\u00e0o gi\u1ecf h\u00e0ng th\u00e0nh c\u00f4ng<\/div><\/div>"
        },
        "actions": {
          "add_to_wishlist_action": "add_to_wishlist",
          "remove_from_wishlist_action": "remove_from_wishlist",
          "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
          "load_mobile_action": "load_mobile",
          "delete_item_action": "delete_item",
          "save_title_action": "save_title",
          "save_privacy_action": "save_privacy",
          "load_fragments": "load_fragments"
        },
        "nonce": {
          "add_to_wishlist_nonce": "2a19cac7eb",
          "remove_from_wishlist_nonce": "cdff31edfb",
          "reload_wishlist_and_adding_elem_nonce": "b31a4093c9",
          "load_mobile_nonce": "e607d4070e",
          "delete_item_nonce": "88eb92f5de",
          "save_title_nonce": "0f7a223316",
          "save_privacy_nonce": "7d45eef6a1",
          "load_fragments_nonce": "e323daaa00"
        },
        "redirect_after_ask_estimate": "",
        "ask_estimate_redirect_url": "https:\/\/thienmochuong.com"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=3.34.0" id="jquery-yith-wcwl-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.5" id="swv-js" defer=""></script>
    <script type="text/javascript" id="contact-form-7-js-extra">/* <![CDATA[ */
      var wpcf7 = {
        "api": {
          "root": "https:\/\/thienmochuong.com\/wp-json\/",
          "namespace": "contact-form-7\/v1"
        },
        "cached": "1"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.5" id="contact-form-7-js" defer=""></script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/isures-combo-offers/public/js/jquery-countdown.js?ver=2.2.0" id="isures-combo-offers-countdown-js" defer=""></script>
    <script type="text/javascript" id="isures-combo-offers-js-extra">/* <![CDATA[ */
      var isures_vars = {
        "ajaxurl": "https:\/\/thienmochuong.com\/wp-admin\/admin-ajax.php",
        "check_flatsome": "flatsome",
        "price_format": "%2$s\u00a0%1$s",
        "price_suffix": "",
        "price_decimals": "0",
        "price_thousand_separator": ".",
        "price_decimal_separator": ",",
        "currency_symbol": "\u20ab",
        "countdown_end_text": "K\u1ebft th\u00fac sau",
        "days_text": "D",
        "alert_empty_main_product": "Vui l\u00f2ng ch\u1ecdn bi\u1ebfn th\u1ec3 c\u1ee7a s\u1ea3n ph\u1ea9m ch\u00ednh",
        "products_combo_columns": "4",
        "not_change_label_selected": "1"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="https://thienmochuong.com/wp-content/plugins/isures-combo-offers/public/js/isures-combo-offers-public.js?ver=2.2.0" id="isures-combo-offers-js" defer=""></script>
    <script type="text/javascript" id="wpsp-script-frontend" src="data:text/javascript;base64," data-rocket-status="executed"></script>
    <style>@media (min-width: 561px) { .devvn_toolbar { position: fixed; bottom: 170px; left: 50px; z-index: 99999999; } .devvn_toolbar ul { list-style: none; margin: 0; padding: 0; } .devvn_toolbar ul li { padding: 0; margin: 0; list-style: none; } .devvn_toolbar ul li a { display: block; position: relative; } .devvn_toolbar ul li a > div{ width: 45px; height: 45px; border-radius: 50%; -moz-border-radius: 50%; -webkit-border-radius: 50%; margin: 0 0 5px; position: relative; background-position: 50% 50%; background-size: cover; overflow: hidden; display: flex; align-items: center; justify-content: center; } .devvn_toolbar ul li a br { display: none; } .devvn_toolbar ul li a span { font-weight: 400; color: #333; position: absolute; top: 50%; left: calc(100% + 10px); left: -webkit-calc(100% + 10px); left: -moz-calc(100% + 10px); margin-top: -12.5px; font-size: 14px; height: 25px; line-height: 25px; padding: 0 10px; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; white-space: nowrap; opacity: 0; visibility: hidden; } .devvn_toolbar ul li a:hover span{ opacity: 1; visibility: visible; } .devvn_toolbar ul li a span:after { right: 100%; top: 50%; border: solid transparent; content: " "; height: 0; width: 0; position: absolute; pointer-events: none; border-color: rgba(136, 183, 213, 0); border-right-color: #333; border-width: 5px; margin-top: -5px; } .devvn_toolbar ul li a img { width: auto; height: auto; max-width: 35px; max-height: 35px; margin: 0; box-shadow: none; border: 0; } .devvn_contact_quickbuy_li, .devvn_contact_addtocart_li{ display: none; } .devvn_toolbar ul li a.animation_tada > div { animation-name: devvn_tada; -webkit-animation-name: devvn_tada; animation-delay: 0s; -webkit-animation-delay: 0s; animation-duration: 1.5s; -webkit-animation-duration: 1.5s; animation-iteration-count: infinite; -webkit-animation-iteration-count: infinite; cursor: pointer; box-shadow: 0 0 0 0 #c31d1d; } .devvn_toolbar ul li a.animation_zoom > div { animation-name: devvn_zoom; -webkit-animation-name: devvn_zoom; animation-delay: 0s; -webkit-animation-delay: 0s; animation-duration: 1.5s; -webkit-animation-duration: 1.5s; animation-iteration-count: infinite; -webkit-animation-iteration-count: infinite; cursor: pointer; box-shadow: 0 0 0 0 #c31d1d; } @-webkit-keyframes devvn_tada { 0% { -webkit-transform: scale(1); transform: scale(1) } 10%, 20% { -webkit-transform: scale(.9) rotate(-3deg); transform: scale(.9) rotate(-3deg) } 30%, 50%, 70%, 90% { -webkit-transform: scale(1.1) rotate(3deg); transform: scale(1.1) rotate(3deg) } 40%, 60%, 80% { -webkit-transform: scale(1.1) rotate(-3deg); transform: scale(1.1) rotate(-3deg) } 100% { -webkit-transform: scale(1) rotate(0); transform: scale(1) rotate(0) } } @keyframes devvn_tada { 0% { -webkit-transform: scale(1); -ms-transform: scale(1); transform: scale(1) } 10%, 20% { -webkit-transform: scale(.9) rotate(-3deg); -ms-transform: scale(.9) rotate(-3deg); transform: scale(.9) rotate(-3deg) } 30%, 50%, 70%, 90% { -webkit-transform: scale(1.1) rotate(3deg); -ms-transform: scale(1.1) rotate(3deg); transform: scale(1.1) rotate(3deg) } 40%, 60%, 80% { -webkit-transform: scale(1.1) rotate(-3deg); -ms-transform: scale(1.1) rotate(-3deg); transform: scale(1.1) rotate(-3deg) } 100% { -webkit-transform: scale(1) rotate(0); -ms-transform: scale(1) rotate(0); transform: scale(1) rotate(0) } } @-webkit-keyframes devvn_zoom { 0% { transform: scale(.9) } 70% { transform: scale(1); box-shadow: 0 0 0 15px transparent } 100% { transform: scale(.9); box-shadow: 0 0 0 0 transparent } } @keyframes devvn_zoom { 0% { transform: scale(.9) } 70% { transform: scale(1); box-shadow: 0 0 0 15px transparent } 100% { transform: scale(.9); box-shadow: 0 0 0 0 transparent } } .devvn_toolbar ul li a.animation_swing img{ animation-name: devvn_swing; -webkit-animation-name: devvn_swing; animation-iteration-count: infinite; -webkit-animation-iteration-count: infinite; animation-duration: 1s; -webkit-animation-duration: 1s; -webkit-animation-delay: 1s; animation-delay: 1s; animation-timing-function: ease-in; -webkit-animation-timing-function: ease-in; } @-webkit-keyframes devvn_swing { 20% { -webkit-transform: rotate3d(0,0,1,15deg); transform: rotate3d(0,0,1,15deg) } 40% { -webkit-transform: rotate3d(0,0,1,-10deg); transform: rotate3d(0,0,1,-10deg) } 60% { -webkit-transform: rotate3d(0,0,1,5deg); transform: rotate3d(0,0,1,5deg) } 80% { -webkit-transform: rotate3d(0,0,1,-5deg); transform: rotate3d(0,0,1,-5deg) } to { -webkit-transform: rotate3d(0,0,1,0deg); transform: rotate3d(0,0,1,0deg) } } @keyframes devvn_swing { 20% { -webkit-transform: rotate3d(0,0,1,15deg); transform: rotate3d(0,0,1,15deg) } 40% { -webkit-transform: rotate3d(0,0,1,-10deg); transform: rotate3d(0,0,1,-10deg) } 60% { -webkit-transform: rotate3d(0,0,1,5deg); transform: rotate3d(0,0,1,5deg) } 80% { -webkit-transform: rotate3d(0,0,1,-5deg); transform: rotate3d(0,0,1,-5deg) } to { -webkit-transform: rotate3d(0,0,1,0deg); transform: rotate3d(0,0,1,0deg) } } body .devvn_toolbar.devvn_toolbar_right { left:auto; bottom: 170px; right: 50px; } body .devvn_toolbar.devvn_toolbar_right ul li a span { right: calc(100% + 10px); right: -webkit-calc(100% + 10px); right: -moz-calc(100% + 10px); left: auto } .devvn_toolbar.devvn_toolbar_right ul li a span:after { left: 100%; right: 0; transform: rotate(180deg); -moz-transform: rotate(180deg); -webkit-transform: rotate(180deg) } } @media (max-width: 560px) { body.has_devvn_toolbar { padding-bottom: 50px; } .devvn_toolbar { background: #fff; display: inline-block; width: 100%; bottom: 0; left: 0; position: fixed; z-index: 99999999; height: auto; padding: 0; border-top: 0; visibility: hidden; opacity: 0; transform: translate3d(0,120%,0); -moz-transform: translate3d(0,120%,0); -webkit-transform: translate3d(0,120%,0); transition: all .3s linear; -moz-transition: all .3s linear; -webkit-transition: all .3s linear; box-shadow: 0 0.5rem 1rem 0 rgb(44 51 73 / 60%); padding-bottom: env(safe-area-inset-bottom); } .show_contactfix .devvn_toolbar { transform: translate3d(0,0,0); -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); visibility: visible; opacity: 1; } .devvn_toolbar ul { list-style: none; padding: 0; margin: 0; border-collapse: collapse; width: 100%; -js-display: flex; display: -ms-flexbox; display: flex; -ms-flex-flow: row wrap; flex-flow: row wrap; } .devvn_toolbar ul li { flex-grow: 1; flex-shrink: 1; flex-basis: 0; text-align: center; display: flex; margin-bottom: 0; } .devvn_toolbar ul li a{ display: block; width: 100%; outline: none; text-decoration: none; padding: 5px 3px; white-space: nowrap; } .devvn_toolbar ul li a span { font-weight: 400; color: #333; background: transparent; font-size: 3.5vw; display: block; margin: 2px 0 0 0; } .devvn_toolbar ul li a img { height: 6vw; width: auto; margin: 0; } .woocommerce-checkout .devvn_toolbar { display: none !important; } .devvn_toolbar a.devvn_buy_now_style { margin: 0; border-radius: 0; padding:
      5px 8px; font-size: initial; line-height: inherit; } .devvn_toolbar a.devvn_buy_now_style span { margin: 0; padding: 0; } .devvn_toolbar a.devvn_buy_now_style span { background: none !important; } a#devvn_contact_addtocart { background: #e03232 !important; } a#devvn_contact_quickbuy { background: #fd6e1d !important; } } .mfp-wrap, .mfp-bg { z-index: 999999999; } li.devvn_contact_addtocart_li.cf_loading a { position: relative; pointer-events: none; } li.devvn_contact_addtocart_li.cf_loading a:before { content: ""; width: 100%; height: 100%; background: #0000006b; position: absolute; top: 0; left: 0; z-index: 2; } li.devvn_contact_addtocart_li.cf_loading a:after { -webkit-animation: devvn_cf_spin 500ms infinite linear; animation: devvn_cf_spin 500ms infinite linear; border: 2px solid #fff; border-radius: 32px; border-right-color: transparent !important; border-top-color: transparent !important; content: ""; display: block; height: 16px; top: 50%; margin-top: -8px; left: 50%; margin-left: -8px; position: absolute; width: 16px; z-index: 3; } @-webkit-keyframes devvn_cf_spin { 0% { -webkit-transform: rotate(0deg); transform: rotate(0deg) } 100% { -webkit-transform: rotate(360deg); transform: rotate(360deg) } } @keyframes devvn_cf_spin { 0% { -webkit-transform: rotate(0deg); transform: rotate(0deg) } 100% { -webkit-transform: rotate(360deg); transform: rotate(360deg) } }</style>
    <div class="devvn_toolbar devvn_toolbar_right">
      <ul>
        <li>
          <style>@media (min-width: 561px) { .devvn_toolbar ul li a#devvn_contact_1 span:after { border-right-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_1 span{ color: #fff; background-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_1 > div{ background: #02e78a; } } @media (max-width: 560px) { .devvn_toolbar ul li a#devvn_contact_1 span{ color: #ffffff; background-color: #02e78a; } .devvn_toolbar ul li a#devvn_contact_1{ background: #02e78a; } }</style>
          <a href="tel:0818348368" id="devvn_contact_1" title="立即致电" class=" call">
            <div>
              <img src="https://thienmochuong.com/wp-content/uploads/2022/06/Group-2856.svg" class="attachment-full size-full" alt="" width="20" height="20" decoding="async"></div>
            <span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">立即致电</font></font>
            </span>
          </a>
        </li>
        <li>
          <style>@media (min-width: 561px) { .devvn_toolbar ul li a#devvn_contact_2 span:after { border-right-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_2 span{ color: #fff; background-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_2 > div{ background: #2196f3; } } @media (max-width: 560px) { .devvn_toolbar ul li a#devvn_contact_2 span{ color: #ffffff; background-color: #2196f3; } .devvn_toolbar ul li a#devvn_contact_2{ background: #2196f3; } }</style>
          <a href="https://m.me/thienmochuongvn" target="_blank" id="devvn_contact_2" title="信使" class=" messenger">
            <div>
              <img src="https://thienmochuong.com/wp-content/uploads/2022/06/15504345801530103317.svg" class="attachment-full size-full" alt="" width="20" height="20" decoding="async"></div>
            <span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">信使</font></font>
            </span>
          </a>
        </li>
        <li>
          <style>@media (min-width: 561px) { .devvn_toolbar ul li a#devvn_contact_3 span:after { border-right-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_3 span{ color: #fff; background-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_3 > div{ background: #00acd4; } } @media (max-width: 560px) { .devvn_toolbar ul li a#devvn_contact_3 span{ color: #ffffff; background-color: #00acd4; } .devvn_toolbar ul li a#devvn_contact_3{ background: #00acd4; } }</style>
          <a href="https://zalo.me/0933348368" target="_blank" id="devvn_contact_3" title="扎洛" class=" zalo">
            <div>
              <img width="60" height="60" src="https://thienmochuong.com/wp-content/uploads/2022/06/zalo.png" class="attachment-full size-full" alt="" decoding="async"></div>
            <span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">扎洛</font></font>
            </span>
          </a>
        </li>
        <li>
          <style>@media (min-width: 561px) { .devvn_toolbar ul li a#devvn_contact_4 span:after { border-right-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_4 span{ color: #fff; background-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_4 > div{ background: #f4a43a; } } @media (max-width: 560px) { .devvn_toolbar ul li a#devvn_contact_4 span{ color: #ffffff; background-color: #f4a43a; } .devvn_toolbar ul li a#devvn_contact_4{ background: #f4a43a; } }</style>
          <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; subiz('expandWidget')" id="devvn_contact_4" title="Tư vấn" class=" advise">
            <div>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" class="attachment-full size-full" alt="" width="20" height="20" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2022/06/chat-1-1.svg">
              <noscript>
                <img src="https://thienmochuong.com/wp-content/uploads/2022/06/chat-1-1.svg" class="attachment-full size-full" alt="" width="20" height="20" decoding="async" /></noscript>
            </div>
            <span>Tư vấn</span></a>
        </li>
        <li>
          <style>@media (min-width: 561px) { .devvn_toolbar ul li a#devvn_contact_5 span:after { border-right-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_5 span{ color: #fff; background-color: #0084ff; } .devvn_toolbar ul li a#devvn_contact_5 > div{ background: #f4a43a; } } @media (max-width: 560px) { .devvn_toolbar ul li a#devvn_contact_5 span{ color: #ffffff; background-color: #f4a43a; } .devvn_toolbar ul li a#devvn_contact_5{ background: #f4a43a; } }</style>
          <a href="https://thienmochuong.com/lien-he" id="devvn_contact_5" title="Cửa hàng" class=" appointment">
            <div>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2020'%3E%3C/svg%3E" class="attachment-full size-full" alt="" width="20" height="20" decoding="async" data-lazy-src="https://thienmochuong.com/wp-content/uploads/2023/05/shop-1-svgrepo-com-1.svg">
              <noscript>
                <img src="https://thienmochuong.com/wp-content/uploads/2023/05/shop-1-svgrepo-com-1.svg" class="attachment-full size-full" alt="" width="20" height="20" decoding="async" /></noscript>
            </div>
            <span>Cửa hàng</span></a>
        </li>
        <li class="devvn_contact_addtocart_li">
          <style>.devvn_toolbar ul li a#devvn_contact_addtocart span:after { border-right-color: #e03232; }</style>
          <a href="javascript:void(0);" class="devvn_buy_now_style" id="devvn_contact_addtocart">
            <div>
              <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="" data-lazy-src="https://thienmochuong.com/wp-content/plugins/devvn-contact-fixed/assets/commerce.svg">
              <noscript>
                <img src="https://thienmochuong.com/wp-content/plugins/devvn-contact-fixed/assets/commerce.svg" alt=""></noscript>
            </div>
            <span style="color: #fff; background-color: #e03232;">Thêm vào giỏ</span></a>
        </li>
      </ul>
    </div>
    <script src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKICAgICAgICAgICAgICAgICAgICAoZnVuY3Rpb24gKCQpIHsKICAgICAgICAgICAgICAgICAgICAgICAgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gZGNmX3Njcm9sbF9lbGVtZW50KCl7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGlzUHJvZHVjdCA9ICQoJ2JvZHknKS5oYXNDbGFzcygnc2luZ2xlLXByb2R1Y3QnKSwgdG9wRWxlbWVudCA9IDUwLCB0b3BEZXNjID0gJCgnLnByb2R1Y3QtcGFnZS1zZWN0aW9ucyAuZGV2dm5fZGVzY3JpcHRpb24nKS5sZW5ndGg7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGlzUHJvZHVjdCAmJiB0b3BEZXNjKXsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdG9wRWxlbWVudCA9IHBhcnNlSW50KCQoJy5wcm9kdWN0LXBhZ2Utc2VjdGlvbnMgLmRldnZuX2Rlc2NyaXB0aW9uJykub2Zmc2V0KCkudG9wKSAtIHBhcnNlSW50KCQod2luZG93KS5oZWlnaHQoKSk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICR0b3AgPSBqUXVlcnkod2luZG93KS5zY3JvbGxUb3AoKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiggJHRvcCA+PSB0b3BFbGVtZW50ICYmICEoJCgnYm9keScpLmhhc0NsYXNzKCdzaG93X2NvbnRhY3RmaXgnKSkgKXsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJCgnYm9keScpLmFkZENsYXNzKCdzaG93X2NvbnRhY3RmaXgnKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9ZWxzZSBpZigkdG9wIDwgNTAgJiYgJCgnYm9keScpLmhhc0NsYXNzKCdzaG93X2NvbnRhY3RmaXgnKSApewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkKCdib2R5JykucmVtb3ZlQ2xhc3MoJ3Nob3dfY29udGFjdGZpeCcpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRjZl9zY3JvbGxfZWxlbWVudCgpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRjZl9zY3JvbGxfZWxlbWVudCgpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAkKCdib2R5Jykub24oJ2NsaWNrJywgJyNkZXZ2bl9jb250YWN0X2FkZHRvY2FydCcsIGZ1bmN0aW9uKCkgewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxldCB0aGlzTGkgPSAkKHRoaXMpLmNsb3Nlc3QoJ2xpJyk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhpc0xpLmFkZENsYXNzKCdjZl9sb2FkaW5nJyk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJCgnZm9ybS5jYXJ0IC5zaW5nbGVfYWRkX3RvX2NhcnRfYnV0dG9uJykudHJpZ2dlcignY2xpY2snKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZigkKCdmb3JtLmNhcnQgLnNpbmdsZV9hZGRfdG9fY2FydF9idXR0b24nKS5pcygnLmRpc2FibGVkJykpewogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGlzTGkucmVtb3ZlQ2xhc3MoJ2NmX2xvYWRpbmcnKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFyIHRvcCA9ICQoJy5zdW1tYXJ5IGZvcm0uY2FydCcpLm9mZnNldCgpLnRvcDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJCgnaHRtbCwgYm9keScpLmFuaW1hdGUoe3Njcm9sbFRvcDp0b3AtNDR9LCA1MDAgKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICAgICAgfSkoalF1ZXJ5KTsKICAgICAgICAgICAgICAgIH0pOw==" data-rocket-status="executed">window.addEventListener('DOMContentLoaded',
      function() { (function($) {
          $(document).ready(function() {
            function dcf_scroll_element() {
              let isProduct = $('body').hasClass('single-product'),
              topElement = 50,
              topDesc = $('.product-page-sections .devvn_description').length;
              if (isProduct && topDesc) {
                topElement = parseInt($('.product-page-sections .devvn_description').offset().top) - parseInt($(window).height());
              }
              $top = jQuery(window).scrollTop();
              if ($top >= topElement && !($('body').hasClass('show_contactfix'))) {
                $('body').addClass('show_contactfix');
              } else if ($top < 50 && $('body').hasClass('show_contactfix')) {
                $('body').removeClass('show_contactfix');
              }
            }
            dcf_scroll_element();
            $(window).scroll(function() {
              dcf_scroll_element();
            });
            $('body').on('click', '#devvn_contact_addtocart',
            function() {
              let thisLi = $(this).closest('li');
              thisLi.addClass('cf_loading');
              $('form.cart .single_add_to_cart_button').trigger('click');
              if ($('form.cart .single_add_to_cart_button').is('.disabled')) {
                thisLi.removeClass('cf_loading');
                var top = $('.summary form.cart').offset().top;
                $('html, body').animate({
                  scrollTop: top - 44
                },
                500);
              }
            });
          });
        })(jQuery);
      });</script>
    <script src="data:text/javascript;base64,IWZ1bmN0aW9uKHMsdSxiLGkseil7dmFyIG8sdCxyLHk7c1tpXXx8KHMuX3NiemFjY2lkPXosc1tpXT1mdW5jdGlvbigpe3NbaV0ucS5wdXNoKGFyZ3VtZW50cyl9LHNbaV0ucT1bXSxzW2ldKCJzZXRBY2NvdW50Iix6KSxyPVsid2lkZ2V0LnN1Yml6Lm5ldCIsInN0b3JhZ2UuZ29vZ2xlYXBpcyIrKHQ9Ii5jb20iKSwiYXBwLnNiei53b3JrZXJzLmRldiIsaSsiYSIrKG89ZnVuY3Rpb24oayx0KXt2YXIgbj10PD02PzU6byhrLHQtMSkrbyhrLHQtMyk7cmV0dXJuIGshPT10P246bi50b1N0cmluZygzMil9KSgyMCwyMCkrdCxpKyJiIitvKDMwLDMwKSt0LGkrImMiK28oNDAsNDApK3RdLCh5PWZ1bmN0aW9uKGspe3ZhciB0LG47cy5fc3ViaXpfaW5pdF8yMDk0ODUwOTI4NDMwfHxyW2tdJiYodD11LmNyZWF0ZUVsZW1lbnQoYiksbj11LmdldEVsZW1lbnRzQnlUYWdOYW1lKGIpWzBdLHQuYXN5bmM9MSx0LnNyYz0iaHR0cHM6Ly8iK3Jba10rIi9zYnovYXBwLmpzP2FjY2lkPSIreixuLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKHQsbiksc2V0VGltZW91dCh5LDJlMyxrKzEpKX0pKDApKX0od2luZG93LGRvY3VtZW50LCJzY3JpcHQiLCJzdWJpeiIsICJhY3J5Z3hqYWZhY2Z2dWR0cW9oeCIp" data-rocket-status="executed">!
      function(s, u, b, i, z) {
        var o, t, r, y;
        s[i] || (s._sbzaccid = z, s[i] = function() {
          s[i].q.push(arguments)
        },
        s[i].q = [], s[i]("setAccount", z), r = ["widget.subiz.net", "storage.googleapis" + (t = ".com"), "app.sbz.workers.dev", i + "a" + (o = function(k, t) {
          var n = t <= 6 ? 5 : o(k, t - 1) + o(k, t - 3);
          return k !== t ? n: n.toString(32)
        })(20, 20) + t, i + "b" + o(30, 30) + t, i + "c" + o(40, 40) + t], (y = function(k) {
          var t, n;
          s._subiz_init_2094850928430 || r[k] && (t = u.createElement(b), n = u.getElementsByTagName(b)[0], t.async = 1, t.src = "https://" + r[k] + "/sbz/app.js?accid=" + z, n.parentNode.insertBefore(t, n), setTimeout(y, 2e3, k + 1))
        })(0))
      } (window, document, "script", "subiz", "acrygxjafacfvudtqohx")</script>
    <script type="text/javascript">window.lazyLoadOptions = [{
        elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
        callback_loaded: function(element) {
          if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
            if (element.classList.contains("lazyloaded")) {
              if (typeof window.jQuery != "undefined") {
                if (jQuery.fn.fitVids) {
                  jQuery(element).parent().fitVids()
                }
              }
            }
          }
        }
      },
      {
        elements_selector: ".rocket-lazyload",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
      }];
      window.addEventListener('LazyLoad::Initialized',
      function(e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
          var observer = new MutationObserver(function(mutations) {
            var image_count = 0;
            var iframe_count = 0;
            var rocketlazy_count = 0;
            mutations.forEach(function(mutation) {
              for (var i = 0; i < mutation.addedNodes.length; i++) {
                if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                  continue
                }
                if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                  continue
                }
                images = mutation.addedNodes[i].getElementsByTagName('img');
                is_image = mutation.addedNodes[i].tagName == "IMG";
                iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                image_count += images.length;
                iframe_count += iframes.length;
                rocketlazy_count += rocket_lazy.length;
                if (is_image) {
                  image_count += 1
                }
                if (is_iframe) {
                  iframe_count += 1
                }
              }
            });
            if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
              lazyLoadInstance.update()
            }
          });
          var b = document.getElementsByTagName("body")[0];
          var config = {
            childList: !0,
            subtree: !0
          };
          observer.observe(b, config)
        }
      },
      !1)</script>
    <script async="" data-no-minify="1" src="https://thienmochuong.com/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js" type="text/javascript"></script>
    <script type="text/javascript">"use strict";
      function wprRemoveCPCSS() {
        var preload_stylesheets = document.querySelectorAll('link[data-rocket-async="style"][rel="preload"]');
        if (preload_stylesheets && 0 < preload_stylesheets.length) for (var stylesheet_index = 0; stylesheet_index < preload_stylesheets.length; stylesheet_index++) {
          var media = preload_stylesheets[stylesheet_index].getAttribute("media") || "all";
          if (window.matchMedia(media).matches) return void setTimeout(wprRemoveCPCSS, 200)
        }
        var elem = document.getElementById("rocket-critical-css");
        elem && "remove" in elem && elem.remove()
      }
      window.addEventListener ? window.addEventListener("load", wprRemoveCPCSS) : window.attachEvent && window.attachEvent("onload", wprRemoveCPCSS);</script>
    <noscript>
      <link rel='stylesheet' id='magnific-popup-css' href='https://thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/magnific-popup/magnific-popup.css?ver=1.5.1' type='text/css' media='all' />
      <link rel='stylesheet' id='devvn-reviews-style-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/css/devvn-woocommerce-reviews.css?ver=1.5.1&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='owl.carousel-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/library/owl/assets/owl.carousel.min.css?ver=1.5.1&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='devvn-shortcode-reviews-style-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/devvn-woocommerce-reviews/css/devvn-shortcode-reviews.css?ver=1.5.1&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='isures-combo-offers-slider-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/isures-combo-offers/public/css/owl.carousel.min.css?ver=2.2.0&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='isures-combo-offers-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/isures-combo-offers/public/css/isures-combo-offers-public.css?ver=2.2.0&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='kk-star-ratings-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.min.css?ver=5.4.7&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='mailerlite_forms.css-css' href='https://thienmochuong.com/wp-content/plugins/official-mailerlite-sign-up-forms/assets/css/mailerlite_forms.css?ver=1.7.10' type='text/css' media='all' />
      <link rel='stylesheet' id='photoswipe-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css?ver=8.9.1&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='photoswipe-default-skin-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css?ver=8.9.1&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='dashicons-css' href='https://thienmochuong.com/wp-includes/css/dashicons.min.css?ver=93f6f3aee2856cf389b1ea46be37ba48' type='text/css' media='all' />
      <link rel='stylesheet' id='wt-smart-coupon-for-woo-css' href='https://thienmochuong.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/css/wt-smart-coupon-public.css?ver=1.7.1' type='text/css' media='all' />
      <link rel='stylesheet' id='related-styles-css' href='https://thienmochuong.com/wp-content/plugins/woo-mailerlite/includes/../public/css/style.css?ver=93f6f3aee2856cf389b1ea46be37ba48' type='text/css' media='all' />
      <link rel='stylesheet' id='flatsome-woocommerce-wishlist-css' href='https://thienmochuong.com/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.css?ver=3.10.2' type='text/css' media='all' />
      <link rel='stylesheet' id='flatsome-swatches-frontend-css' href='https://thienmochuong.com/wp-content/themes/flatsome/assets/css/extensions/flatsome-swatches-frontend.css?ver=3.18.5' type='text/css' media='all' />
      <link rel='stylesheet' id='popup-maker-site-css' href='//thienmochuong.com/wp-content/uploads/pum/pum-site-styles.css?generated=1716901030&#038;ver=1.19.0' type='text/css' media='all' />
      <link rel='stylesheet' id='flatsome-main-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.18.5&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='flatsome-shop-css' href='https://thienmochuong.com/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=3.18.5' type='text/css' media='all' />
      <link rel='stylesheet' id='flatsome-style-css' href='https://thienmochuong.com/wp-content/cache/background-css/thienmochuong.com/wp-content/themes/devvn-child/style.css?ver=1.0.3&wpr_t=1740233783' type='text/css' media='all' />
      <link rel='stylesheet' id='wc-blocks-style-css' href='https://thienmochuong.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-8.9.1' type='text/css' media='all' />
      <link rel='stylesheet' id='contact-form-7-css' href='https://thienmochuong.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.5' type='text/css' media='all' /></noscript>
    <div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id="">
      <div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd">
        <div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c">
          <img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div>
        <div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c">
          <div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">原文</div>
          <div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div>
        </div>
        <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr">
          <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr">
            <div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">请对此翻译评分</div>
            <div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">您的反馈将用于改进谷歌翻译</div></div>
          <div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr">
            <button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="翻译质量很棒" aria-label="翻译质量很棒" aria-pressed="false">
              <span id="goog-gt-thumbUpIcon">
                <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                  <path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path>
                </svg>
              </span>
              <span id="goog-gt-thumbUpIconFilled">
                <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                  <path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path>
                </svg>
              </span>
            </button>
            <button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="翻译质量很差" aria-label="翻译质量很差" aria-pressed="false">
              <span id="goog-gt-thumbDownIcon">
                <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                  <path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path>
                </svg>
              </span>
              <span id="goog-gt-thumbDownIconFilled">
                <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                  <path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path>
                </svg>
              </span>
            </button>
          </div>
        </div>
        <div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
          <form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
            <input type="text" name="sl" id="goog-gt-votingInputSrcLang">
            <input type="text" name="tl" id="goog-gt-votingInputTrgLang">
            <input type="text" name="query" id="goog-gt-votingInputSrcText">
            <input type="text" name="gtrans" id="goog-gt-votingInputTrgText">
            <input type="text" name="vote" id="goog-gt-votingInputVote"></form>
          <iframe name="votingFrame" frameborder="0"></iframe>
        </div>
      </div>
    </div>
    <div>
      <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
        <div class="grecaptcha-logo">
          <iframe title="验证码" width="256" height="60" role="presentation" name="a-8vgmqb7rtmyu" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfCm_AgAAAAAEq3YU3n3BZUF1RvspLfuZJ07FY-&amp;co=aHR0cHM6Ly90aGllbm1vY2h1b25nLmNvbTo0NDM.&amp;hl=zh-CN&amp;v=IyZ984yGrXrBd6ihLOYGwy9X&amp;size=invisible&amp;cb=wwwtcw76vf74"></iframe>
        </div>
        <div class="grecaptcha-error"></div>
        <textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
      </div>
      <iframe style="display: none;"></iframe>
    </div>
    <script async="" defer="" src="https://vcdn.subiz-cdn.com/widget-v4/public/194d4d5466c.app.js"></script>
    <script async="" defer="" src="https://public-gcs.subiz-cdn.com/widget-v4/public/194d4d5466c.app.js"></script>
    <div id="cprygyorvnjyvrikgpbdg" sbz-plugin-type="chatbox" sbz-plugin-account-id="acrygxjafacfvudtqohx">
      <div class="desktop">
        <div class="widget-layout widget-layout--right" style="opacity: 1 !important;">
          <div class="widget-preview widget-preview--right widget-preview--hidden">
            <div class="widget-preview--body">
              <img alt="头像小工具" class="widget-preview--avatar" src="https://vcdn.subiz-cdn.com/file/firygxkhfqbouutmzgwf_128_517486574fadff9835e61582d688e376510702ff91a0a1a2581ba756f6bd8490_acrygxjafacfvudtqohx_acrygxjafacfvudtqohx">
              <div class="widget-preview--content">
                <div class="widget-preview--title">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">天木香</font></font>
                </div>
                <p class="widget-preview--message">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">欢迎来到 Thien Moc Huong 的网站！</font></font>
                </p>
              </div>
              <div class="widget-preview--btn-close"></div>
            </div>
            <div class="widget-preview--action">
              <div class="widget-preview--action-text">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">发送消息</font></font>
              </div>
            </div>
          </div>
          <div class="chat-button chat-button--right">
            <div class="chat-button--white-bg chat-button--white-bg--mask-only" style="width: 66px !important; height: 66px !important;"></div>
            <div class="chat-button--img-container" style="mask-image: url(&quot;https://vcdn.subiz-cdn.com/file/bubble_11.svg?v=5&quot;) !important; height: 70px !important; width: 70px !important; background: rgb(245, 171, 61) !important; mask-size: cover !important;">
              <img width="70" height="70" alt="聊天按钮" class="chat-button--img" src="https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/bubble_default.7d5e4ab.svg"></div>
          </div>
        </div>
        <div class="widget-container widget-container--right widget-container--hide">
          <div class="widget-header widget-header--collapsed">
            <div class="widget-header--inner widget-header--inner--collapsed" style="">
              <div class="group-avatar group-avatar--secondary">
                <div class="d-inline-block pos-relative" data-tooltip="Thien Moc Huong" data-tooltip-position="bottom">
                  <img width="35" height="35" alt="特工头像左" class="avatar group-avatar--agent-left" src="https://vcdn.subiz-cdn.com/file/firygxkhfqbouutmzgwf_128_517486574fadff9835e61582d688e376510702ff91a0a1a2581ba756f6bd8490_acrygxjafacfvudtqohx_acrygxjafacfvudtqohx"></div>
              </div>
              <div class="widget-header--title-container">
                <div class="widget-header--title">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">天木香</font></font>
                </div>
                <div class="widget-header--description" title="Thien Moc Huong 始终愿意提供支持。请立即联系我们获取建议！">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Thien Moc Huong 始终愿意提供支持。请立即联系我们获取建议！</font></font>
                </div>
              </div>
              <div class="widget-header--button widget-header--button-close" data-tooltip="Đóng" data-tooltip-position="bottom">
                <span class="widget-header--button-close-icon"></span>
              </div>
            </div>
            <div class="widget-header--inner widget-header--inner--expanded widget-header--inner--hidden">
              <div class="widget-header-expand-container">
                <div class="widget-header--top-wrapper">
                  <div class="widget-header--title">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">天木香</font></font>
                  </div>
                  <div class="widget-header--button widget-header--button-close" data-tooltip="Đóng" data-tooltip-position="bottom">
                    <span class="widget-header--button-close-icon"></span>
                  </div>
                </div>
                <div class="widget_header__body widget_header__body__social">
                  <img alt="标识" class="social__account_logo" src="https://vcdn.subiz-cdn.com/file/firygxkhfqbouutmzgwf_128_517486574fadff9835e61582d688e376510702ff91a0a1a2581ba756f6bd8490_acrygxjafacfvudtqohx_acrygxjafacfvudtqohx">
                  <div>
                    <div class="social__introduction">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Thien Moc Huong 始终愿意提供支持。请立即联系我们获取建议！</font></font>
                    </div>
                    <div class="social__links"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget-header--inner widget-header--inner--expanded widget-header--inner--hidden">
              <div class="widget-header-expand-container">
                <div class="widget-header--top-wrapper">
                  <div class="widget-header--title">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">天木香</font></font>
                  </div>
                  <div class="widget-header--button widget-header--button-close" data-tooltip="Đóng" data-tooltip-position="bottom">
                    <span class="widget-header--button-close-icon"></span>
                  </div>
                </div>
                <div class="widget_header__body">
                  <div class="widget-header--avatar-wrapper">
                    <div class="group-avatar group-avatar--primary">
                      <div class="d-inline-block pos-relative" data-tooltip="Thien Moc Huong" data-tooltip-position="bottom">
                        <img width="35" height="35" alt="特工头像左" class="avatar group-avatar--agent-left" src="https://vcdn.subiz-cdn.com/file/firygxkhfqbouutmzgwf_128_517486574fadff9835e61582d688e376510702ff91a0a1a2581ba756f6bd8490_acrygxjafacfvudtqohx_acrygxjafacfvudtqohx"></div>
                    </div>
                  </div>
                  <div class="widget-header--title-container">
                    <div class="widget-header--description">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Thien Moc Huong 始终愿意提供支持。请立即联系我们获取建议！</font></font>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="widget-body">
            <div class="widget-body--content">
              <div class="widget-body--events-container">
                <div class="widget-body--empty">
                  <div class="widget-body--empty-icon"></div>
                  <div class="widget-body--empty-text">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">发送消息来开始对话！</font></font>
                  </div>
                </div>
                <div class="poweredby">
                  <a href="https://subiz.com.vn/?utm_source=thienmochuong.com&amp;utm_medium=widget&amp;utm_campaign=widget_referral" class="poweredby--text" target="_blank" title="苏比斯">
                    <img width="17" height="12" class="poweredby--subiz-logo" src="https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/subiz-mono.8fbc067.svg" alt="由 subiz 提供支持">Subiz
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">苏比斯</font></font>
                  </a>
                </div>
              </div>
              <div class="typing typing--hidden">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Thien Moc Huong</font></font>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">正在回复...</font></font>đang trả lời...</div>
            </div>
            <div class="d-none">
              <div class="rating--overlay" style="opacity: 0.15 !important;"></div>
              <div class="rating" style="color: red; height: 0px !important;">
                <div class="rating--handle">
                  <div class="rating--thumb"></div>
                </div>
                <div class="rating--content">
                  <div class="rating--heading">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">感谢聊天</font></font>
                    <div class="rating--close-btn"></div>
                  </div>
                  <div class="rating--description">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">您如何评价与我们的顾问合作的经历？</font></font>
                  </div>
                  <textarea type="text" class="rating--comment"></textarea>
                  <div class="rating-faces-container">
                    <div class="rating-face-container">
                      <img alt="贫穷的" src="https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/rating--poor.2938a25.svg">
                      <p class="rating-face--text">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">坏的</font></font>
                      </p>
                    </div>
                    <div class="rating-face-container">
                      <img alt="平均的" src="https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/rating--average.1ea492c.svg">
                      <p class="rating-face--text">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">中等的</font></font>
                      </p>
                    </div>
                    <div class="rating-face-container">
                      <img alt="伟大的" src="https://vcdn.subiz-cdn.com/widget-v4/public/assets/img/rating--great.e3d712e.svg">
                      <p class="rating-face--text">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">伟大的</font></font>
                      </p>
                    </div>
                  </div>
                  <div class="rating-no-thanks">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">不，谢谢！</font></font>
                  </div>
                </div>
              </div>
            </div>
            <false forceview="" plugin="[object Object]" order_id="" store="[object Object]" cid=""></false>
            <div class="message-input ">
              <input class="d-none" type="file" multiple="">
              <textarea class="message-input--input" maxlength="1024" placeholder="输入消息..." rows="1" data-emojiable="true"></textarea>
              <div class="d-flex flex-row align-self-end">
                <div>
                  <div class="message-input--button message-input--emoji-button"></div>
                </div>
                <div data-tooltip-poasition="top-left" class="message-input--button message-input--attachment-button"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>


</html>





