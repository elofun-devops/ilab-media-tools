!function(e){var n={};function t(i){if(n[i])return n[i].exports;var a=n[i]={i:i,l:!1,exports:{}};return e[i].call(a.exports,a,a.exports,t),a.l=!0,a.exports}t.m=e,t.c=n,t.d=function(e,n,i){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:i})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(t.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var a in e)t.d(i,a,function(n){return e[n]}.bind(null,a));return i},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="/",t(t.s=638)}({638:function(e,n,t){e.exports=t(639)},639:function(e,n){jQuery(document).ready((function(e){var n=null;e(".ilab-size-row").each((function(){var t=e(this),i=e(this).hasClass("ilab-size-row"),a=e(t.find("input[name=nonce]")[0]).val(),o=t.find('input[name="size"]').val(),l=0,u=function(){var n=t.hasClass("ilab-fixed-size-row"),i=n?null:t.find('input[name="width"]').val(),u=n?null:t.find('input[name="height"]').val(),r=n?null:t.find('input[name="'+o+'__crop"]')[0].checked,c=n?null:t.find('select[name="x-axis"]').val(),s=n?null:t.find('select[name="y-axis"]').val(),f=t.find('select[name="privacy"]').val(),d=n?{action:"ilab_update_image_privacy",size:o,nonce:a,privacy:f}:{action:"ilab_update_image_size",size:o,nonce:a,width:i,height:u,crop:r,xAxis:c,yAxis:s,privacy:f};console.log(d),clearTimeout(l),l=setTimeout((function(){e.post(ajaxurl,d,(function(e){}))}),1e3)};i&&(t.find('input[type="number"]').on("change",(function(){u()})),t.find('input[type="checkbox"]').on("change",(function(){u()})),t.find("select").on("change",(function(){u()})),t.find(".ilab-delete-size-button").on("click",(function(n){if(n.preventDefault(),confirm("Are you sure you want to delete this image size?")){var i={action:"ilab_delete_image_size",size:o,nonce:a};e.post(ajaxurl,i,(function(e){"ok"==e.status&&t.remove()}))}return!1}))),t.find(".ilab-size-settings-button").on("click",(function(e){if(e.preventDefault(),null==n){alert("Select a sample image to use to edit this image size settings.");var t=wp.media({title:"Select a image to use",button:{text:"Use this image"},multiple:!1});t.on("select",(function(){n=t.state().get("selection").first().toJSON().id,ILabModal.loadURL(ajaxurl+"?action=ilab_dynamic_images_edit_page&image_id="+n+"&size="+o+"&mode=size",!1,null)})),t.open()}else ILabModal.loadURL(ajaxurl+"?action=ilab_dynamic_images_edit_page&image_id="+n+"&size="+o+"&mode=size",!1,null);return!1}))}))}))}});