(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["remoteMiddleware"],{"7a15":function(e,t,r){"use strict";r.r(t),r.d(t,"remoteMiddlewares",(function(){return o}));var n=r("0e87"),c=r("4c32"),a=r("18d1"),i=r("40de");function o(e,t,r){var o;return Object(n["b"])(this,void 0,void 0,(function(){var s,d,u,l,b,w=this;return Object(n["d"])(this,(function(f){switch(f.label){case 0:return Object(c["b"])()?[2,[]]:(s=Object(i["b"])(),d=null!==(o=t.enabledMiddleware)&&void 0!==o?o:{},u=Object.entries(d).filter((function(e){e[0];var t=e[1];return t})).map((function(e){var t=e[0];return t})),l=u.map((function(t){return Object(n["b"])(w,void 0,void 0,(function(){var c,i,o,d;return Object(n["d"])(this,(function(n){switch(n.label){case 0:c=t.replace("@segment/",""),i=c,r&&(i=btoa(c).replace(/=/g,"")),o="".concat(s,"/middleware/").concat(i,"/latest/").concat(i,".js.gz"),n.label=1;case 1:return n.trys.push([1,3,,4]),[4,Object(a["a"])(o)];case 2:return n.sent(),[2,window["".concat(c,"Middleware")]];case 3:return d=n.sent(),e.log("error",d),e.stats.increment("failed_remote_middleware"),[3,4];case 4:return[2]}}))}))})),[4,Promise.all(l)]);case 1:return b=f.sent(),b=b.filter(Boolean),[2,b]}}))}))}}}]);