"use strict";(self["webpackChunktutor"]=self["webpackChunktutor"]||[]).push([[46],{3046:(r,t,e)=>{e.r(t);e.d(t,{default:()=>A});var n=e(6595);var a=e(7707);var i=e(9768);var o=e(2658);var u=e(1537);var l=e(5460);var c=e(7583);var f=e(5340);var s=e(2377);var v=e(5219);var p=e(917);var d=e(7363);var h=e.n(d);var y=e(7536);function m(){m=Object.assign?Object.assign.bind():function(r){for(var t=1;t<arguments.length;t++){var e=arguments[t];for(var n in e){if(Object.prototype.hasOwnProperty.call(e,n)){r[n]=e[n]}}}return r};return m.apply(this,arguments)}function b(r,t){return j(r)||O(r,t)||Z(r,t)||g()}function g(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}function Z(r,t){if(!r)return;if(typeof r==="string")return w(r,t);var e=Object.prototype.toString.call(r).slice(8,-1);if(e==="Object"&&r.constructor)e=r.constructor.name;if(e==="Map"||e==="Set")return Array.from(r);if(e==="Arguments"||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e))return w(r,t)}function w(r,t){if(t==null||t>r.length)t=r.length;for(var e=0,n=new Array(t);e<t;e++)n[e]=r[e];return n}function O(r,t){var e=null==r?null:"undefined"!=typeof Symbol&&r[Symbol.iterator]||r["@@iterator"];if(null!=e){var n,a,i,o,u=[],l=!0,c=!1;try{if(i=(e=e.call(r)).next,0===t){if(Object(e)!==e)return;l=!1}else for(;!(l=(n=i.call(e)).done)&&(u.push(n.value),u.length!==t);l=!0);}catch(r){c=!0,a=r}finally{try{if(!l&&null!=e["return"]&&(o=e["return"](),Object(o)!==o))return}finally{if(c)throw a}}return u}}function j(r){if(Array.isArray(r))return r}var x=(0,v.J0)(o.Z).map((function(r){var t=b(r,1),e=t[0];return e}));var k=function r(){var t=(0,s.O)({defaultValues:{search:""}});var e=(0,f.N)(t.watch("search"));var o=(0,d.useMemo)((function(){if(!e){return x}return x.filter((function(r){return new RegExp(e,"i").test(r)}))}),[e]);return(0,p.tZ)(a.Z,null,(0,p.tZ)("div",{css:S.container},(0,p.tZ)(y.Qr,{control:t.control,name:"search",render:function r(t){return(0,p.tZ)(i.Z,m({},t,{placeholder:"Search icons..."}))}}),(0,p.tZ)("div",{css:S.wrapper},(0,p.tZ)(c.Z,{each:o},(function(r,t){return(0,p.tZ)("div",null,(0,p.tZ)(n.Z,{key:t,name:r,width:60,height:60}),(0,p.tZ)("span",null,r))})))))};const A=k;var S={container:(0,p.iv)("display:flex;flex-direction:column;gap:",u.W0[32],";margin-block:60px;"+(true?"":0),true?"":0),wrapper:(0,p.iv)("display:grid;grid-template-columns:repeat(4, 1fr);gap:",u.W0[32],";&>div{display:flex;flex-direction:column;gap:",u.W0[8],";",l.c.caption(),";color:",u.Jv.text.subdued,";align-items:center;svg{color:",u.Jv.icon["default"],";}}"+(true?"":0),true?"":0)}}}]);