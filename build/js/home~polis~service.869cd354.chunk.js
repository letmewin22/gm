(window.webpackJsonp=window.webpackJsonp||[]).push([["home~polis~service"],{"./src/js/components/clients.ts":
/*!**************************************!*\
  !*** ./src/js/components/clients.ts ***!
  \**************************************/
/*! exports provided: clients */function(e,t,n){"use strict";n.r(t),n.d(t,"clients",(function(){return r}));var o=n(/*! scrollbooster */"./node_modules/scrollbooster/src/index.js"),s=n(/*! @emotionagency/utils */"./node_modules/@emotionagency/utils/build/index.js"),r=function(){var e,t=document.querySelector(".clients__thumb"),n=document.querySelector(".clients__items"),r=document.querySelector(".clients__items-wrapper"),i=function(){n.scrollWidth!==n.offsetWidth&&(t.style.display="block",r.classList.add("active"),e=new o.default({viewport:r,content:n,scrollMode:"transform",direction:"horizontal",emulateScroll:!0,onUpdate:function(e){var n=e.position.x,o=document.querySelector(".clients__items"),s=100*n/(o.scrollWidth-o.clientWidth);s>=100?s=100:s<=0&&(s=0),t.style.left=s+"%",t.style.transform="translateX(-".concat(s,"%)")}}))};return s.resize.on(i),{destroy:function(){s.resize.off(i),e.destroy()}}}},"./src/js/components/loaders/PageLoader.ts":
/*!*************************************************!*\
  !*** ./src/js/components/loaders/PageLoader.ts ***!
  \*************************************************/
/*! exports provided: PageLoader */function(e,t,n){"use strict";n.r(t),n.d(t,"PageLoader",(function(){return l}));var o=n(/*! @babel/runtime/helpers/classCallCheck */"./node_modules/@babel/runtime/helpers/classCallCheck.js"),s=n.n(o),r=n(/*! @babel/runtime/helpers/createClass */"./node_modules/@babel/runtime/helpers/createClass.js"),i=n.n(r),c=n(/*! gsap */"./node_modules/gsap/index.js"),l=function(){function e(){s()(this,e)}return i()(e,null,[{key:"load",value:function(e){var t=document.querySelectorAll("[data-i]"),n=c.default.timeline({onComplete:function(){document.body.classList.remove("loading"),e&&e()}});t.length&&n.to(t,{duration:.7,y:0,opacity:1,ease:"power2.out",stagger:.2})}}]),e}()},"./src/js/utils/noop.ts":
/*!******************************!*\
  !*** ./src/js/utils/noop.ts ***!
  \******************************/
/*! exports provided: default */function(e,t,n){"use strict";function o(){}n.r(t),n.d(t,"default",(function(){return o}))},"./src/js/utils/onLoaded.ts":
/*!**********************************!*\
  !*** ./src/js/utils/onLoaded.ts ***!
  \**********************************/
/*! exports provided: onLoaded */function(e,t,n){"use strict";n.r(t),n.d(t,"onLoaded",(function(){return i}));var o=n(/*! @emotionagency/utils */"./node_modules/@emotionagency/utils/build/index.js"),s=n(/*! ../state */"./src/js/state.ts"),r=n(/*! ./noop */"./src/js/utils/noop.ts"),i=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:r.default,t=function t(){s.state.isLoaded&&(e(),o.raf.off(t))};o.raf.on(t)}}}]);