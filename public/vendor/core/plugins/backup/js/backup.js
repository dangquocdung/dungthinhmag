!function(e){function t(r){if(o[r])return o[r].exports;var a=o[r]={i:r,l:!1,exports:{}};return e[r].call(a.exports,a,a.exports,t),a.l=!0,a.exports}var o={};t.m=e,t.c=o,t.d=function(e,o,r){t.o(e,o)||Object.defineProperty(e,o,{configurable:!1,enumerable:!0,get:r})},t.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(o,"a",o),o},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=42)}({42:function(e,t,o){e.exports=o(43)},43:function(e,t){$(document).ready(function(){var e=$("#table-backups");e.on("click",".deleteDialog",function(e){e.preventDefault(),$("#delete-crud-entry").data("section",$(this).data("section")),$("#delete-crud-modal").modal("show")}),e.on("click",".restoreBackup",function(e){e.preventDefault(),$("#restore-backup-button").data("section",$(this).data("section")),$("#restore-backup-modal").modal("show")}),$("#delete-crud-entry").on("click",function(t){t.preventDefault(),$("#delete-crud-modal").modal("hide");var o=$(this).data("section");$.ajax({url:o,type:"GET",success:function(t){t.error?Botble.showNotice("error",t.message,Botble.languages.notices_msg.error):(e.find('a[data-section="'+o+'"]').closest("tr").remove(),Botble.showNotice("success",t.message,Botble.languages.notices_msg.success))},error:function(e){Botble.handleError(e)}})}),$("#restore-backup-button").on("click",function(e){e.preventDefault();var t=$(this);t.html('<i class="fa fa-spin fa-spinner" aria-hidden="true"></i> '+t.text()),$.ajax({url:t.data("section"),type:"GET",success:function(e){t.find("i").remove(),t.closest(".modal").modal("hide"),e.error?Botble.showNotice("error",e.message,Botble.languages.notices_msg.error):(Botble.showNotice("success",e.message,Botble.languages.notices_msg.success),window.location.reload())},error:function(e){t.find("i").remove(),Botble.handleError(e)}})}),$(document).on("click","#generate_backup",function(e){e.preventDefault(),$("#name").val(""),$("#description").val(""),$("#create-backup-modal").modal("show")}),$("#create-backup-modal").on("click","#create-backup-button",function(t){t.preventDefault();var o=$(this);o.html('<i class="fa fa-spin fa-spinner" aria-hidden="true"></i> '+o.text());var r=$("#name").val(),a=$("#description").val(),n=!1;""!==r&&null!==r||(n=!0,Botble.showNotice("error","Backup name is required!",Botble.languages.notices_msg.error)),""!==a&&null!==a||(n=!0,Botble.showNotice("error","Backup description is required!",Botble.languages.notices_msg.error)),n?o.find("i").remove():$.ajax({url:$("div[data-route-create]").data("route-create"),type:"POST",data:{name:r,description:a},success:function(t){o.find("i").remove(),o.closest(".modal").modal("hide"),t.error?Botble.showNotice("error",t.message,Botble.languages.notices_msg.error):(e.find("tbody").append(t.data),Botble.showNotice("success",t.message,Botble.languages.notices_msg.success))},error:function(e){o.find("i").remove(),Botble.handleError(e)}})})})}});