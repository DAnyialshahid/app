 
<input class="_1jABB" value="Pakistan" placeholder="Search city, area or locality" style="display: none;">
 <input type="text" placeholder="Find Cars, Mobile Phones and more..." value="" data-aut-id="searchBox" style="display: none;">

        <script type='text/javascript' >window.NREUM||(NREUM={});NREUM.info = {"agent":"","beacon":"bam-cell.nr-data.net","errorBeacon":"bam-cell.nr-data.net","licenseKey":"1b2f7e1a11","applicationID":"178912446,178912447","applicationTime":182.608392,"transactionName":"ZFYHYUZUC0NSABJfVl0cIE1ERwBDQAkVGX52Z0oaHg==","queueTime":0,"ttGuid":"85c5c3deca1604b6","agentToken":null}; (window.NREUM||(NREUM={})).loader_config={xpid:"VQMGU1ZVDxABU1lbBgMDUlI=",licenseKey:"1b2f7e1a11",applicationID:"178912446"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(27),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{l?l-=1:o(c||new UncaughtException(t,e,n),!0)}catch(u){try{i("ierr",[u,s.now(),!0])}catch(d){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:s.now();i("err",[t,n])}var i=t("handle"),a=t(28),c=t("ee"),s=t("loader"),u=t("gos"),f=window.onerror,d=!1,p="nr@seenError",l=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),s.xhrWrappable&&t(14),d=!0)}c.on("fn-start",function(t,e,n){d&&(l+=1)}),c.on("fn-err",function(t,e,n){d&&!n[p]&&(u(n,p,function(){return!0}),this.thrown=!0,o(n))}),c.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),c.on("internal-error",function(t){i("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){L++,T=g.hash,this[f]=y.now()}function o(){L--,g.hash!==T&&i(0,!0);var t=y.now();this[h]=~~this[h]+t-this[f],this[d]=t}function i(t,e){E.emit("newURL",[""+g,e])}function a(t,e){t.on(e,function(){this[e]=y.now()})}var c="-start",s="-end",u="-body",f="fn"+c,d="fn"+s,p="cb"+c,l="cb"+s,h="jsTime",m="fetch",v="addEventListener",w=window,g=w.location,y=t("loader");if(w[v]&&y.xhrWrappable){var x=t(10),b=t(11),E=t(8),R=t(6),O=t(13),N=t(7),P=t(14),M=t(9),S=t("ee"),C=S.get("tracer");t(16),y.features.spa=!0;var T,L=0;S.on(f,r),b.on(p,r),M.on(p,r),S.on(d,o),b.on(l,o),M.on(l,o),S.buffer([f,d,"xhr-done","xhr-resolved"]),R.buffer([f]),O.buffer(["setTimeout"+s,"clearTimeout"+c,f]),P.buffer([f,"new-xhr","send-xhr"+c]),N.buffer([m+c,m+"-done",m+u+c,m+u+s]),E.buffer(["newURL"]),x.buffer([f]),b.buffer(["propagate",p,l,"executor-err","resolve"+c]),C.buffer([f,"no-"+f]),M.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(P,"send-xhr"+c),a(S,"xhr-resolved"),a(S,"xhr-done"),a(N,m+c),a(N,m+"-done"),a(M,"new-jsonp"),a(M,"jsonp-end"),a(M,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,L>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),c=t(12),s="learResourceTimings",u="addEventListener",f="resourcetimingbufferfull",d="bstResource",p="resource",l="-start",h="-end",m="fn"+l,v="fn"+h,w="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(8),"addEventListener"in window&&t(6);var x=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),o.on(v,function(t,e){var n=t[0];n instanceof x&&i("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),o.on(g+l,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),o.on(g+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),u in window.performance&&(window.performance["c"+s]?window.performance[u](f,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+s]()},!1):window.performance[u]("webkit"+f,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+s]()},!1)),document[u]("scroll",r,{passive:!0}),document[u]("keypress",r,!1),document[u]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(f);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[f,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),u=XMLHttpRequest,f="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(u.prototype)):u.prototype.hasOwnProperty(f)&&(o(window),o(u.prototype)),a.on(f+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=i(arguments),e={};o.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return o.emit(n+"start",[t,a],c),c.then(function(t){return o.emit(n+"end",[null,t],c),t},function(t){throw o.emit(n+"end",[t],c),t})})}var o=t("ee").get("fetch"),i=t(28),a=t(27);e.exports=o;var c=window,s="fetch-",u=s+"body-",f=["arrayBuffer","blob","json","text","formData"],d=c.Request,p=c.Response,l=c.fetch,h="prototype",m="nr@context";d&&p&&l&&(a(f,function(t,e){r(d[h],e,u),r(p[h],e,u)}),r(c,"fetch",s),o.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(s+"done",[null,e],n)}else o.emit(s+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t("wrap-function")(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){s.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){s.emit("jsonp-error",[],p),s.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var f=c(a),d="function"==typeof f.parent[f.key];if(d){var p={};u.inPlace(f.parent,[f.key],"cb-",p),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),s.emit("new-jsonp",[t.src],p)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(f);return e?e[1]:null}function a(t,e){var n=t.match(p),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function c(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var s=t("ee").get("jsonp"),u=t("wrap-function")(s);if(e.exports=s,o()){var f=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,p=/^(\w+)(\.|$)(.*)$/,l=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?u.inPlace(Node.prototype,l,"dom-"):(u.inPlace(HTMLElement.prototype,l,"dom-"),u.inPlace(HTMLHeadElement.prototype,l,"dom-"),u.inPlace(HTMLBodyElement.prototype,l,"dom-")),s.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t("wrap-function")(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=i.context(),n=c(t,"executor-",e,null,!1),r=new u(n);return i.context(r).getCtx=function(){return e},r}var o=t("wrap-function"),i=t("ee").get("promise"),a=t("ee").getOrSetContext,c=o(i),s=t(27),u=NREUM.o.PR;e.exports=i,u&&(window.Promise=r,["all","race"].forEach(function(t){var e=u[t];u[t]=function(n){function r(t){return function(){i.emit("propagate",[null,!o],a,!1,!1),o=o||!t}}var o=!1;s(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var a=e.apply(u,arguments),c=u.resolve(a);return c}}),["resolve","reject"].forEach(function(t){var e=u[t];u[t]=function(t){var n=e.apply(u,arguments);return t!==n&&i.emit("propagate",[t,!0],n,!1,!1),n}}),u.prototype["catch"]=function(t){return this.then(null,t)},u.prototype=Object.create(u.prototype,{constructor:{value:r}}),s(Object.getOwnPropertyNames(u),function(t,e){try{r[e]=u[e]}catch(n){}}),o.wrapInPlace(u.prototype,"then",function(t){return function(){var e=this,n=o.argsToArray.apply(this,arguments),r=a(e);r.promise=e,n[0]=c(n[0],"cb-",r,null,!1),n[1]=c(n[1],"cb-",r,null,!1);var s=t.apply(this,n);return r.nextPromise=s,i.emit("propagate",[e,!0],s,!1,!1),s}}),i.on("executor-start",function(t){t[0]=c(t[0],"resolve-",this,null,!1),t[1]=c(t[1],"resolve-",this,null,!1)}),i.on("executor-err",function(t,e,n){t[1](n)}),i.on("cb-end",function(t,e,n){i.emit("propagate",[n,!0],this.nextPromise,!1,!1)}),i.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=i.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+u})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t("wrap-function")(i),c="setTimeout",s="setInterval",u="clearTimeout",f="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[u,"clearImmediate"],u+d),i.on(s+f,r),i.on(c+f,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=f.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,f.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function i(t){y.push(t),h&&(b?b.then(a):v?v(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(6);var u=t("ee"),f=u.get("xhr"),d=t("wrap-function")(f),p=NREUM.o,l=p.XHR,h=p.MO,m=p.PR,v=p.SI,w="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=f;var x=window.XMLHttpRequest=function(t){var e=new l(t);try{f.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}return e};if(s(l,x),x.prototype=l.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),f.on("send-xhr-start",function(t,e){r(t,e),i(e)}),f.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else u.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,u=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=l.generateSpanId(),m=l.generateTraceId(),v=Date.now(),w={spanId:h,traceId:m,timestamp:v};return(t.sameOrigin||s(t)&&p())&&(w.traceContextParentHeader=o(h,m),w.traceContextStateHeader=i(h,v,n,r,u)),(t.sameOrigin&&!f()||!t.sameOrigin&&s(t)&&d())&&(w.newrelicHeader=a(h,m,v,n,r,u)),w}function o(t,e){return"00-"+e+"-"+t+"-01"}function i(t,e,n,r,o){var i=0,a="",c=1,s="",u="";return o+"@nr="+i+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+u+"-"+e}function a(t,e,n,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:e,ti:n}};return i&&r!==i&&(c.d.tk=i),btoa(JSON.stringify(c))}function c(t){return u()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var o=h(n.allowed_origins[r]);if(t.hostname===o.hostname&&t.protocol===o.protocol&&t.port===o.port){e=!0;break}}return e}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function p(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var l=t(24),h=t(17);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):i(this,t),n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function o(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function i(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(17),u=t(15).generateTracePayload,f=t("ee"),d=["load","error","abort","timeout"],p=d.length,l=t("id"),h=t(21),m=t(20),v=t(18),w=window.XMLHttpRequest;a.features.xhr=!0,t(14),t(7),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){i(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=u(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=m(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<p;c++)e.addEventListener(d[c],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof w&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),f.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var o=u(this.parsedOrigin);if(o&&(o.newrelicHeader||o.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),e(i.headers,o)&&(this.dt=o),t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&e(t[0].headers,o)&&(this.dt=o)})}},{}],17:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,o={};e.href=t,o.port=e.port;var i=e.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=e.hostname||n.hostname,o.pathname=e.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return o.sameOrigin=a&&(!e.hostname||c),"/"===o.pathname&&(r[t]=o),o}},{}],18:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?o(t.response):"text"===n||""===n||void 0===n?o(t.responseText):void 0}var o=t(20);e.exports=r},{}],19:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[u.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(27),c=t(28),s=t("ee").get("tracer"),u=t("loader"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){f[e]=o(p+e,!0,"api")}),f.addPageAction=o(p+"addPageAction",!0),f.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[u.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[u.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,u.now(),!1,e])}},{}],20:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],21:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],22:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-a}function o(){return i}var i=(new Date).getTime(),a=i,c=t(29);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=o},{}],23:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function o(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function i(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!v){var e=Math.round(t.timeStamp),n={type:t.type};e<=p.now()?n.fid=p.now()-e:e>p.offset&&e<=Date.now()?(e-=p.offset,n.fid=p.now()-e):e=p.now(),v=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[p.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,u,f,d=t("handle"),p=t("loader"),l=t(26),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}u=new PerformanceObserver(o);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}f=new PerformanceObserver(i);try{f.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var v=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(t){document.addEventListener(t,a,!1)})}l(c)}},{}],24:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<i.length;c++)o=i[c],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){return a(16)}function i(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,o=window.crypto||window.msCrypto;o&&o.getRandomValues&&Uint8Array&&(n=o.getRandomValues(new Uint8Array(31)));for(var i=[],a=0;a<t;a++)i.push(e().toString(16));return i.join("")}e.exports={generateUuid:r,generateSpanId:o,generateTraceId:i}},{}],25:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(o="Safari",i=s[1])}e.exports={agent:o,version:i,match:r}},{}],26:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[o]?"hidden":"visible")}"addEventListener"in document&&i&&document.addEventListener(i,e,!1)}e.exports=r;var o,i,a;"undefined"!=typeof document.hidden?(o="hidden",i="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",i="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",i="webkitvisibilitychange",a="webkitVisibilityState")},{}],27:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],28:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],29:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?u(t,s,a):a()}function n(n,r,o,i,a){if(a!==!1&&(a=!0),!l.aborted||i){t&&a&&t(n,r,o);for(var c=e(o),s=m(n),u=s.length,f=0;f<u;f++)s[f].apply(c,r);var p=d[y[n]];return p&&p.push([x,n,r,c]),c}}function i(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return p[t]=p[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:i,addEventListener:i,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:c,aborted:!1};return x}function i(t){return u(t,s,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var s="nr@context",u=t("gos"),f=t(27),d={},p={},l=e.exports=o();e.exports.getOrSetContext=i,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!b++){var t=x.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();s(g,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+x.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+t.agent,e.parentNode.insertBefore(r,e)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+x.offset],null,"api")}var a=t(22),c=t("handle"),s=t(27),u=t("ee"),f=t(25),d=window,p=d.document,l="addEventListener",h="attachEvent",m=d.XMLHttpRequest,v=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var w=""+location,g={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1198.min.js"},y=m&&v&&v[l]&&!/CriOS/.test(navigator.userAgent),x=e.exports={offset:a.getLastTimestamp(),now:a,origin:w,features:{},xhrWrappable:y,userAgent:f};t(19),t(23),p[l]?(p[l]("DOMContentLoaded",i,!1),d[l]("load",r,!1)):(p[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var b=0},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,s,u){function nrWrapper(){var i,a,f,p;try{a=this,i=d(arguments),f="function"==typeof r?r(i,a):r||{}}catch(l){o([l,"",[i,a,s],f],t)}c(n+"start",[i,a,s],f,u);try{return p=e.apply(a,i)}catch(h){throw c(n+"err",[i,a,h],f,u),h}finally{c(n+"end",[i,a,p],f,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,i(e,nrWrapper,t),nrWrapper)}function r(t,e,r,o,i){r||(r="");var c,s,u,f="-"===r.charAt(0);for(u=0;u<e.length;u++)s=e[u],c=t[s],a(c)||(t[s]=n(c,f?s+r:r,o,s,i))}function c(n,r,i,a){if(!h||e){var c=h;h=!0;try{t.emit(n,r,i,e,a)}catch(s){o([s,n,r,i],t)}h=c}}return t||(t=f),n.inPlace=r,n.flag=p,n}function o(t,e){e||(e=f);try{e.emit("internal-error",t)}catch(n){}}function i(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(i){o([i],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function c(t,e){var n=e(t);return n[p]=t,i(t,n,f),n}function s(t,e,n){var r=t[e];t[e]=c(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var f=t("ee"),d=t(28),p="nr@original",l=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=s,e.exports.argsToArray=u},{}]},{},["loader",2,16,5,3,4]);</script>
        <script data-rh="true" type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","url":"https://www.olx.com.pk","potentialAction":{"@type":"SearchAction","target":"https://www.olx.com.pk/items/q-{search_term_string}","query-input":"required name=search_term_string"}}</script>
        <script>


var _cf = _cf || [],
  bmak = bmak && bmak.hasOwnProperty("ver") && bmak.hasOwnProperty("sed") ? bmak : {
    ver: 1.66,
    ke_cnt_lmt: 150,
    mme_cnt_lmt: 100,
    mduce_cnt_lmt: 75,
    pme_cnt_lmt: 25,
    pduce_cnt_lmt: 25,
    tme_cnt_lmt: 25,
    tduce_cnt_lmt: 25,
    doe_cnt_lmt: 10,
    dme_cnt_lmt: 10,
    vc_cnt_lmt: 100,
    doa_throttle: 0,
    dma_throttle: 0,
    session_id: "default_session",
    js_post: !1,
    loc: "",
    cf_url: "https:" === document.location.protocol ? "https://" : "http://",
    params_url: ("https:" === document.location.protocol ? "https://" : "http://") + document.location.hostname + "/get_params",
    auth: "",
    api_public_key: "afSbep8yjnZUjq3aL010jO15Sawj2VZfdYK8uY90uxq",
    aj_lmt_doact: 1,
    aj_lmt_dmact: 1,
    aj_lmt_tact: 1,
    ce_js_post: 0,
    init_time: 0,
    informinfo: "",
    prevfid: -1,
    fidcnt: 0,
    sensor_data: 0,
    ins: null,
    cns: null,
    enGetLoc: 0,
    enReadDocUrl: 1,
    disFpCalOnTimeout: 0,
    xagg: -1,
    pen: -1,
    brow: "",
    browver: "",
    psub: "-",
    lang: "-",
    prod: "-",
    plen: -1,
    doadma_en: 0,
    sdfn: [],
    d2: 0,
    d3: 0,
    thr: 0,
    cs: "0a46G5m17Vrp4o4c",
    hn: "unk",
    z1: 0,
    o9: 0,
    vc: "",
    y1: 2016,
    ta: 0,
    tst: -1,
    t_tst: 0,
    ckie: "_abck",
    n_ck: "0",
    ckurl: 0,
    bm: !1,
    mr: "-1",
    altFonts: !1,
    rst: !1,
    runFonts: !1,
    fsp: !1,
    firstLoad: !0,
    pstate: !1,
    mn_mc_lmt: 10,
    mn_state: 0,
    mn_mc_indx: 0,
    mn_sen: 0,
    mn_tout: 100,
    mn_stout: 1e3,
    mn_ct: 1,
    mn_cc: "",
    mn_cd: 1e4,
    mn_lc: [],
    mn_ld: [],
    mn_lcl: 0,
    mn_al: [],
    mn_il: [],
    mn_tcl: [],
    mn_r: [],
    mn_rt: 0,
    mn_wt: 0,
    mn_abck: "",
    mn_psn: "",
    mn_ts: "",
    mn_lg: [],
    loap: 1,
    dcs: 0,
    ir: function() {
      bmak.start_ts = Date.now ? Date.now() : +new Date(), bmak.kact = "", bmak.ke_cnt = 0, bmak.ke_vel = 0, bmak.mact = "", bmak.mme_cnt = 0, bmak.mduce_cnt = 0, bmak.me_vel = 0, bmak.pact = "", bmak.pme_cnt = 0, bmak.pduce_cnt = 0, bmak.pe_vel = 0, bmak.tact = "", bmak.tme_cnt = 0, bmak.tduce_cnt = 0, bmak.te_vel = 0, bmak.doact = "", bmak.doe_cnt = 0, bmak.doe_vel = 0, bmak.dmact = "", bmak.dme_cnt = 0, bmak.dme_vel = 0, bmak.vcact = "", bmak.vc_cnt = 0, bmak.aj_indx = 0, bmak.aj_ss = 0, bmak.aj_type = -1, bmak.aj_indx_doact = 0, bmak.aj_indx_dmact = 0, bmak.aj_indx_tact = 0, bmak.me_cnt = 0, bmak.pe_cnt = 0, bmak.te_cnt = 0, bmak.nav_perm = "", bmak.brv = 0, bmak.hbCalc = !1, bmak.fmh = "", bmak.fmz = "", bmak.ssh = "", bmak.wv = "", bmak.wr = "", bmak.weh = "", bmak.wl = 0;
    },
    get_cf_date: function() {
      return Date.now ? Date.now() : +new Date();
    },
    sd_debug: function(a) {
      if (!bmak.js_post) {
        var t = a;
        "string" == typeof _sd_trace ? _sd_trace += t : _sd_trace = t;
      }
    },
    pi: function(a) {
      return parseInt(a);
    },
    uar: function() {
      return window.navigator.userAgent.replace(/\\|"/g, "");
    },
    gd: function() {
      var a = bmak.uar(),
        t = "" + bmak.ab(a),
        e = bmak.start_ts / 2,
        n = -1,
        o = -1,
        m = -1,
        r = -1,
        i = -1,
        c = -1,
        b = -1;

      try {
        n = window.screen ? window.screen.availWidth : -1;
      } catch (a) {
        n = -1;
      }

      try {
        o = window.screen ? window.screen.availHeight : -1;
      } catch (a) {
        o = -1;
      }

      try {
        m = window.screen ? window.screen.width : -1;
      } catch (a) {
        m = -1;
      }

      try {
        r = window.screen ? window.screen.height : -1;
      } catch (a) {
        r = -1;
      }

      try {
        i = window.innerHeight || (document.body && "clientHeight" in document.body ? document.body.clientHeight : document.documentElement && "clientHeight" in document.documentElement ? document.documentElement.clientHeight : -1);
      } catch (a) {
        i = -1;
      }

      try {
        c = window.innerWidth || (document.body && "clientWidth" in document.body ? document.body.clientWidth : document.documentElement && "clientWidth" in document.documentElement ? document.documentElement.clientWidth : -1);
      } catch (a) {
        c = -1;
      }

      try {
        b = "outerWidth" in window && void 0 !== window.outerWidth ? window.outerWidth : -1;
      } catch (a) {
        b = -1;
      }

      bmak.z1 = bmak.pi(bmak.start_ts / (bmak.y1 * bmak.y1));
      var d = Math.random(),
        k = bmak.pi(1e3 * d / 2),
        s = d + "";
      return s = s.slice(0, 11) + k, bmak.gbrv(), bmak.get_browser(), bmak.bc(), bmak.bmisc(), a + ",uaend," + bmak.xagg + "," + bmak.psub + "," + bmak.lang + "," + bmak.prod + "," + bmak.plen + "," + bmak.pen + "," + bmak.wen + "," + bmak.den + "," + bmak.z1 + "," + bmak.d3 + "," + n + "," + o + "," + m + "," + r + "," + c + "," + i + "," + b + "," + bmak.bd() + "," + t + "," + s + "," + e + "," + bmak.brv + ",loc:" + bmak.loc;
    },
    get_browser: function() {
      navigator.productSub && (bmak.psub = navigator.productSub), navigator.language && (bmak.lang = navigator.language), navigator.product && (bmak.prod = navigator.product), bmak.plen = void 0 !== navigator.plugins ? navigator.plugins.length : -1;
    },
    gbrv: function() {
      navigator.brave && navigator.brave.isBrave().then(function(a) {
        bmak.brv = a ? 1 : 0;
      }).catch(function(a) {
        bmak.brv = 0;
      });
    },
    bc: function() {
      var a = window.addEventListener ? 1 : 0,
        t = window.XMLHttpRequest ? 1 : 0,
        e = window.XDomainRequest ? 1 : 0,
        n = window.emit ? 1 : 0,
        o = window.DeviceOrientationEvent ? 1 : 0,
        m = window.DeviceMotionEvent ? 1 : 0,
        r = window.TouchEvent ? 1 : 0,
        i = window.spawn ? 1 : 0,
        c = window.chrome ? 1 : 0,
        b = Function.prototype.bind ? 1 : 0,
        d = window.Buffer ? 1 : 0,
        k = window.PointerEvent ? 1 : 0;

      try {
        var s = window.innerWidth ? 1 : 0;
      } catch (a) {
        var s = 0;
      }

      try {
        var l = window.outerWidth ? 1 : 0;
      } catch (a) {
        var l = 0;
      }

      bmak.xagg = a + (t << 1) + (e << 2) + (n << 3) + (o << 4) + (m << 5) + (r << 6) + (i << 7) + (s << 8) + (l << 9) + (c << 10) + (b << 11) + (d << 12) + (k << 13);
    },
    bmisc: function() {
      bmak.pen = window._phantom ? 1 : 0, bmak.wen = window.webdriver ? 1 : 0, bmak.den = window.domAutomation ? 1 : 0;
    },
    bd: function() {
      var a = [],
        t = window.callPhantom ? 1 : 0;
      a.push(",cpen:" + t);
      var e = 0;
      window.ActiveXObject && "ActiveXObject" in window && (e = 1), a.push("i1:" + e);
      var n = "number" == typeof document.documentMode ? 1 : 0;
      a.push("dm:" + n);
      var o = window.chrome && window.chrome.webstore ? 1 : 0;
      a.push("cwen:" + o);
      var m = navigator.onLine ? 1 : 0;
      a.push("non:" + m);
      var r = window.opera ? 1 : 0;
      a.push("opc:" + r);
      var i = "undefined" != typeof InstallTrigger ? 1 : 0;
      a.push("fc:" + i);
      var c = window.HTMLElement && Object.prototype.toString.call(window.HTMLElement).indexOf("Constructor") > 0 ? 1 : 0;
      a.push("sc:" + c);
      var b = "function" == typeof window.RTCPeerConnection || "function" == typeof window.mozRTCPeerConnection || "function" == typeof window.webkitRTCPeerConnection ? 1 : 0;
      a.push("wrc:" + b);
      var d = "mozInnerScreenY" in window ? window.mozInnerScreenY : 0;
      a.push("isc:" + d), bmak.d2 = bmak.pi(bmak.z1 / 23);
      var k = "function" == typeof navigator.vibrate ? 1 : 0;
      a.push("vib:" + k);
      var s = "function" == typeof navigator.getBattery ? 1 : 0;
      a.push("bat:" + s);
      var l = Array.prototype.forEach ? 0 : 1;
      a.push("x11:" + l);
      var u = "FileReader" in window ? 1 : 0;
      return a.push("x12:" + u), a.join(",");
    },
    fas: function() {
      try {
        return Boolean(navigator.credentials) + (Boolean(navigator.appMinorVersion) << 1) + (Boolean(navigator.bluetooth) << 2) + (Boolean(navigator.storage) << 3) + (Boolean(Math.imul) << 4) + (Boolean(navigator.getGamepads) << 5) + (Boolean(navigator.getStorageUpdates) << 6) + (Boolean(navigator.hardwareConcurrency) << 7) + (Boolean(navigator.mediaDevices) << 8) + (Boolean(navigator.mozAlarms) << 9) + (Boolean(navigator.mozConnection) << 10) + (Boolean(navigator.mozIsLocallyAvailable) << 11) + (Boolean(navigator.mozPhoneNumberService) << 12) + (Boolean(navigator.msManipulationViewsEnabled) << 13) + (Boolean(navigator.permissions) << 14) + (Boolean(navigator.registerProtocolHandler) << 15) + (Boolean(navigator.requestMediaKeySystemAccess) << 16) + (Boolean(navigator.requestWakeLock) << 17) + (Boolean(navigator.sendBeacon) << 18) + (Boolean(navigator.serviceWorker) << 19) + (Boolean(navigator.storeWebWideTrackingException) << 20) + (Boolean(navigator.webkitGetGamepads) << 21) + (Boolean(navigator.webkitTemporaryStorage) << 22) + (Boolean(Number.parseInt) << 23) + (Boolean(Math.hypot) << 24);
      } catch (a) {
        return 0;
      }
    },
    getmr: function() {
      try {
        if ("undefined" == typeof performance || void 0 === performance.now || "undefined" == typeof JSON) return void(bmak.mr = "undef");

        for (var a = "", t = 1e3, e = [Math.abs, Math.acos, Math.asin, Math.atanh, Math.cbrt, Math.exp, Math.random, Math.round, Math.sqrt, isFinite, isNaN, parseFloat, parseInt, JSON.parse], n = 0; n < e.length; n++) {
          var o = [],
            m = 0,
            r = performance.now(),
            i = 0,
            c = 0;

          if (void 0 !== e[n]) {
            for (i = 0; i < t && m < .6; i++) {
              for (var b = performance.now(), d = 0; d < 4e3; d++) e[n](3.14);

              var k = performance.now();
              o.push(Math.round(1e3 * (k - b))), m = k - r;
            }

            var s = o.sort();
            c = s[Math.floor(s.length / 2)] / 5;
          }

          a = a + c + ",";
        }

        bmak.mr = a;
      } catch (a) {
        bmak.mr = "exception";
      }
    },
    sed: function() {
      var a;
      a = window.$cdc_asdjflasutopfhvcZLmcfl_ || document.$cdc_asdjflasutopfhvcZLmcfl_ ? "1" : "0";
      var t;
      t = null != window.document.documentElement.getAttribute("webdriver") ? "1" : "0";
      var e;
      e = void 0 !== navigator.webdriver && navigator.webdriver ? "1" : "0";
      var n;
      n = void 0 !== window.webdriver ? "1" : "0";
      var o;
      o = void 0 !== window.XPathResult || void 0 !== document.XPathResult ? "1" : "0";
      var m;
      m = null != window.document.documentElement.getAttribute("driver") ? "1" : "0";
      var r;
      return r = null != window.document.documentElement.getAttribute("selenium") ? "1" : "0", [a, t, e, n, o, m, r].join(",");
    },
    cma: function(a, t) {
      try {
        if (1 == t && bmak.mme_cnt < bmak.mme_cnt_lmt || 1 != t && bmak.mduce_cnt < bmak.mduce_cnt_lmt) {
          var e = a || window.event,
            n = -1,
            o = -1;
          e && e.pageX && e.pageY ? (n = Math.floor(e.pageX), o = Math.floor(e.pageY)) : e && e.clientX && e.clientY && (n = Math.floor(e.clientX), o = Math.floor(e.clientY));
          var m = e.toElement;
          null == m && (m = e.target);
          var r = bmak.gf(m),
            i = bmak.get_cf_date() - bmak.start_ts,
            c = bmak.me_cnt + "," + t + "," + i + "," + n + "," + o;

          if (1 != t) {
            c = c + "," + r;
            var b = void 0 !== e.which ? e.which : e.button;
            null != b && 1 != b && (c = c + "," + b);
          }

          void 0 !== e.isTrusted && !1 === e.isTrusted && (c += ",it0"), c += ";", bmak.me_vel = bmak.me_vel + bmak.me_cnt + t + i + n + o, bmak.mact = bmak.mact + c, bmak.ta += i;
        }

        1 == t ? bmak.mme_cnt++ : bmak.mduce_cnt++, bmak.me_cnt++, bmak.js_post && 3 == t && (bmak.aj_type = 1, bmak.bpd(), bmak.pd(!0), bmak.ce_js_post = 1);
      } catch (a) {}
    },
    x2: function() {
      var a = bmak.ff,
        t = a(98) + a(109) + a(97) + a(107),
        e = a(103) + a(101) + a(116) + a(95) + a(99) + a(102) + a(95) + a(100) + a(97) + a(116) + a(101),
        n = window[t][e],
        o = 0;
      return "function" == typeof n && (o = n()), o;
    },
    np: function() {
      var a = [],
        t = ["geolocation", "notifications", "push", "midi", "camera", "microphone", "speaker", "device-info", "background-sync", "bluetooth", "persistent-storage", "ambient-light-sensor", "accelerometer", "gyroscope", "magnetometer", "clipboard", "accessibility-events", "clipboard-read", "clipboard-write", "payment-handler"];

      try {
        if (!navigator.permissions) return void(bmak.nav_perm = 6);
        bmak.nav_perm = 8;

        var e = function(t, e) {
            return navigator.permissions.query({
              name: t
            }).then(function(t) {
              switch (t.state) {
                case "prompt":
                  a[e] = 1;
                  break;

                case "granted":
                  a[e] = 2;
                  break;

                case "denied":
                  a[e] = 0;
                  break;

                default:
                  a[e] = 5;
              }
            }).catch(function(t) {
              a[e] = -1 !== t.message.indexOf("is not a valid enum value of type PermissionName") ? 4 : 3;
            });
          },
          n = t.map(function(a, t) {
            return e(a, t);
          });

        Promise.all(n).then(function() {
          bmak.nav_perm = a.join("");
        });
      } catch (a) {
        bmak.nav_perm = 7;
      }
    },
    cpa: function(a, t) {
      try {
        var e = !1;

        if (1 == t && bmak.pme_cnt < bmak.pme_cnt_lmt || 1 != t && bmak.pduce_cnt < bmak.pduce_cnt_lmt) {
          var n = a || window.event;

          if (n && "mouse" != n.pointerType) {
            e = !0;
            var o = -1,
              m = -1;
            n && n.pageX && n.pageY ? (o = Math.floor(n.pageX), m = Math.floor(n.pageY)) : n && n.clientX && n.clientY && (o = Math.floor(n.clientX), m = Math.floor(n.clientY));
            var r = bmak.get_cf_date() - bmak.start_ts,
              i = bmak.pe_cnt + "," + t + "," + r + "," + o + "," + m;
            void 0 !== n.isTrusted && !1 === n.isTrusted && (i += ",0"), bmak.pe_vel = bmak.pe_vel + bmak.pe_cnt + t + r + o + m, bmak.pact = bmak.pact + i + ";", bmak.ta += r, 1 == t ? bmak.pme_cnt++ : bmak.pduce_cnt++;
          }
        }

        1 == t ? bmak.pme_cnt++ : bmak.pduce_cnt++, bmak.pe_cnt++, bmak.js_post && 3 == t && e && (bmak.aj_type = 2, bmak.bpd(), bmak.pd(!0), bmak.ce_js_post = 1);
      } catch (a) {}
    },
    ab: function(a) {
      if (null == a) return -1;

      try {
        for (var t = 0, e = 0; e < a.length; e++) {
          var n = a.charCodeAt(e);
          n < 128 && (t += n);
        }

        return t;
      } catch (a) {
        return -2;
      }
    },
    ff: function(a) {
      return String.fromCharCode(a);
    },
    cal_dis: function(a) {
      var t = a[0] - a[1],
        e = a[2] - a[3],
        n = a[4] - a[5],
        o = Math.sqrt(t * t + e * e + n * n);
      return Math.floor(o);
    },
    to: function() {
      var a = bmak.x2() % 1e7;
      bmak.d3 = a;

      for (var t = a, e = bmak.pi(bmak.ff(51)), n = 0; n < 5; n++) {
        var o = bmak.pi(a / Math.pow(10, n)) % 10,
          m = o + 1;
        op = bmak.cc(o), t = op(t, m);
      }

      bmak.o9 = t * e;
    },
    jrs: function(a) {
      for (var t = Math.floor(1e5 * Math.random() + 1e4), e = String(a * t), n = 0, o = [], m = e.length >= 18; o.length < 6;) o.push(parseInt(e.slice(n, n + 2))), n = m ? n + 3 : n + 2;

      return [t, bmak.cal_dis(o)];
    },
    fm: function() {
      var a = ["Monospace", "Wingdings 2", "ITC Bodoni 72 Bold", "Menlo", "Gill Sans MT", "Lucida Sans", "Bodoni 72", "Serif", "Shree Devanagari 714", "Microsoft Tai Le", "Nimbus Roman No 9 L", "Candara", "Press Start 2P", "Waseem"],
        t = document.createElement("span");
      t.innerHTML = "mmmmmmmmlli", t.style.fontSize = "192px";
      var e = "",
        n = document.getElementsByTagName("body")[0];

      if (n) {
        for (var o in a) t.style.fontFamily = a[o], n.appendChild(t), e += a[o] + ":" + t.offsetWidth + "," + t.offsetHeight + ";", n.removeChild(t);

        bmak.fmh = bmak.ats(bmak.mn_s(e));
      } else bmak.fmh = "";

      bmak.fmz = "devicePixelRatio" in window && void 0 !== window.devicePixelRatio ? window.devicePixelRatio : -1;
    },
    wgl: function() {},
    csh: function() {
      if (window.speechSynthesis) {
        var a = window.speechSynthesis.getVoices();

        if (a.length > 0) {
          for (var t = "", e = 0; e < a.length; e++) t += a[e].voiceURI + "_" + a[e].lang;

          bmak.ssh = bmak.ats(bmak.mn_s(t));
        } else bmak.ssh = "0";
      } else bmak.ssh = "n";
    },
    gf: function(a) {
      var t;
      if (t = null == a ? document.activeElement : a, null == document.activeElement) return -1;
      var e = t.getAttribute("name");

      if (null == e) {
        var n = t.getAttribute("id");
        return null == n ? -1 : bmak.ab(n);
      }

      return bmak.ab(e);
    },
    cc: function(a) {
      var t = a % 4;
      2 == t && (t = 3);

      var e = 42 + t,
        n = function(a, t) {
          return 0;
        };

      if (42 == e) var n = function(a, t) {
        return a * t;
      };
      else if (43 == e) var n = function(a, t) {
        return a + t;
      };
      else var n = function(a, t) {
        return a - t;
      };
      return n;
    },
    isIgn: function(a) {
      var t = document.activeElement;
      if (null == document.activeElement) return 0;
      var e = t.getAttribute("type");
      return 1 == (null == e ? -1 : bmak.get_type(e)) && bmak.fidcnt > 12 && -2 == a ? 1 : 0;
    },
    cka: function(a, t) {
      try {
        var e = a || window.event,
          n = -1,
          o = 1;

        if (bmak.ke_cnt < bmak.ke_cnt_lmt && e) {
          n = e.keyCode;
          var m = e.charCode,
            r = e.shiftKey ? 1 : 0,
            i = e.ctrlKey ? 1 : 0,
            c = e.metaKey ? 1 : 0,
            b = e.altKey ? 1 : 0,
            d = 8 * r + 4 * i + 2 * c + b,
            k = bmak.get_cf_date() - bmak.start_ts,
            s = bmak.gf(null),
            l = 0;
          m && n && (n = 0 != m && 0 != n && m != n ? -1 : 0 != n ? n : m), 0 == i && 0 == c && 0 == b && n >= 32 && (n = 3 == t && n >= 32 && n <= 126 ? -2 : n >= 33 && n <= 47 ? -3 : n >= 112 && n <= 123 ? -4 : -2), s != bmak.prevfid ? (bmak.fidcnt = 0, bmak.prevfid = s) : bmak.fidcnt = bmak.fidcnt + 1;

          if (0 == bmak.isIgn(n)) {
            var u = bmak.ke_cnt + "," + t + "," + k + "," + n + "," + l + "," + d + "," + s;
            void 0 !== e.isTrusted && !1 === e.isTrusted && (u += ",0"), u += ";", bmak.kact = bmak.kact + u, bmak.ke_vel = bmak.ke_vel + bmak.ke_cnt + t + k + n + d + s, bmak.ta += k;
          } else o = 0;
        }

        o && e && bmak.ke_cnt++, !bmak.js_post || 1 != t || 13 != n && 9 != n || (bmak.aj_type = 3, bmak.bpd(), bmak.pd(!0), bmak.ce_js_post = 1);
      } catch (a) {}
    },
    cta: function(a, t) {
      try {
        if (1 == t && bmak.tme_cnt < bmak.tme_cnt_lmt || 1 != t && bmak.tduce_cnt < bmak.tduce_cnt_lmt) {
          var e = a || window.event,
            n = -1,
            o = -1;
          e && e.pageX && e.pageY ? (n = Math.floor(e.pageX), o = Math.floor(e.pageY)) : e && e.clientX && e.clientY && (n = Math.floor(e.clientX), o = Math.floor(e.clientY));
          var m = bmak.get_cf_date() - bmak.start_ts,
            r = bmak.te_cnt + "," + t + "," + m + "," + n + "," + o;
          void 0 !== e.isTrusted && !1 === e.isTrusted && (r += ",0"), bmak.tact = bmak.tact + r + ";", bmak.ta += m, bmak.te_vel = bmak.te_vel + bmak.te_cnt + t + m + n + o, bmak.doa_throttle = 0, bmak.dma_throttle = 0;
        }

        1 == t ? bmak.tme_cnt++ : bmak.tduce_cnt++, bmak.te_cnt++, bmak.js_post && 2 == t && bmak.aj_indx_tact < bmak.aj_lmt_tact && (bmak.aj_type = 5, bmak.bpd(), bmak.pd(!0), bmak.ce_js_post = 1, bmak.aj_indx_tact++);
      } catch (a) {}
    },
    getFloatVal: function(a) {
      try {
        if (-1 != bmak.chknull(a) && !isNaN(a)) {
          var t = parseFloat(a);
          if (!isNaN(t)) return t.toFixed(2);
        }
      } catch (a) {}

      return -1;
    },
    cdoa: function(a) {
      try {
        if (bmak.doe_cnt < bmak.doe_cnt_lmt && bmak.doa_throttle < 2 && a) {
          var t = bmak.get_cf_date() - bmak.start_ts,
            e = bmak.getFloatVal(a.alpha),
            n = bmak.getFloatVal(a.beta),
            o = bmak.getFloatVal(a.gamma),
            m = bmak.doe_cnt + "," + t + "," + e + "," + n + "," + o;
          void 0 !== a.isTrusted && !1 === a.isTrusted && (m += ",0"), bmak.doact = bmak.doact + m + ";", bmak.ta += t, bmak.doe_vel = bmak.doe_vel + bmak.doe_cnt + t, bmak.doe_cnt++;
        }

        bmak.js_post && bmak.doe_cnt > 1 && bmak.aj_indx_doact < bmak.aj_lmt_doact && (bmak.aj_type = 6, bmak.bpd(), bmak.pd(!0), bmak.ce_js_post = 1, bmak.aj_indx_doact++), bmak.doa_throttle++;
      } catch (a) {}
    },
    cdma: function(a) {
      try {
        if (bmak.dme_cnt < bmak.dme_cnt_lmt && bmak.dma_throttle < 2 && a) {
          var t = bmak.get_cf_date() - bmak.start_ts,
            e = -1,
            n = -1,
            o = -1;
          a.acceleration && (e = bmak.getFloatVal(a.acceleration.x), n = bmak.getFloatVal(a.acceleration.y), o = bmak.getFloatVal(a.acceleration.z));
          var m = -1,
            r = -1,
            i = -1;
          a.accelerationIncludingGravity && (m = bmak.getFloatVal(a.accelerationIncludingGravity.x), r = bmak.getFloatVal(a.accelerationIncludingGravity.y), i = bmak.getFloatVal(a.accelerationIncludingGravity.z));
          var c = -1,
            b = -1,
            d = 1;
          a.rotationRate && (c = bmak.getFloatVal(a.rotationRate.alpha), b = bmak.getFloatVal(a.rotationRate.beta), d = bmak.getFloatVal(a.rotationRate.gamma));
          var k = bmak.dme_cnt + "," + t + "," + e + "," + n + "," + o + "," + m + "," + r + "," + i + "," + c + "," + b + "," + d;
          void 0 !== a.isTrusted && !1 === a.isTrusted && (k += ",0"), bmak.dmact = bmak.dmact + k + ";", bmak.ta += t, bmak.dme_vel = bmak.dme_vel + bmak.dme_cnt + t, bmak.dme_cnt++;
        }

        bmak.js_post && bmak.dme_cnt > 1 && bmak.aj_indx_dmact < bmak.aj_lmt_dmact && (bmak.aj_type = 7, bmak.bpd(), bmak.pd(!0), bmak.ce_js_post = 1, bmak.aj_indx_dmact++), bmak.dma_throttle++;
      } catch (a) {}
    },
    get_type: function(a) {
      return a = a.toLowerCase(), "text" == a || "search" == a || "url" == a || "email" == a || "tel" == a || "number" == a ? 0 : "password" == a ? 1 : 2;
    },
    chknull: function(a) {
      return null == a ? -1 : a;
    },
    getforminfo: function() {
      for (var a = "", t = "", e = document.getElementsByTagName("input"), n = -1, o = 0; o < e.length; o++) {
        var m = e[o],
          r = bmak.ab(m.getAttribute("name")),
          i = bmak.ab(m.getAttribute("id")),
          c = m.getAttribute("required"),
          b = null == c ? 0 : 1,
          d = m.getAttribute("type"),
          k = null == d ? -1 : bmak.get_type(d),
          s = m.getAttribute("autocomplete");
        null == s ? n = -1 : (s = s.toLowerCase(), n = "off" == s ? 0 : "on" == s ? 1 : 2);
        var l = m.defaultValue,
          u = m.value,
          _ = 0,
          f = 0;
        l && 0 != l.length && (f = 1), !u || 0 == u.length || f && u == l || (_ = 1), 2 != k && (a = a + k + "," + n + "," + _ + "," + b + "," + i + "," + r + "," + f + ";"), t = t + _ + ";";
      }

      return null == bmak.ins && (bmak.ins = t), bmak.cns = t, a;
    },
    startdoadma: function() {
      0 == bmak.doadma_en && window.addEventListener && (window.addEventListener("deviceorientation", bmak.cdoa, !0), window.addEventListener("devicemotion", bmak.cdma, !0), bmak.doadma_en = 1), bmak.doa_throttle = 0, bmak.dma_throttle = 0;
    },
    updatet: function() {
      return bmak.get_cf_date() - bmak.start_ts;
    },
    htm: function(a) {
      bmak.cta(a, 1);
    },
    hts: function(a) {
      bmak.cta(a, 2);
    },
    hte: function(a) {
      bmak.cta(a, 3);
    },
    htc: function(a) {
      bmak.cta(a, 4);
    },
    hmm: function(a) {
      bmak.cma(a, 1);
    },
    hc: function(a) {
      bmak.cma(a, 2);
    },
    hmd: function(a) {
      bmak.cma(a, 3);
    },
    hmu: function(a) {
      bmak.cma(a, 4);
    },
    hpd: function(a) {
      bmak.cpa(a, 3);
    },
    hpu: function(a) {
      bmak.cpa(a, 4);
    },
    hkd: function(a) {
      bmak.cka(a, 1);
    },
    hku: function(a) {
      bmak.cka(a, 2);
    },
    hkp: function(a) {
      bmak.cka(a, 3);
    },
    form_submit: function() {
      try {
        if (bmak.bpd(), 0 == bmak.sdfn.length) {
          if (document.getElementById("bm-telemetry") && (document.getElementById("bm-telemetry").value = bmak.sensor_data), void 0 !== document.getElementsByName("bm-telemetry"))
            for (var a = document.getElementsByName("bm-telemetry"), t = 0; t < a.length; t++) a[t].value = bmak.sensor_data;
        } else
          for (var t = 0; t < bmak.sdfn.length; t++) document.getElementById(bmak.sdfn[t]) && (document.getElementById(bmak.sdfn[t]).value = bmak.sensor_data);
      } catch (a) {
        bmak.sd_debug(",s7:" + a + "," + bmak.sensor_data);
      }
    },
    get_telemetry: function() {
      return bmak.bpd(), bmak.sensor_data;
    },
    getdurl: function() {
      return "https://www.olx.com.pk/";

      return bmak.enReadDocUrl ? document.URL.replace(/\\|"/g, "") : "";
    },
    x1: function() {
      return Math.floor(16777216 * (1 + Math.random())).toString(36);
    },
    gck: function() {
      var a = bmak.x1() + bmak.x1() + bmak.x1() + bmak.x1();
      return bmak.set_cookie(bmak.ckie, a + "_" + bmak.ab(a)), a;
    },
    set_cookie: function(a, t) {
      void 0 !== document.cookie && (document.cookie = a + "=" + t + "; path=/; expires=Fri, 01 Feb 2025 08:00:00 GMT;");
    },
    get_cookie: function() {
      bmak.n_ck = 1;
      bmak.ckie='';
      return "2";
      var a = "0";

      try {
        var a = bmak.cookie_chk_read(bmak.ckie);
        a || (bmak.n_ck = 1, a = bmak.bm ? "2" : "1");
      } catch (a) {}

      return a;
    },
    cookie_chk_read: function(a) {
      if (document.cookie)
        for (var t = a + "=", e = document.cookie.split("; "), n = 0; n < e.length; n++) {
          var o = e[n];

          if (0 === o.indexOf(t)) {
            var m = o.substring(t.length, o.length);
            if (-1 != m.indexOf("~") || -1 != decodeURIComponent(m).indexOf("~")) return m;
          }
        }
      return !1;
    },
    bpd: function() {

      bmak.sd_debug("<bpd>");
      var a = 0;

      try {

        a = bmak.get_cf_date();
        var t = bmak.updatet(),
          e = "3";
        bmak.ckie && (e = bmak.get_cookie());
        var n = bmak.gd(),
          o = window.DeviceOrientationEvent ? "do_en" : "do_dis",
          m = window.DeviceMotionEvent ? "dm_en" : "dm_dis",
          r = window.TouchEvent ? "t_en" : "t_dis",
          i = o + "," + m + "," + r,
          c = bmak.getforminfo(),
          b = bmak.getdurl(),
          d = bmak.aj_type + "," + bmak.aj_indx;
        !bmak.fpcf.fpValCalculated && (0 == bmak.js_post || bmak.aj_indx > 0) && bmak.fpcf.fpVal();

        var k = bmak.ke_vel + bmak.me_vel + bmak.doe_vel + bmak.dme_vel + bmak.te_vel + bmak.pe_vel,
          s = bmak.ff,
          l = s(80) + s(105) + s(90) + s(116) + s(69),
          u = bmak.jrs(bmak.start_ts),
          _ = bmak.get_cf_date() - bmak.start_ts,
          f = bmak.pi(bmak.d2 / 6),
          p = bmak.fas(),
          h = [bmak.ke_vel + 1, bmak.me_vel + 32, bmak.te_vel + 32, bmak.doe_vel, bmak.dme_vel, bmak.pe_vel, k, t, bmak.init_time, bmak.start_ts, bmak.fpcf.td, bmak.d2, bmak.ke_cnt, bmak.me_cnt, f, bmak.pe_cnt, bmak.te_cnt, _, bmak.ta, bmak.n_ck, e, bmak.ab(e), bmak.fpcf.rVal, bmak.fpcf.rCFP, p, l, u[0], u[1]],
          v = h.join(","),
          g = "" + bmak.ab(bmak.fpcf.fpValstr);

        bmak.firstLoad ? bmak.np() : bmak.csh(), !bmak.hbCalc && (0 == bmak.js_post || bmak.aj_indx > 0) && (bmak.fm(), bmak.wgl(), bmak.hbCalc = !0);
        var w = "";
        bmak.hbCalc && (w = bmak.fmh + "," + bmak.fmz + "," + bmak.ssh + "," + bmak.wv + "," + bmak.wr + "," + bmak.weh + "," + bmak.wl);
        var y = bmak.sed(),
          C = bmak.mn_get_current_challenges(),
          S = "",
          E = "",
          M = "";

        if (void 0 !== C[1]) {
          var j = C[1];
          void 0 !== bmak.mn_r[j] && (S = bmak.mn_r[j]);
        }

        if (void 0 !== C[2]) {
          var x = C[2];
          void 0 !== bmak.mn_r[x] && (E = bmak.mn_r[x]);
        }

        if (void 0 !== C[3]) {
          var A = C[3];
          void 0 !== bmak.mn_r[A] && (M = bmak.mn_r[A]);
        }

        bmak.sensor_data = bmak.ver + "-1,2,-94,-100," + n + "-1,2,-94,-101," + i + "-1,2,-94,-105," + bmak.informinfo + "-1,2,-94,-102," + c + "-1,2,-94,-108," + bmak.kact + "-1,2,-94,-110," + bmak.mact + "-1,2,-94,-117," + bmak.tact + "-1,2,-94,-111," + bmak.doact + "-1,2,-94,-109," + bmak.dmact + "-1,2,-94,-114," + bmak.pact + "-1,2,-94,-103," + bmak.vcact + "-1,2,-94,-112," + b + "-1,2,-94,-115," + v + "-1,2,-94,-106," + d, bmak.sensor_data = bmak.sensor_data + "-1,2,-94,-119," + bmak.mr + "-1,2,-94,-122," + y + "-1,2,-94,-123," + S + "-1,2,-94,-124," + E + "-1,2,-94,-126," + M + "-1,2,-94,-127," + bmak.nav_perm;
        var L = 24 ^ bmak.ab(bmak.sensor_data);
        bmak.sensor_data = bmak.sensor_data + "-1,2,-94,-70," + bmak.fpcf.fpValstr + "-1,2,-94,-80," + g + "-1,2,-94,-116," + bmak.o9 + "-1,2,-94,-118," + L + "-1,2,-94,-129," + w + "-1,2,-94,-121,", bmak.sd_debug(",s1:" + bmak.sensor_data.slice(0, 10));
      } catch (a) {
      	console.log(a);
        var P = "";

        try {
          a.stack && "string" == typeof a.stack ? P = a.stack.replace(/\"/g, "\\'") : "string" == typeof a && (P = a.replace(/\"/g, "\\'")), P = P.slice(0, 1e3), bmak.sd_debug(",s2:" + P), bmak.sensor_data = bmak.ver + "-1,2,-94,-100," + bmak.uar() + "-1,2,-94,-120," + P;
        } catch (a) {
          a.stack && "string" == typeof a.stack ? P = a.stack.replace(/\"/g, "\\'") : "string" == typeof a && (P = a.replace(/\"/g, "\\'")), P = P.slice(0, 1e3), bmak.sd_debug(",s3:" + P), bmak.sensor_data = bmak.ver + bmak.sensor_data + ",s3:" + P;
        }
      }

      try {
        var T = bmak.od(bmak.cs, bmak.api_public_key).slice(0, 16),
          F = Math.floor(bmak.get_cf_date() / 36e5),
          D = bmak.get_cf_date(),
          B = T + bmak.od(F, T) + bmak.sensor_data;
        bmak.sensor_data = B + ";" + (bmak.get_cf_date() - a) + ";" + bmak.tst + ";" + (bmak.get_cf_date() - D);
      } catch (a) {}

      bmak.sd_debug("</bpd>");
      //window.sensor_data=bm
    },
    od: function(a, t) {
      try {
        a = String(a), t = String(t);
        var e = [],
          n = t.length;

        if (n > 0) {
          for (var o = 0; o < a.length; o++) {
            var m = a.charCodeAt(o),
              r = a.charAt(o),
              i = t.charCodeAt(o % n);
            m = bmak.rir(m, 47, 57, i), m != a.charCodeAt(o) && (r = String.fromCharCode(m)), e.push(r);
          }

          if (e.length > 0) return e.join("");
        }
      } catch (a) {}

      return a;
    },
    rir: function(a, t, e, n) {
      return a > t && a <= e && (a += n % (e - t)) > e && (a = a - e + t), a;
    },
    lvc: function(a) {
      try {
        if (bmak.vc_cnt < bmak.vc_cnt_lmt) {
          var t = bmak.get_cf_date() - bmak.start_ts,
            e = a + "," + t + ";";
          bmak.vcact = bmak.vcact + e;
        }

        bmak.vc_cnt++;
      } catch (a) {}
    },
    hvc: function() {
      try {
        var a = 1;
        document[bmak.hn] && (a = 0), bmak.lvc(a);
      } catch (a) {}
    },
    hb: function(a) {
      bmak.lvc(2);
    },
    hf: function(a) {
      bmak.lvc(3);
    },
    rve: function() {
      void 0 !== document.hidden ? (bmak.hn = "hidden", bmak.vc = "visibilitychange") : void 0 !== document.mozHidden ? (bmak.hn = "mozHidden", bmak.vc = "mozvisibilitychange") : void 0 !== document.msHidden ? (bmak.hn = "msHidden", bmak.vc = "msvisibilitychange") : void 0 !== document.webkitHidden && (bmak.hn = "webkitHidden", bmak.vc = "webkitvisibilitychange"), document.addEventListener ? "unk" != bmak.hn && document.addEventListener(bmak.vc, bmak.hvc, !0) : document.attachEvent && "unk" != bmak.hn && document.attachEvent(bmak.vc, bmak.hvc), window.onblur = bmak.hb, window.onfocus = bmak.hf;
    },
    startTracking: function() {
      bmak.startdoadma();

      try {
        bmak.to();
      } catch (a) {
        bmak.o9 = -654321;
      }

      setInterval(function() {
        bmak.startdoadma();
      }, 3e3),
       document.addEventListener ? (document.addEventListener("touchmove", bmak.htm, !0), 
        document.addEventListener("touchstart", bmak.hts, !0), 
        document.addEventListener("touchend", bmak.hte, !0),
         document.addEventListener("touchcancel", bmak.htc, !0),
          document.addEventListener("mousemove", bmak.hmm, !0),
           document.addEventListener("click", bmak.hc, !0),
            document.addEventListener("mousedown", bmak.hmd, !0),
             document.addEventListener("mouseup", bmak.hmu, !0),
              document.addEventListener("pointerdown", bmak.hpd, !0),
               document.addEventListener("pointerup", bmak.hpu, !0),
                document.addEventListener("keydown", bmak.hkd, !0),
                 document.addEventListener("keyup", bmak.hku, !0), 
                 document.addEventListener("keypress", bmak.hkp, !0)) : document.attachEvent && (document.attachEvent("touchmove", bmak.htm), 
                 document.attachEvent("touchstart", bmak.hts),
                  document.attachEvent("touchend", bmak.hte),
                   document.attachEvent("touchcancel", bmak.htc), 
                   document.attachEvent("onmousemove", bmak.hmm), 
                   document.attachEvent("onclick", bmak.hc),
                    document.attachEvent("onmousedown", bmak.hmd),
                     document.attachEvent("onmouseup", bmak.hmu), 
                     document.attachEvent("onpointerdown", bmak.hpd), 
                     document.attachEvent("onpointerup", bmak.hpu),
                      document.attachEvent("onkeydown", bmak.hkd), 
                      document.attachEvent("onkeyup", bmak.hku), 
                      document.attachEvent("onkeypress", bmak.hkp)), 
                 bmak.rve(),
                  bmak.informinfo = bmak.getforminfo(), 
                  bmak.js_post && (bmak.aj_type = 0, bmak.bpd(), bmak.pd(!0)), 
                  // bmak.firstLoad = !1;
                  bmak.firstLoad = 1;

    },
    gb: function(a, t) {
      var e = a.charCodeAt(t);
      return e = e > 255 ? 0 : e;
    },
    encode: function(a) {
      if ("undefined" != typeof btoa) return btoa(a);

      for (var t, e, n, o, m, r, i, c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/", b = "", d = 3 * Math.floor(a.length / 3), k = 0; k < d; k += 3) t = bmak.gb(a, k), e = bmak.gb(a, k + 1), n = bmak.gb(a, k + 2), o = t >> 2, m = ((3 & t) << 4) + (e >> 4), r = ((15 & e) << 2) + (n >> 6), i = 63 & n, b = b + c.charAt(o) + c.charAt(m) + c.charAt(r) + c.charAt(i);

      return a.length % 3 == 1 && (t = bmak.gb(a, k), o = t >> 2, m = (3 & t) << 4, b = b + c.charAt(o) + c.charAt(m) + "=="), a.length % 3 == 2 && (t = bmak.gb(a, k), e = bmak.gb(a, k + 1), o = t >> 2, m = ((3 & t) << 4) + (e >> 4), r = (15 & e) << 2, b = b + c.charAt(o) + c.charAt(m) + c.charAt(r) + "="), b;
    },
    ie9OrLower: function() {
      try {
        if ("string" == typeof navigator.appVersion && -1 != navigator.appVersion.indexOf("MSIE")) {
          if (parseFloat(navigator.appVersion.split("MSIE")[1]) <= 9) return !0;
        }
      } catch (a) {}

      return !1;
    },
    parse_gp: function(a) {},
    call_gp: function() {
      var a;
      void 0 !== window.XMLHttpRequest ? a = new XMLHttpRequest() : void 0 !== window.XDomainRequest ? (a = new XDomainRequest(), a.onload = function() {
        this.readyState = 4, this.onreadystatechange instanceof Function && this.onreadystatechange();
      }) : a = new ActiveXObject("Microsoft.XMLHTTP"), a.open("GET", bmak.params_url, !0), a.onreadystatechange = function() {
        a.readyState > 3 && bmak.parse_gp && bmak.parse_gp(a);
      }, a.send();
    },
    apicall: function(a, t) {
      var e;
      e = window.XDomainRequest ? new XDomainRequest() : window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP"), e.open("POST", a, t);
      var n = bmak.encode(bmak.api_public_key + ":");
      bmak.auth = ",\"auth\" : \"" + n + "\"", e.setRequestHeader && (e.setRequestHeader("Content-type", "application/json"), e.setRequestHeader("Authorization", "Basic " + n), bmak.auth = "");
      var o = "{\"session_id\" : \"" + bmak.session_id + "\",\"sensor_data\" : \"" + bmak.sensor_data + "\"" + bmak.auth + "}";
      e.send(o);
    },
    apicall_bm: function(a, t, e) {
      var n;
      void 0 !== window.XMLHttpRequest ? n = new XMLHttpRequest() : void 0 !== window.XDomainRequest ? (n = new XDomainRequest(), n.onload = function() {
        this.readyState = 4, this.onreadystatechange instanceof Function && this.onreadystatechange();
      }) : n = new ActiveXObject("Microsoft.XMLHTTP"), n.open("POST", a, t), void 0 !== n.withCredentials && (n.withCredentials = !0);
      var o = "{\"sensor_data\":\"" + bmak.sensor_data + "\"}";
      n.onreadystatechange = function() {
        n.readyState > 3 && e && e(n);
      }, n.send(o), bmak.dcs = 0;
    },
    pd: function(a) {
      true? (bmak.apicall_bm(bmak.cf_url, a, bmak.patp), bmak.aj_indx = bmak.aj_indx + 1) : bmak.loap && bmak.dcs && bmak.apicall_bm(bmak.cf_url, a, bmak.patp);
      //bmak.check_stop_protocol() ? (bmak.apicall_bm(bmak.cf_url, a, bmak.patp), bmak.aj_indx = bmak.aj_indx + 1) : bmak.loap && bmak.dcs && bmak.apicall_bm(bmak.cf_url, a, bmak.patp);
    },
    check_stop_protocol: function() {
      var a = bmak.get_stop_signals(),
        t = a[0];
      !bmak.rst && t > -1 && (bmak.ir(), bmak.rst = !0);
      var e = a[1];
      return -1 == e || bmak.aj_ss < e;
    },
    get_stop_signals: function() {
      var a = [-1, -1],
        t = bmak.cookie_chk_read(bmak.ckie);
      if (!1 !== t) try {
        var e = decodeURIComponent(t).split("~");

        if (e.length >= 4) {
          var n = bmak.pi(e[1]),
            o = bmak.pi(e[3]);
          n = isNaN(n) ? -1 : n, o = isNaN(o) ? -1 : o, a = [o, n];
        }
      } catch (a) {}
      return a;
    },
    patp: function(a) {
      bmak.aj_ss++, bmak.rst = !1;
    },
    get_mn_params_from_abck: function() {
      var a = [
        []
      ];

      try {
        var t = bmak.cookie_chk_read(bmak.ckie);

        if (!1 !== t) {
          var e = decodeURIComponent(t).split("~");

          if (e.length >= 5) {
            var n = e[0],
              o = e[4],
              m = o.split("||");
            if (m.length > 0)
              for (var r = 0; r < m.length; r++) {
                var i = m[r],
                  c = i.split("-");

                if (c.length >= 5) {
                  var b = bmak.pi(c[0]),
                    d = c[1],
                    k = bmak.pi(c[2]),
                    s = bmak.pi(c[3]),
                    l = bmak.pi(c[4]),
                    u = 1;
                  c.length >= 6 && (u = bmak.pi(c[5]));
                  var _ = [b, n, d, k, s, l, u];
                  2 == u ? a.splice(0, 0, _) : a.push(_);
                }
              }
          }
        }
      } catch (a) {}

      return a;
    },
    mn_get_current_challenges: function() {
      var a = bmak.get_mn_params_from_abck(),
        t = [];
      if (null != a)
        for (var e = 0; e < a.length; e++) {
          var n = a[e];

          if (n.length > 0) {
            var o = n[1] + n[2],
              m = n[6];
            t[m] = o;
          }
        }
      return t;
    },
    mn_update_challenge_details: function(a) {
      bmak.mn_sen = a[0], bmak.mn_abck = a[1], bmak.mn_psn = a[2], bmak.mn_cd = a[3], bmak.mn_tout = a[4], bmak.mn_stout = a[5], bmak.mn_ct = a[6], bmak.mn_ts = bmak.start_ts, bmak.mn_cc = bmak.mn_abck + bmak.start_ts + bmak.mn_psn;
    },
    mn_get_new_challenge_params: function(a) {
      var t = null,
        e = null,
        n = null;
      if (null != a)
        for (var o = 0; o < a.length; o++) {
          var m = a[o];

          if (m.length > 0) {
            for (var r = m[0], i = bmak.mn_abck + bmak.start_ts + m[2], c = (m[3], m[6]), b = 0; b < bmak.mn_lcl && 1 == r && bmak.mn_lc[b] != i; b++);

            b == bmak.mn_lcl && (t = o, 2 == c && (e = o), 3 == c && (n = o));
          }
        }
      return null != n && bmak.pstate ? a[n] : null == e || bmak.pstate ? null == t || bmak.pstate ? null : a[t] : a[e];
    },
    mn_poll: function() {
      if (0 == bmak.mn_state) {
        var a = bmak.get_mn_params_from_abck(),
          t = bmak.mn_get_new_challenge_params(a);
        null != t && (bmak.mn_update_challenge_details(t), bmak.mn_sen && (bmak.mn_state = 1, bmak.mn_mc_indx = 0, bmak.mn_al = [], bmak.mn_il = [], bmak.mn_tcl = [], bmak.mn_lg = [], bmak.mn_rts = bmak.get_cf_date(), bmak.mn_rt = bmak.mn_rts - bmak.start_ts, bmak.mn_wt = 0, setTimeout(bmak.mn_w, bmak.mn_tout)));
      }
    },
    rotate_right: function(a, t) {
      return a >>> t | a << 32 - t;
    },
    encode_utf8: function(a) {
      return unescape(encodeURIComponent(a));
    },
    mn_s: function(a) {
      var t = [1116352408, 1899447441, 3049323471, 3921009573, 961987163, 1508970993, 2453635748, 2870763221, 3624381080, 310598401, 607225278, 1426881987, 1925078388, 2162078206, 2614888103, 3248222580, 3835390401, 4022224774, 264347078, 604807628, 770255983, 1249150122, 1555081692, 1996064986, 2554220882, 2821834349, 2952996808, 3210313671, 3336571891, 3584528711, 113926993, 338241895, 666307205, 773529912, 1294757372, 1396182291, 1695183700, 1986661051, 2177026350, 2456956037, 2730485921, 2820302411, 3259730800, 3345764771, 3516065817, 3600352804, 4094571909, 275423344, 430227734, 506948616, 659060556, 883997877, 958139571, 1322822218, 1537002063, 1747873779, 1955562222, 2024104815, 2227730452, 2361852424, 2428436474, 2756734187, 3204031479, 3329325298],
        e = 1779033703,
        n = 3144134277,
        o = 1013904242,
        m = 2773480762,
        r = 1359893119,
        i = 2600822924,
        c = 528734635,
        b = 1541459225,
        d = bmak.encode_utf8(a),
        k = 8 * d.length;
      d += String.fromCharCode(128);

      for (var s = d.length / 4 + 2, l = Math.ceil(s / 16), u = new Array(l), _ = 0; _ < l; _++) {
        u[_] = new Array(16);

        for (var f = 0; f < 16; f++) u[_][f] = d.charCodeAt(64 * _ + 4 * f) << 24 | d.charCodeAt(64 * _ + 4 * f + 1) << 16 | d.charCodeAt(64 * _ + 4 * f + 2) << 8 | d.charCodeAt(64 * _ + 4 * f + 3) << 0;
      }

      var p = k / Math.pow(2, 32);
      u[l - 1][14] = Math.floor(p), u[l - 1][15] = k;

      for (var h = 0; h < l; h++) {
        for (var v, g = new Array(64), w = e, y = n, C = o, S = m, E = r, v = i, M = c, j = b, _ = 0; _ < 64; _++) {
          var x, A, L, P, T, F;
          _ < 16 ? g[_] = u[h][_] : (x = bmak.rotate_right(g[_ - 15], 7) ^ bmak.rotate_right(g[_ - 15], 18) ^ g[_ - 15] >>> 3, A = bmak.rotate_right(g[_ - 2], 17) ^ bmak.rotate_right(g[_ - 2], 19) ^ g[_ - 2] >>> 10, g[_] = g[_ - 16] + x + g[_ - 7] + A), A = bmak.rotate_right(E, 6) ^ bmak.rotate_right(E, 11) ^ bmak.rotate_right(E, 25), L = E & v ^ ~E & M, P = j + A + L + t[_] + g[_], x = bmak.rotate_right(w, 2) ^ bmak.rotate_right(w, 13) ^ bmak.rotate_right(w, 22), T = w & y ^ w & C ^ y & C, F = x + T, j = M, M = v, v = E, E = S + P >>> 0, S = C, C = y, y = w, w = P + F >>> 0;
        }

        e += w, n += y, o += C, m += S, r += E, i += v, c += M, b += j;
      }

      return [e >> 24 & 255, e >> 16 & 255, e >> 8 & 255, 255 & e, n >> 24 & 255, n >> 16 & 255, n >> 8 & 255, 255 & n, o >> 24 & 255, o >> 16 & 255, o >> 8 & 255, 255 & o, m >> 24 & 255, m >> 16 & 255, m >> 8 & 255, 255 & m, r >> 24 & 255, r >> 16 & 255, r >> 8 & 255, 255 & r, i >> 24 & 255, i >> 16 & 255, i >> 8 & 255, 255 & i, c >> 24 & 255, c >> 16 & 255, c >> 8 & 255, 255 & c, b >> 24 & 255, b >> 16 & 255, b >> 8 & 255, 255 & b];
    },
    mn_init: function() {
      var a = 200;
      bmak.pstate && (a = 100), setInterval(bmak.mn_poll, a);
    },
    bdm: function(a, t) {
      for (var e = 0, n = 0; n < a.length; ++n) e = (e << 8 | a[n]) >>> 0, e %= t;

      return e;
    },
    mn_w: function() {
      try {
        for (var a = 0, t = 0, e = 0, n = "", o = bmak.get_cf_date(), m = bmak.mn_cd + bmak.mn_mc_indx; 0 == a;) {
          n = Math.random().toString(16);
          var r = bmak.mn_cc + m.toString() + n,
            i = bmak.mn_s(r);
          if (0 == bmak.bdm(i, m)) a = 1, e = bmak.get_cf_date() - o, bmak.mn_al.push(n), bmak.mn_tcl.push(e), bmak.mn_il.push(t), 0 == bmak.mn_mc_indx && (bmak.mn_lg.push(bmak.mn_abck), bmak.mn_lg.push(bmak.mn_ts), bmak.mn_lg.push(bmak.mn_psn), bmak.mn_lg.push(bmak.mn_cc), bmak.mn_lg.push(bmak.mn_cd.toString()), bmak.mn_lg.push(m.toString()), bmak.mn_lg.push(n), bmak.mn_lg.push(r), bmak.mn_lg.push(i), bmak.mn_lg.push(bmak.mn_rt));
          else if ((t += 1) % 1e3 == 0 && (e = bmak.get_cf_date() - o) > bmak.mn_stout) return bmak.mn_wt += e, void setTimeout(bmak.mn_w, bmak.mn_stout);
        }

        bmak.mn_mc_indx += 1, bmak.mn_mc_indx < bmak.mn_mc_lmt ? setTimeout(bmak.mn_w, e) : (bmak.mn_mc_indx = 0, bmak.mn_lc[bmak.mn_lcl] = bmak.mn_cc, bmak.mn_ld[bmak.mn_lcl] = bmak.mn_cd, bmak.mn_lcl = bmak.mn_lcl + 1, bmak.mn_state = 0, bmak.mn_lg.push(bmak.mn_wt), bmak.mn_lg.push(bmak.get_cf_date()), bmak.mn_r[bmak.mn_abck + bmak.mn_psn] = bmak.mn_pr(), bmak.js_post && (bmak.aj_type = 8, 2 == bmak.mn_ct && (bmak.dcs = 1), bmak.bpd(), bmak.pd(!0)));
      } catch (a) {
        bmak.sd_debug(",mn_w:" + a);
      }
    },
    mn_pr: function() {
      return bmak.mn_al.join(",") + ";" + bmak.mn_tcl.join(",") + ";" + bmak.mn_il.join(",") + ";" + bmak.mn_lg.join(",") + ";";
    },
    ats: function(a) {
      for (var t = "", e = 0; e < a.length; e++) t += 2 == a[e].toString(16).length ? a[e].toString(16) : "0" + a[e].toString(16);

      return t;
    },
    calc_fp: function() {
      bmak.fpcf.fpVal(), bmak.js_post && (bmak.aj_type = 9, bmak.bpd(), bmak.pd(!0));
    },
    listFunctions: {
      _setJsPost: function(a) {
        bmak.js_post = a, bmak.js_post && (bmak.enReadDocUrl = 1);
      },
      _setSessionId: function(a) {
        bmak.session_id = a;
      },
      _setJavaScriptKey: function(a) {
        bmak.api_public_key = a;
      },
      _setEnAddHidden: function(a) {
        bmak.enAddHidden = a;
      },
      _setInitTime: function(a) {
        bmak.init_time = a;
      },
      _setApiUrl: function(a) {
        bmak.cf_url = a;
      },
      _setEnGetLoc: function(a) {
        bmak.enGetLoc = a;
      },
      _setEnReadDocUrl: function(a) {
        bmak.enReadDocUrl = "https://www.olx.com.pk/";
      },
      _setDisFpCalOnTimeout: function(a) {
        bmak.disFpCalOnTimeout = a;
      },
      _setCookie: function(a) {
        bmak.ckie = a;
      },
      _setCS: function(a) {
        bmak.cs = (String(a) + bmak.cs).slice(0, 16);
      },
      _setFsp: function(a) {
        bmak.fsp = a, bmak.fsp && (bmak.cf_url = bmak.cf_url.replace(/^http:\/\//i, "https://"));
      },
      _setBm: function(a) {
        bmak.bm = a, bmak.bm ? (bmak.cf_url = (bmak.fsp ? "https:" : document.location.protocol) + "//" + document.location.hostname + "/_bm/_data", bmak.js_post = !0) : bmak.params_url = (bmak.fsp ? "https:" : document.location.protocol) + "//" + document.location.hostname + "/get_params";
      },
      _setAu: function(a) {
        "string" == typeof a && (0 === a.lastIndexOf("/", 0) ? bmak.cf_url = (bmak.fsp ? "https:" : document.location.protocol) + "//" + document.location.hostname + a : bmak.cf_url = a);
      },
      _setSDFieldNames: function() {
        try {
          var a;

          for (a = 0; a < arguments.length; a += 1) bmak.sdfn.push(arguments[a]);
        } catch (a) {
          bmak.sd_debug(",setSDFN:" + a);
        }
      },
      _setUseAltFonts: function(a) {
        bmak.altFonts = a;
      },
      _setPowState: function(a) {
        bmak.pstate = a;
      },
      _setPow: function(a) {
        bmak.pstate = a;
      },
      _setLOAP: function(a) {
        bmak.loap = a;
      }
    },
    applyFunc: function() {
      var a, t, e;

      for (a = 0; a < arguments.length; a += 1) e = arguments[a];

      t = e.shift(), bmak.listFunctions[t] && bmak.listFunctions[t].apply(bmak.listFunctions, e);
    }
  };

if (function(a) {
    var t = {};
    a.fpcf = t, t.sf4 = function() {
      var a = bmak.uar();
      return !(!~a.indexOf("Version/4.0") || !(~a.indexOf("iPad;") || ~a.indexOf("iPhone") || ~a.indexOf("Mac OS X 10_5")));
    }, t.fpValstr = "-1", t.fpValCalculated = !1, t.rVal = "-1", t.rCFP = "-1", t.cache = {}, t.td = -999999, t.clearCache = function() {
      t.cache = {};
    }, t.fpVal = function() {
      t.fpValCalculated = !0;

      try {
        var a = 0;
        a = Date.now ? Date.now() : +new Date();
        var e = t.data();
        t.fpValstr = e.replace(/\"/g, "\\\\\"");
        var n = 0;
        n = Date.now ? Date.now() : +new Date(), t.td = n - a;
      } catch (a) {}
    }, t.timezoneOffsetKey = function() {
      return new Date().getTimezoneOffset();
    }, t.data = function() {
      var a = screen.colorDepth ? screen.colorDepth : -1,
        e = screen.pixelDepth ? screen.pixelDepth : -1,
        n = navigator.cookieEnabled ? navigator.cookieEnabled : -1,
        o = navigator.javaEnabled ? navigator.javaEnabled() : -1,
        m = navigator.doNotTrack ? navigator.doNotTrack : -1,
        r = "default";
      r = bmak.runFonts ? bmak.altFonts ? t.fonts_optm() : t.fonts() : "dis";
      return [t.canvas("<@nv45. F1n63r,Pr1n71n6!"), t.canvas("m,Ev!xV67BaU> eh2m<f3AG3@"), r, t.pluginInfo(), t.sessionStorageKey(), t.localStorageKey(), t.indexedDbKey(), t.timezoneOffsetKey(), t.webrtcKey(), a, e, n, o, m].join(";");
    }, t.PLUGINS = ["WebEx64 General Plugin Container", "YouTube Plug-in", "Java Applet Plug-in", "Shockwave Flash", "iPhotoPhotocast", "SharePoint Browser Plug-in", "Chrome Remote Desktop Viewer", "Chrome PDF Viewer", "Native Client", "Unity Player", "WebKit-integrierte PDF", "QuickTime Plug-in", "RealPlayer Version Plugin", "RealPlayer(tm) G2 LiveConnect-Enabled Plug-In (32-bit)", "Mozilla Default Plug-in", "Adobe Acrobat", "AdobeAAMDetect", "Google Earth Plug-in", "Java Plug-in 2 for NPAPI Browsers", "Widevine Content Decryption Module", "Microsoft Office Live Plug-in", "Windows Media Player Plug-in Dynamic Link Library", "Google Talk Plugin Video Renderer", "Edge PDF Viewer", "Shockwave for Director", "Default Browser Helper", "Silverlight Plug-In"], t.pluginInfo = function() {
      if (void 0 === navigator.plugins) return null;

      for (var a = t.PLUGINS.length, e = "", n = 0; n < a; n++) {
        var o = t.PLUGINS[n];
        void 0 !== navigator.plugins[o] && (e = e + "," + n);
      }

      return e;
    }, t.canvas = function(a) {
      try {
        if (void 0 !== t.cache.canvas) return t.cache.canvas;
        var e = -1;

        if (!t.sf4()) {
          var n = document.createElement("canvas");

          if (n.width = 280, n.height = 60, n.style.display = "none", "function" == typeof n.getContext) {
            var o = n.getContext("2d");
            o.fillStyle = "rgb(102, 204, 0)", o.fillRect(100, 5, 80, 50), o.fillStyle = "#f60", o.font = "16pt Arial", o.fillText(a, 10, 40), o.strokeStyle = "rgb(120, 186, 176)", o.arc(80, 10, 20, 0, Math.PI, !1), o.stroke();
            var m = n.toDataURL();
            e = 0;

            for (var r = 0; r < m.length; r++) {
              e = (e << 5) - e + m.charCodeAt(r), e &= e;
            }

            e = e.toString();
            var i = document.createElement("canvas");
            i.width = 16, i.height = 16;
            var c = i.getContext("2d");
            c.font = "6pt Arial", t.rVal = Math.floor(1e3 * Math.random()).toString(), c.fillText(t.rVal, 1, 12);

            for (var b = i.toDataURL(), d = 0, k = 0; k < b.length; k++) {
              d = (d << 5) - d + b.charCodeAt(k), d &= d;
            }

            t.rCFP = d.toString();
          }
        }

        return e;
      } catch (a) {
        return "exception";
      }
    }, t.fonts_optm = function() {
      var a = 200,
        e = bmak.get_cf_date(),
        n = [];

      if (!t.sf4() && document.body) {
        var o = ["sans-serif", "monospace"],
          m = [0, 0],
          r = [0, 0],
          i = document.createElement("div");
        i.style.cssText = "position: relative; left: -9999px; visibility: hidden; display: block !important";
        var c;

        for (c = 0; c < o.length; c++) {
          var b = document.createElement("span");
          b.innerHTML = "abcdefhijklmnopqrstuvxyz1234567890;+-.", b.style.fontSize = "90px", b.style.fontFamily = o[c], i.appendChild(b);
        }

        for (document.body.appendChild(i), c = 0; c < i.childNodes.length; c++) b = i.childNodes[c], m[c] = b.offsetWidth, r[c] = b.offsetHeight;

        if (document.body.removeChild(i), bmak.get_cf_date() - e > a) return "";
        var d = ["Geneva", "Lobster", "New York", "Century", "Apple Gothic", "Minion Pro", "Apple LiGothic", "Century Gothic", "Monaco", "Lato", "Fantasque Sans Mono", "Adobe Braille", "Cambria", "Futura", "Bell MT", "Courier", "Courier New", "Calibri", "Avenir Next", "Birch Std", "Palatino", "Ubuntu Regular", "Oswald", "Batang", "Ubuntu Medium", "Cantarell", "Droid Serif", "Roboto", "Helvetica Neue", "Corsiva Hebrew", "Adobe Hebrew", "TI-Nspire", "Comic Neue", "Noto", "AlNile", "Palatino-Bold", "ArialHebrew-Light", "Avenir", "Papyrus", "Open Sans", "Times", "Quicksand", "Source Sans Pro", "Damascus", "Microsoft Sans Serif"],
          k = document.createElement("div");
        k.style.cssText = "position: relative; left: -9999px; visibility: hidden; display: block !important";

        for (var s = [], l = 0; l < d.length; l++) {
          var u = document.createElement("div");

          for (c = 0; c < o.length; c++) {
            var b = document.createElement("span");
            b.innerHTML = "abcdefhijklmnopqrstuvxyz1234567890;+-.", b.style.fontSize = "90px", b.style.fontFamily = d[l] + "," + o[c], u.appendChild(b);
          }

          k.appendChild(u);
        }

        if (bmak.get_cf_date() - e > a) return "";
        document.body.appendChild(k);

        for (var l = 0; l < k.childNodes.length; l++) {
          var _ = !1,
            u = k.childNodes[l];

          for (c = 0; c < u.childNodes.length; c++) {
            var b = u.childNodes[c];

            if (b.offsetWidth !== m[c] || b.offsetHeight !== r[c]) {
              _ = !0;
              break;
            }
          }

          if (_ && s.push(l), bmak.get_cf_date() - e > a) break;
        }

        document.body.removeChild(k), n = s.sort();
      }

      return n.join(",");
    }, t.fonts = function() {
      var a = [];

      if (!t.sf4() && document.body) {
        var e = ["serif", "sans-serif", "monospace"],
          n = [0, 0, 0],
          o = [0, 0, 0],
          m = document.createElement("span");
        m.innerHTML = "abcdefhijklmnopqrstuvxyz1234567890;+-.", m.style.fontSize = "90px";
        var r;

        for (r = 0; r < e.length; r++) m.style.fontFamily = e[r], document.body.appendChild(m), n[r] = m.offsetWidth, o[r] = m.offsetHeight, document.body.removeChild(m);

        for (var i = ["Geneva", "Lobster", "New York", "Century", "Apple Gothic", "Minion Pro", "Apple LiGothic", "Century Gothic", "Monaco", "Lato", "Fantasque Sans Mono", "Adobe Braille", "Cambria", "Futura", "Bell MT", "Courier", "Courier New", "Calibri", "Avenir Next", "Birch Std", "Palatino", "Ubuntu Regular", "Oswald", "Batang", "Ubuntu Medium", "Cantarell", "Droid Serif", "Roboto", "Helvetica Neue", "Corsiva Hebrew", "Adobe Hebrew", "TI-Nspire", "Comic Neue", "Noto", "AlNile", "Palatino-Bold", "ArialHebrew-Light", "Avenir", "Papyrus", "Open Sans", "Times", "Quicksand", "Source Sans Pro", "Damascus", "Microsoft Sans Serif"], c = [], b = 0; b < i.length; b++) {
          var d = !1;

          for (r = 0; r < e.length; r++)
            if (m.style.fontFamily = i[b] + "," + e[r], document.body.appendChild(m), m.offsetWidth === n[r] && m.offsetHeight === o[r] || (d = !0), document.body.removeChild(m), d) {
              c.push(b);
              break;
            }
        }

        a = c.sort();
      }

      return a.join(",");
    }, t.webrtcKey = function() {
      return "function" == typeof window.RTCPeerConnection || "function" == typeof window.mozRTCPeerConnection || "function" == typeof window.webkitRTCPeerConnection;
    }, t.indexedDbKey = function() {
      return !!t.hasIndexedDB();
    }, t.sessionStorageKey = function() {
      return !!t.hasSessionStorage();
    }, t.localStorageKey = function() {
      return !!t.hasLocalStorage();
    }, t.hasSessionStorage = function() {
      try {
        return !!window.sessionStorage;
      } catch (a) {
        return !1;
      }
    }, t.hasLocalStorage = function() {
      try {
        return !!window.localStorage;
      } catch (a) {
        return !1;
      }
    }, t.hasIndexedDB = function() {
      return !!window.indexedDB;
    };
  }(bmak), bmak.firstLoad) {
  bmak.sd_debug("<init/>");

  for (var i = 0; i < _cf.length; i++) bmak.applyFunc(_cf[i]);

  bmak.sd_debug("<setSDFN>" + bmak.sdfn.join() + "</setSDFN>"), _cf = {
    push: bmak.applyFunc
  };

function getData() {

    bmak.ir();
     bmak.t_tst = bmak.get_cf_date();
     bmak.startTracking(), bmak.tst = bmak.get_cf_date() - bmak.t_tst, bmak.disFpCalOnTimeout || setTimeout(bmak.calc_fp, 500);

    for (var i = 0; i < 3; i++) setTimeout(bmak.getmr, 400 + 5e3 * i);

    bmak.mn_init();
  bmak.bpd();
   var o = "{\"sensor_data\":\"" + bmak.sensor_data + "\"}";
 return o; 
  }
}
 
        </script>
<div class="content ddddd" id="kt_content">
											<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
    <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
      
        <!--end::Details-->
 
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->

 <!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
							<!--begin::Card-->

<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				Manage  Olx accounts
				<span class="d-block text-muted pt-2 font-size-sm">Create Olx Ads in few minuts</span>
			</h3>
		</div>
		<div class="card-toolbar">

    <?php if($this->session->userdata('role')=='admin') :?>

<?php endif;?>


			 

<!--begin::Button-->
<a href="#" onclick="Route.go('bot','clear_site')" class="btn btn-primary font-weight-bolder">
    <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>  Clear Site Data
</a>
<!--end::Button-->







		</div>
	</div>
	<!--end::Header-->

	<!--begin::Body-->
	<div class="card-body"> 
					<div class="mb-7 ml-3 mr-3 ">
   						 <div class="row align-items-center">
							<div class="form-group "> 
                                    <input class=" form-control form-control-solid form-control-lg" placeholder='Phone|Email' name="name" id="name" type="text" value="">
                            </div>
                            <div class="form-group "> 
                                    <input class=" form-control form-control-solid form-control-lg" placeholder='Password' name="name" id="name1" type="text" value="">
                            </div> 
                           <div class="form-group">
                          		  <select class="form-control selectpicker" id="grant_type" title="account_type">
                                        <option value="" ></option>
                                        <option value="email" >Email</option>
                                        <option value="phone" >Phone</option> 
                                    </select> 
                          </div>
                            
                      </div>
                   </div>

        <!--begin: Datatable-->
        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
        <!--end: Datatable-->

         
	 
	</div>
	<!--end::Body-->
</div>
<!--end::Card-->
					</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
				</div>