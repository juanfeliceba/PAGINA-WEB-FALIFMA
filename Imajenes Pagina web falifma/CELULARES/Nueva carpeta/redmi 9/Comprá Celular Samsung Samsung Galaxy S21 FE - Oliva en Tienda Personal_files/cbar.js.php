
//<script>

try {
	// prevent multiple load
	if (typeof cbar_scraper_start === 'undefined') {
		if (typeof window.cbar_loaded === 'undefined') {
			window.cbar_loaded = true; 
		} else {
			throw {
				name: "dontsend", 
				message: "cbar_already_loaded", 
				stack: ""
			};
		}
	}


/* Fixing chrome highlighting */
var cbar_version ='1655905057';
var cbar_url = window.location.href;
var cbar_url_en = encodeURIComponent(cbar_url);
var cbar_dynamic_url = 'https://www.barilliance.net/';
var cbar_static_url = 'https://static.barilliance.com/';
var cbar_userimages = 'https://userimages.barilliance.com/';
var cbar_RECSV1 = true; // set to false if no recs
var cbar_RECSV2 = false;
var cbar_RECSV3 = false;
var cbar_CP = false;
var cbar_cp_show = false;
var cbar_shortlist = false;
var cbar_shortlist_show = false;
var cbar_quiet = false;
var cbar_debug = 1;
var cbar_debug_show = false;
var cbar_startearly = false;
var cbar_md = false;
var cbar_ro = false;
var cbar_force_li = false;
var cbar_cid = '';
var cbar_pid2cid = '';
var cbar_cname = '';
var cbar_c_from_p = false;
var cbar_cat_cids = [];
var cbar_cat_level  = 0;
var cbar_cids_cur = '';
var cbar_cids_p = '';
var cbar_cats_l = [];
var cbar_cats_c = [];
var cbar_lnk = 5;
var cbar_pid = '';
var cbar_masterid = '';
var cbar_platform_id = '';
var cbar_qty = 1;
var cbar_results = null;
var cbar_sid = 0;
var cbar_uid;
var cbar_pic = '';
var cbar_name = '';
var cbar_purl = '';
var cbar_auto_curl = '';
var cbar_auto_cname = '';
var cbar_auto_curl_p = '';
var cbar_catmode = 1;
var cbar_pri = '';
var cbar_is_pur = false;
var cbar_is_checkout = false;
var cbar_pur_pids = [];
var cbar_pur_qtys = [];
var cbar_pur_imgs = [];
var cbar_pur_names = [];
var cbar_pur_urls = [];
var cbar_pur_prices = [];
var cbar_pur_subttls = [];
var cbar_pur_xtr1s = [];
var cbar_pur_xtr2s = [];
var cbar_pur_xtr3s = [];
var cbar_pur_xtr4s = [];
var cbar_pur_add = false;
var cbar_pur_pid_add = '';
var cbar_pur_qty_add = 0;
var cbar_crt = '';
var cbar_crst = '';
var cbar_crtn = '';
var cbar_shp = '';
var cbar_pur_com = false;
var cbar_pur_mode = 0;
var cbar_home = false;
var cbar_4U = false;
var cbar_other = false;
var cbar_brand = false;
var cbar_encode = false; //false means utf-8
var cbar_block_bt = false;
var cbar_cookiedomain = '';
var cbar_user_attributes = {};
var cbar_user_attribute = {};
var cbar_product_attributes = {};
var cbar_del_user_attributes = {};
var cbar_del_product_attributes = {};
var cbar_userinfo = {};
var cbar_numicons1 = 6;
var cbar_numicons2 = 4;
var cbar_abt = 0;
var cbar_abt_key = 1;
var cbar_pagetype = "U";
var cbar_log = '';
var cbar_elog = '';
var cbar_logg = '';
var cbar_oos = 2;
var cbar_norecs = null;
var cbar_oos_page = 0;
var cbar_auto_oos = false;
var cbar_fl1 = null;
var cbar_fl1_html = '';
var cbar_ipuid_save = false;
var cbar_ipuid_get = false;
var cbar_extra1 = '';
var cbar_extra2 = '';
var cbar_extra3 = '';
var cbar_xtxt = '';
var cbar_filter_val = '';
var cbar_flow = '';
var cbar_num_widgets = 2;
var cbar_search = '';
var cbar_ctr1 = 0;
var cbar_ctr2 = 0;
var cbar_ctr3 = 0;
var cbar_liX = 1;
var cbar_liP = 1;
var cbar_liL = 1;

var cbar_widget_show = false;
var cbar_widget_to_draw = 0; //1,2,0 = all
var cbar_widget = false;
var cbar_w_template_head = [];
var cbar_w_item_template = [];
var cbar_w_linebreak_template = [];
var cbar_w_iconsperline = [];
var cbar_w_template_bottom = [];
var cbar_w_anchor = [];
var cbar_w_insert_where = []; // 0=after 1=before 2=child 3= overwrite
var cbar_w_title_len = 199;
var cbar_w_scrollbuttons = [];
var cbar_w_numshowicons = [];
var cbar_w_next_html = [];
var cbar_w_prev_html = [];

// internal
var cbar_preview_rules = '';
var cbar_preview_variation = '';
var cbar_preview_widgets = '';
var cbar_preview_live = false;
var cbar_actual_rule_ids = [];
var cbar_datajs = 'data.js.php';
var cbar_override_titles = [];
var rule_title_index = [];
var cbar_recstep_titles = [];
//var cbar_new_mode = false;
var cbar_suppress_rules = [];
var cbar_data_params = '';
var cbar_lvt = 0;
var cbar_sess = 0;
var cbar_sess_pv = 0;
var cbar_date = new Date();
var cbar_abt_str = '';
var cbar_ban_resizetimeout = 0;
var cbar_ban_scrolltimeout = 0;
var cbar_banners = [];
var cbar_coups = [];
var cbar_e_input = [];
var cbar_e_last = '';
var cbar_e_com = false;
var cbar_e_checkbox = [];
var cbar_cou_input = '';
var cbar_cou_in_cart = false;
var cbar_rules_str = '';
var cbar_popups = [];
var cbar_pop_scrolltimeout = 0;
var cbar_trust_outdiv_css = 'position:absolute';
var cbar_subproducts_attrib = '';
var cbar_zindex = 2000000000; 
var cbar_alreadyrunflag = false; //flag to indicate whether target function has already been run
var cbar_readyBound = false;
var cbar_isReady = false;
var cbar_use_cookies = false;
window.cbar_globals = [];

var cbarApp = {
	appDomain: 'https://app.barilliance.com',
	asyncDatajs: false,
	cartMonitorInitiated: false,
	categoryProductsCache: null,
	clickMonitor: {
		enabled: false,
		fastReport: false,
		groupingStrategy: 'a'
	},
	closeButtons: {},
	gaClickEvents: {},
	gaEvents: {},
	isWhiteLable: false,
	maxWidgetSlots: 12,
	monitorPageClicks: false,
	previewBoxId: 'cbar-prev-msg-div',
	recsAttributes: {},
	ruleVariations: {},
	ruleSuppressed: {}
};

var cbar2url = {
	cbar_cid: 'cid',
	cbar_pid2cid: 'pid2cid',
	cbar_pic: 'pic',
	cbar_name: 'name',
	cbar_purl: 'purl',
	cbar_auto_curl: 'acurl',
	cbar_auto_curl_p: 'acurl_p',
	cbar_auto_cname: 'acname',
	cbar_pri: 'pri',
	cbar_log: 'lo',
	cbar_elog: 'elo',
	cbar_logg: 'logg',
	cbar_crt: 'crt',
	cbar_crtn: 'crtn',
	cbar_crst: 'crst',
	cbar_shp: 'shp',
	cbar_extra1: 'xtr1',
	cbar_extra2: 'xtr2',
	cbar_extra3: 'xtr3',
	cbar_extra4: 'xtr4',
	cbar_xtxt: 'xtxt',
	cbar_filter_val: 'fltr',
	cbar_oos: 'oos',
	cbar_subproducts_attrib: 'subattr',
	cbar_masterid: 'master_str',
	cbar_platform_id: 'platform_id'
};

/*! Sizzle v1.9.4-pre | (c) 2013 jQuery Foundation, Inc. | jquery.org/license
*/(function(e,t){function n(e,t,n,r){var o,i,u,l,a,c,f,s,h,g;if((t?t.ownerDocument||t:F)!==R&&I(t),t=t||R,n=n||[],!e||"string"!=typeof e)return n;if(1!==(l=t.nodeType)&&9!==l)return[];if($&&!r){if(o=vt.exec(e))if(u=o[1]){if(9===l){if(i=t.getElementById(u),!i||!i.parentNode)return n;if(i.id===u)return n.push(i),n}else if(t.ownerDocument&&(i=t.ownerDocument.getElementById(u))&&O(t,i)&&i.id===u)return n.push(i),n}else{if(o[2])return et.apply(n,t.getElementsByTagName(e)),n;if((u=o[3])&&E.getElementsByClassName&&t.getElementsByClassName)return et.apply(n,t.getElementsByClassName(u)),n}if(E.qsa&&(!q||!q.test(e))){if(s=f=k,h=t,g=9===l&&e,1===l&&"object"!==t.nodeName.toLowerCase()){for(c=p(e),(f=t.getAttribute("id"))?s=f.replace(xt,"\\$&"):t.setAttribute("id",s),s="[id='"+s+"'] ",a=c.length;a--;)c[a]=s+d(c[a]);h=pt.test(e)&&t.parentNode||t,g=c.join(",")}if(g)try{return et.apply(n,h.querySelectorAll(g)),n}catch(m){}finally{f||t.removeAttribute("id")}}}return x(e.replace(ct,"$1"),t,n,r)}function r(){function e(n,r){return t.push(n+=" ")>T.cacheLength&&delete e[t.shift()],e[n]=r}var t=[];return e}function o(e){return e[k]=!0,e}function i(e){var t=R.createElement("div");try{return!!e(t)}catch(n){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function u(e,t){for(var n=e.split("|"),r=e.length;r--;)T.attrHandle[n[r]]=t}function l(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&(~t.sourceIndex||Q)-(~e.sourceIndex||Q);if(r)return r;if(n)for(;n=n.nextSibling;)if(n===t)return-1;return e?1:-1}function a(e){return function(t){var n=t.nodeName.toLowerCase();return"input"===n&&t.type===e}}function c(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function f(e){return o(function(t){return t=+t,o(function(n,r){for(var o,i=e([],n.length,t),u=i.length;u--;)n[o=i[u]]&&(n[o]=!(r[o]=n[o]))})})}function s(){}function p(e,t){var r,o,i,u,l,a,c,f=U[e+" "];if(f)return t?0:f.slice(0);for(l=e,a=[],c=T.preFilter;l;){(!r||(o=ft.exec(l)))&&(o&&(l=l.slice(o[0].length)||l),a.push(i=[])),r=!1,(o=st.exec(l))&&(r=o.shift(),i.push({value:r,type:o[0].replace(ct," ")}),l=l.slice(r.length));for(u in T.filter)!(o=mt[u].exec(l))||c[u]&&!(o=c[u](o))||(r=o.shift(),i.push({value:r,type:u,matches:o}),l=l.slice(r.length));if(!r)break}return t?l.length:l?n.error(e):U(e,a).slice(0)}function d(e){for(var t=0,n=e.length,r="";n>t;t++)r+=e[t].value;return r}function h(e,t,n){var r=t.dir,o=n&&"parentNode"===r,i=j++;return t.first?function(t,n,i){for(;t=t[r];)if(1===t.nodeType||o)return e(t,n,i)}:function(t,n,u){var l,a,c,f=z+" "+i;if(u){for(;t=t[r];)if((1===t.nodeType||o)&&e(t,n,u))return!0}else for(;t=t[r];)if(1===t.nodeType||o)if(c=t[k]||(t[k]={}),(a=c[r])&&a[0]===f){if((l=a[1])===!0||l===w)return l===!0}else if(a=c[r]=[f],a[1]=e(t,n,u)||w,a[1]===!0)return!0}}function g(e){return e.length>1?function(t,n,r){for(var o=e.length;o--;)if(!e[o](t,n,r))return!1;return!0}:e[0]}function m(e,t,n,r,o){for(var i,u=[],l=0,a=e.length,c=null!=t;a>l;l++)(i=e[l])&&(!n||n(i,r,o))&&(u.push(i),c&&t.push(l));return u}function y(e,t,n,r,i,u){return r&&!r[k]&&(r=y(r)),i&&!i[k]&&(i=y(i,u)),o(function(o,u,l,a){var c,f,s,p=[],d=[],h=u.length,g=o||b(t||"*",l.nodeType?[l]:l,[]),y=!e||!o&&t?g:m(g,p,e,l,a),v=n?i||(o?e:h||r)?[]:u:y;if(n&&n(y,v,l,a),r)for(c=m(v,d),r(c,[],l,a),f=c.length;f--;)(s=c[f])&&(v[d[f]]=!(y[d[f]]=s));if(o){if(i||e){if(i){for(c=[],f=v.length;f--;)(s=v[f])&&c.push(y[f]=s);i(null,v=[],c,a)}for(f=v.length;f--;)(s=v[f])&&(c=i?nt.call(o,s):p[f])>-1&&(o[c]=!(u[c]=s))}}else v=m(v===u?v.splice(h,v.length):v),i?i(null,u,v,a):et.apply(u,v)})}function v(e){for(var t,n,r,o=e.length,i=T.relative[e[0].type],u=i||T.relative[" "],l=i?1:0,a=h(function(e){return e===t},u,!0),c=h(function(e){return nt.call(t,e)>-1},u,!0),f=[function(e,n,r){return!i&&(r||n!==L)||((t=n).nodeType?a(e,n,r):c(e,n,r))}];o>l;l++)if(n=T.relative[e[l].type])f=[h(g(f),n)];else{if(n=T.filter[e[l].type].apply(null,e[l].matches),n[k]){for(r=++l;o>r&&!T.relative[e[r].type];r++);return y(l>1&&g(f),l>1&&d(e.slice(0,l-1).concat({value:" "===e[l-2].type?"*":""})).replace(ct,"$1"),n,r>l&&v(e.slice(l,r)),o>r&&v(e=e.slice(r)),o>r&&d(e))}f.push(n)}return g(f)}function N(e,t){var r=0,i=t.length>0,u=e.length>0,l=function(o,l,a,c,f){var s,p,d,h=[],g=0,y="0",v=o&&[],N=null!=f,b=L,x=o||u&&T.find.TAG("*",f&&l.parentNode||l),C=z+=null==b?1:Math.random()||.1;for(N&&(L=l!==R&&l,w=r);null!=(s=x[y]);y++){if(u&&s){for(p=0;d=e[p++];)if(d(s,l,a)){c.push(s);break}N&&(z=C,w=++r)}i&&((s=!d&&s)&&g--,o&&v.push(s))}if(g+=y,i&&y!==g){for(p=0;d=t[p++];)d(v,h,l,a);if(o){if(g>0)for(;y--;)v[y]||h[y]||(h[y]=Z.call(c));h=m(h)}et.apply(c,h),N&&!o&&h.length>0&&g+t.length>1&&n.uniqueSort(c)}return N&&(z=C,L=b),v};return i?o(l):l}function b(e,t,r){for(var o=0,i=t.length;i>o;o++)n(e,t[o],r);return r}function x(e,t,n,r){var o,i,u,l,a,c=p(e);if(!r&&1===c.length){if(i=c[0]=c[0].slice(0),i.length>2&&"ID"===(u=i[0]).type&&E.getById&&9===t.nodeType&&$&&T.relative[i[1].type]){if(t=(T.find.ID(u.matches[0].replace(Ct,Et),t)||[])[0],!t)return n;e=e.slice(i.shift().value.length)}for(o=mt.needsContext.test(e)?0:i.length;o--&&(u=i[o],!T.relative[l=u.type]);)if((a=T.find[l])&&(r=a(u.matches[0].replace(Ct,Et),pt.test(i[0].type)&&t.parentNode||t))){if(i.splice(o,1),e=r.length&&d(i),!e)return et.apply(n,r),n;break}}return D(e,c)(r,t,!$,n,pt.test(e)),n}var C,E,w,T,A,S,D,L,B,I,R,P,$,q,H,M,O,k="sizzle"+-new Date,F=e.document,z=0,j=0,G=r(),U=r(),V=r(),X=!1,J=function(e,t){return e===t?(X=!0,0):0},K=typeof t,Q=1<<31,W={}.hasOwnProperty,Y=[],Z=Y.pop,_=Y.push,et=Y.push,tt=Y.slice,nt=Y.indexOf||function(e){for(var t=0,n=this.length;n>t;t++)if(this[t]===e)return t;return-1},rt="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",ot="[\\x20\\t\\r\\n\\f]",it="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",ut=it.replace("w","w#"),lt="\\["+ot+"*("+it+")"+ot+"*(?:([*^$|!~]?=)"+ot+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+ut+")|)|)"+ot+"*\\]",at=":("+it+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+lt.replace(3,8)+")*)|.*)\\)|)",ct=RegExp("^"+ot+"+|((?:^|[^\\\\])(?:\\\\.)*)"+ot+"+$","g"),ft=RegExp("^"+ot+"*,"+ot+"*"),st=RegExp("^"+ot+"*([>+~]|"+ot+")"+ot+"*"),pt=RegExp(ot+"*[+~]"),dt=RegExp("="+ot+"*([^\\]'\"]*)"+ot+"*\\]","g"),ht=RegExp(at),gt=RegExp("^"+ut+"$"),mt={ID:RegExp("^#("+it+")"),CLASS:RegExp("^\\.("+it+")"),TAG:RegExp("^("+it.replace("w","w*")+")"),ATTR:RegExp("^"+lt),PSEUDO:RegExp("^"+at),CHILD:RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+ot+"*(even|odd|(([+-]|)(\\d*)n|)"+ot+"*(?:([+-]|)"+ot+"*(\\d+)|))"+ot+"*\\)|)","i"),bool:RegExp("^(?:"+rt+")$","i"),needsContext:RegExp("^"+ot+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+ot+"*((?:-\\d)?\\d*)"+ot+"*\\)|)(?=[^-]|$)","i")},yt=/^[^{]+\{\s*\[native \w/,vt=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,Nt=/^(?:input|select|textarea|button)$/i,bt=/^h\d$/i,xt=/'|\\/g,Ct=RegExp("\\\\([\\da-f]{1,6}"+ot+"?|("+ot+")|.)","ig"),Et=function(e,t,n){var r="0x"+t-65536;return r!==r||n?t:0>r?String.fromCharCode(r+65536):String.fromCharCode(55296|r>>10,56320|1023&r)};try{et.apply(Y=tt.call(F.childNodes),F.childNodes),Y[F.childNodes.length].nodeType}catch(wt){et={apply:Y.length?function(e,t){_.apply(e,tt.call(t))}:function(e,t){for(var n=e.length,r=0;e[n++]=t[r++];);e.length=n-1}}}S=n.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return t?"HTML"!==t.nodeName:!1},E=n.support={},I=n.setDocument=function(e){var n=e?e.ownerDocument||e:F,r=n.defaultView;return n!==R&&9===n.nodeType&&n.documentElement?(R=n,P=n.documentElement,$=!S(n),r&&r.attachEvent&&r!==r.top&&r.attachEvent("onbeforeunload",function(){I()}),E.attributes=i(function(e){return e.className="i",!e.getAttribute("className")}),E.getElementsByTagName=i(function(e){return e.appendChild(n.createComment("")),!e.getElementsByTagName("*").length}),E.getElementsByClassName=i(function(e){return e.innerHTML="<div class='a'></div><div class='a i'></div>",e.firstChild.className="i",2===e.getElementsByClassName("i").length}),E.getById=i(function(e){return P.appendChild(e).id=k,!n.getElementsByName||!n.getElementsByName(k).length}),E.getById?(T.find.ID=function(e,t){if(typeof t.getElementById!==K&&$){var n=t.getElementById(e);return n&&n.parentNode?[n]:[]}},T.filter.ID=function(e){var t=e.replace(Ct,Et);return function(e){return e.getAttribute("id")===t}}):(delete T.find.ID,T.filter.ID=function(e){var t=e.replace(Ct,Et);return function(e){var n=typeof e.getAttributeNode!==K&&e.getAttributeNode("id");return n&&n.value===t}}),T.find.TAG=E.getElementsByTagName?function(e,n){return typeof n.getElementsByTagName!==K?n.getElementsByTagName(e):t}:function(e,t){var n,r=[],o=0,i=t.getElementsByTagName(e);if("*"===e){for(;n=i[o++];)1===n.nodeType&&r.push(n);return r}return i},T.find.CLASS=E.getElementsByClassName&&function(e,n){return typeof n.getElementsByClassName!==K&&$?n.getElementsByClassName(e):t},H=[],q=[],(E.qsa=yt.test(n.querySelectorAll))&&(i(function(e){e.innerHTML="<select><option selected=''></option></select>",e.querySelectorAll("[selected]").length||q.push("\\["+ot+"*(?:value|"+rt+")"),e.querySelectorAll(":checked").length||q.push(":checked")}),i(function(e){var t=n.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("t",""),e.querySelectorAll("[t^='']").length&&q.push("[*^$]="+ot+"*(?:''|\"\")"),e.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),q.push(",.*:")})),(E.matchesSelector=yt.test(M=P.webkitMatchesSelector||P.mozMatchesSelector||P.oMatchesSelector||P.msMatchesSelector))&&i(function(e){E.disconnectedMatch=M.call(e,"div"),M.call(e,"[s!='']:x"),H.push("!=",at)}),q=q.length&&RegExp(q.join("|")),H=H.length&&RegExp(H.join("|")),O=yt.test(P.contains)||P.compareDocumentPosition?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)for(;t=t.parentNode;)if(t===e)return!0;return!1},J=P.compareDocumentPosition?function(e,t){if(e===t)return X=!0,0;var r=t.compareDocumentPosition&&e.compareDocumentPosition&&e.compareDocumentPosition(t);return r?1&r||!E.sortDetached&&t.compareDocumentPosition(e)===r?e===n||O(F,e)?-1:t===n||O(F,t)?1:B?nt.call(B,e)-nt.call(B,t):0:4&r?-1:1:e.compareDocumentPosition?-1:1}:function(e,t){var r,o=0,i=e.parentNode,u=t.parentNode,a=[e],c=[t];if(e===t)return X=!0,0;if(!i||!u)return e===n?-1:t===n?1:i?-1:u?1:B?nt.call(B,e)-nt.call(B,t):0;if(i===u)return l(e,t);for(r=e;r=r.parentNode;)a.unshift(r);for(r=t;r=r.parentNode;)c.unshift(r);for(;a[o]===c[o];)o++;return o?l(a[o],c[o]):a[o]===F?-1:c[o]===F?1:0},n):R},n.matches=function(e,t){return n(e,null,null,t)},n.matchesSelector=function(e,t){if((e.ownerDocument||e)!==R&&I(e),t=t.replace(dt,"='$1']"),!(!E.matchesSelector||!$||H&&H.test(t)||q&&q.test(t)))try{var r=M.call(e,t);if(r||E.disconnectedMatch||e.document&&11!==e.document.nodeType)return r}catch(o){}return n(t,R,null,[e]).length>0},n.contains=function(e,t){return(e.ownerDocument||e)!==R&&I(e),O(e,t)},n.attr=function(e,n){(e.ownerDocument||e)!==R&&I(e);var r=T.attrHandle[n.toLowerCase()],o=r&&W.call(T.attrHandle,n.toLowerCase())?r(e,n,!$):t;return o===t?E.attributes||!$?e.getAttribute(n):(o=e.getAttributeNode(n))&&o.specified?o.value:null:o},n.error=function(e){throw Error("Syntax error, unrecognized expression: "+e)},n.uniqueSort=function(e){var t,n=[],r=0,o=0;if(X=!E.detectDuplicates,B=!E.sortStable&&e.slice(0),e.sort(J),X){for(;t=e[o++];)t===e[o]&&(r=n.push(o));for(;r--;)e.splice(n[r],1)}return e},A=n.getText=function(e){var t,n="",r=0,o=e.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=A(e)}else if(3===o||4===o)return e.nodeValue}else for(;t=e[r];r++)n+=A(t);return n},T=n.selectors={cacheLength:50,createPseudo:o,match:mt,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(Ct,Et),e[3]=(e[4]||e[5]||"").replace(Ct,Et),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||n.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&n.error(e[0]),e},PSEUDO:function(e){var n,r=!e[5]&&e[2];return mt.CHILD.test(e[0])?null:(e[3]&&e[4]!==t?e[2]=e[4]:r&&ht.test(r)&&(n=p(r,!0))&&(n=r.indexOf(")",r.length-n)-r.length)&&(e[0]=e[0].slice(0,n),e[2]=r.slice(0,n)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(Ct,Et).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=G[e+" "];return t||(t=RegExp("(^|"+ot+")"+e+"("+ot+"|$)"))&&G(e,function(e){return t.test("string"==typeof e.className&&e.className||typeof e.getAttribute!==K&&e.getAttribute("class")||"")})},ATTR:function(e,t,r){return function(o){var i=n.attr(o,e);return null==i?"!="===t:t?(i+="","="===t?i===r:"!="===t?i!==r:"^="===t?r&&0===i.indexOf(r):"*="===t?r&&i.indexOf(r)>-1:"$="===t?r&&i.slice(-r.length)===r:"~="===t?(" "+i+" ").indexOf(r)>-1:"|="===t?i===r||i.slice(0,r.length+1)===r+"-":!1):!0}},CHILD:function(e,t,n,r,o){var i="nth"!==e.slice(0,3),u="last"!==e.slice(-4),l="of-type"===t;return 1===r&&0===o?function(e){return!!e.parentNode}:function(t,n,a){var c,f,s,p,d,h,g=i!==u?"nextSibling":"previousSibling",m=t.parentNode,y=l&&t.nodeName.toLowerCase(),v=!a&&!l;if(m){if(i){for(;g;){for(s=t;s=s[g];)if(l?s.nodeName.toLowerCase()===y:1===s.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[u?m.firstChild:m.lastChild],u&&v){for(f=m[k]||(m[k]={}),c=f[e]||[],d=c[0]===z&&c[1],p=c[0]===z&&c[2],s=d&&m.childNodes[d];s=++d&&s&&s[g]||(p=d=0)||h.pop();)if(1===s.nodeType&&++p&&s===t){f[e]=[z,d,p];break}}else if(v&&(c=(t[k]||(t[k]={}))[e])&&c[0]===z)p=c[1];else for(;(s=++d&&s&&s[g]||(p=d=0)||h.pop())&&((l?s.nodeName.toLowerCase()!==y:1!==s.nodeType)||!++p||(v&&((s[k]||(s[k]={}))[e]=[z,p]),s!==t)););return p-=o,p===r||0===p%r&&p/r>=0}}},PSEUDO:function(e,t){var r,i=T.pseudos[e]||T.setFilters[e.toLowerCase()]||n.error("unsupported pseudo: "+e);return i[k]?i(t):i.length>1?(r=[e,e,"",t],T.setFilters.hasOwnProperty(e.toLowerCase())?o(function(e,n){for(var r,o=i(e,t),u=o.length;u--;)r=nt.call(e,o[u]),e[r]=!(n[r]=o[u])}):function(e){return i(e,0,r)}):i}},pseudos:{not:o(function(e){var t=[],n=[],r=D(e.replace(ct,"$1"));return r[k]?o(function(e,t,n,o){for(var i,u=r(e,null,o,[]),l=e.length;l--;)(i=u[l])&&(e[l]=!(t[l]=i))}):function(e,o,i){return t[0]=e,r(t,null,i,n),!n.pop()}}),has:o(function(e){return function(t){return n(e,t).length>0}}),contains:o(function(e){return function(t){return(t.textContent||t.innerText||A(t)).indexOf(e)>-1}}),lang:o(function(e){return gt.test(e||"")||n.error("unsupported lang: "+e),e=e.replace(Ct,Et).toLowerCase(),function(t){var n;do if(n=$?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return n=n.toLowerCase(),n===e||0===n.indexOf(e+"-");while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===P},focus:function(e){return e===R.activeElement&&(!R.hasFocus||R.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:function(e){return e.disabled===!1},disabled:function(e){return e.disabled===!0},checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,e.selected===!0},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeName>"@"||3===e.nodeType||4===e.nodeType)return!1;return!0},parent:function(e){return!T.pseudos.empty(e)},header:function(e){return bt.test(e.nodeName)},input:function(e){return Nt.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||t.toLowerCase()===e.type)},first:f(function(){return[0]}),last:f(function(e,t){return[t-1]}),eq:f(function(e,t,n){return[0>n?n+t:n]}),even:f(function(e,t){for(var n=0;t>n;n+=2)e.push(n);return e}),odd:f(function(e,t){for(var n=1;t>n;n+=2)e.push(n);return e}),lt:f(function(e,t,n){for(var r=0>n?n+t:n;--r>=0;)e.push(r);return e}),gt:f(function(e,t,n){for(var r=0>n?n+t:n;t>++r;)e.push(r);return e})}},T.pseudos.nth=T.pseudos.eq;for(C in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})T.pseudos[C]=a(C);for(C in{submit:!0,reset:!0})T.pseudos[C]=c(C);s.prototype=T.filters=T.pseudos,T.setFilters=new s,D=n.compile=function(e,t){var n,r=[],o=[],i=V[e+" "];if(!i){for(t||(t=p(e)),n=t.length;n--;)i=v(t[n]),i[k]?r.push(i):o.push(i);i=V(e,N(o,r))}return i},E.sortStable=k.split("").sort(J).join("")===k,E.detectDuplicates=X,I(),E.sortDetached=i(function(e){return 1&e.compareDocumentPosition(R.createElement("div"))}),i(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||u("type|href|height|width",function(e,n,r){return r?t:e.getAttribute(n,"type"===n.toLowerCase()?1:2)}),E.attributes&&i(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||u("value",function(e,n,r){return r||"input"!==e.nodeName.toLowerCase()?t:e.defaultValue}),i(function(e){return null==e.getAttribute("disabled")})||u(rt,function(e,n,r){var o;return r?t:(o=e.getAttributeNode(n))&&o.specified?o.value:e[n]===!0?n.toLowerCase():null}),"function"==typeof define&&define.noamd?define('cbar_Sizzle',function(){return n}):e.cbar_Sizzle=n})(window);


// widget file
var cbar_curricon = [0, 0, 0, 0];
var action_text = '';
var action_city = '';
var action_country = '';

var cbar_w_shownext = [false, false, false, false];
var cbar_w_showprev = [false, false, false, false];

function cbar_w_init() {
	return;
}

function cbar_replace_global(search, replace, source) {
	var myRegExp = new RegExp(search, 'ig');
	return source.replace(myRegExp, replace);
}

function cbar_data_returned_widget(redraw) {
	for (var i = 0; i < cbar_results.length; i++) {
		if ((cbar_widget_to_draw > 0) && (cbar_widget_to_draw - 1) != i) {
			continue;
		}

		if (
			(cbar_results[i].length == 0) || 
			(cbar_w_anchor.length < i) || 
			(typeof cbar_w_anchor[i] == "undefined") || 
			(cbar_w_anchor[i] == null)
		) {
			continue;
		}

		var cbar_recstep = eval("cbar_rectype" + i);

		if ((cbar_w_scrollbuttons == true) || ((typeof cbar_w_scrollbuttons[i] != 'undefined') && cbar_w_scrollbuttons[i])) {
			cbar_w_shownext[i] = (cbar_w_numshowicons[i] + cbar_curricon[i]) < cbar_results[i].length;
			cbar_w_showprev[i] = cbar_curricon[i] > 0;
		}

		if (typeof cbar_w_numshowicons[i] != 'number') {
			cbar_w_numshowicons[i] = 99;
		}

		var title_index = (typeof cbar_override_titles[i] !== 'undefined') ? cbar_override_titles[i] : cbar_recstep;
		if (typeof rule_title_index[i] !== 'undefined') {
			title_index = rule_title_index[i];
		}
		
		var title = cbar_recstep_titles[title_index];
		if (title === undefined) {
			title = cbar_recstep_titles[5];
			if (title === undefined) {
				console.log('Widget v1: Can not found title for widget #' + i);
				continue;
			}
		}
		cbar_widget_html = cbar_w_template_head[i].replace(/%group_title%/g, decodeURIComponent(title.replace(/\+/g, ' ')));

		var cbar_numicons = eval('cbar_numicons' + (i + 1));

		for (var t = cbar_curricon[i]; (t < cbar_results[i].length) && (t < cbar_numicons) && ((t - cbar_curricon[i]) < cbar_w_numshowicons[i]); t++) {
			if (
				(typeof cbar_w_iconsperline[i] == "number") && 
				(t > 0) && 
				((t % cbar_w_iconsperline[i]) == 0) && 
				(typeof cbar_w_linebreak_template[i] != 'undefined')
			) {
				cbar_widget_html += cbar_w_linebreak_template[i];
			}

			var cbar_short_title;
			try {//#231
				cbar_short_title = decodeURIComponent(cbar_results[i][t][2].replace(/\+/g, ' '));
			} catch (err) {
				cbar_short_title = unescape(cbar_results[i][t][2]).replace(/\+/g, ' ');
			}

			cbar_short_title = cbar_short_title.substring(0, cbar_w_title_len);
			if (cbar_short_title.length == cbar_w_title_len) {
				cbar_short_title += '...';
			}

			// detect safari replace bug and fix price
			xyz = '%str%';
			if (xyz.replace(/%str%/g, '$15') != '$15') {
				cbar_results[i][t][4] = cbar_results[i][t][4].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][16] = cbar_results[i][t][16].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][17] = cbar_results[i][t][17].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][18] = cbar_results[i][t][18].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][23] = cbar_results[i][t][23].replace('$', '&#36;').replace('%24', '&#36;');
				cbar_results[i][t][21] = cbar_results[i][t][21].replace('$', '&#36;').replace('%24', '&#36;');
			}

			var cbar_tmp_xtr1;
			var cbar_tmp_xtr2;
			var cbar_tmp_xtr3;
			var cbar_tmp_xtr4;
			var cbar_tmp_xtxt;
			try { //#231
				cbar_tmp_xtr1 = decodeURIComponent(cbar_results[i][t][16].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtr1 = unescape(cbar_results[i][t][16]);
			}
			try {
				cbar_tmp_xtr2 = decodeURIComponent(cbar_results[i][t][17].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtr2 = unescape(cbar_results[i][t][17]);
			}
			try {
				cbar_tmp_xtr3 = decodeURIComponent(cbar_results[i][t][18].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtr3 = unescape(cbar_results[i][t][18]);
			}
			try {
				cbar_tmp_xtr4 = decodeURIComponent(cbar_results[i][t][23].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtr4 = unescape(cbar_results[i][t][23]);
			}
			try {
				cbar_tmp_xtxt = decodeURIComponent(cbar_results[i][t][21].replace(/\+/g, ' '));
			} catch (err) {
				cbar_tmp_xtxt = unescape(cbar_results[i][t][21]);
			}

			var cbar_clk_js = ' return cbar_click(document.getElementById(\'cbar_div_' + (i + 1) + (t + 1) + '\'))'; // taken from bar. needs check

			if (cbar_recstep == 19) {
				try {
					action_text = eval('ra_action_texts.' + eval('cbar_ra_data_' + cbar_results[i][t][0] + '.activity'));
				} catch (error) {
					action_text = '';
				}
				
				try {
					action_city = eval('cbar_ra_data_' + cbar_results[i][t][0] + '.city');
				} catch (error) {
					action_city = '';
				}
				
				try {
					action_country = eval('cbar_ra_data_' + cbar_results[i][t][0] + '.country');
				} catch (error) {
					action_country = '';
				}
			}
			
			var cbar_recs_live = '';
			var cbar_notifications = JSON.parse(cbar_results[i][t][22]);
			if (cbar_notifications.length > 0) {
				cbar_recs_live = "<div style='" + cbar_LIRE_css1 + "'>";
				for (var key = 0; key < cbar_notifications.length; key++) {
					cbar_recs_live += "<div style='" + cbar_LIRE_css2 + "'>" + cbar_notifications[key] + "</div>";
				}
				cbar_recs_live += "</div>";
			}

			cbar_widget_html += cbar_w_item_template[i].replace(/%picture%/g, decodeURIComponent(cbar_results[i][t][1].replace(/\+/g, ' ')))
				.replace(/%idx%/g, cbar_results[i][t][0])
				.replace(/%rectype%/g, cbar_recstep)
				.replace(/%title%/g, cbar_short_title)
				.replace(/%ra_action%/g, action_text)
				.replace(/%ra_city%/g, action_city)
				.replace(/%ra_country%/g, action_country)
				.replace(/%url%/g, decodeURIComponent(cbar_results[i][t][3].replace(/\+/g, ' ')))
				.replace(/%price%/g, decodeURIComponent(cbar_results[i][t][4].replace(/\+/g, ' ')))
				.replace(/%price_clean%/g, decodeURIComponent(cbar_results[i][t][5].replace(/\+/g, ' ')))
				.replace(/%pid%/g, decodeURIComponent(cbar_results[i][t][6].replace(/\+/g, ' ')))
				.replace(/%clicks%/g, decodeURIComponent(cbar_results[i][t][7].replace(/\+/g, ' ')))
				.replace(/%hoovers%/g, decodeURIComponent(cbar_results[i][t][8].replace(/\+/g, ' ')))
				.replace(/%onclick%/g, cbar_clk_js)
				.replace(/%new%/g, '') //Not in use
				.replace(/%sale%/g, '') //Not in use
				.replace(/%bestseller%/g, '') //Not in use
				.replace(/%pricedrop%/g, '') //Not in use
				.replace(/%flag1%/g, (cbar_results[i][t][14] == '1') ? cbar_fl1_html : '')
				.replace(/%flag2%/g, '') //Not in use
				.replace(/%xtr1%/g, cbar_tmp_xtr1)
				.replace(/%xtr2%/g, cbar_tmp_xtr2)
				.replace(/%xtr3%/g, cbar_tmp_xtr3)
				.replace(/%xtr4%/g, cbar_tmp_xtr4)
				.replace(/%xtxt%/g, cbar_tmp_xtxt)
				.replace(/%live_notifications%/g, cbar_recs_live)
				.replace(/%perc_purchased%/g, decodeURIComponent(cbar_results[i][t][19].replace(/\+/g, ' ')))
				.replace(/%subproducts%/g, decodeURIComponent(cbar_results[i][t][25].replace(/\+/g, ' ')))
				.replace(/%brand%/g, decodeURIComponent(cbar_results[i][t][27].replace(/\+/g, ' ')))
				.replace(/%t%/g, t);
		}

		cbar_widget_html += cbar_w_template_bottom[i];

		cbar_w_prev_html_tmp = '';
		if (typeof cbar_w_prev_html == 'object' && typeof cbar_w_prev_html[i] != 'undefined') {
			cbar_w_prev_html_tmp = cbar_w_prev_html[i];
		}
		if (typeof cbar_w_prev_html == 'string') {
			cbar_w_prev_html_tmp = cbar_w_prev_html;
		}
		cbar_widget_html = cbar_widget_html.replace(/%prevbutton%/g, (cbar_w_showprev[i]) ? cbar_w_prev_html_tmp : "");

		cbar_w_next_html_tmp = '';
		if (typeof cbar_w_next_html == 'object' && typeof cbar_w_next_html[i] != 'undefined') {
			cbar_w_next_html_tmp = cbar_w_next_html[i];
		}
		if (typeof cbar_w_next_html == 'string') {
			cbar_w_next_html_tmp = cbar_w_next_html;
		}
		cbar_widget_html = cbar_widget_html.replace(/%nextbutton%/g, (cbar_w_shownext[i]) ? cbar_w_next_html_tmp : "");

		var cbar_tmp = document.createElement('div');
		cbar_tmp.innerHTML = cbar_widget_html.replace(/%i%/g, i);
		var cbar_new_w = cbar_tmp.firstChild;
		var parent = cbar_w_anchor[i].parentNode;

		if (cbar_w_insert_where[i] == 2) {
			cbar_w_anchor[i].appendChild(cbar_new_w);
		} else if (cbar_w_insert_where[i] == 1) {
			parent.insertBefore(cbar_new_w, cbar_w_anchor[i]);
		} else if (cbar_w_insert_where[i] == 3) {
			parent.replaceChild(cbar_new_w, cbar_w_anchor[i]);
		} else if (cbar_w_insert_where[i] == 0) {
			if (parent.lastchild == cbar_w_anchor[i]) {
				parent.appendChild(cbar_new_w);
			} else {
				parent.insertBefore(cbar_new_w, cbar_w_anchor[i].nextSibling);
			}
		}
	}
	
	if (typeof cbar_after_show == 'function') {
		cbar_after_show('widget');
	}
}

function cbar_del_widgets() {
	for (var i = 0; i < cbar_num_widgets; i++) {
		var cbar_widget = document.getElementById("cbar_widget" + i);
		if (cbar_widget != null) {
			cbar_widget.parentNode.removeChild(cbar_widget);
		}
	}
}

function cbar_w_next(group) {
	cbar_del_widgets();
	cbar_curricon[group] += 1;
	cbar_data_returned_widget(true);
	return false;
}

function cbar_w_prev(group) {
	cbar_del_widgets();
	cbar_curricon[group] -= 1;
	cbar_data_returned_widget(true);
	return false;
}

function switch_subproduct(widget, item, subproduct_index) {
	// check if the data on the wifget item is of a subproduct
	var dom_item = document.getElementById('cbar_w' + widget + '_' + item + '_item_s');
	if (dom_item !== null) {
		// check if the data on the widget item is of a subproduct
		prev_subproduct_index = dom_item.getAttribute('subproduct_index'); // find which subproduct data is in the widget now
		var current_data = prev_subproduct_index ? cbar_subproducts[widget][item][prev_subproduct_index] : cbar_results[widget][item];
		var new_data = cbar_subproducts[widget][item][subproduct_index];
		var html = dom_item.innerHTML;

		// switch img, price, name
		html = cbar_replace_global(decodeURIComponent(current_data[1].replace(/\+/g, ' ')), decodeURIComponent(new_data[1].replace(/\+/g, ' ')), html);
		html = cbar_replace_global(decodeURIComponent(current_data[2].replace(/\+/g, ' ')), decodeURIComponent(new_data[2].replace(/\+/g, ' ')), html);
		html = cbar_replace_global(decodeURIComponent(current_data[3].replace(/\+/g, ' ')), decodeURIComponent(new_data[3].replace(/\+/g, ' ')), html);
		html = cbar_replace_global(decodeURIComponent(current_data[4].replace(/\+/g, ' ')), decodeURIComponent(new_data[4].replace(/\+/g, ' ')), html);
		html = cbar_replace_global(decodeURIComponent(current_data[6].replace(/\+/g, ' ')), decodeURIComponent(new_data[6].replace(/\+/g, ' ')), html);

		// write back
		dom_item.innerHTML = html;
		dom_item.setAttribute('subproduct_index', subproduct_index); // remember which subproduct data is in the widget
	}
}


!function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=48)}([function(t,e,n){"use strict";e.a={DOMAIN:"https://app.barilliance.com",KEY_ID:"_barilliance_id",KEY_GROUP:"_barilliance_group",KEY_GROUP_PARENT:"_barilliance_group_parent",KEY_EXP_192:"_barilliance_exp_192",EVENT_MONITOR_STOP:"cbar-cm-monitor-stop",EVENT_REPORT_STOP:"cbar-cm-report-stop",EVENT_GROUPS_ADDED:"cbar-cm-groups-added",REPORT_ACTIVATION_PARAM:"cbar_analytics_show",SESSION_TOKEN_KEY:"cbar-cm-report-token",IGNORE_CLASS:"cbar-cm-ignore"}},function(t,e,n){"use strict";var r=function(t,e,n){t.setItem(e,JSON.stringify(n))},o=function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=t.getItem(e);return r=null===r?n:JSON.parse(r)},i=function(t,e){t.removeItem(e)},a=function(t){var e=o(localStorage,t);return null!==e&&(0===e.expire||!e.expire<parseInt(Date.now()/1e3))?e:null};e.a={local:{create:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0;return r(localStorage,t,{expire:n>0?parseInt(Date.now()/1e3)+n:n,value:e})},getRaw:a,get:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=a(t);return n=null!==n?n.value:e},remove:function(t){return i(localStorage,t)}},session:{create:function(t,e){return r(sessionStorage,t,e)},get:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;return o(sessionStorage,t,e)},remove:function(t){return i(sessionStorage,t)}}}},function(t,e,n){"use strict";n.d(e,"a",(function(){return r}));var r=n(5).a.register("Click Monitor","#d77dea")},,function(t,e,n){"use strict";var r=n(25),o={};!function(t){t.version="1.2.0";var e=function(){for(var t=0,e=new Array(256),n=0;256!=n;++n)t=1&(t=1&(t=1&(t=1&(t=1&(t=1&(t=1&(t=1&(t=n)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1)?-306674912^t>>>1:t>>>1,e[n]=t;return"undefined"!=typeof Int32Array?new Int32Array(e):e}();t.table=e,t.bstr=function(t,n){for(var r=-1^n,o=t.length-1,i=0;i<o;)r=(r=r>>>8^e[255&(r^t.charCodeAt(i++))])>>>8^e[255&(r^t.charCodeAt(i++))];return i===o&&(r=r>>>8^e[255&(r^t.charCodeAt(i))]),-1^r},t.buf=function(t,n){if(t.length>1e4)return function(t,n){for(var r=-1^n,o=t.length-7,i=0;i<o;)r=(r=(r=(r=(r=(r=(r=(r=r>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])];for(;i<o+7;)r=r>>>8^e[255&(r^t[i++])];return-1^r}(t,n);for(var r=-1^n,o=t.length-3,i=0;i<o;)r=(r=(r=(r=r>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])])>>>8^e[255&(r^t[i++])];for(;i<o+3;)r=r>>>8^e[255&(r^t[i++])];return-1^r},t.str=function(t,n){for(var r,o,i=-1^n,a=0,c=t.length;a<c;)(r=t.charCodeAt(a++))<128?i=i>>>8^e[255&(i^r)]:r<2048?i=(i=i>>>8^e[255&(i^(192|r>>6&31))])>>>8^e[255&(i^(128|63&r))]:r>=55296&&r<57344?(r=64+(1023&r),o=1023&t.charCodeAt(a++),i=(i=(i=(i=i>>>8^e[255&(i^(240|r>>8&7))])>>>8^e[255&(i^(128|r>>2&63))])>>>8^e[255&(i^(128|o>>6&15|(3&r)<<4))])>>>8^e[255&(i^(128|63&o))]):i=(i=(i=i>>>8^e[255&(i^(224|r>>12&15))])>>>8^e[255&(i^(128|r>>6&63))])>>>8^e[255&(i^(128|63&r))];return-1^i}}(o);var i=o,a=n(0),c=n(2);function s(t){return function(t){if(Array.isArray(t))return l(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(!t)return;if("string"==typeof t)return l(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return l(t,e)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function l(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}var u="_barilliance_debug",f=4,p=20,d=2,h=1,m=!1,y={},g={},v="a",b=[],w={},O=null,E=null,_=function(t){var e=Math.abs(i.str(t));return 2147483648&e&&(e^=4294967295,e+=1),e},S=function(t){for(var e=t;null!==e;){if(""!==e.id)return"#"+e.id;e=e.parentNode}return""},x=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:[];if(!t.matches)return!1;var n=[".cbar-wdes-title",".cbar-wdes-wrapper-border","."+a.a.IGNORE_CLASS].concat(s(e));return!!n.some((function(e){return t.matches(e)}))},P=function(t){var e=0,n=0,r=[],o=function(t){var e="string"==typeof t.innerText?t.innerText.trim():"";return e.length>100&&(e=e.substr(0,100)),""===e&&(e="rnd-"+n),e},i=function(t){if("IMG"===t.tagName)return"image:"+t.src;if("A"===t.tagName){var e=t.getAttribute("href");if((null===e||"#"!==e[0])&&""!==(e=t.href)){var n=new URL(e);!function(t){w.urlFilter?w.urlFilter(t):(t.search="",t.hash="")}(n),e=n.href}if(""===e&&(e=S(t)),""!==e)return"link:"+e}if("BUTTON"===t.tagName)return"button:"+o(t);if("INPUT"===t.tagName&&("submit"===t.type||"button"===t.type)){var r=t.value;if(""===r&&(r=S(t)),""===r)return"button:"+o(t)}return"pointer"===window.getComputedStyle(t).cursor?"pointer:"+o(t):""},s=performance.now();!function t(o){var c="";e++;var s=o.tagName;if(o.nodeType===Node.ELEMENT_NODE&&"svg"!==s&&"g"!==s&&"path"!==s&&!o.hasOwnProperty(a.a.KEY_ID)&&!x(o))if(w.hashTweak&&(c=w.hashTweak(o)),""===c&&(c=i(o)),""!==c){n++;var l=function(t){return g[t]||(g[t]=0),g[t]++,g[t]+"-"+t}(c),f=_(l);o[a.a.KEY_ID]=f,o[u]=l,y[f]=o,r.push(o)}else o.childNodes.forEach((function(e){t(e)}))}(t);var l=performance.now()-s;return l>100&&Object(c.a)("Parsed elements: ".concat(e,"; Hash assign to ").concat(n," elements. Performance: ").concat(l,"ms")),r},k=function(t){var e=[],n=[],o={},i=function(t){var e=[];return function t(n,r){0!==r&&n.childNodes.forEach((function(n){n instanceof Element&&(e.push("".concat(r).concat(n.tagName)),t(n,r-1))}))}(t,h),e.length<d?null:"".concat(t.tagName,"- ").concat(e.join(","))},l=function(t){return 0===t.classList.length?null:t.tagName+"."+s(t.classList).join(".")},u=function(t,e,n,i){if(t.length>=f){var s=t[0].tagName,l="".concat(Object(r.select)(n,o)," > ").concat(s),u=_("".concat(l,"~").concat(e));b.push({elements:t,hash:u,selector:l,parentElement:n});var p=b.length;t.forEach((function(t){return t[a.a.KEY_GROUP]=p})),Object(c.a)("Group ".concat(p," keys: ").concat(i.join("; ")," | Selector: ").concat(l," | Hash: ").concat(u))}};w.groupTweaks&&w.groupTweaks.forEach((function(r){var i,a;r.pageType&&r.pageType!==cbar_pagetype||(r.ignoreElements&&(e=[].concat(s(e),s(r.ignoreElements))),r.skipElements&&(n=[].concat(s(n),s(r.skipElements))),r.manualGroups&&(i=r.manualGroups,a=0,i.forEach((function(e){a++,t.querySelectorAll(e.parent).forEach((function(t,n){var r=s(t.querySelectorAll(e.selector));u(r,"c".concat(a,"-").concat(n),t,["Custom-".concat(a,"-").concat(n)])}))}))),r.selectorConfig&&(o=r.selectorConfig))}));var m=performance.now();!function t(r){var o=[],c=[];r.childNodes.forEach((function(t){if(t instanceof Element&&!t.hasOwnProperty(a.a.KEY_GROUP)&&!(x(t,e)||(c.push(t),n.length>0&&x(t,n)))){var r=t.getBoundingClientRect();if(!(r.width<p||0===r.height)){var u=["".concat(t.tagName,"-").concat(Math.floor(r.width),"x").concat(Math.floor(r.height)),i(t),l(t)].filter((function(t){return null!==t}));o.some((function(e){var n=u.some((function(t){return e.keys.includes(t)}));if(n){e.elements.push(t);var r=[].concat(s(e.keys),s(u));e.keys=r.filter((function(t,e){return r.indexOf(t)===e}))}return n}))||o.push({keys:u,elements:[t]})}}}));for(var f=0;o.hasOwnProperty(f);){for(var d=o.length-1;d>f;d--){o[d].keys.some((function(t){return o[f].keys.includes(t)}))&&(o[f].elements=[].concat(s(o[f].elements),s(o[d].elements)),o.splice(d,1))}f++}o.forEach((function(t,e){u(t.elements,e,r,t.keys)})),o=null,c.forEach((function(e){e.hasOwnProperty(a.a.KEY_GROUP)||t(e)}))}(t);var y=performance.now();Object(c.a)("Scan complete within ".concat(y-m,"ms. ").concat(b.length," sets were found"))},A=function(t){var e,n,r=[],o=function(t){var o;switch(n="strategy: ".concat(t,"; "),"il"!==t&&"ll"!==t||(r=r.reverse()),t){case"il":case"if":(o=r.find((function(t){return"img"===t.type||"picture"===t.type})))&&(e=o.hash,n+=o.debug);break;case"ll":case"lf":(o=r.find((function(t){return"a"===t.type})))&&(e=o.hash,n+=o.debug);break;case"a":default:r.forEach((function(t){e+=t.hash,n+=" + "+t.debug}))}},i=[];return b[t].elements.forEach((function(s){if(!s.hasOwnProperty(a.a.KEY_ID)){if(e=0,r=[],n="",function t(e){if(e instanceof Element){if(e.hasOwnProperty(a.a.KEY_ID)){var n=e[a.a.KEY_ID];return r.push({type:e.tagName.toLowerCase(),hash:n,debug:e[u]}),delete e[a.a.KEY_ID],void delete y[n]}e.childNodes.forEach((function(e){return t(e)}))}}(s),o(v),0===e){var l="Unable to use strategy ".concat(v," for group ").concat(t," element");"a"!==v&&(l+=". Falling back to default.",o("a")),Object(c.a)(l)}0===e?delete s[a.a.KEY_GROUP]:(e%=4294967295,s[a.a.KEY_ID]=e,s[u]=n,y[e]=s,i.push(s))}})),i},I=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;if(null===t)t=document.body;else for(var e=t;null!==e;){if(e.hasOwnProperty(a.a.KEY_ID)||x(e))return[];e=e.parentNode}var n=P(t);if(0===n.length)return n;var r=b.length,o=[];k(t);for(var i=n.length,s=r;s<b.length;++s)n=n.concat(A(s)),o.push(b[s].hash);if(i!==n.length){var l=[];n.forEach((function(t){t.hasOwnProperty(a.a.KEY_ID)&&l.push(t)})),n=l}if(null!==O)for(var u in n)if(n.hasOwnProperty(u)){var f=n[u][a.a.KEY_ID];if(f===O){Object(c.a)("Detected highlighted element ".concat(O)),"function"==typeof E&&E(n[u]);break}}if(o.length>0){var p=new CustomEvent(a.a.EVENT_GROUPS_ADDED,{detail:{ids:o}});document.dispatchEvent(p)}return n};e.a={assignHashes:I,getAllElements:function(){return Object.values(y)},getElementByHash:function(t){return void 0===y[t]?null:y[t]},getGroups:function(){return b},getGroupIdByHash:function(t){var e=b.findIndex((function(e){return e.hash===t}));return-1===e?null:e+1},highlight:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;Object(c.a)("Enable element highlighting: ".concat(t)),O=t,E=e},init:function(){y={},g={},b=[],O=null,E=null,w=cbarApp.clickMonitor.customConfig||{},v=cbarApp.clickMonitor.groupingStrategy,I(),m=!0},isInitiated:function(){return m}}},function(t,e,n){"use strict";var r=n(1),o=null;e.a={register:function(t,e){return null===o&&(o=0!==r.a.local.get("cbar-debug",0)),o?function(n){console.log("%c".concat(t,":%c ").concat(n),"background-color: ".concat(e,";"),"");for(var r=arguments.length,o=new Array(r>1?r-1:0),i=1;i<r;i++)o[i-1]=arguments[i];o.forEach((function(t){return console.log(t)}))}:function(){return!0}}}},,function(t,e,n){"use strict";var r=n(11),o=n(8),i=n(1),a={},c={},s=null,l=!1,u=function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];(l||t)&&null===s&&(s=setTimeout((function(){var t=p();t.clicked=c.clicked,t.viewed=c.viewed,t.exp192=c.exp192,t.groupsCg=c.groupsCg,t.groupsOpt=c.groupsOpt,r.a.collect(t,"fastReport"),s=null,c.clicked=[],c.viewed={},c.groupsOpt={},f()}),2e3))},f=function(){i.a.session.create("cbar-last-clicks-v3",c)},p=function(){return{pageType:cbar_pagetype,url:document.location.href,viewed:{},clicked:[],groups:{},groupsCg:{},groupsViewed:{},groupsOpt:{},exp192:{viewed:{},clicked:{}}}};e.a={addClick:function(t,e,n,r){c.clicked.push({element:t,creative:e,groupId:n}),r&&(c.exp192.clicked[t]=n),f(),u(!0)},addGroup:function(t,e){c.groups.hasOwnProperty(t)||(c.groups[t]={selector:e,viewTime:o.a.getUnixTime()})},addViewed:function(t,e,n){c.viewed[t]=e,n&&(c.exp192.viewed[t]=e),null===e||a.hasOwnProperty(e)||(c.groupsViewed[e]=null,a[e]=!0),f(),u()},getStoredData:function(){return i.a.session.get("cbar-last-clicks-v3",null)},init:function(){c=p(),l=cbarApp.clickMonitor.fastReport,f()},removeData:function(){i.a.session.remove("cbar-last-clicks-v3")},reportOptimisation:function(t,e){c.groupsOpt[t]=e},setGroupCg:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,n=arguments.length>2&&void 0!==arguments[2]&&arguments[2];c.groupsCg.hasOwnProperty(t)&&!n||(c.groupsCg[t]=e,f())}}},function(t,e,n){"use strict";var r=n(0);e.a={checkRequirements:function(){return"IntersectionObserver"in window&&"isIntersecting"in window.IntersectionObserverEntry.prototype},getUnixTime:function(){return Math.floor(Date.now()/1e3)},stopMonitoring:function(){var t=new CustomEvent(r.a.EVENT_MONITOR_STOP);document.dispatchEvent(t);!function t(e){e.nodeType===Node.ELEMENT_NODE&&(e.hasOwnProperty(r.a.KEY_ID)&&delete e[r.a.KEY_ID],e.hasOwnProperty(r.a.KEY_GROUP)&&delete e[r.a.KEY_GROUP],e.childNodes.forEach((function(e){return t(e)})))}(document.body)},stopReporting:function(){var t=new CustomEvent(r.a.EVENT_REPORT_STOP);document.dispatchEvent(t)}}},,function(t,e,n){"use strict";function r(){return(r=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t}).apply(this,arguments)}function o(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function i(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var a=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),i(this,"pos3",0),i(this,"pos4",0),i(this,"config",null),this.config=r({movable:null,mover:null,exceptionClass:"",onDragStop:function(){return!0},onDragMove:function(){return!0}},e),this._dragMouseDown=this._dragMouseDown.bind(this),this._closeDragElement=this._closeDragElement.bind(this),this._elementDrag=this._elementDrag.bind(this),null!==this.config.movable&&null!==this.config.mover&&(this.config.mover.addEventListener("mousedown",this._dragMouseDown),this.config.mover.addEventListener("touchstart",this._dragMouseDown))}var e,n,a;return e=t,(n=[{key:"_dragMouseDown",value:function(t){""!==this.config.exceptionClass&&t.target.classList.contains(this.config.exceptionClass)||(t.preventDefault(),this.pos3=t.clientX||t.changedTouches[0].clientX,this.pos4=t.clientY||t.changedTouches[0].clientY,document.addEventListener("mouseup",this._closeDragElement),document.addEventListener("mousemove",this._elementDrag),document.addEventListener("touchend",this._closeDragElement),document.addEventListener("touchmove",this._elementDrag))}},{key:"_elementDrag",value:function(t){var e=t.clientX||t.changedTouches[0].clientX,n=t.clientY||t.changedTouches[0].clientY,r=this.pos3-e,o=this.pos4-n;this.pos3=e,this.pos4=n,this.config.movable.style.top=Math.max(this.config.movable.offsetTop-o,0)+"px",this.config.movable.style.left=Math.max(this.config.movable.offsetLeft-r,0)+"px",this.config.onDragMove()}},{key:"_closeDragElement",value:function(t){document.removeEventListener("mouseup",this._closeDragElement),document.removeEventListener("mousemove",this._elementDrag),document.removeEventListener("touchend",this._closeDragElement),document.removeEventListener("touchmove",this._elementDrag),this.config.onDragStop()}}])&&o(e.prototype,n),a&&o(e,a),t}();e.a=a},function(t,e,n){"use strict";var r=n(8),o=n(2);function i(){return(i=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t}).apply(this,arguments)}var a="https://www.barilliance.net/api/click-monitor/",c=function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=new XMLHttpRequest,c=function(t){t.error&&Object(o.a)("API error: "+t.error),"function"==typeof n&&n(t)};r.open("POST","".concat(a).concat(t,"/")),r.onreadystatechange=function(){if(r.readyState===XMLHttpRequest.DONE)if(200===r.status){var t=JSON.parse(r.responseText);c(t)}else c({error:"API request failed"})},i(e,{version:18,siteId:cbar_sid}),r.send(JSON.stringify(e))};e.a={collect:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n="";"P"===cbar_pagetype&&(n=cbar_pid),"C"===cbar_pagetype&&(n=cbar_cid),c("collect",{payload:t,current:{url:document.location.href,pageType:cbar_pagetype,objectId:n},userId:cbar_uid,collectMode:e,timeSync:r.a.getUnixTime()})},makeApiCall:c,reportOptimisation:function(t){t.url=document.location.href,t.userId=cbar_uid,c("report-optimisation",t)}}},,,function(t,e,n){"use strict";var r=n(4),o=n(11),i=n(7),a=n(2),c=n(0),s=n(1),l=n(19);function u(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){var n=null==t?null:"undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(null==n)return;var r,o,i=[],a=!0,c=!1;try{for(n=n.call(t);!(a=(r=n.next()).done)&&(i.push(r.value),!e||i.length!==e);a=!0);}catch(t){c=!0,o=t}finally{try{a||null==n.return||n.return()}finally{if(c)throw o}}return i}(t,e)||function(t,e){if(!t)return;if("string"==typeof t)return f(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return f(t,e)}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function f(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}var p="Optimisator:",d=0,h=null,m=null,y=function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},r=[],o=0,i=0;return t.parentElement.childNodes.forEach((function(t,a){if(t.hasOwnProperty(c.a.KEY_ID)){var s=t[c.a.KEY_ID];if(!n.hasOwnProperty(s)){var l=e.hasOwnProperty(s)?e[s].clicks:0,u=e.hasOwnProperty(s)?e[s].views:0,f=u>0?l/u:0;0!==u&&(i+=l,r.push({id:s,realPosition:a,position:o,ctr:f,clicks:l,views:u,element:t}),o++)}}})),{state:r,oldClicks:i}},g=function(t,e){var n=Math.min(t.ctr,e.ctr),r=Math.max(t.ctr,e.ctr),o="";if(0===n)return[!1,o="minimal CTR is 0"];var i=(r-n)/n,a=l.a.getMinimalSampleSize(n,i,.8),c=t.views>=a&&e.views>=a;return c||(o="expected ".concat(a," sample size, but got ").concat(t.views," & ").concat(e.views)),[c,o]},v=function(t,e){var n="",r=0,o=function(t){var e=t.length;return Math.min(10,parseInt(3+e/10),parseInt(e/2))}(e),i=null===t;n+=(i?"Simulating optimization of":"Optimizing")+" ".concat(o," pairs, found ").concat(e.length," elements in the group\n");var s=function(t){var e={},n=t.length,r=0,o=0,i=0,a=0;return t.forEach((function(t){var e=u(t,2),n=e[0],c=e[1];r+=n,o+=c,i+=n*c,a+=n*n,c*c})),e.slope=(n*i-r*o)/(n*a-r*r),e.intercept=(o-e.slope*r)/n,e}(e.map((function(t){return t.views})).sort((function(t,e){return e-t})).map((function(t,e){return[e,t]})));e.sort((function(t,e){return e.ctr-t.ctr})),e.forEach((function(t,e){t.optimalPosition=e,t.offsetFromOptimal=t.position-t.optimalPosition}));var l=[],f=[];e.sort((function(t,e){return e.offsetFromOptimal-t.offsetFromOptimal}));for(var d=0,h=0,m=e.length-1;h<o&&d<m-d;){var y=e[d],v=e[m-d],b=u(g(y,v),2),w=b[0],O=b[1];w?(l.push(y),l.push(v),h++):n+="- Elements ".concat(y.id," and ").concat(v.id," not swapped (").concat(O,")\n"),d++}l.forEach((function(t){return f.push(t.realPosition)}));var E={},_=0;return l.sort((function(t,e){return e.ctr-t.ctr})),f.sort((function(t,e){return t-e})),f.forEach((function(o){var a=l.shift(),u=e.find((function(t){return t.realPosition===o})),f=0;if(u.position!==a.position){if(a.element[c.a.KEY_EXP_192]=!0,!i){var p=t.childNodes.hasOwnProperty(o)?t.childNodes[o]:null,d=a.element.nextSibling;p!==d&&(t.insertBefore(a.element,p),t.insertBefore(p,d)),_++}var h=parseInt((u.position-1)*s.slope+s.intercept);f=parseInt(a.ctr*h)-a.clicks}var m,y=f>0?"+":"";n+="- Element ".concat(a.id," (CTR: ").concat((m=100*a.ctr,parseInt(100*m)/100),") moved to slot ")+"".concat(u.position," from slot ").concat(a.position," (clicks change ").concat(y).concat(f,")\n"),E[a.id]=[a.position,u.position],r+=f})),n+="Predicted clicks change: ".concat(r),Object(a.a)("".concat(p," ").concat(n)),{newClicks:r,moveCount:o,movementsLog:E,isFailedOptimisation:!i&&0===_,realChanges:_}},b=function(t,e){var n="".concat(t,"-").concat(e[t].cg);return!e[t].isActive||(null===m&&(m=s.a.local.get("cbar-cm-groups-cg-v3",{})),m.hasOwnProperty(cbar_pagetype)&&m[cbar_pagetype].hasOwnProperty(n)||function(){m.hasOwnProperty(cbar_pagetype)||(m[cbar_pagetype]={});var r=Math.round(100*Math.random());m[cbar_pagetype][n]=r>=e[t].cg,s.a.local.create("cbar-cm-groups-cg-v3",m)}(),!!m[cbar_pagetype][n]&&(i.a.setGroupCg(t),!0))},w=function t(e){if(3===e.v)if(d++,r.a.isInitiated()){var n=function(){var t=[],n=r.a.getGroups();Object.keys(e.data).forEach((function(o){var c=r.a.getGroupIdByHash(parseInt(o)),s=!1;if(null!==c){b(o,e.data)?Object(a.a)("".concat(p," Group ").concat(o)):(Object(a.a)("".concat(p," Skip optimisation for group ").concat(o," - control group")),s=!0);var l=n[c-1],u=e.data[o].hasOwnProperty("isSimulation"),f=e.pins.hasOwnProperty(o)?e.pins[o]:{},d=y(l,e.data[o].elements,f),h=d.state,m=d.oldClicks,g=!e.data[o].isActive||u||s?null:l.parentElement,w=v(g,h),O=w.newClicks,E=w.moveCount,_=w.isFailedOptimisation,S=w.realChanges,x=0;h.forEach((function(t){return x+=t.views})),O>0&&!e.data[o].isActive&&t.push({groupHash:o,newClicks:O,oldClicks:m,moveCount:E,totalViews:x}),u||(_&&i.a.setGroupCg(o,2,!0),null!==g&&S>0&&i.a.reportOptimisation(o,S)),delete e.data[o]}})),t.length>0&&o.a.reportOptimisation({report:t})};n(),document.addEventListener(c.a.EVENT_GROUPS_ADDED,(function(t){t.detail.ids.some((function(t){return e.data.hasOwnProperty(t)}))&&n()}))}else d>10?Object(a.a)("".concat(p," Hasher not initiated")):setTimeout((function(){return t(e)}),300);else Object(a.a)("".concat(p," Wrong protocol version, expected ").concat(3,", but received ").concat(e.v))};e.a={predictOptimisation:w,previewOptimisation:function(t,e){var n=r.a.getGroups(),o=r.a.getGroupIdByHash(t);if(!n.hasOwnProperty(o-1))return Object(a.a)("".concat(p," Group ").concat(t," not found")),{};var i=n[o-1],c=e.hasOwnProperty(i.hash)?e[i.hash]:{},s=y(i,h.elements,c).state;return v(i.parentElement,s).movementsLog},setData:function(t){return h=t},simulateOptimisation:function(t){var e=document.location.pathname,n={v:3,pins:{},data:{}};t.filter((function(t){return t.path===e})).forEach((function(t){n.data[t.groupId]={isActive:!0,cg:t.cg,elements:{},isSimulation:!0}})),Object(a.a)("".concat(p," RUN SIMULATION!")),w(n)}}},,function(t,e,n){"use strict";function r(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function o(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var i=function(){function t(e,n){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),o(this,"callback",null),o(this,"delay",0),o(this,"timer",null),this.callback=e,this.delay=n}var e,n,i;return e=t,(n=[{key:"setCallback",value:function(t){this.callback=t}},{key:"setDelay",value:function(t){this.delay=t}},{key:"call",value:function(){for(var t=this,e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];this._clearTimer(),this.timer=setTimeout((function(){t.callback.apply(t,n),t._clearTimer()}),this.delay)}},{key:"_clearTimer",value:function(){null!==this.timer&&(clearTimeout(this.timer),this.timer=null)}}])&&r(e.prototype,n),i&&r(e,i),t}();e.a=i},function(t,e){function n(t){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var r;r=function(){return this}();try{r=r||new Function("return this")()}catch(t){"object"===("undefined"==typeof window?"undefined":n(window))&&(r=window)}t.exports=r},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.convertNodeList=function(t){for(var e=t.length,n=new Array(e),r=0;r<e;r++)n[r]=t[r];return n},e.escapeValue=function(t){return t&&t.replace(/['"`\\/:\?&!#$%^()[\]{|}*+;,.<=>@~]/g,"\\$&").replace(/\n/g,"A")}},function(t,e,n){"use strict";var r=function(t){var e,n,r=-.00778489400243029,o=-.322396458041136,i=-2.40075827716184,a=-2.54973253934373,c=4.37466414146497,s=2.93816398269878,l=.00778469570904146,u=.32246712907004,f=2.445134137143,p=3.75440866190742;if(t<0||t>1)throw new Error("Argument out of range");return t<.02425?(((((r*(e=Math.sqrt(-2*Math.log(t)))+o)*e+i)*e+a)*e+c)*e+s)/((((l*e+u)*e+f)*e+p)*e+1):t<=.97575?(((((-39.6968302866538*(n=(e=t-.5)*e)+220.946098424521)*n-275.928510446969)*n+138.357751867269)*n-30.6647980661472)*n+2.50662827745924)*e/(((((-54.4760987982241*n+161.585836858041)*n-155.698979859887)*n+66.8013118877197)*n-13.2806815528857)*n+1):-(((((r*(e=Math.sqrt(-2*Math.log(1-t)))+o)*e+i)*e+a)*e+c)*e+s)/((((l*e+u)*e+f)*e+p)*e+1)};e.a={getMinimalSampleSize:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:.95,o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:.84,i=t+e*t;return Math.round(Math.pow(r(n)+r(o),2)*(t*(1-t)+i*(1-i))/Math.pow(t-i,2))},getStatisticalConfidencePercent:function(t){if(t.control.sessions*t.control.converted*t.experiment.sessions*t.experiment.converted==0)return 0;var e,n,r,o,i,a=(e=[t.control.sessions,t.control.converted],n=[t.experiment.sessions,t.experiment.converted],o=(r=function(t){return t[1]/t[0]})(n)-r(e),0===(i=r(n)*(1-r(n))/n[0]+r(e)*(1-r(e))/e[0])?0:o/Math.sqrt(i));return Math.ceil(100*function(t){var e,n=.31938153,r=-.356563782,o=1.781477937,i=-1.821255978,a=1.330274429,c=.2316419,s=.39894228;return t>=0?(e=1/(1+c*t),1-s*Math.exp(-t*t/2)*e*(e*(e*(e*(e*a+i)+o)+r)+n)):(e=1/(1-c*t),s*Math.exp(-t*t/2)*e*(e*(e*(e*(e*a+i)+o)+r)+n))}(Math.abs(a)))}}},,function(t,e,n){"use strict";function r(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}var o=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t)}var e,n,o;return e=t,(n=[{key:"setCss",value:function(){}},{key:"inject",value:function(){}},{key:"_getResetStyles",value:function(){return["line-height: initial;","box-sizing: border-box;","position: absolute;","text-align: center;"]}},{key:"_getFontString",value:function(t){return t.split(",").map((function(t){return-1!==(t=t.trim()).indexOf?'"'.concat(t,'"'):t})).join(", ")}},{key:"_getClassName",value:function(t){return"cbar-badge-"+t}},{key:"_setGeneralStyle",value:function(t,e){switch(e){case"bold":t.push("font-weight: ".concat(e,";"));break;case"italic":t.push("font-style: ".concat(e,";"));break;case"line-through":case"underline":t.push("text-decoration: ".concat(e,";"));break;case"lowercase":case"uppercase":t.push("text-transform: ".concat(e,";"))}}},{key:"_setGeneralPosition",value:function(t,e){switch(e.position){case"nw":t.push("top: ".concat(e.offsetVertical,"px;")),t.push("left: ".concat(e.offsetHorizontal,"px;"));break;case"ne":t.push("top: ".concat(e.offsetVertical,"px;")),t.push("right: ".concat(e.offsetHorizontal,"px;"));break;case"sw":t.push("bottom: ".concat(e.offsetVertical,"px;")),t.push("left: ".concat(e.offsetHorizontal,"px;"));break;case"se":t.push("bottom: ".concat(e.offsetVertical,"px;")),t.push("right: ".concat(e.offsetHorizontal,"px;"))}}}])&&r(e.prototype,n),o&&r(e,o),t}();function i(t){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function a(t){return function(t){if(Array.isArray(t))return c(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(!t)return;if("string"==typeof t)return c(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return c(t,e)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function c(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function s(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function l(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function u(t,e){return(u=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function f(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=d(t);if(e){var o=d(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return p(this,n)}}function p(t,e){if(e&&("object"===i(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}function d(t){return(d=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}var h=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&u(t,e)}(i,t);var e,n,r,o=f(i);function i(){return s(this,i),o.apply(this,arguments)}return e=i,(n=[{key:"setCss",value:function(t,e,n){var r=[].concat(a(this._getResetStyles()),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"color: ".concat(n.color,";"),"background-color: ".concat(n.background,";"),"border-radius: ".concat(n.borderRadius,"px;"),"z-index: ".concat(n.zIndex,";")]);""!==n.font&&r.push("font-family: ".concat(this._getFontString(n.font),";")),""!==n.size&&(r.push("font-size: ".concat(n.size,"px;")),r.push("line-height: ".concat(n.size,"px;"))),console.log(n),"0"===n.shadowHorizontal&&"0"===n.shadowVertical&&"0"===n.shadowBlur||r.push("box-shadow: ".concat(n.shadowHorizontal,"px ").concat(n.shadowVertical,"px ").concat(n.shadowBlur,"px ").concat(n.shadowColor,";")),this._setGeneralStyle(r,n.style),this._setGeneralPosition(r,n),e.insertRule(".".concat(this._getClassName(t)," { ").concat(r.join(" ")," } "),e.cssRules.length)}},{key:"inject",value:function(t,e,n){var r=document.createElement("span");r.classList.add(this._getClassName(t)),r.innerHTML=e,n.style.position="relative",n.style.overflow="visible",n.insertAdjacentElement("beforeend",r)}}])&&l(e.prototype,n),r&&l(e,r),i}(o);function m(t){return(m="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function y(t){return function(t){if(Array.isArray(t))return g(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(!t)return;if("string"==typeof t)return g(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return g(t,e)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function g(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function v(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function b(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function w(t,e){return(w=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function O(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=_(t);if(e){var o=_(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return E(this,n)}}function E(t,e){if(e&&("object"===m(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}function _(t){return(_=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}var S=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&w(t,e)}(i,t);var e,n,r,o=O(i);function i(){return v(this,i),o.apply(this,arguments)}return e=i,(n=[{key:"setCss",value:function(t,e,n){var r=this,o=function(e,o){var i=["color: "+n["line".concat(o,"color")]+";"];r._setGeneralStyle(i,n["line".concat(o,"style")]),""!==n["line".concat(o,"font")]&&i.push("font-family: "+r._getFontString(n["line".concat(o,"font")])+";"),""!==n["line".concat(o,"size")]&&(i.push("font-size: "+n["line".concat(o,"size")]+"px;"),i.push("line-height: "+n["line".concat(o,"size")]+"px;")),e.insertRule(".".concat(r._getClassName(t)," .line-").concat(o," { ").concat(i.join(" ")," } "),e.cssRules.length)},i=[].concat(y(this._getResetStyles()),["background-color: ".concat(n.background,";"),"border-radius: 50%;","z-index: ".concat(n.zIndex,";"),"border-width: ".concat(n.borderSize,"px;"),"border-style: solid;","border-color: ".concat(n.borderColor,";"),"width: ".concat(n.size,"px;"),"height: ".concat(n.size,"px;"),"display: flex;","justify-content: center;","align-items: center;","overflow: hidden;","flex-direction: column;","line-height: 1em;"]);this._setGeneralPosition(i,n),e.insertRule(".".concat(this._getClassName(t)," { ").concat(i.join(" ")," } "),e.cssRules.length),o(e,1),o(e,2),o(e,3)}},{key:"inject",value:function(t,e,n){var r=document.createElement("span");r.classList.add(this._getClassName(t));var o=1;e.split("\n").forEach((function(t){if(!(o>3||""===t.trim())){var e=document.createElement("span");e.classList.add("line-".concat(o)),e.innerHTML=t,r.insertAdjacentElement("beforeend",e),o++}})),n.style.position="relative",n.style.overflow="visible",n.insertAdjacentElement("beforeend",r)}}])&&b(e.prototype,n),r&&b(e,r),i}(o);function x(t){return(x="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function P(t){return function(t){if(Array.isArray(t))return k(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(!t)return;if("string"==typeof t)return k(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return k(t,e)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function k(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function A(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function I(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function j(t,e){return(j=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function C(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=R(t);if(e){var o=R(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return T(this,n)}}function T(t,e){if(e&&("object"===x(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return M(t)}function M(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function R(t){return(R=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function N(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var D=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&j(t,e)}(i,t);var e,n,r,o=C(i);function i(){var t;A(this,i);for(var e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];return N(M(t=o.call.apply(o,[this].concat(n))),"lastStyleshit",null),t}return e=i,(n=[{key:"setCss",value:function(t,e,n){var r=this._getClassName(t),o=[].concat(P(this._getResetStyles()),["padding: ".concat(n.paddingVertical,"px 0;"),"color: ".concat(n.color,";"),"background-color: ".concat(n.background,";"),"z-index: ".concat(n.zIndex,";"),"width: ".concat(n.width,"px;"),"text-align: center;"]),i=1==n.fillCorner;""!==n.font&&o.push("font-family: ".concat(this._getFontString(n.font),";")),""!==n.size&&(o.push("font-size: ".concat(n.size,"px;")),o.push("line-height: ".concat(n.size,"px;"))),i&&o.push("height: ".concat(n.width,"px;")),this._setGeneralStyle(o,n.style),this.lastStyleshit=e,e.insertRule(".".concat(r," { ").concat(o.join(" ")," } "),e.cssRules.length),e.insertRule(".".concat(r," > div { width: 100%; height: 100%; position: relative; } "),e.cssRules.length),!i||"nw"!==n.position&&"ne"!==n.position||e.insertRule(".".concat(r," > div > span { \n\t\t\t\tposition: absolute; \n\t\t\t\tbottom: 0; \n\t\t\t\twidth: 100%;\n\t\t\t\tdisplay: block;\n\t\t\t} "),e.cssRules.length)}},{key:"inject",value:function(t,e,n,r){var o=document.createElement("span");o.innerHTML=e;var i=document.createElement("div");i.insertAdjacentElement("beforeend",o);var a=document.createElement("span");a.classList.add(this._getClassName(t)),a.insertAdjacentElement("beforeend",i),n.style.position="relative",n.style.overflow="hidden",n.insertAdjacentElement("beforeend",a),this._lateRotation(t,r,a)}},{key:"_lateRotation",value:function(t,e,n){var r=n.getBoundingClientRect(),o=Math.sin(Math.PI/4)*(r.width-r.height)/2,i=Math.floor(o-r.width/2),a=Math.floor(o-r.height/2),c=[];switch(e.position){case"nw":c.push("top: ".concat(a,"px;")),c.push("left: ".concat(i,"px;")),c.push("transform: rotate(-45deg);");break;case"ne":c.push("top: ".concat(a,"px;")),c.push("right: ".concat(i,"px;")),c.push("transform: rotate(45deg);");break;case"sw":c.push("bottom: ".concat(a,"px;")),c.push("left: ".concat(i,"px;")),c.push("transform: rotate(45deg);");break;case"se":c.push("bottom: ".concat(a,"px;")),c.push("right: ".concat(i,"px;")),c.push("transform: rotate(-45deg);")}this.lastStyleshit.insertRule(".".concat(this._getClassName(t)," { ").concat(c.join(" ")," } "),this.lastStyleshit.cssRules.length)}}])&&I(e.prototype,n),r&&I(e,r),i}(o);function L(t){return(L="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function H(t){return function(t){if(Array.isArray(t))return q(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(!t)return;if("string"==typeof t)return q(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return q(t,e)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function q(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function z(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function B(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function V(t,e){return(V=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function G(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=U(t);if(e){var o=U(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return Y(this,n)}}function Y(t,e){if(e&&("object"===L(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}function U(t){return(U=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}var K=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&V(t,e)}(i,t);var e,n,r,o=G(i);function i(){return z(this,i),o.apply(this,arguments)}return e=i,(n=[{key:"setCss",value:function(t,e,n){var r=[].concat(H(this._getResetStyles()),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"z-index: ".concat(n.zIndex,";")]);""!==n.width&&r.push("width: ".concat(n.width,"px;")),""!==n.height&&r.push("height: ".concat(n.height,"px;")),this._setGeneralPosition(r,n),e.insertRule(".".concat(this._getClassName(t)," { ").concat(r.join(" ")," } "),e.cssRules.length)}},{key:"inject",value:function(t,e,n,r){if(""!==r.url.trim()){var o=document.createElement("img");o.classList.add(this._getClassName(t)),o.src=r.url,n.style.position="relative",n.style.overflow="visible",n.insertAdjacentElement("beforeend",o)}}}])&&B(e.prototype,n),r&&B(e,r),i}(o);function F(t){return(F="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function W(t){return function(t){if(Array.isArray(t))return X(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(!t)return;if("string"==typeof t)return X(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return X(t,e)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function X(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function J(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function $(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function Z(t,e){return(Z=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function Q(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=nt(t);if(e){var o=nt(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return tt(this,n)}}function tt(t,e){if(e&&("object"===F(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return et(t)}function et(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function nt(t){return(nt=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function rt(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var ot=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&Z(t,e)}(i,t);var e,n,r,o=Q(i);function i(){var t;J(this,i);for(var e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];return rt(et(t=o.call.apply(o,[this].concat(n))),"lastStyleshit",null),t}return e=i,(n=[{key:"setCss",value:function(t,e,n){var r=[].concat(W(this._getResetStyles()),["padding: ".concat(n.paddingVertical,"px ").concat(n.paddingHorizontal,"px;"),"color: ".concat(n.color,";"),"background-color: ".concat(n.background,";"),"z-index: ".concat(n.zIndex,";"),"letter-spacing: ".concat(n.letterSpacing,"px;")]);""!==n.font&&r.push("font-family: ".concat(this._getFontString(n.font),";")),""!==n.size&&(r.push("font-size: ".concat(n.size,"px;")),r.push("line-height: ".concat(n.size,"px;"))),"ver"===n.align&&(r.push("writing-mode: vertical-lr;"),r.push("text-orientation: upright;")),this._setGeneralStyle(r,n.style),this._setGeneralPosition(r,n),this.lastStyleshit=e,e.insertRule(".".concat(this._getClassName(t)," { ").concat(r.join(" ")," } "),e.cssRules.length)}},{key:"_setCapCss",value:function(t,e,n){var r=["content: '';","display: block;","position: absolute;","z-index: -1;"],o=n.getBoundingClientRect(),i=("ver"===e.align?o.width:o.height)/2,a=function(t,e,n){var r=i,o=2==e.ribonType?e.background:"transparent",a=2==e.ribonType?"transparent":e.background,c=n;1==e.ribonType&&(c={left:"right",right:"left",top:"bottom",bottom:"top"}[n],r*=2),t.push("border: ".concat(i,"px solid ").concat(o,";")),t.push("border-".concat(c,"-color: ").concat(a,";")),t.push("".concat(n,": -").concat(r,"px;"))};"ver"===e.align?(r.push("left: 0;"),"nw"===e.position||"ne"===e.position?a(r,e,"bottom"):a(r,e,"top")):(r.push("top: 0;"),"nw"===e.position||"sw"===e.position?a(r,e,"right"):a(r,e,"left")),this.lastStyleshit.insertRule(".".concat(this._getClassName(t),":after { ").concat(r.join(" ")," } "),this.lastStyleshit.cssRules.length)}},{key:"inject",value:function(t,e,n,r){var o=document.createElement("span");o.classList.add(this._getClassName(t)),o.innerHTML=e,n.style.position="relative",n.style.overflow="visible",n.insertAdjacentElement("beforeend",o),this._setCapCss(t,r,o)}}])&&$(e.prototype,n),r&&$(e,r),i}(o);function it(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function at(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var ct=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),at(this,"ruleId",null),at(this,"renderers",null),at(this,"styleSheet",null),at(this,"styleNumber",0),this.ruleId=e,this.renderers={basic:new h,circle:new S,corner:new D,image:new K,ribon:new ot}}var e,n,r;return e=t,(n=[{key:"inject",value:function(t,e,n){if(!this.renderers.hasOwnProperty(n.type))throw new Error("Wrong badge type");var r="".concat(this.ruleId,"-").concat(this.styleNumber);null===this.styleSheet&&(this.styleSheet=cbar_create_stylesheet("cbar-badge-style-"+this.ruleId)),this.renderers[n.type].setCss(r,this.styleSheet,n),this.styleNumber++,this.renderers[n.type].inject(r,e,t,n)}}])&&it(e.prototype,n),r&&it(e,r),t}();e.a=ct},function(t,e,n){"use strict";(function(n){function r(t){return(r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}Object.defineProperty(e,"__esModule",{value:!0});var o="function"==typeof Symbol&&"symbol"===r(Symbol.iterator)?function(t){return r(t)}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":r(t)},i=function(t,e){if(Array.isArray(t))return t;if(Symbol.iterator in Object(t))return function(t,e){var n=[],r=!0,o=!1,i=void 0;try{for(var a,c=t[Symbol.iterator]();!(r=(a=c.next()).done)&&(n.push(a.value),!e||n.length!==e);r=!0);}catch(t){o=!0,i=t}finally{try{!r&&c.return&&c.return()}finally{if(o)throw i}}return n}(t,e);throw new TypeError("Invalid attempt to destructure non-iterable instance")};function a(t,e){t.forEach((function(t){var n=!0;e(t,(function(){return n=!1})),t.childTags&&n&&a(t.childTags,e)}))}function c(t,e,n){for(;t.parent;){if(n(t=t.parent))return t;if(t===e)break}return null}e.default=function(t,e){if(n.document)return!1;n.document=e.context||function(){for(var e=t;e.parent;)e=e.parent;return e}();var r=Object.getPrototypeOf(n.document);Object.getOwnPropertyDescriptor(r,"childTags")||Object.defineProperty(r,"childTags",{enumerable:!0,get:function(){return this.children.filter((function(t){return"tag"===t.type||"script"===t.type||"style"===t.type}))}});Object.getOwnPropertyDescriptor(r,"attributes")||Object.defineProperty(r,"attributes",{enumerable:!0,get:function(){var t=this.attribs,e=Object.keys(t),n=e.reduce((function(e,n,r){return e[r]={name:n,value:t[n]},e}),{});return Object.defineProperty(n,"length",{enumerable:!1,configurable:!1,value:e.length}),n}});r.getAttribute||(r.getAttribute=function(t){return this.attribs[t]||null});r.getElementsByTagName||(r.getElementsByTagName=function(t){var e=[];return a(this.childTags,(function(n){n.name!==t&&"*"!==t||e.push(n)})),e});r.getElementsByClassName||(r.getElementsByClassName=function(t){var e=t.trim().replace(/\s+/g," ").split(" "),n=[];return a([this],(function(t){var r=t.attribs.class;r&&e.every((function(t){return r.indexOf(t)>-1}))&&n.push(t)})),n});r.querySelectorAll||(r.querySelectorAll=function(t){var e=this,n=function(t){return t.split(" ").reverse().map((function(t,e){var n=0===e,r=t.split(":"),s=i(r,2),l=s[0],u=s[1],f=null,p=null;if(function(){switch(!0){case/>/.test(l):p=function(t){return function(e){return e(t.parent)&&t.parent}};break;case/^\./.test(l):var t=l.substr(1).split(".");f=function(e){var n=e.attribs.class;return n&&t.every((function(t){return n.indexOf(t)>-1}))},p=function(e,r){return n?e.getElementsByClassName(t.join(" ")):"function"==typeof e?e(f):c(e,r,f)};break;case/^\[/.test(l):var e=l.replace(/\[|\]|"/g,"").split("="),r=i(e,2),s=r[0],u=r[1];f=function(t){return!(!(Object.keys(t.attribs).indexOf(s)>-1)||u&&t.attribs[s]!==u)},p=function(t,e){if(n){var r=(i=[],a([t],(function(t){f(t)&&i.push(t)})),{v:i});if("object"===(void 0===r?"undefined":o(r)))return r.v}var i;return"function"==typeof t?t(f):c(t,e,f)};break;case/^#/.test(l):var d=l.substr(1);f=function(t){return t.attribs.id===d},p=function(t,e){if(n){var r=(i=[],a([t],(function(t,e){f(t)&&(i.push(t),e())})),{v:i});if("object"===(void 0===r?"undefined":o(r)))return r.v}var i;return"function"==typeof t?t(f):c(t,e,f)};break;case/\*/.test(l):f=function(t){return!0},p=function(t,e){if(n){var r=(i=[],a([t],(function(t){return i.push(t)})),{v:i});if("object"===(void 0===r?"undefined":o(r)))return r.v}var i;return"function"==typeof t?t(f):c(t,e,f)};break;default:f=function(t){return t.name===l},p=function(t,e){if(n){var r=(i=[],a([t],(function(t){f(t)&&i.push(t)})),{v:i});if("object"===(void 0===r?"undefined":o(r)))return r.v}var i;return"function"==typeof t?t(f):c(t,e,f)}}}(),!u)return p;var d=u.match(/-(child|type)\((\d+)\)$/),h=d[1],m=parseInt(d[2],10)-1,y=function(t){if(t){var e=t.parent.childTags;if("type"===h&&(e=e.filter(f)),e.findIndex((function(e){return e===t}))===m)return!0}return!1};return function(t){var e=p(t);return n?e.reduce((function(t,e){return y(e)&&t.push(e),t}),[]):y(e)&&e}}))}(t=t.replace(/(>)(\S)/g,"$1 $2").trim()),r=n.shift(),s=n.length;return r(this).filter((function(t){for(var r=0;r<s;){if(!(t=n[r](t,e)))return!1;r+=1}return!0}))});r.contains||(r.contains=function(t){var e=!1;return a([this],(function(n,r){n===t&&(e=!0,r())})),e});return!0},t.exports=e.default}).call(this,n(17))},function(t,e,n){"use strict";(function(r){Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};Array.isArray(e)||(e=e.length?(0,c.convertNodeList)(e):[e]);if(!e.length||e.some((function(t){return 1!==t.nodeType})))throw new Error('Invalid input - to compare HTMLElements its necessary to provide a reference of the selected node(s)! (missing "elements")');var o=(0,a.default)(e[0],n),i=t.replace(/> /g,">").split(/\s+(?=(?:(?:[^"]*"){2})*[^"]*$)/);if(i.length<2)return s("",t,"",e);var l=[i.pop()];for(;i.length>1;){var u=i.pop(),f=i.join(" "),p=l.join(" "),d=f+" "+p,h=document.querySelectorAll(d);h.length!==e.length&&l.unshift(s(f,u,p,e))}l.unshift(i[0]),(i=l)[0]=s("",i[0],i.slice(1).join(" "),e),i[i.length-1]=s(i.slice(0,-1).join(" "),i[i.length-1],"",e),o&&delete r.document;return i.join(" ").replace(/>/g,"> ").trim()};var o,i=n(22),a=(o=i)&&o.__esModule?o:{default:o},c=n(18);function s(t,e,n,r){if(t.length&&(t+=" "),n.length&&(n=" "+n),/\[*\]/.test(e)){var o=e.replace(/=.*$/,"]"),i=""+t+o+n;if(l(document.querySelectorAll(i),r))e=o;else for(var a=document.querySelectorAll(""+t+o),c=function(){var o=a[s];if(r.some((function(t){return o.contains(t)}))){var c=o.tagName.toLowerCase();return i=""+t+c+n,l(document.querySelectorAll(i),r)&&(e=c),"break"}},s=0,u=a.length;s<u;s++){if("break"===c())break}}if(/>/.test(e)){var f=e.replace(/>/,"");i=""+t+f+n;l(document.querySelectorAll(i),r)&&(e=f)}if(/:nth-child/.test(e)){var p=e.replace(/nth-child/g,"nth-of-type");i=""+t+p+n;l(document.querySelectorAll(i),r)&&(e=p)}if(/\.\S+\.\S+/.test(e)){for(var d=e.trim().split(".").slice(1).map((function(t){return"."+t})).sort((function(t,e){return t.length-e.length}));d.length;){var h=e.replace(d.shift(),"").trim();if(!(i=(""+t+h+n).trim()).length||">"===i.charAt(0)||">"===i.charAt(i.length-1))break;l(document.querySelectorAll(i),r)&&(e=h)}if((d=e&&e.match(/\./g))&&d.length>2){var m=document.querySelectorAll(""+t+e),y=function(){var o=m[s];if(r.some((function(t){return o.contains(t)}))){var a=o.tagName.toLowerCase();return i=""+t+a+n,l(document.querySelectorAll(i),r)&&(e=a),"break"}};for(s=0,u=m.length;s<u;s++){if("break"===y())break}}}return e}function l(t,e){var n=t.length;return n===e.length&&e.every((function(e){for(var r=0;r<n;r++)if(t[r]===e)return!0;return!1}))}t.exports=e.default}).call(this,n(17))},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.getCommonAncestor=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=e.root,r=void 0===n?document:n,o=[];t.forEach((function(t,e){for(var n=[];t!==r;)t=t.parentNode,n.unshift(t);o[e]=n})),o.sort((function(t,e){return t.length-e.length}));for(var i=o.shift(),a=null,c=function(){var t=i[s];if(o.some((function(e){return!e.some((function(e){return e===t}))})))return"break";a=t},s=0,l=i.length;s<l;s++){var u=c();if("break"===u)break}return a},e.getCommonProperties=function(t){var e={classes:[],attributes:{},tag:null};return t.forEach((function(t){var n,r,o,i,a=e.classes,c=e.attributes,s=e.tag;if(void 0!==a){var l=t.getAttribute("class");l?(l=l.trim().split(" "),a.length?(a=a.filter((function(t){return l.some((function(e){return e===t}))}))).length?e.classes=a:delete e.classes:e.classes=l):delete e.classes}if(void 0!==c&&(n=t.attributes,r=Object.keys(n).reduce((function(t,e){var r=n[e],o=r.name;return r&&"class"!==o&&(t[o]=r.value),t}),{}),o=Object.keys(r),i=Object.keys(c),o.length?i.length?(c=i.reduce((function(t,e){var n=c[e];return n===r[e]&&(t[e]=n),t}),{}),Object.keys(c).length?e.attributes=c:delete e.attributes):e.attributes=r:delete e.attributes),void 0!==s){var u=t.tagName.toLowerCase();s?u!==s&&delete e.tag:e.tag=u}})),e}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=e.common=e.optimize=e.getMultiSelector=e.getSingleSelector=e.select=void 0;var r=n(29);Object.defineProperty(e,"getSingleSelector",{enumerable:!0,get:function(){return r.getSingleSelector}}),Object.defineProperty(e,"getMultiSelector",{enumerable:!0,get:function(){return r.getMultiSelector}});var o=c(r),i=c(n(23)),a=function(t){if(t&&t.__esModule)return t;var e={};if(null!=t)for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n]);return e.default=t,e}(n(24));function c(t){return t&&t.__esModule?t:{default:t}}e.select=o.default,e.optimize=i.default,e.common=a,e.default=o.default},,,function(t,e,n){"use strict";var r,o,i;function a(){return(a=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t}).apply(this,arguments)}function c(t){return(c="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function(n,a){"object"==c(e)&&void 0!==t?a(e):(o=[e],void 0===(i="function"==typeof(r=a)?r.apply(e,o):r)||(t.exports=i))}(0,(function(t){function e(t){return null==t?window:"[object Window]"!==t.toString()?(t=t.ownerDocument)&&t.defaultView||window:t}function n(t){return t instanceof e(t).Element||t instanceof Element}function r(t){return t instanceof e(t).HTMLElement||t instanceof HTMLElement}function o(t){return"undefined"!=typeof ShadowRoot&&(t instanceof e(t).ShadowRoot||t instanceof ShadowRoot)}function i(t,e){void 0===e&&(e=!1);var n=t.getBoundingClientRect(),o=1,i=1;return r(t)&&e&&(e=t.offsetHeight,0<(t=t.offsetWidth)&&(o=V(n.width)/t||1),0<e&&(i=V(n.height)/e||1)),{width:n.width/o,height:n.height/i,top:n.top/i,right:n.right/o,bottom:n.bottom/i,left:n.left/o,x:n.left/o,y:n.top/i}}function c(t){return{scrollLeft:(t=e(t)).pageXOffset,scrollTop:t.pageYOffset}}function s(t){return t?(t.nodeName||"").toLowerCase():null}function l(t){return((n(t)?t.ownerDocument:t.document)||window.document).documentElement}function u(t){return i(l(t)).left+c(t).scrollLeft}function f(t){return e(t).getComputedStyle(t)}function p(t){return t=f(t),/auto|scroll|overlay|hidden/.test(t.overflow+t.overflowY+t.overflowX)}function d(t,n,o){void 0===o&&(o=!1);var a,f=r(n);if(a=r(n)){var d=n.getBoundingClientRect();a=V(d.width)/n.offsetWidth||1,d=V(d.height)/n.offsetHeight||1,a=1!==a||1!==d}d=a,a=l(n),t=i(t,d),d={scrollLeft:0,scrollTop:0};var h={x:0,y:0};return(f||!f&&!o)&&(("body"!==s(n)||p(a))&&(d=n!==e(n)&&r(n)?{scrollLeft:n.scrollLeft,scrollTop:n.scrollTop}:c(n)),r(n)?((h=i(n,!0)).x+=n.clientLeft,h.y+=n.clientTop):a&&(h.x=u(a))),{x:t.left+d.scrollLeft-h.x,y:t.top+d.scrollTop-h.y,width:t.width,height:t.height}}function h(t){var e=i(t),n=t.offsetWidth,r=t.offsetHeight;return 1>=Math.abs(e.width-n)&&(n=e.width),1>=Math.abs(e.height-r)&&(r=e.height),{x:t.offsetLeft,y:t.offsetTop,width:n,height:r}}function m(t){return"html"===s(t)?t:t.assignedSlot||t.parentNode||(o(t)?t.host:null)||l(t)}function y(t){return 0<=["html","body","#document"].indexOf(s(t))?t.ownerDocument.body:r(t)&&p(t)?t:y(m(t))}function g(t,n){var r;void 0===n&&(n=[]);var o=y(t);return t=o===(null==(r=t.ownerDocument)?void 0:r.body),r=e(o),o=t?[r].concat(r.visualViewport||[],p(o)?o:[]):o,n=n.concat(o),t?n:n.concat(g(m(o)))}function v(t){return r(t)&&"fixed"!==f(t).position?t.offsetParent:null}function b(t){for(var n=e(t),o=v(t);o&&0<=["table","td","th"].indexOf(s(o))&&"static"===f(o).position;)o=v(o);if(o&&("html"===s(o)||"body"===s(o)&&"static"===f(o).position))return n;if(!o)t:{if(o=-1!==navigator.userAgent.toLowerCase().indexOf("firefox"),-1===navigator.userAgent.indexOf("Trident")||!r(t)||"fixed"!==f(t).position)for(t=m(t);r(t)&&0>["html","body"].indexOf(s(t));){var i=f(t);if("none"!==i.transform||"none"!==i.perspective||"paint"===i.contain||-1!==["transform","perspective"].indexOf(i.willChange)||o&&"filter"===i.willChange||o&&i.filter&&"none"!==i.filter){o=t;break t}t=t.parentNode}o=null}return o||n}function w(t){var e=new Map,n=new Set,r=[];return t.forEach((function(t){e.set(t.name,t)})),t.forEach((function(t){n.has(t.name)||function t(o){n.add(o.name),[].concat(o.requires||[],o.requiresIfExists||[]).forEach((function(r){n.has(r)||(r=e.get(r))&&t(r)})),r.push(o)}(t)})),r}function O(t){var e;return function(){return e||(e=new Promise((function(n){Promise.resolve().then((function(){e=void 0,n(t())}))}))),e}}function E(t){return t.split("-")[0]}function _(t,e){var n=e.getRootNode&&e.getRootNode();if(t.contains(e))return!0;if(n&&o(n))do{if(e&&t.isSameNode(e))return!0;e=e.parentNode||e.host}while(e);return!1}function S(t){return a({},t,{left:t.x,top:t.y,right:t.x+t.width,bottom:t.y+t.height})}function x(t,r){if("viewport"===r){r=e(t);var o=l(t);r=r.visualViewport;var a=o.clientWidth;o=o.clientHeight;var s=0,p=0;r&&(a=r.width,o=r.height,/^((?!chrome|android).)*safari/i.test(navigator.userAgent)||(s=r.offsetLeft,p=r.offsetTop)),t=S(t={width:a,height:o,x:s+u(t),y:p})}else n(r)?((t=i(r)).top+=r.clientTop,t.left+=r.clientLeft,t.bottom=t.top+r.clientHeight,t.right=t.left+r.clientWidth,t.width=r.clientWidth,t.height=r.clientHeight,t.x=t.left,t.y=t.top):(p=l(t),t=l(p),a=c(p),r=null==(o=p.ownerDocument)?void 0:o.body,o=z(t.scrollWidth,t.clientWidth,r?r.scrollWidth:0,r?r.clientWidth:0),s=z(t.scrollHeight,t.clientHeight,r?r.scrollHeight:0,r?r.clientHeight:0),p=-a.scrollLeft+u(p),a=-a.scrollTop,"rtl"===f(r||t).direction&&(p+=z(t.clientWidth,r?r.clientWidth:0)-o),t=S({width:o,height:s,x:p,y:a}));return t}function P(t,e,o){return e="clippingParents"===e?function(t){var e=g(m(t)),o=0<=["absolute","fixed"].indexOf(f(t).position),i=o&&r(t)?b(t):t;return n(i)?e.filter((function(t){return n(t)&&_(t,i)&&"body"!==s(t)&&(!o||"static"!==f(t).position)})):[]}(t):[].concat(e),(o=(o=[].concat(e,[o])).reduce((function(e,n){return n=x(t,n),e.top=z(n.top,e.top),e.right=B(n.right,e.right),e.bottom=B(n.bottom,e.bottom),e.left=z(n.left,e.left),e}),x(t,o[0]))).width=o.right-o.left,o.height=o.bottom-o.top,o.x=o.left,o.y=o.top,o}function k(t){return t.split("-")[1]}function A(t){return 0<=["top","bottom"].indexOf(t)?"x":"y"}function I(t){var e=t.reference,n=t.element,r=(t=t.placement)?E(t):null;t=t?k(t):null;var o=e.x+e.width/2-n.width/2,i=e.y+e.height/2-n.height/2;switch(r){case"top":o={x:o,y:e.y-n.height};break;case"bottom":o={x:o,y:e.y+e.height};break;case"right":o={x:e.x+e.width,y:i};break;case"left":o={x:e.x-n.width,y:i};break;default:o={x:e.x,y:e.y}}if(null!=(r=r?A(r):null))switch(i="y"===r?"height":"width",t){case"start":o[r]-=e[i]/2-n[i]/2;break;case"end":o[r]+=e[i]/2-n[i]/2}return o}function j(t){return a({},{top:0,right:0,bottom:0,left:0},t)}function C(t,e){return e.reduce((function(e,n){return e[n]=t,e}),{})}function T(t,e){void 0===e&&(e={});var r=e;e=void 0===(e=r.placement)?t.placement:e;var o=r.boundary,c=void 0===o?"clippingParents":o,s=void 0===(o=r.rootBoundary)?"viewport":o;o=void 0===(o=r.elementContext)?"popper":o;var u=r.altBoundary,f=void 0!==u&&u;r=j("number"!=typeof(r=void 0===(r=r.padding)?0:r)?r:C(r,G)),u=t.rects.popper,c=P(n(f=t.elements[f?"popper"===o?"reference":"popper":o])?f:f.contextElement||l(t.elements.popper),c,s),u=S(a({},u,f=I({reference:s=i(t.elements.reference),element:u,strategy:"absolute",placement:e}))),s="popper"===o?u:s;var p={top:c.top-s.top+r.top,bottom:s.bottom-c.bottom+r.bottom,left:c.left-s.left+r.left,right:s.right-c.right+r.right};if(t=t.modifiersData.offset,"popper"===o&&t){var d=t[e];Object.keys(p).forEach((function(t){var e=0<=["right","bottom"].indexOf(t)?1:-1,n=0<=["top","bottom"].indexOf(t)?"y":"x";p[t]+=d[n]*e}))}return p}function M(){for(var t=arguments.length,e=Array(t),n=0;n<t;n++)e[n]=arguments[n];return!e.some((function(t){return!(t&&"function"==typeof t.getBoundingClientRect)}))}function R(t){void 0===t&&(t={});var e=t.defaultModifiers,r=void 0===e?[]:e,o=void 0===(t=t.defaultOptions)?F:t;return function(t,e,i){function c(){l.forEach((function(t){return t()})),l=[]}void 0===i&&(i=o);var s={placement:"bottom",orderedModifiers:[],options:a({},F,o),modifiersData:{},elements:{reference:t,popper:e},attributes:{},styles:{}},l=[],u=!1,f={state:s,setOptions:function(i){return i="function"==typeof i?i(s.options):i,c(),s.options=a({},o,s.options,i),s.scrollParents={reference:n(t)?g(t):t.contextElement?g(t.contextElement):[],popper:g(e)},i=function(t){var e=w(t);return K.reduce((function(t,n){return t.concat(e.filter((function(t){return t.phase===n})))}),[])}(function(t){var e=t.reduce((function(t,e){var n=t[e.name];return t[e.name]=n?a({},n,e,{options:a({},n.options,e.options),data:a({},n.data,e.data)}):e,t}),{});return Object.keys(e).map((function(t){return e[t]}))}([].concat(r,s.options.modifiers))),s.orderedModifiers=i.filter((function(t){return t.enabled})),s.orderedModifiers.forEach((function(t){var e=t.name,n=t.options;n=void 0===n?{}:n,"function"==typeof(t=t.effect)&&(e=t({state:s,name:e,instance:f,options:n}),l.push(e||function(){}))})),f.update()},forceUpdate:function(){if(!u){var t=s.elements,e=t.reference;if(M(e,t=t.popper))for(s.rects={reference:d(e,b(t),"fixed"===s.options.strategy),popper:h(t)},s.reset=!1,s.placement=s.options.placement,s.orderedModifiers.forEach((function(t){return s.modifiersData[t.name]=a({},t.data)})),e=0;e<s.orderedModifiers.length;e++)if(!0===s.reset)s.reset=!1,e=-1;else{var n=s.orderedModifiers[e];t=n.fn;var r=n.options;r=void 0===r?{}:r,n=n.name,"function"==typeof t&&(s=t({state:s,options:r,name:n,instance:f})||s)}}},update:O((function(){return new Promise((function(t){f.forceUpdate(),t(s)}))})),destroy:function(){c(),u=!0}};return M(t,e)?(f.setOptions(i).then((function(t){!u&&i.onFirstUpdate&&i.onFirstUpdate(t)})),f):f}}function N(t){var n,r=t.popper,o=t.popperRect,i=t.placement,c=t.variation,s=t.offsets,u=t.position,p=t.gpuAcceleration,d=t.adaptive,h=t.roundOffsets;if(t=t.isFixed,!0===h){h=s.y;var m=window.devicePixelRatio||1;h={x:V(s.x*m)/m||0,y:V(h*m)/m||0}}else h="function"==typeof h?h(s):s;h=void 0===(h=(m=h).x)?0:h,m=void 0===(m=m.y)?0:m;var y=s.hasOwnProperty("x");s=s.hasOwnProperty("y");var g,v="left",w="top",O=window;if(d){var E=b(r),_="clientHeight",S="clientWidth";E===e(r)&&"static"!==f(E=l(r)).position&&"absolute"===u&&(_="scrollHeight",S="scrollWidth"),"top"!==i&&("left"!==i&&"right"!==i||"end"!==c)||(w="bottom",m-=(t&&O.visualViewport?O.visualViewport.height:E[_])-o.height,m*=p?1:-1),"left"!==i&&("top"!==i&&"bottom"!==i||"end"!==c)||(v="right",h-=(t&&O.visualViewport?O.visualViewport.width:E[S])-o.width,h*=p?1:-1)}return r=a({position:u},d&&$),a({},r,p?((g={})[w]=s?"0":"",g[v]=y?"0":"",g.transform=1>=(O.devicePixelRatio||1)?"translate("+h+"px, "+m+"px)":"translate3d("+h+"px, "+m+"px, 0)",g):((n={})[w]=s?m+"px":"",n[v]=y?h+"px":"",n.transform="",n))}function D(t){return t.replace(/left|right|bottom|top/g,(function(t){return et[t]}))}function L(t){return t.replace(/start|end/g,(function(t){return nt[t]}))}function H(t,e,n){return void 0===n&&(n={x:0,y:0}),{top:t.top-e.height-n.y,right:t.right-e.width+n.x,bottom:t.bottom-e.height+n.y,left:t.left-e.width-n.x}}function q(t){return["top","right","bottom","left"].some((function(e){return 0<=t[e]}))}var z=Math.max,B=Math.min,V=Math.round,G=["top","bottom","right","left"],Y=G.reduce((function(t,e){return t.concat([e+"-start",e+"-end"])}),[]),U=[].concat(G,["auto"]).reduce((function(t,e){return t.concat([e,e+"-start",e+"-end"])}),[]),K="beforeRead read afterRead beforeMain main afterMain beforeWrite write afterWrite".split(" "),F={placement:"bottom",modifiers:[],strategy:"absolute"},W={passive:!0},X={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(t){var n=t.state,r=t.instance,o=(t=t.options).scroll,i=void 0===o||o,a=void 0===(t=t.resize)||t,c=e(n.elements.popper),s=[].concat(n.scrollParents.reference,n.scrollParents.popper);return i&&s.forEach((function(t){t.addEventListener("scroll",r.update,W)})),a&&c.addEventListener("resize",r.update,W),function(){i&&s.forEach((function(t){t.removeEventListener("scroll",r.update,W)})),a&&c.removeEventListener("resize",r.update,W)}},data:{}},J={name:"popperOffsets",enabled:!0,phase:"read",fn:function(t){var e=t.state;e.modifiersData[t.name]=I({reference:e.rects.reference,element:e.rects.popper,strategy:"absolute",placement:e.placement})},data:{}},$={top:"auto",right:"auto",bottom:"auto",left:"auto"},Z={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(t){var e=t.state,n=t.options;t=void 0===(t=n.gpuAcceleration)||t;var r=n.adaptive;r=void 0===r||r,n=void 0===(n=n.roundOffsets)||n,t={placement:E(e.placement),variation:k(e.placement),popper:e.elements.popper,popperRect:e.rects.popper,gpuAcceleration:t,isFixed:"fixed"===e.options.strategy},null!=e.modifiersData.popperOffsets&&(e.styles.popper=a({},e.styles.popper,N(a({},t,{offsets:e.modifiersData.popperOffsets,position:e.options.strategy,adaptive:r,roundOffsets:n})))),null!=e.modifiersData.arrow&&(e.styles.arrow=a({},e.styles.arrow,N(a({},t,{offsets:e.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:n})))),e.attributes.popper=a({},e.attributes.popper,{"data-popper-placement":e.placement})},data:{}},Q={name:"applyStyles",enabled:!0,phase:"write",fn:function(t){var e=t.state;Object.keys(e.elements).forEach((function(t){var n=e.styles[t]||{},o=e.attributes[t]||{},i=e.elements[t];r(i)&&s(i)&&(a(i.style,n),Object.keys(o).forEach((function(t){var e=o[t];!1===e?i.removeAttribute(t):i.setAttribute(t,!0===e?"":e)})))}))},effect:function(t){var e=t.state,n={popper:{position:e.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return a(e.elements.popper.style,n.popper),e.styles=n,e.elements.arrow&&a(e.elements.arrow.style,n.arrow),function(){Object.keys(e.elements).forEach((function(t){var o=e.elements[t],i=e.attributes[t]||{};t=Object.keys(e.styles.hasOwnProperty(t)?e.styles[t]:n[t]).reduce((function(t,e){return t[e]="",t}),{}),r(o)&&s(o)&&(a(o.style,t),Object.keys(i).forEach((function(t){o.removeAttribute(t)})))}))}},requires:["computeStyles"]},tt={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(t){var e=t.state,n=t.name,r=void 0===(t=t.options.offset)?[0,0]:t,o=(t=U.reduce((function(t,n){var o=e.rects,i=E(n),c=0<=["left","top"].indexOf(i)?-1:1,s="function"==typeof r?r(a({},o,{placement:n})):r;return o=(o=s[0])||0,s=((s=s[1])||0)*c,i=0<=["left","right"].indexOf(i)?{x:s,y:o}:{x:o,y:s},t[n]=i,t}),{}))[e.placement],i=o.x;o=o.y,null!=e.modifiersData.popperOffsets&&(e.modifiersData.popperOffsets.x+=i,e.modifiersData.popperOffsets.y+=o),e.modifiersData[n]=t}},et={left:"right",right:"left",bottom:"top",top:"bottom"},nt={start:"end",end:"start"},rt={name:"flip",enabled:!0,phase:"main",fn:function(t){var e=t.state,n=t.options;if(t=t.name,!e.modifiersData[t]._skip){var r=n.mainAxis;r=void 0===r||r;var o=n.altAxis;o=void 0===o||o;var i=n.fallbackPlacements,a=n.padding,c=n.boundary,s=n.rootBoundary,l=n.altBoundary,u=n.flipVariations,f=void 0===u||u,p=n.allowedAutoPlacements;u=E(n=e.options.placement),i=i||(u!==n&&f?function(t){if("auto"===E(t))return[];var e=D(t);return[L(t),e,L(e)]}(n):[D(n)]);var d=[n].concat(i).reduce((function(t,n){return t.concat("auto"===E(n)?function(t,e){void 0===e&&(e={});var n=e.boundary,r=e.rootBoundary,o=e.padding,i=e.flipVariations,a=e.allowedAutoPlacements,c=void 0===a?U:a,s=k(e.placement);0===(i=(e=s?i?Y:Y.filter((function(t){return k(t)===s})):G).filter((function(t){return 0<=c.indexOf(t)}))).length&&(i=e);var l=i.reduce((function(e,i){return e[i]=T(t,{placement:i,boundary:n,rootBoundary:r,padding:o})[E(i)],e}),{});return Object.keys(l).sort((function(t,e){return l[t]-l[e]}))}(e,{placement:n,boundary:c,rootBoundary:s,padding:a,flipVariations:f,allowedAutoPlacements:p}):n)}),[]);n=e.rects.reference,i=e.rects.popper;var h=new Map;u=!0;for(var m=d[0],y=0;y<d.length;y++){var g=d[y],v=E(g),b="start"===k(g),w=0<=["top","bottom"].indexOf(v),O=w?"width":"height",_=T(e,{placement:g,boundary:c,rootBoundary:s,altBoundary:l,padding:a});if(b=w?b?"right":"left":b?"bottom":"top",n[O]>i[O]&&(b=D(b)),O=D(b),w=[],r&&w.push(0>=_[v]),o&&w.push(0>=_[b],0>=_[O]),w.every((function(t){return t}))){m=g,u=!1;break}h.set(g,w)}if(u)for(r=function(t){var e=d.find((function(e){if(e=h.get(e))return e.slice(0,t).every((function(t){return t}))}));if(e)return m=e,"break"},o=f?3:1;0<o&&"break"!==r(o);o--);e.placement!==m&&(e.modifiersData[t]._skip=!0,e.placement=m,e.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}},ot={name:"preventOverflow",enabled:!0,phase:"main",fn:function(t){var e=t.state,n=t.options;t=t.name;var r=n.mainAxis,o=void 0===r||r,i=void 0!==(r=n.altAxis)&&r,c=void 0===(r=n.tether)||r,s=void 0===(r=n.tetherOffset)?0:r,l=T(e,{boundary:n.boundary,rootBoundary:n.rootBoundary,padding:n.padding,altBoundary:n.altBoundary}),u=E(e.placement),f=k(e.placement),p=!f,d=A(u);n="x"===d?"y":"x",r=e.modifiersData.popperOffsets;var m=e.rects.reference,y=e.rects.popper,g="number"==typeof(s="function"==typeof s?s(a({},e.rects,{placement:e.placement})):s)?{mainAxis:s,altAxis:s}:a({mainAxis:0,altAxis:0},s),v=e.modifiersData.offset?e.modifiersData.offset[e.placement]:null;if(s={x:0,y:0},r){if(o){var w,O="y"===d?"top":"left",_="y"===d?"bottom":"right",S="y"===d?"height":"width",x=(o=r[d])+l[O],P=o-l[_],I=c?-y[S]/2:0,j="start"===f?m[S]:y[S];f="start"===f?-y[S]:-m[S];var C=e.elements.arrow;C=c&&C?h(C):{width:0,height:0};var M=e.modifiersData["arrow#persistent"]?e.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0};O=M[O],_=M[_],C=z(0,B(m[S],C[S])),j=p?m[S]/2-I-C-O-g.mainAxis:j-C-O-g.mainAxis,p=p?-m[S]/2+I+C+_+g.mainAxis:f+C+_+g.mainAxis,S=(S=e.elements.arrow&&b(e.elements.arrow))?"y"===d?S.clientTop||0:S.clientLeft||0:0,I=null!=(w=null==v?void 0:v[d])?w:0,w=o+p-I,x=c?B(x,o+j-I-S):x,w=c?z(P,w):P,w=z(x,B(o,w)),r[d]=w,s[d]=w-o}var R;i&&(o="y"===n?"height":"width",w=(i=r[n])+l["x"===d?"top":"left"],l=i-l["x"===d?"bottom":"right"],u=-1!==["top","left"].indexOf(u),d=null!=(R=null==v?void 0:v[n])?R:0,R=u?w:i-m[o]-y[o]-d+g.altAxis,m=u?i+m[o]+y[o]-d-g.altAxis:l,R=c&&u?(R=z(R,B(i,m)))>m?m:R:z(c?R:w,B(i,c?m:l)),r[n]=R,s[n]=R-i),e.modifiersData[t]=s}},requiresIfExists:["offset"]},it={name:"arrow",enabled:!0,phase:"main",fn:function(t){var e,n=t.state,r=t.name,o=t.options,i=n.elements.arrow,c=n.modifiersData.popperOffsets,s=E(n.placement);if(t=A(s),s=0<=["left","right"].indexOf(s)?"height":"width",i&&c){o=j("number"!=typeof(o="function"==typeof(o=o.padding)?o(a({},n.rects,{placement:n.placement})):o)?o:C(o,G));var l=h(i),u="y"===t?"top":"left",f="y"===t?"bottom":"right",p=n.rects.reference[s]+n.rects.reference[t]-c[t]-n.rects.popper[s];c=c[t]-n.rects.reference[t],c=(i=(i=b(i))?"y"===t?i.clientHeight||0:i.clientWidth||0:0)/2-l[s]/2+(p/2-c/2),s=z(o[u],B(c,i-l[s]-o[f])),n.modifiersData[r]=((e={})[t]=s,e.centerOffset=s-c,e)}},effect:function(t){var e=t.state;if(null!=(t=void 0===(t=t.options.element)?"[data-popper-arrow]":t)){if("string"==typeof t&&!(t=e.elements.popper.querySelector(t)))return;_(e.elements.popper,t)&&(e.elements.arrow=t)}},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]},at={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(t){var e=t.state;t=t.name;var n=e.rects.reference,r=e.rects.popper,o=e.modifiersData.preventOverflow,i=T(e,{elementContext:"reference"}),c=T(e,{altBoundary:!0});n=H(i,n),r=H(c,r,o),o=q(n),c=q(r),e.modifiersData[t]={referenceClippingOffsets:n,popperEscapeOffsets:r,isReferenceHidden:o,hasPopperEscaped:c},e.attributes.popper=a({},e.attributes.popper,{"data-popper-reference-hidden":o,"data-popper-escaped":c})}},ct=R({defaultModifiers:[X,J,Z,Q]}),st=[X,J,Z,Q,tt,rt,ot,it,at],lt=R({defaultModifiers:st});t.applyStyles=Q,t.arrow=it,t.computeStyles=Z,t.createPopper=lt,t.createPopperLite=ct,t.defaultModifiers=st,t.detectOverflow=T,t.eventListeners=X,t.flip=rt,t.hide=at,t.offset=tt,t.popperGenerator=R,t.popperOffsets=J,t.preventOverflow=ot,Object.defineProperty(t,"__esModule",{value:!0})}))},function(t,e,n){"use strict";(function(t){function r(t){return(r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}Object.defineProperty(e,"__esModule",{value:!0});var o="function"==typeof Symbol&&"symbol"===r(Symbol.iterator)?function(t){return r(t)}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":r(t)};e.getSingleSelector=f,e.getMultiSelector=p,e.default=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};if(t.length&&!t.name)return p(t,e);return f(t,e)};var i=u(n(22)),a=u(n(30)),c=u(n(23)),s=n(18),l=n(24);function u(t){return t&&t.__esModule?t:{default:t}}function f(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};if(3===e.nodeType&&(e=e.parentNode),1!==e.nodeType)throw new Error('Invalid input - only HTMLElements or representations of them are supported! (not "'+(void 0===e?"undefined":o(e))+'")');var r=(0,i.default)(e,n),s=(0,a.default)(e,n),l=(0,c.default)(s,e,n);return r&&delete t.document,l}function p(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};if(Array.isArray(e)||(e=(0,s.convertNodeList)(e)),e.some((function(t){return 1!==t.nodeType})))throw new Error("Invalid input - only an Array of HTMLElements or representations of them is supported!");var r=(0,i.default)(e[0],n),o=(0,l.getCommonAncestor)(e,n),a=f(o,n),u=d(e),p=u[0],h=(0,c.default)(a+" "+p,e,n),m=(0,s.convertNodeList)(document.querySelectorAll(h));return e.every((function(t){return m.some((function(e){return e===t}))}))?(r&&delete t.document,h):console.warn("\n      The selected elements can't be efficiently mapped.\n      Its probably best to use multiple single selectors instead!\n    ",e)}function d(t){var e=(0,l.getCommonProperties)(t),n=e.classes,r=e.attributes,o=e.tag,i=[];if(o&&i.push(o),n){var a=n.map((function(t){return"."+t})).join("");i.push(a)}if(r){var c=Object.keys(r).reduce((function(t,e){return t.push("["+e+'="'+r[e]+'"]'),t}),[]).join("");i.push(c)}return i.length,[i.join("")]}}).call(this,n(17))},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(t,e){var n=e.root,o=void 0===n?document:n,a=e.skip,s=void 0===a?null:a,f=e.priority,p=void 0===f?["id","class","href","src"]:f,d=e.ignore,h=void 0===d?{}:d,m=[],y=t,g=m.length,v=!1,b=s&&(Array.isArray(s)?s:[s]).map((function(t){return"function"!=typeof t?function(e){return e===t}:t})),w=function(t){return s&&b.some((function(e){return e(t)}))};Object.keys(h).forEach((function(t){"class"===t&&(v=!0);var e=h[t];"function"!=typeof e&&("number"==typeof e&&(e=e.toString()),"string"==typeof e&&(e=new RegExp((0,r.escapeValue)(e).replace(/\\/g,"\\\\"))),"boolean"==typeof e&&(e=e?/(?:)/:/.^/),h[t]=function(t,n){return e.test(n)})})),v&&(O=h.attribute,h.attribute=function(t,e,n){return h.class(e)||O&&O(t,e,n)});var O;for(;y!==o;){if(!0!==w(y)){if(i(p,y,h,m,o))break;if(c(y,h,m,o))break;i(p,y,h,m),m.length===g&&c(y,h,m),m.length===g&&l(p,y,h,m)}y=y.parentNode,g=m.length}if(y===o){var E=u(p,y,h);m.unshift(E)}return m.join(" ")};var r=n(18),o={attribute:function(t){return["style","data-reactid","data-react-checksum"].indexOf(t)>-1}};function i(t,e,n,r){var o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:e.parentNode,i=a(t,e,n);if(i){var c=o.querySelectorAll(i);if(1===c.length)return r.unshift(i),!0}return!1}function a(t,e,n){for(var i=e.attributes,a=Object.keys(i).sort((function(e,n){var r=t.indexOf(i[e].name),o=t.indexOf(i[n].name);return-1===o?-1===r?0:-1:r-o})),c=0,s=a.length;c<s;c++){var l=a[c],u=i[l],p=u.name,d=(0,r.escapeValue)(u.value);if(!f(n[p]||n.attribute,p,d,o[p]||o.attribute)){var h="["+p+'="'+d+'"]';if(!1===/\b\d/.test(d))if("id"===p&&(h="#"+d),"class"===p)h="."+d.trim().replace(/\s+/g,".");return h}}return null}function c(t,e,n){var r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:t.parentNode,o=s(t,e);if(o){var i=r.getElementsByTagName(o);if(1===i.length)return n.unshift(o),!0}return!1}function s(t,e){var n=t.tagName.toLowerCase();return f(e.tag,null,n)?null:n}function l(t,e,n,r){for(var o=e.parentNode,i=o.childTags||o.children,a=0,c=i.length;a<c;a++){var s=i[a];if(s===e){var l=u(t,s,n);if(!l)return console.warn("\n          Element couldn't be matched through strict ignore pattern!\n        ",s,n,l);var f="> "+l+":nth-child("+(a+1)+")";return r.unshift(f),!0}}return!1}function u(t,e,n){var r=a(t,e,n);return r||(r=s(e,n)),r}function f(t,e,n,r){if(!n)return!0;var o=t||r;return!!o&&o(e,n,r)}t.exports=e.default},,,,,,,,,,,,,,,,,,function(t,e,n){"use strict";n.r(e);var r=n(10),o=n(16),i=n(21),a=[],c=0,s=function(){var t=history.pushState;history.pushState=function(){for(var e=arguments.length,n=new Array(e),r=0;r<e;r++)n[r]=arguments[r];t.apply(history,n),cbar_firecustomevent("cbar-pushstate",document,n)},["popstate","cbar-pushstate"].forEach((function(t){document.addEventListener(t,(function(){a.forEach((function(t){return t()}))}))}))},l=function(t){if("function"!=typeof t)throw new Error("Only function allowed to be URL watcher");var e=++c;return a[e]=t,{stop:function(){delete a[e]}}},u=n(5);function f(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function p(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var d,h,m,y,g,v,b,w=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),p(this,"itemsMap",{}),p(this,"ruleConfig",{}),p(this,"currentRuleId",0),p(this,"retryCount",0),p(this,"logger",null),this.logger=u.a.register("BadgeInjector","#ffc9a7")}var e,n,r;return e=t,(n=[{key:"run",value:function(t,e){var n=this;this.currentRuleId=t,this.ruleConfig=e;var r=e.activation.forceScan||!1,o=function(t){var e=[];return n.itemsMap={},t.forEach((function(t){e.push(t.productId),n.itemsMap[t.productId]=t.element})),e.length>50&&(e=e.slice(0,50)),cbar_uid?(n._callApi({ids:e,userId:cbar_uid,siteId:cbar_sid,categoryId:cbar_cid,ruleId:n.currentRuleId},(function(t){t.error?n.logger(t.error):n._proceedItems(t.messages)})),e):n.logger("Essential parameters not set")},i=cbarGetCategoryProducts(r).products;0!==i.length?(o(i),e.ajaxRetrigger&&(s(),l((function(){n.logger("Ajax url change detected");var t=cbarGetCategoryProducts(!0).products;0!==t.length&&setTimeout((function(){return o(t)}),e.delay)})))):this._retryAttempt()}},{key:"_proceedItems",value:function(t){var e=this;if(null!==t){var n=new i.a(this.currentRuleId);Object.keys(t).forEach((function(r){n.inject(e.itemsMap[r],t[r].text,t[r].template)}))}}},{key:"_retryAttempt",value:function(){var t=this,e=this.ruleConfig.activation||{retry:0,delay:500};if(this.retryCount===e.retry)return this.logger("No products found");this.retryCount++,this.logger("Retry attempt "+this.retryCount+" for rule "+this.currentRuleId),setTimeout((function(){return t.run(t.currentRuleId,t.ruleConfig)}),e.delay)}},{key:"_callApi",value:function(t,e){var n=new XMLHttpRequest;n.open("POST","https://www.barilliance.net/api/live/get-product-badges/"),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&e(JSON.parse(n.responseText))},n.send(JSON.stringify(t))}}])&&f(e.prototype,n),r&&f(e,r),t}(),O=u.a.register("Banner injection","#eaaaff"),E=function(t,e,n){var r=null,o=0,i="";try{r=function(){var e=document.querySelector(t);if(null===e)throw new Error("No elements found for that selector");var n=window.getComputedStyle(e,null),r=window.getComputedStyle(e.parentNode,null);if("absolute"===n.getPropertyValue("position"))throw new Error("Absolute layout detected");if("auto"!==r.getPropertyValue("column-count"))throw new Error("Multi-column layout detected");if("left"===(i=n.getPropertyValue("float"))||"right"===i)return 3;var o=r.getPropertyValue("display");return"grid"===o||"inline-grid"===o?1:"flex"===o||"inline-flex"===o?2:"TD"===e.tagName?4:5}();var a=function(){for(var n,i,a,c=document.querySelectorAll(t),s=0,l=0,u=0;u<c.length;u++){var f=c[u],p=(n=void 0,i=void 0,a=void 0,n=f.getBoundingClientRect(),i=window.pageXOffset||document.documentElement.scrollLeft,a=window.pageYOffset||document.documentElement.scrollTop,{top:n.top+a,left:n.left+i});if(s<p.top){if(s=p.top,++l>e)return c[u-1];o=0}if(4===r){var d=f.getAttribute("colspan"),h=null===d?1:parseInt(d);o+=h}else o++}return l===e?c[c.length-1]:null}();if(null===a)throw new Error("Can not find required row");!function(t){if(4===r){var e=document.createElement("td");o>1&&e.setAttribute("colspan",o),e.id=n;var a=document.createElement("tr");return a.appendChild(e),void t.parentNode.insertAdjacentElement("afterend",a)}var c=document.createElement("div");if(c.style.width="100%",3===r&&(c.style.float=i),2===r){var s=window.getComputedStyle(t,null),l=parseInt(s.getPropertyValue("order"));l>0&&(c.style.order=l)}c.id=n;var u=document.createElement("div");u.style.display="none";for(var f=0;f<o-1;f++)t.insertAdjacentElement("afterend",u.cloneNode());t.insertAdjacentElement("afterend",c)}(a)}catch(t){O(t.message)}},_=function(){var t=document.querySelector("body"),e=[],n=window.innerWidth*(window.innerWidth>1500?.3:.4);!function t(r,o){var i=[];if(!(r.getBoundingClientRect().width<n)){var a=0;if(r.childNodes.forEach((function(t){if(t instanceof Element){a++;var e=window.getComputedStyle(t);"hidden"!==e.visibility&&"none"!==e.display&&i.push({child:t,index:a})}})),i.length>=4){var c=e.length,s={};e[c]={elementSelector:o},i.forEach((function(t){0!==t.child.classList.length&&t.child.classList.forEach((function(e){var n=t.child.tagName.toLowerCase()+"."+e;s[n]||(s[n]=0),s[n]++}))})),e[c].items=s}""!==o&&(o+=" > "),i.forEach((function(e){var n=""!==e.child.id?"#"+e.child.id:o+e.child.tagName.toLowerCase()+":nth-child(".concat(e.index,")");t(e.child,n)}))}}(t,"");var r=0,o=null;return e.forEach((function(t){for(var e in t.items)t.items[e]>Math.max(3,r)&&(r=t.items[e],o=(""===t.elementSelector?"":t.elementSelector+" > ")+e)})),o},S=n(1),x=null,P=null,k="",A=null,I=!1,j=function(){A.pushManager.getSubscription().then((function(t){var e="web-push-"+((I=!(null===t))?1:0);null===S.a.session.get(e)&&(N(I?"update":"delete",t),S.a.session.create(e,1)),C()}))},C=function(){"denied"===Notification.permission||I||T(x,P)},T=function(t,e){var n="cbar-notification-request-"+t;if("granted"!==Notification.permission||null===S.a.local.get(n))switch(S.a.local.create(n,1),e){case"popup":case"bar":cbarApp.delayed.run(t),window["cbarButtonClick_"+t]=function(){M()};break;default:M()}},M=function(){var t=H("BKa-Jie9g05OWheBVdtSqkP4ESYZJKDLpvsE4JRxuDcjOsyVsfdcVa3VAuLObZxpf5GNfSax9fzxtt3i52nC93g");R(!0),A.pushManager.subscribe({userVisibleOnly:!0,applicationServerKey:t}).then((function(t){N("grant",t),I=!0})).catch((function(t){t.name&&"NotAllowedError"===t.name?N("not-allowed"):cbar_log_console("Error subscribing to notifications: "+t.message)})).finally((function(){R(!1)})),D("show-permission")},R=function(t){if(""!==k)if(t){var e=document.createElement("div");e.classList.add("cbar-wpask-hint"),e.id="cbar-wpask-hint",e.innerHTML=k,document.getElementsByTagName("body")[0].appendChild(e),e.style.marginLeft=parseInt(e.clientWidth/2*-1)+"px"}else{var n=document.getElementById("cbar-wpask-hint");null!==n&&n.parentNode.removeChild(n)}},N=function(t,e){L("token",{siteId:cbar_sid,userId:cbar_uid,ruleId:x,action:t,token:JSON.stringify(e)})},D=function(t){L("stats",{ruleId:x,siteId:cbar_sid,action:t})},L=function(t,e){var n=cbar_dynamic_url+"api/web-push/"+t,r=Object.keys(e).map((function(t){return t+"="+encodeURIComponent(e[t])})).join("&");fetch(n,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:r})},H=function(t){for(var e=(t+"=".repeat((4-t.length%4)%4)).replace(/\-/g,"+").replace(/_/g,"/"),n=window.atob(e),r=new Uint8Array(n.length),o=0;o<n.length;++o)r[o]=n.charCodeAt(o);return r},q=function(t){var e;if(x=parseInt(t.ruleId),P=t.type,k=t.hint,""!==t.workerPath&&(e=t.workerPath,"serviceWorker"in navigator&&"PushManager"in window&&navigator.serviceWorker.register(e).then((function(t){A=t,j()})).catch((function(t){cbar_log_console("Service Worker Error: "+t.message)}))),parseInt(cbar_preview_rules)===x){var n=document.querySelector("#".concat(cbarApp.previewBoxId," .cbar-preview-msg"));null!==n&&function(t){t.innerHTML+='<br><br>Use user id <code class="cbar-dont-drag">'.concat(cbar_uid,"</code> to test the setup")}(n)}},z=u.a.register("Realtime purchase messages","#ff8a55"),B=1,V=(b=[],{init:function(){b=S.a.session.get("live-puchase-watched",[])},getItems:function(){return b},addItem:function(t){b.push(t),S.a.session.create("live-puchase-watched",b)},clearAll:function(){b=[],S.a.session.remove("live-puchase-watched")}}),G=function(){U()},Y=function(t){!function(t,e){var n=new XMLHttpRequest;n.open("POST","https://www.barilliance.net/api/live/get-realtime-messages/"),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&e(JSON.parse(n.responseText))},n.send(JSON.stringify(t))}({siteId:cbar_sid,userId:cbar_uid,ruleId:g,abCode:v,watchedMessages:V.getItems().join(",")},(function(e){V.clearAll(),y=e.items,t()}))},U=function t(){if(0!==y.length){var e=y.pop();m.message=[e.text],m.image=e.image,m.url=e.url,cbarShowLiveMessage(m),V.addItem(e.id),setTimeout(G,1e3*h)}else Y((function(){0===y.length?(setTimeout(G,6e4*B),B*=2):(t(),B=1)}))},K=function(t){return(t.version||0)>2?z("Client-server desync, versions mismatch"):(d=t.startDelay,h=t.showInterval,g=t.ruleId,v=t.abCode,y=t.initialItems||[],m=t.messageConfig||null,h+=m.time,0===g?z("Rule ID unset"):null===m?z("Message config unset"):(V.init(),void setTimeout(G,1e3*d)))},F=function(t){t.changes.forEach((function(t){var e=document.querySelector(t.selector);if(null!==e){var n=e.dataset.veChanges?JSON.parse(e.dataset.veChanges):{css:{},attr:{}};Object.keys(t.css).forEach((function(r){n.css.hasOwnProperty(r)||(n.css[r]=window.getComputedStyle(e,null).getPropertyValue(r)),e.style.setProperty(r,t.css[r],"important")})),Object.keys(t.attr).forEach((function(r){n.attr.hasOwnProperty(r)||(n.attr[r]=e.getAttribute(r)),e.setAttribute(r,t.attr[r])})),t.hasOwnProperty("html")&&(n.hasOwnProperty("html")||(n.html=e.innerHTML),e.innerHTML=t.html,e.dataset.veHtmlChange=1),e.dataset.veChanges=JSON.stringify(n)}}))},W=n(28);function X(t){return function(t){if(Array.isArray(t))return J(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,e){if(!t)return;if("string"==typeof t)return J(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return J(t,e)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function J(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function $(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function Z(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?$(Object(n),!0).forEach((function(e){Q(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):$(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function Q(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function tt(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}var et=function(t){var e=cbarApp.cbarTooltip.filter((function(e){return t.target==document.querySelector(e.selector)||t.target==e.iconElement}))[0];return cbarApp.cbarTooltip[e]},nt=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),void 0===cbarApp.cbarTooltip&&(cbarApp.cbarTooltip=[])}var e,n,r;return e=t,(n=[{key:"_injectCSS",value:function(){if(null==document.getElementById("cbar-tooltips-styles")){var t=cbar_create_stylesheet("cbar-tooltips-styles");[".cbar-tooltip {\n\t\t\t\tz-index:100;\n\t\t\t\tbackground-color: #FFFFFF;\n\t\t\t\tpadding: 0px;\n\t\t\t\tborder-radius: 4px;\n\t\t\t\tfont-size: 13px;\n\t\t\t\tdisplay:none;\n\t\t\t}",".cbar-tooltip .cbar-tooltip-content{\n\t\t\t\tpadding:10px;\n\t\t\t\tcolor:#000000;\n\t\t\t}",".cbar-tooltip[data-show] {\n\t\t\t\tdisplay: block;\n\t\t\t}",".cbar-tooltip #arrow{\n\t\t\t\tvisibility: hidden;\n\t\t\t\tposition: absolute;\n\t\t\t\twidth: 8px;\n\t\t\t\theight: 8px;\n\t\t\t\tbackground: inherit;\n\t\t\t}",".cbar-tooltip #arrow::before {\n\t\t\t\tvisibility: visible;\n\t\t\t\tcontent: '';\n\t\t\t\tposition: absolute;\n\t\t\t\twidth: 8px;\n\t\t\t\theight: 8px;\n\t\t\t\tbackground: inherit;\n\t\t\t\ttransform: rotate(45deg);\n\t\t\t}",".cbar-tooltip[data-popper-placement^='top'] > #arrow{\n\t\t\t\tbottom: -4px;\n\t\t\t}",".cbar-tooltip[data-popper-placement^='bottom'] > #arrow {\n\t\t\t\ttop: -4px;\n\t\t\t}",".cbar-tooltip[data-popper-placement^='left'] > #arrow {\n\t\t\t\tright: -4px;\n\t\t\t}",".cbar-tooltip[data-popper-placement^='right'] > #arrow {\n\t\t\t\tleft: -4px;\n\t\t\t}",".cbar-tooltip p{\n\t\t\t\tcolor:#000000;\n\t\t\t\tpadding:0;\n\t\t\t\tmargin:0;\n\t\t\t}",".cbar-tooltip-icon{\n\t\t\t\tz-index: 10;\n\t\t\t\tposition:absolute;\n\t\t\t}"].forEach((function(e){t.insertRule(e)}))}}},{key:"applyChanges",value:function(t){var e=this;this._injectCSS(),t.changes.forEach((function(t){var n=document.querySelector(t.selector);if(null!==n){void 0===cbarApp.cbarTooltip[t.index]&&(-1==t.index&&(t.index=Object.keys(cbarApp.cbarTooltip).length),cbarApp.cbarTooltip.splice(t.index,0,{icon:null,iconElement:null,iconPopper:null,tooltip:null,tooltipPopper:null,closeIcon:null,closeIconPosition:"tr",closeIconCss:{width:10,height:10,margin:0},eventType:"onmouseover",placement:{offset:[0,0],position:"auto",strategy:"absolute"}}));var r=cbarApp.cbarTooltip[t.index];r.selector=t.selector;var o=n.dataset.tooltipsChanges?JSON.parse(n.dataset.tooltipsChanges):{css:{}};if(t.hasOwnProperty("destroy"))e._destroyTooltip(n,r),["tooltipsHtmlChange","tooltipsIconChange","tooltipsCloseIconChange","tooltipsCloseIconCssChange","tooltipsCloseIconPositionChange","tooltipsPlacementChange","tooltipsChanges","tooltipsEventTypeChange","displayChanged","positionChanged"].forEach((function(t){void 0!==n.dataset[t]&&delete n.dataset[t]})),cbarApp.cbarTooltip.splice(t.index,1);else{if(t.hasOwnProperty("html")&&(e.createTooltipElement(n,t.html,r),n.dataset.tooltipsHtmlChange=1),t.hasOwnProperty("icon")&&(o.hasOwnProperty("icon")||(o.icon=t.icon),null==t.icon.src?e._removeIconElement(n,!0,r):e._createIconElement(n,t,r),r.icon=t.icon,r.icon.hasOwnProperty("positionRelative")&&"relative"==r.icon.strategy&&e._setIconRelativePosition(r,t.icon.positionRelative),n.dataset.tooltipsIconChange=1),n.dataset.tooltipsHtmlChange&&e._initTooltip(n,r),null!=r.tooltip){var i=r.tooltip;if(t.hasOwnProperty("eventType")?(o.hasOwnProperty("eventType")||(o.eventType=r.eventType),e.setEventChanges(n,t.eventType,r),r.eventType=t.eventType,n.dataset.tooltipsEventTypeChange=1):e.setEventChanges(n,r.eventType,r),t.hasOwnProperty("closeIcon"))if(o.hasOwnProperty("closeIcon")||(o.closeIcon=i.getAttribute("closeIcon")),"none"==t.closeIcon)null!=r.closeIcon&&(i.removeChild(r.closeIcon),delete r.closeIcon,n.dataset.tooltipsCloseIconChange=1);else{if(null==r.closeIcon){var a=document.createElement("img");a.style.position="absolute",i.insertBefore(a,i.firstChild),a.addEventListener("click",(function(t){t.target.parentElement.removeAttribute("data-show")})),r.closeIcon=a}r.closeIcon.src=t.closeIcon.src,n.dataset.tooltipsCloseIconChange=1}if(null!=r.closeIcon&&(t.hasOwnProperty("closeIconCss")&&(o.hasOwnProperty("closeIconCss")||(o.closeIconCss=r.closeIconCss),t.closeIconCss.forEach((function(t){r.closeIconCss[t.what]=t.value,r.closeIcon.style[t.what]=t.value.toString().length>0?t.value+"px":"initial"})),n.dataset.tooltipsCloseIconCssChange=1),t.hasOwnProperty("closeIconPosition"))){var c=["auto","auto","auto","auto"];switch(t.closeIconPosition){case"tl":c[0]=0,c[3]=0;break;case"tr":c[0]=0,c[1]=0;break;case"bl":c[2]=0,c[3]=0;break;case"br":c[1]=0,c[2]=0}r.closeIcon.style.inset=c.join(" "),o.hasOwnProperty("closeIconPosition")||(o.closeIconPosition=r.closeIconPosition),r.closeIcon.setAttribute("data-position",t.closeIconPosition),r.closeIconPosition=t.closeIconPosition,n.dataset.tooltipsCloseIconPositionChange=1}var s=parseInt(t.css.hasOwnProperty("border-radius")?t.css["border-radius"]:window.getComputedStyle(i,null).getPropertyValue("border-radius"));if(t.hasOwnProperty("placement")&&(r.tooltipPopper.setOptions({placement:t.placement.position,strategy:t.placement.strategy,modifiers:[{name:"offset",options:{offset:t.placement.offset}},{name:"arrow",options:{padding:e.getArrowPadding(s,t.placement.position)}}]}),r.placement=t.placement,n.dataset.tooltipsPlacementChange=1),t.css.hasOwnProperty("border-radius")){var l=t.hasOwnProperty("placement")?t.placement.position:r.tooltipPopper.state.options.placement;r.tooltipPopper.setOptions((function(t){return Z(Z({},t),{},{modifiers:[].concat(X(t.modifiers),[{name:"arrow",options:{padding:e.getArrowPadding(s,l)}}])})}))}var u=i.querySelector(".cbar-tooltip-content");Object.keys(t.css).forEach((function(e){o.css.hasOwnProperty(e)||(o.css[e]=parseInt(window.getComputedStyle(["background-color","opacity","border-radius"].includes(e)?i:u,null).getPropertyValue(e))),"border-radius"==e?i.style.setProperty(e,t.css[e]+"px","important"):["background-color","opacity"].includes(e)?(i.style.setProperty(e,t.css[e],"important"),i.querySelector("#arrow").style.setProperty(e,t.css[e],"important")):(u.style.setProperty(e,t.css[e],"important"),0==["text-align","text-decoration-line","padding-right","padding-left","padding-top","padding-bottom"].includes(e)&&u.querySelectorAll("*").forEach((function(n){0==("STRONG"==n.tagName&&"font-weight"==e)&&0==("EM"==n.tagName&&"font-style"==e)&&(n.style.setProperty(e,t.css[e],"important"),n.style.setProperty("line-height",t.css[e],"important"))})))}))}n.dataset.tooltipsChanges=JSON.stringify(o)}}}))}},{key:"_destroyTooltip",value:function(t,e){this._removeIconElement(t,!1,e),null!=e.tooltipPopper&&(e.tooltipPopper.destroy(),e.tooltipPopper=null),null!=e.tooltip&&(e.tooltip.parentNode.removeChild(e.tooltip),e.tooltip=null)}},{key:"_removeIconElement",value:function(t,e,n){if(null!=n.iconElement&&(null!=n.iconPopper&&n.iconPopper.destroy(),void 0!==t.dataset.displayChanged&&(t.style.display=t.dataset.displayChanged),void 0!==t.dataset.positionChanged&&(t.style.position=t.dataset.positionChanged),n.iconElement.parentNode.removeChild(n.iconElement),n.iconElement=null,n.iconPopper=null,e&&null!=n.tooltipPopper)){var r=n.tooltipPopper.state.options;n.tooltipPopper.destroy(),n.tooltipPopper=Object(W.createPopper)(null!=n.iconElement?n.iconElement:t,n.tooltip,r)}}},{key:"_setIconRelativePosition",value:function(t,e){if(null!=t.iconElement){Object.keys(e).forEach((function(n){t.iconElement.style[n]=e[n]}));var n=t.iconElement.getBoundingClientRect();!function t(e){if("BODY"!=e.tagName){var r=e.getBoundingClientRect();return(n.left<r.left||n.right>r.right||n.top<r.top||n.bottom>r.left)&&"hidden"==window.getComputedStyle(e).overflow&&"hidden"!=e.style.overflow&&(e.style.overflow="visible"),t(e.parentNode)}}(document.querySelector(t.selector))}}},{key:"_createIconElement",value:function(t,e,n){var r;if(null==n.iconElement?(r=document.createElement("img")).className="cbar-tooltip-icon":r=n.iconElement,r.src=e.icon.src,r.style.maxWidth=r.style.width=e.icon.width+"px",r.style.maxHeight=r.style.height=e.icon.height+"px","relative"==e.icon.strategy){var o=window.getComputedStyle(t);r.style.transform="initial",r.style.inset="initial",r.style.position="absolute",r.style.cssText+=" ","static"==o.position&&(t.setAttribute("data-position-changed",t.style.position),t.style.position="relative"),"inline"==o.display&&(t.setAttribute("data-display-changed",t.style.display),t.style.display="inline-block"),t.prepend(r)}else t.parentNode.appendChild(r,null!=t.nextSibling?t.nextSibling:t),null!=n.iconPopper&&n.iconPopper.destroy(),n.iconPopper=Object(W.createPopper)(t,r,{placement:e.icon.positionAbsolute,strategy:e.icon.strategy,padding:5,modifiers:[{name:"offset",options:{offset:[parseInt(e.icon.offsetSkidding),parseInt(e.icon.offsetDistance)]}},{name:"flip",enabled:!1}]}),this.refreshTooltip(t,n);n.iconElement=r}},{key:"refreshTooltip",value:function(t,e){if(void 0!==e&&null!=e.tooltipPopper){var n=null!=e.iconElement?e.iconElement:t;e.tooltipPopper.destroy(),e.tooltipPopper=Object(W.createPopper)(n,e.tooltip,{placement:e.placement.position,strategy:e.placement.strategy,padding:5,resize:!0,modifiers:[{name:"offset",options:{offset:e.placement.offset}}]})}}},{key:"createTooltipElement",value:function(t,e,n){var r;null!=n.iconElement&&n.iconElement,null==n.tooltip?((r=document.createElement("div")).className="cbar-tooltip",r.setAttribute("role","tooltip"),r.innerHTML='<div class="cbar-tooltip-content"></div><div id="arrow" data-popper-arrow></div>',document.querySelector("body").append(r),n.tooltip=r):r=n.tooltip,r.querySelector(".cbar-tooltip-content").innerHTML=e}},{key:"_initTooltip",value:function(t,e){var n=null!=e.iconElement?e.iconElement:t;e.tooltipPopper=Object(W.createPopper)(n,e.tooltip,{placement:e.placement.position,padding:5,resize:!0,modifiers:[{name:"offset",options:{offset:e.placement.offset}}]})}},{key:"getArrowPadding",value:function(t,e){var n={};return["top-start","bottom-start"].includes(e)&&(n.right=t),["top-end","bottom-end"].includes(e)&&(n.left=t),n}},{key:"focusHandler",value:function(t){var e=et(t);e.tooltip.setAttribute("data-show",""),e.tooltipPopper.update()}},{key:"blurHandler",value:function(t){var e=et(t);e.tooltip.removeAttribute("data-show"),e.tooltipPopper.update()}},{key:"clickHandler",value:function(t){var e=et(t),n=e.tooltip;null!=n.getAttribute("data-show")?n.removeAttribute("data-show"):n.setAttribute("data-show",""),e.tooltipPopper.update()}},{key:"cleanEvents",value:function(t,e){Object.keys(e).forEach((function(n){t.removeEventListener(n,e[n])}))}},{key:"setEventChanges",value:function(t,e,n){var r=this;n.eventType=e,n.tooltip.removeAttribute("data-show");var o=null!=n.iconElement?n.iconElement:t;this.cleanEvents(t,{mouseenter:this.focusHandler,focus:this.focusHandler,mouseleave:this.blurHandler,blur:this.blurHandler,click:this.clickHandler}),null!=n.iconElement&&this.cleanEvents(n.iconElement,{mouseenter:this.focusHandler,focus:this.focusHandler,mouseleave:this.blurHandler,blur:this.blurHandler,click:this.clickHandler}),"onmouseover"==e&&(["mouseenter","focus"].forEach((function(t){o.addEventListener(t,r.focusHandler)})),["mouseleave","blur"].forEach((function(t){o.addEventListener(t,r.blurHandler)}))),"onclick"==e&&o.addEventListener("click",this.clickHandler)}}])&&tt(e.prototype,n),r&&tt(e,r),t}(),rt=function(t){(new nt).applyChanges(t)};function ot(t){t||(t="");var e=t.match(/^(?:([^:\/?\#]+):)?(?:\/\/([^\/?\#]*))?([^?\#]*)(?:\?([^\#]*))?(?:\#(.*))?/);this.scheme=e[1]||null,this.authority=e[2]||null,this.path=e[3]||null,this.query=e[4]||null,this.fragment=e[5]||null}ot.prototype.toString=function(){var t="";return this.scheme&&(t+=this.scheme+":"),this.authority&&(t+="//"+this.authority),this.path&&(t+=this.path),this.query&&(t+="?"+this.query),this.fragment&&(t+="#"+this.fragment),t},function(){var t=/\/((?!\.\.\/)[^\/]*)\/\.\.\//;function e(e){if(!e)return"";var n=e.replace(/\/\.\//g,"/");for(n=n.replace(/\/\.$/,"/");n.match(t);)n=n.replace(t,"/");for(n=n.replace(/\/([^\/]*)\/\.\.$/,"/");n.match(/\/\.\.\//);)n=n.replace(/\/\.\.\//,"/");return n}ot.prototype.resolve=function(t){var n=new ot;return this.scheme?(n.scheme=this.scheme,n.authority=this.authority,n.path=e(this.path),n.query=this.query):(this.authority?(n.authority=this.authority,n.path=e(this.path),n.query=this.query):(this.path?("/"===this.path.charAt(0)?n.path=e(this.path):(n.path=function(t,e){return t.authority&&!t.path?"/"+e:t.path.match(/^(.*)\//)[0]+e}(t,this.path),n.path=e(n.path)),n.query=this.query):(n.path=t.path,this.query?n.query=this.query:n.query=t.query),n.authority=t.authority),n.scheme=t.scheme),n.fragment=this.fragment,n}}();var it,at=n(4),ct=n(7),st=n(11),lt=n(0),ut=n(2),ft=null,pt=function(t){if("IMG"===t.tagName)return t.src;var e="";return t.querySelectorAll("img").forEach((function(t){var n=t.getBoundingClientRect();n.height*n.width>0&&(e=t.src)})),e},dt=function(t){var e=null;if(t.hasOwnProperty(lt.a.KEY_GROUP)){var n=t[lt.a.KEY_GROUP]-1;e=at.a.getGroups()[n]}return e},ht=function(t){for(var e=t.target;null!==e;){if(e.hasOwnProperty(lt.a.KEY_ID)){var n=dt(e),r=null===n?null:n.hash,o=e.hasOwnProperty(lt.a.KEY_EXP_192);ct.a.addClick(e[lt.a.KEY_ID],pt(e),r,o);break}e=e.parentNode}},mt=function(t){t.forEach((function(t){var e=at.a.assignHashes(t.target);e.length>0&&gt(e)}))},yt=function(t,e){t.forEach((function(t){if(t.isIntersecting){if(t.target.hasOwnProperty(lt.a.KEY_ID)){var n=dt(t.target),r=null,o=t.target.hasOwnProperty(lt.a.KEY_EXP_192);null!==n&&(r=n.hash,ct.a.addGroup(r,n.selector)),ct.a.addViewed(t.target[lt.a.KEY_ID],r,o)}e.unobserve(t.target)}}))},gt=function(t){t.forEach((function(t){it.observe(t)}))},vt=function(){"S"!==cbar_pagetype?(document.addEventListener("click",ht),(ft=new MutationObserver(mt)).observe(document,{attributes:!1,childList:!0,subtree:!0}),it=new IntersectionObserver(yt,{threshold:.5}),gt(at.a.getAllElements()),document.addEventListener(lt.a.EVENT_MONITOR_STOP,(function(){Object(ut.a)("Monitoring disabled"),null!==ft&&(ft.disconnect(),ft=null),null!==it&&(it.disconnect(),it=null),document.removeEventListener("click",ht)}))):Object(ut.a)("Monitoring disabled on search page")},bt=function(){var t=cbar_gup(lt.a.REPORT_ACTIVATION_PARAM);if(""!==t&&S.a.session.create(lt.a.SESSION_TOKEN_KEY,t),null!==S.a.session.get(lt.a.SESSION_TOKEN_KEY)){var e=Date.now();return loadjscssfile_callback("https://www.gstatic.com/charts/loader.js","js",(function(){loadjscssfile(lt.a.DOMAIN+"/assets/css/click-monitor-report.css?r="+e,"css"),loadjscssfile(lt.a.DOMAIN+"/assets/js/dist/click-monitor-report.min.js?r="+e,"js")})),!0}return!1},wt=n(14),Ot=n(8),Et=!1,_t=function(){Et&&Ot.a.stopMonitoring(),document.addEventListener("cbar_pageview_complete",(function t(){(document.removeEventListener("cbar_pageview_complete",t),Ot.a.checkRequirements())?bt()||(Object(ut.a)("enabled"),Et=!0,at.a.init(),null!==ct.a.getStoredData()&&st.a.collect(ct.a.getStoredData()),ct.a.init(),vt(),cbarApp.clickMonitor.hasOwnProperty("customConfig")&&cbarApp.clickMonitor.customConfig.hasOwnProperty("simulation")&&wt.a.simulateOptimisation(cbarApp.clickMonitor.customConfig.simulation)):Object(ut.a)("Requirement check failed")}))};function St(t){return(St="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var xt,Pt,kt,At,It=function(t,e,n){var r=document.querySelector("#cbar_iframe_"+e+"_"+t).contentWindow.document;void 0===r.textrotate_interval&&(n.current=n.texts[0],n.rule_id=t,n.rule_type=e,n.iframeDoc=r,n.f_units=r.querySelectorAll(".cbar_text_rotator"),n.updateUnits=function(t){var e=n.opacity;n.f_units.forEach((function(n){n.style.opacity=e,n.style.filter="alpha(opacity="+100*e+")",void 0!==t&&(n.innerHTML=t)}))},n.rotate=function(t){return"object"!==St(document.querySelector("#cbar_iframe_"+t.rule_type+"_"+t.rule_id))||0===t.f_units.length?t.iframeDoc.textrotate_interval_cancel():(t.opacity=1,t.action="hide",void(void 0===t.iframeDoc.fadeOutInterval&&(t.iframeDoc.fadeOutInterval=setInterval((function(t){"hide"===t.action?(t.opacity-=.1,t.opacity<=0&&(t.action="show",t.opacity=0,t.current=t.texts[void 0!==t.texts[t.texts.indexOf(t.current)+1]?t.texts.indexOf(t.current)+1:0],t.updateUnits(t.current)),t.updateUnits()):(t.opacity+=.1,t.opacity>=1&&(t.opacity=1,t.action="hide",clearInterval(t.iframeDoc.fadeOutInterval),delete t.iframeDoc.fadeOutInterval),t.updateUnits())}),50,t))))},r.textrotate_interval_cancel=function(){return clearInterval(r.textrotate_interval),!1},r.textrotate_interval=setInterval(n.rotate,1e3*(parseInt(n.period)+1),n),document.addEventListener("visibilitychange",(function(){void 0!==r.textrotate_interval&&(clearInterval(n.iframeDoc.fadeOutInterval),clearInterval(r.textrotate_interval),delete n.iframeDoc.fadeOutInterval),"hidden"!==document.visibilityState&&(r.textrotate_interval=setInterval(n.rotate,1e3*(parseInt(n.period)+1),n))})))},jt=[{string:navigator.userAgent,subString:"Edge",identity:"Edge"},{string:navigator.userAgent,subString:"Chrome",identity:"Chrome"},{string:navigator.userAgent,subString:"OmniWeb",versionSearch:"OmniWeb/",identity:"OmniWeb"},{string:navigator.vendor,subString:"Apple",identity:"Safari",versionSearch:"Version"},{prop:window.opera,identity:"Opera",versionSearch:"Version"},{string:navigator.vendor,subString:"iCab",identity:"iCab"},{string:navigator.vendor,subString:"KDE",identity:"Konqueror"},{string:navigator.userAgent,subString:"Firefox",identity:"Firefox"},{string:navigator.vendor,subString:"Camino",identity:"Camino"},{string:navigator.userAgent,subString:"Netscape",identity:"Netscape"},{string:navigator.userAgent,subString:"MSIE",identity:"Explorer",versionSearch:"MSIE"},{string:navigator.userAgent,subString:"Trident",identity:"Explorer",versionSearch:"rv"},{string:navigator.userAgent,subString:"Gecko",identity:"Mozilla",versionSearch:"rv"},{string:navigator.userAgent,subString:"Mozilla",identity:"Netscape",versionSearch:"Mozilla"}],Ct=[{string:navigator.userAgent,subString:"Android",identity:"Android"},{string:navigator.platform,subString:"Win",identity:"Windows"},{string:navigator.platform,subString:"Mac",identity:"Mac"},{string:navigator.userAgent,subString:"iPhone",identity:"iPhone"},{string:navigator.userAgent,subString:"iPad",identity:"iPad"},{string:navigator.platform,subString:"Linux",identity:"Linux"}],Tt=function(t){for(var e=0;e<t.length;e++){var n=t[e].string,r=t[e].prop;if(At=t[e].versionSearch||t[e].identity,n){if(-1!==n.indexOf(t[e].subString))return t[e].identity}else if(r)return t[e].identity}return!1},Mt=function(t){var e=t.indexOf(At);return-1!==e&&parseFloat(t.substring(e+At.length+1))};xt=Tt(jt)||"An unknown browser",Pt=Mt(navigator.userAgent)||Mt(navigator.appVersion)||"an unknown version","iPhone"===(kt=Tt(Ct)||"an unknown OS")&&(navigator.appVersion.indexOf("CriOS")>-1&&(xt="Chrome"),navigator.appVersion.indexOf("FxiOS")>-1&&(xt="Firefox"));var Rt={browser:xt,version:Pt,OS:kt},Nt=[{name:".cbar-popup-label",rules:["display: block","position: absolute","bottom: 5px","top: auto","right: 5px","font-size: 8px","cursor: pointer"]},{name:".cbar-popup-label a",rules:["color: gray","margin-right: 10px","text-align: right"]},{name:".cbar-iframe-popup-label",rules:["color: gray","position: absolute","font-size: 9px","right: 10px","bottom: 10px"]},{name:".cbar-trust-message",rules:["float: right","font-size: 80%","opacity: 0.6","cursor: pointer"]},{name:".cbar-preview-wrapper",rules:["position: fixed","bottom: 20px","z-index: 2147483647","cursor: all-scroll"]},{name:".cbar-preview-box",rules:["font-size: 16px","padding: 10px","border: 1px solid gray","font-weight: bold","color: red","background: rgba(255, 255, 255, 0.9)","text-align: center"]},{name:".cbar-preview-msg",rules:["font-size: 11px","color: gray","width: 100%","line-height: 9px"]},{name:".cbar-preview-msg code",rules:["font-family: monospace","background-color: #fee","color: #e01e5a"]},{name:".cbar-preview-close",rules:["font-size: 15px","background: #1f86c8","color: #ddd","padding: 3px","cursor: pointer"]},{name:".cbar-overlay-image-box",rules:["height: 0","width: 0","margin: 0","padding: 0","z-index: 2147483646","display: inline","border: none","position: absolute","visibility: visible","overflow: visible"]},{name:".cbar-overlay-image-box img",rules:["position: relative","border: none","margin: 0","padding: 0"]},{name:".cbar-underlay",rules:["display: block","position: fixed","background: none repeat scroll 0% 0% rgb(17, 17, 17)","top: 0","left: 0"]},{name:".cbar-close-button",rules:["position: absolute","cursor: pointer","border: none","width: auto"]},{name:".cbar-wpask-hint",rules:["position: fixed","background-color: white","z-index: 9999999","top: 90px","left: 50%","padding: 25px","font-size: 18px","box-shadow: 0 0 50px black"]}],Dt=function(t,e){var n=cbar_create_stylesheet(e);t.forEach((function(t){var e=t.name+" {";t.rules.forEach((function(t){e+=t+";"})),e+="}",n.insertRule(e,n.cssRules.length)}))},Lt={renderDefaultStyles:function(){Dt(Nt,"cbar-main-styles")},renderStyles:Dt},Ht=function(t,e,n){if(cbar_use_cookies){var r="";if(void 0!==n){var o=new Date;o.setTime(o.getTime()+parseInt(24*n*60*60*1e3)),0!=n&&(r="; expires="+o.toGMTString())}document.cookie=t+"="+e+r+"; path=/; domain="+cbar_cookiedomain+"; secure; SameSite=Lax"}else document.cookie=t+"=0;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/; domain="+cbar_cookiedomain+"; secure; SameSite=Lax",0==n?S.a.local.create(t,e,parseInt(1800)):S.a.local.create(t,e,parseInt(24*n*60*60))};var qt={create:Ht,read:function(t){var e=function(t){for(var e=t+"=",n=document.cookie.split(";"),r=0;r<n.length;r++){for(var o=n[r];" "==o.charAt(0);)o=o.substring(1,o.length);if(0==o.indexOf(e))return o.substring(e.length,o.length)}return null};if(1==cbar_use_cookies){var n=e(t);if(null!==n)return n}var r=S.a.local.getRaw(t);if(null!==r){if(1==cbar_use_cookies){var o=parseInt((r.expire-(new Date).getTime()/1e3)/24/60/60);Ht(t,r.value,o)}return r.value}return null!==(r=S.a.session.get(t))?(1==cbar_use_cookies&&Ht(t,r,0),r):e(t)}};function zt(t){return(zt="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var Bt={},Vt=function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=null;"js"===e?((r=document.createElement("script")).setAttribute("type","text/javascript"),r.setAttribute("src",t),cbar_debug_log(t)):"css"===e&&((r=document.createElement("link")).setAttribute("rel","stylesheet"),r.setAttribute("type","text/css"),r.setAttribute("href",t)),null!==r&&(n&&(r.onload=n),document.getElementsByTagName("head")[0].appendChild(r))},Gt=function(t){var e=cbarApp.gaEvents[t]||null,n="";if(null!==e)if("function"==typeof ga){if(""!==e.tracker)ga("create",e.tracker,{name:"cbar"}),n="cbar.";else if(ga.hasOwnProperty("getAll")){var r=ga.getAll()[0];r&&(n=r.get("name")+".")}ga(n+"send","event",{eventCategory:e.category,eventAction:e.action,eventLabel:e.label,nonInteraction:e.isNonInteraction})}else"undefined"!=typeof _gat&&"undefined"!=typeof _gaq?(""!==e.tracker&&(_gat._createTracker(e.tracker,"cbar"),n="cbar."),_gaq.push([n+"_trackEvent",e.category,e.action,e.label,null,e.isNonInteraction])):"object"===("undefined"==typeof dataLayer?"undefined":zt(dataLayer))&&dataLayer.push({event:"cbarGTMEvent",eventCategory:e.category,eventAction:e.action,eventLabel:e.label})};cbarApp.cleanString=function(t){return decodeURIComponent(t.replace(/\+/g," "))},cbarApp.showImageOverlay=function(t){if(!cbar_suppress_rules.includes(t.ruleId)){var e=document.querySelectorAll(t.elementType+"["+t.attrName+"*='"+t.attrVal+"']");e.length>0&&e.forEach((function(e){var n=document.createElement("span");n.className="cbar-overlay-image-box",n.innerHTML='<img style="top:'+t.tbmargin+"px; left:"+t.lrmargin+'px" src="'+cbar_userimages+t.image+'">',""!==t.zIndex&&(n.style.zIndex=t.zIndex),e.parentNode.insertBefore(n,e)}))}};var Yt={cbar_add_css:function(t,e,n){try{t.insertRule?t.insertRule(e+"{"+n+"}"):t.addRule(e,n)}catch(t){cbar_log_console("Failed to add CSS")}},cbar_any2url:function t(e,n){var r=[];if("object"===zt(n))for(var o in n)n.hasOwnProperty(o)&&(r[r.length]=t(e+"["+encodeURIComponent(o)+"]",n[o]));else r[r.length]=e+"="+encodeURIComponent(n);return r.join("&")},cbar_cp_clicked:function(t,e,n,r){var o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,i=arguments.length>5&&void 0!==arguments[5]&&arguments[5];S.a.local.create("cp_wid_clk",{w:e,c:n,i:r,r:o}),!0===i?window.open(t):document.location=t},cbar_create_stylesheet:function(t){var e=document.getElementById(t);null!==e&&(e.disabled=!0,e.parentNode.removeChild(e));var n=document.createElement("style");return n.setAttribute("id",t),n.appendChild(document.createTextNode("")),document.head.appendChild(n),n.sheet},cbar_countdown_timer:function(t){var e=function(){Bt.hasOwnProperty(t)&&(clearInterval(Bt[t]),delete Bt[t])};e(),Bt[t]=setInterval((function(){var n=document.querySelector(".cbar_countdown"+t);if(null===n)return e(),!1;var r=n.getAttribute("secs_left");if(r--,n.setAttribute("secs_left",r),r<1)return e(),!1;var o=n.querySelectorAll(".time");for(var i in o){var a=o[i].getAttribute("unit_secs"),c=Math.floor(r/a);r-=c*a,1===c.toString().length&&(c="0"+c),o[i].innerHTML=c}}),1e3)},cbar_firecustomevent:function(t,e,n){var r=new CustomEvent(t,{bubbles:!0,cancelable:!0,detail:n});r.eventName=t,r.data=n||{},e.dispatchEvent(r)},cbar_getnums:function(t){var e=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=/\d+(\.\d|\,\d)?\d*(\.\d|\,\d)?\d*/gim,r=t.match(n);return null===r?[]:r.map((function(t){if(!1===e)return t;if(t.length<=2)return parseFloat(t);var n=","==t[t.length-3]||"."==t[t.length-3],r=","==t[t.length-2]||"."==t[t.length-2];return t=t.replace(/[^0-9]+/gim,""),n?parseFloat(t/100):r?parseFloat(t/10):parseFloat(t)}))},cbar_gup:function(t){t=t.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var e=new RegExp("[\\?&]"+t+"=([^&#]*)").exec(window.location.href);return null===e?"":e[1]},cbar_in_array:function(t,e){return e.includes(t)},cbar_insert_html:function(t,e,n){var r="string"==typeof t?document.querySelector(t):t;"object"===zt(r)&&null!==r&&r.insertAdjacentHTML(e,n)},cbar_listen:function(t,e,n){return e.addEventListener(t,n),!1},cbar_monitorelement:function(t,e,n){var r=0,o=setInterval((function(){var i=e();null!=i&&!1!==i&&(qt.read(t)!=i&&(qt.create(t,i,0),++r>5?clearInterval(o):n(i)))}),500)},cbar_monitorelement_inpage:function(t,e,n){var r=0,o=null,i=setInterval((function(){var t=e();if(null!=t&&!1!==t){if(null!==o){if(o===t)return;if(++r>10)return void clearInterval(i);n(t)}o=t}}),500)},cbar_refresh_recommendations:function(t){var e=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];if(e)for(var n=0;n<cbarApp.maxWidgetSlots;n++){var r=document.getElementById("cbar_widget"+n);null!==r&&r.parentNode.removeChild(r)}cbarApp.refreshRecommendations({pid:t})},cbar_waitforelement:function(t,e){var n=setInterval((function(){var r=document.querySelectorAll(t);r.length>0&&(clearInterval(n),"function"==typeof e&&e(r))}),500)},cbarDirectTriggerGAEvent:function(t){cbarApp.gaEvents[0]=t,Gt(0)},cbarGetAccurateLocation:function(t){var e="accurate-location"+t;S.a.session.get(e,!1)||(S.a.session.create(e,!0),navigator.geolocation&&navigator.geolocation.getCurrentPosition((function(e){cbar_late_update("geo_coordinates",(function(){return e.coords.longitude+":"+e.coords.latitude+":"+t}),!0)})))},cbarGetCategoryProducts:function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];return"undefined"==typeof cbarParseCategoryProducts?{products:[]}:t||null===cbarApp.categoryProductsCache?cbarApp.categoryProductsCache=cbarParseCategoryProducts():cbarApp.categoryProductsCache},cbarLoadData:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=[];""!==e&&"&"!==e[0]&&(e="&"+e),Object.keys(t).forEach((function(e){return r.push(e+"="+t[e])})),r.push("ts="+Math.ceil(1e4*Math.random()));var o=cbar_dynamic_url+cbar_datajs+"?"+r.join("&")+e;if(cbarApp.asyncDatajs){var i=new XMLHttpRequest;i.open("GET",o+"&xhr=1"),i.onreadystatechange=function(){4===i.readyState&&200===i.status&&(eval.call(window,i.responseText),"function"==typeof n&&n())},i.send()}else Vt(o,"js",n)},cbarTriggerGAEvent:Gt,loadjscssfile:Vt,loadjscssfile_callback:Vt};function Ut(t){return(Ut="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var Kt,Ft,Wt,Xt,Jt,$t,Zt,Qt=!1,te=!1,ee=!1,ne=[],re=(Kt=null,Ft=!1,Wt=!1,Xt=function(t,e){Wt=!0,te=t,Qt=e,Yt.cbar_firecustomevent("cbar_mouse_exit",document,{back_button:t,mouseout:e})},Jt=function(){var t,e,n,r,o=!1,i=null;if(null===Kt){Qt=!1,Kt=setInterval((function(){null!==i&&r==e&&r-i<-10&&e<80&&o&&Xt(n+2*(t-n)<150,!0),i=r,n=t,r=e}),100);var a=document.getElementsByTagName("html")[0],c="mouseleave",s="mouseenter";"onmouseleave"in a||(c="mouseout",s="mouseover"),a.addEventListener(c,(function(){o=!0})),a.addEventListener(s,(function(){o=!1})),window.addEventListener("mousemove",(function(n){(n.clientX||n.clientY)&&(t=n.clientX,e=n.clientY)}))}},$t=function(t){var e=function t(){window.removeEventListener("touchstart",t),window.removeEventListener("touchend",t),window.history.replaceState({cbarExitFlag:"exit"},""),window.history.pushState({cbarExitFlag:"normal"},"")};t&&(window.addEventListener("touchend",e),window.addEventListener("touchstart",e)),window.addEventListener("popstate",(function(t){t.state&&"exit"===t.state.cbarExitFlag&&(Wt?window.history.back():Xt(!1,!1))}))},Zt=function(){var t=0,e=0,n=!1;window.addEventListener("scroll",(function r(){var o=window.pageYOffset||document.documentElement.scrollTop,i=o-t>15,a=t-o>15;i&&(n=!0),n&&(e>window.innerHeight&&a&&(window.removeEventListener("scroll",r),Xt(!1,!1)),window.innerHeight>e&&(e=window.innerHeight)),t=i||a?o:t}))},function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if("Android"===Rt.OS||"iPhone"===Rt.OS||"iPad"===Rt.OS){if(!t.hasOwnProperty("allowMobile")||!1===t.allowMobile)return;if(Ft)return;Ft=!0;var e=S.a.session.get("cbar-back-detection"),n=null===e;$t(n),n&&S.a.session.create("cbar-back-detection",!0),Zt()}else Jt()}),oe=function(t,e){var n=null,r=function(){n=setTimeout((function(){ae(t)}),1e3*e)};window.addEventListener("scroll",(function(){null!==n&&clearTimeout(n),r()})),r()},ie=function(t){return!1!==Qt&&(!0!==te||1==cbar_sess_pv)&&ae(t)>0},ae=function t(e){var n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=0;return ne.forEach((function(o,i){o.ruleId===e&&(o.executed&&!n||"1"!=qt.read("cbar_pc_"+e)&&"1"!=qt.read("cbar_pc_"+cbar_sess+"_"+e)&&(ce(e),cbarApp.ruleSuppressed.hasOwnProperty(e)||(r++,ne[i].executed=!0,o.action(),t(e+"-after"))))})),r},ce=function(t){if(0!==t){var e=0;cbarApp.ruleVariations.hasOwnProperty(t)&&(e=cbarApp.ruleVariations[t]),Yt.cbarTriggerGAEvent(t),Yt.cbarLoadData({a:"delayed",sid:cbar_sid,uid:cbar_uid,rid:t,varid:e},cbar_abt_str),cbar_log_console("cbar rule "+t+" triggered")}},se={add:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:[];Yt.cbar_in_array(t,cbar_suppress_rules)||(ne.push({ruleId:t,action:e,executed:!1}),n.forEach((function(n){if("function"!=typeof n){var r="code",o=null;if("object"===Ut(n)){if(!n.hasOwnProperty("type"))return;r=n.type,o=n}else"string"!=typeof n&&cbar_log_error("Unknown delay condition for rule #"+t);switch(r){case"delayed":setTimeout((function(){ae(t)}),1e3*o.time);break;case"exit-v1":re(),window.addEventListener("beforeunload",(function(e){if(!ee)return ie(t)&&(e.preventDefault(),""!==o.message)?(e.returnValue=o.message,o.message):void 0}));break;case"exit-v2":re(o),document.addEventListener("cbar_mouse_exit",(function(){ee||!1!==te&&1!=cbar_sess_pv||ae(t)}));break;case"noactivity":new oe(t,o.time)}}else n(t,e)})))},remove:function(t){ne=ne.filter((function(e){return e.ruleId!=t}))},run:ae,reset:function(){return ne=[]},report:ce,tweak:function(t){switch(t){case"no-mouse-exit":ee=!0}}};function le(){return(le=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(t[r]=n[r])}return t}).apply(this,arguments)}var ue=u.a.register("Report Click","#baf3d1"),fe=function(t){if(!navigator.sendBeacon){var e="Beacon API not supported";return ue(e),void cbar_log_error("".concat("Report Click",": ").concat(e))}var n=le({siteId:cbar_sid,userId:cbar_uid,pagetype:cbar_pagetype,productId:cbar_pid,categoryId:cbar_cid,variation:cbar_abt},t),r=new FormData;Object.keys(n).forEach((function(t){return r.append(t,n[t])})),navigator.sendBeacon("https://www.barilliance.net/api/report/click",r)};window.cbarApp.reportClick=fe;var pe={cbar_click:function(t){return fe({clickedProductId:t.getAttribute("idx"),rectype:t.getAttribute("rectype")}),!1},cbar_click2:function(t,e,n,r){var o={rectype:n};return"bannerPopupEtc"!==n?(t.href=e,o.clickedProductId=r):(o.ruleId=r,cbarApp.gaClickEvents.hasOwnProperty(r)&&Yt.cbarDirectTriggerGAEvent(cbarApp.gaClickEvents[r])),fe(o),!0},cbar_click3:function(t,e,n,r,o){for(var i=0,a=0,c=0;c<cbar_results.length;c++)for(var s=0;s<cbar_results[c].length;s++)if(cbar_results[c][s][0]==r){i=c,a=cbar_results[c][s][26],c=cbar_results.length;break}return fe({rectype:n,clickedProductId:r,originalProductId:o,widgetId:i,promotedRuleId:a}),t.href=e,!0}};window.cbarApp.DraggableElement=r.a,window.cbarApp.DebounceCall=o.a,window.cbarApp.delayed=se,window.cbarApp.storage=S.a,window.cbarRequestPushToken=q,window.cbarStartRealtimeMessages=K,window.cbarVisualEditorChanges=F,window.cbarTooltipsEditorChanges=rt,window.cbarApp.badjeInjector=w,window.cbarApp.bannerInjector=E,window.cbarApp.productElementDetetor=_,window.cbarApp.clickMonitor.run=_t,window.cbarApp.clickMonitor.predictOptimisation=wt.a.predictOptimisation,window.cbarApp.textRotator=It,window.cbar_BrowserDetect=Rt,window.cbarApp.styles=Lt,window.cbar_createCookie=qt.create,window.cbar_readCookie=qt.read,[Yt,pe].forEach((function(t){Object.keys(t).forEach((function(e){return window[e]=t[e]}))}))}]);


	cbarApp.refreshRecommendations = function(customConfig, callback) {
		cbar_results = [];
		cbar_subproducts = [];

		var config = {
			a: 'refrecs',
			sid: cbar_sid,
			uid: cbar_uid,
			pid: encodeURIComponent(cbar_pid),
			url: cbar_url_en,
			flow: cbar_flow,
			pt: cbar_pagetype,
			subattr: cbar_subproducts_attrib
		};

		if (typeof customConfig === 'object') {
			for (var key in customConfig) {
				if (!customConfig.hasOwnProperty(key)) {
					continue;
				}
				config[key] = customConfig[key];
			}
		}

		cbarLoadData(config, cbar_data_params + 
			'&' + cbar_any2url('attu', cbar_user_attributes) + 
			'&' + cbar_any2url('attu1', cbar_user_attribute) + 
			'&' + cbar_any2url('attrecs', cbarApp.recsAttributes)
		, callback);
	};

	// data from server
	function cbar_data_returned() {
		if ((cbar_widget || cbar_RECSV2) && cbar_widget_show) {
			if (typeof cbar_after_load === 'function') {
				cbar_after_load('widget');
			}
			if(typeof cbar_data_returned_widget === 'function'){
				cbar_data_returned_widget(false);
			}
		}
		if (cbar_RECSV2 && cbar_widget_show && (typeof cbar_after_show === 'function')) {
			cbar_after_show('widget');
		}
		
		return 1;
	}
	
	function cbar_em_com(com) {
		var str = '';
		if (cbar_ipuid_get) {
			str += "&ipuidget=true";
		}
		if (cbar_ipuid_save) {
			str += "&ipuidsave=true";
		}
		
		cbarLoadData({
			sid: cbar_sid,
			uid: cbar_uid,
			ec: (com ? '1' : '0')
		}, str + cbar_abt_str);
	}

	function cbar_em_optout(opt, optionalemail) {
		var str = '';
		if (cbar_ipuid_get) {
			str += "&ipuidget=true";
		}
		if (cbar_ipuid_save) {
			str += "&ipuidsave=true";
		}
		
		cbarLoadData({
			a: 'opt',
			sid: cbar_sid,
			uid: cbar_uid,
			opt: (opt ? '1' : '0'),
			optionalemail: encodeURIComponent(optionalemail)
		}, str + cbar_abt_str);
	}

	// called from input box change event or directly
	function cbar_em_change(e) {
		var value = '';

		if (typeof window.cbar_globals['block_email_capture'] !== 'undefined') {
			return;
		}

		if (typeof e === 'string') {
			value = e;
		} else {
			// from event
			var targ;
			if (!e) {
				e = window.event;
			}
			if (e.target) {
				targ = e.target;
			} else if (e.srcElement) {
				targ = e.srcElement;
			}
			if (targ.nodeType == 3) {
				targ = targ.parentNode; //safari
			}

			if (typeof targ.value === 'string') {
				value = targ.value;
			} else if (typeof this.value === 'string') {
				value = this.value;
			} else {
				return;
			}
		}

		if (value !== cbar_e_last) {
			if (value.match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/gi) !== null) {
				cbarLoadData({
					sid: cbar_sid,
					uid: cbar_uid,
					e: encodeURIComponent(value),
					e_com: cbar_e_com ? 'true' : ''
				}, cbar_abt_str);
			}
		}

		cbar_e_last = value;
	}

	function cbar_em_listen(input_element) {
		input_element.addEventListener('blur', cbar_em_change);
		input_element.addEventListener('keyup', cbar_em_change);
		setTimeout(function() {
			if (input_element.value != '') {
				cbar_em_change(input_element.value);
			}
		}, 1000);
	}

	function cbar_optin_send(data_type, value, comment) {
		if (typeof window.cbar_globals['block_email_capture'] !== 'undefined') {
			return;
		}
		if (typeof window.cbar_globals['optin_wait'] === 'undefined') {
			window.cbar_globals['optin_wait'] = 0;
		}
		if (window.cbar_globals['optin_wait'] > 0) {
			setTimeout(function() { 
				cbar_optin_send(data_type, value, comment);
			}, 300);
			return;
		}

		window.cbar_globals['optin_wait']++; // will be -- from the script output

		cbarLoadData({
			a: 'optinout',
			sid: cbar_sid,
			uid: cbar_uid,
			dt: data_type,
			v: Boolean(value),
			co: encodeURIComponent(comment)
		});

		setTimeout(function() { 
			cbar_em_check_sending(false);
		}, 800);
	}

	// data_type - general_optin, gdpr_optin, triggered_optin, marketing_optin, cookie_optin
	function cbar_optin_listen_checkbox(data_type, element, comment) {
		element.addEventListener('click', function(e) { 
			cbar_optin_send(data_type, e.target.checked, comment);
		});
	}

	function cbar_optin_listen_radio(data_type, yes_element, no_element, comment) {
		yes_element.addEventListener('change', function() { 
			cbar_optin_send(data_type, true, comment);
		});
		no_element.addEventListener('change', function() { 
			cbar_optin_send(data_type, false, '');
		});
	}

	function cbar_optin_listen_cookie(data_type, cookie_name, cookie_values) {
		setInterval(function() {
			var val = cbar_readCookie(cookie_name);
			var prevval = cbarApp.storage.local.get(cookie_name);
			if (val === null) {
				return;
			}
			
			if (val != prevval) {
				cbarApp.storage.local.create(cookie_name, val);
				if (cbar_in_array(val, cookie_values)) {
					cbar_optin_send(data_type, true, 'cookie ' + cookie_name + ' value:' + val);
				} else {
					cbar_optin_send(data_type, false, 'cookie ' + cookie_name + ' exists but optin values not found');
				}
			}
		}, 1000);
	}

	function cbar_optin_listen_input(type, input_element, required_and, required_or, comment) {
		window.cbar_globals[type + '_required_and'] = required_and; 
		window.cbar_globals[type + '_required_or'] = required_or; 
		window.cbar_globals[type + '_comment'] = comment;
		
		input_element.addEventListener('blur', function() {
			window.cbar_globals[type] = input_element.value; 
			if (typeof cbar_optin_carry_email !== 'undefined' && cbar_optin_carry_email) {
				cbar_createCookie('cbar_' + type, input_element.value, 10 / (24 * 60));
			}
			cbar_em_check_sending(false);
		});
		
		input_element.addEventListener('keyup', function() {
			window.cbar_globals[type] = input_element.value; 
			try {
				clearTimeout(window.cbar_globals['timer']);
			} catch(e) {
				return null;
			}
			window.cbar_globals['timer'] = setTimeout(function() { 
				cbar_em_check_sending(false);
			}, 500);
		});
	}

	function cbar_optin_listen_submit(submit_button) {
		window.cbar_globals['submit_required'] = true;
		submit_button.addEventListener('mousedown', function() {  
			cbar_em_check_sending(true);
		});
	}

	function cbar_em_check_sending(submit_click) {
		if ((typeof window.cbar_globals['submit_required'] !== 'undefined') && !submit_click) {
			return;
		}
		if (typeof window.cbar_globals['block_email_capture'] !== 'undefined') {
			return;
		}

		if (window.cbar_globals['optin_wait'] > 0) {
			setTimeout(function() { 
				cbar_em_check_sending(submit_click);
			}, 300);
			return;
		}
		
		['em', 'ph'].map(function(dtype) {
			if (typeof window.cbar_globals[dtype + '_required_and'] !== 'undefined') {
				for (var i = 0; i < window.cbar_globals[dtype + '_required_and'].length; i++) {
					if (
						typeof window.cbar_globals[window.cbar_globals[dtype + '_required_and'][i]] === 'undefined' || 
						window.cbar_globals[window.cbar_globals[dtype + '_required_and'][i]] != true
					) {
						return;
					}
				}

				var passed = window.cbar_globals[dtype + '_required_or'].length === 0;
				
				for (var i = 0; i < window.cbar_globals[dtype + '_required_or'].length; i++) {
					if (
						typeof window.cbar_globals[window.cbar_globals[dtype + '_required_or'][i]] !== 'undefined' && 
						window.cbar_globals[window.cbar_globals[dtype + '_required_or'][i]] == true
					) {
						passed = true;
					}
				}
				if (!passed) {
					return;
				}

				if (
					typeof cbar_optin_carry_email !== 'undefined' && 
					cbar_optin_carry_email && 
					typeof window.cbar_globals[dtype] === 'undefined'
				) {
					window.cbar_globals[dtype] = cbar_readCookie('cbar_' + dtype);
				}

				if (
					dtype == 'em' && 
					typeof window.cbar_globals['em'] !== 'undefined' && 
					window.cbar_globals['em'] != null && 
					window.cbar_globals['em'].match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/gi) !== null
				) {
					cbarLoadData({
						sid: cbar_sid,
						uid: cbar_uid,
						e: encodeURIComponent(window.cbar_globals['em']),
						co: encodeURIComponent(window.cbar_globals['em_comment'])
					});
				}

				if (dtype == 'ph' && typeof window.cbar_globals['ph'] !== 'undefined' && window.cbar_globals['ph'] != null) {
					cbarLoadData({
						sid: cbar_sid,
						uid: cbar_uid,
						ph: encodeURIComponent(window.cbar_globals['ph']),
						co: encodeURIComponent(window.cbar_globals['ph_comment'])
					});
				}
			}
		});
	}
	
	function cbar_log_event(msg) {
		cbar_uid = cbar_readCookie('cbar_uid');
		loadjscssfile(cbar_dynamic_url + 'logger.js.php?a=lg&sid=' + cbar_sid + '&uid=' + cbar_uid + '&lo=' + 
			encodeURIComponent(msg) + cbar_abt_str + '&ts=' + Math.ceil(10000 * Math.random())+'&version='+cbar_version, 'js');
	}

	function cbar_log_error(msg, stack) {
		cbar_uid = cbar_readCookie('cbar_uid');
		var url = cbar_dynamic_url + 'logger.js.php?sid=' + cbar_sid + '&uid=' + cbar_uid + '&elo=' + 
			encodeURIComponent(msg) + cbar_abt_str + '&url=' + encodeURIComponent(window.location.href) + 
			'&browser=' + encodeURIComponent(navigator.appCodeName + ' ' + navigator.appVersion);
		if (stack) {
			url += '&stack=' + encodeURIComponent(stack);
		}
		loadjscssfile(url+'&version='+cbar_version, 'js');
	}

	function cbar_log_console(msg) {
		if (cbar_debug == 0) {
			return;
		}
		window.console && console.log(msg);
	}

	function cbar_debug_log(url) {
		if (cbar_debug < 2) {
			return;
		}

		var sstr = url.split("?");
		var s = sstr[1].split('&');

		for (var i = 0; i < s.length; i++) {
			cbar_log_console(s[i]);
		}
	}

	function cbar_div_popup_show(
		rule_id, popup_width, popup_height, popup_top, img_url, 
		html, img_is_background, img_width, img_height, token, 
		replace_encoded, embed_data, popup_close, border, bordercol, 
		backg, darken, corner, close_butt_pos, close_butt_id, 
		close_butt_size, close_butt_offset,close_custom
	) {
		if (typeof img_is_background !== 'boolean') {
			return; // remove this. only used temporarily to suppress old cached cbar.js until changes are cached.
		}

		if (cbar_in_array(rule_id, cbar_suppress_rules)) {
			return; // allow suppressing by js action
		}

		// dont show popup if user closed it (and not preview from control panel) (rule_id=0)
		if (
			(cbar_preview_rules == '') && 
			(cbar_readCookie('cbar_pc_' + rule_id) == '1' || cbar_readCookie('cbar_pc_' + cbar_sess + '_'+ rule_id) == '1')
		) {
			return;
		}

		if (img_is_background) {
			popup_width = img_width + 'px';
			popup_height = img_height + 'px';
		}

		var popupDiv = window.document.createElement('div');
		popupDiv.id = 'cbar_popup_' + rule_id;
		popupDiv.className = 'cbar_popup';
		popupDiv.setAttribute('rule_id', rule_id);
		var clientheight = document.body.clientHeight;

		if (popup_width == '') {
			popup_width = 'auto';
		}
		if (popup_width == parseInt(popup_width)) {
			popup_width = popup_width + 'px';
		}
		popupDiv.style.width = popup_width;
		
		popupDiv.popup_close = popup_close;

		if (popup_height == '')	{
			popup_height = 'auto';
		}
		if (popup_height == parseInt(popup_height)) {
			popup_height = popup_height + 'px';
		}
		popupDiv.style.height = popup_height;

		if (popup_top == '') {
			popup_top = '100px';
		}
		if (popup_top == parseInt(popup_top)) {
			popup_top = popup_top + 'px';
		}
		popupDiv.style.top = popup_top;

		if (img_is_background) {
			popupDiv.style.background = "transparent url('" + cbar_userimages + img_url + "') no-repeat left top";
		} else {
			popupDiv.style.background = backg;
		}

		popupDiv.style.boxSizing = 'content-box';
		popupDiv.style.border = border + 'px solid ' + bordercol;
		popupDiv.style.zIndex = cbar_zindex ;

		if (corner > 0) {
			popupDiv.style.borderRadius = corner + 'px';
			popupDiv.style.MozBorderRadius = corner + 'px';
			popupDiv.style.WebkitBorderRadius = corner + 'px';
		}
		var popup_html = '';
		
		var css_position = '';
		
		if (close_butt_pos != '') {
			if (close_butt_pos.search('t') > -1) {
				css_position += 'top: 1px; bottom: auto;'; 
			}
			if (close_butt_pos.search('b') > -1) {
				css_position += 'top: auto; bottom: 1px;'; 
			}
			if (close_butt_pos.search('l') > -1) {
				css_position += 'left: 1px; right: auto;';
			}
			if (close_butt_pos.search('r') > -1) {
				css_position += 'left: auto; right: 1px;';
			}
		} else {
			css_position += 'top: -15px; right: -15px;';
		}
		
		var close_icon;
		if (typeof close_custom !== 'undefined' && close_custom != null) {
			close_icon = close_custom.url;
			if (close_custom.size != '') {
				css_position = 'width:' + close_custom.size + 'px;';
			}

		} else if (close_butt_id > -1 && close_butt_size > -1) {
			close_icon = cbar_static_url + 'img/close_buttons/close' + close_butt_id + '_' + close_butt_size + '.png';
		} else {
			close_icon = cbar_static_url + 'img/common/dialog_close.png';
		}

		popup_html += '<img src="' + close_icon + '" class="cbar-close-button" style="' + css_position + 
			'margin: ' + close_butt_offset + 'px;" onclick="cbar_close_popup(' + rule_id + ');">';
		
		var img_html = (img_url != '') ? '<img src="' + cbar_userimages + img_url + '" style="border:none">' : '';
		if (img_is_background) {
			img_html = '';
		}

		popup_html += '<div style="width: auto; margin: 0 0 0 0; height: auto; background: transparent; display: block;">' +
			img_html + cbarApp.cleanString(html);

		if (token != '') {
			// dynamic token. used in 'Get Coupon button' switch button token with html
			popup_html = popup_html.replace(token, cbarApp.cleanString(replace_encoded));
		}

		// embed external forms in the popup
		if  (embed_data !== false) {
			var noscroll = embed_data.scrollbars == 'on' ? '' : 'scrolling="no"';
			var embed_html = '<iframe src="' + embed_data.url + '" width="' + embed_data.width + '" height="' + 
				embed_data.height + '" frameborder="0" ' + noscroll + ' allowTransparency="true"></iframe>';
			popup_html = popup_html.replace('%embed_form%', embed_html);
		}

		popup_html += ' </div>';

		if (!cbarApp.isWhiteLable) {
			popup_html += ' <div class="cbar-popup-label"><a href="http://www.barilliance.com">powered by Barilliance</a></div>';
		}

		popupDiv.innerHTML = popup_html;
		popupDiv.style.display = 'block';
		popupDiv.style.visibility = 'visible';

		// reset inherited CSS
		loadjscssfile(cbar_static_url + 'popup.css', 'css');
		window.document.body.appendChild(popupDiv);

		// darken under popup
		if (darken > 0) {
			var cbar_underlay = window.document.createElement('div');
			var clientwidth = document.body.clientWidth;
			
			cbar_underlay.id = 'cbar_underlay_' + rule_id;
			cbar_underlay.className = 'cbar-underlay';
			cbar_underlay.style.opacity = darken;
			cbar_underlay.style.zIndex = cbar_zindex - 1;
			cbar_underlay.style.height = clientheight + 'px';
			cbar_underlay.style.width = clientwidth + 'px';
			cbar_underlay.onclick = function() {
				cbar_close_popup(rule_id);
				return false;
			};

			window.document.body.appendChild(cbar_underlay);
		}

		cbar_popups.push(popupDiv);
		cbar_popups_position();
		popupDiv.addEventListener('click', function(evt) {
			if (evt.target.tagName == 'A' && evt.target.className != 'cbar-close-button') {
				cbar_click2(null, null, 'bannerPopupEtc', rule_id);
			}
		});
		//window.addEventListener('scroll', cbar_popup_scroll_event);
		window.addEventListener('resize', cbar_popups_position);
	}

	function draw_close_button(ruleId, ruleType) {
		var closebtn = cbarApp.closeButtons[ruleId + '|' + ruleType];
		var cssPosition = '';
		if (closebtn.pos != '') {
			if (closebtn.pos.search('t') > -1) {
				cssPosition += 'top: 1px; bottom: auto;'; 
			}
			if (closebtn.pos.search('b') > -1) {
				cssPosition += 'top: auto; bottom: 1px;'; 
			}
			if (closebtn.pos.search('l') > -1) {
				cssPosition += 'left: 1px; right: auto;';
			}
			if (closebtn.pos.search('r') > -1) {
				cssPosition += 'left: auto; right: 1px;';
			}
		} else {
			cssPosition += 'top: -15px; right: -15px;';
		}
		
		var closeIcon = cbar_static_url + 'img/common/dialog_close.png';
		if (typeof closebtn.custom !== 'undefined' && closebtn.custom != null && closebtn.custom.url != '') {
			closeIcon = closebtn.custom.url;
			if (closebtn.custom.size != '') {
				cssPosition += 'width:' + closebtn.custom.size + 'px;';
			}
		} else if (closebtn.icon > -1 && closebtn.size > -1) {
			closeIcon = cbar_static_url + 'img/close_buttons/close' + closebtn.icon + '_' + closebtn.size + '.png';
		}
		let onClickString = 'cbar_close_popup2(' + ruleId + ', \'' + ruleType + '\');';
		if (ruleType === 'POP') {
			onClickString = 'cbar_close_popup(' + ruleId + ');';
		}
		return '<img src="' + closeIcon + '" class="cbar-close-button" style="z-index: 1; ' + cssPosition + ' margin: ' + 
			closebtn.offset + 'px;" onclick="' + onClickString + 'e = window.event || e; e.stopPropagation(); return false;">';
	}

	function cbar_POP2_show(rule_id, args) {
		if (cbar_in_array(rule_id, cbar_suppress_rules)) {
			return; // allow suppressing by js action
		}

		if (
			(cbar_preview_rules == '') &&
			(cbar_readCookie('cbar_pc_' + rule_id) == '1' || cbar_readCookie('cbar_pc_' + cbar_sess + '_'+ rule_id) == '1')
		) {
			return;
		}

		if (args.type != 'LPB' && document.getElementById('cbar_' + args.type + '_' + rule_id) !== null) {
			return;
		}

		var pop2 = {
			css_rules: {
				vpos: {
					t: ['top:0;', '0'],
					b: ['top:100%;', '-100%'],
					c: ['top:50%;', '-50%']
				},
				hpos: {
					l: ['left:0;', '0'],
					c: ['left:50%;', '-50%'],
					r: ['left:100%;', '-100%']
				}
			},
			css_var_supported: function() {
				return (typeof window.CSS !== 'undefined') && window.CSS.supports('color', 'var(--fake-var)');
			},
			to_css_var: function(name, value) {
				return (pop2.css_var_supported() ? 'var(--my-' + name + ', ' + value + ') !important' : value) + ';';
			},
			resize_popiframe: function(arg, type, what, size) {
				if (pop2.css_var_supported()) {
					arg[type].style.setProperty("--my-" + what, size, 'important');
				} else {
					arg[type].style.cssText += what + ':' + size + '!important;';
				}
			},
			iframeHeight:function(arg) {							
				if (typeof arg.iframe.contentWindow === 'undefined' || arg.iframe.contentWindow == null) {
					return false;
				}
				return parseFloat(window.getComputedStyle(arg.iframe.contentWindow.document.body).height);
			},
			recalc_wh: function(arg, resize) {
				if (typeof resize === 'undefined') {
					resize = false;
				}
				pop2.scr = [window.innerWidth, window.innerHeight];
				if ((cbar_BrowserDetect.browser === 'Safari') && (cbar_BrowserDetect.version <= 9)) {
					var zoom = document.documentElement.clientWidth / window.innerWidth;
					if (zoom != 1) {
						pop2.scr = [window.innerWidth * zoom, window.innerHeight * zoom];
					}
				}
				if (arg.type == 'LPB') {
					pop2.scr[0] = parseFloat(window.getComputedStyle(document.getElementById(arg.place_id)).width);
				} else if (arg.type != 'MSG2') {
					pop2.scr[0] -= 40;
					pop2.scr[1] -= 40;
				}
				var wp = (arg.pop_min_size > pop2.scr[0]) ? arg.pop_min_size : arg.pop_max_size;
				if (arg.type != 'LPB') {
					wp -= 20;
				}
				var w = wp;
				if (pop2.scr[0] < wp) {
					wp = pop2.scr[0];
					if (arg.type == 'LPB') {
						w = wp;
					}
				}
				var scaleW = wp / w;
				if (arg.type == 'MSG2') {
					pop2.resize_popiframe(arg, 'iframe', 'width', w > wp ? w + 'px' : '100%');
					pop2.gms = function(scaleW, arg) {
						var h = pop2.iframeHeight(arg);
						if (typeof arg.trans !== 'undefined') {
							arg.iframe.style.cssText += pop2.get_trance_css(scaleW, 0, 0);
						}
						var height = (h * scaleW);						
						pop2.resize_popiframe(arg, 'popup', 'height', height + 'px');
						pop2.resize_popiframe(arg, 'iframe', 'height', h + 'px');
						if (arg.location == 'toppush') {
							window.document.body.style.cssText += 'margin-top:' + height + 'px;';
							if (typeof arg.fixedHeader !== 'undefined') {
								var elems = window.document.body.querySelectorAll(arg.fixedHeader);
								for (var i = 0; i < elems.length; i++) {
									if (elems[i].classList.contains('barilliance-modified')) {
										elems[i].style.marginTop = (elems[i].getAttribute('initMarginTop') + height) + 'px';
									} else {
										elems[i].setAttribute('oldStyle', elems[i].style.cssText);
										elems[i].classList.add('barilliance-modified');
										var initMargintTop = parseInt(window.getComputedStyle(elems[i]).marginTop);
										elems[i].setAttribute('initMarginTop', initMargintTop);
										elems[i].style.marginTop = (initMargintTop + height) + 'px';
									}																		
								}
							}
						}
						return {
							s: 1,
							w: wp,
							h: height
						};
					};
					setTimeout(pop2.gms, 1, scaleW, arg);
					return pop2.gms(scaleW, arg);
				} else {
					if (resize && (pop2.lastw == w)) {
						var h = pop2.iframeHeight(arg);
						var hp = h;
						if (hp > pop2.scr[1]) {
							hp = pop2.scr[1];
						}
						if (typeof arg.trans !== 'undefined') {
							arg.popup.style.cssText += pop2.get_trance_css(Math.min(scaleW, hp / h), arg.trans[0], arg.trans[1]);
						}
						pop2.lastw = w;
						return;
					}
					pop2.lastw = w;

					pop2.resize_popiframe(arg, 'iframe', 'width', w + 'px');
					pop2.resize_popiframe(arg, 'popup', 'width', w + 'px');
					pop2.gps = function(scaleW, arg) {
						var h = pop2.iframeHeight(arg);
						var hp = h;
						if (hp > pop2.scr[1]) {
							hp = pop2.scr[1];
						}
						var scale = Math.min(scaleW,hp / h);
						if (typeof arg.trans !== 'undefined') {
							arg.popup.style.cssText += pop2.get_trance_css(scale, arg.trans[0], arg.trans[1]);
						}
						pop2.resize_popiframe(arg, 'popup', 'height', h + 'px');
						pop2.resize_popiframe(arg, 'iframe', 'height', h + 'px');
						if (arg.type == 'LPB') {
							pop2.resize_popiframe(arg, 'lpb_div', 'height', h + 'px');
						}
						return {
							s: scale,
							w: wp,
							h: hp
						};
					};
					setTimeout(pop2.gps, 1, scaleW, arg);
					return pop2.gps(scaleW, arg);
				}
			},
			get_trance_css: function(scale, x, y) {
				return '-webkit-transform: scale(' + scale + ') translate(' + x + ',' + y + ');transform:scale(' + scale + ') translate(' + x + ',' + y + ');';
			},
			onloadImages: function(arg) {
				var imgs = arg.iframe.contentWindow.document.querySelectorAll('img');
				arg.imgLd = imgs.length;
				if (!arg.imgLd) {
					pop2.render(arg);
					pop2.loadIndex = 0;
					pop2.lastHeight = pop2.iframeHeight(arg);
					if (pop2.lastHeight === false) {						
						return;
					}
					pop2.waitIntval = setInterval(function(pop2, arg) {
						if (pop2.lastHeight != pop2.iframeHeight(arg)) {
							pop2.recalc_wh(arg);
							clearInterval(pop2.waitIntval);
						}
						if (pop2.loadIndex > 100) {
							clearInterval(pop2.waitIntval);
						}
						pop2.loadIndex++;
					}, 1, pop2, arg);
					return;
				}

				setTimeout(function(arg) {
					if (arg.imgLd) {
						pop2.render(arg);
						pop2.recalc_wh(arg);
						return;
					}
				}, 1000, arg);

				for (var i in imgs) {
					if (!imgs.hasOwnProperty(i)) {
						continue;
					}
					if (imgs[i].complete) {
						arg.imgLd--;
					} else {
						imgs[i].addEventListener('load', function() {
							arg.imgLd--;
							if (!arg.imgLd) {
								pop2.render(arg);
								pop2.recalc_wh(arg);
							}
						});
					}
					if (!arg.imgLd) {
						pop2.render(arg);
						pop2.recalc_wh(arg);
						return;
					}
				}
			},
			getParents:function (elem, arg) {
				var parents = [];
				for ( ; elem && elem !== arg.iframe.contentWindow.document && elem; elem = elem.parentNode ) {
					parents.push(elem);
				}
				return parents;
			},
			render: function(arg) {
				if (typeof arg.rendered !== 'undefined') {
					return false;
				}
				arg.rendered = true;
				if (typeof args.scripts != 'undefined') {					
					var frameDoc = arg.iframe.contentWindow.document;
					for (var s in args.scripts){
						if (args.scripts[s][1] === 'css') {							
							var link = frameDoc.createElement("link");
							link.href = args.scripts[s][0];
							link.rel = "stylesheet";
							frameDoc.head.appendChild(link);
						}
						if (args.scripts[s][1] === 'style') {
							var style = frameDoc.createElement('style');		
							 style.innerHTML = args.scripts[s][0];		
							 frameDoc.head.appendChild(style);	
						}	
						if (args.scripts[s][1] === 'js') {
							var script = frameDoc.createElement("script");
							script.type = 'text/javascript';
							script.src = args.scripts[s][0];
							if (typeof args.scripts[s][2] !== 'undefined') {
								script.onload = function() {
									eval(args.scripts[s][2]);
								};
							}							
							frameDoc.head.appendChild(script);							
						}
					}
				}

				
				var tlinks = arg.iframe.contentWindow.document.querySelectorAll('a');
				if (tlinks.length) {
					for (var i = 0; i < tlinks.length; i++) {
						var code;
						var h = tlinks[i].href;
						var preCode = (h != 'js:return true;') ? "; cbar_click2(null, null, 'bannerPopupEtc', " + arg.rule_id + ");" : "";
						var isJS = (h.substr(0, 3) == 'js:' || h.substr(0, 11) == 'javascript:');
						
						if (isJS) {
							code = preCode + ((h.substr(0, 3) == 'js:') ? h.replace('js:', '') : h);
						} else if (h.substr(0,7) === 'newtab:') {
							code = preCode + "window.open('" + h.substr(7).trim() + "','" + tlinks[i].target + "');";
							tlinks[i].href = h.substr(7).trim();
						} else {
							var linkParents = pop2.getParents(tlinks[i],arg).filter(function(s) {
								return s.className.indexOf('button_block')>-1 || s.className.indexOf('button-container')>-1;
							});
							if (tlinks[i].target === '_blank' && linkParents.length === 0) {														
								code = preCode + "window.open('" + h + "','" + tlinks[i].target + "');";							
							} else {
								code = preCode + "window.location='" + h + "';";						
							}
						}

						if (arg.type == 'LPB') {
							code += 'return false;';
						}
						tlinks[i].target = "_parent";
						code = "(function() { var res = window.parent.eval('(function() {" +
							code.replace(/'/g, "\\'") + "})()');if ((typeof res === 'undefined')||(res))window.parent.cbar_close_popup2(" +
							arg.rule_id + ",'" + arg.type + "');})();";
						if (isJS) {						
							tlinks[i].href = "javascript:" + code;							
						} else {							
							tlinks[i].setAttribute('js-code', code);
						}
					}
				}
				arg.iframe.contentWindow.document.addEventListener('click', function(e) {					
					var a = e.target;
					while (typeof a.tagName!='undefined' && a.tagName != 'A') {
					
						a = a.parentNode;
					}					
					if (a.tagName == 'A' && a.getAttribute('js-code') != null) {
						e.preventDefault();
						eval(a.getAttribute('js-code'));
					}
				});
				arg.popup.style.cssText += 'height:' + pop2.to_css_var('height', '0px');
				arg.iframe.style.cssText += 'height:' + pop2.to_css_var('height', '0px');
				arg.popup.style.cssText += arg.type == 'MSG2' ? 'width:' + pop2.to_css_var('width', '100%') : 'width:' + pop2.to_css_var('width', '0px');
				arg.iframe.style.cssText += 'width:' + pop2.to_css_var('width', '0px');
				if ((typeof arg.parent_div !== 'undefined') || (arg.type == 'MSG2')) {
					arg[((typeof arg.parent_div !== 'undefined') ? 'parent_div' : 'popup')].style.cssText += 'background-color:' +
						((typeof arg.darken !== 'undefined') ? arg.darken : window.getComputedStyle(arg.iframe.contentWindow.document.querySelector('.nl-container')).backgroundColor) + ';';
				}

				var scale = pop2.recalc_wh(arg);
				arg.css_from = '';
				arg.css_to = '';

				for (var k in arg.css.popup) {
					arg.css_to += k + ':' + arg.css.popup[k] + ';';
				}
				pop2.css_rules.effect = {
					sl: ['left: 0; ' + pop2.get_trance_css(scale.s, '-100%', arg.trans[1]), 'left:-100%;'],
					sr: ['left: 100%; ' + pop2.get_trance_css(scale.s, '0', arg.trans[1]), 'left:100%;'],
					st: ['top: 0; ' + pop2.get_trance_css(scale.s, arg.trans[0], '-100%'), 'top:-100%;'],
					sb: ['top: 100%; ' + pop2.get_trance_css(scale.s, arg.trans[0], '0'), 'top:100%;'],
					fi: ['opacity: 0; ','opacity: 0;']
				};
				if (cbar_BrowserDetect.browser === 'Edge') {
					pop2.css_rules.effect.sl[0] = 'left:-' + scale.w + 'px;';
					pop2.css_rules.effect.st[0] = 'top:-' + scale.h + 'px;';
				}
				arg.css_to += pop2.css_rules.hpos[arg.hpos][0] + pop2.css_rules.vpos[arg.vpos][0] +
					pop2.get_trance_css(scale.s,arg.trans[0],arg.trans[1]);

				if (typeof pop2.css_rules.effect[arg.effect] !== 'undefined') {
					arg.css_from += pop2.css_rules.effect[arg.effect][0];
					if (['sl','sr'].indexOf(arg.effect) > -1) {
						arg.css_from += pop2.css_rules.vpos[arg.vpos][0];
					} else if (arg.effect == 'st') {
						arg.css_from += pop2.css_rules.hpos[arg.hpos][0];
					}
				}
				arg.css_to += arg.effect == 'fi' ? 'opacity:1;' : '';
				var stId = 'cbar_style_' + arg.type + '_' + rule_id;
				if (document.getElementById(stId) === null) {
					cbar_create_stylesheet(stId);
				}

						var iframe_css_text = '';
						for (var k in arg.css.iframe) {
							iframe_css_text += k + ':' + arg.css.iframe[k] + ';';
						}

						var css_text = '#' + arg.iframe.id + '{' + iframe_css_text + '}' + ' #' + arg.popup.id + '{' +
						arg.css_to + (typeof arg.parent_div === 'undefined' ? '-webkit-animation: cbar_anim' + arg.popup.id + ' linear 1s;' : '') + '} ';
						if (typeof arg.parent_div === 'undefined') {
							css_text += ' @-webkit-keyframes cbar_anim' + arg.popup.id + '{from{' + arg.css_from + '}}';
						} else {
							css_text += ' #' + arg.parent_div.id + '{width:100%;height:100%;top:0px;left:0px;position:fixed;z-index:' +
							(cbar_zindex - 1) + ';-webkit-transform:translate(0,0);transform:translate(0,0); -webkit-animation: cbar_anim_parent_' +
							arg.popup.id + ' linear 1s;} ' + (typeof pop2.css_rules.effect[arg.effect] !== 'undefined' ? ' @-webkit-keyframes cbar_anim_parent_' + arg.popup.id + '{from{' + pop2.css_rules.effect[arg.effect][1] + '}}' : '');
						}
						document.getElementById(stId).appendChild(document.createTextNode(css_text));
						if ((arg.type == 'MSG2') && (arg.location == 'toppush')) {
							var body = window.document.body;
							if (typeof window.execute_on_close === 'undefined') {
								window.execute_on_close = {};
							}
							window.execute_on_close[rule_id + arg.type] = function () {
								body.setAttribute('style', body.getAttribute('oldStyle'));
							};
							body.oldStyle = body.style.cssText;
							body.style.cssText += 'transition:margin-top 1s 0.3s;-webkit-transition:margin-top 1s 0.3s;margin-top:' +
							window.getComputedStyle(arg.popup).height + ';';
							if (typeof arg.fixedHeader != 'undefined') {
								window.execute_on_close[rule_id + arg.type] = function() {
									body.setAttribute('style', body.getAttribute('oldStyle'));
									var elems = body.querySelectorAll(arg.fixedHeader);
									for (var i = 0; i < elems.length; i++) {
										elems[i].setAttribute('style', elems[i].getAttribute('oldStyle'));
									}
								};								
							}

							setTimeout(function() {
								body.style.transition = '';
							}, 1000);
						}

						if (args.autohide_secs > 0) {
							setTimeout(function(arg) {
								cbarApp.closeButtons[arg.rule_id + '|' + arg.type].nocookie = true;
								cbar_close_popup2(arg.rule_id, arg.type);
							}, 1000 * arg.autohide_secs, arg);
						}
					},
					parseCSSText: function (sheets) {
						var extAttributes = function (c, cssText) {
							var attrs = cssText.trim().match(/{(.*)}/)[1].trim().split(';');
							for (var k = 0; k < attrs.length; ++k) {
								var keyValue = attrs[k].split(':');
								if (keyValue.length == 2) {
									c[keyValue[0].trim()] = keyValue[1].trim();
								}
							}
						};
						
						var myCSS = {};
						
						for (var i = 0; i < sheets.length; ++i) {
							var sheet = sheets[i];
							
							if (
							(sheet.href != null) ||
							(typeof sheet.cssRules === 'undefined') 
							) {
								continue;
							}
							
							for (var j = 0; j < sheet.cssRules.length; ++j) {
								var rule = sheet.cssRules[j];
								if (typeof rule.cssText === 'undefined') {
									continue;
								}								
								if (typeof rule.cssRules !== 'undefined' && typeof rule.media !== 'undefined') {
									
									var mediaKey = '@media ' + rule.media.mediaText;
									if (typeof myCSS[mediaKey] === 'undefined') {
										myCSS[mediaKey] = {};
									}
									Object.keys(rule.cssRules).forEach(function(kk) {
										var subRule = rule.cssRules[kk];
										if (typeof subRule.cssText !== 'undefined') {
											if (typeof myCSS[mediaKey][subRule.selectorText] === 'undefined') {
												myCSS[mediaKey][subRule.selectorText] = {};
											}
											extAttributes(myCSS[mediaKey][subRule.selectorText], subRule.cssText);
										}
									});
								} else if (typeof rule.selectorText !== 'undefined') {									
									if (typeof myCSS[rule.selectorText] === 'undefined') {
										myCSS[rule.selectorText] = {};
									}
									extAttributes(myCSS[rule.selectorText], rule.cssText);
								}
							}
						}
						
						return myCSS;
					},

					reloadSafariMediaQueries(styleSheets) {
						if (cbar_BrowserDetect.OS === 'iPhone') {
							var mobCSS = '@media all and (hover:none)';
							var deskCSS = '@media not all';
							for (var i in styleSheets) {
								var sheet = styleSheets[i];
								if (sheet.href == null && sheet.ownerNode != null && sheet.ownerNode.innerText != '') {
									var css = sheet.ownerNode.innerText;
									var whatReplace;
									if (css.indexOf('@media') >- 1) {
										var m = css.match((css.indexOf('@media screen and ') >- 1)?/@media screen and \(max-width:(.*)px\)/:/@media \(max-width:(.*)px\)/);
										if (m != null){
											whatReplace = m[0];
										} else {
											whatReplace = (window.innerHeight>window.innerWidth) ? deskCSS : mobCSS;
										}
										var whoReplace = (window.innerHeight > window.innerWidth) ? mobCSS : deskCSS;
										sheet.ownerNode.innerText = css.replace(whatReplace, whoReplace);
									}									
								}
							}
						}
					}
				};

				args.popup = window.document.createElement('div');
				args.popup.id = 'cbar_' + args.type + '_' + rule_id;
				args.popup.setAttribute('rule_id', rule_id);
				args.popup.style.position = args.type == 'LPB' ? 'absolute' : 'fixed';
				args.css = {
					popup: {
						display: 'block',
						position: args.type == 'LPB' ? 'absolute' : 'fixed',
						'z-index': args.type == 'MSG2' ? cbar_zindex - 10 : (args.type == 'LPB' ? 1 : cbar_zindex),
						width: '100%',
						height: '100%',
						'transform-origin': 'left top',
						'-webkit-transform-origin': 'left top'
					},
					iframe: {
						width: '100%',
						height: '100%',
						border: '0',
						'transform-origin': 'left top',
						'-webkit-transform-origin': 'left top',
						'max-width': 'initial'
					}
				};
				args.iframe = window.document.createElement('iframe');
				args.iframe.id = 'cbar_iframe_' + args.type + '_' + rule_id;
				args.iframe.className = 'cbar_iframe';
				args.iframe.style.width = '100%';
				args.iframe.style.height = '100%';
				if (args.type == 'OVERLAY') {
					args.vpos = 'c';
					args.hpos = 'c';
				}
				args.trans = [pop2.css_rules.hpos[args.hpos][1], pop2.css_rules.vpos[args.vpos][1]];
				args.iframe.scrolling = 'no';
				if (args.type == 'MSG2') {
					args.popup.style.cssText = 'width: 100%; text-align: center;';
					args.css.iframe.position = 'absolute';
					args.css.iframe.left = '0';
				}
				args.popup.popup_close = args.popup_close;
				cbarApp.closeButtons[args.rule_id + '|' + args.type] = typeof args.closebtn !== 'undefined' ? args.closebtn : {};

				if ((args.type != 'OVERLAY') && (typeof args.closebtn !== 'undefined')) {
					if (args.closebtn.offset < 0) {
						var offset = [args.closebtn.offset, args.closebtn.offset];
						if (args.closebtn.pos.indexOf(args.vpos) > -1) {
							offset[0] = 0;
						}
						if (((args.type == 'POP2') && (args.closebtn.pos.indexOf(args.hpos) > -1)) || (args.type == 'MSG2')) {
							offset[1] = 0;
						}
						cbarApp.closeButtons[args.rule_id + '|' + args.type].offset = offset[0] + 'px ' + offset[1];
					}
					args.popup.innerHTML += draw_close_button(rule_id, args.type);
				}
				args.popup.appendChild(args.iframe);
				var injectDiv;
				if ((args.type == 'OVERLAY') || (typeof args.darken !== 'undefined')) {
					args.parent_div = window.document.createElement('div');
					args.parent_div.id = 'cbar_parent_' + args.type + '_' + rule_id;
					if ((args.type == 'OVERLAY') && (typeof args.closebtn !== 'undefined')) {
						args.parent_div.innerHTML += draw_close_button(rule_id, args.type);
					} else if (args.type == 'POP2') {
						args.parent_div.addEventListener('click', function(e) {
							if (typeof cbar_underlay_noclick === 'undefined') {
								var pa = e.target.id.split('_');
								cbar_close_popup2(pa[3], pa[2]);
							}
						});
					}
					args.parent_div.appendChild(args.popup);
					injectDiv = args.parent_div;
				} else if (args.type == 'LPB') {
					args.lpb_div = window.document.createElement('div');
					args.lpb_div.style.margin = args.margin;
					args.lpb_div.style.position = 'relative';
					args.lpb_div.style.height = 'var(--my-height, 0px)';
					args.lpb_div.appendChild(args.popup);
					injectDiv = args.lpb_div;
				} else {
					injectDiv = args.popup;
				}
				if (typeof args.place_id !== 'undefined') {
					document.getElementById(args.place_id).appendChild(injectDiv);
				} else {
					window.document.body.appendChild(injectDiv);
				}
				var html = cbarApp.cleanString(args.template)
				.replace(new RegExp('%close_button_url%', 'g'), "javascript:(function(event) { window.parent.cbar_close_popup2('" + rule_id + "','" + args.type + "'); })(); \" target=\"_self");
				var iframeDoc = args.iframe.contentWindow.document;
				iframeDoc.open();
				iframeDoc.write(html);
				iframeDoc.close();
				
				var cssObject = pop2.parseCSSText(iframeDoc.styleSheets);			
				var mediaKey = Object.keys(cssObject).filter(function (v) {
					return v.indexOf("@media") > -1;
				})[0];			
				args.pop_max_size = ((typeof cssObject['.bee-row-content'] !== 'undefined') && (typeof cssObject['.bee-row-content']['max-width'] !== 'undefined')) ?
				parseFloat(cssObject['.bee-row-content']['max-width']) : parseFloat(mediaKey.match(/\(max-width:([\d ]*)px\)/)[1].trim());
				args.pop_min_size = (typeof cssObject[mediaKey]['.block-grid, .col'] !== 'undefined')?parseFloat(cssObject[mediaKey]['.block-grid, .col']['min-width']):parseFloat(mediaKey.match(/\(max-width: (\d*)px\)/)[1]);				
				if ((window.location.href.indexOf('cbar_iframe_preview') == -1) || (window.innerWidth > 500)) {					
					if (cbar_BrowserDetect.OS === 'iPhone') {
						pop2.reloadSafariMediaQueries(iframeDoc.styleSheets);
					} else {
						for (var i in iframeDoc.styleSheets) {
							var sheet = iframeDoc.styleSheets[i];
							if (sheet.href == null && sheet.ownerNode != null && sheet.ownerNode.innerText != '') {
								var css = sheet.ownerNode.innerText;
								if (css.indexOf('@media') >- 1) {
									var m = css.match((css.indexOf('@media screen and') >- 1)?/@media screen and \(max-width:(.*)px\)/:/@media \(max-width:(.*)px\)/);
									sheet.ownerNode.innerText = css.replace(m[0], (cbar_BrowserDetect.browser !== 'Safari') ? '@media only screen and (min-device-width: 240px) and (max-device-width: 520px)' : '@media none');
								}								
							}
						}
					}
				}		
								
				if (args.iframe.contentWindow.document.readyState != 'loading') {
					pop2.onloadImages(args);
				} else {
					args.iframe.addEventListener('load', function() {
						pop2.onloadImages(args);
					});
				}

				if (typeof args.countdown_timer !== 'undefined') {
					cbar_countdown_timer_inline(rule_id, args.type, args.countdown_timer);
				}				
				if (typeof args.textRotator !== 'undefined') {
					cbarApp.textRotator(rule_id, args.type, args.textRotator);
				}
				var resizePOP2 = function () {
					if ((typeof args.popup !== 'undefined') && (args.iframe.contentWindow != null)) {						
						pop2.reloadSafariMediaQueries(args.iframe.contentWindow.document.styleSheets);					
						pop2.recalc_wh(args);						
					}
				};
				window.addEventListener('cbar_resize_popup', resizePOP2);
				window.addEventListener('cbar_resize', resizePOP2);
			}

	function cbar_close_popup(rule_id) {				
		if (typeof rule_id === 'undefined') { 
			// close currently open if no rule_id
			var popups = document.getElementsByClassName("cbar_popup");
			if (popups.length == 0) {
				return;
			}
			rule_id = popups[0].id.replace('cbar_popup_', '');
		}

		var popup = document.getElementById('cbar_popup_' + rule_id);		
		
		if (popup == null) {
			return;
		}

		// close popup cookie
		if ((typeof popup.popup_close === 'undefined') || isNaN(parseInt(popup.popup_close))) {
			popup.popup_close = 365;
		}		
		if ((popup.popup_close != -1) && (cbar_preview_rules == '')) {
			cbar_createCookie('cbar_pc_' + (popup.popup_close == 0 ? cbar_sess + '_' : '') + rule_id, 1, parseInt(popup.popup_close));
		}
		popup.parentNode.removeChild(popup); // for v1 popups	
		var underlay = document.getElementById('cbar_underlay_' + rule_id);		
		
		if (underlay == null) {
			return;
		}
		underlay.parentNode.removeChild(underlay);// for v1 popups	
	}

	function cbar_close_popup2(rule_id, rule_type) {
		var opts = cbarApp.closeButtons[rule_id + '|' + rule_type];
		var popId = 'cbar_' + rule_type + '_' + (rule_type == 'banner' ? opts.banner_id : rule_id);
		var popup = document.getElementById(popId);
		if (popup == null) {
			return;
		}

		if (typeof popup.popup_close === 'undefined' || isNaN(parseInt(popup.popup_close))) {
			popup.popup_close = 365;
		}
		
		var cookie_name;
		if (rule_type == 'banner') {
			window['cbar_b_no_click_' + rule_id] = true; 
			popup.setAttribute('hidden_banner', '1'); 
			popup.style.display = 'none';
			cookie_name = 'cbar_bc_' + (popup.popup_close == 0 ? cbar_sess + '_' : '') + rule_id;
		} else {
			var pop2cls = (
				document.getElementById('cbar_parent_' + rule_type + '_' + rule_id) !== null
			) ? document.getElementById('cbar_parent_' + rule_type + '_' + rule_id) : popup;
			pop2cls.parentNode.removeChild(pop2cls);
			
			var styleElement = document.getElementById('cbar_style_' + rule_type + '_' + rule_id);
			if (styleElement !== null) {
				styleElement.parentNode.removeChild(styleElement);
			}
			
			cookie_name = 'cbar_pc_' + (popup.popup_close == 0 ? cbar_sess + '_' : '') + rule_id;
			if (
				typeof window.execute_on_close !== 'undefined' &&
				typeof window.execute_on_close[rule_id + rule_type] !== 'undefined'
			) {
				window.execute_on_close[rule_id + rule_type]();
			}
		}
		
		if (popup.popup_close != -1 && cbar_preview_rules == '' && typeof opts.nocookie === 'undefined') {
			cbar_createCookie(cookie_name, 1, parseInt(popup.popup_close));
		}
	}

	function cbar_close_offerzone(rule_id, days) {
		var oz = document.querySelector("div[rule_id='" + rule_id + "']");
		if (oz !== null) {
			oz.parentNode.removeChild(oz);
		}
		if (cbar_preview_rules == '') {
			cbar_createCookie('cbar_oz_' + rule_id, 1, parseInt(days));
		}
	}

	function cbar_iframe_popup_show(
		rule_id, popup_url, popup_width, popup_height, popup_top, 
		img_w, img_h, img_url, popup_close, close_butt_pos, 
		close_butt_id, close_butt_size, close_butt_offset, darken,custom_close
	) {
		if (cbar_in_array(rule_id, cbar_suppress_rules)) {
			return; // allow suppressing by js action
		}

		// dont show popup if user closed it (and not preview from control panel) (rule_id=0)
		if (
			(cbar_preview_rules == '') && 
			(cbar_readCookie('cbar_pc_' + rule_id) == '1' || cbar_readCookie('cbar_pc_' + cbar_sess + '_' + rule_id) == '1')
		) {
			return;
		}

		var popupDiv = window.document.createElement('div');
		popupDiv.id = 'cbar_popup_' + rule_id;
		popupDiv.className = 'cbar_popup';
		
		var iframe_width = '';
		var iframe_height = '';

		if (popup_width == '') {
			popup_width = iframe_width = 'auto';
		}
		if (popup_width != 'auto') {
			iframe_width = (popup_width - 8) + 'px'; 
			popup_width += 'px';
		}
		popupDiv.style.width = popup_width;

		popupDiv.popup_close = popup_close;

		if (popup_height == '')	{
			popup_height = iframe_height = 'auto';
		}
		if (img_h == '') {
			img_h = 0;
		}
		if (popup_height != 'auto') {
			iframe_height = (popup_height - parseInt(img_h) - 8) + 'px'; 
			popup_height += 'px';
		}
		popupDiv.style.height = popup_height;

		if (popup_top == '') {
			popup_top = '100px';
		}
		if (popup_top == parseInt(popup_top)) {
			popup_top = popup_top + 'px';
		}
		
		popupDiv.style.top = popup_top;
		popupDiv.style.background = 'white';
		popupDiv.style.border = '4px solid silver';
		popupDiv.style.zIndex = cbar_zindex;
		popupDiv.setAttribute('rule_id', rule_id);
		popupDiv.style.boxSizing = 'content-box';

		var img_html = (img_url != '') ? "<img src='" + cbar_userimages + img_url + "' style='border: none'>" : '';
		var popup_html = '';
		var css_position = '';
		
		if (close_butt_pos != '') {
			if (close_butt_pos.search('t') > -1) {
				css_position += 'top: 1px; bottom: auto;'; 
			}
			if (close_butt_pos.search('b') > -1) {
				css_position += 'top: auto; bottom: 1px;'; 
			}
			if (close_butt_pos.search('l') > -1) {
				css_position += 'left: 1px; right: auto;';
			}
			if (close_butt_pos.search('r') > -1) {
				css_position += 'left: auto; right: 1px;';
			}
		} else {
			css_position += 'top: -15px; right: -15px;';
		}
		
		var close_butt;
		if (typeof custom_close !== 'undefined' && custom_close != null) {
			close_butt = custom_close.url;
			if (custom_close.size != '') {
				css_position += 'width:' + custom_close.size + 'px;';
			}
		} else if (close_butt_id > -1 && close_butt_size > -1) {
			close_butt = cbar_static_url + 'img/close_buttons/close' + close_butt_id + '_' + close_butt_size + '.png';
		} else {
			close_butt = cbar_static_url + 'img/common/dialog_close.png';
		}

		popup_html += "<img src='" + close_butt + "' class='cbar-close-button' style='" + css_position + 
			"margin: " + close_butt_offset + "px;' onclick=\"cbar_close_popup(" + rule_id + ");\">";

		popup_html += img_html + "<iframe style='margin:5px;' src='" + popup_url + "' width='" + iframe_width + 
			"' height='" + iframe_height + "' frameborder='0'></iframe>";

		if (!cbarApp.isWhiteLable) {
			popup_html += '<a class="cbar-iframe-popup-label" href="https://www.barilliance.com">powered by Barilliance</a>';
		}

		popupDiv.innerHTML = popup_html;
		popupDiv.style.display = 'block';
		popupDiv.style.visibility = 'visible';
		window.document.body.appendChild(popupDiv);
		
		// darken under popup
		if (darken!='') {
			var cbar_underlay = window.document.createElement('div');
			var clientwidth = document.body.clientWidth;
			var clientheight = document.body.clientHeight;
			cbar_underlay.id = 'cbar_underlay_' + rule_id;
			cbar_underlay.className = 'cbar-underlay';			
			cbar_underlay.style.cssText = 'background-color:' + darken + ';z-index:' + (cbar_zindex - 1) + 
				';height:' + clientheight + 'px;width:' + clientwidth + 'px;';			
			cbar_underlay.onclick = function() {
				cbar_close_popup(rule_id);
				return false;
			};
			window.document.body.appendChild(cbar_underlay);
		}
		
		cbar_popups.push(popupDiv);
		cbar_popups_position();

		//window.addEventListener('scroll', cbar_popup_scroll_event);
		window.addEventListener('resize', cbar_popups_position);
	}

//	function cbar_popup_scroll_event() {// must be here for ie6
//		if (cbar_pop_scrolltimeout > 0) {
//			window.clearTimeout(cbar_pop_scrolltimeout);
//		}
//		cbar_pop_scrolltimeout = window.setTimeout('cbar_popups_position()', 300);
//	}

	//position all available popups
	function cbar_popups_position() {
		var clientheight = document.body.clientHeight;
		var clientwidth = document.body.clientWidth;

		for (var i = 0; i < cbar_popups.length; i++) {
			if (cbar_popups[i].getAttribute('dont_reposition') !== null) {
				continue; // tender #2425
			}

			cbar_popups[i].style.position = 'fixed';
			var width = cbar_popups[i].scrollWidth;
			cbar_popups[i].style.left = parseInt((clientwidth / 2) - (width / 2)) + 'px';
		}

		// underlay resize
		var underlays = document.querySelectorAll('div.cbar-underlay');
		if (underlays.length > 0) {
			for (var i = 0; i < underlays.length; i++) {
				underlays[i].style.width = clientwidth + 'px';
				underlays[i].style.height = clientheight + 'px';
			}
		}
	}

	window.addEventListener('message', function(event) {
		if (
			typeof event.data !== 'undefined' &&
			event.data !== null &&
			typeof event.data.action !== 'undefined'
		) {	
			if (event.data.action === 'cbarAfterEmailSubmitCallback' && typeof cbarAfterEmailSubmitCallback === 'function') {
				cbarAfterEmailSubmitCallback(event.data.status, event.data.rule_id);
			}
			if (event.data.action === 'cbar_coupon_get'){
				window.parent.cbar_coupon_get(event.data.type,event.data.rule_id, false);
			}
		}
	});

	//Legacy function
	function cbar_trust_message(msg_data) {
		cbarShowLiveMessage(JSON.parse(msg_data));
	}

	function cbarShowLiveMessage(msg_data) {
		var questionmark = '<a class="cbar-trust-message" onclick="cbar_trust_popup(); return false;"><img src="' + 
			cbar_static_url + 'img/common/information-outline.png"></a>';
		if (cbarApp.isWhiteLable || (typeof msg_data.infoicon != 'undefined' && msg_data.infoicon === false)) {
			questionmark = '';
		}
		
		// embedded messages
		if (typeof msg_data.embed_pt !== 'undefined') {
			var ref_elements = document.querySelectorAll("[cbar_live_insert]");
			
			for (var index in msg_data.message) {
				if (!msg_data.message.hasOwnProperty(index)) {
					continue;
				}
				
				if (typeof ref_elements[index] === 'undefined') {
					continue;
				}

				var op = ref_elements[index].getAttribute('cbar_live_insert');
				var msg = "<div class='cbar_trust' style='" + cbar_trust_outdiv_css + "'><span style='" +
					msg_data.embedcss + "'>" + msg_data.message[index] + questionmark + "</span></div>";

				if (op == 'append') {
					ref_elements[index].insertAdjacentHTML('beforeend', msg);
				}
				if (op == 'prepend') {
					ref_elements[index].insertAdjacentHTML('afterbegin', msg);
				}
				if (op == 'before') {
					ref_elements[index].insertAdjacentHTML('beforebegin', msg);
				}
				if (op == 'after') {
					ref_elements[index].insertAdjacentHTML('afterend', msg);
				}
			}
			
			return;
		}
		
		// non embedded messages
		if (typeof cbar_trust_message_show === 'function') {
			msg_data = cbar_trust_message_show(msg_data);
		}

		var v_margin = parseInt(msg_data.margin) * msg_data.count;
		for (var i = 1; i < msg_data.count; i++) {
			var bubble = document.querySelector("div#cbar_trust_" + msg_data.rule_id + "_" + i);
			if (bubble !== null) {
				v_margin += bubble.scrollHeight;
			}
		}

		var top = 'auto', bottom = 'auto', left = 'auto', right = 'auto', height = 'auto';
		var dynamic_css = ' border: none; ';

		if (msg_data.type == 'bar' || msg_data.type == 'pbar') {
			if (msg_data.type == 'pbar') {
				msg_data.barpos = 't';
			}

			if (msg_data.barpos == 'b') {
				bottom = '0px';  
			} else {
				top = '0px';
			}

			if (msg_data.borderw > 0) {
				dynamic_css += ' border-top: ' + msg_data.borderw + 'px solid ' + msg_data.border + '; ';
				if (msg_data.barpos == 't') {
					dynamic_css = dynamic_css.replace('border-top', 'border-bottom');
				}
			}

			if (msg_data.shadow > 0) {
				dynamic_css += " box-shadow:" + msg_data.shadow + "px 0px " + msg_data.shadow + "px #888888; ";
				if (msg_data.barpos == 'b') {
					dynamic_css = dynamic_css.replace('box-shadow:', 'box-shadow:-');
				}
			}
		} else if (msg_data.type == 'side') {
			bottom = '200px';
			right = '-500px';
		} else {
			if (msg_data.pos[0] == 't') {
				top = v_margin + 'px';
			}
			if (msg_data.pos[0] == 'b') {
				bottom = v_margin + 'px';
			}
			if (msg_data.pos[1] == 'r') {
				right = msg_data.margin + 'px';
			}
			if (msg_data.pos[1] == 'l') {
				left = msg_data.margin + 'px';
			}
		}

		var div = document.createElement('div');
		if (msg_data.type == 'bubble' || msg_data.type == 'side') {
			var content;
			if (msg_data.image == '') {
				content = msg_data.message[0] + questionmark;
			} else {
				content = "<span style='display:table-row'><span style='display:table-cell; padding:5px;'><img class='cbar_bubble_img' onclick='window.location.href = \"" +
					cbarApp.cleanString(msg_data.url) + "\"; return false;' style='max-width:" +
					parseInt(msg_data.width / 4) + "px; max-height:" + parseInt(msg_data.width / 4) +
					"px; width:auto; height:auto;' src='" + cbarApp.cleanString(msg_data.image) +
					"'/></span><span style='display:table-cell; padding:5px; vertical-align:middle;'>" +
					msg_data.message[0] + questionmark + "</span></span>";
			}

			div.innerHTML = "<div class='cbar_bubble cbar_trust' id='cbar_trust_" + msg_data.rule_id + "_" + 
				msg_data.count + "' style='position:fixed; width:" + msg_data.width + "px; height:" + height + 
				"; right:" + right + "; left:" + left + "; top:" + top + "; bottom:" + bottom +
				"; opacity:0.1; background:" + msg_data.bg + ";   color:" + msg_data.txtcolor + "; border: " +
				msg_data.borderw + "px solid " + msg_data.border + "; border-radius:" + msg_data.round +
				"px; padding:5px; box-shadow: " + msg_data.shadow + "px " + msg_data.shadow + 
				"px 10px #888888; text-align:" + msg_data.align + "; font:" + msg_data.font + "; z-index:2000000; " +
				msg_data.extracss + "'>" + content + "</div>";
		} else { // top bar
			div.innerHTML = "<div class='cbar_bubble cbar_trust' id='cbar_trust_" + msg_data.rule_id + "_" + 
				msg_data.count + "' style=' position:fixed; width:100%; height:" + height + "; right:" + right + 
				"; left:" + left + "; top:" + top + "; bottom:" + bottom + "; opacity:0.1; background:" + msg_data.bg + 
				"; " + dynamic_css + " color:" + msg_data.txtcolor + "; border-radius:0px; padding:10px; text-align:center; font:" +
				msg_data.font + "; z-index:2000000; " + msg_data.extracss + "'><div style='margin:" + 
				msg_data.barmargin + "px;'>" + msg_data.message[0] + questionmark + " </div></div>";
		}
		
		var bubble = div.firstChild;	
		bubble.setAttribute('rule_id', msg_data.rule_id);
		window.document.body.appendChild(bubble);
		
		var isLinkColor = (typeof msg_data.linkcolor !== 'undefined' && msg_data.linkcolor != '');
		var isLinkUnderline = (typeof msg_data.linkunderline !== 'undefined' &&  msg_data.linkunderline == true);		
		if (isLinkColor ||  isLinkUnderline) {
			var links = bubble.querySelectorAll('a');
			for (var i = 0; i < links.length; i++) {
				if (isLinkColor){
					links[i].style.color = msg_data.linkcolor;			
				}
				if (isLinkUnderline){
					links[i].style.textDecoration = 'underline';	
				}
			}
		}
		var children = bubble.querySelectorAll('*');
		for (var i = 0; i < children.length; i++) {
			children[i].setAttribute('rule_id', msg_data.rule_id);
		}
		bubble.addEventListener('click', function(event) {
			cbar_click2(null, null, 'bannerPopupEtc', event.target.getAttribute('rule_id'));
		});

		if (msg_data.type == 'pbar') {
			document.body.style.marginTop = bubble.scrollHeight + 'px';
		}

		if (msg_data.type == 'side') {
			// slide in/out
			bubble.style.opacity = 1;

			msg_data.margin = parseInt(msg_data.margin);
			msg_data.width = parseInt(msg_data.width);
			bubble.cbar_rightpos = -(msg_data.width + msg_data.margin);
			var myVar = setInterval(function() {
				bubble.cbar_rightpos = (msg_data.margin - (msg_data.margin - bubble.cbar_rightpos) * 0.7);
				bubble.style.right = bubble.cbar_rightpos + 'px';
				if (Math.abs(bubble.cbar_rightpos - msg_data.margin) > 5) {
					return;
				}
				clearInterval(myVar);

				// slide out
				setTimeout(function() {
					var myVar = setInterval(function() {
						bubble.cbar_rightpos -= 20;
						bubble.style.right = bubble.cbar_rightpos + 'px';
						if (bubble.cbar_rightpos > -300) {
							return;
						}
						bubble.style.display = 'none';
						clearInterval(myVar);
					}, 40);
				}, msg_data.time * 1000);
			}, 40);
		} else {
			// fade in
			var myVar = setInterval(function() {
				bubble.style.opacity = parseFloat(bubble.style.opacity) + 0.05;

				if (bubble.style.opacity < 1) {
					return;
				}
				clearInterval(myVar);

				// fade out
				setTimeout(function() {
					var myVar = setInterval(function() {
						bubble.style.opacity = parseFloat(bubble.style.opacity) - 0.05;

						if (bubble.style.opacity > 0.05) {
							return;
						}
						clearInterval(myVar);
						bubble.style.display = 'none';
					}, 40);

					if (msg_data.type == 'pbar') {
						var myVar2 = setInterval(function() {
							var newmargin = parseInt(document.body.style.marginTop) * 0.7;
							document.body.style.marginTop = newmargin + 'px';
							if (newmargin > 5) {
								return;
							}
							clearInterval(myVar2);
							document.body.style.marginTop = '0px';
						}, 150);
					}
				},  msg_data.time * 1000);
			}, 40);
		}
	}

	function cbar_trust_popup() {
		loadjscssfile(cbar_dynamic_url + 'cbar_trust_popup.js.php?action=wrapper&sid=' + cbar_sid, 'js');
	}

	function cbar_trust_store_cart_message(pid_orig, message) {
		cbar_createCookie('cbar_trust_cartmsg_' + pid_orig, message, 0);
	}

	function cbar_offerzone_show(x, align, width, frm_col, html, h_html, h_col, offerzone_id, rule_id, preview) {
		if (cbar_in_array(rule_id, cbar_suppress_rules)) {
			return; // allow suppressing by js action
		}

		if (!preview && (cbar_readCookie('cbar_oz_' + rule_id) == '1')) {
			return;
		}

		var rand = '';
		if (preview) {
			rand = '?rnd=' + Math.ceil(1000 * Math.random());
		}
		var reset_style = ' margin: 0 0 0 0; padding: 0 0 0 0; border: 0px solid white; line-height: 1em; font-size: 1em; text-align: left;';
		var template = "<div onmouseover=\"var tmp=document.getElementById('tooltip_" + offerzone_id + 
			"'); if (tmp) tmp.style.display='block';\" onmouseout=\"var tmp=document.getElementById('tooltip_" + 
			offerzone_id + "'); if (tmp) tmp.style.display='none';\" style='" + reset_style + " width:" + width +
			"px; height:auto; background:#" + h_col + ";'>";
	
		if (h_html.length > 0) {
			template += "<div id='tooltip_" + offerzone_id + "' style='" + reset_style + " height:auto; width:" + 
				width + "px; display:none;'><div style='" + reset_style + " padding:4px; display:block;'>" +
				cbarApp.cleanString(h_html) + "</div></div>";
		}
		template += "<div style='" + reset_style + " height:13px; width:" + width + 
			"px; background:url(https://d2lafqfdp6zd0i.cloudfront.net/" + rule_id + "_top.png" + rand + 
			") no-repeat bottom'></div><div style='" + reset_style + " height:auto; width:" + width + 
			"px; padding-bottom:2px;background:url(https://d2lafqfdp6zd0i.cloudfront.net/" + rule_id + 
			"_middle.png" + rand + ") repeat-y'><div style='" + reset_style + 
			" margin-left:12px; margin-right:12px; padding 0 0 0 0;'>" + cbarApp.cleanString(html) +
			"</div><div style='clear:both; height:2px;'>&nbsp;</div></div></div>";

		var offerzoneDiv = window.document.createElement('div');
		offerzoneDiv.className = 'cbar_offerzone';
		offerzoneDiv.id = 'cbar_offerzone_' + offerzone_id;
		offerzoneDiv.setAttribute('rule_id', rule_id);
		offerzoneDiv.style.zIndex = '80000';
		offerzoneDiv.innerHTML = template;
		
		// get the html of cbar_banner
		var tmp_div = window.document.createElement('div');
		tmp_div.appendChild(offerzoneDiv);
		var offerzone_outerHTML = tmp_div.innerHTML;

		// store all offerzone data as banner for repositioning.
		var banner = {
			id: 'cbar_offerzone_' + offerzone_id,  
			position: 'f',
			overlay: '', 
			align: align, 
			lrmargin: x, 
			tbmargin: 0, 
			html_item: '', 
			width: width, 
			height: 'auto', 
			banner_html: offerzone_outerHTML
		};
		cbar_banners[cbar_banners.length] = banner;

		offerzoneDiv.style.position = 'fixed';

		window.document.body.appendChild(offerzoneDiv);
		cbar_banner_position(cbar_banners.length - 1);
	}

	function cbar_MSG_show(
		rule_id, position, backgroundcolor, bordercolor, borderwidth, 
		shadowsize, extracss, html,	animation, close_butt, 
		close_butt_pos,	close_butt_size, close_butt_offset, close_butt_id, divid, 
		popup_close, autohide_secs, countdown_timer,close_custom
	) {
		if (cbar_in_array(rule_id, cbar_suppress_rules)) {
			return; // allow suppressing by js action
		}

		if (typeof peekABar === 'undefined') {
			peekABar = {};
		}
		
		if ((cbar_preview_rules == '') && (cbar_readCookie('cbar_mc_' + rule_id ) == '1')) {
			return; 
		}

		if (extracss != '') {
			var style = document.createElement('style');
			style.type = 'text/css';
			style.innerHTML = cbarApp.cleanString(extracss);
			document.getElementsByTagName('head')[0].appendChild(style);
		}

		var cbar_banner_html = '<div id="cbar_msgzone_content">' + cbarApp.cleanString(html) + 
			'</div><div id="email_capture_ajax_msg" style="display: none"></div>';
	
		if (close_butt != '') {
			var close_css = '';	
			if (close_butt_pos.search('t') > -1) {
				close_css += "top: 1px; bottom: auto;";
			} else {
				close_css += "top: auto; bottom: 1px;"; 
			}
			if (close_butt_pos.search('l') > -1) {
				close_css += "left: 1px; right: auto;";       
			} else {
				close_css += "right: 1px; left: auto;";
			}
			var url = cbar_static_url + 'img/close_buttons/close' + close_butt_id + '_' + close_butt_size + '.png';
			if (typeof close_custom !== 'undefined' && close_custom != null) {
				url = close_custom.url;
				if (close_custom.size != '') {
					close_css += "width:" + close_custom.size + "px;";
				}			
			}				
			cbar_banner_html += '<img src="' +url+ '" style="position: absolute; cursor: pointer; cursor: hand; border: none; ' +
				close_css + 'margin: ' + close_butt_offset + 'px;" onclick=\'peekABar.' + divid + ".hide(); popup_close=this.getAttribute(\"popup_close\"); if ((typeof popup_close ==\"undefined\") || isNaN(parseInt(popup_close)) ) popup_close=365; if ((popup_close != -1) && (cbar_preview_rules ==\"\")) cbar_createCookie(\"cbar_mc_\"+this.getAttribute(\"rule_id\") ,1, parseInt(popup_close)); return false;' popup_close=\"" + popup_close + '" rule_id="' + rule_id + '">';
		}

		var shadow = (position == 'bottom') ? '0 -' + shadowsize + 'px ' + shadowsize + 'px 0' : '0 ' + shadowsize +
			'px ' + shadowsize + 'px 0';

		var callPeekABar = function() {
			peekABar[divid] = new cbar_peekABar({	
				position: (position == 'toppush') ? 'top' : position,  
				backgroundColor: '#' + backgroundcolor,
				padding: '5px ' + (parseInt(close_butt_size) + (parseInt(close_butt_offset) * 2)) + 'px',
				html: cbar_banner_html,
				cssClass: divid,
				autohide: autohide_secs > 0,
				delay: autohide_secs * 1000,
				onShow: function() {
					var el = document.querySelector('.' + divid);
					el.style.cssText += 'z-index: ' + (cbar_zindex - 10) + ' !important; border: solid ' + 
						borderwidth + 'px #' + bordercolor + '; box-shadow: ' + shadow + ';';
					el.setAttribute('popup_close', popup_close);
					el.setAttribute('id', divid);

					if (position == 'toppush') {
						window['body_margin_top'] = document.body.style.marginTop;
						setTimeout(function() {
							window['cbar_msg_bar_resize_handler'] = function() {
								if (typeof jQuery !== 'undefined') {
									jQuery('body').animate({
										marginTop: jQuery('.' + divid).outerHeight() + 'px'
									}, 150);
								} else {
									document.body.style.marginTop = window.getComputedStyle(document.querySelector('.' + divid)).height;
								}
							};
							window.addEventListener('resize', window['cbar_msg_bar_resize_handler']);
							window['cbar_msg_bar_resize_handler']();
						}, 500);
					}
					
					if (countdown_timer == 'on') {
						cbar_countdown_timer(rule_id);
					}
					cbar_firecustomevent('cbar_show', document, rule_id);
					el.addEventListener('click', function(event) {
						if (['A','BUTTON'].indexOf(event.target.tagName) > -1) {
							cbar_click2(null, null, 'bannerPopupEtc', rule_id);
						}
					});
				},
				onHide: function() {
					document.body.style.marginTop = window['body_margin_top'];
					if (window.removeEventListener) {
						window.removeEventListener('resize', window['cbar_msg_bar_resize_handler']);// W3C DOM
					} else if (window.detachEvent) {
						document.detachEvent('onresize', window['cbar_msg_bar_resize_handler']);// IE DOM
					}
					window['cbar_b_no_click_' + rule_id] = true; 
					cbar_firecustomevent('cbar_close', document, rule_id);
				},
				animation: {
					type: animation,
					duration: 300
				}
			});
			peekABar[divid].show();
		};
		
		if (typeof cbar_peekABar === 'undefined') {
			loadjscssfile(cbar_static_url + 'peekABar/jquery.peekabar.css', 'css');
			loadjscssfile_callback(cbar_static_url + 'peekABar/cbar_peekabar.js', 'js', callPeekABar);
		} else {
			callPeekABar();
		}
	}

	function cbar_FBMSG_show(
		rule_id, site_id, app_id, page_id, size, 
		skin, e_loc, e_id, e_class, center_align,
		inline_css, css, rule_preview
	) {
		var cbar_fbmsg_optin = function() {
			if (typeof cbar_send_messenger !== 'undefined') {
				FB.AppEvents.logEvent('MessengerCheckboxUserConfirmation', null, cbar_send_messenger);
			}
		};
		
		var cbar_draw_fb_checkbox = function() {
			var fchkb = document.createElement('template');
			fchkb.innerHTML = '<div class="fb-messenger-checkbox" origin=' + window.location.href + ' page_id=' + 
				page_id + ' messenger_app_id=' + app_id + ' user_ref=' + site_id + '.' + rule_id + '.' + cbar_uid +
				'.' + rule_preview + '.' + (new Date()).getTime() + ' prechecked=true allow_login=true size=' + 
				size + ' skin=' + skin + ' center_align=' + center_align + ' ' + 
				((inline_css == 'true' && css.length) ? 'style="' + decodeURIComponent(css) + '"' : '') + '></div>';
		
			if (e_loc == 'b') {
				cbar_target_e.parentNode.insertBefore(fchkb.content.firstChild, cbar_target_e);
			} else {
				cbar_target_e.parentNode.insertBefore(fchkb.content.firstChild, cbar_target_e.nextSibling);
			}
			FB.init({
				appId: app_id, 
				xfbml: false, 
				version: 'v2.10'
			});
			FB.Event.subscribe('messenger_checkbox', function(e) {
				if (e.event == 'checkbox' && e.state == 'checked') {
					cbar_send_messenger = {
						app_id: app_id,
						page_id: page_id,
						user_ref: e.user_ref
					}; 
				} else {
					delete cbar_send_messenger; 
				}
			});
			cbar_target_e.addEventListener('click', cbar_fbmsg_optin);
			FB.XFBML.parse();
		};
		
		if (window.FB) {
			if (document.getElementById('facebook-jssdk') !== null) {
				document.getElementById('facebook-jssdk').remove();
			}
			if (document.getElementById('fb-root') !== null) {
				document.getElementById('fb-root').remove();
			}
			fb_root = document.createElement('div');
			fb_root.setAttribute('id', 'fb-root');
			document.body.appendChild(fb_root);
			delete FB;
		}
		
		var cbar_target_e = document.querySelector((e_id.length > 0) ? '#' + e_id : '.' + e_class);
		if (cbar_target_e !== null) {
			loadjscssfile_callback('https://connect.facebook.net/en_US/sdk.js', 'js', function() { 
				setTimeout(function() { 
					cbar_draw_fb_checkbox(); 
				}, 2000); 
			});
		}
	}

	function cbar_msgzone_email_capture(script, uid, sid, rid) {
		var script_url = script + '?s=' + sid + '&r=' + rid + '&u=' + uid + '&user_email=' + 
			document.getElementById('cbar_getemail_input').value;

		loadjscssfile_callback(script_url, 'js', function() {
			document.getElementById('cbar_msgzone_content').style.display = 'none';
			
			var ecam_div = document.getElementById('email_capture_ajax_msg');
			ecam_div.style.display = 'block';
			ecam_div.innerHTML = result_eca.message;
			if (result_eca.error) {
				ecam_div.innerHTML += ' <a href="javascript://" onclick="document.getElementById(\'email_capture_ajax_msg\').style.display=\'none\';document.getElementById(\'cbar_msgzone_content\').style.display=\'block\';">' + result_eca.backlnk + '</a>';
			}
		});
	}

	function cbar_banner_show(
		img_url, width, height, clk_url, align, 
		position, lrmargin, tbmargin, html_item, zindex, 
		overlay, newwin, banner_id, close_butt_pos, onclick, 
		mouseover, mouseout, rule_id, extra_html, close_butt_id, 
		close_butt_size, close_butt_offset, popup_close,custom_close
	) {
		if (cbar_in_array(rule_id, cbar_suppress_rules)) {
			return; // allow suppressing by js action
		}
		if (
			(cbar_preview_rules == '') && 
			(
				cbar_readCookie('cbar_bc_' + rule_id ) == '1' || 
				cbar_readCookie('cbar_bc_' + cbar_sess + '_'+ rule_id ) == '1'
			)
		) {
			return; // stops both banner and thumbnail
		}

		// if the banner should replace html - check that the element to be replace exists. if not run again later
		if ((position == 'html') && (overlay == 'r' || overlay == 'rp' || overlay == 'in')) {
			if (document.querySelector(html_item) === null ) {
				var args = arguments;
				window.setTimeout(function() {
					cbar_banner_show.apply(window, args);
				}, 600);
				return;
			}
		}
		
		function replaceElement(banners_index) {
			var banner_data = cbar_banners[banners_index];
			var ele = document.querySelector(banner_data.html_item);
			if (banner_data.overlay == 'rp') {
				ele = ele.parentNode;
			}
			if (ele != null) {
				ele.innerHTML = banner_data.banner_html;
			}
			return document.getElementById(banner_data.id);
		}

		// delete banner if it already exists
		var existing = document.getElementById('cbar_banner_' + banner_id);
		if (existing) {	
			existing.parentNode.removeChild(existing);	
		}

		var banner = window.document.createElement('div');
		banner.className = 'cbar_banner';
		banner.id = 'cbar_banner_' + banner_id;
		banner.setAttribute('rule_id', rule_id);
		banner.popup_close = popup_close;
		banner.rule_id = rule_id;
		var target_str = newwin ? ' _blank' : '';
		banner.style.zIndex = (zindex != '') ? zindex : cbar_zindex;
		
		var tmp = '';
		if (onclick || (clk_url != '')) {
			tmp = 'cursor: pointer; cursor: hand; ';
		}

		// img_url can be an image in cbar_userimages or full image url
		if ((img_url.search('http') !== 0) && (img_url.search('//') !== 0)) {
			img_url = cbar_userimages + img_url;
		}

		var banner_html = '<img src="' + img_url + '" style="border: none; ' + tmp + '"> ';

		if (close_butt_pos !='') {		
			cbarApp.closeButtons[rule_id + '|banner'] = {
				pos: close_butt_pos,
				icon: close_butt_id,
				size: close_butt_size,
				offset: close_butt_offset,
				banner_id: banner_id,
				custom: custom_close
			};
			banner_html += draw_close_button(rule_id, 'banner');
		}

		if (extra_html.length>0)  {
			banner_html += cbarApp.cleanString(extra_html);
		}

		if (clk_url.length>0) {
			banner_html = '<a href="' + clk_url + '" target="' + target_str + '" style="border: none;">' + 
				banner_html + '</a>';
		}
		banner.style.width = 'auto';
		banner.style.height = 'auto';
		banner.style.top = '0';
		banner.style.left = '0';
		banner.style.display = 'block';
		banner.style.margin = '0 0 0 0';
		banner.style.position = 'relative'; //position cant be static, so close button will appear inside
		banner.style.visibility = 'visible';
		banner.innerHTML = banner_html;
		
		// get the html of cbar_banner
		var tmp_div = window.document.createElement('div');
		tmp_div.appendChild(banner);
		var banner_outerHTML = tmp_div.innerHTML;

		// store all banner data for repositioning.
		var banner_info = {
			id: 'cbar_banner_' + banner_id,  
			position: position, 
			overlay: overlay, 
			align: align, 
			lrmargin: lrmargin, 
			tbmargin: tbmargin, 
			html_item: html_item, 
			width: width, 
			height: height,
			banner_html: banner_outerHTML
		};
		cbar_banners[cbar_banners.length] = banner_info;

		//get cbar_banner again because it is generated by injecting innerhtml and therefore its not the original dom object
		if ((position == 'html') && (overlay == 'r' || overlay == 'rp')) {
			// overwrite existing HTML element content
			banner = replaceElement(cbar_banners.length - 1);
		}
		
		if (position == 'html' && overlay == 'in') { 
			// insert into
			var ele = document.querySelector(html_item);
			if (ele) {
				var firstchild = ele.firstChild;
				if (firstchild) {
					ele.insertBefore(banner,firstchild);
				} else {
					ele.appendChild(banner);
				}
			}
		}

		if (banner != null) {
			banner.addEventListener('click', function() {
				cbar_click2(null, null, 'bannerPopupEtc', rule_id);
			});
			if (onclick) {
				banner.addEventListener('click', eval('cbar_banner_onclick_' + banner_id));
			}
			if (mouseover) {
				banner.addEventListener('mouseover', eval('cbar_banner_mouseover_' + banner_id));
			}
			if (mouseout) {
				banner.addEventListener('mouseout', eval('cbar_banner_mouseout_' + banner_id));
			}
		}

		if ((position == 'html') && (overlay == 'r' || overlay == 'rp' || overlay == 'in')) {
			return; // overwrite existing HTML element content
		}

		// css position
		if (position == 'html') {
			banner.style.position = 'absolute';
			window.addEventListener('scroll', cbar_banner_scroll_event);
			window.addEventListener('resize', cbar_banner_resize_event);
		} else {
			banner.style.position = (position == 'f') ? 'fixed' : 'absolute';
		}

		window.document.body.appendChild(banner);
		cbar_banner_position(cbar_banners.length - 1);
	}

	function cbar_banner_resize_event() {// # 227
		if (cbar_ban_resizetimeout > 0) {
			window.clearTimeout(cbar_ban_resizetimeout);
		}
		cbar_ban_resizetimeout = window.setTimeout("cbar_banners_position()", 100);
	}

	function cbar_banner_scroll_event() { // must be here for ie6
		if (cbar_ban_scrolltimeout > 0) {
			window.clearTimeout(cbar_ban_scrolltimeout);
		}
		cbar_ban_scrolltimeout = window.setTimeout("cbar_banners_position()", 300);
	}

	// all banners position
	function cbar_banners_position() {
		for (var i = 0; i < cbar_banners.length; i++) {
			cbar_banner_position(i);
		}
	}

	// single banner position
	function cbar_banner_position(banners_index) {
		var banner_data = cbar_banners[banners_index];
		
		var banner = document.getElementById(banner_data.id);
		if (banner === null) {
			return;
		}
		
		if (banner.getAttribute('hidden_banner') !== null) {
			return;
		}

		if ((banner_data.position == 'html') && (banner_data.overlay == 'f')) { // float over html element
			var ele = document.querySelector(banner_data.html_item);
			if (ele !== null) {
				var rect = ele.getBoundingClientRect();				
				if (rect.width > 0 && rect.height > 0) {
					if (banner_data.align === 'c') {
						var clientwidth = document.body.clientWidth;
						banner.style.left = Math.floor((clientwidth / 2) + banner_data.lrmargin - (banner_data.width / 2)) + 'px';
					} else {
						if (banner_data.align.search('t') > -1) {
							banner.style.top = window.scrollY+rect.top + banner_data.tbmargin + 'px';
						}
						if (banner_data.align.search('b') > -1) {
							banner.style.top = (rect.bottom+window.scrollY - banner_data.tbmargin-banner_data.height) + 'px';
						}
						if (banner_data.align.search('l') > -1) {
							banner.style.left = window.scrollX+rect.left + banner_data.lrmargin + 'px';
						}
						if (banner_data.align.search('r') > -1) {
							banner.style.right = (window.document.body.scrollWidth-rect.right  + banner_data.lrmargin) + 'px';
							banner.style.left = 'auto';
						}
						if (banner_data.align.search('c') > -1) {
							banner.style.left = Math.floor((rect.width / 2) + banner_data.lrmargin - (banner_data.width / 2)+rect.left) + 'px';
						}
					}
					banner.style.display = 'block';
				} else {
					cbar_log_console('cbar error: dont use hidden div ' + banner_data.html_item + ' for floating banner position');
					banner.style.display = 'none';
				}
			} else {
				banner.style.display = 'none';
				window.setTimeout('cbar_banner_position(' + banners_index + ')', 600);
			}
			return;
		}

		var clientheight = document.body.clientHeight;
		var clientwidth = document.body.clientWidth;

		if (!((banner_data.position == 'html') && (banner_data.overlay == 'r'))) { // dont reposition banner if its replacing content
			if (banner_data.align.search('t') > -1) {
				banner.style.top = banner_data.tbmargin + 'px'; 
			}
			if (banner_data.align.search('b') > -1) {
				banner.style.bottom = banner_data.tbmargin + 'px'; 
				banner.style.top = 'auto';
			}
			if (banner_data.align.search('l') > -1) {
				banner.style.left = banner_data.lrmargin + 'px'; 
			}
			if (banner_data.align.search('r') > -1) {
				banner.style.right = banner_data.lrmargin + 'px'; 
				banner.style.left = 'auto';
			}
			if (banner_data.align == 'c') {
				banner.style.left = Math.floor((clientwidth / 2) + banner_data.lrmargin - (banner_data.width / 2)) + 'px';  
				banner.style.top = Math.floor((clientheight / 2) + banner_data.tbmargin - (banner_data.height / 2)) + 'px'; 
			} else if (banner_data.align.search('c') > -1) {
				banner.style.left = Math.floor((clientwidth / 2) + banner_data.lrmargin - (banner_data.width / 2)) + 'px';
			}
		}
	}

	// COUPONS

	function cbar_coupon_get(type, rule_id, close) {
		if (typeof close === 'undefined') {
			close = true;
		}
		
		var banpop = '';
		if (type == 1) {
			var banner = document.querySelector('div[rule_id="' + rule_id + '"]');
			if (banner !== null) {
				banpop = banner.id;
			}
		} else if (type == 2) {
			banpop = 'cbar_popup_' + rule_id;
		} else if (type == 3) {
			var oz = document.querySelector('div[rule_id="' + rule_id + '"]');
			if (oz !== null) {
				banpop = oz.id;
			}
		} else if (type == 4) {
			banpop = 'cbar_POP2_' + rule_id;
		}else if (type == 5) {
			banpop = 'cbar_MSG2_' + rule_id;
		}
		
		var usertime = Math.round(new Date().getTime() / 1000);
		// update coupons list
		var cur_coupons = cbar_readCookie('cbar_co');
		// remove old appearance
		if (cur_coupons == null) {
			cur_coupons = '';
		}

		var regExp = new RegExp(rule_id + "~[0-9]+_?|_?" + rule_id + "~[0-9]+", 'gi');
		cur_coupons = cur_coupons.replace(regExp, '');

		if (cur_coupons.length > 3) {
			cur_coupons += '_';
		}
		// add coupon
		cur_coupons += rule_id + '~' + usertime;
		cbar_createCookie('cbar_co', cur_coupons, 365);
		
		// hide all active tooltips
		if (typeof cbar_coups[0] !== 'undefined') {
			var tt = document.querySelector('div[rule_id="' + cbar_coups[0].rule + '"]');
			if (tt !== null) {
				tt.parentNode.removeChild(tt);
			}
		}
		
		var cbar_str = '';
		if (cbar_preview_rules > 0) {
			cbar_str += cbarGetPreviewParams();
		}

		if (cbar_md) {
			cbar_str += '&md=1';
		}

		if (typeof screen.width !== 'undefined') {
			cbar_str += '&scw=' + screen.width + '&sch=' + screen.height;
		}

		if (cbar_cou_in_cart && (cbar_cou_input != '')) {
			cbar_str += '&cou_inj=true'; // experimnetal
		}
		
		cbarLoadData({
			a: 'ca',
			sid: cbar_sid,
			uid: cbar_uid,
			r: rule_id,
			cou: cur_coupons,
			bp: banpop,
			ut: usertime,
			br: cbar_BrowserDetect.browser,
			v: cbar_BrowserDetect.version,
			os: cbar_BrowserDetect.OS,
			url: cbar_url_en
		}, cbar_abt_str + cbar_str);
	
		// hide coupon offer banner or popup (if any)
		
		if (close === true && banpop != '') {
			var tmp = document.getElementById(banpop);
			if (tmp !== null) {
				tmp.style.display = 'none';
				tmp.setAttribute('hidden_banner', '1');
			}
		}
	
		// hide coupon popup (if any)		
		if (close === true) {
			if (type == 4 || type == 5) {
				cbar_close_popup2(rule_id);
			} else {
				cbar_close_popup(rule_id);
			}			
		}
		
		if (typeof cbar_coupon_given === 'function') {			
			cbar_coupon_given(rule_id);
		}
	}

	function cbar_cou_th_anim(rule_id, pop_ban_id, animstep, image_name, image_w, image_h, align, sx, sy, tx, ty) {
		var totalsteps = 30;
		var tmp;

		if (animstep == 0) {
			tmp = document.getElementById(pop_ban_id);

			var scrolltop = document.body.scrollTop || document.documentElement.scrollTop;
			var clientheight = document.body.clientHeight;
			var clientwidth = document.body.clientWidth;

			sx = tmp.offsetLeft;
			sy = tmp.offsetTop + scrolltop;

			ty = (align.search('t') > -1) ? scrolltop : clientheight + scrolltop - image_h;
			tx = (align.search('l') > -1) ? 0 : clientwidth - image_w;

			var element = window.document.createElement('img');
			element.id = 'randomid';
			element.style.position = 'absolute';
			element.style.display = 'block';
			element.style.zIndex = '30000';
			element.src = cbar_userimages + image_name;
			window.document.body.appendChild(element);
		}
		
		tmp = document.getElementById('randomid');
		if (tmp !== null) {
			element = tmp;
			element.style.left = Math.round(sx + (tx - sx) * (animstep / totalsteps)) + 'px';
			element.style.top = Math.round(sy + (ty - sy) * (animstep / totalsteps)) + 'px';
		}
		
		if (animstep < totalsteps) {
			setTimeout('cbar_cou_th_anim(' + rule_id + ", '" + pop_ban_id + "', " + (animstep + 1) + ", '" + image_name +
				"', '" + image_w + "', '" + image_h + "', '" + align + "', " + sx + ", " + sy + ", " + tx + ", " +
				ty + "); ", 50);
		} else {
			element.style.display = 'none';

			// hide coupon banner (if any)
			tmp = document.getElementById(pop_ban_id);
			if (tmp !== null) {
				tmp.style.display = 'none';
				tmp.setAttribute('hidden_banner', '1');
			}
			cbar_close_popup(rule_id);
		}
	}

	function cbar_cou_tooltip(rule_id, banner_id, show, prompt) {
		if (show && (prompt == '')) {
			return;
		}

		var tooltip_tmp = document.querySelector('div#cbar_tooltip_' + rule_id);
		var tooltip;

		if (tooltip_tmp === null) {
			var thumbnail = document.querySelector('div#cbar_banner_' + banner_id);
			var tmp = window.document.createElement('div');
			var xoffset = 0;
			var yoffset = 0;
			if (thumbnail.offsetLeft > 100) {
				xoffset =- 220; 
			} else {
				xoffset = thumbnail.clientWidth + 20;
			}
			if (thumbnail.offsetTop > 100) {
				yoffset =- 100; 
			} else {
				yoffset = thumbnail.clientHeight + 20;
			}

			tmp.innerHTML = '<div id="cbar_tooltip_' + rule_id + '" style="position: absolute; top: ' + yoffset + 
				'px; left: ' + xoffset + 'px; bottom: auto; right: auto; z-index: 30010; display: block; ' +
				'position: absolute; font-size: 12px; width: 213px; height: 94px; border: none; background: url(' + 
				cbar_static_url + 'img/coupons/tooltip_1.png) no-repeat left top; font-weight: normal; color: #333333; ' + 
				'text-align: center"><div style="margin: 10px;">' + cbarApp.cleanString(prompt) + 
				'</div></div>';
			tooltip = tmp.childNodes[0];
			thumbnail.appendChild(tooltip);
		} else {
			tooltip = tooltip_tmp;
		}

		tooltip.style.display = show ? 'block' : 'none';
	}

	function cbar_hide_coupon_box() {
		var cont = true;
		if (typeof cbar_before_hide_coupon_box === 'function') {
			cont = cbar_before_hide_coupon_box();
		}

		if (cont && (typeof window.hide_message !== 'undefined')) {
			var myElement = window.document.createElement('span');
			myElement.innerHTML = '<span style="background: white">' + cbarApp.cleanString(window.hide_message) + '</span>';
			cbar_cou_input.parentNode.insertBefore(myElement, cbar_cou_input);
			cbar_cou_input.style.width = '0px';
			cbar_cou_input.style.padding = '0pt';
			cbar_cou_input.style.margin = '0pt';
			cbar_cou_input.style.border = 'none';
			cbar_cou_input.style.backgroundColor = 'transparent';
		}
	}

	function cbar_cou_inj(cou_code, hide_message) {
		window.cbar_coupon_code = cou_code;
		window.hide_message = hide_message;
		
		var dont_inj_coupon;

		if (typeof cbar_before_cou_inj === 'function') {
			dont_inj_coupon = cbar_before_cou_inj(cbar_cou_input);
		}

		if ((typeof window.hide_message !== 'undefined') && (window.hide_message != '')) {
			cbar_hide_coupon_box();
		}

		if (dont_inj_coupon === false) {
			cbar_log_console('cbar: coupon not injected');
			return;
		}

		cbar_cou_input.value = cou_code;

		if (typeof cbar_after_cou_inj === 'function') {
			cbar_after_cou_inj(cbar_cou_input);
		}
	}

	function cbar_cou_tick() {
		for (var i = 0; i < cbar_coups.length; i++) {
			// find the countdown div
			if (cbar_coups[i].div == null) {
				var tmp = document.querySelector('div#' + cbar_coups[i].id); 
				if (tmp !== null) {
					cbar_coups[i].div = tmp;
				}
			};

			if (cbar_coups[i].secs_left < 1) {
				if (cbar_coups[i].div !== null) {
					cbar_coups[i].div.innerHTML = cbarApp.cleanString(cbar_coups[i].coupon_expired);
				}
				return;
			}

			var hours = Math.floor(cbar_coups[i].secs_left / 3600);
			var minutes= Math.floor((cbar_coups[i].secs_left % 3600) / 60);
			var seconds= Math.floor(cbar_coups[i].secs_left % 60);
			var days = 0;
			var dayshtml = '';
			if (cbar_coups[i].showdays == true) {
				days = parseInt(hours / 24);
				hours -= days * 24;
				if (days > 0) {
					dayshtml = days + cbar_coups[i].daysword + ' ';
				}
			}

			if (cbar_coups[i].div !== null) {
				cbar_coups[i].div.innerHTML = dayshtml + (hours < 10 ? ' 0' : ' ') + hours + (minutes < 10 ? ':0' : ':') +
					minutes + (seconds < 10 ? ':0' : ':') + seconds;
			}
			cbar_coups[i].secs_left--;
		}
	}

	function cbar_cou_reset(rule_id) {
		// remove from to coupons list
		var cur_coupons = cbar_readCookie('cbar_co');
		if (cur_coupons == null) {
			return;
		}

		var regExp = new RegExp(rule_id + "~[0-9]+_?|_?" + rule_id + "~[0-9]+", "gi");
		cur_coupons = cur_coupons.replace(regExp, '');

		cbar_createCookie('cbar_co', cur_coupons, 365);
	}

	function cbar_cou_expire(rule_id) {
		var cur_coupons = cbar_readCookie('cbar_co');
		// remove old appearance
		if (cur_coupons == null) {
			cur_coupons = '';
		}

		var regExp = new RegExp(rule_id + "~[0-9]+_?|_?" + rule_id + "~[0-9]+", "gi");
		cur_coupons = cur_coupons.replace(regExp, '');

		if (cur_coupons.length > 3) {
			cur_coupons += '_';
		}
		
		// add coupon
		cur_coupons += rule_id + '~12345678'; // past (hard coded value)
		cbar_createCookie('cbar_co', cur_coupons, 365);
	}

	var windowResizeDebounce = new cbarApp.DebounceCall(function() {  
		cbar_firecustomevent('cbar_resize' , document, {}); 
	}, 200);
	window.addEventListener('resize', function() {
		windowResizeDebounce.call();
	});

	// add to cart asyncronuosly
	function cbar_add_to_cart(pid, qty, pur_mode) {
		cbar_abt_str = "&abt=" + cbar_abt;
		var cbar_str = '&' + cbar2url['cbar_log'] + '=' + encodeURIComponent(cbar_log);
		
		cbarLoadData({
			a: 'cartu',
			sid: cbar_sid,
			uid: cbar_uid,
			pur: 1,
			pid0: encodeURIComponent(pid),
			qty0: qty,
			pur_mode: pur_mode,
			pur_add: 'true',
			url: encodeURIComponent(window.location.href),
			abt: cbar_abt,
			crt: cbar_crt,
			crtn:cbar_crtn
		}, cbar_str);
	}

	// empty cart asyncronuosly
	function cbar_empty_cart() {
		cbar_add_to_cart('deletecart', 0, 0);
	}

	function cbar_late_update(fieldname, get_value_function, once) {
		if (cbar_ro) {
			return;
		}
		
		var hashCode = function(s) {
			return s.split("").reduce(function(a, b) {
				a = ((a << 5) - a) + b.charCodeAt(0);
				return a & a;
			}, 0);
		};

		var fieldNameCleaned = fieldname.replace(' ', '');
		var cachedValue = null;
		var tmp = cbarApp.storage.session.get('cbar_data_' + fieldNameCleaned);
		if (tmp !== null) {
			cachedValue = tmp;
		}
		
		var retries = 0;
		var timerHandler = setInterval(function() {
			var retval = get_value_function();
			if (retval === false || (typeof retval === 'undefined')) {
				return;
			}

			var retvalHashed = hashCode(retval);

			if (cachedValue === null || retvalHashed !== cachedValue) {
				cachedValue = retvalHashed;
				cbarApp.storage.session.create('cbar_data_' + fieldNameCleaned, retvalHashed);
				if (typeof cbar2url[fieldNameCleaned] !== 'undefined') {
					cbar_str = '&' + cbar2url[fieldNameCleaned] + "=" + encodeURIComponent(retval);
				} else {
					cbar_str = '&' + fieldname + "=" + encodeURIComponent(retval);
				}
				
				cbarLoadData({
					a: 'datau',
					sid: cbar_sid,
					uid: cbar_uid,
					pid: cbar_pid
				}, cbar_str + cbar_abt_str);
				
				retries++;

				if (retries > 20 || once) {
					clearInterval(timerHandler);
				}
			}
		}, 550);
	}

	function cbar_bindReady() {
		if (cbar_readyBound) {
			return;
		}
		
		cbar_readyBound = true;

		// Use the handy event callback
		document.addEventListener('DOMContentLoaded', function() {
			document.removeEventListener('DOMContentLoaded', arguments.callee, false);
			cbar_dom_ready();
		});

		// A fallback to window.onload, that will always work
		window.addEventListener('load', cbar_dom_ready);
	}

	function cbar_start() {
		var initAjaxCart = function() {
			if (cbarApp.cartMonitorInitiated) {
				return;
			}

			if (typeof cbar_check_cart !== 'function') {
				return;
			}

			cbarApp.cartMonitorInitiated = true;

			var cartChecksum = false;

			var tmp = cbar_readCookie('cbar_cart_checksum');
			if (tmp !== null) {
				cartChecksum = unescape(tmp);
			}

			setInterval(function() {
				var retval = cbar_check_cart();
				if (retval === false) {
					return;
				}

				if (retval !== cartChecksum) {
					// something changed in ajax cart
					cartChecksum = retval;
					cbar_createCookie('cbar_cart_checksum', escape(retval), 0);

					// scrape cart
					if (typeof cbar_scrape_ajax_cart === 'function') {
						var cbar_str = '';
						cbar_pur_pids = [];
						cbar_pur_qtys = [];
						cbar_pur_imgs = [];
						cbar_pur_names = [];
						cbar_pur_urls = [];
						cbar_pur_prices = [];
						cbar_pur_subttls = [];
						cbar_pur_xtr1s = [];
						cbar_pur_xtr2s = [];
						cbar_pur_xtr3s = [];
						cbar_pur_xtr4s = [];

						cbar_userinfo = {};
						cbar_user_attribute = {};
						cbar_user_attributes = {};

						cbar_crt = ''; 
						cbar_crtn = '';

						var proceed = cbar_scrape_ajax_cart();

						if (proceed === false) {
							return;
						}

						if (cbar_pur_pids.length > 0 && cbar_pur_pids.length < 25) {
							for (var i = 0; i < cbar_pur_pids.length; i++) {
								cbar_str += '&pid' + i + '=' + encodeURIComponent(cbar_pur_pids[i]);
								cbar_str += '&qty' + i + '=' + ((typeof cbar_pur_qtys[i] === "undefined") ? 1 : cbar_pur_qtys[i]);

								if (cbar_pur_mode == 3) {
									if (typeof cbar_pur_imgs[i] !== 'undefined') {
										cbar_str += '&img' + i + '=' + encodeURIComponent(cbar_pur_imgs[i]);
									}
									if (typeof cbar_pur_names[i] !== 'undefined') {
										cbar_str += '&name' + i + '=' + encodeURIComponent(cbar_pur_names[i]);
									}
									if (typeof cbar_pur_urls[i] !== 'undefined') {
										cbar_str += '&url' + i + '=' + encodeURIComponent(cbar_pur_urls[i]);
									}
									if (typeof cbar_pur_prices[i] !== 'undefined') {
										cbar_str += '&price' + i + '=' + encodeURIComponent(cbar_pur_prices[i]);
									}
									if (typeof cbar_pur_subttls[i] !== 'undefined') {
										cbar_str += '&subttl' + i + '=' + encodeURIComponent(cbar_pur_subttls[i]);
									}
									if (typeof cbar_pur_xtr1s[i] !== 'undefined') {
										cbar_str += '&xtr1' + i + '=' + encodeURIComponent(cbar_pur_xtr1s[i]);
									}
									if (typeof cbar_pur_xtr2s[i] !== 'undefined') {
										cbar_str += '&xtr2' + i + '=' + encodeURIComponent(cbar_pur_xtr2s[i]);
									}
									if (typeof cbar_pur_xtr3s[i] !== 'undefined') {
										cbar_str += '&xtr3' + i + '=' + encodeURIComponent(cbar_pur_xtr3s[i]);
									}
									if (typeof cbar_pur_xtr4s[i] !== 'undefined') {
										cbar_str += '&xtr4' + i + '=' + encodeURIComponent(cbar_pur_xtr4s[i]);
									}
								}
							}
						}

						cbar_str += '&' + cbar2url['cbar_crt'] + '=' + cbar_crt + '&' + cbar2url['cbar_crtn'] + '=' + 
							cbar_crtn + '&' + cbar2url['cbar_log'] + '=' + encodeURIComponent(cbar_log);

						cbarLoadData({
							a: 'cartu',
							sid: cbar_sid,
							uid: cbar_uid,
							pur: 1,
							pur_mode: cbar_pur_mode,
							pur_add: cbar_pur_add,
							url: encodeURIComponent(window.location.href)
						}, cbar_str + 
							'&' + cbar_any2url('attu', cbar_user_attributes) + 
							'&' + cbar_any2url('attu1', cbar_user_attribute) + 
							'&' + cbar_any2url('attrecs', cbarApp.recsAttributes) +
							'&' + cbar_any2url('uinf', cbar_userinfo) + 
							cbar_abt_str
						);
					}
				}
			}, 600);
		};
		
		try {
			var wait = false;

			if (typeof cbar_hold_execution === 'function') {
				wait = cbar_hold_execution();
			}

			if (wait) {
				cbar_log_console('cbar wait');
				window.setTimeout(function() {
					cbar_start();
				}, 500);
				return;
			}

			if (cbar_alreadyrunflag) {
				return;
			}

			cbar_alreadyrunflag = true;

			// cookie domain (starts with dot)
			if (!cbar_cookiedomain) {
				if (document.location.host.substring(0, 4) === 'www.') {
					cbar_cookiedomain = '.' + document.location.host.substring(4);
				} else {
					cbar_cookiedomain = '.' + document.location.host;
				}
			}
			
			// bots
			if (typeof navigator.userAgent !== 'undefined') {
				if (navigator.userAgent.search('Googlebot') > -1) {
					return;
				}
				if (navigator.userAgent.search('BrowserMob') > -1) {
					return;
				}				
			}

				
/**/


cbar_sid 			= 34296; 		//determine the SID using QWERTY format using first 5 chars of the domain name
cbar_widget_show	= false;	//turn this on (set to true) only when ready for production, otherwise use widget_show=true as URL parameter to view the widgets in test mode
cbar_widget 		= true;		//required for widgets
cbar_num_widgets	= 1;			//Set number of widgets in a page

//cbar_catmode 		= 2;		//not required in new scraping mode.
cbar_encode 		= '';		//set according to the encoding of the website. eg utf-8

// General associating variables
var cbar_temp		= '';
var cbar_temp2 		= '';
var cbar_match		= '';
var cbar_pattern 	= '';
var cbar_arr 		= '';
cbar_c_from_p		= true;

cbar_oos = 2;


cbar_cookiedomain	= '.personal.com.ar';	//replace  domain.com with actual site domain	
//if (cbar_url.search('.yahoo.net')>-1) cbar_cookiedomain = '.yahoo.net';

//handle any test environmnets. we don't want to save any test env urls.
if (window.location.href.match(/(:\/\/[0-9.]+)\//) !=null) cbar_ro=1;
if (window.location.href.search('localhost') >-1 ) cbar_ro=1;

//handle urls with google translation as read only

if(cbar_url.toLowerCase().search('translate.googleusercontent.com')>-1) cbar_ro=true;

//##replace it with actual domain name.

if(document.location.hostname.toLowerCase().search('personal.com.ar') == -1) cbar_ro = true;

//Ultimate bought

cbar_temp = cbar_gup('cbar_ultimate_bought');

if( cbar_temp == "true" ){
  cbar_createCookie('ultimate_bought_widget','true');
}else if( cbar_temp == "false" ){
  cbar_createCookie('ultimate_bought_widget','false');
}
if( cbar_readCookie('ultimate_bought_widget')  != null  &&   cbar_readCookie('ultimate_bought_widget')  == 'true' ){
  var  ultimate_bought_widget  = true;
}else{
  var  ultimate_bought_widget  = false;
} 



// Widget titles
cbar_recstep_titles = []; // required temporarily
cbar_recstep_titles[1]="Las personas que vieron este producto también vieron";
cbar_recstep_titles[2]="Productos populares"; 
cbar_recstep_titles[3]="Visitada recientemente";
cbar_recstep_titles[4]="Te puede interesar"; 
cbar_recstep_titles[5]="Te puede interesar";
cbar_recstep_titles[6]="Te puede interesar";
cbar_recstep_titles[7]="Personas que compraron este producto también compraron";
cbar_recstep_titles[8]="Productos populares"; 
cbar_recstep_titles[9]="El último producto que vieron las personas que hicieron esta búsqueda";
cbar_recstep_titles[10]="Te puede interesar";
cbar_recstep_titles[11]="Sugerencias de productos que pueden ser de interés";
cbar_recstep_titles[12]="Los más vendidos en las categorías que has visitado";
cbar_recstep_titles[13]="Otros clientes se interesaron por estos otros productos";
cbar_recstep_titles[14]="Te puede interesar";
cbar_recstep_titles[18]= " ¿Que se compra despues de ver este producto?";
cbar_recstep_titles[22]="También podría gustarte";
cbar_recstep_titles[24]="Productos de venta";
cbar_recstep_titles[100]="Las personas que vieron este producto también vieron";
cbar_recstep_titles[222]="Recomendados para vos";


// determines the widget that are shown on the pages. Required for display of widgets. 
//Can be different from site to site. Below cbar_flow displays "Recently Viewed" items in the widget.
//cbar_flow="H0:1,4,3,13,10.0.0.0.0.1,5.9,12,8;H1:1,0,0,0,0;P0:1,2,3,13,1,5,2;P1:1,2,4.4,4.2,2;C0:1,2,3,13,5.0,2.0;C1:1,0,0,0,0;Sc0:1,2,3,7.4,7.2.0.0.7,11.4,11.2.0.0.7;Sc1:1,0,0,0,0";

//standard flow
cbar_flow="H0:1-1,5-10,3.0.0.222.0.1,5.9.0.222,12.0.0.222,8;H1:1,0,0,0,0;P0:1-1,4-16,1,5.0.0.1,22.0.0.1,2;P1:1-1,4-8,4.4,4.2,1.4,1.2;C0:1-1,4-8,5.6,2.6,5.0,2.0;C1:1,0,0,0,0;Sc0:1-1,2-8,7.4,7.2.0.0.7,11.4,11.2.0.0.7;Sc1:1,0,0,0,0";


//New Mode: reset extra variables with a space to support new mode (in new mode , empty fields do not get updated)
cbar_extra1=" "; //deal with old price that has been removed
//cbar_extra2 = " "; 	
//cbar_extra3 = " "; 	


 
cbar_after_load= function  (cbar_mode){

	if ( cbar_mode == 'widget') {
	    
	    
	    	//remove duplicate products with the results
			var names=[];
			for (var group_ctr=0; group_ctr <cbar_results.length; group_ctr++)
			{
			    for (var t=0; t < cbar_results[group_ctr].length ; t++)
				{
					
					var rec_item_name = decodeURIComponent(cbar_results[group_ctr][t][2]).split("-");
					var cbar_pro_name = rec_item_name[0].replace(/^\s+|\s+$/g,'');
					if (cbar_in_array (cbar_pro_name, names)) 
					{
					 	cbar_results[group_ctr].splice (t,1);
						t--;
					}
					names.push (cbar_pro_name);
				}
			}
			// remove duplicate products on cart page
			
	    
			for (var group_ctr=0; group_ctr <cbar_results.length; group_ctr++){
	            for (var t=0; t < cbar_results[group_ctr].length ; t++){
					
					//decode extra vars
					cbar_results[group_ctr][t][16] = decodeURIComponent(cbar_results[group_ctr][t][16]);
					cbar_results[group_ctr][t][17] = decodeURIComponent(cbar_results[group_ctr][t][17]);
					cbar_results[group_ctr][t][18] = decodeURIComponent(cbar_results[group_ctr][t][18]);
					
					//trim spaces in extra variables.
					cbar_results[group_ctr][t][16] = cbar_results[group_ctr][t][16].replace(/^\s+|\s+$/g,'');
					cbar_results[group_ctr][t][17] = cbar_results[group_ctr][t][17].replace(/^\s+|\s+$/g,'');
					cbar_results[group_ctr][t][18] = cbar_results[group_ctr][t][18].replace(/^\s+|\s+$/g,'');
					
				
					//Snippet: replace the . with comma in prices
					/*
					if (cbar_results[group_ctr][t][4] != "") {
						cbar_results[group_ctr][t][4] = cbar_results[group_ctr][t][4].replace(".",",");                       
					} 
					if (cbar_results[group_ctr][t][16] != " ") {//if extra1 does not contain blank value
						cbar_results[group_ctr][t][16] = cbar_results[group_ctr][t][16].replace(".",",");                       
					}*/
					
					
				}
	        }
		}
	
} // end

/*
cbar_after_show: Is called after widget is rendered & displayed on the browser. 
Can be used to manipulate the display of widgets like turning on extra vars divs, turning off marigns from items based on position, hidding other/default site widgets,  etc.
*/

cbar_after_show= function  ( mode){
	if (mode == 'widget') { 
		for (var group_ctr=0; group_ctr <cbar_results.length; group_ctr++){
		
			for (var t=0; t < cbar_results[group_ctr].length ; t++)
			{
				
				//display old price if any in extra1 var
				if (cbar_results[group_ctr][t][16] != "") { //if extra1 is not empty
					tmp = cbar_Sizzle('div#cbar_w'+ group_ctr +'_'+t+'_item_xtr1_s');					
					if(tmp.length){
						tmp[0].style.display="";
					}
				}
				
				/*
				//enable the ultimately bought widget text:
				if (cbar_results[group_ctr][t][19] >0) {
					if (cbar_results[group_ctr][t][6] == cbar_pid) {// show ultimately bought current product						
						tmp= document.getElementById("cbar_w"+group_ctr+"_"+t+"_item_perc_pur2_s");
						if (tmp!=null) {
							tmp.style.display='block';							
							tmp.style.color="green";
						}
					}						
					else {	// show ultimately bought not current product.					
						tmp= document.getElementById("cbar_w"+group_ctr+"_"+t+"_item_perc_pur_s");
						if (tmp!=null) tmp.style.display='block';						
						}
					} //end ultimately bought;
					*/
			}
			
			//hide default widget if any
			if( cbar_widget_show == true)
			{
				// Hide widget1
				tmp = cbar_Sizzle("");	
				if(tmp.length>0 && group_ctr==0)
				{
					tmp[0].style.display="none";
				}
				
				// Hide widget2
				tmp = cbar_Sizzle("");	
				if(tmp.length>0 && group_ctr==1)
				{
					tmp[0].style.display="none";
				}
			}
		}
	}
} //end


 
 
// for responsive Widget
elem=document.getElementById("cbar_mq_css");
if(elem != null){
	elem.parentNode.removeChild(elem);
}

cbar_mq_css = (function(id) {
		
		// Create the <style> tag				
		var style = document.createElement("style");

		// Add a media (and/or media query) here if you'd like!
		// style.setAttribute("media", "screen")
		//style.setAttribute("media", "@media only screen and (max-width : 1024px)")
		
		style.setAttribute('id',id);
		//style.setAttribute("media", media_query)

		// WebKit hack :(
		style.appendChild(document.createTextNode(""));

		// Add the <style> element to the page
		document.head.appendChild(style);
		
		return style.sheet;
		
})('cbar_mq_css');	


cbar_mq_addCSSRule = function(sheet, selector, rules, index) {
	
	try
	{
		if(sheet.insertRule) {
			sheet.insertRule(selector + "{" + rules + "}", index);
		}
		else {
			sheet.addRule(selector, rules, index);
		}
	}
	catch(e)
	{
		if(window.console) console.log('Bari: Failed to add CSS');
		//alert("Failed"+ e.message);
	}
}




cbar_ga_eventtrack = function(link,category,action,opt_label){

  if (typeof(ga) != 'undefined') {
	  var tracker = ga.getAll()[0].get('name') + '.send';				
	  ga(tracker,'event', category, action, opt_label);
	  return;
  }
  
   else if (typeof(_gaq) != 'undefined') {
	  _gaq.push(['_trackEvent', category, action, opt_label]);
	  return;
  }    	
  
}
//Staging site
cbar_staging_site = false;
if(document.location.hostname.toLowerCase().search('tienda-test.personal.com.ar') >-1){
    cbar_ro = true;
	cbar_staging_site = true;
}


//New site changes 

cbar_url= window.location.href;
cbar_url_en = encodeURIComponent(cbar_url);
cbar_pagetype = "U";
cbar_pur_pids = [];
cbar_pur_qtys = [];
cbar_w_anchor = [];
cbar_crt = '';
cbar_crtn = '';
cbar_pur_mode = 0;	
cbar_pid = '';
cbar_cid = '';	
cbar_filter_val = '';
cbar_cname = '';
cbar_cids_p = '';
cbar_oos_page = '';
cbar_search = '';
cbar_home = false;
cbar_brand = false;
cbar_4U = false;
cbar_is_pur = false;
cbar_pur_com = false;
cbar_num_widgets	= 2
cbar_del_widgets();
cbar_log = '';

//remove any messagebars
var tmp = cbar_Sizzle('div[id^="cbar_MSG"');
if (tmp.length) tmp.forEach((e)=>e.remove());

//url watcher..
if(typeof(cbar_previous_url) == 'undefined'){ cbar_previous_url = document.location.href; }
cbar_url_watcher = function() {
	if(document.location.href != cbar_previous_url) {
		
		cbar_previous_url = document.location.href;
		window.clearInterval(cbar_url_watcher_interval);		
		window.setTimeout(function() { 
			if(window.console) console.log('bari: page change');			
			cbar_alreadyrunflag = false;
			cbar_start();
		}, 200);
	}
}

if(typeof(cbar_url_watcher_interval) !='undefined') window.clearInterval(cbar_url_watcher_interval);
cbar_url_watcher_interval = window.setInterval(cbar_url_watcher, 500);

// Home page scraping
if (document.location.href.search('tienda-test.personal.com.ar/tienda') > -1) cbar_home=true;


	
// Category page scraping . Scrape for cid and cname(optional)
cbar_temp = cbar_Sizzle (''); 
if (cbar_temp.length >0) {    
	
	// Important: when taking cids from URL its recommended to use document.location.pathname instead of cbar_url to reduce junk categories
	// eg. document.location.pathname.replace(/^\//,""); //eg output: "audio-mp3/apple-ipod"
	// Junk categories generated due to query string variables, paging variables etc. must be stopped.
	
	cbar_cid	= "";
	cbar_cname	= "";	//optional
	
  
  //.. make sure to set cbar_ro=1 for virtual categories such as best seller, new products, brand etc

  	// ###### important: Assign full path to cid where there are chances of categories like (Womens >> Shoes & Mens >> Shoes), here "Shoes" is ambiguous if not assigned the full path
	if(cbar_cids_p!="" && cbar_cid !=""){
		cbar_cid = cbar_cids_p +"_"+ cbar_cid;		
	}	
	
	
	cbar_cid = cbar_cid.toLowerCase();	//make sure alpha-numeric CIDs are always lowerCased
	cbar_cids_p = "";

 }


// Product page scraping
//cbar_temp = cbar_Sizzle ('div.ui.grid.product-detail');
cbar_temp = cbar_Sizzle ('.product-detail .pd-product-detail .product-description-content');
if (cbar_temp.length>0){
	
	// Cbar Pid
	if(typeof(dataLayer) != "undefined"){
		for (var key = dataLayer.length; key >= 0; key--) { 
			if(typeof(dataLayer[key]) != "undefined" && typeof(dataLayer[key].detail) != "undefined" && typeof(dataLayer[key].detail.product[0].id) != "undefined"){
				cbar_temp = dataLayer[key].detail.product[0].id;
				if(cbar_temp != ''){
					cbar_pid = cbar_temp.toLowerCase();
					break;
				}
			} 			
		}
	}
	
	
	
	if(cbar_pid !== "") {    				
    	cbar_temp = document.querySelectorAll('.container .btn-buy-content .button');
    	if (cbar_temp.length) {
    		cbar_temp[0].addEventListener("click", function () {
    			//Product qty
    			var cbar_tmp_qty = "1"; 
    			cbar_add_to_cart(cbar_pid, cbar_tmp_qty, 0);
    		});
    	}
    }
	
	
	if (cbar_pid.search('tel:') >-1) { // on Ipad/iphone a number is turned into <a href="tel:1102373">1102373</a>
		cbar_pattern = /([0-9]+)/gim; 
		cbar_match= cbar_pattern.exec(cbar_pid); 
		if (cbar_match!=null && cbar_match[1].length>0) cbar_pid= cbar_match[1]; 
	}
	
	cbar_cid = 'dummy';
	cbar_cname = 'dummy';
}	//end product page
	
//Search page scraping
//Not available search page 


// Shopping Cart scraping.
if (cbar_url.toLowerCase().search('/checkout')>-1 && cbar_url.toLowerCase().search('status=') == -1 ) 
{
	
	cbar_is_pur		= 1;
	cbar_pur_pids	= [];
	cbar_pur_qtys	= [];
	
    /*
	if(typeof(dataLayer) != "undefined"){
		for (var key in dataLayer){					
			if(typeof(dataLayer[key].detail) != "undefined" && typeof(dataLayer[key].detail.product[0].id) != "undefined"){
				cbar_temp = dataLayer[key].detail.product[0].id;
				if(cbar_temp != ''){
					cbar_pur_pids.push(cbar_temp.toLowerCase());
					break;
				}
			} 
		}
	}
	
	if(typeof(dataLayer) != "undefined"){
		for (var key in dataLayer){					
			if(typeof(dataLayer[key].product) != "undefined" && typeof(dataLayer[key].product.quantity) != "undefined"){
				cbar_temp = dataLayer[key].product.quantity;
				if(cbar_temp != ''){
					cbar_pur_qtys.push(cbar_temp);
					break;
				}
			} 
		}
	}*/
	
	if (typeof(dataLayer) != "undefined") {
        for (var key = dataLayer.length; key >= 0; key--) { 
            if (typeof(dataLayer[key]) != "undefined" && typeof(dataLayer[key].event) != "undefined" && dataLayer[key].event == "checkoutStep" && typeof(dataLayer[key].products) != "undefined" && dataLayer[key].products.length) {
                cbar_temp_products = dataLayer[key].products;
    
                for (var i in cbar_temp_products) {
                    cbar_temp_pid = cbar_temp_products[i].id
                    cbar_temp_quantity = cbar_temp_products[i].quantity
    
                    if (typeof cbar_temp_pid !== 'undefined' && cbar_temp_pid != '' && typeof cbar_temp_quantity !== 'undefined' && cbar_temp_quantity != '') {
                        cbar_pur_pids.push(cbar_temp_pid.toLowerCase());
                        cbar_pur_qtys.push(cbar_temp_quantity);
                    }
    
                }
                break;
    
            }
        }
    }
	  
	 
}	//end shopping cart	

  
// Scrape email inputs. We scrape all the possible email inputs as an array from checkout, login or register pages

cbar_waitforelement("input#email", function(element){
	cbar_em_listen(element[0]);
	cbar_e_com = true;
});

//end email


// Thank You Page scraping. (possible only after purchase is made)
if  (cbar_url.toLocaleLowerCase().search("confirm_purchase_action_completed")>0) {  
	
	cbar_is_pur		= 1;			
	cbar_pur_com	= true;	//actual buy took place
	
} // end thank you

//set a customer attribute (#ticket-3520-68)
var cbar_pagev = parseInt(cbar_readCookie('cbar_sess_pv'));
if (isNaN(cbar_pagev)) 
{
	cbar_user_attribute['Visited Thank You Page'] = 'No';
}
else {
    
    if((cbar_url.search('/checkout/') > -1) && (cbar_gup('step') == '2') || (cbar_gup('step') == '3') || (cbar_gup('step') == '4')) {
         cbar_user_attribute['Visited Thank You Page'] = 'No';
    }else {
         
          if((cbar_url.search('/checkout/') > -1 && cbar_gup('step') == '1') || 
            (cbar_url.search('/checkout/') > -1 && cbar_gup('status').toLowerCase() == 'purchase_promissory_action_completed') || 
            (cbar_url.search('/checkout/') > -1 && cbar_gup('step') == 'form') || 
            (cbar_url.search('/checkout/') > -1 && cbar_gup('status').toLowerCase() == 'confirm_purchase_action_completed') || 
            (cbar_url.search('/checkout/404preinvoice') > -1) || (cbar_url.search('/checkout/processingpayment') > -1 ))
            {
                cbar_user_attribute['Visited Thank You Page'] = 'Yes';
            }
         
    }
    
}



// Widgets Begin
//No widgets 


function cbar_check_ref(domain) { // example : xxxxxxxx.com    
	var cbar_temp_ref = '';
	var regex = /([^\?]*)/;
	var result = regex.exec(document.referrer); // Remove parameters
	if ( result!=null && result[1]!=null ) 
		cbar_temp_ref = result[1];
	else
		cbar_temp_ref = document.referrer;
	if (cbar_temp_ref.search(domain) == -1) {
		cbar_ro=true;
		return 1; // Didn't come from the domain
	}
	else return 0; // Came from the domain
}


						
			//Render cbar CSS
			cbarApp.styles.renderDefaultStyles();

			// check cookiedomain
			if (
				(typeof cbar_cookiedomain !== 'undefined') && 
				(document.location.host.search(cbar_cookiedomain.substring(1)) === -1)
			) {
				cbar_log_console('cbar_cookiedomain not set properly');
				return;
			}

			// trim pid to 64 bytes
			if (typeof cbar_pid === 'string') {
				cbar_pid = cbar_pid.substring(0, 63);
			}

			// if unsupported browser
			if (!cbar_in_array(cbar_BrowserDetect.browser, ['Explorer', 'Safari', 'Firefox', 'Chrome', 'Mozilla', 'Opera', 'Edge'])) {
				return; 
			}

			// Opera allowed only on android
			if ((cbar_BrowserDetect.browser === 'Opera') && (cbar_BrowserDetect.OS !== 'Android')) {
				return;
			}

			// Error detection:
			// cookiedomain setting - does cbar_uid appear more than once in cookie
			var tmp = document.cookie.split(' cbar_uid'); //space required. other cookies may inc cbar_uid
			if (tmp.length > 2) {
				cbar_elog = 'cookiedomain_problem';
			}

			// check for user cookie
			cbar_uid = cbar_readCookie('cbar_uid');
			if (typeof cbar_uid_override === 'function') {
				cbar_uid_override();
			}

			if (cbar_uid == null) {
				cbar_uid = Math.ceil(10000000000000 * Math.random());
				cbar_createCookie('cbar_uid', cbar_uid, 365);

				// check cookies support
				cbar_uid = cbar_readCookie('cbar_uid');

				if ((typeof cbar_uid === 'undefined') || cbar_uid == null || isNaN(cbar_uid)) {
					cbar_log_console('cbar cookies disabled or cookiedomain problem');
					return;
				}
			} else {
				cbar_createCookie('cbar_uid', cbar_uid, 365); // refresh
			}

			if (!isNaN(cbar_abt) && cbar_abt > 0) {
				if (cbar_readCookie('cbar_abt_' + cbar_abt_key) == null) {
					cbar_abt = (Math.ceil(100 * Math.random()) < cbar_abt) ? 'b' : 'a';
					if (typeof cbar_override_ab === 'function') {
						cbar_abt = cbar_override_ab();
					}
					cbar_createCookie('cbar_abt_' + cbar_abt_key, cbar_abt, 365);
				} else {
					cbar_abt = cbar_readCookie('cbar_abt_' + cbar_abt_key);
				}
			} else {
				cbar_abt = 'a';// default
			}

			cbar_abt_str = "&abt=" + cbar_abt;

			if (typeof cbar_abt_func === 'function') {
				cbar_abt_func(cbar_abt);
			}

			var test_modes = [
				'cbar_debug_show',
				'cbar_widget_show',
				'cbar_facebook_show',
				'cbar_shortlist_show',
				'cbar_catper_show',
				'cbar_preview_live', 
				'cbar_cp_show',
				'cbar_analytics_show'
			];
			for (var ii = 0; ii < test_modes.length; ii++) {
				if (cbar_gup(test_modes[ii]) != "") {
					if (cbar_gup(test_modes[ii]) == 'true') {
						cbarApp.storage.local.create(test_modes[ii], 'true');
					} else {
						cbarApp.storage.local.remove(test_modes[ii]);
					}
				}
				// set the variable
				if (cbarApp.storage.local.get(test_modes[ii]) !== null) {
					eval(test_modes[ii] + " = " + cbarApp.storage.local.get(test_modes[ii]) + ";");
				}
			}

			// for backward compatibility. its replaced by cbar_widget_show. remove in the future
			if (cbar_gup('widget_show') == "true") {
				cbar_createCookie('cbar_widget_show', 'true', 365);
			}
			if (cbar_gup('widget_show') == "false") {
				cbar_createCookie('cbar_widget_show', 'false', 365);
			}
			if (cbar_readCookie('cbar_widget_show') == 'true') {
				cbar_widget_show = true;
			}
			
			//Preview rule/s
			var temp = cbar_gup('cbar_preview_rules');
			if (temp !== '') {
				// if prev rules changed
				if (temp === 'false') {
					temp = '';
				}
				if (temp === 'true') {
					temp = '1';
				}
				cbar_createCookie('cbar_preview_rules', temp, 0);
				cbar_createCookie('cbar_preview_variation', cbar_gup('cbar_preview_variation'), 0);
				cbar_createCookie('cbar_preview_widgets', '', 0);
			}
			
			cbar_preview_rules = cbar_readCookie('cbar_preview_rules');
			cbar_preview_variation = cbar_readCookie('cbar_preview_variation');
			if (cbar_preview_rules === null) {
				cbar_preview_rules = '';
				cbar_preview_variation = '';
			}
			
			if (cbar_preview_rules > 1) {
				var temp2 = cbar_gup('cbar_preview_widgets');
				if (temp2 !== '') {
					cbar_createCookie('cbar_preview_widgets', temp2, 0);
				}
				cbar_preview_widgets = cbar_readCookie('cbar_preview_widgets');
			}

			if (cbar_readCookie('cbar_ro') == 'true') {
				cbar_ro = true;
			}
			
			//Visual Editor
			var veToken = cbar_gup('cbar_ve_token');
			if (veToken !== '') {
				cbarApp.storage.session.create('cbar_ve_token', veToken);
			} else {
				veToken = cbarApp.storage.session.get('cbar_ve_token', '');
			}
			if (veToken !== '' && cbar_sid != 777777) {
				loadjscssfile(cbarApp.appDomain + '/assets/css/visual-editor.css', 'css');
				loadjscssfile(cbarApp.appDomain + '/assets/js/dist/visual-editor-injector.min.js?2', 'js');
			}

			//Tooltips Editor
			var tooltipsToken = cbar_gup('cbar_tooltips_token');
			if (tooltipsToken !== '') {
				cbarApp.storage.session.create('cbar_tooltips_token', tooltipsToken);
			} else {
				tooltipsToken = cbarApp.storage.session.get('cbar_tooltips_token', '');
			}
			if (tooltipsToken !== '' && cbar_sid != 777777) {
				loadjscssfile(cbarApp.appDomain + '/assets/css/tooltips-editor.css', 'css');
				loadjscssfile(cbarApp.appDomain + '/assets/js/dist/tooltips-editor-injector.min.js?2', 'js');
			}
			
			//Element selector widget
			var token = cbar_gup('cbar_esw_token');
			if (token !== '') {
				cbarApp.storage.session.create('cbar_esw_token', token);
			} else {
				token = cbarApp.storage.session.get('cbar_esw_token', '');
			}
			if (token !== '' && cbar_sid != 777777) {
				loadjscssfile(cbarApp.appDomain + '/assets/css/visual-editor.css', 'css');
				loadjscssfile(cbarApp.appDomain + '/assets/js/dist/element-selector-widget.min.js', 'js');
			}
			
			//if there was a click on widget in the previous page view, report it
			var clk = cbarApp.storage.local.get('cp_wid_clk');
			if (clk) {
				cbar_data_params += "&CP_clk=" + encodeURIComponent(clk.w + "~" + clk.c + "~" + clk.i + ((typeof clk.r !== 'undefined') ? "~" + clk.r : ""));
				cbarApp.storage.local.create('cp_wid_clk', "");
				// write global to be able to report to google analytics by finding it
				window.cbar_cp_just_clicked = true;
			}
			
			//Click monitoring
			if (cbarApp.clickMonitor.enabled === true) {
				cbarApp.clickMonitor.run();
			}

			// content personalization start
			if (cbar_CP) {
				cbar_CP_start();
			}

			// Automatic OOS - if there was a click and its not a product page report OOS page
			if (cbar_auto_oos) {
				if ((typeof cbar_pid === 'undefined') || (cbar_pid.length == 0)) {
					// not a product page
					var data = cbar_readCookie('cbar_rec_clk');
					if (data !== null) {
						if ((data.originalProductId || 0) !== 0) {
							// cbar_click3 implemented so we have original pid
							cbar_pid = cbarApp.cleanString(data.originalProductId);
							cbar_oos_page = true;
							cbar_oos = 1;
							cbarApp.storage.session.remove('cbar_rec_clk');
						}
					}
				}
			}

			if (cbar_home) {
				cbar_pagetype = "H";
			}
			if (cbar_4U) {
				cbar_pagetype = "4U";
			}
			if (cbar_other) {
				cbar_pagetype = "O";
			}
			if (cbar_pid) {
				cbar_pagetype = "P";
			}
			if ((cbar_cid || cbar_pid2cid) && !cbar_pid) { 
				cbar_pagetype = "C"; 
			}
			if (cbar_brand) {
				cbar_pagetype = "B";
			}
			if (cbar_is_pur) {
				cbar_pagetype = "Sc";
			}
			if (cbar_is_checkout) {
				cbar_pagetype = "Co";
			}
			if (cbar_pur_com) {
				cbar_pagetype = "Pu";
			}
			if (cbar_search != '') {
				cbar_pagetype = "S";
			}
			if (cbar_oos_page) {
				cbar_pagetype = "OOS";
			}

			// update the server on product, home, cat or cart page
			if (
				cbar_cid || cbar_pid2cid || cbar_pid || cbar_home || cbar_brand || cbar_4U || cbar_is_pur || 
				cbar_is_checkout || cbar_search || cbar_pagetype == 'U' || cbar_pagetype == 'O' || cbar_pagetype == 'OOS'
			) {
								if (cbar_widget_show == true) {
					cbar_w_init();
				}
				
				var cbar_str = '';

				if (cbarApp.clickMonitor.enabled === true) {
					cbar_str += '&cm_o=1';
				}
				if (cbar_encode) {
					cbar_str += '&enc=' + cbar_encode;
				}
				if (cbar_c_from_p) {
					cbar_str += '&cfp=1';
				}
				if (cbar_block_bt) {
					cbar_str += '&blockbt=1';
				}
				if (cbar_is_pur) {
					if (cbar_pur_pid_add) {
						cbar_str += '&pid_add=' + encodeURIComponent(cbar_pur_pid_add);
					}
					if (cbar_pur_qty_add) {
						cbar_str += '&qty_add=' + encodeURIComponent(cbar_pur_qty_add);
					}
					if ((typeof cbar_pid !== 'undefined') && (cbar_pid.length > 0)) {
						cbar_pur_pids.push(cbar_pid);
						cbar_pur_qtys.push(cbar_qty);
					}
					if (cbar_pur_com == true) {
						cbar_str += '&pur_com=true';
					}
					if (cbar_pur_pids.length >0) {
						for (var i = 0; i < cbar_pur_pids.length; i++) {
							cbar_str += '&pid' + i + '=' + encodeURIComponent(cbar_pur_pids[i]);
							cbar_str += "&qty" + i + "=" + ((typeof cbar_pur_qtys[i] === "undefined") ? 1 : cbar_pur_qtys[i]);

							if (cbar_pur_mode == 3) {
								if (typeof cbar_pur_imgs[i] !== 'undefined') {
									cbar_str += '&img' + i + '=' + encodeURIComponent(cbar_pur_imgs[i]);
								}
								if (typeof cbar_pur_names[i] !== 'undefined') {
									cbar_str += '&name' + i + '=' + encodeURIComponent(cbar_pur_names[i]);
								}
								if (typeof cbar_pur_urls[i] !== 'undefined') {
									cbar_str += '&url' + i + '=' + encodeURIComponent(cbar_pur_urls[i]);
								}
								if (typeof cbar_pur_prices[i] !== 'undefined') {
									cbar_str += '&price' + i + '=' + encodeURIComponent(cbar_pur_prices[i]);
								}
								if (typeof cbar_pur_subttls[i] !== 'undefined') {
									cbar_str += '&subttl' + i + '=' + encodeURIComponent(cbar_pur_subttls[i]);
								}
								if (typeof cbar_pur_xtr1s[i] !== 'undefined') {
									cbar_str += '&xtr1' + i + '=' + encodeURIComponent(cbar_pur_xtr1s[i]);
								}
								if (typeof cbar_pur_xtr2s[i] !== 'undefined') {
									cbar_str += '&xtr2' + i + '=' + encodeURIComponent(cbar_pur_xtr2s[i]);
								}
								if (typeof cbar_pur_xtr3s[i] !== 'undefined') {
									cbar_str += '&xtr3' + i + '=' + encodeURIComponent(cbar_pur_xtr3s[i]);
								}
								if (typeof cbar_pur_xtr4s[i] !== 'undefined') {
									cbar_str += '&xtr4' + i + '=' + encodeURIComponent(cbar_pur_xtr4s[i]);
								}
							}
						}
					}

					cbar_str += '&pur=1&pur_mode=' + cbar_pur_mode + '&pur_add=' + cbar_pur_add;
				}

				var cbar_lvt = cbar_readCookie('cbar_lvt');
				cbar_str += '&lvt=' + cbar_lvt;
				var usertime = Math.round(cbar_date.getTime() / 1000);
				cbar_createCookie('cbar_lvt', usertime, 365);

				cbar_str += '&ut=' + usertime;

				var session_reset = false;
				if (cbar_lvt != null && (usertime - parseInt(cbar_lvt)) > 3600) {
					session_reset = true;
				}

				cbar_sess = cbar_readCookie('cbar_sess');
				if ((cbar_sess == null) || (null == cbar_readCookie('cbar_sess_pv')) ||  session_reset) {
					if (cbar_sess == null) {
						cbar_sess = 0;
					}
					cbar_sess = parseInt(cbar_sess) + 1;
					cbar_createCookie('cbar_sess', cbar_sess, 365);
				}

				cbar_str += '&ses=' + cbar_sess;

				cbar_sess_pv = parseInt(cbar_readCookie('cbar_sess_pv'));
				if (isNaN(cbar_sess_pv) || session_reset) {
					cbar_sess_pv = 1;
				}
				cbar_createCookie('cbar_sess_pv', cbar_sess_pv + 1, 0);
				cbar_str += '&spv=' + cbar_sess_pv;

				if (cbar_cat_level !== 0) {
					cbar_str += '&cl=' + cbar_cat_level;
				}

				if (cbar_cids_cur != '') {
					cbar_str += "&cids_cur=" + encodeURIComponent(cbar_cids_cur);
				}
				if (cbar_cids_p != '') {
					cbar_str += "&cids_p=" + encodeURIComponent(cbar_cids_p);
				}
				for (var c = 0; c < cbar_cats_l.length; c++) {
					cbar_str += '&cids_l' + c + '=' + encodeURIComponent(cbar_cats_l[c]);
				}
				for (var c = 0; c < cbar_cats_c.length; c++) {
					cbar_str += '&cids_c' + c + '=' + encodeURIComponent(cbar_cats_c[c]);
				}

				cbar_str += "&oos=" + cbar_oos;
				if (cbar_norecs != null) {
					cbar_str += "&norecs=" + cbar_norecs;
				}
				if (cbar_fl1 != null) {
					cbar_str += "&fl1=" + cbar_fl1;
				}
				if (cbar_md) {
					cbar_str += "&md=1";
				}
				if (cbar_ro) {
					cbar_str += "&ro=1";
				}
				if (cbarApp.isWhiteLable) {
					cbar_str += "&wl=1";
				}
				if (cbar_force_li) {
					cbar_str += "&fli=1";
				}
				if (cbar_ctr1 > 0) {
					cbar_str += "&ctr1=" + cbar_ctr1;
				}
				if (cbar_ctr2 > 0) {
					cbar_str += "&ctr2=" + cbar_ctr2;
				}
				if (cbar_ctr3 > 0) {
					cbar_str += "&ctr3=" + cbar_ctr3;
				}
				if (cbar_liX != 1) {
					cbar_str += "&liX=" + cbar_liX;
				}
				if (cbar_liP != 1) {
					cbar_str += "&liP=" + cbar_liP;
				}
				if (cbar_liL != 1) {
					cbar_str += "&liL=" + cbar_liL;
				}

				if (cbar_flow != '') {
					cbar_str +="&flow=" + cbar_flow;
				}

				if (cbar_search != '') {
					cbar_str += '&se=' + encodeURIComponent(cbar_search);
				}
				if (cbar_cname != '') {
					cbar_str += '&cname=' + encodeURIComponent(cbar_cname);
				}

				cbarShowPopup();

				if (cbar_preview_live == true ) {
					cbar_str += '&prev_li=1';
				}
				if (cbar_preview_rules > 0) {
					cbar_str += cbarGetPreviewParams();
				}

				// control group data
				var cg = cbarApp.storage.local.get('cbar_cg');
				if (cg != null) {
					cbar_data_params += cg;
				}

				cbar_rules_str = cbar_readCookie('cbar_rules');
				if (cbar_rules_str != null) {
					cbar_str += "&rul=" + cbar_rules_str;
				} else {
					cbar_rules_str = '';
				}

				cbar_cou_str = cbar_readCookie('cbar_co');
				if (cbar_cou_str != null) {
					cbar_str += "&cou=" + cbar_cou_str;
				}

				if (cbar_cou_input != '') {
					cbar_str += '&cou_inj=true';
				}

				cbar_str += '&ref=' + encodeURIComponent(document.referrer);

				cbar_str += "&br=" + cbar_BrowserDetect.browser + "&v=" + cbar_BrowserDetect.version + "&os=" + 
					cbar_BrowserDetect.OS;
			
				if (typeof screen.width !== 'undefined') {
					cbar_str += "&scw=" + screen.width + "&sch=" + screen.height;
				}

				if (cbar_ipuid_get) {
					cbar_str += "&ipuidget=true";
				}
				if (cbar_ipuid_save) {
					cbar_str += "&ipuidsave=true";
				}

				cbar_str += "&th=" + cbar_date.getHours();
				cbar_str += "&tm=" + cbar_date.getMinutes();
				cbar_str += "&tdw=" + cbar_date.getDay();
				cbar_str += "&tdm=" + cbar_date.getDate();

				for (var cbar_param in cbar2url) {
					// dont send empty or 0 values
					if (window[cbar_param] != '') {
						cbar_str += '&' + cbar2url[cbar_param] + "=" + encodeURIComponent(window[cbar_param]); 
					}
				}

				if (cbar_lnk != 5) {
					cbar_str += "&lnk=" + cbar_lnk;
				}
				if (cbar_num_widgets!=2) {
					cbar_str += "&nw=" + cbar_num_widgets;
				}
				
				if (typeof cbar_js_loaded === 'function') {
					cbar_js_loaded();
				}

				// check for custom trust message in cart page
				if (cbar_pagetype == "Sc") {
					// is there a custom message for any of the cart products
					if (cbar_pur_pids.length > 0) {
						for (var i = 0; i < cbar_pur_pids.length; i++) {
							var msg = cbar_readCookie('cbar_trust_cartmsg_' + cbar_pur_pids[i]);
							if (msg != null) {
								cbar_str += "&trustcmsg=" + encodeURIComponent(msg);
								break;
							}
						}
					}
				}

				if (typeof cbar_viewed_cnt !== 'undefined') {
					cbar_str += "&vcnt=" + cbar_viewed_cnt;
				}
				if (cbar_debug_show) {
					cbar_str += "&dbg";
				}

				cbarLoadData({
					a: 'pv',
					sid: cbar_sid,
					uid: cbar_uid,
					pid: encodeURIComponent(cbar_pid),
					url: cbar_url_en,
					cm: cbar_catmode,
					pt: cbar_pagetype
				}, cbar_str + cbar_data_params + cbar_abt_str + 
					'&' + cbar_any2url('attu', cbar_user_attributes) + 
					'&' + cbar_any2url('attu1', cbar_user_attribute) + 
					'&' + cbar_any2url('attrecs', cbarApp.recsAttributes) +
					'&' + cbar_any2url('attp', cbar_product_attributes) + 
					'&' + cbar_any2url('attud', cbar_del_user_attributes) + 
					'&' + cbar_any2url('attpd', cbar_del_product_attributes) + 
					'&' + cbar_any2url('uinf', cbar_userinfo),
					initAjaxCart
				);

				if (typeof cbar_e_input[0] !== 'undefined') {
					for (var ww = 0; ww < cbar_e_input.length; ww++) {
						cbar_em_listen(cbar_e_input[ww]);
					}
				}

				if (typeof cbar_e_checkbox[0] !== 'undefined') {
					if (cbar_e_checkbox[0].checked) {
						cbar_em_com(true); 
					} else {
						cbar_em_com(false); // default value
					}
					// track changes
					cbar_e_checkbox[0].addEventListener('click', function() {
						if (typeof event !== 'undefined' && typeof event.srcElement !== 'undefined') {
							cbar_em_com(event.srcElement.checked);
						} else {
							cbar_em_com(this.checked); 
						}
					}); 
				}
			}
		} catch (err) {
			setTimeout(function() { 
				cbar_log_console('cbar error on start: ' + err.message + err.stack);
			}, 8000); // allow page to finish loading before reporting
		};

		if (!cbarApp.isWhiteLable) {
			if (!cbar_quiet) {
				try { 
					window.console && console.info(
						"%cPersonalization by https://www.BARILLIANCE.com | For support email support@barilliance.com. Your site id is " + cbar_sid, 
						'color: green; font-weight: bold'
					); 
				} catch (err) {
					//NOP
				};
			}
		}
	}
	
	function cbarShowPopup() {
		if (
			document.location.href.indexOf('cbar_iframe_preview') !== -1 ||
			document.getElementById(cbarApp.previewBoxId) !== null ||
			(
				cbar_preview_rules == 0 && 
				cbar_preview_live != 'true'
			)
		) {
			return;
		}
		
		var popupWidth = 300;
		var previewMessageWrapper = document.createElement('div');
		var msg = '';
		var disableLinks = [];
		
		previewMessageWrapper.id = cbarApp.previewBoxId;
		previewMessageWrapper.className = 'cbar-preview-wrapper';
		previewMessageWrapper.style.width = popupWidth + 'px';
		previewMessageWrapper.style.left = Math.floor((window.innerWidth - popupWidth) / 2) + 'px';
		
		new cbarApp.DraggableElement({
			movable: previewMessageWrapper,
			mover: previewMessageWrapper,
			exceptionClass: 'cbar-dont-drag'
		});

		if (!cbarApp.isWhiteLable) {
			msg += "<img src='//s3.amazonaws.com/static.barilliance.com/img/barilliance_logo_150x30_w.png'><br>";
		}

		if (cbar_preview_rules == 1) {
			msg += 'RULES PREVIEW MODE';
			disableLinks.push('cbar_preview_rules=false');
		} 
		
		if (cbar_preview_rules > 1) {
			if (cbar_preview_widgets === 'true') {
				msg += 'WIDGETS PREVIEW MODE<br/>' + 
					'<span style="font-size:60%">YOU MAY NEED TO NAVIGATE TO THE RIGHT PAGE</span><br>' + 
					'Rules: <span id="cbar-widget-preview-ids"></span>';
			} else {
				msg += 'PREVIEWING RULE ' + cbar_preview_rules + '<div class="cbar-preview-msg">' +
					'Single rule preview runs the rule action.<br> It does not require the segment to match</div> ';
			}
			disableLinks.push('cbar_preview_rules=false');
		}

		if (cbar_preview_live == true) {
			msg += "LIVE PREVIEW MODE";
		}

		msg += '<br><span class="cbar-preview-close cbar-dont-drag" onclick="location.href = \'' +
			cbar_url.replace(/cbar_preview.*/g, "") + (document.location.search ? '&' : '?') +
			disableLinks.join('&') + '\'">Click here to exit</span>';

		previewMessageWrapper.innerHTML = '<div class="cbar-preview-box">' + msg + '</div>';

		window.document.body.appendChild(previewMessageWrapper);
	}
	
	function cbarSetPreviewRuleIds(ids) {
		var elem = document.getElementById('cbar-widget-preview-ids');
		if (elem !== null) {
			elem.innerHTML = ids.join(', ');
		}
	}

	function cbarGetPreviewParams() {
		var params = '&prev_ru=' + cbar_preview_rules + '&prev_var=' + cbar_preview_variation;
		if (cbar_preview_widgets === 'true') {
			params += '&prev_widgets=1';
		}
		return params;
	}

	function cbar_countdown_timer_inline(rule_id, rule_type, opts) {
		var iframeDoc = document.getElementById('cbar_iframe_' + rule_type + '_' + rule_id).contentWindow.document;

		if (typeof iframeDoc.countdown_interval === 'undefined') {
			var d = new Date();
			var secs_left = opts.time - (Math.ceil(d.getTime() / 1000) + opts.timediff);
			var html = iframeDoc.body.innerHTML;
			var units = {
				DD: 86400,
				HH: 3600,
				MM: 60,
				SS: 1
			};

			for (var u in units) {
				var ind = html.search(new RegExp('(?![a-zA-Z]).' + u + '(?![a-zA-Z]).'));
				if (ind > -1) { 
					var utag = html.substr(ind, 4);
					html = html.replace(utag, utag.replace(u, '<span class="cbar_countdown' + rule_id + '" rel="' + u + 
						'" secs_left=' + secs_left + ' unit_secs=' + units[u] + '>00</span>'));
				}
			}
			iframeDoc.body.innerHTML = html;
			iframeDoc.countdown_interval_cancel = function() {
				clearInterval(iframeDoc.countdown_interval);
				return false;
			};
			iframeDoc.countdown_interval = setInterval(function() {
				var iframe = document.getElementById('cbar_iframe_' + rule_type + '_' + rule_id);
				if (iframe === null) {
					return iframeDoc.countdown_interval_cancel();
				}
				
				var f_units = iframe.contentWindow.document.body.querySelectorAll('.cbar_countdown' + rule_id);
				if (f_units.length === 0) {
					return iframeDoc.countdown_interval_cancel();
				}
				
				secs_left = f_units[0].getAttribute('secs_left');
				secs_left--;
				if (secs_left < 1) {
					return iframeDoc.countdown_interval_cancel();
				}

				for (let u = 0; u < f_units.length; u++) {
					var unit_secs = parseInt(f_units[u].getAttribute('unit_secs'));
					f_units[u].setAttribute('secs_left', secs_left);
					var val_left = Math.floor(secs_left / unit_secs);
					secs_left -= val_left * unit_secs;
					if (val_left.toString().length == 1) {
						val_left = '0' + val_left;
					}
					f_units[u].innerHTML = val_left;
				}
			}, 1000);
		}
	}	
	
	// call cbar_start - this must be after cbar_start definition due to FF issue
	function cbar_dom_ready() {
		if (!cbar_isReady) {
			cbar_isReady = true;
			cbar_start();
		}
	}
	
	// echo startearly code if any
	

	cbar_startearly = true;
	
	var wait_count = 0;
	cbar_hold_execution = function (){
	
	
		//if(wait_count > 20) return false;
	
		// product page
		cbar_temp1 = cbar_Sizzle ('.product-detail .pd-product-detail .product-description-content'); //new site
		if(cbar_temp1.length > 0) {
		
	 	    cbar_temp = document.querySelectorAll('.container .btn-buy-content .button');
        	if (cbar_temp.length == 0) {
        	    return true; // wait
        	}
		    
		} 
		
		
		return false;
	}

	// end startearly code

	if (cbar_startearly) {
		cbar_start();
	} else {
		cbar_bindReady();
	}

	if (typeof cbar_scraper_start == 'function') {
		cbar_scraper_start();
	}
} catch(err) {
	if (err.name !== 'dontsend') {
		// allow page to finish loading before reporting.
		setTimeout(function() { 
			cbar_log_error('cbar error: ' + err.message, err.stack);
		}, 8000); 
	}
};
