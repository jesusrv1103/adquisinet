"use strict";
var defaults = {
	"language": {
		"paginate": {
			"first": '<i class="la la-angle-double-left"></i>',
			"last": '<i class="la la-angle-double-right"></i>',
			"next": '<i class="la icon-policeangle-right"></i>',
			"previous": '<i class="la icon-policeangle-left"></i>'
		}
	}
};

if (KTUtil.isRTL()) {
	defaults = {
		"language": {
			"paginate": {
				"first": '<i class="la la-angle-double-right"></i>',
				"last": '<i class="la la-angle-double-left"></i>',
				"next": '<i class="la icon-policeangle-left"></i>',
				"previous": '<i class="la icon-policeangle-right"></i>'
			}
		}
	}
}

$.extend(true, $.fn.dataTable.defaults, defaults);

// fix dropdown overflow inside datatable
KTApp.initAbsoluteDropdown('.dataTables_wrapper');