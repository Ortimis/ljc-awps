!function(e){var t={};function n(r){if(t[r])return t[r].exports;var a=t[r]={i:r,l:!1,exports:{}};return e[r].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:r})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=11)}([,,,,,,,,,,,function(e,t,n){e.exports=n(12)},function(e,t,n){n(13),n(14)},function(e,t){var n=wp.blocks,r=n.registerBlockType,a=n.RichText,o=n.BlockControls,c=n.AlignmentToolbar;n.source;r("gutenberg-test/hello-world",{title:"Hello World",icon:"universal-access-alt",category:"layout",attributes:{content:{type:"array",source:"children",selector:"p"},alignment:{type:"string"}},edit:function(e){var t=e.attributes,n=e.className,r=e.isSelected,l=e.setAttributes,s=t.content,i=t.alignment;return[r&&React.createElement(o,{key:"controls"},React.createElement(c,{value:i,onChange:function(e){l({alignment:e})}})),React.createElement(a,{key:"editable",tagName:"p",className:n,style:{textAlign:i},onChange:function(e){l({content:e})},value:s})]},save:function(e){var t=e.attributes,n=e.className,r=t.content,a=t.alignment;return React.createElement("p",{className:n,style:{textAlign:a}},r)}})},function(e,t){(0,wp.blocks.registerBlockType)("gutenberg-test/latest-post",{title:"Latest Post",icon:"megaphone",category:"widgets",edit:(0,wp.components.withAPIData)(function(){return{posts:"/wp/v2/posts?per_page=1"}})(function(e){var t=e.posts,n=e.className;if(!t.data)return"loading !";if(0===t.data.length)return"No posts";var r=t.data[0];return React.createElement("a",{className:n,href:r.link},r.title.rendered)}),save:function(){return null}})}]);
//# sourceMappingURL=gutenberg.js.map