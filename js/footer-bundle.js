"use strict";function scrollAppear(){document.querySelectorAll("h2").forEach(function(e){e.getBoundingClientRect().top<window.innerHeight/1.5&&e.classList.add("intro-appear")})}setTimeout(function(){document.querySelector(".loading").classList.add("hidden")},2e3),window.addEventListener("scroll",scrollAppear);var crisp=document.querySelector(".crisp-client"),toggleHeader=function(){var e=window.pageYOffset,t=document.querySelector(".video-hero"),n=t.offsetHeight,r=document.querySelector(".site-header"),o=(document.querySelector(".header-nav"),document.querySelector(".logo img")),i=document.querySelectorAll("#menu-nav-bar li a "),l=document.querySelectorAll(".soc");if(t.scrollTop=t.scrollHeight,n<e){r.classList.add("header-background"),o.classList.add("small-logo");for(var s=0;s<i.length;s++)i[s].style.color="var(--black)";for(s=0;s<l.length;s++)l[s].style.fill="var(--black)"}else{r.classList.remove("header-background"),o.classList.remove("small-logo");for(s=0;s<i.length;s++)i[s].style.color="var(--white)";for(s=0;s<l.length;s++)l[s].style.fill="var(--white)"}};toggleHeader(),document.addEventListener("scroll",function(){toggleHeader()}),console.log(crisp);var harrys=document.querySelectorAll(".hs-wrapper img"),slideArea=document.querySelector(".hs-wrapper"),ter=document.querySelectorAll(".terrace-wrapper img"),currentSlide=0;function nextSlide(e){e[currentSlide].className="slide",e[currentSlide=(currentSlide+1)%e.length].classList.toggle("showing")}var slideFunc=function(e,t){setInterval(nextSlide,e,t)},har=new slideFunc(2500,harrys),substrCount=(ter=new slideFunc(1500,ter),0),textItem="";function nativeTypedJS(a){(a=t(a,{})).div=t(a.div,"typed-strings"),a.firstTimeStart=t(a.firstTimeStart,2e3),a.timeBeforeDeleting=t(a.timeBeforeDeleting,3e3),a.timeBeforeNext=t(a.timeBeforeNext,500),a.animationTime=a.timeBeforeDeleting+a.timeBeforeNext+1+t(a.animationTime,1e3),a.cursorSpeed=t(a.cursorSpeed,500),a.shuffle=t(a.shuffle,!1),a.loop=t(a.loop,!0),a.cursorPause=t(a.cursorPause,1e3),a.extraTime=0;var u=document.getElementById(a.div),e=Array.prototype.slice.call(u.childNodes),n=e.length-1,r=[];function c(){!function(t){t.style.opacity=1;var n=+new Date;!function e(){t.style.opacity=+t.style.opacity-(new Date-n)/100,n=+new Date,0<+t.style.opacity&&(window.requestAnimationFrame&&requestAnimationFrame(e)||setTimeout(e,16))}()}(document.getElementById("ntjsCursor")),setTimeout(function(){!function(t){t.style.opacity=0;var n=+new Date;!function e(){t.style.opacity=+t.style.opacity+(new Date-n)/100,n=+new Date,+t.style.opacity<1&&(window.requestAnimationFrame&&requestAnimationFrame(e)||setTimeout(e,16))}()}(document.getElementById("ntjsCursor"))},a.cursorSpeed/2)}function m(e){"~"==textItem.substr(substrCount,1)&&(textItem=textItem.replace("~",""),a.extraTime+=a.cursorPause),document.getElementById("ntjsText").innerHTML=textItem.substr(0,substrCount++);var t=(a.animationTime-a.timeBeforeDeleting-a.timeBeforeNext)/2/textItem.length;substrCount<textItem.length+1?(setTimeout(m,t+a.extraTime),a.extraTime=0):(a.whileLoopCount!=a.pElementsCount||a.loop)&&setTimeout(o,a.timeBeforeDeleting)}function o(){var e;document.getElementById("ntjsText").innerHTML=textItem.substr(0,substrCount--),e=(a.animationTime-a.timeBeforeDeleting-a.timeBeforeNext)/2/textItem.length,0<=substrCount?setTimeout(o,e):(substrCount=0,textItem="")}function t(e,t){return void 0===e?t:e}e.forEach(function(e,t){1===e.nodeType&&r.push(e.textContent),n===t&&function(n){!function(){for(;u.firstChild;)u.removeChild(u.firstChild)}();var e=document.createElement("h2");u.appendChild(e);var t=document.createElement("span");t.id="ntjsText",u.firstChild.appendChild(t);var r=document.createElement("span");r.id="ntjsCursor",r.innerText="|",u.firstChild.appendChild(r);var o=a.pElementsCount=n.length-1,l=0,s=0;a.shuffle&&function(e){for(i=e.length-1;0<i;i--)j=Math.floor(Math.random()*(i+1)),temp=e[i],e[i]=e[j],e[j]=temp}(n);setTimeout(function e(){if(l<=o){var t=((textItem=n[l]).match(/~/g)||[]).length;s=0!=t?t*a.cursorPause:0,m(l),a.whileLoopCount=l++,setTimeout(e,a.animationTime+s)}else a.loop&&(l=0,e())},a.firstTimeStart),c(),setInterval(c,a.cursorSpeed)}(r)})}document.addEventListener("DOMContentLoaded",function(e){nativeTypedJS()});