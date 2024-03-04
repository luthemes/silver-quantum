/**
 * Primary navigation script.
 *
 * Primary JavaScript file. Any includes or anything imported should be filtered through this file
 * and eventually saved back into the `/assets/js/app.js` file.
 *
 * @package   silverQuantum
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silverQuantum
 */
!function(e){var t,a,n,s,r,l,d;if((t=document.getElementById("masthead"))&&void 0!==(a=t.getElementsByTagName("button")[0])){for(s=t.getElementsByTagName("ul")[0],(u=document.createElement("span")).classList.add("screen-reader-text"),u.textContent=silverQuantumScreenReaderText.expandMain,a.appendChild(u),l=0,d=(n=t.querySelectorAll(".menu-item-has-children, .page_item_has_children")).length;l<d;l++){var i=document.createElement("button"),o=n[l].querySelector(".sub-menu"),c=document.createElement("span"),u=document.createElement("span");c.classList.add("fontawesome","arrow"),c.setAttribute("aria-hidden","true"),u.classList.add("screen-reader-text"),u.textContent=silverQuantumScreenReaderText.expandChild,n[l].insertBefore(i,o),i.classList.add("dropdown-toggle"),i.setAttribute("aria-expanded","false"),i.appendChild(c),i.appendChild(u),i.onclick=function(){var e=this.parentElement,t=e.querySelector(".sub-menu"),a=this.querySelector(".screen-reader-text");-1!==e.className.indexOf("toggled-on")?(e.className=e.className.replace(" toggled-on",""),this.setAttribute("aria-expanded","false"),t.setAttribute("aria-expanded","false"),a.textContent=silverQuantumScreenReaderText.expandChild):(e.className+=" toggled-on",this.setAttribute("aria-expanded","true"),t.setAttribute("aria-expanded","true"),a.textContent=silverQuantumScreenReaderText.collapseChild)}}if(void 0!==s){for(a.onclick=function(){u=this.querySelector(".screen-reader-text"),-1!==t.className.indexOf("toggled")?(t.className=t.className.replace(" toggled",""),a.setAttribute("aria-expanded","false"),u.textContent=silverQuantumScreenReaderText.expandMain,s.setAttribute("aria-expanded","false")):(t.className+=" toggled",a.setAttribute("aria-expanded","true"),u.textContent=silverQuantumScreenReaderText.collapseMain,s.setAttribute("aria-expanded","true"))},l=0,d=(r=s.getElementsByTagName("a")).length;l<d;l++)r[l].addEventListener("focus",h,!0),r[l].addEventListener("blur",h,!0);var m,p,f;!function(e){var t,a,n=e.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");if("ontouchstart"in window)for(t=function(e){var t,a=this.parentNode;if(a.classList.contains("focus"))a.classList.remove("focus");else{for(e.preventDefault(),t=0;t<a.parentNode.children.length;++t)a!==a.parentNode.children[t]&&a.parentNode.children[t].classList.remove("focus");a.classList.add("focus")}},a=0;a<n.length;++a)n[a].addEventListener("touchstart",t,!1)}(t),e(window).scroll((function(){e(this).scrollTop()>=m?(p="down")!==f&&(e(".menu-toggle").addClass("hide"),f=p):(p="up")!==f&&(e(".menu-toggle").removeClass("hide"),f=p),m=e(this).scrollTop()}))}else a.style.display="none"}function h(){for(var e=this;-1===e.className.indexOf("menu-items");)"li"===e.tagName.toLowerCase()&&(-1!==e.className.indexOf("focus")?e.className=e.className.replace(" focus",""):e.className+=" focus"),e=e.parentElement}}(jQuery);