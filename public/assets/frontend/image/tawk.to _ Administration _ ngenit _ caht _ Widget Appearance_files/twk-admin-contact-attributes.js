import{_ as x,a as f,b as h}from"./twk-main.js";import{d as u,E as v,A as y,u as _,r as z,c as E,e as F,f as e,i as n,j as A,l as j,t as d,h as r,k as p,z as l,y as B,q as C,p as I}from"./twk-vendor.js";import{_ as N}from"./twk-list.js";const T={class:"tawk-flex tawk-flex-column tawk-height-100"},q={class:"tawk-flex-none tawk-text-bold-3 tawk-text-uppercase tawk-margin-medium-bottom"},D=u({__name:"base",setup(V){const w=v(()=>x(()=>import("./twk-new-attribute.js"),["twk-new-attribute.js","css/attribute-form.css","twk-vendor.js","twk-attribute-form.js"])),t=y("i18n"),m=_(),a=z("person"),k=E([{value:"person",label:t("contacts","person"),hidden:!0},{value:"organization",label:t("contacts","organization"),hidden:!0}]),o=F(()=>m.getters["navigation/currentProperty"]);function g(i){a.value=i||"person"}function s(){f(w,{propertyId:o.value,object:a.value})}return(i,L)=>{const b=e("tawk-button"),c=e("tawk-tab-nav");return n(),A("div",T,[j("div",q,d(r(t)("admin","contact_attributes")),1),p(c,{class:"tawk-flex-none tawk-margin-medium-bottom",tabItems:k,isResizing:null,onTabSelected:g},{tabAppend:l(()=>[p(b,{class:"tawk-margin-auto-left",type:"primary",onClick:s},{default:l(()=>[B(d(r(t)("contacts","add_attribute")),1)]),_:1})]),_:1},8,["tabItems"]),r(o)?(n(),C(N,{key:0,class:"tawk-flex-1 tawk-min-height-0 tawk-max-height-100",propertyId:r(o),listType:a.value},null,8,["propertyId","listType"])):I("",!0)])}}});window.insertContactAttributesListApp=()=>{window.contactAttributesListApp=h(D),window.contactAttributesListApp.mount("#contact-attributes-list")};