(()=>{var e,t={80:()=>{
/**
 * Primary front-end script.
 *
 * Primary JavaScript file. Any includes or anything imported should be filtered through this file 
 * and eventually saved back into the `/assets/js/app.js` file.
 *
 * @package   Initiator
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2020 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://github.com/benlumia007/initiator
 */
!function(){var e,t,a,n,r,s,i;if((e=document.getElementById("masthead"))&&void 0!==(t=e.getElementsByTagName("button")[0])){for(n=e.getElementsByTagName("nav")[0],(c=document.createElement("span")).classList.add("screen-reader-text"),c.textContent=silverQuantumScreenReaderText.expandMain,t.appendChild(c),s=0,i=(a=e.querySelectorAll(".menu-item-has-children, .page_item_has_children")).length;s<i;s++){var l=document.createElement("button"),d=a[s].querySelector(".sub-menu"),o=document.createElement("span"),c=document.createElement("span");o.classList.add("fontawesome"),o.setAttribute("aria-hidden","true"),c.classList.add("screen-reader-text"),c.textContent=silverQuantumScreenReaderText.expandChild,a[s].insertBefore(l,d),l.classList.add("dropdown-toggle"),l.setAttribute("aria-expanded","false"),l.appendChild(o),l.appendChild(c),l.onclick=function(){var e=this.parentElement,t=e.querySelector(".sub-menu"),a=this.querySelector(".screen-reader-text");-1!==e.className.indexOf("toggled-on")?(e.className=e.className.replace(" toggled-on",""),this.setAttribute("aria-expanded","false"),t.setAttribute("aria-expanded","false"),a.textContent=silverQuantumScreenReaderText.expandChild):(e.className+=" toggled-on",this.setAttribute("aria-expanded","true"),t.setAttribute("aria-expanded","true"),a.textContent=silverQuantumScreenReaderText.collapseChild)}}if(void 0!==n){for(n.setAttribute("aria-expanded","false"),-1===n.className.indexOf("nav-menu")&&(n.className+=" nav-menu"),t.onclick=function(){c=this.querySelector(".screen-reader-text"),-1!==e.className.indexOf("toggled")?(e.className=e.className.replace(" toggled",""),t.setAttribute("aria-expanded","false"),c.textContent=silverQuantumScreenReaderText.expandMain,n.setAttribute("aria-expanded","false")):(e.className+=" toggled",t.setAttribute("aria-expanded","true"),c.textContent=silverQuantumScreenReaderText.collapseMain,n.setAttribute("aria-expanded","true"))},s=0,i=(r=n.getElementsByTagName("a")).length;s<i;s++)r[s].addEventListener("focus",u,!0),r[s].addEventListener("blur",u,!0);!function(e){var t,a,n=e.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");if("ontouchstart"in window)for(t=function(e){var t,a=this.parentNode;if(a.classList.contains("focus"))a.classList.remove("focus");else{for(e.preventDefault(),t=0;t<a.parentNode.children.length;++t)a!==a.parentNode.children[t]&&a.parentNode.children[t].classList.remove("focus");a.classList.add("focus")}},a=0;a<n.length;++a)n[a].addEventListener("touchstart",t,!1)}(e)}else t.style.display="none"}function u(){for(var e=this;-1===e.className.indexOf("nav-menu");)"li"===e.tagName.toLowerCase()&&(-1!==e.className.indexOf("focus")?e.className=e.className.replace(" focus",""):e.className+=" focus"),e=e.parentElement}}()},779:()=>{},857:()=>{},51:()=>{},54:()=>{}},a={};function n(e){var r=a[e];if(void 0!==r)return r.exports;var s=a[e]={exports:{}};return t[e](s,s.exports,n),s.exports}n.m=t,e=[],n.O=(t,a,r,s)=>{if(!a){var i=1/0;for(c=0;c<e.length;c++){for(var[a,r,s]=e[c],l=!0,d=0;d<a.length;d++)(!1&s||i>=s)&&Object.keys(n.O).every((e=>n.O[e](a[d])))?a.splice(d--,1):(l=!1,s<i&&(i=s));if(l){e.splice(c--,1);var o=r();void 0!==o&&(t=o)}}return t}s=s||0;for(var c=e.length;c>0&&e[c-1][2]>s;c--)e[c]=e[c-1];e[c]=[a,r,s]},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={449:0,524:0,430:0,708:0,336:0};n.O.j=t=>0===e[t];var t=(t,a)=>{var r,s,[i,l,d]=a,o=0;if(i.some((t=>0!==e[t]))){for(r in l)n.o(l,r)&&(n.m[r]=l[r]);if(d)var c=d(n)}for(t&&t(a);o<i.length;o++)s=i[o],n.o(e,s)&&e[s]&&e[s][0](),e[s]=0;return n.O(c)},a=self.webpackChunkinitiator=self.webpackChunkinitiator||[];a.forEach(t.bind(null,0)),a.push=t.bind(null,a.push.bind(a))})(),n.O(void 0,[524,430,708,336],(()=>n(80))),n.O(void 0,[524,430,708,336],(()=>n(779))),n.O(void 0,[524,430,708,336],(()=>n(857))),n.O(void 0,[524,430,708,336],(()=>n(51)));var r=n.O(void 0,[524,430,708,336],(()=>n(54)));r=n.O(r)})();