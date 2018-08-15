!function(a,b){"function"==typeof define&&define.amd?define(function(){return a.is=b()}):"object"==typeof exports?module.exports=b():a.is=b()}(this,function(){function a(a){return function(){return!a.apply(null,j.call(arguments))}}function b(a){return function(){var b=j.call(arguments),c=b.length;1===c&&h.array(b[0])&&(b=b[0],c=b.length);for(var d=0;c>d;d++)if(!a.call(null,b[d]))return!1;return!0}}function c(a){return function(){var b=j.call(arguments),c=b.length;1===c&&h.array(b[0])&&(b=b[0],c=b.length);for(var d=0;c>d;d++)if(a.call(null,b[d]))return!0;return!1}}function d(a,b){h[a]=function(c){return b[a].test(c)}}function e(){var d=h;for(var e in d)if(k.call(d,e)&&h["function"](d[e]))for(var f=d[e].api||["not","all","any"],g=0;g<f.length;g++)"not"===f[g]&&(h.not[e]=a(h[e])),"all"===f[g]&&(h.all[e]=b(h[e])),"any"===f[g]&&(h.any[e]=c(h[e]))}var f=this||global,g=f.is,h={};h.VERSION="0.8.0",h.not={},h.all={},h.any={};var i=Object.prototype.toString,j=Array.prototype.slice,k=Object.prototype.hasOwnProperty;h.arguments=function(a){return h.not["null"](a)&&("[object Arguments]"===i.call(a)||"object"==typeof a&&"callee"in a)},h.array=Array.isArray||function(a){return"[object Array]"===i.call(a)},h["boolean"]=function(a){return a===!0||a===!1||"[object Boolean]"===i.call(a)},h.date=function(a){return"[object Date]"===i.call(a)},h.error=function(a){return"[object Error]"===i.call(a)},h["function"]=function(a){return"[object Function]"===i.call(a)||"function"==typeof a},h.nan=function(a){return a!==a},h["null"]=function(a){return null===a},h.number=function(a){return h.not.nan(a)&&"[object Number]"===i.call(a)},h.object=function(a){var b=typeof a;return"function"===b||"object"===b&&!!a},h.json=function(a){return"[object Object]"===i.call(a)},h.regexp=function(a){return"[object RegExp]"===i.call(a)},h.sameType=function(a,b){return h.nan(a)||h.nan(b)?h.nan(a)===h.nan(b):i.call(a)===i.call(b)},h.sameType.api=["not"],h.string=function(a){return"[object String]"===i.call(a)},h["char"]=function(a){return h.string(a)&&1===a.length},h.undefined=function(a){return void 0===a},h.empty=function(a){if(h.object(a)){var b=Object.getOwnPropertyNames(a).length;return 0===b||1===b&&h.array(a)||2===b&&h.arguments(a)?!0:!1}return""===a},h.existy=function(a){return null!==a&&void 0!==a},h.truthy=function(a){return h.existy(a)&&a!==!1&&h.not.nan(a)&&""!==a&&0!==a},h.falsy=a(h.truthy),h.space=function(a){if(h["char"](a)){var b=a.charCodeAt(0);return b>8&&14>b||32===b}return!1},h.equal=function(a,b){return h.all.number(a,b)?a===b&&1/a===1/b:h.all.string(a,b)||h.all.regexp(a,b)?""+a==""+b:h.all["boolean"](a,b)?a===b:!1},h.equal.api=["not"],h.even=function(a){return h.number(a)&&a%2===0},h.odd=function(a){return h.number(a)&&a%2===1},h.positive=function(a){return h.number(a)&&a>0},h.negative=function(a){return h.number(a)&&0>a},h.above=function(a,b){return h.all.number(a,b)&&a>b},h.above.api=["not"],h.under=function(a,b){return h.all.number(a,b)&&b>a},h.under.api=["not"],h.within=function(a,b,c){return h.all.number(a,b,c)&&a>b&&c>a},h.within.api=["not"],h.decimal=function(a){return h.number(a)&&a%1!==0},h.integer=function(a){return h.number(a)&&a%1===0},h.finite=isFinite||function(a){return a!==1/0&&a!==-(1/0)&&h.not.nan(a)},h.infinite=a(h.finite);var l={url:/^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/i,email:/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i,creditCard:/^(?:(4[0-9]{12}(?:[0-9]{3})?)|(5[1-5][0-9]{14})|(6(?:011|5[0-9]{2})[0-9]{12})|(3[47][0-9]{13})|(3(?:0[0-5]|[68][0-9])[0-9]{11})|((?:2131|1800|35[0-9]{3})[0-9]{11}))$/,alphaNumeric:/^[A-Za-z0-9]+$/,timeString:/^(2[0-3]|[01]?[0-9]):([0-5]?[0-9]):([0-5]?[0-9])$/,dateString:/^(1[0-2]|0?[1-9])\/(3[01]|[12][0-9]|0?[1-9])\/(?:[0-9]{2})?[0-9]{2}$/,usZipCode:/^[0-9]{5}(?:-[0-9]{4})?$/,caPostalCode:/^(?!.*[DFIOQU])[A-VXY][0-9][A-Z]\s?[0-9][A-Z][0-9]$/,ukPostCode:/^[A-Z]{1,2}[0-9RCHNQ][0-9A-Z]?\s?[0-9][ABD-HJLNP-UW-Z]{2}$|^[A-Z]{2}-?[0-9]{4}$/,nanpPhone:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/,eppPhone:/^\+[0-9]{1,3}\.[0-9]{4,14}(?:x.+)?$/,socialSecurityNumber:/^(?!000|666)[0-8][0-9]{2}-(?!00)[0-9]{2}-(?!0000)[0-9]{4}$/,affirmative:/^(?:1|t(?:rue)?|y(?:es)?|ok(?:ay)?)$/,hexadecimal:/^[0-9a-fA-F]+$/,hexColor:/^#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/,ipv4:/^(?:(?:\d|[1-9]\d|1\d{2}|2[0-4]\d|25[0-5])\.){3}(?:\d|[1-9]\d|1\d{2}|2[0-4]\d|25[0-5])$/,ipv6:/^(([a-zA-Z]|[a-zA-Z][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z]|[A-Za-z][A-Za-z0-9\-]*[A-Za-z0-9])$|^\s*((([0-9A-Fa-f]{1,4}:){7}([0-9A-Fa-f]{1,4}|:))|(([0-9A-Fa-f]{1,4}:){6}(:[0-9A-Fa-f]{1,4}|((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){5}(((:[0-9A-Fa-f]{1,4}){1,2})|:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){4}(((:[0-9A-Fa-f]{1,4}){1,3})|((:[0-9A-Fa-f]{1,4})?:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){3}(((:[0-9A-Fa-f]{1,4}){1,4})|((:[0-9A-Fa-f]{1,4}){0,2}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){2}(((:[0-9A-Fa-f]{1,4}){1,5})|((:[0-9A-Fa-f]{1,4}){0,3}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){1}(((:[0-9A-Fa-f]{1,4}){1,6})|((:[0-9A-Fa-f]{1,4}){0,4}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(:(((:[0-9A-Fa-f]{1,4}){1,7})|((:[0-9A-Fa-f]{1,4}){0,5}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:)))(%.+)?\s*$/,ip:/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$|^(([a-zA-Z]|[a-zA-Z][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z]|[A-Za-z][A-Za-z0-9\-]*[A-Za-z0-9])$|^\s*((([0-9A-Fa-f]{1,4}:){7}([0-9A-Fa-f]{1,4}|:))|(([0-9A-Fa-f]{1,4}:){6}(:[0-9A-Fa-f]{1,4}|((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){5}(((:[0-9A-Fa-f]{1,4}){1,2})|:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){4}(((:[0-9A-Fa-f]{1,4}){1,3})|((:[0-9A-Fa-f]{1,4})?:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){3}(((:[0-9A-Fa-f]{1,4}){1,4})|((:[0-9A-Fa-f]{1,4}){0,2}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){2}(((:[0-9A-Fa-f]{1,4}){1,5})|((:[0-9A-Fa-f]{1,4}){0,3}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){1}(((:[0-9A-Fa-f]{1,4}){1,6})|((:[0-9A-Fa-f]{1,4}){0,4}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(:(((:[0-9A-Fa-f]{1,4}){1,7})|((:[0-9A-Fa-f]{1,4}){0,5}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:)))(%.+)?\s*$/};for(var m in l)l.hasOwnProperty(m)&&d(m,l);h.include=function(a,b){return a.indexOf(b)>-1},h.include.api=["not"],h.upperCase=function(a){return h.string(a)&&a===a.toUpperCase()},h.lowerCase=function(a){return h.string(a)&&a===a.toLowerCase()},h.startWith=function(a,b){return h.string(a)&&0===a.indexOf(b)},h.startWith.api=["not"],h.endWith=function(a,b){return h.string(a)&&a.indexOf(b)>-1&&a.indexOf(b)===a.length-b.length},h.endWith.api=["not"],h.capitalized=function(a){if(h.not.string(a))return!1;for(var b=a.split(" "),c=[],d=0;d<b.length;d++)c.push(b[d][0]===b[d][0].toUpperCase());return h.all.truthy.apply(null,c)},h.palindrome=function(a){return h.string(a)&&a==a.split("").reverse().join("")};var n=["sunday","monday","tuesday","wednesday","thursday","friday","saturday"],o=["january","february","march","april","may","june","july","august","september","october","november","december"];if(h.today=function(a){var b=new Date,c=b.toDateString();return h.date(a)&&a.toDateString()===c},h.yesterday=function(a){var b=new Date,c=new Date(b.setDate(b.getDate()-1)).toDateString();return h.date(a)&&a.toDateString()===c},h.tomorrow=function(a){var b=new Date,c=new Date(b.setDate(b.getDate()+1)).toDateString();return h.date(a)&&a.toDateString()===c},h.past=function(a){var b=new Date;return h.date(a)&&a.getTime()<b.getTime()},h.future=a(h.past),h.day=function(a,b){return h.date(a)&&b.toLowerCase()===n[a.getDay()]},h.day.api=["not"],h.month=function(a,b){return h.date(a)&&b.toLowerCase()===o[a.getMonth()]},h.month.api=["not"],h.year=function(a,b){return h.date(a)&&h.number(b)&&b===a.getFullYear()},h.year.api=["not"],h.leapYear=function(a){return h.number(a)&&(a%4===0&&a%100!==0||a%400===0)},h.weekend=function(a){return h.date(a)&&(6===a.getDay()||0===a.getDay())},h.weekday=a(h.weekend),h.inDateRange=function(a,b,c){if(h.not.date(a)||h.not.date(b)||h.not.date(c))return!1;var d=a.getTime(),e=b.getTime(),f=c.getTime();return d>e&&f>d},h.inDateRange.api=["not"],h.inLastWeek=function(a){return h.inDateRange(a,new Date((new Date).setDate((new Date).getDate()-7)),new Date)},h.inLastMonth=function(a){return h.inDateRange(a,new Date((new Date).setMonth((new Date).getMonth()-1)),new Date)},h.inLastYear=function(a){return h.inDateRange(a,new Date((new Date).setFullYear((new Date).getFullYear()-1)),new Date)},h.inNextWeek=function(a){return h.inDateRange(a,new Date,new Date((new Date).setDate((new Date).getDate()+7)))},h.inNextMonth=function(a){return h.inDateRange(a,new Date,new Date((new Date).setMonth((new Date).getMonth()+1)))},h.inNextYear=function(a){return h.inDateRange(a,new Date,new Date((new Date).setFullYear((new Date).getFullYear()+1)))},h.quarterOfYear=function(a,b){return h.date(a)&&h.number(b)&&b===Math.floor((a.getMonth()+3)/3)},h.quarterOfYear.api=["not"],h.dayLightSavingTime=function(a){var b=new Date(a.getFullYear(),0,1),c=new Date(a.getFullYear(),6,1),d=Math.max(b.getTimezoneOffset(),c.getTimezoneOffset());return a.getTimezoneOffset()<d},"undefined"!=typeof window){var p="navigator"in window&&"userAgent"in navigator&&navigator.userAgent.toLowerCase()||"",q="navigator"in window&&"vendor"in navigator&&navigator.vendor.toLowerCase()||"",r="navigator"in window&&"appVersion"in navigator&&navigator.appVersion.toLowerCase()||"";h.chrome=function(){return/chrome|chromium/i.test(p)&&/google inc/.test(q)},h.chrome.api=["not"],h.firefox=function(){return/firefox/i.test(p)},h.firefox.api=["not"],h.edge=function(){return/edge/i.test(p)},h.edge.api=["not"],h.ie=function(a){return a?a>=11?"ActiveXObject"in window:new RegExp("msie "+a).test(p):/msie/i.test(p)||"ActiveXObject"in window},h.ie.api=["not"],h.opera=function(){return/^Opera\//.test(p)||/\x20OPR\//.test(p)},h.opera.api=["not"],h.safari=function(){return/safari/i.test(p)&&/apple computer/i.test(q)},h.safari.api=["not"],h.ios=function(){return h.iphone()||h.ipad()||h.ipod()},h.ios.api=["not"],h.iphone=function(){return/iphone/i.test(p)},h.iphone.api=["not"],h.ipad=function(){return/ipad/i.test(p)},h.ipad.api=["not"],h.ipod=function(){return/ipod/i.test(p)},h.ipod.api=["not"],h.android=function(){return/android/i.test(p)},h.android.api=["not"],h.androidPhone=function(){return/android/i.test(p)&&/mobile/i.test(p)},h.androidPhone.api=["not"],h.androidTablet=function(){return/android/i.test(p)&&!/mobile/i.test(p)},h.androidTablet.api=["not"],h.blackberry=function(){return/blackberry/i.test(p)||/BB10/i.test(p)},h.blackberry.api=["not"],h.desktop=function(){return h.not.mobile()&&h.not.tablet()},h.desktop.api=["not"],h.linux=function(){return/linux/i.test(r)},h.linux.api=["not"],h.mac=function(){return/mac/i.test(r)},h.mac.api=["not"],h.windows=function(){return/win/i.test(r)},h.windows.api=["not"],h.windowsPhone=function(){return h.windows()&&/phone/i.test(p)},h.windowsPhone.api=["not"],h.windowsTablet=function(){return h.windows()&&h.not.windowsPhone()&&/touch/i.test(p)},h.windowsTablet.api=["not"],h.mobile=function(){return h.iphone()||h.ipod()||h.androidPhone()||h.blackberry()||h.windowsPhone()},h.mobile.api=["not"],h.tablet=function(){return h.ipad()||h.androidTablet()||h.windowsTablet()},h.tablet.api=["not"],h.online=function(){return navigator.onLine},h.online.api=["not"],h.offline=a(h.online),h.offline.api=["not"],h.touchDevice=function(){return"ontouchstart"in window||"DocumentTouch"in window&&document instanceof DocumentTouch},h.touchDevice.api=["not"]}return h.propertyCount=function(a,b){if(!h.object(a)||!h.number(b))return!1;if(Object.keys)return Object.keys(a).length===b;var c,d=[];for(c in a)k.call(a,c)&&d.push(c);return d.length===b},h.propertyCount.api=["not"],h.propertyDefined=function(a,b){return h.object(a)&&h.string(b)&&b in a},h.propertyDefined.api=["not"],h.windowObject=function(a){return"object"==typeof a&&"setInterval"in a},h.domNode=function(a){return h.object(a)&&a.nodeType>0},h.inArray=function(a,b){if(h.not.array(b))return!1;for(var c=0;c<b.length;c++)if(b[c]===a)return!0;return!1},h.inArray.api=["not"],h.sorted=function(a){if(h.not.array(a))return!1;for(var b=0;b<a.length;b++)if(a[b]>a[b+1])return!1;return!0},e(),h.setRegexp=function(a,b){for(var c in l)k.call(l,c)&&b===c&&(l[c]=a)},h.setNamespace=function(){return f.is=g,this},h});

var app = {

	init : function(){
		app.animacaoScroll();
		app.hideScroll();
	},

	animacaoScroll : function(){
		$('#radarBoxClick[href^="#"], #setaVantagens[href^="#"], .linkScroll[href^="#"]').on('click', function(event) {

		    var target = $( $(this).attr('href') );

		    if( target.length ) {
		        event.preventDefault();
		        $('html, body').animate({ scrollTop: target.offset().top}, 1300);
		    }

		});
	},

	hideScroll : function(){

		var timer = null

		$('#linkConect[href^="#"]').on('click', function(event){

            // abaixa o fio do topo
            $("#wireTopBox").delay(50).animate({top: '-110px',}, 400);
            $("#conectBox").delay(50).animate({top: '110px',}, 400)

            // esconde a div
            $("#linkConect").fadeOut( "slow" );

   			// sobe o roteador
   			$("#roteadorBox").delay(750).animate({top: '23px',}, 150);

   			// scrolla para a parte de baixo
   			var target = $( $(this).attr('href') );

		    if( target.length ) {
		        event.preventDefault();
		        $('html, body').delay(1800).animate({ scrollTop: target.offset().top}, 900);
		    }
		    
        });
	},


};

$(document).ready(function() {
    app.init();

    if ( is.not.mobile() ) {
        $('#fullpage').fullpage({
            css3: true,
            menu: '#menu',
            anchors: ['inicio', 'como-funciona', 'vantagens-personalizacao', 'vantagens-seguranca', 'vantagens-novos-formatos', 'vantagens-reconhecimento', 'vantagens-controle', 'vantagens-dashboard', 'vantagens-email-marekting', 'perfeito-para-voce'],
            scrollBar: true,
            // autoScrolling: false,
    		fitToSection: false,
            afterLoad: function(anchorLink, index) {
            	
            	// console.log(anchorLink, "afterLoad");
            	// console.log(index, "afterLoad index");

            	switch (anchorLink) {
            		case "_secao3":
            			$("#mask-hand").animate({"bottom": "0"}, 300, function(){
            				$(".handcel .hand .imagem").animate({"opacity": 1}, 300);
            			});
            			break;
            		case "_secao10":        			
            			// $.fn.fullpage.setAutoScrolling(false);
            			break;
            	}

                if (index < 9) {
                    console.log("Travou o scroll");
                    $.fn.fullpage.setAutoScrolling(true);
                }

            },
            afterSlideLoad: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {

            	// console.log("afterSlideLoad");            
            },
            onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {

            	// console.log("onSlideLeave");            
            },
            onLeave: function(index, nextIndex, direction) {
                console.log("Index: "+ index + ", nextIndex: "+ nextIndex, "onLeave");

                if ( index == 3 && nextIndex == 2) {            	
        			$(".handcel .hand .imagem").animate({"opacity": 0}, 300, function(){
        				$("#mask-hand").animate({"bottom": "-700px"}, 300);
        			});
                }

                if ( index == 8 && nextIndex == 7) {            	
                	$("#mask-hand").animate({"bottom": "0"}, 300, function(){
        				$(".handcel .hand .imagem").animate({"opacity": 1}, 300);
        			});            	
                }
                if ( index == 7 && nextIndex == 8) {
                	$(".handcel .hand .imagem").animate({"opacity": 0}, 300, function(){
        				$("#mask-hand").animate({"bottom": "-700px"}, 300);
        			});
                }
                if ( index == 8 && nextIndex == 9) {
                    console.log("Destravou o scroll");
                    $.fn.fullpage.setAutoScrolling(false);
                }
                if ( index == 10 && nextIndex == 9) {
                    console.log("Travou o scroll");
                    $.fn.fullpage.setAutoScrolling(true);
                }            
            }
        });
    }
});