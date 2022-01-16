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

eval("$(function ($) {\n  $(document).on(\"change\", \"#flag_id\", function (e) {\n    var value = $(this).val();\n    var name = $(this).attr('name');\n    var dataId = $.parseJSON($(this).attr('data-id'));\n    console.log(dataId);\n    $.ajax({\n      method: \"post\",\n      url: STATUSFAVOUTITE.replace(\":id\", dataId),\n      data: {\n        'flag_id': value\n      },\n      success: function success(data) {\n        toastr.success('Successfully updated book status!');\n      },\n      error: function error(errors) {\n        toastr.danger('Unsuccessfully updated book status!');\n      }\n    });\n  });\n  $(\"#mybooks\").DataTable();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbXlib29rcy9teWJvb2tzLmpzP2FkODgiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50Iiwib24iLCJlIiwidmFsdWUiLCJ2YWwiLCJuYW1lIiwiYXR0ciIsImRhdGFJZCIsInBhcnNlSlNPTiIsImNvbnNvbGUiLCJsb2ciLCJhamF4IiwibWV0aG9kIiwidXJsIiwiU1RBVFVTRkFWT1VUSVRFIiwicmVwbGFjZSIsImRhdGEiLCJzdWNjZXNzIiwidG9hc3RyIiwiZXJyb3IiLCJlcnJvcnMiLCJkYW5nZXIiLCJEYXRhVGFibGUiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUMsVUFBVUEsQ0FBVixFQUFhO0FBQ1hBLEVBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEVBQVosQ0FBZSxRQUFmLEVBQXlCLFVBQXpCLEVBQXFDLFVBQVVDLENBQVYsRUFBYTtBQUM5QyxRQUFJQyxLQUFLLEdBQUdKLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUssR0FBUixFQUFaO0FBQ0EsUUFBSUMsSUFBSSxHQUFFTixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFPLElBQVIsQ0FBYSxNQUFiLENBQVY7QUFDQSxRQUFJQyxNQUFNLEdBQUdSLENBQUMsQ0FBQ1MsU0FBRixDQUFZVCxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFPLElBQVIsQ0FBYSxTQUFiLENBQVosQ0FBYjtBQUNBRyxJQUFBQSxPQUFPLENBQUNDLEdBQVIsQ0FBWUgsTUFBWjtBQUNBUixJQUFBQSxDQUFDLENBQUNZLElBQUYsQ0FBTztBQUNIQyxNQUFBQSxNQUFNLEVBQUUsTUFETDtBQUVIQyxNQUFBQSxHQUFHLEVBQUVDLGVBQWUsQ0FBQ0MsT0FBaEIsQ0FBd0IsS0FBeEIsRUFBK0JSLE1BQS9CLENBRkY7QUFHSFMsTUFBQUEsSUFBSSxFQUFFO0FBQUUsbUJBQVdiO0FBQWIsT0FISDtBQUlIYyxNQUFBQSxPQUFPLEVBQUUsaUJBQVVELElBQVYsRUFBZ0I7QUFDckJFLFFBQUFBLE1BQU0sQ0FBQ0QsT0FBUCxDQUFlLG1DQUFmO0FBQ0gsT0FORTtBQU9IRSxNQUFBQSxLQUFLLEVBQUUsZUFBVUMsTUFBVixFQUFrQjtBQUNyQkYsUUFBQUEsTUFBTSxDQUFDRyxNQUFQLENBQWMscUNBQWQ7QUFDSDtBQVRFLEtBQVA7QUFXSCxHQWhCRDtBQW1CQXRCLEVBQUFBLENBQUMsQ0FBQyxVQUFELENBQUQsQ0FBY3VCLFNBQWQ7QUFDSCxDQXJCQSxDQUFEIiwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbiAoJCkge1xyXG4gICAgJChkb2N1bWVudCkub24oXCJjaGFuZ2VcIiwgXCIjZmxhZ19pZFwiLCBmdW5jdGlvbiAoZSkge1xyXG4gICAgICAgIGxldCB2YWx1ZSA9ICQodGhpcykudmFsKCk7XHJcbiAgICAgICAgbGV0IG5hbWUgPSQodGhpcykuYXR0cignbmFtZScpO1xyXG4gICAgICAgIGxldCBkYXRhSWQgPSAkLnBhcnNlSlNPTigkKHRoaXMpLmF0dHIoJ2RhdGEtaWQnKSk7XHJcbiAgICAgICAgY29uc29sZS5sb2coZGF0YUlkKTtcclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICBtZXRob2Q6IFwicG9zdFwiLFxyXG4gICAgICAgICAgICB1cmw6IFNUQVRVU0ZBVk9VVElURS5yZXBsYWNlKFwiOmlkXCIsIGRhdGFJZCksXHJcbiAgICAgICAgICAgIGRhdGE6IHsgJ2ZsYWdfaWQnOiB2YWx1ZSB9LFxyXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAoZGF0YSkge1xyXG4gICAgICAgICAgICAgICAgdG9hc3RyLnN1Y2Nlc3MoJ1N1Y2Nlc3NmdWxseSB1cGRhdGVkIGJvb2sgc3RhdHVzIScpXHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGVycm9yOiBmdW5jdGlvbiAoZXJyb3JzKSB7XHJcbiAgICAgICAgICAgICAgICB0b2FzdHIuZGFuZ2VyKCdVbnN1Y2Nlc3NmdWxseSB1cGRhdGVkIGJvb2sgc3RhdHVzIScpXHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcblxyXG4gICAgJChcIiNteWJvb2tzXCIpLkRhdGFUYWJsZSgpO1xyXG59KTtcclxuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9teWJvb2tzL215Ym9va3MuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/mybooks/mybooks.js\n");

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