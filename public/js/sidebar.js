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

eval("$(function () {\n  $(document).on(\"click\", \".nav-link\", function () {\n    $(\".nav-link\").removeClass(\"active\");\n    $(this).addClass(\"active\");\n  });\n  $(document).on('click', function (e) {\n    if ($(e.target).hasClass(\"clicking\") && $('body').hasClass(\"sidebar-collapse\")) {\n      $(\".user-panel .info\").addClass(\"d-none\");\n      $(\".user-panel .image\").removeClass(\"image col-md-2 p-0 ml-4\").addClass(\"image col-md-7 p-0 ml-3\");\n      $(\".brand-link\").addClass(\"d-none\");\n    } else {\n      $(\".user-panel .info\").removeClass(\"d-none\");\n      $(\".user-panel .image\").removeClass(\"image col-md-7 p-0 ml-3\").addClass(\"image col-md-2 p-0 ml-4\");\n      $(\".brand-link\").removeClass(\"d-none\");\n    }\n  });\n  $(\"aside\").hover(function () {\n    if ($('body').hasClass(\"sidebar-collapse\")) {\n      $(\".brand-link\").addClass(\"d-none\");\n      $(\".user-panel\").addClass(\"d-none\");\n    }\n  }, function () {\n    $(\".user-panel\").removeClass('d-none').addClass(\"d-block\");\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2lkZWJhci5qcz82NzEwIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsIm9uIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsImUiLCJ0YXJnZXQiLCJoYXNDbGFzcyIsImhvdmVyIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFlBQVk7QUFDVkEsRUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsRUFBWixDQUFlLE9BQWYsRUFBd0IsV0FBeEIsRUFBcUMsWUFBWTtBQUM3Q0YsSUFBQUEsQ0FBQyxDQUFDLFdBQUQsQ0FBRCxDQUFlRyxXQUFmLENBQTJCLFFBQTNCO0FBQ0FILElBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUksUUFBUixDQUFpQixRQUFqQjtBQUNILEdBSEQ7QUFJQUosRUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsRUFBWixDQUFlLE9BQWYsRUFBdUIsVUFBVUcsQ0FBVixFQUFhO0FBQ2hDLFFBQUdMLENBQUMsQ0FBQ0ssQ0FBQyxDQUFDQyxNQUFILENBQUQsQ0FBWUMsUUFBWixDQUFxQixVQUFyQixLQUFvQ1AsQ0FBQyxDQUFDLE1BQUQsQ0FBRCxDQUFVTyxRQUFWLENBQW1CLGtCQUFuQixDQUF2QyxFQUErRTtBQUMzRVAsTUFBQUEsQ0FBQyxDQUFDLG1CQUFELENBQUQsQ0FBdUJJLFFBQXZCLENBQWdDLFFBQWhDO0FBQ0FKLE1BQUFBLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCRyxXQUF4QixDQUFvQyx5QkFBcEMsRUFBK0RDLFFBQS9ELENBQXdFLHlCQUF4RTtBQUNBSixNQUFBQSxDQUFDLENBQUMsYUFBRCxDQUFELENBQWlCSSxRQUFqQixDQUEwQixRQUExQjtBQUNILEtBSkQsTUFJSztBQUNESixNQUFBQSxDQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkcsV0FBdkIsQ0FBbUMsUUFBbkM7QUFDQUgsTUFBQUEsQ0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JHLFdBQXhCLENBQW9DLHlCQUFwQyxFQUErREMsUUFBL0QsQ0FBd0UseUJBQXhFO0FBQ0FKLE1BQUFBLENBQUMsQ0FBQyxhQUFELENBQUQsQ0FBaUJHLFdBQWpCLENBQTZCLFFBQTdCO0FBQ0g7QUFDSixHQVZEO0FBWUFILEVBQUFBLENBQUMsQ0FBQyxPQUFELENBQUQsQ0FBV1EsS0FBWCxDQUFpQixZQUFXO0FBQ3hCLFFBQUdSLENBQUMsQ0FBQyxNQUFELENBQUQsQ0FBVU8sUUFBVixDQUFtQixrQkFBbkIsQ0FBSCxFQUEyQztBQUMzQ1AsTUFBQUEsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQkksUUFBakIsQ0FBMEIsUUFBMUI7QUFDQUosTUFBQUEsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQkksUUFBakIsQ0FBMEIsUUFBMUI7QUFDQztBQUNKLEdBTEQsRUFLRyxZQUFXO0FBQ1ZKLElBQUFBLENBQUMsQ0FBQyxhQUFELENBQUQsQ0FBaUJHLFdBQWpCLENBQTZCLFFBQTdCLEVBQXVDQyxRQUF2QyxDQUFnRCxTQUFoRDtBQUNILEdBUEQ7QUFTSCxDQTFCQSxDQUFEIiwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbiAoKSB7XHJcbiAgICAkKGRvY3VtZW50KS5vbihcImNsaWNrXCIsIFwiLm5hdi1saW5rXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAkKFwiLm5hdi1saW5rXCIpLnJlbW92ZUNsYXNzKFwiYWN0aXZlXCIpO1xyXG4gICAgICAgICQodGhpcykuYWRkQ2xhc3MoXCJhY3RpdmVcIik7XHJcbiAgICB9KTtcclxuICAgICQoZG9jdW1lbnQpLm9uKCdjbGljaycsZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICBpZigkKGUudGFyZ2V0KS5oYXNDbGFzcyhcImNsaWNraW5nXCIpICYmICQoJ2JvZHknKS5oYXNDbGFzcyhcInNpZGViYXItY29sbGFwc2VcIikgKXtcclxuICAgICAgICAgICAgJChcIi51c2VyLXBhbmVsIC5pbmZvXCIpLmFkZENsYXNzKFwiZC1ub25lXCIpO1xyXG4gICAgICAgICAgICAkKFwiLnVzZXItcGFuZWwgLmltYWdlXCIpLnJlbW92ZUNsYXNzKFwiaW1hZ2UgY29sLW1kLTIgcC0wIG1sLTRcIikuYWRkQ2xhc3MoXCJpbWFnZSBjb2wtbWQtNyBwLTAgbWwtM1wiKTtcclxuICAgICAgICAgICAgJChcIi5icmFuZC1saW5rXCIpLmFkZENsYXNzKFwiZC1ub25lXCIpO1xyXG4gICAgICAgIH1lbHNle1xyXG4gICAgICAgICAgICAkKFwiLnVzZXItcGFuZWwgLmluZm9cIikucmVtb3ZlQ2xhc3MoXCJkLW5vbmVcIik7XHJcbiAgICAgICAgICAgICQoXCIudXNlci1wYW5lbCAuaW1hZ2VcIikucmVtb3ZlQ2xhc3MoXCJpbWFnZSBjb2wtbWQtNyBwLTAgbWwtM1wiKS5hZGRDbGFzcyhcImltYWdlIGNvbC1tZC0yIHAtMCBtbC00XCIpO1xyXG4gICAgICAgICAgICAkKFwiLmJyYW5kLWxpbmtcIikucmVtb3ZlQ2xhc3MoXCJkLW5vbmVcIik7XHJcbiAgICAgICAgfVxyXG4gICAgfSk7ICBcclxuICAgIFxyXG4gICAgJChcImFzaWRlXCIpLmhvdmVyKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGlmKCQoJ2JvZHknKS5oYXNDbGFzcyhcInNpZGViYXItY29sbGFwc2VcIikpIHtcclxuICAgICAgICAkKFwiLmJyYW5kLWxpbmtcIikuYWRkQ2xhc3MoXCJkLW5vbmVcIik7XHJcbiAgICAgICAgJChcIi51c2VyLXBhbmVsXCIpLmFkZENsYXNzKFwiZC1ub25lXCIpO1xyXG4gICAgICAgIH1cclxuICAgIH0sIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICQoXCIudXNlci1wYW5lbFwiKS5yZW1vdmVDbGFzcygnZC1ub25lJykuYWRkQ2xhc3MoXCJkLWJsb2NrXCIpO1xyXG4gICAgfSk7XHJcbiAgICBcclxufSk7XHJcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2lkZWJhci5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/sidebar.js\n");

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