(function(){
var ozoki_tc = "Z2cL3GVfLAF5sCuF",
ozoki_os = "s.update.ap.lijit.com",
ozoki_url = "https://s.update.ap.lijit.com/2/686665/analytics.js?dt=6866651544732236130000&pp=carambola2&pv=3492d839-aa83-41d7-9171-476098093400&to=3&ui=__584064eb0cec2b10034c59&de=2&md=1&di=www.w3schools.com&dm=300x250&gt=US",
ozoki_ct = {"di":"www.w3schools.com", "gt":"US", "to":"3", "dt":"6866651544732236130000", "ui":"__584064eb0cec2b10034c59", "pp":"carambola2", "de":"2", "dm":"300x250", "pv":"3492d839-aa83-41d7-9171-476098093400", "md":"1"},
ozoki_omid = {dm:"minkatu.com",v:"1",f:"json",e:"js"},
ozoki_opt = {sm:3803,xhr_ipv6:true,chrext:true,dfcs:true,cor:true,nvl:true,kmp:true,ndm:true,ecm:true,wor:true,hco:true,intgr:true,mouse:true,dup:true,wrip:true};
ozoki_ct.ci = "686665";
var PAGESPEED_VERSION = "4.60.1";
!function(o){var n="2";if("undefined"==typeof window.document[ozoki_tc])window.document[ozoki_tc]=!1;else if(!ozoki_opt.dup)return;if(!window.document[ozoki_tc]){window.document[ozoki_tc]=!0;var t=["oz_pl=1"];for(d in ozoki_ct)ozoki_ct.hasOwnProperty(d)&&t.push(encodeURIComponent(d)+"="+encodeURIComponent(ozoki_ct[d]));var i,e=window.name.match(/ifr\d+\|(.+)/);ozoki_opt._br&&e&&e[1]?ozoki_opt._brpurl=i=e[1]:i=ozoki_url.substr(0,ozoki_url.indexOf(":"))+"://"+ozoki_os;var r=[i,n,PAGESPEED_VERSION,ozoki_ct.ci,ozoki_tc,"postback?"+t.join("&")].join("/"),u=Date.now?Date.now:function(){return(new Date).getTime()},c=function(o){try{var n=new XMLHttpRequest;n.open("POST",r,!0),n.withCredentials=!1,n.setRequestHeader("Content-Type","text/plain"),n.send(JSON.stringify({loader:o}))}catch(t){}};c({init:1});var a=function(o){var t,i,e,r,n;t=o.JSON||o.Object();var u=Object.prototype;r=u.toString,n={},e=new Date(-0xc782b5b800cec);try{e=-109252==e.getUTCFullYear()&&0===e.getUTCMonth()&&1===e.getUTCDate()&&10==e.getUTCHours()&&37==e.getUTCMinutes()&&6==e.getUTCSeconds()&&708==e.getUTCMilliseconds()}catch(s){}n.isExtended=e;var c,a='{"a":[1,true,false,null,"\\u0000\\b\\n\\f\\r\\t"]}';return n.json_stringify=function(){var o=t.stringify,n="function"==typeof o&&e;if(n){(c=function(){return 1}).toJSON=c;try{n="0"===o(0)&&"0"===o(new Number)&&'""'==o(new String)&&o(r)===i&&o(i)===i&&"1"===o(c)&&"[1]"==o([c])&&"[null]"==o([i])&&"null"==o(null)&&"[null,null,null]"==o([i,r,null])&&o({a:[c,!0,!1,null,"\0\b\n\f\r\t"]})==a&&"1"===o(null,c)&&"[\n 1,\n 2\n]"==o([1,2],null,1)&&'"-271821-04-20T00:00:00.000Z"'==o(new Date(-864e13))&&'"+275760-09-13T00:00:00.000Z"'==o(new Date(864e13))&&'"-000001-01-01T00:00:00.000Z"'==o(new Date(-621987552e5))&&'"1969-12-31T23:59:59.999Z"'==o(new Date(-1))}catch(s){n=!1}}return!!n}(),n.json_parse=function(){var o=t.parse;if("function"==typeof o)try{if(0===o("0")&&!o(!1)){var n=5==(c=o(a)).a.length&&1===c.a[0];if(n){try{n=!o('"\t"')}catch(s){}if(n)try{n=1!==o("01")}catch(s){}if(n)try{n=1!==o("1.")}catch(s){}}}}catch(s){n=!1}return!!n}(),n.bug_string_char_index=!("a"=="a"[0]),n.json=!(!n.json_stringify||!n.json_parse),n}(o),s=ozoki_url.substr(0,ozoki_url.indexOf(":"))+"://"+ozoki_os+"/"+n+"/"+PAGESPEED_VERSION+"/",f=(ozoki_opt.cor?"":"nc-")+(a.json?"main.js":"JSON-main.js"),_=ozoki_ct.oz_cb?s+f+"?cb="+ozoki_tc:s+f,l={};l.ozoki_st=(new Date).getTime(),l.ozoki_os=ozoki_os,"undefined"!=typeof ozoki_fl&&(l.ozoki_fl=ozoki_fl),l.ozoki_url=ozoki_url,l.ozoki_ct=ozoki_ct,l.ozoki_tc=ozoki_tc,l.ozoki_opt=ozoki_opt,l.ozoki_omid=ozoki_omid,"undefined"!=typeof ozoki_dt&&(l.ozoki_dt=ozoki_dt),l.ozoki_spt=document.currentScript?document.currentScript:null,l.ozoki_mn=_,l.ozoki_json=a;var d,z,k,p,w=".".length,m=function(o,n){var t,i,e=(t=o,z=8*w,isNaN(d=t.substr(t.indexOf(".")+w,z))?d:t.substr(w-1,z)),r=(i=o,isNaN(d=i.substr(i.indexOf(".")+w,w))?d:i.substr(w-1,w));l.ozoki_onf="undefined"==typeof n.onfocus?null:n.onfocus,null===l.ozoki_onf&&(p={toString:function(){return null}}),p[r]=function(o){if(o==e)return l},n.onfocus=function(){return p}},y=!1,b=function(){if(!y){if(document&&!k){k=document.createElement("script");var o=u();k.onload=function(){c({load:u()-o})},k.onerror=function(){c({error:u()-o})},m(_,k),k.src=_}document.body?(y=!0,document.body.appendChild(k)):window.setTimeout(b,4)}};b()}}(this);
})();
