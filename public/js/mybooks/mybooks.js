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

eval("$(function ($) {\n  $(document).on(\"change\", \"#flag_id\", function (e) {\n    var value = $(this).val();\n    var dataId = $.parseJSON($(this).attr('data-id'));\n    $.ajax({\n      method: \"post\",\n      url: STATUSFAVOUTITE.replace(\":id\", dataId),\n      data: {\n        'flag_id': value\n      },\n      success: function success(data) {\n        toastr.success('Successfully updated book status!');\n      },\n      error: function error(errors) {\n        toastr.danger('Unsuccessfully updated book status!');\n      }\n    });\n  });\n  $('#mybooks').DataTable({\n    \"autoWidth\": false,\n    \"columnDefs\": [{\n      \"width\": \"10%\",\n      \"targets\": 0\n    }, {\n      \"width\": \"10%\",\n      \"targets\": 1\n    }, {\n      \"width\": \"10%\",\n      \"targets\": 2\n    }, {\n      \"width\": \"10%\",\n      \"targets\": 3\n    }, {\n      \"width\": \"10%\",\n      \"targets\": 4\n    }, {\n      \"width\": \"10%\",\n      \"targets\": 5\n    }]\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbXlib29rcy9teWJvb2tzLmpzP2FkODgiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50Iiwib24iLCJlIiwidmFsdWUiLCJ2YWwiLCJkYXRhSWQiLCJwYXJzZUpTT04iLCJhdHRyIiwiYWpheCIsIm1ldGhvZCIsInVybCIsIlNUQVRVU0ZBVk9VVElURSIsInJlcGxhY2UiLCJkYXRhIiwic3VjY2VzcyIsInRvYXN0ciIsImVycm9yIiwiZXJyb3JzIiwiZGFuZ2VyIiwiRGF0YVRhYmxlIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFVBQVVBLENBQVYsRUFBYTtBQUNYQSxFQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsUUFBZixFQUF5QixVQUF6QixFQUFxQyxVQUFVQyxDQUFWLEVBQWE7QUFDOUMsUUFBSUMsS0FBSyxHQUFHSixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFLLEdBQVIsRUFBWjtBQUNBLFFBQUlDLE1BQU0sR0FBR04sQ0FBQyxDQUFDTyxTQUFGLENBQVlQLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVEsSUFBUixDQUFhLFNBQWIsQ0FBWixDQUFiO0FBQ0FSLElBQUFBLENBQUMsQ0FBQ1MsSUFBRixDQUFPO0FBQ0hDLE1BQUFBLE1BQU0sRUFBRSxNQURMO0FBRUhDLE1BQUFBLEdBQUcsRUFBRUMsZUFBZSxDQUFDQyxPQUFoQixDQUF3QixLQUF4QixFQUErQlAsTUFBL0IsQ0FGRjtBQUdIUSxNQUFBQSxJQUFJLEVBQUU7QUFBRSxtQkFBV1Y7QUFBYixPQUhIO0FBSUhXLE1BQUFBLE9BQU8sRUFBRSxpQkFBVUQsSUFBVixFQUFnQjtBQUNyQkUsUUFBQUEsTUFBTSxDQUFDRCxPQUFQLENBQWUsbUNBQWY7QUFDSCxPQU5FO0FBT0hFLE1BQUFBLEtBQUssRUFBRSxlQUFVQyxNQUFWLEVBQWtCO0FBQ3JCRixRQUFBQSxNQUFNLENBQUNHLE1BQVAsQ0FBYyxxQ0FBZDtBQUNIO0FBVEUsS0FBUDtBQVdILEdBZEQ7QUFpQkFuQixFQUFBQSxDQUFDLENBQUMsVUFBRCxDQUFELENBQWNvQixTQUFkLENBQXdCO0FBQ3BCLGlCQUFhLEtBRE87QUFFcEIsa0JBQWMsQ0FDVjtBQUFFLGVBQVMsS0FBWDtBQUFrQixpQkFBVztBQUE3QixLQURVLEVBRVY7QUFBRSxlQUFTLEtBQVg7QUFBa0IsaUJBQVc7QUFBN0IsS0FGVSxFQUdWO0FBQUUsZUFBUyxLQUFYO0FBQWlCLGlCQUFXO0FBQTVCLEtBSFUsRUFJVjtBQUFFLGVBQVMsS0FBWDtBQUFpQixpQkFBVztBQUE1QixLQUpVLEVBS1Y7QUFBRSxlQUFTLEtBQVg7QUFBaUIsaUJBQVc7QUFBNUIsS0FMVSxFQU1WO0FBQUUsZUFBUyxLQUFYO0FBQWlCLGlCQUFXO0FBQTVCLEtBTlU7QUFGTSxHQUF4QjtBQVdILENBN0JBLENBQUQiLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uICgkKSB7XHJcbiAgICAkKGRvY3VtZW50KS5vbihcImNoYW5nZVwiLCBcIiNmbGFnX2lkXCIsIGZ1bmN0aW9uIChlKSB7XHJcbiAgICAgICAgbGV0IHZhbHVlID0gJCh0aGlzKS52YWwoKTtcclxuICAgICAgICBsZXQgZGF0YUlkID0gJC5wYXJzZUpTT04oJCh0aGlzKS5hdHRyKCdkYXRhLWlkJykpO1xyXG4gICAgICAgICQuYWpheCh7XHJcbiAgICAgICAgICAgIG1ldGhvZDogXCJwb3N0XCIsXHJcbiAgICAgICAgICAgIHVybDogU1RBVFVTRkFWT1VUSVRFLnJlcGxhY2UoXCI6aWRcIiwgZGF0YUlkKSxcclxuICAgICAgICAgICAgZGF0YTogeyAnZmxhZ19pZCc6IHZhbHVlIH0sXHJcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChkYXRhKSB7XHJcbiAgICAgICAgICAgICAgICB0b2FzdHIuc3VjY2VzcygnU3VjY2Vzc2Z1bGx5IHVwZGF0ZWQgYm9vayBzdGF0dXMhJylcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgZXJyb3I6IGZ1bmN0aW9uIChlcnJvcnMpIHtcclxuICAgICAgICAgICAgICAgIHRvYXN0ci5kYW5nZXIoJ1Vuc3VjY2Vzc2Z1bGx5IHVwZGF0ZWQgYm9vayBzdGF0dXMhJylcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICB9KTtcclxuICAgIH0pO1xyXG5cclxuXHJcbiAgICAkKCcjbXlib29rcycpLkRhdGFUYWJsZSh7XHJcbiAgICAgICAgXCJhdXRvV2lkdGhcIjogZmFsc2UsXHJcbiAgICAgICAgXCJjb2x1bW5EZWZzXCI6IFtcclxuICAgICAgICAgICAgeyBcIndpZHRoXCI6IFwiMTAlXCIsIFwidGFyZ2V0c1wiOiAwIH0sXHJcbiAgICAgICAgICAgIHsgXCJ3aWR0aFwiOiBcIjEwJVwiLCBcInRhcmdldHNcIjogMSB9LFxyXG4gICAgICAgICAgICB7IFwid2lkdGhcIjogXCIxMCVcIixcInRhcmdldHNcIjogMiB9LFxyXG4gICAgICAgICAgICB7IFwid2lkdGhcIjogXCIxMCVcIixcInRhcmdldHNcIjogMyB9LFxyXG4gICAgICAgICAgICB7IFwid2lkdGhcIjogXCIxMCVcIixcInRhcmdldHNcIjogNCB9LFxyXG4gICAgICAgICAgICB7IFwid2lkdGhcIjogXCIxMCVcIixcInRhcmdldHNcIjogNSB9LFxyXG4gICAgICAgICAgXVxyXG4gICAgICAgIH0pO1xyXG59KTtcclxuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9teWJvb2tzL215Ym9va3MuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/mybooks/mybooks.js\n");

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