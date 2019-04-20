/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-backgroundsize-bgpositionshorthand-bgpositionxy-bgsizecover-borderradius-checked-cssanimations-cssfilters-csstransforms-csstransitions-displaytable-ellipsis-flexbox-fontface-generatedcontent-lastchild-mediaqueries-nthchild-opacity-overflowscrolling-preserve3d-rgba-svg-svgclippaths-setclasses !*/
!function(e,t,n){function r(e,t){return typeof e===t}function s(){var e,t,n,s,i,o,a;for(var d in b)if(b.hasOwnProperty(d)){if(e=[],t=b[d],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(s=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)o=e[i],a=o.split("."),1===a.length?Modernizr[a[0]]=s:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=s),y.push((s?"":"no-")+a.join("-"))}}function i(e){var t=w.className,n=Modernizr._config.classPrefix||"";if(T&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),T?w.className.baseVal=t:w.className=t)}function o(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):T?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function a(){var e=t.body;return e||(e=o(T?"svg":"body"),e.fake=!0),e}function d(e,n,r,s){var i,d,l,c,f="modernizr",u=o("div"),p=a();if(parseInt(r,10))for(;r--;)l=o("div"),l.id=s?s[r]:f+(r+1),u.appendChild(l);return i=o("style"),i.type="text/css",i.id="s"+f,(p.fake?p:u).appendChild(i),p.appendChild(u),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),u.id=f,p.fake&&(p.style.background="",p.style.overflow="hidden",c=w.style.overflow,w.style.overflow="hidden",w.appendChild(p)),d=n(u,e),p.fake?(p.parentNode.removeChild(p),w.style.overflow=c,w.offsetHeight):u.parentNode.removeChild(u),!!d}function l(e,t){return!!~(""+e).indexOf(t)}function c(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function f(e,t){return function(){return e.apply(t,arguments)}}function u(e,t,n){var s;for(var i in e)if(e[i]in t)return n===!1?e[i]:(s=t[e[i]],r(s,"function")?f(s,n||t):s);return!1}function p(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(t,r){var s=t.length;if("CSS"in e&&"supports"in e.CSS){for(;s--;)if(e.CSS.supports(p(t[s]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];s--;)i.push("("+p(t[s])+":"+r+")");return i=i.join(" or "),d("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function h(e,t,s,i){function a(){f&&(delete L.style,delete L.modElem)}if(i=r(i,"undefined")?!1:i,!r(s,"undefined")){var d=m(e,s);if(!r(d,"undefined"))return d}for(var f,u,p,h,g,v=["modernizr","tspan","samp"];!L.style&&v.length;)f=!0,L.modElem=o(v.shift()),L.style=L.modElem.style;for(p=e.length,u=0;p>u;u++)if(h=e[u],g=L.style[h],l(h,"-")&&(h=c(h)),L.style[h]!==n){if(i||r(s,"undefined"))return a(),"pfx"==t?h:!0;try{L.style[h]=s}catch(y){}if(L.style[h]!=g)return a(),"pfx"==t?h:!0}return a(),!1}function g(e,t,n,s,i){var o=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+A.join(o+" ")+o).split(" ");return r(t,"string")||r(t,"undefined")?h(a,t,s,i):(a=(e+" "+R.join(o+" ")+o).split(" "),u(a,t,n))}function v(e,t,r){return g(e,n,n,t,r)}var y=[],b=[],x={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){b.push({name:e,fn:t,options:n})},addAsyncTest:function(e){b.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=x,Modernizr=new Modernizr,Modernizr.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var w=t.documentElement,T="svg"===w.nodeName.toLowerCase();Modernizr.addTest("bgpositionshorthand",function(){var e=o("a"),t=e.style,n="right 10px bottom 10px";return t.cssText="background-position: "+n+";",t.backgroundPosition===n}),Modernizr.addTest("rgba",function(){var e=o("a").style;return e.cssText="background-color:rgba(150,255,150,.5)",(""+e.backgroundColor).indexOf("rgba")>-1}),Modernizr.addTest("preserve3d",function(){var e=o("a"),t=o("a");e.style.cssText="display: block; transform-style: preserve-3d; transform-origin: right; transform: rotateY(40deg);",t.style.cssText="display: block; width: 9px; height: 1px; background: #000; transform-origin: right; transform: rotateY(40deg);",e.appendChild(t),w.appendChild(e);var n=t.getBoundingClientRect();return w.removeChild(e),n.width&&n.width<4});var C=x._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];x._prefixes=C,Modernizr.addTest("opacity",function(){var e=o("a").style;return e.cssText=C.join("opacity:.55;"),/^0.55$/.test(e.opacity)});var S="CSS"in e&&"supports"in e.CSS,k="supportsCSS"in e;Modernizr.addTest("supports",S||k);var z={}.toString;Modernizr.addTest("svgclippaths",function(){return!!t.createElementNS&&/SVGClipPath/.test(z.call(t.createElementNS("http://www.w3.org/2000/svg","clipPath")))});var _=x.testStyles=d;Modernizr.addTest("checked",function(){return _("#modernizr {position:absolute} #modernizr input {margin-left:10px} #modernizr :checked {margin-left:20px;display:block}",function(e){var t=o("input");return t.setAttribute("type","checkbox"),t.setAttribute("checked","checked"),e.appendChild(t),20===t.offsetLeft})}),_("#modernizr{display: table; direction: ltr}#modernizr div{display: table-cell; padding: 10px}",function(e){var t,n=e.childNodes;t=n[0].offsetLeft<n[1].offsetLeft,Modernizr.addTest("displaytable",t,{aliases:["display-table"]})},2);var E=function(){var e=navigator.userAgent,t=e.match(/applewebkit\/([0-9]+)/gi)&&parseFloat(RegExp.$1),n=e.match(/w(eb)?osbrowser/gi),r=e.match(/windows phone/gi)&&e.match(/iemobile\/([0-9])+/gi)&&parseFloat(RegExp.$1)>=9,s=533>t&&e.match(/android/gi);return n||s||r}();E?Modernizr.addTest("fontface",!1):_('@font-face {font-family:"font";src:url("https://")}',function(e,n){var r=t.getElementById("smodernizr"),s=r.sheet||r.styleSheet,i=s?s.cssRules&&s.cssRules[0]?s.cssRules[0].cssText:s.cssText||"":"",o=/src/i.test(i)&&0===i.indexOf(n.split(" ")[0]);Modernizr.addTest("fontface",o)}),_('#modernizr{font:0/0 a}#modernizr:after{content:":)";visibility:hidden;font:7px/1 a}',function(e){Modernizr.addTest("generatedcontent",e.offsetHeight>=7)}),_("#modernizr div {width:100px} #modernizr :last-child{width:200px;display:block}",function(e){Modernizr.addTest("lastchild",e.lastChild.offsetWidth>e.firstChild.offsetWidth)},2),_("#modernizr div {width:1px} #modernizr div:nth-child(2n) {width:2px;}",function(e){for(var t=e.getElementsByTagName("div"),n=!0,r=0;5>r;r++)n=n&&t[r].offsetWidth===r%2+1;Modernizr.addTest("nthchild",n)},5);var N=function(){var t=e.matchMedia||e.msMatchMedia;return t?function(e){var n=t(e);return n&&n.matches||!1}:function(t){var n=!1;return d("@media "+t+" { #modernizr { position: absolute; } }",function(t){n="absolute"==(e.getComputedStyle?e.getComputedStyle(t,null):t.currentStyle).position}),n}}();x.mq=N,Modernizr.addTest("mediaqueries",N("only all"));var P="Moz O ms Webkit",A=x._config.usePrefixes?P.split(" "):[];x._cssomPrefixes=A;var R=x._config.usePrefixes?P.toLowerCase().split(" "):[];x._domPrefixes=R;var j={elem:o("modernizr")};Modernizr._q.push(function(){delete j.elem});var L={style:j.elem.style};Modernizr._q.unshift(function(){delete L.style}),x.testAllProps=g,x.testAllProps=v,Modernizr.addTest("cssanimations",v("animationName","a",!0)),Modernizr.addTest("bgpositionxy",function(){return v("backgroundPositionX","3px",!0)&&v("backgroundPositionY","5px",!0)}),Modernizr.addTest("backgroundsize",v("backgroundSize","100%",!0)),Modernizr.addTest("bgsizecover",v("backgroundSize","cover")),Modernizr.addTest("borderradius",v("borderRadius","0px",!0)),Modernizr.addTest("ellipsis",v("textOverflow","ellipsis")),Modernizr.addTest("cssfilters",function(){if(Modernizr.supports)return v("filter","blur(2px)");var e=o("a");return e.style.cssText=C.join("filter:blur(2px); "),!!e.style.length&&(t.documentMode===n||t.documentMode>9)}),Modernizr.addTest("flexbox",v("flexBasis","1px",!0)),Modernizr.addTest("overflowscrolling",v("overflowScrolling","touch",!0)),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&v("transform","scale(1)",!0)}),Modernizr.addTest("csstransitions",v("transition","all",!0)),s(),i(y),delete x.addTest,delete x.addAsyncTest;for(var O=0;O<Modernizr._q.length;O++)Modernizr._q[O]();e.Modernizr=Modernizr}(window,document);