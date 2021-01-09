(window.webpackJsonp=window.webpackJsonp||[]).push([["home~polis~service"],{"./src/js/components/clients.ts":
/*!**************************************!*\
  !*** ./src/js/components/clients.ts ***!
  \**************************************/
/*! exports provided: clients */function(e,t,o){"use strict";o.r(t),o.d(t,"clients",(function(){return r}));var n=o(/*! scrollbooster */"./node_modules/scrollbooster/src/index.js"),s=o(/*! @emotionagency/utils */"./node_modules/@emotionagency/utils/build/index.js"),r=function(){var e,t=document.querySelector(".clients__thumb"),o=document.querySelector(".clients__scrollbar"),r=document.querySelector(".clients__items"),i=document.querySelector(".clients__items-wrapper"),c=function(){r.scrollWidth!==r.offsetWidth&&(o.style.display="block",i.classList.add("active"),e=new n.default({viewport:i,content:r,scrollMode:"transform",direction:"horizontal",emulateScroll:!0,onUpdate:function(e){var o=e.position.x,n=document.querySelector(".clients__items"),s=100*o/(n.scrollWidth-n.clientWidth);s>=100?s=100:s<=0&&(s=0),t.style.left=s+"%",t.style.transform="translateX(-".concat(s,"%)")}}))};return s.resize.on(c),{destroy:function(){s.resize.off(c),e&&e.destroy()}}}},"./src/js/components/loaders/PageLoader.ts":
/*!*************************************************!*\
  !*** ./src/js/components/loaders/PageLoader.ts ***!
  \*************************************************/
/*! exports provided: PageLoader */function(e,t,o){"use strict";o.r(t),o.d(t,"PageLoader",(function(){return l}));var n=o(/*! @babel/runtime/helpers/classCallCheck */"./node_modules/@babel/runtime/helpers/classCallCheck.js"),s=o.n(n),r=o(/*! @babel/runtime/helpers/createClass */"./node_modules/@babel/runtime/helpers/createClass.js"),i=o.n(r),c=o(/*! gsap */"./node_modules/gsap/index.js"),l=function(){function e(){s()(this,e)}return i()(e,null,[{key:"load",value:function(e){var t=document.querySelectorAll("[data-i]"),o=c.default.timeline({onComplete:function(){document.body.classList.remove("loading"),e&&e()}});t.length&&o.to(t,{duration:.7,y:0,opacity:1,ease:"power2.out",stagger:.2})}}]),e}()},"./src/js/utils/noop.ts":
/*!******************************!*\
  !*** ./src/js/utils/noop.ts ***!
  \******************************/
/*! exports provided: default */function(e,t,o){"use strict";function n(){}o.r(t),o.d(t,"default",(function(){return n}))},"./src/js/utils/onLoaded.ts":
/*!**********************************!*\
  !*** ./src/js/utils/onLoaded.ts ***!
  \**********************************/
/*! exports provided: onLoaded */function(e,t,o){"use strict";o.r(t),o.d(t,"onLoaded",(function(){return i}));var n=o(/*! @emotionagency/utils */"./node_modules/@emotionagency/utils/build/index.js"),s=o(/*! ../state */"./src/js/state.ts"),r=o(/*! ./noop */"./src/js/utils/noop.ts"),i=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:r.default,t=function t(){s.state.isLoaded&&(e(),n.raf.off(t))};n.raf.on(t)}}}]);