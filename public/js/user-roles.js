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

/***/ "./resources/js/user-roles/user-roles.js":
/*!***********************************************!*\
  !*** ./resources/js/user-roles/user-roles.js ***!
  \***********************************************/
/***/ (() => {

eval("$(function ($) {\n  $(document).on(\"change\", \"#flag_id\", function (e) {\n    var value = $(this).val();\n    var dataId = $.parseJSON($(this).attr('data-id'));\n    $.ajax({\n      method: \"post\",\n      url: STATUSFAVOUTITE.replace(\":id\", dataId),\n      data: {\n        'flag_id': value\n      },\n      success: function success(data) {\n        toastr.success('Successfully updated user status!');\n      },\n      error: function error(errors) {\n        toastr.danger('Unsuccessfully updated user status!');\n      }\n    });\n  });\n  $('#userRoles').DataTable({\n    \"autoWidth\": false,\n    \"columnDefs\": [{\n      \"width\": \"0%\",\n      \"targets\": 0\n    }, {\n      \"width\": \"5%\",\n      \"targets\": 1\n    }, {\n      \"width\": \"10%\",\n      \"targets\": 2\n    }, {\n      \"width\": \"0%\",\n      \"targets\": 3\n    }, {\n      \"width\": \"7%\",\n      \"targets\": 4\n    }, {\n      \"width\": \"16%\",\n      \"targets\": 5\n    }, {\n      \"width\": \"12%\",\n      \"targets\": 6\n    }, {\n      \"width\": \"6%\",\n      \"targets\": 7\n    }, {\n      \"width\": \"12%\",\n      \"targets\": 8\n    }, {\n      \"width\": \"12%\",\n      \"targets\": 9\n    }, {\n      \"width\": \"5%\",\n      \"targets\": 10\n    }, {\n      \"width\": \"20%\",\n      \"targets\": 11\n    }]\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvdXNlci1yb2xlcy91c2VyLXJvbGVzLmpzP2M0NDYiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50Iiwib24iLCJlIiwidmFsdWUiLCJ2YWwiLCJkYXRhSWQiLCJwYXJzZUpTT04iLCJhdHRyIiwiYWpheCIsIm1ldGhvZCIsInVybCIsIlNUQVRVU0ZBVk9VVElURSIsInJlcGxhY2UiLCJkYXRhIiwic3VjY2VzcyIsInRvYXN0ciIsImVycm9yIiwiZXJyb3JzIiwiZGFuZ2VyIiwiRGF0YVRhYmxlIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFVBQVNBLENBQVQsRUFBWTtBQUVaQSxFQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsUUFBZixFQUF5QixVQUF6QixFQUFxQyxVQUFVQyxDQUFWLEVBQWE7QUFDaEQsUUFBSUMsS0FBSyxHQUFHSixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFLLEdBQVIsRUFBWjtBQUNBLFFBQUlDLE1BQU0sR0FBR04sQ0FBQyxDQUFDTyxTQUFGLENBQVlQLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVEsSUFBUixDQUFhLFNBQWIsQ0FBWixDQUFiO0FBQ0FSLElBQUFBLENBQUMsQ0FBQ1MsSUFBRixDQUFPO0FBQ0hDLE1BQUFBLE1BQU0sRUFBRSxNQURMO0FBRUhDLE1BQUFBLEdBQUcsRUFBRUMsZUFBZSxDQUFDQyxPQUFoQixDQUF3QixLQUF4QixFQUErQlAsTUFBL0IsQ0FGRjtBQUdIUSxNQUFBQSxJQUFJLEVBQUU7QUFBRSxtQkFBV1Y7QUFBYixPQUhIO0FBSUhXLE1BQUFBLE9BQU8sRUFBRSxpQkFBVUQsSUFBVixFQUFnQjtBQUNyQkUsUUFBQUEsTUFBTSxDQUFDRCxPQUFQLENBQWUsbUNBQWY7QUFDSCxPQU5FO0FBT0hFLE1BQUFBLEtBQUssRUFBRSxlQUFVQyxNQUFWLEVBQWtCO0FBQ3JCRixRQUFBQSxNQUFNLENBQUNHLE1BQVAsQ0FBYyxxQ0FBZDtBQUNIO0FBVEUsS0FBUDtBQVdILEdBZEM7QUFpQkFuQixFQUFBQSxDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCb0IsU0FBaEIsQ0FBMEI7QUFDdEIsaUJBQWEsS0FEUztBQUV0QixrQkFBYyxDQUNWO0FBQUUsZUFBUyxJQUFYO0FBQWlCLGlCQUFXO0FBQTVCLEtBRFUsRUFFVjtBQUFFLGVBQVMsSUFBWDtBQUFpQixpQkFBVztBQUE1QixLQUZVLEVBR1Y7QUFBRSxlQUFTLEtBQVg7QUFBaUIsaUJBQVc7QUFBNUIsS0FIVSxFQUlWO0FBQUUsZUFBUyxJQUFYO0FBQWdCLGlCQUFXO0FBQTNCLEtBSlUsRUFLVjtBQUFFLGVBQVMsSUFBWDtBQUFnQixpQkFBVztBQUEzQixLQUxVLEVBTVY7QUFBRSxlQUFTLEtBQVg7QUFBaUIsaUJBQVc7QUFBNUIsS0FOVSxFQU9WO0FBQUUsZUFBUyxLQUFYO0FBQWlCLGlCQUFXO0FBQTVCLEtBUFUsRUFRVjtBQUFFLGVBQVMsSUFBWDtBQUFnQixpQkFBVztBQUEzQixLQVJVLEVBU1Y7QUFBRSxlQUFTLEtBQVg7QUFBaUIsaUJBQVc7QUFBNUIsS0FUVSxFQVVWO0FBQUUsZUFBUyxLQUFYO0FBQWlCLGlCQUFXO0FBQTVCLEtBVlUsRUFXVjtBQUFFLGVBQVMsSUFBWDtBQUFnQixpQkFBVztBQUEzQixLQVhVLEVBWVY7QUFBRSxlQUFTLEtBQVg7QUFBaUIsaUJBQVc7QUFBNUIsS0FaVTtBQUZRLEdBQTFCO0FBa0JELENBckNBLENBQUQiLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uKCQpIHtcclxuXHJcbiAgJChkb2N1bWVudCkub24oXCJjaGFuZ2VcIiwgXCIjZmxhZ19pZFwiLCBmdW5jdGlvbiAoZSkge1xyXG4gICAgbGV0IHZhbHVlID0gJCh0aGlzKS52YWwoKTtcclxuICAgIGxldCBkYXRhSWQgPSAkLnBhcnNlSlNPTigkKHRoaXMpLmF0dHIoJ2RhdGEtaWQnKSk7XHJcbiAgICAkLmFqYXgoe1xyXG4gICAgICAgIG1ldGhvZDogXCJwb3N0XCIsXHJcbiAgICAgICAgdXJsOiBTVEFUVVNGQVZPVVRJVEUucmVwbGFjZShcIjppZFwiLCBkYXRhSWQpLFxyXG4gICAgICAgIGRhdGE6IHsgJ2ZsYWdfaWQnOiB2YWx1ZSB9LFxyXG4gICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChkYXRhKSB7XHJcbiAgICAgICAgICAgIHRvYXN0ci5zdWNjZXNzKCdTdWNjZXNzZnVsbHkgdXBkYXRlZCB1c2VyIHN0YXR1cyEnKVxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgZXJyb3I6IGZ1bmN0aW9uIChlcnJvcnMpIHtcclxuICAgICAgICAgICAgdG9hc3RyLmRhbmdlcignVW5zdWNjZXNzZnVsbHkgdXBkYXRlZCB1c2VyIHN0YXR1cyEnKVxyXG4gICAgICAgIH0sXHJcbiAgICB9KTtcclxufSk7XHJcblxyXG5cclxuICAkKCcjdXNlclJvbGVzJykuRGF0YVRhYmxlKHtcclxuICAgICAgXCJhdXRvV2lkdGhcIjogZmFsc2UsXHJcbiAgICAgIFwiY29sdW1uRGVmc1wiOiBbXHJcbiAgICAgICAgICB7IFwid2lkdGhcIjogXCIwJVwiLCBcInRhcmdldHNcIjogMCB9LFxyXG4gICAgICAgICAgeyBcIndpZHRoXCI6IFwiNSVcIiwgXCJ0YXJnZXRzXCI6IDEgfSxcclxuICAgICAgICAgIHsgXCJ3aWR0aFwiOiBcIjEwJVwiLFwidGFyZ2V0c1wiOiAyIH0sXHJcbiAgICAgICAgICB7IFwid2lkdGhcIjogXCIwJVwiLFwidGFyZ2V0c1wiOiAzIH0sXHJcbiAgICAgICAgICB7IFwid2lkdGhcIjogXCI3JVwiLFwidGFyZ2V0c1wiOiA0IH0sXHJcbiAgICAgICAgICB7IFwid2lkdGhcIjogXCIxNiVcIixcInRhcmdldHNcIjogNSB9LFxyXG4gICAgICAgICAgeyBcIndpZHRoXCI6IFwiMTIlXCIsXCJ0YXJnZXRzXCI6IDYgfSxcclxuICAgICAgICAgIHsgXCJ3aWR0aFwiOiBcIjYlXCIsXCJ0YXJnZXRzXCI6IDcgfSxcclxuICAgICAgICAgIHsgXCJ3aWR0aFwiOiBcIjEyJVwiLFwidGFyZ2V0c1wiOiA4IH0sXHJcbiAgICAgICAgICB7IFwid2lkdGhcIjogXCIxMiVcIixcInRhcmdldHNcIjogOSB9LFxyXG4gICAgICAgICAgeyBcIndpZHRoXCI6IFwiNSVcIixcInRhcmdldHNcIjogMTAgfSxcclxuICAgICAgICAgIHsgXCJ3aWR0aFwiOiBcIjIwJVwiLFwidGFyZ2V0c1wiOiAxMSB9LFxyXG4gICAgICAgIF1cclxuICAgICAgfSk7XHJcbiAgICAgICAgXHJcbn0pIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy91c2VyLXJvbGVzL3VzZXItcm9sZXMuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/user-roles/user-roles.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/user-roles/user-roles.js"]();
/******/ 	
/******/ })()
;