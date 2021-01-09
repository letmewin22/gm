(window.webpackJsonp=window.webpackJsonp||[]).push([["polis"],{"./src/js/components/slider/Navigation.ts":
/*!************************************************!*\
  !*** ./src/js/components/slider/Navigation.ts ***!
  \************************************************/
/*! exports provided: default */function(e,t,s){"use strict";s.r(t),s.d(t,"default",(function(){return l}));var n=s(/*! @babel/runtime/helpers/classCallCheck */"./node_modules/@babel/runtime/helpers/classCallCheck.js"),i=s.n(n),o=s(/*! @babel/runtime/helpers/createClass */"./node_modules/@babel/runtime/helpers/createClass.js"),r=s.n(o),l=function(){function e(t,s){i()(this,e),this.$el=t,this.opts=s,this.$parent=void 0,this.nav=void 0,this.$parent=this.$el.parentElement,this.nav={$left:this.$parent.querySelector('[data-nav="prev"]'),$right:this.$parent.querySelector('[data-nav="next"]')},this.init()}return r()(e,[{key:"init",value:function(){this.click(),this.keydown=this.keydown.bind(this),window.addEventListener("keydown",this.keydown)}},{key:"click",value:function(){this.nav.$left.addEventListener("click",this.opts.prev),this.nav.$right.addEventListener("click",this.opts.next)}},{key:"keydown",value:function(e){"ArrowLeft"===e.key&&this.opts.prev(),"ArrowRight"===e.key&&this.opts.next()}},{key:"destroy",value:function(){this.nav.$left.removeEventListener("click",this.opts.prev),this.nav.$right.removeEventListener("click",this.opts.next),window.removeEventListener("keydown",this.keydown)}}]),e}()},"./src/js/components/slider/Slider.ts":
/*!********************************************!*\
  !*** ./src/js/components/slider/Slider.ts ***!
  \********************************************/
/*! exports provided: default */function(e,t,s){"use strict";s.r(t),s.d(t,"default",(function(){return l}));var n=s(/*! @babel/runtime/helpers/classCallCheck */"./node_modules/@babel/runtime/helpers/classCallCheck.js"),i=s.n(n),o=s(/*! @babel/runtime/helpers/createClass */"./node_modules/@babel/runtime/helpers/createClass.js"),r=s.n(o),l=function(){function e(t){var s=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;i()(this,e),this.$el=t,this.$slides=void 0,this.counter=void 0,this.previous=void 0,this.length=void 0,this.$slides=this.$el.querySelectorAll("[data-slide]"),this.counter=s,this.previous=null,this.length=this.$slides.length,this.init()}return r()(e,[{key:"bounds",value:function(){var e=this;["prev","next"].forEach((function(t){e[t]=e[t].bind(e)}))}},{key:"init",value:function(){this.length<2||this.bounds()}},{key:"prev",value:function(){this.counter--,this.previous=this.counter+1,this.counter<0&&(this.counter=this.length-1,this.previous=0)}},{key:"next",value:function(){this.counter++,this.previous=this.counter-1,this.counter>this.length-1&&(this.counter=0,this.previous=this.length-1)}},{key:"destroy",value:function(){this.$slides.forEach((function(e){e.classList.remove("active"),e.style.cssText=""}))}}]),e}()},"./src/js/components/slider/Slideshow.ts":
/*!***********************************************!*\
  !*** ./src/js/components/slider/Slideshow.ts ***!
  \***********************************************/
/*! exports provided: default */function(e,t,s){"use strict";s.r(t),s.d(t,"default",(function(){return k}));var n=s(/*! @babel/runtime/helpers/classCallCheck */"./node_modules/@babel/runtime/helpers/classCallCheck.js"),i=s.n(n),o=s(/*! @babel/runtime/helpers/createClass */"./node_modules/@babel/runtime/helpers/createClass.js"),r=s.n(o),l=s(/*! @babel/runtime/helpers/get */"./node_modules/@babel/runtime/helpers/get.js"),u=s.n(l),c=s(/*! @babel/runtime/helpers/inherits */"./node_modules/@babel/runtime/helpers/inherits.js"),a=s.n(c),h=s(/*! @babel/runtime/helpers/possibleConstructorReturn */"./node_modules/@babel/runtime/helpers/possibleConstructorReturn.js"),d=s.n(h),p=s(/*! @babel/runtime/helpers/getPrototypeOf */"./node_modules/@babel/runtime/helpers/getPrototypeOf.js"),v=s.n(p),f=s(/*! gsap */"./node_modules/gsap/index.js"),m=s(/*! ./Slider */"./src/js/components/slider/Slider.ts"),y=s(/*! ./Navigation */"./src/js/components/slider/Navigation.ts");function b(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}();return function(){var s,n=v()(e);if(t){var i=v()(this).constructor;s=Reflect.construct(n,arguments,i)}else s=n.apply(this,arguments);return d()(this,s)}}var k=function(e){a()(s,e);var t=b(s);function s(e){var n,o=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;return i()(this,s),(n=t.call(this,e,o)).opts=void 0,n.nav=void 0,n.isAnimating=!1,n.opts={time:.25,ease:"power2.out"},n.$slides[n.counter].classList.add("active"),n}return r()(s,[{key:"init",value:function(){u()(v()(s.prototype),"init",this).call(this),this.nav=new y.default(this.$el,{prev:this.prev,next:this.next})}},{key:"prev",value:function(){this.isAnimating||(u()(v()(s.prototype),"prev",this).call(this),this.slideAnimation())}},{key:"next",value:function(){this.isAnimating||(u()(v()(s.prototype),"next",this).call(this),this.slideAnimation())}},{key:"slideAnimation",value:function(){var e=this;this.isAnimating=!0,f.default.timeline({onComplete:function(){e.isAnimating=!1}}).fromTo(this.$slides[this.previous],{opacity:"1",duration:this.opts.time},{opacity:"0",ease:this.opts.ease,onComplete:function(){e.$slides[e.previous].classList.remove("active"),e.$slides[e.counter].classList.add("active")}}).fromTo(this.$slides[this.counter],{opacity:"0",duration:this.opts.time},{opacity:"1",ease:this.opts.ease})}},{key:"destroy",value:function(){u()(v()(s.prototype),"destroy",this).call(this),this.nav.destroy()}}]),s}(m.default)},"./src/js/core/renderers/Polis.ts":
/*!****************************************!*\
  !*** ./src/js/core/renderers/Polis.ts ***!
  \****************************************/
/*! exports provided: default */function(e,t,s){"use strict";s.r(t),s.d(t,"default",(function(){return k}));var n=s(/*! @babel/runtime/helpers/classCallCheck */"./node_modules/@babel/runtime/helpers/classCallCheck.js"),i=s.n(n),o=s(/*! @babel/runtime/helpers/createClass */"./node_modules/@babel/runtime/helpers/createClass.js"),r=s.n(o),l=s(/*! @babel/runtime/helpers/inherits */"./node_modules/@babel/runtime/helpers/inherits.js"),u=s.n(l),c=s(/*! @babel/runtime/helpers/possibleConstructorReturn */"./node_modules/@babel/runtime/helpers/possibleConstructorReturn.js"),a=s.n(c),h=s(/*! @babel/runtime/helpers/getPrototypeOf */"./node_modules/@babel/runtime/helpers/getPrototypeOf.js"),d=s.n(h),p=s(/*! @dogstudio/highway */"./node_modules/@dogstudio/highway/build/highway.module.js"),v=s(/*! @/components/loaders/PageLoader */"./src/js/components/loaders/PageLoader.ts"),f=s(/*! @/components/clients */"./src/js/components/clients.ts"),m=s(/*! @/utils/onLoaded */"./src/js/utils/onLoaded.ts"),y=s(/*! @/components/slider/Slideshow */"./src/js/components/slider/Slideshow.ts");function b(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}();return function(){var s,n=d()(e);if(t){var i=d()(this).constructor;s=Reflect.construct(n,arguments,i)}else s=n.apply(this,arguments);return a()(this,s)}}var k=function(e){u()(s,e);var t=b(s);function s(){var e;i()(this,s);for(var n=arguments.length,o=new Array(n),r=0;r<n;r++)o[r]=arguments[r];return(e=t.call.apply(t,[this].concat(o))).clients=void 0,e}return r()(s,[{key:"onEnterCompleted",value:function(){var e=this;Object(m.onLoaded)((function(){v.PageLoader.load(),e.clients=Object(f.clients)(),new y.default(document.querySelector(".services-instruction__slider"),0)}))}},{key:"onLeave",value:function(){this.clients.destroy()}}]),s}(p.default.Renderer)}}]);