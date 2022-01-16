/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/sidebar.js":
/*!*********************************!*\
  !*** ./resources/js/sidebar.js ***!
  \*********************************/
/***/ (() => {

eval("$(function () {\n  $(document).on(\"click\", \".nav-link\", function () {\n    $(\".nav-link\").removeClass(\"active\");\n    $(this).addClass(\"active\");\n  });\n  $(document).on('click', function (e) {\n    if ($(e.target).hasClass(\"clicking\") && $('body').hasClass(\"sidebar-collapse\")) {\n      $(\".user-panel .info\").addClass(\"d-none\");\n      $(\".user-panel .image\").removeClass(\"image col-md-2 p-0 ml-4\").addClass(\"image col-md-7 p-0 ml-3\");\n      $(\".brand-link\").addClass(\"d-none\");\n    } else {\n      $(\".user-panel .info\").removeClass(\"d-none\");\n      $(\".user-panel .image\").removeClass(\"image col-md-7 p-0 ml-3\").addClass(\"image col-md-2 p-0 ml-4\");\n      $(\".brand-link\").removeClass(\"d-none\");\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2lkZWJhci5qcz82NzEwIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsIm9uIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsImUiLCJ0YXJnZXQiLCJoYXNDbGFzcyJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxZQUFZO0FBQ1ZBLEVBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEVBQVosQ0FBZSxPQUFmLEVBQXdCLFdBQXhCLEVBQXFDLFlBQVk7QUFDN0NGLElBQUFBLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZUcsV0FBZixDQUEyQixRQUEzQjtBQUNBSCxJQUFBQSxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFJLFFBQVIsQ0FBaUIsUUFBakI7QUFDSCxHQUhEO0FBSUFKLEVBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEVBQVosQ0FBZSxPQUFmLEVBQXVCLFVBQVVHLENBQVYsRUFBYTtBQUNoQyxRQUFHTCxDQUFDLENBQUNLLENBQUMsQ0FBQ0MsTUFBSCxDQUFELENBQVlDLFFBQVosQ0FBcUIsVUFBckIsS0FBb0NQLENBQUMsQ0FBQyxNQUFELENBQUQsQ0FBVU8sUUFBVixDQUFtQixrQkFBbkIsQ0FBdkMsRUFBK0U7QUFDM0VQLE1BQUFBLENBQUMsQ0FBQyxtQkFBRCxDQUFELENBQXVCSSxRQUF2QixDQUFnQyxRQUFoQztBQUNBSixNQUFBQSxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkcsV0FBeEIsQ0FBb0MseUJBQXBDLEVBQStEQyxRQUEvRCxDQUF3RSx5QkFBeEU7QUFDQUosTUFBQUEsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQkksUUFBakIsQ0FBMEIsUUFBMUI7QUFDSCxLQUpELE1BSUs7QUFDREosTUFBQUEsQ0FBQyxDQUFDLG1CQUFELENBQUQsQ0FBdUJHLFdBQXZCLENBQW1DLFFBQW5DO0FBQ0FILE1BQUFBLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCRyxXQUF4QixDQUFvQyx5QkFBcEMsRUFBK0RDLFFBQS9ELENBQXdFLHlCQUF4RTtBQUNBSixNQUFBQSxDQUFDLENBQUMsYUFBRCxDQUFELENBQWlCRyxXQUFqQixDQUE2QixRQUE3QjtBQUNIO0FBQ0osR0FWRDtBQVdILENBaEJBLENBQUQiLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uICgpIHtcclxuICAgICQoZG9jdW1lbnQpLm9uKFwiY2xpY2tcIiwgXCIubmF2LWxpbmtcIiwgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICQoXCIubmF2LWxpbmtcIikucmVtb3ZlQ2xhc3MoXCJhY3RpdmVcIik7XHJcbiAgICAgICAgJCh0aGlzKS5hZGRDbGFzcyhcImFjdGl2ZVwiKTtcclxuICAgIH0pO1xyXG4gICAgJChkb2N1bWVudCkub24oJ2NsaWNrJyxmdW5jdGlvbiAoZSkge1xyXG4gICAgICAgIGlmKCQoZS50YXJnZXQpLmhhc0NsYXNzKFwiY2xpY2tpbmdcIikgJiYgJCgnYm9keScpLmhhc0NsYXNzKFwic2lkZWJhci1jb2xsYXBzZVwiKSApe1xyXG4gICAgICAgICAgICAkKFwiLnVzZXItcGFuZWwgLmluZm9cIikuYWRkQ2xhc3MoXCJkLW5vbmVcIik7XHJcbiAgICAgICAgICAgICQoXCIudXNlci1wYW5lbCAuaW1hZ2VcIikucmVtb3ZlQ2xhc3MoXCJpbWFnZSBjb2wtbWQtMiBwLTAgbWwtNFwiKS5hZGRDbGFzcyhcImltYWdlIGNvbC1tZC03IHAtMCBtbC0zXCIpO1xyXG4gICAgICAgICAgICAkKFwiLmJyYW5kLWxpbmtcIikuYWRkQ2xhc3MoXCJkLW5vbmVcIik7XHJcbiAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICQoXCIudXNlci1wYW5lbCAuaW5mb1wiKS5yZW1vdmVDbGFzcyhcImQtbm9uZVwiKTtcclxuICAgICAgICAgICAgJChcIi51c2VyLXBhbmVsIC5pbWFnZVwiKS5yZW1vdmVDbGFzcyhcImltYWdlIGNvbC1tZC03IHAtMCBtbC0zXCIpLmFkZENsYXNzKFwiaW1hZ2UgY29sLW1kLTIgcC0wIG1sLTRcIik7XHJcbiAgICAgICAgICAgICQoXCIuYnJhbmQtbGlua1wiKS5yZW1vdmVDbGFzcyhcImQtbm9uZVwiKTtcclxuICAgICAgICB9XHJcbiAgICB9KTsgICAgICBcclxufSk7XHJcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2lkZWJhci5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/sidebar.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/sidebar.js"]();
/******/ 	
/******/ })()
;