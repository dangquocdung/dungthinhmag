!function(e){function t(r){if(n[r])return n[r].exports;var c=n[r]={i:r,l:!1,exports:{}};return e[r].call(c.exports,c,c.exports,t),c.l=!0,c.exports}var n={};t.m=e,t.c=n,t.d=function(e,n,r){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:r})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=23)}({23:function(e,t,n){e.exports=n(24)},24:function(e,t){jQuery(document).ready(function(){$("input[type=checkbox]").uniform(),$("#auto-checkboxes li").tree({onCheck:{node:"expand"},onUncheck:{node:"collapse"},dnd:!1,selectable:!1}),$("#mainNode .checker").change(function(){var e=jQuery(this).attr("data-set"),t=jQuery(this).is(":checked");jQuery(e).each(function(){t?$(this).attr("checked",!0):$(this).attr("checked",!1)}),jQuery.uniform.update(e)})})}});