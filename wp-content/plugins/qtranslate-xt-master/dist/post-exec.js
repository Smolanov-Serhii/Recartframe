(()=>{"use strict";var e=jQuery,n=Object.freeze({QTX_URL_QUERY:1,QTX_URL_PATH:2,QTX_URL_DOMAIN:3,QTX_URL_DOMAINS:4});e((function(){var a,t,r,i,o,l,s,c=qTranslateConfig.js.get_qtx(),d=function(e,a){switch(qTranslateConfig.url_mode){case n.QTX_URL_QUERY:e.search?e.search+="&lang="+a:e.search="?lang="+a;break;case n.QTX_URL_PATH:var t=qTranslateConfig.home_url_path,r=e.pathname;"/"!==r[0]&&(r="/"+r);var i=r.indexOf(t);i>=0&&(e.pathname=qTranslateConfig.homeinfo_path+a+r.substring(i+t.length-1));break;case n.QTX_URL_DOMAIN:e.host=a+"."+e.host;break;case n.QTX_URL_DOMAINS:e.host=qTranslateConfig.domains[a]}},h=function(c){if(!a){var h=document.getElementById("view-post-btn");if(!h||!h.children.length)return;if("A"!==(a=h.children[0]).tagName)return;t=a.href,r=qtranxj_ce("a",{}),t.search(/\?/)}r.href=t,d(r,c),a.href=r.href;var g=document.getElementById("preview-action");if(g&&g.children.length&&(g.children[0].href=r.href),qTranslateConfig.url_mode!==n.QTX_URL_QUERY){if(!i){var f=document.getElementById("sample-permalink");f&&f.offsetHeight>0&&f.childNodes.length&&(i=f.childNodes[0],o=i.nodeValue)}i&&(r.href=o,d(r,c),i.nodeValue=r.href)}else s||(e("#sample-permalink").append('<span id="sample-permalink-lang-query"></span>'),s=e("#sample-permalink-lang-query")),s&&s.text((t.search(/\?/)<0?"/?lang=":"&lang=")+c);l||(l=document.getElementById("wp-admin-bar-view")),l&&l.children.length&&(l.children[0].href=a.href)},g=e("#title"),f=e("#title-prompt-text");function m(e){for(var n={},a=("?"===e[0]?e.substr(1):e).split("&"),t=0;t<a.length;t++){var r=a[t].split("=");n[decodeURIComponent(r[0])]=decodeURIComponent(r[1]||"")}return n}for(var u in c.addCustomContentHooks(),h(c.getActiveLanguage()),c.addLanguageSwitchAfterListener(h),f&&g&&c.addLanguageSwitchAfterListener((function(e){g.val()?f.addClass("screen-reader-text"):f.removeClass("screen-reader-text")})),c.getLanguages())e("#wp-admin-bar-"+u+" a").on("click",(function(n){n.preventDefault();var a=m(window.location.search),t=e(this).attr("rel");a.lang=t,window.location=window.location.origin+window.location.pathname+"?"+e.param(a)}))}))})();