if (typeof FluxBB === 'undefined' || !FluxBB) {var FluxBB = {};}

FluxBB.collapse = (function () {
	'use strict';

	function get(e) {
		return document.getElementById(e);
	}
	
	function getCN(classname, node) {
		node = node || document;
		if (node.querySelectorAll)
		{
			return node.querySelectorAll('.' + classname);
		}
		else if (node.getElementsByClassName)
		{
			return node.getElementsByClassName(classname);
		}
		else
		{
			var list = node.all || node.getElementsByTagName('*');
			var result = [];
			for (var index = 0, elem; elem = list[index++];)
			{
				if (elem.className && (' ' + elem.className + ' ').indexOf(' ' + classname + ' ') > -1)
				{
					result[result.length] = elem;
				}
			}
			return result;
		}
	}

	function setCookie(name, value, expires, path, domain, secure) {
		if (!name) return false;
		var str = FluxBB.vars.collapse_cookieid + name + '=' + encodeURIComponent(value);

		if (expires) str += '; expires=' + expires.toGMTString();
		if (path)    str += '; path=' + path;
		if (domain)  str += '; domain=' + domain;
		if (secure)  str += '; secure';

		document.cookie = str;
		return true;
	}

	function getCookie(name) {
		var pattern = "(?:; )?" + FluxBB.vars.collapse_cookieid + name + "=([^;]*);?";
		var regexp  = new RegExp(pattern);

		if (regexp.test(document.cookie))
		return decodeURIComponent(RegExp["$1"]);

		return false;
	}

	return {
		init: function () {
			var i, tmp, saved = [],
					brdmain = get('brdmain'),
					blocktables = getCN('blocktable', brdmain);
			for (i in blocktables) {
				if (blocktables[i].id) {
					var id = blocktables[i].id.replace('idx', '');
					if (FluxBB.vars.collapse_old == '1') {
						var h2 = blocktables[i].getElementsByTagName('h2')[0];
						h2.innerHTML = '<span class="conr"><img src="' + FluxBB.vars.collapse_folder + 'exp_up.png" onclick="FluxBB.collapse.toggle(' + id + ')" alt="-" id="collapse_img_' + id + '" /></span>' + h2.innerHTML;
						getCN('box', blocktables[i])[0].setAttribute('id', 'collapse_box_' + id);
					} else {
						blocktables[i].getElementsByTagName('tbody')[0].setAttribute('id', 'collapse_box_' + id);
						var ths = blocktables[i].getElementsByTagName('thead')[0].getElementsByTagName('th'), th = ths[ths.length-1];
						th.innerHTML+= '<span class="conr"><img src="' + FluxBB.vars.collapse_folder + 'exp_up.png" onclick="FluxBB.collapse.toggle(' + id + ')" alt="-" id="collapse_img_' + id + '" /></span>';
					}
				}
			}
			
			if (tmp = getCookie('collaps')) {
				saved = tmp.split(",");

				for(i = 0 ; i < saved.length; i++) {
					FluxBB.collapse.toggle(saved[i]);
				}
			}

		},
		
		toggle: function (id) {
			var saved = [], clean = [], i, tmp;

			if (tmp = getCookie('collaps')) {
				saved = tmp.split(",");

				for(i = 0 ; i < saved.length; i++) {
					if (saved[i] != id && saved[i] != "") {
						clean[clean.length] = saved[i];
					}
				}
			}

			if (get('collapse_box_'+id).style.display == "")
			{
				clean[clean.length] = id;
				get('collapse_box_'+id).style.display = "none";
				get('collapse_img_'+id).src = get('collapse_img_'+id).src.replace('up','down');
				get('collapse_img_'+id).setAttribute('alt', '+');

			}
			else
			{
				get('collapse_box_'+id).style.display = "";
				get('collapse_img_'+id).src = get('collapse_img_'+id).src.replace('down','up');
				get('collapse_img_'+id).setAttribute('alt', '-');
			}

			if (clean.length == 0) {
      	setCookie('collaps', null, new Date(0));
      } else {
				setCookie('collaps', clean.join(","), new Date("January 01, 2020 12:00:00"));
			}
		}
	};
}());