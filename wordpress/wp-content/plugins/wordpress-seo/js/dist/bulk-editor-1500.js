(window.yoastWebpackJsonp=window.yoastWebpackJsonp||[]).push([[4],{344:function(e,s,n){"use strict";!function(){var e=function(e){var s=e.find("[class^=wpseo-new]").first().attr("class"),n="#"+s+"-",t=n.replace("new","existing"),i=e.find("th[id^=col_existing_yoast]").first().text().replace("Existing ",""),a=s.replace("-new-","_save_"),o="wpseo_save_all_"+e.attr("class").split("wpseo_bulk_")[1],u=a.replace("wpseo_save_",""),r={newClass:"."+s,newId:n,existingId:t},l={submit_new:function(e){l.submitNew(e)},submitNew:function(e){var s,n=r.newId+e,t=r.existingId+e;s="select-one"===jQuery(r.newId+e).prop("type")?jQuery(n).find(":selected").text():jQuery(n).val();var o=jQuery(t).html();if(s===o)jQuery(n).val("");else{if(""===s&&!window.confirm("Are you sure you want to remove the existing "+i+"?"))return void jQuery(n).val("");var u={action:a,_ajax_nonce:wpseoBulkEditorNonce,wpseo_post_id:e,new_value:s,existing_value:o};jQuery.post(ajaxurl,u,l.handleResponse)}},submit_all:function(e){l.submitAll(e)},submitAll:function(e){e.preventDefault();var s={action:o,_ajax_nonce:wpseoBulkEditorNonce,send:!1,items:{},existingItems:{}};jQuery(r.newClass).each(function(){var e=jQuery(this).data("id"),n=jQuery(this).val(),t=jQuery(r.existingId+e).html();""!==n&&(n===t?jQuery(r.newId+e).val(""):(s.send=!0,s.items[e]=n,s.existingItems[e]=t))}),s.send&&jQuery.post(ajaxurl,s,l.handleResponses)},handle_response:function(e,s){l.handleResponse(e,s)},handleResponse:function(e,s){if("success"===s){var n=e;if("string"==typeof n&&(n=JSON.parse(n)),n instanceof Array)jQuery.each(n,function(){l.handleResponse(this,s)});else if("success"===n.status){var t=n["new_"+u];jQuery(r.existingId+n.post_id).html(t.replace(/\\(?!\\)/g,"")),jQuery(r.newId+n.post_id).val("")}}},handle_responses:function(e,s){l.handleResponses(e,s)},handleResponses:function(e,s){var n=jQuery.parseJSON(e);jQuery.each(n,function(){l.handleResponse(this,s)})},set_events:function(){l.setEvents()},setEvents:function(){e.find(".wpseo-save").click(function(e){var s=jQuery(this).data("id");e.preventDefault(),l.submitNew(s,this)}),e.find(".wpseo-save-all").click(l.submitAll),e.find(r.newClass).keydown(function(e){if(13===e.which){e.preventDefault();var s=jQuery(this).data("id");l.submitNew(s,this)}})}};return l};window.bulk_editor=e,window.bulkEditor=e,jQuery(document).ready(function(){jQuery('table[class*="wpseo_bulk"]').each(function(s,n){var t=jQuery(n);e(t).setEvents()})})}()}},[[344,0]]]);