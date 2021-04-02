(window.webpackJsonp=window.webpackJsonp||[]).push([["contacts~home~polis~service"],{"./src/js/components/loaders/PageLoader.ts":
/*!*************************************************!*\
  !*** ./src/js/components/loaders/PageLoader.ts ***!
  \*************************************************/
/*! exports provided: PageLoader */function(e,n,o){"use strict";o.r(n),o.d(n,"PageLoader",(function(){return r}));var t=o(/*! @babel/runtime/helpers/classCallCheck */"./node_modules/@babel/runtime/helpers/classCallCheck.js"),s=o.n(t),u=o(/*! @babel/runtime/helpers/createClass */"./node_modules/@babel/runtime/helpers/createClass.js"),a=o.n(u),i=o(/*! gsap */"./node_modules/gsap/index.js"),r=function(){function e(){s()(this,e)}return a()(e,null,[{key:"load",value:function(e){var n=document.querySelectorAll("[data-i]"),o=i.default.timeline({onComplete:function(){document.body.classList.remove("loading"),e&&e()}});n.length&&o.to(n,{duration:.7,y:0,opacity:1,ease:"power2.out",stagger:.2})}}]),e}()},"./src/js/utils/noop.ts":
/*!******************************!*\
  !*** ./src/js/utils/noop.ts ***!
  \******************************/
/*! exports provided: default */function(e,n,o){"use strict";function t(){}o.r(n),o.d(n,"default",(function(){return t}))},"./src/js/utils/onLoaded.ts":
/*!**********************************!*\
  !*** ./src/js/utils/onLoaded.ts ***!
  \**********************************/
/*! exports provided: onLoaded */function(e,n,o){"use strict";o.r(n),o.d(n,"onLoaded",(function(){return a}));var t=o(/*! @emotionagency/utils */"./node_modules/@emotionagency/utils/build/index.js"),s=o(/*! ../state */"./src/js/state.ts"),u=o(/*! ./noop */"./src/js/utils/noop.ts"),a=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:u.default,n=function n(){s.state.isLoaded&&(e(),t.raf.off(n))};t.raf.on(n)}}}]);