/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 13);
/******/ })
/************************************************************************/
/******/ ({

/***/ 13:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(14);


/***/ }),

/***/ 14:
/***/ (function(module, exports, __webpack_require__) {

<<<<<<< HEAD
/**
 * Import your Gutenberg custom blocks here
 */
__webpack_require__(15);
__webpack_require__(16);
=======
eval("/**\r\n * Import your Gutenberg custom blocks here\r\n */\n__webpack_require__(15);\n__webpack_require__(16);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvc3JjL3NjcmlwdHMvZ3V0ZW5iZXJnLmpzPzg2NDkiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7OztBQUdBLG9CQUFTO0FBQ1Qsb0JBQVMiLCJmaWxlIjoiMTQuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKipcclxuICogSW1wb3J0IHlvdXIgR3V0ZW5iZXJnIGN1c3RvbSBibG9ja3MgaGVyZVxyXG4gKi9cclxucmVxdWlyZSggJy4vYmxvY2tzL2hlbGxvLXdvcmxkLmpzJyApO1xyXG5yZXF1aXJlKCAnLi9ibG9ja3MvbGF0ZXN0LXBvc3QuanMnICk7XHJcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL2Fzc2V0cy9zcmMvc2NyaXB0cy9ndXRlbmJlcmcuanMiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///14\n");
>>>>>>> 7e3801506e9461bda5e1377ba485690a50888bd2

/***/ }),

/***/ 15:
/***/ (function(module, exports) {

eval("var _wp$blocks = wp.blocks,\n    registerBlockType = _wp$blocks.registerBlockType,\n    RichText = _wp$blocks.RichText,\n    BlockControls = _wp$blocks.BlockControls,\n    AlignmentToolbar = _wp$blocks.AlignmentToolbar,\n    source = _wp$blocks.source;\n\nregisterBlockType('gutenberg-test/hello-world', {\n\ttitle: 'Hello World',\n\ticon: 'universal-access-alt',\n\tcategory: 'layout',\n\n\tattributes: {\n\t\tcontent: {\n\t\t\ttype: 'array',\n\t\t\tsource: 'children',\n\t\t\tselector: 'p'\n\t\t},\n\t\talignment: {\n\t\t\ttype: 'string'\n\t\t}\n\t},\n\n\tedit: function edit(_ref) {\n\t\tvar attributes = _ref.attributes,\n\t\t    className = _ref.className,\n\t\t    isSelected = _ref.isSelected,\n\t\t    setAttributes = _ref.setAttributes;\n\t\tvar content = attributes.content,\n\t\t    alignment = attributes.alignment;\n\n\t\tfunction onChangeContent(newContent) {\n\t\t\tsetAttributes({ content: newContent });\n\t\t}\n\n\t\tfunction onChangeAlignment(newAlignment) {\n\t\t\tsetAttributes({ alignment: newAlignment });\n\t\t}\n\n\t\treturn [isSelected && React.createElement(BlockControls, { key: 'controls' }, React.createElement(AlignmentToolbar, {\n\t\t\tvalue: alignment,\n\t\t\tonChange: onChangeAlignment\n\t\t})), React.createElement(RichText, {\n\t\t\tkey: 'editable',\n\t\t\ttagName: 'p',\n\t\t\tclassName: className,\n\t\t\tstyle: { textAlign: alignment },\n\t\t\tonChange: onChangeContent,\n\t\t\tvalue: content\n\t\t})];\n\t},\n\tsave: function save(_ref2) {\n\t\tvar attributes = _ref2.attributes,\n\t\t    className = _ref2.className;\n\t\tvar content = attributes.content,\n\t\t    alignment = attributes.alignment;\n\n\t\treturn React.createElement('p', { className: className, style: { textAlign: alignment } }, content);\n\t}\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvc3JjL3NjcmlwdHMvYmxvY2tzL2hlbGxvLXdvcmxkLmpzPzliYjEiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6ImlCQUFpRixHOzs7Ozs7O0FBRWpGLGtCQUFtQjtRQUVsQjtPQUNBO1dBRUE7Ozs7U0FHRTtXQUNBO2FBRUQ7QUFKQzs7U0FTRjtBQUpFO0FBTkQ7O0FBTitDLDJCQWdCYTtNQUFBO01BQUE7TUFBQTtNQUFBO01BQ3BELFVBQXVCLFdBQXZCO01BQVMsWUFBYyxXQUUvQjs7V0FBUyxnQkFBaUIsWUFDekI7aUJBQWUsRUFBRSxTQUNqQjtBQUVEOztXQUFTLGtCQUFtQixjQUMzQjtpQkFBZSxFQUFFLFdBQ2pCO0FBRUQ7O1VBQ0Msb0JBQ0UsY0FBRCxpQkFBZSxLQUNkLGtDQUFDO1VBRUE7YUFBVztBQURYLElBRkYsdUJBT0E7UUFFQTtZQUNBO2NBQ0E7VUFBUSxFQUFFLFdBQ1Y7YUFDQTtVQUdGO0FBUkUsR0FERCxDQVRNO0FBb0JSO0FBL0NnRCw0QkErQ2Q7TUFBQTtNQUFBO01BQ3pCLFVBQXVCLFdBQXZCO01BQVMsWUFBYyxXQUUvQjs7U0FBTywyQkFBRyxXQUFZLFdBQVksT0FBUSxFQUFFLFdBQTJCLGVBQ3ZFO0FBbkQrQztBQUNoRCIsImZpbGUiOiIxNS5qcyIsInNvdXJjZXNDb250ZW50IjpbImNvbnN0IHsgcmVnaXN0ZXJCbG9ja1R5cGUsIFJpY2hUZXh0LCBCbG9ja0NvbnRyb2xzLCBBbGlnbm1lbnRUb29sYmFyLCBzb3VyY2UgfSA9IHdwLmJsb2NrcztcclxuXHJcbnJlZ2lzdGVyQmxvY2tUeXBlKCAnZ3V0ZW5iZXJnLXRlc3QvaGVsbG8td29ybGQnLCB7XHJcblx0dGl0bGU6ICdIZWxsbyBXb3JsZCcsXHJcblx0aWNvbjogJ3VuaXZlcnNhbC1hY2Nlc3MtYWx0JyxcclxuXHRjYXRlZ29yeTogJ2xheW91dCcsXHJcblxyXG5cdGF0dHJpYnV0ZXM6IHtcclxuXHRcdGNvbnRlbnQ6IHtcclxuXHRcdFx0dHlwZTogJ2FycmF5JyxcclxuXHRcdFx0c291cmNlOiAnY2hpbGRyZW4nLFxyXG5cdFx0XHRzZWxlY3RvcjogJ3AnXHJcblx0XHR9LFxyXG5cdFx0YWxpZ25tZW50OiB7XHJcblx0XHRcdHR5cGU6ICdzdHJpbmcnXHJcblx0XHR9XHJcblx0fSxcclxuXHJcblx0ZWRpdCggeyBhdHRyaWJ1dGVzLCBjbGFzc05hbWUsIGlzU2VsZWN0ZWQsIHNldEF0dHJpYnV0ZXMgfSApIHtcclxuXHRcdGNvbnN0IHsgY29udGVudCwgYWxpZ25tZW50IH0gPSBhdHRyaWJ1dGVzO1xyXG5cclxuXHRcdGZ1bmN0aW9uIG9uQ2hhbmdlQ29udGVudCggbmV3Q29udGVudCApIHtcclxuXHRcdFx0c2V0QXR0cmlidXRlcyggeyBjb250ZW50OiBuZXdDb250ZW50IH0gKTtcclxuXHRcdH1cclxuXHJcblx0XHRmdW5jdGlvbiBvbkNoYW5nZUFsaWdubWVudCggbmV3QWxpZ25tZW50ICkge1xyXG5cdFx0XHRzZXRBdHRyaWJ1dGVzKCB7IGFsaWdubWVudDogbmV3QWxpZ25tZW50IH0gKTtcclxuXHRcdH1cclxuXHJcblx0XHRyZXR1cm4gW1xyXG5cdFx0XHRpc1NlbGVjdGVkICYmIChcclxuXHRcdFx0XHQ8QmxvY2tDb250cm9scyBrZXk9XCJjb250cm9sc1wiPlxyXG5cdFx0XHRcdFx0PEFsaWdubWVudFRvb2xiYXJcclxuXHRcdFx0XHRcdFx0dmFsdWU9eyBhbGlnbm1lbnQgfVxyXG5cdFx0XHRcdFx0XHRvbkNoYW5nZT17IG9uQ2hhbmdlQWxpZ25tZW50IH1cclxuXHRcdFx0XHRcdC8+XHJcblx0XHRcdFx0PC9CbG9ja0NvbnRyb2xzPlxyXG5cdFx0XHQpLFxyXG5cdFx0XHQ8UmljaFRleHRcclxuXHRcdFx0XHRrZXk9XCJlZGl0YWJsZVwiXHJcblx0XHRcdFx0dGFnTmFtZT1cInBcIlxyXG5cdFx0XHRcdGNsYXNzTmFtZT17IGNsYXNzTmFtZSB9XHJcblx0XHRcdFx0c3R5bGU9eyB7IHRleHRBbGlnbjogYWxpZ25tZW50IH0gfVxyXG5cdFx0XHRcdG9uQ2hhbmdlPXsgb25DaGFuZ2VDb250ZW50IH1cclxuXHRcdFx0XHR2YWx1ZT17IGNvbnRlbnQgfVxyXG5cdFx0XHQvPlxyXG5cdFx0XTtcclxuXHR9LFxyXG5cclxuXHRzYXZlKCB7IGF0dHJpYnV0ZXMsIGNsYXNzTmFtZSB9ICkge1xyXG5cdFx0Y29uc3QgeyBjb250ZW50LCBhbGlnbm1lbnQgfSA9IGF0dHJpYnV0ZXM7XHJcblxyXG5cdFx0cmV0dXJuIDxwIGNsYXNzTmFtZT17IGNsYXNzTmFtZSB9IHN0eWxlPXsgeyB0ZXh0QWxpZ246IGFsaWdubWVudCB9IH0+eyBjb250ZW50IH08L3A+O1xyXG5cdH1cclxufSApO1xyXG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9hc3NldHMvc3JjL3NjcmlwdHMvYmxvY2tzL2hlbGxvLXdvcmxkLmpzIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///15\n");

/***/ }),

/***/ 16:
/***/ (function(module, exports) {

eval("var registerBlockType = wp.blocks.registerBlockType;\nvar withAPIData = wp.components.withAPIData;\n\nregisterBlockType('gutenberg-test/latest-post', {\n    title: 'Latest Post',\n    icon: 'megaphone',\n    category: 'widgets',\n\n    edit: withAPIData(function () {\n        return {\n            posts: '/wp/v2/posts?per_page=1'\n        };\n    })(function (_ref) {\n        var posts = _ref.posts,\n            className = _ref.className;\n\n        if (!posts.data) {\n            return 'loading !';\n        }\n        if (posts.data.length === 0) {\n            return 'No posts';\n        }\n        var post = posts.data[0];\n\n        return React.createElement('a', { className: className, href: post.link }, post.title.rendered);\n    }),\n\n    save: function save() {\n        // Rendering in PHP\n        return null;\n    }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvc3JjL3NjcmlwdHMvYmxvY2tzL2xhdGVzdC1wb3N0LmpzP2Y2ZTIiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IndCQUE4QixHO2tCQUNOLEc7O0FBRXhCLGtCQUFtQjtXQUVmO1VBQ0E7Y0FFQTs7c0JBQW1CLFlBQ2Y7O21CQUdIO0FBRk87QUFGRixPQUlELGdCQUE0QjtZQUFBO1lBQUEsaUJBQzdCOztZQUFLLENBQUUsTUFBTSxNQUNUO21CQUNIO0FBQ0Q7WUFBSyxNQUFNLEtBQUssV0FBVyxHQUN2QjttQkFDSDtBQUNEO1lBQUksT0FBTyxNQUFNLEtBRWpCOztlQUFPLDJCQUFHLFdBQVksV0FBWSxNQUFPLEtBQ25DLGFBQUssTUFFZDtBQUVEOztBQXZCNkMsMEJBd0J6QztBQUNBO2VBQ0g7QUExQjRDO0FBQzdDIiwiZmlsZSI6IjE2LmpzIiwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgeyByZWdpc3RlckJsb2NrVHlwZSB9ID0gd3AuYmxvY2tzO1xyXG5jb25zdCB7IHdpdGhBUElEYXRhIH0gPSB3cC5jb21wb25lbnRzO1xyXG5cclxucmVnaXN0ZXJCbG9ja1R5cGUoICdndXRlbmJlcmctdGVzdC9sYXRlc3QtcG9zdCcsIHtcclxuICAgIHRpdGxlOiAnTGF0ZXN0IFBvc3QnLFxyXG4gICAgaWNvbjogJ21lZ2FwaG9uZScsXHJcbiAgICBjYXRlZ29yeTogJ3dpZGdldHMnLFxyXG5cclxuICAgIGVkaXQ6IHdpdGhBUElEYXRhKCAoKSA9PiB7XHJcbiAgICAgICAgcmV0dXJuIHtcclxuICAgICAgICAgICAgcG9zdHM6ICcvd3AvdjIvcG9zdHM/cGVyX3BhZ2U9MSdcclxuICAgICAgICB9O1xyXG4gICAgfSApKCAoIHsgcG9zdHMsIGNsYXNzTmFtZSB9ICkgPT4ge1xyXG4gICAgICAgIGlmICggISBwb3N0cy5kYXRhICkge1xyXG4gICAgICAgICAgICByZXR1cm4gJ2xvYWRpbmcgISc7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGlmICggcG9zdHMuZGF0YS5sZW5ndGggPT09IDAgKSB7XHJcbiAgICAgICAgICAgIHJldHVybiAnTm8gcG9zdHMnO1xyXG4gICAgICAgIH1cclxuICAgICAgICB2YXIgcG9zdCA9IHBvc3RzLmRhdGFbIDAgXTtcclxuXHJcbiAgICAgICAgcmV0dXJuIDxhIGNsYXNzTmFtZT17IGNsYXNzTmFtZSB9IGhyZWY9eyBwb3N0LmxpbmsgfT5cclxuICAgICAgICAgICAgeyBwb3N0LnRpdGxlLnJlbmRlcmVkIH1cclxuICAgICAgICA8L2E+O1xyXG4gICAgfSApLFxyXG5cclxuICAgIHNhdmUoKSB7XHJcbiAgICAgICAgLy8gUmVuZGVyaW5nIGluIFBIUFxyXG4gICAgICAgIHJldHVybiBudWxsO1xyXG4gICAgfVxyXG59ICk7XHJcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL2Fzc2V0cy9zcmMvc2NyaXB0cy9ibG9ja3MvbGF0ZXN0LXBvc3QuanMiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///16\n");

/***/ })

/******/ });