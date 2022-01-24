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

/***/ "./resources/js/mybooks/mybooks.js":
/*!*****************************************!*\
  !*** ./resources/js/mybooks/mybooks.js ***!
  \*****************************************/
/***/ (() => {

eval("$(function ($) {\n  $(document).on(\"change\", \"#flag_id\", function (e) {\n    var value = $(this).val();\n    var dataId = $.parseJSON($(this).attr('data-id'));\n    $.ajax({\n      method: \"post\",\n      url: STATUSFAVOUTITE.replace(\":id\", dataId),\n      data: {\n        'flag_id': value\n      },\n      success: function success(data) {\n        toastr.success('Successfully updated book status!');\n      },\n      error: function error(errors) {\n        toastr.danger('Unsuccessfully updated book status!');\n      }\n    });\n  });\n  $(\"#mybooks\").DataTable();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbXlib29rcy9teWJvb2tzLmpzP2FkODgiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50Iiwib24iLCJlIiwidmFsdWUiLCJ2YWwiLCJkYXRhSWQiLCJwYXJzZUpTT04iLCJhdHRyIiwiYWpheCIsIm1ldGhvZCIsInVybCIsIlNUQVRVU0ZBVk9VVElURSIsInJlcGxhY2UiLCJkYXRhIiwic3VjY2VzcyIsInRvYXN0ciIsImVycm9yIiwiZXJyb3JzIiwiZGFuZ2VyIiwiRGF0YVRhYmxlIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFVBQVVBLENBQVYsRUFBYTtBQUNYQSxFQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsUUFBZixFQUF5QixVQUF6QixFQUFxQyxVQUFVQyxDQUFWLEVBQWE7QUFDOUMsUUFBSUMsS0FBSyxHQUFHSixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFLLEdBQVIsRUFBWjtBQUNBLFFBQUlDLE1BQU0sR0FBR04sQ0FBQyxDQUFDTyxTQUFGLENBQVlQLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVEsSUFBUixDQUFhLFNBQWIsQ0FBWixDQUFiO0FBQ0FSLElBQUFBLENBQUMsQ0FBQ1MsSUFBRixDQUFPO0FBQ0hDLE1BQUFBLE1BQU0sRUFBRSxNQURMO0FBRUhDLE1BQUFBLEdBQUcsRUFBRUMsZUFBZSxDQUFDQyxPQUFoQixDQUF3QixLQUF4QixFQUErQlAsTUFBL0IsQ0FGRjtBQUdIUSxNQUFBQSxJQUFJLEVBQUU7QUFBRSxtQkFBV1Y7QUFBYixPQUhIO0FBSUhXLE1BQUFBLE9BQU8sRUFBRSxpQkFBVUQsSUFBVixFQUFnQjtBQUNyQkUsUUFBQUEsTUFBTSxDQUFDRCxPQUFQLENBQWUsbUNBQWY7QUFDSCxPQU5FO0FBT0hFLE1BQUFBLEtBQUssRUFBRSxlQUFVQyxNQUFWLEVBQWtCO0FBQ3JCRixRQUFBQSxNQUFNLENBQUNHLE1BQVAsQ0FBYyxxQ0FBZDtBQUNIO0FBVEUsS0FBUDtBQVdILEdBZEQ7QUFpQkFuQixFQUFBQSxDQUFDLENBQUMsVUFBRCxDQUFELENBQWNvQixTQUFkO0FBQ0gsQ0FuQkEsQ0FBRCIsInNvdXJjZXNDb250ZW50IjpbIiQoZnVuY3Rpb24gKCQpIHtcclxuICAgICQoZG9jdW1lbnQpLm9uKFwiY2hhbmdlXCIsIFwiI2ZsYWdfaWRcIiwgZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICBsZXQgdmFsdWUgPSAkKHRoaXMpLnZhbCgpO1xyXG4gICAgICAgIGxldCBkYXRhSWQgPSAkLnBhcnNlSlNPTigkKHRoaXMpLmF0dHIoJ2RhdGEtaWQnKSk7XHJcbiAgICAgICAgJC5hamF4KHtcclxuICAgICAgICAgICAgbWV0aG9kOiBcInBvc3RcIixcclxuICAgICAgICAgICAgdXJsOiBTVEFUVVNGQVZPVVRJVEUucmVwbGFjZShcIjppZFwiLCBkYXRhSWQpLFxyXG4gICAgICAgICAgICBkYXRhOiB7ICdmbGFnX2lkJzogdmFsdWUgfSxcclxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKGRhdGEpIHtcclxuICAgICAgICAgICAgICAgIHRvYXN0ci5zdWNjZXNzKCdTdWNjZXNzZnVsbHkgdXBkYXRlZCBib29rIHN0YXR1cyEnKVxyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICBlcnJvcjogZnVuY3Rpb24gKGVycm9ycykge1xyXG4gICAgICAgICAgICAgICAgdG9hc3RyLmRhbmdlcignVW5zdWNjZXNzZnVsbHkgdXBkYXRlZCBib29rIHN0YXR1cyEnKVxyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcblxyXG5cclxuICAgICQoXCIjbXlib29rc1wiKS5EYXRhVGFibGUoKTtcclxufSk7XHJcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbXlib29rcy9teWJvb2tzLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/mybooks/mybooks.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/mybooks/mybooks.js"]();
/******/ 	
/******/ })()
;