/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'mm-iconfont\'">' + entity + '</span>' + html;
	}
	var icons = {
			'mm-icon-github' : '&#xe000;',
			'mm-icon-flickr' : '&#xe001;',
			'mm-icon-vimeo' : '&#xe002;',
			'mm-icon-twitter' : '&#xe003;',
			'mm-icon-facebook' : '&#xe004;',
			'mm-icon-googleplus' : '&#xe005;',
			'mm-icon-pinterest' : '&#xe006;',
			'mm-icon-tumblr' : '&#xe007;',
			'mm-icon-linkedin' : '&#xe008;',
			'mm-icon-dribbble' : '&#xe009;',
			'mm-icon-stumbleupon' : '&#xe00a;',
			'mm-icon-lastfm' : '&#xe00b;',
			'mm-icon-rdio' : '&#xe00c;',
			'mm-icon-spotify' : '&#xe00d;',
			'mm-icon-instagram' : '&#xe00e;',
			'mm-icon-skype' : '&#xe00f;',
			'mm-icon-paypal' : '&#xe010;',
			'mm-icon-picasa' : '&#xe011;',
			'mm-icon-soundcloud' : '&#xe012;',
			'mm-icon-behance' : '&#xe013;',
			'mm-icon-circles' : '&#xe014;',
			'mm-icon-vk' : '&#xe015;',
			'mm-icon-arrow-right' : '&#xe016;',
			'mm-icon-arrow-right-2' : '&#xe017;',
			'mm-icon-untitled' : '&#xe018;',
			'mm-icon-dot' : '&#xe019;',
			'mm-icon-arrow-right-3' : '&#xe01a;',
			'mm-icon-reddit' : '&#xe01b;',
			'mm-icon-github-2' : '&#xe01c;',
			'mm-icon-wordpress' : '&#xe01d;',
			'mm-icon-youtube' : '&#xe01e;',
			'mm-icon-youtube-2' : '&#xe01f;',
			'mm-icon-feed' : '&#xe020;',
			'mm-icon-forrst' : '&#xe021;',
			'mm-icon-apple' : '&#xe022;',
			'mm-icon-android' : '&#xe023;',
			'mm-icon-windows8' : '&#xe024;',
			'mm-icon-stackoverflow' : '&#xe025;',
			'mm-icon-phone' : '&#xe026;',
			'mm-icon-mobile' : '&#xe027;',
			'mm-icon-directions' : '&#xe028;',
			'mm-icon-mail' : '&#xe029;',
			'mm-icon-paperplane' : '&#xe02a;',
			'mm-icon-feather' : '&#xe02b;',
			'mm-icon-paperclip' : '&#xe02c;',
			'mm-icon-user' : '&#xe02d;',
			'mm-icon-users' : '&#xe02e;',
			'mm-icon-vcard' : '&#xe02f;',
			'mm-icon-location' : '&#xe030;',
			'mm-icon-map' : '&#xe031;',
			'mm-icon-compass' : '&#xe032;',
			'mm-icon-location-2' : '&#xe033;',
			'mm-icon-target' : '&#xe034;',
			'mm-icon-share' : '&#xe035;',
			'mm-icon-sharable' : '&#xe036;',
			'mm-icon-heart' : '&#xe037;',
			'mm-icon-heart-2' : '&#xe038;',
			'mm-icon-star' : '&#xe039;',
			'mm-icon-star-2' : '&#xe03a;',
			'mm-icon-thumbs-up' : '&#xe03b;',
			'mm-icon-chat' : '&#xe03c;',
			'mm-icon-comment' : '&#xe03d;',
			'mm-icon-house' : '&#xe03e;',
			'mm-icon-popup' : '&#xe03f;',
			'mm-icon-search' : '&#xe040;',
			'mm-icon-link' : '&#xe041;',
			'mm-icon-cog' : '&#xe042;',
			'mm-icon-tools' : '&#xe043;',
			'mm-icon-camera' : '&#xe044;',
			'mm-icon-megaphone' : '&#xe045;',
			'mm-icon-tag' : '&#xe046;',
			'mm-icon-leaf' : '&#xe047;',
			'mm-icon-palette' : '&#xe048;',
			'mm-icon-music' : '&#xe049;',
			'mm-icon-new' : '&#xe04a;',
			'mm-icon-graduation' : '&#xe04b;',
			'mm-icon-book' : '&#xe04c;',
			'mm-icon-newspaper' : '&#xe04d;',
			'mm-icon-bag' : '&#xe04e;',
			'mm-icon-lifebuoy' : '&#xe04f;',
			'mm-icon-clock' : '&#xe050;',
			'mm-icon-microphone' : '&#xe051;',
			'mm-icon-calendar' : '&#xe052;',
			'mm-icon-bolt' : '&#xe053;',
			'mm-icon-briefcase' : '&#xe054;',
			'mm-icon-gauge' : '&#xe055;',
			'mm-icon-language' : '&#xe056;',
			'mm-icon-network' : '&#xe057;',
			'mm-icon-key' : '&#xe058;',
			'mm-icon-drive' : '&#xe059;',
			'mm-icon-rocket' : '&#xe05a;',
			'mm-icon-cone' : '&#xe05b;',
			'mm-icon-suitcase' : '&#xe05c;',
			'mm-icon-earth' : '&#xe05d;',
			'mm-icon-keyboard' : '&#xe05e;',
			'mm-icon-code' : '&#xe05f;',
			'mm-icon-screen' : '&#xe060;',
			'mm-icon-credit-card' : '&#xe061;',
			'mm-icon-database' : '&#xe062;',
			'mm-icon-light-bulb' : '&#xe063;',
			'mm-icon-cart' : '&#xe064;',
			'mm-icon-ticket' : '&#xe065;',
			'mm-icon-rss' : '&#xe066;',
			'mm-icon-signal' : '&#xe067;',
			'mm-icon-untitled-2' : '&#xe068;',
			'mm-icon-statistics' : '&#xe069;',
			'mm-icon-pie' : '&#xe06a;',
			'mm-icon-bars' : '&#xe06b;',
			'mm-icon-graph' : '&#xe06c;',
			'mm-icon-lock' : '&#xe06d;',
			'mm-icon-lock-open' : '&#xe06e;',
			'mm-icon-logout' : '&#xe06f;',
			'mm-icon-login' : '&#xe070;',
			'mm-icon-cross' : '&#xe071;',
			'mm-icon-info' : '&#xe072;',
			'mm-icon-info-2' : '&#xe073;',
			'mm-icon-question' : '&#xe074;',
			'mm-icon-help' : '&#xe075;',
			'mm-icon-warning' : '&#xe076;',
			'mm-icon-layout' : '&#xe077;',
			'mm-icon-list' : '&#xe078;',
			'mm-icon-pictures' : '&#xe079;',
			'mm-icon-landscape' : '&#xe07a;',
			'mm-icon-folder' : '&#xe07b;',
			'mm-icon-archive' : '&#xe07c;',
			'mm-icon-install' : '&#xe07d;',
			'mm-icon-cloud' : '&#xe07e;',
			'mm-icon-bookmark' : '&#xe07f;',
			'mm-icon-bookmarks' : '&#xe080;',
			'mm-icon-quill' : '&#xe081;',
			'mm-icon-play' : '&#xe082;',
			'mm-icon-podcast' : '&#xe083;',
			'mm-icon-credit' : '&#xe084;',
			'mm-icon-coin' : '&#xe085;',
			'mm-icon-cart-2' : '&#xe086;',
			'mm-icon-stack' : '&#xe087;',
			'mm-icon-bubbles' : '&#xe088;',
			'mm-icon-bubbles-2' : '&#xe089;',
			'mm-icon-dashboard' : '&#xe08a;',
			'mm-icon-fire' : '&#xe08b;',
			'mm-icon-checkmark' : '&#xe08c;',
			'mm-icon-close' : '&#xe08d;',
			'mm-icon-checkmark-2' : '&#xe08e;',
			'mm-icon-enter' : '&#xe08f;',
			'mm-icon-exit' : '&#xe090;',
			'mm-icon-table' : '&#xe091;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/mm-icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};