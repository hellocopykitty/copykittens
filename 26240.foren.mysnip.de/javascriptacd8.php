/* Added by module "core", file "include/javascript/jquery-1.6.2.min.js" */
/*!
 * jQuery JavaScript Library v1.6.2
 * http://jquery.com/
 *
 * Copyright 2011, John Resig
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 * Copyright 2011, The Dojo Foundation
 * Released under the MIT, BSD, and GPL Licenses.
 *
 * Date: Thu Jun 30 14:16:56 2011 -0400
 */
(function(a,b){function cv(a){return f.isWindow(a)?a:a.nodeType===9?a.defaultView||a.parentWindow:!1}function cs(a){if(!cg[a]){var b=c.body,d=f("<"+a+">").appendTo(b),e=d.css("display");d.remove();if(e==="none"||e===""){ch||(ch=c.createElement("iframe"),ch.frameBorder=ch.width=ch.height=0),b.appendChild(ch);if(!ci||!ch.createElement)ci=(ch.contentWindow||ch.contentDocument).document,ci.write((c.compatMode==="CSS1Compat"?"<!doctype html>":"")+"<html><body>"),ci.close();d=ci.createElement(a),ci.body.appendChild(d),e=f.css(d,"display"),b.removeChild(ch)}cg[a]=e}return cg[a]}function cr(a,b){var c={};f.each(cm.concat.apply([],cm.slice(0,b)),function(){c[this]=a});return c}function cq(){cn=b}function cp(){setTimeout(cq,0);return cn=f.now()}function cf(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}function ce(){try{return new a.XMLHttpRequest}catch(b){}}function b$(a,c){a.dataFilter&&(c=a.dataFilter(c,a.dataType));var d=a.dataTypes,e={},g,h,i=d.length,j,k=d[0],l,m,n,o,p;for(g=1;g<i;g++){if(g===1)for(h in a.converters)typeof h=="string"&&(e[h.toLowerCase()]=a.converters[h]);l=k,k=d[g];if(k==="*")k=l;else if(l!=="*"&&l!==k){m=l+" "+k,n=e[m]||e["* "+k];if(!n){p=b;for(o in e){j=o.split(" ");if(j[0]===l||j[0]==="*"){p=e[j[1]+" "+k];if(p){o=e[o],o===!0?n=p:p===!0&&(n=o);break}}}}!n&&!p&&f.error("No conversion from "+m.replace(" "," to ")),n!==!0&&(c=n?n(c):p(o(c)))}}return c}function bZ(a,c,d){var e=a.contents,f=a.dataTypes,g=a.responseFields,h,i,j,k;for(i in g)i in d&&(c[g[i]]=d[i]);while(f[0]==="*")f.shift(),h===b&&(h=a.mimeType||c.getResponseHeader("content-type"));if(h)for(i in e)if(e[i]&&e[i].test(h)){f.unshift(i);break}if(f[0]in d)j=f[0];else{for(i in d){if(!f[0]||a.converters[i+" "+f[0]]){j=i;break}k||(k=i)}j=j||k}if(j){j!==f[0]&&f.unshift(j);return d[j]}}function bY(a,b,c,d){if(f.isArray(b))f.each(b,function(b,e){c||bC.test(a)?d(a,e):bY(a+"["+(typeof e=="object"||f.isArray(e)?b:"")+"]",e,c,d)});else if(!c&&b!=null&&typeof b=="object")for(var e in b)bY(a+"["+e+"]",b[e],c,d);else d(a,b)}function bX(a,c,d,e,f,g){f=f||c.dataTypes[0],g=g||{},g[f]=!0;var h=a[f],i=0,j=h?h.length:0,k=a===bR,l;for(;i<j&&(k||!l);i++)l=h[i](c,d,e),typeof l=="string"&&(!k||g[l]?l=b:(c.dataTypes.unshift(l),l=bX(a,c,d,e,l,g)));(k||!l)&&!g["*"]&&(l=bX(a,c,d,e,"*",g));return l}function bW(a){return function(b,c){typeof b!="string"&&(c=b,b="*");if(f.isFunction(c)){var d=b.toLowerCase().split(bN),e=0,g=d.length,h,i,j;for(;e<g;e++)h=d[e],j=/^\+/.test(h),j&&(h=h.substr(1)||"*"),i=a[h]=a[h]||[],i[j?"unshift":"push"](c)}}}function bA(a,b,c){var d=b==="width"?a.offsetWidth:a.offsetHeight,e=b==="width"?bv:bw;if(d>0){c!=="border"&&f.each(e,function(){c||(d-=parseFloat(f.css(a,"padding"+this))||0),c==="margin"?d+=parseFloat(f.css(a,c+this))||0:d-=parseFloat(f.css(a,"border"+this+"Width"))||0});return d+"px"}d=bx(a,b,b);if(d<0||d==null)d=a.style[b]||0;d=parseFloat(d)||0,c&&f.each(e,function(){d+=parseFloat(f.css(a,"padding"+this))||0,c!=="padding"&&(d+=parseFloat(f.css(a,"border"+this+"Width"))||0),c==="margin"&&(d+=parseFloat(f.css(a,c+this))||0)});return d+"px"}function bm(a,b){b.src?f.ajax({url:b.src,async:!1,dataType:"script"}):f.globalEval((b.text||b.textContent||b.innerHTML||"").replace(be,"/*$0*/")),b.parentNode&&b.parentNode.removeChild(b)}function bl(a){f.nodeName(a,"input")?bk(a):"getElementsByTagName"in a&&f.grep(a.getElementsByTagName("input"),bk)}function bk(a){if(a.type==="checkbox"||a.type==="radio")a.defaultChecked=a.checked}function bj(a){return"getElementsByTagName"in a?a.getElementsByTagName("*"):"querySelectorAll"in a?a.querySelectorAll("*"):[]}function bi(a,b){var c;if(b.nodeType===1){b.clearAttributes&&b.clearAttributes(),b.mergeAttributes&&b.mergeAttributes(a),c=b.nodeName.toLowerCase();if(c==="object")b.outerHTML=a.outerHTML;else if(c!=="input"||a.type!=="checkbox"&&a.type!=="radio"){if(c==="option")b.selected=a.defaultSelected;else if(c==="input"||c==="textarea")b.defaultValue=a.defaultValue}else a.checked&&(b.defaultChecked=b.checked=a.checked),b.value!==a.value&&(b.value=a.value);b.removeAttribute(f.expando)}}function bh(a,b){if(b.nodeType===1&&!!f.hasData(a)){var c=f.expando,d=f.data(a),e=f.data(b,d);if(d=d[c]){var g=d.events;e=e[c]=f.extend({},d);if(g){delete e.handle,e.events={};for(var h in g)for(var i=0,j=g[h].length;i<j;i++)f.event.add(b,h+(g[h][i].namespace?".":"")+g[h][i].namespace,g[h][i],g[h][i].data)}}}}function bg(a,b){return f.nodeName(a,"table")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function W(a,b,c){b=b||0;if(f.isFunction(b))return f.grep(a,function(a,d){var e=!!b.call(a,d,a);return e===c});if(b.nodeType)return f.grep(a,function(a,d){return a===b===c});if(typeof b=="string"){var d=f.grep(a,function(a){return a.nodeType===1});if(R.test(b))return f.filter(b,d,!c);b=f.filter(b,d)}return f.grep(a,function(a,d){return f.inArray(a,b)>=0===c})}function V(a){return!a||!a.parentNode||a.parentNode.nodeType===11}function N(a,b){return(a&&a!=="*"?a+".":"")+b.replace(z,"`").replace(A,"&")}function M(a){var b,c,d,e,g,h,i,j,k,l,m,n,o,p=[],q=[],r=f._data(this,"events");if(!(a.liveFired===this||!r||!r.live||a.target.disabled||a.button&&a.type==="click")){a.namespace&&(n=new RegExp("(^|\\.)"+a.namespace.split(".").join("\\.(?:.*\\.)?")+"(\\.|$)")),a.liveFired=this;var s=r.live.slice(0);for(i=0;i<s.length;i++)g=s[i],g.origType.replace(x,"")===a.type?q.push(g.selector):s.splice(i--,1);e=f(a.target).closest(q,a.currentTarget);for(j=0,k=e.length;j<k;j++){m=e[j];for(i=0;i<s.length;i++){g=s[i];if(m.selector===g.selector&&(!n||n.test(g.namespace))&&!m.elem.disabled){h=m.elem,d=null;if(g.preType==="mouseenter"||g.preType==="mouseleave")a.type=g.preType,d=f(a.relatedTarget).closest(g.selector)[0],d&&f.contains(h,d)&&(d=h);(!d||d!==h)&&p.push({elem:h,handleObj:g,level:m.level})}}}for(j=0,k=p.length;j<k;j++){e=p[j];if(c&&e.level>c)break;a.currentTarget=e.elem,a.data=e.handleObj.data,a.handleObj=e.handleObj,o=e.handleObj.origHandler.apply(e.elem,arguments);if(o===!1||a.isPropagationStopped()){c=e.level,o===!1&&(b=!1);if(a.isImmediatePropagationStopped())break}}return b}}function K(a,c,d){var e=f.extend({},d[0]);e.type=a,e.originalEvent={},e.liveFired=b,f.event.handle.call(c,e),e.isDefaultPrevented()&&d[0].preventDefault()}function E(){return!0}function D(){return!1}function m(a,c,d){var e=c+"defer",g=c+"queue",h=c+"mark",i=f.data(a,e,b,!0);i&&(d==="queue"||!f.data(a,g,b,!0))&&(d==="mark"||!f.data(a,h,b,!0))&&setTimeout(function(){!f.data(a,g,b,!0)&&!f.data(a,h,b,!0)&&(f.removeData(a,e,!0),i.resolve())},0)}function l(a){for(var b in a)if(b!=="toJSON")return!1;return!0}function k(a,c,d){if(d===b&&a.nodeType===1){var e="data-"+c.replace(j,"$1-$2").toLowerCase();d=a.getAttribute(e);if(typeof d=="string"){try{d=d==="true"?!0:d==="false"?!1:d==="null"?null:f.isNaN(d)?i.test(d)?f.parseJSON(d):d:parseFloat(d)}catch(g){}f.data(a,c,d)}else d=b}return d}var c=a.document,d=a.navigator,e=a.location,f=function(){function J(){if(!e.isReady){try{c.documentElement.doScroll("left")}catch(a){setTimeout(J,1);return}e.ready()}}var e=function(a,b){return new e.fn.init(a,b,h)},f=a.jQuery,g=a.$,h,i=/^(?:[^<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,j=/\S/,k=/^\s+/,l=/\s+$/,m=/\d/,n=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,o=/^[\],:{}\s]*$/,p=/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,q=/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,r=/(?:^|:|,)(?:\s*\[)+/g,s=/(webkit)[ \/]([\w.]+)/,t=/(opera)(?:.*version)?[ \/]([\w.]+)/,u=/(msie) ([\w.]+)/,v=/(mozilla)(?:.*? rv:([\w.]+))?/,w=/-([a-z])/ig,x=function(a,b){return b.toUpperCase()},y=d.userAgent,z,A,B,C=Object.prototype.toString,D=Object.prototype.hasOwnProperty,E=Array.prototype.push,F=Array.prototype.slice,G=String.prototype.trim,H=Array.prototype.indexOf,I={};e.fn=e.prototype={constructor:e,init:function(a,d,f){var g,h,j,k;if(!a)return this;if(a.nodeType){this.context=this[0]=a,this.length=1;return this}if(a==="body"&&!d&&c.body){this.context=c,this[0]=c.body,this.selector=a,this.length=1;return this}if(typeof a=="string"){a.charAt(0)!=="<"||a.charAt(a.length-1)!==">"||a.length<3?g=i.exec(a):g=[null,a,null];if(g&&(g[1]||!d)){if(g[1]){d=d instanceof e?d[0]:d,k=d?d.ownerDocument||d:c,j=n.exec(a),j?e.isPlainObject(d)?(a=[c.createElement(j[1])],e.fn.attr.call(a,d,!0)):a=[k.createElement(j[1])]:(j=e.buildFragment([g[1]],[k]),a=(j.cacheable?e.clone(j.fragment):j.fragment).childNodes);return e.merge(this,a)}h=c.getElementById(g[2]);if(h&&h.parentNode){if(h.id!==g[2])return f.find(a);this.length=1,this[0]=h}this.context=c,this.selector=a;return this}return!d||d.jquery?(d||f).find(a):this.constructor(d).find(a)}if(e.isFunction(a))return f.ready(a);a.selector!==b&&(this.selector=a.selector,this.context=a.context);return e.makeArray(a,this)},selector:"",jquery:"1.6.2",length:0,size:function(){return this.length},toArray:function(){return F.call(this,0)},get:function(a){return a==null?this.toArray():a<0?this[this.length+a]:this[a]},pushStack:function(a,b,c){var d=this.constructor();e.isArray(a)?E.apply(d,a):e.merge(d,a),d.prevObject=this,d.context=this.context,b==="find"?d.selector=this.selector+(this.selector?" ":"")+c:b&&(d.selector=this.selector+"."+b+"("+c+")");return d},each:function(a,b){return e.each(this,a,b)},ready:function(a){e.bindReady(),A.done(a);return this},eq:function(a){return a===-1?this.slice(a):this.slice(a,+a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(F.apply(this,arguments),"slice",F.call(arguments).join(","))},map:function(a){return this.pushStack(e.map(this,function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||this.constructor(null)},push:E,sort:[].sort,splice:[].splice},e.fn.init.prototype=e.fn,e.extend=e.fn.extend=function(){var a,c,d,f,g,h,i=arguments[0]||{},j=1,k=arguments.length,l=!1;typeof i=="boolean"&&(l=i,i=arguments[1]||{},j=2),typeof i!="object"&&!e.isFunction(i)&&(i={}),k===j&&(i=this,--j);for(;j<k;j++)if((a=arguments[j])!=null)for(c in a){d=i[c],f=a[c];if(i===f)continue;l&&f&&(e.isPlainObject(f)||(g=e.isArray(f)))?(g?(g=!1,h=d&&e.isArray(d)?d:[]):h=d&&e.isPlainObject(d)?d:{},i[c]=e.extend(l,h,f)):f!==b&&(i[c]=f)}return i},e.extend({noConflict:function(b){a.$===e&&(a.$=g),b&&a.jQuery===e&&(a.jQuery=f);return e},isReady:!1,readyWait:1,holdReady:function(a){a?e.readyWait++:e.ready(!0)},ready:function(a){if(a===!0&&!--e.readyWait||a!==!0&&!e.isReady){if(!c.body)return setTimeout(e.ready,1);e.isReady=!0;if(a!==!0&&--e.readyWait>0)return;A.resolveWith(c,[e]),e.fn.trigger&&e(c).trigger("ready").unbind("ready")}},bindReady:function(){if(!A){A=e._Deferred();if(c.readyState==="complete")return setTimeout(e.ready,1);if(c.addEventListener)c.addEventListener("DOMContentLoaded",B,!1),a.addEventListener("load",e.ready,!1);else if(c.attachEvent){c.attachEvent("onreadystatechange",B),a.attachEvent("onload",e.ready);var b=!1;try{b=a.frameElement==null}catch(d){}c.documentElement.doScroll&&b&&J()}}},isFunction:function(a){return e.type(a)==="function"},isArray:Array.isArray||function(a){return e.type(a)==="array"},isWindow:function(a){return a&&typeof a=="object"&&"setInterval"in a},isNaN:function(a){return a==null||!m.test(a)||isNaN(a)},type:function(a){return a==null?String(a):I[C.call(a)]||"object"},isPlainObject:function(a){if(!a||e.type(a)!=="object"||a.nodeType||e.isWindow(a))return!1;if(a.constructor&&!D.call(a,"constructor")&&!D.call(a.constructor.prototype,"isPrototypeOf"))return!1;var c;for(c in a);return c===b||D.call(a,c)},isEmptyObject:function(a){for(var b in a)return!1;return!0},error:function(a){throw a},parseJSON:function(b){if(typeof b!="string"||!b)return null;b=e.trim(b);if(a.JSON&&a.JSON.parse)return a.JSON.parse(b);if(o.test(b.replace(p,"@").replace(q,"]").replace(r,"")))return(new Function("return "+b))();e.error("Invalid JSON: "+b)},parseXML:function(b,c,d){a.DOMParser?(d=new DOMParser,c=d.parseFromString(b,"text/xml")):(c=new ActiveXObject("Microsoft.XMLDOM"),c.async="false",c.loadXML(b)),d=c.documentElement,(!d||!d.nodeName||d.nodeName==="parsererror")&&e.error("Invalid XML: "+b);return c},noop:function(){},globalEval:function(b){b&&j.test(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(w,x)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,c,d){var f,g=0,h=a.length,i=h===b||e.isFunction(a);if(d){if(i){for(f in a)if(c.apply(a[f],d)===!1)break}else for(;g<h;)if(c.apply(a[g++],d)===!1)break}else if(i){for(f in a)if(c.call(a[f],f,a[f])===!1)break}else for(;g<h;)if(c.call(a[g],g,a[g++])===!1)break;return a},trim:G?function(a){return a==null?"":G.call(a)}:function(a){return a==null?"":(a+"").replace(k,"").replace(l,"")},makeArray:function(a,b){var c=b||[];if(a!=null){var d=e.type(a);a.length==null||d==="string"||d==="function"||d==="regexp"||e.isWindow(a)?E.call(c,a):e.merge(c,a)}return c},inArray:function(a,b){if(H)return H.call(b,a);for(var c=0,d=b.length;c<d;c++)if(b[c]===a)return c;return-1},merge:function(a,c){var d=a.length,e=0;if(typeof c.length=="number")for(var f=c.length;e<f;e++)a[d++]=c[e];else while(c[e]!==b)a[d++]=c[e++];a.length=d;return a},grep:function(a,b,c){var d=[],e;c=!!c;for(var f=0,g=a.length;f<g;f++)e=!!b(a[f],f),c!==e&&d.push(a[f]);return d},map:function(a,c,d){var f,g,h=[],i=0,j=a.length,k=a instanceof e||j!==b&&typeof j=="number"&&(j>0&&a[0]&&a[j-1]||j===0||e.isArray(a));if(k)for(;i<j;i++)f=c(a[i],i,d),f!=null&&(h[h.length]=f);else for(g in a)f=c(a[g],g,d),f!=null&&(h[h.length]=f);return h.concat.apply([],h)},guid:1,proxy:function(a,c){if(typeof c=="string"){var d=a[c];c=a,a=d}if(!e.isFunction(a))return b;var f=F.call(arguments,2),g=function(){return a.apply(c,f.concat(F.call(arguments)))};g.guid=a.guid=a.guid||g.guid||e.guid++;return g},access:function(a,c,d,f,g,h){var i=a.length;if(typeof c=="object"){for(var j in c)e.access(a,j,c[j],f,g,d);return a}if(d!==b){f=!h&&f&&e.isFunction(d);for(var k=0;k<i;k++)g(a[k],c,f?d.call(a[k],k,g(a[k],c)):d,h);return a}return i?g(a[0],c):b},now:function(){return(new Date).getTime()},uaMatch:function(a){a=a.toLowerCase();var b=s.exec(a)||t.exec(a)||u.exec(a)||a.indexOf("compatible")<0&&v.exec(a)||[];return{browser:b[1]||"",version:b[2]||"0"}},sub:function(){function a(b,c){return new a.fn.init(b,c)}e.extend(!0,a,this),a.superclass=this,a.fn=a.prototype=this(),a.fn.constructor=a,a.sub=this.sub,a.fn.init=function(d,f){f&&f instanceof e&&!(f instanceof a)&&(f=a(f));return e.fn.init.call(this,d,f,b)},a.fn.init.prototype=a.fn;var b=a(c);return a},browser:{}}),e.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(a,b){I["[object "+b+"]"]=b.toLowerCase()}),z=e.uaMatch(y),z.browser&&(e.browser[z.browser]=!0,e.browser.version=z.version),e.browser.webkit&&(e.browser.safari=!0),j.test(" ")&&(k=/^[\s\xA0]+/,l=/[\s\xA0]+$/),h=e(c),c.addEventListener?B=function(){c.removeEventListener("DOMContentLoaded",B,!1),e.ready()}:c.attachEvent&&(B=function(){c.readyState==="complete"&&(c.detachEvent("onreadystatechange",B),e.ready())});return e}(),g="done fail isResolved isRejected promise then always pipe".split(" "),h=[].slice;f.extend({_Deferred:function(){var a=[],b,c,d,e={done:function(){if(!d){var c=arguments,g,h,i,j,k;b&&(k=b,b=0);for(g=0,h=c.length;g<h;g++)i=c[g],j=f.type(i),j==="array"?e.done.apply(e,i):j==="function"&&a.push(i);k&&e.resolveWith(k[0],k[1])}return this},resolveWith:function(e,f){if(!d&&!b&&!c){f=f||[],c=1;try{while(a[0])a.shift().apply(e,f)}finally{b=[e,f],c=0}}return this},resolve:function(){e.resolveWith(this,arguments);return this},isResolved:function(){return!!c||!!b},cancel:function(){d=1,a=[];return this}};return e},Deferred:function(a){var b=f._Deferred(),c=f._Deferred(),d;f.extend(b,{then:function(a,c){b.done(a).fail(c);return this},always:function(){return b.done.apply(b,arguments).fail.apply(this,arguments)},fail:c.done,rejectWith:c.resolveWith,reject:c.resolve,isRejected:c.isResolved,pipe:function(a,c){return f.Deferred(function(d){f.each({done:[a,"resolve"],fail:[c,"reject"]},function(a,c){var e=c[0],g=c[1],h;f.isFunction(e)?b[a](function(){h=e.apply(this,arguments),h&&f.isFunction(h.promise)?h.promise().then(d.resolve,d.reject):d[g](h)}):b[a](d[g])})}).promise()},promise:function(a){if(a==null){if(d)return d;d=a={}}var c=g.length;while(c--)a[g[c]]=b[g[c]];return a}}),b.done(c.cancel).fail(b.cancel),delete b.cancel,a&&a.call(b,b);return b},when:function(a){function i(a){return function(c){b[a]=arguments.length>1?h.call(arguments,0):c,--e||g.resolveWith(g,h.call(b,0))}}var b=arguments,c=0,d=b.length,e=d,g=d<=1&&a&&f.isFunction(a.promise)?a:f.Deferred();if(d>1){for(;c<d;c++)b[c]&&f.isFunction(b[c].promise)?b[c].promise().then(i(c),g.reject):--e;e||g.resolveWith(g,b)}else g!==a&&g.resolveWith(g,d?[a]:[]);return g.promise()}}),f.support=function(){var a=c.createElement("div"),b=c.documentElement,d,e,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u;a.setAttribute("className","t"),a.innerHTML="   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>",d=a.getElementsByTagName("*"),e=a.getElementsByTagName("a")[0];if(!d||!d.length||!e)return{};g=c.createElement("select"),h=g.appendChild(c.createElement("option")),i=a.getElementsByTagName("input")[0],k={leadingWhitespace:a.firstChild.nodeType===3,tbody:!a.getElementsByTagName("tbody").length,htmlSerialize:!!a.getElementsByTagName("link").length,style:/top/.test(e.getAttribute("style")),hrefNormalized:e.getAttribute("href")==="/a",opacity:/^0.55$/.test(e.style.opacity),cssFloat:!!e.style.cssFloat,checkOn:i.value==="on",optSelected:h.selected,getSetAttribute:a.className!=="t",submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0},i.checked=!0,k.noCloneChecked=i.cloneNode(!0).checked,g.disabled=!0,k.optDisabled=!h.disabled;try{delete a.test}catch(v){k.deleteExpando=!1}!a.addEventListener&&a.attachEvent&&a.fireEvent&&(a.attachEvent("onclick",function(){k.noCloneEvent=!1}),a.cloneNode(!0).fireEvent("onclick")),i=c.createElement("input"),i.value="t",i.setAttribute("type","radio"),k.radioValue=i.value==="t",i.setAttribute("checked","checked"),a.appendChild(i),l=c.createDocumentFragment(),l.appendChild(a.firstChild),k.checkClone=l.cloneNode(!0).cloneNode(!0).lastChild.checked,a.innerHTML="",a.style.width=a.style.paddingLeft="1px",m=c.getElementsByTagName("body")[0],o=c.createElement(m?"div":"body"),p={visibility:"hidden",width:0,height:0,border:0,margin:0},m&&f.extend(p,{position:"absolute",left:-1e3,top:-1e3});for(t in p)o.style[t]=p[t];o.appendChild(a),n=m||b,n.insertBefore(o,n.firstChild),k.appendChecked=i.checked,k.boxModel=a.offsetWidth===2,"zoom"in a.style&&(a.style.display="inline",a.style.zoom=1,k.inlineBlockNeedsLayout=a.offsetWidth===2,a.style.display="",a.innerHTML="<div style='width:4px;'></div>",k.shrinkWrapBlocks=a.offsetWidth!==2),a.innerHTML="<table><tr><td style='padding:0;border:0;display:none'></td><td>t</td></tr></table>",q=a.getElementsByTagName("td"),u=q[0].offsetHeight===0,q[0].style.display="",q[1].style.display="none",k.reliableHiddenOffsets=u&&q[0].offsetHeight===0,a.innerHTML="",c.defaultView&&c.defaultView.getComputedStyle&&(j=c.createElement("div"),j.style.width="0",j.style.marginRight="0",a.appendChild(j),k.reliableMarginRight=(parseInt((c.defaultView.getComputedStyle(j,null)||{marginRight:0}).marginRight,10)||0)===0),o.innerHTML="",n.removeChild(o);if(a.attachEvent)for(t in{submit:1,change:1,focusin:1})s="on"+t,u=s in a,u||(a.setAttribute(s,"return;"),u=typeof a[s]=="function"),k[t+"Bubbles"]=u;o=l=g=h=m=j=a=i=null;return k}(),f.boxModel=f.support.boxModel;var i=/^(?:\{.*\}|\[.*\])$/,j=/([a-z])([A-Z])/g;f.extend({cache:{},uuid:0,expando:"jQuery"+(f.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(a){a=a.nodeType?f.cache[a[f.expando]]:a[f.expando];return!!a&&!l(a)},data:function(a,c,d,e){if(!!f.acceptData(a)){var g=f.expando,h=typeof c=="string",i,j=a.nodeType,k=j?f.cache:a,l=j?a[f.expando]:a[f.expando]&&f.expando;if((!l||e&&l&&!k[l][g])&&h&&d===b)return;l||(j?a[f.expando]=l=++f.uuid:l=f.expando),k[l]||(k[l]={},j||(k[l].toJSON=f.noop));if(typeof c=="object"||typeof c=="function")e?k[l][g]=f.extend(k[l][g],c):k[l]=f.extend(k[l],c);i=k[l],e&&(i[g]||(i[g]={}),i=i[g]),d!==b&&(i[f.camelCase(c)]=d);if(c==="events"&&!i[c])return i[g]&&i[g].events;return h?i[f.camelCase(c)]||i[c]:i}},removeData:function(b,c,d){if(!!f.acceptData(b)){var e=f.expando,g=b.nodeType,h=g?f.cache:b,i=g?b[f.expando]:f.expando;if(!h[i])return;if(c){var j=d?h[i][e]:h[i];if(j){delete j[c];if(!l(j))return}}if(d){delete h[i][e];if(!l(h[i]))return}var k=h[i][e];f.support.deleteExpando||h!=a?delete h[i]:h[i]=null,k?(h[i]={},g||(h[i].toJSON=f.noop),h[i][e]=k):g&&(f.support.deleteExpando?delete b[f.expando]:b.removeAttribute?b.removeAttribute(f.expando):b[f.expando]=null)}},_data:function(a,b,c){return f.data(a,b,c,!0)},acceptData:function(a){if(a.nodeName){var b=f.noData[a.nodeName.toLowerCase()];if(b)return b!==!0&&a.getAttribute("classid")===b}return!0}}),f.fn.extend({data:function(a,c){var d=null;if(typeof a=="undefined"){if(this.length){d=f.data(this[0]);if(this[0].nodeType===1){var e=this[0].attributes,g;for(var h=0,i=e.length;h<i;h++)g=e[h].name,g.indexOf("data-")===0&&(g=f.camelCase(g.substring(5)),k(this[0],g,d[g]))}}return d}if(typeof a=="object")return this.each(function(){f.data(this,a)});var j=a.split(".");j[1]=j[1]?"."+j[1]:"";if(c===b){d=this.triggerHandler("getData"+j[1]+"!",[j[0]]),d===b&&this.length&&(d=f.data(this[0],a),d=k(this[0],a,d));return d===b&&j[1]?this.data(j[0]):d}return this.each(function(){var b=f(this),d=[j[0],c];b.triggerHandler("setData"+j[1]+"!",d),f.data(this,a,c),b.triggerHandler("changeData"+j[1]+"!",d)})},removeData:function(a){return this.each(function(){f.removeData(this,a)})}}),f.extend({_mark:function(a,c){a&&(c=(c||"fx")+"mark",f.data(a,c,(f.data(a,c,b,!0)||0)+1,!0))},_unmark:function(a,c,d){a!==!0&&(d=c,c=a,a=!1);if(c){d=d||"fx";var e=d+"mark",g=a?0:(f.data(c,e,b,!0)||1)-1;g?f.data(c,e,g,!0):(f.removeData(c,e,!0),m(c,d,"mark"))}},queue:function(a,c,d){if(a){c=(c||"fx")+"queue";var e=f.data(a,c,b,!0);d&&(!e||f.isArray(d)?e=f.data(a,c,f.makeArray(d),!0):e.push(d));return e||[]}},dequeue:function(a,b){b=b||"fx";var c=f.queue(a,b),d=c.shift(),e;d==="inprogress"&&(d=c.shift()),d&&(b==="fx"&&c.unshift("inprogress"),d.call(a,function(){f.dequeue(a,b)})),c.length||(f.removeData(a,b+"queue",!0),m(a,b,"queue"))}}),f.fn.extend({queue:function(a,c){typeof a!="string"&&(c=a,a="fx");if(c===b)return f.queue(this[0],a);return this.each(function(){var b=f.queue(this,a,c);a==="fx"&&b[0]!=="inprogress"&&f.dequeue(this,a)})},dequeue:function(a){return this.each(function(){f.dequeue(this,a)})},delay:function(a,b){a=f.fx?f.fx.speeds[a]||a:a,b=b||"fx";return this.queue(b,function(){var c=this;setTimeout(function(){f.dequeue(c,b)},a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,c){function m(){--h||d.resolveWith(e,[e])}typeof a!="string"&&(c=a,a=b),a=a||"fx";var d=f.Deferred(),e=this,g=e.length,h=1,i=a+"defer",j=a+"queue",k=a+"mark",l;while(g--)if(l=f.data(e[g],i,b,!0)||(f.data(e[g],j,b,!0)||f.data(e[g],k,b,!0))&&f.data(e[g],i,f._Deferred(),!0))h++,l.done(m);m();return d.promise()}});var n=/[\n\t\r]/g,o=/\s+/,p=/\r/g,q=/^(?:button|input)$/i,r=/^(?:button|input|object|select|textarea)$/i,s=/^a(?:rea)?$/i,t=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,u=/\:|^on/,v,w;f.fn.extend({attr:function(a,b){return f.access(this,a,b,!0,f.attr)},removeAttr:function(a){return this.each(function(){f.removeAttr(this,a)})},prop:function(a,b){return f.access(this,a,b,!0,f.prop)},removeProp:function(a){a=f.propFix[a]||a;return this.each(function(){try{this[a]=b,delete this[a]}catch(c){}})},addClass:function(a){var b,c,d,e,g,h,i;if(f.isFunction(a))return this.each(function(b){f(this).addClass(a.call(this,b,this.className))});if(a&&typeof a=="string"){b=a.split(o);for(c=0,d=this.length;c<d;c++){e=this[c];if(e.nodeType===1)if(!e.className&&b.length===1)e.className=a;else{g=" "+e.className+" ";for(h=0,i=b.length;h<i;h++)~g.indexOf(" "+b[h]+" ")||(g+=b[h]+" ");e.className=f.trim(g)}}}return this},removeClass:function(a){var c,d,e,g,h,i,j;if(f.isFunction(a))return this.each(function(b){f(this).removeClass(a.call(this,b,this.className))});if(a&&typeof a=="string"||a===b){c=(a||"").split(o);for(d=0,e=this.length;d<e;d++){g=this[d];if(g.nodeType===1&&g.className)if(a){h=(" "+g.className+" ").replace(n," ");for(i=0,j=c.length;i<j;i++)h=h.replace(" "+c[i]+" "," ");g.className=f.trim(h)}else g.className=""}}return this},toggleClass:function(a,b){var c=typeof a,d=typeof b=="boolean";if(f.isFunction(a))return this.each(function(c){f(this).toggleClass(a.call(this,c,this.className,b),b)});return this.each(function(){if(c==="string"){var e,g=0,h=f(this),i=b,j=a.split(o);while(e=j[g++])i=d?i:!h.hasClass(e),h[i?"addClass":"removeClass"](e)}else if(c==="undefined"||c==="boolean")this.className&&f._data(this,"__className__",this.className),this.className=this.className||a===!1?"":f._data(this,"__className__")||""})},hasClass:function(a){var b=" "+a+" ";for(var c=0,d=this.length;c<d;c++)if((" "+this[c].className+" ").replace(n," ").indexOf(b)>-1)return!0;return!1},val:function(a){var c,d,e=this[0];if(!arguments.length){if(e){c=f.valHooks[e.nodeName.toLowerCase()]||f.valHooks[e.type];if(c&&"get"in c&&(d=c.get(e,"value"))!==b)return d;d=e.value;return typeof d=="string"?d.replace(p,""):d==null?"":d}return b}var g=f.isFunction(a);return this.each(function(d){var e=f(this),h;if(this.nodeType===1){g?h=a.call(this,d,e.val()):h=a,h==null?h="":typeof h=="number"?h+="":f.isArray(h)&&(h=f.map(h,function(a){return a==null?"":a+""})),c=f.valHooks[this.nodeName.toLowerCase()]||f.valHooks[this.type];if(!c||!("set"in c)||c.set(this,h,"value")===b)this.value=h}})}}),f.extend({valHooks:{option:{get:function(a){var b=a.attributes.value;return!b||b.specified?a.value:a.text}},select:{get:function(a){var b,c=a.selectedIndex,d=[],e=a.options,g=a.type==="select-one";if(c<0)return null;for(var h=g?c:0,i=g?c+1:e.length;h<i;h++){var j=e[h];if(j.selected&&(f.support.optDisabled?!j.disabled:j.getAttribute("disabled")===null)&&(!j.parentNode.disabled||!f.nodeName(j.parentNode,"optgroup"))){b=f(j).val();if(g)return b;d.push(b)}}if(g&&!d.length&&e.length)return f(e[c]).val();return d},set:function(a,b){var c=f.makeArray(b);f(a).find("option").each(function(){this.selected=f.inArray(f(this).val(),c)>=0}),c.length||(a.selectedIndex=-1);return c}}},attrFn:{val:!0,css:!0,html:!0,text:!0,data:!0,width:!0,height:!0,offset:!0},attrFix:{tabindex:"tabIndex"},attr:function(a,c,d,e){var g=a.nodeType;if(!a||g===3||g===8||g===2)return b;if(e&&c in f.attrFn)return f(a)[c](d);if(!("getAttribute"in a))return f.prop(a,c,d);var h,i,j=g!==1||!f.isXMLDoc(a);j&&(c=f.attrFix[c]||c,i=f.attrHooks[c],i||(t.test(c)?i=w:v&&c!=="className"&&(f.nodeName(a,"form")||u.test(c))&&(i=v)));if(d!==b){if(d===null){f.removeAttr(a,c);return b}if(i&&"set"in i&&j&&(h=i.set(a,d,c))!==b)return h;a.setAttribute(c,""+d);return d}if(i&&"get"in i&&j&&(h=i.get(a,c))!==null)return h;h=a.getAttribute(c);return h===null?b:h},removeAttr:function(a,b){var c;a.nodeType===1&&(b=f.attrFix[b]||b,f.support.getSetAttribute?a.removeAttribute(b):(f.attr(a,b,""),a.removeAttributeNode(a.getAttributeNode(b))),t.test(b)&&(c=f.propFix[b]||b)in a&&(a[c]=!1))},attrHooks:{type:{set:function(a,b){if(q.test(a.nodeName)&&a.parentNode)f.error("type property can't be changed");else if(!f.support.radioValue&&b==="radio"&&f.nodeName(a,"input")){var c=a.value;a.setAttribute("type",b),c&&(a.value=c);return b}}},tabIndex:{get:function(a){var c=a.getAttributeNode("tabIndex");return c&&c.specified?parseInt(c.value,10):r.test(a.nodeName)||s.test(a.nodeName)&&a.href?0:b}},value:{get:function(a,b){if(v&&f.nodeName(a,"button"))return v.get(a,b);return b in a?a.value:null},set:function(a,b,c){if(v&&f.nodeName(a,"button"))return v.set(a,b,c);a.value=b}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(a,c,d){var e=a.nodeType;if(!a||e===3||e===8||e===2)return b;var g,h,i=e!==1||!f.isXMLDoc(a);i&&(c=f.propFix[c]||c,h=f.propHooks[c]);return d!==b?h&&"set"in h&&(g=h.set(a,d,c))!==b?g:a[c]=d:h&&"get"in h&&(g=h.get(a,c))!==b?g:a[c]},propHooks:{}}),w={get:function(a,c){return f.prop(a,c)?c.toLowerCase():b},set:function(a,b,c){var d;b===!1?f.removeAttr(a,c):(d=f.propFix[c]||c,d in a&&(a[d]=!0),a.setAttribute(c,c.toLowerCase()));return c}},f.support.getSetAttribute||(f.attrFix=f.propFix,v=f.attrHooks.name=f.attrHooks.title=f.valHooks.button={get:function(a,c){var d;d=a.getAttributeNode(c);return d&&d.nodeValue!==""?d.nodeValue:b},set:function(a,b,c){var d=a.getAttributeNode(c);if(d){d.nodeValue=b;return b}}},f.each(["width","height"],function(a,b){f.attrHooks[b]=f.extend(f.attrHooks[b],{set:function(a,c){if(c===""){a.setAttribute(b,"auto");return c}}})})),f.support.hrefNormalized||f.each(["href","src","width","height"],function(a,c){f.attrHooks[c]=f.extend(f.attrHooks[c],{get:function(a){var d=a.getAttribute(c,2);return d===null?b:d}})}),f.support.style||(f.attrHooks.style={get:function(a){return a.style.cssText.toLowerCase()||b},set:function(a,b){return a.style.cssText=""+b}}),f.support.optSelected||(f.propHooks.selected=f.extend(f.propHooks.selected,{get:function(a){var b=a.parentNode;b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex)}})),f.support.checkOn||f.each(["radio","checkbox"],function(){f.valHooks[this]={get:function(a){return a.getAttribute("value")===null?"on":a.value}}}),f.each(["radio","checkbox"],function(){f.valHooks[this]=f.extend(f.valHooks[this],{set:function(a,b){if(f.isArray(b))return a.checked=f.inArray(f(a).val(),b)>=0}})});var x=/\.(.*)$/,y=/^(?:textarea|input|select)$/i,z=/\./g,A=/ /g,B=/[^\w\s.|`]/g,C=function(a){return a.replace(B,"\\$&")};f.event={add:function(a,c,d,e){if(a.nodeType!==3&&a.nodeType!==8){if(d===!1)d=D;else if(!d)return;var g,h;d.handler&&(g=d,d=g.handler),d.guid||(d.guid=f.guid++);var i=f._data(a);if(!i)return;var j=i.events,k=i.handle;j||(i.events=j={}),k||(i.handle=k=function(a){return typeof f!="undefined"&&(!a||f.event.triggered!==a.type)?f.event.handle.apply(k.elem,arguments):b}),k.elem=a,c=c.split(" ");var l,m=0,n;while(l=c[m++]){h=g?f.extend({},g):{handler:d,data:e},l.indexOf(".")>-1?(n=l.split("."),l=n.shift(),h.namespace=n.slice(0).sort().join(".")):(n=[],h.namespace=""),h.type=l,h.guid||(h.guid=d.guid);var o=j[l],p=f.event.special[l]||{};if(!o){o=j[l]=[];if(!p.setup||p.setup.call(a,e,n,k)===!1)a.addEventListener?a.addEventListener(l,k,!1):a.attachEvent&&a.attachEvent("on"+l,k)}p.add&&(p.add.call(a,h),h.handler.guid||(h.handler.guid=d.guid)),o.push(h),f.event.global[l]=!0}a=null}},global:{},remove:function(a,c,d,e){if(a.nodeType!==3&&a.nodeType!==8){d===!1&&(d=D);var g,h,i,j,k=0,l,m,n,o,p,q,r,s=f.hasData(a)&&f._data(a),t=s&&s.events;if(!s||!t)return;c&&c.type&&(d=c.handler,c=c.type);if(!c||typeof c=="string"&&c.charAt(0)==="."){c=c||"";for(h in t)f.event.remove(a,h+c);return}c=c.split(" ");while(h=c[k++]){r=h,q=null,l=h.indexOf(".")<0,m=[],l||(m=h.split("."),h=m.shift(),n=new RegExp("(^|\\.)"+f.map(m.slice(0).sort(),C).join("\\.(?:.*\\.)?")+"(\\.|$)")),p=t[h];if(!p)continue;if(!d){for(j=0;j<p.length;j++){q=p[j];if(l||n.test(q.namespace))f.event.remove(a,r,q.handler,j),p.splice(j--,1)}continue}o=f.event.special[h]||{};for(j=e||0;j<p.length;j++){q=p[j];if(d.guid===q.guid){if(l||n.test(q.namespace))e==null&&p.splice(j--,1),o.remove&&o.remove.call(a,q);if(e!=null)break}}if(p.length===0||e!=null&&p.length===1)(!o.teardown||o.teardown.call(a,m)===!1)&&f.removeEvent(a,h,s.handle),g=null,delete t[h]}if(f.isEmptyObject(t)){var u=s.handle;u&&(u.elem=null),delete s.events,delete s.handle,f.isEmptyObject(s)&&f.removeData(a,b,!0)}}},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(c,d,e,g){var h=c.type||c,i=[],j;h.indexOf("!")>=0&&(h=h.slice(0,-1),j=!0),h.indexOf(".")>=0&&(i=h.split("."),h=i.
shift(),i.sort());if(!!e&&!f.event.customEvent[h]||!!f.event.global[h]){c=typeof c=="object"?c[f.expando]?c:new f.Event(h,c):new f.Event(h),c.type=h,c.exclusive=j,c.namespace=i.join("."),c.namespace_re=new RegExp("(^|\\.)"+i.join("\\.(?:.*\\.)?")+"(\\.|$)");if(g||!e)c.preventDefault(),c.stopPropagation();if(!e){f.each(f.cache,function(){var a=f.expando,b=this[a];b&&b.events&&b.events[h]&&f.event.trigger(c,d,b.handle.elem)});return}if(e.nodeType===3||e.nodeType===8)return;c.result=b,c.target=e,d=d!=null?f.makeArray(d):[],d.unshift(c);var k=e,l=h.indexOf(":")<0?"on"+h:"";do{var m=f._data(k,"handle");c.currentTarget=k,m&&m.apply(k,d),l&&f.acceptData(k)&&k[l]&&k[l].apply(k,d)===!1&&(c.result=!1,c.preventDefault()),k=k.parentNode||k.ownerDocument||k===c.target.ownerDocument&&a}while(k&&!c.isPropagationStopped());if(!c.isDefaultPrevented()){var n,o=f.event.special[h]||{};if((!o._default||o._default.call(e.ownerDocument,c)===!1)&&(h!=="click"||!f.nodeName(e,"a"))&&f.acceptData(e)){try{l&&e[h]&&(n=e[l],n&&(e[l]=null),f.event.triggered=h,e[h]())}catch(p){}n&&(e[l]=n),f.event.triggered=b}}return c.result}},handle:function(c){c=f.event.fix(c||a.event);var d=((f._data(this,"events")||{})[c.type]||[]).slice(0),e=!c.exclusive&&!c.namespace,g=Array.prototype.slice.call(arguments,0);g[0]=c,c.currentTarget=this;for(var h=0,i=d.length;h<i;h++){var j=d[h];if(e||c.namespace_re.test(j.namespace)){c.handler=j.handler,c.data=j.data,c.handleObj=j;var k=j.handler.apply(this,g);k!==b&&(c.result=k,k===!1&&(c.preventDefault(),c.stopPropagation()));if(c.isImmediatePropagationStopped())break}}return c.result},props:"altKey attrChange attrName bubbles button cancelable charCode clientX clientY ctrlKey currentTarget data detail eventPhase fromElement handler keyCode layerX layerY metaKey newValue offsetX offsetY pageX pageY prevValue relatedNode relatedTarget screenX screenY shiftKey srcElement target toElement view wheelDelta which".split(" "),fix:function(a){if(a[f.expando])return a;var d=a;a=f.Event(d);for(var e=this.props.length,g;e;)g=this.props[--e],a[g]=d[g];a.target||(a.target=a.srcElement||c),a.target.nodeType===3&&(a.target=a.target.parentNode),!a.relatedTarget&&a.fromElement&&(a.relatedTarget=a.fromElement===a.target?a.toElement:a.fromElement);if(a.pageX==null&&a.clientX!=null){var h=a.target.ownerDocument||c,i=h.documentElement,j=h.body;a.pageX=a.clientX+(i&&i.scrollLeft||j&&j.scrollLeft||0)-(i&&i.clientLeft||j&&j.clientLeft||0),a.pageY=a.clientY+(i&&i.scrollTop||j&&j.scrollTop||0)-(i&&i.clientTop||j&&j.clientTop||0)}a.which==null&&(a.charCode!=null||a.keyCode!=null)&&(a.which=a.charCode!=null?a.charCode:a.keyCode),!a.metaKey&&a.ctrlKey&&(a.metaKey=a.ctrlKey),!a.which&&a.button!==b&&(a.which=a.button&1?1:a.button&2?3:a.button&4?2:0);return a},guid:1e8,proxy:f.proxy,special:{ready:{setup:f.bindReady,teardown:f.noop},live:{add:function(a){f.event.add(this,N(a.origType,a.selector),f.extend({},a,{handler:M,guid:a.handler.guid}))},remove:function(a){f.event.remove(this,N(a.origType,a.selector),a)}},beforeunload:{setup:function(a,b,c){f.isWindow(this)&&(this.onbeforeunload=c)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}}},f.removeEvent=c.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){a.detachEvent&&a.detachEvent("on"+b,c)},f.Event=function(a,b){if(!this.preventDefault)return new f.Event(a,b);a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault()?E:D):this.type=a,b&&f.extend(this,b),this.timeStamp=f.now(),this[f.expando]=!0},f.Event.prototype={preventDefault:function(){this.isDefaultPrevented=E;var a=this.originalEvent;!a||(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){this.isPropagationStopped=E;var a=this.originalEvent;!a||(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=E,this.stopPropagation()},isDefaultPrevented:D,isPropagationStopped:D,isImmediatePropagationStopped:D};var F=function(a){var b=a.relatedTarget,c=!1,d=a.type;a.type=a.data,b!==this&&(b&&(c=f.contains(this,b)),c||(f.event.handle.apply(this,arguments),a.type=d))},G=function(a){a.type=a.data,f.event.handle.apply(this,arguments)};f.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){f.event.special[a]={setup:function(c){f.event.add(this,b,c&&c.selector?G:F,a)},teardown:function(a){f.event.remove(this,b,a&&a.selector?G:F)}}}),f.support.submitBubbles||(f.event.special.submit={setup:function(a,b){if(!f.nodeName(this,"form"))f.event.add(this,"click.specialSubmit",function(a){var b=a.target,c=b.type;(c==="submit"||c==="image")&&f(b).closest("form").length&&K("submit",this,arguments)}),f.event.add(this,"keypress.specialSubmit",function(a){var b=a.target,c=b.type;(c==="text"||c==="password")&&f(b).closest("form").length&&a.keyCode===13&&K("submit",this,arguments)});else return!1},teardown:function(a){f.event.remove(this,".specialSubmit")}});if(!f.support.changeBubbles){var H,I=function(a){var b=a.type,c=a.value;b==="radio"||b==="checkbox"?c=a.checked:b==="select-multiple"?c=a.selectedIndex>-1?f.map(a.options,function(a){return a.selected}).join("-"):"":f.nodeName(a,"select")&&(c=a.selectedIndex);return c},J=function(c){var d=c.target,e,g;if(!!y.test(d.nodeName)&&!d.readOnly){e=f._data(d,"_change_data"),g=I(d),(c.type!=="focusout"||d.type!=="radio")&&f._data(d,"_change_data",g);if(e===b||g===e)return;if(e!=null||g)c.type="change",c.liveFired=b,f.event.trigger(c,arguments[1],d)}};f.event.special.change={filters:{focusout:J,beforedeactivate:J,click:function(a){var b=a.target,c=f.nodeName(b,"input")?b.type:"";(c==="radio"||c==="checkbox"||f.nodeName(b,"select"))&&J.call(this,a)},keydown:function(a){var b=a.target,c=f.nodeName(b,"input")?b.type:"";(a.keyCode===13&&!f.nodeName(b,"textarea")||a.keyCode===32&&(c==="checkbox"||c==="radio")||c==="select-multiple")&&J.call(this,a)},beforeactivate:function(a){var b=a.target;f._data(b,"_change_data",I(b))}},setup:function(a,b){if(this.type==="file")return!1;for(var c in H)f.event.add(this,c+".specialChange",H[c]);return y.test(this.nodeName)},teardown:function(a){f.event.remove(this,".specialChange");return y.test(this.nodeName)}},H=f.event.special.change.filters,H.focus=H.beforeactivate}f.support.focusinBubbles||f.each({focus:"focusin",blur:"focusout"},function(a,b){function e(a){var c=f.event.fix(a);c.type=b,c.originalEvent={},f.event.trigger(c,null,c.target),c.isDefaultPrevented()&&a.preventDefault()}var d=0;f.event.special[b]={setup:function(){d++===0&&c.addEventListener(a,e,!0)},teardown:function(){--d===0&&c.removeEventListener(a,e,!0)}}}),f.each(["bind","one"],function(a,c){f.fn[c]=function(a,d,e){var g;if(typeof a=="object"){for(var h in a)this[c](h,d,a[h],e);return this}if(arguments.length===2||d===!1)e=d,d=b;c==="one"?(g=function(a){f(this).unbind(a,g);return e.apply(this,arguments)},g.guid=e.guid||f.guid++):g=e;if(a==="unload"&&c!=="one")this.one(a,d,e);else for(var i=0,j=this.length;i<j;i++)f.event.add(this[i],a,g,d);return this}}),f.fn.extend({unbind:function(a,b){if(typeof a=="object"&&!a.preventDefault)for(var c in a)this.unbind(c,a[c]);else for(var d=0,e=this.length;d<e;d++)f.event.remove(this[d],a,b);return this},delegate:function(a,b,c,d){return this.live(b,c,d,a)},undelegate:function(a,b,c){return arguments.length===0?this.unbind("live"):this.die(b,null,c,a)},trigger:function(a,b){return this.each(function(){f.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0])return f.event.trigger(a,b,this[0],!0)},toggle:function(a){var b=arguments,c=a.guid||f.guid++,d=0,e=function(c){var e=(f.data(this,"lastToggle"+a.guid)||0)%d;f.data(this,"lastToggle"+a.guid,e+1),c.preventDefault();return b[e].apply(this,arguments)||!1};e.guid=c;while(d<b.length)b[d++].guid=c;return this.click(e)},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}});var L={focus:"focusin",blur:"focusout",mouseenter:"mouseover",mouseleave:"mouseout"};f.each(["live","die"],function(a,c){f.fn[c]=function(a,d,e,g){var h,i=0,j,k,l,m=g||this.selector,n=g?this:f(this.context);if(typeof a=="object"&&!a.preventDefault){for(var o in a)n[c](o,d,a[o],m);return this}if(c==="die"&&!a&&g&&g.charAt(0)==="."){n.unbind(g);return this}if(d===!1||f.isFunction(d))e=d||D,d=b;a=(a||"").split(" ");while((h=a[i++])!=null){j=x.exec(h),k="",j&&(k=j[0],h=h.replace(x,""));if(h==="hover"){a.push("mouseenter"+k,"mouseleave"+k);continue}l=h,L[h]?(a.push(L[h]+k),h=h+k):h=(L[h]||h)+k;if(c==="live")for(var p=0,q=n.length;p<q;p++)f.event.add(n[p],"live."+N(h,m),{data:d,selector:m,handler:e,origType:h,origHandler:e,preType:l});else n.unbind("live."+N(h,m),e)}return this}}),f.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error".split(" "),function(a,b){f.fn[b]=function(a,c){c==null&&(c=a,a=null);return arguments.length>0?this.bind(b,a,c):this.trigger(b)},f.attrFn&&(f.attrFn[b]=!0)}),function(){function u(a,b,c,d,e,f){for(var g=0,h=d.length;g<h;g++){var i=d[g];if(i){var j=!1;i=i[a];while(i){if(i.sizcache===c){j=d[i.sizset];break}if(i.nodeType===1){f||(i.sizcache=c,i.sizset=g);if(typeof b!="string"){if(i===b){j=!0;break}}else if(k.filter(b,[i]).length>0){j=i;break}}i=i[a]}d[g]=j}}}function t(a,b,c,d,e,f){for(var g=0,h=d.length;g<h;g++){var i=d[g];if(i){var j=!1;i=i[a];while(i){if(i.sizcache===c){j=d[i.sizset];break}i.nodeType===1&&!f&&(i.sizcache=c,i.sizset=g);if(i.nodeName.toLowerCase()===b){j=i;break}i=i[a]}d[g]=j}}}var a=/((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,d=0,e=Object.prototype.toString,g=!1,h=!0,i=/\\/g,j=/\W/;[0,0].sort(function(){h=!1;return 0});var k=function(b,d,f,g){f=f||[],d=d||c;var h=d;if(d.nodeType!==1&&d.nodeType!==9)return[];if(!b||typeof b!="string")return f;var i,j,n,o,q,r,s,t,u=!0,w=k.isXML(d),x=[],y=b;do{a.exec(""),i=a.exec(y);if(i){y=i[3],x.push(i[1]);if(i[2]){o=i[3];break}}}while(i);if(x.length>1&&m.exec(b))if(x.length===2&&l.relative[x[0]])j=v(x[0]+x[1],d);else{j=l.relative[x[0]]?[d]:k(x.shift(),d);while(x.length)b=x.shift(),l.relative[b]&&(b+=x.shift()),j=v(b,j)}else{!g&&x.length>1&&d.nodeType===9&&!w&&l.match.ID.test(x[0])&&!l.match.ID.test(x[x.length-1])&&(q=k.find(x.shift(),d,w),d=q.expr?k.filter(q.expr,q.set)[0]:q.set[0]);if(d){q=g?{expr:x.pop(),set:p(g)}:k.find(x.pop(),x.length===1&&(x[0]==="~"||x[0]==="+")&&d.parentNode?d.parentNode:d,w),j=q.expr?k.filter(q.expr,q.set):q.set,x.length>0?n=p(j):u=!1;while(x.length)r=x.pop(),s=r,l.relative[r]?s=x.pop():r="",s==null&&(s=d),l.relative[r](n,s,w)}else n=x=[]}n||(n=j),n||k.error(r||b);if(e.call(n)==="[object Array]")if(!u)f.push.apply(f,n);else if(d&&d.nodeType===1)for(t=0;n[t]!=null;t++)n[t]&&(n[t]===!0||n[t].nodeType===1&&k.contains(d,n[t]))&&f.push(j[t]);else for(t=0;n[t]!=null;t++)n[t]&&n[t].nodeType===1&&f.push(j[t]);else p(n,f);o&&(k(o,h,f,g),k.uniqueSort(f));return f};k.uniqueSort=function(a){if(r){g=h,a.sort(r);if(g)for(var b=1;b<a.length;b++)a[b]===a[b-1]&&a.splice(b--,1)}return a},k.matches=function(a,b){return k(a,null,null,b)},k.matchesSelector=function(a,b){return k(b,null,null,[a]).length>0},k.find=function(a,b,c){var d;if(!a)return[];for(var e=0,f=l.order.length;e<f;e++){var g,h=l.order[e];if(g=l.leftMatch[h].exec(a)){var j=g[1];g.splice(1,1);if(j.substr(j.length-1)!=="\\"){g[1]=(g[1]||"").replace(i,""),d=l.find[h](g,b,c);if(d!=null){a=a.replace(l.match[h],"");break}}}}d||(d=typeof b.getElementsByTagName!="undefined"?b.getElementsByTagName("*"):[]);return{set:d,expr:a}},k.filter=function(a,c,d,e){var f,g,h=a,i=[],j=c,m=c&&c[0]&&k.isXML(c[0]);while(a&&c.length){for(var n in l.filter)if((f=l.leftMatch[n].exec(a))!=null&&f[2]){var o,p,q=l.filter[n],r=f[1];g=!1,f.splice(1,1);if(r.substr(r.length-1)==="\\")continue;j===i&&(i=[]);if(l.preFilter[n]){f=l.preFilter[n](f,j,d,i,e,m);if(!f)g=o=!0;else if(f===!0)continue}if(f)for(var s=0;(p=j[s])!=null;s++)if(p){o=q(p,f,s,j);var t=e^!!o;d&&o!=null?t?g=!0:j[s]=!1:t&&(i.push(p),g=!0)}if(o!==b){d||(j=i),a=a.replace(l.match[n],"");if(!g)return[];break}}if(a===h)if(g==null)k.error(a);else break;h=a}return j},k.error=function(a){throw"Syntax error, unrecognized expression: "+a};var l=k.selectors={order:["ID","NAME","TAG"],match:{ID:/#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,CLASS:/\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,NAME:/\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,ATTR:/\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,TAG:/^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,CHILD:/:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,POS:/:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,PSEUDO:/:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/},leftMatch:{},attrMap:{"class":"className","for":"htmlFor"},attrHandle:{href:function(a){return a.getAttribute("href")},type:function(a){return a.getAttribute("type")}},relative:{"+":function(a,b){var c=typeof b=="string",d=c&&!j.test(b),e=c&&!d;d&&(b=b.toLowerCase());for(var f=0,g=a.length,h;f<g;f++)if(h=a[f]){while((h=h.previousSibling)&&h.nodeType!==1);a[f]=e||h&&h.nodeName.toLowerCase()===b?h||!1:h===b}e&&k.filter(b,a,!0)},">":function(a,b){var c,d=typeof b=="string",e=0,f=a.length;if(d&&!j.test(b)){b=b.toLowerCase();for(;e<f;e++){c=a[e];if(c){var g=c.parentNode;a[e]=g.nodeName.toLowerCase()===b?g:!1}}}else{for(;e<f;e++)c=a[e],c&&(a[e]=d?c.parentNode:c.parentNode===b);d&&k.filter(b,a,!0)}},"":function(a,b,c){var e,f=d++,g=u;typeof b=="string"&&!j.test(b)&&(b=b.toLowerCase(),e=b,g=t),g("parentNode",b,f,a,e,c)},"~":function(a,b,c){var e,f=d++,g=u;typeof b=="string"&&!j.test(b)&&(b=b.toLowerCase(),e=b,g=t),g("previousSibling",b,f,a,e,c)}},find:{ID:function(a,b,c){if(typeof b.getElementById!="undefined"&&!c){var d=b.getElementById(a[1]);return d&&d.parentNode?[d]:[]}},NAME:function(a,b){if(typeof b.getElementsByName!="undefined"){var c=[],d=b.getElementsByName(a[1]);for(var e=0,f=d.length;e<f;e++)d[e].getAttribute("name")===a[1]&&c.push(d[e]);return c.length===0?null:c}},TAG:function(a,b){if(typeof b.getElementsByTagName!="undefined")return b.getElementsByTagName(a[1])}},preFilter:{CLASS:function(a,b,c,d,e,f){a=" "+a[1].replace(i,"")+" ";if(f)return a;for(var g=0,h;(h=b[g])!=null;g++)h&&(e^(h.className&&(" "+h.className+" ").replace(/[\t\n\r]/g," ").indexOf(a)>=0)?c||d.push(h):c&&(b[g]=!1));return!1},ID:function(a){return a[1].replace(i,"")},TAG:function(a,b){return a[1].replace(i,"").toLowerCase()},CHILD:function(a){if(a[1]==="nth"){a[2]||k.error(a[0]),a[2]=a[2].replace(/^\+|\s*/g,"");var b=/(-?)(\d*)(?:n([+\-]?\d*))?/.exec(a[2]==="even"&&"2n"||a[2]==="odd"&&"2n+1"||!/\D/.test(a[2])&&"0n+"+a[2]||a[2]);a[2]=b[1]+(b[2]||1)-0,a[3]=b[3]-0}else a[2]&&k.error(a[0]);a[0]=d++;return a},ATTR:function(a,b,c,d,e,f){var g=a[1]=a[1].replace(i,"");!f&&l.attrMap[g]&&(a[1]=l.attrMap[g]),a[4]=(a[4]||a[5]||"").replace(i,""),a[2]==="~="&&(a[4]=" "+a[4]+" ");return a},PSEUDO:function(b,c,d,e,f){if(b[1]==="not")if((a.exec(b[3])||"").length>1||/^\w/.test(b[3]))b[3]=k(b[3],null,null,c);else{var g=k.filter(b[3],c,d,!0^f);d||e.push.apply(e,g);return!1}else if(l.match.POS.test(b[0])||l.match.CHILD.test(b[0]))return!0;return b},POS:function(a){a.unshift(!0);return a}},filters:{enabled:function(a){return a.disabled===!1&&a.type!=="hidden"},disabled:function(a){return a.disabled===!0},checked:function(a){return a.checked===!0},selected:function(a){a.parentNode&&a.parentNode.selectedIndex;return a.selected===!0},parent:function(a){return!!a.firstChild},empty:function(a){return!a.firstChild},has:function(a,b,c){return!!k(c[3],a).length},header:function(a){return/h\d/i.test(a.nodeName)},text:function(a){var b=a.getAttribute("type"),c=a.type;return a.nodeName.toLowerCase()==="input"&&"text"===c&&(b===c||b===null)},radio:function(a){return a.nodeName.toLowerCase()==="input"&&"radio"===a.type},checkbox:function(a){return a.nodeName.toLowerCase()==="input"&&"checkbox"===a.type},file:function(a){return a.nodeName.toLowerCase()==="input"&&"file"===a.type},password:function(a){return a.nodeName.toLowerCase()==="input"&&"password"===a.type},submit:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"submit"===a.type},image:function(a){return a.nodeName.toLowerCase()==="input"&&"image"===a.type},reset:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"reset"===a.type},button:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&"button"===a.type||b==="button"},input:function(a){return/input|select|textarea|button/i.test(a.nodeName)},focus:function(a){return a===a.ownerDocument.activeElement}},setFilters:{first:function(a,b){return b===0},last:function(a,b,c,d){return b===d.length-1},even:function(a,b){return b%2===0},odd:function(a,b){return b%2===1},lt:function(a,b,c){return b<c[3]-0},gt:function(a,b,c){return b>c[3]-0},nth:function(a,b,c){return c[3]-0===b},eq:function(a,b,c){return c[3]-0===b}},filter:{PSEUDO:function(a,b,c,d){var e=b[1],f=l.filters[e];if(f)return f(a,c,b,d);if(e==="contains")return(a.textContent||a.innerText||k.getText([a])||"").indexOf(b[3])>=0;if(e==="not"){var g=b[3];for(var h=0,i=g.length;h<i;h++)if(g[h]===a)return!1;return!0}k.error(e)},CHILD:function(a,b){var c=b[1],d=a;switch(c){case"only":case"first":while(d=d.previousSibling)if(d.nodeType===1)return!1;if(c==="first")return!0;d=a;case"last":while(d=d.nextSibling)if(d.nodeType===1)return!1;return!0;case"nth":var e=b[2],f=b[3];if(e===1&&f===0)return!0;var g=b[0],h=a.parentNode;if(h&&(h.sizcache!==g||!a.nodeIndex)){var i=0;for(d=h.firstChild;d;d=d.nextSibling)d.nodeType===1&&(d.nodeIndex=++i);h.sizcache=g}var j=a.nodeIndex-f;return e===0?j===0:j%e===0&&j/e>=0}},ID:function(a,b){return a.nodeType===1&&a.getAttribute("id")===b},TAG:function(a,b){return b==="*"&&a.nodeType===1||a.nodeName.toLowerCase()===b},CLASS:function(a,b){return(" "+(a.className||a.getAttribute("class"))+" ").indexOf(b)>-1},ATTR:function(a,b){var c=b[1],d=l.attrHandle[c]?l.attrHandle[c](a):a[c]!=null?a[c]:a.getAttribute(c),e=d+"",f=b[2],g=b[4];return d==null?f==="!=":f==="="?e===g:f==="*="?e.indexOf(g)>=0:f==="~="?(" "+e+" ").indexOf(g)>=0:g?f==="!="?e!==g:f==="^="?e.indexOf(g)===0:f==="$="?e.substr(e.length-g.length)===g:f==="|="?e===g||e.substr(0,g.length+1)===g+"-":!1:e&&d!==!1},POS:function(a,b,c,d){var e=b[2],f=l.setFilters[e];if(f)return f(a,c,b,d)}}},m=l.match.POS,n=function(a,b){return"\\"+(b-0+1)};for(var o in l.match)l.match[o]=new RegExp(l.match[o].source+/(?![^\[]*\])(?![^\(]*\))/.source),l.leftMatch[o]=new RegExp(/(^(?:.|\r|\n)*?)/.source+l.match[o].source.replace(/\\(\d+)/g,n));var p=function(a,b){a=Array.prototype.slice.call(a,0);if(b){b.push.apply(b,a);return b}return a};try{Array.prototype.slice.call(c.documentElement.childNodes,0)[0].nodeType}catch(q){p=function(a,b){var c=0,d=b||[];if(e.call(a)==="[object Array]")Array.prototype.push.apply(d,a);else if(typeof a.length=="number")for(var f=a.length;c<f;c++)d.push(a[c]);else for(;a[c];c++)d.push(a[c]);return d}}var r,s;c.documentElement.compareDocumentPosition?r=function(a,b){if(a===b){g=!0;return 0}if(!a.compareDocumentPosition||!b.compareDocumentPosition)return a.compareDocumentPosition?-1:1;return a.compareDocumentPosition(b)&4?-1:1}:(r=function(a,b){if(a===b){g=!0;return 0}if(a.sourceIndex&&b.sourceIndex)return a.sourceIndex-b.sourceIndex;var c,d,e=[],f=[],h=a.parentNode,i=b.parentNode,j=h;if(h===i)return s(a,b);if(!h)return-1;if(!i)return 1;while(j)e.unshift(j),j=j.parentNode;j=i;while(j)f.unshift(j),j=j.parentNode;c=e.length,d=f.length;for(var k=0;k<c&&k<d;k++)if(e[k]!==f[k])return s(e[k],f[k]);return k===c?s(a,f[k],-1):s(e[k],b,1)},s=function(a,b,c){if(a===b)return c;var d=a.nextSibling;while(d){if(d===b)return-1;d=d.nextSibling}return 1}),k.getText=function(a){var b="",c;for(var d=0;a[d];d++)c=a[d],c.nodeType===3||c.nodeType===4?b+=c.nodeValue:c.nodeType!==8&&(b+=k.getText(c.childNodes));return b},function(){var a=c.createElement("div"),d="script"+(new Date).getTime(),e=c.documentElement;a.innerHTML="<a name='"+d+"'/>",e.insertBefore(a,e.firstChild),c.getElementById(d)&&(l.find.ID=function(a,c,d){if(typeof c.getElementById!="undefined"&&!d){var e=c.getElementById(a[1]);return e?e.id===a[1]||typeof e.getAttributeNode!="undefined"&&e.getAttributeNode("id").nodeValue===a[1]?[e]:b:[]}},l.filter.ID=function(a,b){var c=typeof a.getAttributeNode!="undefined"&&a.getAttributeNode("id");return a.nodeType===1&&c&&c.nodeValue===b}),e.removeChild(a),e=a=null}(),function(){var a=c.createElement("div");a.appendChild(c.createComment("")),a.getElementsByTagName("*").length>0&&(l.find.TAG=function(a,b){var c=b.getElementsByTagName(a[1]);if(a[1]==="*"){var d=[];for(var e=0;c[e];e++)c[e].nodeType===1&&d.push(c[e]);c=d}return c}),a.innerHTML="<a href='#'></a>",a.firstChild&&typeof a.firstChild.getAttribute!="undefined"&&a.firstChild.getAttribute("href")!=="#"&&(l.attrHandle.href=function(a){return a.getAttribute("href",2)}),a=null}(),c.querySelectorAll&&function(){var a=k,b=c.createElement("div"),d="__sizzle__";b.innerHTML="<p class='TEST'></p>";if(!b.querySelectorAll||b.querySelectorAll(".TEST").length!==0){k=function(b,e,f,g){e=e||c;if(!g&&!k.isXML(e)){var h=/^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec(b);if(h&&(e.nodeType===1||e.nodeType===9)){if(h[1])return p(e.getElementsByTagName(b),f);if(h[2]&&l.find.CLASS&&e.getElementsByClassName)return p(e.getElementsByClassName(h[2]),f)}if(e.nodeType===9){if(b==="body"&&e.body)return p([e.body],f);if(h&&h[3]){var i=e.getElementById(h[3]);if(!i||!i.parentNode)return p([],f);if(i.id===h[3])return p([i],f)}try{return p(e.querySelectorAll(b),f)}catch(j){}}else if(e.nodeType===1&&e.nodeName.toLowerCase()!=="object"){var m=e,n=e.getAttribute("id"),o=n||d,q=e.parentNode,r=/^\s*[+~]/.test(b);n?o=o.replace(/'/g,"\\$&"):e.setAttribute("id",o),r&&q&&(e=e.parentNode);try{if(!r||q)return p(e.querySelectorAll("[id='"+o+"'] "+b),f)}catch(s){}finally{n||m.removeAttribute("id")}}}return a(b,e,f,g)};for(var e in a)k[e]=a[e];b=null}}(),function(){var a=c.documentElement,b=a.matchesSelector||a.mozMatchesSelector||a.webkitMatchesSelector||a.msMatchesSelector;if(b){var d=!b.call(c.createElement("div"),"div"),e=!1;try{b.call(c.documentElement,"[test!='']:sizzle")}catch(f){e=!0}k.matchesSelector=function(a,c){c=c.replace(/\=\s*([^'"\]]*)\s*\]/g,"='$1']");if(!k.isXML(a))try{if(e||!l.match.PSEUDO.test(c)&&!/!=/.test(c)){var f=b.call(a,c);if(f||!d||a.document&&a.document.nodeType!==11)return f}}catch(g){}return k(c,null,null,[a]).length>0}}}(),function(){var a=c.createElement("div");a.innerHTML="<div class='test e'></div><div class='test'></div>";if(!!a.getElementsByClassName&&a.getElementsByClassName("e").length!==0){a.lastChild.className="e";if(a.getElementsByClassName("e").length===1)return;l.order.splice(1,0,"CLASS"),l.find.CLASS=function(a,b,c){if(typeof b.getElementsByClassName!="undefined"&&!c)return b.getElementsByClassName(a[1])},a=null}}(),c.documentElement.contains?k.contains=function(a,b){return a!==b&&(a.contains?a.contains(b):!0)}:c.documentElement.compareDocumentPosition?k.contains=function(a,b){return!!(a.compareDocumentPosition(b)&16)}:k.contains=function(){return!1},k.isXML=function(a){var b=(a?a.ownerDocument||a:0).documentElement;return b?b.nodeName!=="HTML":!1};var v=function(a,b){var c,d=[],e="",f=b.nodeType?[b]:b;while(c=l.match.PSEUDO.exec(a))e+=c[0],a=a.replace(l.match.PSEUDO,"");a=l.relative[a]?a+"*":a;for(var g=0,h=f.length;g<h;g++)k(a,f[g],d);return k.filter(e,d)};f.find=k,f.expr=k.selectors,f.expr[":"]=f.expr.filters,f.unique=k.uniqueSort,f.text=k.getText,f.isXMLDoc=k.isXML,f.contains=k.contains}();var O=/Until$/,P=/^(?:parents|prevUntil|prevAll)/,Q=/,/,R=/^.[^:#\[\.,]*$/,S=Array.prototype.slice,T=f.expr.match.POS,U={children:!0,contents:!0,next:!0,prev:!0};f.fn.extend({find:function(a){var b=this,c,d;if(typeof a!="string")return f(a).filter(function(){for(c=0,d=b.length;c<d;c++)if(f.contains(b[c],this))return!0});var e=this.pushStack("","find",a),g,h,i;for(c=0,d=this.length;c<d;c++){g=e.length,f.find(a,this[c],e);if(c>0)for(h=g;h<e.length;h++)for(i=0;i<g;i++)if(e[i]===e[h]){e.splice(h--,1);break}}return e},has:function(a){var b=f(a);return this.filter(function(){for(var a=0,c=b.length;a<c;a++)if(f.contains(this,b[a]))return!0})},not:function(a){return this.pushStack(W(this,a,!1),"not",a)},filter:function(a){return this.pushStack(W(this,a,!0),"filter",a)},is:function(a){return!!a&&(typeof a=="string"?f.filter(a,this).length>0:this.filter(a).length>0)},closest:function(a,b){var c=[],d,e,g=this[0];if(f.isArray(a)){var h,i,j={},k=1;if(g&&a.length){for(d=0,e=a.length;d<e;d++)i=a[d],j[i]||(j[i]=T.test(i)?f(i,b||this.context):i);while(g&&g.ownerDocument&&g!==b){for(i in j)h=j[i],(h.jquery?h.index(g)>-1:f(g).is(h))&&c.push({selector:i,elem:g,level:k});g=g.parentNode,k++}}return c}var l=T.test(a)||typeof a!="string"?f(a,b||this.context):0;for(d=0,e=this.length;d<e;d++){g=this[d];while(g){if(l?l.index(g)>-1:f.find.matchesSelector(g,a)){c.push(g);break}g=g.parentNode;if(!g||!g.ownerDocument||g===b||g.nodeType===11)break}}c=c.length>1?f.unique(c):c;return this.pushStack(c,"closest",a)},index:function(a){if(!a||typeof a=="string")return f.inArray(this[0],a?f(a):this.parent().children());return f.inArray(a.jquery?a[0]:a,this)},add:function(a,b){var c=typeof a=="string"?f(a,b):f.makeArray(a&&a.nodeType?[a]:a),d=f.merge(this.get(),c);return this.pushStack(V(c[0])||V(d[0])?d:f.unique(d))},andSelf:function(){return this.add(this.prevObject)}}),f.each({parent:function(a){var b=a.parentNode;return b&&b.nodeType!==11?b:null},parents:function(a){return f.dir(a,"parentNode")},parentsUntil:function(a,b,c){return f.dir(a,"parentNode",c)},next:function(a){return f.nth(a,2,"nextSibling")},prev:function(a){return f.nth(a,2,"previousSibling")},nextAll:function(a){return f.dir(a,"nextSibling")},prevAll:function(a){return f.dir(a,"previousSibling")},nextUntil:function(a,b,c){return f.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return f.dir(a,"previousSibling",c)},siblings:function(a){return f.sibling(a.parentNode.firstChild,a)},children:function(a){return f.sibling(a.firstChild)},contents:function(a){return f.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:f.makeArray(a.childNodes)}},function(a,b){f.fn[a]=function(c,d){var e=f.map(this,b,c),g=S.call(arguments);O.test(a)||(d=c),d&&typeof d=="string"&&(e=f.filter(d,e)),e=this.length>1&&!U[a]?f.unique(e):e,(this.length>1||Q.test(d))&&P.test(a)&&(e=e.reverse());return this.pushStack(e,a,g.join(","))}}),f.extend({filter:function(a,b,c){c&&(a=":not("+a+")");return b.length===1?f.find.matchesSelector(b[0],a)?[b[0]]:[]:f.find.matches(a,b)},dir:function(a,c,d){var e=[],g=a[c];while(g&&g.nodeType!==9&&(d===b||g.nodeType!==1||!f(g).is(d)))g.nodeType===1&&e.push(g),g=g[c];return e},nth:function(a,b,c,d){b=b||1;var e=0;for(;a;a=a[c])if(a.nodeType===1&&++e===b)break;return a},sibling:function(a,b){var c=[];for(;a;a=a.nextSibling)a.nodeType===1&&a!==b&&c.push(a);return c}});var X=/ jQuery\d+="(?:\d+|null)"/g,Y=/^\s+/,Z=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,$=/<([\w:]+)/,_=/<tbody/i,ba=/<|&#?\w+;/,bb=/<(?:script|object|embed|option|style)/i,bc=/checked\s*(?:[^=]|=\s*.checked.)/i,bd=/\/(java|ecma)script/i,be=/^\s*<!(?:\[CDATA\[|\-\-)/,bf={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]};bf.optgroup=bf.option,bf.tbody=bf.tfoot=bf.colgroup=bf.caption=bf.thead,bf.th=bf.td,f.support.htmlSerialize||(bf._default=[1,"div<div>","</div>"]),f.fn.extend({text:function(a){if(f.isFunction(a))return this.each(function(b){var c=f(this);c.text(a.call(this,b,c.text()))});if(typeof a!="object"&&a!==b)return this.empty().append((this[0]&&this[0].ownerDocument||c).createTextNode(a));return f.text(this)},wrapAll:function(a){if(f.isFunction(a))return this.each(function(b){f(this).wrapAll(a.call(this,b))});if(this[0]){var b=f(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&a.firstChild.nodeType===1)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){if(f.isFunction(a))return this.each(function(b){f(this).wrapInner(a.call(this,b))});return this.each(function(){var b=f(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){return this.each(function(){f(this).wrapAll(a)})},unwrap:function(){return this.parent().each(function(){f.nodeName(this,"body")||f(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.insertBefore(a,this.firstChild)})},before:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)});if(arguments.length){var a=f(arguments[0]);a.push.apply(a,this.toArray());return this.pushStack(a,"before",arguments)}},after:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)});if(arguments.length){var a=this.pushStack(this,"after",arguments);a.push.apply(a,f(arguments[0]).toArray());return a}},remove:function(a,b){for(var c=0,d;(d=this[c])!=null;c++)if(!a||f.filter(a,[d]).length)!b&&d.nodeType===1&&(f.cleanData(d.getElementsByTagName("*")),f.cleanData([d])),d.parentNode&&d.parentNode.removeChild(d);return this},empty:function(){for(var a=0,b;(b=this[a])!=null;a++){b.nodeType===1&&f.cleanData(b.getElementsByTagName("*"));while(b.firstChild)b.removeChild(b.firstChild)}return this},clone:function(a,b){a=a==null?!1:a,b=b==null?a:b;return this.map(function(){return f.clone(this,a,b)})},html:function(a){if(a===b)return this[0]&&this[0].nodeType===1?this[0].innerHTML.replace(X,""):null;if(typeof a=="string"&&!bb.test(a)&&(f.support.leadingWhitespace||!Y.test(a))&&!bf[($.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(Z,"<$1></$2>");try{for(var c=0,d=this.length;c<d;c++)this[c].nodeType===1&&(f.cleanData(this[c].getElementsByTagName("*")),this[c].innerHTML=a)}catch(e){this.empty().append(a)}}else f.isFunction(a)?this.each(function(b){var c=f(this);c.html(a.call(this,b,c.html()))}):this.empty().append(a);return this},replaceWith:function(a){if(this[0]&&this[0].parentNode){if(f.isFunction(a))return this.each(function(b){var c=f(this),d=c.html();c.replaceWith(a.call(this,b,d))});typeof a!="string"&&(a=f(a).detach());return this.each(function(){var b=this.nextSibling,c=this.parentNode;f(this).remove(),b?f(b).before(a):f(c).append(a)})}return this.length?this.pushStack(f(f.isFunction(a)?a():a),"replaceWith",a):this},detach:function(a){return this.remove(a,!0)},domManip:function(a,c,d){var e,g,h,i,j=a[0],k=[];if(!f.support.checkClone&&arguments.length===3&&typeof j=="string"&&bc.test(j))return this.each(function(){f(this).domManip(a,c,d,!0)});if(f.isFunction(j))return this.each(function(e){var g=f(this);a[0]=j.call(this,e,c?g.html():b),g.domManip(a,c,d)});if(this[0]){i=j&&j.parentNode,f.support.parentNode&&i&&i.nodeType===11&&i.childNodes.length===this.length?e={fragment:i}:e=f.buildFragment(a,this,k),h=e.fragment,h.childNodes.length===1?g=h=h.firstChild:g=h.firstChild;if(g){c=c&&f.nodeName(g,"tr");for(var l=0,m=this.length,n=m-1;l<m;l++)d.call(c?bg(this[l],g):this[l],e.cacheable||m>1&&l<n?f.clone(h,!0,!0):h)}k.length&&f.each(k,bm)}return this}}),f.buildFragment=function(a,b,d){var e,g,h,i;b&&b[0]&&(i=b[0].ownerDocument||b[0]),i.createDocumentFragment||(i=c),a.length===1&&typeof a[0]=="string"&&a[0].length<512&&i===c&&a[0].charAt(0)==="<"&&!bb.test(a[0])&&(f.support.checkClone||!bc.test(a[0]))&&(g=!0,h=f.fragments[a[0]],h&&h!==1&&(e=h)),e||(e=i.createDocumentFragment(),f.clean(a,i,e,d)),g&&(f.fragments[a[0]]=h?e:1);return{fragment:e,cacheable:g}},f.fragments={},f.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){f.fn[a]=function(c){var d=[],e=f(c),g=this.length===1&&this[0].parentNode;if(g&&g.nodeType===11&&g.childNodes.length===1&&e.length===1){e[b](this[0]);return this}for(var h=0,i=e.length;h<i;h++){var j=(h>0?this.clone(!0):this).get();f(e[h])[b](j),d=d.concat(j
)}return this.pushStack(d,a,e.selector)}}),f.extend({clone:function(a,b,c){var d=a.cloneNode(!0),e,g,h;if((!f.support.noCloneEvent||!f.support.noCloneChecked)&&(a.nodeType===1||a.nodeType===11)&&!f.isXMLDoc(a)){bi(a,d),e=bj(a),g=bj(d);for(h=0;e[h];++h)bi(e[h],g[h])}if(b){bh(a,d);if(c){e=bj(a),g=bj(d);for(h=0;e[h];++h)bh(e[h],g[h])}}e=g=null;return d},clean:function(a,b,d,e){var g;b=b||c,typeof b.createElement=="undefined"&&(b=b.ownerDocument||b[0]&&b[0].ownerDocument||c);var h=[],i;for(var j=0,k;(k=a[j])!=null;j++){typeof k=="number"&&(k+="");if(!k)continue;if(typeof k=="string")if(!ba.test(k))k=b.createTextNode(k);else{k=k.replace(Z,"<$1></$2>");var l=($.exec(k)||["",""])[1].toLowerCase(),m=bf[l]||bf._default,n=m[0],o=b.createElement("div");o.innerHTML=m[1]+k+m[2];while(n--)o=o.lastChild;if(!f.support.tbody){var p=_.test(k),q=l==="table"&&!p?o.firstChild&&o.firstChild.childNodes:m[1]==="<table>"&&!p?o.childNodes:[];for(i=q.length-1;i>=0;--i)f.nodeName(q[i],"tbody")&&!q[i].childNodes.length&&q[i].parentNode.removeChild(q[i])}!f.support.leadingWhitespace&&Y.test(k)&&o.insertBefore(b.createTextNode(Y.exec(k)[0]),o.firstChild),k=o.childNodes}var r;if(!f.support.appendChecked)if(k[0]&&typeof (r=k.length)=="number")for(i=0;i<r;i++)bl(k[i]);else bl(k);k.nodeType?h.push(k):h=f.merge(h,k)}if(d){g=function(a){return!a.type||bd.test(a.type)};for(j=0;h[j];j++)if(e&&f.nodeName(h[j],"script")&&(!h[j].type||h[j].type.toLowerCase()==="text/javascript"))e.push(h[j].parentNode?h[j].parentNode.removeChild(h[j]):h[j]);else{if(h[j].nodeType===1){var s=f.grep(h[j].getElementsByTagName("script"),g);h.splice.apply(h,[j+1,0].concat(s))}d.appendChild(h[j])}}return h},cleanData:function(a){var b,c,d=f.cache,e=f.expando,g=f.event.special,h=f.support.deleteExpando;for(var i=0,j;(j=a[i])!=null;i++){if(j.nodeName&&f.noData[j.nodeName.toLowerCase()])continue;c=j[f.expando];if(c){b=d[c]&&d[c][e];if(b&&b.events){for(var k in b.events)g[k]?f.event.remove(j,k):f.removeEvent(j,k,b.handle);b.handle&&(b.handle.elem=null)}h?delete j[f.expando]:j.removeAttribute&&j.removeAttribute(f.expando),delete d[c]}}}});var bn=/alpha\([^)]*\)/i,bo=/opacity=([^)]*)/,bp=/([A-Z]|^ms)/g,bq=/^-?\d+(?:px)?$/i,br=/^-?\d/,bs=/^[+\-]=/,bt=/[^+\-\.\de]+/g,bu={position:"absolute",visibility:"hidden",display:"block"},bv=["Left","Right"],bw=["Top","Bottom"],bx,by,bz;f.fn.css=function(a,c){if(arguments.length===2&&c===b)return this;return f.access(this,a,c,!0,function(a,c,d){return d!==b?f.style(a,c,d):f.css(a,c)})},f.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=bx(a,"opacity","opacity");return c===""?"1":c}return a.style.opacity}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":f.support.cssFloat?"cssFloat":"styleFloat"},style:function(a,c,d,e){if(!!a&&a.nodeType!==3&&a.nodeType!==8&&!!a.style){var g,h,i=f.camelCase(c),j=a.style,k=f.cssHooks[i];c=f.cssProps[i]||i;if(d===b){if(k&&"get"in k&&(g=k.get(a,!1,e))!==b)return g;return j[c]}h=typeof d;if(h==="number"&&isNaN(d)||d==null)return;h==="string"&&bs.test(d)&&(d=+d.replace(bt,"")+parseFloat(f.css(a,c)),h="number"),h==="number"&&!f.cssNumber[i]&&(d+="px");if(!k||!("set"in k)||(d=k.set(a,d))!==b)try{j[c]=d}catch(l){}}},css:function(a,c,d){var e,g;c=f.camelCase(c),g=f.cssHooks[c],c=f.cssProps[c]||c,c==="cssFloat"&&(c="float");if(g&&"get"in g&&(e=g.get(a,!0,d))!==b)return e;if(bx)return bx(a,c)},swap:function(a,b,c){var d={};for(var e in b)d[e]=a.style[e],a.style[e]=b[e];c.call(a);for(e in b)a.style[e]=d[e]}}),f.curCSS=f.css,f.each(["height","width"],function(a,b){f.cssHooks[b]={get:function(a,c,d){var e;if(c){if(a.offsetWidth!==0)return bA(a,b,d);f.swap(a,bu,function(){e=bA(a,b,d)});return e}},set:function(a,b){if(!bq.test(b))return b;b=parseFloat(b);if(b>=0)return b+"px"}}}),f.support.opacity||(f.cssHooks.opacity={get:function(a,b){return bo.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?parseFloat(RegExp.$1)/100+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle;c.zoom=1;var e=f.isNaN(b)?"":"alpha(opacity="+b*100+")",g=d&&d.filter||c.filter||"";c.filter=bn.test(g)?g.replace(bn,e):g+" "+e}}),f(function(){f.support.reliableMarginRight||(f.cssHooks.marginRight={get:function(a,b){var c;f.swap(a,{display:"inline-block"},function(){b?c=bx(a,"margin-right","marginRight"):c=a.style.marginRight});return c}})}),c.defaultView&&c.defaultView.getComputedStyle&&(by=function(a,c){var d,e,g;c=c.replace(bp,"-$1").toLowerCase();if(!(e=a.ownerDocument.defaultView))return b;if(g=e.getComputedStyle(a,null))d=g.getPropertyValue(c),d===""&&!f.contains(a.ownerDocument.documentElement,a)&&(d=f.style(a,c));return d}),c.documentElement.currentStyle&&(bz=function(a,b){var c,d=a.currentStyle&&a.currentStyle[b],e=a.runtimeStyle&&a.runtimeStyle[b],f=a.style;!bq.test(d)&&br.test(d)&&(c=f.left,e&&(a.runtimeStyle.left=a.currentStyle.left),f.left=b==="fontSize"?"1em":d||0,d=f.pixelLeft+"px",f.left=c,e&&(a.runtimeStyle.left=e));return d===""?"auto":d}),bx=by||bz,f.expr&&f.expr.filters&&(f.expr.filters.hidden=function(a){var b=a.offsetWidth,c=a.offsetHeight;return b===0&&c===0||!f.support.reliableHiddenOffsets&&(a.style.display||f.css(a,"display"))==="none"},f.expr.filters.visible=function(a){return!f.expr.filters.hidden(a)});var bB=/%20/g,bC=/\[\]$/,bD=/\r?\n/g,bE=/#.*$/,bF=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,bG=/^(?:color|date|datetime|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,bH=/^(?:about|app|app\-storage|.+\-extension|file|widget):$/,bI=/^(?:GET|HEAD)$/,bJ=/^\/\//,bK=/\?/,bL=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,bM=/^(?:select|textarea)/i,bN=/\s+/,bO=/([?&])_=[^&]*/,bP=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/,bQ=f.fn.load,bR={},bS={},bT,bU;try{bT=e.href}catch(bV){bT=c.createElement("a"),bT.href="",bT=bT.href}bU=bP.exec(bT.toLowerCase())||[],f.fn.extend({load:function(a,c,d){if(typeof a!="string"&&bQ)return bQ.apply(this,arguments);if(!this.length)return this;var e=a.indexOf(" ");if(e>=0){var g=a.slice(e,a.length);a=a.slice(0,e)}var h="GET";c&&(f.isFunction(c)?(d=c,c=b):typeof c=="object"&&(c=f.param(c,f.ajaxSettings.traditional),h="POST"));var i=this;f.ajax({url:a,type:h,dataType:"html",data:c,complete:function(a,b,c){c=a.responseText,a.isResolved()&&(a.done(function(a){c=a}),i.html(g?f("<div>").append(c.replace(bL,"")).find(g):c)),d&&i.each(d,[c,b,a])}});return this},serialize:function(){return f.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?f.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||bM.test(this.nodeName)||bG.test(this.type))}).map(function(a,b){var c=f(this).val();return c==null?null:f.isArray(c)?f.map(c,function(a,c){return{name:b.name,value:a.replace(bD,"\r\n")}}):{name:b.name,value:c.replace(bD,"\r\n")}}).get()}}),f.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){f.fn[b]=function(a){return this.bind(b,a)}}),f.each(["get","post"],function(a,c){f[c]=function(a,d,e,g){f.isFunction(d)&&(g=g||e,e=d,d=b);return f.ajax({type:c,url:a,data:d,success:e,dataType:g})}}),f.extend({getScript:function(a,c){return f.get(a,b,c,"script")},getJSON:function(a,b,c){return f.get(a,b,c,"json")},ajaxSetup:function(a,b){b?f.extend(!0,a,f.ajaxSettings,b):(b=a,a=f.extend(!0,f.ajaxSettings,b));for(var c in{context:1,url:1})c in b?a[c]=b[c]:c in f.ajaxSettings&&(a[c]=f.ajaxSettings[c]);return a},ajaxSettings:{url:bT,isLocal:bH.test(bU[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded",processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":"*/*"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":a.String,"text html":!0,"text json":f.parseJSON,"text xml":f.parseXML}},ajaxPrefilter:bW(bR),ajaxTransport:bW(bS),ajax:function(a,c){function w(a,c,l,m){if(s!==2){s=2,q&&clearTimeout(q),p=b,n=m||"",v.readyState=a?4:0;var o,r,u,w=l?bZ(d,v,l):b,x,y;if(a>=200&&a<300||a===304){if(d.ifModified){if(x=v.getResponseHeader("Last-Modified"))f.lastModified[k]=x;if(y=v.getResponseHeader("Etag"))f.etag[k]=y}if(a===304)c="notmodified",o=!0;else try{r=b$(d,w),c="success",o=!0}catch(z){c="parsererror",u=z}}else{u=c;if(!c||a)c="error",a<0&&(a=0)}v.status=a,v.statusText=c,o?h.resolveWith(e,[r,c,v]):h.rejectWith(e,[v,c,u]),v.statusCode(j),j=b,t&&g.trigger("ajax"+(o?"Success":"Error"),[v,d,o?r:u]),i.resolveWith(e,[v,c]),t&&(g.trigger("ajaxComplete",[v,d]),--f.active||f.event.trigger("ajaxStop"))}}typeof a=="object"&&(c=a,a=b),c=c||{};var d=f.ajaxSetup({},c),e=d.context||d,g=e!==d&&(e.nodeType||e instanceof f)?f(e):f.event,h=f.Deferred(),i=f._Deferred(),j=d.statusCode||{},k,l={},m={},n,o,p,q,r,s=0,t,u,v={readyState:0,setRequestHeader:function(a,b){if(!s){var c=a.toLowerCase();a=m[c]=m[c]||a,l[a]=b}return this},getAllResponseHeaders:function(){return s===2?n:null},getResponseHeader:function(a){var c;if(s===2){if(!o){o={};while(c=bF.exec(n))o[c[1].toLowerCase()]=c[2]}c=o[a.toLowerCase()]}return c===b?null:c},overrideMimeType:function(a){s||(d.mimeType=a);return this},abort:function(a){a=a||"abort",p&&p.abort(a),w(0,a);return this}};h.promise(v),v.success=v.done,v.error=v.fail,v.complete=i.done,v.statusCode=function(a){if(a){var b;if(s<2)for(b in a)j[b]=[j[b],a[b]];else b=a[v.status],v.then(b,b)}return this},d.url=((a||d.url)+"").replace(bE,"").replace(bJ,bU[1]+"//"),d.dataTypes=f.trim(d.dataType||"*").toLowerCase().split(bN),d.crossDomain==null&&(r=bP.exec(d.url.toLowerCase()),d.crossDomain=!(!r||r[1]==bU[1]&&r[2]==bU[2]&&(r[3]||(r[1]==="http:"?80:443))==(bU[3]||(bU[1]==="http:"?80:443)))),d.data&&d.processData&&typeof d.data!="string"&&(d.data=f.param(d.data,d.traditional)),bX(bR,d,c,v);if(s===2)return!1;t=d.global,d.type=d.type.toUpperCase(),d.hasContent=!bI.test(d.type),t&&f.active++===0&&f.event.trigger("ajaxStart");if(!d.hasContent){d.data&&(d.url+=(bK.test(d.url)?"&":"?")+d.data),k=d.url;if(d.cache===!1){var x=f.now(),y=d.url.replace(bO,"$1_="+x);d.url=y+(y===d.url?(bK.test(d.url)?"&":"?")+"_="+x:"")}}(d.data&&d.hasContent&&d.contentType!==!1||c.contentType)&&v.setRequestHeader("Content-Type",d.contentType),d.ifModified&&(k=k||d.url,f.lastModified[k]&&v.setRequestHeader("If-Modified-Since",f.lastModified[k]),f.etag[k]&&v.setRequestHeader("If-None-Match",f.etag[k])),v.setRequestHeader("Accept",d.dataTypes[0]&&d.accepts[d.dataTypes[0]]?d.accepts[d.dataTypes[0]]+(d.dataTypes[0]!=="*"?", */*; q=0.01":""):d.accepts["*"]);for(u in d.headers)v.setRequestHeader(u,d.headers[u]);if(d.beforeSend&&(d.beforeSend.call(e,v,d)===!1||s===2)){v.abort();return!1}for(u in{success:1,error:1,complete:1})v[u](d[u]);p=bX(bS,d,c,v);if(!p)w(-1,"No Transport");else{v.readyState=1,t&&g.trigger("ajaxSend",[v,d]),d.async&&d.timeout>0&&(q=setTimeout(function(){v.abort("timeout")},d.timeout));try{s=1,p.send(l,w)}catch(z){status<2?w(-1,z):f.error(z)}}return v},param:function(a,c){var d=[],e=function(a,b){b=f.isFunction(b)?b():b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};c===b&&(c=f.ajaxSettings.traditional);if(f.isArray(a)||a.jquery&&!f.isPlainObject(a))f.each(a,function(){e(this.name,this.value)});else for(var g in a)bY(g,a[g],c,e);return d.join("&").replace(bB,"+")}}),f.extend({active:0,lastModified:{},etag:{}});var b_=f.now(),ca=/(\=)\?(&|$)|\?\?/i;f.ajaxSetup({jsonp:"callback",jsonpCallback:function(){return f.expando+"_"+b_++}}),f.ajaxPrefilter("json jsonp",function(b,c,d){var e=b.contentType==="application/x-www-form-urlencoded"&&typeof b.data=="string";if(b.dataTypes[0]==="jsonp"||b.jsonp!==!1&&(ca.test(b.url)||e&&ca.test(b.data))){var g,h=b.jsonpCallback=f.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,i=a[h],j=b.url,k=b.data,l="$1"+h+"$2";b.jsonp!==!1&&(j=j.replace(ca,l),b.url===j&&(e&&(k=k.replace(ca,l)),b.data===k&&(j+=(/\?/.test(j)?"&":"?")+b.jsonp+"="+h))),b.url=j,b.data=k,a[h]=function(a){g=[a]},d.always(function(){a[h]=i,g&&f.isFunction(i)&&a[h](g[0])}),b.converters["script json"]=function(){g||f.error(h+" was not called");return g[0]},b.dataTypes[0]="json";return"script"}}),f.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(a){f.globalEval(a);return a}}}),f.ajaxPrefilter("script",function(a){a.cache===b&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),f.ajaxTransport("script",function(a){if(a.crossDomain){var d,e=c.head||c.getElementsByTagName("head")[0]||c.documentElement;return{send:function(f,g){d=c.createElement("script"),d.async="async",a.scriptCharset&&(d.charset=a.scriptCharset),d.src=a.url,d.onload=d.onreadystatechange=function(a,c){if(c||!d.readyState||/loaded|complete/.test(d.readyState))d.onload=d.onreadystatechange=null,e&&d.parentNode&&e.removeChild(d),d=b,c||g(200,"success")},e.insertBefore(d,e.firstChild)},abort:function(){d&&d.onload(0,1)}}}});var cb=a.ActiveXObject?function(){for(var a in cd)cd[a](0,1)}:!1,cc=0,cd;f.ajaxSettings.xhr=a.ActiveXObject?function(){return!this.isLocal&&ce()||cf()}:ce,function(a){f.extend(f.support,{ajax:!!a,cors:!!a&&"withCredentials"in a})}(f.ajaxSettings.xhr()),f.support.ajax&&f.ajaxTransport(function(c){if(!c.crossDomain||f.support.cors){var d;return{send:function(e,g){var h=c.xhr(),i,j;c.username?h.open(c.type,c.url,c.async,c.username,c.password):h.open(c.type,c.url,c.async);if(c.xhrFields)for(j in c.xhrFields)h[j]=c.xhrFields[j];c.mimeType&&h.overrideMimeType&&h.overrideMimeType(c.mimeType),!c.crossDomain&&!e["X-Requested-With"]&&(e["X-Requested-With"]="XMLHttpRequest");try{for(j in e)h.setRequestHeader(j,e[j])}catch(k){}h.send(c.hasContent&&c.data||null),d=function(a,e){var j,k,l,m,n;try{if(d&&(e||h.readyState===4)){d=b,i&&(h.onreadystatechange=f.noop,cb&&delete cd[i]);if(e)h.readyState!==4&&h.abort();else{j=h.status,l=h.getAllResponseHeaders(),m={},n=h.responseXML,n&&n.documentElement&&(m.xml=n),m.text=h.responseText;try{k=h.statusText}catch(o){k=""}!j&&c.isLocal&&!c.crossDomain?j=m.text?200:404:j===1223&&(j=204)}}}catch(p){e||g(-1,p)}m&&g(j,k,m,l)},!c.async||h.readyState===4?d():(i=++cc,cb&&(cd||(cd={},f(a).unload(cb)),cd[i]=d),h.onreadystatechange=d)},abort:function(){d&&d(0,1)}}}});var cg={},ch,ci,cj=/^(?:toggle|show|hide)$/,ck=/^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,cl,cm=[["height","marginTop","marginBottom","paddingTop","paddingBottom"],["width","marginLeft","marginRight","paddingLeft","paddingRight"],["opacity"]],cn,co=a.webkitRequestAnimationFrame||a.mozRequestAnimationFrame||a.oRequestAnimationFrame;f.fn.extend({show:function(a,b,c){var d,e;if(a||a===0)return this.animate(cr("show",3),a,b,c);for(var g=0,h=this.length;g<h;g++)d=this[g],d.style&&(e=d.style.display,!f._data(d,"olddisplay")&&e==="none"&&(e=d.style.display=""),e===""&&f.css(d,"display")==="none"&&f._data(d,"olddisplay",cs(d.nodeName)));for(g=0;g<h;g++){d=this[g];if(d.style){e=d.style.display;if(e===""||e==="none")d.style.display=f._data(d,"olddisplay")||""}}return this},hide:function(a,b,c){if(a||a===0)return this.animate(cr("hide",3),a,b,c);for(var d=0,e=this.length;d<e;d++)if(this[d].style){var g=f.css(this[d],"display");g!=="none"&&!f._data(this[d],"olddisplay")&&f._data(this[d],"olddisplay",g)}for(d=0;d<e;d++)this[d].style&&(this[d].style.display="none");return this},_toggle:f.fn.toggle,toggle:function(a,b,c){var d=typeof a=="boolean";f.isFunction(a)&&f.isFunction(b)?this._toggle.apply(this,arguments):a==null||d?this.each(function(){var b=d?a:f(this).is(":hidden");f(this)[b?"show":"hide"]()}):this.animate(cr("toggle",3),a,b,c);return this},fadeTo:function(a,b,c,d){return this.filter(":hidden").css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=f.speed(b,c,d);if(f.isEmptyObject(a))return this.each(e.complete,[!1]);a=f.extend({},a);return this[e.queue===!1?"each":"queue"](function(){e.queue===!1&&f._mark(this);var b=f.extend({},e),c=this.nodeType===1,d=c&&f(this).is(":hidden"),g,h,i,j,k,l,m,n,o;b.animatedProperties={};for(i in a){g=f.camelCase(i),i!==g&&(a[g]=a[i],delete a[i]),h=a[g],f.isArray(h)?(b.animatedProperties[g]=h[1],h=a[g]=h[0]):b.animatedProperties[g]=b.specialEasing&&b.specialEasing[g]||b.easing||"swing";if(h==="hide"&&d||h==="show"&&!d)return b.complete.call(this);c&&(g==="height"||g==="width")&&(b.overflow=[this.style.overflow,this.style.overflowX,this.style.overflowY],f.css(this,"display")==="inline"&&f.css(this,"float")==="none"&&(f.support.inlineBlockNeedsLayout?(j=cs(this.nodeName),j==="inline"?this.style.display="inline-block":(this.style.display="inline",this.style.zoom=1)):this.style.display="inline-block"))}b.overflow!=null&&(this.style.overflow="hidden");for(i in a)k=new f.fx(this,b,i),h=a[i],cj.test(h)?k[h==="toggle"?d?"show":"hide":h]():(l=ck.exec(h),m=k.cur(),l?(n=parseFloat(l[2]),o=l[3]||(f.cssNumber[i]?"":"px"),o!=="px"&&(f.style(this,i,(n||1)+o),m=(n||1)/k.cur()*m,f.style(this,i,m+o)),l[1]&&(n=(l[1]==="-="?-1:1)*n+m),k.custom(m,n,o)):k.custom(m,h,""));return!0})},stop:function(a,b){a&&this.queue([]),this.each(function(){var a=f.timers,c=a.length;b||f._unmark(!0,this);while(c--)a[c].elem===this&&(b&&a[c](!0),a.splice(c,1))}),b||this.dequeue();return this}}),f.each({slideDown:cr("show",1),slideUp:cr("hide",1),slideToggle:cr("toggle",1),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){f.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),f.extend({speed:function(a,b,c){var d=a&&typeof a=="object"?f.extend({},a):{complete:c||!c&&b||f.isFunction(a)&&a,duration:a,easing:c&&b||b&&!f.isFunction(b)&&b};d.duration=f.fx.off?0:typeof d.duration=="number"?d.duration:d.duration in f.fx.speeds?f.fx.speeds[d.duration]:f.fx.speeds._default,d.old=d.complete,d.complete=function(a){f.isFunction(d.old)&&d.old.call(this),d.queue!==!1?f.dequeue(this):a!==!1&&f._unmark(this)};return d},easing:{linear:function(a,b,c,d){return c+d*a},swing:function(a,b,c,d){return(-Math.cos(a*Math.PI)/2+.5)*d+c}},timers:[],fx:function(a,b,c){this.options=b,this.elem=a,this.prop=c,b.orig=b.orig||{}}}),f.fx.prototype={update:function(){this.options.step&&this.options.step.call(this.elem,this.now,this),(f.fx.step[this.prop]||f.fx.step._default)(this)},cur:function(){if(this.elem[this.prop]!=null&&(!this.elem.style||this.elem.style[this.prop]==null))return this.elem[this.prop];var a,b=f.css(this.elem,this.prop);return isNaN(a=parseFloat(b))?!b||b==="auto"?0:b:a},custom:function(a,b,c){function h(a){return d.step(a)}var d=this,e=f.fx,g;this.startTime=cn||cp(),this.start=a,this.end=b,this.unit=c||this.unit||(f.cssNumber[this.prop]?"":"px"),this.now=this.start,this.pos=this.state=0,h.elem=this.elem,h()&&f.timers.push(h)&&!cl&&(co?(cl=!0,g=function(){cl&&(co(g),e.tick())},co(g)):cl=setInterval(e.tick,e.interval))},show:function(){this.options.orig[this.prop]=f.style(this.elem,this.prop),this.options.show=!0,this.custom(this.prop==="width"||this.prop==="height"?1:0,this.cur()),f(this.elem).show()},hide:function(){this.options.orig[this.prop]=f.style(this.elem,this.prop),this.options.hide=!0,this.custom(this.cur(),0)},step:function(a){var b=cn||cp(),c=!0,d=this.elem,e=this.options,g,h;if(a||b>=e.duration+this.startTime){this.now=this.end,this.pos=this.state=1,this.update(),e.animatedProperties[this.prop]=!0;for(g in e.animatedProperties)e.animatedProperties[g]!==!0&&(c=!1);if(c){e.overflow!=null&&!f.support.shrinkWrapBlocks&&f.each(["","X","Y"],function(a,b){d.style["overflow"+b]=e.overflow[a]}),e.hide&&f(d).hide();if(e.hide||e.show)for(var i in e.animatedProperties)f.style(d,i,e.orig[i]);e.complete.call(d)}return!1}e.duration==Infinity?this.now=b:(h=b-this.startTime,this.state=h/e.duration,this.pos=f.easing[e.animatedProperties[this.prop]](this.state,h,0,1,e.duration),this.now=this.start+(this.end-this.start)*this.pos),this.update();return!0}},f.extend(f.fx,{tick:function(){for(var a=f.timers,b=0;b<a.length;++b)a[b]()||a.splice(b--,1);a.length||f.fx.stop()},interval:13,stop:function(){clearInterval(cl),cl=null},speeds:{slow:600,fast:200,_default:400},step:{opacity:function(a){f.style(a.elem,"opacity",a.now)},_default:function(a){a.elem.style&&a.elem.style[a.prop]!=null?a.elem.style[a.prop]=(a.prop==="width"||a.prop==="height"?Math.max(0,a.now):a.now)+a.unit:a.elem[a.prop]=a.now}}}),f.expr&&f.expr.filters&&(f.expr.filters.animated=function(a){return f.grep(f.timers,function(b){return a===b.elem}).length});var ct=/^t(?:able|d|h)$/i,cu=/^(?:body|html)$/i;"getBoundingClientRect"in c.documentElement?f.fn.offset=function(a){var b=this[0],c;if(a)return this.each(function(b){f.offset.setOffset(this,a,b)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return f.offset.bodyOffset(b);try{c=b.getBoundingClientRect()}catch(d){}var e=b.ownerDocument,g=e.documentElement;if(!c||!f.contains(g,b))return c?{top:c.top,left:c.left}:{top:0,left:0};var h=e.body,i=cv(e),j=g.clientTop||h.clientTop||0,k=g.clientLeft||h.clientLeft||0,l=i.pageYOffset||f.support.boxModel&&g.scrollTop||h.scrollTop,m=i.pageXOffset||f.support.boxModel&&g.scrollLeft||h.scrollLeft,n=c.top+l-j,o=c.left+m-k;return{top:n,left:o}}:f.fn.offset=function(a){var b=this[0];if(a)return this.each(function(b){f.offset.setOffset(this,a,b)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return f.offset.bodyOffset(b);f.offset.initialize();var c,d=b.offsetParent,e=b,g=b.ownerDocument,h=g.documentElement,i=g.body,j=g.defaultView,k=j?j.getComputedStyle(b,null):b.currentStyle,l=b.offsetTop,m=b.offsetLeft;while((b=b.parentNode)&&b!==i&&b!==h){if(f.offset.supportsFixedPosition&&k.position==="fixed")break;c=j?j.getComputedStyle(b,null):b.currentStyle,l-=b.scrollTop,m-=b.scrollLeft,b===d&&(l+=b.offsetTop,m+=b.offsetLeft,f.offset.doesNotAddBorder&&(!f.offset.doesAddBorderForTableAndCells||!ct.test(b.nodeName))&&(l+=parseFloat(c.borderTopWidth)||0,m+=parseFloat(c.borderLeftWidth)||0),e=d,d=b.offsetParent),f.offset.subtractsBorderForOverflowNotVisible&&c.overflow!=="visible"&&(l+=parseFloat(c.borderTopWidth)||0,m+=parseFloat(c.borderLeftWidth)||0),k=c}if(k.position==="relative"||k.position==="static")l+=i.offsetTop,m+=i.offsetLeft;f.offset.supportsFixedPosition&&k.position==="fixed"&&(l+=Math.max(h.scrollTop,i.scrollTop),m+=Math.max(h.scrollLeft,i.scrollLeft));return{top:l,left:m}},f.offset={initialize:function(){var a=c.body,b=c.createElement("div"),d,e,g,h,i=parseFloat(f.css(a,"marginTop"))||0,j="<div style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;'><div></div></div><table style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>";f.extend(b.style,{position:"absolute",top:0,left:0,margin:0,border:0,width:"1px",height:"1px",visibility:"hidden"}),b.innerHTML=j,a.insertBefore(b,a.firstChild),d=b.firstChild,e=d.firstChild,h=d.nextSibling.firstChild.firstChild,this.doesNotAddBorder=e.offsetTop!==5,this.doesAddBorderForTableAndCells=h.offsetTop===5,e.style.position="fixed",e.style.top="20px",this.supportsFixedPosition=e.offsetTop===20||e.offsetTop===15,e.style.position=e.style.top="",d.style.overflow="hidden",d.style.position="relative",this.subtractsBorderForOverflowNotVisible=e.offsetTop===-5,this.doesNotIncludeMarginInBodyOffset=a.offsetTop!==i,a.removeChild(b),f.offset.initialize=f.noop},bodyOffset:function(a){var b=a.offsetTop,c=a.offsetLeft;f.offset.initialize(),f.offset.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(f.css(a,"marginTop"))||0,c+=parseFloat(f.css(a,"marginLeft"))||0);return{top:b,left:c}},setOffset:function(a,b,c){var d=f.css(a,"position");d==="static"&&(a.style.position="relative");var e=f(a),g=e.offset(),h=f.css(a,"top"),i=f.css(a,"left"),j=(d==="absolute"||d==="fixed")&&f.inArray("auto",[h,i])>-1,k={},l={},m,n;j?(l=e.position(),m=l.top,n=l.left):(m=parseFloat(h)||0,n=parseFloat(i)||0),f.isFunction(b)&&(b=b.call(a,c,g)),b.top!=null&&(k.top=b.top-g.top+m),b.left!=null&&(k.left=b.left-g.left+n),"using"in b?b.using.call(a,k):e.css(k)}},f.fn.extend({position:function(){if(!this[0])return null;var a=this[0],b=this.offsetParent(),c=this.offset(),d=cu.test(b[0].nodeName)?{top:0,left:0}:b.offset();c.top-=parseFloat(f.css(a,"marginTop"))||0,c.left-=parseFloat(f.css(a,"marginLeft"))||0,d.top+=parseFloat(f.css(b[0],"borderTopWidth"))||0,d.left+=parseFloat(f.css(b[0],"borderLeftWidth"))||0;return{top:c.top-d.top,left:c.left-d.left}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||c.body;while(a&&!cu.test(a.nodeName)&&f.css(a,"position")==="static")a=a.offsetParent;return a})}}),f.each(["Left","Top"],function(a,c){var d="scroll"+c;f.fn[d]=function(c){var e,g;if(c===b){e=this[0];if(!e)return null;g=cv(e);return g?"pageXOffset"in g?g[a?"pageYOffset":"pageXOffset"]:f.support.boxModel&&g.document.documentElement[d]||g.document.body[d]:e[d]}return this.each(function(){g=cv(this),g?g.scrollTo(a?f(g).scrollLeft():c,a?c:f(g).scrollTop()):this[d]=c})}}),f.each(["Height","Width"],function(a,c){var d=c.toLowerCase();f.fn["inner"+c]=function(){var a=this[0];return a&&a.style?parseFloat(f.css(a,d,"padding")):null},f.fn["outer"+c]=function(a){var b=this[0];return b&&b.style?parseFloat(f.css(b,d,a?"margin":"border")):null},f.fn[d]=function(a){var e=this[0];if(!e)return a==null?null:this;if(f.isFunction(a))return this.each(function(b){var c=f(this);c[d](a.call(this,b,c[d]()))});if(f.isWindow(e)){var g=e.document.documentElement["client"+c];return e.document.compatMode==="CSS1Compat"&&g||e.document.body["client"+c]||g}if(e.nodeType===9)return Math.max(e.documentElement["client"+c],e.body["scroll"+c],e.documentElement["scroll"+c],e.body["offset"+c],e.documentElement["offset"+c]);if(a===b){var h=f.css(e,d),i=parseFloat(h);return f.isNaN(i)?h:i}return this.css(d,typeof a=="string"?a:a+"px")}}),a.jQuery=a.$=f})(window);


/* Added by module "core", file "include/javascript/jquery.bgiframe-2.1.2.min.js" */
/* Copyright (c) 2010 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Version 2.1.2
 */
(function(a){a.fn.bgiframe=(a.browser.msie&&/msie 6\.0/i.test(navigator.userAgent)?function(d){d=a.extend({top:"auto",left:"auto",width:"auto",height:"auto",opacity:true,src:"javascript:false;"},d);var c='<iframe class="bgiframe"frameborder="0"tabindex="-1"src="'+d.src+'"style="display:block;position:absolute;z-index:-1;'+(d.opacity!==false?"filter:Alpha(Opacity='0');":"")+"top:"+(d.top=="auto"?"expression(((parseInt(this.parentNode.currentStyle.borderTopWidth)||0)*-1)+'px')":b(d.top))+";left:"+(d.left=="auto"?"expression(((parseInt(this.parentNode.currentStyle.borderLeftWidth)||0)*-1)+'px')":b(d.left))+";width:"+(d.width=="auto"?"expression(this.parentNode.offsetWidth+'px')":b(d.width))+";height:"+(d.height=="auto"?"expression(this.parentNode.offsetHeight+'px')":b(d.height))+';"/>';return this.each(function(){if(a(this).children("iframe.bgiframe").length===0){this.insertBefore(document.createElement(c),this.firstChild)}})}:function(){return this});a.fn.bgIframe=a.fn.bgiframe;function b(c){return c&&c.constructor===Number?c+"px":c}})(jQuery);

/* Added by module "core", file "include/javascript/json2.js" */
/*
    http://www.JSON.org/json2.js
    2011-02-23

    Public Domain.

    NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.

    See http://www.JSON.org/js.html


    This code should be minified before deployment.
    See http://javascript.crockford.com/jsmin.html

    USE YOUR OWN COPY. IT IS EXTREMELY UNWISE TO LOAD CODE FROM SERVERS YOU DO
    NOT CONTROL.


    This file creates a global JSON object containing two methods: stringify
    and parse.

        JSON.stringify(value, replacer, space)
            value       any JavaScript value, usually an object or array.

            replacer    an optional parameter that determines how object
                        values are stringified for objects. It can be a
                        function or an array of strings.

            space       an optional parameter that specifies the indentation
                        of nested structures. If it is omitted, the text will
                        be packed without extra whitespace. If it is a number,
                        it will specify the number of spaces to indent at each
                        level. If it is a string (such as '\t' or '&nbsp;'),
                        it contains the characters used to indent at each level.

            This method produces a JSON text from a JavaScript value.

            When an object value is found, if the object contains a toJSON
            method, its toJSON method will be called and the result will be
            stringified. A toJSON method does not serialize: it returns the
            value represented by the name/value pair that should be serialized,
            or undefined if nothing should be serialized. The toJSON method
            will be passed the key associated with the value, and this will be
            bound to the value

            For example, this would serialize Dates as ISO strings.

                Date.prototype.toJSON = function (key) {
                    function f(n) {
                        // Format integers to have at least two digits.
                        return n < 10 ? '0' + n : n;
                    }

                    return this.getUTCFullYear()   + '-' +
                         f(this.getUTCMonth() + 1) + '-' +
                         f(this.getUTCDate())      + 'T' +
                         f(this.getUTCHours())     + ':' +
                         f(this.getUTCMinutes())   + ':' +
                         f(this.getUTCSeconds())   + 'Z';
                };

            You can provide an optional replacer method. It will be passed the
            key and value of each member, with this bound to the containing
            object. The value that is returned from your method will be
            serialized. If your method returns undefined, then the member will
            be excluded from the serialization.

            If the replacer parameter is an array of strings, then it will be
            used to select the members to be serialized. It filters the results
            such that only members with keys listed in the replacer array are
            stringified.

            Values that do not have JSON representations, such as undefined or
            functions, will not be serialized. Such values in objects will be
            dropped; in arrays they will be replaced with null. You can use
            a replacer function to replace those with JSON values.
            JSON.stringify(undefined) returns undefined.

            The optional space parameter produces a stringification of the
            value that is filled with line breaks and indentation to make it
            easier to read.

            If the space parameter is a non-empty string, then that string will
            be used for indentation. If the space parameter is a number, then
            the indentation will be that many spaces.

            Example:

            text = JSON.stringify(['e', {pluribus: 'unum'}]);
            // text is '["e",{"pluribus":"unum"}]'


            text = JSON.stringify(['e', {pluribus: 'unum'}], null, '\t');
            // text is '[\n\t"e",\n\t{\n\t\t"pluribus": "unum"\n\t}\n]'

            text = JSON.stringify([new Date()], function (key, value) {
                return this[key] instanceof Date ?
                    'Date(' + this[key] + ')' : value;
            });
            // text is '["Date(---current time---)"]'


        JSON.parse(text, reviver)
            This method parses a JSON text to produce an object or array.
            It can throw a SyntaxError exception.

            The optional reviver parameter is a function that can filter and
            transform the results. It receives each of the keys and values,
            and its return value is used instead of the original value.
            If it returns what it received, then the structure is not modified.
            If it returns undefined then the member is deleted.

            Example:

            // Parse the text. Values that look like ISO date strings will
            // be converted to Date objects.

            myData = JSON.parse(text, function (key, value) {
                var a;
                if (typeof value === 'string') {
                    a =
/^(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2}):(\d{2}(?:\.\d*)?)Z$/.exec(value);
                    if (a) {
                        return new Date(Date.UTC(+a[1], +a[2] - 1, +a[3], +a[4],
                            +a[5], +a[6]));
                    }
                }
                return value;
            });

            myData = JSON.parse('["Date(09/09/2001)"]', function (key, value) {
                var d;
                if (typeof value === 'string' &&
                        value.slice(0, 5) === 'Date(' &&
                        value.slice(-1) === ')') {
                    d = new Date(value.slice(5, -1));
                    if (d) {
                        return d;
                    }
                }
                return value;
            });


    This is a reference implementation. You are free to copy, modify, or
    redistribute.
*/

/*jslint evil: true, strict: false, regexp: false */

/*members "", "\b", "\t", "\n", "\f", "\r", "\"", JSON, "\\", apply,
    call, charCodeAt, getUTCDate, getUTCFullYear, getUTCHours,
    getUTCMinutes, getUTCMonth, getUTCSeconds, hasOwnProperty, join,
    lastIndex, length, parse, prototype, push, replace, slice, stringify,
    test, toJSON, toString, valueOf
*/


// Create a JSON object only if one does not already exist. We create the
// methods in a closure to avoid creating global variables.

var JSON;
if (!JSON) {
    JSON = {};
}

(function () {
    "use strict";

    function f(n) {
        // Format integers to have at least two digits.
        return n < 10 ? '0' + n : n;
    }

    if (typeof Date.prototype.toJSON !== 'function') {

        Date.prototype.toJSON = function (key) {

            return isFinite(this.valueOf()) ?
                this.getUTCFullYear()     + '-' +
                f(this.getUTCMonth() + 1) + '-' +
                f(this.getUTCDate())      + 'T' +
                f(this.getUTCHours())     + ':' +
                f(this.getUTCMinutes())   + ':' +
                f(this.getUTCSeconds())   + 'Z' : null;
        };

        String.prototype.toJSON      =
            Number.prototype.toJSON  =
            Boolean.prototype.toJSON = function (key) {
                return this.valueOf();
            };
    }

    var cx = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
        escapable = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
        gap,
        indent,
        meta = {    // table of character substitutions
            '\b': '\\b',
            '\t': '\\t',
            '\n': '\\n',
            '\f': '\\f',
            '\r': '\\r',
            '"' : '\\"',
            '\\': '\\\\'
        },
        rep;


    function quote(string) {

// If the string contains no control characters, no quote characters, and no
// backslash characters, then we can safely slap some quotes around it.
// Otherwise we must also replace the offending characters with safe escape
// sequences.

        escapable.lastIndex = 0;
        return escapable.test(string) ? '"' + string.replace(escapable, function (a) {
            var c = meta[a];
            return typeof c === 'string' ? c :
                '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice(-4);
        }) + '"' : '"' + string + '"';
    }


    function str(key, holder) {

// Produce a string from holder[key].

        var i,          // The loop counter.
            k,          // The member key.
            v,          // The member value.
            length,
            mind = gap,
            partial,
            value = holder[key];

// If the value has a toJSON method, call it to obtain a replacement value.

        if (value && typeof value === 'object' &&
                typeof value.toJSON === 'function') {
            value = value.toJSON(key);
        }

// If we were called with a replacer function, then call the replacer to
// obtain a replacement value.

        if (typeof rep === 'function') {
            value = rep.call(holder, key, value);
        }

// What happens next depends on the value's type.

        switch (typeof value) {
        case 'string':
            return quote(value);

        case 'number':

// JSON numbers must be finite. Encode non-finite numbers as null.

            return isFinite(value) ? String(value) : 'null';

        case 'boolean':
        case 'null':

// If the value is a boolean or null, convert it to a string. Note:
// typeof null does not produce 'null'. The case is included here in
// the remote chance that this gets fixed someday.

            return String(value);

// If the type is 'object', we might be dealing with an object or an array or
// null.

        case 'object':

// Due to a specification blunder in ECMAScript, typeof null is 'object',
// so watch out for that case.

            if (!value) {
                return 'null';
            }

// Make an array to hold the partial results of stringifying this object value.

            gap += indent;
            partial = [];

// Is the value an array?

            if (Object.prototype.toString.apply(value) === '[object Array]') {

// The value is an array. Stringify every element. Use null as a placeholder
// for non-JSON values.

                length = value.length;
                for (i = 0; i < length; i += 1) {
                    partial[i] = str(i, value) || 'null';
                }

// Join all of the elements together, separated with commas, and wrap them in
// brackets.

                v = partial.length === 0 ? '[]' : gap ?
                    '[\n' + gap + partial.join(',\n' + gap) + '\n' + mind + ']' :
                    '[' + partial.join(',') + ']';
                gap = mind;
                return v;
            }

// If the replacer is an array, use it to select the members to be stringified.

            if (rep && typeof rep === 'object') {
                length = rep.length;
                for (i = 0; i < length; i += 1) {
                    if (typeof rep[i] === 'string') {
                        k = rep[i];
                        v = str(k, value);
                        if (v) {
                            partial.push(quote(k) + (gap ? ': ' : ':') + v);
                        }
                    }
                }
            } else {

// Otherwise, iterate through all of the keys in the object.

                for (k in value) {
                    if (Object.prototype.hasOwnProperty.call(value, k)) {
                        v = str(k, value);
                        if (v) {
                            partial.push(quote(k) + (gap ? ': ' : ':') + v);
                        }
                    }
                }
            }

// Join all of the member texts together, separated with commas,
// and wrap them in braces.

            v = partial.length === 0 ? '{}' : gap ?
                '{\n' + gap + partial.join(',\n' + gap) + '\n' + mind + '}' :
                '{' + partial.join(',') + '}';
            gap = mind;
            return v;
        }
    }

// If the JSON object does not yet have a stringify method, give it one.

    if (typeof JSON.stringify !== 'function') {
        JSON.stringify = function (value, replacer, space) {

// The stringify method takes a value and an optional replacer, and an optional
// space parameter, and returns a JSON text. The replacer can be a function
// that can replace values, or an array of strings that will select the keys.
// A default replacer method can be provided. Use of the space parameter can
// produce text that is more easily readable.

            var i;
            gap = '';
            indent = '';

// If the space parameter is a number, make an indent string containing that
// many spaces.

            if (typeof space === 'number') {
                for (i = 0; i < space; i += 1) {
                    indent += ' ';
                }

// If the space parameter is a string, it will be used as the indent string.

            } else if (typeof space === 'string') {
                indent = space;
            }

// If there is a replacer, it must be a function or an array.
// Otherwise, throw an error.

            rep = replacer;
            if (replacer && typeof replacer !== 'function' &&
                    (typeof replacer !== 'object' ||
                    typeof replacer.length !== 'number')) {
                throw new Error('JSON.stringify');
            }

// Make a fake root object containing our value under the key of ''.
// Return the result of stringifying the value.

            return str('', {'': value});
        };
    }


// If the JSON object does not yet have a parse method, give it one.

    if (typeof JSON.parse !== 'function') {
        JSON.parse = function (text, reviver) {

// The parse method takes a text and an optional reviver function, and returns
// a JavaScript value if the text is a valid JSON text.

            var j;

            function walk(holder, key) {

// The walk method is used to recursively walk the resulting structure so
// that modifications can be made.

                var k, v, value = holder[key];
                if (value && typeof value === 'object') {
                    for (k in value) {
                        if (Object.prototype.hasOwnProperty.call(value, k)) {
                            v = walk(value, k);
                            if (v !== undefined) {
                                value[k] = v;
                            } else {
                                delete value[k];
                            }
                        }
                    }
                }
                return reviver.call(holder, key, value);
            }


// Parsing happens in four stages. In the first stage, we replace certain
// Unicode characters with escape sequences. JavaScript handles many characters
// incorrectly, either silently deleting them, or treating them as line endings.

            text = String(text);
            cx.lastIndex = 0;
            if (cx.test(text)) {
                text = text.replace(cx, function (a) {
                    return '\\u' +
                        ('0000' + a.charCodeAt(0).toString(16)).slice(-4);
                });
            }

// In the second stage, we run the text against regular expressions that look
// for non-JSON patterns. We are especially concerned with '()' and 'new'
// because they can cause invocation, and '=' because it can cause mutation.
// But just to be safe, we want to reject all unexpected forms.

// We split the second stage into 4 regexp operations in order to work around
// crippling inefficiencies in IE's and Safari's regexp engines. First we
// replace the JSON backslash pairs with '@' (a non-JSON character). Second, we
// replace all simple value tokens with ']' characters. Third, we delete all
// open brackets that follow a colon or comma or that begin the text. Finally,
// we look to see that the remaining characters are only whitespace or ']' or
// ',' or ':' or '{' or '}'. If that is so, then the text is safe for eval.

            if (/^[\],:{}\s]*$/
                    .test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, '@')
                        .replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']')
                        .replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {

// In the third stage we use the eval function to compile the text into a
// JavaScript structure. The '{' operator is subject to a syntactic ambiguity
// in JavaScript: it can begin a block or an object literal. We wrap the text
// in parens to eliminate the ambiguity.

                j = eval('(' + text + ')');

// In the optional fourth stage, we recursively walk the new structure, passing
// each name/value pair to a reviver function for possible transformation.

                return typeof reviver === 'function' ?
                    walk({'': j}, '') : j;
            }

// If the text is not JSON parseable, then a SyntaxError is thrown.

            throw new SyntaxError('JSON.parse');
        };
    }
}());


/* Added by module "core", file "include/javascript/phorum-javascript-library.php" */
////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//   THIS IS THE PHORUM JAVASCRIPT LIBRARY.                                   //
//   DO NOT EDIT THIS FILE DIRECTLY! IT WAS COMPILED FROM THE SOURCES         //
//   THAT CAN BE FOUND UNDER THE 'include/javascript/src' SUBDIRECTORY.       //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//   Copyright (C) 2011  Phorum Development Team                              //
//   http://www.phorum.org                                                    //
//                                                                            //
//   This program is free software. You can redistribute it and/or modify     //
//   it under the terms of either the current Phorum License (viewable at     //
//   phorum.org) or the Phorum License that was distributed with this file    //
//                                                                            //
//   This program is distributed in the hope that it will be useful,          //
//   but WITHOUT ANY WARRANTY, without even the implied warranty of           //
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                     //
//                                                                            //
//   You should have received a copy of the Phorum License                    //
//   along with this program.                                                 //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////

/**
 * @class Phorum
 * @extends Object
 *
 * The Phorum singleton acts as the top level namespace for all Phorum
 * JavaScript code. Methods, objects and classes are stored in this
 * object. This takes away the risk of running into name space collissions
 * with other JavaScript code.
 *
 * @singleton
 */
var Phorum = {

    /**
     * @property library_version
     *
     * <p>
     *   The version of this library.
     * </p>
     * <p>
     *   This can be used by other code to check if the correct version of
     *   the library is loaded. The library_version object contains
     *   two properties:
     *   <div class="mdetail-params"><ul>
     *     <li><b>major:</b> major version, incremented when
     *         backward compatibility is broken</li>
     *     <li><b>minor:</b> minor version, incremented when
     *         new functionality is implemented</li>
     *   </ul></div>
     * </p>
     *
     * @var Object
     */
    library_version: {
        major: 1,
        minor: 1
    },

    /**
     * @property debuglevel
     *
     * Configures the debug level for {@link #debug Phorum.debug()}.
     * Set this variable to a higher number for more debugging information.
     * A value of 0 (zero) will suppress all debug output.
     *
     * @var Integer
     */
    debuglevel: 0,

    /**
     * @property http_path
     *
     * The base URL for the forum. JavaScript code can use this URL to build 
     * URLs for this forum.
     *
     * @var String
     */
    http_path: 'http://26240.foren.mysnip.de/'
};
/**
 * @class Phorum.jQuery
 *
 * <p>
 *   The jQuery object for the jQuery library that Phorum loads is
 *   stored in Phorum.jQuery. 
 * </p>
 * <p>
 *   A short length reference to the jQuery object is additionally stored
 *   in the global variable <b>$PJ</b> instead of the default <b>$</b>
 *   jQuery variable.
 * </p>
 * <p>
 *   This is a no-conflict jQuery reference for use by Phorum code
 *   (see the jQuery documentation for jQuery.noConflict()).
 *   By using a no-conflict library, our jQuery library will not conflict
 *   with existing javascript libraries (e.g. when Phorum is embedded in
 *   another application that uses a javascript library or when a module is
 *   loaded that also loads a javascript library of its own).
 * </p>
 * <p>
 *   If you want to use the regular <b>$</b> jQuery reference in your
 *   functions, then you could use a construction like this:
 * </p>
 * <p><pre><code>
function yourfunction() {
  var $ = Phorum.jQuery;
  ...
  ...
}
 * </code></pre></p>
 *
 * @singleton
 */
var $PJ = Phorum.jQuery = jQuery.noConflict();

/**
 * <p>
 *   Uses the console.debug() method (originally introduced by the Firebug
 *   plugin for Firefox) for logging debugging information.
 *   When no console is available, then no logging is done at all.
 * </p>
 * <p><pre><code>
Phorum.debuglevel = 10;

Phorum.debug('Hello, world!', 5); // <-- this will output the debug message
Phorum.debug('Bye, world!', 11);  // <-- silent, Phorum.debuglevel is too low
 * </code></pre></p>
 *
 * @param {String} message
 *     The message to write to the debug log.
 *
 * @param {Integer} level (optional)
 *     The debug level of the message. Only messages that have a
 *     debugging level equal to or below the configuration variable
 *     {@link #debuglevel Phorum.debuglevel} are logged.
 *     If no debug level is provided, then level = 1 is implied.
 *
 * @param {mixed} data (optional)
 *     Optional argument containing a variable which' contents should be
 *     logged. The data will be written to the debug log as a JSON structure.
 *
 * @member Phorum debug
 */
Phorum.debug = function (message, level, data)
{
    level = parseInt(level, 10);
    if (isNaN(level)) {
        level = 1;
    }
    if (level < 0) {
        level = 1;
    }

    if (Phorum.debuglevel && Phorum.debuglevel >= level &&
        console !== undefined && console.debug instanceof Function)
    {
        if (data !== undefined) {
            data = ': ' + JSON.stringify(data);
        } else {
            data = '';
        }

        console.debug('Phorum debug [' + level + '] ' + message + data);
    }
};

/**
 * A class extension system. Example usage:
 *
 * <p><pre><code>
// Constructor for Parent:
var Parent = Phorum.extend(function (args) {
    // Constructor code
    ...
}, {
    // Properties and methods to add to the prototype of Parent.
    prop: 'parent property',
    func: function () { alert('cool'); }
    ...
});

// Constructor for Child, extending on Parent and applying
// extra prototype properties for the Child:
var Child = Phorum.extend(Parent, function (args) {
    // Constructor code
    this.parentConstructor(args); // <-- this one must be called
    ...
}, {
    childprop: 'child property',
    childfunc: function () { alert('nice'); }
});
 * </code></pre></p>
 *
 * @param {Function} base
 *   The base constructor. 
 *
 * @param {Object/Function} extension
 *   When this argument is an object, then all properties from the
 *   object will be applied to the prototype of the base constructor.
 *   When this argument is a function, then that function will be
 *   setup as a child for the base constructor.
 *
 * @param {Object} child_prototype (optional)
 *   When extending a child class, then this third parameter can be
 *   used to directly provide an object which' properties will be
 *   applied to the prototype of the child class.
 *
 * @member Phorum extend
 */
Phorum.extend = function (base, extension, child_prototype)
{
    var p;

    if (extension instanceof Function)
    {
        extension.prototype.parentConstructor = base;

        for (p in base.prototype) {
            if (true) { // keep jslint happy
                extension.prototype[p] = base.prototype[p];
            }
        }

        if (child_prototype) {
            for (p in child_prototype) {
                if (true) { // keep jslint happy
                    extension.prototype[p] = child_prototype[p];
                }
            }
        }

        return extension;
    }
    else
    {
        for (p in extension) {
            if (true) { // keep jslint happy
                base.prototype[p] = extension[p];
            }
        }
        return base;
    }
};

/**
 * Trim whitespace from the start and end of a string.
 *
 * <p><pre><code>
var a = "\t\n\t  string with mad whitespace \t\t\n\n\n  ";
var b = Phorum.trim(a);
>>> b now contains "string with mad whitespace"

var c = Phorum.trim(a, true);
>>> c[0] contains "string with mad whitespace"
>>> c[1] contains "\t\n\t  "
>>> c[2] contains "\t\t\n\n\n  "

 * </code></pre></p>
 *
 * @param {String} str
 *   The string from which to trim the surrounding whitespace.
 * @param {Boolean} return_trimmed (optional)
 *   If true, then this method will return three values in an array:
 *   the trimmed string, the whispace that was trimmed from the
 *   left and the whitespace that was trimmed from the right.
 *   If false (the default), then only the trimmed string will
 *   be returned.
 * @return {mixed} result
 *   Either an array or a string is returned, depending on the
 *   return_trimmed parameter.
 *
 * @member Phorum trim
 */
Phorum.trim = function (str, return_trimmed)
{
    var trim_pre = '';
    var trim_post = '';

    // Trim whitespace from end of string.
    for (;;) {
        var lastchar = str.substring(str.length - 1, str.length);
        if (lastchar === ' '  || lastchar === '\r' ||
            lastchar === '\n' || lastchar === '\t') {
            trim_post = lastchar + trim_post;

            str = str.substring(0, str.length - 1);
        } else {
            break;
        }
    }

    // Trim whitespace from start of string.
    for (;;) {
        var firstchar = str.substring(0, 1);
        if (firstchar === ' '  || firstchar === '\r' ||
            firstchar === '\n' || firstchar === '\t') {
            trim_pre += firstchar;
            str = str.substring(1);
        } else {
            break;
        }
    }

    if (return_trimmed) {
        return [ str, trim_pre, trim_post ];
    } else {
        return str;
    }
};
// ----------------------------------------------------------------------
// Ajax communication
// ----------------------------------------------------------------------

/**
 * @class Phorum.Ajax
 * @extends Object
 *
 * The Phorum.Ajax singleton provides tools for handling Phorum Ajax
 * communication. Ajax calls are done to the ajax.php script of the Phorum
 * system, which will handle the call and return the result.
 *
 * @singleton
 */
Phorum.Ajax =
{
    /**
     * @property url
     *
     * The URL that we use to access the Phorum Ajax layer script.
     * Note that the 'callback=?' part in this URL is a special placeholder
     * for jQuery's JSONP implementation (Phorum uses JSONP as the Ajax
     * call method).
     *
     * @var String
     */
    url: 'http://26240.foren.mysnip.de/ajax.php?callback=?',

    /**
     * <p>
     *   Execute an Ajax Phorum call.
     * </p>
     * <p>
     *   This method is also available through the alias
     *   {@link Phorum#call Phorum.call()}.
     * </p>
     *
     * @param {Object} req
     *   <p>
     *     The request object. This is object needs at least the property
     *     <b>"call"</b>. This property holds the name of the Ajax call that
     *     must be handled by the ajax.php script on the server.
     *   </p>
     *   <p>
     *     When the <b>"cache_id"</b> property is set, then the Phorum.Cache is
     *     used for caching the call result data. It is the task of the
     *     caller to make sure that the provided cache_id is
     *     <em>globally unique</em>.
     *   </p>
     *   <p>
     *     The <b>"onFailure"</b> property can be set for handling Ajax errors.
     *     Its value should be a function that handles the error that was
     *     returned by the Ajax call. This function will be called with the
     *     error message as its argument.
     *   </p>
     *   <p>
     *     The <b>"onSuccess"</b> property can be set for handling a successful
     *     Ajax call. Its value should be a function that handles the data
     *     that was returned by the Ajax call. This function will be called
     *     with two arguments:
     *     <ul>
     *       <li>the data that was returned by the Ajax call</li>
     *       <li>whether (true) or not (false) the result was returned
     *           from cache</li>
     *     </ul>
     *   </p>
     *   <p>
     *     All other properties will be sent to the ajax.php script as call
     *     arguments. What call arguments are available depends on the
     *     Phorum Ajax call that is called. Check the documentation of
     *     the call for details.
     *   </p>
     *
     *   <b>Example code:</b>
     *   <p><pre><code>
Phorum.Ajax.call({

   call: 'foo',
   arg1: 'bar',
   arg2: 'baz',
   cache_id: 'foo-bar-bar-id',

   onSuccess: function (data, from_cache) {
       alert('Call successful, data loaded ' +
             (from_cache ? ' from cache' : ' from server'));
   },

   onFailure: function (error) {
       alert('Call failed: ' + error);
   }
})
     *   </code></pre></p>
     */
    call: function (req)
    {
        // Check if a call was provided in the request data.
        if (! req.call) {
            Phorum.debug(
                'Phorum.Ajax.call() error: missing property ' +
                '"call" for the request object', 1, req
            );
            if (req.onFailure) {
                req.onFailure(
                    'Phorum.Ajax.call() error: missing property ' +
                    '"call" for the request object.',
                    -1, null
                );
            }
            return;
        }

        // If the req.cache_id property is set for the request, then check
        // if the data for the request is already available in the
        // local cache. If yes, then return the data immediately.
        if (req.cache_id) {
            var data = Phorum.Cache.get(req.cache_id);

            if (data !== null) {
                Phorum.debug(
                    'Phorum.Ajax.call calls onSuccess with cached data ' +
                    'for cache_id "' + req.cache_id + '"', 4, data
                );
                if (req.onSuccess) {
                    // true = data retrieved from cache.
                    req.onSuccess(data, true);
                }
                return;
            }
        }

        // Create a filtered argument list (without functions and control args).
        var args = {};
        for (var key in req) {
            if (typeof req[key] !== 'function' && key !== 'cache_id') {
                // Convert complex arguments to JSON, otherwise they will
                // not survive the translation to a JSONP request URL.
                if (typeof(req[key]) === 'object') {
                    args[key] = '$JSON$' + JSON.stringify(req[key]);
                } else {
                    args[key] = req[key];
                }
            }
        }

        // Notify the start of the request loading stage.
        Phorum.debug('Phorum.Ajax.call calls server with args', 5, args);
        if (req.onRequest) {
            req.onRequest(args);
        }

        $PJ.getJSON(Phorum.Ajax.url, args, function (answer)
        {
            Phorum.debug(
                'Phorum.Ajax.call receives answer from server', 5, answer
            );
            if (typeof answer.error === 'undefined')
            {
                // If the req.cache_id property is set, then cache the results.
                if (req.cache_id) {
                    Phorum.Cache.put(req.cache_id, answer);
                }

                // false = data not retrieved from cache.
                Phorum.debug(
                    'Phorum.Ajax.call calls onSuccess with', 4, answer
                );
                if (req.onSuccess) {
                    req.onSuccess(answer, false);
                }
            }
            else
            {
                Phorum.debug(
                    'Phorum.Ajax.call calls onFailure with', 4, answer.error
                );
                if (req.onFailure) {
                    req.onFailure(answer.error);
                }
            }
        });
    },

    /**
     * <p>
     *   Parse out javascript blocks from the data and eval them.
     * </p>
     * <p>
     *   This can be used to process javascript code that is embedded in
     *   dynamically retrieved blocks of HTML code. Adding this data to 
     *   the page (e.g. by using document.write or innerHTML) would not
     *   evaluate the javascript code. Browsers only parse and evaluate
     *   javascript code that is retrieved at page load time.
     * </p>
     *
     * @param {String} data
     *   The data from which to parse the javascript blocks.
     */
    evalJavaScript: function (data)
    {
        var cursor = 0;
        var start  = 1;
        var end    = 1;

        while (cursor < data.length && start > 0 && end > 0) {
            start = data.indexOf('<script', cursor);
            end   = data.indexOf('</script', cursor);
            if (end > start && end > -1) {
                if (start > -1) {
                    var res = data.substring(start, end);
                    start = res.indexOf('>') + 1;
                    res = res.substring(start);
                    if (res.length !== 0) {
                        eval(res);
                    }
                }
                cursor = end + 1;
            }
        }
    }
};

// ----------------------------------------------------------------------
// Caching
// ----------------------------------------------------------------------

/**
 * @class Phorum.Cache
 * @extends Object
 *
 * The Phorum.Cache singleton is a caching layer that can be used by Phorum
 * JavaScript code for handling client side data caching. The cache is a
 * simple key/value pair based data storage. It supports TTLs for automatically
 * expiring cached data.
 *
 * @singleton
 */
Phorum.Cache =
{
    /**
     * @property ttl
     *
     * The default TTL in seconds for cache entries. A value of 0 (zero)
     * can be used to cache the data indefinitely (or until a
     * {@link #purge purge()} is done on the cached data).
     *
     * @type Integer
     */
    ttl: 0,

    /**
     * @property data
     *
     * The cache storage.
     *
     * @type Object
     * @private
     */
    data: {},

    /**
     * Store data in the cache.
     *
     * @param {String} cache_id
     *   This id is used as the key under which to store the data
     *   in the cache. Make sure that you use globally unique cache id's
     *   (e.g. instead of "1234", it is advised to use something like
     *   "myapp-user-1234" to prevent collissions).
     * @param {mixed} data
     *   The data to store in the cache.
     * @param {Integer} ttl (optional)
     *   The TTL (time to live) in seconds for the cached data. If no TTL
     *   is provided or if it is not recognized as a valid number, then the
     *   default {@link #ttl Phorum.Cache.ttl} is used instead.
     */
    put: function (cache_id, data, ttl)
    {
        // Determine the TTL to use for the cache entry.
        if (ttl === undefined) {
            ttl = Phorum.Cache.ttl;
        } else {
            ttl = parseInt(ttl, 10);
            if (ttl === 'NaN') {
                ttl = Phorum.Cache.ttl;
            }
        }

        // Determine the expire time. When ttl = 0, then
        // no expiration is done at all.
        var expire_t = 0;
        if (ttl !== 0) {
            var d = new Date();
            expire_t = d.getTime() + 1000 * ttl;
        }

        // Store the data in the cache.
        Phorum.Cache.data[cache_id] = [data, expire_t];
    },

    /**
     * Retrieve data from the cache.
     *
     * @param {String} cache_id
     *   The key under which to the data was stored in the cache
     *   using {@link #put Phorum.Cache.put()}.
     *
     * @return mixed
     *   In case no cache data was found or the cache data expired,
     *   then null is returned. Otherwise, the cached data is returned.
     */
    get: function (cache_id)
    {
        // Check if there is a cache entry available.
        if (typeof Phorum.Cache.data[cache_id] === 'undefined') {
            Phorum.debug(
                'Phorum cache miss for cache_id "' + cache_id + '"', 5
            );
            return null;
        }
        var c = Phorum.Cache.data[cache_id];

        // TTL set? Then check if the cache entry hasn't expired yet.
        if (c[1] !== 0) {
            var d = new Date();
            var now = d.getTime();
            if (now > c[1]) {
                Phorum.debug(
                    'Phorum cache expired for cache_id "' + cache_id + '"', 5
                );
                return null;
            }
        }

        Phorum.debug('Phorum cache hit for cache_id "' + cache_id + '"', 5);
        return c[0];
    },

    /**
     * Purge a single cached item or the full cache.
     *
     * @param {String} cache_id (optional)
     *   When this parameter is provided, then the cache data for
     *   the cache_id is purged from the cache. Otherwise, the full
     *   cache is purged.
     */
    purge: function (cache_id)
    {
        if (cache_id !== undefined) {
            Phorum.Ajax.cache[cache_id] = null;
        } else {
            Phorum.Ajax.cache = {};
        }
    }
};

// ----------------------------------------------------------------------
// User Interface
// ----------------------------------------------------------------------

/**
 * @class Phorum.UI
 * @extends Object
 *
 * Phorum.UI is a singleton that provides user interface handling methods
 * and acts as the namespace for storing user interface related classes.
 *
 * @singleton
 */
Phorum.UI = { };

/**
 * <p>
 *   Retrieve the width of the scrollbar in the browser.
 * </p>
 * <p>
 *   This implements a reliable way of determining the width
 *   of the scrollbar. One cannot rely on a predefined width,
 *   because this width differs per OS and browser.
 * </p>
 * <p><pre><code>
Phorum.UI.scrollbarwidth();
>>> "15px"
Phorum.UI.scrollbarwidth(true);
>>> 15
 * </code></pre></p>
 *
 * @param {Boolean} as_integer
 *   When true (default is false), then the integer pixel width is
 *   returned (e.g. 10). Otherwise, a formatted CSS width is returned
 *   (e.g. "10px").
 *
 * @return {Integer} width
 *   The width of the scrollbar in pixels.
 *
 * @member Phorum.UI scrollbarwidth
 */
Phorum.UI.scrollbarwidth = function (as_integer)
{
    if (Phorum.UI.scrollbarwidth.width === undefined) {
        var $outer = $PJ('<div/>').css({
            width    : '100px',
            height   : '100px',
            position : 'absolute',
            top      : '-200px',
            left     : '-200px'
        });
        var $inner = $PJ('<div/>').css({
            height   : '100px'
        });
        $outer.append($inner);
        $PJ('body').append($outer);

        var without_scrollbar = $inner.innerWidth();
        $outer.css('overflow-y', 'scroll');
        var with_scrollbar = $inner.innerWidth();
        $outer.remove();

        Phorum.UI.scrollbarwidth.width = (without_scrollbar - with_scrollbar);
    }

    return Phorum.UI.scrollbarwidth.width + (as_integer ? 0 : 'px');
};

/**
 * @class Phorum.UI.Element
 * 
 * <p>
 *   This class is a base class that is used for building objects that
 *   can manage page elements.
 * </p>
 *
 * @constructor
 *   Create a new Phorum.UI.Element object.
 * @param {String/Array/jQuery} selector (optional)
 *   This parameter determines the page element to wrap. This is one of:
 *   <div class="mdetail-params"><ul>
 *     <li>A jQuery selector to use for looking up the element. This
 *         must result in exactly one matching element.</li>
 *     <li>An array of jQuery selectors. Each selector is tried in sequence.
 *         The first selector that results in exactly one matching element
 *         will be used. This method allows to match multiple selectors for
 *         backward compatibility.</li>
 *     <li>A jQuery object. This object must contain exactly one element.</li>
 *     <li>When this parameter is omitted, then the selectors from the
 *         {@link #selectors selectors} configuration property will be
 *         used instead.</li>
 *   </ul></div>
 */
Phorum.UI.Element = Phorum.extend(

    // Constructor ==========================================================

    function (selectors)
    {
        // jQuery object.
        if (selectors instanceof Object)
        {
            if (selectors.length !== 1) {
                throw this.className + ' constructor: the selectors ' +
                      'parameter must match exactly one DOM element when ' +
                      'a jQuery object is provided.';
            }

            this.object  = selectors[0];
            this.$object = selectors;
            this.$       = selectors;
            return;
        }

        // jQuery selectors.
        selectors = (selectors === undefined || selectors === null) ?
                    this.selectors :
                    $PJ.isArray(selectors) ? selectors : [ selectors ];

        // Lookup the first selector for which a unique element can be found.
        for (var i = 0; i < selectors.length; i++)
        {
            var selector = selectors[i];

            Phorum.debug(
                this.className + ' constructor: lookup element for "' +
                selector + '"', 10
            );

            var $tmp = $PJ(selector);

            if ($tmp.length === 1) {
                Phorum.debug(
                    this.className + ' constructor: found unique element for ' +
                    '"' + selector + '"', 10
                );
                this.$object = $tmp;
                this.$       = $tmp;
                this.object  = $tmp[0];
                return;
            } else {
                Phorum.debug(
                    this.className + ' constructor: number of elements for ' +
                    '"' + selector + '": ' + $tmp.length, 10
                );
            }
        }

        throw this.className + ' constructor: no object found for ' +
              'selectors: ' + selectors.join(', ');
    },

    // Prototype ============================================================

    {
        /**
         * @property className
         *
         * The name of this class, for easy reference.
         * Derived classes must override this property.
         *
         * @var String
         * @private
         */
        className: 'Phorum.UI.Element',

        /**
         * @property isElement
         *
         * This property can be used as an easy way to check if an object
         * is based on this class. JavaScript's instanceof does not support
         * checking object inheritance.
         *
         * @var {String}
         */
        isElement: true,

        /**
         * @property selectors
         *
         * The array of jQuery selectors to search for.
         * Derived classes can override this property to set the default
         * list of selectors to check.
         *
         * @var Array
         * @private
         */
        selectors: [ ],

        /**
         * @property object
         *
         * A reference to the managed DOM element.
         *
         * @var Object
         * @private
         */
        object: null,

        /**
         * @property $object
         *
         * A reference to the jQuery wrapper object for the managed DOM element.
         *
         * @var jQuery
         */
        $object: null,

        /**
         * A shortcut alias for the {@link #$object $object} property.
         * It contains the jQuery wrapper for the managed element.
         *
         * @return {jQuery} $object
         */
        $: null,

        /**
         * Can be used to check if the constructor found an element to manage.
         *
         * @return {Boolean} found
         *     True in case an element was found, false otherwise.
         */
        found: function () {
            return this.$object ? true : false;
        },

        /**
         * Move the focus to the element.
         */
        focus: function ()
        {
            this.$object.focus();
        },

        /**
         * For form field elements, retrieve or set the form field value.
         * When retrieving a value, whitespace is trimmed from it.
         *
         * @param {mixed} value (optional)
         *   The value to set. Omit this parameter to retrieve the
         *   field value.
         *
         * @return {String} value
         *   The trimmed form field value.
         */
        value: function (value)
        {
            if (value !== undefined) {
                this.$object.val(value);
            }

            value = this.$object.val();
            if (value === null || value === undefined) {
                value = '';
            } else {
                value = Phorum.trim(value);
            }

            return value;
        }
    }
);

/**
 * @class Phorum.UI.TextElement
 * @extends Phorum.UI.Element
 * 
 * <p>
 *   This class can be used to access and manipulate text input fields
 *   (textarea, input type="text"). This class mainly serves as a
 *   base class. 
 * </p>
 * @constructor
 *   Create a new Phorum.UI.TextElement object.
 * @param {String/Array} selectors (optional)
 *   The jQuery selector or selectors to use for looking up the element to
 *   manage. The first selector that matches a single element will be used.
 *   When no selectors are provided, then the selectors from the
 *   {@link #selectors selectors} configuration property will be used instead.
 */
Phorum.UI.TextElement = Phorum.extend(Phorum.UI.Element,

    // Constructor ==========================================================

    function (selectors) {

        this.className = 'Phorum.UI.TextElement';
        this.parentConstructor(selectors);
    },

    // Prototype ============================================================

    {
        /**
         * @property isTextElement
         *
         * This property can be used as an easy way to check if an object
         * is based on this class. JavaScript's instanceof does not support
         * checking object inheritance.
         *
         * @var {String}
         */
        isTextElement: true,

        /**
         * Add tags (e.g. BBcode tags) to the text element.
         * <p>
         *   If some text is selected, then place the tags around the
         *   selected text. If no text is selected and a prompt_str is
         *   provided, then prompt the user for the data to place inside
         *   the tags.
         * </p>
         * <p><pre><code>
var elt = new Phorum.UI.TextElement();
elt.addTags('[b]', '[/b]');
elt.addTags('[url]', '[/url]', 'Please, enter the URL');
         * </code></pre></p>
         *
         * @param {String} pre
         *   The tag to put in front of the selection or manual input.
         * @param {String} post
         *   The tag to put after the selection or manual input.
         */
        addTags: function (pre, post, prompt_str)
        {
            var text;
            var pretext;
            var posttext;
            var range;
            var res;

            if (pre === undefined || pre === null) {
                pre = '';
            }
            if (post === undefined || post === null) {
                post = '';
            }

            // Store the current scroll offset, so we can restore it after
            // adding the tags to its contents.
            var offset = this.object.scrollTop;

            if (this.object.setSelectionRange)
            {
                // Get the currently selected text.
                pretext = this.object.value.substring(
                    0, this.object.selectionStart);
                text = this.object.value.substring(
                    this.object.selectionStart, this.object.selectionEnd);
                posttext = this.object.value.substring(
                    this.object.selectionEnd, this.object.value.length);

                // Prompt for input if no text was selected and a prompt is set.
                if (text === '' && prompt_str) {
                    text = prompt(prompt_str, '');
                    if (text === null) {
                        return;
                    }
                }

                // Strip whitespace from text selection and move it to the
                // pre- and post.
                res = Phorum.trim(text, true);
                text = res[0];
                pre = res[1] + pre;
                post = post + res[2];

                this.object.value = pretext + pre + text + post + posttext;

                // Reselect the selected text.
                var cursorpos1 = pretext.length + pre.length;
                var cursorpos2 = cursorpos1 + text.length;
                this.object.setSelectionRange(cursorpos1, cursorpos2);
                this.object.focus();
            }
            else if (document.selection) /* MSIE support */
            {
                // Get the currently selected text.
                this.focus();
                range = document.selection.createRange();

                // Fumbling to work around newline selections at the end of
                // the text selection. MSIE does not include them in the
                // range.text, but it does replace them when setting range.text
                // to a new value :-/
                var virtlen = range.text.length;
                if (virtlen > 0) {
                    while (range.text.length === virtlen) {
                        range.moveEnd('character', -1);
                    }
                    range.moveEnd('character', +1);
                }

                // Prompt for input if no text was selected and a prompt is set.
                text = range.text;
                if (text === '' && prompt_str) {
                    text = prompt(prompt_str, '');
                    if (text === null) {
                        return;
                    }
                }

                // Strip whitespace from text selection and move it to the
                // pre- and post.
                res = Phorum.trim(text, true);
                text = res[0];
                pre = res[1] + pre;
                post = post + res[2];

                // Add pre and post to the text.
                range.text = pre + text + post;

                // Reselect the selected text. Another MSIE anomaly has to be
                // taken care of here. MSIE will include carriage returns
                // in the text.length, but it does not take them into account
                // when using selection range moving methods :-/
                // By setting the range.text before, the cursor is now after
                // the replaced code, so we will move the start and the end
                // back in the text.
                var mvstart = post.length + text.length -
                              ((text + post).split('\r').length - 1);
                var mvend   = post.length +
                              (post.split('\r').length - 1);
                range.moveStart('character', -mvstart);
                range.moveEnd('character', -mvend);
                range.select();
            }
            else /* Support for really limited browsers, e.g. MSIE5 on MacOS */
            {
                this.object.value = this.object.value + pre + post;
            }

            this.object.scrollTop = offset;
        },

        /**
         * Used to store the tex element's selection range.
         *
         * @private
         */
        selectionRange: null,

        /**
         * <p>
         *   Store the active selection range of the text element.
         *   This can be used to restore the selection range at a later time
         *   using {@link #restoreSelection restoreSelection()}.
         * </p>
         * <p>
         *   Currently, this will only act for MSIE. It was implemented because
         *   MSIE sometimes clears the selection range in the text element when
         *   clicking in a popup window.
         * </p>
         */
        storeSelection: function ()
        {
            // This rules out non-MSIE browsers, which do not need to store
            // the selecton range.
            if (this.object.setSelectionRange || ! document.selection) {
                return;
            }

            this.object.focus();
            this.selectionRange = document.selection.createRange();
        },

        /**
         * <p>
         *   Restore a textarea selection range that was previously stored
         *   using {@link #restoreSelection storeSelection()}.
         * </p>
         */
        restoreSelection: function ()
        {
            if (this.selectionRange !== null) {
                this.selectionRange.select();
                this.selectionRange = null;
            }
        }
    }
);

/**
 * @class Phorum.UI.Editor
 * @extends Phorum.UI.Element
 * 
 * <p>
 *   This class can be used to access and manipulate the
 *   posting editor in Phorum.
 * </p>
 * <p>
 *   By default, the constructor will automatically search the page for a
 *   div element with id "post". If you need more control over the selector(s)
 *   to use for the editor lookup, then you can provide a jQuery selector or
 *   selector array as the argument for the constructor.
 * </p>
 * <p><pre><code>
// Retrieve the editor using the built-in selector.
var e1 = new Phorum.UI.Editor();
e1.getBody().focus();

// Retrieve the editor using a custom jQuery selector.
var e2 = new Phorum.UI.Editor('#phorum #myeditor');
t2.getSubject().addTags(':-)');

// It is possible to access the jQuery wrapper object for the editor.
t2.$object.hide();
// Or even shorter.
t2.$.hide();
 * </code></pre></p>
 *
 * @constructor
 *   Create a new Phorum.UI.Editor object.
 * @param {String/Array} selectors (optional)
 *   The jQuery selector or selectors to use for looking up the editor element.
 *   The first selector that matches a single element will be used.
 *   When no selectors are provided, then the built-in selector will be
 *   used by default.
 */
Phorum.UI.Editor = Phorum.extend(Phorum.UI.Element,

    // Constructor ==========================================================

    function (selectors) {

        this.className = 'Phorum.UI.Editor';

        this.selectors = [
            'div.PDDiv #phorum-post-form',
            '#phorum #post'   // Phorum 5.2+, no need to support older versions
        ];

        this.parentConstructor(selectors);

        /**
         * @property subject
         *
         * A reference to the subject element in the editor.
         * 
         * @var Phorum.UI.TextElement
         */
        this.subject = this.getField('subject');

        /**
         * @property body
         *
         * A reference to the body element in the editor.
         * 
         * @var Phorum.UI.TextElement
         */
        this.body = this.getField('body');
    },

    // Prototype ============================================================

    {
        /**
         * Used by the focus() method to automatically find a field to focus.
         *
         * @private
         */
        focusFields: [
            'author',
            'subject',
            'body'
        ],

        /**
         * Focus the editor. By default, this method will move the focus in the
         * editor to the first logical input field. By providing a field name
         * as the argument, the exact field to focus can be controlled.
         *
         * @param {String} field_name (optional)
         *   The name of the form field to focus. If not provided, then
         *   Phorm.UI.Editor will automatically pick a logical field to focus.
         */
        focus: function (field_name)
        {
            // No field provided? Move the focus to the author, subject or
            // message body field. The first existing and empty field gets
            // the focus. If none of the fields is empty, then the body
            // is focused by default.
            if (field_name === undefined)
            {
                field_name = 'body';
                for (var i = 0; i < this.focusFields.length; i++)
                {
                    // Retrieve the field from the editor.
                    field_name = this.focusFields[i];
                    var f = this.getField(this.focusFields[i]);

                    // If this field is empty, then use this one for focusing.
                    var value = f.$.val();
                    value = Phorum.trim(value);
                    if (value === '') {
                        break;
                    }
                }
            }

            this.getField(field_name).$.focus();
        },

        /**
         * A cache that holds the Phorum.UI.Element objects that were
         * retrieved using getField().
         * 
         * @private
         */
        fields: { },

        /**
         * Retrieve the Phorum.UI.Element wrapper for a form field within
         * this editor.
         *
         * @param {String} field_name
         *   The name of the form field to retrieve.
         * @return {Phorum.UI.Element} field
         *   The Phorum.UI.Element object for the form field if exactly one
         *   element was found.
         */
        getField: function (field_name)
        {
            // Check the lookup cache.
            if (this.fields[field_name] === undefined)
            {
                // Look up the field by its name.
                var selector = '*[name=' + field_name + ']';
                var $fields = this.$object.find(selector);

                // If we found one or more fields, then create a
                // Phorum.UI.Element wrapper. When more than one field is found,
                // then the last one is used. This is to accommodate for the
                // fact that we add all fields as hidden fields to the editor
                // form and that we add normal form fields to override the
                // hidden fields.
                if ($fields.length > 0)
                {
                    var field;
                    var $f = $fields.last();

                    // For text input fields, we use a different base class,
                    // which allows us to do text manipulations on the data.
                    if ($f.is('textarea') ||
                        ($f.is('input') && $f.attr('type') === 'text')) {
                        field = new Phorum.UI.TextElement($f);
                    }
                    else {
                        field = new Phorum.UI.Element($f);
                    }

                    this.fields[field_name] = field;
                }
                // If no fieldwas found, then we don't accept the result.
                // We always expect there to be exactly one matching field.
                else {
                    throw this.className + '.getField(): no matching form ' +
                    'field found for name=' + field_name;
                }
            }

            return this.fields[field_name];
        }
    }
);

// Add base CSS code for Phorum.UI.BusyMarker the page. It is inserted
// at the beginning of the head section, so template CSS code can be
// used to override the basic style.
$PJ(document).ready(function () {
    $PJ('<style type="text/css">' +
        '.phorum_busy_marker ' +
        '{' +
            'position: fixed; ' +
            'top: 0; ' +
            'left: 0; ' +
            'border: 1px solid #aa5; ' +
            'background: #ff9; ' +
            'padding: 0.2em 1em; ' +
            'z-index: 1000; ' +
        '}' +
        '</style>').prependTo($PJ('head'));
});

/**
 * @class Phorum.UI.BusyMarker
 * <p>
 *   The Phorum.UI.BusyMarker singleton implements a busy marker for the
 *   Phorum UI. This marker is used for notifying the user about running async
 *   calls to the server (or other async activities).
 * </p>
 * <p>
 *   The default implementation will show a message box at a fixed position
 *   in the top left of the page, notifying the user about the number of
 *   pending actions. This box can be styled by CSS through the
 *   phorum_busy_marker class. For example:
 * </p>
 * <p><pre><code>
#phorum .phorum_busy_marker {
    border: 1px solid black;
    background: #ddd;
    color: white;
}
 * </code></pre></p>
 * <p>
 *   The template author can even go a step further than changing the CSS
 *   styling alone by fully overriding the Phorum.UI.BusyMarker.render()
 *   method through the template javascript code. This method can check the
 *   {@link #count Phorum.UI.BusyMarker.count} property to find out how many
 *   busy tasks there are and render a custom busy marker accordingly.
 * </p>
 *
 * @singleton
 */
Phorum.UI.BusyMarker =
{
    /**
     * @property className
     * @private
     */
    className: 'Phorum.UI.BusyMarker',

    // The public interface of the busy marker ==============================

    /**
     * @property count
     *
     * The number of pending actions. This property is updated by the
     * {@link #increment increment()} and {@link #decrement decrement()}
     * methods.
     *
     * @var Integer
     */
    count : 0,

    /**
     * Increment the number of pending actions, e.g. when starting
     * an Ajax call. After incrementing the counter, the busy marker
     * will automatically render.
     */
    increment: function ()
    {
        this.count ++;
        Phorum.debug(
            this.className + ': counter incremented to: ' + this.count, 10);

        this.render();
    },

    /**
     * Decrement the number of pending actions, e.g. when an Ajax reply
     * is received. After decrementing the counter, the busy marker is
     * automatically updated or cleaned up when the counter reached zero.
     */
    decrement: function ()
    {
        this.count --;
        Phorum.debug(
            this.className + ': Busy marker counter decremented to: ' +
            this.count, 10);

        if (this.count < 0) {
            throw 'Yoda.UI.BusyMarker: the busy counter went below zero! ' +
                  'The decrement() method was called more often than the ' +
                  'decrement() method. This should not happen.';
        }
        this.render(); 
    },

    // Specific code for rendering the default busy marker ==================

    // The following code can be overridden by template
    // JavaScript code to implement a different marker.

     /**
      * @property $box
      *
      * Used to store our $box jQuery object
      *
      * @var Object
      * @private
      */
    $box: null,

    /**
     * <p>
     *   Render the busy marker or clean up the existing busy marker when the
     *   busy {@link #count counter} has reached zero.
     * </p>
     * <p>
     *   This method is automatically called from the
     *   {@link #increment increment()} and {@link #decrement decrement()}
     *   methods, so there should be no need to actively call it yourself.
     * </p>
     * <p>
     *   When a different busy marker is required for a template, then this
     *   method (Phorum.UI.BusyMarker.render()) can be overriden from the
     *   template's JavaScript code to alter the rendering to whatever is
     *   appropriate for the template.
     * </p>
     */
    render: function ()
    {
        // If no actions are pending, clear up the busy message after a
        // little 100ms pause (to keep the busy message from being
        // irritatingly flashy on screen).
        if (this.count === 0) {
            Phorum.debug(this.className + ': delete the busy marker', 10);
            Phorum.UI.BusyMarker.$box.
              stop(true, false).show().delay(100).fadeOut(1000);
            return;
        }

        // Create the notify box if it is not available yet.
        if (this.$box === null)
        {
            Phorum.debug(this.className + ': render the busy marker', 10);

            // Create the box.
            this.$box = $PJ('<div class="phorum_busy_marker"/>');

            // Add the box to the page. We add it to the #phorum wrapper and
            // not to the page body to make it inherit CSS styles from #phorum. 
            $PJ('#phorum').prepend(this.$box);
        }

        // 
        // Determine the message to show. 
        var message =
            this.count === 1 ?
            '%count% Aktion in Arbeit ...' :
            '%count% Aktionen in Arbeit ...';

        // Replace %count% in the message with the current action count.
        Phorum.debug(
            this.className + ': set busy marker message: ' + message, 10);
        message = message.replace(/%count%/, this.count);

        // Show the busy marker.
        Phorum.debug(this.className + ': show the busy marker', 10);
        this.$box.html(message);
        this.$box.stop(true, false).css('opacity', 1).show();
    }
};

/**
 * @class Phorum.UI.NewFlags
 * @extends Object
 *
 * <p>
 *   The Phorum.UI.NewFlags singleton implements a framework for handling
 *   newflags in Phorum. It provides features to to handle "mark read" actions
 *   through Ajax communication to the server and to update the user interface
 *   after a "mark read" Ajax call has completed successfully.
 * </p>
 * <p>
 *   For templates to support handling mark new actions through Ajax, they have
 *   to include calls to {@link #markRead Phorum.UI.NewFlags.markRead()} or
 *   the shorter alias {@link Phorum#markRead Phorum.markRead()}.
 * </p>
 * <p>
 *   For updating the user interface after a successful call, a few built-in
 *   actions are provided. See {@link #updateUI updateUI()} for a description
 *   of these. If a template or module author needs support for a type of
 *   action that is not built-in, extra actions can be implemented by
 *   registering a callback through
 *   {@link #registerActionCallback registerActionCallback()}.
 * </p>
 *
 * @singleton
 */
Phorum.UI.NewFlags = {

    /**
     * @property className
     * @private
     */
    className: 'Phorum.UI.NewFlags',

    /**
     * <p>
     *   This is the callback registry. It holds global and action based
     *   callback functions that will be called when a
     *   {@link #markRead Phorum.UI.NewFlags.markRead()} call has been
     *   executed successfully.
     * </p>
     *
     * @private
     */
    callbacks: {
        global: [ ],
        action: { }
    },

    /**
     * <p>
     *   Register a global callback function that has to be called after every
     *   {@link #markRead markRead()} call has been completed successfully.
     * </p>
     * <p>
     *   The registered global callback functions will be called with two
     *   parameters, which identify what messages have been marked read:
     *   <div class="mdetail-params"><ul>
     *     <li><b>mode</b>: "vroots", "forums", "threads" or "messages"</li>
     *     <li><b>item_id</b>: the forum, thread or message id</li>
     *   </ul></div>
     * </p>
     * <p>
     *   <b>Example code:</b>
     * </p>
     * <p><pre><code>
Phorum.UI.NewFlags.registerCallback(function (mode, item_id) {
  alert("Mark read was successful for " + mode + ", id " + item_id);
});
     * </code></pre></p>
     * 
     * @param {Function} callback
     *   The callback function to register.
     *
     * @param {Object} scope (optional)
     *   The scope to use for the callback.
     */
    registerCallback: function (callback, scope)
    {
        if (!(callback instanceof Function)) {
            throw this.className + '.registerCallback(): ' +
                  'the callback must be a function';
        }

        this.callbacks.global.push([callback, scope]);
    },

    /**
     * <p>
     *   Register a callback function for a specific action that has to be
     *   called after a {@link #markRead markRead()} call has been completed
     *   successfully.
     * </p>
     * <p>
     *   The registered action callback functions will be called with two
     *   parameters, which both identify the matching element:
     *   <div class="mdetail-params"><ul>
     *     <li><b>element</b>: the matching DOM-element</li>
     *     <li><b>$element</b>: the jQuery wrapper for the DOM-element</li>
     *   </ul></div>
     * </p>
     * <p>
     *   <b>Example code:</b>
     * </p>
     * <p><pre><code>
In javascript:

function handleCustomAction(elt, $elt) {
    $elt.css('color', 'green');
}

Phorum.UI.NewFlags.registerActionCallback('custom', handleCustomAction);

In template:

<span class="new-flag[custom,10,5,293]">
  this text will turn green when the message is read
</span>
     * </code></pre></p>
     *
     * @param {String} action (optional)
     *   The action for which to register the callback. The action is defined
     *   in the special new-flag[&lt;action&gt;,...] CSS class (see
     *   {@link #updateUI updateUI()} for more info). 
     *
     * @param {Function} callback
     *   The callback function to register.
     *
     * @param {Object} scope (optional)
     *   The scope to use for the callback.
     */
    registerActionCallback: function (action, callback, scope)
    {
        if (!(callback instanceof Function)) {
            throw this.className + '.registerActionCallback(): ' +
                  'the callback must be a function';
        }
        if (this.callbacks.action[action] === undefined) {
            this.callbacks.action[action] = [ ];
        }
        this.callbacks.action[action].push([callback, scope]);
    },

    /**
     * <p>
     *   This method can be called from "mark read" links to handle marking
     *   vroots, forums, threads or messages read through Ajax calls. After the
     *   call has finished successfully, {@link #updateUI updateUI} will be
     *   called to update the user interface.
     * </p>
     * <p>
     *   This method is also available through the alias
     *   {@link Phorum#markRead Phorum.markRead()}.
     * </p>
     * <p>
     *   <b>Example code</b>
     * </p>
     * <p><pre><code>
&lt;a href="http://example.com/index.php?10,markread,0"
   onclick="return Phorum.UI.NewFlags.markRead('forums', 10)"&gt;
    Mark forum read
&lt;/a&gt;
     * </code></pre></p>
     *
     * @param {String} mode
     *     One of "vroots", "forums", "threads" or "messages".
     *
     * @param {Integer} item_id
     *     A vroot, forum, thread or message id (which one to use depends
     *     on the "mode" parameter).
     *
     * @param {Function} callback (optional)
     *     A callback function to call when the operation has been completed.
     *     This function will get true (mark read successful) or false
     *     (mark read failed) as its argument.
     *
     * @param {Object} scope (optional)
     *     The scope to use for the callback.
     *
     * @return boolean false
     *     This method always returns false, which makes it simple to cancel
     *     events (e.g. onclick="return Phorum.UI.NewFlags.markRead(...)")
     */
    markRead: function (mode, item_id, callback, scope)
    {
        // Request busy notification for the user.
        Phorum.UI.BusyMarker.increment();

        var request = {
            'call': 'markread',
            'onSuccess': function (data) {
                Phorum.UI.BusyMarker.decrement();
                Phorum.UI.NewFlags.updateUI(mode, item_id);
                if (callback instanceof Function) {
                    callback.call(scope || this, true);
                }
            },
            'onFailure': function (data) {
                Phorum.UI.BusyMarker.decrement();
                if (callback instanceof Function) {
                    callback.call(scope || this, false);
                }
            }
        };

        // Because the "mode" is dynamic ("vroots", "forums", "threads"
        // or "messages"), we have to assign this property of the request
        // like this.
        request[mode] = [ item_id ];

        Phorum.debug(
            this.className + ': call markread for mode = ' + mode + ', ' +
            'id = ' + item_id, 5
        );

        // Dispatch the Ajax Phorum call.
        Phorum.call(request);

        // So "return Phorum.UI.NewFlags.markRead(...)" can be used to cancel
        // an <a href> click.
        return false;
    },

    /**
     * <p>
     *   Update the user interface after marking messages as read.
     * </p>
     * <p>
     *   This method implements a few built-in actions for updating the
     *   user interface. If a template or module needs custom handling of
     *   mark read events, then the {@link #registerCallback registerCallback()}
     *   and {@link #registerActionCallback registerActionCallback()} methods
     *   can be used to implement custom functions.
     * </p>
     * <p>
     *   <b>Built-in UI update actions:</b>
     * </p>
     * <p>
     *   Below, we will describe the built-in actions that are provided by
     *   Phorum.UI.NewFlags. Linking one of these actions to a page element
     *   is done by assigning a CSS class that looks like:
     *   <pre><code>
new-flag[&lt;action&gt;,&lt;item&gt;]
     *   </code></pre>
     * </p>
     *   The &lt;item&gt; part in here references the item to which the new
     *   flag is linked. The format is:
     *   <pre><code>
&lt;forum id&gt;[, &lt;thread id&gt;[, &lt;message id&gt;]]

&lt &gt = mandatory
[ ] = optional

Examples:
10      = forum 10, for example on the index, where forums are listed
10,5    = forum 10, thread 5, for example on the list, where threads are listed
10,5,84 = forum 10, thread 5, message 85, for example on the read page
     *   </code></pre>
     * Using this notation, a mark read event for thread id 5 would match both
     * "10,5" and "10,5,84".
     * </p>
     * <p>
     *   The &lt;action&gt; part references the action that must be performed
     *   on the element. Below here, the built-in actions are described.
     * </p>
     * <div class="mdetail-params"><ul>
     *   <li>
     *     <b>Action: hide</b>:<br/>
     *     An element that will be hidden when the related item is
     *     marked read.<br/>
     *     In the default Phorum template, this is used for the
     *     red "new" text that is shown for new messages.<br/>
     *     <br/>
     *     Template code:
     *     <pre><code>
&lt;<i>element</i> class="new-flag[hide,&lt;item&gt;]"&gt;
  ... code to hide when marked read ...
&lt;/<i>element</i>&gt;

For example:

&lt;span class="new-flag[hide,10,5,84] new-flag"&gt;new&lt;/span&gt;
     *     </code></pre>
     *   </li>
     *   <li>
     *     <b>Action: css</b>:<br/>
     *     An element, from which the CSS class "new-flag" will be removed and
     *     to which the CSS class "read-flag" will be added when the related
     *     item is marked read.<br/>
     *     In the default Phorum template, this is for example used for the
     *     styling of the subject for new or updated threads on the list page.
     *     New subjects are displayed in a bold font.<br/>
     *     <br/>
     *     Template code:
     *     <pre><code>
&lt;<i>element</i> class="new-flag[css,&lt;item&gt;] new-flag"&gt;
   ... code to style ...
&lt;/<i>element</i>&gt;

For example:

&lt;a href="http://example.com/read.php?10,5,84#msg-84"
   class="new-flag[css,10,5] new-flag"&gt;Phorum rocks!&lt;/a&gt;
     *     </code></pre>
     *   </li>
     * </ul></div>
     *
     * @param {String} mode
     *     One of "vroots", "forums", "threads" or "messages".
     *
     * @param {Array} item_id
     *     The vroot, forum, thread or message id (which one to use depends
     *     on the "mode" parameter).
     */
    updateUI: function (mode, item_id)
    {
        var func = this.className + '.updateUI()';

        Phorum.debug(
            func + ': update UI for mode = ' + mode + ', ' +
            'id = ' + item_id, 5
        );

        // Build the regular expression for matching elements that have a
        // new flag action linked to them.
        var regexp = '^new-flag\\[(\\w+),';
        switch (mode) {
        case "vroots":
            regexp += '(\\d+)?(,\\d+){0,2}';
            break;
        case "forums":
            regexp += item_id + '(,\\d+){0,2}';
            break;
        case "threads":
            regexp += '\\d+,' + item_id + '(,\\d+)?';
            break;
        case "messages":
            regexp += '\\d+,\\d+,' + item_id;
            break;
        default:
            throw func + ': ' +
                  'processMatchingTags(): illegal mode: ' + mode;
        }
        regexp += '\\]';
        var re = new RegExp();
        re.compile(regexp);

        Phorum.debug(
            func + ': find elements that have a CSS class ' +
            'matching: ' + regexp, 10
        );

        // Find all elements that have "new-flag[" somewhere in the class name.
        // These are candidates for matching the complete
        // "new-flag[<action>,<item>]" class format.
        var me = this;
        $PJ("*[class*='new-flag[']").each(function ()
        {
            var $element = $PJ(this);
            var classes = $element.attr('class').split(' ');

            Phorum.debug(
                func + ': inspect element classes: ' + classes.join(', '), 10
            );

            // Elements might have more than one class name assigned to them.
            // Inspect each class name separately.
            for (var i = 0; i < classes.length; i++)
            {
                var match = re.exec(classes[i]);
                if (match)
                {
                    var action = match[1];

                    // Handle built-in action.
                    switch (action) {

                    case 'hide':
                        $element.fadeOut();
                        break;

                    case 'css':
                        $element.addClass('read-flag');
                        $element.removeClass('new-flag');
                        break;

                    }

                    // Handle action callback.
                    if (me.callbacks.action[action] !== undefined) {
                        var callbacks = me.callbacks.action[action];
                        for (var j = 0; j < callbacks.length; j++) {
                            var callback = callbacks[j][0];
                            var scope    = callbacks[j][1];
                            callback.call(scope || this, this, $element);
                        }
                    }
                }
            }
        });

        // Call all registered global callback functions
        // to handle custom mark read functionality.
        for (var i = 0; i < this.callbacks.global.length; i++) {
            var callback = this.callbacks[i][0];
            var scope    = this.callbacks[i][1];
            callback.call(scope || this, mode, item_id);
        }
    }
};

/**
 * An alias for
 * {@link Phorum.UI.NewFlags#markRead Phorum.UI.NewFlags.markRead()}.
 * See the documentation of that method for more information.
 *
 * @param {String} mode
 * @param {Integer/Array} item_id
 * @method Phorum.markRead
 * @member Phorum markRead
 */
Phorum.markRead = Phorum.UI.NewFlags.markRead;

/**
 * An alias for 
 * {@link Phorum.Ajax#call Phorum.Ajax.call()}.
 * See the documentation of that method for more information.
 *
 * @param {Object} req
 * @method Phorum.call
 * @member Phorum call
 */
Phorum.call = Phorum.Ajax.call;



/* Added by module "mysnip_common", file "mods/mysnip_common/dummy.js" */


/* Added by module "spamhurdles", file "mods/spamhurdles/spamhurdles.js" */
function spamhurdles_eval_javascript(data)
{
    var cursor = 0; var start = 1; var end = 1;
    while (cursor < data.length && start > 0 && end > 0) {
        start = data.indexOf('<script', cursor);
        end   = data.indexOf('</script', cursor);
        if (end > start && end > -1) {
            if (start > -1) {
                var res = data.substring(start, end);
                start = res.indexOf('>') + 1;
                res = res.substring(start);
                if (res.length != 0) {
                    eval(res);
                }
            }
            cursor = end + 1;
        }
    }
}

function spamhurdles_find_form(form_id)
{
    var field = document.getElementById('spamhurdles_'+form_id);
    if (!field || !field.form) return null;
    return field.form;
}


/* Added by module "spamhurdles", file "mods/spamhurdles/hurdles/javascript_signature.js" */
/**
 * This function is called by the javascript_signature spam hurdle for
 * md5 hashing a random key that was added to a form.
 */
function spamhurdle_javascript_signature(id)
{
    // Extract the signing key from the page. The signing key is
    // stored as the alt tag of an image.
    var image_id = 'javascript_signature_data_'+id;
    var image = document.getElementById(image_id);
    if (!image && !image.alt) return;
    var signkey = image.alt;

    // Create the MD5 hash for the signing key.
    var signature = hex_md5(signkey);

    // Create hidden form field on the fly for storing the signature.
    var fld = document.createElement('input');
    fld.type = 'hidden';
    fld.name = 'javascript_signature_'+id;
    fld.value = signature;
    image.parentNode.appendChild(fld);
}

/*
 * A JavaScript implementation of the RSA Data Security, Inc. MD5 Message
 * Digest Algorithm, as defined in RFC 1321.
 * Version 2.1 Copyright (C) Paul Johnston 1999 - 2002.
 * Other contributors: Greg Holt, Andrew Kepert, Ydnar, Lostinet
 * Distributed under the BSD License
 * See http://pajhome.org.uk/crypt/md5 for more info.
 */

/*
 * Configurable variables. You may need to tweak these to be compatible with
 * the server-side, but the defaults work in most cases.
 */
var hexcase = 0;  /* hex output format. 0 - lowercase; 1 - uppercase        */
var b64pad  = ""; /* base-64 pad character. "=" for strict RFC compliance   */
var chrsz   = 8;  /* bits per input character. 8 - ASCII; 16 - Unicode      */

/*
 * These are the functions you'll usually want to call
 * They take string arguments and return either hex or base-64 encoded strings
 */
function hex_md5(s){ return binl2hex(core_md5(str2binl(s), s.length * chrsz));}
function b64_md5(s){ return binl2b64(core_md5(str2binl(s), s.length * chrsz));}
function str_md5(s){ return binl2str(core_md5(str2binl(s), s.length * chrsz));}
function hex_hmac_md5(key, data) { return binl2hex(core_hmac_md5(key, data)); }
function b64_hmac_md5(key, data) { return binl2b64(core_hmac_md5(key, data)); }
function str_hmac_md5(key, data) { return binl2str(core_hmac_md5(key, data)); }

/*
 * Perform a simple self-test to see if the VM is working
 */
function md5_vm_test()
{
  return hex_md5("abc") == "900150983cd24fb0d6963f7d28e17f72";
}

/*
 * Calculate the MD5 of an array of little-endian words, and a bit length
 */
function core_md5(x, len)
{
  /* append padding */
  x[len >> 5] |= 0x80 << ((len) % 32);
  x[(((len + 64) >>> 9) << 4) + 14] = len;

  var a =  1732584193;
  var b = -271733879;
  var c = -1732584194;
  var d =  271733878;

  for(var i = 0; i < x.length; i += 16)
  {
    var olda = a;
    var oldb = b;
    var oldc = c;
    var oldd = d;

    a = md5_ff(a, b, c, d, x[i+ 0], 7 , -680876936);
    d = md5_ff(d, a, b, c, x[i+ 1], 12, -389564586);
    c = md5_ff(c, d, a, b, x[i+ 2], 17,  606105819);
    b = md5_ff(b, c, d, a, x[i+ 3], 22, -1044525330);
    a = md5_ff(a, b, c, d, x[i+ 4], 7 , -176418897);
    d = md5_ff(d, a, b, c, x[i+ 5], 12,  1200080426);
    c = md5_ff(c, d, a, b, x[i+ 6], 17, -1473231341);
    b = md5_ff(b, c, d, a, x[i+ 7], 22, -45705983);
    a = md5_ff(a, b, c, d, x[i+ 8], 7 ,  1770035416);
    d = md5_ff(d, a, b, c, x[i+ 9], 12, -1958414417);
    c = md5_ff(c, d, a, b, x[i+10], 17, -42063);
    b = md5_ff(b, c, d, a, x[i+11], 22, -1990404162);
    a = md5_ff(a, b, c, d, x[i+12], 7 ,  1804603682);
    d = md5_ff(d, a, b, c, x[i+13], 12, -40341101);
    c = md5_ff(c, d, a, b, x[i+14], 17, -1502002290);
    b = md5_ff(b, c, d, a, x[i+15], 22,  1236535329);

    a = md5_gg(a, b, c, d, x[i+ 1], 5 , -165796510);
    d = md5_gg(d, a, b, c, x[i+ 6], 9 , -1069501632);
    c = md5_gg(c, d, a, b, x[i+11], 14,  643717713);
    b = md5_gg(b, c, d, a, x[i+ 0], 20, -373897302);
    a = md5_gg(a, b, c, d, x[i+ 5], 5 , -701558691);
    d = md5_gg(d, a, b, c, x[i+10], 9 ,  38016083);
    c = md5_gg(c, d, a, b, x[i+15], 14, -660478335);
    b = md5_gg(b, c, d, a, x[i+ 4], 20, -405537848);
    a = md5_gg(a, b, c, d, x[i+ 9], 5 ,  568446438);
    d = md5_gg(d, a, b, c, x[i+14], 9 , -1019803690);
    c = md5_gg(c, d, a, b, x[i+ 3], 14, -187363961);
    b = md5_gg(b, c, d, a, x[i+ 8], 20,  1163531501);
    a = md5_gg(a, b, c, d, x[i+13], 5 , -1444681467);
    d = md5_gg(d, a, b, c, x[i+ 2], 9 , -51403784);
    c = md5_gg(c, d, a, b, x[i+ 7], 14,  1735328473);
    b = md5_gg(b, c, d, a, x[i+12], 20, -1926607734);

    a = md5_hh(a, b, c, d, x[i+ 5], 4 , -378558);
    d = md5_hh(d, a, b, c, x[i+ 8], 11, -2022574463);
    c = md5_hh(c, d, a, b, x[i+11], 16,  1839030562);
    b = md5_hh(b, c, d, a, x[i+14], 23, -35309556);
    a = md5_hh(a, b, c, d, x[i+ 1], 4 , -1530992060);
    d = md5_hh(d, a, b, c, x[i+ 4], 11,  1272893353);
    c = md5_hh(c, d, a, b, x[i+ 7], 16, -155497632);
    b = md5_hh(b, c, d, a, x[i+10], 23, -1094730640);
    a = md5_hh(a, b, c, d, x[i+13], 4 ,  681279174);
    d = md5_hh(d, a, b, c, x[i+ 0], 11, -358537222);
    c = md5_hh(c, d, a, b, x[i+ 3], 16, -722521979);
    b = md5_hh(b, c, d, a, x[i+ 6], 23,  76029189);
    a = md5_hh(a, b, c, d, x[i+ 9], 4 , -640364487);
    d = md5_hh(d, a, b, c, x[i+12], 11, -421815835);
    c = md5_hh(c, d, a, b, x[i+15], 16,  530742520);
    b = md5_hh(b, c, d, a, x[i+ 2], 23, -995338651);

    a = md5_ii(a, b, c, d, x[i+ 0], 6 , -198630844);
    d = md5_ii(d, a, b, c, x[i+ 7], 10,  1126891415);
    c = md5_ii(c, d, a, b, x[i+14], 15, -1416354905);
    b = md5_ii(b, c, d, a, x[i+ 5], 21, -57434055);
    a = md5_ii(a, b, c, d, x[i+12], 6 ,  1700485571);
    d = md5_ii(d, a, b, c, x[i+ 3], 10, -1894986606);
    c = md5_ii(c, d, a, b, x[i+10], 15, -1051523);
    b = md5_ii(b, c, d, a, x[i+ 1], 21, -2054922799);
    a = md5_ii(a, b, c, d, x[i+ 8], 6 ,  1873313359);
    d = md5_ii(d, a, b, c, x[i+15], 10, -30611744);
    c = md5_ii(c, d, a, b, x[i+ 6], 15, -1560198380);
    b = md5_ii(b, c, d, a, x[i+13], 21,  1309151649);
    a = md5_ii(a, b, c, d, x[i+ 4], 6 , -145523070);
    d = md5_ii(d, a, b, c, x[i+11], 10, -1120210379);
    c = md5_ii(c, d, a, b, x[i+ 2], 15,  718787259);
    b = md5_ii(b, c, d, a, x[i+ 9], 21, -343485551);

    a = safe_add(a, olda);
    b = safe_add(b, oldb);
    c = safe_add(c, oldc);
    d = safe_add(d, oldd);
  }
  return Array(a, b, c, d);

}

/*
 * These functions implement the four basic operations the algorithm uses.
 */
function md5_cmn(q, a, b, x, s, t)
{
  return safe_add(bit_rol(safe_add(safe_add(a, q), safe_add(x, t)), s),b);
}
function md5_ff(a, b, c, d, x, s, t)
{
  return md5_cmn((b & c) | ((~b) & d), a, b, x, s, t);
}
function md5_gg(a, b, c, d, x, s, t)
{
  return md5_cmn((b & d) | (c & (~d)), a, b, x, s, t);
}
function md5_hh(a, b, c, d, x, s, t)
{
  return md5_cmn(b ^ c ^ d, a, b, x, s, t);
}
function md5_ii(a, b, c, d, x, s, t)
{
  return md5_cmn(c ^ (b | (~d)), a, b, x, s, t);
}

/*
 * Calculate the HMAC-MD5, of a key and some data
 */
function core_hmac_md5(key, data)
{
  var bkey = str2binl(key);
  if(bkey.length > 16) bkey = core_md5(bkey, key.length * chrsz);

  var ipad = Array(16), opad = Array(16);
  for(var i = 0; i < 16; i++)
  {
    ipad[i] = bkey[i] ^ 0x36363636;
    opad[i] = bkey[i] ^ 0x5C5C5C5C;
  }

  var hash = core_md5(ipad.concat(str2binl(data)), 512 + data.length * chrsz);
  return core_md5(opad.concat(hash), 512 + 128);
}

/*
 * Add integers, wrapping at 2^32. This uses 16-bit operations internally
 * to work around bugs in some JS interpreters.
 */
function safe_add(x, y)
{
  var lsw = (x & 0xFFFF) + (y & 0xFFFF);
  var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
  return (msw << 16) | (lsw & 0xFFFF);
}

/*
 * Bitwise rotate a 32-bit number to the left.
 */
function bit_rol(num, cnt)
{
  return (num << cnt) | (num >>> (32 - cnt));
}

/*
 * Convert a string to an array of little-endian words
 * If chrsz is ASCII, characters >255 have their hi-byte silently ignored.
 */
function str2binl(str)
{
  var bin = Array();
  var mask = (1 << chrsz) - 1;
  for(var i = 0; i < str.length * chrsz; i += chrsz)
    bin[i>>5] |= (str.charCodeAt(i / chrsz) & mask) << (i%32);
  return bin;
}

/*
 * Convert an array of little-endian words to a string
 */
function binl2str(bin)
{
  var str = "";
  var mask = (1 << chrsz) - 1;
  for(var i = 0; i < bin.length * 32; i += chrsz)
    str += String.fromCharCode((bin[i>>5] >>> (i % 32)) & mask);
  return str;
}

/*
 * Convert an array of little-endian words to a hex string.
 */
function binl2hex(binarray)
{
  var hex_tab = hexcase ? "0123456789ABCDEF" : "0123456789abcdef";
  var str = "";
  for(var i = 0; i < binarray.length * 4; i++)
  {
    str += hex_tab.charAt((binarray[i>>2] >> ((i%4)*8+4)) & 0xF) +
           hex_tab.charAt((binarray[i>>2] >> ((i%4)*8  )) & 0xF);
  }
  return str;
}

/*
 * Convert an array of little-endian words to a base-64 string
 */
function binl2b64(binarray)
{
  var tab = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
  var str = "";
  for(var i = 0; i < binarray.length * 4; i += 3)
  {
    var triplet = (((binarray[i   >> 2] >> 8 * ( i   %4)) & 0xFF) << 16)
                | (((binarray[i+1 >> 2] >> 8 * ((i+1)%4)) & 0xFF) << 8 )
                |  ((binarray[i+2 >> 2] >> 8 * ((i+2)%4)) & 0xFF);
    for(var j = 0; j < 4; j++)
    {
      if(i * 8 + j * 6 > binarray.length * 32) str += b64pad;
      else str += tab.charAt((triplet >> 6*(3-j)) & 0x3F);
    }
  }
  return str;
}


/* Added by module "spamhurdles", file "mods/spamhurdles/hurdles/block_quick_submit.js" */
function spamhurdles_block_quick_submit(form_id, seconds_left)
{
    var button = null;

    // Find the form that is protected by this hurdle.
    var f = spamhurdles_find_form(form_id);
    if (!f) return;

    // The button with name="finish" or name="post" is the submit button on
    // the message posting form.
    if (f.finish) {
        button = f.finish;
    }
    else if (f.post) {
        button = f.post;
    }
    // On other forms we check if there is only one submit button available.
    // If yes, then we use that button for implementing the count down.
    else
    {
        var buttons = f.getElementsByTagName('input');
        for (var i = 0; i < buttons.length; i++) {
            if (buttons[i].type === 'submit')
            {
                // If we found more than one button, then we are not sure
                // on what button to show the timeout.
                if (button) {
                    button = null;
                    break;
                }

                button = buttons[i];
            }
        }
    }

    // Return if we found no usable button.
    if (!button) return;

    // Display a count down on the button.
    button.orig_value = button.value;
    spamhurdles_block_quick_submit_countdown(button, seconds_left);
}

function spamhurdles_block_quick_submit_countdown(button, seconds_left)
{
    if (seconds_left <= 0) {
        button.value = button.orig_value;
        button.disabled = false;
    } else {
        button.value = button.orig_value + "(" + seconds_left + ")";
        button.disabled = true;
        setTimeout(function(){
            spamhurdles_block_quick_submit_countdown(button, --seconds_left);
        }, 1000);
    }
}



/* Added by module "editor_tools", file "mods/mysnip_like/lib/jquery.socialshareprivacy.min.js" */
/*
 * jquery.socialshareprivacy.js | 2 Klicks fuer mehr Datenschutz
 *
 * http://www.heise.de/extras/socialshareprivacy/
 * http://www.heise.de/ct/artikel/2-Klicks-fuer-mehr-Datenschutz-1333879.html
 *
 * Copyright (c) 2011 Hilko Holweg, Sebastian Hilbig, Nicolas Heiringhoff, Juergen Schmidt,
 * Heise Zeitschriften Verlag GmbH & Co. KG, http://www.heise.de
 *
 * is released under the MIT License http://www.opensource.org/licenses/mit-license.php
 *
 * Spread the word, link to us if you can.
 */
(function(b){function x(b,a){var f=decodeURIComponent(b);if(f.length<=a)return b;var j=f.substring(0,a-1).lastIndexOf(" ");return f=encodeURIComponent(f.substring(0,j))+"\u2026"}function p(c){return b('meta[name="'+c+'"]').attr("content")||""}function r(){var c=p("DC.title"),a=p("DC.creator");c.length>0&&a.length>0?c+=" - "+a:c=b("title").text();return encodeURIComponent(c)}function s(){var c=document.location.href,a=b("link[rel=canonical]").attr("href");a&&a.length>0&&(a.indexOf("http")<0&&(a=document.location.protocol+
"//"+document.location.host+a),c=a);return c}b.fn.socialSharePrivacy=function(c){var a=b.extend(!0,{services:{facebook:{status:"on",dummy_img:"socialshareprivacy/images/dummy_facebook.png",txt_info:"2 Klicks f&uuml;r mehr Datenschutz: Erst wenn Sie hier klicken, wird der Button aktiv und Sie k&ouml;nnen Ihre Empfehlung an Facebook senden. Schon beim Aktivieren werden Daten an Dritte &uuml;bertragen &ndash; siehe <em>i</em>.",txt_fb_off:"nicht mit Facebook verbunden",txt_fb_on:"mit Facebook verbunden",
perma_option:"on",display_name:"Facebook",referrer_track:"",language:"de_DE",action:"recommend"},twitter:{status:"on",dummy_img:"socialshareprivacy/images/dummy_twitter.png",txt_info:"2 Klicks f&uuml;r mehr Datenschutz: Erst wenn Sie hier klicken, wird der Button aktiv und Sie k&ouml;nnen Ihre Empfehlung an Twitter senden. Schon beim Aktivieren werden Daten an Dritte &uuml;bertragen &ndash; siehe <em>i</em>.",txt_twitter_off:"nicht mit Twitter verbunden",txt_twitter_on:"mit Twitter verbunden",perma_option:"on",
display_name:"Twitter",referrer_track:"",tweet_text:r,language:"en"},gplus:{status:"on",dummy_img:"socialshareprivacy/images/dummy_gplus.png",txt_info:"2 Klicks f&uuml;r mehr Datenschutz: Erst wenn Sie hier klicken, wird der Button aktiv und Sie k&ouml;nnen Ihre Empfehlung an Google+ senden. Schon beim Aktivieren werden Daten an Dritte &uuml;bertragen &ndash; siehe <em>i</em>.",txt_gplus_off:"nicht mit Google+ verbunden",txt_gplus_on:"mit Google+ verbunden",perma_option:"on",display_name:"Google+",
referrer_track:"",language:"de"}},info_link:"http://www.heise.de/ct/artikel/2-Klicks-fuer-mehr-Datenschutz-1333879.html",txt_help:"Wenn Sie diese Felder durch einen Klick aktivieren, werden Informationen an Facebook, Twitter oder Google in die USA &uuml;bertragen und unter Umst&auml;nden auch dort gespeichert. N&auml;heres erfahren Sie durch einen Klick auf das <em>i</em>.",settings_perma:"Dauerhaft aktivieren und Daten&uuml;ber&shy;tragung zustimmen:",cookie_path:"/",cookie_domain:document.location.host,
cookie_expires:"365",css_path:"socialshareprivacy/socialshareprivacy.css",uri:s},c),f=a.services.facebook.status==="on",j=a.services.twitter.status==="on",n=a.services.gplus.status==="on";if(f||j||n)return a.css_path.length>0&&(document.createStyleSheet?document.createStyleSheet(a.css_path):b("head").append('<link rel="stylesheet" type="text/css" href="'+a.css_path+'" />')),this.each(function(){b(this).prepend('<ul class="social_share_privacy_area"></ul>');var d=b(".social_share_privacy_area",this),
c=a.uri;typeof c==="function"&&(c=c(d));if(f){var g=encodeURIComponent(c+a.services.facebook.referrer_track),p='<iframe src="http://www.facebook.com/plugins/like.php?locale='+a.services.facebook.language+"&amp;href="+g+"&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action="+a.services.facebook.action+'&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:145px; height:21px;" allowTransparency="true"></iframe>',
t='<img src="'+a.services.facebook.dummy_img+'" alt="Facebook &quot;Like&quot;-Dummy" class="fb_like_privacy_dummy" />';d.append('<li class="facebook help_info"><span class="info">'+a.services.facebook.txt_info+'</span><span class="switch off">'+a.services.facebook.txt_fb_off+'</span><div class="fb_like dummy_btn">'+t+"</div></li>");var k=b("li.facebook",d);b("li.facebook div.fb_like img.fb_like_privacy_dummy,li.facebook span.switch",d).live("click",function(){k.find("span.switch").hasClass("off")?
(k.addClass("info_off"),k.find("span.switch").addClass("on").removeClass("off").html(a.services.facebook.txt_fb_on),k.find("img.fb_like_privacy_dummy").replaceWith(p)):(k.removeClass("info_off"),k.find("span.switch").addClass("off").removeClass("on").html(a.services.facebook.txt_fb_off),k.find(".fb_like").html(t))})}if(j){g=a.services.twitter.tweet_text;typeof g==="function"&&(g=g());var g=x(g,"120"),o=encodeURIComponent(c+a.services.twitter.referrer_track),e=encodeURIComponent(c),r='<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url='+
o+"&amp;counturl="+e+"&amp;text="+g+"&amp;count=horizontal&amp;lang="+a.services.twitter.language+'" style="width:130px; height:25px;"></iframe>',u='<img src="'+a.services.twitter.dummy_img+'" alt="&quot;Tweet this&quot;-Dummy" class="tweet_this_dummy" />';d.append('<li class="twitter help_info"><span class="info">'+a.services.twitter.txt_info+'</span><span class="switch off">'+a.services.twitter.txt_twitter_off+'</span><div class="tweet dummy_btn">'+u+"</div></li>");var l=b("li.twitter",d);b("li.twitter div.tweet img,li.twitter span.switch",
d).live("click",function(){l.find("span.switch").hasClass("off")?(l.addClass("info_off"),l.find("span.switch").addClass("on").removeClass("off").html(a.services.twitter.txt_twitter_on),l.find("img.tweet_this_dummy").replaceWith(r)):(l.removeClass("info_off"),l.find("span.switch").addClass("off").removeClass("on").html(a.services.twitter.txt_twitter_off),l.find(".tweet").html(u))})}if(n){var s='<div class="g-plusone" data-size="medium" data-href="'+(c+a.services.gplus.referrer_track)+'"></div><script type="text/javascript">window.___gcfg = {lang: "'+
a.services.gplus.language+'"}; (function() { var po = document.createElement("script"); po.type = "text/javascript"; po.async = true; po.src = "https://apis.google.com/js/plusone.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s); })(); <\/script>',v='<img src="'+a.services.gplus.dummy_img+'" alt="&quot;Google+1&quot;-Dummy" class="gplus_one_dummy" />';d.append('<li class="gplus help_info"><span class="info">'+a.services.gplus.txt_info+'</span><span class="switch off">'+
a.services.gplus.txt_gplus_off+'</span><div class="gplusone dummy_btn">'+v+"</div></li>");var m=b("li.gplus",d);b("li.gplus div.gplusone img,li.gplus span.switch",d).live("click",function(){m.find("span.switch").hasClass("off")?(m.addClass("info_off"),m.find("span.switch").addClass("on").removeClass("off").html(a.services.gplus.txt_gplus_on),m.find("img.gplus_one_dummy").replaceWith(s)):(m.removeClass("info_off"),m.find("span.switch").addClass("off").removeClass("on").html(a.services.gplus.txt_gplus_off),
m.find(".gplusone").html(v))})}d.append('<li class="settings_info"><div class="settings_info_menu off perma_option_off"><a href="'+a.info_link+'"><span class="help_info icon"><span class="info">'+a.txt_help+"</span></span></a></div></li>");b(".help_info:not(.info_off)",d).live("mouseenter",function(){var a=b(this),c=window.setTimeout(function(){b(a).addClass("display")},500);b(this).data("timeout_id",c)});b(".help_info",d).live("mouseleave",function(){var a=b(this).data("timeout_id");window.clearTimeout(a);
b(this).hasClass("display")&&b(this).removeClass("display")});c=a.services.facebook.perma_option==="on";g=a.services.twitter.perma_option==="on";o=a.services.gplus.perma_option==="on";if((f&&c||j&&g||n&&o)&&(!b.browser.msie||b.browser.msie&&b.browser.version>7)){for(var i=document.cookie.split(";"),e="{",q=0;q<i.length;q+=1){var w=i[q].split("=");e+='"'+b.trim(w[0])+'":"'+b.trim(w[1])+'"';q<i.length-1&&(e+=",")}e+="}";var e=JSON.parse(e),h=b("li.settings_info",d);h.find(".settings_info_menu").removeClass("perma_option_off");
h.find(".settings_info_menu").append('<span class="settings">Einstellungen</span><form><fieldset><legend>'+a.settings_perma+"</legend></fieldset></form>");f&&c&&(i=e.socialSharePrivacy_facebook==="perma_on"?' checked="checked"':"",h.find("form fieldset").append('<input type="checkbox" name="perma_status_facebook" id="perma_status_facebook"'+i+' /><label for="perma_status_facebook">'+a.services.facebook.display_name+"</label>"));j&&g&&(i=e.socialSharePrivacy_twitter==="perma_on"?' checked="checked"':
"",h.find("form fieldset").append('<input type="checkbox" name="perma_status_twitter" id="perma_status_twitter"'+i+' /><label for="perma_status_twitter">'+a.services.twitter.display_name+"</label>"));n&&o&&(i=e.socialSharePrivacy_gplus==="perma_on"?' checked="checked"':"",h.find("form fieldset").append('<input type="checkbox" name="perma_status_gplus" id="perma_status_gplus"'+i+' /><label for="perma_status_gplus">'+a.services.gplus.display_name+"</label>"));h.find("span.settings").css("cursor","pointer");
b(h.find("span.settings"),d).live("mouseenter",function(){var a=window.setTimeout(function(){h.find(".settings_info_menu").removeClass("off").addClass("on")},500);b(this).data("timeout_id",a)});b(h,d).live("mouseleave",function(){var a=b(this).data("timeout_id");window.clearTimeout(a);h.find(".settings_info_menu").removeClass("on").addClass("off")});b(h.find("fieldset input")).live("click",function(c){var e=c.target.id,g="socialSharePrivacy_"+e.substr(e.lastIndexOf("_")+1,e.length);if(b("#"+c.target.id+
":checked").length){var c=a.cookie_expires,h=a.cookie_path,f=a.cookie_domain,i=new Date;i.setTime(i.getTime()+c*864E5);document.cookie=g+"=perma_on; expires="+i.toUTCString()+"; path="+h+"; domain="+f;b("form fieldset label[for="+e+"]",d).addClass("checked")}else c=a.cookie_path,h=a.cookie_domain,f=new Date,f.setTime(f.getTime()-100),document.cookie=g+"=perma_on; expires="+f.toUTCString()+"; path="+c+"; domain="+h,b("form fieldset label[for="+e+"]",d).removeClass("checked")});f&&c&&e.socialSharePrivacy_facebook===
"perma_on"&&b("li.facebook span.switch",d).click();j&&g&&e.socialSharePrivacy_twitter==="perma_on"&&b("li.twitter span.switch",d).click();n&&o&&e.socialSharePrivacy_gplus==="perma_on"&&b("li.gplus span.switch",d).click()}})}})(jQuery);


/* Added by module "editor_tools", file "mods/mysnip_like/mysnip_like.js" */

    jQuery(document).ready(function($){
      if($('#socialshareprivacy').length > 0){
        $('#socialshareprivacy').socialSharePrivacy({
            services : {
                facebook : {
                    'status' : 'on',
                    'dummy_img'         : 'mods/mysnip_like/lib/socialshareprivacy/images/dummy_facebook.png'
                },
                twitter : {
                    'status' : 'on',
                    'dummy_img'         : 'mods/mysnip_like/lib/socialshareprivacy/images/dummy_twitter.png'
                },
                gplus : {
                    'status' : 'on',
                    'dummy_img'         : 'mods/mysnip_like/lib/socialshareprivacy/images/dummy_gplus.png'
                }
            },
            'css_path' : ''

        });
      }
    });


/* Added by module "jumpmenu", file "mods/jumpmenu/jumpmenu.js" */
var PhorumJumpMenu =
{
    active      : {},
    visible     : {},
    menuspacing : -1,
    timer       : null,
    vroot       : 0, // will be set separately from the jumpmenu.php code

    init: function()
    {
        // Make sure that events will not fire at unload time, because that
        // generates JavaScript warnings in Firefox about PhorumJumpMenu
        // that does not exist anymore at that time.
        var oldunload = window.onunload;
        window.onunload = function()
        {
            if (oldunload) oldunload();
            var root = document.getElementById('mod_jumpmenu_root');
            if (root) {
                root.onmouseover = null;
                root.onmouseout  = null;
            }
            var ahrefs = document.getElementsByTagName('a');
            for (var i=0; i<ahrefs.length; i++)
            {
                if (!ahrefs[i].rel) continue;
                var obj = ahrefs[i];

                if (obj.rel.indexOf('mod_jumpmenu_') == 0) {
                    obj.onmouseover = null;
                    obj.onmouseout  = null;
                }
            }
        }

        // Events for the root jumpmenu item.
        var r = document.getElementById('mod_jumpmenu_root');
        if (!r) return;
        r.onmouseover = function() {
            PhorumJumpMenu.stopCloseTimer();
            PhorumJumpMenu.openSubMenu(null);
        };
        r.onmouseout  = function() {
            PhorumJumpMenu.startCloseTimer();
        };

        // Events for the folders and forums.
        var ahrefs = document.getElementsByTagName('a');
        for (var i=0; i<ahrefs.length; i++)
        {
            if (!ahrefs[i].rel) continue;
            var obj = ahrefs[i];

            if (obj.rel == 'mod_jumpmenu_forum')
            {
                obj.onmouseover = function() {
                    PhorumJumpMenu.stopCloseTimer();
                    PhorumJumpMenu.openSubMenu(this);
                };
                obj.onmouseout  = function() {
                    PhorumJumpMenu.startCloseTimer();
                };
            }
            else if (obj.rel.substring(0,19) == 'mod_jumpmenu_folder')
            {
                var info = obj.rel.substring(20, obj.rel.length-1).split(',');
                obj.menu_id   = info[0];
                obj.parent_id = info[1];

                obj.onmouseover = function() {
                    PhorumJumpMenu.stopCloseTimer();
                    PhorumJumpMenu.openSubMenu(this);
                };
                obj.onmouseout  = function() {
                    PhorumJumpMenu.startCloseTimer();
                };
            }
        }
    },

    hideAll: function()
    {
        for (var depth in PhorumJumpMenu.visible) {
            for (var idx in PhorumJumpMenu.visible[depth]) {
                var o = PhorumJumpMenu.visible[depth][idx];
                $PJ(o).hide();
            }
        }

        PhorumJumpMenu.active = {};
        PhorumJumpMenu.visible = {};
    },

    startCloseTimer: function()
    {
        if (PhorumJumpMenu.timer != null) {
            clearTimeout(PhorumJumpMenu.timer);
        }
        PhorumJumpMenu.timer = setTimeout(function() {
            PhorumJumpMenu.timer = null;
            PhorumJumpMenu.hideAll();
        }, 500);
    },

    stopCloseTimer: function()
    {
        if (PhorumJumpMenu.timer != null) {
            clearTimeout(PhorumJumpMenu.timer);
            PhorumJumpMenu.timer = null;
        }
    },

    // Thanks to www.quirksmode.org for info on viewport properties:
    // http://www.quirksmode.org/viewport/compatibility.html
    getScreenInfo: function()
    {
        var width, height;
        // All, except Explorer.
        if (self.innerHeight) {
            width  = self.innerWidth;
            height = self.innerHeight;
        }
        // Explorer 6 Strict Mode.
        else if (document.documentElement &&
                 document.documentElement.clientHeight) {
            width  = document.documentElement.clientWidth;
            height = document.documentElement.clientHeight;
        }
        // Other Explorers.
        else if (document.body) {
            width  = document.body.clientWidth;
            height = document.body.clientHeight;
        }

        // -16 for scrollbar that is counted in in some browsers.
        width  -= 16;
        height -= 16;

        var scroll_x, scroll_y;
        // All, except Explorer.
        if (self.pageYOffset) {
                scroll_x = self.pageXOffset;
                scroll_y = self.pageYOffset;
        }
        // Explorer 6 Strict.
        else if (document.documentElement && document.documentElement.scrollTop) {
                scroll_x = document.documentElement.scrollLeft;
                scroll_y = document.documentElement.scrollTop;
        }
        // All other Explorers.
        else if (document.body) {
                scroll_x = document.body.scrollLeft;
                scroll_y = document.body.scrollTop;
        }

        return {
            'width'     : width,
            'height'    : height,
            'scroll_x'  : scroll_x,
            'scroll_y'  : scroll_y,
            'visible_x' : width + scroll_x,
            'visible_y' : height + scroll_y
        };
    },

    getStyle: function(obj, element)
    {
        if (obj.currentStyle) {
            return obj.currentStyle[element];
        } else if (window.getComputedStyle) {
            var s = document.defaultView.getComputedStyle(obj, null);
            return s.getPropertyValue(element);
        } else {
            return null;
        }
    },

    openSubMenu: function(menu_item)
    {
        // If the menu item is not a folder, then find its parent menu.
        // This way, deeper submenus that are possibly opened
        // will be collapsed.
        var menu = menu_item;
        if (menu_item && menu_item.className.indexOf('mod_jumpmenu_folder') == -1) {
            var n = menu.parentNode.id;
            if (n.indexOf('mod_jumpmenu_menu_content_') == 0) {
                var menu_id = n.substr(26);
                if (menu_id == PhorumJumpMenu.vroot) {
                    menu = null;
                } else {
                    var pid = 'mod_jumpmenu_item_' + menu_id;
                    var p = document.getElementById(pid);
                    if (p) menu = p;
                }
            }
        }

        // Find the parent menu, parent item and child menu.
        var menu_id   = menu == null ? PhorumJumpMenu.vroot : menu.menu_id;
        var parent_id = menu == null ? null : menu.parent_id;
        var p_menu = menu_id == PhorumJumpMenu.vroot 
              ? null
              : document.getElementById('mod_jumpmenu_menu_' + parent_id);
        var p_item = menu_id == PhorumJumpMenu.vroot
              ? document.getElementById('mod_jumpmenu_root')
              : document.getElementById('mod_jumpmenu_item_' + menu_id);
        var c_menu = document.getElementById('mod_jumpmenu_menu_' + menu_id);


        // Handle highlighting of the active menu item.
        // Clear all highlights in the child menu. 
        if (c_menu) {
            var ahrefs = c_menu.getElementsByTagName('a');
            for (var i=0; i<ahrefs.length; i++) {
                var idx = ahrefs[i].className.indexOf(' mod_jumpmenu_highlighted'); 
                if (idx != -1) {
                    ahrefs[i].className = ahrefs[i].className.substring(0,idx);
                }
            }
        }
        // If the menu item is a folder, then we also cleanup the
        // parent menu (which is the menu that the user is currently
        // hovering over).
        if (menu_item && menu_item.className.indexOf('mod_jumpmenu_folder') != -1) {
            var ahrefs = p_menu.getElementsByTagName('a');
            for (var i=0; i<ahrefs.length; i++) {
                var idx = ahrefs[i].className.indexOf(' mod_jumpmenu_highlighted'); 
                if (idx != -1) {
                    ahrefs[i].className = ahrefs[i].className.substring(0,idx);
                }
            }
        }
        // Highlight the active menu item.
        if (menu_item && menu_item.className.indexOf(' mod_jumpmenu_highlighted') == -1) {
            menu_item.className += ' mod_jumpmenu_highlighted';
        }

        // If we did not find the required objects, then silently ignore
        // the problem and stop processing.
        if (!p_item || !c_menu) return;
        if (menu_id != PhorumJumpMenu.vroot && !p_menu) return;

        // Do some dimension handling and storage the first time that the
        // menu is opened.
        if (!c_menu.jumpmenu_init_done)
        {
            $c_menu = $PJ(c_menu);

            // Without making the menu visible, we don't know the width/height
            // of the menu div, because those are only available after rendering
            // the menu HTML code. So for positioning the menu, we have a
            // chicken/egg problem to fix. I fix it by moving the egg out of
            // the visible screen area before making it visible.
            $c_menu.css({
                top    : '-500px',
                left   : '-500px',
                zIndex : 1000 // This should put the menus on top at most pages.
            }).show();

            // force the widths for the <a href="..."> tags. this is needed to
            // make the links hoverable and clickable over the full menu width
            // in msie6 :(
            // the "var w" is used to prevent variable tag widths due to
            // accidental resizing of the menu while setting the tag widths
            // (i've seen that happening in opera).
            var w = null;
            $c_menu.find('a').each(function() {
                $a = $PJ(this);
                if (!w) w = $a.outerWidth() + 'px';
                $a.css('width', w);
            });

            // store the displaying dimensions in the div object.
            c_menu.jumpmenu_width  = $c_menu.outerWidth();
            c_menu.jumpmenu_height = $c_menu.outerHeight();

            c_menu.jumpmenu_init_done = 1;
            $c_menu.hide();
        }

        // keep track of the menu depth and menu drawing direction.
        // first level menu.
        if (menu_id == PhorumJumpMenu.vroot)
        {
            c_menu.depth = 1;

            // at the first level, we look at the main menu item. if that one
            // uses rel="mod_jumpmenu_left", then the direction of the whole
            // menu structure will be left. by default, this direction is right.
            c_menu.direction = 'right';
            if (p_item.rel && p_item.rel == 'mod_jumpmenu_left') {
                c_menu.direction = 'left';
            }
        }
        // second level and deeper.
        else
        {
            c_menu.depth = p_menu.depth + 1;

            // inherit the parent's menu direction.
            c_menu.direction = p_menu.direction;
        }

        // determine the screen dimensions.
        var scr = PhorumJumpMenu.getScreenInfo();

        // determine the top-left of the parent menu item.
        var p_item_pos = $PJ(p_item).offset();
        var top  = p_item_pos.top;
        var left = p_item_pos.left;

        // determine the location of the child menu.
        // the first level menu is placed directly beneath the main menu object.
        if (menu_id == PhorumJumpMenu.vroot)
        {
            top = top + $PJ(p_item).outerHeight();

            if (c_menu.direction == 'left')
            {
                left = left - (c_menu.jumpmenu_width - $PJ(p_item).outerWidth());
                if (left < scr.scroll_x) left = scr.scroll_x + 2;
            }
            else
            {
                left = left;
                if ((left + c_menu.jumpmenu_width) > scr.width) {
                    left = scr.width - c_menu.jumpmenu_width - 2;
                }
            }
        }
        // second level and deeper levels are handled as standard menu popups
        // (placed to the right or left of the selected item).
        else
        {
            // The left pos is derived from the outer menu container.
            var $menu = $PJ(p_item).closest('.mod_jumpmenu_menu');
            var pos = $menu.offset();
            left = pos.left;

            var dir = c_menu.direction;

            var left_pos =
                left // the left side of the parent menu item
                - PhorumJumpMenu.menuspacing // handle menu spacing
                - c_menu.jumpmenu_width; // add child menu width;

            var right_pos =
                left // the left side of the parent menu item
                + PhorumJumpMenu.menuspacing  // handle menu spacing
                + $menu.outerWidth(); // add parent menu width
;
            if (dir == 'left') {
                if (left_pos < scr.scroll_x) {
                    dir = 'right';
                } else {
                    left = left_pos;
                }
            }

            if (dir == 'right') {
                if ((right_pos + c_menu.jumpmenu_width) > scr.visible_x) {
                    left = left_pos;
                } else {
                    left = right_pos;
                }
            }
        }

        // take extra vertical space into account for adjusting for
        // padding of the menu div.
        if (menu_id != PhorumJumpMenu.vroot) {
            top -= p_item.parentNode.offsetTop;
        }

        // move the menu up if needed.
        if ((top + c_menu.jumpmenu_height) > scr.visible_y) {
            top = scr.visible_y - c_menu.jumpmenu_height - 2;
            if (top < scr.scroll_y) top = scr.scroll_y + 2;
        }

        // move the menu into position and make it visible.
        // The bgiframe is used for working around an MSIE problem.
        $PJ(c_menu)
            .css({ top  : top  + 'px', left : left + 'px' })
            .bgiframe()
            .show()

        // keep track of the active menu for the current menu level.
        PhorumJumpMenu.active[c_menu.depth] = c_menu;

        // cleanup the menus that should not be visible anymore.
        for (var depth in PhorumJumpMenu.visible) {
            for (var idx in PhorumJumpMenu.visible[depth]) {
                var o = PhorumJumpMenu.visible[depth][idx];
                if (depth > c_menu.depth ||
                    o.id != PhorumJumpMenu.active[depth].id) {
                    $PJ(o).hide();
                }
            }
        }

        // keep track of visible menus.
        PhorumJumpMenu.visible[c_menu.depth] = {};
        PhorumJumpMenu.visible[c_menu.depth][c_menu.id] = c_menu;
    }

};


/* Added by module "embed_attachments", file "mods/embed_attachments/embed_attachments.js" */
function mod_embed_attachments_create_link(id,fn)
{
    // Find the textarea. Multiple cases for backward compatibility.
    var area = document.getElementById("phorum_textarea");
    if (! area) area = document.getElementById("body");
    if (! area) {
        alert(
          'There seems to be a technical problem. The textarea cannot be ' +
          'found in the page. The textarea should have id="body" in the ' +
          'definition, so the Embed Attachments module can find it.'
        );
        return
    }

    // Add attachment BBcode to the message body.
    fn = unescape(fn);
    var attlink = '[attachment ' + id + ' ' + fn + ']';

    if (area.createTextRange) /* MSIE */
    {
        area.focus(area.caretPos);
        area.caretPos = document.selection.createRange().duplicate();
        curtxt = area.caretPos.text;
        area.caretPos.text = attlink + curtxt;
    }
    else /* Other browsers */
    {
        var pos = area.selectionStart;
        area.value =
            area.value.substring(0,pos) +
            attlink +
            area.value.substring(pos);
        area.focus();
        area.selectionStart = pos + attlink.length;
        area.selectionEnd = area.selectionStart;
    }
}



/* Added by module "embed_images", file "mods/embed_images/embed_images.js" */
function mod_embed_images_loadimage(
    viewer_id, thumbnail_url, fullimage_url, ajax_url, target_url,
    message_id, max_w, max_h, loading_txt, rescheduled)
{
    var container = document.getElementById('imagediv_'+viewer_id);
    if (!container) return;

    // If the image for the viewer id is already on the page, then we are
    // handling a cached thumbnail for which no Ajax magic is required,
    // but which is already loaded in the page. We'll only use this function
    // for setting up a full size image viewer.
    var image = document.getElementById('image_'+viewer_id);
    if (image)
    {
        // If a function was loaded for a viewer to initialize the
        // viewer, then hand over the image data to that function.
        // Don't do this in case we have a target_url.
        if (window.mod_embed_images_initviewer && !target_url) {
            var link  = document.getElementById('link_'+viewer_id);
            mod_embed_images_initviewer(
                container, image, link, fullimage_url, message_id
            );
        }

        return;
    }

    if (!rescheduled)
    {
        // We use a bit of a strange hack here, by checking for readyState.
        // This is not availble in all browsers. That's no problem though.
        // We mainly want MSIE to check it and to let it postpone image
        // loading till after the page is fully loaded. When doing things
        // earlier in MSIE from script code that is not a direct descendant
        // of <body>, we might get "operation aborted" errors.
        if (document.readyState &&
            document.readyState != 'loaded' &&
            document.readyState != 'complete' &&
            window.attachEvent &&
            !window.opera) {
          window.attachEvent('onload', function() {
              mod_embed_images_loadimage(
                  viewer_id, thumbnail_url, fullimage_url,
                  ajax_url, target_url, message_id,
                  max_w, max_h, loading_txt, true
              );
          });
          return;
        }

        // Display a "Loading ..." message to the user.
        container.innerHTML =
            '<div class="mod_embed_images_loading">' +
            loading_txt +
            '<\/div>';
    }

    // Create the XMLHttpRequest object that we can use to send an
    // Ajax request to the server.
    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        var versions = [
            "MSXML2.XMLHttp.5.0", "MSXML2.XMLHttp.4.0",
            "MSXML2.XMLHttp.3.0", "MSXML2.XMLHttp",
            "Microsoft.XMLHttp"
        ];
        for (var i=0; i < versions.length; i++)
          try { xhr = new ActiveXObject(versions[i]); } catch (e) { }
    }

    // No XMLHttpRequest object found? Fallback to a simpler way of
    // displaying the thumbnail image. This way we won't have
    // loading or error feedback and full size viewer support,
    // but at least we do show the image. This should't happen for
    // modern browsers.
    if (!xhr)
    {
        target.innerHTML =
            (target_url ? '<a href="'+target_url+'">' : '') +
            '<img id="image_'+viewer_id+'" src="'+thumbnail_url+'"/>' +
            (target_url ? '<\/a>' : '');
        return;
    }

    // Setup the XMLHttpRequest object for the request.
    xhr.open("get", ajax_url, true);
    xhr.setRequestHeader("Content-Type", "text/plain");
    xhr.onreadystatechange = function()
    {
        if (xhr.readyState == 4 && xhr.status == 200)
        {
            var res = xhr.responseText;

            // An "OK <w>x<h> <scw>x<sch>" message was returned.
            if (res.substr(0,2) == 'OK')
            {
                // Parse the respones message.
                // I know... a bit old school parsing.
                var dim   = res.substr(3);
                var xpos  = dim.indexOf('x');
                var spos  = dim.indexOf(' ');
                var origw = dim.substr(0,xpos);
                var origh = dim.substr(xpos+1, spos-xpos-1);
                    dim   = dim.substr(spos+1);
                    xpos  = dim.indexOf('x');
                var w     = dim.substr(0,xpos);
                var h     = dim.substr(xpos+1);

                var origsize  = origw+"x"+origh;
                var scalesize = w+"x"+h;
                var is_scaled = (origsize != scalesize);

                // Opera does not seem to load images that are not visible :(
                // So for those, we never get an onload event. Therefore,
                // we make the image 0x0 pixels and resize it to the real
                // size after loading.
                var html =
                    (target_url ? '<a href="'+target_url+'">' : '') +
                    '<img style="width:0px;height:0px" ' +
                    'id="image_'+viewer_id+'" ' +
                    'onload="' +
                    'mod_embed_images_image_loaded(this,'+w+','+h+')" ' +
                    'src="'+thumbnail_url+'"/>' +
                    (target_url ? '<\/a>' : '');

                container.innerHTML += html;

                // Go to extended viewer mode if the image was scaled down
                // or if a target URL was provided.
                if (is_scaled || target_url)
                {
                    var info = document.getElementById('info_'+viewer_id);
                    if (info) info.style.display = 'block';

                    var div = document.getElementById('div_'+viewer_id);
                    if (div) div.className = 'mod_embed_images_extended';
                }

                // If a function was loaded for a viewer to initialize the
                // viewer, then hand over the image data to that function.
                if (window.mod_embed_images_initviewer && !target_url) {
                    var image = document.getElementById('image_'+viewer_id);
                    var link  = document.getElementById('link_'+viewer_id);
                    mod_embed_images_initviewer(
                        container, image, link, fullimage_url,
                        message_id
                    );
                }
            }

            // Some error message was returned. Show the error to the user.
            else container.innerHTML =
                '<div class="mod_embed_images_error">' +
                '<strong>Image error<\/strong><br\/>' +
                res + '<br/>' +
                '<a href="' + fullimage_url + '">open image URL<\/a>' +
                '<\/div>';
        }
    }

    // Send the request to the server.
    xhr.send('');
}

function mod_embed_images_image_loaded(image, w, h)
{
    image.style.width = w+'px';
    image.style.height = h+'px';

    var container = image.parentNode;
    while (container.className != 'mod_embed_images_image') {
        container = container.parentNode;
        if (!container) return; // Should not happen.
    }

    container.style.width = image.width + 'px';
    container.parentNode.style.width = parseInt(image.width) + 'px';
    container.style.height = image.height + 'px';
    for (var i = 0; i < container.childNodes.length; i++) {
        if (container.childNodes[i].className == 'mod_embed_images_loading') {
            container.childNodes[i].style.display = 'none';
        }
    }
}



/* Added by module "embed_images/viewer:fancybox", file "mods/embed_images/viewers/fancybox/code/jquery.fancybox-1.3.4.pack.js" */
/*
 * FancyBox - jQuery Plugin
 * Simple and fancy lightbox alternative
 *
 * Examples and documentation at: http://fancybox.net
 * 
 * Copyright (c) 2008 - 2010 Janis Skarnelis
 * That said, it is hardly a one-person project. Many people have submitted bugs, code, and offered their advice freely. Their support is greatly appreciated.
 * 
 * Version: 1.3.4 (11/11/2010)
 * Requires: jQuery v1.3+
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */

;(function(b){var m,t,u,f,D,j,E,n,z,A,q=0,e={},o=[],p=0,d={},l=[],G=null,v=new Image,J=/\.(jpg|gif|png|bmp|jpeg)(.*)?$/i,W=/[^\.]\.(swf)\s*$/i,K,L=1,y=0,s="",r,i,h=false,B=b.extend(b("<div/>")[0],{prop:0}),M=b.browser.msie&&b.browser.version<7&&!window.XMLHttpRequest,N=function(){t.hide();v.onerror=v.onload=null;G&&G.abort();m.empty()},O=function(){if(false===e.onError(o,q,e)){t.hide();h=false}else{e.titleShow=false;e.width="auto";e.height="auto";m.html('<p id="fancybox-error">The requested content cannot be loaded.<br />Please try again later.</p>');
F()}},I=function(){var a=o[q],c,g,k,C,P,w;N();e=b.extend({},b.fn.fancybox.defaults,typeof b(a).data("fancybox")=="undefined"?e:b(a).data("fancybox"));w=e.onStart(o,q,e);if(w===false)h=false;else{if(typeof w=="object")e=b.extend(e,w);k=e.title||(a.nodeName?b(a).attr("title"):a.title)||"";if(a.nodeName&&!e.orig)e.orig=b(a).children("img:first").length?b(a).children("img:first"):b(a);if(k===""&&e.orig&&e.titleFromAlt)k=e.orig.attr("alt");c=e.href||(a.nodeName?b(a).attr("href"):a.href)||null;if(/^(?:javascript)/i.test(c)||
c=="#")c=null;if(e.type){g=e.type;if(!c)c=e.content}else if(e.content)g="html";else if(c)g=c.match(J)?"image":c.match(W)?"swf":b(a).hasClass("iframe")?"iframe":c.indexOf("#")===0?"inline":"ajax";if(g){if(g=="inline"){a=c.substr(c.indexOf("#"));g=b(a).length>0?"inline":"ajax"}e.type=g;e.href=c;e.title=k;if(e.autoDimensions)if(e.type=="html"||e.type=="inline"||e.type=="ajax"){e.width="auto";e.height="auto"}else e.autoDimensions=false;if(e.modal){e.overlayShow=true;e.hideOnOverlayClick=false;e.hideOnContentClick=
false;e.enableEscapeButton=false;e.showCloseButton=false}e.padding=parseInt(e.padding,10);e.margin=parseInt(e.margin,10);m.css("padding",e.padding+e.margin);b(".fancybox-inline-tmp").unbind("fancybox-cancel").bind("fancybox-change",function(){b(this).replaceWith(j.children())});switch(g){case "html":m.html(e.content);F();break;case "inline":if(b(a).parent().is("#fancybox-content")===true){h=false;break}b('<div class="fancybox-inline-tmp" />').hide().insertBefore(b(a)).bind("fancybox-cleanup",function(){b(this).replaceWith(j.children())}).bind("fancybox-cancel",
function(){b(this).replaceWith(m.children())});b(a).appendTo(m);F();break;case "image":h=false;b.fancybox.showActivity();v=new Image;v.onerror=function(){O()};v.onload=function(){h=true;v.onerror=v.onload=null;e.width=v.width;e.height=v.height;b("<img />").attr({id:"fancybox-img",src:v.src,alt:e.title}).appendTo(m);Q()};v.src=c;break;case "swf":e.scrolling="no";C='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+e.width+'" height="'+e.height+'"><param name="movie" value="'+c+
'"></param>';P="";b.each(e.swf,function(x,H){C+='<param name="'+x+'" value="'+H+'"></param>';P+=" "+x+'="'+H+'"'});C+='<embed src="'+c+'" type="application/x-shockwave-flash" width="'+e.width+'" height="'+e.height+'"'+P+"></embed></object>";m.html(C);F();break;case "ajax":h=false;b.fancybox.showActivity();e.ajax.win=e.ajax.success;G=b.ajax(b.extend({},e.ajax,{url:c,data:e.ajax.data||{},error:function(x){x.status>0&&O()},success:function(x,H,R){if((typeof R=="object"?R:G).status==200){if(typeof e.ajax.win==
"function"){w=e.ajax.win(c,x,H,R);if(w===false){t.hide();return}else if(typeof w=="string"||typeof w=="object")x=w}m.html(x);F()}}}));break;case "iframe":Q()}}else O()}},F=function(){var a=e.width,c=e.height;a=a.toString().indexOf("%")>-1?parseInt((b(window).width()-e.margin*2)*parseFloat(a)/100,10)+"px":a=="auto"?"auto":a+"px";c=c.toString().indexOf("%")>-1?parseInt((b(window).height()-e.margin*2)*parseFloat(c)/100,10)+"px":c=="auto"?"auto":c+"px";m.wrapInner('<div style="width:'+a+";height:"+c+
";overflow: "+(e.scrolling=="auto"?"auto":e.scrolling=="yes"?"scroll":"hidden")+';position:relative;"></div>');e.width=m.width();e.height=m.height();Q()},Q=function(){var a,c;t.hide();if(f.is(":visible")&&false===d.onCleanup(l,p,d)){b.event.trigger("fancybox-cancel");h=false}else{h=true;b(j.add(u)).unbind();b(window).unbind("resize.fb scroll.fb");b(document).unbind("keydown.fb");f.is(":visible")&&d.titlePosition!=="outside"&&f.css("height",f.height());l=o;p=q;d=e;if(d.overlayShow){u.css({"background-color":d.overlayColor,
opacity:d.overlayOpacity,cursor:d.hideOnOverlayClick?"pointer":"auto",height:b(document).height()});if(!u.is(":visible")){M&&b("select:not(#fancybox-tmp select)").filter(function(){return this.style.visibility!=="hidden"}).css({visibility:"hidden"}).one("fancybox-cleanup",function(){this.style.visibility="inherit"});u.show()}}else u.hide();i=X();s=d.title||"";y=0;n.empty().removeAttr("style").removeClass();if(d.titleShow!==false){if(b.isFunction(d.titleFormat))a=d.titleFormat(s,l,p,d);else a=s&&s.length?
d.titlePosition=="float"?'<table id="fancybox-title-float-wrap" cellpadding="0" cellspacing="0"><tr><td id="fancybox-title-float-left"></td><td id="fancybox-title-float-main">'+s+'</td><td id="fancybox-title-float-right"></td></tr></table>':'<div id="fancybox-title-'+d.titlePosition+'">'+s+"</div>":false;s=a;if(!(!s||s==="")){n.addClass("fancybox-title-"+d.titlePosition).html(s).appendTo("body").show();switch(d.titlePosition){case "inside":n.css({width:i.width-d.padding*2,marginLeft:d.padding,marginRight:d.padding});
y=n.outerHeight(true);n.appendTo(D);i.height+=y;break;case "over":n.css({marginLeft:d.padding,width:i.width-d.padding*2,bottom:d.padding}).appendTo(D);break;case "float":n.css("left",parseInt((n.width()-i.width-40)/2,10)*-1).appendTo(f);break;default:n.css({width:i.width-d.padding*2,paddingLeft:d.padding,paddingRight:d.padding}).appendTo(f)}}}n.hide();if(f.is(":visible")){b(E.add(z).add(A)).hide();a=f.position();r={top:a.top,left:a.left,width:f.width(),height:f.height()};c=r.width==i.width&&r.height==
i.height;j.fadeTo(d.changeFade,0.3,function(){var g=function(){j.html(m.contents()).fadeTo(d.changeFade,1,S)};b.event.trigger("fancybox-change");j.empty().removeAttr("filter").css({"border-width":d.padding,width:i.width-d.padding*2,height:e.autoDimensions?"auto":i.height-y-d.padding*2});if(c)g();else{B.prop=0;b(B).animate({prop:1},{duration:d.changeSpeed,easing:d.easingChange,step:T,complete:g})}})}else{f.removeAttr("style");j.css("border-width",d.padding);if(d.transitionIn=="elastic"){r=V();j.html(m.contents());
f.show();if(d.opacity)i.opacity=0;B.prop=0;b(B).animate({prop:1},{duration:d.speedIn,easing:d.easingIn,step:T,complete:S})}else{d.titlePosition=="inside"&&y>0&&n.show();j.css({width:i.width-d.padding*2,height:e.autoDimensions?"auto":i.height-y-d.padding*2}).html(m.contents());f.css(i).fadeIn(d.transitionIn=="none"?0:d.speedIn,S)}}}},Y=function(){if(d.enableEscapeButton||d.enableKeyboardNav)b(document).bind("keydown.fb",function(a){if(a.keyCode==27&&d.enableEscapeButton){a.preventDefault();b.fancybox.close()}else if((a.keyCode==
37||a.keyCode==39)&&d.enableKeyboardNav&&a.target.tagName!=="INPUT"&&a.target.tagName!=="TEXTAREA"&&a.target.tagName!=="SELECT"){a.preventDefault();b.fancybox[a.keyCode==37?"prev":"next"]()}});if(d.showNavArrows){if(d.cyclic&&l.length>1||p!==0)z.show();if(d.cyclic&&l.length>1||p!=l.length-1)A.show()}else{z.hide();A.hide()}},S=function(){if(!b.support.opacity){j.get(0).style.removeAttribute("filter");f.get(0).style.removeAttribute("filter")}e.autoDimensions&&j.css("height","auto");f.css("height","auto");
s&&s.length&&n.show();d.showCloseButton&&E.show();Y();d.hideOnContentClick&&j.bind("click",b.fancybox.close);d.hideOnOverlayClick&&u.bind("click",b.fancybox.close);b(window).bind("resize.fb",b.fancybox.resize);d.centerOnScroll&&b(window).bind("scroll.fb",b.fancybox.center);if(d.type=="iframe")b('<iframe id="fancybox-frame" name="fancybox-frame'+(new Date).getTime()+'" frameborder="0" hspace="0" '+(b.browser.msie?'allowtransparency="true""':"")+' scrolling="'+e.scrolling+'" src="'+d.href+'"></iframe>').appendTo(j);
f.show();h=false;b.fancybox.center();d.onComplete(l,p,d);var a,c;if(l.length-1>p){a=l[p+1].href;if(typeof a!=="undefined"&&a.match(J)){c=new Image;c.src=a}}if(p>0){a=l[p-1].href;if(typeof a!=="undefined"&&a.match(J)){c=new Image;c.src=a}}},T=function(a){var c={width:parseInt(r.width+(i.width-r.width)*a,10),height:parseInt(r.height+(i.height-r.height)*a,10),top:parseInt(r.top+(i.top-r.top)*a,10),left:parseInt(r.left+(i.left-r.left)*a,10)};if(typeof i.opacity!=="undefined")c.opacity=a<0.5?0.5:a;f.css(c);
j.css({width:c.width-d.padding*2,height:c.height-y*a-d.padding*2})},U=function(){return[b(window).width()-d.margin*2,b(window).height()-d.margin*2,b(document).scrollLeft()+d.margin,b(document).scrollTop()+d.margin]},X=function(){var a=U(),c={},g=d.autoScale,k=d.padding*2;c.width=d.width.toString().indexOf("%")>-1?parseInt(a[0]*parseFloat(d.width)/100,10):d.width+k;c.height=d.height.toString().indexOf("%")>-1?parseInt(a[1]*parseFloat(d.height)/100,10):d.height+k;if(g&&(c.width>a[0]||c.height>a[1]))if(e.type==
"image"||e.type=="swf"){g=d.width/d.height;if(c.width>a[0]){c.width=a[0];c.height=parseInt((c.width-k)/g+k,10)}if(c.height>a[1]){c.height=a[1];c.width=parseInt((c.height-k)*g+k,10)}}else{c.width=Math.min(c.width,a[0]);c.height=Math.min(c.height,a[1])}c.top=parseInt(Math.max(a[3]-20,a[3]+(a[1]-c.height-40)*0.5),10);c.left=parseInt(Math.max(a[2]-20,a[2]+(a[0]-c.width-40)*0.5),10);return c},V=function(){var a=e.orig?b(e.orig):false,c={};if(a&&a.length){c=a.offset();c.top+=parseInt(a.css("paddingTop"),
10)||0;c.left+=parseInt(a.css("paddingLeft"),10)||0;c.top+=parseInt(a.css("border-top-width"),10)||0;c.left+=parseInt(a.css("border-left-width"),10)||0;c.width=a.width();c.height=a.height();c={width:c.width+d.padding*2,height:c.height+d.padding*2,top:c.top-d.padding-20,left:c.left-d.padding-20}}else{a=U();c={width:d.padding*2,height:d.padding*2,top:parseInt(a[3]+a[1]*0.5,10),left:parseInt(a[2]+a[0]*0.5,10)}}return c},Z=function(){if(t.is(":visible")){b("div",t).css("top",L*-40+"px");L=(L+1)%12}else clearInterval(K)};
b.fn.fancybox=function(a){if(!b(this).length)return this;b(this).data("fancybox",b.extend({},a,b.metadata?b(this).metadata():{})).unbind("click.fb").bind("click.fb",function(c){c.preventDefault();if(!h){h=true;b(this).blur();o=[];q=0;c=b(this).attr("rel")||"";if(!c||c==""||c==="nofollow")o.push(this);else{o=b("a[rel="+c+"], area[rel="+c+"]");q=o.index(this)}I()}});return this};b.fancybox=function(a,c){var g;if(!h){h=true;g=typeof c!=="undefined"?c:{};o=[];q=parseInt(g.index,10)||0;if(b.isArray(a)){for(var k=
0,C=a.length;k<C;k++)if(typeof a[k]=="object")b(a[k]).data("fancybox",b.extend({},g,a[k]));else a[k]=b({}).data("fancybox",b.extend({content:a[k]},g));o=jQuery.merge(o,a)}else{if(typeof a=="object")b(a).data("fancybox",b.extend({},g,a));else a=b({}).data("fancybox",b.extend({content:a},g));o.push(a)}if(q>o.length||q<0)q=0;I()}};b.fancybox.showActivity=function(){clearInterval(K);t.show();K=setInterval(Z,66)};b.fancybox.hideActivity=function(){t.hide()};b.fancybox.next=function(){return b.fancybox.pos(p+
1)};b.fancybox.prev=function(){return b.fancybox.pos(p-1)};b.fancybox.pos=function(a){if(!h){a=parseInt(a);o=l;if(a>-1&&a<l.length){q=a;I()}else if(d.cyclic&&l.length>1){q=a>=l.length?0:l.length-1;I()}}};b.fancybox.cancel=function(){if(!h){h=true;b.event.trigger("fancybox-cancel");N();e.onCancel(o,q,e);h=false}};b.fancybox.close=function(){function a(){u.fadeOut("fast");n.empty().hide();f.hide();b.event.trigger("fancybox-cleanup");j.empty();d.onClosed(l,p,d);l=e=[];p=q=0;d=e={};h=false}if(!(h||f.is(":hidden"))){h=
true;if(d&&false===d.onCleanup(l,p,d))h=false;else{N();b(E.add(z).add(A)).hide();b(j.add(u)).unbind();b(window).unbind("resize.fb scroll.fb");b(document).unbind("keydown.fb");j.find("iframe").attr("src",M&&/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank");d.titlePosition!=="inside"&&n.empty();f.stop();if(d.transitionOut=="elastic"){r=V();var c=f.position();i={top:c.top,left:c.left,width:f.width(),height:f.height()};if(d.opacity)i.opacity=1;n.empty().hide();B.prop=1;
b(B).animate({prop:0},{duration:d.speedOut,easing:d.easingOut,step:T,complete:a})}else f.fadeOut(d.transitionOut=="none"?0:d.speedOut,a)}}};b.fancybox.resize=function(){u.is(":visible")&&u.css("height",b(document).height());b.fancybox.center(true)};b.fancybox.center=function(a){var c,g;if(!h){g=a===true?1:0;c=U();!g&&(f.width()>c[0]||f.height()>c[1])||f.stop().animate({top:parseInt(Math.max(c[3]-20,c[3]+(c[1]-j.height()-40)*0.5-d.padding)),left:parseInt(Math.max(c[2]-20,c[2]+(c[0]-j.width()-40)*0.5-
d.padding))},typeof a=="number"?a:200)}};b.fancybox.init=function(){if(!b("#fancybox-wrap").length){b("body").append(m=b('<div id="fancybox-tmp"></div>'),t=b('<div id="fancybox-loading"><div></div></div>'),u=b('<div id="fancybox-overlay"></div>'),f=b('<div id="fancybox-wrap"></div>'));D=b('<div id="fancybox-outer"></div>').append('<div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div>').appendTo(f);
D.append(j=b('<div id="fancybox-content"></div>'),E=b('<a id="fancybox-close"></a>'),n=b('<div id="fancybox-title"></div>'),z=b('<a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a>'),A=b('<a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a>'));E.click(b.fancybox.close);t.click(b.fancybox.cancel);z.click(function(a){a.preventDefault();b.fancybox.prev()});A.click(function(a){a.preventDefault();b.fancybox.next()});
b.fn.mousewheel&&f.bind("mousewheel.fb",function(a,c){if(h)a.preventDefault();else if(b(a.target).get(0).clientHeight==0||b(a.target).get(0).scrollHeight===b(a.target).get(0).clientHeight){a.preventDefault();b.fancybox[c>0?"prev":"next"]()}});b.support.opacity||f.addClass("fancybox-ie");if(M){t.addClass("fancybox-ie6");f.addClass("fancybox-ie6");b('<iframe id="fancybox-hide-sel-frame" src="'+(/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank")+'" scrolling="no" border="0" frameborder="0" tabindex="-1"></iframe>').prependTo(D)}}};
b.fn.fancybox.defaults={padding:10,margin:40,opacity:false,modal:false,cyclic:false,scrolling:"auto",width:560,height:340,autoScale:true,autoDimensions:true,centerOnScroll:false,ajax:{},swf:{wmode:"transparent"},hideOnOverlayClick:true,hideOnContentClick:false,overlayShow:true,overlayOpacity:0.7,overlayColor:"#777",titleShow:true,titlePosition:"float",titleFormat:null,titleFromAlt:false,transitionIn:"fade",transitionOut:"fade",speedIn:300,speedOut:300,changeSpeed:300,changeFade:"fast",easingIn:"swing",
easingOut:"swing",showCloseButton:true,showNavArrows:true,enableEscapeButton:true,enableKeyboardNav:true,onStart:function(){},onCancel:function(){},onComplete:function(){},onCleanup:function(){},onClosed:function(){},onError:function(){}};b(document).ready(function(){b.fancybox.init()})})(jQuery);

/* Added by module "embed_images/viewer:fancybox", file "mods/embed_images/viewers/fancybox/viewer.js" */
// Settings for the FancyBox as used in Phorum. When other options are
// needed, then these can be overridden.
// For an overview of the possible settings, see http://fancybox.net/api
var phorum_fancybox_settings = {
    type               : 'image',
    titlePosition      : 'inside',
    autoScale          : true,
    margin             : 30,
    transitionIn       : 'elastic',
    transitionOut      : 'elastic',
    hideOnOverlayClick : true,
    hideOnContentClick : true
};

function mod_embed_images_initviewer(container, image, link, url, message_id)
{
    var a = document.createElement('a');
    a.href = url;
    a.rel = 'fancybox_' + message_id;
    container.appendChild(a);
    a.appendChild(image);
    $PJ(a).fancybox(phorum_fancybox_settings);

    if (link) {
        $PJ(link).fancybox(phorum_fancybox_settings);
    }
}



