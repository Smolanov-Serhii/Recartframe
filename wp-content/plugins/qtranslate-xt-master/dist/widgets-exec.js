(()=>{"use strict";var t=jQuery;t((function(){if(window.wpWidgets){var e=qTranslateConfig.js.get_qtx(),i=function(t,i){i.find("span.in-widget-title").each((function(t,i){e.addDisplayHook(i)})),i.find("input[id^='widget-'][id$='-title']").each((function(t,i){e.refreshContentHook(i)})),i.find("textarea[id^='widget-text-'][id$='-text']").each((function(t,i){e.refreshContentHook(i)}))};t(document).on("widget-added",i),t(document).on("widget-updated",i),e.addLanguageSwitchAfterListener((function(){t("#widgets-right .widget").each((function(){wpWidgets.appendTitle(this)}))}))}}))})();